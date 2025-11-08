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

<!-- Hero Section -->
    <section id="la-home-page-hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                    <h1>An Interactive Platform For <span class=lah-color>Learning</span></h1>
                    <div class="la-home-p-search-bar">
                        <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
                    </div>
                    <div class="la-trusted-part">
                        <div class="row">
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <h3>Self Paced Online Learning</h3>
                                <p>Learn on your own accord, wherever you want, whenever you want.</p>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <h3>3 Installment Plan On Checkout</h3>
                                <p>You have the option to choose from four easy instalment plans.</p>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <h3>14 Days money back Guaranty</h3>
                                <p>Hassle-free guarantee on purchase, ensuring quality & your peace of mind.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 home-image">
                    <img src="/wp-content/uploads/0223/12/lead-academy-student.webp" alt="Student Image - Online Learning Platform - Lead Academy">
                </div>
            </div>
        </div>
    </section>
    <style>
        @media screen and (min-width: 767px) and (max-width: 1024px) {
        section#la-home-page-hero-section img {
        display: none;
    }
}

    @media screen and (min-width: 1025px) and (max-width: 1399px) {
        section#la-home-page-hero-section img {
        display: block !important;
    }

    }
    </style>
    <!-- Hero Section End -->

    <!-- Partner Section -->
    <section id=la-partner-section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2 class="la-partner-section-title-mbl">Trusted by</h2>
                    <h2>Trusted by <span class=lah-color>250+ Leading Universities</span> and Companies Globally</h2>
                    <div class="la-trusted-partner-logo">
                    <div class="owl-carousel owl-fsc-partners">
                        <?php
                        $partners = [
                            [
                                'img_alt' => 'qls-logo',
                                'img_src' => '/wp-content/uploads/2022/12/qls-logo.png',
                                'img_title' => 'Quality Licence Scheme Logo',
                            ],
                            [
                                'img_alt' => 'rospa-logo',
                                'img_src' => '/wp-content/uploads/2022/12/rospa-logo.png',
                                'img_title' => 'RoSPA Logo',
                            ],
                            [
                                'img_alt' => 'cpd-logo',
                                'img_src' => '/wp-content/uploads/0223/12/CPDmember.webp',
                                'img_title' => 'CPD Member Logo',
                            ],
                            [
                                'img_alt' => 'Signature-logo',
                                'img_src' => '/wp-content/uploads/2022/12/Signature-logo-1.png',
                                'img_title' => 'Signature Logo',
                            ],
                            [
                                'img_alt' => 'iphm-logo',
                                'img_src' => '/wp-content/uploads/2022/12/iphm-logo-1.png',
                                'img_title' => 'IPHM Logo',
                            ],
                            [
                                'img_alt' => 'Pearson-logo',
                                'img_src' => '/wp-content/uploads/2022/12/Pearson.png',
                                'img_title' => 'Pearson Logo',
                            ],
                            [
                                'img_alt' => 'Edexcel-logo',
                                'img_src' => '/wp-content/uploads/2022/12/Edexcel.png',
                                'img_title' => 'Edexcel Logo',
                            ],
                        ];

                        foreach ($partners as $partner) {
                        ?>
                            <div class="fsc-partner-item">
                                <img src="<?php echo $partner['img_src'] ?>" alt="<?php echo $partner['img_alt'] ?>" title="<?php echo $partner['img_title'] ?>">
                            </div>
                        <?php
                        }
                        ?>
                    </div>	<!-- end owl -->  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partner Section End -->

    <!-- Course Category Section -->
    <section id="la-home-course-cat-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Course Category</h2>
                </div>
            </div>
            <div class="row">
                <?php
                    $la_home_cate = [
                        [
                            'img_alt' => 'BSL Icon',
                            'img_src' => '/wp-content/uploads/2022/12/British-Sign-Language.webp',
                            'home_course_cat_title' => 'British Sign Language',
                            'home_course_cat_url' => '/category/bsl',
                        ],
                        [
                            'img_alt' => 'Functional Skills Icon',
                            'img_src' => '/wp-content/uploads/2022/12/Functional-Skills.webp',
                            'home_course_cat_title' => 'Functional Skills',
                            'home_course_cat_url' => '/category/functional-skills',
                        ],
                        [
                            'img_alt' => 'Counselling & Psychology Icon',
                            'img_src' => '/wp-content/uploads/2022/12/Counselling-_-Psychology.webp',
                            'home_course_cat_title' => 'Counselling & Psychology',
                            'home_course_cat_url' => '/category/counselling-and-psychology',
                        ],
                        [
                            'img_alt' => 'Leadership & Management Icon',
                            'img_src' => '/wp-content/uploads/2022/12/Counselling-_-Psychology.webp',
                            'home_course_cat_title' => 'Leadership & Management',
                            'home_course_cat_url' => '/category/leadership-and-management',
                        ],
                        [
                            'img_alt' => 'Clinical Skills Icon',
                            'img_src' => '/wp-content/uploads/0223/12/clinic-1.webp',
                            'home_course_cat_title' => 'Clinical Skills',
                            'home_course_cat_url' => '/clinical-skills-training',
                        ],
                        [
                            'img_alt' => 'Bundle Course',
                            'img_src' => '/wp-content/uploads/0223/12/Bundle-Course.webp',
                            'home_course_cat_title' => 'Bundle Course',
                            'home_course_cat_url' => '/bundle-offer',
                        ],
                        [
                            'img_alt' => 'Message Therapy',
                            'img_src' => '/wp-content/uploads/0223/12/relax.webp',
                            'home_course_cat_title' => 'Message Therapy',
                            'home_course_cat_url' => '/massage-therapy-courses',
                        ],
                        [
                            'img_alt' => 'GCSE Courses',
                            'img_src' => '/wp-content/uploads/0223/12/Gcse.webp',
                            'home_course_cat_title' => 'GCSE Courses',
                            'home_course_cat_url' => '/adult-gcse-courses',
                        ],
                        [
                            'img_alt' => 'Education and Training',
                            'img_src' => '/wp-content/uploads/0223/12/education.webp',
                            'home_course_cat_title' => 'Education and Training',
                            'home_course_cat_url' => '/teacher-training-courses',
                        ],
                        /*
                        [
                            'img_alt' => 'Phlebotomy Training',
                            'img_src' => '/wp-content/uploads/2023/11/Phlebotomy.webp',
                            'home_course_cat_title' => 'Phlebotomy Training',
                            'home_course_cat_url' => '/category/phlebotomy-training',
                        ],
                        */
                    ];
                    foreach( $la_home_cate as $la_home_categ ){
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="la-home-course-cat-box">
                        <div class="row">
                            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                                <img src="<?php echo $la_home_categ['img_src']?>" alt="<?php echo $la_home_categ['img_alt']?>">
                            </div>
                            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 cat-title">
                                <h4><a href="<?php echo $la_home_categ['home_course_cat_url']?>"><?php echo $la_home_categ['home_course_cat_title']?></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="home-course-cat-btn">
                        <a href="/all-courses">
                            <span class="home-course-cat-btn-flex">
                                <span class="home-course-cat-btn-text">
                                    Browse More
                                </span>
                                <span class="home-course-cat-btn-icon">
                                    <i class="fa fa-angle-double-right"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course Category Section End -->

    <!-- Most Popular Courses Section -->
    <section id="home-popular-courses">
        <div class="container">
            <div class="home-popular-courses-tt-ds">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h2>Most Popular Courses</h2>
                        <p>Lead academy provides access to the world’s best quality, certified courses that employers value.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    $la_popular_course = [
                        [
                            'img_src' => '/wp-content/uploads/0223/12/Phlebotomy-Training-London.webp',
                            'img_alt' => 'Phlebotomy Training - London',
                            'home_popular_course_category' => 'Phlebotomy Training',
                            'home_popular_course_percentage' => '55% OFF',
                            'home_popular_course_title' => 'Phlebotomy Training - London',
                            'home_popular_course_url' => '/course/phlebotomy-training-london',
                            'home_popular_course_regular_price' => '310.00',
                            'home_popular_course_sale_price' => '155.00',
                            'home_product_id' => 366854,
                        ],
                        [
                            'img_src' => '/wp-content/uploads/0223/12/Advanced-Competency-Phlebotomy-Training-Swindon-–-Part-2.webp',
                            'img_alt' => 'Advanced / Competency Phlebotomy Training Swindon – Part 2',
                            'home_popular_course_category' => 'Phlebotomy Training',
                            'home_popular_course_percentage' => '62% OFF',
                            'home_popular_course_title' => 'Advanced Phlebotomy Training - Swindon',
                            'home_popular_course_url' => '/course/advanced-competency-phlebotomy-training-swindon',
                            'home_popular_course_regular_price' => '675.00',
                            'home_popular_course_sale_price' => '254.00',
                            'home_product_id' => 386971,
                        ],
                        [
                            'img_src' => '/wp-content/uploads/0223/12/Phlebotomy-Training-Birmingham.webp',
                            'img_alt' => 'Phlebotomy Training Birmingham',
                            'home_popular_course_category' => 'Phlebotomy Training',
                            'home_popular_course_percentage' => '50% OFF',
                            'home_popular_course_title' => 'Phlebotomy Training Birmingham',
                            'home_popular_course_url' => '/course/phlebotomy-training-birmingham',
                            'home_popular_course_regular_price' => '310.00',
                            'home_popular_course_sale_price' => '155.00',
                            'home_product_id' => 376417,
                        ],
                        [
                            'img_src' => '/wp-content/uploads/0223/12/Care-Certificate-15-Standards.webp',
                            'img_alt' => 'Care Certificate 15 Standards',
                            'home_popular_course_category' => 'Clinical Skills Training',
                            'home_popular_course_percentage' => '50% OFF',
                            'home_popular_course_title' => 'Care Certificate 15 Standards',
                            'home_popular_course_url' => '/course/care-certificate-training-london',
                            'home_popular_course_regular_price' => '199.00',
                            'home_popular_course_sale_price' => '75.00',
                            'home_product_id' => 391063,
                        ],
                        [
                            'img_src' => '/wp-content/uploads/0223/12/Vitamin-B12-Injection-Course.webp',
                            'img_alt' => 'Vitamin B12 Injection Course',
                            'home_popular_course_category' => 'Clinical Skills Training',
                            'home_popular_course_percentage' => '50% OFF',
                            'home_popular_course_title' => 'Vitamin B12 Injection Training',
                            'home_popular_course_url' => '/vitamin-b12-injection-course',
                            'home_popular_course_regular_price' => '310.00',
                            'home_popular_course_sale_price' => '155.00',
                            'home_product_id' => 389230,
                        ],
                        [
                            'img_src' => '/wp-content/uploads/0223/12/Functional-Skills-Maths-Level-2.webp',
                            'img_alt' => 'Functional Skills Maths Level 2',
                            'home_popular_course_category' => 'Functional Skills',
                            'home_popular_course_percentage' => '56% OFF',
                            'home_popular_course_title' => 'Functional Skills Maths Level 2 – GCSE Equivalent',
                            'home_popular_course_url' => '/course/functional-skills-maths-level-2',
                            'home_popular_course_regular_price' => '335.00',
                            'home_popular_course_sale_price' => '149.00',
                            'home_product_id' => 363172,
                        ],
                        [
                            'img_src' => '/wp-content/uploads/0223/12/Functional-Skills-English-Level-2-–-GCSE-Equivalent.webp',
                            'img_alt' => 'Functional Skills English Level 2 – GCSE Equivalent',
                            'home_popular_course_category' => 'Functional Skills',
                            'home_popular_course_percentage' => '63% OFF',
                            'home_popular_course_title' => 'Functional Skills English Level 2 – GCSE Equivalent',
                            'home_popular_course_url' => '/course/functional-skills-english-level-2',
                            'home_popular_course_regular_price' => '399.00',
                            'home_popular_course_sale_price' => '149.00',
                            'home_product_id' => 363561,
                        ],
                        [
                            'img_src' => '/wp-content/uploads/0223/12/GCSE-Maths-Online-Course-and-Exam-Edexcel.webp',
                            'img_alt' => 'GCSE Maths Online Course and Exam | Edexcel',
                            'home_popular_course_category' => 'GCSE Course',
                            'home_popular_course_percentage' => '0% OFF',
                            'home_popular_course_title' => 'GCSE Maths Online Course and Exam | Edexcel',
                            'home_popular_course_url' => '/course/gcse-maths-online-course',
                            'home_popular_course_regular_price' => '',
                            'home_popular_course_sale_price' => '69.00',
                            'home_product_id' => 409878,
                        ],
                        [
                            'img_src' => '/wp-content/uploads/0223/12/Level-3-Award-in-Education.webp',
                            'img_alt' => 'Level 3 Award in Education and Training | AET Course (PTLLS) | TQUK',
                            'home_popular_course_category' => 'AET Course',
                            'home_popular_course_percentage' => '0% OFF',
                            'home_popular_course_title' => 'Level 3 Award in Education and Training | TQUK ',
                            'home_popular_course_url' => '/course/level-3-award-in-education-and-training',
                            'home_popular_course_regular_price' => '165.00',
                            'home_popular_course_sale_price' => '',
                            'home_product_id' => 368889,
                        ],

                    ];
                    foreach( $la_popular_course as $la_popular_courses ){
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="pplar-course-box">
                        <div class="row">
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="margin: auto;">
                                <div class="pplar-courses-box-left">
                                    <img width="100px" src="<?php echo $la_popular_courses['img_src']?>" alt="<?php echo $la_popular_courses['img_alt']?>">
                                </div>
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                <div class="pplar-courses-box-right">
                                    <div class="pplr-courses-cat-percentage">
                                        <div class="la-h-tag la-h-tag-1"><h5><?php echo $la_popular_courses['home_popular_course_category']?></h5></div>
                                        <div class="la-h-tag la-h-tag-2"><p><?php echo $la_popular_courses['home_popular_course_percentage']?></p></div>
                                    </div>
                                    <h3><a href="<?php echo $la_popular_courses['home_popular_course_url']?>"><?php echo $la_popular_courses['home_popular_course_title']?></a></h3>
                                    <div class="row">
                                        <img src="/wp-content/uploads/0223/12/reviewsio-5-stars.svg" alt="Reviews.io">
                                    </div>
                                    <div class="pplar-course-box-price">
                                        <?php
                                        $my_product_id = $la_popular_courses['home_product_id'];
                                        echo do_shortcode('[la-specific-course-price product_id="'.$my_product_id.'"]');
                                        ?>
                                        <!--
                                            <del>£<?php echo $la_popular_courses['home_popular_course_regular_price']?></del>
                                            <p>£<?php echo $la_popular_courses['home_popular_course_sale_price']?></p>
                                        -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- Most Popular Courses Section End -->

    <!-- Get Full Access Section -->
    <section id="home-subscription">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 home-subscription-right-part">
                    <h2>Get Full Access To The Course Library For <span class=lah-color>£99</span></h2>
                    <img src="/wp-content/uploads/2023/05/Get-Full-Access-To-The-Course-Library-For-99-1536x1536-1.webp" alt="Get 1000+ CPD Accredited Courses">
                    <div class="home-subscription-list">
                        <ul>
                            <li>
                                <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                <span class="home-subscription-list-text">1 Year Access</span>
                            </li>
                            <li>
                                <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                <span class="home-subscription-list-text">Get 1000+ CPD Accredited Courses</span>
                            </li>
                            <li>
                                <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                <span class="home-subscription-list-text">Free Course Completion PDF Certificate</span>
                            </li>
                            <li>
                                <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                <span class="home-subscription-list-text">Free Student ID Card</span>
                            </li>
                            <li>
                                <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                <span class="home-subscription-list-text">24/7 Customer Support</span>
                            </li>
                            <li>
                                <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                <span class="home-subscription-list-text">Tutor Support</span>
                            </li>
                        </ul>
                    </div>
                    <div class="home-subscription-btn">
                        <a href="/subscription">Claim Now</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="home-subscription-img">
                        <img src="/wp-content/uploads/2023/05/Get-Full-Access-To-The-Course-Library-For-99-1536x1536-1.webp" alt="Get 1000+ CPD Accredited Courses">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Get Full Access Section End -->

    <!-- Review Section -->
    <section id="home-review">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Valuable Feedback From Student</h2>
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
    </section>
    <!-- Review Section End -->

    <!-- Gift Card Section -->
    <section id="home-gift-card">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-12">
                    <h2>Order Gift Card for Your Loved Ones Today</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="home-gift-card-left-part">
                        <img src="/wp-content/uploads/2023/05/Gift-Card-min-1536x1231-1.webp" alt="Gift Card">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 home-gift-card-right-part-col">
                    <div class="home-gift-card-right-part">
                        <p>Make a difference in the lives of your loved ones. Keep yourself/your loved one’s one step ahead and help to master the skills that need to succeed. Send a gift card for your loved ones today.</p>
                        <div class="home-subscription-list">
                            <ul>
                                <li>
                                    <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                    <span class="home-subscription-list-text">Lifetime Validity of the Gift Card</span>
                                </li>
                                <li>
                                    <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                    <span class="home-subscription-list-text">Get a greeting card for any occasion absolutely free with a gift card</span>
                                </li>
                                <li>
                                    <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                    <span class="home-subscription-list-text">Applicable for All Courses</span>
                                </li>
                                <li>
                                    <span class="home-subscription-list-icon"><img src="/wp-content/uploads/2022/11/check.svg" alt=""></span>
                                    <span class="home-subscription-list-text">Use Available Balance Any Time from Your Account</span>
                                </li>
                            </ul>
                        </div>
                        <div class="home-course-cat-btn">
                            <a href="/order-gift-card">
                                <span class="home-course-cat-btn-flex">
                                    <span class="home-course-cat-btn-text">
                                        Send A Gift Card
                                    </span>
                                    <span class="home-course-cat-btn-icon">
                                        <i class="fa fa-angle-double-right"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gift Card Section End -->

    <!-- Success Stories Section -->
    <section id="home-success-stories">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 home-success-stories-left-part">
                    <h2>Success Stories</h2>
                    <p>Lead Academy created an impact on 89% of the learners to develop their professional skills and people are benefited like a promotion, a raise, or starting a new career!</p>
                    <p>Here are the success stories of our achievers who celebrated their learning journey with Lead Academy and how we helped them to boost their confidence in order to achieve their accreditation!</p>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="home-success-stories-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/qIQqEiU0nMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Success Stories Section End -->
<?php get_footer(); ?>