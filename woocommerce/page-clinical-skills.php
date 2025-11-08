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

<!-- Phlebotomy  Hero Section -->
<section id="phuk-hero-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                <h1>Clinical Skills</h1>
                <p>NHS Accepted and CPD Certified Practical training sessions are for freshers and healthcare professionals, covering basic to advanced procedures to enhance their skills and stay updated with the latest practices.</p>
                <img src="/wp-content/uploads/2022/12/trust-pilot-micro-combo-2.webp" alt="Trustpilot Logo">
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
                    <h3>Why Should You Take Clinical Skills Training With Us?</h3>
                    <h2>Best Clinical Skills Training Sessions</h2>
                    <p>The expert led practical sessions are designed to be interactive and engaging, allowing participants to practice hands-on skills in a supportive environment. Participants will also receive nationally recognised certification upon completion of the training, demonstrating their commitment to ongoing professional development.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="phuk-about-video">
                    <?php echo do_shortcode( '[video src="https://www.youtube.com/watch?v=Cd9KWB50ztI" poster="https://lead-academy.org/wp-content/uploads/2023/09/phuk-video-cover.webp"]' ); ?>
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <h2>Our Venues</h2>
                <p>Clinical Skills Training</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/09/Bristol.webp" alt="Phlebotomy Training">
                    <div class="phuk-btm-box">
                        <h3><a href="/phlebotomy-training/">Phlebotomy Training</a></h3>
                        <ul>
                            <li>1 Day Face to Face Training</li>
                            <li>Includes Practical and Theory </li>
                            <li>4 Instalments at Checkout </li>
                            <li>Expert led Hands-on Training </li>
                            <li>Accredited by CPD UK </li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/phlebotomy-training/">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="/wp-content/uploads/2023/10/Bristol.webp" alt="Phlebotomy Training Bristol">
                    <div class="phuk-btm-box">
                        <h3><a href="/course/vaccination-and-immunisation-training/">Vaccination and Immunisation Training with Basic Life Support</a></h3>
                        <ul>
                            <li>1 Day Face to Face Training</li>
                            <li>Includes Practical and Theory </li>
                            <li>4 Instalments at Checkout </li>
                            <li>Expert led Hands-on Training </li>
                            <li>Accredited by CPD UK </li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/course/vaccination-and-immunisation-training/">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="/wp-content/uploads/0223/12/Vitamin-B12-Injection-Training.webp" alt="Vitamin B12 Injection Training">
                    <div class="phuk-btm-box">
                        <h3><a href="/course/vitamin-b12-injection-course/">Vitamin B12 Injection Training</a></h3>
                        <ul>
                            <li>1 Day Face to Face Training</li>
                            <li>4 Instalments at Checkout </li>
                            <li>Expert led Hands-on Training </li>
                            <li>Accredited by CPD UK </li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/course/vitamin-b12-injection-course/">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="/wp-content/uploads/0223/12/ECG-Training.webp" alt="ECG Training">
                    <div class="phuk-btm-box">
                        <h3><a href="/course/ecg-training/">ECG Training</a></h3>
                        <ul>
                            <li>1 Day Face to Face Training</li>
                            <li>4 Instalments at Checkout</li>
                            <li>Expert led Hands-on Training </li>
                            <li>Accredited by CPD UK </li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/course/ecg-training/">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Phlebotomy Our Venue Section End -->

