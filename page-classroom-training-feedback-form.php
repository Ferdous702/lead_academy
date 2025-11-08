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



get_header(); 

?>
<style>
    select {
    -webkit-appearance: none !important;
    height: 100% !important;
    background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc) !important;
    background-position: calc(100% - 19px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em !important;
    background-size: 5px 5px, 5px 5px, 1px 1.5em !important;
    background-repeat: no-repeat !important;
    padding: 8px !important;
}

h3.gsection_title {
    margin: 0;
    padding-top: 20px;
    font-size: 22px;
}

.gform_wrapper.gravity-theme .top_label .gsection_description {
    padding: 5px 0px 0px 0px;
    margin-bottom: 0;
}

.gform_wrapper.gravity-theme .field_description_above .gfield_description {
    padding: 5px 0px 10px 0px !important;
}

label.gfield_label.gform-field-label {
    margin-bottom: 0 !important;
}

legend.gfield_label.gform-field-label {
    margin: 0 !important;
}

.gform_wrapper.gravity-theme .gfield.gfield--width-full {
    background-color: #efefef;
    padding: 20px;
    border: 1px solid #d7d7d7;
}

.gform_wrapper.gravity-theme .gsection {
    margin-bottom: -5px;
}

.gchoice {
    padding: 6px 15px;
    background-color: #ffffff;
    margin: 10px 0;
    color: #000000;
    border: 1px solid #f5f5f5;
    border-radius: 6px;
}

input#gform_submit_button_127 {
    background-color: #b91948;
    border-radius: 40px;
    padding: 13px 35px;
}
</style>

<?php
$order_id      = get_query_var('order_id');
$product_name  = '';
$billing_name  = '';
$location      = '';
$courses_value = '';

if ( function_exists('wc_get_order') && $order_id ) {
    $order = wc_get_order( $order_id );
    if ( $order ) {
        foreach ( $order->get_items() as $item ) {
            $product_id    = $item->get_product_id();
            $variation_id  = $item->get_variation_id();
            $product_name  = sanitize_text_field( $item->get_name() );
            $billing_name  = sanitize_text_field( $order->get_billing_first_name() . ' ' . $order->get_billing_last_name() );

            // try meta field first
            $location_meta = get_post_meta( $product_id, 'la_phleb_course_location_root', true );
            $location      = trim( sanitize_text_field( $location_meta ) );

            // if still empty, pull from product title
            if ( empty( $location ) ) {
                $temp = preg_replace( '/\s*-\s*Part\s*\d+$/i', '', $product_name );
                if ( strpos( $temp, '-' ) !== false ) {
                    $parts               = explode('-', $temp);
                    $location_candidate  = trim( end( $parts ) );
                } else {
                    $words               = preg_split( '/\s+/', trim( $temp ) );
                    $location_candidate  = end( $words );
                }
                $location = sanitize_text_field( $location_candidate );
            }

            // extract “Courses” attribute if any
            if ( $variation_id ) {
                $variation_obj = wc_get_product( $variation_id );
                if ( $variation_obj ) {
                    foreach ( $variation_obj->get_attributes() as $key => $value ) {
                        if ( stripos( $key, 'courses' ) !== false ) {
                            $courses_value = sanitize_text_field( $value );
                            break;
                        }
                    }
                }
            }

            break; // only first item
        }
    }
}
?>

<script>
jQuery(function($){
    $('#input_127_7').val("<?= esc_js( $product_name ) ?>");
    $('#input_127_8').val("<?= esc_js( $location ) ?>");
    $('#input_127_3_3').val("<?= esc_js( $billing_name ) ?>");
    $('#input_127_17').val("<?= esc_js( $courses_value ) ?>");
});
</script>

<section id="assignment-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Classroom Training Feedback Form 
                </h1>
            </div>
        </div>
    </div>
</section>

<section id="assignment-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div><?php echo do_shortcode( '[contact-form-7 id="652621c" title="Classroom Training Feedback Form"]' ); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>