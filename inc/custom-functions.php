<?php

/* Start for sort date array Ascending */
if (!function_exists('sortByDateAdv')) {
    function sortByDateAdv($a, $b)
    {
        $dateA = strtotime(str_replace(", ", " ", $a["adv_course_date"]));
        $dateB = strtotime(str_replace(", ", " ", $b["adv_course_date"]));
        return $dateA - $dateB;
    }
}

if (!function_exists('sortByDateSingle')) {
    function sortByDateSingle($a, $b)
    {
        $dateA = strtotime(str_replace(", ", " ", $a["la_phleb_course_date"]));
        $dateB = strtotime(str_replace(", ", " ", $b["la_phleb_course_date"]));
        return $dateA - $dateB;
    }
}
/* End for sort date array Ascending */

//Redirect Start
function add_custom_rewrite_rule()
{
    // rewrite_rule for Learner Information
    add_rewrite_rule(
        '^learner-information/([0-9]+)/?$',
        'index.php?pagename=learner-information&order_id=$matches[1]',
        'top'
    );

    // rewrite_rule for Consent Form
    add_rewrite_rule(
        '^consent-form/([0-9]+)/?$',
        'index.php?pagename=consent-form&order_id=$matches[1]',
        'top'
    );
}
add_action('init', 'add_custom_rewrite_rule');

function add_custom_query_vars($vars)
{
    $vars[] = 'order_id';
    return $vars;
}
add_filter('query_vars', 'add_custom_query_vars');
//Redirect End

// add_filter('woocommerce_cart_item_name', 'customize_cart_variation_display', 10, 3);
// function customize_cart_variation_display($product_name, $cart_item, $cart_item_key) {
//     if (is_cart()) {
//         $variations = [
//             364462 => '(Math + Reading + Writing + SLC)',
//             363221 => '(Reading + Writing + SLC)',
//             363209 => '(Reading + Writing + SLC)',
//         ];
//         $product_id = $cart_item['product_id'];
//         $variation_name = $cart_item['variation']['attribute_courses'];
//         if (isset($variations[$product_id]) && $variation_name != "Course Materials") {
//             $product_name .= '<br><b>' . $variations[$product_id] . '</b>';
//         }
//         if (defined('FACE_2_FACE_PRODUCT_CODES') && in_array($product_id, FACE_2_FACE_PRODUCT_CODES) && isset($cart_item['variation']['attribute_courses'])) {
//             $product_name .= '<br><b>' . esc_html($variation_name) . '</b>';
//         }
//     }
//     return $product_name;
// }

// Variation Display on Cart and Checkout Page
add_filter('woocommerce_cart_item_name', 'customize_cart_variation_display', 10, 3);
function customize_cart_variation_display($product_name, $cart_item, $cart_item_key)
{
    if (! is_cart() && ! is_checkout()) {
        return $product_name;
    }
    $variations = [
        364462 => '(Math + Reading + Writing + SLC)',
        363221 => '(Reading + Writing + SLC)',
        363209 => '(Reading + Writing + SLC)',
    ];
    $product_id     = $cart_item['product_id'];
    $variation_name = isset($cart_item['variation']['attribute_courses']) ? $cart_item['variation']['attribute_courses'] : '';

    if (isset($variations[$product_id]) && $variation_name !== "Course Materials") {
        $product_name .= '<br><span>' . $variations[$product_id] . '</span>';
    } elseif (defined('FACE_2_FACE_PRODUCT_CODES') && in_array($product_id, FACE_2_FACE_PRODUCT_CODES) && $variation_name) {
        $product_name .= '<br><span>' . esc_html($variation_name) . '</span>';
    }
    return $product_name;
}

// Register Admin Menu Page
function la_abandoned_cart_menu_contents()
{
    add_menu_page(
        'Abandoned Cart Items',
        'Abandoned Cart Items',
        'manage_options',
        'abandoned-cart-items',
        'la_abandoned_cart_callback',
        'dashicons-cart',
        6
    );
}
// add_action('admin_menu', 'la_abandoned_cart_menu_contents');

if (! function_exists('get_stock_by_variation')) {
    function get_stock_by_variation($variation_id)
    {
        $product = wc_get_product($variation_id);
        if ($product) {
            $stock_quantity = $product->get_stock_quantity();
        } else {
            $stock_quantity = 0;
        }
        return $stock_quantity;
    }
}

