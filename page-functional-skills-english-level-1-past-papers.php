<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$current_product_id         = get_the_ID();
$course_reviews             = get_post_meta($current_product_id, 'la_course_reviews', true);
$wc_product_faqs             = get_post_meta($current_product_id, 'product_faqs', true);
get_header();
$fs_course_info = [
    [
        'title' => 'Who this course is for',
        'sub' => 'Discover the learning experience and opportunities you can expect from this course.',
        'desc' => 'Level 2 Functional Skills English is an alternative qualification to a GCSE English pass grade. Our online course uses real-life examples to improve your reading, writing and speaking skills. If you find learning English easier with practical examples, this is the course for you.'
    ],
    [
        'title' => 'Entry requirements',
        'sub' => 'Find out what qualifications and skills you will need for this course.',
        'desc' => 'You will have an initial assessment to make sure that this level is right for you. You must not already hold an level 2 or equivalent qualification in this subject.'
    ],
    [
        'title' => 'What you\'ll learn',
        'sub' => 'View the key features of this course.',
        'desc' => 'This course will help you improve your 1) reading, 2) writing, 3) speaking and listening skills.'
    ],
    [
        'title' => 'How you\'ll be assessed',
        'sub' => 'Find out more about exams, assignments and assessments.',
        'desc' => 'This course is assessed with 3 exams. You can sit your Level 2 Functional Skills English exams remotely or at one of our test centres.'
    ],
    [
        'title' => 'What you can do next',
        'sub' => 'Look at the further opportunities available.',
        'desc' => 'Level 2 Functional Skills English is an essential qualification to apply for jobs, higher education courses, apprenticeships and training courses where a GCSE English pass grade (9-4 / A*-C) or equivalent is an entry requirement.'
    ]
];
$fs_partner_info = [
    [
        'img' => '/wp-content/uploads/2022/10/Edexcel-Logo-150x150-1.png',
        'title' => 'Edexcel',
        'text' => 'Edexcel Level 1 Functional Skills English Past Papers',
        'url' => '/edexcel-functional-skills-english-level-1-past-papers'
    ],
    [
        'img' => '/wp-content/uploads/2022/10/City-and-Guilds-Logo-150x150-1.jpg',
        'title' => 'City and Guilds',
        'text' => 'City and Guilds Level 1 Functional Skills English Past Papers',
        'url' => '/city-and-guilds-functional-skills-english-level-1-past-papers'
    ],
    [
        'img' => '/wp-content/uploads/2022/10/NCFE-Logo-150x150-1-e1707117410552.jpg',
        'title' => 'NCFE',
        'text' => 'NCFE Level 1 Functional Skills English Past Papers',
        'url' => '/ncfe-functional-skills-english-level-1-past-papers'
    ],
    [
        'img' => '/wp-content/uploads/2022/10/AQA-Logo-150x150-1.jpg',
        'title' => 'AQA',
        'text' => 'AQA Level 1 Functional Skills English Past Papers',
        'url' => '/aqa-functional-skills-english-level-1-past-papers'
    ],
    [
        'img' => '/wp-content/uploads/2022/10/Open-Awards-Logo-150x150-1.jpg',
        'title' => 'Open Awards',
        'text' => 'Open Awards Level 1 Functional Skills English Past Papers',
        'url' => '/open-awards-functional-skills-english-level-1-past-papers'
    ]
];
?>
<section class="hero-text">
    <h1 class="text-center">Level 1 Functional Skills English Past Papers</h1>
    <p>Functional Skills Level 2 qualification is equivalent to GCSE grades 9 to 4 (A* to C in the old GCSE grading system). This qualification will help you surpass the selection criteria of any university or skilled oriented job. Here, you will find Level 2 Functional Skills English past papers assessed by Pearson Edexcel Exam Board which is the most renowned, reliable and accepted exam board among others.</p>
    <p>You will be assessed on the following skills and knowledge:</p>
    <ul>
        <li>Reading</li>
        <li>Writing (Spelling, Punctuation and Grammar)</li>
        <li>Speaking, Listening and Communicating</li>
    </ul>
    <p>Speaking, listening and communicating are assessed through a 5-minute well rounded presentation and linked question and answer session in groups of three to four along with a 15-minute formal discussion together in groups of three to five learners. Reading is assessed through a test consisting of multiple-choice, short open response and medium open response questions. Writing is assessed through a test comprising two tasks with 42% of marks dedicated to access spelling, punctuation and grammar.</p>
