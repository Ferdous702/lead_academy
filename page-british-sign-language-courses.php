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

$faq = [
[
'faq_title'      => 'How many levels are there in British sign language?',
'faq_text'   => 'These courses have six levels that progress from beginner to advanced. Each level is designed to improve your proficiency in using BSL and involves a variety of skills, including vocabulary, grammar, facial expressions, and body language. As you move up the levels, you’ll learn more advanced concepts and become more fluent in signing. The higher levels require more complex language usage, so you’ll need to master abstract concepts and signing fluently.',
],
[
'faq_title'      => 'How long does it take to learn BSL?',
'faq_text'   => 'Learning from Level 1 to Level 6 is a unique journey that varies from person to person. It depends on one’s learning pace, dedication and commitment to the language. On average, it can take between 60-100 hours of study to complete each level. This means completing all six levels would require around 360 to 600 hours of learning.',
],
[
'faq_title'      => 'How much do interpreters earn?',
'faq_text'   => 'Interpreters can earn a decent living, depending on various factors such as experience, location, and qualifications. For example, full-time interpreters might earn around £20,000 and £32,000 annually, potentially earning more in areas with higher demand or with added qualifications or experience. On the other hand, freelance interpreters may experience fluctuating earnings based on their availability and service demand.',
],
[
'faq_title'      => 'What is the difference between ASL and BSL?',
'faq_text'   => 'A notable difference between ASL and BSL is the use of the manual alphabet – ASL uses a one-handed manual alphabet, whereas BSL uses a two-handed manual alphabet. You can also check out our blog, ‘<a href="https://lead-academy.org/blog/whats-the-difference-between-asl-and-bsl/">What’s the Difference Between ASL and BSL</a>’ to explore these differences in detail.',
],
[
'faq_title'      => 'Should I learn ASL or BSL?',
'faq_text'   => 'The decision to learn ASL or BSL depends on your goals and circumstances. ASL is more practical if you plan to use sign language in the United States or Canada, while British sign is more practical for the United Kingdom or Commonwealth countries.',
],
[
'faq_title'      => 'What is the best way to learn BSL?',
'faq_text'   => 'The best ways to learn BSL are as follows. First, consider taking a course or finding a qualified tutor to guide you through the learning process. Practise regularly by signing with fluent signers or joining a local deaf community. Watch sign language videos, TV shows, and films to improve your comprehension and understanding of the language. Use online resources to supplement your learning and reinforce your knowledge. Finally, be patient and committed to the learning process, as it may take time to become proficient.
To know more give a read to this blog, ‘<a href="https://lead-academy.org/blog/how-to-learn-bsl-beginner-to-advanced/">How to Learn BSL? Beginner to Advanced</a>’.',
],
[
'faq_title'      => 'How many people in the UK use BSL?',
'faq_text'   => 'According to recent statistics, in England, British Sign Language is the primary language for over 21,000 individuals, which accounts for approximately 0.04% of the population. Similarly, in Wales, just over 900 individuals (0.03%) use BSL as their main language.',
],
[
'faq_title'      => 'What qualifications do I need to be an interpreter?',
'faq_text'   => 'If you’re interested in becoming an interpreter, there are some great steps you can take to pursue your passion. Start by attending university and earning a degree in translation and interpreting or a related field. Gaining experience through an internship, volunteer role, or entry-level position in interpretation is also important. Look for opportunities that align with your interests, such as community interpretation services or sign language interpretation. Once you have some experience under your belt, you can apply directly to jobs that require interpreters. And if you want to boost your credentials, earning a certificate or diploma in interpreter studies is always an option.',
],
[
'faq_title'      => 'Are interpreters in high demand?',
'faq_text'   => 'Good news for those interested in becoming an interpreter or translator: the job market for these professions is expected to grow significantly over the next decade. According to the Bureau of Labor Statistics, employment in these fields is projected to increase by 20 per cent from 2021 to 2031, much faster than the average for all occupations. This means there will be about 9,200 openings for interpreters and translators each year, on average, over the next decade.',
],
[
'faq_title'      => 'Where can I learn bsl for free?',
'faq_text'   => 'You are in luck if you’re interested in learning this sIgn Language but don’t want to spend much money. Lead Academy, an online learning platform, offers BSL courses at a discounted rate of up to 80%. This means you can learn sign language for a fraction of the cost of traditional courses and do it at your own pace from home. The courses cover everything from basic vocabulary and grammar to more advanced educational topics, and they are suitable for beginners and those with some prior knowledge of. So, if you want to learn BSL without breaking the bank, check out the discounted courses Lead Academy offers.',
]
];

if ( is_array( $course_faqs ) && count( $course_faqs ) > 1 ) {
    $display_faqs = $course_faqs;
}else{
    $display_faqs = $faq;
}
?>

<style>
       .fsc-card-contents a.fsc-view-course-btn {
    position: absolute !important;
    bottom: 10px;
    left: 0;
    right: 0;
    text-align: center;
    top: auto !important;
    margin: 0px 20px 10px 20px;
}


