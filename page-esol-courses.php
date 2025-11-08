<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
$current_page_id    = get_the_ID();
$course_faqs 		= get_post_meta( $current_page_id, 'product_faqs', true);
$course_reviews 	= get_post_meta( $current_page_id, 'la_course_reviews', true);
$faq = [
[
'faq_title'      => 'What are ESOL courses?',
'faq_text'   => 'ESOL stands for English for Speakers of Other Languages. ESOL courses are educational programmes designed to teach English to non-native speakers. These courses are designed exclusively for people who have little or no knowledge of the English language. ESOL courses emphasise the four essential language abilities of hearing, speaking, reading, and writing. For non-native English speakers, ESOL classes aim to improve communication skills, increase job opportunities, and encourage cultural integration.',
],
[
'faq_title'      => 'What Does ESOL Stand For?',
'faq_text'   => 'ESOL stands for English for Speakers of Other Languages. Which is an educational program designed to teach English to non-native speakers.',
],
[
'faq_title'      => 'What is ESOL?',
'faq_text'   => 'ESOL stands for English for Speakers of Other Languages. It refers to educational programs and courses designed to teach the English language to individuals whose first language is not English. ESOL courses are typically focused on developing speaking, reading, writing and listening abilities in English to help non-native speakers communicate proficiently for various purposes in English-speaking countries.',
],
[
'faq_title'      => 'How long is the ESOL course?',
'faq_text'   => 'The duration of an ESOL course can vary depending on various factors such as the learner’s proficiency level, the intensity of the program and the levels of the programs. As a general guideline, the level 1 ESOL course can take 25-35 weeks to complete, on the other hand, the level 2 course may take 33-35 weeks to complete depending on the proficiency level and dedication of the learners.',
],
[
'faq_title'      => 'How much do ESOL courses cost?',
'faq_text'   => 'The cost for ESOL courses varies depending on the institution, location, course level and duration of the course. The pricing structure of our Lead Academy ESOL courses typically ranges from £150 to £300. However, some programs may offer financial aid, scholarships, or flexible payment options to assist individuals who may have difficulty affording the full cost of the course.',
],
[
'faq_title'      => 'How to pass the ESOL exam?',
'faq_text'   => 'To pass an ESOL exam you need to put in consistent effort, dedication and practise more and more. The following steps may help you to pass the ESOL exam successfully:
<br>
1. Understand the exam format and make a study plan according to your need
2. Work on improving your language skills in all areas
3. Do as much practice as you can with your study materials
4. Manage your time effectively during the exam
5. Get feedback from your coach or any experienced person
6. Stay calm and confident during the exam ',
],
[
'faq_title'      => 'What is an ESOL qualification?',
'faq_text'   => 'ESOL qualification refers to a certification or credential that verifies a person’s ability in English as a second language. After completing the course or passing the ESOL exam, participants are usually awarded a certificate. These certificates are recognized internationally and can be used to demonstrate language proficiency for various purposes such as education, immigration and employment.',
]
];

if ( is_array( $course_faqs ) && count( $course_faqs ) > 1 ) {
    $display_faqs = $course_faqs;
}else{
    $display_faqs = $faq;
}
?>
<script>
    jQuery(document).ready(function () {
        let course = jQuery('#fsc-ce-courses');
        let exam = jQuery('#fsc-ce-exams');
        let courseArea = jQuery('.course-area');
        let examArea = jQuery('.exam-area');
        course.click(function(){
            course.addClass('active');
            exam.removeClass('active');
            courseArea.show();
            examArea.hide();
        });
        exam.click(function(){
            exam.addClass('active');
            course.removeClass('active');
            examArea.show();
            courseArea.hide();
        });
    });
</script>

<!-- Hero section -->
<section id="gcse-hero" class="esol">
    <div class="fsc-container">
        <div class="fsc-inner-container">
            <div class="fsc-row">
                <h1>ONLINE ESOL COURSES AND EXAM</h1>
                <p>Invest in yourself and your future success with our flexible and affordable online courses designed to meet your learning needs.</p>
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
                <svg style="
    margin-bottom: 20px;
