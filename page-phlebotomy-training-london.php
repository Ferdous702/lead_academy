<?php

/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

$current_page_id                = get_the_ID();
$la_phleb_course_meta_group     = get_post_meta($current_page_id, 'la_phleb_course_meta_group', true);
$la_phleb_course_regular_price  = get_post_meta($current_page_id, 'la_phleb_course_regular_price', true);
$la_phleb_course_sell_price     = get_post_meta($current_page_id, 'la_phleb_course_sell_price', true);
$la_phleb_course_location_root  = get_post_meta($current_page_id, 'la_phleb_course_location_root', true);
$la_phleb_course_address_root   = get_post_meta($current_page_id, 'la_phleb_course_address_root', true);
$la_phleb_course_time_root      = get_post_meta($current_page_id, 'la_phleb_course_time_root', true);
$related_product_var            = get_post_meta($current_page_id, 'la_related_product_group', true);

$la_learner_achievements_image    = get_post_meta($current_page_id, 'la_learner_achievements_image', true);
$practical_session_video_url    = get_post_meta($current_page_id, 'practical_session_video_url', true);
$practical_session_video_img    = get_post_meta($current_page_id, 'practical_session_video_img', true);
$success_story_video_url        = get_post_meta($current_page_id, 'success_story_video_url', true);
$success_story_video_img        = get_post_meta($current_page_id, 'success_story_video_img', true);

// If empty set default Learners Achievement image
if (empty($la_learner_achievements_image)) {
    $la_learner_achievements_image = '/wp-content/uploads/2023/05/plebotomy-practical-session-27-may.webp';
}

// If empty set default Practical Session video url
if (empty($practical_session_video_url)) {
    $practical_session_video_url = 'https://youtu.be/Cd9KWB50ztI';
}

// If empty set default Practical Session video image
if (empty($practical_session_video_img)) {
    $practical_session_video_img = '/wp-content/uploads/2023/06/practical-session.webp';
}

// If empty set default Success Story video url
if (empty($success_story_video_url)) {
    $success_story_video_url = 'https://youtu.be/bERqcY6jcXA?t=7';
}

// If empty set default Success Story video image
if (empty($success_story_video_img)) {
    $success_story_video_img = '/wp-content/uploads/2023/06/success-story-1.webp';
}

/* Start for sort date array Ascending */
if ($la_phleb_course_meta_group[0]['adv_course_date']) {
    usort($la_phleb_course_meta_group, "sortByDateAdv");
} else {
    usort($la_phleb_course_meta_group, "sortByDateSingle");
}
/* End for sort date array Ascending */

function getCurrentProductByVariationId($variationId)
{
    $variation = new WC_Product_Variation($variationId);

    return $variation;
}

?>

