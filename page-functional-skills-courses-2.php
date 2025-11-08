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
$current_page_id    = get_the_ID();
$course_faqs 		= get_post_meta( $current_page_id, 'product_faqs', true);
$course_reviews 	= get_post_meta( $current_page_id, 'la_course_reviews', true);
?>

<!-- Hero section -->
<section id="fsc-hero">
    <div class="fsc-container">
        <div class="fsc-row">
            <h1>Functional Skills Courses</h1>
            <p>Explore an inclusive range of Functional Skills Courses and Official Exams equivalent to GCSE</p>
            <img src="/wp-content/uploads/2022/12/trustpilot-1024x70.webp" width="385" height="26" alt="trustpilot score">
        </div>
    </div>

    <div class="fsc-promotion">
        <div class="fsc-floating-items">
            <div class="fsc-item">
                <p style="font-size: 45px; color:#b91948">100% Money Back</p>
                <p>14 days Money Back Guarantee</p>
            </div>
            <div class="fsc-item">
                <p style="font-size: 45px;">Equivalent to GCSE</p>
                <p>NATIONALLY RECOGNISED QUALIFICATIONS</p>
            </div>
            <div class="fsc-item">
                <p style="font-size: 45px; color:#b91948">Start From £149</p>
                <p>Instalment at Checkout</p>
            </div>
        </div>
    </div>

    <div class="la-fs-landing-page-black-friday-banner-wrap d-none">
        <img src="/wp-content/uploads/2019/11/fs-landing-page-black-friday-banner-scaled.webp" alt="la-fs-landing-page-black-friday-banner">
    </div>
</section>
<!-- End Hero section -->

<!-- About section -->
<section id="fsc-about">
    <div class="fsc-container">
        <h2>Find the Best Solution for Functional Skills Courses</h2>
    </div>
    <div class="fsc-container">
        <div class="fsc-left-content">
            <p>Whether you are looking to improve your employability or further your education, the flexible and affordable Lead Academy courses will help you achieve your goals. With various functional skills online courses and exams available, you can choose the best personal and professional development path.</p>

            <h3>Why Study Functional Skills Courses?</h3>

            <ul>
                <li>Functional Skills courses are an ideal substitute to GCSE.</li>
                <li>It will enhance your ability to respond to real life situations both at your workplace and university. </li>
                <li>The Pearson Edexcel Functional Skills courses are suitable for people of all ages.</li>
                <li>It is an accepted qualification for apprenticeships or university admission* as an alternative to GCSE. </li>
                <li>These courses will help you pave your path to higher education and fulfil the entry requirements of any skilled oriented job.</li>
                <li>Our courses are an excellent solution for anyone looking for a flexible option.</li>
            </ul>
        </div>

        <div class="fsc-right-content">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/qIQqEiU0nMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- End About section -->

<!-- Exams - Courses section -->
<script>
    jQuery(document).ready(function () {

        if (jQuery('body.page-id-374924 .accordion').length) {
        jQuery('.accordion-title').click(function (e) {

            e.preventDefault();
            // let $this = jQuery(this);
            // $this.next().slideToggle(250);

            // if ($this.hasClass('accordion-show')) {
            //     $this.removeClass('accordion-show');
            // }
            // else {
            //     $this.addClass('accordion-show');
            // }
        });
        }
    });
