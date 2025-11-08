<?php
/**
 * Coupon URL functionality for Lead Academy
 * Handles URL-based coupon application and price modifications
 * 
 * USAGE:
 * 1. Create a WooCommerce coupon in admin (Marketing > Coupons)
 * 2. Add ?coupon=COUPONCODE to any course URL
 * 3. The system will automatically:
 *    - Apply the coupon discount to displayed prices
 *    - Show coupon notice on the page
 *    - Apply coupon to cart when "Book Now" is clicked
 *    - Update $la_phleb_course_sell_price variable with discounted price
 * 
 * EXAMPLES:
 * - https://yoursite.com/course-name/?coupon=SAVE20
 * - https://yoursite.com/phlebotomy-training/?coupon=NEWSTUDENT
 * 
 * FUNCTIONS AVAILABLE:
 * - la_has_active_coupon() - Check if coupon is active
 * - la_get_current_coupon_code() - Get current coupon code
 * - la_get_coupon_discount_percentage($product_id) - Get discount percentage
 * - la_display_coupon_notice() - Display coupon notice HTML
 * - [coupon_notice] shortcode - Display coupon notice via shortcode
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Initialize coupon URL functionality
 */
function la_init_coupon_url() {
    // Check for coupon in URL after WooCommerce is loaded
    add_action('wp', 'la_check_coupon_url');
    
    // Apply coupon discount to product prices
    add_filter('woocommerce_product_get_price', 'la_apply_coupon_to_price', 10, 2);
    add_filter('woocommerce_product_get_sale_price', 'la_apply_coupon_to_sale_price', 10, 2);
    add_filter('woocommerce_product_variation_get_price', 'la_apply_coupon_to_price', 10, 2);
    add_filter('woocommerce_product_variation_get_sale_price', 'la_apply_coupon_to_sale_price', 10, 2);
    
    // Store coupon in session for cart application
    add_action('woocommerce_cart_loaded_from_session', 'la_apply_session_coupon_to_cart');
}
add_action('woocommerce_loaded', 'la_init_coupon_url');

/**
 * Check for coupon code in URL parameters
 */
function la_check_coupon_url() {
    if (!WC()->session) {
        return;
    }
    
    if (isset($_GET['coupon'])) {
        $coupon_code = sanitize_text_field($_GET['coupon']);

        if ($coupon_code === '') {
            // Treat an explicit empty coupon as a request to clear the stored coupon
            WC()->session->set('url_coupon_code', '');
            WC()->session->set('url_coupon_data', null);
            error_log('Empty coupon parameter detected, cleared session coupon data');
            return;
        }

        // Validate coupon exists and is active
        $coupon = new WC_Coupon($coupon_code);
        if ($coupon->is_valid()) {
            // Store coupon in session only if valid
            WC()->session->set('url_coupon_code', $coupon_code);

            // Store coupon data for price calculations
            WC()->session->set('url_coupon_data', array(
                'code' => $coupon_code,
                'discount_type' => $coupon->get_discount_type(),
                'amount' => $coupon->get_amount(),
                'product_ids' => $coupon->get_product_ids(),
                'product_categories' => $coupon->get_product_categories(),
                'exclude_product_ids' => $coupon->get_excluded_product_ids(),
                'exclude_product_categories' => $coupon->get_excluded_product_categories(),
            ));

            // Debug output
            error_log('Valid coupon applied: ' . $coupon_code . ' - Discount: ' . $coupon->get_amount() . ' - Type: ' . $coupon->get_discount_type());
            error_log('Coupon stored in session - URL: ' . $coupon_code . ' - Session: ' . WC()->session->get('url_coupon_code'));
        } else {
            // Clear any existing coupon data for invalid coupons
            WC()->session->set('url_coupon_code', '');
            WC()->session->set('url_coupon_data', null);
            error_log('Invalid coupon, cleared session: ' . $coupon_code);
        }
    }
}

/**
 * Apply coupon discount to product price display
 */
function la_apply_coupon_to_price($price, $product) {
    if (is_admin() || !WC()->session || !$price) {
        return $price;
    }
    
    $coupon_data = WC()->session->get('url_coupon_data');
    if (!$coupon_data || !la_has_active_coupon()) {
        return $price;
    }
    
    // Check if product is eligible for coupon
    if (!la_is_product_eligible_for_coupon($product, $coupon_data)) {
        return $price;
    }
    
    $discounted_price = la_calculate_discounted_price($price, $coupon_data);
    
    // Debug log
    error_log('Price filter applied: ' . $price . ' -> ' . $discounted_price . ' for product ' . $product->get_id());
    
    return $discounted_price;
}

