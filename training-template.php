<?php
/**
 * Template Name: Training Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 

$current_product_id 		= get_the_ID();						
$wc_product_faqs 			= get_post_meta( $current_product_id, 'product_faqs', true);
$course_reviews 			= get_post_meta( $current_product_id, 'la_course_reviews', true);            
?>
<!-- Top 3 -->
<section id="phuk-top-3-sec">
    <div class="container">
        <div class="phlebotomy-top-3">
            <div class="phlebotomy-container">
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="Face-to-Face Training Session">
                        </div>
                        <div class="float-right">     
                            <h6>Face-to-Face Training Session </h6>
                            <p>to provide you with the top notch learning experience</p>
                        </div>
                    </div>        
                </div>
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="/wp-content/uploads/2022/12/instalment.webp" alt="4 Instalment Plan on Checkout">
                        </div>
                        <div class="float-right">         
                            <h6>4 Instalment Plan on Checkout</h6>
                            <p>to ensure that money doesn’t become a barrier to learning</p>
                        </div>
                    </div>        
                </div>
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="/wp-content/uploads/2022/12/14-days.webp" alt="Learn From Industry Expert">
                        </div>
                        <div class="float-right">         
                            <h6>Learn From Industry Expert</h6>
                            <p>to outshine by learning the most effective strategies</p>
                        </div>
                    </div>        
                </div>
            </div>   
        </div>
    </div>
</section>
<!-- Top 3 End -->

<!-- Phlebotomy  Hero Section -->
<section id="phuk-hero-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                <h1><?php the_title()?></h1>
                <p>NHS approved and CPD Certified training equips you with the necessary skills and knowledge to ensure you meet the highest standards in healthcare.</p>
                <img src="/wp-content/uploads/2022/12/trust-pilot-micro-combo-2.webp" alt="Trustpilot Logo">
               <!-- <a href="#">View Courses</a> -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5"></div>
        </div>
    </div>
</section>
<!-- Phlebotomy  Hero Section End -->

<!-- Phlebotomy About Section -->
<section id="phuk-about-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 phuk-about-text-col">
                <div class="phuk-about-text">
                    <h3>Why Should You Take Phlebotomy Training With Us?</h3>
                    <h2>Best Phlebotomy Training Sessions</h2>
                    <p>We offer comprehensive face-to-face phlebotomy training, covering topics such as blood collection techniques, infection control, and patient care. With hands-on practise and guidance from experienced instructors, you can gain the confidence and expertise needed to excel in this essential healthcare role.  </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="phuk-about-video">
                    <?php echo do_shortcode( '[video src="https://www.youtube.com/watch?v=Cd9KWB50ztI" poster="https://lead-academy.org/wp-content/uploads/2023/09/phuk-video-cover.webp"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Phlebotomy About Section End -->

<!-- Phlebotomy Our Venue Section -->
<section id="phuk-venue-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2>Our Venues</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/09/Bristol.webp" alt="Phlebotomy Training London">
                    <div class="phuk-btm-box">
                        <h3><a href="/phlebotomy-training-london">Phlebotomy Training</a></h3>
                        <h4><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> London</h4>
                        <ul>
                            <li>1 Day Face to Face Training</li>
                            <li>4 Instalments at Checkout</li>
                            <li>Accredited by CPD UK</li>
                            <li>Unlimited Tutor Support</li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/phlebotomy-training-london">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/09/Birmingham.webp" alt="Phlebotomy Training Birmingham">
                    <div class="phuk-btm-box">
                        <h3><a href="/course/phlebotomy-training-birmingham">Phlebotomy Training</a></h3>
                        <h4><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> Birmingham</h4>
                        <ul>
                            <li>1 Day Face to Face Training</li>
                            <li>4 Instalments at Checkout</li>
                            <li>Accredited by CPD UK</li>
                            <li>Unlimited Tutor Support</li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/course/phlebotomy-training-birmingham">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/09/phlebotomy-courses-at-a-glance-4.webp" alt="Phlebotomy Training Bristol">
                    <div class="phuk-btm-box">
                        <h3><a href="/course/phlebotomy-training-bristol">Phlebotomy Training</a></h3>
                        <h4><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> Bristol</h4>
                        <ul>
                            <li>1 Day Face to Face Training</li>
                            <li>4 Instalments at Checkout</li>
                            <li>Accredited by CPD UK</li>
                            <li>Unlimited Tutor Support</li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/course/phlebotomy-training-bristol">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="phuk-card-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/09/Swindon.webp" alt="Phlebotomy Training Swindon">
                    <div class="phuk-btm-box">
                        <h3><a href="/course/phlebotomy-training-swindon">Phlebotomy Training</a></h3>
                        <h4><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><style>svg{fill:#c52855}</style><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg> Swindon</h4>
                        <ul>
                            <li>1 Day Face to Face Training</li>
                            <li>4 Instalments at Checkout</li>
                            <li>Accredited by CPD UK</li>
                            <li>Unlimited Tutor Support</li>
                        </ul>
                        <div class="phuk-course-btn">
                            <a href="/course/phlebotomy-training-swindon">BOOK NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Phlebotomy Our Venue Section End -->

<!-- The Advanced Phlebotomy Section -->
<section id="phuk-avanced-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="phuk-advance-img">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/09/Advanced-Phlebotomy.webp" alt="The Advanced Phlebotomy">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 phuk-advance-col">
                <div class="phuk-advance-text">
                    <h3>How To Learn Advanced Phlebotomy & Gain Competency?</h3>
                    <h2>The Advanced Phlebotomy</h2>
                    <p>After completion of part 1, Basic Phlebotomy Training, in order to build confidence and become proficient in phlebotomy techniques, we strongly recommend you enrol to <strong>part 2</strong> which is <strong>Advanced Competency Phlebotomy Training</strong>. You will have the opportunity to gain practical skills with real-time live blood draw in this 3-days extensive advanced competency phlebotomy training.</p>
                    <p>Upon finishing the Advanced Competency Phlebotomy Training Part 2, you will receive a <strong>certificate of competence</strong> along with a <strong>job recommendation letter</strong> signed by your trainer. This certificate is widely accepted by the <strong>NHS</strong> and will add significant <strong>value to your job application</strong> when you apply for <strong>phlebotomist</strong> positions.</p>
                </div>
                <div class="phuk-button">
                    <a href="/course/advanced-phlebotomy-training">BOOK NOW</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- The Advanced Phlebotomy Section End -->

<!-- The Cannulation Section -->
<section id="phuk-cannulation-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 phuk-cannulation-col">
                <div class="phuk-cannulation-img phuk-mobile-block">
                    <img src="https://lead-academy.org/wp-content/uploads/2019/11/cannulation-1.webp" alt="Cannulation Training">
                </div>
                <div class="phuk-cannulation-text">
                    <h3>Cannulation Training</h3>
                    <h2>Practical Cannulation Training Sessions</h2>
                    <p>Join the Cannulation Training Sessions to gain expertise in the process of inserting a cannula into a patient's vein. These practical sessions are designed to provide hands-on experience and comprehensive knowledge on proper techniques, potential complications, and best practices for successful cannulation.</p>
                    <p>Whether you are a medical professional looking to enhance your skills or a student interested in pursuing a career in healthcare, these training sessions will equip you with the necessary expertise to confidently perform cannulation procedures. </p>
                </div>
                <div class="phuk-button">
                    <a href="/course/cannulation-training">BOOK NOW</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 phuk-cannulation-col">
                <div class="phuk-cannulation-img phuk-big-device-block">
                    <img src="https://lead-academy.org/wp-content/uploads/2019/11/cannulation-1.webp" alt="Cannulation Training">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- The Cannulation Section End -->

<!-- Phlebotomy Review Section End -->
<section id="phuk-review-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2>Valuable Feedback From Student</h2>
                <div class="phuk-review-part">
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

                        $reviews = [
                            [
                                'la_course_reviewer_name' => 'Olivia Thompson',
                                'la_course_review_title' => 'Great curriculum',
                                'la_course_review_date' => 'Mar 09, 2023',
                                'la_course_review'        => 'This course has a very comprehensive curriculum where I learned a lot about the venepuncture process, via labelling,blood-taking techniques, safety protocols and so on. A very informative course. ',
                            ],
                            [
                                'la_course_reviewer_name' => 'Ethan Wilson',
                                'la_course_review_title' => 'Loved the Live training session',
                                'la_course_review_date' => 'Nov 16, 2023',
                                'la_course_review'        => 'I was amazed by the quality of course materials and the live training sessions. I had face-to-face training sessions with the professional phlebotomists which went fantastic. Highly Recommended.',
                            ],
                            [
                                'la_course_reviewer_name' => 'Amelia Scott',
                                'la_course_review_title' => 'Amazing training',
                                'la_course_review_date' => 'Jul 04, 2023',
                                'la_course_review'        => 'I enrolled on this course because it provides practical training, and the experts were so professional they trained me on manikins first and then I tried on many participants. That\'s when I realised I could ace this job. ',
                            ],
                            [
                                'la_course_reviewer_name' => 'Mason Patel',
                                'la_course_review_title' => 'Got the CPD-accredited certification',
                                'la_course_review_date' => 'Mar 22, 2023',
                                'la_course_review'        => 'I wanted a professional blood collection certificate which will be recognised by any hospital. This phlebotomist course was all I needed to become a professional phlebotomist. I passed their assessment with a great score and got my CPD accredited certificate.',
                            ],
                            [
                                'la_course_reviewer_name' => 'Isabella Taylor',
                                'la_course_review_title' => 'Got professional phlebotomy training',
                                'la_course_review_date' => 'Apr 20, 2023',
                                'la_course_review'        => 'I needed a course to qualify myself as a professional phlebotomist at my working place and Lead Academy\'s course provided me with that qualification, which boosted my confidence about drawing blood and helped me to develop my career.',
                            ],
                            [
                                'la_course_reviewer_name' => 'Noah Hughes',
                                'la_course_review_title' => 'Amazing learning experience',
                                'la_course_review_date' => 'Mar 16, 2023',
                                'la_course_review'        => 'Lead Academy’s blood-taking course was an amazing learning experience for me. The instructors provided hands-on training and allowed me to learn at my own pace. ',
                            ],
                            [
                                'la_course_reviewer_name' => 'Ava Roberts',
                                'la_course_review_title' => 'Budget-friendly course',
                                'la_course_review_date' => 'Jan 12, 2023',
                                'la_course_review'        => 'I found these online certification courses on other platforms pretty costly. But Lead Academy offers you a budget-friendly course with top-notch quality course materials and expert instructors who made the course a worthy investment. ',
                            ],
                            [
                                'la_course_reviewer_name' => 'Joshua Walker',
                                'la_course_review_title' => 'Live chat support',
                                'la_course_review_date' => 'Feb 24, 2023',
                                'la_course_review'        => 'I especially liked the live chat support of this course where If you ever get stuck with any problem you can immediately contact the live chat support and they will provide you Instant solutions.',
                            ],
                            [
                                'la_course_reviewer_name' => 'Sophia Green',
                                'la_course_review_title' => 'Advanced technical support',
                                'la_course_review_date' => 'Mar 10, 2023',
                                'la_course_review'        => 'I highly recommend this course online at Lead Academy to everyone because of its high-class materials with advanced techniques and practical learning under expert guidance. ',
                            ],
                            [
                                'la_course_reviewer_name' => 'Oliver Wright',
                                'la_course_review_title' => 'Easily understandable lessons',
                                'la_course_review_date' => 'Feb 15, 2023',
                                'la_course_review'        => 'They provide face-to-face practical training which helps you to qualify.',
                            ],
                            [
                                'la_course_reviewer_name' => 'Jacob Clark',
                                'la_course_review_title' => 'Skill improvement',
                                'la_course_review_date' => 'Mar 19, 2023',
                                'la_course_review'        => 'Lead Academy\'s venipuncture training course helped me to work on my weaknesses. The face-to-face practice sessions provided the opportunity to practise and helped me to enhance my blood-taking skills. ',
                            ],
                            [
                                'la_course_reviewer_name' => 'Mia Hall',
                                'la_course_review_title' => 'Tailored lessons for corporate companies',
                                'la_course_review_date' => 'Jun 20, 2023',
                                'la_course_review'        => 'This blood-taking course is the best for providing tailored lessons based on the requirements of various hospitals to train their employees',
                            ],
                        ];
                        get_la_reviews_carousel_markup( $reviews );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Phlebotomy Review Section End -->

<!-- Phlebotomy FAQ Section --> 
<section id="phuk-faq">
    <div class="container">
        <div id="la-single-faq" class="d-xl-block overflow-hidden">
            <h2 class="text-center"><b>FAQs</b></h2>

            <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading18">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse18" aria-expanded="true" aria-controls="panelsStayOpen-collapse18">
                            What is phlebotomy training?									</button>
                        </h3>
                        <div id="panelsStayOpen-collapse18" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading18">
                            <div class="accordion-body">
                                <p>This training is practically based on theory and practical work involving taking blood from different patient groups. </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading20">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse20" aria-expanded="false" aria-controls="panelsStayOpen-collapse20">
                            Is this training approved by the NHS? 								</button>
                        </h3>
                        <div id="panelsStayOpen-collapse20" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading20">
                            <div class="accordion-body">
                                <p>Yes, this course is approved by the NHS, which means it meets their standards and requirements for healthcare professionals. This approval adds credibility to your qualifications and increases your chances of employment within the NHS.  </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading21">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse21" aria-expanded="false" aria-controls="panelsStayOpen-collapse21">
                            Will I Get Accredited Certification After the Phlebotomist Training Program? 								</button>
                        </h3>
                        <div id="panelsStayOpen-collapse21" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading21">
                            <div class="accordion-body">
                                <p>
                                    After completing the Phlebotomy course session with Lead Academy, you will obtain a CPD UK accreditation certificate pronounced in the UK and Worldwide.  
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading23">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse23" aria-expanded="false" aria-controls="panelsStayOpen-collapse23">
                                Does the Phlebotomy CPD UK Accredited Certification have any Value in the UK? 									</button>
                        </h3>
                        <div id="panelsStayOpen-collapse23" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading23">
                            <div class="accordion-body">
                                <p>
                                    Surely! CPD (Continuous Professional Development) is universally acknowledged as a valuable investment in professional development.     
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading25">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse25" aria-expanded="false" aria-controls="panelsStayOpen-collapse25">
                                Can I get the Phlebotomist Job Right After the Training Session?   								</button>
                        </h3>
                        <div id="panelsStayOpen-collapse25" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading25">
                            <div class="accordion-body">
                                <p>While obtaining a Phlebotomy CPD UK Accredited Certification can enhance your chances of securing a job as a phlebotomist, it does not guarantee immediate employment. It is important to gain practical experience and apply for positions in the field to increase your chances of finding employment. To further gain competence in phlebotomy, you can join our Advanced / Competency Phlebotomy Training.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading27">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse27" aria-expanded="false" aria-controls="panelsStayOpen-collapse27">
                                What is the difference between Basic and Advanced Phlebotomy Courses?  							</button>
                        </h3>
                        <div id="panelsStayOpen-collapse27" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading27">
                            <div class="accordion-body">
                                <p>The introductory phlebotomy course is designed for individuals who have no prior knowledge but are interested in learning. Advanced Phlebotomy is for those with little knowledge about it and wants to learn more along with that you will also gain a Certificate of Competency, which will help you in propelling your career ahead.</p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading29">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse29" aria-expanded="false" aria-controls="panelsStayOpen-collapse29">
                                Should I begin the Phlebotomist role in the hospital as I know a little about how to take blood from people? 									</button>
                        </h3>
                        <div id="panelsStayOpen-collapse29" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading29">
                            <div class="accordion-body">
                                <p>Big No!! Knowing to take blood is not enough to become a phlebotomist. You have to see the depth of it before claiming yourself as a phlebotomy. That’s why to register your name at our course and pursue your goal.  </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading31">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse31" aria-expanded="false" aria-controls="panelsStayOpen-collapse31">
                                Even though I have zero experience in taking blood, Can I still be in the training programme?  									</button>
                        </h3>
                        <div id="panelsStayOpen-collapse31" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading31">
                            <div class="accordion-body">
                                <p>Yes, you can, without any doubt. Lead academy requires no academic entry for this blood-taking course, and it is open to students of all educational backgrounds. </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading33">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse33" aria-expanded="false" aria-controls="panelsStayOpen-collapse33">
                              Why Do I need face-to-face training to become a phlebotomist even when I can learn it online?								</button>
                        </h3>
                        <div id="panelsStayOpen-collapse33" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading33">
                            <div class="accordion-body">
                                <p>You must attend the face-to-face training session for phlebotomy since this skill can only be achieved with physical experience. It falls under soft skills; you must have hands-on or practical learning experience to acquire that. </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading34">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse34" aria-expanded="false" aria-controls="panelsStayOpen-collapse34">
                                What is the benefit of doing an accredited course? 							</button>
                        </h3>
                        <div id="panelsStayOpen-collapse34" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading34">
                            <div class="accordion-body">
                                <p>You will only realize the benefit of having a CPD-accredited certificate once you face the corporate world. As employees, job places, and more value the CPD-accredited certificate, you must own this certificate by doing the course with us.  </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading35">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse35" aria-expanded="false" aria-controls="panelsStayOpen-collapse35">
                                What do you mean by a CPD course?  							</button>
                        </h3>
                        <div id="panelsStayOpen-collapse35" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading35">
                            <div class="accordion-body">
                                <p>CPD refers to Continuing Professional Development, and the CPD-accredited course is developed for individuals who want to improve and update their skills within their professional field continuously. This certificate claims that the certificate holder's knowledge is up to date in their work area. </p>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Phlebotomy FAQ Section End --> 

<?php get_footer(); ?>