// Abandoned Cart Contents
function la_abandoned_cart_callback()
{
?>
    <div class="wrap la-abandoned-cart-content-wrap">
        <form method="post">
            <h2><?php echo 'Student Abandoned Cart Items' ?></h2>
            <?php
            global $wpdb;
            $table_name = $wpdb->la_abandoned_cart_tbl;
            $abandoned_cart = $wpdb->get_results("SELECT * FROM {$wpdb->base_prefix}la_abandoned_cart_tbl", ARRAY_A);
            ?>
            <table class="la-abandoned-cart-table">
                <tr>
                    <th scope="row">Student ID</th>
                    <th scope="row">Student Name</th>
                    <th scope="row">Student Email</th>
                    <th scope="row">Student Phone</th>
                    <th scope="row">Course Id</th>
                    <th scope="row">Cart Time</th>
                </tr>
                <?php
                foreach ($abandoned_cart as $s) {
                ?>
                    <tr>
                        <td>
                            <?php echo $s['student_id']; ?>
                        </td>
                        <td>
                            <?php echo $s['student_name']; ?>
                        </td>
                        <td>
                            <?php echo $s['student_email']; ?>
                        </td>
                        <td>
                            <?php echo $s['student_phone']; ?>
                        </td>
                        <td>
                            <?php echo $s['student_product_id']; ?>
                        </td>
                        <td>
                            <?php echo $s['cart_time']; ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </form>
    </div>
<?php
}

// Get Course Cat ID By Provided Course ID
function la_get_course_cat_id_by_course_id($course_id)
{
    $specified_cats = [];
    $la_course_terms = get_the_terms($course_id, 'product_cat');
    foreach ($la_course_terms as $cat) {
        $specified_cats[] = $cat->term_id;
        $specified_cats[] = $cat->parent;
    }
    return $specified_cats;
}

// Register GCSE Post Type
function la_register_gcse_course_func()
{
    $labels = array(
        'name'                  => _x('GCSE Courses', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('GCSE Course', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('GCSE Courses', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('GCSE Course', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Course', 'textdomain'),
        'new_item'              => __('New Course', 'textdomain'),
        'edit_item'             => __('Edit Course', 'textdomain'),
        'view_item'             => __('View Course', 'textdomain'),
        'all_items'             => __('All Courses', 'textdomain'),
        'search_items'          => __('Search Courses', 'textdomain'),
        'parent_item_colon'     => __('Parent Courses:', 'textdomain'),
        'not_found'             => __('No courses found.', 'textdomain'),
        'not_found_in_trash'    => __('No courses found in Trash.', 'textdomain'),
        'featured_image'        => _x('Course Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Course archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into Course', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this Course', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter Courses list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Courses list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Courses list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'query_var'          => true,
        'rewrite'            => array('slug' => 'gcse'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
    );

    register_post_type('gcse', $args);
}
add_action('init', 'la_register_gcse_course_func');

// Register Venue Post Type
function la_register_venue_func()
{
    $venue_labels = array(
        'name'                  => _x('Training Venue', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Training Venue', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Training Venues', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Training Venue', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Venue', 'textdomain'),
        'new_item'              => __('New Venue', 'textdomain'),
        'edit_item'             => __('Edit Venue', 'textdomain'),
        'view_item'             => __('View Venue', 'textdomain'),
        'all_items'             => __('All Venues', 'textdomain'),
        'search_items'          => __('Search Venues', 'textdomain'),
        'parent_item_colon'     => __('Parent Venues:', 'textdomain'),
        'not_found'             => __('No v found.', 'textdomain'),
        'not_found_in_trash'    => __('No v found in Trash.', 'textdomain'),
        'featured_image'        => _x('Venue Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Venue archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into Venue', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this Venue', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter Venues list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Venues list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Venues list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $venue_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 4,
        'menu_icon'          => 'dashicons-location-alt',
        'query_var'          => true,
        'rewrite'            => array('slug' => 'venue'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
    );

    register_post_type('venue', $args);
}
add_action('init', 'la_register_venue_func');

// Register Cart Suggestion Post Type
function la_register_cs_func()
{
    $cs_labels = array(
        'name'                  => _x('Cart Suggestion', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Cart Suggestion', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Cart Suggestions', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Cart Suggestion', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Cart Suggestion', 'textdomain'),
        'new_item'              => __('New Cart Suggestion', 'textdomain'),
        'edit_item'             => __('Edit Cart Suggestion', 'textdomain'),
        'view_item'             => __('View Cart Suggestion', 'textdomain'),
        'all_items'             => __('All Cart Suggestions', 'textdomain'),
        'search_items'          => __('Search Cart Suggestions', 'textdomain'),
        'parent_item_colon'     => __('Parent Cart Suggestions:', 'textdomain'),
        'not_found'             => __('No v found.', 'textdomain'),
        'not_found_in_trash'    => __('No v found in Trash.', 'textdomain'),
        'featured_image'        => _x('Cart Suggestion Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Cart Suggestion archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into Cart Suggestion', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this Cart Suggestion', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter Cart Suggestions list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Cart Suggestions list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Cart Suggestions list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $cs_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_position'      => 4,
        'menu_icon'          => 'dashicons-cart',
        'query_var'          => true,
        'rewrite'            => array('slug' => 'cart-suggestion'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
    );

    register_post_type('cart-suggestion', $args);
}
add_action('init', 'la_register_cs_func');


// Remove Variation info from title on Cart page
// add_filter( 'woocommerce_product_variation_title_include_attributes', '__return_false' );
add_filter('woocommerce_product_variation_title_include_attributes', '__return_false');
add_filter('woocommerce_is_attribute_in_product_name', '__return_false');

// add_filter( 'woocommerce_product_variation_title_include_attributes', 'custom_product_variation_title', 10, 2 );
// function custom_product_variation_title($should_include_attributes, $product){
//     $should_include_attributes = false;
//     return $should_include_attributes;
// }


// Initializing GCSE Course top shortcode
add_action('init', 'la_gcse_single_course_shortcode_callback');
function la_gcse_single_course_shortcode_callback()
{
    add_shortcode('gcse-course-top-content', 'la_gcse_single_course_shortcode_func');
    add_shortcode('et-course-top-content', 'la_et_single_course_shortcode_func');
}
function la_gcse_single_course_shortcode_func($atts)
{
    ob_start();
    // Attributes
    $attributes = shortcode_atts(array(
        'course_price'     => '£38', // Ex. Bundle Offer, Accredited Courses, Trending Courses
    ), $atts);
?>
    <div class="la-gcse-top-post-content d-flex justify-content-between align-items-center text-center">
        <div class="la-gcse-top-left-content">
            <!-- <h2>Start from <?php echo $attributes['course_price'] ?>/month<br> -->
            <h2>
                Start from £149/month<br>
                Free Course Materials
            </h2>
            <div class="la-gcse-facilities d-flex justify-content-between d-none">
                <p><b>Payments</b><span>6 months</span></p>
                <p><b>Deposit</b><span>£62</span></p>
                <p><b>Total Price</b><span>£290</span></p>
            </div>
        </div>
        <a href="#" class="gcse-enquery-btn">Make an Enquiry</a>
        <!-- Popup content -->
        <div id="gcse-inquery-modal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>

                <div class="gcse-inquery-modal-contents">
                    <?php echo do_shortcode('[contact-form-7 id="b955bde" title="Phlebotomy Courses Enquiry Form"]'); ?>
                </div>
            </div>
        </div>
    </div>
<?php
    $html = ob_get_clean();
    return $html;
}

// Initializing GCSE course accordion shortcode
add_action('init', 'la_gcse_single_course_accordion_shortcode_callback');
function la_gcse_single_course_accordion_shortcode_callback()
{
    add_shortcode('gcse-course-accordion-content', 'la_gcse_single_course_accordion_shortcode_func');
}
function la_gcse_single_course_accordion_shortcode_func($atts, $content = '')
{
    ob_start();
    // Attributes
    $attributes = shortcode_atts(array(
        'id'        => null,
        'title'     => 'This text have special Character',
        'expand'    => 'false',
    ), $atts);
    if ($attributes['id']) {
        $gcse_uniqid = sanitize_title_with_dashes($attributes['id']);
    } else {
        $gcse_uniqid = sanitize_title_with_dashes($attributes['title']);
    }
?>
    <div class="gcse-course-accordion-content">
        <h3 class="gcse-accordion-header" id="la-<?php echo $gcse_uniqid ?>">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo $gcse_uniqid ?>" aria-expanded="false" aria-controls="panelsStayOpen-collapse<?php echo $gcse_uniqid ?>">
                <?php echo $attributes['title'] ?>
            </button>
        </h3>
        <div id="panelsStayOpen-collapse<?php echo $gcse_uniqid ?>" class="accordion-collapse collapse <?php echo $attributes['expand'] ?>" aria-labelledby="la-<?php echo $gcse_uniqid ?>">
            <div class="gcse-accordion-body">
                <?php echo $content ?>
            </div>
        </div>
    </div>
<?php
    $html = ob_get_clean();
    return $html;
}

function add_page_id_to_footer()
{
    if (is_product() || is_page()) {
        echo '<input type="hidden" id="page_id_to_footer" value="' . get_the_ID() . '">';
        if (in_array(get_the_ID(), FACE_2_FACE_PRODUCT_CODES) || get_the_ID() == 354284) {
            echo '<input type="hidden" id="face_to_face" value="1">';
            if (is_user_logged_in() && array_filter(['administrator', 'editor', 'shop_manager'], 'current_user_can')) {
                echo '<input type="hidden" id="check_is_admin" value="1">';
            }
        }
    }
}
add_action('wp_footer', 'add_page_id_to_footer');

add_action('wp_ajax_cart_count_ajax', 'cart_count_ajax');
add_action('wp_ajax_nopriv_cart_count_ajax', 'cart_count_ajax');
function cart_count_ajax()
{
    $ajax_product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : '';
    if ($ajax_product_id == 366854) {
        $ajax_product_id = 354284;
    }
    //$cart_count = WC()->cart->cart_contents_count;
    $product_in_cart = matched_cart_items($ajax_product_id);
    $response = array(
        'cart_count' => $product_in_cart,
    );
    return wp_send_json($response);
}

// Hook to execute custom code when an order is completed
add_action('woocommerce_order_status_completed', 'la_custom_order_completed_action', 10, 1);
function la_custom_order_completed_action($order_id)
{
    $order = wc_get_order($order_id);
    foreach ($order->get_items() as $item_id => $item) {
        $product_id = $item->get_product_id();
        $product = wc_get_product($product_id);

        if (in_array($product_id, CONSENT_FORM)) {
            try {
                /** Omnisend consent_form trigger */
                la_consent_form($order, $product, $item);
            } catch (Exception $ex) {
            }
        }

        if (in_array($product_id, FACE_2_FACE_PRODUCT_CODES)) {
            try {
                /** Omnisend InstantMail trigger */
                la_instant_mail($order, $item);
            } catch (Exception $ex) {
            }

        }

        // Stock quantity check for variable products
        if ($product->is_type('variable')) {
            $variation_id = $item->get_variation_id();
            $variation = wc_get_product($variation_id);
            $variable_title = wc_get_formatted_variation($variation, true, false, false);

            if ($variation->get_stock_quantity() && $variation->get_stock_quantity() < 2) {
                // $to = 'frworkbd@gmail.com';
                $to = get_option('admin_email');
                $subject = 'URGENT! Only one seat left, take action.';
                $message = $product->get_name() . ', Variation: ' . $variable_title . ' is low on stock. Current stock: ' . $variation->get_stock_quantity();
                $headers = 'Content-Type: text/html';
                wp_mail($to, $subject, $message, $headers);
            }
        }
    }
}



add_action('woocommerce_order_status_completed', 'la_send_custom_email_to_student_on_order_completion', 10, 1);
function la_send_custom_email_to_student_on_order_completion($order_id)
{
    $order = wc_get_order($order_id);
    if (!$order) {
        return; // Exit if the order is not found
    }

    $order_email = $order->get_billing_email();
    $is_sent_email = false;
    $advance = ''; // Initialize the $advance variable

    foreach ($order->get_items() as $item_id => $item) {
        $product_id = $item->get_product_id();

        // Checking for Phlebotomy Courses
        if (in_array($product_id, FACE_2_FACE_PRODUCT_CODES)) {
            $product = wc_get_product($product_id);
            $product_name = $product->get_name();

            if ($product->is_type('variable')) {
                $variation_id = $item->get_variation_id();
                $variation = wc_get_product($variation_id);
                $variable_title = wc_get_formatted_variation($variation, true, false, false);

                if ($order_email && !$is_sent_email) {
                    $to = $order_email;
                    $headers = array('Content-Type: text/html; charset=UTF-8', 'From: Lead Academy <info@lead-academy.org>');
                    $subject = 'Lead Academy - Your Booking Confirmation';
                    $venue_details_url = '';
                    $venue_details_link = '';

                    $message = "Dear Learner, <br/><br/>
                    Good day!<br>
                    Please find the address and time below for the practical session on <strong>$product_name</strong>.<br/><br/>";

                    if (
                        strpos($product_name, 'London') !== false ||
                        in_array($product_id, ['387587', '389230', '394220'])
                    ) {
                        $venue_details_url = 'https://lead-academy.org/venue/london';
                        $venue_details_link = '<a href="' . $venue_details_url . '">clicking here.</a>';
                        $parking_details_url = 'https://www.yourparkingspace.co.uk/search?rental=short&lat=51.526108&lng=-0.266143&address=NW10%207JH,%20London';
                        $parking_details_link = '<a href="' . $parking_details_url . '">clicking here.</a>
                        <br/><br/>';

                        $message .= "<strong> Date: " . $variable_title . " <br>Time: 10:00 am - 5:00 pm</strong> <br/><br/>
                        
                        <strong>
                        Venue Address:<br/>
                        Pioneer Skill Limited (Lead Academy) <br/>
                        2nd Floor, Unit: 2.3, <br/> 
                        Bank Studio,  <br/>
                        23 Park Royal Road, <br/> 
                        London <br/>
                        NW10 7JH <br/><br/></strong>

                        <strong>Instructions to get into the training room: </strong>Upon arriving at the venue Bank Studio, use the intercom to dial 203 to access the building. Take the lift to the 2nd floor and go to unit 2.3.<br/><br/>

                        If you are arriving by <strong>Train or Bus</strong>, our venue is easily accessible via public transportation. You can check detailed directions by " . $venue_details_link . "
                        <br><br>
                        <strong>Parking:</strong> No on-street parking is available. Alternative parking arrangements can be found by " . $parking_details_link . ".  It is advised to book your parking space 2 days before your class date to get the parking nearby at a reasonable price.";
                    } elseif (strpos($product_name, 'Bristol') !== false) {
                        $venue_details_url = 'https://lead-academy.org/venue/bristol';
                        $venue_details_link = '<a href="' . $venue_details_url . '">clicking here.</a>';
                        $parking_details_url = 'https://www.yourparkingspace.co.uk/search?rental=short&lat=51.425192&lng=-2.5879&address=BS4%201JP';
                        $parking_details_link = '<a href="' . $parking_details_url . '">clicking here.</a>
                        <br/><br/>';

                        $message .= "<strong> Date: " . $variable_title . " <br>Time: 10:00 am - 5:00 pm</strong> <br/><br/>
                        
                        <strong>
                        Venue Address:<br/>
                        Filwood Community Centre <br/>
                        15 – 19 Filwood Broadway,  <br/>
                        Bristol <br/>
                        BS4 1JL <br/><br/></strong>

                        <strong>Instructions to get into the training venue</strong><br/>

                        If you are arriving by <strong>Train or Bus</strong>, our venue is easily accessible via public transportation. You can check detailed directions by " . $venue_details_link . "
                        <br><br>
                        <strong>Parking:</strong>  Free on-street parking is available on a first-come, first-serve basis. Alternative parking arrangements can be found by " . $parking_details_link;
                    } elseif (strpos($product_name, 'Cardiff') !== false) {
                        $venue_details_url = 'https://lead-academy.org/venue/cardiff';
                        $venue_details_link = '<a href="' . $venue_details_url . '">clicking here.</a>';
                        $parking_details_url = '';
                        $parking_details_link = '<a href="' . $parking_details_url . '">clicking here.</a>
                        <br/><br/>';

                        $message .= "<strong> Date: " . $variable_title . " <br>Time: 10:00 am - 5:00 pm</strong> <br/><br/>
                        
                        <strong>
                        Venue Address:<br/>
                        Ynysmaerdy Community Centre <br/>
                        Glan-Yr-Ely,  <br/>
                        Ynysmaerdy, <br/>
                        Pontyclun, <br/>
                        CF72 8LJ <br/><br/>
                        </strong>

                        <strong>Instructions to get into the training venue</strong><br/><br/>
                        If you are arriving by <strong>Train or Bus</strong>, our venue is easily accessible via public transportation. You can check detailed directions by " . $venue_details_link . "
                        <br><br>
                        <strong>Parking:</strong> Free on-site parking is available on a first-come, first-serve basis.<br><br>";
                    } elseif (strpos($product_name, 'Birmingham') !== false) {
                        $venue_details_url = 'https://lead-academy.org/venue/birmingham';
                        $venue_details_link = '<a href="' . $venue_details_url . '">Click here for venue details and directions</a>';
                        $parking_details_url = 'https://www.yourparkingspace.co.uk/search?rental=short&address=B16%208QG,%20Birmingham&lat=52.472511&lng=-1.922624&include_booked=false&space_size&season_plan=mon-sun&sort=location&start=2024-10-02T16%3A30%3A00%2B00%3A00&end=2024-10-02T23%3A30%3A00%2B01%3A00';
                        $parking_details_link = '<a href="' . $parking_details_url . '">clicking here.</a>';
                        $tutorials_url_first = 'https://www.youtube.com/watch?v=WF_LhJM3i-M';
                        $tutorials_link_first = '<a href="' . $tutorials_url_first . '">https://www.youtube.com/watch?v=WF_LhJM3i-M</a>';
                        $tutorials_url_sec = 'https://www.youtube.com/watch?v=OgLPH8dXLRk';
                        $tutorials_link_sec = '<a href="' . $tutorials_url_sec . '">https://www.youtube.com/watch?v=OgLPH8dXLRk</a>
                        <br/><br/>';

                        $message .= "<strong> Date: " . $variable_title . " <br>Time: 10:00 am - 5:00 pm</strong> <br/><br/>

                        <strong>
                        Venue Address:<br/>
                        Lead Academy<br/>
                        Office 4J/4K, 4th Floor<br/>
                        Cobalt Square<br/>
                        83-85 Hagley Road<br/> 
                        Birmingham<br/> 
                        B16 8QG <br/><br/></strong>

                        <strong>Instructions to get into the training venue</strong><br/><br/>

                        If you are arriving by <strong>Train or Bus</strong>, our venue is easily accessible via public transportation. " . $venue_details_link . "
                        <br><br>
                        <strong>Parking:</strong> Free on-site limited visitor parking is available on a first-come, first-serve basis. Alternative paid parking arrangements can be found by " . $parking_details_link . "
                        <br><br>
                        <strong>👉 If your class during weekday and if you are unable to find the venue, please watch this tutorials for instruction: </strong>" . $tutorials_link_first . "
                        <br><br>
                        <strong>👉 If your class during weekend and if you are unable to find the venue, please watch this tutorials for instruction: </strong>" . $tutorials_link_sec;
                    } elseif (strpos($product_name, 'Swindon') !== false) {
                        $venue_details_url = 'https://lead-academy.org/venue/swindon';
                        $venue_details_link = '<a href="' . $venue_details_url . '">Click here for venue details and directions</a>';
                        $parking_details_url = 'https://www.yourparkingspace.co.uk/search?rental=short&lat=51.578885&lng=-1.766471&address=SN2%208BW';
                        $parking_details_link = '<a href="' . $parking_details_url . '">clicking here.</a>
                        <br/><br/>';

                        $message .= "<strong> Date: " . $variable_title . " <br>Time: 10:00 am - 5:00 pm</strong> <br/><br/>

                        <strong>
                        Venue Address:<br/>
                        Lead Academy <br/>
                        Office 15,  <br/>
                        Pure Offices,  <br/>
                        Kembrey Park,  <br/>
                        Swindon <br/>
                        SN2 8BW <br/><br/>
                        </strong>

                        <strong>Instructions to get into the training venue </strong>
                        <br><br>
                        If you are arriving by <strong>Train or Bus</strong>, our venue is easily accessible via public transportation. You can check detailed directions by " . $venue_details_link . "
                        <br><br>
                        <strong>Parking:</strong> Free on-site parking is available on a first-come, first-serve basis. Alternative parking arrangements can be found by " . $parking_details_link;
                    }

                    //$message .= "To give yourself the best possible chance of being on time, <strong>you'll have to plan your journey the day before.</strong> It is your responsibility to plan your journey accordingly so that you can attend your class by <strong>09:45 am.</strong> After 10 am, we will not allow you into the class, as it may interrupt the class. <br/><br/>";

                    $message .= "<strong>Please note!!!:</strong> On the training day during the morning, our telephone lines will be extremely busy, and we will not have the facility to give you telephone directions to the venue.<br/><br/>";

                    $message .= "You are requested to come to the training venue by <strong>9:45</strong> am. After <strong>10 am</strong>, we will not allow you to the classroom, as it may interrupt the class.<br><br>";

                    if ($product_id == '382016') {
                        $message .= "<br/><strong>Entry Requirements:</strong> You must finish our <a href='/course/phlebotomy-training-birmingham'>beginner phlebotomy training course Birmingham</a> before you can sign up for the advanced training.<br/><br/>";
                    }

                    $message .= "<strong>For Certificate: </strong>To receive your hardcopy certificate with the correct name, please reply to this email with the full name you want on it. If you don’t confirm the name 4 working days before the class, Lead Academy will not be responsible for any errors on the certificate.<br/><br/>";

                    $message .= "<strong>Photo ID: </strong>Please send your passport/driving license at least 3 days prior to the training day via email to info@lead-academy.org; it is mandatory for certification and registration purposes. Also, please bring your photo ID when you attend the practical session.<br/><br/>";

                    $message .= "<strong>Gentle Reminder: </strong><br>Your booking is non-refundable. This means if you do miss your course, you will be very welcome to attend another course, but you will need to pay again. You can, however, postpone your booking for a later date; you must inform us <strong>3 working days before</strong> the practical session via email at info@lead-academy.org. You can only do this once per booking.<br/><br/>";

                    if ($product_id == '414746' || $product_id == '414748' || $product_id == '414685') {
                        $message .= "Students will be required to work on each other during the session, so please inform us in advance if you have any restrictions due to religious beliefs or recent surgery.  </br></br>
                  
                        Wear comfortable clothing, keep nails short and hair tied back, avoid wearing jewelry, bring cleansing wipes, and minimize makeup to avoid unnecessary delays.  </br></br>
                  
                        While previous courses may cover similar areas, it is essential to maintain attention and consideration for others. Negative comments or comparisons to other teachings are not helpful or necessary.
                        ";
                    }

                    $message .= "<strong>You are requested to bring your lunch, notebook & pen on the training date.</strong><br/><br/>";

                    $message .= "Kind regards,<br/>Lead Academy";
                    // wp_mail($to, $subject, $message, $headers);
                    //$is_sent_email = true;
                }
            }
        }
    }
}
// add_action('woocommerce_order_status_completed', 'la_send_custom_email_to_student_on_order_completion');

// Phlebotomy Training Declaration Email
add_action('woocommerce_order_status_completed', 'send_phlebotomy_declaration_email');
function send_phlebotomy_declaration_email($order_id)
{
    // Define the product IDs that should trigger the email
    // $target_product_ids = array(377824, 376420, 376417, 366854, 408597);

    // Get the order object
    $order = wc_get_order($order_id);

    // Check if the order contains any of the target product IDs
    $send_email = false;
    $product_variation_title = '';

    foreach ($order->get_items() as $item_id => $item) {
        $product_id = $item->get_product_id();

        if (in_array($product_id, CONSENT_FORM)) {
            $send_email = true;

            // Check if the product is a variable product
            $product = wc_get_product($product_id);
            if ($product->is_type('variable')) {
                $variation_id = $item->get_variation_id();
                $variation = wc_get_product($variation_id);
                $product_variation_title = get_custom_formatted_variation($variation);
            } else {
                $product_variation_title = $item->get_name();
            }
            break;
        }
    }

    // Send the email if any of the target products are in the order
    if ($send_email) {
        $to = $order->get_billing_email();
        $subject = 'Urgent: Phlebotomy Training Consent Form - Must Sign';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $message = '
        <p>Dear Learner,</p>
        <p>Good day! Hope this email finds you well. You are required to sign the phlebotomy training consent form. It is mandatory to sign the consent before <strong>' . $product_variation_title . '</strong>.</p>
        <p>Please <a href="https://lead-academy.org/consent-form/' . $order_id . '">click here</a> and sign the consent digitally.</p>
        <p>If you require any further information, don\'t hesitate to get in touch with us at <a href="mailto:info@lead-academy.org">info@lead-academy.org</a> or <a href="tel:0203 880 8347">0203 880 8347</a>.</p>
        <p>Kind regards,<br>Lead Academy Support Team</p>';

        //wp_mail($to, $subject, $message, $headers);
    }
}

// If Face 2 Face more than one mail
add_action('woocommerce_order_status_completed', 'send_learner_info_email', 10, 4);
function send_learner_info_email($order_id)
{
    $f2f_email = false;
    $order = wc_get_order($order_id);
    $product_variation_title = '';
    foreach ($order->get_items() as $item_id => $item) {
        $product_id = $item->get_product_id();
        // FACE_2_FACE_PRODUCT_CODES defined in functions.php line number 18
        if (in_array($product_id, FACE_2_FACE_PRODUCT_CODES)) {
            $quantity = $item->get_quantity();
            if ($quantity > 1) {
                $f2f_email = true;
            }
        }
    }
    // Send the email if any of the target products are in the order
    if ($f2f_email) {
        $to = $order->get_billing_email();
        $subject = 'Urgent: Please provide Learners information';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $message = '
        <p>Dear Learner,</p>
        <p>Good day! Hope this email finds you well. You have made a purchase with us and we need other learner\'s information for registration purpose. Please fill up the information from <a href="' . site_url() . '/learner-information/' . $order_id . '">here</a></p>
        <p>If you require any further information, don\'t hesitate to get in touch with us at <a href="mailto:info@lead-academy.org">info@lead-academy.org</a> or <a href="tel:0203 880 8347">0203 880 8347</a>.</p>
        <p>Kind regards,<br>Lead Academy Support Team</p>';
        wp_mail($to, $subject, $message, $headers);
    }
}

// Start for order_status_completed > la_order_completed_action
add_action('woocommerce_order_status_completed', 'la_order_completed_action', 10, 1);
add_action('woocommerce_order_refunded', 'la_order_completed_action', 10, 1);
if (!function_exists('la_order_completed_action')) {
    function la_order_completed_action($order_id)
    {
        $order = wc_get_order($order_id);
        foreach ($order->get_items() as $item_id => $item) {
            $product_id = $item->get_product_id();
            // echo $product_id;
            if (in_array($product_id, FACE_2_FACE_PRODUCT_CODES)) {
                $meta_id = ($product_id == 366854) ? 354284 : $product_id;
                create_json_object_by_product_id($meta_id);
            }
        }
    }
}

if (!function_exists('update_pti_stock_by_product_id')) {
    function update_pti_stock_by_product_id($product_id,$variation_id)
    {
        if (in_array($product_id, FACE_2_FACE_PRODUCT_CODES)) {
            $max_qty = get_post_meta($variation_id, '_stock', true);
            $pti_variation_id = 0;
            $meta_id = ($product_id == 366854) ? 354284 : $product_id;
            $course_meta_group = get_post_meta($meta_id, 'la_phleb_course_meta_group', true);
            foreach ($course_meta_group as $course) {
                if ($course['la_phleb_course_var_id'] == $variation_id) {
                    $pti_variation_id = $course['pb_phleb_course_var_id'];
                    break;
                }
            }

            $post_api_url = "https://phlebotomycourse.uk/wp-json/stock/change";
            $post_data = [
                'pti_variation_id' => $pti_variation_id,
                'max_qty' => $max_qty,
                'security' => 'LeadAcademyPassword',
            ];
            $product_response = wp_remote_post("$post_api_url", array(
                'headers' => array(
                    'Authorization' => 'Basic ' . base64_encode($consumer_key . ':' . $consumer_secret),
                    'Content-Type' => 'application/json',
                ),
                'body' => json_encode($post_data),
            ));
            $product_data = json_encode(wp_remote_retrieve_body($product_response), true);
            // echo $product_data;
        }
    }
};

add_action('woocommerce_order_status_completed', 'update_pti_stock_with_api', 10, 1);
if (!function_exists('update_pti_stock_with_api')) {
    function update_pti_stock_with_api($order_id)
    {
        $order = wc_get_order($order_id);
        foreach ($order->get_items() as $item_id => $item) {
            $product_id = $item->get_product_id();
            $variation_id = $item->get_variation_id();
            update_pti_stock_by_product_id($product_id,$variation_id);
        }
    }
}

add_action('woocommerce_order_status_completed', 'omnisend_contact_update', 10, 1);

if (!function_exists('omnisend_contact_update')) {
    function omnisend_contact_update($order_id)
    {
        $order = wc_get_order($order_id);
        if (!$order) {
            return ['error' => 'Invalid order'];
        }

        $email = $order->get_billing_email();
        $date = get_post_meta($order_id, 'billing_birth_date', true);

        if (!empty($date) && is_string($date) && preg_match('/^\d{8}$/', $date)) {
            if ((int)substr($date, 0, 2) > 12) {
                // Assume DDMMYYYY
                $date = substr($date, 4, 4) . '-' . substr($date, 2, 2) . '-' . substr($date, 0, 2);
            } else {
                // Assume YYYYMMDD
                $date = substr($date, 0, 4) . '-' . substr($date, 4, 2) . '-' . substr($date, 6, 2);
            }
        }

        // Sanitize final formatted date
        $formatted_date = preg_replace('/[.\/\\\\\s]+/', '-', $date);

        $date_of_birth = null;
        if (!empty($formatted_date)) {
            $timestamp = strtotime($formatted_date);
            if ($timestamp && $timestamp > 0) {
                $date_of_birth = date('Y-m-d', $timestamp);
            }
        }

        // Skip sending if invalid date
        if (!$date_of_birth || $date_of_birth === '1970-01-01') {
            return ['error' => $order_id, 'formatted' => null];
        }

        $order_title = get_post_meta($order_id, 'la_title_field', true);
        $gender = ($order_title === 'Mr') ? 'm' : 'f';

        // Omnisend API
        $response = wp_remote_post("https://api.omnisend.com/v5/contacts", [
            'headers' => [
                'X-API-KEY' => 'YOUR_API_KEY_HERE', // Replace with env value in production
                'Content-Type' => 'application/json',
            ],
            'body' => json_encode([
                "birthdate" => $date_of_birth,
                "gender" => $gender,
                "identifiers" => [
                    [
                        "type" => "email",
                        "id" => $email,
                        "channels" => [
                            "email" => [
                                "status" => "nonSubscribed"
                            ]
                        ]
                    ]
                ]
            ]),
        ]);

        $result = wp_remote_retrieve_body($response);

        return array_merge(
            is_string($result) ? json_decode($result, true) ?? [] : [],
            [
                'date_of_birth' => $date,
                'formatted' => $date_of_birth,
                'order_id' => $order_id
            ]
        );
    }
}

// If Product edit json re-created
add_action('woocommerce_update_product', 'la_product_update_to_json_store', 10, 2);
if (!function_exists('la_product_update_to_json_store')) {
    function la_product_update_to_json_store($post_id, $post)
    {
        if (in_array($post_id, FACE_2_FACE_PRODUCT_CODES)) {
            $meta_id = ($post_id == 366854) ? 354284 : $post_id;
            create_json_object_by_product_id($meta_id);
        }
    }
}
// Update PTI Stock by API on Post Update
add_action('updated_post_meta', function($meta_id, $object_id, $meta_key, $meta_value) {
    if ($meta_key !== '_stock') {
        return;
    }
    $product = wc_get_product($object_id);
    if (!$product || !$product->is_type('variation')) {
        return;
    }
    $parent_id = $product->get_parent_id();
    if (in_array($parent_id, FACE_2_FACE_PRODUCT_CODES)) {
        $meta_id_to_use = ($parent_id == 366854) ? 354284 : $parent_id;
        update_pti_stock_by_product_id($parent_id, $object_id); // product id, variation id
    }
}, 10, 4);

//If post update json re-created
add_action('post_updated', 'la_post_update_to_json_store', 10, 2);
if (!function_exists('la_post_update_to_json_store')) {
    function la_post_update_to_json_store($post_id, $post)
    {
        if (in_array($post_id, array(354284))) {
            create_json_object_by_product_id($post_id);
        }
    }
}

// If json object not exist, create it
if (! function_exists('create_json_object_if_not_exists')) {
    function create_json_object_if_not_exists()
    {
        if (is_product() && in_array(get_the_ID(), FACE_2_FACE_PRODUCT_CODES)) {
            $product_id = get_the_ID();
            $file_path = WP_CONTENT_DIR . '/json/' . $product_id . '.json';

            // Create if not exists
            if (!file_exists($file_path)) {
                create_json_object_by_product_id($product_id);
            }
        }
    }
}
add_action('template_redirect', 'create_json_object_if_not_exists');

// Check if the json folder not exists
function check_and_create_json_folder()
{
    $json_dir = WP_CONTENT_DIR . '/json';
    if (!file_exists($json_dir)) {
        wp_mkdir_p($json_dir);
    }
}

//Create JSON object by product ID
if (! function_exists('create_json_object_by_product_id')) {
    function create_json_object_by_product_id($product_id)
    {
        check_and_create_json_folder();
        $meta_id = ($product_id == 366854) ? 354284 : $product_id;
        $course_meta_group = get_post_meta($meta_id, 'la_phleb_course_meta_group', true);
        /* Sort the date array in ascending order */
        // $sort_function = isset($course_meta_group[0]['adv_course_date']) ? 'sortByDateAdv' : 'sortByDateSingle';
        if (is_array($course_meta_group) && !empty($course_meta_group)) {
            $sort_function = isset($course_meta_group[0]['adv_course_date']) ? 'sortByDateAdv' : 'sortByDateSingle';
            usort($course_meta_group, $sort_function);
        }
        $location       = sanitize_text_field(get_post_meta($meta_id, 'la_phleb_course_location_root', true));
        $time           = sanitize_text_field(get_post_meta($meta_id, 'la_phleb_course_time_root', true));
        $address        = sanitize_text_field(get_post_meta($meta_id, 'la_phleb_course_address_root', true));
        $regular_price  = '£' . get_post_meta($meta_id, 'la_phleb_course_regular_price', true);
        $sell_price     = '£' . get_post_meta($meta_id, 'la_phleb_course_sell_price', true);
        $formatted_items = [];
        foreach ($course_meta_group as $course) {
            $course_date = $course['adv_course_date'] ?? $course['la_phleb_course_date'];
            $is_future_date = strtotime($course_date) >= strtotime("now");
            $is_old = strtotime($course_date) < strtotime("now") - 2 * 24 * 3600;
            preg_match('/\d+/', $course['la_phleb_course_seats_left'], $matches);
            $seats_left = (int) ($matches[0] ?? 0);
            $stock_qty = get_stock_by_variation($course['la_phleb_course_var_id']);
            $seats_sort = ($stock_qty < 4) ? max($stock_qty, 0) : $seats_left;
            $quota_full = $stock_qty < 1;
            $delete_flag = !$is_future_date || !empty($course['la_phleb_course_delete']);
            $hide_flag = !empty($course['la_phleb_course_hide']) ? 1 : 0;

            $formatted_item = [
                'var'     => intval($course['la_phleb_course_var_id'] ?? 0),
                'pti'     => intval($course['pb_phleb_course_var_id'] ?? 0),
                'real'    => $stock_qty,
                'seat'    => $seats_sort,
                'hide'    => $hide_flag,
                'quota'   => $quota_full ? 1 : 0,
                'delete'  => $delete_flag ? 1 : 0,
                'date'    => sanitize_text_field($course['la_phleb_course_date'])
            ];
            if (!empty($course['la_phleb_course_address'])) {
                $formatted_item['address'] = sanitize_text_field($course['la_phleb_course_address']);
            }
            if (!empty($course['la_phleb_course_time'])) {
                $formatted_item['time'] = sanitize_text_field($course['la_phleb_course_time']);
            }

            // Add dummy item 2 days before each date, fully booked
            $dates = explode(',', $course_date);
            if (count($dates) == 1) {
                $dummy_date = date('d F Y', strtotime(trim($course_date)) - 2 * 24 * 3600); 
                $dummy_item = $formatted_item;
                $dummy_item['quota'] = 1; 
                $dummy_item['real'] = 0;   
                $dummy_item['seat'] = 0;   
                $dummy_item['date'] = $dummy_date;  
                $formatted_items[] = $dummy_item;  
            }

            if ($delete_flag != 1) {
                $formatted_items[] = $formatted_item;
            }
        }
        $product_details = [
            'location'      => $location,
            'time'          => $time,
            'address'       => $address,
            'regular_price' => $regular_price,
            'sell_price'    => $sell_price,
            'items'         => $formatted_items,
        ];
        $json_object = json_encode($product_details);
        $file_path = WP_CONTENT_DIR . '/json/' . $product_id . '.json';
        file_put_contents($file_path, $json_object);
    }
}

function add_footer_custom_css()
{
    // style for all pages
?>
    <style>
        .la-black-friday-deal-top-bar {
            padding: 14px 20px;
            position: relative;
            background: linear-gradient(to right, #6D122E, #AF1F47) !important;
            border-bottom: 3px solid;
            border-image: linear-gradient(to right, #AF1F47, #6D122E);
            border-image-slice: 1;
        }
    </style>
    <?php
    if (is_page(354284) || (is_product() && in_array(get_the_ID(), FACE_2_FACE_PRODUCT_CODES))) {
        // Temporary added in 6th November 2024
    ?>
        <style>
            /* Target the specific element for always-visible scrollbars */
            #enquiryBookingModal .single-booking-option {
            max-height: 85vh; 
                height: 600px; 
            }

            #enquiryBookingModal .os-scrollbar-vertical {
                background-color: #f1f1f1 !important; 
                width: 10px;
            }


            #enquiryBookingModal .os-scrollbar-handle {
                background-color: #af1f47 !important;
                border-radius: 4px;
            }

            #enquiryBookingModal .os-scrollbar-handle:hover {
                background-color: #8e1939 !important; 
            }

            /* Target the specific element for always-visible scrollbars */
            #enquiryBookingModal .single-booking-option {
                overflow-y: scroll;
                /* Force vertical scrollbar to always be visible */
                -webkit-overflow-scrolling: touch;
                /* Smooth scrolling on iOS */
            }

            /* Styling the scrollbar for visibility */
            #enquiryBookingModal .single-booking-option::-webkit-scrollbar {
                width: 10px;
                /* Set scrollbar width */
            }

            #enquiryBookingModal .single-booking-option::-webkit-scrollbar-thumb {
                background-color: #af1f47;
                /* Scrollbar thumb color */
                border-radius: 4px;
                /* Optional: rounded scrollbar thumb */
            }

            #enquiryBookingModal .single-booking-option::-webkit-scrollbar-track {
                background-color: #f1f1f1;
                /* Scrollbar track color */
            }

            button#phlebotomy-modal-enroll-btn {
                background: #af1f47;
                width: 70%;
                font-size: 16px;
                font-weight: 700;
            }

            #course-fee .red-button {
                width: 100%;
            }
        </style>
    <?php
    }
    if (function_exists('is_checkout') && is_checkout()) {
    ?>
        <script>
            jQuery(document).on('input', '#billing_postcode', function() {
                jQuery(this).val(jQuery(this).val().toUpperCase());
            });
        </script>
    <?php
    }
    if (is_cart() || is_product() || is_page('354284')) {
    ?>
        <script>
            function triggerFunction() {
                document.addEventListener('mouseleave', function onMouseLeave() {
                    window.omnisend = window.omnisend || [];
                    window.omnisend.push(['openForm', '6500923fa46730d0c43becf7']);
                    document.removeEventListener('mouseleave', onMouseLeave); // Remove the event listener
                });
            }

            function setCookie(name, value, hours) {
                const now = new Date();
                now.setTime(now.getTime() + hours * 60 * 60 * 1000); // Convert hours to milliseconds
                document.cookie = `${name}=${value}; expires=${now.toUTCString()}; path=/`;
            }

            function getCookie(name) {
                const cookies = document.cookie.split('; ');
                for (let i = 0; i < cookies.length; i++) {
                    const parts = cookies[i].split('=');
                    if (parts[0] === name) {
                        return parts[1];
                    }
                }
                return null;
            }

            // Check if the cookie exists
            if (!getCookie('functionTriggered')) {
                triggerFunction(); // Show the popup
                setCookie('functionTriggered', 'true', 1); // Set a 1-hour cookie
            }
        </script>
    <?php
    }
    if (is_home() || is_front_page()) {
        // Temporary added on 19th December 2024 
    ?>
        <style>
            @media screen and (max-width: 767px) {
                .home-image {
                    display: flex;
                    justify-content: center;
                    /* align-items: center; */
                    /* text-align: center; */
                }

                .home-image img {
                    max-width: 100%;
                    /* Prevent overflow */
                    width: 200px;
                    /* Fixed width for the image */
                    height: auto;
                    /* Maintain aspect ratio */
                }
            }
        </style>
    <?php
    }
    if (is_category()) {
        // Temporary added on 23rd December 2024 
    ?>
        <style>
            .tax-product_cat .course-card-box.course-365816,
            .tax-product_cat .course-card-box.course-365810,
            .tax-product_cat .course-card-box.course-365820,
            .tax-product_cat .course-card-box.course-365807 {
                display: block !important;
            }

            #woocommerce_product_categories-2 ul.product-categories li.cat-item-343,
            #woocommerce_product_categories-2 ul.product-categories li.cat-item-331 span.open-submenu-btn {
                display: block !important;
            }
        </style>
    <?php
    }
}
add_action('wp_footer', 'add_footer_custom_css');

// End for order_status_completed > la_order_completed_action

// GCSE Courses Ajaxify
add_action('wp_ajax_gcse_action', 'gcse_callback_add_product_to_cart');
add_action('wp_ajax_nopriv_gcse_action', 'gcse_callback_add_product_to_cart');
function gcse_callback_add_product_to_cart()
{
    $course_id            = isset($_POST['course_id']) ? sanitize_text_field($_POST['course_id']) : '';
    $variation_id        = isset($_POST['variation_id']) ? sanitize_text_field($_POST['variation_id']) : '';
    $sec_variation_id   = isset($_POST['sec_variation_id']) ? sanitize_text_field($_POST['sec_variation_id']) : '';
    $response           = [];

    if ($course_id != '' && $sec_variation_id != '') {
        $gcse_cart_item_key = WC()->cart->add_to_cart($course_id, 1, $sec_variation_id);
        $response['condition'] = 'Secondary var is not empty';
    } elseif ($course_id != '' && $variation_id != '') {
        $response['condition'] = 'Secondary var is empty';
        $gcse_cart_item_key = WC()->cart->add_to_cart($course_id, 1, $variation_id);
    }

    if ($gcse_cart_item_key) {
        $response['status'] = 'success';
        $response['message'] = 'Enrolled Successfully, Redirecting..';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Sorry! We could not process your request. Please try again.';
    }

    echo wp_send_json($response);
    wp_die();
}


// Initializing Education & Training Course top shortcode
function la_et_single_course_shortcode_func($atts)
{
    ob_start();
    // Attributes
    $attributes = shortcode_atts(array(
        'course_price'     => '£37', // Ex. Bundle Offer, Accredited Courses, Trending Courses
    ), $atts);
    ?>
    <div class="la-gcse-top-post-content d-flex justify-content-between align-items-center text-center">
        <div class="la-gcse-top-left-content">
            <h2>
                <?php echo $attributes['course_price'] ?>/month<br>
                Interest-free*
                <span class="la-instalment-available-checkout-text">Instalment available on Checkout</span>
            </h2>
            <div class="la-gcse-facilities d-flex justify-content-between d-none">
                <p><b>Payments</b><span>6 months</span></p>
                <p><b>Deposit</b><span>£62</span></p>
                <p><b>Total Price</b><span>£290</span></p>
            </div>
        </div>

        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
        <a href="#" class="gcse-enquery-btn la-education-training-popup-btn" onclick="LC_API.open_chat_window(); return false;">Speak To an Expert</a>
    </div>
<?php
    $html = ob_get_clean();
    return $html;
}


// Initializing FS Course icon shortcode
add_action('init', 'la_fs_single_course_icon_shortcode_callback');
function la_fs_single_course_icon_shortcode_callback()
{
    add_shortcode('fs-course-icon-content', 'la_fs_single_course_icon_shortcode_func');
    add_shortcode('cpd-course-all-icons-content', 'la_cpd_course_all_icons_shortcode_func');
}
function la_fs_single_course_icon_shortcode_func($atts)
{
    ob_start();
    // Attributes
    $attributes = shortcode_atts(array(
        'title'     => 'Tutor Support',                     // Icon section title
        'sub_title' => 'Unlimited support till the exam',   // Icon section sub title
    ), $atts);
    // <div class="la-gcse-bottom-post-content">
?>
    <div class="la-gcse-bottom-single">
        <p><?php echo esc_html($attributes['title']) ?></p>
        <p><?php echo esc_html($attributes['sub_title']) ?></p>
    </div>
<?php
    // </div>
    $html = ob_get_clean();
    return $html;
}


function la_cpd_course_all_icons_shortcode_func($atts)
{
    ob_start();
    // Attributes
    $attributes = shortcode_atts(array(
        'title'     => 'Tutor Support',                     // Icon section title
        'sub_title' => 'Till exam',   // Icon section sub title
    ), $atts);
    $current_product_id         = get_the_ID();
    $course_info_icon_1         = get_post_meta($current_product_id, 'course_info_icon_1', true);
    $course_info_text_1         = get_post_meta($current_product_id, 'course_info_text_1', true);
    $course_info_text_2_1         = get_post_meta($current_product_id, 'course_info_text_2_1', true);
    $course_info_icon_2         = get_post_meta($current_product_id, 'course_info_icon_2', true);
    $course_info_text_2         = get_post_meta($current_product_id, 'course_info_text_2', true);
    $course_info_text_2_2         = get_post_meta($current_product_id, 'course_info_text_2_2', true);
    $course_info_icon_3         = get_post_meta($current_product_id, 'course_info_icon_3', true);
    $course_info_text_3         = get_post_meta($current_product_id, 'course_info_text_3', true);
    $course_info_text_2_3         = get_post_meta($current_product_id, 'course_info_text_2_3', true);
    $course_info_icon_4         = get_post_meta($current_product_id, 'course_info_icon_4', true);
    $course_info_text_4         = get_post_meta($current_product_id, 'course_info_text_4', true);
    $course_info_text_2_4         = get_post_meta($current_product_id, 'course_info_text_2_4', true);
    $course_info_icon_5         = get_post_meta($current_product_id, 'course_info_icon_5', true);
    $course_info_text_5         = get_post_meta($current_product_id, 'course_info_text_5', true);
    $course_info_text_2_5         = get_post_meta($current_product_id, 'course_info_text_2_5', true);
    $course_info_icon_6         = get_post_meta($current_product_id, 'course_info_icon_6', true);
    $course_info_text_6         = get_post_meta($current_product_id, 'course_info_text_6', true);
    $course_info_text_2_6         = get_post_meta($current_product_id, 'course_info_text_2_6', true);
?>
    <div class="la-gcse-bottom-post-content cpd-course-all-icons-content">
        <div class="la-gcse-bottom-single d-flex">
            <?php
            if ($course_info_icon_1) {
            ?>
                <div class="la-cpd-single-icon-holder">
                    <img width="45" height="45" src="<?php echo wp_get_attachment_image_url($course_info_icon_1) ?>" alt="<?php echo $course_info_text_1 ?>" title="<?php echo $course_info_text_1 ?>">
                </div>
            <?php
            }
            ?>
            <div class="la-cpd-single-icon-contents">
                <p><?php echo esc_html($course_info_text_1) ?></p>
                <p><?php echo esc_html($course_info_text_2_1) ?></p>
            </div>
        </div>
        <div class="la-gcse-bottom-single d-flex"><?php
                                                    if ($course_info_icon_2) {
                                                    ?>
                <div class="la-cpd-single-icon-holder">
                    <img width="45" height="45" src="<?php echo wp_get_attachment_image_url($course_info_icon_2) ?>" alt="<?php echo $course_info_text_2 ?>" title="<?php echo $course_info_text_2 ?>">
                </div>
            <?php
                                                    }
            ?>
            <div class="la-cpd-single-icon-contents">
                <p><?php echo esc_html($course_info_text_2) ?></p>
                <p><?php echo esc_html($course_info_text_2_2) ?></p>
            </div>
        </div>
        <div class="la-gcse-bottom-single d-flex"><?php
                                                    if ($course_info_icon_3) {
                                                    ?>
                <div class="la-cpd-single-icon-holder">
                    <img width="45" height="45" src="<?php echo wp_get_attachment_image_url($course_info_icon_3) ?>" alt="<?php echo $course_info_text_3 ?>" title="<?php echo $course_info_text_3 ?>">
                </div>
            <?php
                                                    }
            ?>
            <div class="la-cpd-single-icon-contents">
                <p><?php echo esc_html($course_info_text_3) ?></p>
                <p><?php echo esc_html($course_info_text_2_3) ?></p>
            </div>
        </div>
        <div class="la-gcse-bottom-single d-flex"><?php
                                                    if ($course_info_icon_4) {
                                                    ?>
                <div class="la-cpd-single-icon-holder">
                    <img width="45" height="45" src="<?php echo wp_get_attachment_image_url($course_info_icon_4) ?>" alt="<?php echo $course_info_text_4 ?>" title="<?php echo $course_info_text_4 ?>">
                </div>
            <?php
                                                    }
            ?>
            <div class="la-cpd-single-icon-contents">
                <p><?php echo esc_html($course_info_text_4) ?></p>
                <p><?php echo esc_html($course_info_text_2_4) ?></p>
            </div>
        </div>
        <div class="la-gcse-bottom-single d-flex"><?php
                                                    if ($course_info_icon_5) {
                                                    ?>
                <div class="la-cpd-single-icon-holder">
                    <img width="45" height="45" src="<?php echo wp_get_attachment_image_url($course_info_icon_5) ?>" alt="<?php echo $course_info_text_5 ?>" title="<?php echo $course_info_text_5 ?>">
                </div>
            <?php
                                                    }
            ?>
            <div class="la-cpd-single-icon-contents">
                <p><?php echo esc_html($course_info_text_5) ?></p>
                <p><?php echo esc_html($course_info_text_2_5) ?></p>
            </div>
        </div>
        <div class="la-gcse-bottom-single d-flex"><?php
                                                    if ($course_info_icon_6) {
                                                    ?>
                <div class="la-cpd-single-icon-holder">
                    <img width="45" height="45" src="<?php echo wp_get_attachment_image_url($course_info_icon_6) ?>" alt="<?php echo $course_info_text_6 ?>" title="<?php echo $course_info_text_6 ?>">
                </div>
            <?php
                                                    }
            ?>
            <div class="la-cpd-single-icon-contents">
                <p><?php echo esc_html($course_info_text_6) ?></p>
                <p><?php echo esc_html($course_info_text_2_6) ?></p>
            </div>
        </div>
    </div>
<?php
    $html = ob_get_clean();
    return $html;
}

function get_custom_formatted_variation($variation)
{
    $attributes = $variation->get_attributes();
    $formatted_attributes = array();

    foreach ($attributes as $name => $value) {
        // Only include the 'courses' attribute
        if (strpos($name, 'courses') !== false) {
            $taxonomy = str_replace('attribute_', '', $name);
            $term = get_term_by('slug', $value, $taxonomy);
            if (!is_wp_error($term) && $term && $term->name) {
                $formatted_attributes[] = $term->name;
            } else {
                $formatted_attributes[] = $value;
            }
        }
    }

    return implode(', ', $formatted_attributes);
}

add_action('template_redirect', function () {
    if (is_page([
        'advanced',
        'social-care',
        'cannulation',
        'adult-care',
        'ecg-course',
        'vaccination',
        'care-certificate',
        'vitamin-b12'
    ])) {
        // Map of old pages to new redirect URLs
        $redirect_map = [
            'advanced' => 'https://lead-academy.org/advanced-phlebotomy-training/?utm_source=clicksend&utm_medium=sms&utm_campaign=phlebotomy_sms',
            'social-care' => 'https://lead-academy.org/course/level-3-award-in-health-and-social-care/?utm_source=clicksend&utm_medium=sms&utm_campaign=phlebotomy_sms',
            'cannulation' => 'https://lead-academy.org/cannulation-training/?utm_source=clicksend&utm_medium=sms&utm_campaign=phlebotomy_sms',
            'adult-care' => 'https://lead-academy.org/course/level-3-diploma-in-adult-care/?utm_source=clicksend&utm_medium=sms&utm_campaign=phlebotomy_sms',
            'ecg-course' => 'https://lead-academy.org/course/ecg-training/?utm_source=clicksend&utm_medium=sms&utm_campaign=phlebotomy_sms',
            'vaccination' => 'https://lead-academy.org/course/vaccination-and-immunisation-training/?utm_source=clicksend&utm_medium=sms&utm_campaign=phlebotomy_sms',
            'care-certificate' => 'https://lead-academy.org/course/care-certificate-training/?utm_source=clicksend&utm_medium=sms&utm_campaign=phlebotomy_sms',
            'vitamin-b12' => 'https://lead-academy.org/course/vitamin-b12-injection-course/?utm_source=clicksend&utm_medium=sms&utm_campaign=phlebotomy_sms',
        ];

        // Get the current page slug
        global $post;
        if (!$post || !isset($redirect_map[$post->post_name])) {
            return;
        }

        // Perform the 301 redirect
        $redirect_url = $redirect_map[$post->post_name];
        wp_redirect($redirect_url, 301);
        exit;
    }
});

function convertMinutesToHours($minutesString)
{
    // Regular expression to match "hour" or "hours" (case-insensitive)
    $pattern = '/\bHours?\b/i'; // The 's?' allows for the optional 's', and 'i' makes it case-insensitive.

    if (preg_match($pattern, $minutesString)) {
        return $minutesString;
    } else {
        $cleaned = str_replace(['Duration', ':', 'Minutes'], '', $minutesString);
        $trimmed = trim($cleaned);
        $minutes = intval($trimmed);
        $hours = intdiv($minutes, 60);
        $remainingMinutes = $minutes % 60;
        if ($remainingMinutes > 0 && $hours > 0) {
            return "Duration: {$hours} hours {$remainingMinutes} Minutes";
        } else if ($hours > 0) {
            return "Duration: {$hours} hours";
        } else if ($remainingMinutes > 0) {
            return "Duration: {$remainingMinutes} Minutes";
        } else {
            return "Duration: * minutes";
        }
    }
}


add_action('woocommerce_order_status_completed', 'send_student_id_email_on_purchase', 10, 1);

function send_student_id_email_on_purchase($order_id)
{
    // Get the order object
    $order = wc_get_order($order_id);

    // Define the ID of the Student ID Card product
    $student_id_product_id = 365011;

    // Check if the product exists in the order
    $has_student_id_product = false;

    foreach ($order->get_items() as $item) {
        if ($item->get_product_id() == $student_id_product_id) {
            $has_student_id_product = true;
            break;
        }
    }

    // If the product exists, send the email
    if ($has_student_id_product) {
        // Get the customer's email
        $customer_email = $order->get_billing_email();

        // Email subject with warning icon
        $subject = '⚠️ URGENT: Please Fill-up Your Information for Student ID Order';

        // Email message
        $message = "
            Dear Learner,

            Warmest greetings from Lead Academy. Please fill-up the form below with your details for your Student ID card:

            Form link: https://lead-academy.org/student-id-card-order-details

            Please note the processing time is <strong>7 to 9 working days</strong>.

            If you have any further questions or need assistance, feel free to contact our support team at:
            <ul>
                <li><strong>Email</strong>: info@lead-academy.org</li>
                <li><strong>Phone</strong>: 0203 880 8347</li>
            </ul>

            We appreciate your patience and if you require any further information please do not hesitate to get back in touch.

            Thank you,
            <strong>Lead Academy Support Team</strong>
        ";

        // Email headers
        $headers = array('Content-Type: text/html; charset=UTF-8');

        // Send the email
        wp_mail($customer_email, $subject, nl2br($message), $headers);
    }
}






//************************* Start Omnisend trigger functionality *************************

/**
 * Omnisend consent_form event call
 *
 * @param $order
 * @param $product
 * @param $item
 */


function la_consent_form($order, $product, $item)
{


    $course_date = "";
    if ($product->is_type('variable')) {
        $variation_id = $item->get_variation_id();
        $variation = wc_get_product($variation_id);
        $course_date = wc_get_formatted_variation($variation, true, false, false);
    } else {
        $course_date = $product->get_title();
    }


    $basic_phlebotomy = array(354284,376417,376420,377824,408597,457511,465279,463897);
    $advanced_phlebotomy = array(368595,382016,410644,386971,420510,464447);
    $IV_Cannulation_Training = array(371100,380325,436829);
    $nail_Training = array(394220,438477,438480,409404,435450);

    // Default consent form URL
    $consent_form_url = 'https://lead-academy.org/consent-form/' . $order->get_id();

    if (in_array($product->get_id(), $basic_phlebotomy)) {
        $consent_form_url = 'https://lead-academy.org/consent-form/' . $order->get_id();
    } elseif (in_array($product->get_id(), $advanced_phlebotomy)) {
        $consent_form_url = 'https://lead-academy.org/consent-form-advanced-phlebotomy/' . $order->get_id();
    } elseif (in_array($product->get_id(), $IV_Cannulation_Training)) {
        $consent_form_url = 'https://lead-academy.org/consent-form-iv-cannulation/' . $order->get_id();
    } elseif (in_array($product->get_id(), $nail_Training)){
        $consent_form_url = 'https://lead-academy.org/nail-training-consent-form' . $order->get_id();
    }elseif ($product->get_id() == 448459){
        $consent_form_url = 'https://lead-academy.org/consent-form-iv-drip-training' . $order->get_id();
    }

    $dynamic_value = [
    "Consent_Form_URL" => 'Please <a href="' . $consent_form_url . '" target="_blank" style="color: #AF1F47; text-decoration: underline;">click here</a> and sign the consent digitally',

    "Course_Date" => $course_date
    ];


    $data = [
        "contact" => [
            "email" => $order->get_billing_email()
        ],
        "origin" => "api",
        "eventName" => "consent_form",
        "properties" => $dynamic_value
    ];

    // API request to Omnisend
    $post_api_url = "https://api.omnisend.com/v5/events";

    $response = wp_remote_post($post_api_url, [
        'headers' => [
            'X-API-KEY' => '644a6c6f71a2f8c907940b48-ZPvXST3Zm2mzhZ5hnUqnBLZJOPRegnEqWuJTCd7J4SuvJhKrQF',
            'Content-Type' => 'application/json',
        ],
        'body' => json_encode($data),
    ]);
    if (is_wp_error($response)) {
        error_log('ConsentForm ERROR: ' . $response->get_error_message());
        $serialized_data = maybe_serialize($data);
        wp_schedule_single_event(time() + 60, 'la_retry_consent_form_event', [$serialized_data]);
    } else {
        $code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        error_log("ConsentForm Response [$code]: $body");

        if ($code >= 400) {
            $serialized_data = maybe_serialize($data);
            wp_schedule_single_event(time() + 60, 'la_retry_consent_form_event', [$serialized_data]);
        }
    }
}

add_action('la_retry_consent_form_event', 'la_retry_consent_form');
function la_retry_consent_form($data)
{
    // Unserialize data if it was serialized for cron
    $unserialized_data = maybe_unserialize($data);
    
    wp_remote_post("https://api.omnisend.com/v5/events", [
        'headers' => [
            'X-API-KEY' => '644a6c6f71a2f8c907940b48-ZPvXST3Zm2mzhZ5hnUqnBLZJOPRegnEqWuJTCd7J4SuvJhKrQF',
            'Content-Type' => 'application/json',
        ],
        'body' => json_encode($unserialized_data),
    ]);
}


/**
 * Omnisend InstantMail event trigger
 *
 * @param $order
 * @param $item
 */

function la_instant_mail($order, $item)
{

    $venues = [
        "London" => [

            "vanue_link" => "If you are arriving by Train or Bus, our venue is easily accessible via public transportation. You can check detailed directions by <a href=\"https://lead-academy.org/venue/london\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
            "address" => "2nd Floor, Unit: 2.6, Bank Studio\n23 Park Royal Road\nLondon NW10 7JH",
            "instructions_all" => "<strong>Instructions to get into the training room:</strong> Upon arriving at the venue Bank Studio, use the intercom to dial 206/203 to access the building. Take the lift to the 2nd floor and go to unit 2.6.",
            "parking" => "Free on-street parking is available on a first-come, first-serve basis. Alternative parking arrangements can be found by <a href=\"https://www.yourparkingspace.co.uk/search?rental=short&lat=51.526108&lng=-0.266143&address=NW10%207JH,%20London\ target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
            "swedish_massage" => "Please note that students will be required to work on each other during the session; therefore, due to any medical condition or from a religious point of view, if you have any issue with applying the massage on yourself, then kindly bring another person with you to whom we can apply the massage technique to teach you the best massage therapy approaches. You can only bring another person if you have issues in applying massage techniques in your body. It is essential that all students participate fully in both giving and receiving the treatment to ensure a comprehensive learning experience for everyone.<br/>
            Kindly wear comfortable clothing as you will be giving and receiving a full body massage during the practical part of the course.",
            "certificate" => "<strong>For Certificate:</strong> To receive your hardcopy certificate with the correct name, please reply to this email with the full name you want on it. If you don’t confirm the name 4 working days before the class, Lead Academy will not be responsible for any errors on the certificate",
            "other_instructions" => "<strong>Other Instructions:</strong>Please be prepared to both give and receive Reflexology treatments during the practical session. Ensure you wear comfortable clothing. Additionally, inform us of any medical conditions that may prevent you from receiving treatment, such as a history of blood clotting, recent surgery (within the last six months), or being in the first trimester of pregnancy.",
            "time" => "10:00 am - 5:00 pm",
            "training_venue" => "You are requested to come to the training venue by 9:45 am. After 10 am, we will not allow you to the classroom, as it may interrupt the class.",
            "location_guide" => "For more information, please see <a href=\"https://lead-academy.org/wp-content/uploads/0223/12/Lead-Academy-Training-London-Guide-1.pdf\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>"
        ],
        "Swindon" => [
            "vanue_link" => "If you are arriving by Train or Bus, our venue is easily accessible via public transportation. You can check detailed directions by <a href=\"https://lead-academy.org/venue/swindon\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
            "address" => "Office 15, Pure Offices\nKembrey Park\nSwindon, SN2 8BW",
            "instructions_all" => "<p><strong>Instructions to get into the training venue:</strong>\n</p>",
            "parking" => "Free on-site parking is available on a first-come, first-serve basis. Alternative parking arrangements can be found by <a href=\"https://www.yourparkingspace.co.uk/search?rental=short&lat=51.578885&lng=-1.766471&address=SN2%208BW\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
            "certificate" => "<strong>For Certificate:</strong> To receive your hardcopy certificate with the correct name, please reply to this email with the full name you want on it. If you don’t confirm the name 4 working days before the class, Lead Academy will not be responsible for any errors on the certificate",
            "time" => "10:00 am - 5:00 pm",
            "training_venue" => "You are requested to come to the training venue by 9:45 am. After 10 am, we will not allow you to the classroom, as it may interrupt the class.",
            "time" => "10:00 am - 5:00 pm",
            "training_venue" => "You are requested to come to the training venue by 9:45 am. After 10 am, we will not allow you to the classroom, as it may interrupt the class.",
        ],
        "Bristol" => [
            "vanue_link" => "If you are arriving by Train or Bus, our venue is easily accessible via public transportation. You can check detailed directions by <a href=\"https://lead-academy.org/venue/bristol\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
            "address" => "Filwood Community Centre,\n15 – 19 Filwood Broadway,\nBristol BS4 1JL",
            "instructions_all" => "<p><strong>Instructions to get into the training venue:</strong>\n</p>",
            "parking" => "Free on-street parking is available on a first-come, first-serve basis. Alternative parking arrangements can be found by <a href=\"https://www.yourparkingspace.co.uk/search?rental=short&lat=51.425192&lng=-2.5879&address=BS4%201JP\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
            "certificate" => "<strong>For Certificate:</strong> To receive your hardcopy certificate with the correct name, please reply to this email with the full name you want on it. If you don’t confirm the name 4 working days before the class, Lead Academy will not be responsible for any errors on the certificate",
            "time" => "10:00 am - 5:00 pm",
            "training_venue" => "You are requested to come to the training venue by 9:45 am. After 10 am, we will not allow you to the classroom, as it may interrupt the class.",
        ],
        "Cardiff" => [
            "vanue_link" => "If you are arriving by Train or Bus, our venue is easily accessible via public transportation. You can check detailed directions by <a href=\"https://lead-academy.org/venue/cardiff\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
            "address" => "Ynysmaerdy Community Centre\nGlan-Yr-Ely,\nYnysmaerdy,\nPontyclun,\nCF72 8LJ",
            "instructions_all" => "<p><strong>Instructions to get into the training venue:</strong>\n</p>",
            "parking" => "Free on-site parking is available on a first-come, first-serve basis.",
            "certificate" => "<strong>For Certificate:</strong> To receive your hardcopy certificate with the correct name, please reply to this email with the full name you want on it. If you don’t confirm the name 4 working days before the class, Lead Academy will not be responsible for any errors on the certificate",
            "time" => "10:00 am - 5:00 pm",
            "training_venue" => "You are requested to come to the training venue by 9:45 am. After 10 am, we will not allow you to the classroom, as it may interrupt the class.",
        ],
        "Birmingham" => [
            "vanue_link" => "If you are arriving by Train or Bus, our venue is easily accessible via public transportation. You can check detailed directions by <a href=\"https://lead-academy.org/venue/birmingham\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
            "address" => "Lead Academy,\nOffice 4J/4K, 4th Floor\nCobalt Square\n83-85 Hagley      Road\nBirmingham\nB16 8QG",
            "instructions_all" => "<p><strong>Instructions to get into the training venue:</strong>\n</p>",
            "instructions_birmingham" => "👉 If your class is during a weekday and if you are unable to find the venue, please watch this tutorial for instruction: <a href=\"https://www.youtube.com/watch?v=WF_LhJM3i-M\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">click here</a><br><br>👉 If your class is during a weekend and if you are unable to find the venue, please watch this tutorial for instruction: <a href=\"https://www.youtube.com/watch?v=OgLPH8dXLRk\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">click here</a>",

            "parking" => "Free on-site limited visitor parking is available on a first-come, first-serve basis. Alternative paid parking arrangements can be found by <a href=\"https://www.yourparkingspace.co.uk/search?rental=short&address=B16%208QG,%20Birmingham&lat=52.472511&lng=-1.922624&include_booked=false&space_size&season_plan=mon-sun&sort=location&start=2024-10-02T16%3A30%3A00%2B00%3A00&end=2024-10-02T23%3A30%3A00%2B01%3A00\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
            "extra_note" => "Please note that students will be required to work on each other during the session; therefore, due to any medical condition or from a religious point of view, if you have any issue with applying the massage on yourself, then kindly bring another person with you to whom we can apply the massage technique to teach you the best massage therapy approaches. You can only bring another person if you have issues in applying massage techniques in your body.<br/>
            Wear comfortable clothing, keep nails short and hair tied back, avoid wearing jewelry, bring cleansing wipes, and minimise makeup to avoid unnecessary delays.<br/>
            While previous courses may cover similar areas, it is essential to maintain attention and consideration for others. Negative comments or comparisons to other teachings are not helpful or necessary.",
            "certificate" => "<strong>For Certificate:</strong> To receive your hardcopy certificate with the correct name, please reply to this email with the full name you want on it. If you don’t confirm the name 4 working days before the class, Lead Academy will not be responsible for any errors on the certificate",
            "time" => "10:00 am - 5:00 pm",
            "training_venue" => "You are requested to come to the training venue by 9:45 am. After 10 am, we will not allow you to the classroom, as it may interrupt the class.",
        ],
        "Manchester" => [
        "address" => "Salford Watersports Centre,\n15 The Quays, Salford\nM50 3SQ",
        "time" => "10:00 am - 5:00 pm",
        "vanue_link" => "Arriving by Train or Bus: The venue is easily accessible via public transport. You can check detailed directions by <a href=\"https://lead-academy.org/venue/manchester\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
        "parking" => "Free on-site parking is available. Alternative parking arrangements can be found by  <a href=\"https://lead-academy.org/venue/manchester\" target=\"_blank\" style=\"color: #AF1F47; text-decoration: underline;\">clicking here</a>.",
        "certificate" => "<strong>For Certificate:</strong> To receive your hardcopy certificate with the correct name, please reply to this email with the full name you want on it. If you don’t confirm the name 4 working days before the class, Lead Academy will not be responsible for any errors on the certificate",
        "location_guide" => "<strong>Instructions for Entering the Training Room:</strong>Once you are inside the Salford Watersports Centre, please proceed to Reception, where a team member will guide you to the training room. "
        ]
    ];

    $product_id     = $item->get_product_id();
    $meta_id = ($product_id == 366854) ? 354284 : $product_id;

    $three_days_ids = array(368595, 382016, 386971, 410644, 394220, 409404);
    $product_id     = $item->get_product_id();
    $product_name = $item->get_name();
    $variation_name = "";
    $variation_id   = $item->get_variation_id();

    $first_date = "";
    $middle_date = "";
    $last_date = "";

    $variation_data = $item->get_meta_data();

    $la_phleb_course_meta_group = get_post_meta($meta_id, 'la_phleb_course_meta_group', true);

    foreach ($variation_data as $meta) {
        if ($meta->key === 'courses') {
            $variation_name = $meta->value;
        }
        foreach ($la_phleb_course_meta_group as $course) {
            if (isset($course['la_phleb_course_var_id']) && $course['la_phleb_course_var_id'] == $variation_id) {
                $first_date = $course['adv_course_date'];
                $middle_date = $course['adv_course_middle_date'];
                $last_date = in_array($product_id, $three_days_ids) ? $course['adv_course_last_date'] : $course['adv_course_date'];
                break;
            }
        }
    }

    $location = $meta_value = get_post_meta($meta_id, 'la_phleb_course_location_root', true);

    $venue = [];
    if ($location) {
        $venue = $venues[$location];
    }

    if (!$venue) {
        error_log(sprintf("Invalid venue information. Location: %s , OrderId: %d, ProductId: %d", $location, $order->get_id(), $product_id));
        return;
    }

    $extra_note = "";
    $Practical_1_Day_therapy_courses = [414746, 414748, 414685];

    if ($location == 'Birmingham' && in_array($product_id, $Practical_1_Day_therapy_courses)) {
        $extra_note = isset($venue['extra_note']) ? $venue['extra_note'] : "";
    }

    $swedish_massage = "";
    if ($location == 'London' && $product_id == 421612) {
        $swedish_massage = isset($venue['swedish_massage']) ? $venue['swedish_massage'] : "";
    }

    $location_guide = "";
    if($location == 'London' || $location == 'Manchester') {
        $location_guide = isset($venue['location_guide']) ? $venue['location_guide'] : "";
    }

    $adv_phle_courses = [368595,382016,386971,410644,420510];
    $certificate_message = "<strong>To Issue Your Certificate:</strong>To receive your hardcopy certificate with the correct name, please reply to this email with a photo ID to verify and prepare the certificate. If you don’t confirm the name 4 working days before the class, Lead Academy will not be responsible for any errors on the certificate.";

    $Reflexology_massage = "";
    if ($location == 'London' && $product_id == 439294) {
        $Reflexology_massage = isset($venue['other_instructions']) ? $venue['other_instructions'] : "";
    }

    $validate_properties = [
        "Course_Name" => $product_name, //product name
        "Course_Date" => $variation_name ? $variation_name : "", // variation name
        "Venue_Address" => isset($venue['address']) ? $venue['address'] : "",
        "instructions_All" => isset($venue['instructions_all']) ? $venue['instructions_all'] : "",
        "instructions_Birmingham" => isset($venue['instructions_birmingham']) ? $venue['instructions_birmingham'] : "",
        "Vanue_Link" => isset($venue['vanue_link']) ? $venue['vanue_link'] : "",
        "Parking" => isset($venue['parking']) ? $venue['parking'] : "",
        "Certificate" => isset($venue['certificate']) ? $venue['certificate'] : "",
        "Time" => isset($venue['time']) ? $venue['time'] : "",
        "Training_Venue" => isset($venue['training_venue']) ? $venue['training_venue'] : "",
        "Extra_Note" => $extra_note,
        "Swedish_Massage" => $swedish_massage,
        "Other_Instructions" => $Reflexology_massage,
        "Location_Guide" => $location_guide
    ];

    if($product_id == 413582){
        $validate_properties['Time'] = "9:30 am - 4:00 pm";
        $validate_properties['Training_Venue'] = "You are requested to come to the training venue by 9:15 am. After 9:30 am, we will not allow you to the classroom, as it may interrupt the class";
    }

    if($product_id == 389109){
        $validate_properties['Time'] = "02:00 pm - 5:00 pm";
        $validate_properties['Training_Venue'] = "You are requested to come to the training venue by 1:45 pm. After 2 pm, we will not allow you to the classroom, as it may interrupt the class";
    }

    if (in_array($product_id, $adv_phle_courses)) {
        $validate_properties['Certificate'] = $certificate_message;
    }

    $data = [
        "contact" => [
            "email" => $order->get_billing_email(),
        ],
        "origin" => "api",
        "eventName" => "InstantMail",
        "properties" => $validate_properties
    ];

    // API request to Omnisend
    $post_api_url = "https://api.omnisend.com/v5/events";

    $response = wp_remote_post($post_api_url, [
        'headers' => [
            'X-API-KEY' => '644a6c6f71a2f8c907940b48-ZPvXST3Zm2mzhZ5hnUqnBLZJOPRegnEqWuJTCd7J4SuvJhKrQF',
            'Content-Type' => 'application/json',
        ],
        'body' => json_encode($data),
    ]);

    if (is_wp_error($response)) {
        error_log('InstantMail ERROR: ' . $response->get_error_message());
    } else {
        $code = wp_remote_retrieve_response_code($response);
        $body = wp_remote_retrieve_body($response);
        error_log("InstantMail Response [$code]: $body");
    }

    if (is_wp_error($response) || wp_remote_retrieve_response_code($response) >= 400) {
        // Retry after 1 minute
        $serialized_data = maybe_serialize($data);
        wp_schedule_single_event(time() + 60, 'la_retry_instant_mail_event', [$serialized_data]);
    }
}

add_action('la_retry_instant_mail_event', 'la_retry_instant_mail');

function la_retry_instant_mail($data)
{
    // Unserialize data if it was serialized for cron
    $unserialized_data = maybe_unserialize($data);
    
    wp_remote_post("https://api.omnisend.com/v5/events", [
        'headers' => [
            'X-API-KEY' => 'your-key',
            'Content-Type' => 'application/json',
        ],
        'body' => json_encode($unserialized_data),
    ]);
}


function la_check_weekend_or_weekday($date)
{
    $dateObject = DateTime::createFromFormat('d F Y', $date);
    if (!$dateObject) {
        return "Invalid";
    }
    $dayOfWeek = $dateObject->format('l');
    if (in_array($dayOfWeek, ['Saturday', 'Sunday'])) {
        return "weekend";
    } else {
        return "weekday";
    }
}



//************************* End Omnisend trigger functionality *************************







add_action('admin_menu', 'remove_plugins_themes_access', 999);
function remove_plugins_themes_access()
{
    $developers = array('mfh632@gmail.com', 'moinsharif.bd@gmail.com', 'rahad.ads@gmail.com', 'rdprakib303@gmail.com', 'info@lead-academy.org', 'della1961allcock@gmail.com', 'sadmankabir2@gmail.com');
    $current_user_email = wp_get_current_user()->user_email;
    if (!in_array($current_user_email, $developers)) {
        // Remove Plugins and Themes menu items for non-developer users
        remove_menu_page('plugins.php');
        // remove_menu_page('themes.php');

        // Show a message if non-developer users try to access Plugins or Themes pages directly
        global $pagenow;
        $remove_access_pages = array(
            'plugins.php',
            'plugin-install.php',
            'plugin-editor.php',
            'themes.php',
            // 'user-new.php',
            // 'user-edit.php',
            // 'users.php',
        );
        if (in_array($pagenow, $remove_access_pages)) {
            wp_die(__('You are not allowed to access this page.'));
        }
    }
}

function add_la_student_lms_notice()
{
    if (is_admin()) return; // Don't display in admin area
?>
    <!-- Custom Popup Notice HTML -->
    <div id="la-student-lms-notice" class="la-student-lms-notice">
        <div class="la-student-lms-notice__content">
            <span class="la-student-lms-notice__close">❌</span>
            <h2>Lead Academy Student Portal Update</h2>
            <p>Our student portal is currently undergoing server upgrades and feature enhancements. You may experience brief interruptions during this period. Thank you for your patience and understanding.</p>
        </div>
    </div>

    <!-- Custom Popup Notice CSS -->
    <style>
        #la-student-lms-notice.la-student-lms-notice {
            display: none;
            position: fixed;
            z-index: 99999999999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            overflow: auto;
        }

        .la-student-lms-notice__content {
            background-color: #fff0f4;
            margin: auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            width: 90%;
            max-width: 500px;
            text-align: center;
            position: relative;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
        }

        .la-student-lms-notice__close {
            position: absolute;
            top: 15px;
            right: 20px;
            color: #555;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 50%;
            width: 33px;
            height: 33px;
            line-height: 30px;
            text-align: center;
            font-size: 14px;
            cursor: pointer;
        }

        .la-student-lms-notice__close:hover {
            color: #000;
            border-color: #aaa;
        }

        .la-student-lms-notice__content p a {
            color: #b91948;
        }

        @media (max-width: 480px) {
            .la-student-lms-notice__content {
                padding: 20px;
                width: 95%;
            }

            .la-student-lms-notice__close {
                font-size: 12px;
                top: -10px;
                right: -5px;
                width: 30px;
                height: 30px;
                line-height: 26px;
            }
        }
    </style>

    <!-- Custom Popup Notice JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Attach click event to the login link to trigger the popup
            var loginLink = document.getElementById("la-login-link");
            if (loginLink) {
                loginLink.addEventListener("click", function(event) {
                    event.preventDefault(); // Prevent default link behavior if you want to show the popup first
                    var modal = document.getElementById("la-student-lms-notice");
                    modal.style.display = "flex";
                });
            }

            // Close popup when clicking the close button
            var closeButton = document.querySelector(".la-student-lms-notice__close");
            if (closeButton) {
                closeButton.addEventListener("click", function() {
                    var modal = document.getElementById("la-student-lms-notice");
                    modal.style.display = "none";
                });
            }
            // Optional: Close popup if clicking outside the content area
            var modal = document.getElementById("la-student-lms-notice");
            if (modal) {
                modal.addEventListener("click", function(event) {
                    if (event.target === modal) {
                        modal.style.display = "none";
                    }
                });
            }
        });
    </script>
