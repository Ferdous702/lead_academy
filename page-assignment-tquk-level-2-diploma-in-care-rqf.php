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
                <h1>Assignment – TQUK Level 2 Diploma in Care (RQF)</h1>
            </div>
        </div>
    </div>
</section>

<section id="ai-content-checker-notice" style="padding: 40px 0; background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ai-checker-content" style="max-width: 1000px; margin: 0 auto;">
                    <!-- Red Alert Header -->
                    <div class="alert-header" style="background-color: #c0234e; color: white; padding: 15px 25px; border-radius: 8px 8px 0 0; font-weight: bold; font-size: 20px;">
                        ⚠️ Important Instruction: How to Check and Submit the Plagiarism Report For The Assignments
                    </div>
                    
                    <!-- Content Body -->
                    <div class="content-body" style="background-color: white; padding: 25px; border: 2px solid #dc3545; border-top: none; border-radius: 0 0 8px 8px;">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="instructions-text">
                                    <p style="margin-bottom: 15px; font-size: 16px; line-height: 1.6;">
                                        <strong>Please check your plagiarism with the tool <a href="https://smallseotools.com/plagiarism-checker/" style="background-color: #dc3545; color: #ffffff; text-decoration: none; padding: 2px 6px; border-radius: 4px;" target="_blank">here</a>.</strong> 
                                        Please use this tool to check plagiarism for each assignment and generate a report for each assignment separately.
                                    </p>
                                    <p style="margin-bottom: 15px; font-size: 16px; line-height: 1.6;">
                                        Please check plagiarism by this tool for each assignment and generate report for each of the assignments separately. Once you have all the separate plagiarism reports for all the assignments of a unit, please create a zip file with all the reports and upload in the given field below:
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="video-container" style="position: relative; text-align: center;">
                                    <!-- Simple YouTube Video Player -->
                                    <div style="background-color: #000; border-radius: 8px; overflow: hidden;">
                                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/eAxov6c1e34" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 8px;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="ai-checker-content" style="max-width: 1000px; margin: 0 auto;">
                    <!-- Red Alert Header -->
                    <div class="alert-header" style="background-color: #c0234e; color: white; padding: 15px 25px; border-radius: 8px 8px 0 0; font-weight: bold; font-size: 20px;">
                        ⚠️ Important Instruction: How to Check and Submit the AI Report For The Assignments
                    </div>
                    
                    <!-- Content Body -->
                    <div class="content-body" style="background-color: white; padding: 25px; border: 2px solid #c0234e; border-top: none; border-radius: 0 0 8px 8px;">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="instructions-text">
                                    <p style="margin-bottom: 15px; font-size: 16px; line-height: 1.6;">
                                        <strong>Please check your AI with the tool <a href="https://writer.com/ai-content-detector/" style="background-color: #dc3545; color: #ffffff; text-decoration: none; padding: 2px 6px; border-radius: 4px;" target="_blank">here</a>.</strong> 
                                        Please use this tool to check AI for each assignment and generate a report for each assignment separately. Please
        add <a href="https://chromewebstore.google.com/detail/gofullpage-full-page-scre/fdpohaocaechififmbbbbbknoalclacl" style="background-color: #dc3545; color: #ffffff; text-decoration: none; padding: 2px 6px; border-radius: 4px;"
            target="_blank">Go full page</a> to your browser extension and once you have the AI result please click on
        that from the extension, which will capture the full page. Then save the capture of the report.
                                    </p>
                                    <p style="margin-bottom: 15px; font-size: 16px; line-height: 1.6;">
                                        Likewise, collect all the assignment AI reports separately. Once you have all the separate AI reports for all the assignments of a unit, please create a zip file with all the reports and upload in the given field below.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="video-container" style="position: relative; text-align: center;">
                                    <!-- Simple YouTube Video Player -->
                                    <div style="background-color: #000; border-radius: 8px; overflow: hidden;">
                                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/tOUj9Lu2rsw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 8px;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="assignment-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div><?php echo do_shortcode( '[contact-form-7 id="4160f40" title="Assignment - TQUK Level 2 Diploma in Care (RQF)"]' ); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>