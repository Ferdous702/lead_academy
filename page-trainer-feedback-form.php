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

input#gform_submit_button_125 {
    background-color: #b91948;
    border-radius: 40px;
    padding: 13px 35px;
}
</style>
<section id="assignment-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Trainer Feedback Form</h1>
            </div>
        </div>
    </div>
</section>

<section id="assignment-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div><?php echo do_shortcode( '[contact-form-7 id="01d10c8" title="Trainer Feedback Form"]' ); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>