/**
 * Apply coupon discount to sale price display
 */
function la_apply_coupon_to_sale_price($sale_price, $product) {
    if (is_admin() || !WC()->session) {
        return $sale_price;
    }
    
    $coupon_data = WC()->session->get('url_coupon_data');
    if (!$coupon_data || !la_has_active_coupon()) {
        return $sale_price;
    }
    
    // Check if product is eligible for coupon
    if (!la_is_product_eligible_for_coupon($product, $coupon_data)) {
        return $sale_price;
    }
    
    $price_to_discount = $sale_price ? $sale_price : $product->get_regular_price();
    return la_calculate_discounted_price($price_to_discount, $coupon_data);
}

/**
 * Check if product is eligible for coupon
 */
function la_is_product_eligible_for_coupon($product, $coupon_data) {
    $product_id = $product->get_id();
    $parent_id = $product->get_parent_id();
    
    // Check excluded products
    if (in_array($product_id, $coupon_data['exclude_product_ids']) || 
        in_array($parent_id, $coupon_data['exclude_product_ids'])) {
        return false;
    }
    
    // Check specific products (if set, only these products are eligible)
    if (!empty($coupon_data['product_ids'])) {
        if (!in_array($product_id, $coupon_data['product_ids']) && 
            !in_array($parent_id, $coupon_data['product_ids'])) {
            return false;
        }
    }
    
    // Check product categories
    if (!empty($coupon_data['product_categories'])) {
        $product_cats = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'ids'));
        if ($parent_id) {
            $parent_cats = wp_get_post_terms($parent_id, 'product_cat', array('fields' => 'ids'));
            $product_cats = array_merge($product_cats, $parent_cats);
        }
        
        if (!array_intersect($product_cats, $coupon_data['product_categories'])) {
            return false;
        }
    }
    
    // Check excluded categories
    if (!empty($coupon_data['exclude_product_categories'])) {
        $product_cats = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'ids'));
        if ($parent_id) {
            $parent_cats = wp_get_post_terms($parent_id, 'product_cat', array('fields' => 'ids'));
            $product_cats = array_merge($product_cats, $parent_cats);
        }
        
        if (array_intersect($product_cats, $coupon_data['exclude_product_categories'])) {
            return false;
        }
    }
    
    return true;
}

/**
 * Calculate discounted price based on coupon data
 */
function la_calculate_discounted_price($price, $coupon_data) {
    if (!$price || $price <= 0) {
        return $price;
    }
    
    switch ($coupon_data['discount_type']) {
        case 'percent':
            return $price - ($price * ($coupon_data['amount'] / 100));
            
        case 'fixed_cart':
        case 'fixed_product':
            return max(0, $price - $coupon_data['amount']);
            
        default:
            return $price;
    }
}

/**
 * Apply session coupon to cart automatically
 */
function la_apply_session_coupon_to_cart() {
    if (!WC()->session || is_admin() || !WC()->cart) {
        return;
    }

    $coupon_code = WC()->session->get('url_coupon_code');
    if ($coupon_code && !WC()->cart->has_discount($coupon_code)) {
        // Validate coupon before applying
        $coupon = new WC_Coupon($coupon_code);
        if ($coupon->is_valid()) {
            $result = WC()->cart->apply_coupon($coupon_code);
            if ($result) {
                error_log('Coupon applied to cart automatically: ' . $coupon_code);
            } else {
                error_log('Failed to apply coupon to cart: ' . $coupon_code);
                // Get error messages
                $notices = wc_get_notices('error');
                error_log('Coupon errors: ' . print_r($notices, true));
            }
        } else {
            error_log('Invalid coupon for auto-apply: ' . $coupon_code);
        }
    }
}

/**
 * Clear stored URL coupon data when customer manually removes the coupon.
 */
function la_handle_removed_coupon($removed_coupon_code) {
    if (!WC()->session) {
        return;
    }

    $stored_coupon = WC()->session->get('url_coupon_code');
    if ($stored_coupon && strcasecmp($stored_coupon, $removed_coupon_code) === 0) {
        WC()->session->set('url_coupon_code', '');
        WC()->session->set('url_coupon_data', null);
        error_log('Coupon removed manually, cleared stored URL coupon: ' . $removed_coupon_code);
    }
}
add_action('woocommerce_removed_coupon', 'la_handle_removed_coupon');


/**
 * Apply coupon when cart page is loaded - Enhanced version
 */
