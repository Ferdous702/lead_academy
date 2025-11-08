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
'faq_text'   => 'A notable difference between ASL and BSL is the use of the manual alphabet – ASL uses a one-handed manual alphabet, whereas BSL uses a two-handed manual alphabet. You can also check out our blog, ‘<a href="/blog/whats-the-difference-between-asl-and-bsl/">What’s the Difference Between ASL and BSL</a>’ to explore these differences in detail.',
],
[
'faq_title'      => 'Should I learn ASL or BSL?',
'faq_text'   => 'The decision to learn ASL or BSL depends on your goals and circumstances. ASL is more practical if you plan to use sign language in the United States or Canada, while British sign is more practical for the United Kingdom or Commonwealth countries.',
],
[
'faq_title'      => 'What is the best way to learn BSL?',
'faq_text'   => 'The best ways to learn BSL are as follows. First, consider taking a course or finding a qualified tutor to guide you through the learning process. Practise regularly by signing with fluent signers or joining a local deaf community. Watch sign language videos, TV shows, and films to improve your comprehension and understanding of the language. Use online resources to supplement your learning and reinforce your knowledge. Finally, be patient and committed to the learning process, as it may take time to become proficient.
To know more give a read to this blog, ‘<a href="/blog/how-to-learn-bsl-beginner-to-advanced/">How to Learn BSL? Beginner to Advanced</a>’.',
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

if (is_array($course_faqs) && count($course_faqs) > 1) {
    $display_faqs = $course_faqs;
} else {
    $display_faqs = $faq;
}
?>

<style>
    #fsc-hero.bsl{
        background-image:url('/wp-content/uploads/2022/09/103.jpg');
    }
    #fsc-hero > .fsc-container > .fsc-row{
        width: 50%;
        float: left;
    }
    #fsc-hero.bsl .fsc-container{
        justify-content:unset;
    }
    .fsc-container.fsc-real-contents{
        margin-top:0px !important;
    }
    #fsc-courses-exams{
        padding-top: 0px !important;
    }
    #fsc-courses-exams > div.fsc-container.fsc-real-contents > div > h4{
        padding-bottom: 30px;
        max-width: 800px;
        margin: auto;
    }
    #fsc-about > .about-container{
        margin-left: 100px;
        margin-right: 100px;
        font-weight: 500;
    }
    .fsc-custom-card{
        /*min-height: 790px !important;*/
    }
    #fsc-courses-exams .fsc-custom-card > .container{
        justify-content: space-between;
        align-items: center;
        display: flex;
    }
    .fsc-card-contents h3{
        height:unset;
    }
    #fsc-courses-exams .star-area{
        display:flex;
    }
    #fsc-courses-exams .star-area > ul{
        list-style: none;
        display: flex;
        margin: 0;
        padding-left: 10px;
        color: #f0ad4e;
        font-size: 20px;
    }
    #fsc-courses-exams .percentage{
        width: 60px;
        height: 60px;
        background: #B91948;
        color: white;
        font-weight: 600;
        text-align: center;
        border-radius: 50%;
        padding: 8px;
    }
    #fsc-courses-exams .star-area > .raing{
        color: #000;
        font-family: "Open Sans", Sans-serif;
        font-size: 20px;
        font-weight: 700;
    }
    #fsc-courses-exams hr{
        margin-left: 20px;
        margin-right: 20px;
    }
    #fsc-courses-exams .fsc-custom-card > .container > a{
        font-family: "Open Sans", Sans-serif;
        font-size: 13px;
        font-weight: 700;
        text-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        background-color: #B91948;
        border-style: solid;
        border-color: #B91948;
        border-radius: 1px 1px 1px 1px;
        color:#fff;
        padding: 10px;
    }
    #fsc-courses-exams .fsc-custom-card > .container > a:hover{
        color: #B91948;
        background-color: #fff;
    }
    #fsc-courses-exams .sell-price{
        margin-left: 20px;
        font-weight: 600;
    }
    #fsc-courses-exams .price{
        justify-content: space-between;
        align-items: center;
        display: flex;
        font-size: 20px;
    }
    @media screen and (min-width: 600px) and (max-width: 1010px) {
        .fsc-custom-card{
            /*min-height: 920px !important;*/
        }
    }

    @media (max-width: 767px) {
        #fsc-hero.bsl{
            height: unset;
        }
        #fsc-hero > .fsc-container > .fsc-row{
            width: 100%;
            padding: 20px;
        }
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
        font-family: 'Bebas Neue';
        letter-spacing: 8px;
    }
    #fsc-about{
        padding-top:150px;
    }
    #fsc-hero > .fsc-container > .fsc-row > p{
        color: #000000;
        font-family: "Sen", Sans-serif;
        font-size: 23px;
        font-weight: 600;
        line-height: 1.5em;
    }

    .convert-text{
	width: 100%;
	text-align: center;
	color: #000;
    font-size: 2.3rem !important;
    font-weight: bold;
}

