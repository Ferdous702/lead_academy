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

.health-p-header {
    font-size: 18px !important;
    font-weight: 600;
    margin-bottom: 5px !important;
    line-height: 1.2;
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
                            <p class="health-p-header">Face-to-Face Training Session </p>
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
                            <p class="health-p-header">4 Instalment Plan on Checkout</p>
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
                            <p class="health-p-header">Learn From Industry Expert</p>
                            <p>to outshine by learning the most effective strategies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top 3 End -->

<!-- Phlebotomy  Hero Section -->
<section id="phuk-hero-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                <h1>Health and Social Care</h1>
                <p>Through the Health and Social Care course, students gain the skills necessary to work in a variety of healthcare settings as well as a thorough understanding of the healthcare system.</p>
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
               <!-- <a href="#">View Courses</a> -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5"></div>
        </div>
    </div>
</section>
<!-- Phlebotomy  Hero Section End -->

<!-- Phlebotomy About Section -->
<section id="phuk-about-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 phuk-about-text-col">
                <div class="phuk-about-text">
                    <h2>Why Should You Take Health and Social Care With Us?</h2>
                    <p>Join Lead Academy for the Nationally Accredited Health and Social Care Programs and become equipped with the knowledge and practical experience needed to excel in the field. Graduates of this program are well-equipped to support individuals with their physical, emotional, and social needs, making a positive impact on the lives of others. We offer comprehensive training that prepares students for a successful career in health and social care.</p>
                </div>
            </div>
            <style>
                .video-container {
                    position: relative;
                    padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
                    height: 0;
                    overflow: hidden;
                    max-width: 100%;
                }

                .video-container iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }
            </style>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="phuk-about-video">
                    <div class="video-container">
                    <img src="/wp-content/uploads/0223/12/Health-and-Social-Care.webp" alt="">
                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/Cd9KWB50ztI?si=5GUQQL9FxmOonJsY" 
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                            encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen>
                        </iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Phlebotomy About Section End -->

<!-- Phlebotomy Our Venue Section -->
<style>
    .pt-course-card {
        background-color: #fff !important; 
        border: 1px solid #ddd !important; 
        border-radius: 10px !important; 
        padding: 20px !important; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important; 
        transition: transform 0.3s ease, box-shadow 0.3s ease !important; 
        margin: 15px !important; 
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
        margin-bottom: 15px !important; 
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
    }

    .pt-course-card .round-button {
        color: white !important; 
        padding: 10px 20px !important;
        border-radius: 5px !important;
        text-align: center !important;
        font-weight: bold !important;
        text-decoration: none !important;
        transition: background-color 0.3s ease !important;
    }

    .pt-course-card .round-button:hover {
        background-color: #0056b3 !important; 
    }

    @media screen and (max-width: 767px) {
        .pt-course-card {
            background-color: #fff !important;
            border: 1px solid #ddd !important;
            border-radius: 8px !important;
            padding: 15px !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1) !important;
            margin: 15px 0px !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: space-between !important;
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

        .pt-course-card .card .round-button:hover {
            background-color: #0056b3 !important;
        }
    }

    .card-content.col-md-6 ul {
    margin-bottom: 40px;
    }

</style>


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
        </style>

