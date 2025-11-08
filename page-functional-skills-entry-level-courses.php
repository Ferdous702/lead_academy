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
$current_page_id    = get_the_ID();
$course_faqs 		= get_post_meta( $current_page_id, 'product_faqs', true);
$course_reviews 	= get_post_meta( $current_page_id, 'la_course_reviews', true);
?>

<!-- Hero section -->
<section id="fsc-hero">
    <div class="fsc-container">
        <div class="fsc-row">
            <h1>Functional Skills Courses</h1>
            <p>Explore an inclusive range of Functional Skills Courses and Official Exams equivalent to GCSE</p>
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
        </div>
    </div>

    <div class="fsc-promotion">
        <div class="fsc-floating-items">
            <div class="fsc-item">
                <p style="font-size: 45px; color:#b91948">100% Money Back</p>
                <p>14 days Money Back Guarantee</p>
            </div>
            <div class="fsc-item">
                <p style="font-size: 45px;">Equivalent to GCSE</p>
                <p>NATIONALLY RECOGNISED QUALIFICATIONS</p>
            </div>
            <div class="fsc-item">
                <p style="font-size: 45px; color:#b91948">Start From £149</p>
                <p>Instalment at Checkout</p>
            </div>
        </div>
    </div>
</section>
<!-- End Hero section -->

<!-- About section -->
<section id="fsc-about">
    <div class="fsc-container">
        <h2>Find the Best Solution for Functional Skills Courses</h2>
    </div>
    <div class="fsc-container">
        <div class="fsc-left-content">
            <p>Whether you are looking to improve your employability or further your education, the flexible and affordable Lead Academy courses will help you achieve your goals. With various functional skills online courses and exams available, you can choose the best personal and professional development path.</p>

            <h3>Why Study Functional Skills Entry Level Courses?</h3>

            <ul>
                <li>Functional skills Entry Level courses build the foundation for English, Math, and Digital Skills, giving you a well-rounded education in essential areas.</li>
                <li>These courses not only prepare you for success in academics and careers, but also equip you with practical skills for everyday life.</li>
                <li>By studying these entry level courses, you can develop problem-solving abilities and critical thinking skills that will serve you well in any situation.</li>
                <li>Get into University, Nursing, Policing, Apprenticeships & More with Functional Skills Level 2 Qualifications.</li>
                <li>In addition to academic and career benefits, studying functional skills entry level courses can enhance your personal growth and enrich your daily life in various aspects.</li>
            </ul>
        </div>

        <div class="fsc-right-content">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/qIQqEiU0nMg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
    </div>
</section>
<!-- End About section -->

<!-- Exams - Courses section -->
<script>
    jQuery(document).ready(function () {

        if (jQuery('body.page-id-374924 .accordion').length) {
        jQuery('.accordion-title').click(function (e) {

            e.preventDefault();
            // let $this = jQuery(this);
            // $this.next().slideToggle(250);

            // if ($this.hasClass('accordion-show')) {
            //     $this.removeClass('accordion-show');
            // }
            // else {
            //     $this.addClass('accordion-show');
            // }
        });
        }
    });
