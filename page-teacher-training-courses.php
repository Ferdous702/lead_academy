<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header();
$current_page_id    = get_the_ID();
$course_faqs         = get_post_meta($current_page_id, 'product_faqs', true);
$course_reviews     = get_post_meta($current_page_id, 'la_course_reviews', true);
$faq = [
    [
        'faq_title'      => 'What is a level 5 diploma equivalent to?',
        'faq_text'   => 'The Level 5 Diploma in Education and Training qualification is equivalent to the Certificate of Education (CertEd). Additionally, it is equivalent to the second year of a bachelor’s degree in the UK.',
    ],
    [
        'faq_title'      => 'What is a level 4 certificate in education and training equivalent to in the UK?',
        'faq_text'   => 'Level 4 qualifications are regarded as advanced learning and are equivalent to the first year of a bachelor’s degree.',
    ],
    [
        'faq_title'      => 'What is a level 3 award in education and training equivalent to in the UK?',
        'faq_text'   => 'Level 4 qualifications are equivalent to A level and other equivalent qualifications.',
    ],
    [
        'faq_title'      => 'What can I do with a Level 5,4, and 3 certificate in education and training?',
        'faq_text'   => 'You can advance to further vocational study and earn a Bachelor of Arts in Education or a BA in Education (BEd). Besides these progression opportunities, you can also enhance your resume and increase your chances of getting hired. Additionally, with a level 5 diploma, you can apply for Qualified Teacher Status (QTLS)',
    ],
    [
        'faq_title'      => 'What is a BTEC equivalent to?',
        'faq_text'   => 'BTEC Firsts are Level 2 qualifications, which are the same as GCSE coursework. The level of BTEC Nationals is Level 3, which is the same as A-level study. BTEC Higher Nationals are at the same academic level as the first two years of a degree program (Level 4/5 studies).',
    ],
    [
        'faq_title'      => 'Who should complete the course\'s observations for the practical evaluation of Level 5 and Level 4?',
        'faq_text'   => 'This witness testimony must be provided by an expert with a Level 5 Diploma in Education and Training for Level 5 and a Level 4 Certificate in Education and Training for Level 4. For an additional charge of £250 + VAT for 8 hours (level 5) and £175 + VAT for 4 hours (level 4), if you’d prefer, we can also assist you by providing an expert witness.',
    ],
    [
        'faq_title'      => 'How is the course assessed?',
        'faq_text'   => 'A series of assessments will be used to evaluate you, including the submission of assignments and a practical teaching evaluation that will gauge your overall skills and knowledge gained while undertaking the course.',
    ],
    [
        'faq_title'      => 'How long does the course take?',
        'faq_text'   => 'Each course consists of different learning hours depending on the levels;
<br><br>
BTEC Level 3 Award in Education and Training<br>
Total Qualification Time (TQT): 120<br>
Guided Learning Hours (GLH): 48<br>
<br>
BTEC Level 4 Certificate in Education and Training<br>
Total Qualification Time (TQT): 360<br>
Guided Learning Hours (GLH): 140<br>
<br>
BTEC Level 5 Diploma in Education and Training<br>
Total Qualification Time (TQT): 1200<br>
Guided Learning Hours (GLH): 360',
    ],
    [
        'faq_title'      => 'Is this course recognised?',
        'faq_text'   => 'This course is accredited by NCFE, making it widely recognised and accepted across all international platforms.',
    ],
    [
        'faq_title'      => 'What is the awarding body for this course?',
        'faq_text'   => 'This course is independently accredited by NCFE and regulated by Ofqual. It is a nationally recognised qualification that will help you pave your path to higher education and fulfil the entry requirements of any skilled-oriented job.',
    ],
    [
        'faq_title'      => 'How many assignments are included in this course?',
        'faq_text'   => 'For each part of the award, students must complete a number of brief assignments. You will be given a specific amount of assignments to submit, depending on the training level.',
    ],
    [
        'faq_title'      => 'How can the course be accessed?',
        'faq_text'   => 'You will receive an email with your login information once you have successfully registered for the course. This will provide you access to your online training course and the course materials.',
    ],
    [
        'faq_title'      => 'What is the grading system for the course?',
        'faq_text'   => 'This course will be internally graded by the course instructor and the overall qualification grade is “pass.”',
    ],
    [
        'faq_title'      => 'Should I obtain the level 3 award or the level 4 certificate before taking the level 5 course?',
        'faq_text'   => 'It is not necessary to have finished the level 3 award in education and training or the level 4 certificate in education and training before enrolling in the level 5 course.',
    ],
    [
        'faq_title'      => 'Will the level 5 course qualify me for the Qualified Teacher Status (QTLS)?',
        'faq_text'   => 'The Level 5 Diploma in Education and Training will provide you with the opportunity and skills to apply for QTLS, while it does not automatically grant you this status.',
    ],
    [
        'faq_title'      => 'For how long can I access these courses?',
        'faq_text'   => 'You have a year to access this course, so you can complete it at your own pace and convenience.',
    ],
    [
        'faq_title'      => 'Can I use a smartphone or a tablet to study?',
        'faq_text'   => 'With no time limit on completion, our online courses are accessible for life. With a safe internet connection, every course is fully accessible from a tablet, phone, or laptop.',
    ],
    [
        'faq_title'      => 'What will I receive once the course is over?',
        'faq_text'   => 'You will be able to order the NCFE-accredited certificate, which is governed by Ofqual, after completing the assignments and the teaching assessment.',
    ],
    [
        'faq_title'      => 'Education and training?',
        'faq_text'   => 'Education and training levels differ in the depth of knowledge and skills acquired. Level 3 is foundational, Level 4 is subject-specific, and Level 5 is for higher expertise. Completing Level 5 can lead to Qualified Teacher Learning and Skills status. To be able to teach Level 2, one must undertake Level 3; for both Level 2 and 3, Level 4 must be completed; and for all three levels, one must take Level 5.',
    ],
    [
        'faq_title'      => 'What is the difference between QTS and QTLS?',
        'faq_text'   => 'QTS is for teaching up to age 16, while QTLS covers beyond that. QTS is necessary for teaching young students, while QTLS is ideal for teaching at a higher education level. QTS requires an intensive course with work practice, while QTLS requires sector competence and 100 hours of teaching experience.',
    ]
];

