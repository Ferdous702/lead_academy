<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" />
<section id="past-papers-fun-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <!-- <h1>WELCOME TO</h1> -->
                <h1 class="past-papers-fun-title">FUNCTIONAL SKILLS PAST PAPERS</h1>
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/Screenshot-13.webp" alt="Review.io">
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-8 col-xl-8"></div>
        </div>
    </div>
</section>
<section id="past-papers-fun-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                <div class="past-paper-all-title-text">
                    <h2>Our Functional Skills Past Papers</h2>
                    <p>Boost your chances of scoring a higher mark in your functional skills test with our extensive range of past papers available at level 1 & 2, for all the subjects: English, Maths & ICT. All our past papers are supplemented with exclusive model solutions including video solutions that will help you ace your exam by all means.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
        </div>
        <div class="row">
            <?php
            $past_paper_card = [
                [
                    'img'    => '/wp-content/uploads/0223/12/Functional-Skills-English-Level-1-1-1.webp',
                    'title'  => 'Level 1 Functional Skills English',
                    'level'  => 'Level 1',
                    'url'    => '/functional-skills-english-level-1-past-papers',
                ],
                [
                    'img'    => '/wp-content/uploads/0223/12/Functional-Skills-English-Level-2-1.webp',
                    'title'  => 'Level 2 Functional Skills English',
                    'level'  => 'Level 2',
                    'url'    => '/functional-skills-english-level-2-past-papers',
                ],
                [
                    'img'    => '/wp-content/uploads/0223/12/Functional-Skills-Maths-Level-2-1.webp',
                    'title'  => 'Functional Skills Maths Level 1',
                    'level'  => 'Level 1',
                    'url'    => '/functional-skills-maths-level-1-past-papers',
                ],
                [
                    'img'    => '/wp-content/uploads/0223/12/Functional-Skills-Maths-Level-2-1-1.webp',
                    'title'  => 'Functional Skills Maths Level 2',
                    'level'  => 'Level 2',
                    'url'    => '/functional-skills-maths-level-2-past-papers',
                ],
            ];
            foreach ($past_paper_card as $past_paper_card_item) :
            ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="past-paper-card">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <img src="<?php echo $past_paper_card_item['img'] ?>" alt="<?php echo $past_paper_card_item['title'] ?>">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 align-self-center">
                                <h3><?php echo $past_paper_card_item['level'] ?></h3>
                                <div class="past-paper-card-title">
                                    <h4><?php echo $past_paper_card_item['title'] ?></h4>
                                    <h5>Past Papers</h5>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 align-self-center">
                                <a href="<?php echo $past_paper_card_item['url'] ?>">View Past Papers</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="past-papers-fun-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="past-paper-all-title-text">
                    <h2>Functional Skills Courses</h2>
                    <p>Not feeling confident? Enrol into our comprehensive range of functional skills course to to brush up your English, Maths or ICT skills and surpass your exam with flying colours</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
        </div>
        <div class="fs-courses-tabs">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <button class="fs-courses-tab-link" onclick="openCategory(event, 'Math')">Math</button>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <button class="fs-courses-tab-link" onclick="openCategory(event, 'English')">English</button>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                    <button class="fs-courses-tab-link" onclick="openCategory(event, 'Digital')">Digital</button>
                </div>
            </div>
        </div>
        <div id="Math" class="fs-courses-tab-content">
            <div class="row">
                <?php
                $fs_course_math = [
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2022/10/Maths-Level-4.webp',
                        'course_title'          => 'Functional Skills Maths Level 2 Online Course',
                        'course_regular_price'  => '£320.00',
                        'course_sale_price'     => '£130.00',
                        'course_url'            => 'https://lead-academy.org/course/functional-skills-maths-level-2',
                    ],
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2022/10/Maths-Level-3.webp',
                        'course_title'          => 'Functional Skills Maths Level 1 Online Course',
                        'course_regular_price'  => '£320.00',
                        'course_sale_price'     => '£130.00',
                        'course_url'            => 'https://lead-academy.org/course/functional-skills-maths-level-1',
                    ],
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2023/05/Functional-Skills-Maths-Entry-Level-3-Online-Course.webp',
                        'course_title'          => 'Functional Skills Maths Entry Level 3 Online Course',
                        'course_regular_price'  => '£205.00',
                        'course_sale_price'     => '£149.00',
                        'course_url'            => 'https://lead-academy.org/course/functional-skills-maths-entry-level-3',
                    ],
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-2-Maths-Online-Course.webp',
                        'course_title'          => 'Functional Skills Entry Level 2 Maths Online Course',
                        'course_regular_price'  => '£205.00',
                        'course_sale_price'     => '£149.00',
                        'course_url'            => 'https://lead-academy.org/course/entry-level-2-maths',
                    ],
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-Maths-Course-Online.webp',
                        'course_title'          => 'Functional Skills Entry Level 1 Maths Course Online',
                        'course_regular_price'  => '£370.00',
                        'course_sale_price'     => '£130.00',
                        'course_url'            => 'https://lead-academy.org/course/functional-skills-entry-level-1-maths',
                    ],
                ];
                foreach ($fs_course_math as $fs_course_math_item) :
                ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="fs-courses-course-box-card">
                            <img src="<?php echo $fs_course_math_item['course_img'] ?>" alt="<?php echo $fs_course_math_item['course_title'] ?>">
                            <h3><a href="<?php echo $fs_course_math_item['course_url'] ?>"><?php echo $fs_course_math_item['course_title'] ?></a></h3>
                            <div class="fs-courses-course-box-card-price">
                                <del><?php echo $fs_course_math_item['course_regular_price'] ?></del>
                                <p><?php echo $fs_course_math_item['course_sale_price'] ?></p>
                            </div>
                            <a class="fs-course-box-card-button" href="<?php echo $fs_course_math_item['course_url'] ?>">View Course</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="English" class="fs-courses-tab-content">
            <div class="row">
                <?php
                $fs_course_english = [
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2022/10/Functional-Skills-English-Level-2-Online-Course-with-Exam.webp',
                        'course_title'          => 'Level 2 Functional Skills English Course Online',
                        'course_regular_price'  => '£330.00',
                        'course_sale_price'     => '£130.00',
                        'course_url'            => 'https://lead-academy.org/course/functional-skills-english-level-2',
                    ],
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2022/10/Functional-Skills-English-Level-1-Online-Course-with-Exam.webp',
                        'course_title'          => 'Level 1 Functional Skills English Course Online',
                        'course_regular_price'  => '£330.00',
                        'course_sale_price'     => '£130.00',
                        'course_url'            => 'https://lead-academy.org/course/functional-skills-english-level-1',
                    ],
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-3-Online-Course.webp',
                        'course_title'          => 'Functional Skills English Entry Level 3 Online Course',
                        'course_regular_price'  => '£205.00',
                        'course_sale_price'     => '£149.00',
                        'course_url'            => 'https://lead-academy.org/course/functional-skills-english-entry-level-3',
                    ],
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-2-Course-Online.webp',
                        'course_title'          => 'Functional Skills English Entry Level 2 Course Online',
                        'course_regular_price'  => '£205.00',
                        'course_sale_price'     => '£149.00',
                        'course_url'            => 'https://lead-academy.org/course/entry-level-2-english-course',
                    ],
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-English-Course-Online.webp',
                        'course_title'          => 'Functional Skills Entry Level 1 English Course Online',
                        'course_regular_price'  => '£205.00',
                        'course_sale_price'     => '£149.00',
                        'course_url'            => 'https://lead-academy.org/course/entry-level-1-english-course',
                    ],
                ];
                foreach ($fs_course_english as $fs_course_english_item) :
                ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="fs-courses-course-box-card">
                            <img src="<?php echo $fs_course_english_item['course_img'] ?>" alt="<?php echo $fs_course_english_item['course_title'] ?>">
                            <h3><a href="<?php echo $fs_course_english_item['course_url'] ?>"><?php echo $fs_course_english_item['course_title'] ?></a></h3>
                            <div class="fs-courses-course-box-card-price">
                                <del><?php echo $fs_course_english_item['course_regular_price'] ?></del>
                                <p><?php echo $fs_course_english_item['course_sale_price'] ?></p>
                            </div>
                            <a class="fs-course-box-card-button" href="<?php echo $fs_course_english_item['course_url'] ?>">View Course</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="Digital" class="fs-courses-tab-content">
            <div class="row">
                <?php
                $fs_course_digital = [
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2023/08/Digital-Functional-Skills-Entry-Level-3-Online-Course.webp',
                        'course_title'          => 'Digital Functional Skills Entry Level 3 – Online Course and Exam',
                        'course_regular_price'  => '205.00',
                        'course_sale_price'     => '£149.00',
                        'course_url'            => 'https://lead-academy.org/course/digital-functional-skills-entry-level-3',
                    ],
                    [
                        'course_img'            => 'https://lead-academy.org/wp-content/uploads/2023/08/Digital-Functional-Skills-Level-1-Online-Course-1.webp',
                        'course_title'          => 'Digital Functional Skills Level 1 – Online Course and Exam',
                        'course_regular_price'  => '205.00',
                        'course_sale_price'     => '£149.00',
                        'course_url'            => 'https://lead-academy.org/course/digital-functional-skills-level-1',
                    ],
                ];
                foreach ($fs_course_digital as $fs_course_digital_item) :
                ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="fs-courses-course-box-card">
                            <img src="<?php echo $fs_course_digital_item['course_img'] ?>" alt="<?php echo $fs_course_digital_item['course_title'] ?>">
                            <h3><a href="<?php echo $fs_course_digital_item['course_url'] ?>"><?php echo $fs_course_digital_item['course_title'] ?></a></h3>
                            <div class="fs-courses-course-box-card-price">
                                <del><?php echo $fs_course_digital_item['course_regular_price'] ?></del>
                                <p><?php echo $fs_course_digital_item['course_sale_price'] ?></p>
                            </div>
                            <a class="fs-course-box-card-button" href="<?php echo $fs_course_digital_item['course_url'] ?>">View Course</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section id="past-papers-fun-4">
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                <div class="past-paper-all-title-text">
                    <h2>Free Mock Test</h2>
                    <p>Take our free mock tests, a replicated version of the main exam that will help you assess the effectiveness of your preparation and provide you with a better perspective regarding the questions you have to face.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
        </div>
        <div class="row">
            <?php
            $fs_past_paper = [
                [
                    'img'      => 'https://lead-academy.org/wp-content/uploads/0223/12/Functional-Skills-English-Level-1-1.webp',
                    'title'    => 'Level 1 Functional Skills English',
                    'url'      => 'https://lead-academy.org/course/functional-skills-english-level-1-free-mock-test',
                ],
                [
                    'img'      => 'https://lead-academy.org/wp-content/uploads/0223/12/Functional-Skills-English-Level-2.webp',
                    'title'    => 'Level 2 Functional Skills English',
                    'url'      => 'https://lead-academy.org/course/functional-skills-english-level-2-free-mock-test',
                ],
                [
                    'img'      => 'https://lead-academy.org/wp-content/uploads/0223/12/Functional-Skills-Math-Level-1.webp',
                    'title'    => 'Functional Skills Maths Level 1',
                    'url'      => 'https://lead-academy.org/course/functional-skills-maths-level-1-free-mock-test',
                ],
                [
                    'img'      => 'https://lead-academy.org/wp-content/uploads/0223/12/Functional-Skills-Math-Level-2.webp',
                    'title'    => 'Functional Skills Maths Level 2',
                    'url'      => 'https://lead-academy.org/course/functional-skills-maths-level-2-free-mock-test',
                ],
            ];
            foreach ($fs_past_paper as $fs_past_paper_item) :
            ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="free-mock-test-card">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                                <img src="<?php echo $fs_past_paper_item['img'] ?>" alt="<?php echo $fs_past_paper_item['title'] ?>">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 align-self-center">
                                <h3><?php echo $fs_past_paper_item['title'] ?></h3>
                                <p>Past Papers</p>
                                <p>Free</p>
                                <div class="past-paper-star-icon">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                </div>
                                <a href="<?php echo $fs_past_paper_item['url'] ?>">Free Mock Test</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</section>