" class="google-review-svg" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1" viewBox="0 0 317 25">
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
        <h2>BROWSE OUR ESOL COURSES</h2>
        <div class="exam-course-buttons">
            <button id="fsc-ce-courses" class="active">Courses</button>
            <button id="fsc-ce-exams">Exam</button>
        </div>
    </section>
    <section id="course-list">
        <div class="course-area">
            <div class="row">
                <?php
                // Loop for MASSAGE THERAPY COURSES Start
                $gcse_courses = [
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/04/ESOL-Level-1-Online-Course-Reading-Writing-Speaking-Listening.webp',
                        'course_url'   => 'https://lead-academy.org/course/esol-level-1-online-course',
                        'course_title' => 'ESOL Level 1 Online Course – Reading, Writing, Speaking, Listening',
                        'first_line'   => 'From £40  / month',
                        'second_line'  => 'or from £159 in full',
                        'third_line'   => 'Save £200 when you buy these courses as a package: <del>£359</del> £159 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/04/ESOL-Level-2-Online-Course-Interactive-ESOL-Course-for-Adults.webp',
                        'course_url'   => 'https://lead-academy.org/course/esol-level-2-online-course',
                        'course_title' => 'ESOL Level 2 Online Course',
                        'first_line'   => 'From £40 / month',
                        'second_line'  => 'or from £159 in full',
                        'third_line'   => 'Save £200 when you buy these courses as a package: <del>£359</del> £159 <b>In this package, you’ll get:</b>',
                    ]
                ];
                foreach($gcse_courses as $item){
                ?>
                <div class="card">
                    <div class="row">
                        <div class="card-content col-md-6">
                        <h2><a href="<?=$item['course_url']?>"><?=$item['course_title']?></a></h2>
                        <p class="fsc-card-price-content">
                            <span><?=$item['first_line']?></span>
                            <br>
                            <span><?=$item['second_line']?></span>
                        </p>
                        <p class="fsc-package-includes"><?=$item['third_line']?></p>
                        <ul>
                            <li>Tutor support included</li>
                            <li>Interactive Course Materials</li>
                            <li>Official Exam Included</li>
                            <li>Accredited Qualification</li>
                            <li>Instalment Plan at Checkout</li>
                        </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="<?=$item['img_url']?>" alt="Card Image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="<?=$item['course_url']?>" class="round-button">View Courses</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="exam-area" style="display:none">
            <div class="row">
                <?php
                // Loop for MASSAGE THERAPY COURSES Start
                $gcse_exam = [
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/08/esol-level-1-exam.webp',
                        'course_url'   => 'https://lead-academy.org/course/esol-level-1-online-course',
                        'course_title' => 'ESOL Level 1 Online Exam – Reading, Writing, Speaking, Listening',
                        'first_line'   => 'From £40  / month',
                        'second_line'  => 'or from £159 in full',
                        'third_line'   => 'Save £200 when you buy these courses as a package: <del>£359</del> £159 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/08/esol-level-2-exam.webp',
                        'course_url'   => 'https://lead-academy.org/course/esol-level-2-online-course',
                        'course_title' => 'ESOL Level 2 Online Exam',
                        'first_line'   => 'From £40 / month',
                        'second_line'  => 'or from £159 in full',
                        'third_line'   => 'Save £200 when you buy these courses as a package: <del>£359</del> £159 <b>In this package, you’ll get:</b>',
                    ]
                ];
                foreach($gcse_exam as $item){
                ?>
                <div class="card">
                    <div class="row">
                        <div class="card-content col-md-6">
                        <h2><a href="<?=$item['course_url']?>"><?=$item['course_title']?></a></h2>
                        <p class="fsc-card-price-content">
                            <span><?=$item['first_line']?></span>
                            <br>
                            <span><?=$item['second_line']?></span>
                        </p>
                        <p class="fsc-package-includes"><?=$item['third_line']?></p>
                        <ul>
                            <li>Book Your Exam Within 15 Days</li>
                            <li>Sit for the Exam in London/Swindon</li>
                            <li>Get Result within 15 Days</li>
                            <li>Extra 25% Time for people with Learning Difficulties.</li>
                            <li>Qualifications is recognised across the UK</li>
                            <li>Instalment Plan at Checkout</li>
                        </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="<?=$item['img_url']?>" alt="Card Image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="<?=$item['course_url']?>" class="round-button">View Courses</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section id="gcse-why-train">
        <div class="fsc-container">
            <div class="col-md-6">
                <h2>WHY TRAIN WITH US?</h2>    
                <ul class="list-unstyled ms-0">
                    <li>We offer both advanced and foundation tiers</li>
                    <li>You can conveniently book your official exam with us</li>
                    <li>Achieve your required GCSE grade with our highly informative course materials</li>
                    <li>Take advantage of our expert tutor support</li>
                    <li>Our courses are an excellent solution for anyone looking for a flexible option</li>
                </ul>
            </div>    
            <div class="col-md-6 text-center">
                <h2>Recognised Qualification</h2>
                <div class="gcse-why-train-img-wrap mb-4">
                    <img src="/wp-content/uploads/2022/12/edexcel-vector-logo.png" alt="edexcel logo" width="190" height="107">
                    <img src="/wp-content/uploads/2023/01/AQA-Logo.webp" alt="aqa logo" width="190" height="106">
                </div>
                <p>Our GCSE courses are accredited by Pearson Edexcel and AQA, making them widely recognised and accepted throughout all global platforms.</p>
            </div>
        </div><!-- end fsc-container -->
    </section>

    <section id="fsc-reviews">
        <div class="fsc-container">
            <h2>Valuable Feedback From Student</h2>
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
if (function_exists('la_display_reviews_section')) {
    la_display_reviews_section();
}
                    ?>
    </section>
<?php
    if ( count( $display_faqs ) > 1 ) {
?>
<!-- FAQ section -->
<section id="msg-faq">
    <div id="la-single-faq" class="d-xl-block overflow-hidden">
        <h2 class="text-center"><b>Frequently Asked Questions</b></h2>
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
<!-- End FAQ section -->
<?php
    }
?>
</div>
<?php
get_footer();
?>