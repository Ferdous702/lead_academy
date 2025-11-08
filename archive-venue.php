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
$location = array();
if (have_posts()) :
    while (have_posts()) : the_post();
        $venue_images = get_post_meta( get_the_ID(), 'la_venue_images', true);
        $location[] = array(
            'title' => str_replace('Training Venue – ','',get_the_title()) . ' Center',
            'image' => reset($venue_images),
            'url' => esc_url(get_permalink())
        );
    endwhile;
endif;
$location = array_reverse($location);
//echo '<pre>';
//var_dump($location);
//echo '</pre>';
?>

<style>
    #phuk-venue-sec div.phuk-card-box > img{
        width: 100%;
        height: 400px;
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
                            <img src="/wp-content/uploads/2022/12/face-to-face.webp" title="Face-to-Face Training Session" alt="Face-to-Face Training Session">
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
                            <img src="/wp-content/uploads/2022/12/instalment.webp" title="4 Instalment Plan on Checkout" alt="4 Instalment Plan on Checkout">
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
                            <img src="/wp-content/uploads/2022/12/14-days.webp" title="14 Days Money Back Guarantee" alt="Learn From Industry Expert">
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
                <h1>Phlebotomy Training</h1>
                <p>CPD Certified training equips you with the necessary clinical skills to ensure you meet the highest standards in healthcare.</p>
                <img src="/wp-content/uploads/2022/12/trust-pilot-micro-combo-2.webp" title="Trustpilot Logo" alt="Trustpilot Logo">
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
                    <h3>Why Should You Take Phlebotomy Training With Us?</h3>
                    <h2>Best Phlebotomy Training Sessions</h2>
                    <p>We offer comprehensive face-to-face phlebotomy training, covering topics such as blood collection techniques, infection control, and patient care. With hands-on practise and guidance from experienced instructors, you can gain the confidence and expertise needed to excel in this essential healthcare role.  </p>
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
                <p>Basic Phlebotomy Training</p>
            </div>
        </div>
        <div class="row">
<?php
foreach($location as $loc){
?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="<?=$loc['image']?>" alt="<?=$loc['title']?>">
                    <div class="phuk-btm-box">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> <?=$loc['title']?></h3>
                        <div class="phuk-course-btn">
                            <a href="<?=$loc['url']?>">SEE DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
<?php
}
?>
<!--
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="/wp-content/uploads/2023/10/Birmingham.webp" alt="Phlebotomy Training Birmingham">
                    <div class="phuk-btm-box">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> Birmingham Center</h3>
                        <div class="phuk-course-btn">
                            <a href="/venue/birmingham">SEE DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="/wp-content/uploads/2023/10/Bristol.webp" alt="Phlebotomy Training Bristol">
                    <div class="phuk-btm-box">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> Bristol Center</h3>
                        <div class="phuk-course-btn">
                            <a href="/venue/bristol">SEE DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="/wp-content/uploads/2024/01/Swindon.webp" alt="Phlebotomy Training Swindon">
                    <div class="phuk-btm-box">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> Swindon Center</h3>
                        <div class="phuk-course-btn">
                            <a href="/venue/swindon">SEE DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
-->
        </div>
    </div>
</section>
<!-- Phlebotomy Our Venue Section End -->

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

<?php get_footer(); ?>
