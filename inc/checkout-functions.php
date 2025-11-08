<?php
function la_modify_cart_item()
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        return;
    }

    if (!WC()->cart) {
        wp_send_json_error(['message' => 'WooCommerce cart not found']);
    }
    $cart_item_key = sanitize_text_field($_POST['cart_item_key']);
    $action = sanitize_text_field($_POST['action_type']);
    // Get the WooCommerce cart instance
    $cart = WC()->cart;

    // Check if the cart item exists
    if ($cart->get_cart_item($cart_item_key)) {
        $quantity = intval($cart->get_cart_item($cart_item_key)['quantity']);
        if ($action == 'increment') {
            $cart->set_quantity($cart_item_key, $quantity+1);
        } elseif ($action == 'decrement') {
            if ($quantity > 1) {
                $cart->set_quantity($cart_item_key, $quantity-1);
            } else {
                $cart->remove_cart_item($cart_item_key);
            }
        } elseif ($action === 'remove') {
            $cart->remove_cart_item($cart_item_key);
        }

        // ✅ Ensure WooCommerce refreshes the cart
        // WC()->cart->calculate_totals();
        // WC()->cart->maybe_set_cart_cookies();
        // WC()->session->set('cart', WC()->cart->get_cart());
        // WC()->cart->add_to_cart( 365011, 1);

        // Return a success message
        wp_send_json_success([
            'message'     => 'Cart '.$action,
            'cart_totals' => WC()->cart->get_totals(),
            'cart_count'  => WC()->cart->get_cart_contents_count(),
            'cart_items'  => WC()->cart->get_cart(),
        ]);
    } else {
        // Return an error message if the cart item doesn't exist
        wp_send_json_error('Cart item not found.');
    }
}

add_action('wp_ajax_checkout_modify_cart', 'la_modify_cart_item');
add_action('wp_ajax_nopriv_checkout_modify_cart', 'la_modify_cart_item');
