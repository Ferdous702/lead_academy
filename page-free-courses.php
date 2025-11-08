<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<section id="free-courses-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h1>Start Learning with Our Free Courses</h1>
                <p>Develop your professional skills with our free certification courses. Lead Academy is a leading provider of online training, learning, connecting millions of students to the skills they need to succeed with accredited certificate for free.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6"></div>
        </div>
    </div>
</section>
<section id="free-courses-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-2 order-sm-2 order-md-1 order-lg-1 order-xl-1">
                <div class="free-course-2-small-img">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <img src="/wp-content/uploads/0223/12/cpd-1024x576-1.webp" alt="CPD Logo">
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <img src="/wp-content/uploads/0223/12/Rospa-Member-1.webp" alt="Rospa Member Logo">
                        </div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <img src="/wp-content/uploads/0223/12/QLS-Logo-Colour.webp" alt="QLS Logo">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 order-1 order-sm-1 order-md-2 order-lg-2 order-xl-2">
                <div class="free-course-2-big-img">
                    <img src="/wp-content/uploads/0223/12/happy-young-university-students-friends-studying-with-books-at-university-e1606792560854.webp" alt="Lead Academy">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="free-courses-3">
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-8 col-md-8 col-lg-7 col-xl-7 align-self-center">
                <div class="free-courses-3-title">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 align-self-center">
                            <h2>Popular Free Courses</h2>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 align-self-center">
                            <p>Explore from 500+ online courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-5 col-xl-5 align-self-center">
                <div class="free-courses-3-btn">
                    <a href="/all-courses">VIEW ALL</a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                $free_course_card = [
                    [
                        'img'          => '/wp-content/uploads/2022/12/Craft-of-Writing-Course-Online.webp',
                        'info_text_1'  => '20',
                        'info_text_2'  => '1247',
                        'title'        => 'Craft Of Writing',
                        'rating_point' => '4.9',
                        'text'         => 'Grab the opportunity to accelerate your career with Craft of Writing Course',
                        'url'          => '/course/craft-of-writing',
                    ],
                    [
                        'img'          => '/wp-content/uploads/2022/12/Mini-Fiction-Writing-Course-2.webp',
                        'info_text_1'  => '10',
                        'info_text_2'  => '1532',
                        'title'        => 'Mini Fiction Writing Course',
                        'rating_point' => '5.0',
                        'text'         => 'Grab the opportunity to accelerate your career with Mini Fiction Writing Course',
                        'url'          => '/course/mini-fiction-writing-course',
                    ],
                    [
                        'img'          => '/wp-content/uploads/2022/12/Complete-Course-to-Writing-and-Making-Money-Online.webp',
                        'info_text_1'  => '13',
                        'info_text_2'  => '1387',
                        'title'        => 'Complete Guide To Writing',
                        'rating_point' => '4.8',
                        'text'         => 'Grab the opportunity to accelerate your career with Complete guide to Writing Course',
                        'url'          => '/course/complete-guide-to-writing-and-making-money-online',
                    ],
                    [
                        'img'          => '/wp-content/uploads/2022/12/Autobiography-Writing-Course-Online.webp',
                        'info_text_1'  => '05',
                        'info_text_2'  => '1874',
                        'title'        => 'Autobiography Writing',
                        'rating_point' => '4.9',
                        'text'         => 'Grab the opportunity to accelerate your career with Autobiography Writing Course',
                        'url'          => '/course/autobiography-writing',
                    ],
                    [
                        'img'          => '/wp-content/uploads/2022/12/Healthy-Families.webp',
                        'info_text_1'  => '13',
                        'info_text_2'  => '1517',
                        'title'        => 'Healthy Families',
                        'rating_point' => '4.8',
                        'text'         => 'Grab the opportunity to accelerate your career with Healthy Families Course',
                        'url'          => '/course/healthy-families',
                    ],
                ];
                foreach ($free_course_card as $free_course) : ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="free-course-card">
                    <img src="<?php echo $free_course['img']; ?>" alt="<?php echo $free_course['title']; ?>">
                    <div class="free-course-info">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <li>
                                    <span><i aria-hidden="true" class="fas fa-book"></i></span>
                                    <span><?php echo $free_course['info_text_1']; ?> Lessons</span>
                                </li>
                            </div>
                            <div class="col-6 col-sm-6 col-md-5 col-lg-5 col-xl-5">
                                <li>
                                    <span><i aria-hidden="true" class="fas fa-user-graduate"></i></span>
                                    <span><?php echo $free_course['info_text_2']; ?> Learners</span>
                                </li>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                <p>FREE</p>
                            </div>
                        </div>
                    </div>
                    <h3><a href="<?php echo $free_course['url']; ?>"><?php echo $free_course['title']; ?></a></h3>
                    <div class="google-review-popup-star-icon">
                        <span class="free-course-rating-text"><?php echo $free_course['rating_point']; ?></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <p class="free-course-card-text"><?php echo $free_course['text']; ?></p>
                    <ul class="free-course-btm-info">
                        <li>
                            <span><i aria-hidden="true" class="fas fa-certificate"></i></span>
                            <span>CPD Certified</span>
                        </li>
                    </ul>
                    <a class="free-course-btn" href="<?php echo $free_course['url']; ?>">Enrol now</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="free-all-course-btn">
            <a href="/all-courses">BROWSE ALL COURSES</a>
        </div>
    </div>