.fsc-card-contents ul {
    height: auto !important;
}

.fsc-custom-card {
    height: 95%;
}

.fsc-card-contents h3 {
    height: auto;
    font-size: 20px;
}

p.fsc-package-includes {
    height: 35px;
    color: #7b0226 !important;
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .fsc-card-contents a.fsc-view-course-btn {
    margin: 0px 35px 10px 35px;
}
}

@media only screen and (max-width: 767px) {
    .fsc-custom-card {
    height: 95%;
    min-height: auto !important;
}

.fsc-card-contents a.fsc-view-course-btn {
    margin: 0px 20px 10px 20px;
}
}

    #fsc-hero.bsl{
        background-image:url('/wp-content/uploads/2022/09/doing-homework-together-small_11zon.jpg');
    }
    #fsc-hero.bsl > .fsc-container{
        background-color: #122434;
        opacity: 0.7;
    }
    #fsc-about > .about-container{
        margin-left: 100px;
        margin-right: 100px;
        font-weight: 500;
    }
    @media screen and (min-width: 600px) and (max-width: 1010px) {
        .fsc-custom-card{
            min-height: 920px !important;
        }
    }

    @media (max-width: 767px) {

        #fsc-about > .about-container {
            margin-left: 20px !important;
            margin-right: 20px !important;
            font-weight: 500;
        }
        #fsc-about {
            padding-top: 35px !important;
        }
    }
    #fsc-hero > div.fsc-promotion > span{
        position: relative;
        bottom: 30px;
        background: #FCBB56;
        padding: 20px;
        color: #000;
        font-size: 25px;
    }
    #fsc-about{
        padding-top:150px;
    }
</style>

<!-- Hero section -->
<section id="fsc-hero" class="bsl">
    <div class="fsc-container">
        <div class="fsc-row">
            <h1>British Sign Language Courses</h1>
            <p>Learn British Sign Language with Lead Academy and take your communication skills to the next level!</p>
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
            <svg class="google-review-svg" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1" viewBox="0 0 317 25">
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
        <span>EXTRA 10% OFF ON BULK PURCHASE</span>
        <div class="fsc-floating-items">
            <div class="fsc-item">
                <p class="fsc-floating-lf-1">UP TO 80% OFF</p>
                <p>ON SELECTED COURSES</p>
            </div>
            <div class="fsc-item">
                <p class="fsc-floating-m-1">Ofqual Regulated</p>
                <p>NATIONALLY RECOGNISED QUALIFICATIONS</p>
            </div>
            <div class="fsc-item">
                <p class="fsc-floating-lf-1">ONLY £19.00</p>
                <p>Study At Your Own Pace</p>
            </div>
        </div>
        <span>CONTACT US FOR LIVE CLASS</span>
    </div>
</section>
<!-- End Hero section -->

<!-- About section -->
<section id="fsc-about">
    <div class="about-container">
        <p>Are you looking for a way to reduce daily challenges in communicating with your beloved deaf? Our exclusive British Sign Language courses have revealed a secret way to meet these challenges in society.</p>
        <p>If you learn BSL, you will not only be able to communicate effectively with the deaf community but also enhance your employability and social skills. Our BSL training courses not only teach the basics of British Sign Language but also provide practical strategies to enhance communication and build stronger relationships with the deaf community.</p>
        <p>Our online BSL courses are easy to learn and can be tailored to meet your specific needs – So, join our courses today and unlock the door to a new world of opportunities.</p>
    </div>
</section>
<!-- End About section -->