<section id="past-papers-fun-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                <div class="past-paper-all-title-text">
                    <h2>Our experts will help you choose a course</h2>
                    <p>Overcome your doubts and queries regarding any of our courses with the help from our extensive range of experienced and expert customer support team.</p>
                </div>
                <button class="staffpopupButton">SPEAK TO AN ADVISOR</button>
            </div>
            <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
        </div>
    </div>
</section>
<!--Why You Should Train With Lead Academy-->
<section id="bundle-why-should-train">
    <div class="container">
        <div class="row">
            <div class="past-paper-all-title-text">
                <h2>Why You Should Train With <br> Lead Academy</h2>
            </div>
            <?php
            $fs_past_paper_train_with = [
                [
                    'icon'      => 'https://lead-academy.org/wp-content/uploads/2023/05/website.webp',
                    'title'     => 'Wide range of courses',
                    'text'      => 'Lead Academy offers a wide range of online courses in a number of different categories to match your specific interest',
                ],
                [
                    'icon'      => 'https://lead-academy.org/wp-content/uploads/2023/05/clipboard.webp',
                    'title'     => 'Comprehensive Syllabus',
                    'text'      => 'Our courses are designed and taught by expert tutors and industry experts that will help you gain solid skills and credentials to shape your career with a positive outlook.',
                ],
                [
                    'icon'      => 'https://lead-academy.org/wp-content/uploads/2023/05/comments.webp',
                    'title'     => 'Flexible Assessment',
                    'text'      => 'Upon successful completion of the evaluation, you will receive an instant feedback of your result.',
                ],
                [
                    'icon'      => 'https://lead-academy.org/wp-content/uploads/2023/05/support.webp',
                    'title'     => 'Expert Tutor Support',
                    'text'      => 'Upon enrollment to any of our courses, you will receive access to our expert and experienced tutor support and guidance whenever you need.',
                ],
                [
                    'icon'      => 'https://lead-academy.org/wp-content/uploads/2023/05/certificate-1-1.webp',
                    'title'     => 'Comprehensive Syllabus',
                    'text'      => 'The syllabus of each course is designed to meet the required quality standards and benchmarks.',
                ],
                [
                    'icon'      => 'https://lead-academy.org/wp-content/uploads/2023/05/guarantee.webp',
                    'title'     => 'Active Customer Support',
                    'text'      => 'We have active customer support in the form of live chat that you can access and enjoy 24/7.',
                ],
            ];
            foreach ($fs_past_paper_train_with as $fs_past_paper_train_with_item) :
            ?>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="bundle-w-s-t-box">
                        <img src="<?php echo $fs_past_paper_train_with_item['icon'] ?>" alt="<?php echo $fs_past_paper_train_with_item['title'] ?>">
                        <h3><?php echo $fs_past_paper_train_with_item['title'] ?></h3>
                        <p><?php echo $fs_past_paper_train_with_item['text'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="past-papers-fun-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <div class="past-paper-all-title-text">
                    <h2>What Our Learner Think</h2>
                    <p>We are extremely proud of what our learners have achieved by taking our extensive range of courses. Click below to read out some of their positive learning experiences with Lead Academy</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
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

<!-- FSC Partners section -->
<section id="fsc-partners">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <div class="past-paper-all-title-text">
                <h2>Trusted By</h2>
                <p>Lead by a team trusted by the most renowned and exciting companies across the globe! </p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
    </div>
    <div class="fsc-container">
        <div class="owl-carousel owl-fsc-partners">
            <?php
            $partners = [
                [
                    'img_alt' => 'McDonalds-logo',
                    'img_src' => '/wp-content/uploads/2022/09/McDonalds.png',
                ],
                [
                    'img_alt' => 'MTN-logo',
                    'img_src' => '/wp-content/uploads/2022/09/MTN.png',
                ],
                [
                    'img_alt' => 'NHS-logo',
                    'img_src' => '/wp-content/uploads/2022/09/NHS.png',
                ],
                [
                    'img_alt' => 'uwtsd-logo',
                    'img_src' => '/wp-content/uploads/2022/09/uwtsd.png',
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
</section>

<!-- Form Popup -->
<div class="staff-training-flip-box" id="staffpopup">
    <div class="popup-content">
        <span class="staffclose">&times;</span>
        <h2>SPEAK TO US TODAY</h2>
        <p><?php echo do_shortcode('[gravityform id="82" title="false" description="false" ajax="true"]'); ?></p>
    </div>
</div>

<script>
    //SPEAK TO US TODAY Popup
    const popup = document.getElementById('staffpopup');
    const popupButtons = document.querySelectorAll('.staffpopupButton');
    const close = document.getElementsByClassName('staffclose')[0];

    popupButtons.forEach(button => {
        button.addEventListener('click', () => {
            popup.style.display = 'block';
        });
    });

    close.onclick = function() {
        popup.style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    }

    function openCategory(event, categoryName) {
        var i, tabcontent, tablinks;

        // Hide all tab contents
        tabcontent = document.getElementsByClassName("fs-courses-tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Remove the active class from all fs-courses-tabs
        tablinks = document.getElementsByClassName("fs-courses-tab-link");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab content and add an active class to the clicked tab
        document.getElementById(categoryName).style.display = "block";
        event.currentTarget.className += " active";
    }

    // Display the first tab content by default
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector(".fs-courses-tab-link").click();
    });
</script>

<?php
get_footer();
?>