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

$current_product_id 		= get_the_ID();						
$wc_product_faqs 			= get_post_meta( $current_product_id, 'product_faqs', true);
$course_reviews 			= get_post_meta( $current_product_id, 'la_course_reviews', true);            
?>
<!-- Top 3 -->
<section id="phuk-top-3-sec">
    <div class="container">
        <div class="phlebotomy-top-3">
            <div class="phlebotomy-container">
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="/wp-content/uploads/2022/12/face-to-face.webp" title="Face-to-Face Training Session" alt="Face-to-Face Training Session">
                        </div>
                        <div class="float-right">     
                            <p>Face-to-Face Training Session </p>
                            <p>to provide you with the top notch learning experience</p>
                        </div>
                    </div>        
                </div>
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="/wp-content/uploads/2022/12/instalment.webp" title="4 Instalment Plan on Checkout" alt="4 Instalment Plan on Checkout">
                        </div>
                        <div class="float-right">         
                            <p>4 Instalment Plan on Checkout</p>
                            <p>to ensure that money doesn’t become a barrier to learning</p>
                        </div>
                    </div>        
                </div>
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="/wp-content/uploads/2022/12/14-days.webp" title="14 Days Money Back Guarantee" alt="Learn From Industry Expert">
                        </div>
                        <div class="float-right">         
                            <p>Learn From Industry Expert</p>
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
                <h1><?php the_title()?></h1>
                <p>Healthcare Sector Approved and CPD Certified training equips you with the necessary skills and knowledge to ensure you meet the highest standards in healthcare.</p>
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
                    <h2>Why Should You Take Cannulation Training With Us?</h2>
                    <h2>Best Cannulation Training Sessions</h2>
                    <p>Our specialised face-to-face cannulation classes deliver exceptional training on various cannulation techniques, appropriate device selection, and thorough patient assessments. Benefit from intensive practical sessions and personalised guidance from our team of expert clinical educators, helping you develop the skill and assurance needed for this fundamental healthcare procedure. The programme focuses on building your expertise in performing safe, precise cannulation—an essential skill for medication delivery, fluid management, and phlebotomy across the healthcare sector.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="phuk-about-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ZrvNokqoDXI?si=29sddg73fNW_5sDH" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                        encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Phlebotomy About Section End -->