<?php
}
// add_action('wp_footer', 'add_la_student_lms_notice');

/**
 * ===============================================================
 * Enqueue OverlayScrollbars Assets for Custom Scrollbar
 * Only loads on pages defined in FACE_2_FACE_PRODUCT_CODES.
 * ===============================================================
 */
function la_child_enqueue_custom_scrollbar_assets() {
    // Check if the constant is defined, if it's a single product page,
    // and if the current product ID is in the specified array.
    if ( defined('FACE_2_FACE_PRODUCT_CODES') && is_singular('product') && in_array(get_the_ID(), FACE_2_FACE_PRODUCT_CODES) ) {

        // Enqueue OverlayScrollbars CSS from a CDN
        wp_enqueue_style( 'overlayscrollbars-css', 'https://cdn.jsdelivr.net/npm/overlayscrollbars/css/OverlayScrollbars.min.css', array(), '1.13.0' );

        // Enqueue OverlayScrollbars JS from a CDN, with jQuery as a dependency
        wp_enqueue_script( 'overlayscrollbars-js', 'https://cdn.jsdelivr.net/npm/overlayscrollbars/js/OverlayScrollbars.min.js', array('jquery'), '1.13.0', true );

        // Enqueue our custom initialization script
        wp_enqueue_script( 'la-custom-scrollbar-init', get_stylesheet_directory_uri() . '/assets/js/custom-scrollbar-init.js', array( 'overlayscrollbars-js' ), '1.0.3', true );
    }
}
add_action( 'wp_enqueue_scripts', 'la_child_enqueue_custom_scrollbar_assets' );


