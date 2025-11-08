<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
    <section id="subscription-banner-part">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Unlimited Courses, and more. Study anywhere, cancel anytime.</h1>
                    <p>Ready to learn? Click below to create or restart your membership and discover over 700+ courses.</p>
                    <a class="get-access-button" href="#get-access-now">GET ACCESS NOW</a>
                    <h2>Only £79 for 12 months!</h2>
                    <a href="https://www.reviews.io/company-reviews/store/lead-academy-org"><img src="https://lead-academy.org/wp-content/uploads/2022/12/Lead-Academy-Reviews.io_.webp" alt="Review.io"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="subscription-about-div-part">
        <div class="container">
            <div class="subscription-about-big-device">
                <div class="row align-items-end">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                        <div class="subs-about">
                            <p>1000+
                                <br>
                                Courses
                            </p>
                        </div>
                        <img src="https://lead-academy.org/wp-content/uploads/0223/12/macbook.webp" alt="Lead Academy Macbook">
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="subs-about-img">
                            <img src="https://lead-academy.org/wp-content/uploads/0223/12/imac-min-1536x1248-1.webp" alt="Lead Academy Imac">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                        <div class="subs-about">
                            <p>4500+
                                <br>
                                Lessons
                            </p>
                        </div>
                        <img src="https://lead-academy.org/wp-content/uploads/0223/12/ipad-min-1536x865-1.webp" alt="Lead Academy Ipad">
                    </div>
                </div>
            </div>
            <div class="subscription-about-small-device">
                <div class="row">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 align-self-center">
                        <div class="subs-about">
                            <p>1000+
                                <br>
                                Courses
                            </p>
                        </div>
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <img src="https://lead-academy.org/wp-content/uploads/0223/12/macbook.webp" alt="Lead Academy Macbook">
                    </div>
                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <img src="https://lead-academy.org/wp-content/uploads/0223/12/ipad-min-1536x865-1.webp" alt="Lead Academy Ipad">
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 align-self-center">
                        <div class="subs-about">
                            <p>4500+
                                <br>
                                Lessons
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="get-access-now">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="subscription-pricing-card-left">
                        <img src="https://lead-academy.org/wp-content/uploads/2024/03/Shapes-blue.webp" alt="Shapes-blue">
                        <div class="subscription-pricing-top-part">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <h2>1 Year Membership</h2>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="subscription-card-price">
                                        <p>£79 <del>£149</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subscription-pricing-bottom-part">
                        <ul>
                            <?php
                            $one_year_access = [
                                [
                                    'icon' => 'fa-solid fa-circle-check',
                                    'text' => '1 Year Access',
                                ],
                                [
                                    'icon' => 'fa-solid fa-circle-xmark',
                                    'text' => 'Lifetime Access',
                                ],
                                [
                                    'icon' => 'fa-solid fa-circle-xmark',
                                    'text' => 'Get Free Access For 2 Family Members',
                                ],
                                [
                                    'icon' => 'fa-solid fa-circle-xmark',
                                    'text' => 'Free CPD Accredited Hardcopy Certificate for 4 Courses',
                                ],
                                [
                                    'icon' => 'fa-solid fa-circle-check',
                                    'text' => 'Get 1000+ CPD Accredited Courses',
                                ],
                                [
                                    'icon' => 'fa-solid fa-circle-check',
                                    'text' => 'Free Course Completion PDF Certificate',
                                ],
                                [
                                    'icon' => 'fa-solid fa-circle-check',
                                    'text' => 'Free Student ID Card',
                                ],
                                [
                                    'icon' => 'fa-solid fa-circle-check',
                                    'text' => '24/7 Customer Support',
                                ],
                                [
                                    'icon' => 'fa-solid fa-circle-check',
                                    'text' => 'Tutor Support',
                                ],
                            ];
                            foreach ($one_year_access as $year_item) : ?>
                                <li>
                                    <span><i class="<?php echo $year_item['icon']; ?>"></i></span>
                                    <span><?php echo $year_item['text']; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        </div>
                        <div class="subscription-buy-now-button">
                            <button type="button"
                                    data-variation-id="380011"
                                    data-quantity="1"
                                    class="btn custom-add-to-cart subscription-btn" >
                                <?php echo __('BOOK NOW'); ?>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="subscription-pricing-card-right">
                        <img src="https://lead-academy.org/wp-content/uploads/2024/03/Shapes.webp" alt="Shapes-blue">
                        <div class="subscription-pricing-top-part subscription-pricing-top-part-right">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <h2>Lifetime Membership</h2>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="subs-best-value">
                                        <p>⭐Best Value⭐</p>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                    <div class="subscription-card-price">
                                        <p>£149 <del>£199</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subscription-pricing-bottom-part subscription-pricing-bottom-part-right">
                            <ul>
                                <?php
                                $life_time_access = [
                                    [
                                        'icon' => 'fa-solid fa-circle-check',
                                        'text' => 'Lifetime Access',
                                    ],
                                    [
                                        'icon' => 'fa-solid fa-circle-check',
                                        'text' => 'Get Free Access For 2 Family Members                                        ',
                                    ],
                                    [
                                        'icon' => 'fa-solid fa-circle-check',
                                        'text' => 'Get 1000+ CPD Accredited Courses',
                                    ],
                                    [
                                        'icon' => 'fa-solid fa-circle-check',
                                        'text' => 'Free CPD Accredited PDF Certificate for 10 Courses',
                                    ],
                                    [
                                        'icon' => 'fa-solid fa-circle-check',
                                        'text' => 'Free CPD Accredited Hardcopy Certificate for 4 Courses',
                                    ],
                                    [
                                        'icon' => 'fa-solid fa-circle-check',
                                        'text' => 'Free Course Completion PDF Certificate',
                                    ],
                                    [
                                        'icon' => 'fa-solid fa-circle-check',
                                        'text' => 'Free Student ID Card',
                                    ],
                                    [
                                        'icon' => 'fa-solid fa-circle-check',
                                        'text' => '24/7 Customer Support',
                                    ],
                                    [
                                        'icon' => 'fa-solid fa-circle-check',
                                        'text' => 'Tutor Support',
                                    ],
                                ];
                                foreach ($life_time_access as $life_time_item) : ?>
                                    <li>
                                        <span><i class="<?php echo $life_time_item['icon']; ?>"></i></span>
                                        <span><?php echo $life_time_item['text']; ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="subscription-buy-now-button">
                            <button type="button"
                                    data-variation-id="380015"
                                    data-quantity="1"
                                    class="btn custom-add-to-cart subscription-btn" >
                                <?php echo __('BOOK NOW'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="subscription-course-cate">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="subscription-course-cate-text">
                        <h2>You may also be interested in our other training courses</h2>
                        <p>We specialise in online training and offer over 160 certified courses covering the following areas of compliance and personal development:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $subs_course_cate_items = [
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Food-Hygiene-min.webp',
                        'cate_title'   => 'Food Hygiene',
                        'cate_url'     => '/category/food-hygiene',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Health-Safety-min.webp',
                        'cate_title'   => 'Health & Safety',
                        'cate_url'     => '/category/health-and-safety',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Safeguarding-People-min.webp',
                        'cate_title'   => 'Safeguarding People',
                        'cate_url'     => '/category/health-and-social-care/safeguarding',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Photography-min.webp',
                        'cate_title'   => 'Photography',
                        'cate_url'     => '/category/personal-development/photography',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Education-Courses-min.webp',
                        'cate_title'   => 'Education & Courses',
                        'cate_url'     => '/category/teaching-and-education',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Business-Skill-min.webp',
                        'cate_title'   => 'Business Skill',
                        'cate_url'     => '/category/leadership-and-management/business-management',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Financial-Services-min.webp',
                        'cate_title'   => 'Financial Services',
                        'cate_url'     => '/category/accounting-and-bookkeeping',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Animal-Carev-min.webp',
                        'cate_title'   => 'Animal Care',
                        'cate_url'     => '/category/animal-care',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Personal-Development-min.webp',
                        'cate_title'   => 'Personal Development',
                        'cate_url'     => '/category/personal-development',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Accounting-min.webp',
                        'cate_title'   => 'Accounting',
                        'cate_url'     => '/category/accounting-and-bookkeeping',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Counselling-Psychology-min.webp',
                        'cate_title'   => 'Counselling & Psychology',
                        'cate_url'     => '/category/counselling-and-psychology',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Leadership-Management-min.webp',
                        'cate_title'   => 'Leadership & Management',
                        'cate_url'     => '/category/leadership-and-management',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/beauty-Makeup-min.webp',
                        'cate_title'   => 'Beauty & Makeup',
                        'cate_url'     => '/category/makeup-and-beauty',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/language-min.webp',
                        'cate_title'   => 'Language',
                        'cate_url'     => '/category/language',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Project-management-min.webp',
                        'cate_title'   => 'Life coaching',
                        'cate_url'     => '/category/personal-development/life-coaching',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Health-Fitness-min.webp',
                        'cate_title'   => 'Health & Fitness',
                        'cate_url'     => '/category/sports-and-fitness',
                    ],
                ];
                foreach( $subs_course_cate_items as $cate_item ) : ?>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                    <div class="subs-course-cate-box">
                        <img src="<?php echo $cate_item['cate_img']; ?>" alt="<?php echo $cate_item['cate_title']; ?>">
                        <h3><a href="<?php echo $cate_item['cate_url']; ?>"><?php echo $cate_item['cate_title']; ?></a></h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="fsc-partners" class="subscription-trusted-by">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Trusted By</h2>
                    <p>We work with 250+ leading universities and companies globally</p>
                    <div class="container">
                        <div class="owl-carousel owl-fsc-partners">
                            <?php
                            $partners = [
                                [
                                    'img_alt' => 'qls-logo',
                                    'img_src' => '/wp-content/uploads/2022/12/qls-logo.png',
                                ],
                                [
                                    'img_alt' => 'rospa-logo',
                                    'img_src' => '/wp-content/uploads/2022/12/rospa-logo.png',
                                ],
                                [
                                    'img_alt' => 'cpd-logo',
                                    'img_src' => '/wp-content/uploads/2022/12/cpd-logo.png',
                                ],
                                [
                                    'img_alt' => 'Signature-logo',
                                    'img_src' => '/wp-content/uploads/2022/12/Signature-logo-1.png',
                                ],
                                [
                                    'img_alt' => 'iphm-logo',
                                    'img_src' => '/wp-content/uploads/2022/12/iphm-logo-1.png',
                                ],
                                [
                                    'img_alt' => 'Pearson-logo',
                                    'img_src' => '/wp-content/uploads/2022/12/Pearson.png',
                                ],
                                [
                                    'img_alt' => 'Edexcel-logo',
                                    'img_src' => '/wp-content/uploads/2022/12/Edexcel.png',
                                ],
                            ];
                            foreach( $partners as $partner ){
                                ?>
                                <div class="fsc-partner-item">
                                    <img src="<?php echo $partner['img_src']?>" alt="<?php echo $partner['img_alt']?>">
                                </div>
                                <?php
                            }
                            ?>
                        </div>	<!-- end owl -->    
                    </div>	<!-- end container --> 
                </div>
            </div>
        </div>
    </section>
    <?php 
    $faq = [
        [
            'faq_title'  => 'How many courses can I study?',
            'faq_text'   => 'As soon as you become our Limitless Learning member, you will gain access to our entire library of over 700+ courses. Please note that our premium courses or Ofqual regulated courses are not included in this membership.',
        ],
        [
            'faq_title'  => 'Are there any limitations?',
            'faq_text'   => 'The only limitation that you will face in this membership is that you will not be able to do any of our premium courses or Ofqual regulated courses. Other than this, there are no limitations at all. You can do as many courses as you want at your own schedule.',
        ],
        [
            'faq_title'  => 'What is the process of cancelling Limitless Learning membership?',
            'faq_text'   => 'You can effortlessly cancel your membership anytime from your account. Alternatively, you can also contact our friendly customer support team and cancel your membership.',
        ],
        [
            'faq_title'  => 'When I cancel my Limitless Learning membership, do I lose access to my courses and certifications?',
            'faq_text'   => 'Absolutely not. All of your completed courses will remain in your account for 12 months since your most recent payment. You will also have access to your courses, and the certificate you will receive will remain valid.',
        ],
        [
            'faq_title'  => 'What are the perks of Limitless Learning membership?',
            'faq_text'   => '<ul>
                                <li>Courses are accredited by the CPD UK and IPHM</li>
                                <li>High quality E-learning study materials</li>
                                <li>24/7 instant access to the learning portal</li>
                                <li>1-Year Access to the subscription</li>
                                <li>Save money and time by studying at your convenient time</li>
                                <li>Have access to a tutor whenever you are in need</li>
                            </ul>',
        ],
        [
            'faq_title'  => 'How do I become a Limitless Learning member?',
            'faq_text'   => 'It is a piece of cake. Simply click on the <button type="button" data-variation-id="365273" data-quantity="1" class="btn custom-add-to-cart" >Get Access Now</button> button. Fill up your details at the checkout. Your membership will be activated instantly.',
        ],
        [
            'faq_title'  => 'Do I get assistance?',
            'faq_text'   => 'Of course, you will receive extensive support from our customer support team, who are there for you 24/7.',
        ],
        [
            'faq_title'  => 'What is the Payment Schedule?',
            'faq_text'   => 'We will take payments from you yearly on the day that you subscribe to our membership.',
        ],
        [
            'faq_title'  => 'What are the requirements of becoming a Limitless Learning member?',
            'faq_text'   => 'You need to become of the age of 16 at least to become eligible for Limitless Learning membership.',
        ],
        

        ];
        
        if (is_array($course_faqs) &&  count( $course_faqs ) > 1 ) {
            $display_faqs = $course_faqs;
        }else{
            $display_faqs = $faq;
        }
        ?>
    <section id="msg-faq">
        <div id="la-single-faq" class="d-xl-block overflow-hidden">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="accordion" id="accordionPanelsStayOpenExample">
            <?php
            for($x=0;$x<count($display_faqs);$x++){
            ?>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading<?=$x?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$x?>" aria-expanded="true" aria-controls="panelsStayOpen-collapse<?=$x?>"><?=$display_faqs[$x]['faq_title']?></button>
                    </h3>
                    <div id="panelsStayOpen-collapse<?=$x?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?=$x?>">
                        <div class="accordion-body">
                            <p><?=$display_faqs[$x]['faq_text']?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section id="subscription-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 align-self-center">
                    <h2>Start your Unlimited Learning membership today for only £79.00</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 align-self-center">
                    <div class="subscription-sticky-button">
                        <button type="button"
                                data-variation-id="380011"
                                data-quantity="1"
                                class="btn custom-add-to-cart subscription-btn-fixed" >
                            <?php echo __('Start Now'); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>