</section>

<div id="enquiryModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="hide()">&times;</span>
        <?php
        echo do_shortcode('[contact-form-7 id="f61a542" title="SPEAK TO US TODAY"]');
        ?>
    </div>
</div>

<div class="wrapper">
    <section class="hero-links">
        <div id="la-mock-links" class="d-none d-sm-block">
            <ul>
                <a href="#exam-course">
                    <li>Exam & Course</li>
                </a>
                <a href="#past-paper">
                    <li>Past Papers</li>
                </a>
                <a href="#mock-test">
                    <li>Practice Test</li>
                </a>
            </ul>
        </div>
    </section>
    <section class="exam-info">

        <!-- <div id="exam-course" class="qualification-details">
            <h2>Exam Booking & Online Course</h2>
            <h4 class="text-center">Qualification Details</h4>
            <div class="details-content">
                <div class="content-wrap">
                    <div class="title">Qualification name</div>
                    <div class="text">Functional Skills Qualification in English</div>
                </div>
                <div class="content-wrap">
                    <div class="title">Qualification level</div>
                    <div class="text">1</div>
                </div>
                <div class="content-wrap">
                    <div class="title">Awarding organisation</div>
                    <div class="text">City & Guilds of London Institute</div>
                </div>
                <div class="content-wrap">
                    <div class="title">Learning method</div>
                    <div class="text">Online</div>
                </div>
                <div class="content-wrap">
                    <div class="title">Course type</div>
                    <div class="text">Essential Skills</div>
                </div>
                <div class="content-wrap">
                    <div class="title">Course start date</div>
                    <div class="text">Flexible</div>
                </div>
                <div class="content-wrap">
                    <div class="title">Cost</div>
                    <div class="text">£29.00</div>
                </div>
            </div>
        </div> -->

        <div class="course-details">
            <h4 class="text-center">Course details and curriculum</h4>
            <?php
            //minus
            foreach ($fs_course_info as $info) {
            ?>
                <div class="wrap-info">
                    <div class="open-content">
                        <div class="content">
                            <div class="title"><?= $info['title'] ?></div>
                            <div class="sub-title"><?= $info['sub'] ?></div>
                        </div>
                        <div class="plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
                    </div>
                    <div class="hidden-content"><?= $info['desc'] ?></div>
                </div>
            <?php
            }
            ?>
        </div>

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
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-2-2.webp',
                            'course_url'   => 'https://lead-academy.org/course/functional-skills-maths-level-2',
                            'course_title' => 'Functional Skills Maths Level 2',
                            'first_line'   => 'Starts From £42.5 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-2-2.webp',
                            'course_url'   => 'https://lead-academy.org/course/functional-skills-english-level-2',
                            'course_title' => 'Level 2 Functional Skills English',
                            'first_line'   => 'Starts From £49.16 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-and-English-Level-2-4.webp',
                            'course_url'   => 'https://lead-academy.org/course/level-2-maths-and-english-course',
                            'course_title' => 'Functional Skills Maths and English Level 2',
                            'first_line'   => 'Starts From £95 / month',
                            //'second_line'  => 'or from £275 in full',
                            'retake'   => '2 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-1-2.webp',
                            'course_url'   => 'https://lead-academy.org/course/functional-skills-maths-level-1',
                            'course_title' => 'Functional Skills Maths Level 1',
                            'first_line'   => 'Starts From £42.5 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-1-2.webp',
                            'course_url'   => 'https://lead-academy.org/course/functional-skills-english-level-1',
                            'course_title' => 'Level 1 Functional Skills English',
                            'first_line'   => 'Starts From £49.16 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/08/Digital-Functional-Skills-Entry-Level-3-Online-Course.webp',
                            'course_url'   => 'https://lead-academy.org/course/digital-functional-skills-entry-level-3',
                            'course_title' => 'Digital Functional Skills Entry Level 3 – Online Course',
                            'first_line'   => 'Starts From £50.83 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/08/Digital-Functional-Skills-Level-1-Online-Course-1.webp',
                            'course_url'   => 'https://lead-academy.org/course/digital-functional-skills-level-1',
                            'course_title' => 'Digital Functional Skills Level 1 – Online Course',
                            'first_line'   => 'Starts From £50.83 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-English-Course-Online.webp',
                            'course_url'   => '/course/entry-level-1-english-course',
                            'course_title' => 'Functional Skills Entry Level 1 English Course Online',
                            'first_line'   => 'Starts From £49.16 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-2-Course-Online.webp',
                            'course_url'   => '/course/entry-level-2-english-course',
                            'course_title' => 'Functional Skills English Entry Level 2 Course Online',
                            'first_line'   => 'Starts From £50.83 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-3-Online-Course.webp',
                            'course_url'   => '/course/functional-skills-english-entry-level-3',
                            'course_title' => 'Functional Skills English Entry Level 3 Online Course',
                            'first_line'   => 'Starts From £50.83 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-Maths-Course-Online.webp',
                            'course_url'   => '/course/functional-skills-entry-level-1-maths',
                            'course_title' => 'Functional Skills Entry Level 1 Maths Course Online',
                            'first_line'   => 'Starts From £42.5 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-2-Maths-Online-Course.webp',
                            'course_url'   => '/course/entry-level-2-maths',
                            'course_title' => 'Functional Skills Entry Level 2 Maths Online Course',
                            'first_line'   => 'Starts From £49.83 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Maths-Entry-Level-3-Online-Course.webp',
                            'course_url'   => '/course/functional-skills-maths-entry-level-3',
                            'course_title' => 'Functional Skills Maths Entry Level 3 Online Course',
                            'first_line'   => 'Starts From £49.83 / month',
                            //'second_line'  => 'or from £149 in full',
                            'retake'   => '1 Free Retake',
                        ],
                    ];
                    foreach ($fsc_courses_card_items as $item) {
                    ?>
                        <div class="fsc-custom-card english-2-fs">
                            <img src="<?php echo esc_url($item['img_url']) ?>" alt="<?php echo esc_html($item['course_title']) ?>" width="327" height="196">
                            <div class="fsc-card-contents">
                                <h3><a href="<?php echo esc_url($item['course_url']) ?>"><?php echo esc_html($item['course_title']) ?></a></h3>
                                <p class="fsc-card-price-content">
                                    <span><?php echo esc_html($item['first_line']) ?></span>
                                    <span><?php echo esc_html($item['second_line']) ?></span>
                                </p>

                                <p class="fsc-package-includes">Package Included:</p>
                                <ul>
                                    <li>Live 1:1 Tutor Support via Zoom</li>
                                    <li>Interactive Course Materials</li>
                                    <li>Official Exam Included</li>
                                    <li>Accredited Qualification</li>
                                    <li>Instalment Plan at Checkout</li>
                                    <!--<li><?php //echo esc_html($item['retake'])
                                            ?></li>-->
                                </ul>
                                <div class="text-center">
                                    <a href="<?php echo esc_url($item['course_url']) ?>" class="fsc-view-course-btn">View Courses</a>
                                </div>

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
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-2-Exam-2.webp',
                            'course_url'   => 'https://lead-academy.org/course/functional-skills-maths-level-2',
                            'course_title' => 'Functional Skills Maths Level 2 Exam',
                            'first_line'   => 'Starts From £42.5 / month',
                            //'second_line'  => 'or from £185 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-2-Exam-2.webp',
                            'course_url'   => 'https://lead-academy.org/course/functional-skills-english-level-2',
                            'course_title' => 'Level 2 Functional Skills English Exam',
                            'first_line'   => 'Starts From £49.16 / month',
                            //'second_line'  => 'or from £190 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-and-English-Level-2-Exam-2.webp',
                            'course_url'   => 'https://lead-academy.org/course/level-2-maths-and-english-course',
                            'course_title' => 'Functional Skills Maths and English Level 2 Exam',
                            'first_line'   => 'Starts From £95 / month',
                            //'second_line'  => 'or from £360 in full',
                            'retake'   => '2 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-Maths-Level-1-Exam-2.webp',
                            'course_url'   => 'https://lead-academy.org/course/functional-skills-maths-level-1',
                            'course_title' => 'Functional Skills Maths Level 1 Exam',
                            'first_line'   => 'Starts From £42.5 / month',
                            //'second_line'  => 'or from £185 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2022/12/Functional-Skills-English-Level-1-Exam-2.webp',
                            'course_url'   => 'https://lead-academy.org/course/functional-skills-english-level-1',
                            'course_title' => 'Level 1 Functional Skills English Exam',
                            'first_line'   => 'Starts From £49.16 / month',
                            //'second_line'  => 'or from £190 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/08/Digital-Functional-Skills-Entry-Level-3-Online-Course.webp',
                            'course_url'   => 'https://lead-academy.org/course/digital-functional-skills-entry-level-3',
                            'course_title' => 'Digital Functional Skills Entry Level 3 – Exam',
                            'first_line'   => 'Starts From £50.83 / month',
                            //'second_line'  => 'or from £190 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/08/Digital-Functional-Skills-Level-1-Online-Course-1.webp',
                            'course_url'   => 'https://lead-academy.org/course/digital-functional-skills-level-1',
                            'course_title' => 'Digital Functional Skills Level 1 – Exam',
                            'first_line'   => 'Starts From £50.83 / month',
                            //'second_line'  => 'or from £190 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-English-Course-Online.webp',
                            'course_url'   => '/course/entry-level-1-english-course',
                            'course_title' => 'Functional Skills Entry Level 1 English Online Course with Exam',
                            'first_line'   => 'Starts From £49.16 / month',
                            //'second_line'  => 'or from £190 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-2-Course-Online.webp',
                            'course_url'   => '/course/entry-level-2-english-course',
                            'course_title' => 'Functional Skills English Entry Level 2 Exam',
                            'first_line'   => 'Starts From £50.83 / month',
                            //'second_line'  => 'or from £190 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-English-Entry-Level-3-Online-Course.webp',
                            'course_url'   => '/course/functional-skills-english-entry-level-3',
                            'course_title' => 'Functional Skills English Entry Level 3 Online Course with Exam',
                            'first_line'   => 'Starts From £50.83 / month',
                            //'second_line'  => 'or from £190 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-1-Maths-Course-Online.webp',
                            'course_url'   => '/course/functional-skills-entry-level-1-maths',
                            'course_title' => 'Functional Skills Entry Level 1 Maths Course Online with Exam',
                            'first_line'   => 'Starts From £42.5 / month',
                            //'second_line'  => 'or from £185 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Entry-Level-2-Maths-Online-Course.webp',
                            'course_url'   => '/course/entry-level-2-maths',
                            'course_title' => 'Functional Skills Entry Level 2 Maths Online Course with Exam',
                            'first_line'   => 'Starts From £49.83 / month',
                            //'second_line'  => 'or from £185 in full',
                            'retake'   => '1 Free Retake',
                        ],
                        [
                            'img_url'      => '/wp-content/uploads/2023/05/Functional-Skills-Maths-Entry-Level-3-Online-Course.webp',
                            'course_url'   => '/course/functional-skills-maths-entry-level-3',
                            'course_title' => 'Functional Skills Maths Entry Level 3 Online Course with Exam',
                            'first_line'   => 'Starts From £49.83 / month',
                            //'second_line'  => 'or from £185 in full',
                            'retake'   => '1 Free Retake',
                        ],
                    ];
                    foreach ($fsc_exams_card_items as $item) {
                    ?>
                        <div class="fsc-custom-card la-fs-xm-box english-2-fs-exam">
                            <img src="<?php echo esc_url($item['img_url']) ?>" alt="<?php echo esc_html($item['course_title']) ?>" width="327" height="196">
                            <div class="fsc-card-contents">
                                <h3><a href="<?php echo esc_url($item['course_url']) ?>"><?php echo esc_html($item['course_title']) ?></a></h3>
                                <p class="fsc-card-price-content">
                                    <span><?php echo esc_html($item['first_line']) ?></span>
                                    <span><?php echo esc_html($item['second_line']) ?></span>
                                </p>

                                <p class="fsc-package-includes">Package Included:</p>
                                <ul>
                                    <li>Book Your Exam Within 5 Days</li>
                                    <li>Sit for the Exam Remotely</li>
                                    <li>Get Result within 6 Working Days</li>
                                    <li>Extra 25% Time for people with Learning Difficulties.</li>
                                    <li>Paper-Based exam available on request.</li>
                                    <li>Instalment Plan at Checkout</li>
                                    <!--<li><?php //echo esc_html($item['retake'])
                                            ?></li>-->
                                </ul>
                                <div class="text-center">
                                    <a href="<?php echo esc_url($item['course_url']) ?>" class="fsc-view-course-btn">Book Exam Now</a>
                                </div>
                            </div> <!-- end card contents -->
                        </div>
                    <?php
                    }
                    ?>
                </div> <!-- end fsc-exams-custom-card-wrap -->
            </div>
        </section>

        <?php
        $fs_mock = [
            [
                'img' => '/wp-content/uploads/2022/10/Functional-Skills-English-Level-1.png',
                'title' => 'Level 1 Functional Skills English',
                'url' => '/course/functional-skills-english-level-1-free-mock-test'
            ],
            [
                'img' => '/wp-content/uploads/2022/10/Functional-Skills-English-Level-2.png',
                'title' => 'Level 2 Functional Skills English',
                'url' => '/course/functional-skills-english-level-2-free-mock-test'
            ],
            [
                'img' => '/wp-content/uploads/2022/10/Functional-Skills-Math-Level-1.png',
                'title' => 'Functional Skills Math Level 1',
                'url' => '/course/functional-skills-maths-level-1-free-mock-test#la-single-curriculum'
            ],
            [
                'img' => '/wp-content/uploads/2022/10/Functional-Skills-Math-Level-2.png',
                'title' => 'Functional Skills Math Level 2',
                'url' => '/course/functional-skills-maths-level-2-free-mock-test'
            ]
        ];
        ?>
        <section id="mock-test" class="mock">
            <div class="free-mock-test">
                <h2>Free Mock Test</h2>
                <p class="text-center">Take our free mock tests, a replicated version of the main exam that will help you assess the effectiveness of your preparation and provide you with a better perspective regarding the questions you have to face.</p>
                <div class="row">
                    <?php
                    foreach ($fs_mock as $mock):
                    ?>
                        <div class="col-md-6">
                            <div class="mock-area">
                                <img src="<?= $mock['img'] ?>" alt="<?= $mock['title'] ?>">
                                <div class="mock-content">
                                    <h4><a href="<?= $mock['url'] ?>"><?= $mock['title'] ?></a></h4>
                                    <span>Past Papers</span>
                                    <strong>Free</strong>
                                    <div class="stars">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <div class="buttons">
                                        <a href="<?= $mock['url'] ?>">Free Mock Test</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </section>
        <section class="exam-info">
            <div id="past-paper" class="partner-card">
                <div class="row">
                    <?php
                    foreach ($fs_partner_info as $info):
                    ?>
                        <div class="col-lg-6">
                            <div class="cards">
                                <div class="logo">
                                    <img src="<?= $info['img'] ?>" alt="">
                                </div>
                                <div class="text">
                                    <span><?= $info['title'] ?></span>
                                    <p><?= $info['text'] ?></p>
                                </div>
                                <div class="btns">
                                    <a href="<?= $info['url'] ?>">View past papers</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </section>
        <section class="mail-send">
            <div class="bottom-form">
                <h2>Our experts will help you choose a course</h2>
                <p>Overcome your doubts and queries regarding any of our courses with the help from our
                    extensive range of experienced and expert customer support team.</p>
                <div class="btn-wrap">
                    <button id="enquire-now-btn">Speak To An Advisor</button>
                </div>
            </div>
        </section>

        <div id="la-single-success-story" class="mb-5 ssd-none d-xl-block w-100">
            <h2><b class="text-left">Success Stories</b></h2>
            <iframe width="1200" height="675" src="https://www.youtube.com/embed/_NXu-LlB4c8" title="" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowFullScreen></iframe>
        </div>

        <div id="la-single-feedbacks" class="mb-5 ssd-none d-xl-block w-100">
            <div class="container">
                <h2 class="text-center"><b>Course Reviews</b></h2>
                <?php
                    if (function_exists('la_display_reviews_section')) {
                        la_display_reviews_section();
                    }
                ?>
            </div>
        </div>

        <?php
        // FAQ Section
        if (is_array($wc_product_faqs) && count($wc_product_faqs) > 1) {
        ?>
            <div id="la-single-faq" class="overflow-hidden">
                <h2 class="text-center"><b>FAQs</b></h2>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <?php
                    $counter = 20;
                    if (is_array($wc_product_faqs)) {
                        foreach ($wc_product_faqs as $item) {
                            $counter++;
                    ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panelsStayOpen-heading<?php echo esc_attr($counter) ?>">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo esc_attr($counter) ?>" aria-expanded="<?php echo esc_attr($counter == 21 ? 'true' : 'false') ?>" aria-controls="panelsStayOpen-collapse<?php echo esc_attr($counter) ?>">
                                    <?php echo $item['faq_title'] ?>
                                </button>
                            </h3>
                            <div id="panelsStayOpen-collapse<?php echo esc_attr($counter) ?>" class="accordion-collapse collapse<?php echo esc_attr($counter == 21 ? ' show' : '') ?>" aria-labelledby="panelsStayOpen-heading<?php echo esc_attr($counter++) ?>">
                                <div class="accordion-body">
                                    <?php echo wpautop($item['faq_text']) ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        <?php
        }    // end condition of faq contents
        ?>

</div>
<script>
    // Get the booking modal
    let mobileBookingModal = document.getElementById("mobileEnquiryBookingModal");

    // Get the button that opens the modal
    let mobileRedBtn = document.getElementById("mobile-enquiry-booking-modal");

    // Get the <span> element that closes the modal
    let mobileCloseEl = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    mobileCloseEl.onclick = function() {
        mobileBookingModal.style.display = "none";
    }

    // Get the modal
    var modal = document.getElementById("enquiryModal");

    // Get the button that opens the modal
    var enNowBtn = document.getElementById("enquire-now-btn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    enNowBtn.onclick = function(e) {
        e.preventDefault();
        modal.style.display = "block";
    }

    function hide() {
        let enBookModal = document.getElementById("enquiryBookingModal");
        let enModal = document.getElementById("enquiryModal");
        enModal.style.display = "none";
        enBookModal.style.display = "none";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    jQuery(document).ready(function() {
        jQuery(window).scroll(function() {
            let $height_from_top = jQuery(window).scrollTop();
            let $parent_of_sticky_tag = jQuery('#la-mock-links');
            let $sticky_tag = jQuery('#la-mock-links ul');
            let adminBarHeight = jQuery("#wpadminbar").outerHeight();
            if ($parent_of_sticky_tag.length) {
                let $element_offset_top = $parent_of_sticky_tag.offset().top;
                let $container_width = $parent_of_sticky_tag.innerWidth();

                if ($height_from_top > $element_offset_top) {
                    $sticky_tag.addClass('sticky');
                    $sticky_tag.css('width', $container_width);
                    $sticky_tag.css('top', adminBarHeight);
                } else {
                    $sticky_tag.removeClass('sticky');
                }
            }
        });
    });
</script>
<?php
get_footer();
?>