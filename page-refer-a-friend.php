<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<style>
#refer-friend-1::before,
#refer-friend-1::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    z-index: -1; /* Ensure overlays are behind the content */
}

#refer-friend-1 {
    position: relative;
    height: 100%;
}

#refer-friend-1::before {
    background-image: linear-gradient(210deg, #B91948 20%, #F2295B00 16%);
    background-color: transparent;
}

#refer-friend-1::after {
    background-color: transparent;
    background-image: linear-gradient(210deg, #BA5C5C00 70%, #B91948 63%);
    opacity: 1;
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

#refer-friend-1 img {
    width: 100%;
}

#refer-friend-1 h1 {
    color: #B91948;
    font-family: "Sen", Sans-serif;
    font-size: 36px;
    font-weight: 600;
    line-height: 50px;
    margin-right: 0px;
    margin-bottom: 10px;
}

.title-divider {
    color: #B91948;
    opacity: 1;
    border-top: 3px solid;
}

.img-divider {
    display: none;
}

#refer-friend-2 {
    padding: 60px 0px 20px 0px;
}

.refer-friend-2-title h2 {
    color: #B91948;
    font-family: "Sen", Sans-serif;
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 0px;
}

#refer-friend-2 p {
    color: #000000;
    font-family: "Sen", Sans-serif;
    font-size: 18px;
    font-weight: 500;
    line-height: 32px;
}

#refer-friend-2 p strong {
    color: #b91948;
}

.refer-form {
    box-shadow: 0px 10px 45px 0px rgba(0, 0, 0, 0.1);
    padding: 60px 30px 60px 30px;
    margin-top: 50px;
}

.refer-form h2 {
    color: #000000;
    font-family: "Sen", Sans-serif;
    font-size: 38px;
    font-weight: 600;
    text-align: center;
}

input#gform_submit_button_24 {
    display: inline-block;
    width: 236px;
    background-color: #B91948;
    padding: 15px 0px 15px 0px;
    font-family: "Sen", Sans-serif;
    font-size: 14px;
    font-weight: 500;
}

section#refer-friend-3 {
    padding: 100px 0px;
}

section#refer-friend-3 h2 {
    color: #000000;
    font-family: "Sen", Sans-serif;
    font-size: 35px;
    font-weight: 600;
    line-height: 57px;
    text-align: center;
}

/** For mobile devices **/
@media (max-width: 767px) {
    #refer-friend-1 {
    background-color: #B91948;
    padding: 50px 0px 5px 0px;
}

    #refer-friend-1 h1 {
    font-size: 20px;
    color: #fff;
    line-height: 35px;
    margin-right: 0;
    margin-top: 20px;
    margin-bottom: 10px;
}

#refer-friend-1 p {
    color: #fff;
}

    .title-divider {
    display: none;
}

    .img-divider {
    display: block !important;
}

    .img-divider {
    margin: 0;
    color: #fff;
    opacity: inherit;
    border-top: 2px solid;
}

.refer-friend-2-title h2 {
    color: #B91948;
    font-family: "Sen", Sans-serif;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 25px;
}

.refer-form h2 {
    font-size: 26px;
}

div#field_24_4 {
    transform: scale(0.77);
    transform-origin: 0 0;
}

section#refer-friend-3 h2 {
    font-size: 26px;
    line-height: 35px;
}

section#refer-friend-3 {
    padding: 60px 0px;
}
}

/** For tablet devices **/
@media (min-width: 768px) and (max-width: 1024px) {
    #refer-friend-1 h1 {
    font-size: 26px;
    line-height: 35px;
    margin-right: 100px;
}

.refer-form h2 {
    font-size: 26px;
}

section#refer-friend-3 {
    padding: 70px 0px;
}

#refer-friend-1::before,
#refer-friend-1::after {
    display: none;
    z-index: 1 !important;
}

#refer-friend-1 h1 {
    color: #ffffff !important;
    margin-right: 0px;
    font-size: 20px !important;
}

#refer-friend-1 {
    background-color: #b91948;
    padding: 20px 0px;
}

#refer-friend-1 p{
    color: #fff;
}

}
</style>
<section id="refer-friend-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/REFER-A-FRIEND-AND-GET-A-COURSE-FOR-FREE-min.webp" alt="REFER A FRIEND AND GET A COURSE FOR FREE">
                <hr class="solid img-divider">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-self-center">
                <h1>Lead Academy Referral Programs!<br> Get a FREE Course</h1>
                <p>Refer a friend or colleague to our academy and get a FREE Course for each successful referral. Share the benefits of our courses and help others achieve their educational goals while earning incentives for yourself. </p>
                <hr class="solid title-divider">
            </div>
        </div>
    </div>
</section>
<section id="refer-friend-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="refer-friend-2-title">
                    <h2>Refer a Friend and get a Free Compliance Course!</h2>
                    <hr class="solid title-divider">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"></div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <p>To enjoy the <strong>free</strong> course through Lead Academy Referral Programs, you just have to refer our courses to your friends bearing a special discount code that will be provided by us and persuade them to purchase any of our courses using that discount code If she/he purchases any of our course, you will be awarded with a course of your choice for <strong>FREE</strong>.</p>
            <p><strong>Don’t miss out on this fantastic opportunity to enhance your skills and knowledge for free!
            </strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="refer-form">
                    <h2>Get Your referral Code Now</h2>
                    <?php echo do_shortcode('[contact-form-7 id="081802a" title="Refer a friend"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="refer-friend-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2>What Our Customers Say About Us</h2>
                <div class="refer-friend-review-part">
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

<?php
    get_footer();
?>