<div id="phlebotomy-page">
    <?php
    // Black Friday Banner Section
    // include ASTRA_CHILD_THEME_DIR . '/woocommerce/black-friday-banner-section-phlebotomy.php';
    ?>
    <!-- Top 3 -->
    <div class="phlebotomy-top-3">
        <div class="phlebotomy-container">
            <div class="single-phlebotomy-top-3">
                <div class="float-row">
                    <div class="float-left">
                        <img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="Face-to-Face Training Session">
                    </div>
                    <div class="float-right">
                        <h6>Face-to-Face Training Session</h6>
                        <p>Live training ensures the maximum effectiveness of your learning.</p>
                    </div>
                </div>
            </div>
            <div class="single-phlebotomy-top-3">
                <div class="float-row">
                    <div class="float-left">
                        <img src="/wp-content/uploads/2022/12/instalment.webp" alt="4 Instalment Plan on Checkout">
                    </div>
                    <div class="float-right">
                        <h6>4 Instalment Plan on Checkout</h6>
                        <p>You have the option to choose from four easy instalment plans.</p>
                    </div>
                </div>
            </div>
            <div class="single-phlebotomy-top-3">
                <div class="float-row">
                    <div class="float-left">
                        <img src="/wp-content/uploads/2022/12/14-days.webp" alt="Learn From Industry Expert">
                    </div>
                    <div class="float-right">
                        <h6>Learn From Industry Expert</h6>
                        <p>Since you have to learn, why settle for less? Learn from the best.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero -->
    <div id="phlebotomy-hero">
        <div class="phlebotomy-container">
            <div id="phlebotomy-hero-content">
                <h1><?php echo get_the_title(); ?></h1>
                <p>Our phlebotomy training helps people to get trained and work as phlebotomists in private & public healthcare organisations.</p>
                <style>
                    .google-review-svg {
                        width: 400px;
                    }

                    @media (max-width: 468px) {
                        .google-review-svg {
                            width: 300px;
                        }
                    }
                </style>
                <svg class="google-review-svg" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1" viewBox="0 0 317 25">
                    <defs>
                        <style>
                            .st0 {
                                fill: #01b67a;
                            }

                            .st1 {
                                fill: #005229;
                            }

                            .st2 {
                                font-family: Poppins-Regular, Poppins;
                            }

                            .st2,
                            .st3,
                            .st4 {
                                fill: #fff;
                            }

                            .st2,
                            .st4 {
                                font-size: 10.25px;
                            }

                            .st5 {
                                fill: #e84335;
                            }

                            .st6 {
                                fill: #34a753;
                            }

                            .st4 {
                                font-family: Poppins-SemiBold, Poppins;
                                font-weight: 600;
                            }

                            .st7 {
                                fill: #fbbb06;
                            }

                            .st8 {
                                fill: #2d9657;
                            }

                            .st9 {
                                fill: none;
                                stroke: #fff;
                                stroke-miterlimit: 10;
                                stroke-width: .74px;
                            }

                            .st10 {
                                fill: #4385f4;
                            }
                        </style>
                    </defs>
                    <g>
                        <text class="st4" transform="translate(213.54 16.19)">
                            <tspan x="0" y="0">Customer Reviews</tspan>
                        </text>
                        <g>
                            <path class="st5" d="M190.49,8.85c2.11-4.22,7.66-5.6,11.4-2.58.08.07.33.26.38.33.01.02.03.03.01.05l-2.13,2.12c-.08.03-.04-.05-.08-.08-.06-.06-.25-.18-.33-.24-2.44-1.74-5.83-.46-6.75,2.32l-2.49-1.93Z"></path>
                            <path class="st6" d="M193,13.68c.93,2.78,4.35,4.03,6.81,2.36l2.43,1.89c-.85.79-1.81,1.31-2.94,1.6-3.57.91-7.17-.67-8.81-3.94l2.51-1.91Z"></path>
                            <path class="st10" d="M199.81,16.05c.75-.51,1.35-1.38,1.48-2.28h-4.06v-2.92h7.13c.42,2.49-.16,5.22-2.02,7.01-.03.03-.08.05-.11.07l-2.43-1.89Z"></path>
                            <path class="st7" d="M192.98,10.78c-.11.34-.2.85-.21,1.2-.16.11-.16.37,0,.47.02.4.11.84.24,1.22l-2.51,1.91c-1.09-2.19-1.09-4.56,0-6.75l2.49,1.93Z"></path>
                            <path class="st7" d="M192.77,12.46c-.16-.1-.16-.37,0-.47,0,.15,0,.32,0,.47Z"></path>
                        </g>
                    </g>
                    <g>
                        <text class="st2" transform="translate(111.5 15.84)">
                            <tspan x="0" y="0">Rated</tspan>
                        </text>
                        <text class="st2" transform="translate(147.56 16.05)">
                            <tspan x="0" y="0">4.9/5</tspan>
                        </text>
                        <line class="st9" x1="179.5" y1="5.01" x2="179.5" y2="19.17"></line>
                    </g>
                    <g>
                        <rect class="st8" x="6.57" y="2.73" width="18.5" height="18.5"></rect>
                        <g>
                            <path class="st3" d="M18.75,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
                            <path class="st1" d="M18.75,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
                            <path class="st0" d="M19.97,18.36s.01.01,0,.02v-.02Z"></path>
                        </g>
                        <rect class="st8" x="26.73" y="2.73" width="18.5" height="18.5"></rect>
                        <g>
                            <path class="st3" d="M38.91,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
                            <path class="st1" d="M38.91,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
                            <path class="st0" d="M40.12,18.36s.01.01,0,.02v-.02Z"></path>
                        </g>
                        <rect class="st8" x="46.88" y="2.73" width="18.5" height="18.5"></rect>
                        <g>
                            <path class="st3" d="M59.06,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
                            <path class="st1" d="M59.06,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
                            <path class="st0" d="M60.28,18.36s.01.01,0,.02v-.02Z"></path>
                        </g>
                        <rect class="st8" x="67.03" y="2.73" width="18.5" height="18.5"></rect>
                        <g>
                            <path class="st3" d="M79.22,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
                            <path class="st1" d="M79.22,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
                            <path class="st0" d="M80.43,18.36s.01.01,0,.02v-.02Z"></path>
                        </g>
                        <rect class="st8" x="87.19" y="2.73" width="18.5" height="18.5"></rect>
                        <g>
                            <path class="st3" d="M99.37,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
                            <path class="st1" d="M99.37,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
                            <path class="st0" d="M100.59,18.36s.01.01,0,.02v-.02Z"></path>
                        </g>
                    </g>
                </svg><br>
                <!-- <a href="#" class="red-button">Start Your Phlebotomy Career</a> -->
            </div>
        </div>
    </div>

    <!-- Main -->
    <div id="phlebotomy-main-section">
        <div class="phlebotomy-container">
            <!-- <div class="float-row"> -->
            <div id="phlebotomy-main">

                <div id="booking-options" class="phlebotomy-common">
                    <h3>Booking Options&nbsp;<img src="/wp-content/uploads/2022/12/info.webp" title="info" alt="info icon"></h3>
                    <div class="single-booking-option">
                        <div class="single-booking-row float-row">
                            <div class="single-booking-left">
                                <h4><img src="/wp-content/uploads/2022/12/classroom-session.webp" alt="Classroom session">Course Structure</h4>
                                <ul>
                                    <li>You will study theoretical part online, and practical sessions in a physical classroom setting.</li>
                                    <li>Gain real-life experience and support from industry-experienced tutors.</li>
                                    <li>Get a chance to interact with fellow professionals and get certified.</li>
                                </ul>
                            </div>
                            <div class="single-booking-right">
                                <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                                    <img src="/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount">
                                    <span>55% Off</span>
                                </div>
                                <div class="float-row" style="margin: 13px 0 10px;">
                                    <span class="float-left" style="font-size: 20px; font-weight: 700;"><b>£<?= $la_phleb_course_sell_price ?></b></span>
                                    <span class="float-right text-right" style="font-size: 18px;"><del>£<?= $la_phleb_course_regular_price ?>.00</del></span>
                                </div>
                                <a href="javascript:void(0);" class="single-booking-btn" id="see-dates-btn">SEE DATES</a>
                            </div>
                        </div>
                        <div id="show-classroom-schedule-wrap">
                            <div class="d-flex justify-content-center align-items-center gap-3 py-4">
                                <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <span>Loading...</span>
                            </div>
                        </div>
                    </div>
                    <div class="single-booking-option" style="margin-bottom: 0">
                        <div class="single-booking-row float-row">
                            <div class="single-booking-left">
                                <h4><img src="/wp-content/uploads/2022/12/in-house.webp" title="in-house" alt="Classroom session">In-House</h4>
                                <ul>
                                    <li>Corporate Companies that wish to train their entire workforce</li>
                                    <li>Learn the most in-demand skills</li>
                                    <li>We provide tailored courses based on your requirements to train your employees</li>
                                </ul>
                            </div>
                            <div class="single-booking-right">
                                <a href="#" id="enquire-now-btn" class="single-booking-btn">ENQUIRE NOW</a>
                            </div>

                            <!-- Trigger/Open The Modal -->
                            <style>
                                .gift_course_button {
                                    display: none !important;
                                }

                                .gform_wrapper.gravity-theme .gform_footer,
                                .gform_wrapper.gravity-theme .gform_page_footer {
                                    padding: 0px !important;
                                }

                                /* The Modal (background) */
                                .modal {
                                    display: none;
                                    /* Hidden by default */
                                    position: fixed;
                                    /* Stay in place */
                                    z-index: 999;
                                    /* Sit on top */
                                    padding-top: 100px;
                                    /* Location of the box */
                                    padding-bottom: 20px;
                                    /* Location of the box */
                                    left: 0;
                                    top: 0;
                                    width: 100%;
                                    /* Full width */
                                    max-width: 100%;
                                    height: 100%;
                                    /* Full height */
                                    overflow: auto;
                                    /* Enable scroll if needed */
                                    background-color: rgb(0, 0, 0);
                                    /* Fallback color */
                                    background-color: rgba(0, 0, 0, 0.4);
                                    /* Black w/ opacity */
                                }

                                /* Modal Content */
                                .modal-content {
                                    background-color: #f8f8f8;
                                    margin: auto;
                                    padding: 5px 20px 13px 20px;
                                    border: 1px solid #888;
                                    width: 420px;
                                    max-width: 80%;
                                }

                                /* The Close Button */
                                .close {
                                    color: #aaaaaa;
                                    float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                }

                                .close:hover,
                                .close:focus {
                                    color: #000;
                                    text-decoration: none;
                                    cursor: pointer;
                                }

                                #enquiryModal textarea {
                                    height: 100px;
                                }

                                div#gform_64_validation_container h2 {
                                    font-size: 18px;
                                    line-height: 26px;
                                }
                            </style>

                            <!-- The Modal -->
                            <div id="enquiryModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="hide()">&times;</span>
                                    <p><?php echo do_shortcode( '[contact-form-7 id="b955bde" title="Phlebotomy Courses Enquiry Form"]' ); ?></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div id="screenshot-wrap">
                        <div id="screenshot">
                            <h3>Previous Practical Session Overview</h3>
                            <div class="single-screenshot-item fancybox">
                                <a href="/wp-content/uploads/2023/02/screenshot-1.webp" class="fancybox">
                                    <img src="/wp-content/uploads/2023/02/screenshot-1.webp" alt="screenshot 1">
                                </a>
                                <a href="/wp-content/uploads/2023/02/screenshot-2.webp" class="fancybox">
                                    <img src="/wp-content/uploads/2023/02/screenshot-2.webp" alt="screenshot 2">
                                </a>
                                <a href="/wp-content/uploads/2023/02/screenshot-3.webp" class="fancybox">
                                    <img src="/wp-content/uploads/2023/02/screenshot-3.webp" alt="screenshot 3">
                                </a>
                                <a href="/wp-content/uploads/2023/02/screenshot-4.webp" class="fancybox">
                                    <img src="/wp-content/uploads/2023/02/screenshot-4.webp" alt="screenshot 4">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $(".fancybox").fancybox();
                    });
                </script>

                <script>
                    $(document).ready(function() {
                        $(".fancybox").fancybox({
                            // Optional: Add custom options here
                            // For example:
                            transitionEffect: "fade",
                            transitionDuration: 500,
                            arrows: true,
                            buttons: ["zoom", "share", "close"],
                            thumbs: {
                                autoStart: true
                            }
                        });
                    });
                </script>

                <div id="mobile-course-fee-info">
                    <div id="course-fee">
                        <h6>Course Fee</h6>
                        <div id="course-price">
                            <div class="float-row">
                                <div class="float-left text-left">
                                    <h3>£<?= $la_phleb_course_sell_price ?>
                                        <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span>
                                    </h3>
                                </div>
                                <div class="float-right text-right">
                                    <h5>£<?= $la_phleb_course_regular_price ?></h5>
                                </div>
                            </div>
                            <h5><img src="/wp-content/uploads/2022/12/discount-white.webp" alt="discount white icon"> 55% OFF</h5>
                            <h5><img src="/wp-content/uploads/0223/12/Accredited-Certificate.svg" title="Accredited Certificate" alt="Accredited-Certificate" style="width: 25px">Accredited Certificate Included</h5>
                            <a href="h/cart?add-to-cart=370462" class="red-button">BOOK NOW</a>
                        </div>
                    </div>
                    <div id="course-fee-others">
                        <div class="float-row">
                            <div class="float-left">
                                <div>
                                    <img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="Face to Face Training Session">
                                </div>
                                Face to Face Training Session
                            </div>
                            <div class="float-right">
                                <div>
                                    <img src="/wp-content/uploads/2022/12/instalment.webp" alt="instalment">
                                </div>
                                3 Instalment Plan on checkout
                            </div>
                        </div>
                        <div class="float-row">
                            <div class="float-left">
                                <div>
                                    <img src="/wp-content/uploads/2022/12/7-hours.webp" alt="7 hours">
                                </div>
                                7 Hours 30 Min
                            </div>
                            <div class="float-right">
                                <div>
                                    <img src="/wp-content/uploads/2022/12/14-days.webp" alt="Learn From Industry Expert">
                                </div>
                                14 Days Money Back Guaranty
                            </div>
                        </div>
                    </div>
                </div>

                <nav id="phlebotomy-single-links" class="phlebotomy-single-links">
                    <ul>
                        <li><a href="#overview-wrap" class="active">Overview</a></li>
                        <li><a href="#accreditaion-wrap">Accreditation</a></li>
                        <li><a href="#course-curriculum-wrap">Curriculum</a></li>
                        <li><a href="#reviews-wrap">Reviews</a></li>
                        <li><a href="#faq-wrap">FAQ</a></li>
                    </ul>
                </nav>

                <nav id="mobile-phlebotomy-single-links" class="phlebotomy-single-links full-width-section">
                    <ul>
                        <li><a href="#overview-wrap" class="active">Overview</a></li>
                        <li><a href="#accreditaion-wrap">Accreditation</a></li>
                        <li><a href="#course-curriculum-wrap">Curriculum</a></li>
                        <li><a href="#faq-wrap">FAQ</a></li>
                    </ul>
                </nav>

                <div id="overview-wrap">
                    <div id="overview" class="phlebotomy-common">
                        <?php echo the_content() ?>
                    </div>
                </div>

                <div id="accreditaion-wrap">
                    <div id="accreditaion" class="phlebotomy-common">
                        <h3>Recognised Accreditation</h3>
                        <p>This phlebotomy course is accredited by Continuing Professional Development (CPD). CPD is globally recognised by employers, professional organisations and academic intuitions, thus a certificate from CPD Certification Service creates value towards your professional goal and achievement. </p>
                        <div style="margin: 0 0 15px;"><img src="/wp-content/uploads/2022/12/cpd.webp" alt="cpd logo"></div>
                        <p>CPD-certified certificates are accepted by thousands of professional bodies and government regulators here in the UK and around the world. Many organisations look for employees with CPD requirements, which means, that by doing the phlebotomy course, you would be a potential candidate in your respective field.</p>
                    </div>
                </div>

                <div id="course-curriculum-wrap">
                    <div id="course-curriculum" class="phlebotomy-common">
                        <h3>Course CurricuIum</h3>
                        <h6 class="course-curriculum-title">
                            Module 1: Introduction and Evolution
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 2: Phlebotomy as a Career Choice
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 3: Legislations Concerning Phlebotomy and Cannulation
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 4: Fundamentals of Phlebotomy
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 5: Blood Physiology
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 6: Vascular System
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 7: Phlebotomy Vein Selection Dos and Donts
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 8: Ideal Environment and Equipment in Phlebotomy
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 9: Preparation for Venepuncture
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 10: The Procedure of Phlebotomy
                        </h6>
                        <h6 class="course-curriculum-title">
                            Module 11: Health Safety Aspects in Phlebotomy
                        </h6>
                    </div>
                </div>

                <div class="la-practical-video-wrap">
                    <h3>Practical Video Session</h3>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Cd9KWB50ztI?si=RNtDGL4_cYCPM9Gw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <?php
                echo '
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                                <style>
                                    #phlebotomy-page .la-reviews-carousel-section-wrap {
                                        margin: 120px auto 80px;
                                    }
                                    #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-box-head h2 {
                                        font-size: 20px;
                                    }
                                    #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-rv h3 {
                                        font-size: 16px;
                                    }
                                    #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-ds p {
                                        font-family: "Sen";
                                    }
                                    #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel .owl-dots.disabled, #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel .owl-nav.disabled {
                                        display: block;
                                    }
                                    #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel .owl-nav .owl-prev {
                                        left: -21px;
                                    }
                                    body.ast-page-builder-template .cat-box-head img {
                                        width: 70px;
                                    }
                                    body.ast-page-builder-template .cat-feedback-rv p {
                                        font-size: 12px;
                                    }
                                    #phlebotomy-page .la-reviews-carousel-section-wrap {
                                        display: inline-block;
                                    }
                                    .la-reviews-carousel-section-wrap .owl-carousel .owl-nav .owl-prev {
                                        left: -28px !important;
                                    }
                                    @media (max-width: 767px) {
                                        #phlebotomy-page .la-reviews-carousel-section-wrap {
                                            display: block;
                                        }
                                    }
                                    @media only screen and (min-width: 768px) and (max-width: 1024px) {
                                        #phlebotomy-page .la-reviews-carousel-section-wrap {
                                            display: block;
                                        }
                                    }
                                </style>
                            ';

                $course_reviews = get_post_meta(get_the_ID(), 'la_course_reviews', true);
                if (function_exists('la_display_reviews_section')) {
                    la_display_reviews_section();
                }
                ?>

                <div id="faq-wrap">
                    <div id="faq" class="phlebotomy-common">
                        <h3>Frequently Asked Question (FAQ)</h3>
                        <div class="accordion">
                            <h6 class="accordion-title">What is phlebotomy training?</h6>
                            <div class="accordion-content">
                                <p>This training is practically based on theory and practical work involving taking blood from different patient groups. </p>
                            </div>

                            <h6 class="accordion-title">How long is phlebotomy training?</h6>
                            <div class="accordion-content">
                                <p>The phlebotomy training offered by Lead Academy lasts only one day. You will have online training for 3 hours and face-to-face training for 8 hours. During the online training, you will learn about the theoretical aspects of phlebotomy, including anatomy and safety protocols. The face-to-face training will provide hands-on experience in performing blood draws under the guidance of experienced instructors.</p>
                            </div>

                            <h6 class="accordion-title">Is this training specialists accredited?</h6>
                            <div class="accordion-content">
                                <p>Yes, the Phlebotomy training at Lead Academy is accredited by CPD, which means that it meets the highest standards of quality and professionalism. This accreditation ensures that the training programme is recognised and respected within the healthcare industry. </p>
                            </div>
                            <?php /*
                                    <h6 class="accordion-title">Is this training recognised by the NHS?</h6>
                                    <div class="accordion-content"><p>Yes, this course is recognised by the NHS, which means it meets their standards and requirements for healthcare professionals. This adds credibility to your qualifications and increases your chances of employment within the NHS.</p></div>
*/ ?>
                            <h6 class="accordion-title">How much is phlebotomy training?</h6>
                            <div class="accordion-content">
                                <p>This training normally starts at £249; however you can join a budget-friendly course starting at only £155 at Lead Academy, which will give you a certified qualification. </p>
                            </div>

                            <h6 class="accordion-title">Where can I get phlebotomy training?</h6>
                            <div class="accordion-content">
                                <p>You should enrol in Lead Academy’s Phlebotomy Course, which provides a CPD UK accredited certificate at the most competitive price.</p>
                            </div>

                            <h6 class="accordion-title">How to apply for phlebotomy training?</h6>
                            <div class="accordion-content">
                                <p>Enrollment in this training is very straightforward. You can easily access the course by simply adding it to your cart and paying for it.</p>
                            </div>

                            <h6 class="accordion-title">Is learning phlebotomy hard?</h6>
                            <div class="accordion-content">
                                <p>When you enrol with Lead Academy, you get hands-on experience under the guidance of experts, which makes the whole process very easy and exciting. </p>
                            </div>

                            <h6 class="accordion-title">Can I get a Job after this training?</h6>
                            <div class="accordion-content">
                                <p>Our training is accredited by CPD, which means that upon completion of the course, you will receive a UK accredited certificate that is recognised by employers. This increases your chances of finding employment in the field of phlebotomy. You can further enrol in the <a href="/course/advanced-phlebotomy-training">Advanced / Competency Phlebotomy Training</a> at Lead Academy and practise drawing blood in clinical settings to increase your job prospects.<?php /*<br><br>To check the available job you can visit <a href="https://www.jobs.nhs.uk/candidate/search">NHS Jobs</a>*/ ?>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <aside id="phlebotomy-sidebar">
                <div id="course-fee-info">
                    <div id="course-fee">
                        <h6>Course Fee</h6>
                        <div id="course-price">
                            <div class="float-row">
                                <div class="float-left text-left">
                                    <h3>£<?= $la_phleb_course_sell_price ?>
                                        <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span>
                                    </h3>
                                </div>
                                <div class="float-right text-right">
                                    <h5>£<?= $la_phleb_course_regular_price ?></h5>
                                </div>
                            </div>
                            <h5><img src="/wp-content/uploads/2022/12/discount-white.webp" alt="discount white" style="width: 20px"> 55% OFF</h5>
                            <h5><img src="/wp-content/uploads/0223/12/Accredited-Certificate.svg" title="Accredited Certificate" alt="accredited-certificate" style="width: 25px">Accredited Certificate Included</h5>
                            <p class="la-show-black-friday-countdown-reminder mt-4" style="font-size: 14px;"></p>
                            <script>
                                jQuery(document).ready(function() {
                                    getBlackFridayRemainingCountdown();
                                });
                            </script>
                            <a href="#" id="enquiry-booking-modal" class="red-button">ENROL NOW</a>

                            <!-- Trigger/Open The Modal -->
                            <style>
                                .gift_course_button {
                                    display: none !important;
                                }

                                .gform_wrapper.gravity-theme .gform_footer,
                                .gform_wrapper.gravity-theme .gform_page_footer {
                                    padding: 0px !important;
                                }

                                /* The Modal (background) */
                                .modal {
                                    display: none;
                                    /* Hidden by default */
                                    position: fixed;
                                    /* Stay in place */
                                    z-index: 999;
                                    /* Sit on top */
                                    padding-top: 100px;
                                    /* Location of the box */
                                    padding-bottom: 20px;
                                    /* Location of the box */
                                    left: 0;
                                    top: 0;
                                    width: 100%;
                                    /* Full width */
                                    max-width: 100%;
                                    height: 100%;
                                    /* Full height */
                                    overflow: auto;
                                    /* Enable scroll if needed */
                                    background-color: rgb(0, 0, 0);
                                    /* Fallback color */
                                    background-color: rgba(0, 0, 0, 0.4);
                                    /* Black w/ opacity */
                                }

                                /* Modal Content */
                                #enquiryBookingModal .modal-content {
                                    background-color: #f8f8f8;
                                    margin: auto;
                                    padding: 5px 20px 13px 20px;
                                    border: 1px solid #888;
                                    width: 750px;
                                    max-width: 80%;
                                    max-height: 500px;
                                }

                                /* The Close Button */
                                .close {
                                    color: #aaaaaa;
                                    float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                }

                                .close:hover,
                                .close:focus {
                                    color: #000;
                                    text-decoration: none;
                                    cursor: pointer;
                                }

                                #enquiryModal textarea {
                                    height: 100px;
                                }

                                div#gform_64_validation_container h2 {
                                    font-size: 18px;
                                    line-height: 26px;
                                }

                                div#enquiryBookingModal {
                                    color: #000 !important;
                                }

                                div#enquiryBookingModal .single-booking-option {
                                    margin: 35px 5px 10px;
                                    overflow-y: scroll;
                                }

                                div#enquiryBookingModal .close {
                                    margin-right: -12px;
                                }

                                div#enquiryBookingModal .float-row {
                                    justify-content: space-between;
                                }

                                div#enquiryBookingModal .single-booking-row:first-child {
                                    border-top: 0;
                                    margin: 0;
                                    padding: 0 0 20px;
                                }
                            </style>

                            <!-- The Booking Modal -->
                            <div id="enquiryBookingModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="hide()">&times;</span>
                                    <div class="single-booking-option">
                                        <div class="d-flex justify-content-center align-items-center gap-3 py-4">
                                            <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                            <span>Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                // Get the booking modal
                                let enqueryBookingModal = document.getElementById("enquiryBookingModal");

                                // Get the button that opens the modal
                                let enqueryRedBtn = document.getElementById("enquiry-booking-modal");
                                // let enqueryRedBtn = document.querySelectorAll('[id=enquiry-booking-modal]');
                                // let phonePhlebotomyEnqueryRedBtn = document.getElementById("la-phone-phlebotomy-enquiry-booking-modal");

                                // Get the <span> element that closes the modal
                                let enqueryCloseEl = document.getElementsByClassName("close")[0];

                                // When the user clicks the button, open the modal 
                                enqueryRedBtn.onclick = function() {
                                    enqueryBookingModal.style.display = "block";
                                }
                                // phonePhlebotomyEnqueryRedBtn.onclick = function() {
                                //     console.log('phonePhlebotomyEnqueryRedBtn clicked');
                                //     enqueryBookingModal.style.display = "block";
                                // }

                                // When the user clicks on <span> (x), close the modal
                                enqueryCloseEl.onclick = function() {
                                    enqueryBookingModal.style.display = "none";
                                }

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                    if (event.target == enqueryBookingModal) {
                                        enqueryBookingModal.style.display = "none";
                                    }
                                }
                            </script>
                        </div>
                    </div>
                    <div id="course-fee-others">
                        <div class="float-row">
                            <div class="float-left">
                                <div>
                                    <img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="14 Days Money Back Guarantee">
                                </div>
                                14 Days Money Back Guarantee
                            </div>
                            <div class="float-right">
                                <div>
                                    <img src="/wp-content/uploads/2022/12/instalment.webp" alt="High Pass Rate">
                                </div>
                                High Pass Rate
                            </div>
                        </div>
                        <div class="float-row">
                            <div class="float-left">
                                <div>
                                    <img src="/wp-content/uploads/2022/12/7-hours.webp" alt="8 Hours Practical + 3 Hours Theoretical Study">
                                </div>
                                7.5 Hours Practical + 3.5 Hours Theoretical Study
                            </div>
                            <div class="float-right">
                                <div>
                                    <img src="/wp-content/uploads/2022/12/14-days.webp" alt="Certificate Upon Completion">
                                </div>
                                Certificate Upon Completion
                            </div>
                        </div>
                    </div>
                </div>

                <div id="phlebotomy-practical-session">
                    <h4><b>Learners Achievement</b></h4>
                    <a href="<?= $la_learner_achievements_image ?>" class="fancybox">
                        <img src="<?= $la_learner_achievements_image ?>" width="357" height="268" alt="plebotomy-practical-session-27-may">
                    </a>
                </div>
                <div id="phlebotomy-practical-session">
                    <h4><b>Practical Session</b></h4>
                    <a href="<?= $practical_session_video_url ?>" class="fancybox">
                        <img src="<?= $practical_session_video_img ?>" width="357" height="205" alt="practical video session">
                    </a>
                </div>
                <div id="phlebotomy-practical-session">
                    <h4><b>Success Story</b></h4>
                    <a href="<?= $success_story_video_url ?>" class="fancybox">
                        <img src="<?= $success_story_video_img ?>" width="357" height="205" alt="success story">
                    </a>
                </div>

                <div id="get-in-touch">
                    <h4>Get In Touch Today</h4>
                    <a href="#" onclick="LC_API.open_chat_window();return false">Live CHAT WITH US</a>
                    <a href="tel:0300 124 5585">CALL ON - 0300 124 5585</a>
                </div>
            </aside>
            <!-- </div> -->
        </div>
    </div>

    <?php
    if (count($related_product_var) > 1) {
    ?>
        <style>
            #la-single-learners-bought {
                padding: 0 15px;
                font-family: 'Sen', sans-serif;
            }

            #la-single-learners-bought>h2 {
                color: #1C1D1F;
                font-size: 30px;
            }

            #single-related-products>ul>li {
                padding: 0 !important;
            }

            #single-related-products div.course-card-title>a.course-title>h3.woocommerce-loop-product__title {
                line-height: 22px;
                height: 45px;
                overflow: hidden;
                margin-bottom: 5px;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }

            #single-related-products>ul {
                grid-template-columns: repeat(4, 1fr);
                display: grid;
                column-gap: 20px;
            }

            @media screen and (max-width: 1024px) {
                #single-related-products>ul {
                    grid-template-columns: repeat(3, 1fr);
                }
            }

            @media screen and (max-width: 768px) {
                #single-related-products>ul {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media screen and (max-width: 767px) {
                #single-related-products>ul {
                    grid-template-columns: repeat(1, 1fr);
                }
            }
        </style>
        <div id="la-single-learners-bought" class="overflow-hidden mb-5">
            <h2 class="text-center"><b>Learner’s Also Bought</b></h2>
            <section id="single-related-products" class="related products">
                <ul class="products columns-4">
                    <?php
                    foreach ($related_product_var as $rp) {
                        $rp_product = wc_get_product($rp['product_id']);
                        if ($rp_product) {
                            $rp_product_url = get_permalink($rp['product_id']);
                            $rp_title = get_the_title($rp['product_id']);
                            $rp_post_thumbnail_id = get_post_thumbnail_id($rp['product_id']);
                            $rp_product_image = wp_get_attachment_image_src($rp_post_thumbnail_id, "la_course_archive_thumb_245x150");
                            $rp_product_image_alt = get_post_meta($rp_post_thumbnail_id, '_wp_attachment_image_alt', true);
                            $rp_product_image_title = get_the_title($rp_post_thumbnail_id);

                            if ($rp_product->get_type() == 'variable') {
                                $variations = $rp_product->get_available_variations();

                                if (!empty($variations)) { // Ensure there is at least one variation
                                    $first_variation_id = $variations[0]['variation_id'];
                                    $child_item = wc_get_product($first_variation_id);
                                    $rp_regular_price = $child_item->get_regular_price();
                                    $rp_sale_price = $child_item->get_sale_price();
                                } else {
                                    $rp_regular_price = $rp_sale_price = null; // No variations available
                                }
                            } else {
                                $rp_regular_price = get_post_meta($rp['product_id'], "_regular_price", true);
                                $rp_sale_price = get_post_meta($rp['product_id'], "_sale_price", true);
                            }
                        }
                    ?>
                        <li class="ast-article-single ast-woo-product-no-review desktop-align-left tablet-align-left mobile-align-left product type-product post-<?= $rp['product_id'] ?> status-publish last instock product_cat-others product_cat-product-link has-post-thumbnail sale taxable shipping-taxable purchasable product-type-variable">
                            <div class="col-md-4">
                                <div class="course-card-box">
                                    <div class="course-card">
                                        <div class="course-card-img">
                                            <img src="<?= $rp_product_image[0] ?>" alt="<?= $rp_product_image_alt ?>">
                                        </div>
                                        <div class="course-body">
                                            <div class="course-card-title">
                                                <a href="<?= $rp_product_url ?>" class="course-title">
                                                    <h3 class="woocommerce-loop-product__title"><?= $rp_title ?></h3>
                                                </a>
                                            </div>
                                            <div class="la-rv-course-ratings">
                                                <img src="/wp-content/uploads/2022/08/Group-15155.png" alt="tp-logo">
                                            </div>
                                            <div>
                                                <div class="la-course-price">
                                                    <del><?= get_woocommerce_currency_symbol() . $rp_regular_price ?></del>
                                                    <p><?= get_woocommerce_currency_symbol() . $rp_sale_price ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-d-btn">
                                        <a href="<?= $rp_product_url ?>" class="course-title">View Course <img src="/wp-content/uploads/2022/10/view-course-right-arrow.svg" alt="right arrow image"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                <?php
                    }
                    echo '</ul></section></div>';
                }
                ?>

                <div id="mobile-sticky-price">
                    <div>
                        <h2>£<?= $la_phleb_course_sell_price ?>+VAT</h2>
                        <p>
                            <del>£<?= $la_phleb_course_regular_price ?></del>
                            <span id="discount-span">
                                <img src="/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount">
                                <span>55% Off</span>
                            </span>
                        </p>
                    </div>
                    <a id="la-phone-phlebotomy-enquiry-booking-modal" href="#">BOOK NOW</a>
                </div>

                <!-- Trigger/Open The Modal -->
                <style>
                    .gift_course_button {
                        display: none !important;
                    }

                    .gform_wrapper.gravity-theme .gform_footer,
                    .gform_wrapper.gravity-theme .gform_page_footer {
                        padding: 0px !important;
                    }

                    /* The Modal (background) */
                    #mobileEnquiryBookingModal.modal {
                        display: none;
                        /* Hidden by default */
                        position: fixed;
                        /* Stay in place */
                        z-index: 999;
                        /* Sit on top */
                        padding: 15px;
                        left: 0;
                        top: 0;
                        width: 100%;
                        /* Full width */
                        max-width: 100%;
                        height: 100%;
                        /* Full height */
                        overflow: auto;
                        /* Enable scroll if needed */
                        background-color: rgb(0, 0, 0);
                        /* Fallback color */
                        background-color: rgba(0, 0, 0, 0.4);
                        /* Black w/ opacity */
                    }

                    #mobileEnquiryBookingModal #show-classroom-schedule {
                        display: block;
                        padding-bottom: 0;
                        margin-top: 0;
                    }

                    /* Modal Content */
                    #mobileEnquiryBookingModal .modal-content {
                        background-color: #f8f8f8;
                        margin: auto;
                        padding: 5px 20px 13px 20px;
                        border: 1px solid #888;
                        width: 350px;
                        max-width: 100%;
                    }

                    /* The Close Button */
                    .close {
                        color: #aaaaaa;
                        float: right;
                        font-size: 28px;
                        font-weight: bold;
                    }

                    .close:hover,
                    .close:focus {
                        color: #000;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    #enquiryModal textarea {
                        height: 100px;
                    }

                    div#gform_64_validation_container h2 {
                        font-size: 18px;
                        line-height: 26px;
                    }

                    div#mobileEnquiryBookingModal {
                        color: #000 !important;
                        width: 100%;
                    }

                    div#mobileEnquiryBookingModal .single-booking-option {
                        margin: 0 5px 15px;
                        padding: 0 20px;
                    }

                    div#mobileEnquiryBookingModal .close {
                        margin-right: -12px;
                    }

                    div#mobileEnquiryBookingModal .float-row {
                        justify-content: space-between;
                    }
                </style>
                <!-- The Booking Modal -->
                <div id="mobileEnquiryBookingModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="single-booking-option">
                            <div id="show-classroom-schedule" class="single-booking-row float-row" style="border-top: none;">
                                <div class="single-booking-left" style="margin-bottom: 18px;">
                                    <h4>London </h4>
                                    <p>Bank Studios, Park Royal Road, NW10 7LQ</p>

                                    <div>
                                        <i class="fa fa-calendar"></i> January 28, 2023
                                    </div>
                                    <div>
                                        <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                    </div>
                                    <div style="color: red">
                                        <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 15 seats left
                                    </div>
                                </div>
                                <div class="single-booking-right" style="width: 100%">
                                    <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                                        <img src="/wp-content/uploads/2022/12/discount.webp" alt="discount" title="discount" style="width: auto">
                                        <span>55% Off</span>
                                    </div>
                                    <div class="float-row" style="margin: 8px 0 10px; width: 100%;">
                                        <span class="float-left" style="font-size: 20px; font-weight: 700; width: auto">
                                            <b><?= $la_phleb_course_sell_price ?></b>
                                            <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></span>
                                        </span>
                                        <span class="float-right text-right" style="font-size: 18px; width: auto"><del>£<?= $la_phleb_course_regular_price ?>.00</del></span>
                                    </div>

                                    <div class="single-booking-right">
                                        <button type="button"
                                            data-variation-id="370462"
                                            data-quantity="1"
                                            class="btn custom-add-to-cart ">BOOK NOW</button>
                                    </div>
                                </div>
                            </div>
                            <div class="show-classroom-schedule-details float-row">
                                <div class="single-booking-left">
                                </div>
                                <div class="single-booking-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


        <script>
            // Get the booking modal
            let mobileBookingModal = document.getElementById("mobileEnquiryBookingModal");

            // Get the button that opens the modal
            let mobileRedBtn = document.getElementById("mobile-enquiry-booking-modal");

            // Get the <span> element that closes the modal
            let mobileCloseEl = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            // mobileRedBtn.onclick = function() {
            //     mobileBookingModal.style.display = "block";
            // }

            // When the user clicks on <span> (x), close the modal
            mobileCloseEl.onclick = function() {
                mobileBookingModal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            // window.onclick = function(event) {
            //     if (event.target == mobileBookingModal) {
            //         mobileBookingModal.style.display = "none";
            //     }
            // }


            // Get the modal
            var modal = document.getElementById("enquiryModal");

            // Get the button that opens the modal
            var enNowBtn = document.getElementById("enquire-now-btn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            enNowBtn.onclick = function(e) {
                e.preventDefault();
                modal.style.display = "block";
            }

            function hide() {
                let enBookModal = document.getElementById("enquiryBookingModal");
                let enModal = document.getElementById("enquiryModal");
                enModal.style.display = "none";
                enBookModal.style.display = "none";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

        <?php get_footer(); ?>