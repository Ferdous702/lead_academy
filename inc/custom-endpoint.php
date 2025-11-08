<?php
// Creating custom route
add_action( 'rest_api_init', function () {
	register_rest_route( 'wc/v3', 'la-orders', array(
		'methods' => 'POST',
		'callback' => 'get_orders',
        'permission_callback' => function() { return ''; }
	));
});

// Custom route callback func
function get_orders( $data ) {
    $whitelisted_ips = array('165.227.123.241','157.245.38.243', '192.248.173.70', '178.62.12.49', '103.107.123.218');
    // LMS IP 165.227.123.241
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $security_check = in_array($user_ip, $whitelisted_ips);

    if($security_check){
        $starting_date = $data->get_param('starting_date');
        $ending_date = $data->get_param('ending_date');
        
        $after_date = strtotime($starting_date . ' 00:00:00');
        $before_date = strtotime($ending_date . ' 23:59:59');
        
        $args = array(
            'limit' => '-1',
            'status' => array('completed'),
            'date_completed' => $after_date.'...'.$before_date,
            'return'    => 'ids'
        );

        $orders = wc_get_orders( $args );
        $order_infos = [];
        foreach( $orders as $order ) {
            $order_obj = wc_get_order($order);
            
            $products = [];
            foreach( $order_obj->get_items() as $item ) {
                $product_id = $item->get_product_id();
                $products[] = [
                    'product_id' => $product_id,
                    'lms_course_id' => get_post_meta( $product_id, 'lms_course_id', true ),
                ];
        }
        
        $order_infos[] = [
            'billing_email' => $order_obj->get_billing_email(),
            'order_id'      => $order_obj->get_id(),
            'order_date'    => $order_obj->get_date_created()->date('Y-m-d H:i:s'),
            'products'      => $products
        ];
    }
        return new WP_REST_Response($order_infos, 200);
    }else{
        return new WP_REST_Response('Error IP ' . $_SERVER['REMOTE_ADDR'], 200);
    }
}