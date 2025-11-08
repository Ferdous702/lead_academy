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
<section id="gcse-hero">
    <div class="fsc-container">
        <div class="fsc-inner-container">
            <div class="fsc-row">
                <h1>Ace your GCSE exam with Lead Academy! </h1>
                <p>Are you looking for a flexible solution for GCSE online courses?</p>
                <p>We offer Pearson Edexcel and AQA-accredited GCSE online courses that are widely accepted by universities across the globe. Our courses range from advanced to foundation tiers, available for Maths, Biology, Physics, Chemistry and English. In addition to offering well-structured study materials to achieve your desired grade, we will also aid you in booking your official exam!</p>
                <img src="/wp-content/uploads/2023/01/Trustpilot-logo.png" width="338" height="38" alt="trustpilot score">
                <a href="#view-courses">View Courses</a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero section -->

<!-- Features section -->
<section id="gcse-features">
    <div class="gcse-container">
        <div class="gcse-row">
            <ul class="list-unstyled m-0">
                <li><i class="fa fa-calendar-check"></i> Full tutor support</li>
                <li><i class="fa fa-stopwatch"></i> Study at your own pace</li>
                <li><i class="fa fa-headset"></i> Full tutor support</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Features section -->

<!-- Exams - Courses section -->
<section id="fsc-courses-exams" class="gcse-card-courses">
    <div class="fsc-container">
        <h2>BROWSE GCSE COURSES</h2>
    </div>
    
    <div class="fsc-container fsc-real-contents mt-5 mb-5">
        <div class="fsc-custom-card-wrap courses">
            <?php
            $fsc_courses_card_items = [
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-2-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/gcse-biology',
                    'course_title' => 'GCSE Biology Online Course | Foundation Tier',
                    'first_line'   => 'From £83 / month',
                    'second_line'  => 'or from £249 in full',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/01/GCSE-Biology-Online-Course-Foundation-Tier-1.webp',
                    'course_url'   => 'https://lead-academy.org/course/gcse-biology-course',
                    'course_title' => 'GCSE Biology Online Course | Higher Tier ',
                    'first_line'   => 'From £83 / month',
                    'second_line'  => 'or from £249 in full',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/01/GCSE-Chemistry-Foundation-Tier.webp',
                    'course_url'   => 'https://lead-academy.org/course/gcse-chemistry',
                    'course_title' => 'GCSE Chemistry Course | Foundation Tier',
                    'first_line'   => 'From £83 / month',
                    'second_line'  => 'or from £249 in full',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/01/GCSE-Chemistry-Course-Higher-Tier.webp',
                    'course_url'   => 'https://lead-academy.org/course/gcse-chemistry-course',
                    'course_title' => 'GCSE Chemistry Course | Higher Tier',
                    'first_line'   => 'From £83 / month',
                    'second_line'  => 'or from £249 in full',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/01/GCSE-Maths-Foundation-Tier.webp',
                    'course_url'   => 'https://lead-academy.org/course/gcse-maths',
                    'course_title' => 'GCSE Maths Online Course | Foundation Tier',
                    'first_line'   => 'From £83 / month',
                    'second_line'  => 'or from £249 in full',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/01/GCSE-Maths-Higher-Tier.webp',
                    'course_url'   => 'https://lead-academy.org/course/gcse-maths-online-course',
                    'course_title' => 'GCSE Maths Online Course | Higher Tier',
                    'first_line'   => 'From £83 / month',
                    'second_line'  => 'or from £249 in full',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/02/GCSE-English-Language.webp',
                    'course_url'   => 'https://lead-academy.org/course/gcse-english-language',
                    'course_title' => 'GCSE English Language',
                    'first_line'   => 'From £83 / month',
                    'second_line'  => 'or from £249 in full',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2022/12/Functional-Skills-ICT-Level-1.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-ict-level-1',
                    'course_title' => 'Functional Skills ICT Level 1',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2022/12/Functional-Skills-ICT-Level-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-ict-level-2',
                    'course_title' => 'Functional Skills ICT Level 2',
                    'first_line'   => 'From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2022/09/Tutored-Courses-2.jpg',
                    'course_url'   => 'https://lead-academy.org/course/signature-bsl-level-2',
                    'course_title' => 'Level 2 Certificate in BSL',
                    'first_line'   => 'From £199 / month',
                    'second_line'  => 'or from £599 in full',
                ]
            ];
            foreach( $fsc_courses_card_items as $item ) {
                ?>
                <div class="fsc-custom-card">
                    <img src="<?php echo esc_url($item['img_url'])?>" width="327" height="196">
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
    </div> <!-- end fsc-container -->
</section>

<section id="gcse-why-train">
    <div class="fsc-container" style="">
        <div class="gcse-why-train-left">
            <h2>WHY TRAIN WITH US?</h2>    
            <ul class="list-unstyled ms-0">
                <li>We offer both advanced and foundation tiers</li>
                <li>You can conveniently book your official exam with us</li>
                <li>Achieve your required GCSE grade with our highly informative course materials</li>
                <li>Take advantage of our expert tutor support</li>
                <li>Our courses are an excellent solution for anyone looking for a flexible option</li>
            </ul>
        </div>    
        <div class="gcse-why-train-right text-center">
            <h2>Recognised Qualification</h2>
            <div class="gcse-why-train-img-wrap mb-4">
                <img src="/wp-content/uploads/2022/12/edexcel-vector-logo.png" alt="edexcel logo" width="190" height="107">
                <img src="/wp-content/uploads/2023/01/AQA-Logo.webp" alt="aqa logo" width="190" height="106">
            </div>
            <p>Our GCSE courses are accredited by Pearson Edexcel and AQA, making them widely recognised and accepted throughout all global platforms.</p>
        </div>
    </div><!-- end fsc-container -->
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
    <?php
    echo '
        <link rel="stylesheet" href="wp-content/themes/lead-academy-child/assets/css/la-main.css">
        <style>
            body.page-id-375066 .la-reviews-carousel-section-wrap {
                margin: 10px auto 40px;
            }
            body.page-id-375066 .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-box-head h2 {
                font-size: 20px;
            }
            body.page-id-375066 .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-rv h3 {
                font-size: 16px;
            }
            body.page-id-375066 .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-ds p {
                font-family: "Sen";
            }
            body.page-id-375066 .la-reviews-carousel-section-wrap .owl-carousel .owl-dots.disabled, body.page-id-375066 .la-reviews-carousel-section-wrap .owl-carousel .owl-nav.disabled {
                display: block;
            }
            body.page-id-375066 .la-reviews-carousel-section-wrap .owl-carousel .owl-nav .owl-prev {
                left: -21px;
            }
        </style>
    ';
    
        get_la_reviews_carousel_markup( $course_reviews );
    }
?>

<?php
    if ( count( $course_faqs ) > 1 ) {
    ?>
    <!-- FAQ section -->
    <section id="fsc-faqs">
        <div class="fsc-container">
            <h2>Frequently Asked Question</h2>
        </div>
        <div class="fsc-container">
            <div class="accordion">
                <?php
                foreach ( $course_faqs as $item ) {
                    ?>
                    <h6 class="accordion-title"><?php echo $item['faq_title']?></h6>
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