</section>
<section id="free-courses-4">
    <div class="container">
        <div class="free-courses-4-text-title">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2 col-lg-3 col-xl-3"></div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-6 col-xl-6">
                    <h2>Premium Courses</h2>
                    <p>Learn most in-demand skills and start savings today! Grab the best deals before it expire!</p>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-3 col-xl-3"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 align-self-center">
                <div class="premium-courses-offer">
                    <div class="premium-courses-offer-text">
                        <div class="row">
                            <div class="col-7 col-sm-7 col-md-7 col-lg-8 col-xl-8">
                                <h2>SAVE 94%</h2>
                            </div>
                            <div class="col-5 col-sm-5 col-md-5 col-lg-4 col-xl-4 d-flex align-items-end">
                                <p>Ending Soon...</p>
                            </div>
                        </div>
                        <h3>Spring Sale 2024</h3>
                        <div id="premium-courses-offer-clock">
                            <div class="premium-courses-countdown-item">
                                <span class="time-part" id="hours">00</span><br>
                                <span class="time-part-text">Hours</span>
                            </div>
                            <div class="premium-courses-countdown-item">
                                <span class="time-part" id="minutes">00</span><br>
                                <span class="time-part-text">Minutes</span>
                            </div>
                            <div class="premium-courses-countdown-item">
                                <span class="time-part" id="seconds">00</span><br>
                                <span class="time-part-text">Seconds</span>
                            </div>
                        </div>
                        <p class="premium-courses-offer-text-2">Use promo <span>“EXTRA20”</span> and enjoy extra 20% discount on all of our premium courses</p>
                    </div>
                </div>
            </div>
                <?php
                    $premium_course_card = [
                        [
                            'img'          => 'https://lead-academy.org/wp-content/uploads/2022/12/120-hours-TEFL-TESOL-Certification-1-1-310x186-1.webp',
                            'info_text_1'  => '10',
                            'info_text_2'  => '973',
                            'price'        => '£25',
                            'title'        => '120 Hours TEFL / TESOL Certification',
                            'rating_point' => '5.0',
                            'text'         => 'Grab the opportunity to accelerate your career with this comprehensive 120 hours TEFL / TESOL Certification course.',
                            'url'          => 'https://lead-academy.org/course/120-hours-tefl-tesol-course',
                        ],
                        [
                            'img'          => 'https://lead-academy.org/wp-content/uploads/2022/12/British-Sign-Language-BSL-at-QLS-Level-1-2.webp',
                            'info_text_1'  => '206',
                            'info_text_2'  => '5791',
                            'price'        => '£29',
                            'title'        => 'British Sign Language (BSL) At QLS Level 1 & 2',
                            'rating_point' => '5.0',
                            'text'         => 'This course is designed to enable learners to develop their professional skills to communicate with Deaf people.',
                            'url'          => 'https://lead-academy.org/course/british-sign-language-bsl-level-1-2',
                        ],
                        [
                            'img'          => 'https://lead-academy.org/wp-content/uploads/2022/12/child-counsellor.webp',
                            'info_text_1'  => '24',
                            'info_text_2'  => '5143',
                            'price'        => '£25',
                            'title'        => 'Child Counsellor At QLS Level 3',
                            'rating_point' => '4.9',
                            'text'         => 'You will gain extensive knowledge to deal with the children emotionally and mentally.',
                            'url'          => 'https://lead-academy.org/course/child-counsellor-level-3',
                        ],
                        [
                            'img'          => 'https://lead-academy.org/wp-content/uploads/2022/12/payroll-administrator.webp',
                            'info_text_1'  => '35',
                            'info_text_2'  => '903',
                            'price'        => '£25',
                            'title'        => 'Payroll Administrator Training',
                            'rating_point' => '4.9',
                            'text'         => 'Brush up your skills in Payroll Administration with this comprehensive training.',
                            'url'          => 'https://lead-academy.org/course/payroll-management-course-online',
                        ],
                        [
                            'img'          => 'https://lead-academy.org/wp-content/uploads/2022/12/English-Spelling-Punctuation-and-Grammar.webp',
                            'info_text_1'  => '89',
                            'info_text_2'  => '270',
                            'price'        => '£25',
                            'title'        => 'English: Spelling, Punctuation And Grammar',
                            'rating_point' => '4.9',
                            'text'         => 'This online English skills course aims to educate those who want to communicate with native people.',
                            'url'          => 'https://lead-academy.org/course/english-spelling-punctuation-and-grammar',
                        ],
                    ];
                    foreach ($premium_course_card as $premium_course) : ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="free-course-card">
                    <img src="<?php echo $premium_course['img']; ?>" alt="<?php echo $premium_course['title']; ?>">
                    <div class="free-course-info">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <li>
                                    <span><i aria-hidden="true" class="fas fa-book"></i></span>
                                    <span><?php echo $premium_course['info_text_1']; ?> Lessons</span>
                                </li>
                            </div>
                            <div class="col-6 col-sm-6 col-md-5 col-lg-5 col-xl-5">
                                <li>
                                    <span><i aria-hidden="true" class="fas fa-user-graduate"></i></span>
                                    <span><?php echo $premium_course['info_text_2']; ?> Learners</span>
                                </li>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                <p><?php echo $premium_course['price']; ?></p>
                            </div>
                        </div>
                    </div>
                    <h3><a href="<?php echo $premium_course['url']; ?>"><?php echo $premium_course['title']; ?></a></h3>
                    <div class="google-review-popup-star-icon">
                        <span class="free-course-rating-text"><?php echo $premium_course['rating_point']; ?></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <p class="free-course-card-text"><?php echo $premium_course['text']; ?></p>
                    <ul class="free-course-btm-info">
                        <li>
                            <span><i aria-hidden="true" class="fas fa-certificate"></i></span>
                            <span>CPD Certified</span>
                        </li>
                        <li>
                            <span><i aria-hidden="true" class="fas fa-award"></i></span>
                            <span>Quality License Scheme Endorsed</span>
                        </li>
                    </ul>
                    <a class="free-course-btn" href="<?php echo $premium_course['url']; ?>">Enrol now</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="free-all-course-btn">
            <a href="/all-courses">ALL PREMIUM COURSES</a>
        </div>
    </div>
