<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
<section id="food-hygiene-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <img src="/wp-content/uploads/2023/04/modern-kitchen-cooks-prepare-meals-stove-kitchen-restaurant-hotel-fire-kitchen-1-min-scaled-1-1.webp" alt="Food Hygiene Courses">
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
                <h2>Food Hygiene Courses?</h2>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"></div>
        </div>
    </div>
</section>
<section id="food-hygiene-2">
    <div class="container">
        <h2>Explore our exclusive range of Food Hygiene Courses</h2>
        <div class="food-hygiene-tabs">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <button class="food-hygiene-tab-link" onclick="openCategory(event, 'LEVEL3')">LEVEL 3</button>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <button class="food-hygiene-tab-link" onclick="openCategory(event, 'LEVEL2')">LEVEL 2</button>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <button class="food-hygiene-tab-link" onclick="openCategory(event, 'LEVEL1')">LEVEL 1</button>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <button class="food-hygiene-tab-link" onclick="openCategory(event, 'HACCP')">HACCP</button>
                </div>
            </div>
        </div>

        <div id="LEVEL3" class="food-hygiene-tab-content">
            <div class="food-hygiene-tab-content-top-text">
                <p>Level 3 Food Hygiene Training Course is designed for Supervisors or Managers responsible for implementing an effective food safety management system within their workplace. This course, often referred to as the intermediate food hygiene certificate, is for supervisors and managers. This will help you to satisfy the legal requirement and improve your Food Hygiene Rating.</p>
            </div>
            <div class="food-hygiene-course-box-level-3">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 align-self-center">
                        <img src="/wp-content/uploads/2022/10/MicrosoftTeams-image-16-1.webp" alt="Level 3 Food Safety Supervision Course">
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 align-self-center">
                        <h3><a href="/course/level-3-food-hygiene-and-safety-course-for-supervisor-and-manager">Level 3 Food Safety Supervision Course - for Catering, Retail and Manufacturing</a></h3>
                        <div class="food-hygiene-course-box-level-3-price">
                            <del>£95.00</del>
                            <p>£75.00</p>
                        </div>
                        <div class="food-hygiene-course-box-level-3-duration">
                            <img src="/wp-content/uploads/0223/12/ant-design_clock-circle-twotone.webp" alt="duration">
                            <p>Duration: 5-6 hours</p>
                        </div>
                        <div class="ood-hygiene-course-box-level-3-text">
                            <p>This Level 3 Food Hygiene Training course is specifically designed for Supervisors and Managers of retail, catering or manufacturing industry responsible for controlling and implementing effective food management systems to ensure the health and well-being of consumers.</p>
                        </div>
                        <a class="food-hygiene-course-box-level-3-button" href="/course/level-3-food-hygiene-and-safety-course-for-supervisor-and-manager">View Course</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="LEVEL2" class="food-hygiene-tab-content">
            <div class="food-hygiene-tab-content-top-text">
                <p>This Level 2 Food Hygiene Course will equip you with the adequate knowledge and skills to overcome hazards and risk associated with handling high-risk foods by maintaining proper food safety and hygiene protocols. However, level 2 course often referred to as the basic food hygiene certificate and any handlers can satisfy their legal requirement by taking this course.</p>
            </div>
            <div class="row">
                <?php
                    $food_hygiene_course_items_level_2 = [
                        [
                            'course_img'    => '/wp-content/uploads/2022/10/Food-Safety-4-1.webp',
                            'course_title'  => 'Level 2 Food Safety –<br> Retail Course',
                            'course_url'    => '/course/level-2-food-hygiene-and-safety-course-for-retail',
                        ],
                        [
                            'course_img'    => '/wp-content/uploads/2022/10/Food-Safety-5-1.webp',
                            'course_title'  => 'Level 2 Food Safety <br> Course – Catering',
                            'course_url'    => '/course/level-2-food-hygiene-and-safety-course-for-catering',
                        ],
                        [
                            'course_img'    => '/wp-content/uploads/2022/10/Food-Safety-1.webp',
                            'course_title'  => 'Level 2 Food Safety Course Online <br> – Manufacturing Training',
                            'course_url'    => '/course/level-2-food-hygiene-and-safety-course-for-manufacturing',
                        ],
                    ];
                    foreach( $food_hygiene_course_items_level_2 as $food_hygiene_course_level_2 ) : 
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="food-hygiene-course-box-card">
                        <img src="<?php echo $food_hygiene_course_level_2['course_img']?>" alt="<?php echo $food_hygiene_course_level_2['course_title']?>">
                        <h3><a href="<?php echo $food_hygiene_course_level_2['course_img']?>"><?php echo $food_hygiene_course_level_2['course_title']?></a></h3>
                        <div class="food-hygiene-course-box-card-price">
                            <del>£40.00</del>
                            <p>£20.00</p>
                        </div>
                        <a class="food-hygiene-course-box-card-button" href="<?php echo $food_hygiene_course_level_2['course_url']?>">View Course</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="LEVEL1" class="food-hygiene-tab-content">
            <div class="food-hygiene-tab-content-top-text">
                <p>Level 1 Food Hygiene Course gives an awareness of the hazards of handling low risk food In order to meet the legal requirements, all food handlers are recommended to take the Level 2 course.</p>
            </div>
            <div class="row">
                <?php
                    $food_hygiene_course_items_level_1 = [
                        [
                            'course_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Food-Safety-1-1.webp',
                            'course_title'  => 'Level 1 Food Safety Course Online –<br> Manufacturing Training',
                            'course_url'    => 'https://lead-academy.org/course/level-1-food-hygiene-and-safety-course-for-manufacturing',
                        ],
                        [
                            'course_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Food-Safety-2-1.webp',
                            'course_title'  => 'Level 1 Food Safety – <br> Catering Course',
                            'course_url'    => 'https://lead-academy.org/course/level-1-food-hygiene-and-safety-course-for-manufacturing',
                        ],
                        [
                            'course_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Food-Safety-3-1.webp',
                            'course_title'  => 'Level 1 Food Safety <br> Online Course – Retail Training',
                            'course_url'    => 'https://lead-academy.org/course/level-1-food-hygiene-and-safety-course-for-retail',
                        ],
                    ];
                    foreach( $food_hygiene_course_items_level_1 as $food_hygiene_course_level_1 ) : 
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="food-hygiene-course-box-card">
                        <img src="<?php echo $food_hygiene_course_level_1['course_img']?>" alt="<?php echo $food_hygiene_course_level_1['course_title']?>">
                        <h3><a href="<?php echo $food_hygiene_course_level_1['course_img']?>"><?php echo $food_hygiene_course_level_1['course_title']?></a></h3>
                        <div class="food-hygiene-course-box-card-price">
                            <del>£30.00</del>
                            <p>£15.00</p>
                        </div>
                        <a class="food-hygiene-course-box-card-button" href="<?php echo $food_hygiene_course_level_1['course_url']?>">View Course</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="HACCP" class="food-hygiene-tab-content">
            <div class="food-hygiene-tab-content-top-text">
                <p>This course will equip you with the basics of HACCP to help you to conduct a hazard analysis and identify the critical control points in the manufacturing process where hazards or risks may arise. This course will help you to design and assess an effective hygiene and cleaning structure for your business that will boost your food hygiene rating.</p>
            </div>
            <div class="row">
                <?php
                    $food_hygiene_course_items_haccp = [
                        [
                            'course_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/HACCP-1.webp',
                            'course_title'  => 'HACCP Level 2<br> Course Online',
                            'course_url'    => 'https://lead-academy.org/course/haccp-level-2-traning-course-online',
                        ],
                        [
                            'course_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Food-Hygiene-1.webp',
                            'course_title'  => 'Achieving Food Hygiene <br>Rating Level 5 Course Online',
                            'course_url'    => 'https://lead-academy.org/course/achieving-5-5-star-food-hygiene-rating-online-course',
                        ],
                        [
                            'course_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Licensed-Premises-1.webp',
                            'course_title'  => 'Licensed Premises <br>Staff Training',
                            'course_url'    => 'https://lead-academy.org/course/licensed-premises-staff-training',
                        ],
                    ];
                    foreach( $food_hygiene_course_items_haccp as $food_hygiene_course_haccp ) : 
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="food-hygiene-course-box-card">
                        <img src="<?php echo $food_hygiene_course_haccp['course_img']?>" alt="<?php echo $food_hygiene_course_haccp['course_title']?>">
                        <h3><a href="<?php echo $food_hygiene_course_haccp['course_img']?>"><?php echo $food_hygiene_course_haccp['course_title']?></a></h3>
                        <div class="food-hygiene-course-box-card-price">
                            <del>£60.00</del>
                            <p>£29.00</p>
                        </div>
                        <a class="food-hygiene-course-box-card-button" href="<?php echo $food_hygiene_course_haccp['course_url']?>">View Course</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section id="food-hygiene-3">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
        <div class="food-hygiene-3-left">
                <h2>Why train with us?</h2>
                <ul>
                    <li>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none"><path d="M16.5 1.5H1.5V22.5H22.5V15.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 11.5L12.5 16.5L24.5 3.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                        <span>Accepted by Local Authorities</span>
                    </li>
                    <li>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none"><path d="M16.5 1.5H1.5V22.5H22.5V15.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 11.5L12.5 16.5L24.5 3.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                        <span>Meet UK and EU legislation and legal requirements</span>
                    </li>
                    <li>
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none"><path d="M16.5 1.5H1.5V22.5H22.5V15.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 11.5L12.5 16.5L24.5 3.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                        <span>Approved by Institute of Hospitality, IIRSM, Gatehouse Awards & CPD</span>
                    </li>
                    <li>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none"><path d="M16.5 1.5H1.5V22.5H22.5V15.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 11.5L12.5 16.5L24.5 3.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                        <span>Free accredited digital certificate, instant download</span>
                    </li>
                    <li>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none"><path d="M16.5 1.5H1.5V22.5H22.5V15.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 11.5L12.5 16.5L24.5 3.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                        <span>24/7 access from any devices, outstanding support</span>
                    </li>
                    <li>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none"><path d="M16.5 1.5H1.5V22.5H22.5V15.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 11.5L12.5 16.5L24.5 3.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                        <span>High-quality e-Learning study materials</span>
                    </li>
                    <li>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none"><path d="M16.5 1.5H1.5V22.5H22.5V15.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 11.5L12.5 16.5L24.5 3.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                        <span>Self-paced, no fixed schedules</span>
                    </li>
                    <li>
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="26" height="24" viewBox="0 0 26 24" fill="none"><path d="M16.5 1.5H1.5V22.5H22.5V15.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.5 11.5L12.5 16.5L24.5 3.5" stroke="#B91948" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></span>
                        <span>Satisfaction Guarantee</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="food-hygiene-3-right">
                <h2>Course Accreditations</h2>
                <img src="https://lead-academy.org/wp-content/uploads/2023/04/Group-204-min-1.webp" alt="Course Accreditations">
            </div>
        </div>
    </div>