function la_apply_coupon_on_cart_page() {
    if (!is_cart() || !WC()->cart) {
        return;
    }
    
    $coupon_code = '';
    
    // Check for coupon_code parameter (from Book Now buttons)
    if (isset($_GET['coupon_code']) && !empty($_GET['coupon_code'])) {
        $coupon_code = sanitize_text_field($_GET['coupon_code']);
        error_log('Cart page - Found coupon_code parameter: ' . $coupon_code);
    }
    // Fallback to coupon parameter
    elseif (isset($_GET['coupon']) && !empty($_GET['coupon'])) {
        $coupon_code = sanitize_text_field($_GET['coupon']);
        error_log('Cart page - Found coupon parameter: ' . $coupon_code);
    }
    // Check session as fallback
    elseif (WC()->session && WC()->session->get('url_coupon_code')) {
        $coupon_code = WC()->session->get('url_coupon_code');
        error_log('Cart page - Found coupon in session: ' . $coupon_code);
    }
    
    if ($coupon_code && !WC()->cart->has_discount($coupon_code)) {
        $coupon = new WC_Coupon($coupon_code);
        if ($coupon->is_valid()) {
            $result = WC()->cart->apply_coupon($coupon_code);
            if ($result) {
                wc_add_notice('Coupon "' . $coupon_code . '" applied successfully!', 'success');
                error_log('Coupon applied on cart page: ' . $coupon_code);
                
                // Store in session for future reference
                if (WC()->session) {
                    WC()->session->set('applied_coupon_code', $coupon_code);
                }
            } else {
                error_log('Failed to apply coupon on cart page: ' . $coupon_code);
                $notices = wc_get_notices('error');
                error_log('Cart coupon errors: ' . print_r($notices, true));
            }
        } else {
            error_log('Invalid coupon on cart page: ' . $coupon_code);
            wc_add_notice('Coupon "' . $coupon_code . '" is not valid.', 'error');
        }
    }
}
add_action('wp', 'la_apply_coupon_on_cart_page', 5);

/**
 * Enhanced cart loaded handler
 */
function la_enhanced_cart_coupon_handler() {
    if (!is_cart() || !WC()->cart) {
        return;
    }
    
    // Get coupon from multiple sources
    $coupon_code = '';
    
    if (isset($_GET['coupon_code']) && !empty($_GET['coupon_code'])) {
        $coupon_code = sanitize_text_field($_GET['coupon_code']);
    } elseif (isset($_GET['coupon']) && !empty($_GET['coupon'])) {
        $coupon_code = sanitize_text_field($_GET['coupon']);
    } elseif (WC()->session && WC()->session->get('url_coupon_code')) {
        $coupon_code = WC()->session->get('url_coupon_code');
    }
    
    if ($coupon_code && !WC()->cart->has_discount($coupon_code)) {
        // Force apply the coupon
        $coupon = new WC_Coupon($coupon_code);
        if ($coupon->is_valid()) {
            // Clear any error notices first
            wc_clear_notices();
            
            // Apply the coupon
            $applied = WC()->cart->apply_coupon($coupon_code);
            
            if ($applied) {
                error_log('Enhanced handler: Coupon applied successfully - ' . $coupon_code);
                wc_add_notice('Discount applied: ' . $coupon_code, 'success');
            } else {
                error_log('Enhanced handler: Failed to apply coupon - ' . $coupon_code);
            }
        }
    }
}
add_action('woocommerce_cart_loaded_from_session', 'la_enhanced_cart_coupon_handler', 20);
add_action('woocommerce_before_cart', 'la_enhanced_cart_coupon_handler', 5);

/**
 * AJAX handler for applying coupon and adding to cart
 */
