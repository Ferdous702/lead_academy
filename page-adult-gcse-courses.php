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
'faq_title'      => 'What are the requirements to enrol into this course?',
'faq_text'   => 'This course is available to all students, of all academic backgrounds and no experience or previous qualifications are required.',
],
[
'faq_title'      => 'How is the course assessed?',
'faq_text'   => 'Students are required to go through a series of assessments to test their knowledge and comprehension of the course materials.',
],
[
'faq_title'      => 'How long does the course take?',
'faq_text'   => 'It’s typically encouraged to attend GSCE courses for two years, however, our courses are designed to help you study at your own pace.',
],
[
'faq_title'      => 'Is this course recognised?',
'faq_text'   => 'Our courses are accredited by Pearson Edexcel and AQA, making them widely recognised and accepted throughout all global platforms.',
],
[
'faq_title'      => 'What is the awarding body of this these courses?',
'faq_text'   => 'Our GCSE Maths courses are accredited by Pearson Edexcel and GCSE English and Science courses are accredited by AQA.',
],
[
'faq_title'      => 'How will be the exam paper?',
'faq_text'   => 'Depending on the subject, you may be expected to take two to three papers, each of which will test your knowledge across various disciplines of the subject.',
],
[
'faq_title'      => 'How can the course be accessed?',
'faq_text'   => 'You will receive an email with your login information once you have successfully registered for the course. This will provide you access to your online training course and the course materials.',
],
[
'faq_title'      => 'What is the grading system for the exam?',
'faq_text'   => 'The grades for GCSE range from 9-1, with 9 being the highest grade and 1 being the lowest.',
],
[
'faq_title'      => 'What is the progression route from this course?',
'faq_text'   => 'After successfully completing this course, you will be eligible and equipped to sit for the official GCSE exam. Once you pass the exam and acquire your sedated grade, you will be able to progress to pursue further education.',
],
[
'faq_title'      => 'What happens if you are ill for a GCSE exam?',
'faq_text'   => 'Students who are ill must contact their school as soon as possible if they are unable to attend an exam, as the school will notify the exam board and arrange any necessary alternative arrangements. In some cases, students may have the option of resetting their exams at a later date if they miss one due to illness.',
],
[
'faq_title'      => 'How to apply for GCSE exam?',
'faq_text'   => 'To apply for a GCSE exam, you must first speak to your school or exam center to register and pay any necessary fees. The registration deadline is usually in February for exams in May/June, but it is important to check with your school for specific dates. You will also need to choose the subjects you wish to take and inform your school of any special requirements or accommodations you may need.',
],
[
'faq_title'      => 'What age do you take GCSE exams?',
'faq_text'   => 'GCSE exams are typically taken by students in the UK at the age of 15 or 16, usually in their final year of secondary school. However, some students may choose to take their exams at a later date if they need more time to prepare or have missed an exam due to illness.',
],
[
'faq_title'      => 'What exam board is GCSE?',
'faq_text'   => 'GCSE is not an exam board, but rather a type of exam taken by students in the UK. There are several exam boards that offer GCSE exams, including AQA, OCR, and Pearson Edexcel. Each exam board has its own set of specifications and syllabuses for each subject.',
],
[
'faq_title'      => 'How long is a GCSE course?',
'faq_text'   => 'A GCSE course typically lasts two years, with exams taken at the end of the second year. However, some students may choose to study for their GCSEs over a longer period of time, such as three or four years, depending on their individual circumstances and needs.',
],
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
<section id="gcse-hero">
    <div class="fsc-container">
        <div class="fsc-inner-container">
            <div class="fsc-row">
                <h1>Ace your GCSE exam with Lead Academy! </h1>
                <p>Are you looking for a flexible solution for GCSE online courses?</p>
                <p>We offer Pearson Edexcel and AQA-accredited GCSE online courses that are widely accepted by universities across the globe. Our courses range from advanced to foundation tiers, available for Maths, Biology, Physics, Chemistry and English. In addition to offering well-structured study materials to achieve your desired grade, we will also aid you in booking your official exam!</p>
                
                <style>
            .google-review-svg {
                width: 400px;
            }

            @media (max-width: 468px) {
                .google-review-svg {
                width: 300px;
            }
            }
        </style><svg style="
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
            <path class="st5" d="M190.49,8.85c2.11-4.22,7.66-5.6,11.4-2.58.08.07.33.26.38.33.01.02.03.03.01.05l-2.13,2.12c-.08.03-.04-.05-.08-.08-.06-.06-.25-.18-.33-.24-2.44-1.74-5.83-.46-6.75,2.32l-2.49-1.93Z"/>
            <path class="st6" d="M193,13.68c.93,2.78,4.35,4.03,6.81,2.36l2.43,1.89c-.85.79-1.81,1.31-2.94,1.6-3.57.91-7.17-.67-8.81-3.94l2.51-1.91Z"/>
            <path class="st10" d="M199.81,16.05c.75-.51,1.35-1.38,1.48-2.28h-4.06v-2.92h7.13c.42,2.49-.16,5.22-2.02,7.01-.03.03-.08.05-.11.07l-2.43-1.89Z"/>
            <path class="st7" d="M192.98,10.78c-.11.34-.2.85-.21,1.2-.16.11-.16.37,0,.47.02.4.11.84.24,1.22l-2.51,1.91c-1.09-2.19-1.09-4.56,0-6.75l2.49,1.93Z"/>
            <path class="st7" d="M192.77,12.46c-.16-.1-.16-.37,0-.47,0,.15,0,.32,0,.47Z"/>
            </g>
        </g>
        <g>
            <text class="st2" transform="translate(111.5 15.84)"><tspan x="0" y="0">Rated</tspan></text>
            <text class="st2" transform="translate(147.56 16.05)"><tspan x="0" y="0">4.9/5</tspan></text>
            <line class="st9" x1="179.5" y1="5.01" x2="179.5" y2="19.17"/>
        </g>
        <g>
            <rect class="st8" x="6.57" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M18.75,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M18.75,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M19.97,18.36s.01.01,0,.02v-.02Z"/>
            </g>
            <rect class="st8" x="26.73" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M38.91,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M38.91,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M40.12,18.36s.01.01,0,.02v-.02Z"/>
            </g>
            <rect class="st8" x="46.88" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M59.06,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M59.06,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M60.28,18.36s.01.01,0,.02v-.02Z"/>
            </g>
            <rect class="st8" x="67.03" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M79.22,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M79.22,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M80.43,18.36s.01.01,0,.02v-.02Z"/>
            </g>
            <rect class="st8" x="87.19" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M99.37,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M99.37,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M100.59,18.36s.01.01,0,.02v-.02Z"/>
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
 <style>
    #top-info > div.row > div.col-md-4 {
    padding: 30px 0px !important;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