add_filter('woocommerce_coupon_is_valid', 'custom_coupon_min_category_products_validation', 10, 2);
add_action('woocommerce_coupon_options_save', 'save_custom_coupon_min_category_products_meta', 10, 2);
add_action('woocommerce_coupon_options', 'add_custom_coupon_min_category_products_meta', 10, 2);

/**
 * Adds custom fields and loads their saved values to the coupon edit screen.
 *
 * @param int      $coupon_id The coupon ID.
 * @param WC_Coupon $coupon    The coupon object.
 */
function add_custom_coupon_min_category_products_meta($coupon_id, $coupon) {
    echo '<div class="options_group">';

    // Minimum quantity field (category-based)
    woocommerce_wp_text_input(array(
        'id'          => 'min_category_products_qty',
        'label'       => __('Minimum products from category', 'woocommerce'),
        'placeholder' => __('e.g., 2', 'woocommerce'),
        'description' => __('The minimum quantity of products required from the specified category for this coupon to be valid.', 'woocommerce'),
        'type'        => 'number',
        'desc_tip'    => true,
        'custom_attributes' => array(
            'min' => '1',
            'step' => '1'
        ),
        'value'       => $coupon->get_meta('min_category_products_qty')
    ));

    // Category selection field
    $categories = get_terms('product_cat', array('hide_empty' => false));
    $category_options = array('' => __('Select a category', 'woocommerce'));
    if ($categories) {
        foreach ($categories as $category) {
            $category_options[$category->slug] = $category->name;
        }
    }

    woocommerce_wp_select(array(
        'id'          => 'target_product_category_slug',
        'label'       => __('Target product category', 'woocommerce'),
        'description' => __('The product category to which the minimum quantity rule applies.', 'woocommerce'),
        'desc_tip'    => true,
        'options'     => $category_options,
        'value'       => $coupon->get_meta('target_product_category_slug')
    ));

    // Minimum total product purchase (any category)
    woocommerce_wp_text_input(array(
        'id'          => 'min_total_products_qty',
        'label'       => __('Minimum total products (any category)', 'woocommerce'),
        'placeholder' => __('e.g., 3', 'woocommerce'),
        'description' => __('The minimum quantity of products (from any category) required for this coupon to be valid.', 'woocommerce'),
        'type'        => 'number',
        'desc_tip'    => true,
        'custom_attributes' => array(
            'min' => '1',
            'step' => '1'
        ),
        'value'       => $coupon->get_meta('min_total_products_qty')
    ));

    // NEW FIELD: Exclude Face-to-Face Courses
    woocommerce_wp_checkbox(array(
        'id'          => 'exclude_face_to_face_courses',
        'label'       => __('Exclude Face-to-Face Courses', 'woocommerce'),
        'description' => __('Check this to prevent the coupon from being applied if any predefined Face-to-Face course products are in the cart.', 'woocommerce'),
        'desc_tip'    => true,
        'value'       => $coupon->get_meta('exclude_face_to_face_courses')
    ));

    echo '</div>';
}

