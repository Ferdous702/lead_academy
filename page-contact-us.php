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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
    <!--Hero Section-->
    <section id="contact-hero">
        <div class="contact-hero-background-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-4 col-xl-4">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="contact-hero-content">
                        <h1>CONTACT US</h1>
                        <p>Home / Contact Us</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-4 col-xl-4">
                </div>
            </div>
        </div>
    </section>
    <!--Hero Section End-->

    <!--Form Section-->
    <section id="contact-sub-form">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="get-in-touch">
                        <h2>Get in Touch</h2>
                        <hr class="solid">
                        <p>Please complete the form below and we will get in contact as soon as we can to help you with your query.</p>
                        <img src="https://lead-academy.org/wp-content/uploads/2023/08/Get-in-Touch.webp" title="Get in Touch" alt="Get in Touch">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="contact-main-form">
                        <?php echo do_shortcode( '[contact-form-7 id="4a1443a" title="Contact us"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Form Section End-->

    <!--Contact Section-->
    <section id="contact-address">
        <div class="container">
            <div class="cnct-adrs-row">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="cnct-adrs-card">
                            <div class="cnct-email">
                                <ul class="cnct-icon-list-items">
                                    <li class="cnct-icon-list-item">
                                        <span class="cnct-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-mail-bulk"></i>						
                                        </span>
                                        <span class="cnct-icon-list-text">Email</span>
                                    </li>
                                </ul>
                                <hr class="solid">
                                <h3>Business Inquiry</h3>
                                <p>business@lead-academy.org</p>

                                <h3>Customer Support Inquiry</h3>
                                <p>info@lead-academy.org</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="cnct-adrs-card">
                            <div class="cnct-phone">
                                <ul class="cnct-icon-list-items">
                                    <li class="cnct-icon-list-item">
                                        <span class="cnct-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-phone-alt"></i>						
                                        </span>
                                        <span class="cnct-icon-list-text">Phone</span>
                                    </li>
                                </ul>
                                <hr class="solid">
                                <h3>Sales</h3>
                                <p>0300 124 5585</p>
                                
                                <h3>Customer Support</h3>
                                <p>020 3880 8347</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="cnct-adrs-card cnct-last-card">
                            <div class="cnct-address">
                                <ul class="cnct-icon-list-items">
                                    <li class="cnct-icon-list-item">
                                        <span class="cnct-icon-list-icon">
                                        <i class="fa-solid fa-location-dot"></i>				
                                        </span>
                                        <span class="cnct-icon-list-text">Location</span>
                                    </li>
                                </ul>
                                <hr class="solid">
                                <h3>London Office</h3>
                                <p>
                                    Bank Studio, 23 Park Royal Road
                                    London, NW10 7JH, UK
                                </p>
                                
                                <h3>Swindon Office</h3>
                                <p>
                                    15 Pure Offices, Kembrey Business Park
                                    Swindon, SN2 8BW, UK
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Section End-->

    <!--Social Icon Section-->
    <section id="cnct-social-icon">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Stay Connect With Our Social Media</h2>
                    <hr class="solid">
                    <div class="icons">
                        <a href="https://www.facebook.com/leadacademyonline">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/leadacademyonline/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/school/leadacademyuk/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://twitter.com/LeadAcademy5">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Social Icon Section End-->

    <script src="https://kit.fontawesome.com/a9545f17e8.js" crossorigin="anonymous"></script>

<?php get_footer(); ?>