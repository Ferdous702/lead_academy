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

do_action( 'woocommerce_before_single_product' );

get_header(); 

?>
<style>
    #phuk-top-3-sec{
        background-color: #ffeaea;
    }
    #cntc-hero{
        margin-top:0px;
    }
    .single-booking-right{
        width: 150px !important;
    }
</style>

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
        z-index: 999999999999;
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
        color: #aaaaaa !important;
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
        z-index: 99999999999999999;
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
<div id="enquiryBookingModal" class="modal phlebotomy-course-top-content-modal">
    <div class="modal-content">
        <span class="close">×</span>
        <div class="single-booking-option">
            <?php
$current_product_id             = get_the_ID();
$la_phleb_course_regular_price  = get_post_meta( $current_product_id, 'la_phleb_course_regular_price', true);
$la_phleb_course_sell_price     = get_post_meta( $current_product_id, 'la_phleb_course_sell_price', true);
$la_phleb_course_meta_group     = get_post_meta( $current_product_id, 'la_phleb_course_meta_group', true);
$la_phleb_course_location_root  = get_post_meta( $current_page_id, 'la_phleb_course_location_root', true);
$la_phleb_course_address_root   = get_post_meta( $current_page_id, 'la_phleb_course_address_root', true);
$la_phleb_course_time_root      = get_post_meta( $current_page_id, 'la_phleb_course_time_root', true);
$discount_percentage = number_format((($la_phleb_course_regular_price-$la_phleb_course_sell_price)/$la_phleb_course_regular_price*100),0);
            foreach ( $la_phleb_course_meta_group as $single_item ) {
                if(!empty($single_item['la_phleb_course_location'])){
                    $la_phleb_course_location   = $single_item['la_phleb_course_location'];
                }else{
                    $la_phleb_course_location   = $la_phleb_course_location_root;
                }
                if(!empty($single_item['la_phleb_course_address'])){
                    $la_phleb_course_address   = $single_item['la_phleb_course_address'];
                }else{
                    $la_phleb_course_address   = $la_phleb_course_address_root;
                }
                if(!empty($single_item['la_phleb_course_time'])){
                    $la_phleb_course_time   = $single_item['la_phleb_course_time'];
                }else{
                    $la_phleb_course_time   = $la_phleb_course_time_root;
                }
                $la_phleb_course_date       = $single_item['la_phleb_course_date'];
                $la_phleb_course_seats_left = $single_item['la_phleb_course_seats_left'];
                $la_phleb_course_var_id     = $single_item['la_phleb_course_var_id'];
                $la_phleb_course_quota_full = $single_item['la_phleb_course_quota_full'];
                $quota_full_dynamic_class   = $la_phleb_course_quota_full ? ' full-booked-phlebotomy-item' : '';

                if ($la_phleb_course_quota_full){
                    continue;
                }

                ?>
                <div id="show-classroom-schedule" class="single-booking-row float-row">
                    <div class="single-booking-left" style="padding-left: 0">
                        <h4><?php echo $la_phleb_course_location?></h4>
                        <p><?php echo $la_phleb_course_address?></p>

                        <div>
                            <i class="fa fa-calendar"></i> <?php echo $la_phleb_course_date?>
                        </div>
                        <div>
                            <i class="fa fa-clock-o"></i> <?php echo $la_phleb_course_time?>
                        </div>
                        <div style="color: red">
                            <i class="fa fa-fire" aria-hidden="true"></i> <?php echo $la_phleb_course_seats_left?>
                        </div>
                    </div>

                    <div class="single-booking-right">
                        <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp"
                                alt="discount" title="discount" width="22">
                            <span><?=$discount_percentage?>% Off</span>
                        </div>
                        <div class="float-row" style="margin: 13px 0 10px;">
                            <span class="float-left" style="font-size: 20px; font-weight: 700;">
                                <b>£<?php echo $la_phleb_course_sell_price?></b>
                                <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl.
                                    VAT)</span></span>
                            <span class="float-right text-right"
                                style="font-size: 18px;"><del>£<?php echo $la_phleb_course_regular_price?></del></span>
                        </div>
                        <button type="button"
                                data-variation-id="<?= $la_phleb_course_var_id ?>"
                                data-quantity="1"
                                class="btn <?php echo $la_phleb_course_quota_full ? 'full-booked-phlebotomy-item': 'custom-add-to-cart' ?>" >
                            <?php echo esc_html($la_phleb_course_quota_full ? 'FULLY BOOKED' : 'BOOK NOW'); ?>
                        </button>

                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<!-- Top 3 -->
