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
</style>
<section id="assignment-hero-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Submission of ID</h1>
            </div>
        </div>
    </div>
</section>

<section id="assignment-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div><?php echo do_shortcode( '[contact-form-7 id="1cd07a4" title="Submission of ID"]' ); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>