</script>
<section id="fsc-courses-exams">
    <div class="fsc-container">
        <h2>Choose Your Desired Options</h2>
    </div>
    <div class="fsc-container fsc-buttons">
        <button id="fsc-ce-courses" class="active">Courses</button>
        <button id="fsc-ce-exams">Exam</button>
    </div>
    
    <div class="fsc-container fsc-real-contents mt-5 mb-5">
        <div class="fsc-custom-card-wrap courses">
            <?php
            $fsc_courses_card_items = [
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-2-2.webp',
                    'course_url'   => '/course/functional-skills-maths-level-2',
                    'course_title' => 'Functional Skills Maths Level 2',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-2-2.webp',
                    'course_url'   => '/course/functional-skills-english-level-2',
                    'course_title' => 'Functional Skills English Level 2',
                    'first_line'   => 'From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-and-English-Level-2-4.webp',
                    'course_url'   => '/course/level-2-maths-and-english-course',
                    'course_title' => 'Functional Skills Maths and English Level 2',
                    'first_line'   => 'From £92 / month',
                    'second_line'  => 'or from £275 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-1-2.webp',
                    'course_url'   => '/course/functional-skills-maths-level-1',
                    'course_title' => 'Functional Skills Maths Level 1',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-1-2.webp',
                    'course_url'   => '/course/functional-skills-english-level-1',
                    'course_title' => 'Functional Skills English Level 1',
                    'first_line'   => 'From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-ICT-Level-1-3.webp',
                    'course_url'   => '/course/functional-skills-ict-level-1',
                    'course_title' => 'Functional Skills ICT Level 1',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-ICT-Level-2-3.webp',
                    'course_url'   => '/course/functional-skills-ict-level-2',
                    'course_title' => 'Functional Skills ICT Level 2',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-English-Course-Online.webp',
                    'course_url'   => '/course/entry-level-1-english-course',
                    'course_title' => 'Functional Skills Entry Level 1 English Course Online',
                    'first_line'   => 'From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-2-Course-Online.webp',
                    'course_url'   => '/course/entry-level-2-english-course',
                    'course_title' => 'Functional Skills English Entry Level 2 Course Online',
                    'first_line'   => 'From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-3-Online-Course.webp',
                    'course_url'   => '/course/functional-skills-english-entry-level-3',
                    'course_title' => 'Functional Skills English Entry Level 3 Online Course',
                    'first_line'   => 'From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-Maths-Course-Online.webp',
                    'course_url'   => '/course/functional-skills-entry-level-1-maths',
                    'course_title' => 'Functional Skills Entry Level 1 Maths Course Online',
                    'first_line'   => 'From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-2-Maths-Online-Course.webp',
                    'course_url'   => '/course/entry-level-2-maths',
                    'course_title' => 'Functional Skills Entry Level 2 Maths Online Course',
                    'first_line'   => 'From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Maths-Entry-Level-3-Online-Course.webp',
                    'course_url'   => '/course/functional-skills-maths-entry-level-3',
                    'course_title' => 'Functional Skills Maths Entry Level 3 Online Course',
                    'first_line'   => 'From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
            ];
            foreach( $fsc_courses_card_items as $item ) {
                ?>
                <div class="fsc-custom-card">
                    <img src="<?php echo esc_url($item['img_url'])?>" alt="<?php echo esc_html($item['course_title'])?>" width="327" height="196">
                    <div class="fsc-card-contents">
                        <h3><a href="<?php echo esc_url($item['course_url'])?>"><?php echo esc_html($item['course_title'])?></a></h3>
                        <p class="fsc-card-price-content">
                            <span><?php echo esc_html($item['first_line'])?></span>
                            <span><?php echo esc_html($item['second_line'])?></span>
                        </p>

                        <p class="fsc-package-includes">Package Included:</p>
                        <ul>
                            <li>Unlimited Tutor Support via Zoom</li>
                            <li>Interactive Course Materials</li>
                            <li>Official Exam Included</li>
                            <li>Accredited Qualification</li>
                            <li>Instalment Plan at Checkout</li>
                        </ul>

                        <a href="<?php echo esc_url($item['course_url'])?>" class="fsc-view-course-btn">View Courses</a>
                    </div> <!-- end card contents -->
                </div>
                <?php
            }
            ?>
        </div> <!-- end fsc-courses-custom-card-wrap -->

        <div class="fsc-custom-card-wrap exams" style="display: none">
            <?php
            $fsc_exams_card_items = [
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-2-Exam-2.webp',
                    'course_url'   => '/course/functional-skills-maths-level-2',
                    'course_title' => 'Functional Skills Maths Level 2 Exam',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-2-Exam-2.webp',
                    'course_url'   => '/course/functional-skills-english-level-2',
                    'course_title' => 'Functional Skills English Level 2 Exam',
                    'first_line'   => 'From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-and-English-Level-2-Exam-2.webp',
                    'course_url'   => '/course/level-2-maths-and-english-course',
                    'course_title' => 'Functional Skills Maths and English Level 2 Exam',
                    'first_line'   => 'From £92 / month',
                    'second_line'  => 'or from £275 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-1-Exam-2.webp',
                    'course_url'   => '/course/functional-skills-maths-level-1',
                    'course_title' => 'Functional Skills Maths Level 1 Exam',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-1-Exam-2.webp',
                    'course_url'   => '/course/functional-skills-english-level-1',
                    'course_title' => 'Functional Skills English Level 1 Exam',
                    'first_line'   => 'From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-ICT-Level-1-Exam-2.webp',
                    'course_url'   => '/course/functional-skills-ict-level-1',
                    'course_title' => 'Functional Skills ICT Level 1 Exam',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-ICT-Level-2-Exam-2.webp',
                    'course_url'   => '/course/functional-skills-ict-level-2',
                    'course_title' => 'Functional Skills ICT Level 2 Exam',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-English-Course-Online.webp',
                    'course_url'   => '/course/entry-level-1-english-course',
                    'course_title' => 'Functional Skills Entry Level 1 English Course Online',
                    'first_line'   => 'From £25 / month',
                    'second_line'  => 'or from £150 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-2-Course-Online.webp',
                    'course_url'   => '/course/entry-level-2-english-course',
                    'course_title' => 'Functional Skills English Entry Level 2 Course Online with Exam',
                    'first_line'   => 'From £25 / month',
                    'second_line'  => 'or from £150 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-3-Online-Course.webp',
                    'course_url'   => '/course/functional-skills-english-entry-level-3',
                    'course_title' => 'Functional Skills English Entry Level 3 Online Course with Exam',
                    'first_line'   => 'From £25 / month',
                    'second_line'  => 'or from £150 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-Maths-Course-Online.webp',
                    'course_url'   => '/course/functional-skills-entry-level-1-maths',
                    'course_title' => 'Functional Skills Entry Level 1 Maths Course Online with Exam',
                    'first_line'   => 'From £21.6 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-2-Maths-Online-Course.webp',
                    'course_url'   => '/course/entry-level-2-maths',
                    'course_title' => 'Functional Skills Entry Level 2 Maths Online Course with Exam',
                    'first_line'   => 'From £21.6 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Maths-Entry-Level-3-Online-Course.webp',
                    'course_url'   => '/course/functional-skills-maths-entry-level-3',
                    'course_title' => 'Functional Skills Maths Entry Level 3 Online Course with Exam',
                    'first_line'   => 'From £21.6 / month',
                    'second_line'  => 'or from £130 in full',
                ],
            ];
            foreach( $fsc_exams_card_items as $item ) {
                ?>
                <div class="fsc-custom-card">
                    <img src="<?php echo esc_url($item['img_url'])?>" alt="<?php echo esc_html($item['course_title'])?>" width="327" height="196">
                    <div class="fsc-card-contents">
                        <h3><a href="<?php echo esc_url($item['course_url'])?>"><?php echo esc_html($item['course_title'])?></a></h3>
                        <p class="fsc-card-price-content">
                            <span><?php echo esc_html($item['first_line'])?></span>
                            <span><?php echo esc_html($item['second_line'])?></span>
                        </p>

                        <p class="fsc-package-includes">Package Included:</p>
                        <ul>
                            <li>Book Your Exam Within 5 Days</li>
                            <li>Sit for the Exam Remotely</li>
                            <li>Get Result within 6 Working Days</li>
                            <li>Extra 25% Time for people with Learning Difficulties.</li>
                            <li>Paper-Based exam available on request.</li>
                            <li>Instalment Plan at Checkout</li>
                        </ul>

                        <a href="<?php echo esc_url($item['course_url'])?>" class="fsc-view-course-btn">View Courses</a>
                    </div> <!-- end card contents -->
                </div>
                <?php
            }
            ?>
        </div> <!-- end fsc-exams-custom-card-wrap -->
    </div>
