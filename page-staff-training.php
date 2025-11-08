<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
    <section id="staff-training-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Staff Training</h1>
                    <p>Learning Solutions For
                        <br>Businesses of all sizes</p>
                </div>
            </div>
        </div>
    </section>
    <section id="staff-training-part-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>
                        Empower your employees with skills and
                        develop your team to lead the industry
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <div class="staff-training-ffp-icon">
                        <?php
                        $employees_with_skills = [
                            [
                                'icon_img' => 'https://lead-academy.org/wp-content/uploads/0223/12/quality-1-min.webp',
                                'title'    => 'Fully Accredited Courses',
                                'text'     => 'All of our courses are accredited by CPD UK and IPHM. CPD is globally recognised by employers, professional organisations and academic intuitions, thus a certificate from CPD Certification Service creates value towards your professional goal and achievement',
                            ],
                            [
                                'icon_img' => 'https://lead-academy.org/wp-content/uploads/0223/12/compliant-1-min.webp',
                                'title'    => 'Quality Guarantee',
                                'text'     => 'All our courses are designed by industry experts, meaning we follow rigorous standards of quality in our teaching and provide quality education.',
                            ],
                            [
                                'icon_img' => 'https://lead-academy.org/wp-content/uploads/0223/12/time-tracking-min.webp',
                                'title'    => 'Progress Tracking',
                                'text'     => 'Tracking your employees’ progress helps them reach their true potential. You can easily track your employees’ training through our learning portal.',
                            ],
                            [
                                'icon_img' => 'https://lead-academy.org/wp-content/uploads/0223/12/discount-min.webp',
                                'title'    => 'Bulk Discount',
                                'text'     => 'Save big when you need a larger volume of courses. Bulk order today and get a bigger discount. Learn from expert tutors with industry experience.',
                            ],
                            [
                                'icon_img' => 'https://lead-academy.org/wp-content/uploads/0223/12/web-1-min.webp',
                                'title'    => 'Learn Anywhere',
                                'text'     => 'Access study materials and exams anywhere in the world, so long as you have a working internet connection.',
                            ],
                            [
                                'icon_img' => 'https://lead-academy.org/wp-content/uploads/0223/12/degree-1-min.webp',
                                'title'    => 'Get certified',
                                'text'     => 'Earn industry-recognised credentials to demonstrate your new skills and add extra value to your CV.',
                            ],
                        ];
                        ?>
                        <div class="row">
                            <?php
                                foreach ($employees_with_skills as $skills_item) : 
                            ?>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="staff-training-ffp-icon-card">
                                    <span><img src="<?php echo $skills_item['icon_img']; ?>" alt="<?php echo $skills_item['title']; ?> Icon"></span>
                                    <span>
                                        <h3><?php echo $skills_item['title']; ?></h3>
                                        <p><?php echo $skills_item['text']; ?></p>
                                    </span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
            </div>
        </div>
    </section>
    <section id="staff-training-part-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>
                        Professional Qualifications
                    </h2>
                </div>
            </div>
            <?php
            $flip_box_content = [
                [
                    'front_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/SM-1.webp',
                    'front_title'       => 'British Sign Language<br>  Training',
                    'front_text_one'    => 'We appreciate your efforts in finding the right British  Sign Language Courses',
                    'front_text_two'    => 'Accredited by Signature Nationally  Recognised Qualifications',
                    'back_text'         => 'This British Sign Language (BSL) Teachers Training Course at QLS Level 1 & 2 course is endorsed by the Quality Licence Scheme for its high-quality, non- regulated provision and training programmes. The Quality Licence Scheme is a brand of the Skills and Education Group, a leading national awarding organisation for providing high-quality vocational qualifications across a wide range of industries.',
                ],
                [
                    'front_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/MicrosoftTeams-image.webp',
                    'front_title'       => 'Functional Skills<br> Courses',
                    'front_text_one'    => 'The functional skills maths qualification will set you up with a solid foundation to become confident in mathematics …',
                    'front_text_two'    => 'Accredited by Signature Nationally  Recognised Qualifications',
                    'back_text'         => 'Functional Skills qualifications provide reliable evidence of a learner’s achievements against demanding content that is relevant to the workplace. The qualifications assess learners’ underpinning subject knowledge and their ability to apply this knowledge to different contexts. They provide a foundation for progression to employment and further technical education, and they help learners to develop skills for everyday life',
                ],
                [
                    'front_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/SM-2.webp',
                    'front_title'       => 'Care Certificate Course<br>  For  Health & Socialcare',
                    'front_text_one'    => 'Care Certificate Courses (Care Settings Standards 1  to 15) - Complete Care Certificate Training Bundle',
                    'front_text_two'    => 'Accredited Certification',
                    'back_text'         => 'This bundle course has been designed with 15 CPD UK & IPHM accredited courses to provide the ultimate learning experience for our learners to further develop their expertise in their chosen field. Gain the essentials skills and knowledge you need to propel your career forward as a health care professional.',
                ],
                [
                    'front_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/SM-6.webp',
                    'front_title'       => 'Health & Safety Training For Workplace',
                    'front_text_one'    => 'This workplace health and safety course covers general health and safety issues that apply to a wide range of types of businesses and sectors, from office and retail environments to workshops and factories.',
                    'front_text_two'    => 'Accredited Certification',
                    'back_text'         => 'This workplace health and safety course is accredited by the CPD UK. CPD is globally recognised by employers, professional organisations and academic intuitions, thus a certificate from CPD Certification Service creates value towards your professional goal and achievement. CPD certified certificates are accepted by thousands of professional bodies and government regulators here in the UK and around the world.',
                ],
                [
                    'front_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/SM-4.webp',
                    'front_title'       => 'Leadership and Employability Training',
                    'front_text_one'    => 'This course is endorsed by the Quality Licence Scheme for its high-quality, non-regulated provision and training programmes. The Quality Licence Scheme is a brand of the Skills and Education Group',
                    'front_text_two'    => 'Accredited Certification',
                    'back_text'         => 'This British Sign Language (BSL) Teachers Training Course at QLS Level 1 & 2 course is endorsed by the Quality Licence Scheme for its high-quality, non- regulated provision and training programmes. The Quality Licence Scheme is a brand of the Skills and Education Group, a leading national awarding organisation for providing high-quality vocational qualifications across a wide range of industries.',
                ],
                [
                    'front_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/SM-5.webp',
                    'front_title'       => 'Mental Health & <br>Wellbeing Training',
                    'front_text_one'    => 'This online mental health course is ideal for those who are facing mental health issues and wants to improve their mental well-being or anyone who wants to stay happy and help their loved ones in staying healthy.',
                    'front_text_two'    => 'Accredited Certification',
                    'back_text'         => 'This British Sign Language (BSL) Teachers Training Course at QLS Level 1 & 2 course is endorsed by the Quality Licence Scheme for its high-quality, non- regulated provision and training programmes. The Quality Licence Scheme is a brand of the Skills and Education Group, a leading national awarding organisation for providing high-quality vocational qualifications across a wide range of industries.',
                ],
            ];
            ?>
            <div class="row">
                <?php
                foreach ($flip_box_content as $flip_box_item) : 
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img src="<?php echo $flip_box_item['front_img']; ?>" alt="<?php echo $flip_box_item['front_title']; ?>">
                                <h3><?php echo $flip_box_item['front_title']; ?></h3>
                                <p><?php echo $flip_box_item['front_text_one']; ?></p>
                                <p><?php echo $flip_box_item['front_text_two']; ?></p>
                            </div>
                            <div class="flip-box-back">
                                <p class="staff-p"><?php echo $flip_box_item['front_title']; ?></p>
                                <p><?php echo $flip_box_item['back_text']; ?></p>
                                <button class="staffpopupButton">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="explore-available-course">
                        <h4>Explore More Available Course</h4>
                        <button id="explore-popupbutton" class="popupButton">Speak To An Advisor</button>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"></div>
            </div>
        </div>
    </section>
    <section id="staff-training-sub-part-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Boundless Learning Possibilities</h2>
                    <p>Learners admire us because we look to ensure that you get the quality training you need that works around your schedule, with as many options for where to learn as what to learn.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="staff-training-part-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1">
                    <p><strong>EDUCATION BENEFITS</strong></p>
                    <h3>Limitless Learning And Get More Possibilities</h3>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2 align-self-center order-1 order-sm-1 order-md-1 order-lg-2 order-xl-2">
                    <div class="staff-animated-play-icon">
                        <!-- Animated Play Icon -->
                        <div id="playButton" class="play-button"></div>  
                    </div>                  
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 order-3 order-sm-3 order-md-3 order-lg-3 order-xl-3"></div>
            </div>
        </div>
    </section>
    <section id="staff-training-part-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                    <h2>Develop Your Skills and Knowledge for Career Growth</h2>
                    <p>Thousands of companies trust Lead Academy for their staff training. Your employees can have all the training with the professional development they need, all in one place</p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
            </div>
            <div class="staff-training-part-5-sub">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="staff-training-part-5-left-part">
                            <p>GROWUP YOUR SKILL</p>
                            <h3>Online Training For Your Staff</h3>
                            <?php
                                $growup_skill = [
                                    [
                                        'title'  => 'Access to our entire library of 450+ courses for all staff members',
                                    ],
                                    [
                                        'title'  => 'Engaging learning materials',
                                    ],
                                    [
                                        'title'  => 'Courses compatible with all major browsers and devices',
                                    ],
                                    [
                                        'title'  => 'Diverse range of courses from 10-minute micro- learning video lessons to 40-hour full courses',
                                    ],
                                    [
                                        'title'  => 'CPD approved learning material',
                                    ],
                                    [
                                        'title'  => 'New course material regularly added',
                                    ],
                                    [
                                        'title'  => '24-hour customer support',
                                    ],
                                    [
                                        'title'  => 'Dedicated account managers',
                                    ],
                                ];
                            ?>
                            <ul>
                            <?php
                            foreach ($growup_skill as $growup_skill_item) : 
                            ?>
                                <li>
                                    <span><i class="fa-solid fa-check"></i></span>
                                    <span><?php echo $growup_skill_item['title']; ?></span>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="staff-training-part-5-right-part">
                            <?php echo do_shortcode('[contact-form-7 id="fb6949d" title="Staff Training"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="staff-training-part-6">
        <div class="container">
            <div class="row">
                <?php
                    $staff_sub_list = [
                        [
                            'image'  => 'https://lead-academy.org/wp-content/uploads/0223/12/online-learning.webp',
                            'title'  => '100% <br> Online Learning',
                        ],
                        [
                            'image'  => 'https://lead-academy.org/wp-content/uploads/0223/12/account-manager.webp',
                            'title'  => 'Dedicated <br> Account Manager',
                        ],
                        [
                            'image'  => 'https://lead-academy.org/wp-content/uploads/0223/12/kyc.webp',
                            'title'  => 'Easy <br> Invoicing',
                        ],
                        [
                            'image'  => 'https://lead-academy.org/wp-content/uploads/0223/12/invoice.webp',
                            'title'  => 'Agreed <br> payment terms',
                        ],
                        [
                            'image'  => 'https://lead-academy.org/wp-content/uploads/0223/12/learning.webp',
                            'title'  => 'Delivered By <br> Industry Experts',
                        ],
                        [
                            'image'  => 'https://lead-academy.org/wp-content/uploads/0223/12/expert.webp',
                            'title'  => 'Industry recognised <br> Qualifications',
                        ],
                    ];
                ?>
                <?php
                foreach ($staff_sub_list as $staff_sub_list_item) : 
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-2">
                    <div class="staff-training-part-6-icon">
                        <img src="<?php echo $staff_sub_list_item['image']; ?>" alt="<?php echo $staff_sub_list_item['title']; ?>">
                        <p><?php echo $staff_sub_list_item['title']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="staff-training-part-7" id="fsc-partners">
        <div class="container">
            <div class="row">
                <div class="staff-training-part-association">
                    <h2>Approved and Accredited</h2>
                    <p>We work in association with industry experts</p>
                </div>
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
            </div>
        </div>
    </section>
    <section class="staff-training-part-8">
        <div class="container">
            <div class="row">
                <div class="staff-training-part-8-text">
                    <h2>What Our Customers Say About Us</h2>
                    <p>We're very proud of what our learners achieve, here you can read about some of their learning journeys with Lead Academy.</p>
                </div>
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
            $course_reviews = get_post_meta( get_the_ID(), 'la_course_reviews', true);
            if (function_exists('la_display_reviews_section')) {
                la_display_reviews_section();
            }
        ?>
    </section>

        <!-- Popup structure -->
        <section id="google-reviews-popup">
            <div id="popup" class="popup">
                <div class="popup-content">
                    <span id="closePopupBtn" class="close">&times;</span>
                    <div class="google-popup-review-all-box">
                        <div class="google-review-la-logo">
                            <img src="https://lead-academy.org/wp-content/uploads/2013/11/lead-academy-logo.webp" alt="Lead Academy Logo" title="lead-academy-logo">
                        </div>

                        <?php foreach ($google_review_items as $review) : ?>
                            <div class="google-review-popup-box">
                                <div class="row">
                                    <div class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                                        <div class="google-review-user-img">
                                            <?php
                                            $fallback_image = 'https://lead-academy.org/wp-content/uploads/0223/12/download.jpeg';

                                            // Check if user image exists
                                            if (!empty($review['review_user_img'])) {
                                                $user_img = $review['review_user_img'];
                                            } else {
                                                $user_name = !empty($review['review_user_name']) ? $review['review_user_name'] : 'User';
                                                $first_letter = strtoupper($user_name[0]);
                                                $user_img = 'https://ui-avatars.com/api/?name=' . urlencode($first_letter) . '&background=random&size=128';
                                            }
                                            ?>
                                            <img src="<?php echo esc_url($user_img); ?>" alt="<?php echo esc_attr($review['review_user_name']); ?>" style="color: white;">
                                        </div>
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-10 col-lg-10 col-xl-10">
                                        <div class="google-review-popup-content">
                                            <h3><?php echo esc_html($review['review_user_name']); ?></h3>
                                            <div class="google-review-popup-star-icon">
                                                <?php
                                                $rating = $review['review_rating'];

                                                $fullStars = floor($rating);
                                                $halfStar = $rating - $fullStars >= 0.5 ? 1 : 0;
                                                $emptyStars = 5 - $fullStars - $halfStar;

                                                for ($i = 0; $i < $fullStars; $i++) {
                                                    echo '<span><i class="fa-solid fa-star"></i></span>';
                                                }
                                                if ($halfStar) {
                                                    echo '<span><i class="fa-solid fa-star-half-alt"></i></span>';
                                                }
                                                for ($i = 0; $i < $emptyStars; $i++) {
                                                    echo '<span><i class="fa-regular fa-star"></i></span>';
                                                }
                                                ?>
                                            </div>
                                            <p><?php echo esc_html($review['review_text']); ?></p>
                                        </div>
                                    </div>
                                    <div class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                                        <div class="google-review-logo">
                                            <img src="https://lead-academy.org/wp-content/uploads/0223/12/google_g_icon_download.webp" alt="Google Icon">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="staff-training-part-9" id="fsc-partners">
        <div class="container">
            <div class="row">
                <div class="staff-training-part-association">
                    <h2>Top Organisations Choose Our <span>Staff Training</span> To Develop Their Skills.</h2>
                </div>
                <div class="owl-carousel owl-fsc-partners">
                <?php
                $partners = [
                    [
                        'img_alt' => 'nhs-logo',
                        'img_src' => '/wp-content/uploads/2022/09/nhs-logo.png',
                    ],
                    [
                        'img_alt' => 'unilever-logo',
                        'img_src' => '/wp-content/uploads/2022/09/unilever-logo-1.png',
                    ],
                    [
                        'img_alt' => 'absa-logo',
                        'img_src' => '/wp-content/uploads/2022/09/absa-logo.png',
                    ],
                    [
                        'img_alt' => 'mtn-logo',
                        'img_src' => '/wp-content/uploads/2022/09/mtn-logo.png',
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
            </div>
        </div>
    </section>
    <section id="staff-training-part-10">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Join Over 49 <span>Companies</span> Worldeide</h2>
                    <p>Train your team up for success with Lead Academy</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="staff-training-counter training-counter-1">
                        <p>1,068</p>
                        <h3>Online Courses</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="staff-training-counter training-counter-2">
                        <p>255</p>
                        <h3>Total instructor</h3>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="staff-training-counter training-counter-3">
                        <p>49</p>
                        <h3>Companies Worldwide</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Form Popup -->
    <div class="staff-training-flip-box" id="staffpopup">
        <div class="popup-content">
            <span class="staffclose">&times;</span>
            <h2>SPEAK TO US TODAY</h2>
            <p><?php echo do_shortcode('[contact-form-7 id="f61a542" title="SPEAK TO US TODAY"]'); ?></p>
        </div>
    </div>
    <!-- YouTube Popup -->
    <div class="staff-training-video popup" id="youtubePopup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <!-- Embed YouTube video here -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XV1Q3Vdtc24?si=Lt84QR2SxOL6u49w" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
<?php
    get_footer();
?>
