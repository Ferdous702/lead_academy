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
    <!-- Hero Section -->
    <section id="msg-hero-section">
        <div class="container">
            <div class="msg-therapy-row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                    <h1>Massage Therapy Courses and Training</h1>
                    <hr />
                    <div class="brdr-left">
                        <p>Unwind the potential of a fulfilling career with our massage therapy online courses. Learn the art of healing touch and embrace a path of relaxation, rejuvenation, and professional growth.  </p>
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
                        </svg>
                    </div>
                    <a class="msg-btn" href="#msg-course-section">View Course</a>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">

                </div>
            </div>
        </div>
    </section>
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
                    <h2>Find the Best Solution for Massage Therapy Courses</h2>
                    <p>Embark on a transformative journey with our Massage Therapy Online Courses. Immerse yourself in a virtual oasis of knowledge and master ancient and modern massage techniques. Ignite your passion for healing and unlock the secrets of relaxation, restoration, and client well-being with Level 1-3 courses.</p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <h3>Why Study Massage Therapy Courses?</h3>
                    <ul>
                        <li>Accredited by IPHM and CPD, ensuring the recognition and credibility of your certificate.</li>
                        <li>Insurance option to provide you with peace of mind and protect your practise.</li>
                        <li>Interactive course material that engages and immerses you in the learning process.</li>
                        <li>Flexible payment option with convenient three installment plans to make your learning accessible and affordable.</li>
                        <li>Eligibility for membership as a therapist at IPHM, opening doors to professional networking and industry support. </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 msg-v-aling">
                    <iframe class="msg-video" width="560" height="315" src="https://www.youtube.com/embed/JH42SC6QipM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <script>
        jQuery(document).ready(function() {
            let course = jQuery('#online-courses');
            let exam = jQuery('#f2f-courses');
            let courseArea = jQuery('.online-courses');
            let examArea = jQuery('.f2f-courses');

            course.click(function() {
                course.addClass('active');
                exam.removeClass('active');
                courseArea.show();
                examArea.hide();
            });

            exam.click(function() {
                exam.addClass('active');
                course.removeClass('active');
                examArea.show();
                courseArea.hide();
            });

            jQuery(window).on('load', function () {
                if (!window.location.hash) {
                    jQuery('#f2f-courses').trigger('click');
                }
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

        .page-id-376471 #msg-course-section h2 {
            text-align: center;
            color: #000000;
            padding: 80px 0px 15px 0px;
        }

        .page-id-376471 .msg-switch-course-buttons {
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

        .page-id-376471 .msg-switch-course-buttons {
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

        .card.pt-course-card h3 {
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
                    <h2>BROWSE OUR MASSAGE THERAPY COURSES</h2>
                    <div class="msg-switch-course-buttons">
                        <button class="active" id="f2f-courses">Face to Face Training</button>
                        <button id="online-courses">Online Course</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $fsc_courses_card_items = [
                    [
                        'img_url' => 'https://lead-academy.org/wp-content/uploads/0223/12/Indian-Head-Massage.webp',
                        'course_url' => '/course/indian-head-massage',
                        'course_title' => 'Indian Head Massage',
                        'first_line' => 'From £9.25 / month',
                        'second_line' => 'or from £37 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    [
                        'img_url' => '/wp-content/uploads/2022/09/Complete-Reiki-Healer-Course-at-QLS-Level-3.webp',
                        'course_url' => '/course/reiki-1-to-master-level',
                        'course_title' => 'Reiki Level 1 to Master Level Course Online',
                        'first_line' => 'From £9.25 / month',
                        'second_line' => 'or from £37 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    [
                        'img_url'      => '/wp-content/uploads/2022/09/Ayurvedic-Massage-Advanced-Diploma-Course-Online.webp',
                        'course_url'   => '/course/ayurvedic-massage-advanced-diploma-course-online',
                        'course_title' => 'Ayurvedic Massage Advanced Diploma Course Online',
                        'first_line'   => 'From £9.25 / month',
                        'second_line'  => 'or from £37 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    [
                        'img_url'      => '/wp-content/uploads/2022/12/Certificate-in-Reflexology-Online-Training-Course.webp',
                        'course_url'   => '/course/certificate-in-reflexology-online-training-course',
                        'course_title' => 'Certificate in Reflexology Online Training Course',
                        'first_line'   => 'From £9.25 / month',
                        'second_line'  => 'or from £37 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    [
                        'img_url'      => '/wp-content/uploads/2022/09/Crystal-Therapy-and-Reflexology-Course-Online.webp',
                        'course_url'   => '/course/crystal-therapy-and-reflexology-course-online',
                        'course_title' => 'Crystal Therapy and Reflexology Course Online',
                        'first_line'   => 'From £9.25 / month',
                        'second_line'  => 'or from £37 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/0223/12/11.webp',
                        'course_url'   => '/course/sports-massage-course',
                        'course_title' => 'Sports Massage Course – CPD Certified',
                        'first_line'   => 'From £9.25 / month',
                        'second_line'  => 'or from £37 in full',
                        'package_includes' => [
                            'Unlimited Tutor Support',
                            'Insurance Option Available',
                            'Interactive Course Materials',
                            'Accredited Qualification',
                            'Instalment Plan at Checkout',
                        ],
                    ],
                    // Add more courses here as needed
                ];
                ?>
                <div class="online-courses" style="display: none">
                    <div class="row">
                        <?php foreach ($fsc_courses_card_items as $course): ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="fsc-custom-card">
                                    <img src="<?php echo $course['img_url']; ?>" alt="<?php echo $course['course_title']; ?>" width="100%" height="196">
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
                </div>
                <div class="f2f-courses">
                    <?php
                    $face_to_face_card_items = [
                        [
                            'img_url' => 'https://lead-academy.org/wp-content/uploads/2024/11/Lymphatic-Drainage-Massage-1.webp',
                            'course_url' => '/course/lymphatic-drainage-massage-training-birmingham',
                            'course_title' => 'Lymphatic Drainage Massage Training Birmingham',
                            'location' => 'Birmingham',
                            'features' => [
                                '1 Day Face to Face Training',
                                '4 Instalments at Checkout',
                                'Accredited by CPD UK',
                                'Unlimited Tutor Support',
                            ],
                        ],
                        [
                            'img_url' => 'https://lead-academy.org/wp-content/uploads/2024/11/Swedish-Massage-1.webp',
                            'course_url' => '/course/swedish-massage-training-birmingham',
                            'course_title' => 'Swedish Massage Training Birmingham',
                            'location' => 'Birmingham',
                            'features' => [
                                '1 Day Face to Face Training',
                                '4 Instalments at Checkout',
                                'Accredited by CPD UK',
                                'Unlimited Tutor Support',
                            ],
                        ],
                        [
                            'img_url' => 'https://lead-academy.org/wp-content/uploads/2024/11/Deep-tissue-1.webp',
                            'course_url' => '/course/deep-tissue-massage-training-birmingham',
                            'course_title' => 'Deep Tissue Massage Training Birmingham',
                            'location' => 'Birmingham',
                            'features' => [
                                '1 Day Face to Face Training',
                                '4 Instalments at Checkout',
                                'Accredited by CPD UK',
                                'Unlimited Tutor Support',
                            ],
                        ],
                        [
                            'img_url' => '/wp-content/uploads/2025/01/Swedish-Massage-Training-Course-London.webp',
                            'course_url' => '/course/swedish-massage-training-london',
                            'course_title' => 'Swedish Massage Training London',
                            'location' => 'London',
                            'features' => [
                                '1 Day Face to Face Training',
                                '4 Instalments at Checkout',
                                'Accredited by CPD UK',
                                'Unlimited Tutor Support',
                            ],
                        ],
                        [
                            'img_url' => '/wp-content/uploads/2025/04/Accredited_Reflexology_Course_-_One_Day_Training.webp',
                            'course_url' => '/course/reflexology-course-london',
                            'course_title' => 'Reflexology Course London',
                            'location' => 'London',
                            'features' => [
                                '1 Day Face to Face Training',
                                '4 Instalments at Checkout',
                                'Accredited by CPD UK',
                                'Unlimited Tutor Support',
                            ],
                        ],
                            [
                            'img_url' => '/wp-content/uploads/2025/04/Indian-Head-Massage-Training-London.webp',
                            'course_url' => '/course/indian-head-massage-training-london',
                            'course_title' => 'Indian Head Massage Training London',
                            'location' => 'London',
                            'features' => [
                                '1 Day Face to Face Training',
                                '4 Instalments at Checkout',
                                'Accredited by CPD UK',
                                'Unlimited Tutor Support',
                            ],
                        ],
                         [
                            'img_url' => '/wp-content/uploads/2025/04/Indian-Head-Massage-Training-in-Birmingham.webp',
                            'course_url' => '/course/indian-head-massage-training-birmingham',
                            'course_title' => 'Indian Head Massage Training Birmingham',
                            'location' => 'Birmingham',
                            'features' => [
                                '1 Day Face to Face Training',
                                '4 Instalments at Checkout',
                                'Accredited by CPD UK',
                                'Unlimited Tutor Support',
                            ],
                        ],
                    ];
                    ?>
                    <div class="f2f-courses">
                        <div class="row">
                            <?php foreach ($face_to_face_card_items as $course): ?>
                                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                                    <div class="fsc-custom-card">
                                        <img src="<?php echo $course['img_url']; ?>" alt="<?php echo $course['course_title'] . ' ' . $course['location']; ?>" width="100%" height="196">
                                        <div class="fsc-card-contents">
                                            <h3>
                                                <a href="<?php echo $course['course_url']; ?>"><?php echo $course['course_title']; ?></a>
                                            </h3>
                                            <p class="fsc-card-price-content">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" style="margin-right: 5px;">
                                                        <style>
                                                            svg {
                                                                fill: #c52855
                                                            }
                                                        </style>
                                                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
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
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const courseLink = document.getElementById("course-link");
                            if (courseLink.textContent.length > 27) {
                                courseLink.classList.add("course-long-title");
                            }
                        });
                    </script>
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
                                <li>Certified by IPHM and CPD.</li>
                                <li>Insurance coverage for your practice's safety and security.</li>
                                <li>Enhanced learning experience with engaging course material.</li>
                                <li>4 easy payment options.</li>
                                <li>IPHM therapist membership for networking and industry support.</li>
                                <li>Affordable and accessible learning</li>
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
                        $course_reviews = get_post_meta(get_the_ID(), 'la_course_reviews', true);
                        if (function_exists('la_display_reviews_section')) {
                            la_display_reviews_section();
                        }
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
                    <h3 class="accordion-header" id="panelsStayOpen-heading18">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse18" aria-expanded="true" aria-controls="panelsStayOpen-collapse18">
                            What is massage therapy? </button>
                    </h3>
                    <div id="panelsStayOpen-collapse18" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading18">
                        <div class="accordion-body">
                            <p>
                                Massage therapy is a holistic approach to healing that involves the manipulation of soft tissues in the body to alleviate pain, improve circulation, and promote relaxation. It is a hands-on technique that can be used to treat a wide range of conditions, from chronic pain and stress to sports injuries and postoperative recovery. Massage therapists use various techniques, such as Swedish massage, deep tissue massage, and trigger point therapy, to address specific areas of tension or discomfort.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading20">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse20" aria-expanded="false" aria-controls="panelsStayOpen-collapse20">
                            What are the benefits of enrolling in an online massage therapy course? </button>
                    </h3>
                    <div id="panelsStayOpen-collapse20" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading20">
                        <div class="accordion-body">
                            <p>Enrolling in an online massage therapy course can provide you with a range of benefits.</p>
                            <ul>
                                <li>Firstly, it allows you to learn at your own pace and on your own schedule, which is ideal for those who have other commitments or responsibilities. This flexibility also means that you can complete the course from anywhere in the world, as long as you have access to a computer and internet connection.</li>
                                <li>Secondly, online course providers like Lead Academy always offer more affordable tuition fees than traditional in-person courses, which can help you save money while still receiving a high-quality education.</li>
                                <li>Additionally, online courses may offer a wider range of specialisations and elective courses that allow you to tailor your education to your specific interests and career goals.</li>
                            </ul>
                            <p>Overall, enrolling in an online massage therapy course can be a great way to start or advance your career in this rewarding field.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading21">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse21" aria-expanded="false" aria-controls="panelsStayOpen-collapse21">
                            Why should I become a certified massage therapist? </button>
                    </h3>
                    <div id="panelsStayOpen-collapse21" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading21">
                        <div class="accordion-body">
                            <p>
                                Becoming a certified massage therapist can open up many opportunities for you in the healthcare industry. It is a rewarding career that allows you to help others improve their physical and mental well-being. With certification, you will have the knowledge and skills necessary to provide safe and effective treatments for your clients. Additionally, certification can enhance your credibility as a therapist and make you more attractive to potential employers or clients.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading23">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse23" aria-expanded="false" aria-controls="panelsStayOpen-collapse23">
                            Can you learn massage therapy online? </button>
                    </h3>
                    <div id="panelsStayOpen-collapse23" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading23">
                        <div class="accordion-body">
                            <p>Yes, you can! Enrolling in Lead Academy's online massage therapy course can offer many benefits.</p>
                            <ul>
                                <li>Firstly, it provides flexibility and convenience, as you can study at your own pace and from the comfort of your own home. This is especially useful for those who have busy schedules or live far away from a physical school.</li>
                                <li>This online course is more affordable than traditional in-person courses, making it a cost-effective option for those on a budget.</li>
                                <li>Additionally, you'll get access to a wide range of resources, such as video tutorials and interactive quizzes, that can enhance your learning experience.</li>
                            </ul>
                            <p>With the courses of Lead Academy, you can gain all the knowledge and skills necessary to become a certified massage therapist without ever having to leave your house.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading25">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse25" aria-expanded="false" aria-controls="panelsStayOpen-collapse25">
                            Do you need a license for massage therapy? </button>
                    </h3>
                    <div id="panelsStayOpen-collapse25" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading25">
                        <div class="accordion-body">
                            <p>The requirements for licensure vary from state to state. Generally, you'll need to complete a certain number of hours of training at an accredited school and pass a licensing exam. Once you're licensed, you'll be able to work in a variety of settings, such as spas, clinics, and private practises. Massage therapy is a growing field with many opportunities for those who are passionate about helping others and improving their health and well-being. With Lead Academy's online courses, you can start your journey towards becoming a licensed massage therapist today!</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading27">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse27" aria-expanded="false" aria-controls="panelsStayOpen-collapse27">
                            Does massage therapy help arthritis? </button>
                    </h3>
                    <div id="panelsStayOpen-collapse27" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading27">
                        <div class="accordion-body">
                            <p>Massage therapy has been shown to provide relief for arthritis sufferers. It can help reduce pain, stiffness, and inflammation in the affected joints. Massage therapists use a variety of techniques, such as Swedish massage, deep tissue massage, and trigger point therapy, to help alleviate the symptoms of arthritis. In addition to providing physical benefits, massage therapy can also be beneficial for mental health. It can help reduce stress and anxiety, which are common in people with arthritis. ----If you're interested in pursuing a career in massage therapy or simply want to learn more about its benefits, Lead Academy's online courses are a great place to start. With flexible scheduling and comprehensive training, you'll be well on your way to helping others improve their health and well-being through the power of touch.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading29">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse29" aria-expanded="false" aria-controls="panelsStayOpen-collapse29">
                            Does massage therapy work?  </button>
                    </h3>
                    <div id="panelsStayOpen-collapse29" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading29">
                        <div class="accordion-body">
                            <p>Research has shown that massage therapy can be effective in treating a variety of conditions, including chronic pain, sports injuries, and even depression. It works by increasing blood flow and circulation, which helps to relax muscles and reduce inflammation. Additionally, massage therapy can help to improve range of motion and flexibility, making it an ideal treatment for people with arthritis or other joint conditions. Whether you're looking to relieve stress or alleviate physical pain, massage therapy can be a powerful tool in promoting overall health and wellness. So if you're curious about the benefits of massage therapy, don't hesitate to explore your options and discover how this ancient healing practice can help you feel your best. </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading31">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse31" aria-expanded="false" aria-controls="panelsStayOpen-collapse31">
                            How hard is the massage therapy course? </button>
                    </h3>
                    <div id="panelsStayOpen-collapse31" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading31">
                        <div class="accordion-body">
                            <p>The difficulty of a massage therapy course can vary depending on the programme and the individual student. With the interactive study material and expert tutors, these courses of Lead Academy are easy to follow. Many of our students found the experience rewarding as they learned to help others improve their health and well-being through touch therapy. With dedication and hard work, anyone can become a skilled massage therapist and enjoy the benefits of this fulfilling career path.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading33">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse33" aria-expanded="false" aria-controls="panelsStayOpen-collapse33">
                            How does massage therapy work? </button>
                    </h3>
                    <div id="panelsStayOpen-collapse33" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading33">
                        <div class="accordion-body">
                            <p>Massage therapy involves the manipulation of soft tissues in the body to alleviate pain, reduce stress and tension, and promote relaxation. It works by stimulating the nervous system and increasing blood flow to affected areas, which can help reduce inflammation and improve overall health. Massage therapy is a holistic approach to healthcare that can have a positive impact on both physical and mental well-being.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>