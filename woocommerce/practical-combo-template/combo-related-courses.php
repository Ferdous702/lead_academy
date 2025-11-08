<?php
// Hide related courses for specific Face-to-Face products, show for others
if ( ! defined('FACE_2_FACE_PRODUCT_CODES') || (isset($current_product_id) && !in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)) ) {
?>
    <div id="la-single-learners-bought" class="overflow-hidden mb-5">
        <h2 class="text-center"><b>Learner’s Also Bought</b></h2>
        <?php 
        // Using the WooCommerce shortcode to display related products
        echo do_shortcode('[related_products per_page="4"]'); 
        ?>
    </div>
<?php
}
?>