<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
<section id="first-aid-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/accident-work-construction-labor-people-basic-first-aid-cpr-training-outdoor-1-min-scaled-1.webp" alt="first aid banner">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <h1>Looking for</h1>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <h2>a First Aid Certificate?</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="first-aid-trustpilot">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="first-aid-2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-self-center">
                <p>Almost all companies in the UK require the employees to have basic first aid training that will help workplaces achieve the required health and safety standards so that both employees and employers can benefit from it. Our fully accredited online First Aid courses are specially designed to equip you with the essential first aid skills and help boost your confidence to provide first aid assistance during any severe life threatening situation.</p>
            </div>
            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 align-self-center">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/CPD-min.webp" alt="CPD Logo">
            </div>
            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 align-self-center">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/QLS-min.webp" alt="QLS Logo">
            </div>
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 align-self-center">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/IPHM-logo-min.webp" alt="IPHM Logo">
            </div>
        </div>
    </div>
</section>
<section id="first-aid-3">
    <div class="container">
        <div class="row">
            <h2>Explore our exclusive range of First Aid Training Courses available below</h2>
            <?php
                $first_aid_course_items = [
                    [
                        'course_img'    => 'https://lead-academy.org/wp-content/uploads/0223/12/Paediatric.webp',
                        'course_title'  => 'Paediatric First <br>Aid Course',
                        'course_text'   => 'This course is ideal for parents or anyone who works with infants or children on a daily basis, providing you with valuable skills on how to handle any emergency or life threatening situation with Paediatric First Aid assistance.',
                        'course_url'    => 'https://lead-academy.org/course/paediatric-first-aid',
                    ],
                    [
                        'course_img'    => 'https://lead-academy.org/wp-content/uploads/0223/12/First-Aid.webp',
                        'course_title'  => 'Emergency First Aid at Work <br> (EFAW) Refresher Course',
                        'course_text'   => 'This course is designed to equip you with the essential knowledge and skills that will enable you to respond and provide first aid assistance during any emergency or life threatening situation at work.',
                        'course_url'    => 'https://lead-academy.org/course/emergency-first-aid-at-work-efaw-refresher-course',
                    ],
                    [
                        'course_img'    => 'https://lead-academy.org/wp-content/uploads/0223/12/Sports-First-Aid.webp',
                        'course_title'  => 'Sports First Aid <br> Course Online',
                        'course_text'   => 'This course will equip you with the adequate knowledge and skills on both basic and advanced first aid assistance to respond to any form of sports casualties that may result in fatal consequences causing permanent….',
                        'course_url'    => 'https://lead-academy.org/course/sports-first-aid-course',
                    ],
                    [
                        'course_img'    => 'https://lead-academy.org/wp-content/uploads/0223/12/Dog-First-Aid.webp',
                        'course_title'  => 'Accredited Dog <br> First Aid Course Online',
                        'course_text'   => 'This course is ideal for any dog trainer, owner or anyone volunteering in animal care looking to acquire in-depth knowledge and skills about providing first aid assistance to dogs in case of any emergency or life threatening situation.',
                        'course_url'    => 'https://lead-academy.org/course/dog-first-aid-course',
                    ],
                    [
                        'course_img'    => 'https://lead-academy.org/wp-content/uploads/0223/12/Basic-Life-Support-1.webp',
                        'course_title'  => 'Basic Life Support <br> Online Training Course',
                        'course_text'   => 'This course will equip you with the basic life-support training to provide immediate care and assistance during any emergency or life threatening situation that will prevent the patient from acquiring any temporary or…..',
                        'course_url'    => 'https://lead-academy.org/course/basic-life-support-online-training-course',
                    ],
                    [
                        'course_img'    => 'https://lead-academy.org/wp-content/uploads/0223/12/Mental-Health-First-Aid.webp',
                        'course_title'  => 'Mental Health First Aid <br> Training Course Online',
                        'course_text'   => 'This course will help you identify individuals who are going through mental health issues and understand how to regulate a wellness strategy within your workplace to provide mental health first aid assistance to those…..',
                        'course_url'    => 'https://lead-academy.org/course/mental-health-first-aid-at-work-online-course',
                    ],
                ];
                foreach( $first_aid_course_items as $first_aid_course ) : 
            ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="first-aid-course-box">
                    <img src="<?php echo $first_aid_course['course_img']?>" alt="<?php echo $first_aid_course['course_title']?>">
                    <h3><a href="<?php echo $first_aid_course['course_url']?>"><?php echo $first_aid_course['course_title']?></a></h3>
                    <p><?php echo $first_aid_course['course_text']?></p>
                    <div class="first-aid-course-price">
                        <del>£125.00</del>
                        <p>£29.00</p>
                    </div>
                    <div class="first-aid-course-btn">
                        <a href="<?php echo $first_aid_course['course_url']?>">Learn More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section id="bundle-why-should-train" class="first-aid-4">
    <div class="container">
        <div class="row">
            <h2>Why You Should Train With <br> Lead Academy</h2>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/website.webp" alt="website">
                    <h3>Wide range of courses</h3>
                    <p>Lead Academy offers a wide range of online courses in a number of different categories to match your specific interest</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/clipboard.webp" alt="clipboard">
                    <h3>Comprehensive Syllabus</h3>
                    <p>Our courses are designed and taught by expert tutors and industry experts that will help you gain solid skills and credentials to shape your career with a positive outlook.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/comments.webp" alt="comments">
                    <h3>Flexible Assessment</h3>
                    <p>Our courses are designed with an effective and flexible assessment framework that allows you to determine the level of your absorption of skills and knowledge towards the end of each module. Upon successful completion of the evaluation, you will receive an instant feedback of your result.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/support.webp" alt="support">
                    <h3>Expert Tutor Support</h3>
                    <p>Upon enrollment to any of our courses, you will receive access to our expert and experienced tutor support and guidance whenever you need.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/certificate-1-1.webp" alt="certificate">
                    <h3>Comprehensive Syllabus</h3>
                    <p>The syllabus of each course is designed to meet the required quality standards and benchmarks.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/guarantee.webp" alt="guarantee">
                    <h3>Active Customer Support</h3>
                    <p>We have active customer support in the form of live chat that you can access and enjoy 24/7.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="first-aid-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-2 order-sm-2 order-md-2 order-lg-1 order-xl-1">
                <p><strong>If You Are Interested In...</strong></p>
                <h2>Staff Training</h2>
                <h3>Learning Solutions For Businesses of all sizes</h3>
                <p>Thousands of companies trust Lead Academy for their staff training. Your employees can have all the training with the professional development they need, all in one place. All of our courses are accredited by CPD UK and IPHM. CPD is globally recognised by employers, professional organisations and academic intuitions, thus a certificate from CPD Certification Service creates value towards your professional goal and achievement. All our courses are designed by industry experts, meaning we follow rigorous standards of quality in our teaching and provide quality education.</p>
                <a href="https://lead-academy.org/staff-training">Learn More</a>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 order-1 order-sm-1 order-md-1 order-lg-2 order-xl-2">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/multi-ethnic-group-women-with-various-occupations-1-min-1536x1229-1.webp" alt="Staff Training">
            </div>
        </div>
    </div>