<!-- Courses Section --> 
        <section id="msg-course-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>BROWSE OUR HEALTH AND SOCIAL CARE COURSES</h2>
                        <div class="msg-switch-course-buttons" style="display: none;">
                            <button id="online-courses" class="active">NVQ/RQF Courses</button>
                            <button id="f2f-courses">CPD Courses</button>
                        </div>
                    </div>
                </div>
            <div class="row">
            <?php
                $fsc_courses_card_items = [
                    // Course 8: Level 2 Certificate in Health and Social Care Course – NVQ/RQF
                    [
                        'img_url' => '/wp-content/uploads/2025/02/NCFE_CACHE_Level_2_Certificate_in_Health_and_Social_Care_-_RQF.webp',
                        'course_url' => '/course/level-2-certificate-in-health-and-social-care',
                        'course_title' => 'Level 2 Certificate in Health and Social Care Course – NVQ/RQF',
                        'first_line' => 'From £59 / month',
                        'second_line' => 'or from £349 in full',
                        'package_includes' => [
                            'Suitable for Beginner Level',
                            'Recognised by Employers & CQC Standards',
                            '1:1 Live Tutor Support via Zoom',
                            'No Exam Only Assignments',
                            'Unlimited Retake Submissions',
                        ],
                    ],
                    // Course 9: Level 2 Diploma in Care (RQF)
                    [
                        'img_url' => '/wp-content/uploads/2025/05/caucasian-young-doctor-nursing-home-checking-blood-pressure-elderly-age-male-with-crutches_482257-45230.webp',
                        'course_url' => '/course/level-2-diploma-in-adult-care',
                        'course_title' => 'Level 2 Diploma in Care (RQF)',
                        'first_line' => 'From £77 / month',
                        'second_line' => 'or from £459 in full',
                        'package_includes' => [
                            'Ideal for Beginners',
                            'Meets Employer Standards/CQC',
                            'Personalised 1:1 Live Tutor Support',
                            'Assignment-Based Assessment',
                            'Flexible Online Learning',
                        ],
                    ],
                    // Course 10: Level 3 Award in Health and Social Care Course | NVQ/RQF
                    [
                        'img_url' => '/wp-content/uploads/2025/01/CACHE_Award_in_RQF_Level_3_Health_and_Social_Care.webp',
                        'course_url' => '/course/level-3-award-in-health-and-social-care',
                        'course_title' => 'Level 3 Award in Health and Social Care Course | NVQ/RQF',
                        'first_line' => 'From £64 / month',
                        'second_line' => 'or from £379 in full',
                        'package_includes' => [
                            'No Prior Experience Needed',
                            'Compliant with Employer & CQC Standards',
                            'Tailored 1:1 Tutor Support via Live Sessions',
                            'No Exams - Assignment-Based Evaluation',
                            'No Work Placement Necessary',
                        ],
                    ],
                    // Course 11: Level 3 Diploma in Adult Care – NVQ
                    [
                        'img_url' => '/wp-content/uploads/2024/06/Level-3-Diploma-in-Adult-Care-NVQ.webp',
                        'course_url' => '/course/level-3-diploma-in-adult-care',
                        'course_title' => 'Level 3 Diploma in Adult Care – NVQ',
                        'first_line' => 'From £84 / month',
                        'second_line' => 'or from £499 in full',
                        'package_includes' => [
                            'Accredited NVQ Level 3 Qualification ',
                            'Meets Employer and CQC Requirements',
                            'No Stressful Exams, Just Assignments ',
                            'Customised 1:1 Tutor Support via Live Sessions',
                            '50 Hours of Work Placement Required ',
                        ],
                    ],
                    [
                    'img_url' => '/wp-content/uploads/2025/05/nurse-patient-looking-camera.webp',
                    'course_url' => '/course/health-care-assistant-training',
                    'course_title' => 'Health Care Assistant (HCA) Training Bundle – Training for HCAs',
                    'first_line' => 'From £163.75 / month',
                    'second_line' => 'or from £655 in full',
                    'package_includes' => [
                        'Suitable for Non Medics',
                        'Become a Health Care Assistant',
                        'Work in NHS or Private Healthcare Sector ',
                        'Phlebotomy and Cannulation Training Included',
                        'Health & Social Care (3 in 1 Course Bundle)',
                    ],
                ],
                    [
                    'img_url' => '/wp-content/uploads/2024/03/Care-Certificate-Training-Face-to-Face-Course.webp',
                    'course_url' => '/course/care-certificate-training-london',
                    'course_title' => 'Care Certificate 15 Standards – Face to Face Training',
                    'first_line' => 'From £19 / month',
                    'second_line' => 'or from £75 in full',
                    'package_includes' => [
                        'No Prior Experience Needed',
                        'Accredited By CPD UK',
                        'Meets Employer and CQC Requirements',
                        'Build Skills in Safety, Safeguarding and Care',
                        'Customised 1:1 Tutor Support via Live Sessions',
                        'Suitable For Medics/Non-Medics Background',
                    ],
                ],
                ];
                ?>
                <div class="online-courses">
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
                <div class="f2f-courses" style="display: none">
                <?php
                        $face_to_face_card_items = [
                            // [
                            //     'img_url' => '/wp-content/uploads/2025/05/medical-students-professor-checking-pulse-student_13339-76848.webp',
                            //     'course_url' => '/course/adult-nursing-degree-course',
                            //     'course_title' => 'Accredited Adult Nursing Degree Course',
                            //     'first_line' => 'From £7.25 / month',
                            //     'second_line' => 'or from £29 in full',
                            //     'package_includes' => [
                            //         'Unlimited Tutor Support',
                            //         'Insurance Option Available',
                            //         'Interactive Course Materials',
                            //         'Accredited Qualification',
                            //     ],
                            // ],
                        ];
                    ?>

                    <div class="row">
                        <?php
                        $total_courses = count($face_to_face_card_items);
                        foreach ($face_to_face_card_items as $index => $course): 
                            $hidden_class = ($index >= 12) ? 'd-none' : '';
                        ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 cpd-course-item <?php echo $hidden_class; ?>">
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
                    <?php if ($total_courses > 12): ?>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button id="see-more-cpd-courses" class="see-more-btn">See More</button>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>
<!-- Phlebotomy Our Venue Section End -->

<style>
    section#phuk-review-sec h2 {
                    text-align: center;
                    margin-bottom: 40px;
                }
                
                section#phuk-review-sec {
                    background-color: #f0f0f0;
                    padding: 40px 0;
                    margin-bottom: 80px;
                }
                @media (max-width: 768px) {
                    section#phuk-review-sec {
                    padding: 10px 0;
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

<!-- Phlebotomy FAQ Section End --> 

<?php get_footer(); ?>