<!-- Phlebotomy Our Venue Section -->
<section id="phuk-venue-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Venues</h2>
            </div>
        </div>
        <div class="row">
            <?php
                // Loop for Cannulation Training
                $cannulation_courses = array(
                    371100,     // London
                    380325,     // Birmingham
                    436829      // Swindon
                );
                foreach($cannulation_courses as $p_id) {
                    $product_url = get_permalink($p_id);
                    $product_title = get_the_title($p_id);
                    $post_thumbnail_id = get_post_thumbnail_id($p_id);
                    $product_image = wp_get_attachment_image_src($post_thumbnail_id, "full")[0];
                    $product_image_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', TRUE);
                    $product = wc_get_product($p_id);
                    if ($product && $product->is_type('variable')) {
                        $variations = $product->get_available_variations();
                        if (!empty($variations)) {
                            $variation_price = $variations[0]['display_price'];
                            $variation_price_per_month = number_format($variation_price / 4, 2);
                        }
                    }
                    // Assuming you want to dynamically get the location name from the title
                    $location_name = ''; // Set your default location or fetch dynamically based on your data
                    if (strpos($product_title, 'London') !== false) {
                        $location_name = 'London';
                    } elseif (strpos($product_title, 'Birmingham') !== false) {
                        $location_name = 'Birmingham';
                    }elseif (strpos($product_title, 'Swindon') !== false) {
                        $location_name = 'Swindon';
                    }
            ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mx-auto">
                <div class="phuk-card-box">
                    <img src="<?=$product_image?>" alt="<?=$product_image_alt?>">
                    <div class="phuk-btm-box">
                        <h3><a href="<?=$product_url?>">IV Cannulation Training</a></h3>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                                <style>svg{fill:#c52855}</style>
                                <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                            </svg> 
                            <?=$location_name?>
                        </p>
                        <ul>
                            <li>1 Day Face to Face Training</li>
                            <li>4 Instalments at Checkout</li>
                            <li>Accredited by CPD UK</li>
                            <li>Unlimited Tutor Support</li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="<?=$product_url?>">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } // Close foreach loop ?>
        </div>
    </div>
</section>

<!-- Phlebotomy Our Venue Section End -->

<!-- The ECG Training Section -->
 

<!-- <section id="phuk-avanced-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center">
                <div class="phuk-advance-img">
                    <img src="https://lead-academy.org/wp-content/uploads/0223/12/ECG-Cover-Image.webp" style=" border-radius: 10px; " alt="ECG Training">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center phuk-advance-col">
                <div class="phuk-advance-text">
                    <h3>ECG Interpretation Course</h3>
                    <h2>ECG Training</h2>
                    <p>Our CPD-accredited ECG Interpretation Course provides comprehensive training on reading and analysing electrocardiograms. You will receive guidance from a skilled healthcare professional on recording an ECG trace, interpreting ECGs, recognising issues with rhythm and rate, myocardial infarction, ordering diagnostic tests in response to an abnormal ECG, and diagnosing cardiac muscle disease and congenital heart disease. </p>
                </div>
                <div class="phuk-button">
                    <a href="/course/ecg-training">BOOK NOW</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- The ECG Training Section End -->

<!-- The Vitamin B12 Injection Course Section -->

<!-- <section id="phuk-cannulation-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center phuk-cannulation-col">
                <div class="phuk-cannulation-img phuk-mobile-block">
                    <img src="https://lead-academy.org/wp-content/uploads/0223/12/Vitamin-B12-injections-3.webp" alt="Vitamin B12 Injection Course">
                </div>
                <div class="phuk-cannulation-text">
                    <h3>Vitamins B Complex, Biotin & Vitamin D Injection Techniques</h3>
                    <h2>Vitamin B12 Injection Course</h2>
                    <p>Our Vitamin B12 Injection Course covers proper injection techniques for vitamin B complexes, Biotin and Vitamin D. This excellent resource can help you learn how to safely and effectively administer B12 injections, which can enhance sleep, moods, and more. Additionally, our course provides hands-on practice to enhance your skills in delivering injections safely and accurately.</p>
                </div>
                <div class="phuk-button">
                    <a href="/course/vitamin-b12-injection-course">BOOK NOW</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center phuk-cannulation-col">
                <div class="phuk-cannulation-img phuk-big-device-block">
                    <img src="https://lead-academy.org/wp-content/uploads/0223/12/Vitamin-B12-injections-3.webp" style=" border-radius: 10px; " alt="Cannulation Training">
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- The Vitamin B12 Injection Course Section End -->

<!-- The Vaccination and Immunisation Training Section -->

<!-- <section id="phuk-immunisation-training-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center">
                <div class="phuk-advance-img">
                    <img src="https://lead-academy.org/wp-content/uploads/2024/01/Vaccination-and-Immunisation-Training.webp" style=" border-radius: 10px; " alt="Vaccination and Immunisation Training">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center phuk-advance-col">
                <div class="phuk-advance-text">
                    <h3>Flu & COVID Vaccine Training</h3>
                    <h2>Vaccination and Immunisation Training</h2>
                    <p>Our Flu & COVID Vaccine Training program covers the proper administration techniques for flu and COVID vaccines, ensuring you are equipped to provide these essential vaccinations to patients. This CPD-accredited Vaccination and Immunisation Training includes information on vaccine storage, handling, and patient education to help you become a knowledgeable and confident healthcare provider in immunisation practices.  </p>
                </div>
                <div class="phuk-button">
                    <a href="/course/vaccination-and-immunisation-training">BOOK NOW</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- The Vaccination and Immunisation Training Section End -->

<!-- Phlebotomy Review Section End -->
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


<style>

.phuk-card-box {
	border: 1px solid #cccccc !important;
	border-radius: 10px !important;
}

</style>

<?php get_footer(); ?>