function la_apply_coupon_and_add_to_cart() {
    // Log the AJAX call
    error_log('AJAX Handler Called: la_apply_coupon_and_add_to_cart');
    error_log('POST Data: ' . print_r($_POST, true));
    
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'coupon_add_to_cart_nonce')) {
        error_log('Nonce verification failed');
        wp_send_json_error('Security check failed');
        return;
    }
    
    $product_id = intval($_POST['product_id']);
    $variation_id = intval($_POST['variation_id']);
    $quantity = intval($_POST['quantity']) ?: 1;
    
    if (!$product_id) {
        wp_send_json_error('Invalid product ID');
        return;
    }
    
    // Initialize WooCommerce components
    if (!class_exists('WooCommerce')) {
        wp_send_json_error('WooCommerce not available');
        return;
    }
    
    // Initialize WooCommerce session and cart
    if (!WC()->session) {
        $session_class = apply_filters('woocommerce_session_handler', 'WC_Session_Handler');
        WC()->session = new $session_class();
        WC()->session->init();
    }
    
    if (!WC()->cart) {
        WC()->cart = new WC_Cart();
    }
    
    if (!WC()->customer) {
        WC()->customer = new WC_Customer(get_current_user_id(), true);
    }
    
    // Add product to cart
    $cart_item_key = WC()->cart->add_to_cart($product_id, $quantity, $variation_id);
    
    if (!$cart_item_key) {
        wp_send_json_error('Failed to add product to cart');
        return;
    }
    
    // Get coupon code from multiple sources
    $coupon_code = '';
    
    // First try from AJAX data
    if (isset($_POST['coupon_code']) && !empty($_POST['coupon_code'])) {
        $coupon_code = sanitize_text_field($_POST['coupon_code']);
        error_log('Got coupon from AJAX data: ' . $coupon_code);
    }
    
    // Fallback to session
    if (!$coupon_code && WC()->session) {
        $coupon_code = WC()->session->get('url_coupon_code');
        error_log('Got coupon from session: ' . $coupon_code);
    }
    
    // Last fallback to URL
    if (!$coupon_code && isset($_GET['coupon'])) {
        $coupon_code = sanitize_text_field($_GET['coupon']);
        error_log('Got coupon from URL: ' . $coupon_code);
    }
    
    $coupon_applied = false;
    
    // Debug session data
    error_log('Final coupon code: ' . $coupon_code);
    error_log('Cart has discount: ' . ($coupon_code && WC()->cart->has_discount($coupon_code) ? 'yes' : 'no'));
    
    // Store coupon in session if we have one
    if ($coupon_code && WC()->session) {
        WC()->session->set('url_coupon_code', $coupon_code);
    }
    
    // Apply coupon if available
    if ($coupon_code && !WC()->cart->has_discount($coupon_code)) {
        // Validate coupon before applying
        $coupon = new WC_Coupon($coupon_code);
        if ($coupon->is_valid()) {
            $coupon_applied = WC()->cart->apply_coupon($coupon_code);
            error_log('Coupon application result: ' . ($coupon_applied ? 'success' : 'failed') . ' for code: ' . $coupon_code);
            
            if (!$coupon_applied) {
                // Get error messages
                $notices = wc_get_notices('error');
                error_log('Coupon application errors: ' . print_r($notices, true));
            }
        } else {
            error_log('Invalid coupon: ' . $coupon_code);
        }
    } elseif ($coupon_code && WC()->cart->has_discount($coupon_code)) {
        $coupon_applied = true;
        error_log('Coupon already applied: ' . $coupon_code);
    }
    
    wp_send_json_success(array(
        'message' => 'Product added to cart' . ($coupon_applied ? ' with coupon applied' : ''),
        'cart_url' => wc_get_cart_url(),
        'coupon_applied' => $coupon_applied,
        'coupon_code' => $coupon_code,
        'debug' => array(
            'product_id' => $product_id,
            'variation_id' => $variation_id,
            'cart_item_key' => $cart_item_key,
            'session_coupon' => $coupon_code
        )
    ));
}

// Make sure AJAX handlers are registered
add_action('wp_ajax_apply_coupon_and_add_to_cart', 'la_apply_coupon_and_add_to_cart');
add_action('wp_ajax_nopriv_apply_coupon_and_add_to_cart', 'la_apply_coupon_and_add_to_cart');

/**
 * Test AJAX handler to verify AJAX is working
 */
function la_test_ajax_handler() {
    wp_send_json_success('AJAX is working!');
}
add_action('wp_ajax_test_coupon_ajax', 'la_test_ajax_handler');
add_action('wp_ajax_nopriv_test_coupon_ajax', 'la_test_ajax_handler');

/**
 * Debug AJAX handler to check coupon status
 */
function la_debug_coupon_status() {
    $debug_info = array(
        'session_available' => WC()->session ? 'yes' : 'no',
        'session_coupon' => WC()->session ? WC()->session->get('url_coupon_code') : 'no session',
        'url_coupon' => isset($_GET['coupon']) ? $_GET['coupon'] : 'none',
        'post_coupon' => isset($_POST['coupon_code']) ? $_POST['coupon_code'] : 'none',
        'cart_available' => WC()->cart ? 'yes' : 'no',
        'user_id' => get_current_user_id()
    );
    
    wp_send_json_success($debug_info);
}
add_action('wp_ajax_debug_coupon_status', 'la_debug_coupon_status');
add_action('wp_ajax_nopriv_debug_coupon_status', 'la_debug_coupon_status');

