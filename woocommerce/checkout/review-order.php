<?php

/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined('ABSPATH') || exit;
?>
<table x-data="modify_cart_item" class="shop_table woocommerce-checkout-review-order-table position-relative">
	<thead>
		<tr>
			<th colspan="2">
				<div class="d-flex justify-content-between align-items-center">
					<span><?php esc_html_e('Product', 'woocommerce'); ?></span>
					<span><?php esc_html_e('Subtotal', 'woocommerce'); ?></span>
				</div>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php
		do_action('woocommerce_review_order_before_cart_contents');

		foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
			$_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

			if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) {
		?>
				<tr class="<?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
					<td colspan='2'>
						<div class="d-flex flex-column w-100 gap-2">
							<div class="d-flex justify-content-between align-items-start gap-4 fw-bold">
								<span class="text-start product-name ">
									<?php echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key)) . '&nbsp;'; ?>
									<?php echo wc_get_formatted_cart_item_data($cart_item); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
									?>
								</span>
								<span class="product-total">
									<!-- <td class="product-total"> -->
									<?php echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); ?>
									<!-- </td> -->
								</span>
							</div>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex justify-content-start align-items-center">
									<?php echo apply_filters('woocommerce_checkout_cart_item_quantity', '<div class="d-flex gap-3"><div class="cart-decrement" @click="cartDecrement(`' . $cart_item_key . '`)">-</div><strong class="product-quantity">' . sprintf('%s', $cart_item['quantity']) . '</strong><div class="cart-increment"  @click="cartIncrement(`' . $cart_item_key . '`)">+</div></div>', $cart_item, $cart_item_key); ?>
								</div>
								<div class="d-flex justify-content-end align-items-center">
									<div class="cart-remove" @click="cartRemove('<?= $cart_item_key ?>')">x</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
		<?php
			}
		}

		do_action('woocommerce_review_order_after_cart_contents');
		?>
	</tbody>
	<tfoot>
	
		<tr class="cart-subtotal">
			<th><?php esc_html_e('Subtotal', 'woocommerce'); ?></th>
			<td><?php wc_cart_totals_subtotal_html(); ?></td>
		</tr>
	
		<?php foreach (WC()->cart->get_coupons() as $code => $coupon) : ?>
			<tr class="cart-discount coupon-<?php echo esc_attr(sanitize_title($code)); ?>">
				<th><?php wc_cart_totals_coupon_label($coupon); ?></th>
				<td><?php wc_cart_totals_coupon_html($coupon); ?></td>
			</tr>
		<?php endforeach; ?>
	
		<?php if (WC()->cart->needs_shipping() && WC()->cart->show_shipping()) : ?>
	
			<?php do_action('woocommerce_review_order_before_shipping'); ?>
	
			<?php wc_cart_totals_shipping_html(); ?>
	
			<?php do_action('woocommerce_review_order_after_shipping'); ?>
	
		<?php endif; ?>
	
		<?php foreach (WC()->cart->get_fees() as $fee) : ?>
			<tr class="fee">
				<th><?php echo esc_html($fee->name); ?></th>
				<td><?php wc_cart_totals_fee_html($fee); ?></td>
			</tr>
		<?php endforeach; ?>
	
		<?php if (wc_tax_enabled() && ! WC()->cart->display_prices_including_tax()) : ?>
			<?php if ('itemized' === get_option('woocommerce_tax_total_display')) : ?>
				<?php foreach (WC()->cart->get_tax_totals() as $code => $tax) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited 
				?>
					<tr class="tax-rate tax-rate-<?php echo esc_attr(sanitize_title($code)); ?>">
						<th><?php echo esc_html($tax->label); ?></th>
						<td><?php echo wp_kses_post($tax->formatted_amount); ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr class="tax-total">
					<th><?php echo esc_html(WC()->countries->tax_or_vat()); ?></th>
					<td><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>
	
		<?php do_action('woocommerce_review_order_before_order_total'); ?>
	
		<tr class="order-total">
			<th><?php esc_html_e('Total', 'woocommerce'); ?></th>
			<td><?php wc_cart_totals_order_total_html(); ?></td>
		</tr>
	
		<?php do_action('woocommerce_review_order_after_order_total'); ?>
	
	</tfoot>

	<div id="checkout-loader-overlay" style="display: none;">
    <div id="checkout-loader">
        <div class="loader-spinner"></div>
        <p>Updating cart...</p>
    </div>
</div>

</table>
<style>
	.product-name{
		align-items: flex-start;
		flex-direction: column;
	}
	.amount,
	.product-name{
		font-size: 18px !important;	
		font-weight: 600 !important;
	}
	@media only screen and (max-width: 921px) {
		#order_review_heading{
			order: 1;
		}
		#order_review{
			order: 2;
		}
		#customer_details{
			order: 3;
		}
		form.checkout.woocommerce-checkout{
			display: grid;
		}
		.amount,
		.product-name{
			font-size: 16px !important;	
			font-weight: 600 !important;
		}
	}
	#checkout-loader-overlay {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: rgba(221, 218, 218, 0.8);
		z-index: 9999;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	#checkout-loader {
		text-align: center;
	}

	.loader-spinner {
		border: 4px solid #f3f3f3;
		border-top: 4px solid #3498db;
		border-radius: 50%;
		width: 40px;
		height: 40px;
		animation: spin 1s linear infinite;
		margin: 0 auto 10px;
	}

	@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
	}

	.cart-decrement,
	.cart-increment,
	.cart-remove{
		width: 25px;
		height: 25px;
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 20px;
		cursor: pointer;
		background: #af1f47;
		color: #fff;
		font-weight: 600;
		border-radius: 15%;
	}
</style>
<script>
    function modify_cart_item() {
        return {
            cartDecrement(id) {
                console.log(id);
                this.updateCart(id, 'decrement');
            },
            cartIncrement(id) {
                console.log(id);
                this.updateCart(id, 'increment');
            },
            cartRemove(id) {
                console.log(id);
                this.updateCart(id, 'remove'); // ✅ Ensure this runs
            },
            updateCart(cartItemKey, action) {
				this.showLoader();
                fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: new URLSearchParams({
                            action: 'checkout_modify_cart',
                            cart_item_key: cartItemKey,
                            action_type: action,
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
					
							jQuery(document.body).trigger('update_checkout');
							
                        } else {
                            alert(data);
                        }
						this.hideLoader();
                    })
                    .catch(error => console.error('Error:', error));
            },
			showLoader: function() {
				jQuery('#checkout-loader-overlay').fadeIn();
				jQuery('form.woocommerce-checkout').css('opacity', '0.5').find('input, button, select, textarea').prop('disabled', true);
			},
			hideLoader: function () {
				jQuery('#checkout-loader-overlay').fadeOut();
				jQuery('form.woocommerce-checkout').css('opacity', '1').find('input, button, select, textarea').prop('disabled', false);
			}
        };
    }
</script>