</style>

<!-- Hero section -->
<section id="fsc-hero" class="bsl">
    <div class="fsc-container">
        <div class="fsc-row">
            <p>Thank you for your inquiry regarding our British Sign Language Course. We truly appreciate your effort in asking for information about our courses. Our Client Success Team will contact you within 2 business day.</p>
        </div>
    </div>
</section>
<!-- End Hero section -->

<!-- Start Button section -->
<section id="fsc-courses-exams">
    <div class="fsc-container fsc-buttons">
        <button id="fsc-ce-courses" class="active">Tutored Courses</button>
        <button id="fsc-ce-exams">Independent Courses</button>
    </div>
</section>
<!-- End Button section -->

<!-- Exams - Courses section -->

<?php
$fsc_tutored = [
    [
        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2022/09/Tutored-Courses-2.jpg',
        'course_url'   => 'https://lead-academy.org/course/level-2-certificate-in-british-sign-language/',
        'course_title' => 'Level 2 Certificate in BSL',
        'stars'   => '4.8',
        'percentage'  => '39%',
        'sell_price'  => '£459',
        'regular_price'  => '£750',
        'packages'   => 'Learn British Sign Language to obtain the skills, language and knowledge required to communicate with Deaf/Hard of Hearing people at an intermediate level.',
    ],
    [
        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2022/09/Tutored-Courses-4.jpg',
        'course_url'   => 'https://lead-academy.org/course/level-1-award-in-british-sign-language/',
        'course_title' => 'Level 1 Award in BSL',
        'stars'   => '4.9',
        'percentage'  => '34%',
        'sell_price'  => ' £399',
        'regular_price'  => '£600',
        'packages'   => 'Learn British Sign Language to obtain the skills, language and knowledge required to communicate with Deaf/Hard of Hearing people at a basic level.',
    ],
    [
        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2022/09/MicrosoftTeams-image-17.jpg',
        'course_url'   => 'https://lead-academy.org/course/deaf-awareness-training/',
        'course_title' => 'Deaf Awareness Training',
        'stars'   => '5.0',
        'percentage'  => '60%',
        'sell_price'  => '£79',
        'regular_price'  => '£199',
        'packages'   => 'The course is aimed at anyone who interacts with deaf people, or those with a hearing loss, who wishes to have a deeper understanding of the issues they face and Deaf culture.',
    ],
];

$fsc_independent = [
    [
        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2022/09/Independent-Courses-5.jpg',
        'course_url'   => 'https://lead-academy.org/course/british-sign-language-level-1-and-2-online-course/',
        'course_title' => 'BSL Level 1 & 2 Online Course',
        'stars'   => '4.9',
        'percentage'  => '77%',
        'sell_price'  => '£29',
        'regular_price'  => '£125',
        'packages'   => 'British Sign Language helps disabled people who can’t hear or speak to communicate in sign language …',
    ],
    [
        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2022/09/Independent-Courses-6.jpg',
        'course_url'   => 'https://lead-academy.org/course/bsl-level-1-online-course/',
        'course_title' => 'BSL Level 1 Online Course',
        'stars'   => '4.9',
        'percentage'  => '85%',
        'sell_price'  => '£19',
        'regular_price'  => '£125',
        'packages'   => 'This extensive British sign language level 1 online course will give you an overview of sign language …',
    ],
    [
        'img_url'      => 'https://lead-academy.org/wp-content/uploads/2022/09/Independent-Courses-4.jpg',
        'course_url'   => 'https://lead-academy.org/course/bsl-level-2-online-course/',
        'course_title' => 'BSL Level 2 Online Course',
        'stars'   => '4.7',
        'percentage'  => '83%',
        'sell_price'  => '£21',
        'regular_price'  => '£125',
        'packages'   => 'This extensive British sign language level 2 online course is designed for those who want to learn BSL …',
    ],
];
?>

