<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$current_product_id = get_the_ID();
$product_image_id = get_post_thumbnail_id( $current_product_id );
$product_image_url = wp_get_attachment_image_url( $product_image_id, "single-post-thumbnail" );
$product_image_alt = get_post_meta($product_image_id, '_wp_attachment_image_alt', true);

// Use the product title as a fallback for the alt text
if (empty($product_image_alt)) {
    $product_image_alt = get_the_title();
}

$regular_price = '';
$sale_price = '';
$course_price = '';

if ( $product->is_type( 'variable' ) ) {
    $variations = $product->get_available_variations();
    if ( ! empty( $variations ) ) {
        // Get the first variation
        $first_variation_id = $variations[0]['variation_id'];
        $child_item         = wc_get_product($first_variation_id);
        
        // Use modern and safe WooCommerce methods to get prices
        $regular_price = $child_item->get_regular_price();
        $sale_price = $child_item->get_sale_price();
    }
} else {
    // For simple products, use the modern methods as well
    $regular_price = $product->get_regular_price();
    $sale_price = $product->get_sale_price();
}

// Generate price HTML
if ( ! empty( $sale_price ) && $sale_price < $regular_price ) {
    $course_price = '<del>' . get_woocommerce_currency_symbol() . $regular_price . '</del><p>' . get_woocommerce_currency_symbol() . $sale_price . '</p>';
} elseif ( ! empty( $regular_price ) ) {
    $course_price = '<p>' . get_woocommerce_currency_symbol() . $regular_price . '</p>';
}

?>

<li <?php wc_product_class( '', $product ); ?>>

	<div class="col-md-4">
		<div class="course-card-box">
			<div class="course-card">
				<div class="course-card-img">
					<img src="<?php echo esc_url($product_image_url); ?>" alt="<?php echo esc_attr($product_image_alt); ?>" title="<?php echo esc_attr($product_image_alt); ?>"/>
				</div>
				<div class="course-body">
					<div class="course-card-title">
						<?php
						echo '<a href="' . esc_url(get_the_permalink()) . '" class="course-title">';
						woocommerce_template_loop_product_title();
						echo "</a>";
						?>
					</div>
					<div class="la-rv-course-ratings">
						<img src="<?php echo get_site_url()?>/wp-content/uploads/2022/08/Group-15155.png" alt="tp-logo" title="tp-logo">
					</div>
					<div>
						<div class="la-course-price">
                            <?php echo $course_price; ?>
						</div>               
					</div>
				</div>
			</div>
			<div class="course-d-btn">
				<?php
					echo '<a href="' . esc_url(get_the_permalink()) . '" class="course-title">';
					echo 'View Course <img src="'.get_site_url().'/wp-content/uploads/2022/10/view-course-right-arrow.svg" alt="right arrow image" title="right arrow image">';
					echo "</a>";
				?>
			</div>
		</div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>