if (is_array($course_faqs) && count($course_faqs) > 1) {
    $display_faqs = $course_faqs;
} else {
    $display_faqs = $faq;
}
?>
<style>
    #gcse-hero.education-training {
        background-image: url('/wp-content/uploads/2023/02/BG.webp');
    }

    #gcse-why-train>div>div.col-md-6.text-center>div>img {
        width: 33%;
    }
</style>

<!-- Hero section -->
<section id="gcse-hero" class="education-training">
    <div class="fsc-container">
        <div class="fsc-inner-container">
            <div class="fsc-row">
                <h1>EDUCATION AND TRAINING COURSES</h1>
                <p>Explore the finest selection of Education and Training courses that will provide you with an edge over others when applying for teaching positions.</p>
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
                <svg class="google-review-svg" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1" viewBox="0 0 317 25" style="
    margin-bottom: 20px;
">
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

                            .st2,
                            .st3,
                            .st4 {
                                fill: #fff;
                            }

                            .st2,
                            .st4 {
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
                        <text class="st4" transform="translate(213.54 16.19)">
                            <tspan x="0" y="0">Customer Reviews</tspan>
                        </text>
                        <g>
                            <path class="st5" d="M190.49,8.85c2.11-4.22,7.66-5.6,11.4-2.58.08.07.33.26.38.33.01.02.03.03.01.05l-2.13,2.12c-.08.03-.04-.05-.08-.08-.06-.06-.25-.18-.33-.24-2.44-1.74-5.83-.46-6.75,2.32l-2.49-1.93Z"></path>
                            <path class="st6" d="M193,13.68c.93,2.78,4.35,4.03,6.81,2.36l2.43,1.89c-.85.79-1.81,1.31-2.94,1.6-3.57.91-7.17-.67-8.81-3.94l2.51-1.91Z"></path>
                            <path class="st10" d="M199.81,16.05c.75-.51,1.35-1.38,1.48-2.28h-4.06v-2.92h7.13c.42,2.49-.16,5.22-2.02,7.01-.03.03-.08.05-.11.07l-2.43-1.89Z"></path>
                            <path class="st7" d="M192.98,10.78c-.11.34-.2.85-.21,1.2-.16.11-.16.37,0,.47.02.4.11.84.24,1.22l-2.51,1.91c-1.09-2.19-1.09-4.56,0-6.75l2.49,1.93Z"></path>
                            <path class="st7" d="M192.77,12.46c-.16-.1-.16-.37,0-.47,0,.15,0,.32,0,.47Z"></path>
                        </g>
                    </g>
                    <g>
                        <text class="st2" transform="translate(111.5 15.84)">
                            <tspan x="0" y="0">Rated</tspan>
                        </text>
                        <text class="st2" transform="translate(147.56 16.05)">
                            <tspan x="0" y="0">4.9/5</tspan>
                        </text>
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
                <a href="#course-list">View Courses</a>
            </div>
        </div>
    </div>
</section>
<!-- End Hero section -->

<!-- Top Info part Start -->
<section id="top-info">
    <div class="row">
        <div class="col-md-4">
            <div class="icon"><img src="/wp-content/uploads/0223/12/Instalment.webp" alt="Instalment Plans Available"></div>
            <div class="text"><span>Instalment Plans Available</span></div>
        </div>
        <div class="col-md-4">
            <div class="icon"><img src="/wp-content/uploads/0223/12/Study-at-your-own-pace.webp" alt="Study at your own pace"></div>
            <div class="text"><span>Study at your own pace</span></div>
        </div>
        <div class="col-md-4">
            <div class="icon"><img src="/wp-content/uploads/0223/12/Tutor-support.webp" alt="Full tutor support"></div>
            <div class="text"><span>Full tutor support</span></div>
        </div>
    </div>
</section>
<!-- Top Info part End -->

<div class="container">
    <section id="browse-course">
        <h2>BROWSE OUR EDUCATION & TRAINING COURSES</h2>
    </section>
    <section id="course-list">
        <div class="course-area">
            <div class="row">
                <?php
                // Define the courses array
                $gcse_courses = [
                    [
                        'img_url'      => '/wp-content/uploads/2023/01/Level-3-Award-in-Education-and-Training.webp',
                        'course_url'   => '/course/level-3-award-in-education-and-training',
                        'course_title' => 'Level 3 Award in Education and Training',
                        'first_line'   => 'From £27.5 / month',
                        'second_line'  => 'or from £165 in full',
                        'third_line'   => '<b>Save £214</b> when you buy these courses as a package: <del>£379</del> £165 In this package, you’ll get:',
                    ],
                    [
                        'img_url'      => '/wp-content/uploads/2023/01/Level-4-Certificate-in-Education-and-Training.webp',
                        'course_url'   => '/course/level-4-certificate-in-education-and-training',
                        'course_title' => 'Level 4 Certificate in Education and Training',
                        'first_line'   => 'From £37 / month',
                        'second_line'  => 'or from £449 in full',
                        'third_line'   => '<b>Save £276</b> when you buy these courses as a package: <del>£725</del> £449 In this package, you’ll get:',
                    ],
                    [
                        'img_url'      => '/wp-content/uploads/2025/04/Level_5_Diploma_in_Teaching.webp',
                        'course_url'   => '/course/level-5-diploma-in-teaching',
                        'course_title' => 'Level 5 Diploma in Teaching',
                        'first_line'   => 'From £150 / month',
                        'second_line'  => 'or from £1500 in full',
                        'third_line'   => '<b>Save £1700</b> when you buy these courses as a package: <del>£3200</del> £1500 In this package, you’ll get:',
                    ]
                ];

                foreach ($gcse_courses as $item) {
                ?>
                    <div class="card">
                        <div class="row">
                            <div class="card-content col-md-6">
                                <h2><a href="<?= $item['course_url'] ?>"><?= $item['course_title'] ?></a></h2>
                                <p class="fsc-card-price-content">
                                    <span><?= $item['first_line'] ?></span>
                                    <br>
                                    <span><?= $item['second_line'] ?></span>
                                </p>
                                <p class="fsc-package-includes"><?= $item['third_line'] ?></p>
                                <ul>
                                    <?php
                                    if ($item['course_url'] == '/course/level-5-diploma-in-education-and-training') {
                                        echo "<li>Eligible for QTLS Status</li>";
                                    } elseif ($item['course_url'] == '/course/level-5-diploma-in-teaching') {
                                        echo "<li>Course Materials</li>";
                                        echo "<li>Official Assessment Included</li>";
                                        echo "<li>Personalised Tutor Feedback</li>";
                                        echo "<li>Tutor Observation Available</li>";
                                        echo "<li>10 Instalments at Checkout</li>";
                                    } else {
                                        echo "<li>Course Materials</li>";
                                        echo "<li>Official Assessment Included</li>";
                                        echo "<li>Personalised Tutor Feedback</li>";
                                        echo "<li>Tutor Observation Available</li>";
                                        echo "<li>6 Instalments at Checkout</li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= $item['img_url'] ?>" alt="Card Image">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="<?= $item['course_url'] ?>" class="round-button">View Courses</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
</div>

<section id="gcse-why-train">
    <div class="fsc-container">
        <div class="col-md-6">
            <h2>Why Study Education and Training Courses?</h2>
            <ul class="list-unstyled ms-0">
                <li>Achieve Qualified Teacher Status (QTLS)</li>
                <li>Strengthen your resume</li>
                <li>Establish a successful career in the education sector</li>
                <li>Acquire a globally recognised qualification</li>
                <li>Progress to advanced vocational study</li>
                <li>Advance to a Bachelor of Arts in Education or BA in Education (BEd)</li>
                <li>Our courses are an excellent solution for anyone looking for a flexible option</li>
            </ul>
        </div>
        <div class="col-md-6 text-center">
            <h2>Approved By</h2>
            <div class="gcse-why-train-img-wrap mb-4">
                <img src="https://lead-academy.org/wp-content/uploads/2023/11/tquk-400w.jpg" alt="TQUK logo" width="190" height="107">
                <img src="https://lead-academy.org/wp-content/uploads/2023/06/logo.svg" alt="aqa logo" width="190" height="106">
                <img src="https://lead-academy.org/wp-content/uploads/2023/06/ofqual_gov_uk_logo-300x152.png" alt="aqa logo" width="190" height="106">
            </div>
        </div>
    </div><!-- end fsc-container -->
</section>

<section id="fsc-reviews">
    <div class="container">
        <h2 class="text-center"><b>Valuable Feedback From Student</b></h2>

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
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
    </div>


    <?php
    if (is_array($display_faqs) && count($display_faqs) > 1) {
    ?>
        <!-- FAQ section -->
        <section id="msg-faq">
            <div id="la-single-faq" class="d-xl-block overflow-hidden">
                <h2 class="text-center"><b>Frequently Asked Questions</b></h2>
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
        <!-- End FAQ section -->
    <?php
    }
    ?>
    </div>
    <?php
    get_footer();
    ?>