</section>

<?php
    if ( count( $course_reviews ) > 1 ) {
    ?>
    <!-- Reviews section -->
    <section id="fsc-reviews">
        <div class="fsc-container">
            <h2>Valuable Feedback From Student</h2>
        </div>
    </section>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <?php
    echo '
        <link rel="stylesheet" href="wp-content/themes/lead-academy-child/assets/css/la-main.css">
        <style>
            body.page-id-374924 .la-reviews-carousel-section-wrap {
                margin: 10px auto 40px;
            }
            body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-box-head h2 {
                font-size: 20px;
            }
            body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-rv h3 {
                font-size: 16px;
            }
            body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-ds p {
                font-family: "Sen";
            }
            body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel .owl-dots.disabled, body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel .owl-nav.disabled {
                display: block;
            }
        </style>
    ';
    
        get_la_reviews_carousel_markup( $course_reviews );
    }
?>

<!-- FSC Partners section -->
<section id="fsc-partners">
    <div class="fsc-container">
        <h2>Approved and Accredited</h2>
    </div>
    <div class="fsc-container">
        <div class="owl-carousel owl-fsc-partners">
            <?php
            $partners = [
                [
                    'img_alt' => 'qls-logo',
                    'img_src' => '/wp-content/uploads/2022/12/qls-logo.png',
                ],
                [
                    'img_alt' => 'rospa-logo',
                    'img_src' => '/wp-content/uploads/2022/12/rospa-logo.png',
                ],
                [
                    'img_alt' => 'cpd-logo',
                    'img_src' => '/wp-content/uploads/2022/12/cpd-logo.png',
                ],
                [
                    'img_alt' => 'Signature-logo',
                    'img_src' => '/wp-content/uploads/2022/12/Signature-logo-1.png',
                ],
                [
                    'img_alt' => 'iphm-logo',
                    'img_src' => '/wp-content/uploads/2022/12/iphm-logo-1.png',
                ],
                [
                    'img_alt' => 'Pearson-logo',
                    'img_src' => '/wp-content/uploads/2022/12/Pearson.png',
                ],
                [
                    'img_alt' => 'Edexcel-logo',
                    'img_src' => '/wp-content/uploads/2022/12/Edexcel.png',
                ],
            ];
            foreach( $partners as $partner ){
                ?>
                <div class="fsc-partner-item">
                    <img src="<?php echo $partner['img_src']?>" alt="<?php echo $partner['img_alt']?>">
                </div>
                <?php
            }
            ?>
        </div>	<!-- end owl -->    
    </div>	<!-- end container -->   
</section>

<?php
    if ( count( $course_faqs ) > 1 ) {
    ?>
    <!-- FAQ section -->
    <section id="fsc-faqs">
        <div class="fsc-container">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="fsc-container">
            <div class="accordion">
                <?php
                foreach ( $course_faqs as $item ) {
                    ?>
                    <h3 class="accordion-title"><?php echo $item['faq_title']?></h3>
                    <div class="accordion-content">
                        <?php echo wpautop($item['faq_text'])?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div> 
    </section>
    <!-- End FAQ section -->
    <?php
    }

    get_footer(); 
?>
