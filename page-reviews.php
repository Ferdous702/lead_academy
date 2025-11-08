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

get_header(); ?>

<style>
.customer-review-card {
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #dddddd;
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 35px 35px 35px 35px;
    height: 94%;
    margin-bottom: 30px;
}

.review-learner-info img {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    border: 1px solid #cfcfcf;
    object-fit: cover;
}

.review-learner-info h3 {
    color: #000000;
    font-size: 20px;
    margin: 0;
}

.review-learner-info p {
    color: #b6b5b5 !important;
    font-size: 15px !important;
    font-weight: 300 !important;
    margin: 0;
}

.review-learner-info {
    padding: 0px 30px;
    margin-top: 30px;
}

.customer-review-card p {
    color: #000000;
    font-family: "Sen", Sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 1.8em;
}

.customer-feedback-form {
    background-color: #f7f7f7;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto 60px auto;
}

.customer-feedback-form h2 {
    text-align: center;
    font-size: 26px;
    border-bottom: 2px solid #000;
    line-height: 50px;
}

input {
    background-color: #fff !important;
    border: 1px solid #bbbbbb !important;
    border-radius: 5px !important;
}

select {
    -webkit-appearance: none !important;
    height: 100% !important;
    background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc) !important;
    background-position: calc(100% - 19px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em !important;
    background-size: 5px 5px, 5px 5px, 1px 1.5em !important;
    background-repeat: no-repeat !important;
    padding: 8px !important;
    background-color: #fff !important;
    border: 1px solid #bbbbbb !important;
    border-radius: 5px !important;
}

textarea#input_102_7 {
    background-color: #fff !important;
    border: 1px solid #bbbbbb !important;
    border-radius: 5px !important;
}

form .gform_footer input[type="submit"] {
    background-color: #af1f47 !important;
    color: #fff;
    padding: 12px 24px;
    border: none !important;
    border-radius: 37px !important;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

/* Hover Effect */
form .gform_footer input[type="submit"]:hover {
    background-color: #9e1c3f !important; /* Slightly darker shade on hover */
    transform: translateY(-2px); /* Slight upward movement */
}

/* Active/Clicked Effect */
form .gform_footer input[type="submit"]:active {
    background-color: #8a1534 !important; /* Even darker shade when clicked */
    transform: translateY(0); /* No movement when clicked */
}

button#gform_browse_button_102_8 {
    background-color: #af1f47;
    border-radius: 36px;
}

div#gform_drag_drop_area_102_8 {
    background-color: #fff;
}

section#customer-review-title h1 {
    color: #000000;
    font-family: "Sen", Sans-serif;
    font-size: 65px;
    font-weight: 600;
    text-align: center;
}

section#customer-review-title {
    padding: 90px 0px 40px 0px;
}

section#all-customer-review {
    padding-bottom: 80px;
}

section#customer-review-title p {
    text-align: center;
}

/* Mobile Devices - Up to 767px */
@media only screen and (max-width: 767px) {
    section#customer-review-title h1 {
    font-size: 30px;
}

section#customer-review-title {
    padding: 60px 0px 10px 0px;
}

.review-learner-info {
    padding: 0px 0px;
    margin-top: 30px;
}

.customer-feedback-form h2 {
    text-align: center;
    font-size: 22px;
    border-bottom: 2px solid #000;
    line-height: 32px;
    padding-bottom: 20px;
}
}

/* Tablets - Between 768px and 1024px */
@media only screen and (min-width: 768px) and (max-width: 1024px) {
    section#customer-review-title {
    padding: 60px 0px 20px 0px;
}

section#customer-review-title h1 {
    font-size: 35px;
}

.review-learner-info {
    padding: 0px 0px;
    margin-top: 30px;
}

}

</style>

<section id="customer-review-title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lead Academy Customer Reviews</h1>
                <p>Check out the Lead Academy Courses Reviews  and see why our customers love our courses! Our satisfied students have praised our engaging content and knowledgeable instructors, making Lead Academy the top choice for online learning and the best platform for gaining certification.</p>
                <p>Read what our customers are saying about our popular courses:</p>
            </div>
        </div>
    </div>
