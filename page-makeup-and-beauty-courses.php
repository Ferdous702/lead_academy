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
    .fsc-card-contents a.fsc-view-course-btn {
    position: absolute !important;
    bottom: 10px;
    left: 0;
    right: 0;
    text-align: center;
    top: auto !important;
    margin: 0px 20px 10px 20px;
}


.fsc-card-contents ul {
    height: auto !important;
}

.fsc-custom-card {
    height: 95%;
}

.fsc-card-contents h3 {
    height: auto;
    font-size: 20px;
}

p.fsc-package-includes {
    height: 35px;
    color: #7b0226 !important;
}

.see-more-btn {
    background: #AF1F47;
    color: #fff;
    border-radius: 5px;
    margin: 20px auto;
    font-size: 18px;
    font-weight: 600;
    padding: 10px 40px;
    border: 2px solid #AF1F47;
    display: block;
    width: -moz-fit-content;
    width: fit-content;
    cursor: pointer;
    transition: all 0.3s ease;
}
.see-more-btn:hover {
    background: #fff;
    color: #AF1F47;
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .fsc-card-contents a.fsc-view-course-btn {
    margin: 0px 35px 10px 35px;
}
}

@media only screen and (max-width: 767px) {
    .fsc-custom-card {
    height: 95%;
    min-height: auto !important;
}

.fsc-card-contents a.fsc-view-course-btn {
    margin: 0px 20px 10px 20px;
}
}
</style>
    <div class="msg-therapy">
        <!-- Hero Section by Moin Start -->
        <section id="page-hero-section">
        <div class="bg-overlay">
            <img src="/wp-content/uploads/2022/09/Makeup-Masterclass-Basic-to-Advanced.webp" alt="Makeup And Beauty Courses" width="708" height="401">
        </div>
            <div class="container">
                <div class="msg-therapy-row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                        <h1>Makeup and Beauty Courses</h1>
                        <hr>
                        <div class="brdr-left">
                            <p>Unlock Your Career in Beauty: Enrol in the Top Makeup and Beauty Training Courses Today! Enrol in our top courses and master professional makeup techniques, skincare essentials, and beauty therapy skills with expert-led tutorials. Whether you're aiming for an IPHM and CPD certified makeup artist career or simply want to enhance your personal style, our beauty courses are designed to boost your confidence and creativity. 
Start your career in the beauty and makeup industry now!
</p>
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
                            <svg style="
    margin-bottom: 20px;
