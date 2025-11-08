<?php
add_action('init', 'la_export_orders_func');

/**
 * Format of filter URL
 * https://lead-academy.org/?la_export_orders=First Product Name~Second Product Name~Third Product Name
 * Without product filter display all orders
 * https://lead-academy.org/?la_export_orders&country=GB
 * https://lead-academy.org/?la_export_orders&limit=3000
 * https://lead-academy.org/?lms_course_id
 * https://lead-academy.org/?la_export_orders=420534
 * https://lead-academy.org/?la_export_orders=420534&limit=200
 * https://lead-academy.org/?la_export_orders&limit=200&status=cancelled
 * https://lead-academy.org/?la_export_orders&limit=200&country=GB
 */

// Show JSON list + remove all button
function list_json_files_with_time() {
    date_default_timezone_set('Asia/Dhaka');
    $json_dir = WP_CONTENT_DIR . '/json'; 
    $json_files = glob($json_dir . '/*.json');

    if ($json_files) {
        echo '<table style="width:100%;border-collapse:collapse;margin-top:20px;">';
        echo '<thead>';
        echo '<tr style="background:#f5f5f5;">';
        echo '<th style="border:1px solid #ddd;padding:8px;text-align:center;width:50px;">SL</th>';
        echo '<th style="border:1px solid #ddd;padding:8px;text-align:left;">Product Name</th>';
        echo '<th style="border:1px solid #ddd;padding:8px;text-align:center;width:120px;">Product ID</th>';
        echo '<th style="border:1px solid #ddd;padding:8px;text-align:left;width:180px;">Last Modified</th>';
        echo '<th style="border:1px solid #ddd;padding:8px;text-align:center;width:100px;">Delete</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        $sl = 1;
        foreach ($json_files as $file) {
            $file_name = basename($file); 
            $product_id = intval(pathinfo($file_name, PATHINFO_FILENAME)); 
            
            // Get WooCommerce product object
            $product = wc_get_product($product_id);
            $product_name = $product ? $product->get_name() : 'Unknown Product';
            $file_url = WP_CONTENT_URL . '/json/' . $file_name;
            $edit_link = get_edit_post_link($product_id);
            
            $file_time = date("F d, Y H:i:s", filemtime($file));
            $product_url = $product ? get_permalink($product_id) : '#';

            echo '<tr>';
            // SL
            echo '<td style="border:1px solid #ddd;padding:8px;text-align:center;">' . $sl++ . '</td>';

            // Product Name with slug link
            echo '<td style="border:1px solid #ddd;padding:8px;">
                    <a href="' . esc_url($file_url) . '" target="_blank" style="color:#0073aa;text-decoration:none;">
                        ' . esc_html($product_name) . '
                    </a>
                  </td>';

            // Product ID with edit link
            echo '<td style="border:1px solid #ddd;padding:8px;text-align:center;">';
            if ($edit_link) {
                echo '<a href="' . esc_url($edit_link) . '" target="_blank" style="color:#0073aa;text-decoration:none;">' 
                     . esc_html($product_id) . '</a>';
            } else {
                echo esc_html($product_id);
            }
            echo '</td>';

            // Last Modified with link to product/post
            echo '<td style="border:1px solid #ddd;padding:8px;">
                    <a href="' . esc_url($product_url) . '" target="_blank" style="color:#0073aa;text-decoration:none;">
                        ' . esc_html($file_time) . '
                    </a>
                </td>';

            // Delete button for individual file
            echo '<td style="border:1px solid #ddd;padding:8px;text-align:center;">
                    <form method="post" action="' . esc_url(admin_url('admin-post.php')) . '" 
                          onsubmit="return confirm(\'Are you sure you want to delete this file?\');">
                        <input type="hidden" name="action" value="delete_json_file">
                        ' . wp_nonce_field('delete_json_file_nonce', '_wpnonce', true, false) . '
                        <input type="hidden" name="file_name" value="' . esc_attr($file_name) . '">
                        <button type="submit" style="background:#d9534f;color:#fff;border:none;
                               padding:5px 10px;border-radius:4px;cursor:pointer;font-size:12px;"
                               onmouseover="this.style.background=\'#c9302c\'"
                               onmouseout="this.style.background=\'#d9534f\'">
                            Delete
                        </button>
                    </form>
                  </td>';

            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';

        // Remove all button under the table
        echo '<form method="post" action="' . esc_url(admin_url('admin-post.php')) . '" 
              onsubmit="return confirm(\'Are you sure? This will delete all JSON files.\')" 
              style="margin-top:20px;">';
        echo '<input type="hidden" name="action" value="remove_all_json_files">';
        wp_nonce_field('remove_all_json_files_nonce');
        echo '<button type="submit" 
                style="background:#d9534f;color:#fff;border:none;
                       padding:10px 18px;border-radius:5px;
                       cursor:pointer;font-size:14px;
                       font-weight:bold;"
                onmouseover="this.style.background=\'#c9302c\'"
                onmouseout="this.style.background=\'#d9534f\'">
                Remove All JSON Files
              </button>';
        echo '</form>';

    } else {
        echo '<p>No JSON files found in the directory.</p>';
    }
}

add_action('admin_post_delete_json_file', 'handle_delete_json_file');
function handle_delete_json_file() {
    if (!current_user_can('manage_options')) {
        wp_die('You are not allowed to do this.');
    }
    check_admin_referer('delete_json_file_nonce');

    if (!empty($_POST['file_name'])) {
        $file_name = sanitize_file_name($_POST['file_name']);
        $file_path = WP_CONTENT_DIR . '/json/' . $file_name;
        if (file_exists($file_path)) {
            @unlink($file_path);
        }
    }

    wp_safe_redirect(wp_get_referer());
    exit;
}

// Handle remove action
add_action('admin_post_remove_all_json_files', 'handle_remove_all_json_files');
function handle_remove_all_json_files() {
    // Verify nonce
    check_admin_referer('remove_all_json_files_nonce');

    // Check permission
    if (!current_user_can('manage_options')) {
        wp_die('You are not allowed to do this.');
    }

    $json_dir = WP_CONTENT_DIR . '/json';
    $json_files = glob($json_dir . '/*.json');

    if ($json_files) {
        foreach ($json_files as $file) {
            @unlink($file); // delete each file
        }
    }

    // Redirect back with success message
    wp_safe_redirect(wp_get_referer());
    exit;
}

function la_export_orders_func(){
    if(isset($_GET['jsonlist']) && is_user_logged_in() && array_filter(['administrator', 'editor', 'shop_manager'], 'current_user_can')){
        list_json_files_with_time();
        die();
    }else if(isset($_GET['la_export_orders'] ) && is_user_logged_in() && array_filter(['administrator', 'editor', 'shop_manager'], 'current_user_can')) {
        if( isset ( $_GET['limit']) && !empty($_GET['limit']) ) {
            $limit = $_GET['limit'];
        }else {
            // $limit = -1; // default limit
            $limit = 10000;
        }
        $product_name_array = explode("~",$_GET['la_export_orders']);
        $status = $_GET['status'] ?? 'completed-on-hold';
        $filename = 'la-orders-'.$status.' - '. date("Y-m-d_H-i-s") . '.csv';
        $status = $_GET['status'] ?? "'completed', 'on-hold'";
        $all_orders = array();
        $header_row = array(
            'Order ID',
            'Payment Method',
            'Title',
            'Gender',
            'Firstname',
            'Lastname',
            'Email',
            'Phone',
            'Profession',
            'DOBf',
            'DOBy',
            'Amount',
            'Products Title',
            'Order Created',
            'Address Line 1',
            'Address Line 2',
            'Postcode',
            'City',
            'State',
            'Country',
        );

        $args = array(
            'limit'     => $limit,
            'page'      => 1,
            'status'    => array($status),
            'type'      => 'shop_order', //To skip order_refund
        );
        $orders = wc_get_orders( $args );
        foreach( $orders as $order ) {
            if($order){
                $product_names = array();
                foreach ( $order->get_items() as $item_id => $item ) {
                    $product_names[] = $item->get_name();
                }
                $dobf = null;
                $profession_old = get_post_meta($order->get_id(),'la_proffession_field',true);
                $profession_new = get_post_meta($order->get_id(),'la_profession_field',true);
                if(empty($profession_new)){
                    $profession = $profession_old;
                }else{
                    $profession = $profession_new;
                }
                $person_title = get_post_meta($order->get_id(),'la_title_field',true);
                if($person_title == 'Mr'){
                    $male_female = 'M';
                }elseif(in_array($person_title, array('Mrs', 'Miss', 'Ms'))){
                    $male_female = 'F';
                }else{
                    $male_female = '';
                }
                $dobf = get_post_meta($order->get_id(),'billing_birth_date',true);
                $doby = "";
                if(!empty($dobf)){
                    $dmy        = date('d/m/Y', strtotime($dobf));
                    $onlyYear   = date('Y', strtotime($dobf));
                    if($dmy == "01/01/1970"){
                        $dmy = $dobf;
                        $onlyYear = '';
                    }
                }
                $match_product_name = false; // defult is skip to add $all_orders array
                foreach($product_name_array as $name){
                    if (!empty($name)) {
                        foreach($product_names as $single_name){
                            $match_product_name_var = strpos(strtolower($single_name), strtolower($name));
                            if( $match_product_name_var !== false ) // Then is match with query it will added in $all_orders
                            {
                                $match_product_name = true;
                            }
                        }
                    }
                }
                if(empty($_GET['la_export_orders'])){
                    $match_product_name = true; // When no filter then get all products
                }
                if(!empty($_GET['country'])){
                    if($order->get_billing_country() != $_GET['country']){
                        $match_product_name = false;
                    }
                }
                if($match_product_name){
                    $all_orders[] = [
                        $order->get_id(),
                        $order->get_payment_method(),
                        $person_title,
                        $male_female,
                        $order->get_billing_first_name(),
                        $order->get_billing_last_name(),
                        $order->get_billing_email(),
                        "'".$order->get_billing_phone(),
                        $profession,
                        "'".$dmy,
                        $onlyYear,
                        '£'.$order->get_subtotal(),
                        implode(', ',$product_names),
                        $order->get_date_created(),
                        $order->get_billing_address_1(),
                        $order->get_billing_address_2(), // Most time it was empty
                        strtoupper($order->get_billing_postcode()),
                        $order->get_billing_city(),
                        $order->get_billing_state(), // Most time it was empty
                        $order->get_billing_country(),
                    ];
                }
            }
        }
        
        wp_reset_query();
        
        $fh = @fopen( 'php://output', 'w' );
        fprintf( $fh, chr(0xEF) . chr(0xBB) . chr(0xBF) );
        header( 'Cache-Control: must-revalidate, post-check=0, pre-check=0' );
        header( 'Content-Description: File Transfer' );
        header( 'Content-type: text/csv' );
        header( "Content-Disposition: attachment; filename={$filename}" );
        header( 'Expires: 0' );
        header( 'Pragma: public' );
        fputcsv( $fh, $header_row );
        foreach ( $all_orders as $data_row ) {
            fputcsv( $fh, $data_row );
        }
        fclose( $fh );
        die();
    } else if(isset($_GET['la_course_id']) && is_user_logged_in() && array_filter(['administrator', 'editor', 'shop_manager'], 'current_user_can')) {
        $all_products = [];
        $products = wc_get_products([
            'limit' => -1,
            'status' => 'publish',
        ]);

        foreach ($products as $product) {
            $slug = $product->get_slug();
            // Get category names
            $category_ids = $product->get_category_ids();
            $category_names = [];

            foreach ($category_ids as $cat_id) {
                $term = get_term($cat_id, 'product_cat');
                if (!is_wp_error($term)) {
                    $category_names[] = $term->name;
                }
            }
            // Combine category names into one string (comma-separated)
            $category_string = implode(', ', $category_names);

            $all_products[] = [
                $product->get_id(),
                $product->get_title(),
                'https://lead-academy.org/course/' . $slug,
                $category_string,
            ];
        }

        $filename = 'la-course-id-' . date("Y-m-d_H-i-s") . '.csv';
        $header_row = array(
            'Product ID',
            'Product Title',
            'Product Url',
            'Category',
        );
        wp_reset_query();
        $fh = @fopen( 'php://output', 'w' );
        fprintf( $fh, chr(0xEF) . chr(0xBB) . chr(0xBF) );
        header( 'Cache-Control: must-revalidate, post-check=0, pre-check=0' );
        header( 'Content-Description: File Transfer' );
        header( 'Content-type: text/csv' );
        header( "Content-Disposition: attachment; filename={$filename}" );
        header( 'Expires: 0' );
        header( 'Pragma: public' );
        fputcsv( $fh, $header_row );
        foreach ( $all_products as $data_row ) {
            fputcsv( $fh, $data_row );
        }
        fclose( $fh );
        die();
    }
}
?>