/**
 * Comprehensive coupon debug handler
 */
function la_comprehensive_coupon_debug() {
    $debug_info = array(
        'url_coupon' => isset($_GET['coupon']) ? $_GET['coupon'] : 'none',
        'session_available' => WC()->session ? 'yes' : 'no',
        'session_coupon' => WC()->session ? WC()->session->get('url_coupon_code') : 'no session',
        'session_coupon_data' => WC()->session ? WC()->session->get('url_coupon_data') : 'no session',
        'has_active_coupon' => la_has_active_coupon() ? 'yes' : 'no',
        'current_coupon_code' => la_get_current_coupon_code(),
        'is_product_page' => is_product() ? 'yes' : 'no',
        'product_id' => is_product() ? get_the_ID() : 0,
        'cart_available' => WC()->cart ? 'yes' : 'no',
        'user_id' => get_current_user_id()
    );
    
    // If we have a coupon, get detailed info
    if (la_has_active_coupon() && WC()->session) {
        $coupon_data = WC()->session->get('url_coupon_data');
        if ($coupon_data) {
            $debug_info['coupon_details'] = array(
                'code' => $coupon_data['code'],
                'discount_type' => $coupon_data['discount_type'],
                'amount' => $coupon_data['amount'],
                'product_ids' => $coupon_data['product_ids'],
                'product_categories' => $coupon_data['product_categories']
            );
            
            // Test product eligibility if on product page
            if (is_product()) {
                $product = wc_get_product(get_the_ID());
                $debug_info['product_eligible'] = la_is_product_eligible_for_coupon($product, $coupon_data) ? 'yes' : 'no';
                $debug_info['discount_percentage'] = la_get_coupon_discount_percentage(get_the_ID());
                
                // Test price calculation
                $original_price = $product->get_price();
                $discounted_price = la_calculate_discounted_price($original_price, $coupon_data);
                $debug_info['price_test'] = array(
                    'original' => $original_price,
                    'discounted' => $discounted_price,
                    'difference' => $original_price - $discounted_price
                );
            }
        }
    }
    
    wp_send_json_success($debug_info);
}
add_action('wp_ajax_comprehensive_coupon_debug', 'la_comprehensive_coupon_debug');
add_action('wp_ajax_nopriv_comprehensive_coupon_debug', 'la_comprehensive_coupon_debug');

/**
 * Real-time coupon status check
 */
function la_realtime_coupon_status() {
    $debug_info = array(
        'timestamp' => current_time('mysql'),
        'url_coupon' => isset($_GET['coupon']) ? $_GET['coupon'] : 'none',
        'post_coupon' => isset($_POST['coupon']) ? $_POST['coupon'] : 'none',
        'session_available' => WC()->session ? 'yes' : 'no',
        'cart_available' => WC()->cart ? 'yes' : 'no',
        'is_cart_page' => is_cart() ? 'yes' : 'no',
        'is_product_page' => is_product() ? 'yes' : 'no',
        'current_url' => $_SERVER['REQUEST_URI'],
        'applied_coupons' => WC()->cart ? WC()->cart->get_applied_coupons() : array(),
        'cart_contents_count' => WC()->cart ? WC()->cart->get_cart_contents_count() : 0
    );
    
    if (WC()->session) {
        $debug_info['session_coupon'] = WC()->session->get('url_coupon_code');
        $debug_info['session_coupon_data'] = WC()->session->get('url_coupon_data');
        $debug_info['session_id'] = WC()->session->get_customer_id();
    }
    
    if (is_product()) {
        $debug_info['product_id'] = get_the_ID();
        $debug_info['has_active_coupon'] = la_has_active_coupon() ? 'yes' : 'no';
        $debug_info['current_coupon_code'] = la_get_current_coupon_code();
    }
    
    wp_send_json_success($debug_info);
}
add_action('wp_ajax_realtime_coupon_status', 'la_realtime_coupon_status');
add_action('wp_ajax_nopriv_realtime_coupon_status', 'la_realtime_coupon_status');

/**
 * Simple add to cart without coupon for testing
 */