#top-info > div.row > div.col-md-4 > div.icon {
    text-align: center;
}
 </style>
<section id="top-info">
    <div class="row">
        <div class="col-md-4">
            <div class="icon"><img src="/wp-content/uploads/0223/12/Instalment.webp" title="Instalment Plans Available" alt="Instalment Plans Available"></div>
            <div class="text"><span>Instalment Plans Available</span></div>
        </div>
        <div class="col-md-4">
            <div class="icon"><img src="/wp-content/uploads/0223/12/Study-at-your-own-pace.webp" title="Study at your own pace" alt="Study at your own pace"></div>
            <div class="text"><span>Study at your own pace</span></div>
        </div>
        <div class="col-md-4">
            <div class="icon"><img src="/wp-content/uploads/0223/12/Tutor-support.webp" title="Full tutor support" alt="Full tutor support"></div>
            <div class="text"><span>Full tutor support</span></div>
        </div>
    </div>
</section>
<!-- Top Info part End -->

<div class="container">
    <section id="browse-course">
        <h2>BROWSE GCSE COURSES</h2>
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
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/07/GCSE-Biology-1.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-biology',
                        'course_title' => 'GCSE Biology Online Course',
                        'first_line'   => 'From £22 / month',
                        'second_line'  => 'or from £129 in full',
                        'third_line'   => 'Save £270 when you buy these courses as a package: <del>£399</del> £129 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/07/GCSE-Chemistry.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-chemistry-course',
                        'course_title' => 'GCSE Chemistry Course',
                        'first_line'   => 'From £22 / month',
                        'second_line'  => 'or from £129 in full',
                        'third_line'   => 'Save £270 when you buy these courses as a package: <del>£399</del> £129 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/08/GCSE-Physics-Online-Course-and-Exam.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-physics',
                        'course_title' => 'GCSE Physics Online Course',
                        'first_line'   => 'From £22 / month',
                        'second_line'  => 'or from £129 in full',
                        'third_line'   => 'Save £270 when you buy these courses as a package: <del>£399</del> £129 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/07/GCSE-Maths.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-maths-online-course',
                        'course_title' => 'GCSE Maths Online Course',
                        'first_line'   => 'From £22 / month',
                        'second_line'  => 'or from £129 in full',
                        'third_line'   => 'Save £270 when you buy these courses as a package: <del>£399</del> £129 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/07/GCSE-English-1.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-english-language',
                        'course_title' => 'GCSE English Language Course',
                        'first_line'   => 'From £22 / month',
                        'second_line'  => 'or from £129 in full',
                        'third_line'   => 'Save £270 when you buy these courses as a package: <del>£399</del> £129 <b>In this package, you’ll get:</b>',
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
                            <li>Unlimited Tutor Support</li>
                            <li>Insurance Option Available</li>
                            <li>Interactive Course Materials</li>
                            <li>Accredited Qualification</li>
                            <li>Instalment Plan at Checkout</li>
                        </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="<?=$item['img_url']?>" title="Card Image" alt="Card Image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="<?=$item['course_url']?>" class="round-button" title="round-button">View Courses</a>
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
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/07/GCSE-Biology-2.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-biology',
                        'course_title' => 'GCSE Biology Exam',
                        'first_line'   => 'From £43.33 / month',
                        'second_line'  => 'or from £260 in full',
                        'third_line'   => '<b>Save £225</b> when you buy these courses as a package: <del>£485</del> £260 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/07/GCSE-Chemistry-1.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-chemistry-course',
                        'course_title' => 'GCSE Chemistry Exam',
                        'first_line'   => 'From £43.33 / month',
                        'second_line'  => 'or from £260 in full',
                        'third_line'   => '<b>Save £225</b> when you buy these courses as a package: <del>£485</del> £260 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/08/GCSE-Physics-Online-Course-and-Exam.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-physics',
                        'course_title' => 'GCSE Physics Exam',
                        'first_line'   => 'From £75 / month',
                        'second_line'  => 'or from £299 in full',
                        'third_line'   => '<b>Save £186</b> when you buy these courses as a package: <del>£485</del> £299 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/07/GCSE-Maths-1.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-maths-online-course',
                        'course_title' => 'GCSE Maths Exam',
                        'first_line'   => 'From £43.33 / month',
                        'second_line'  => 'or from £260 in full',
                        'third_line'   => '<b>Save £225</b> when you buy these courses as a package: <del>£485</del> £260 <b>In this package, you’ll get:</b>',
                    ],
                    [
                        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/07/GCSE-English.webp',
                        'course_url'   => 'https://lead-academy.org/course/gcse-english-language',
                        'course_title' => 'GCSE English Language Exam',
                        'first_line'   => 'From £43.33 / month',
                        'second_line'  => 'or from £260 in full',
                        'third_line'   => '<b>Save £225</b> when you buy these courses as a package: <del>£485</del> £260 <b>In this package, you’ll get:</b>',
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
                            <li>Official Exam Booking</li>
                            <li>Suitable Exam Centre from list</li>
                            <li>AQA Exam Board</li>
                            <li>Need Based Tier (Higher/Foundation)</li>
                            <li>Free Mock Test</li>
                            <li>Virtual Lab For Practice</li>
                            <li>4 Installment Plan Available</li>
                        </ul>
                        </div>
                        <div class="col-md-6">
                            <img src="<?=$item['img_url']?>" alt="Card Image" title="Card Image">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="<?=$item['course_url']?>" class="round-button" title="round-button">View Courses</a>
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
                    <img src="/wp-content/uploads/2022/12/edexcel-vector-logo.png" title="edexcel logo" alt="edexcel logo" width="190" height="107">
                    <img src="/wp-content/uploads/2023/01/AQA-Logo.webp" title="aqa logo" alt="aqa logo" width="190" height="106">
                </div>
                <p>Our GCSE courses are accredited by Pearson Edexcel and AQA, making them widely recognised and accepted throughout all global platforms.</p>
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
if (function_exists('la_display_reviews_section')) {
    la_display_reviews_section();
}
                    ?>
</div>
</section>
<?php
    if ( is_array( $display_faqs ) && count( $display_faqs ) > 1 ) {
?>
<!-- FAQ section -->
<section id="msg-faq">
    <div id="la-single-faq" class="d-xl-block overflow-hidden">
        <h2 class="text-center"><b>Frequently Asked Questions</b></h2>
        <div class="accordion" id="accordionPanelsStayOpenExample">
<?php
for($x=0;$x<(is_array($display_faqs) ? count($display_faqs) : 0);$x++){
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