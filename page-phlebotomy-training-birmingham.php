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

    <div id="phlebotomy-page">
        <!-- Top 3 -->
        <div class="phlebotomy-top-3">
            <div class="phlebotomy-container">
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/face-to-face.webp" alt="Face-to-Face Training Session">
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
                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/instalment.webp" alt="4 Instalment Plan on Checkout">
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
                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/14-days.webp" alt="Learn From Industry Expert">
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
            <div class="phlebotomy-container" >
                <div id="phlebotomy-hero-content">
                    <h1>Phlebotomy Training Birmingham</h1>
                    <p>Our CPD accredited phlebotomy training helps people to get trained and work as phlebotomists in private & public healthcare organisations.</p>
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

            .st2, .st3, .st4 {
                fill: #fff;
            }

            .st2, .st4 {
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
            <text class="st4" transform="translate(213.54 16.19)"><tspan x="0" y="0">Customer Reviews</tspan></text>
            <g>
            <path class="st5" d="M190.49,8.85c2.11-4.22,7.66-5.6,11.4-2.58.08.07.33.26.38.33.01.02.03.03.01.05l-2.13,2.12c-.08.03-.04-.05-.08-.08-.06-.06-.25-.18-.33-.24-2.44-1.74-5.83-.46-6.75,2.32l-2.49-1.93Z"></path>
            <path class="st6" d="M193,13.68c.93,2.78,4.35,4.03,6.81,2.36l2.43,1.89c-.85.79-1.81,1.31-2.94,1.6-3.57.91-7.17-.67-8.81-3.94l2.51-1.91Z"></path>
            <path class="st10" d="M199.81,16.05c.75-.51,1.35-1.38,1.48-2.28h-4.06v-2.92h7.13c.42,2.49-.16,5.22-2.02,7.01-.03.03-.08.05-.11.07l-2.43-1.89Z"></path>
            <path class="st7" d="M192.98,10.78c-.11.34-.2.85-.21,1.2-.16.11-.16.37,0,.47.02.4.11.84.24,1.22l-2.51,1.91c-1.09-2.19-1.09-4.56,0-6.75l2.49,1.93Z"></path>
            <path class="st7" d="M192.77,12.46c-.16-.1-.16-.37,0-.47,0,.15,0,.32,0,.47Z"></path>
            </g>
        </g>
        <g>
            <text class="st2" transform="translate(111.5 15.84)"><tspan x="0" y="0">Rated</tspan></text>
            <text class="st2" transform="translate(147.56 16.05)"><tspan x="0" y="0">4.9/5</tspan></text>
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
                        <div class="shsc">
                            <h2>Are you looking for Phlebotomy Training in Birmingham? <a class="phl-btn-bhg" href="/phlebotomy-training">CLICK HERE</a></h2>
                        </div>
                        <div id="booking-options" class="phlebotomy-common">
                            <h3>Booking Options&nbsp;<img src="https://lead-academy.org/wp-content/uploads/2022/12/info.webp" alt="info" title="info"> </h3></h3>
                            <div class="single-booking-option">
                                <div class="single-booking-row float-row">
                                    <div class="single-booking-left">
                                        <h4><img src="https://lead-academy.org/wp-content/uploads/2022/12/classroom-session.webp" alt="Classroom session">Classroom Session</h4>
                                        <ul>
                                            <li>You will study the theoretical part online and practical session in a physical classroom.</li>
                                            <li>Gain real life experience and support from an expert tutor.</li>
                                            <li>Interact with other professionals and get certified.</li>
                                        </ul>
                                    </div>
                                    <div class="single-booking-right">
                                        <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount">
                                            <span>30% Off</span>    
                                        </div>
                                        <div class="float-row" style="margin: 13px 0 10px;">
                                            <span class="float-left" style="font-size: 20px; font-weight: 700;"><b>£125</b></span>
                                            <span class="float-right text-right" style="font-size: 18px;"><del>£250.00</del></span>
                                        </div>
                                        <a href="javascript:void(0);" class="single-booking-btn" id="see-dates-btn">SEE DATES</a>
                                    </div>
                                </div>
                                <div id="show-classroom-schedule-wrap">                                
									 <div id="show-classroom-schedule" class="single-booking-row float-row">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> June 24, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 15 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <a href="https://lead-academy.org/cart?add-to-cart=370466" class="single-booking-btn" id="date-book-now-btn">BOOK NOW</a>
                                        </div>
                                    </div>
                                    <div id="show-classroom-schedule" class="single-booking-row float-row">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> July 29, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 15 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <a href="https://lead-academy.org/cart?add-to-cart=372380" class="single-booking-btn" id="date-book-now-btn">BOOK NOW</a>
                                        </div>
                                    </div>
                                    <div id="show-classroom-schedule" class="single-booking-row float-row">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> August 26, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 15 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <a href="https://lead-academy.org/cart?add-to-cart=372381" class="single-booking-btn" id="date-book-now-btn">BOOK NOW</a>
                                        </div>
                                    </div>
                                    <div id="show-classroom-schedule" class="single-booking-row float-row">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> September 30, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 15 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <a href="https://lead-academy.org/cart?add-to-cart=372383" class="single-booking-btn" id="date-book-now-btn">BOOK NOW</a>
                                        </div>
                                    </div>
                                    <div id="show-classroom-schedule" class="single-booking-row float-row">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> October 28, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 15 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <a href="https://lead-academy.org/cart?add-to-cart=372382" class="single-booking-btn" id="date-book-now-btn">BOOK NOW</a>
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
                            <div class="single-booking-option" style="margin-bottom: 0">
                                <div class="single-booking-row float-row">
                                    <div class="single-booking-left">
                                        <h4><img src="https://lead-academy.org/wp-content/uploads/2022/12/in-house.webp" title="in-house" alt="Classroom session">In-House</h4>
                                        <ul>
                                            <li>Customised courses for corporate companies.</li>
                                            <li>Equip your workforce with the necessary skills for success.</li>
                                            <li>Learn the most in-demand skills.</li>
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
                                        .gform_wrapper.gravity-theme .gform_footer, .gform_wrapper.gravity-theme .gform_page_footer{
                                            padding: 0px !important;
                                        }
                                        /* The Modal (background) */
                                        .modal {
                                        display: none; /* Hidden by default */
                                        position: fixed; /* Stay in place */
                                        z-index: 999; /* Sit on top */
                                        padding-top: 100px; /* Location of the box */
                                        padding-bottom: 20px; /* Location of the box */
                                        left: 0;
                                        top: 0;
                                        width: 100%; /* Full width */
                                        max-width: 100%;
                                        height: 100%; /* Full height */
                                        overflow: auto; /* Enable scroll if needed */
                                        background-color: rgb(0,0,0); /* Fallback color */
                                        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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
                            <div id="screenshot" class="phlebotomy-common">
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
                                            <h3>£125.00</h3>
                                        </div>
                                        <div class="float-right text-right">
                                            <h5>£250.00</h5>
                                        </div>
                                    </div>
                                    <h5><img src="https://lead-academy.org/wp-content/uploads/2022/12/discount-white.webp" alt="discount white icon"> 30% OFF</h5>
                                    <a href="hhttps://lead-academy.org/cart?add-to-cart=370462" class="red-button">BOOK NOW</a>
                                </div>
                            </div>
                            <div id="course-fee-others">
                                <div class="float-row">
                                    <div class="float-left">
                                        <div>
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/face-to-face.webp" alt="Face to Face Training Session">
                                        </div>
                                        Face to Face Training Session
                                    </div>
                                    <div class="float-right">
                                        <div>
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/instalment.webp" alt="instalment">
                                        </div>
                                        3 Instalment Plan on checkout
                                    </div>
                                </div>
                                <div class="float-row">
                                    <div class="float-left">
                                        <div>
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/7-hours.webp" alt="7 hours">
                                        </div>
                                        7 Hours 30 Min
                                    </div>
                                    <div class="float-right">
                                        <div>
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/14-days.webp" alt="Learn From Industry Expert">
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
                                <?php echo the_content()?>
                            </div>
                        </div>
                        
                        <div id="accreditaion-wrap">
                        <div id="accreditaion" class="phlebotomy-common">
                                <h3>Recognised Accreditation</h3>
                                <p>This phlebotomy course is accredited by Continuing Professional Development (CPD). CPD is globally recognised by employers, professional organisations and academic intuitions, thus a certificate from CPD Certification Service creates value towards your professional goal and achievement. </p>
                                <div style="margin: 0 0 15px;"><img src="https://lead-academy.org/wp-content/uploads/2022/12/cpd.webp" alt="cpd logo"></div> 
                                <p>CPD-certified certificates are accepted by thousands of professional bodies and government regulators here in the UK and around the world. Many organisations look for employees with CPD requirements, which means, that by doing the phlebotomy course, you would be a potential candidate in your respective field.</p>
                            </div>
                        </div>
                        
                        <div id="course-curriculum-wrap">
                            <div id="course-curriculum" class="phlebotomy-common">
                                <h3>Course CurricuIum</h3>

                                <h6 class="course-curriculum-title">
                                    Module 1: Introduction
                                </h6>
                                <h6 class="course-curriculum-title">
                                    Module 2: Steps Before Withdrawing Blood (Venepuncture)
                                </h6>
                                <h6 class="course-curriculum-title">
                                    Module 3: Basic Anatomy Lessons
                                </h6>
                                <h6 class="course-curriculum-title">
                                    Module 4: Dos and Donts for Vein Selection
                                </h6>
                                <h6 class="course-curriculum-title">
                                    Module 5: Preparation for Venepuncture
                                </h6>
                                <h6 class="course-curriculum-title">
                                    Module 6: Managing Patient’s Expectations
                                </h6>
                                <h6 class="course-curriculum-title">
                                    Module 7: Complications Issues during Venipuncture
                                </h6>
                                <h6 class="course-curriculum-title">
                                    Module 8: Processing of Blood Samples
                                </h6>
                                <h6 class="course-curriculum-title">
                                    Module 9: Conclusion
                                </h6>
                            </div>
                        </div>

                        <div class="la-practical-video-wrap">
                            <h3>Practical Video Session</h3>
                            <iframe src="https://drive.google.com/file/d/1dHHvF6nchRlyShmgzh6QlT8WyLvNMl-w/preview" width="640" height="480" allow="autoplay"></iframe>
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
                                </style>
                            ';

                            $reviews = [
                                [
                                    'la_course_reviewer_name' => 'Charlie Dixon',
                                    'la_course_review'        => 'I always wanted to become a phlebotomist who draws out blood professionally. Regarding that I was required to do a Phlebotomy Training Course which I found at Lead Academy. I was amazed by the quality of course materials and the live training sessions. I learned a lot throughout this course about venepuncture process ,vial labelling,blood-taking techniques, safety protocols and so on. I had face to face training sessions with the professional phlebotomists which went fantastic .HIghly Recommended.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Ruby Patel',
                                    'la_course_review'        => 'A Phlebotomy Training Course can be shorter than any other medical courses. I wanted to get a job as a professional phlebotomist so I enrolled in Lead Academy’s one of Phlebotomy Courses and I’m glad I did. One thing about this course was the course materials were so advanced and comprehensive. Finally when it was about the practical training, the experts were so professional they trained me on manikins first and then I tried on many participants. That\'s when I realised I can ace this job. ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Alexander Foster',
                                    'la_course_review'        => 'I wanted a professional phlebotomy certificate which will be recognised by any hospitals. At that time Lead Academy was providing a Phlebotomy Online Course and I grabbed the opportunity. That course was all I needed to become a professional phlebotomist. They had these advanced theories and techniques and the live practical training sessions with experts gave me a thorough understanding .Lastly I passed their assessment with a great score and got my CPD accredited certificate.
                                    ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Poppy Knight',
                                    'la_course_review'        => 'I needed a Phlebotomy Training Course to qualify myself as a professional phlebotomist at my working place and Lead Academy\'s phlebotomy course provided me that qualification with a CPD UK accredited certificate, which boosted my confidence about drawing blood and helped me to develop in my career.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Joshua Wilson',
                                    'la_course_review'        => 'I was struggling with my phlebotomist job since I didn\'t have any prior training experience and getting a lot of complaints from patients. So I took one of Lead Academy’s Phlebotomy courses and got my professional training which was conducted by experts. They at first let me train on manikins and after getting practised they let me try on participants which helped me a lot to qualify. Highly recommended. ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Daisy Roberts',
                                    'la_course_review'        => 'It was hard for me to believe that Lead Academy’s blood taking course which qualifies you to become a professional phlebotomist was an amazing learning course. They let you learn at your own pace and you can learn the theoretical part online . Later you have to participate in a face to face training session which helps you to realise your capabilities.
                                    ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Leo Hughes',
                                    'la_course_review'        => 'I found phlebotomy courses on other platforms pretty costly. But Lead Academy offers you budget friendly phlebotomy courses and live chat support as well. If you ever get stuck with any problem you can immediately contact the live chat support and they will provide you Instant solutions.                                    
                                    ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Millie Turner',
                                    'la_course_review'        => 'I highly recommend this Phlebotomy course online at Lead Academy to everyone. If anyone wants to qualify them as a professional phlebotomist then you can apply into this. You get to learn high class materials and advanced techniques and face to face practical learning with experts. Later you can get a UPD UK accredited certificate after completing the assessment which is recognised anywhere in the UK. solutions.                                    
                                    ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'James Harrison',
                                    'la_course_review'        => 'The  CPD UK accredited Phlebotomy course at Lead Academy was alternatively good, and the materials were easy to understand and follow. They provide face to face practical training which helps you to qualify.                                    
                                    ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Esme Carter',
                                    'la_course_review'        => 'Ever imagined that you can learn about the phlebotomy profession online and on top of that you get to train face to face. Lead Academy was offering such an opportunity and I enrolled in their Phlebotomy training course previously. That course later on helped me to qualify as an expert phlebotomy at my work place.                                 
                                    ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Samuel Lloyd',
                                    'la_course_review'        => 'I wanted to improvise my blood taking skills and Lead Academy\'s Phlebotomy training course helped me to work on my weaknesses. The face to face practice sessions provided the opportunity to practise and helped me to enhance my blood taking skills. Highly recommended.
                                    ',
                                ],
                            ];
                            get_la_reviews_carousel_markup( $reviews );
                        ?>
                        
                        <div id="faq-wrap">
                            <div id="faq" class="phlebotomy-common">
                                <h3>Frequently Asked Question (FAQ)</h3>
                                <div class="accordion">
                                    <h6 class="accordion-title">What is phlebotomy training?</h6>
                                    <div class="accordion-content"><p>Phlebotomy training is practically based on theory and practical work involving  how to take blood from different patient groups. </p></div>

                                    <h6 class="accordion-title">How long is phlebotomy training?</h6>
                                    <div class="accordion-content"><p>Diploma in Phlebotomy training from anywhere takes 9 to 18 months depending on your schedule.You will gain theory and practical training sessions  through your diploma and advanced courses.</p></div>

                                    <h6 class="accordion-title">Is phlebotomy training specialists accredited?</h6>
                                    <div class="accordion-content"><p>Phlebotomy training specialists can be called accredited since employers would only ask for at least two  GCSEs or equivalent. In addition, they may ask for a BTEC or equivalent vocational qualification in healthcare.</p></div>

                                    <h6 class="accordion-title">A+ cna training and phlebotomy certification?</h6>
                                    <div class="accordion-content"><p>A+ CNA and phlebotomy certification are essential to becoming a certified nursing assistant, home health aide, and phlebotomy technician.</p></div>

                                    <h6 class="accordion-title">How much is phlebotomy training?</h6>
                                    <div class="accordion-content"><p>The phlebotomy training cost can start at £249, and you will also receive a free four hours work experience session. You can do a budget friendly course at our Lead Academy which will give you a certified qualification. </p></div>

                                    <h6 class="accordion-title">Where to get phlebotomy training?</h6>
                                    <div class="accordion-content"><p>You can find many institutions that provide phlebotomy training near you or you can do an online course on any platform. But we recommend you to enrol in Lead Academy’s Phlebotomy Training Course which provides a CPD UK accredited certificate.</p></div>

                                    <h6 class="accordion-title">How long is phlebotomy technician training?</h6>
                                    <div class="accordion-content"><p>There are so many short programs available but most of them take less than a year or maximum two years.</p></div>

                                    <h6 class="accordion-title">How to apply for phlebotomy training?</h6>
                                    <div class="accordion-content"><p>There is no entry requirement for phlebotomy training, you can simply enrol into any institution or you can enrol in online courses. Our Lead Academy is offering a phlebotomy  training course with a CPD UK accredited certificate.</p></div>

                                    <h6 class="accordion-title">How to do phlebotomy training?</h6>
                                    <div class="accordion-content"><p>You get to apply into one of the health care institutions or you can do online courses on digital platforms such as Lead Academy which offers a Phlebotomy training course with a CPD UK accredited certificate.</p></div>

                                    <h6 class="accordion-title">Is phlebotomy training hard?</h6>
                                    <div class="accordion-content"><p>Well for beginners the phlebotomy training can be hard with few training opportunities. You need to practise a lot for being a well-trained phlebotomist. Once you become an expert ,you’ll be in demand.</p></div>

                                    <h6 class="accordion-title">What do you learn in phlebotomy training?</h6>
                                    <div class="accordion-content"><p>Phlebotomy is a branch of medicine; students learn much about human anatomy. The veins and arteries of the circulatory system are studied at a great extent.</p></div>
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
                                            <h3>£125.00</h3>
                                        </div>
                                        <div class="float-right text-right">
                                            <h5>£250.00</h5>
                                        </div>
                                    </div>
                                    <h5><img src="https://lead-academy.org/wp-content/uploads/2022/12/discount-white.webp" alt="discount white"> 30% OFF</h5>
                                    <a href="#" id="enquiry-booking-modal" class="red-button">ENROL NOW</a>

                                    <!-- Trigger/Open The Modal -->
                                    <style>
                                        .gift_course_button {
                                            display: none !important;
                                        }
                                        .gform_wrapper.gravity-theme .gform_footer, .gform_wrapper.gravity-theme .gform_page_footer{
                                            padding: 0px !important;
                                        }
                                        /* The Modal (background) */
                                        .modal {
                                        display: none; /* Hidden by default */
                                        position: fixed; /* Stay in place */
                                        z-index: 999; /* Sit on top */
                                        padding-top: 100px; /* Location of the box */
                                        padding-bottom: 20px; /* Location of the box */
                                        left: 0;
                                        top: 0;
                                        width: 100%; /* Full width */
                                        max-width: 100%;
                                        height: 100%; /* Full height */
                                        overflow: auto; /* Enable scroll if needed */
                                        background-color: rgb(0,0,0); /* Fallback color */
                                        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                                        }

                                        /* Modal Content */
                                        #enquiryBookingModal .modal-content {
                                        background-color: #f8f8f8;
                                        margin: auto;
                                        padding: 5px 20px 13px 20px;								  
                                        border: 1px solid #888;
                                        width: 750px;
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
                                        div#enquiryBookingModal {
                                            color: #000 !important;
                                        }
                                        div#enquiryBookingModal .single-booking-option {
                                            margin: 35px 5px 10px;
                                        }
                                        div#enquiryBookingModal .close {
                                            margin-right: -12px;
                                        }
                                        div#enquiryBookingModal .float-row {
                                            justify-content: space-between;
                                        }
                                        </style>
                                        <!-- The Booking Modal -->
                                        <div id="enquiryBookingModal" class="modal">
                                            <div class="modal-content">
                                                <span class="close" onclick="hide()">&times;</span>
                                                <div class="single-booking-option">
                                                    <div id="show-classroom-schedule" class="single-booking-row float-row" style="border-top: none; padding: 0 0 20px">
                                                        <div class="single-booking-left" style="padding-left: 0">
                                                            <h4>London</h4>
                                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                                            <div>
                                                                <i class="fa fa-calendar"></i>  June 24, 2023
                                                            </div>
                                                            <div>
                                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                                            </div>
                                                            <div style="color: red">
                                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 15 seats left
                                                            </div>
                                                        </div>
                                                        <div class="single-booking-right" style="width: 240px">
                                                            <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                                                                <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount">
                                                                <span>30% Off</span>    
                                                            </div>
                                                            <div class="float-row" style="margin: 13px 0 10px;">
                                                                <span class="float-left" style="font-size: 20px; font-weight: 700;">
                                                                    <b>£125</b>
                                                                    <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></span>
                                                                </span>
                                                                <span class="float-right text-right" style="font-size: 18px;"><del>£250.00</del></span>
                                                            </div>
                                                            <a href="https://lead-academy.org/cart?add-to-cart=370466" class="single-booking-btn" id="date-book-now-btn">BOOK NOW</a>
                                                        </div>
                                                    </div>
                                                    <div id="show-classroom-schedule" class="single-booking-row float-row">
                                                        <div class="single-booking-left" style="padding-left: 0">
                                                            <h4>London</h4>
                                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                                            <div>
                                                                <i class="fa fa-calendar"></i> July 29, 2023
                                                            </div>
                                                            <div>
                                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                                            </div>
                                                            <div style="color: red">
                                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 15 seats left
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="single-booking-right" style="width: 240px">
                                                            <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                                                                <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount">
                                                                <span>30% Off</span>    
                                                            </div>
                                                            <div class="float-row" style="margin: 13px 0 10px;">
                                                                <span class="float-left" style="font-size: 20px; font-weight: 700;">
                                                                    <b>£130</b>
                                                                    <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></span>
                                                                <span class="float-right text-right" style="font-size: 18px;"><del>£250.00</del></span>
                                                            </div>
                                                            <a href="https://lead-academy.org/cart?add-to-cart=372380" class="single-booking-btn" id="date-book-now-btn">BOOK NOW</a>
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

                                        <script>

                                        // Get the booking modal
                                        let enqueryBookingModal = document.getElementById("enquiryBookingModal");

                                        // Get the button that opens the modal
                                        let enqueryRedBtn = document.getElementById("enquiry-booking-modal");

                                        // Get the <span> element that closes the modal
                                        let enqueryCloseEl = document.getElementsByClassName("close")[0];
                    
                                        // When the user clicks the button, open the modal 
                                        enqueryRedBtn.onclick = function() {
                                            enqueryBookingModal.style.display = "block";
                                        }

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
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/face-to-face.webp" alt="14 Days Money Back Guarantee">
                                        </div>
                                        14 Days Money Back Guarantee
                                    </div>
                                    <div class="float-right">
                                        <div>
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/instalment.webp" alt="High Pass Rate">
                                        </div>
                                        High Pass Rate
                                    </div>
                                </div>
                                <div class="float-row">
                                    <div class="float-left">
                                        <div>
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/7-hours.webp" alt="8 Hours Practical + 3 Hours Theoretical Study">
                                        </div>
                                        8 Hours Practical + 3 Hours Theoretical Study
                                    </div>
                                    <div class="float-right">
                                        <div>
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/14-days.webp" alt="Certificate Upon Completion">
                                        </div>
                                        Certificate Upon Completion
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="get-in-touch">
                            <h4>Get In Touch Today</h4>
                            <a href="#" onclick="LC_API.open_chat_window();return false">Live CHAT WITH US</a>
                            <a href="tel:020 3880 834">CALL ON - 020 3880 834</a>
                        </div>

                        <div id="phlebotomy-practical-session">
                            <h4>Practical Session (May 27, 2023)</h4>
                            <a href="/wp-content/uploads/2023/05/plebotomy-practical-session-27-may.webp" class="fancybox">
                                <img src="/wp-content/uploads/2023/05/plebotomy-practical-session-27-may.webp" width="357" height="268" alt="plebotomy-practical-session-27-may">
                            </a>
                        </div>
                    </aside>
                <!-- </div> -->
            </div>
        </div>
        
        <div id="mobile-sticky-price">
            <div>
                <h2>£125.00</h2>
                <p>
                    <del>£250.00</del>
                    <span id="discount-span">
                        <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount">
                        <span>30% Off</span>  
                    </span>
                </p>
            </div> 
            <a href="https://lead-academy.org/cart?add-to-cart=370466">BOOK NOW</a>
        </div>


        <!-- Trigger/Open The Modal -->
        <style>
            .gift_course_button {
                display: none !important;
            }
            .gform_wrapper.gravity-theme .gform_footer, .gform_wrapper.gravity-theme .gform_page_footer{
                padding: 0px !important;
            }
            /* The Modal (background) */
            #mobileEnquiryBookingModal.modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 999; /* Sit on top */
            padding: 15px;
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            max-width: 100%;
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
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
                                <p>25A Wincott Street, Kennington, SE11 4NT</p>

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
                                    <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount" style="width: auto">
                                    <span>30% Off</span>    
                                </div>
                                <div class="float-row" style="margin: 8px 0 10px; width: 100%;">
                                    <span class="float-left" style="font-size: 20px; font-weight: 700; width: auto">
                                        <b>£125</b>
                                        <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></span>
                                    </span>
                                    <span class="float-right text-right" style="font-size: 18px; width: auto"><del>£250.00</del></span>
                                </div>
                                
                                <div class="single-booking-right">
                                    <a href="https://lead-academy.org/cart?add-to-cart=370462" class="single-booking-btn" id="date-book-now-btn" style="float: left;height: auto;padding: 0;line-height: 44px;font-size: 14px;margin-bottom: 15px;">BOOK NOW</a>
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
        enNowBtn.onclick = function() {
            modal.style.display = "block";
        }

        function hide(){
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
