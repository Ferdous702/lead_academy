<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<section id="health-sef-part-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="health-blur-bg-text">
                    <h1>Online Health & Safety Training Courses</h1>
                    <p>Protect yourself and your workforce by understanding workplace risk and how to reduce them</p>
                </div>
                <div class="review-io-img">
                    <img src="https://lead-academy.org/wp-content/uploads/0223/12/reviews.io_.webp" alt="review.io">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
        </div>
    </div>
</section>
<section id="health-sef-part-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center">
                <p>Our CPD accredited online Health & Safety Training courses are specially designed to help people learn new skills and knowledge, or refresh existing first aid skills. Our courses are also recognised by IPHM & QLS.</p>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/CPD-min-1.webp" alt="CPD Logo">
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2 col-xl-2">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/QLS-min-1.webp" alt="QLS Logo">
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-2 col-xl-2">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/IPHM-logo-min-1.webp" alt="IPHM Logo">
            </div>
        </div>
    </div>
</section>
<section id="health-sef-part-3">
    <div class="container">
        <h2>Our Online Health & Safety Courses</h2>
        <div class="row">
            <?php
            $health_sef_course = [
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Manual-Handling.webp',
                    'title'         => 'Manual Handling Training Course Online',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/manual-handling-training',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Workplace-Health-Safety.webp',
                    'title'         => 'Workplace Health & Safety Training Course',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/workplace-health-safety-training',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Asbestos.webp',
                    'title'         => 'Asbestos<br> Awareness Course',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/asbestos-awareness-course',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Mental-Health.webp',
                    'title'         => 'Mental Health Awareness Course Online',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/mental-health-awareness',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Safeguarding-Adult.webp',
                    'title'         => 'Safeguarding Adults Course Online',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/safeguarding-adults',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Fire-Marshal.webp',
                    'title'         => 'Fire Marshal Training Course Online',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/fire-marshal-training',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Basic-Life-Support.webp',
                    'title'         => 'Basic Life Support Online Training Course',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/basic-life-support-online-training-course',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Fire-Extinguisher.webp',
                    'title'         => 'Fire Extinguisher Training Course Online',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/fire-extinguisher-training',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Risk-Assessment.webp',
                    'title'         => 'Risk Assessment<br> Course',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/risk-assessment-course',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Personal-Protective-Equipment.webp',
                    'title'         => 'Personal Protective Equipment Course Online',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/personal-protective-equipment',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Infection-Control.webp',
                    'title'         => 'Infection Control Training Course Online',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/infection-control-training',
                ],
                [
                    'img'           => 'https://lead-academy.org/wp-content/uploads/0223/12/Control-of-Substances-Hazardous-to-Health.webp',
                    'title'         => 'Control of Substances Hazardous to Health',
                    'regular_price' => '£60.00',
                    'sale_price'    => '£29.00',
                    'url'           => 'https://lead-academy.org/course/control-of-substances-hazardous-to-health-coshh',
                ],
            ];
            foreach ($health_sef_course as $health_sef_item) : ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="health-sef-course-card">
                        <div class="h-course-card-top">
                            <img src="<?php echo $health_sef_item['img']; ?>" alt="<?php echo $health_sef_item['title']; ?>">
                        </div>
                        <div class="h-course-card-bottom">
                            <h3><a href="<?php echo $health_sef_item['url']; ?>"><?php echo $health_sef_item['title']; ?></a></h3>
                            <div class="h-course-price">
                                <del><?php echo $health_sef_item['regular_price']; ?></del>
                                <p><?php echo $health_sef_item['sale_price']; ?></p>
                                <span>(Ex. VAT)</span>
                            </div>
                            <a class="btn" href="<?php echo $health_sef_item['url']; ?>">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="all-course-btn">
            <a href="/category/health-and-safety">View All Courses</a>
        </div>
    </div>
</section>
<section id="health-sef-part-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="review-title">
                    <h2>What Our Learner Think</h2>
                    <p>We’re very proud of what our learners achieve, here you can read about some of
                        their learning journeys with Lead Academy.
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
        </div>
    </div>
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
</section>
<section id="fsc-partners" class="health-sef-part-5">
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
                        foreach ($partners as $partner) {
                        ?>
                            <div class="fsc-partner-item">
                                <img src="<?php echo $partner['img_src'] ?>" alt="<?php echo $partner['img_alt'] ?>">
                            </div>
                        <?php
                        }
                        ?>
                    </div> <!-- end owl -->
                </div> <!-- end container -->
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
        'faq_text'   => '
                    <ul>
                        <li>Courses are accredited by the CPD UK and IPHM</li>
                        <li>High quality E-learning study materials</li>
                        <li>24/7 instant access to the learning portal</li>
                        <li>1-Year Access to the subscription</li>
                        <li>Save money and time by studying at your convenient time</li>
                        <li>Have access to a tutor whenever you are in need</li>
                    </ul>
                ',
    ],
    [
        'faq_title'  => 'How do I become a Limitless Learning member?',
        'faq_text'   => 'It is a piece of cake. Simply click on the Get Access Now button. Fill up your details at the checkout. Your membership will be activated instantly.',
    ],
    [
        'faq_title'  => 'Do I get assistance?',
        'faq_text'   => 'Of course, you will receive extensive support from our customer support team, who are there for you 24/7.',
    ],
    [
        'faq_title'  => 'What is the Payment Schedule?',
        'faq_text'   => 'We will take payments from you yearly on the day that you subscribe to our membership.',
    ],

];

if (is_array($course_faqs) && count($course_faqs) > 1) {
    $display_faqs = $course_faqs;
} else {
    $display_faqs = $faq;
}
?>
<section id="msg-faq">
    <div id="la-single-faq" class="d-xl-block overflow-hidden">
        <h2 class="text-center">Frequently Asked Questions
            About Our Online Health & Safety Courses</h2>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <?php
            for ($x = 0; $x < (is_array($display_faqs) ? count($display_faqs) : 0); $x++) {
            ?>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading<?= $x ?>">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?= $x ?>" aria-expanded="true" aria-controls="panelsStayOpen-collapse<?= $x ?>"><?= $display_faqs[$x]['faq_title'] ?></button>
                    </h3>
                    <div id="panelsStayOpen-collapse<?= $x ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?= $x ?>">
                        <div class="accordion-body">
                            <p><?= $display_faqs[$x]['faq_text'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>