</section>
<a href=""></a>
<section id="all-customer-review">
    <div class="container">
        <div class="row">
        <?php
            $customer_reviews = [
                [
                    'review'           => 'I had the best learning experience with them. The trainer was very experienced and helped me gain all-around knowledge. With hands-on practice, now I am confident about my phlebotomy skills.',
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/Maria-Ormodi.png',
                    'user_name'        => 'Maria Ormodi',
                    'user_designation' => 'Phlebotomy Technician',
                ],
                [
                    'review'           => 'The course is wonderfully structured and super easy to follow, offering clear instructions and really helpful resources along the way. I wholeheartedly recommend Lead Academy\'s Phlebotomy Training Course to anyone eager to step into the field with confidence!',
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/Sarah-Maria-J.png',
                    'user_name'        => 'Sarah Maria J',
                    'user_designation' => 'Healthcare Assistant',
                ],
                [
                    'review'           => 'The best thing about the course is you only have to book the course for your convenient date and reach the location on time. They have provided me with everything needed for success in the field, from practical skills to theoretical knowledge. Lead Academy truly sets you up for success in your phlebotomy career.',
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/Vivian-Mamman.jpg',
                    'user_name'        => 'Vivian Mamman',
                    'user_designation' => 'Laboratory Assistant',
                ],
                [
                    'review'           => 'The tutors are incredibly knowledgeable and always there to support you, making your learning experience not just enjoyable but also engaging. Plus, the course wraps up with a mock and practice exam to help you feel fully prepared for your final functional skills exam. Lead Academy\'s Functional Skills course really is top-notch and absolutely worth every penny!',
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2024/06/istockphoto-1620236852-612x612-1.webp',
                    'user_name'        => 'Rebecca',
                    'user_designation' => 'University Student',
                ],
                [
                    'review'           => 'The course material is comprehensive and easy to follow, ensuring that you grasp all the necessary concepts. Additionally, the practical tests prepared me for the upcoming Maths and English Functional Skills Level 2 exams.',
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2024/06/istockphoto-1467688557-612x612-1.webp',
                    'user_name'        => 'Matthew Green',
                    'user_designation' => 'College Applicant',
                ],
                [
                    'review'           => 'I really enjoyed both regular and revision classes. Whatever I learned in the regular classes was reinforced and further solidified during the revision sessions. Which helped me feel more confident and prepared for the exams.',
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/0223/12/tyler-w.png',
                    'user_name'        => 'Tyler w',
                    'user_designation' => 'Mature Learner',
                ],
                [
                    'review'           => 'Learning this new way of communicating with Lead Academy has been such a delightful experience! The British Sign Language Course is beautifully designed, and I truly appreciated how knowledgeable and supportive the instructors were every step of the way.',
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2022/11/images-7.webp',
                    'user_name'        => 'Chloe Palmer',
                    'user_designation' => 'Social Worker',
                ],
                [
                    'review'           => 'The course material was engaging and easy to follow, making the learning process enjoyable and effective. Overall, I highly recommend Lead Academy\'s BSL course for anyone interested in learning British Sign Language.',
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2022/11/f553e3fdf52a18b16e50a6f3587f5b44.webp',
                    'user_name'        => 'Sophia Mason',
                    'user_designation' => 'Community Volunteer',
                ],
                [
                    'review'           => 'This course was an incredible journey that taught me the basics of British Sign Language and explored advanced topics, providing a well-rounded understanding. The practical exercises and assessments helped me apply my learning in real-life situations, enriching the experience even more!',
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2022/11/images-8.webp',
                    'user_name'        => 'Max Green',
                    'user_designation' => 'Accessibility Advocate',
                ],
                [
                    'review'           => "This course comes highly recommended for anyone interested in pursuing a career in massage therapy! With a comprehensive curriculum and hands-on training from experienced instructors, you’ll be well-prepared for a successful journey in the field.",
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2023/11/images-79-1.webp', // Add image URL here
                    'user_name'        => 'Caitlin Lawrence', // Add name here
                    'user_designation' => 'Massage Therapy Student',
                ],
                [
                    'review'           => "I’ve gained so much knowledge about anatomy, physiology, and different massage techniques that have already made a positive impact in my practice.",
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2023/11/istockphoto-479209730-612x612-1.webp', // Add image URL here
                    'user_name'        => 'Freya Chan', // Add name here
                    'user_designation' => 'Practicing Therapist',
                ],
                [
                    'review'           => "The deep tissue massage techniques I discovered in this course have truly helped me address my clients' unique needs and deliver meaningful relief. Overall, I feel really happy with the exceptional education and support I've received from Lead Academy's massage therapy courses!",
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2023/11/images-68-1-1.webp', // Add image URL here
                    'user_name'        => 'Brooke Adams', // Add name here
                    'user_designation' => 'Massage Therapy Enthusiast',
                ],
                [
                    'review'           => "After participating in the practical sessions and mastering the nail extension and nail art techniques, I am excited and confident in my ability to offer exceptional services to my clients. The hands-on experience from this course has genuinely equipped me for a fulfilling career as a nail technician.",
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2024/05/9dd9ef90242178e480fdb5baa38ba3f7.webp', // Add image URL here
                    'user_name'        => 'Amber Reid', // Add name here
                    'user_designation' => 'Aspiring Nail Technician',
                ],
                [
                    'review'           => "I'm so grateful for all the amazing things I've learned, and I’m super excited to start my journey in the beauty industry! Lead Academy's nail technician courses have genuinely impressed me, and I absolutely recommend them to anyone eager to explore a career in nail care.",
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2024/05/9134d0d65ffeb0a57bb0810a632c7fe6.webp', // Add image URL here
                    'user_name'        => 'Shannon Stewart', // Add name here
                    'user_designation' => 'Beauty Industry Enthusiast',
                ],
                [
                    'review'           => "The instructors were not only incredibly knowledgeable but also wonderfully supportive! Their guidance made the learning experience truly enjoyable. I feel excited and ready to showcase my talent and creativity in the fabulous world of nail artistry!",
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2024/05/images-10.webp', // Add image URL here
                    'user_name'        => 'Holly Watts', // Add name here
                    'user_designation' => 'Creative Nail Artist',
                ],
                [
                    'review'           => "I'm absolutely thrilled to take all that I've learned and create stunning nail designs for my amazing clients! The skills and confidence I've developed through Lead Academy's courses have truly prepared me for success in this wonderful industry.",
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2023/11/b2952608400abb417541d4212c1aec04.webp', // Add image URL here
                    'user_name'        => 'Maisie Robson', // Add name here
                    'user_designation' => 'Professional Nail Technician',
                ],
                [
                    'review'           => "Enrolling, selecting my course, and beginning my studies was a breeze. Lead Academy's online platform impresses me with its convenience and efficiency. I wholeheartedly recommend their courses to anyone seeking a flexible and effective way to acquire new skills.",
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2024/09/73x73.png', // Add image URL here
                    'user_name'        => 'J.J. Turk', // Add name here
                    'user_designation' => 'Satisfied Learner',
                ],
                [
                    'review'           => "I've explored a few e-learning platforms for my skill development, but I have to say, none quite compare to Lead Academy! Their courses are not just comprehensive, but they're really easy to follow, making it such a smooth journey to learn new knowledge and techniques. Plus, the support team is incredibly responsive and helpful, which truly enhances the learning experience from start to finish!",
                    'user_img'         => 'https://lead-academy.org/wp-content/uploads/2024/09/unnamed-1.png', // Add image URL here
                    'user_name'        => 'Maria Ormodi', // Add name here
                    'user_designation' => 'E-Learning Enthusiast',
                ],
                [
                    'review'           => 'Highly recommended. Lead Academy is one of the best learning platforms I have ever seen. It has been a great learning experience.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-418.jpg',
                    'user_name'        => 'Luke Simpkinson',
                    'user_designation' => 'Creative Designer',
                ],
                [
                    'review'           => 'Definitely worth the investment. Thanks Lead Academy for offering amazing Photography course at the reasonable price! i have learned a lot.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-423.jpg',
                    'user_name'        => 'Chandra L. Bell',
                    'user_designation' => 'Photographer',
                ],
                [
                    'review'           => 'So far, it has been an incredible experience!! Enrolled in Diet and Nutrition course, with the help of the trainer it becomes easy now and I\'m really enjoying my course.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-417.jpg',
                    'user_name'        => 'Ellis Daly',
                    'user_designation' => 'Nutritionist',
                ],
                [
                    'review'           => 'Studying through Lead Academy has been everything I expected! Interior Design course is fantastic! Comprehensive and easy to follow.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-416.jpg',
                    'user_name'        => 'Joe Newton',
                    'user_designation' => 'Interior Designer',
                ],
                [
                    'review'           => 'Its pretty easy to understand with a relevant real world example on how to understand financial statements.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-422.jpg',
                    'user_name'        => 'Maisie Thomson',
                    'user_designation' => 'Accountant',
                ],
                [
                    'review'           => 'Excellent!!! There was plenty of support from the customer support team and communication has been great!',
                    'user_img'         => '/wp-content/uploads/2022/10/2-414.jpg',
                    'user_name'        => 'Tyler Brennan',
                    'user_designation' => 'Project Manager',
                ],
                [
                    'review'           => 'Enjoyed the course! I feel Lead Academy has truly helped to boost my confidence and encouraged me to become more ambitious about my future.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-410.jpg',
                    'user_name'        => 'Michael Nixon',
                    'user_designation' => 'Business Analyst',
                ],
                [
                    'review'           => 'The lessons are interactive, engaging and you have the opportunity to ask questions to the tutors, more surprisingly, they response real quick!!!!',
                    'user_img'         => '/wp-content/uploads/2022/10/2-421.jpg',
                    'user_name'        => 'Chloe Elliott',
                    'user_designation' => 'Manager',
                ],
                [
                    'review'           => 'Since discovering Lead Academy, I have done many courses and now I feel comfortable to recommend other students to join Lead Academy to get the best online education.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-48.jpg',
                    'user_name'        => 'Sam Moore',
                    'user_designation' => 'Graphic Designer',
                ],
                [
                    'review'           => 'Getting quality education by siting on your couch is exciting, fun, and helpful. Customer Service are always there to help you. in short, it was great!',
                    'user_img'         => '/wp-content/uploads/2022/10/2-420.jpg',
                    'user_name'        => 'Amelie Warner',
                    'user_designation' => 'Beauty Specialist',
                ],
                [
                    'review'           => 'I never thought I would be able to complete my first distance learning program with Lead Academy and I am so glad I did! The experience was amazing!',
                    'user_img'         => '/wp-content/uploads/2022/10/2-415.png',
                    'user_name'        => 'Alice Chan',
                    'user_designation' => 'Personal Trainer',
                ],
                [
                    'review'           => 'All the lessons are beautifully executed, easy to learn the techniques, I strongly recommend it to others.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-47.jpg',
                    'user_name'        => 'George Scott',
                    'user_designation' => 'Care Assistance',
                ],
                [
                    'review'           => 'It is worth looking into the course if you are interested in stock market. It helped me a lot, would definitely recommend it.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-46.jpg',
                    'user_name'        => 'Dylan Tyler',
                    'user_designation' => 'Financial Advisor',
                ],
                [
                    'review'           => 'Very informative covered all the topics. Everything you need to know about becoming a massage therapist.',
                    'user_img'         => '/wp-content/uploads/2022/10/0.jpg',
                    'user_name'        => 'Ella Ahmed',
                    'user_designation' => 'Massage Therapist',
                ],
                [
                    'review'           => 'Very impressed with the detail provided in the Complete WordPress course, thoroughly enjoyed!!!!',
                    'user_img'         => '/wp-content/uploads/2022/10/2-45.jpg',
                    'user_name'        => 'Christopher Barton',
                    'user_designation' => 'Web Developer',
                ],
                [
                    'review'           => 'Thanks a bunch to the brief and straight to the point presentations, its very knowledgeable and engaging. GREAT!!',
                    'user_img'         => '/wp-content/uploads/2022/10/11.jpg',
                    'user_name'        => 'Leo Barker',
                    'user_designation' => 'Physiotherapist',
                ],
                [
                    'review'           => 'By the time I finished the course I got really hooked on creating my own Nail Designs. Thanks for making all the lessons easy, really loved it.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-411.jpg',
                    'user_name'        => 'Eva Read',
                    'user_designation' => 'Nail Technician',
                ],
                [
                    'review'           => 'Ideal course for beginners or artists who are struggling with drawing and sketching and really need to go over the fundamentals.',
                    'user_img'         => '/wp-content/uploads/2022/10/2-43.jpg',
                    'user_name'        => 'Mike Sendler',
                    'user_designation' => 'Autocad Designer',
                ],
            ];

            foreach( $customer_reviews as $item ) {
                ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="customer-review-card">
                    <p><?php echo esc_html( $item['review'] ); ?></p>
                    <div class="review-learner-info">
                        <div class="row">
                            <div class="col-4 col-sm-3 col-md-4 col-lg-4 col-xl-4 align-self-center" style="text-align: right;">
                                <img src="<?php echo esc_url( $item['user_img'] ); ?>" alt="<?php echo esc_attr( $item['user_name'] ); ?>">
                            </div>
                            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 align-self-center">
                                <h3><?php echo esc_html( $item['user_name'] ); ?></h3>
                                <p><?php echo esc_html( $item['user_designation'] ); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<section id="customer-feedback">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="customer-feedback-form">
                    <h2>We’d Love to Hear About Your Experience!</h2>
                <?php
                    echo do_shortcode('[contact-form-7 id="e746337" title="Customer Feedback"]');
                ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