/**
 * Saves the custom meta fields when a coupon is saved.
 *
 * @param int      $coupon_id The post ID of the coupon being saved.
 * @param WC_Coupon $coupon    The coupon object.
 */
function save_custom_coupon_min_category_products_meta($coupon_id, $coupon) {
    $min_qty       = isset($_POST['min_category_products_qty']) ? absint($_POST['min_category_products_qty']) : '';
    $category_slug = isset($_POST['target_product_category_slug']) ? sanitize_text_field($_POST['target_product_category_slug']) : '';
    $min_total_qty = isset($_POST['min_total_products_qty']) ? absint($_POST['min_total_products_qty']) : '';
    $exclude_face  = isset($_POST['exclude_face_to_face_courses']) ? 'yes' : 'no';

    $coupon->update_meta_data('min_category_products_qty', $min_qty);
    $coupon->update_meta_data('target_product_category_slug', $category_slug);
    $coupon->update_meta_data('min_total_products_qty', $min_total_qty);
    $coupon->update_meta_data('exclude_face_to_face_courses', $exclude_face);
    $coupon->save();
}

/**
 * Validates the coupon based on the minimum quantity of products + exclusions.
 *
 * @param bool     $valid  Whether the coupon is valid.
 * @param WC_Coupon $coupon The coupon object.
 * @return bool|WP_Error  True if valid, false or WP_Error if not.
 */