</section>
<section id="free-courses-5">
    <div class="container">
        <div class="row">
            <div class="trending-courses-title-text">
                <p>EXPLORE SOMETHING NEW</p>
                <h2>Trending Courses</h2>
            </div>
        </div>
        <div class="row">
            <?php
                $trending_course_card = [
                    [
                        'img'          => 'https://lead-academy.org/wp-content/uploads/2022/09/IELTS-Exam-Preparation-Course3.jpg',
                        'title'        => 'Academic IELTS Preparation Course',
                        'text'         => 'Grab the opportunity to accelerate your career with this comprehensive IELTS preparation course.',
                        'url'          => 'https://lead-academy.org/course/academic-ielts-test-preparation-course',
                    ],
                    [
                        'img'          => 'https://lead-academy.org/wp-content/uploads/2022/09/British-Sign-Language-BSL-Teachers-Training-Course-Level-1-2-2.jpg',
                        'title'        => 'British Sign Language (BSL) Level 1 & 2',
                        'text'         => 'This course is designed to enable learners to develop their skills to communicate with Deaf people.',
                        'url'          => 'https://lead-academy.org/course/british-sign-language-bsl-level-1-2',
                    ],
                    [
                        'img'          => 'https://lead-academy.org/wp-content/uploads/2022/09/22.-Digital-Marketing1.jpg',
                        'title'        => 'Digital Marketing For Coaches & Trainers',
                        'text'         => 'This comprehensive course is the perfect way to kickstart your career in the field of digital marketing.',
                        'url'          => 'https://lead-academy.org/course/digital-marketing-for-coaches-trainers',
                    ],
                ];
                foreach ($trending_course_card as $trending_course) : ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="free-course-card trending-courses-card">
                    <img src="<?php echo $trending_course['img']; ?>" alt="<?php echo $trending_course['title']; ?>">
                    <h3><a href="<?php echo $trending_course['url']; ?>"><?php echo $trending_course['title']; ?></a></h3>
                    <p class="trending-courses-trainer"><strong>Trainer:</strong> Industry Professionals</p>
                    <p class="free-course-card-text"><?php echo $trending_course['text']; ?></p>
                    <a class="free-course-btn trending-courses-btn" href="<?php echo $trending_course['url']; ?>">Enrol now</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="fsc-partners" class="free-courses-6">
    <div class="fsc-container">
        <h2>Trusted By</h2>
    </div>
    <div class="fsc-container">
        <div class="owl-carousel owl-fsc-partners">
            <?php
            $partners = [
                [
                    'img_alt' => 'CPD Member',
                    'img_src' => '/wp-content/uploads/2022/09/CPD-Member.png',
                ],
                [
                    'img_alt' => 'QLS Logo',
                    'img_src' => '/wp-content/uploads/2022/09/QLS-Logo-Colour.png',
                ],
                [
                    'img_alt' => 'Rospa Member',
                    'img_src' => '/wp-content/uploads/2022/09/Rospa-Member.png',
                ],
                [
                    'img_alt' => 'awards Logo',
                    'img_src' => '/wp-content/uploads/2022/09/awards-Logo-6-3.png',
                ],
                [
                    'img_alt' => 'Reed Logo',
                    'img_src' => '/wp-content/uploads/2022/09/Reed-Logo-1.png',
                ],
                [
                    'img_alt' => 'awards Logo',
                    'img_src' => '/wp-content/uploads/2022/09/awards-Logo-7-3-1.png',
                ],
                [
                    'img_alt' => 'Wowcher Logo',
                    'img_src' => '/wp-content/uploads/2022/09/Wowcher-Logo-1.png',
                ],
                [
                    'img_alt' => 'Laimoon',
                    'img_src' => '/wp-content/uploads/2022/09/Laimoon-1.png',
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
<script>
    function updateTime() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');

        document.getElementById('hours').textContent = hours;
        document.getElementById('minutes').textContent = minutes;
        document.getElementById('seconds').textContent = seconds;
    }

    setInterval(updateTime, 1000);
    updateTime(); // initial call to set time immediately
</script>
<?php
get_footer();
?>