</div>
</section>
<section id="food-hygiene-4">
    <div class="container">
        <div class="food-hygiene-4-part">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 align-self-center">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/04/New-Certificate-Frame-new-1150x1536-1.webp" alt="Food Hygiene Certificate">
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 align-self-center">
                    <h2>Learner Certification</h2>
                    <p>On completion of the individual food hygiene courses, you will be eligible to obtain your instant downloadable Free E–Certificate of achievement as proof of your new skills. CPD is globally recognised by employers, professional organisations and academic intuitions, thus a certificate from CPD Certification Service creates value towards your professional goal and achievement. CPD certified certificates are accepted by thousands of professional bodies and government regulators here in the UK and around the world.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    $faq = [
            [
                'faq_title'  => 'What is a basic food hygiene certificate?',
                'faq_text'   => 'The basic food hygiene certificate course or the Level 2 Food Hygiene Course is the most appropriate course to equip you with the basic food hygiene and safety procedures. Beginners are encouraged to take Level 1 course to gain an insight about the basics of food hygiene and safety. Level 3 course is designed for Supervisors, Managers and Food Inspectors.',
            ],
            [
                'faq_title'  => 'How can I get a food hygiene certificate?',
                'faq_text'   => 'Enrol into a food hygiene course that satisfies your position in the food industry. Upon successful completion of the course and fulfilment of the assessments and objectives the course offers, you will gain a certificate accredited by CPD and endorsed by Institute of Hospitality.',
            ],
            [
                'faq_title'  => 'Which food hygiene certificate do I need?',
                'faq_text'   => 'The food hygiene certificate level can be determined by your position in the food handling industry and the level of interaction with high-risk and low risk foods. However, you can take help from our course chooser to select the perfect course that satisfies your role.',
            ],
            [
                'faq_title'  => 'How long does a food hygiene certificate last?',
                'faq_text'   => 'Even though food hygiene certificates do not have any expiration period, it is highly advised that you extend the period of validity of the certificate after every 3 years. However, most employers require the employees to renew the certificates as a part of training.',
            ],
            [
                'faq_title'  => 'Is food hygiene training a legal requirement?',
                'faq_text'   => 'In the UK, it is not a legal requirement to obtain food hygiene training to prepare or sell food. However, most food handling industries require their employees to have a certain level of standard in handling food as part of their training module. Therefore it is advised that all employees working in the capacity of any post within a food handling industry to obtain a food hygiene training that will help them stand out to employers with up-to-date skills',
            ],
            [
                'faq_title'  => 'Do I have to take Level 1 training before progressing to the higher levels?',
                'faq_text'   => 'No, you are not required to take any additional training before enrolling into any level. You are advised to take the level that best satisfies your role in the food handling industry or your level of involvement with the high-risk and low-risk foods.',
            ],
            [
                'faq_title'  => 'What are food hygiene ratings?',
                'faq_text'   => 'The Food Standard Agency assesses the food hygiene ratings that determines whether your business complies with a certain level of standard as ascertained by the Food Hygiene Law in ensuring the quality of food or not. A higher food hygiene rating exhibits your concern for the health and well-being of your consumers.',
            ],
            [
                'faq_title'  => 'Do I need a certificate to sell food from home?',
                'faq_text'   => 'The Food Standards Agency evaluates food hygiene ratings to check if your business meets the required standards set by Food Hygiene Law. A higher rating reflects your commitment to maintaining food quality and safeguarding your customers’ health and well-being. That determines whether your business complies with a certain level of standard as ascertained by the Food Hygiene Law in ensuring the quality of food or not. A higher food hygiene rating exhibits your concern for the health and well-being of your consumers.',
            ],
            [
                'faq_title'  => 'Are your courses accredited?',
                'faq_text'   => 'Yes, all of our courses are accredited by CPD (Continuing Professional Development) and endorsed by Institute of Hospitality.',
            ],
        ];
        
        if ( is_array( $course_faqs ) && count( $course_faqs ) > 1 ) {
            $display_faqs = $course_faqs;
        }else{
            $display_faqs = $faq;
        }
        ?>
    <section id="food-hygiene-5">
        <div class="container">
            <div id="la-single-faq">
                <h2>Frequently Asked Questions About Food Hygiene Training</h2>
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
        </div>
    </section>
    <script>
        function openCategory(event, categoryName) {
            var i, tabcontent, tablinks;

                // Hide all tab contents
                tabcontent = document.getElementsByClassName("food-hygiene-tab-content");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }

                // Remove the active class from all food-hygiene-tabs
                tablinks = document.getElementsByClassName("food-hygiene-tab-link");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }

                // Show the current tab content and add an active class to the clicked tab
                document.getElementById(categoryName).style.display = "block";
                event.currentTarget.className += " active";
            }

            // Display the first tab content by default
            document.addEventListener("DOMContentLoaded", function () {
                document.querySelector(".food-hygiene-tab-link").click();
        });

    </script>

<?php
get_footer();
?>