function la_simple_add_to_cart() {
    $product_id = intval($_POST['product_id']);
    $variation_id = intval($_POST['variation_id']);
    $quantity = intval($_POST['quantity']) ?: 1;
    
    if (!$product_id) {
        wp_send_json_error('Invalid product ID');
        return;
    }
    
    // Initialize WooCommerce components
    if (!WC()->cart) {
        wc_load_cart();
    }
    
    // Add product to cart
    $cart_item_key = WC()->cart->add_to_cart($product_id, $quantity, $variation_id);
    
    if (!$cart_item_key) {
        wp_send_json_error('Failed to add product to cart');
        return;
    }
    
    wp_send_json_success(array(
        'message' => 'Product added to cart successfully',
        'cart_url' => wc_get_cart_url(),
        'cart_item_key' => $cart_item_key
    ));
}
add_action('wp_ajax_simple_add_to_cart', 'la_simple_add_to_cart');
add_action('wp_ajax_nopriv_simple_add_to_cart', 'la_simple_add_to_cart');

/**
 * Get current coupon discount percentage for display
 * Returns percentage for percent coupons, or calculated percentage for fixed amount coupons
 */
function la_get_coupon_discount_percentage($product_id = null) {
    if (!WC()->session) {
        return 0;
    }
    
    $coupon_data = WC()->session->get('url_coupon_data');
    if (!$coupon_data) {
        return 0;
    }
    
    if ($product_id) {
        $product = wc_get_product($product_id);
        if (!la_is_product_eligible_for_coupon($product, $coupon_data)) {
            return 0;
        }
    }
    
    if ($coupon_data['discount_type'] === 'percent') {
        return $coupon_data['amount'];
    }
    
    // For fixed amount coupons, calculate percentage based on product price
    if (($coupon_data['discount_type'] === 'fixed_product' || $coupon_data['discount_type'] === 'fixed_cart') && $product_id) {
        $product = wc_get_product($product_id);
        if ($product) {
            $price = $product->get_price();
            if ($price > 0) {
                return min(100, round(($coupon_data['amount'] / $price) * 100));
            }
        }
    }
    
    return 0;
}

/**
 * Get current coupon code
 */
function la_get_current_coupon_code() {
    if (!WC()->session) {
        return '';
    }
    
    $coupon_code = WC()->session->get('url_coupon_code', '');
    error_log('Getting current coupon code from session: ' . $coupon_code);
    return $coupon_code;
}

/**
 * Check if coupon is currently active
 */
function la_has_active_coupon() {
    return !empty(la_get_current_coupon_code());
}

/**
 * Display coupon notice on course pages
 */
function la_display_coupon_notice($product = null) {
    if (!la_has_active_coupon()) {
        return '';
    }
    
    $coupon_code = la_get_current_coupon_code();
    $coupon_data = WC()->session->get('url_coupon_data');
    
    if (!$coupon_data) {
        return '';
    }
    
    // If product is provided, validate eligibility
    if ($product && !la_is_product_eligible_for_coupon($product, $coupon_data)) {
        return '';
    }
    
    $discount_text = '';
    if ($coupon_data['discount_type'] === 'percent') {
        $discount_text = $coupon_data['amount'] . '% OFF';
    } elseif ($coupon_data['discount_type'] === 'fixed_product' || $coupon_data['discount_type'] === 'fixed_cart') {
        $discount_text = '£' . $coupon_data['amount'] . ' OFF';
    }
    
    if ($discount_text) {
        return '<div class="coupon-active-notice" style="background: #28a745; color: white; padding: 10px; border-radius: 5px; margin: 10px 0; text-align: center;">
                    <i class="fa fa-check-circle"></i> 
                    <strong>Coupon "' . esc_html($coupon_code) . '" Applied!</strong> 
                    <span style="font-size: 18px; font-weight: bold;">' . esc_html($discount_text) . '</span>
                </div>';
    }
    
    return '';
}

/**
 * Get discounted price for display
 */
function la_get_discounted_price_display($original_price, $product_id = null) {
    if (!la_has_active_coupon() || !$original_price) {
        return $original_price;
    }
    
    $coupon_data = WC()->session->get('url_coupon_data');
    if (!$coupon_data) {
        return $original_price;
    }
    
    // Check product eligibility if product ID provided
    if ($product_id) {
        $product = wc_get_product($product_id);
        if (!la_is_product_eligible_for_coupon($product, $coupon_data)) {
            return $original_price;
        }
    }
    
    return la_calculate_discounted_price($original_price, $coupon_data);
}

/**
 * Shortcode to display coupon notice
 * Usage: [coupon_notice]
 */