function custom_coupon_min_category_products_validation($valid, $coupon) {
    $min_quantity_cat    = $coupon->get_meta('min_category_products_qty');
    $target_category     = $coupon->get_meta('target_product_category_slug');
    $min_total_quantity  = $coupon->get_meta('min_total_products_qty');
    $exclude_face        = $coupon->get_meta('exclude_face_to_face_courses');

    // ✅ Predefined Face-to-Face product IDs
    $face_to_face_ids = FACE_2_FACE_PRODUCT_CODES;

    // ✅ Exclude face-to-face courses check
    if ($exclude_face === 'yes') {
        foreach (WC()->cart->get_cart() as $cart_item) {
            if (in_array($cart_item['product_id'], $face_to_face_ids, true)) {
                throw new Exception(__('This coupon cannot be applied to Face-to-Face courses.', 'woocommerce'));
            }
        }
    }

    // ✅ Check total products in cart (any category)
    if (!empty($min_total_quantity)) {
        $cart_total_qty = WC()->cart->get_cart_contents_count();
        if ($cart_total_qty < $min_total_quantity) {
            throw new Exception(sprintf(
                __('You must purchase at least %d products in total to use this coupon.', 'woocommerce'),
                $min_total_quantity
            ));
        }
    }

    // ✅ Check category-specific requirement
    if (!empty($min_quantity_cat) && !empty($target_category)) {
        $category_product_ids = [];

        foreach (WC()->cart->get_cart() as $cart_item) {
            $product_id = $cart_item['product_id'];
            $product    = wc_get_product($product_id);
            $parent_id  = $product->is_type('variation') ? $product->get_parent_id() : $product_id;

            if (has_term($target_category, 'product_cat', $parent_id)) {
                $category_product_ids[] = $parent_id;
            }
        }

        $unique_product_count = count(array_unique($category_product_ids));

        if ($unique_product_count < $min_quantity_cat) {
            throw new Exception(sprintf(
                __('You must have at least %d different products from the "%s" category to use this coupon.', 'woocommerce'),
                $min_quantity_cat,
                ucwords(str_replace('-', ' ', $target_category))
            ));
        }
    }

    return $valid;
}

