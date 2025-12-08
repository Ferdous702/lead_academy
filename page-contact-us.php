<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="ast-container">
    <div class="ast-row">
        <main id="primary" class="site-main">
            <article class="post-type-single">
                <div class="entry-content clear">
                    <?php
                    // Get the order_id from query parameter
                    $order_id = isset($_GET['order_id']) ? intval($_GET['order_id']) : 0;
                    
                    if ($order_id > 0) {
                        // Get the order object
                        $order = wc_get_order($order_id);
                        
                        if ($order) {
                            echo '<div class="order-details-container">';
                            echo '<h2>Order Details</h2>';
                            echo '<div class="order-info">';
                            echo '<p><strong>Order ID:</strong> #' . $order->get_id() . '</p>';
                            echo '<p><strong>Order Status:</strong> ' . $order->get_status() . '</p>';
                            echo '<p><strong>Order Date:</strong> ' . $order->get_date_created()->format('F j, Y') . '</p>';
                            echo '<p><strong>Order Total:</strong> ' . $order->get_total() . ' ' . get_woocommerce_currency_symbol() . '</p>';
                            echo '<p><strong>Payment Method:</strong> ' . $order->get_payment_method_title() . '</p>';
                            
                            // Customer Information
                            echo '<h3>Customer Information</h3>';
                            echo '<p><strong>Name:</strong> ' . $order->get_formatted_billing_full_name() . '</p>';
                            echo '<p><strong>Email:</strong> ' . $order->get_billing_email() . '</p>';
                            echo '<p><strong>Phone:</strong> ' . $order->get_billing_phone() . '</p>';
                            
                            // Billing Address
                            echo '<h3>Billing Address</h3>';
                            echo '<p>' . $order->get_formatted_billing_address() . '</p>';
                            
                            echo '</div>'; // .order-info
                            
                            // Display products from the order
                            echo '<h2>Products in this Order</h2>';
                            echo '<div class="order-products">';
                            
                            foreach ($order->get_items() as $item_id => $item) {
                                $product_id = $item->get_product_id();
                                $product = wc_get_product($product_id);
                                $quantity = $item->get_quantity();
                                $subtotal = $item->get_subtotal();
                                $variation_id = $item->get_variation_id();
                                
                                echo '<div class="order-product-item">';
                                echo '<div class="product-info">';
                                
                                // Product Image
                                if ($product) {
                                    $image_id = $product->get_image_id();
                                    if ($image_id) {
                                        echo '<div class="product-image">';
                                        echo wp_get_attachment_image($image_id, 'thumbnail', ['class' => 'alignleft']);
                                        echo '</div>';
                                    }
                                }
                                
                                echo '<div class="product-details">';
                                echo '<h4><a href="' . get_permalink($product->get_id()) . '">' . $product->get_name() . '</a></h4>';
                                
                                // Product Meta/Attributes
                                if ($variation_id) {
                                    $variation = wc_get_product($variation_id);
                                    $attributes = $variation->get_attributes();
                                    if (!empty($attributes)) {
                                        echo '<div class="product-attributes">';
                                        foreach ($attributes as $attr_name => $attr_value) {
                                            // Show only the attribute value, not the label
                                            echo '<p>' . $attr_value . '</p>';
                                        }
                                        echo '</div>';
                                    }
                                }
                                
                                echo '<p><strong>Quantity:</strong> ' . $quantity . '</p>';
                                // Show the correct product ID (variation ID if it's a variable product, otherwise the main product ID)
                                echo '<p><strong>Product ID:</strong> ' . $$product_id . '</p>';
                                echo '<p><strong>Price:</strong> ' . $product->get_price() . ' ' . get_woocommerce_currency_symbol() . '</p>';
                                echo '<p><strong>Subtotal:</strong> ' . $subtotal . ' ' . get_woocommerce_currency_symbol() . '</p>';
                                echo '<p><strong>Product Description:</strong> ' . $product->get_short_description() . '</p>';
                                echo '</div>'; // .product-details
                                echo '</div>'; // .order-product-item
                            }
                            
                            echo '</div>'; // .order-products
                            echo '</div>'; // .order-details-container
                        } else {
                            echo '<p class="error-message">Order not found. Please check the order ID and try again.</p>';
                        }
                    } else {
                        echo '<div class="no-order-id">';
                        echo '<h2>Contact Us</h2>';
                        echo '<p>Please provide an order ID in the URL to view order and product details.</p>';
                        echo '<p>Example: <code>https://lead-academy.org/contact-us/?order_id=12345</code></p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </article>
    </main>
</div>
</div>

<style>
.order-details-container {
    background: #f9f9f9;
    border: 1px solid #e1e1e1;
    border-radius: 8px;
    padding: 20px;
    margin: 20px 0;
}

.order-info {
    margin-bottom: 30px;
}

.order-info h3 {
    color: #333;
    border-bottom: 2px solid #e1e1e1;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

.order-info p {
    margin-bottom: 8px;
    line-height: 1.4;
}

.order-products {
    margin-top: 30px;
}

.order-product-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.product-image {
    margin-right: 20px;
    flex-shrink: 0;
}

.product-image img {
    max-width: 100px;
    height: auto;
    border-radius: 4px;
    border: 1px solid #ddd;
}

.product-details {
    flex: 1;
}

.product-details h4 {
    margin: 0 0 10px 0;
}

.product-details h4 a {
    color: #333;
    text-decoration: none;
}

.product-details h4 a:hover {
    color: #0073aa;
    text-decoration: underline;
}

.product-attributes {
    margin: 10px 0;
    padding: 10px;
    background: #f5f5f5;
    border-radius: 4px;
}

.product-attributes p {
    margin: 5px 0;
}

.error-message {
    background: #fff3cd;
    color: #721c24;
    padding: 15px;
    border: 1px solid #f5c6cb;
    border-radius: 4px;
    text-align: center;
}

.no-order-id {
    text-align: center;
    padding: 40px 20px;
}

.no-order-id code {
    background: #f4f4f4;
    padding: 2px 6px;
    border-radius: 4px;
    font-family: monospace;
}
</style>

<?php get_footer(); ?>