function la_coupon_notice_shortcode($atts) {
    // Only show coupon notice if we're on a product page and coupon is valid for this product
    if (!is_product() || !la_has_active_coupon()) {
        return '';
    }

    global $product;
    $coupon_data = WC()->session->get('url_coupon_data');

    if (!$coupon_data || !$product) {
        return '';
    }

    // Only show notice if coupon is valid for this specific product
    if (la_is_product_eligible_for_coupon($product, $coupon_data)) {
        return la_display_coupon_notice();
    }
    
    return '';
}
add_shortcode('coupon_notice', 'la_coupon_notice_shortcode');

/**
 * Debug shortcode to show coupon status
 * Usage: [coupon_debug]
 */
function la_coupon_debug_shortcode($atts) {
    if (!current_user_can('manage_options')) {
        return '';
    }
    
    $output = '<div style="background: #f0f0f0; padding: 15px; margin: 10px 0; border: 1px solid #ccc;">';
    $output .= '<h4>Coupon Debug Info:</h4>';
    
    if (WC()->session) {
        $coupon_code = WC()->session->get('url_coupon_code');
        $coupon_data = WC()->session->get('url_coupon_data');
        
        $output .= '<p><strong>Session Coupon Code:</strong> ' . ($coupon_code ? $coupon_code : 'None') . '</p>';
        $output .= '<p><strong>Has Active Coupon:</strong> ' . (la_has_active_coupon() ? 'Yes' : 'No') . '</p>';
        
        if ($coupon_data) {
            $output .= '<p><strong>Discount Type:</strong> ' . $coupon_data['discount_type'] . '</p>';
            $output .= '<p><strong>Discount Amount:</strong> ' . $coupon_data['amount'] . '</p>';
        }
        
        $output .= '<p><strong>URL Coupon Param:</strong> ' . (isset($_GET['coupon']) ? $_GET['coupon'] : 'None') . '</p>';
    } else {
        $output .= '<p><strong>WooCommerce Session:</strong> Not available</p>';
    }
    
    $output .= '</div>';
    return $output;
}
add_shortcode('coupon_debug', 'la_coupon_debug_shortcode');

/**
 * Update JSON data with coupon prices for face-to-face courses
 */
function la_update_json_with_coupon_prices($json_data, $product_id) {
    if (!la_has_active_coupon()) {
        return $json_data;
    }
    
    $coupon_data = WC()->session->get('url_coupon_data');
    if (!$coupon_data) {
        return $json_data;
    }
    
    // Check if product is eligible
    $product = wc_get_product($product_id);
    if (!la_is_product_eligible_for_coupon($product, $coupon_data)) {
        return $json_data;
    }
    
    // Update prices in JSON data
    if (isset($json_data['sell_price'])) {
        $original_price = floatval(preg_replace('/[^0-9.]/', '', $json_data['sell_price']));
        $discounted_price = la_calculate_discounted_price($original_price, $coupon_data);
        $json_data['sell_price'] = '£' . number_format($discounted_price, 2);
        
        // Update regular price to show original sell price
        if (!isset($json_data['regular_price']) || $json_data['regular_price'] <= $json_data['sell_price']) {
            $json_data['regular_price'] = '£' . number_format($original_price, 2);
        }
    }
    
    return $json_data;
}
/**
 * Display a product-specific coupon notice on single product pages.
 * Checks if the coupon is valid for the specific product before showing the notice.
 */
function la_display_product_specific_coupon_notice() {
    if (!is_product() || !la_has_active_coupon()) {
        return;
    }

    global $product;
    $coupon_code = la_get_current_coupon_code();
    $coupon_data = WC()->session->get('url_coupon_data');

    if (!$coupon_data || !$product) {
        return;
    }

    if (la_is_product_eligible_for_coupon($product, $coupon_data)) {
        // Coupon is valid for this product, show the success notice.
        echo la_display_coupon_notice($product);
    } else {
        // Coupon is not valid for this product, show an informative notice.
        echo '<div class="coupon-invalid-notice" style="background: #ffc107; color: #333; padding: 10px; border-radius: 5px; margin: 10px 0; text-align: center;">
                <i class="fa fa-exclamation-triangle"></i> 
                Coupon <strong>' . esc_html($coupon_code) . '</strong> is not valid for this course.
              </div>';
    }
}
add_action('woocommerce_single_product_summary', 'la_display_product_specific_coupon_notice', 5);

/**
 * Add coupon information to course page data
 */
