<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
    <style>
        section#book-tutor-support-banner {
            background: linear-gradient(320deg, #b91948de 0%, #303131f2 100%), url(https://lead-academy.org/wp-content/uploads/2022/09/tutor-girl-home-writing-new-information.jpg);
            padding: 100px 0px;
            background-size: contain;
            background-attachment:fixed;
        }

        #book-tutor-support-banner h1 {
            color: #FFA428;
            font-family: "Sen", Sans-serif;
            font-size: 65px;
            font-weight: 600;
            text-align: center;
        }

        #book-tutor-support-banner p {
            text-align: center;
            color: #FFFFFF;
            font-family: "Sen", Sans-serif;
            font-size: 18px;
            font-weight: 400;
        }

        #book-tutor-support-calendly {
            background-color: transparent;
            background-image: linear-gradient(310deg, #B91948 0%, #1C1C1DDB 100%);
            padding: 60px 0px;
        }


        /* -Mobile Device- */
        @media (max-width: 767px) {
            #book-tutor-support-banner h1 {
                font-size: 30px;
            }

            #book-tutor-support-banner {
                padding: 50px 0px !important;
            }

            #book-tutor-support-calendly {
                background-color: transparent;
                background-image: linear-gradient(310deg, #B91948 0%, #1C1C1DDB 100%);
                padding: 50px 0px;
            }
        }

        /* -Tab Device- */
        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            #book-tutor-support-banner h1 {
                font-size: 38px;
            }
        }
    </style>
    <section id="book-tutor-support-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Book Tutor Support</h1>
                    <p>Get priority online support directly from your instructor</p>
                </div>
            </div>
        </div>
    </section>
    <section id="book-tutor-support-calendly">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="book-tutor-support-calendar">
                        <!-- Calendly inline widget begin -->
                        <div class="calendly-inline-widget" data-url="https://calendly.com/lead-academy/30min" style="min-width:320px;height:700px;"></div>
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                        <!-- Calendly inline widget end -->

                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2"></div>
            </div>
        </div>
    </section>
    <?php
get_footer();
?>