// Add a filter to customize the Klarna payment gateway title
// This filter will change the title of the Klarna payment gateway to "Pay Via 3 installment"
if ( ! function_exists( 'customize_klarna_payment_gateway_title' ) ) {
    /**
     * Customize the Klarna payment gateway title.
     *
     * @param string $title The original title of the payment gateway.
     * @param string $payment_id The ID of the payment gateway.
     * @return string The modified title.
     */
}
add_filter( 'woocommerce_gateway_title', 'customize_klarna_payment_gateway_title', 25, 2 );

function customize_klarna_payment_gateway_title( $title, $payment_id ) {
    if ( 'klarna_payments_pay_over_time' === $payment_id ) {
        $title = 'Pay Via 3 installment';
    }
    return $title;
}

/** 
 * --------------------------------------------------------------------------
 * WOOCOMMERCE COUPON FOR SPECIFIC DATES
 * --------------------------------------------------------------------------
 * Adds a feature to WooCommerce coupons to make them valid only on
 * a specific list of dates, dynamically added in the admin panel.
 * Includes styling improvements for the UI.
 */


/**
 * Part 1: Add the custom fields to the coupon admin screen.
 */
add_action( 'woocommerce_coupon_options', 'add_coupon_specific_date_fields', 10, 2 );
function add_coupon_specific_date_fields( $coupon_id, $coupon ) {

    echo '<div class="options_group">';

    woocommerce_wp_checkbox( array(
        'id'          => '_enable_specific_date_validation',
        'label'       => __( 'Enable specific date validation', 'woocommerce' ),
        'description' => __( 'Check this box to make this coupon valid ONLY on the dates listed below.', 'woocommerce' ),
        'desc_tip'    => true,
        'value'       => $coupon->get_meta( '_enable_specific_date_validation' ),
    ) );

    $specific_dates = $coupon->get_meta( '_specific_valid_dates' ) ?: array('');

    ?>
    <div class="form-field specific_dates_form_field">
        <label><?php _e( 'Valid Dates', 'woocommerce' ); ?></label>
        <div id="specific_dates_wrapper">
            <?php foreach ( $specific_dates as $date ) : ?>
                <div class="specific_date_row">
                    <input type="date" name="_specific_valid_dates[]" value="<?php echo esc_attr( $date ); ?>" />
                    <button type="button" class="button remove_specific_date">Remove</button>
                </div>
            <?php endforeach; ?>
        </div>
        <button type="button" id="add_specific_date_button" class="button"><?php _e( 'Add Date', 'woocommerce' ); ?></button>
        <p class="description"><?php _e( 'Add one or more dates on which this coupon will be valid.', 'woocommerce' ); ?></p>
    </div>
    <?php

    echo '</div>';
}