function la_add_coupon_data_to_page() {
    // Always add the script, but set values based on coupon status
    $coupon_code = '';
    $discount_percentage = 0;
    $discount_amount = 0;
    $discount_type = '';
    $is_coupon_active = false;
    
    if (is_product() && la_has_active_coupon() && WC()->session) {
        $coupon_code = la_get_current_coupon_code();
        $product_id = get_the_ID();
        $coupon_data = WC()->session->get('url_coupon_data');
        
        error_log('Adding coupon data to page - Product ID: ' . $product_id . ' - Coupon Code: ' . $coupon_code);
        error_log('Coupon data from session: ' . print_r($coupon_data, true));
        
        if ($coupon_data) {
            // Check if product is eligible for coupon
            $product = wc_get_product($product_id);
            if (la_is_product_eligible_for_coupon($product, $coupon_data)) {
                $discount_amount = $coupon_data['amount'];
                $discount_type = $coupon_data['discount_type'];
                $is_coupon_active = true;
                
                // Set discount percentage only for percentage-based coupons
                if ($coupon_data['discount_type'] === 'percent') {
                    $discount_percentage = $coupon_data['amount'];
                }
                
                error_log('Coupon is eligible for product - Amount: ' . $discount_amount . ' - Type: ' . $discount_type);
            } else {
                error_log('Coupon is NOT eligible for product');
            }
        } else {
            error_log('No coupon data found in session');
        }
    }
    
    echo '<script type="text/javascript">
        window.activeCoupon = {
            code: "' . esc_js($coupon_code) . '",
            discountPercentage: ' . floatval($discount_percentage) . ',
            discountAmount: ' . floatval($discount_amount) . ',
            discountType: "' . esc_js($discount_type) . '",
            isActive: ' . ($is_coupon_active ? 'true' : 'false') . '
        };
        console.log("Coupon data loaded:", window.activeCoupon);
        console.log("Coupon debug info:", {
            hasActiveCoupon: ' . (la_has_active_coupon() ? 'true' : 'false') . ',
            isProduct: ' . (is_product() ? 'true' : 'false') . ',
            hasSession: ' . (WC()->session ? 'true' : 'false') . ',
            urlCoupon: "' . (isset($_GET['coupon']) ? esc_js($_GET['coupon']) : '') . '",
            productId: ' . (is_product() ? get_the_ID() : 0) . '
        });
    </script>';
}
add_action('wp_head', 'la_add_coupon_data_to_page');

/**
 * Enhanced coupon check with session initialization
 */
function la_enhanced_coupon_check() {
    // Initialize WooCommerce session if not available
    if (!WC()->session) {
        $session_class = apply_filters('woocommerce_session_handler', 'WC_Session_Handler');
        WC()->session = new $session_class();
        WC()->session->init();
    }
    
    // Force session start if not started
    if (!WC()->session->get_session_cookie()) {
        WC()->session->set_customer_session_cookie(true);
    }
    
    // Call the main coupon check function
    la_check_coupon_url();
}
add_action('template_redirect', 'la_enhanced_coupon_check', 1);
/**

 * Test function to verify coupon system
 * Add ?test_coupon=1&coupon=YOURCOUPONCODE to any product URL
 */
function la_test_coupon_system() {
    if (isset($_GET['test_coupon']) && current_user_can('manage_options')) {
        echo '<div style="background: yellow; padding: 20px; margin: 20px; border: 2px solid red;">';
        echo '<h3>Coupon System Test Results:</h3>';
        
        echo '<p><strong>URL Coupon Parameter:</strong> ' . (isset($_GET['coupon']) ? $_GET['coupon'] : 'Not set') . '</p>';
        
        if (WC()->session) {
            echo '<p><strong>Session Available:</strong> Yes</p>';
            echo '<p><strong>Session Coupon:</strong> ' . (WC()->session->get('url_coupon_code') ?: 'None') . '</p>';
            
            $coupon_data = WC()->session->get('url_coupon_data');
            if ($coupon_data) {
                echo '<p><strong>Coupon Data:</strong> ' . print_r($coupon_data, true) . '</p>';
            }
        } else {
            echo '<p><strong>Session Available:</strong> No</p>';
        }
        
        echo '<p><strong>Has Active Coupon:</strong> ' . (la_has_active_coupon() ? 'Yes' : 'No') . '</p>';
        
        if (is_product()) {
            $product = wc_get_product(get_the_ID());
            $original_price = $product->get_price();
            $filtered_price = la_apply_coupon_to_price($original_price, $product);
            
            echo '<p><strong>Product ID:</strong> ' . get_the_ID() . '</p>';
            echo '<p><strong>Original Price:</strong> £' . $original_price . '</p>';
            echo '<p><strong>Filtered Price:</strong> £' . $filtered_price . '</p>';
        }
        
        echo '</div>';
    }
}
add_action('wp_head', 'la_test_coupon_system');