</script>
<section id="fsc-courses-exams">
    <div class="fsc-container">
        <h2>Choose Your Desired Options</h2>
    </div>
    <div class="fsc-container fsc-buttons">
        <button id="fsc-ce-courses" class="active">Courses</button>
        <button id="fsc-ce-exams">Exam</button>
    </div>
    
    <div class="fsc-container fsc-real-contents mt-5 mb-5">
        <div class="fsc-custom-card-wrap courses">
            <?php
            $fsc_courses_card_items = [
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-Maths-Course-Online.webp',
                    'course_url'   => '/course/functional-skills-entry-level-1-maths',
                    'course_title' => 'Functional Skills Entry Level 1 Maths Course Online',
                    'first_line'   => 'Starts From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-2-Maths-Online-Course.webp',
                    'course_url'   => '/course/entry-level-2-maths',
                    'course_title' => 'Functional Skills Entry Level 2 Maths Online Course',
                    'first_line'   => 'Starts From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Maths-Entry-Level-3-Online-Course.webp',
                    'course_url'   => '/course/functional-skills-maths-entry-level-3',
                    'course_title' => 'Functional Skills Maths Entry Level 3 Online Course',
                    'first_line'   => 'Starts From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-English-Course-Online.webp',
                    'course_url'   => '/course/entry-level-1-english-course',
                    'course_title' => 'Functional Skills Entry Level 1 English Course Online',
                    'first_line'   => 'Starts From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-2-Course-Online.webp',
                    'course_url'   => '/course/entry-level-2-english-course',
                    'course_title' => 'Functional Skills English Entry Level 2 Course Online',
                    'first_line'   => 'Starts From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-3-Online-Course.webp',
                    'course_url'   => '/course/functional-skills-english-entry-level-3',
                    'course_title' => 'Functional Skills English Entry Level 3 Online Course',
                    'first_line'   => 'Starts From £24.83 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/08/Digital-Functional-Skills-Entry-Level-3-Online-Course.webp',
                    'course_url'   => 'https://lead-academy.org/course/digital-functional-skills-entry-level-3',
                    'course_title' => 'Digital Functional Skills Entry Level 3 – Online Course',
                    'first_line'   => 'Starts From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-2-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-maths-level-2',
                    'course_title' => 'Functional Skills Maths Level 2',
                    'first_line'   => 'Starts From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-2-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-english-level-2',
                    'course_title' => 'Functional Skills English Level 2',
                    'first_line'   => 'Starts From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-and-English-Level-2-4.webp',
                    'course_url'   => 'https://lead-academy.org/course/level-2-maths-and-english-course',
                    'course_title' => 'Functional Skills Maths and English Level 2',
                    'first_line'   => 'Starts From £92 / month',
                    'second_line'  => 'or from £275 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-1-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-maths-level-1',
                    'course_title' => 'Functional Skills Maths Level 1',
                    'first_line'   => 'Starts From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-1-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-english-level-1',
                    'course_title' => 'Functional Skills English Level 1',
                    'first_line'   => 'Starts From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/08/Digital-Functional-Skills-Level-1-Online-Course-1.webp',
                    'course_url'   => 'https://lead-academy.org/course/digital-functional-skills-level-1',
                    'course_title' => 'Digital Functional Skills Level 1 – Online Course',
                    'first_line'   => 'Starts From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
            ];
            foreach( $fsc_courses_card_items as $item ) {
                ?>
                <div class="fsc-custom-card">
                    <img src="<?php echo esc_url($item['img_url'])?>" alt="<?php echo esc_html($item['course_title'])?>" width="327" height="196">
                    <div class="fsc-card-contents">
                        <h3><a href="<?php echo esc_url($item['course_url'])?>"><?php echo esc_html($item['course_title'])?></a></h3>
                        <p class="fsc-card-price-content">
                            <span><?php echo esc_html($item['first_line'])?></span>
                            <span><?php echo esc_html($item['second_line'])?></span>
                        </p>

                        <p class="fsc-package-includes">Package Included:</p>
                        <ul>
                            <li>Live 1:1 Tutor Support via Zoom</li>
                            <li>Interactive Course Materials</li>
                            <li>Official Exam Included</li>
                            <li>Accredited Qualification</li>
                            <li>Instalment Plan at Checkout</li>
                        </ul>

                        <a href="<?php echo esc_url($item['course_url'])?>" class="fsc-view-course-btn">View Courses</a>
                    </div> <!-- end card contents -->
                </div>
                <?php
            }
            ?>
        </div> <!-- end fsc-courses-custom-card-wrap -->

        <div class="fsc-custom-card-wrap exams" style="display: none">
            <?php
            $fsc_exams_card_items = [
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-Maths-Course-Online.webp',
                    'course_url'   => '/course/functional-skills-entry-level-1-maths',
                    'course_title' => 'Functional Skills Entry Level 1 Maths Course Online with Exam',
                    'first_line'   => 'Starts From £21.6 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-2-Maths-Online-Course.webp',
                    'course_url'   => '/course/entry-level-2-maths',
                    'course_title' => 'Functional Skills Entry Level 2 Maths Online Course with Exam',
                    'first_line'   => 'Starts From £21.6 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Maths-Entry-Level-3-Online-Course.webp',
                    'course_url'   => '/course/functional-skills-maths-entry-level-3',
                    'course_title' => 'Functional Skills Maths Entry Level 3 Online Course with Exam',
                    'first_line'   => 'Starts From £21.6 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-English-Course-Online.webp',
                    'course_url'   => '/course/entry-level-1-english-course',
                    'course_title' => 'Functional Skills Entry Level 1 English Online Course with Exam',
                    'first_line'   => 'Starts From £25 / month',
                    'second_line'  => 'or from £150 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-2-Course-Online.webp',
                    'course_url'   => '/course/entry-level-2-english-course',
                    'course_title' => 'Functional Skills English Entry Level 2 Exam',
                    'first_line'   => 'Starts From £25 / month',
                    'second_line'  => 'or from £150 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-3-Online-Course.webp',
                    'course_url'   => '/course/functional-skills-english-entry-level-3',
                    'course_title' => 'Functional Skills English Entry Level 3 Online Course with Exam',
                    'first_line'   => 'Starts From £25 / month',
                    'second_line'  => 'or from £150 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/08/Digital-Functional-Skills-Entry-Level-3-Online-Course.webp',
                    'course_url'   => 'https://lead-academy.org/course/digital-functional-skills-entry-level-3',
                    'course_title' => 'Digital Functional Skills Entry Level 3 – Exam',
                    'first_line'   => 'Starts From £63.33 / month',
                    'second_line'  => 'or from £190 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-2-Exam-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-maths-level-2',
                    'course_title' => 'Functional Skills Maths Level 2 Exam',
                    'first_line'   => 'Starts From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-2-Exam-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-english-level-2',
                    'course_title' => 'Functional Skills English Level 2 Exam',
                    'first_line'   => 'Starts From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-and-English-Level-2-Exam-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/level-2-maths-and-english-course',
                    'course_title' => 'Functional Skills Maths and English Level 2 Exam',
                    'first_line'   => 'Starts From £92 / month',
                    'second_line'  => 'or from £275 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-1-Exam-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-maths-level-1',
                    'course_title' => 'Functional Skills Maths Level 1 Exam',
                    'first_line'   => 'Starts From £44 / month',
                    'second_line'  => 'or from £130 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-1-Exam-2.webp',
                    'course_url'   => 'https://lead-academy.org/course/functional-skills-english-level-1',
                    'course_title' => 'Functional Skills English Level 1 Exam',
                    'first_line'   => 'Starts From £49 / month',
                    'second_line'  => 'or from £149 in full',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/08/Digital-Functional-Skills-Level-1-Online-Course-1.webp',
                    'course_url'   => 'https://lead-academy.org/course/digital-functional-skills-level-1',
                    'course_title' => 'Digital Functional Skills Level 1 – Exam',
                    'first_line'   => 'Starts From £63.33 / month',
                    'second_line'  => 'or from £190 in full',
                ],
            ];
            foreach( $fsc_exams_card_items as $item ) {
                ?>
                <div class="fsc-custom-card la-fs-xm-box">
                    <img src="<?php echo esc_url($item['img_url'])?>" alt="<?php echo esc_html($item['course_title'])?>" width="327" height="196">
                    <div class="fsc-card-contents">
                        <h3><a href="<?php echo esc_url($item['course_url'])?>"><?php echo esc_html($item['course_title'])?></a></h3>
                        <p class="fsc-card-price-content">
                            <span><?php echo esc_html($item['first_line'])?></span>
                            <span><?php echo esc_html($item['second_line'])?></span>
                        </p>

                        <p class="fsc-package-includes">Package Included:</p>
                        <ul>
                            <li>Book Your Exam Within 5 Days</li>
                            <li>Sit for the Exam Remotely</li>
                            <li>Get Result within 6 Working Days</li>
                            <li>Extra 25% Time for people with Learning Difficulties.</li>
                            <li>Paper-Based exam available on request.</li>
                            <li>Instalment Plan at Checkout</li>
                        </ul>

                        <a href="<?php echo esc_url($item['course_url'])?>" class="fsc-view-course-btn">Book Exam Now</a>
                    </div> <!-- end card contents -->
                </div>
                <?php
            }
            ?>
        </div> <!-- end fsc-exams-custom-card-wrap -->
    </div>