<!-- The Advanced Phlebotomy Section -->
<section id="phuk-venue-sec" class="advanced-phlebotomy-training d-none">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <h2>Our Venues</h2>
                <p>Advanced Phlebotomy Training</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="phuk-card-box">
                    <img src="/wp-content/uploads/0223/12/phlebotomy-courses-at-a-glance-4-700x387-1.webp" alt="Advanced Phlebotomy Training">
                    <div class="phuk-btm-box">
                        <h3><a href="/course/advanced-phlebotomy-training">Advanced / Competency Phlebotomy Training London</a></h3>
                        <!-- <h4><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path></svg> London</h4> -->
                        <ul>
                            <li>3 Days Face to Face Training</li>
                            <li>Gain Competency Skills and Certificate</li>
                            <li>Job Recommendation Letter</li>
                            <li>4 Instalments at Checkout</li>
                            <li>Accredited by CPD UK</li>
                            <li>Unlimited Tutor Support</li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/course/advanced-phlebotomy-training">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="phuk-card-box">
                    <img src="/wp-content/uploads/0223/12/Advanced-Competency-Phlebotomy-Training-Birmingham.webp" alt="Advanced / Competency Phlebotomy Training Birmingham">
                    <div class="phuk-btm-box">
                        <h3><a href="/course/advanced-competency-phlebotomy-training-birmingham">Advanced / Competency Phlebotomy Training Birmingham</a></h3>
                        <!-- <h4><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path></svg> Birmingham</h4> -->
                        <ul>
                            <li>3 Days Face to Face Training</li>
                            <li>Gain Competency Skills and Certificate</li>
                            <li>Job Recommendation Letter</li>
                            <li>4 Instalments at Checkout</li>
                            <li>Accredited by CPD UK</li>
                            <li>Unlimited Tutor Support</li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/course/advanced-competency-phlebotomy-training-birmingham">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="phuk-card-box">
                    <img src="/wp-content/uploads/2024/01/Advanced-Competency-Phlebotomy-Training-Swindon-copy.webp" alt="Advanced / Competency Phlebotomy Training Swindon">
                    <div class="phuk-btm-box">
                        <h3><a href="/course/advanced-competency-phlebotomy-training-swindon">Advanced / Competency Phlebotomy Training Swindon</a></h3>
                        <!-- <h4><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path></svg> Birmingham</h4> -->
                        <ul>
                            <li>3 Days Face to Face Training</li>
                            <li>Gain Competency Skills and Certificate</li>
                            <li>Job Recommendation Letter</li>
                            <li>4 Instalments at Checkout</li>
                            <li>Accredited by CPD UK</li>
                            <li>Unlimited Tutor Support</li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/course/advanced-competency-phlebotomy-training-swindon">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</section>

<section id="phuk-avanced-sec" class="d-none">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="phuk-advance-img">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/09/Advanced-Phlebotomy.webp" alt="The Advanced Phlebotomy">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 phuk-advance-col">
                <div class="phuk-advance-text">
                    <h3>How To Learn Advanced Phlebotomy & Gain Competency?</h3>
                    <h2>The Advanced Phlebotomy</h2>
                    <p>After completion of part 1, Basic Phlebotomy Training, in order to build confidence and become proficient in phlebotomy techniques, we strongly recommend you enrol to <strong>part 2</strong> which is <strong>Advanced Competency Phlebotomy Training</strong>. You will have the opportunity to gain practical skills with real-time live blood draw in this 3-days extensive advanced competency phlebotomy training.</p>
                    <p>Upon finishing the Advanced Competency Phlebotomy Training Part 2, you will receive a <strong>certificate of competence</strong> along with a <strong>job recommendation letter</strong> signed by your trainer. This certificate is widely accepted by the <strong>NHS</strong> and will add significant <strong>value to your job application</strong> when you apply for <strong>phlebotomist</strong> positions.</p>
                </div>
                <div class="phuk-button">
                    <a href="/course/advanced-phlebotomy-training">BOOK NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- The Advanced Phlebotomy Section End -->

<!-- The Cannulation Section -->
<section id="phuk-cannulation-sec" class="d-none">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 phuk-cannulation-col">
                <div class="phuk-cannulation-img phuk-mobile-block">
                    <img src="https://lead-academy.org/wp-content/uploads/2019/11/cannulation-1.webp" alt="Cannulation Training">
                </div>
                <div class="phuk-cannulation-text">
                    <h3>Cannulation Training</h3>
                    <h2>Practical Cannulation Training Sessions</h2>
                    <p>Join the Cannulation Training Sessions to gain expertise in the process of inserting a cannula into a patient's vein. These practical sessions are designed to provide hands-on experience and comprehensive knowledge on proper techniques, potential complications, and best practices for successful cannulation.</p>
                    <p>Whether you are a medical professional looking to enhance your skills or a student interested in pursuing a career in healthcare, these training sessions will equip you with the necessary expertise to confidently perform cannulation procedures. </p>
                </div>
                <div class="phuk-button">
                    <a href="/course/cannulation-training">BOOK NOW</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 phuk-cannulation-col">
                <div class="phuk-cannulation-img phuk-big-device-block">
                    <img src="https://lead-academy.org/wp-content/uploads/2019/11/cannulation-1.webp" alt="Cannulation Training">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- The Cannulation Section End -->

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
                        $course_reviews = get_post_meta( get_the_ID(), 'la_course_reviews', true);
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
<?php
    $all_faqs = get_post_meta( get_the_ID(), 'product_faqs', true);
    if ( count($all_faqs) > 1 ) { 
    $id_number=1;
    ?>
    <section id="phuk-faq">
        <div class="container">
            <div id="la-single-faq" class="d-xl-block overflow-hidden">
                <h2 class="text-center"><b>FAQs</b></h2>
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <?php
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
    <?php
    }
?>
<!-- Phlebotomy FAQ Section End --> 

<?php get_footer(); ?>