" class="google-review-svg" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1" viewBox="0 0 317 25">
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
                        </div>
                        <a class="msg-btn" href="#msg-course-section">View Course</a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
    
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section by Moin End -->
<?php
/*
        <!-- Hero Section -->
        <section id="msg-hero-section">
            <div class="container">
                <div class="msg-therapy-row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                        <h1>Makeup And Beauty Courses and Training</h1>
                        <hr/>
                        <div class="brdr-left">
                            <p>Unwind the potential of a fulfilling career with our massage therapy online courses. Learn the art of healing touch and embrace a path of relaxation, rejuvenation, and professional growth.  </p>
                            <img class="trustpilot" src="/wp-content/uploads/2023/07/Trust-Pilot-Micro-Combo-3-1-1.svg" width="270" height="26" alt="Trustpilot">
                        </div>
                        <a class="msg-btn" href="#msg-course-section">View Course</a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
    
                    </div>
                </div>
            </div>
        </section>
*/
?>
        <!-- Top Header part -->
         <section id="msg-top-section">
            <div class="container">
                <div class="single-msg-therapy-top-3">
                    <div class="row">
                        <div class="msg-float-left">         
                            <img src="/wp-content/uploads/2022/12/face-to-face.webp" width="35" height="28" alt="Face-to-Face Training Session">
                        </div>
                        <div class="msg-float-right">     
                            <p class="msg-top-info-title">Self-Paced Online Learning</p>
                            <p>Learn on your own accord, wherever you want, whenever you want.</p>
                        </div>
                    </div>        
                </div>
                <div class="single-msg-therapy-top-3">
                    <div class="row">
                        <div class="msg-float-left">         
                            <img src="/wp-content/uploads/2022/12/instalment.webp" width="35" height="28" alt="4 Instalment Plan on Checkout">
                        </div>
                        <div class="msg-float-right">         
                            <p class="msg-top-info-title">4 Instalment Plan on Checkout</p>
                            <p>You have the option to choose from four easy instalment plans.</p>
                        </div>
                    </div>        
                </div>
                <div class="single-msg-therapy-top-3">
                    <div class="row">
                        <div class="msg-float-left">         
                            <img src="/wp-content/uploads/2022/12/14-days.webp" width="35" height="28" alt="Learn From Industry Expert">
                        </div>
                        <div class="msg-float-right">         
                            <p class="msg-top-info-title">Learn From Industry Expert</p>
                            <p>Since you have to learn, why settle for less? Learn from the best.</p>
                        </div>
                    </div>        
                </div>
            </div>
        </section> 
        <!-- Solution Section -->
        <section id="msg-solution">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h2>Find the Best Solution for Makeup and Beauty Courses</h2>
                        <p>Want to master real skills that work for makeup artists? Our CPD and IPHM accredited beauty training courses cover everything from everyday makeup to pro techniques. Whether you choose a full makeup artist course or a short online beauty course, you’ll get clear, beginner-friendly lessons. No experience needed, start your career in the beauty and skincare industry today!</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <h3>Why Study Makeup And Beauty Courses?</h3>
                        <ul>
                            <li><strong>CPD and IPHM Accredited –</strong> The certificate that you will receive will be nationally accredited and recognised by employers and clients across the UK and beyond.</li>
                            <li><strong>Fully Online & Self-Paced –</strong> With our flexible learning platform, you will be able to study anytime, anywhere around your schedule.</li>
                            <li><strong>Payment in Instalments -</strong> Purchase the course in full and pay in 4 interest-free instalments using a secure payment portal.</li>
                            <li><strong>No Prior Experience Needed –</strong> Whether you’re a beginner willing to learn makeup or looking to polish your skills, our expert guidance makes learning easy.</li>
                            <li><strong>Complete Career Support –</strong> From bridal makeup to editorial looks, the course covers real-world techniques to help you build a strong career in makeup and beauty.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 msg-v-aling">
                        <iframe class="msg-video" width="560" height="315" src="https://www.youtube.com/embed/v4HGCY3HmJU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section> 
        <script>
            jQuery(document).ready(function () {
                let course = jQuery('#online-courses');
                let exam = jQuery('#f2f-courses');
                let courseArea = jQuery('.online-courses');
                let examArea = jQuery('.f2f-courses');

                course.click(function () {
                    course.addClass('active');
                    exam.removeClass('active');
                    courseArea.show();
                    examArea.hide();
                });

                exam.click(function () {
                    exam.addClass('active');
                    course.removeClass('active');
                    examArea.show();
                    courseArea.hide();
                });
            });
        </script>
        <style>

            /* Mobile devices (max-width: 767px) */
             @media screen and (max-width: 767px) {
                .msg-switch-course-buttons button {
                margin: 6px 12px !important;
                width: 90% !important;
                font-size: 20px !important;
                padding: 15px 15px !important;
                }

                .pt-course-card {
                padding: 15px !important;
                margin: 15px 0px !important;
                }

                .pt-course-card img {
                    width: 100% !important;
                    border-radius: 8px !important;
                    margin-bottom: 10px !important;
                }

                .pt-course-card h4 {
                    font-size: 1.25rem !important;
                    color: #333 !important;
                    margin-bottom: 8px !important;
                }

                .pt-course-card li {
                    font-size: 0.9rem !important;
                    color: #555 !important;
                    margin-bottom: 12px !important;
                }

                .pt-course-card .round-button {
                    color: white !important;
                    padding: 8px 18px !important;
                    border-radius: 5px !important;
                    text-align: center !important;
                    font-weight: bold !important;
                    text-decoration: none !important;
                    transition: background-color 0.3s ease !important;
                }

                .pt-course-card .round-button:hover {
                    background-color: #0056b3 !important;
                }

                h3#course-link {
                    padding: 0 !important;
                    margin: 25px 0px 15px 0 !important;
                    line-height: 30px;
                }

                .pt-course-card .card-content {
                    order: 2;
                }

                .card.pt-course-card h3 a {
                    font-size: 22px !important;
                }

                h5.msg-f2f-course-card-location {
                    padding: 15px !important;
                    font-size: 20px !important;
                    margin-top: -63px !important;
                    top: 0px !important;
                }

                .cart-content-righr-part {
                    height: 220px !important;
                }
            }

            #msg-course-section h2 {
                text-align: center;
                color: #000000;
                padding: 80px 0px 15px 0px;
            }

            .msg-switch-course-buttons {
                text-align: center;
                margin: 0px 0px 55px 0px;
            }

            .msg-switch-course-buttons button {
                background: #fff;
                color: #AF1F47;
                border-radius: 5px;
                margin: 0px 12px;
                font-size: 21px;
                font-weight: 600;
                padding: 15px 50px;
                border: 2px solid #AF1F47;
                width: 350px;
            }

            .msg-switch-course-buttons button.active {
                background: #AF1F47;
                color: #fff;
                box-shadow: 0 4px 8px rgb(0 0 0 / 20%) !important;
                border: 2px solid #fff;
            }

            #msg-course-section .fsc-custom-card {
                /* box-shadow: 0px 0px 10px 0px rgb(0 0 0 / 20%); */
                position: relative;
                max-width: 100%;
                /* min-height: 640px; */
                border-radius: 10px;
                border: 1px solid #dfdfdf;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
            }

            .msg-switch-course-buttons {
                text-align: center;
                margin: 0px 0px 55px 0px;
            }

            .card-content svg {
                fill: #c52855 !important;
            }

            .card.pt-course-card h3 a {
                color: #000;
                font-size: 30px;
                font-weight: 600;
                font-family: "Sen", Sans-serif;
                margin-bottom: 10px;
                text-align: left !important;
                padding: 20px 0px !important;
            }

            .card.pt-course-card h3{
                color: #000;
                font-size: 36px;
                font-weight: 600;
                font-family: "Sen", Sans-serif;
                margin-bottom: 10px;
                text-align: left !important;
                padding: 0px 0px 20px 0px !important;
            }

            .card li::before {
                position: absolute;
                left: -1.5em;
                content: "\f058";
                font-family: 'FontAwesome';
                color: #AF1F47;
                margin-right: 10px;
                font-size: 18px;
            }

            .pt-course-card {
                background-color: #fff !important;
                border: 1px solid #ddd !important;
                border-radius: 10px !important;
                padding: 40px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
                transition: transform 0.3s ease, box-shadow 0.3s ease !important;
                margin: 15px;
                display: flex !important;
                flex-direction: column !important;
                justify-content: space-between !important;
                }

                .pt-course-card:hover {
                    transform: translateY(-5px) !important; 
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1) !important; 
                }

                .pt-course-card img {
                    width: 100% !important; 
                    border-radius: 10px !important; 
                    height: 100%;
                }

                .pt-course-card h4 {
                    font-size: 1.5rem !important; 
                    color: #333 !important; 
                    margin-bottom: 15px !important; 
                }

                .pt-course-card li {
                    font-size: 1rem !important;
                    color: #555 !important;
                    margin-bottom: 15px !important;
                    position: relative;
                    list-style: none;
                }

                .card.pt-course-card ul {
                    list-style-type: none;
                    padding: 0;
                }

                .pt-course-card .round-button {
                    color: white !important;
                    padding: 10px 20px !important;
                    border-radius: 5px !important;
                    text-align: center !important;
                    font-weight: bold !important;
                    text-decoration: none !important;
                    transition: background-color 0.3s ease !important;
                    cursor: pointer;
                    background-image: linear-gradient(103deg, #D64A71 0%, #C52C52 100%);
                    display: inline-block;
                    margin-top: 15px;
                }

                h5.msg-f2f-course-card-location {
                    padding: 20px;
                    font-size: 30px;
                    background: #b91948;
                    color: #fff !important;
                    width: 100%;
                    border-radius: 0px 0px 10px 10px;
                    margin: auto;
                    text-align: center;
                    z-index: 1;
                    position: relative;
                    margin-top: -90px;
                    top: 15px;
                }

                #course-link.course-long-title {
                margin-right: 100px;
                
                }

                .cart-content-righr-part {
                    border: 1px solid #b91948;
                    border-radius: 10px;
                    box-shadow: 0px 6px 0px #dddddd;
                    height: 350px;
                }

                .card-content.col-md-6 {
                    align-self: center;
                }

                .fsc-custom-card {
                    background-color: #fff;
                }

                .fsc-card-contents {
                    background-color: #fff;
                }

                section#msg-course-section {
                    background-color: #F0F0F0;
                    padding-bottom: 70px;
                }

            @media screen and (max-width: 1024px) and (min-width: 768px) {
                .pt-course-card {
                    background-color: #fff !important;
                    border: 1px solid #ddd !important;
                    border-radius: 8px !important;
                    padding: 18px !important;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
                    margin: 12px !important;
                    display: flex !important;
                    flex-direction: column !important;
                    justify-content: space-between !important;
                }

                .pt-course-card img {
                    width: 100% !important;
                    border-radius: 8px !important;
                    margin-bottom: 12px !important;
                }

                .pt-course-card h4 {
                    font-size: 1.375rem !important;
                    color: #333 !important;
                    margin-bottom: 10px !important;
                }

                .pt-course-card li {
                    font-size: 1rem !important;
                    color: #555 !important;
                    margin-bottom: 14px !important;
                }

                .pt-course-card .card .round-button {
                    color: white !important;
                    padding: 9px 20px !important;
                    border-radius: 5px !important;
                    text-align: center !important;
                    font-weight: bold !important;
                    text-decoration: none !important;
                    transition: background-color 0.3s ease !important;
                }

                .msg-switch-course-buttons button {
                    font-size: 21px;
                    padding: 15px 15px;
                    width: 260px;
                }

                .cart-content-righr-part {
                    height: 100%;
                }

                .card.pt-course-card h3 a {
                    font-size: 24px;
                }

                .card.pt-course-card h3 {
                    line-height: 32px;
                }

                h5.msg-f2f-course-card-location {
                    margin-top: -90px;
                    top: 17px;
                }

                h5.msg-f2f-course-card-location {
                    color: #fff !important;
                    font-size: 24px !important;
                }
            }
        </style>
        <!-- Courses Section --> 
        <section id="msg-course-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>BROWSE OUR MAKEUP AND BEAUTY COURSES</h2>
                        <div class="msg-switch-course-buttons">
                            <button id="online-courses">Online Course</button>
                            <button id="f2f-courses" class="active">Face to Face Training</button>
                        </div>
                    </div>
                </div>
            <div class="row">
            <?php
                $fsc_courses_card_items = [
                    // Course 1: Beauty Therapist : 7 Courses Bundle
                    [
                        'img_url' => '/wp-content/uploads/2022/10/Beauty-Therapist-7-Courses-Complete-Bundle.webp',
                        'course_url' => '/course/beauty-therapist-7-courses-complete-bundle',
                        'course_title' => 'Beauty Therapist : 7 Courses Bundle',
                        'first_line' => 'From £18.25 / month',
                        'second_line' => 'or from £73 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 2: Become a Professional Makeup Artist Online Training Course
                    [
                        'img_url' => '/wp-content/uploads/2022/09/Become-A-Professional-Makeup-Artist-Online-Training-Course.webp',
                        'course_url' => '/course/become-a-professional-makeup-artist-online-training-course',
                        'course_title' => 'Become a Professional Makeup Artist Online Training Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 3: Brow Lamination and Lash Lift + Brow Tint and Lash Tint Online Training Course
                    [
                        'img_url' => '/wp-content/uploads/2022/09/Brow-Lamination-and-Lash-Lift-Brow-Tint-and-Lash-Tint-Online-Training-Course.webp',
                        'course_url' => '/course/brow-lamination-and-lash-lift-brow-tint-and-lash-tint-online-training-course',
                        'course_title' => 'Brow Lamination and Lash Lift + Brow Tint and Lash Tint Online Training Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 4: Classic Eyelash Extension Course – Lash Training Online
                    [
                        'img_url' => '/wp-content/uploads/2023/06/Classic-Eyelash-Extension-Course-Lash-Training-Online.webp',
                        'course_url' => '/course/classic-eyelash-extension-course',
                        'course_title' => 'Classic Eyelash Extension Course – Lash Training Online',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 5: Eyelash and Eyebrow Tinting Training Course Online
                    [
                        'img_url' => '/wp-content/uploads/2021/02/Eyelash-and-Eyebrow-Tinting-Training-Course-Online.webp',
                        'course_url' => '/course/eyelash-and-eyebrow-tinting',
                        'course_title' => 'Eyelash and Eyebrow Tinting Training Course Online',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 6: Gel Nail Extension Course Online
                    [
                        'img_url' => '/wp-content/uploads/2023/04/Gel-Nails-Extension-Course-Online.webp',
                        'course_url' => '/course/gel-nails-extension-course-online',
                        'course_title' => 'Gel Nail Extension Course Online',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 7: Gel Polish Course – Online Training Masterclass
                    [
                        'img_url' => '/wp-content/uploads/2023/06/Gel-Polish-Course-Online-Training-Masterclass.webp',
                        'course_url' => '/course/gel-polish-course-online-training-masterclass',
                        'course_title' => 'Gel Polish Course – Online Training Masterclass',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 8: Lash Lift and Tint Course – Online Master Training
                    [
                        'img_url' => '/wp-content/uploads/2023/06/Lash-Lift-and-Tint-Course-Online-Master-Training.webp',
                        'course_url' => '/course/lash-lift-and-tint-training-course',
                        'course_title' => 'Lash Lift and Tint Course – Online Master Training',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 9: Makeup Artist and Massage Therapy Courses Online Bundle
                    [
                        'img_url' => '/wp-content/uploads/2022/10/Makeup-Artist-and-Massage-Therapy-Online-Training-Bundle.webp',
                        'course_url' => '/course/makeup-artist-and-massage-therapy-online-training-bundle',
                        'course_title' => 'Makeup Artist and Massage Therapy Courses Online Bundle',
                        'first_line' => 'From £27.25 / month',
                        'second_line' => 'or from £109 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 10: Makeup Artist Masterclass – 4 in 1
                    [
                        'img_url' => '/wp-content/uploads/2022/10/Makeup-Artist-Masterclass-4-in-1.webp',
                        'course_url' => '/course/makeup-artistry-masterclass-4-in-1',
                        'course_title' => 'Makeup Artist Masterclass – 4 in 1',
                        'first_line' => 'From £12.25 / month',
                        'second_line' => 'or from £49 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 11: Makeup Masterclass Course Online – Eyebrow, Eyeliner, LIPS & Brow Lift
                    [
                        'img_url' => '/wp-content/uploads/2022/10/Makeup-Masterclass-Eyebrow-Eyeliner-LIPS-Brow-Lift.webp',
                        'course_url' => '/course/makeup-masterclass-eyebrow-eyeliner-lips-brow-lift',
                        'course_title' => 'Makeup Masterclass Course Online – Eyebrow, Eyeliner, LIPS & Brow Lift',
                        'first_line' => 'From £17.25 / month',
                        'second_line' => 'or from £69 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 12: Makeup Masterclass Training Online
                    [
                        'img_url' => '/wp-content/uploads/2022/09/Makeup-Masterclass-Basic-to-Advanced.webp',
                        'course_url' => '/course/makeup-masterclass-basic-to-advanced',
                        'course_title' => 'Makeup Masterclass Training Online',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 13: Nail Technician Course – Complete Training
                    [
                        'img_url' => '/wp-content/uploads/2023/05/Nail-Technician-Course-Complete-Nail-Technician-Online-Course.webp',
                        'course_url' => 'course/nail-technician-course',
                        'course_title' => 'Nail Technician Course – Complete Training',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 14: Professional Bridal Makeup Online Training Course
                    [
                        'img_url' => '/wp-content/uploads/2022/09/Professional-Bridal-Makeup-Online-Training-Course.webp',
                        'course_url' => '/course/professional-bridal-makeup-online-training-course',
                        'course_title' => 'Professional Bridal Makeup Online Training Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 15: Professional Brow Lamination Course Online
                    [
                        'img_url' => '/wp-content/uploads/2020/08/Brow-Lift-Brow-Lamination-Training-Course.webp',
                        'course_url' => '/course/brow-lift-brow-lamination',
                        'course_title' => 'Professional Brow Lamination Course Online',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 16: Professional Eyebrow Microblading Course
                    [
                        'img_url'      => '/wp-content/uploads/2020/08/Professional-Eyebrow-Microblading-Course.webp',
                        'course_url'   => '/course/eyebrow-microblading-course',
                        'course_title' => 'Professional Eyebrow Microblading Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 17: Professional Eyebrow Shaping Course
                    [
                        'img_url'      => '/wp-content/uploads/2020/08/Makeup-Eyebrow-Training-Course-Hair-By-Hair-Technique.webp',
                        'course_url'   => '/course/eyebrow-shaping-course',
                        'course_title' => 'Professional Eyebrow Shaping Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 18: Professional Eyelash Extension Course
                    [
                        'img_url'      => '/wp-content/uploads/2020/08/Professional-Eyelash-Extension-Course.jpg',
                        'course_url'   => '/course/eyelash-extension-course',
                        'course_title' => 'Professional Eyelash Extension Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 19: Professional Lash and Brow Tinting Course
                    [
                        'img_url'      => '/wp-content/uploads/2019/11/Professional-Lash-and-Brow-Tinting-Course.webp',
                        'course_url'   => '/course/lash-and-brow-tinting-course',
                        'course_title' => 'Professional Lash and Brow Tinting Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 20: Professional Lash Lift and Tint Course
                    [
                        'img_url'      => '/wp-content/uploads/2022/09/Professional-Lash-Lift-and-Tint-Course-1.webp',
                        'course_url'   => '/course/lash-lift-and-tint-course',
                        'course_title' => 'Professional Lash Lift and Tint Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 21: Professional Lips Makeup Training Course
                    [
                        'img_url'      => '/wp-content/uploads/2020/08/Makeup-LIPS-Training-Course-Masterclass.webp',
                        'course_url'   => '/course/lips-makeup-training',
                        'course_title' => 'Professional Lips Makeup Training Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 22: Professional Makeup Artist – 8 Courses Complete Bundle
                    [
                        'img_url'      => '/wp-content/uploads/2022/10/Professional-Makeup-Artist-%E2%80%93-8-Courses-Complete-Bundle.webp',
                        'course_url'   => 'course/professional-makeup-artist-8-courses-complete-bundle',
                        'course_title' => 'Professional Makeup Artist – 8 Courses Complete Bundle',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 23: Professional Makeup Artist Training Course
                    [
                        'img_url'      => '/wp-content/uploads/2019/12/Professional-Makeup-Artist-Training-Course.webp',
                        'course_url'   => '/course/makeup-artist-training-course',
                        'course_title' => 'Professional Makeup Artist Training Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 24: Professional Makeup Eyeliner Training Course
                    [
                        'img_url'      => '/wp-content/uploads/2020/08/Makeup-Eyeliner-Training-Course-Masterclass.webp',
                        'course_url'   => '/course/eyeliner-training',
                        'course_title' => 'Professional Makeup Eyeliner Training Course',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Course 25: Skin Care Course for Acne Prone Skin: Online Training
                    [
                        'img_url'      => '/wp-content/uploads/2022/10/Skincare-for-Acne-Prone-Skin-Online-Training-Course.webp',
                        'course_url'   => '/course/skincare-for-acne-prone-skin-online-training-course',
                        'course_title' => 'Skin Care Course for Acne Prone Skin: Online Training',
                        'first_line' => 'From £7.25 / month',
                        'second_line' => 'or from £29 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                ];
                ?>
                <div class="online-courses" style="display: none">
                    <div class="row">
                        <?php 
                        $total_online_courses = count($fsc_courses_card_items);
                        foreach ($fsc_courses_card_items as $index => $course): 
                            $hidden_class = ($index >= 12) ? 'd-none' : '';
                        ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 online-course-item <?php echo $hidden_class; ?>">
                                <div class="fsc-custom-card">
                                    <img src="<?php echo $course['img_url']; ?>" alt="<?php echo esc_attr($course['course_title']); ?>" width="100%" height="196">
                                    <div class="fsc-card-contents">
                                        <h3>
                                            <a href="<?php echo $course['course_url']; ?>"><?php echo $course['course_title']; ?></a>
                                        </h3>
                                        <p class="fsc-card-price-content">
                                            <span><?php echo $course['first_line']; ?></span>
                                            <?php if (!empty($course['second_line'])): ?>
                                                <span><?php echo $course['second_line']; ?></span>
                                            <?php endif; ?>
                                        </p>

                                        <p class="fsc-package-includes">Package Included:</p>
                                        <ul>
                                            <?php foreach ($course['package_includes'] as $include): ?>
                                                <li><?php echo $include; ?></li>
                                            <?php endforeach; ?>
                                        </ul>

                                        <a href="<?php echo $course['course_url']; ?>" class="fsc-view-course-btn">View Courses</a>
                                    </div> <!-- end card contents -->
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php if ($total_online_courses > 12): ?>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button id="see-more-online-courses" class="see-more-btn">See More</button>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="f2f-courses">
                <?php
                        $face_to_face_card_items = [
                            [
                                'img_url' => '/wp-content/uploads/2023/07/black-nails-manicure-2.webp',
                                'course_url' => '/course/complete-nail-technician-course',
                                'course_title' => 'Complete Nail Technician Course | Face to Face Training',
                                'location' => 'London',
                                'features' => [
                                    '3 Day Face to Face Training',
                                    '4 Instalments at Checkout',
                                    'Accredited by CPD UK',
                                    'Unlimited Tutor Support',
                                ],
                            ],
                            [
                                'img_url' => '/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham2.webp',
                                'course_url' => '/course/complete-nail-technician-course-birmingham',
                                'course_title' => 'Complete Nail Technician Course | Face to Face Training | Birmingham',
                                'location' => 'Birmingham',
                                'features' => [
                                    '3 Day Face to Face Training',
                                    '4 Instalments at Checkout',
                                    'Accredited by CPD UK',
                                    'Unlimited Tutor Support',
                                ],
                            ],
                            [
                                'img_url' => '/wp-content/uploads/0223/12/complete-nail-technician-course-swindon2.webp',
                                'course_url' => '/course/complete-nail-technician-course-swindon',
                                'course_title' => 'Complete Nail Technician Course Swindon | Face to Face Training',
                                'location' => 'Swindon',
                                'features' => [
                                    '3 Day Face to Face Training',
                                    '4 Instalments at Checkout',
                                    'Accredited by CPD UK',
                                    'Unlimited Tutor Support',
                                ],
                            ],
                            [
                                'img_url' => '/wp-content/uploads/2025/05/eyelash-extension-procedure_141172-2162.webp',
                                'course_url' => '/course/eyelash-extension-course-birmingham',
                                'course_title' => 'Eyelash Extension Training Course Birmingham | CPD & IPHM Accredited',
                                'location' => 'Birmingham',
                                'features' => [
                                    '1 Day Face to Face Training',
                                    '4 Instalments at Checkout',
                                    'Accredited by CPD UK',
                                    'Unlimited Tutor Support',
                                ],
                            ],
                            [
                                'img_url' => '/wp-content/uploads/2025/05/high-angle-hand-holding-pink-swab_23-2149627157.webp',
                                'course_url' => '/course/eyelash-extensions-training-london',
                                'course_title' => 'Eyelash Extension Training Course London | CPD & IPHM Accredited',
                                'location' => 'London',
                                'features' => [
                                    '1 Day Face to Face Training',
                                    '4 Instalments at Checkout',
                                    'Accredited by CPD UK',
                                    'Unlimited Tutor Support',
                                ],
                            ],
                            [
                                'img_url' => '/wp-content/uploads/2025/03/Polygel-Nail-Extension.webp',
                                'course_url' => '/polygel-nail-extension-training-london',
                                'course_title' => 'Polygel Nail Extension Training London – Face 2 Face Course',
                                'location' => 'London',
                                'features' => [
                                    '1 Day Face to Face Training',
                                    '4 Instalments at Checkout',
                                    'Accredited by CPD UK',
                                    'Unlimited Tutor Support',
                                ],
                            ],
                        ];
                    ?>

                    <div class="row">
                        <?php foreach ($face_to_face_card_items as $course): ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 f2f-course-item">
                                <div class="fsc-custom-card">
                                    <img src="<?php echo $course['img_url']; ?>" alt="<?php echo esc_attr($course['course_title'] . ' ' . $course['location']); ?>" width="100%" height="196">
                                    <div class="fsc-card-contents">
                                        <h3>
                                            <a href="<?php echo $course['course_url']; ?>"><?php echo $course['course_title']; ?></a>
                                        </h3>
                                        <p class="fsc-card-price-content">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" style="margin-right: 5px;">
                                                    <style>svg{fill:#c52855}</style>
                                                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                </svg>
                                <?php echo $course['location']; ?>
                            </span>
                        </p>

                        <p class="fsc-package-includes">Features Included:</p>
                        <ul>
                            <?php foreach ($course['features'] as $feature): ?>
                                <li><?php echo $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="<?php echo $course['course_url']; ?>" class="fsc-view-course-btn">View Courses</a>
                    </div> <!-- end card contents -->
                </div> <!-- end fsc-custom-card -->
            </div> <!-- end col -->
            <?php endforeach; ?>
            </div> <!-- end row -->
        </div> <!-- end f2f-courses -->
        </div> <!-- end outer row -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Tab switching logic
                const onlineBtn = document.getElementById('online-courses');
                const f2fBtn = document.getElementById('f2f-courses');
                const onlineCoursesDiv = document.querySelector('.online-courses');
                const f2fCoursesDiv = document.querySelector('.f2f-courses');

                if (onlineBtn && f2fBtn && onlineCoursesDiv && f2fCoursesDiv) {
                    onlineBtn.addEventListener('click', function() {
                        onlineBtn.classList.add('active');
                        f2fBtn.classList.remove('active');
                        onlineCoursesDiv.style.display = 'block';
                        f2fCoursesDiv.style.display = 'none';
                    });

                    f2fBtn.addEventListener('click', function() {
                        f2fBtn.classList.add('active');
                        onlineBtn.classList.remove('active');
                        f2fCoursesDiv.style.display = 'block';
                        onlineCoursesDiv.style.display = 'none';
                    });
                }

                // "See More" button logic for online courses
                const seeMoreOnlineBtn = document.getElementById('see-more-online-courses');
                if (seeMoreOnlineBtn) {
                    seeMoreOnlineBtn.addEventListener('click', function() {
                        const hiddenCourses = document.querySelectorAll('.online-course-item.d-none');
                        hiddenCourses.forEach(course => {
                            course.classList.remove('d-none');
                        });
                        seeMoreOnlineBtn.style.display = 'none'; // Hide the button
                    });
                }
            });
        </script>
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
                                <li>Engaging Visual Learning – Our lessons are packed with high-quality video tutorials and demonstrations to help you master the techniques.</li>
                                <li>Nationally Accredited & Employer-Approved – All our courses are accredited by CPD, making your certificate credible, recognised, and accepted by beauty employers.</li>
                                <li>Goal-Oriented Learning – We focus on helping you achieve specific goals, whether it’s freelancing, salon work, or starting your business and building your own beauty brand.</li>
                                <li>Career-Ready Skills – Our popular courses are designed to equip you with essential, job-ready skills that beauty employers and clients actually look for.</li>
                                <li>Responsive Support Team – Get quick answers to your questions from a friendly and helpful team whenever you need assistance.</li>
                            </ul>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <div class="cs-accreditation">
                                <h2> COURSE ACCREDITATION </h2>
                                <img alt="ACCREDITATION LOGO" src="/wp-content/uploads/2023/06/ac-1.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Phlebotomy Review Section End -->
            <style>
            section#phuk-review-sec h2 {
                            text-align: center;
                            margin-bottom: 40px;
                        }
                        
                        section#phuk-review-sec {
                            background-color: #f0f0f0;
                            padding: 80px 0;
                            margin-bottom: 80px;
                        }
                        @media (max-width: 768px) {
                            section#phuk-review-sec {
                            padding: 40px 0;
                            margin-bottom: 60px;
                    }
                    }                              
        </style>
        <section id="phuk-review-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h2>Valuable Feedback From Student</h2>
                        <div class="phuk-review-part">
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
        if (function_exists('la_display_reviews_section')) {
            la_display_reviews_section();
        }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Phlebotomy Review Section End -->

        <!-- Phlebotomy FAQ Section --> 
        <section id="phuk-faq">
            <div class="container">
                <div id="la-single-faq" class="d-xl-block overflow-hidden">
                    <h2 class="text-center"><b>FAQs</b></h2>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <?php
                            $all_faqs = get_post_meta( get_the_ID(), 'product_faqs', true);
                            $id_number=1;
                            foreach($all_faqs as $faq){
                        ?>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="panelsStayOpen-heading<?=$id_number?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$id_number?>" aria-expanded="true" aria-controls="panelsStayOpen-collapse<?=$id_number?>"><?=$faq['faq_title']?></button>
                                </h3>
                                <div id="panelsStayOpen-collapse<?=$id_number?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?=$id_number?>">
                                    <div class="accordion-body">
                                        <p><?=$faq['faq_text']?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $id_number++;
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <?php get_footer(); ?>