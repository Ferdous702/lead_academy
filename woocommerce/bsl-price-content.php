<?php
    if ( $product->get_type() == 'variable' ) {
        $variable_producs       = la_get_variable_ids_by_product_id( $current_product_id );
        $variable_first_id      = $variable_producs['variation_ids'][0];
        $variations             = la_get_variable_title_price_by_varid( $variable_first_id);
        $course_regular_price   = $variations['variations'][0];
        $course_sell_price      = $variations['variations'][1];
        $add_to_cart_url = wc_get_cart_url() . '?add-to-cart='.$variable_first_id;
    }
?>
<div id="la-bsl-course-fee">
    <h2>Course Fee</h2>
    <div id="la-bsl-course-price">
        <h3><?php echo get_woocommerce_currency_symbol() . $course_regular_price?> <sub>(+VAT)</sub></h3>
        <p class="la-bsl-max-learners"><i class="fa fa-users"></i> Maximum 15 Learners</p>
        <p class="la-bsl-max-learners"><i class="fa fa-video-camera"></i> Live Zoom Class</p>
        <p class="la-bsl-max-learners"><i class="fa fa-id-badge"></i> Face to Face Training</p>
        <button type="button"
                data-variation-id="<?= $variable_first_id ?>"
                data-quantity="1"
                class="custom-add-to-cart la-bsl-book-button w-100" >
            <?php echo  __('BOOK NOW'); ?>
        </button>
    </div>
</div>