<section id="fsc-courses-exams">

    <div class="fsc-container fsc-real-contents mt-5 mb-5">
        <div class="courses">
            <h1 class="text-center">British Sign Language Training - Accredited by Signature
            Nationally Recognised Qualifications</h1>
            <div class="fsc-custom-card-wrap">
            <?php
            foreach( $fsc_tutored as $item ) {
                ?>
                <div class="fsc-custom-card">
                    <img src="<?php echo esc_url($item['img_url'])?>" alt="<?php echo esc_html($item['course_title'])?>" width="327" height="196">
                    <div class="fsc-card-contents">
                        <h3><a href="<?php echo esc_url($item['course_url'])?>"><?php echo esc_html($item['course_title'])?></a></h3>
                        <span class="fsc-package-includes"><?=$item['packages']?></span>
                    </div>
                    <div class="container">
                        <div class="star-area float-left">
                            <div class="raing">(<?=$item['stars']?>)</div>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="percentage float-right">
                            <div class="off"><?=$item['percentage']?> OFF</div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <a href="<?php echo esc_url($item['course_url'])?>">Learn More</a>
                        <div class="price">
                            <del class="regular-price"><?=$item['regular_price']?></del>
                            <div class="sell-price"><?=$item['sell_price']?></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        </div> <!-- end fsc-courses-custom-card-wrap -->
        <div class="exams" style="display:none">
            <h4 class="text-center">British Sign Language Training - Certified by CPD</h4>
            <div class="fsc-custom-card-wrap">
            <?php
            foreach( $fsc_independent as $item ) {
                ?>
                <div class="fsc-custom-card">
                    <img src="<?php echo esc_url($item['img_url'])?>" alt="<?php echo esc_html($item['course_title'])?>" width="327" height="196">
                    <div class="fsc-card-contents">
                        <h3><a href="<?php echo esc_url($item['course_url'])?>"><?php echo esc_html($item['course_title'])?></a></h3>
                        <span class="fsc-package-includes"><?=$item['packages']?></span>
                    </div>
                    <div class="container">
                        <div class="star-area float-left">
                            <div class="raing">(<?=$item['stars']?>)</div>
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                        <div class="percentage float-right">
                            <div class="off"><?=$item['percentage']?> OFF</div>
                        </div>
                    </div>
                    <hr>
                    <div class="container">
                        <a href="<?php echo esc_url($item['course_url'])?>">Learn More</a>
                        <div class="price">
                            <del class="regular-price"><?=$item['regular_price']?></del>
                            <div class="sell-price"><?=$item['sell_price']?></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
        </div> <!-- end fsc-courses-custom-card-wrap -->
    </div>
</section>

    <section id="fsc-reviews">
        <div class="fsc-container">
            <h2 class="convert-text">Valuable Feedback From Student</h2>
        </div>
        <?php
            get_la_reviews_carousel_markup( $course_reviews );
        ?>
    </section>

<!-- FSC Partners section -->
<section id="fsc-partners">
    <div class="fsc-container">
        <h2 class="convert-text">Approved and Accredited</h2>
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
    if ( count( $display_faqs ) > 1 ) {
?>
<!-- FAQ section -->
<section id="msg-faq">
    <div id="la-single-faq" class="d-xl-block overflow-hidden">
        <h2 class="text-center"><b>Frequently Asked Questions</b></h2>
        <div class="accordion" id="accordionPanelsStayOpenExample">
<?php
for($x=0;$x<count($display_faqs);$x++){
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