</section>

<?php
    if ( count( $course_reviews ) > 1 ) {
    ?>
    <!-- Reviews section -->
    <section id="fsc-reviews">
        <div class="fsc-container">
            <h2>Valuable Feedback From Student</h2>
        </div>
    </section>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
    <?php
    echo '
        <link rel="stylesheet" href="wp-content/themes/lead-academy-child/assets/css/la-main.css">
        <style>
            body.page-id-374924 .la-reviews-carousel-section-wrap {
                margin: 10px auto 40px;
            }
            body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-box-head h2 {
                font-size: 20px;
            }
            body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-rv h3 {
                font-size: 16px;
            }
            body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-ds p {
                font-family: "Sen";
            }
            body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel .owl-dots.disabled, body.page-id-374924 .la-reviews-carousel-section-wrap .owl-carousel .owl-nav.disabled {
                display: block;
            }
        </style>
    ';
    
        get_la_reviews_carousel_markup( $course_reviews );
    }
?>

<!-- FSC Partners section -->
<section id="fsc-partners">
    <div class="fsc-container">
        <h2>Approved and Accredited</h2>
    </div>
    <div class="fsc-container">
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
</section>

<?php
    if ( count( $course_faqs ) > 1 ) {
    ?>
    <!-- FAQ section -->
    <section id="fsc-faqs">
        <div class="fsc-container">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="fsc-container">
            <div class="accordion">
                <?php
                foreach ( $course_faqs as $item ) {
                    ?>
                    <h3 class="accordion-title"><?php echo $item['faq_title']?></h3>
                    <div class="accordion-content">
                        <?php echo wpautop($item['faq_text'])?>
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

    get_footer(); 
?>
