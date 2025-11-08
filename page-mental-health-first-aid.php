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
                    <h1>Mental Health First Aid</h1>
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
        </svg>
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
                            <h3>Booking Options&nbsp;<img src="https://lead-academy.org/wp-content/uploads/2022/12/info.webp" title="info" alt="info icon"></h3>
                            <div class="single-booking-option">
                                <div class="single-booking-row float-row">
                                    <div class="single-booking-left">
                                        <h4><img src="https://lead-academy.org/wp-content/uploads/2022/12/classroom-session.webp" alt="Classroom session">This Course at a Glance:</h4>
                                        <ul>
                                            <li>Level: Level 2 RQF </li>
                                            <li>Duration: 6 hours</li>
                                            <li>Mode of Course: Zoom Live Session</li>
                                            <li>Accreditation: Awarded by the First Aid Awards (FAA)</li>
                                            <li>Regulation: Ofqual regulated and Compliant with the latest industry standards and regulations</li>
                                        </ul>
                                    </div>
                                    <div class="single-booking-right">
                                        <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                                            <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount">
                                            <span>45% Off</span>    
                                        </div>
                                        <div class="float-row" style="margin: 13px 0 10px;">
                                            <span class="float-left" style="font-size: 20px; font-weight: 700;"><b>£125</b></span>
                                            <span class="float-right text-right" style="font-size: 18px;"><del>£250.00</del></span>
                                        </div>
                                        <a href="javascript:void(0);" class="single-booking-btn" id="see-dates-btn">SEE DATES</a>
                                    </div>
                                </div>
                                <div id="show-classroom-schedule-wrap">                                
                                    <div id="show-classroom-schedule" class="single-booking-row d-none float-row">
                                        <div class="single-booking-left">
                                            <h4>London</h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> January 28, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 6 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <button type="button"
                                                    data-variation-id="370462"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
                                        </div>
                                    </div>
									  <div id="show-classroom-schedule" class="single-booking-row d-none float-row">
                                        <div class="single-booking-left">
                                            <h4>London</h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> February 26, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 6 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <button type="button"
                                                    data-variation-id="370462"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
                                        </div>
                                    </div>
									 <div id="show-classroom-schedule" class="single-booking-row d-none float-row">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> April 29, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 03 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <button type="button"
                                                    data-variation-id="370464"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
                                        </div>
                                    </div>
									 <div id="show-classroom-schedule" class="single-booking-row d-none float-row">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> May 27, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 15 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <button type="button"
                                                    data-variation-id="370465"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
                                        </div>
                                    </div>
									 <div id="show-classroom-schedule" class="single-booking-row float-row d-none">
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
                                            <button type="button"
                                                    data-variation-id="370466"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="show-classroom-schedule" class="single-booking-row float-row d-none">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> July 16, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 0 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <a href="#" class="single-booking-btn" id="date-book-now-btn" style="background: #333;border-color: #333;">FULL</a>
                                        </div>
                                    </div>
                                    <div id="show-classroom-schedule" class="single-booking-row float-row d-none">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> August 13, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 3 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <button type="button"
                                                    data-variation-id="378090"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="show-classroom-schedule" class="single-booking-row float-row d-none">
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
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 7 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <button type="button"
                                                    data-variation-id="372381"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
                                        </div>
                                    </div>
                                    <div id="show-classroom-schedule" class="single-booking-row float-row">
                                        <div class="single-booking-left">
                                            <h4>London </h4>
                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                            <div>
                                                <i class="fa fa-calendar"></i> September 17, 2023
                                            </div>
                                            <div>
                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                            </div>
                                            <div style="color: red">
                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 13 seats left
                                            </div>
                                        </div>
                                        <div class="single-booking-right">
                                            <button type="button"
                                                    data-variation-id="379464"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
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
                                            <button type="button"
                                                    data-variation-id="372383"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
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
                                            <button type="button"
                                                    data-variation-id="372382"
                                                    data-quantity="1"
                                                    class="btn custom-add-to-cart" >
                                                <?php echo __('BOOK NOW'); ?>
                                            </button>
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
                                    <h5><img src="https://lead-academy.org/wp-content/uploads/2022/12/discount-white.webp" alt="discount white icon"> 45% OFF</h5>
                                    <button type="button"
                                            data-variation-id="370462"
                                            data-quantity="1"
                                            class="btn custom-add-to-cart" >
                                        <?php echo __('BOOK NOW'); ?>
                                    </button>
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
                            <?php echo do_shortcode( '[video src="https://www.youtube.com/watch?v=WF4RpkI2iPA" poster="https://lead-academy.org/wp-content/uploads/2019/11/hq720.webp"]' ); ?>
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
                                </style>
                            ';

                            $reviews = [
                                [
                                    'la_course_reviewer_name' => 'Emily Johnson',
                                    'la_course_review_title' => 'Amazing course ',
                                    'la_course_review_date' => 'Apr 17, 2023',
                                    'la_course_review'        => 'My employees took this course, and they enjoyed it a lot. ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Oliver Williams',
                                    'la_course_review_title' => 'Very informative ',
                                    'la_course_review_date' => 'Jan 28, 2023',
                                    'la_course_review'        => 'The course was very informative and engaging. The instructor was knowledgeable and made the learning experience enjoyable.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Ava Brown',
                                    'la_course_review_title' => 'Practical sessions',
                                    'la_course_review_date' => 'Jun 5, 2023',
                                    'la_course_review'        => 'I highly recommend this course for anyone looking to enhance their skills in this field.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Noah Taylor',
                                    'la_course_review_title' => 'Flexible learning ',
                                    'la_course_review_date' => 'Aug 9, 2023',
                                    'la_course_review'        => 'Flexible learning options were available, allowing us to fit the course into our busy schedules.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Isabella Davis',
                                    'la_course_review_title' => 'Highly recommended ',
                                    'la_course_review_date' => 'Apr 20, 2023',
                                    'la_course_review'        => 'I highly recommend this course to anyone interested in learning First Aid.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Jack Wilson ',
                                    'la_course_review_title' => 'Great practical classes ',
                                    'la_course_review_date' => 'Feb 21, 2023',
                                    'la_course_review'        => 'The learning sessions provided a seamless learning experience, allowing us to learn first aid in the best possible manner. ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Mia Patel',
                                    'la_course_review_title' => 'Extremely supportive trainer ',
                                    'la_course_review_date' => 'Jul 15, 2023',
                                    'la_course_review'        => 'The trainer was extremely supportive throughout the course, providing guidance and assistance whenever needed.',
                                ],
                                [
                                    'la_course_reviewer_name' => 'William Clark',
                                    'la_course_review_title' => 'Loved the course',
                                    'la_course_review_date' => 'May 2, 2023',
                                    'la_course_review'        => 'This course was a great way to build confidence in First Aid.   ',
                                ],
                                [
                                    'la_course_reviewer_name' => 'Sophia Wright',
                                    'la_course_review_title' => 'Thank you, Lead Academy  ',
                                    'la_course_review_date' => 'Jan 9, 2023',
                                    'la_course_review'        => 'I was a bit scared earlier, but this practical session has boosted my confidence. Thank you, Lead Academy. ',
                                ],
                            ];
                            get_la_reviews_carousel_markup( $reviews );
                        ?>
                        
                        <div id="faq-wrap">
                            <div id="faq" class="phlebotomy-common">
                                <h3>Frequently Asked Question (FAQ)</h3>
                                <div class="accordion">
                                    <h6 class="accordion-title">How long is this course?</h6>
                                    <div class="accordion-content"><p>The course is 6 hours long and will last for one day only. </p></div>

                                    <h6 class="accordion-title">Is the course entirely online?</h6>
                                    <div class="accordion-content"><p>No, the course is 6 hours long and can be taken through zoom. </p></div>

                                    <h6 class="accordion-title">What is Mental Health First Aid?</h6>
                                    <div class="accordion-content"><p>A course called Mental Health First Aid teaches participants how to assist someone who is having a mental health crisis or developing a mental health problem.</p></div>

                                    <h6 class="accordion-title">What is RQF? </h6>
                                    <div class="accordion-content"><p>RQF stands for the Regulated Qualifications Framework, which is a framework in the United Kingdom that helps to ensure the quality and consistency of qualifications. It provides a way to compare different qualifications and understand their level of difficulty and complexity. </p></div>

                                    <h6 class="accordion-title">When can I get my certificate?</h6>
                                    <div class="accordion-content"><p>You will receive your certificate upon successful completion of the course. The certificate will be issued within one week after completing all the required coursework and assessments. </p></div>

                                    <h6 class="accordion-title">How many students are typically in each zoom class? </h6>
                                    <div class="accordion-content"><p>The class size varies, but typically there are around 15–20 students in each class. This allows for a good balance of individual attention and group interaction during the training sessions.  </p></div>

                                    <h6 class="accordion-title">Can we book in-house training? </h6>
                                    <div class="accordion-content"><p>Yes, in-house training can be booked for organizations or companies that prefer to have the training conducted at their own premises. This option allows for customization and convenience, as the training can be tailored to meet the specific needs and schedules of the organization.    </p></div>

                                    <h6 class="accordion-title">Are there any prerequisites for enrolling in the course? </h6>
                                    <div class="accordion-content"><p>No, there are no prerequisites for enrolling in the course. The training is designed to accommodate individuals of all skill levels and backgrounds, making it accessible to anyone interested in expanding their knowledge and skills.</p></div>
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
                                    <h5><img src="https://lead-academy.org/wp-content/uploads/2022/12/discount-white.webp" alt="discount white"> 45% OFF</h5>
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
                                                    <div id="show-classroom-schedule" class="single-booking-row float-row ">
                                                        <div class="single-booking-left" style="padding-left: 0">
                                                            <h4>London</h4>
                                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                                            <div>
                                                                <i class="fa fa-calendar"></i> September 17, 2023
                                                            </div>
                                                            <div>
                                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                                            </div>
                                                            <div style="color: red">
                                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 13 seats left
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="single-booking-right" style="width: 240px">
                                                            <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                                                                <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount">
                                                                <span>45% Off</span>    
                                                            </div>
                                                            <div class="float-row" style="margin: 13px 0 10px;">
                                                                <span class="float-left" style="font-size: 20px; font-weight: 700;">
                                                                    <b>£125</b>
                                                                    <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></span>
                                                                <span class="float-right text-right" style="font-size: 18px;"><del>£250.00</del></span>
                                                            </div>
                                                            <button type="button"
                                                                    data-variation-id="379464"
                                                                    data-quantity="1"
                                                                    class="btn custom-add-to-cart" >
                                                                <?php echo __('BOOK NOW'); ?>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div id="show-classroom-schedule" class="single-booking-row float-row ">
                                                        <div class="single-booking-left" style="padding-left: 0">
                                                            <h4>London</h4>
                                                            <p>25A Wincott Street, Kennington, SE11 4NT</p>

                                                            <div>
                                                                <i class="fa fa-calendar"></i> September 30, 2023
                                                            </div>
                                                            <div>
                                                                <i class="fa fa-clock-o"></i> 10:00 AM - 05:30 PM
                                                            </div>
                                                            <div style="color: red">
                                                                <i class="fa fa-fire" aria-hidden="true"></i> Hurry ! Only 13 seats left
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="single-booking-right" style="width: 240px">
                                                            <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                                                                <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp" title="discount" alt="discount">
                                                                <span>45% Off</span>    
                                                            </div>
                                                            <div class="float-row" style="margin: 13px 0 10px;">
                                                                <span class="float-left" style="font-size: 20px; font-weight: 700;">
                                                                    <b>£125</b>
                                                                    <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></span>
                                                                <span class="float-right text-right" style="font-size: 18px;"><del>£250.00</del></span>
                                                            </div>
                                                            <button type="button"
                                                                    data-variation-id="372383"
                                                                    data-quantity="1"
                                                                    class="btn custom-add-to-cart" >
                                                                <?php echo __('BOOK NOW'); ?>
                                                            </button>
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
                        <span>45% Off</span>  
                    </span>
                </p>
            </div>
            <button type="button"
                    data-variation-id="379464"
                    data-quantity="1"
                    class="btn custom-add-to-cart" >
                <?php echo __('BOOK NOW'); ?>
            </button>
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
                                    <span>45% Off</span>    
                                </div>
                                <div class="float-row" style="margin: 8px 0 10px; width: 100%;">
                                    <span class="float-left" style="font-size: 20px; font-weight: 700; width: auto">
                                        <b>139</b>
                                        <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></span>
                                    </span>
                                    <span class="float-right text-right" style="font-size: 18px; width: auto"><del>£250.00</del></span>
                                </div>
                                
                                <div class="single-booking-right">
                                    <button type="button"
                                            data-variation-id="370462"
                                            data-quantity="1"
                                            class="btn custom-add-to-cart" >
                                        <?php echo __('BOOK NOW'); ?>
                                    </button>
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