</section>
<section class="first-aid-6">
    <div class="container">
        <div class="row">
            <div class="first-aid-6-text">
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
<section class="first-aid-7" id="fsc-partners">
    <div class="container">
        <div class="row">
            <div class="first-aid-7-title-text">
                <h2>Trusted By</h2>
                <p>Lead by a team trusted by the most renowned and exciting companies across the globe!</p>
            </div>
            <div class="owl-carousel owl-fsc-partners">
            <?php
            $partners = [
                [
                    'img_alt' => 'uwtsd-logo',
                    'img_src' => '/wp-content/uploads/2022/09/uwtsd.png',
                ],
                [
                    'img_alt' => 'NHS-logo',
                    'img_src' => '/wp-content/uploads/2022/09/NHS.png',
                ],
                [
                    'img_alt' => 'MTN-logo',
                    'img_src' => '/wp-content/uploads/2022/09/MTN.png',
                ],
                [
                    'img_alt' => 'McDonalds-logo',
                    'img_src' => '/wp-content/uploads/2022/09/McDonalds.png',
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
<section id="subscription-course-cate">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="subscription-course-cate-text">
                        <h2>You may also be interested in our other training courses</h2>
                        <p>We specialise in online training and offer over 160 certified courses covering the following areas of compliance and personal development:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $subs_course_cate_items = [
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Food-Hygiene-min.webp',
                        'cate_title'   => 'Food Hygiene',
                        'cate_url'     => '/category/food-hygiene',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Health-Safety-min.webp',
                        'cate_title'   => 'Health & Safety',
                        'cate_url'     => '/category/health-and-safety',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Safeguarding-People-min.webp',
                        'cate_title'   => 'Safeguarding People',
                        'cate_url'     => '/category/health-and-social-care/safeguarding',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Photography-min.webp',
                        'cate_title'   => 'Photography',
                        'cate_url'     => '/category/personal-development/photography',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Education-Courses-min.webp',
                        'cate_title'   => 'Education & Courses',
                        'cate_url'     => '/category/teaching-and-education',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Business-Skill-min.webp',
                        'cate_title'   => 'Business Skill',
                        'cate_url'     => '/category/leadership-and-management/business-management',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Financial-Services-min.webp',
                        'cate_title'   => 'Financial Services',
                        'cate_url'     => '/category/accounting-and-bookkeeping',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Animal-Carev-min.webp',
                        'cate_title'   => 'Animal Care',
                        'cate_url'     => '/category/animal-care',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Personal-Development-min.webp',
                        'cate_title'   => 'Personal Development',
                        'cate_url'     => '/category/personal-development',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Accounting-min.webp',
                        'cate_title'   => 'Accounting',
                        'cate_url'     => '/category/accounting-and-bookkeeping',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Counselling-Psychology-min.webp',
                        'cate_title'   => 'Counselling & Psychology',
                        'cate_url'     => '/category/counselling-and-psychology',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Leadership-Management-min.webp',
                        'cate_title'   => 'Leadership & Management',
                        'cate_url'     => '/category/leadership-and-management',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/beauty-Makeup-min.webp',
                        'cate_title'   => 'Beauty & Makeup',
                        'cate_url'     => '/category/makeup-and-beauty',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/language-min.webp',
                        'cate_title'   => 'Language',
                        'cate_url'     => '/category/language',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Project-management-min.webp',
                        'cate_title'   => 'Life coaching',
                        'cate_url'     => '/category/personal-development/life-coaching',
                    ],
                    [
                        'cate_img'     => '/wp-content/uploads/0223/12/Health-Fitness-min.webp',
                        'cate_title'   => 'Health & Fitness',
                        'cate_url'     => '/category/sports-and-fitness',
                    ],
                ];
                foreach( $subs_course_cate_items as $cate_item ) : ?>
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                    <div class="subs-course-cate-box">
                        <img src="<?php echo $cate_item['cate_img']; ?>" alt="<?php echo $cate_item['cate_title']; ?>">
                        <h3><a href="<?php echo $cate_item['cate_url']; ?>"><?php echo $cate_item['cate_title']; ?></a></h3>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="course-cate-btn-text">
                <a href="https://lead-academy.org/all-courses">See Our All Courses</a>
            </div>
        </div>
    </section>

<?php
get_footer();
?>