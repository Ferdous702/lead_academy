<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();

?>
<style>

input {
    border: 1px solid #adadad !important;
}

input#clear {
    background-color: #af1f47 !important;
    padding: 8px 30px !important;
    border-radius: 4px;
    border: 2px solid #af1f47 !important;
}

input#clear:hover {
    background-color:rgb(255, 255, 255) !important;
    padding: 8px 30px !important;
    border-radius: 4px;
    color: #af1f47 ;
    border: 2px solid #af1f47 !important;
}

input#gform_submit_button_108 {
    background-color: #af1f47 !important;
    padding: 12px 40px !important;
    border: 2px solid #af1f47 !important;
}

input#gform_submit_button_108:hover {
    background-color:rgb(255, 255, 255) !important;
    padding: 12px 40px !important;
    color: #af1f47 ;
    border: 2px solid #af1f47 !important;
}

section#exam-booking-banner h1 {
    font-size: 30px;
    margin-top: 60px;
    text-align: center;
    background-color: #af1f47;
    padding: 40px 10px;
    border: 5px solid #ffffff;
    border-radius: 10px;
    color: #ffff;
    margin-bottom: 0;
}

.page-id-419730{
    background-color: #f9f9f9;
}

input {
    background-color: #fff !important;
    padding: 8px 8px !important;
}

select {
    background-color: #fff !important;
}

div#field_108_1 h2 {
    font-size: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #ededed;
    margin: 40px 0px 15px 0px;
}

div#field_108_1 h3 {
    font-size: 22px;
    padding-bottom: 12px;
    border-bottom: 1px solid #b3b3b3;
    margin: 25px 0px 15px 0px;
    width: fit-content;
    font-weight: 500;
}

div#field_108_1 ul {
    margin: 0px 0px 30px 0px;
    padding: 0px 0px 0px 40px;
    list-style: auto;
}

div#field_108_1 p {
    font-size: 18px;
    line-height: 35px;
}

div#field_108_1 ul li {
    font-size: 18px;
    line-height: 40px;
}

/* Responsive layout for smaller screens */
@media (max-width: 767px) {
    section#exam-booking-banner h1 {
    font-size: 24px;
}

div#field_108_1 h2 {
    font-size: 22px;
}

div#field_108_1 p {
    font-size: 16px;
    line-height: 30px;
}

div#field_108_1 h3 {
    font-size: 18px;
}

div#field_108_1 ul li {
    font-size: 16px;
    line-height: 30px;
    margin: 15px 0px;
}

div#field_108_1 ul {
    padding: 0px 0px 0px 30px;
}

}

/* -Tab Device- */
@media only screen and (min-width: 768px) and (max-width: 1024px) {

}

</style>
<?php

$order_id = get_query_var('order_id');
if ( ! function_exists( 'wc_get_order' ) ) {
    return;
}
$order = wc_get_order( $order_id );
if ( $order ) {
    foreach ( $order->get_items() as $item_id => $item ) {
        $product_id = $item->get_product_id();
        if ( in_array( $product_id, CONSENT_FORM ) ) {
            $meta_id = ($product_id == 366854) ? 354284 : $product_id;
            $product_name   = sanitize_text_field($item->get_name());
            $billing_name   = sanitize_text_field($order->get_billing_first_name() .' '. $order->get_billing_last_name());
            $location       = sanitize_text_field( get_post_meta( $meta_id, 'la_phleb_course_location_root', true ) );
            break;
        }
    }
?>
<script>
    jQuery(document).ready(function() {
        jQuery('#input_108_4').val('<?=$product_name?>');
        jQuery('#input_108_5').val('<?=$location?>');
        jQuery('#input_108_6_3').val('<?=$billing_name?>');
        var currentDate = new Date();
        // Format the date as DD/MM/YYYY
        var formattedDate = String(currentDate.getDate()).padStart(2, '0') + '/' +
                            String(currentDate.getMonth() + 1).padStart(2, '0') + '/' +
                            currentDate.getFullYear();
        console.log(formattedDate);
        jQuery('#input_108_9').val(formattedDate);
    });
</script>
<?php
?>
<section id="exam-booking-banner">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <h1>Basic Phlebotomy Consent Form</h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <?php echo do_shortcode('[contact-form-7 id="6ff6549" title="Consent Form"]'); ?>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
<?php
}else{
?>
<section id="exam-booking-banner">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <h1>Nail Training Consent Form</h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <?php echo do_shortcode('[contact-form-7 id="8ec9b91" title="Consent Form Nail Training"]'); ?>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
<?php
}
get_footer();
?>