/**
 * Part 2: Add CSS using the recommended WordPress enqueue method.
 */
add_action( 'admin_enqueue_scripts', 'enqueue_custom_coupon_admin_styles' );
function enqueue_custom_coupon_admin_styles( $hook_suffix ) {
    
    $screen = get_current_screen();

    // Target the coupon edit page specifically.
    if ( $screen && 'shop_coupon' === $screen->post_type && 'post' === $screen->base ) {

        $custom_css = "
            /* Align the main toggle checkbox */
            .form-field._enable_specific_date_validation_field {
                display: flex;
                align-items: center;
                gap: 6px;
                padding: 6px 0;
            }
            .form-field._enable_specific_date_validation_field .woocommerce-help-tip {
                margin-top: -2px;
            }

            /* Date section wrapper */
            .specific_dates_form_field {
                background: #f9f9f9;
                border: 1px solid #e2e4e7;
                border-radius: 6px;
                padding: 12px 14px;
                margin-top: 12px;
            }
            .specific_dates_form_field label {
                font-weight: 600;
                margin-bottom: 6px;
                display: block;
            }

            /* Date row layout */
            .specific_date_row {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-bottom: 10px;
            }
            .specific_date_row input[type='date'] {
                flex: 1;
                max-width: 250px;
                padding: 6px 8px;
                border: 1px solid #ccd0d4;
                border-radius: 4px;
            }

            /* Remove button style */
            .specific_date_row .remove_specific_date {
                background: #e74c3c;
                border-color: #c0392b;
                color: #fff;
                font-weight: 500;
                transition: background 0.2s;
            }
            .specific_date_row .remove_specific_date:hover {
                background: #c0392b;
            }

            /* Add date button */
            #add_specific_date_button {
                margin-top: 6px;
                background: #2ecc71;
                border-color: #27ae60;
                color: #fff;
                font-weight: 500;
                transition: background 0.2s;
            }
            #add_specific_date_button:hover {
                background: #27ae60;
            }

            /* Description */
            .specific_dates_form_field .description {
                margin-top: 8px;
                color: #666;
                font-size: 12px;
            }
        ";
        
        wp_add_inline_style( 'woocommerce_admin_styles', $custom_css );
    }
}


/**
 * Part 3: Add the necessary JavaScript for the repeater field to work.
 */
add_action( 'admin_footer', 'add_coupon_specific_date_script' );
function add_coupon_specific_date_script() {
    
    if ( 'shop_coupon' !== get_current_screen()->id ) {
        return;
    }
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#add_specific_date_button').on('click', function() {
                var newRow = `
                    <div class="specific_date_row">
                        <input type="date" name="_specific_valid_dates[]" value="" />
                        <button type="button" class="button remove_specific_date">Remove</button>
                    </div>`;
                $('#specific_dates_wrapper').append(newRow);
            });

            $('#specific_dates_wrapper').on('click', '.remove_specific_date', function() {
                if ($('#specific_dates_wrapper .specific_date_row').length > 1) {
                    $(this).closest('.specific_date_row').remove();
                } else {
                    $(this).closest('.specific_date_row').find('input[type="date"]').val('');
                }
            });
        });
    </script>
    <?php
}


/**
 * Part 4: Save the data from our custom fields.
 */
add_action( 'woocommerce_coupon_options_save', 'save_coupon_specific_date_fields', 10, 2 );
function save_coupon_specific_date_fields( $post_id, $coupon ) {

    $is_enabled = isset( $_POST['_enable_specific_date_validation'] ) ? 'yes' : 'no';
    $coupon->update_meta_data( '_enable_specific_date_validation', $is_enabled );

    if ( isset( $_POST['_specific_valid_dates'] ) && is_array( $_POST['_specific_valid_dates'] ) ) {
        $dates = array_map( 'sanitize_text_field', $_POST['_specific_valid_dates'] );
        $dates = array_filter( $dates );
        sort( $dates );
        $coupon->update_meta_data( '_specific_valid_dates', $dates );
    } else {
        $coupon->delete_meta_data( '_specific_valid_dates' );
    }

    $coupon->save();
}


/**
 * Part 5: The core validation logic.
 */
add_filter( 'woocommerce_coupon_is_valid', 'validate_coupon_on_specific_dates', 20, 2 );
function validate_coupon_on_specific_dates( $is_valid, $coupon ) {
    
    if ( ! $is_valid ) { return false; }

    $is_feature_enabled = $coupon->get_meta( '_enable_specific_date_validation' );
    if ( 'yes' !== $is_feature_enabled ) { return $is_valid; }

    $valid_dates = $coupon->get_meta( '_specific_valid_dates' );
    if ( empty( $valid_dates ) ) { throw new Exception( 'coupon_not_valid_for_today' ); }
    
    $today_date = wp_date( 'Y-m-d' );

    if ( ! in_array( $today_date, $valid_dates ) ) {
        throw new Exception( 'coupon_not_valid_for_today' );
    }

    return $is_valid;
}


/**
 * Part 6: Provide a custom, user-friendly error message.
 */
add_filter( 'woocommerce_coupon_error', 'specific_date_coupon_error_message', 10, 3 );
function specific_date_coupon_error_message( $err, $err_code, $coupon ) {

    if ( 'coupon_not_valid_for_today' === $err_code ) {
        return __( 'Sorry, this coupon is not valid for use on today\'s date.', 'woocommerce' );
    }
    
    return $err;
}