<section id="phuk-top-3-sec">
    <div class="container">
        <div class="phlebotomy-top-3">
            <div class="phlebotomy-container">
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="Face-to-Face Training Session">
                        </div>
                        <div class="float-right">     
                            <h6>Face-to-Face Training Session </h6>
                            <p>to provide you with the top notch learning experience</p>
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
                            <p>to ensure that money doesn’t become a barrier to learning</p>
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
                            <p>to outshine by learning the most effective strategies</p>
                        </div>
                    </div>        
                </div>
            </div>   
        </div>
    </div>
</section>
<!-- Top 3 End -->
<div class="msg-therapy">
    <!-- Hero section -->
    <section id="cntc-hero">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <div class="hero-left">
                        <h1>COMPLETE NAIL TECHNICIAN COURSE</h1>
                        <p>Completely new to nails? Then this one is for you!</p>
                        <p>Reserve your space NOW with a <span>£50</span> deposit or use our Interest free option. Available at Checkout with Humm.</p>
                        <p>
                            <b>Course Fees:</b> 
                            <del>£599</del>
                            <span class="course-price">£399</span>
                            <sub>(Tax included.)</sub>
                        </p>
                        <ul class="list-unstyled">
                            <li><b>Qualifications:</b> Diplomas</li>
                            <li><b>Prerequisites:</b> None</li>
                            <li><b>Duration:</b> Varies</li>
                            <li><b>Average Class Size:</b> 4-6</li>
                            <li><b>Short Description:</b> The perfect Nail Technician course, six courses rolled into one package.</li>
                            <li><b>Model Required:</b> You are required to bring your own model to work on.</li>
                        </ul>
                        <div class="buttons-wrap">
                            <a href="#" id="enquiry-booking-modal" class="btn-buy-now">See Dates</a>
                            <a href="#" id="enquiry-booking-modal" class="btn-add-to-cart">Enrol Now</a>
                        </div>
                    </div>      <!-- end hero-left -->

                    <div class="hero-right">
                        <div class="hero-big-img">
                            <img src="/wp-content/uploads/2023/07/woman-with-nail-art-promoting-design-luxury-earrings-ring.webp" alt="woman-with-nail-art-promoting-design-luxury-earrings-ring">
                        </div>
                        <div class="hero-small-imgs">
                            <img src="/wp-content/uploads/2023/07/black-nails-manicure-4.webp" alt="black-nails-manicure 2">
                            <img src="/wp-content/uploads/2023/07/black-nails-manicure-3.webp" alt="black-nails-manicure 2">
                            <img src="/wp-content/uploads/2023/07/black-nails-manicure-2.webp" alt="black-nails-manicure 2">
                            <img src="/wp-content/uploads/2023/07/black-nails-manicure-1.webp" alt="black-nails-manicure 2">
                        </div>
                    </div>      <!-- end hero-right -->
                </div>          <!-- end d-flex -->
            </div>          <!-- end row -->
        </div>
    </section>


    <!-- Service Details Section --> 
    <section id="cntc-service-details">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Become a Professional in Nail Art and Extensions</h2>
            </div>
            <div class="row">
                <div class="service-details-wrap d-flex justify-content-center">
                    <div class="left-service-item">
                        <div class="left-service-item-single">
                            <h3>Course Description</h3>
                            <p>This Nail Technician Course is ideal for those who wish to learn more about nail care services and technology, as well as for nail technicians who would like to advance their careers by strengthening and expanding their current competencies.</p>
                            <p>This course will help you acquire comprehensive knowledge about the challenges posed by the nail industry including the wealth of opportunities it holds. You will also gain knowledge about the role, duties, code of practice and skill requisites of nail technicians. This course will also equip you with the relevant expertise in nail anatomy and physiology, as well as the skills to set up your own practice. Additionally, you will learn about the maintenance of artificial nails, numerous nail art techniques, and manicure and pedicure procedures.</p>
                        </div>

                        <div class="left-service-item-single">
                            <h3>Course Highlights</h3>
                            <ul class="list-unstyled">
                                <li>Designed by expert beauty professionals</li>
                                <li>Accredited by the CPD Certification Service</li>
                                <li>Endorsed by Quality Licence Scheme</li>
                                <li>Recognised and Valuable Certification</li>
                                <li>Self-Paced Online Distance Learning</li>
                            </ul>
                        </div>
                    </div>

                    <div class="right-service-item">
                        <div class="right-service-item-single">
                            <img src="/wp-content/uploads/2023/07/beautiful-woman-s-nails-with-beautiful-creative-manicure.webp" alt="beautiful-woman-s-nails-with-beautiful-creative-manicure">
                        </div>
                        <div class="right-service-item-single">
                            <h3>Who is this Nail Technician Course – Complete Nail Technician Online Course for?</h3>
                            <ul class="list-unstyled">
                                <li>Makeup artist</li>
                                <li>Cosmetologist</li>
                                <li>Beautician</li>
                                <li>Beginner beauticians</li>
                                <li>Nail technician /artist</li>
                            </ul>
                        </div>
                    </div>
                </div>      <!-- end service-details-wrap -->
            </div>          <!-- end row -->
        </div>
    </section>


    <!-- Daywise Course Section --> 
    <section id="cntc-daywise-course">
        <h2 class="cntc-daywise-course-title text-center">Day 1</h2>
        <div class="container">
            <div class="row">   
                <div class="cntc-two-cards d-flex justify-content-center">
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/2023/07/manicures-day1-img.webp" alt="manicures-day1">
                        <div class="cntc-single-card-contents">
                            <h3>Manicure</h3>
                            <p class="time-range">(9am-3pm)</p>
                            <ul>
                                <li>Introduction to nail technology</li>
                                <li>Nail technology opportunities</li>
                                <li>Client consultations and insurance requirements</li>
                                <li>Legislations, Health & Safety and GDPR</li>
                                <li>Types of manicures, treatment times and pricing</li>
                                <li>Contra indications</li>
                                <li>Anatomy and physiology</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/2023/07/pedicure-day1-img.webp" alt="pedicure-day1">
                        <div class="cntc-single-card-contents">
                            <h3>Pedicure</h3>
                            <p class="time-range">(3:30pm-6:30pm)</p>
                            <ul>
                                <li>Benefits of pedicures</li>
                                <li>Equipment and set up</li>
                                <li>Foot specific contra indications</li>
                                <li>Demo of techniques (incl. filing and cuticle work)</li>
                                <li>TStudent-on-student practical (must attend with bare nails)</li>
                                <li>Q&A session</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="cntc-daywise-course-title text-center day-2">Day 2</h2>
        <div class="container">
            <div class="row">   
                <div class="cntc-two-cards d-flex justify-content-center">
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/2023/07/gel-extensions-day2.webp" alt="gel-extensions-day2">
                        <div class="cntc-single-card-contents">
                            <h3>Gel Extensions</h3>
                            <p class="time-range">(9am-3pm)</p>
                            <ul>
                                <li>Introduction and explanation on tips and overlays</li>
                                <li>Products and equipment</li>
                                <li>Gel explained (different types, lamps and benefits)</li>
                                <li>Tip application demo (incl. filing techniques and creating shapes)</li>
                                <li>Student-on-student practical (must attend with bare nails)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/2023/07/gel-polish-day2.webp" alt="gel-polish-day2">
                        <div class="cntc-single-card-contents">
                            <h3>Gel Polish</h3>
                            <p class="time-range">(3:30pm-6:30pm)</p>
                            <ul>
                                <li>Gel polish explained and brands</li>
                                <li>Benefits of gel polish</li>
                                <li>Troubleshooting</li>
                                <li>Demo of techniques (incl. colour and removals)</li>
                                <li>Student-on-student practical (must attend with bare nails)</li>
                                <li>Q&A session</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="cntc-daywise-course-title text-center day-3">Day 3</h2>
        <div class="container">
            <div class="row">   
                <div class="cntc-two-cards d-flex justify-content-center">
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/2023/07/acrylics-day3-img.webp" alt="acrylics-day3-img">
                        <div class="cntc-single-card-contents">
                            <h3>Acrylics</h3>
                            <p class="time-range">(9am-3pm)</p>
                            <ul>
                                <li>Tip application revision</li>
                                <li>Acrylic system explained</li>
                                <li>Benefits of acrylic extensions</li>
                                <li>Equipment, brands, timing and pricing</li>
                                <li>Tip application demo and practical (incl. infills and removals)</li>
                                <li>Troubleshooting</li>
                                <li>Q&A session</li>
                            </ul>
                        </div>
                    </div>
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/2023/07/Sculpting-with-Acrylic.webp" alt="Sculpting-with-Acrylic">
                        <div class="cntc-single-card-contents">
                            <h3>Sculpting with Acrylic</h3>
                            <p class="time-range">(3:30pm-6:30pm)</p>
                            <ul>
                                <li>Introduction to Sculpting with Acrylic</li>
                                <li>Anatomy & physiology</li>
                                <li>Health & Safety</li>
                                <li>Benefits of sculpting</li>
                                <li>Demo of techniques (incl. forms and acrylic)</li>
                                <li>Student-on-student practical (must attend with bare nails)</li>
                                <li>Q&A session</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="#" id="enquiry-booking-modal" class="cntc-two-cards-bottom-btn">Book Now</a>
            </div>
        </div>
    </section>

    <!-- ACCREDITATION Section --> 
    <section id="msg-trd-section">
        <div class="container">
            <div class="msg-train-b">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="msg-cs-train">
                        <h2>
                            WHY TRAIN WITH US
                        </h2>
                        <ul>
                            <li>Accepted by local authorities</li>
                            <li>Get Trained by Industry Experts</li>
                            <li>Tutor Support</li>
                            <li>PDF Certificate of Completions</li>
                        </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="cs-accreditation">
                            <h2> COURSE ACCREDITATION </h2>
                            <img src="/wp-content/uploads/2023/06/ac-1.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Review Section --> 
    <section id="msg-review">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Valuable Feedback From Student</h2>
                    <div class="msg-review-part">
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
                                </style>
                            ';

                            $reviews = [
                                [
                                    'la_course_reviewer_name' => 'Emily Johnson',
                                    'la_course_review_title' => 'I loved the course',
                                    'la_course_review_date' => 'Jan 20, 2023',
                                    'la_course_review'        => 'The course is simply amazing and very comprehensive. The tutor was also very helpful. ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Chloe Williams',
                                    'la_course_review_title' => 'Thank you, Lead Academy',
                                    'la_course_review_date' => 'Mar 08, 2023',
                                    'la_course_review'        => 'I would like to thank Lead Academy for helping me start my career as a nail tech with this fantastic course.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Amelia Wilson',
                                    'la_course_review_title' => 'Detailed and engaging',
                                    'la_course_review_date' => 'Jun 15, 2023',
                                    'la_course_review'        => 'Usually, the online courses are boring and very short, but this one nail tech course from Lead Academy is very detailed and engaging.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Olivia Smith',
                                    'la_course_review_title' => 'Professional course',
                                    'la_course_review_date' => 'Feb 21, 2023',
                                    'la_course_review'        => 'Professional course - You can seriously get a head start on your career with this professional course, as it provides both knowledge and certification.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Charlotte Brown',
                                    'la_course_review_title' => 'Amazing course',
                                    'la_course_review_date' => 'Apr 01, 2023',
                                    'la_course_review'        => 'I just have one word for this course, and that is Amazing. I took the nail tech course, and I enjoyed it a lot.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Grace Taylor',
                                    'la_course_review_title' => 'Everything about this course is perfect',
                                    'la_course_review_date' => 'Dec 14, 2022',
                                    'la_course_review'        => 'whether the course material, tutor, support, learning platform, or certificate.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Lily Jones',
                                    'la_course_review_title' => 'I am completely satisfied',
                                    'la_course_review_date' => 'Nov 22, 2023',
                                    'la_course_review'        => 'I am very satisfied with my learning experience with Lead Academy. It was wonderful all around.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Ava Davis',
                                    'la_course_review_title' => 'A perfect upskill course',
                                    'la_course_review_date' => 'Jun 28, 2023',
                                    'la_course_review'        => 'If you want to learn or polish your nail extension, manicure, pedicure, and other related skills, you can trust this course.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Sophia Clarke',
                                    'la_course_review_title' => 'I am very happy with this course',
                                    'la_course_review_date' => 'May 05, 2023',
                                    'la_course_review'        => 'Two things that I liked about this course are their style of teaching and the expert tutor support.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Isabella Roberts',
                                    'la_course_review_title' => 'Study material is very effective',
                                    'la_course_review_date' => 'May 25, 2023',
                                    'la_course_review'        => 'Unlike courses from other providers, I really enjoyed reading the study material for the nail artist course. It is engaging, comprehensive, and up-to-date.',
                                ],
                            ];
                            get_la_reviews_carousel_markup( $reviews );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section --> 
    <section id="msg-faq">
        <div id="la-single-faq" class="d-xl-block overflow-hidden">
                <h2 class="text-center"><b>FAQs</b></h2>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panelsStayOpen-heading21">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse21" aria-expanded="true" aria-controls="panelsStayOpen-collapse21">
                                Who is a nail technician? 									</button>
                            </h3>
                            <div id="panelsStayOpen-collapse21" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading21">
                                <div class="accordion-body">
                                    <p>
                                    A nail technician is a professional who specialises in the beautification and maintenance of nails. They provide services such as manicures, pedicures, nail extensions, and nail art. They are skilled in techniques such as filing, shaping, polishing, and applying various types of nail products.  
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panelsStayOpen-heading23">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse23" aria-expanded="false" aria-controls="panelsStayOpen-collapse23">
                                    What does a nail technician do? 									</button>
                            </h3>
                            <div id="panelsStayOpen-collapse23" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading23">
                                <div class="accordion-body">
                                    <p> A nail technician performs a variety of tasks related to nail care and beautification. They clean, shape, and trim nails, apply polish or artificial nails, and provide treatments such as cuticle care and hand massages. Additionally, they may offer advice on nail care and recommend products for at-home maintenance. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panelsStayOpen-heading25">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse25" aria-expanded="false" aria-controls="panelsStayOpen-collapse25">
                                    What does it take to become a nail technician? 								</button>
                            </h3>
                            <div id="panelsStayOpen-collapse25" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading25">
                                <div class="accordion-body">
                                    <p>To become a nail technician, you should get yourself registered with a certified nail tech course. Lead Academy is one of the best e-learning platforms for professional online courses. These certified courses often cover topics such as sanitation, safety procedures, nail anatomy, and various nail techniques. Additionally, having good manual dexterity, attention to detail, and excellent customer service skills are important qualities for a successful nail technician. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panelsStayOpen-heading27">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse27" aria-expanded="false" aria-controls="panelsStayOpen-collapse27">
                                    How much do nail technicians make in the UK? 							</button>
                            </h3>
                            <div id="panelsStayOpen-collapse27" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading27">
                                <div class="accordion-body">
                                    <p>The average salary for a nail technician in the UK can vary depending on factors such as experience, location, and clientele. On average, nail technicians in the UK can earn between £15,000 to £25,000 per year. However, experienced and highly skilled nail technicians who have built a loyal client base can earn significantly more.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panelsStayOpen-heading29">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse29" aria-expanded="false" aria-controls="panelsStayOpen-collapse29">
                                    Are nail artists in high demand? 									</button>
                            </h3>
                            <div id="panelsStayOpen-collapse29" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading29">
                                <div class="accordion-body">
                                    <p>Yes, nail artists are in high demand as more people seek professional nail services for special occasions, events, and everyday grooming. The growing popularity of nail art and the increasing emphasis on self-care have contributed to the high demand for skilled and creative nail artists.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panelsStayOpen-heading31">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse31" aria-expanded="false" aria-controls="panelsStayOpen-collapse31">
                                    What skills does a nail artist need?  									</button>
                            </h3>
                            <div id="panelsStayOpen-collapse31" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading31">
                                <div class="accordion-body">
                                    <p> A nail artist needs a strong understanding of nail anatomy, knowledge of various nail techniques and trends, proficiency in using different tools and equipment, and excellent attention to detail. Additionally, good communication skills and the ability to provide exceptional customer service are essential for building a loyal client base.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panelsStayOpen-heading33">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse33" aria-expanded="false" aria-controls="panelsStayOpen-collapse33">
                                    How much does nail art cost in the UK? 									</button>
                            </h3>
                            <div id="panelsStayOpen-collapse33" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading33">
                                <div class="accordion-body">
                                    <p>The cost of nail art in the UK can vary depending on several factors, such as the complexity of the design, the salon's location, and the reputation of the nail artist. On average, basic nail art can range from £10 to £30, while more intricate designs or specialty services may cost upwards of £50 or more.</p>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
    </section>
</div>

<?php get_footer(); ?>