<!-- Exams - Courses section -->
<section id="fsc-courses-exams">
    <div class="fsc-container">
        <h2>Find your desired course from the following BSL courses</h2>
    </div>
    
    <div class="fsc-container fsc-real-contents mt-5 mb-5">
        <div class="fsc-custom-card-wrap courses">
            <?php
    $fsc_courses_card_items = [
                [
                    'img_url'      => '/wp-content/uploads/2023/08/British-Sign-Language-for-Beginners-1-copy.webp',
                    'course_url'   => 'https://lead-academy.org/course/signature-bsl-level-1',
                    'course_title' => 'Level 1 Award in BSL',
                    'first_line'   => 'Starts From £92 / month',
                    'second_line'  => 'or from £550 in full',
                    'packages'   => '
                    <li>Live Class via Zoom (2 Hours Per Week)</li>
                    <li>Signature Accredited Qualifications</li>
                    <li>Duration - 33 Weeks including exams</li>
                    <li>Official Exam Included</li>
                    <li>Instalment Plan at Checkout</li>
                    <li>Every Monday afternoon from 1:00pm to 3:00pm</li>
                    <li>Available to pay in 6 instalments at no extra cost</li>
                    ',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2023/08/British-Sign-Language-for-Beginners-1d.webp',
                    'course_url'   => 'https://lead-academy.org/course/signature-bsl-level-2',
                    'course_title' => 'Level 2 Certificate in BSL',
                    'first_line'   => 'Starts From £109.17 / month',
                    'second_line'  => 'or from £655 in full',
                    'packages'   => '
                    <li>Live Class via Zoom (2 Hours Per Week)</li>
                    <li>Signature Accredited Qualifications</li>
                    <li>Duration - 33 Weeks including exams</li>
                    <li>Official Exam Included</li>
                    <li>Every Thursday afternoon from 02:00 pm to 04:00 pm</li>
                    <li>Available to pay in 6 instalments at no extra cost</li>
                    ',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/0223/12/Tutored-Courses-copy.webp',
                    'course_url'   => 'https://lead-academy.org/course/signature-bsl-level-3',
                    'course_title' => 'Level 3 Certificate in BSL',
                    'first_line'   => 'Starts From £217 / month',
                    'second_line'  => 'or from £1300 in full',
                    'packages'   => '
                    <li>Live Class via Zoom (2 Hours Per Week)</li>
                    <li>Signature Accredited Qualifications</li>
                    <li>Duration - 33 Weeks including exams</li>
                    <li>Official Exam Included</li>
                    <li>Every Wednesday afternoon from 3:00pm to 5:00pm</li>
                    <li>Available to pay in 6 instalments at no extra cost</li>
                    ',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/08/Independent-Courses-5.webp',
                    'course_url'   => 'https://lead-academy.org/course/british-sign-language-bsl-level-1-2',
                    'course_title' => 'British Sign Language Level 1 & 2 Course Online – CPD',
                    'first_line'   => 'Starts From £5 / month',
                    'second_line'  => 'or from £29.99 in full',
                    'packages'   => '
                    <li>Interactive Video Training</li>
                    <li>CPD Certified Course</li>
                    <li>Duration - 15 Hours</li>
                    <li>MCQ Based Exam Included</li>
                    <li>Instalment Plan at Checkout</li>
                    ',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/11/Banner-1-1.webp',
                    'course_url'   => 'https://lead-academy.org/course/introduction-to-british-sign-language-i-cpd-certified-live-zoom-class',
                    'course_title' => 'Introduction to British Sign Language | CPD Certified | [B2B ONLY]',
                    'first_line'   => 'Starts From £125 / month',
                    'second_line'  => 'or from £500 in full',
                    'packages'   => '
                    <li>1:1 Live Class via Zoom</li>
                    <li>CPD Certified Course</li>
                    <li>Duration - 6 Hours</li>
                    <li>Live Question & Answer Session</li>
                    <li>Instalment Plan at Checkout</li>
                    ',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/08/British-Sign-Language-for-Beginners-1-sd.webp',
                    'course_url'   => 'https://lead-academy.org/course/deaf-awareness-training',
                    'course_title' => 'Deaf Awareness Training',
                    'first_line'   => 'Starts From £138 / month',
                    'second_line'  => 'or from £550 in full',
                    'packages'   => '
                    <li>1:1 Live Class via Zoom</li>
                    <li>CPD Certified Course</li>
                    <li>Duration - 3 Hours</li>
                    <li>Live Question & Answer Session</li>
                    <li>Instalment Plan at Checkout</li>
                    ',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/08/British-Sign-Language-for-Beginners-1.webp',
                    'course_url'   => 'https://lead-academy.org/course/bsl-beginners-course',
                    'course_title' => 'British Sign Language for Beginners',
                    'first_line'   => 'Starts From £35 / month',
                    'second_line'  => 'or from £139 in full',
                    'packages'   => '
                    <li>1:1 Live Class via Zoom</li>
                    <li>CPD Certified Course</li>
                    <li>Duration - 10 Hours</li>
                    <li>Live Question & Answer Session</li>
                    <li>Instalment Plan at Checkout</li>
                    ',
                ],
                [
                    'img_url'      => 'https://lead-academy.org/wp-content/uploads/2023/08/BSL-Training-for-Workplace.webp',
                    'course_url'   => 'https://lead-academy.org/course/bsl-training',
                    'course_title' => 'BSL Training for Workplace – CPD Certified [B2B Only]',
                    'first_line'   => 'Starts From £315 / month',
                    'second_line'  => 'or from £1250 in full',
                    'packages'   => '
                    <li>1:1 Live Class via Zoom</li>
                    <li>CPD Certified Course</li>
                    <li>Duration - 18 Hours</li>
                    <li>Live Question & Answer Session</li>
                    <li>Instalment Plan at Checkout</li>
                     ',
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
                            <?=$item['packages']?>
                        </ul>

                        <a href="<?php echo esc_url($item['course_url'])?>" class="fsc-view-course-btn">View Courses</a>
                    </div> <!-- end card contents -->
                </div>
                <?php
            }
            ?>
        </div> <!-- end fsc-courses-custom-card-wrap -->
    </div>
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

get_footer();
?>