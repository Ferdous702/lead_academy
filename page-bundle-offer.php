<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<!--Banner Section-->
<section id="bundle-offer-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Exclusive Bundle Offer</h1>
                <img src="https://lead-academy.org/wp-content/uploads/2023/05/save-big-min-1536x558-1.webp" alt="Save Big Offer" title="Save Big Offer">
                <h2>90% OFF!</h2>
                <h3>Get Huge Discount on Premium Courses</h3>
                <p>Get up to 90% discount and grab the exclusive learning opportunity containing Premium CPD Courses with unlimited tutor support. Enrol to this amazing bundle offer and <strong>save huge!</strong></p>
            </div>
        </div>
    </div>
</section>
<!--Review Section-->
<section id="bundle-review-part">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>What Our Customers Say About Us</h2>
                <div class="bundle-review">
                    <div class="course_reviews" id="course-reviews">
                        <script src="https://widget.reviews.io/carousel-inline-iframeless/dist.js?_t=2022042105"></script>
                        <link rel="stylesheet" href="https://assets.reviews.io/css/widgets/carousel-widget.css?_t=2022042105">
                        <link rel="stylesheet" href="https://assets.reviews.io/iconfont/reviewsio-icons/style.css?_t=2022042105">
                        <div id="reviewsio-carousel-widget"></div>
                        <script>
                            new carouselInlineWidget('reviewsio-carousel-widget', {
                            /*Your REVIEWS.io account ID:*/
                            store: 'lead-academy-org',
                            sku: '',
                            lang: 'en',
                            carousel_type: 'default',
                            styles_carousel: 'CarouselWidget--sideHeader--withcards ',
                            /*Widget settings:*/
                            options: {
                                general: {
                                /*What reviews should the widget display? Available options: company, product, third_party. You can choose one type or multiple separated by comma.*/
                                review_type: 'company, product',
                                /*Minimum number of reviews required for widget to be displayed*/
                                min_reviews: '1',
                                /*Maximum number of reviews to include in the carousel widget.*/
                                max_reviews: '20',
                                address_format: 'CITY, COUNTRY',
                                /*Carousel auto-scrolling speed. 3000 = 3 seconds. If you want to disable auto-scroll, set this value to false.*/
                                enable_auto_scroll: 10000,
                                },
                                header: {
                                /*Show overall rating stars*/
                                enable_overall_stars: true,
                                rating_decimal_places: 2,
                                },
                                reviews: {
                                /*Show customer name*/
                                enable_customer_name: true,
                                /*Show customer location*/
                                enable_customer_location: false,
                                /*Show "verified review" badge*/
                                enable_verified_badge: true,
                                /*Show "I recommend this product" badge (Only for product reviews)*/
                                enable_recommends_badge: true,
                                /*Show photos attached to reviews*/
                                enable_photos: true,
                                /*Show videos attached to reviews*/
                                enable_videos: true,
                                /*Show when review was written*/
                                enable_review_date: true,
                                /*Hide reviews written by the same customer (This may occur when customer reviews multiple products)*/
                                disable_same_customer: true,
                                /*Minimum star rating*/
                                min_review_percent: 4,
                                /*Show 3rd party review source*/
                                third_party_source: true,
                                /*Hide reviews without comments (still shows if review has a photo)*/
                                hide_empty_reviews: true,
                                /*Show product name*/
                                enable_product_name: true,
                                /*Show only reviews which have specific tags (multiple semicolon separated tags allowed i.e tag1;tag2)*/
                                tags: "",
                                /*Show branch, only one input*/
                                branch: "",
                                enable_branch_name: false,
                                },
                                popups: {
                                /*Make review items clickable (When they are clicked, a popup appears with more information about a customer and review)*/
                                enable_review_popups: true,
                                /*Show "was this review helpful" buttons*/
                                enable_helpful_buttons: true,
                                /*Show how many times review was upvoted as helpful*/
                                enable_helpful_count: true,
                                /*Show share buttons*/
                                enable_share_buttons: true,
                                },
                            },
                            translations: {
                                verified_customer: "Verified Customer",
                            },
                            styles: {
                                /*Base font size is a reference size for all text elements. When base value gets changed, all TextHeading and TexBody elements get proportionally adjusted.*/
                                '--base-font-size': '16px',
                                '--base-maxwidth': '100%',
                                /*Logo styles:*/
                                '--reviewsio-logo-style': 'var(--logo-normal)',
                                /*Star styles:*/
                                '--common-star-color': '#F47E27',
                                '--common-star-disabled-color': ' rgba(0,0,0,0.25)',
                                '--medium-star-size': ' 22px',
                                '--small-star-size': '19px',
                                /*Modal*/ '--x-small-star-size': '19px',
                                '--x-small-star-display': 'inline-flex',
                                /*Header styles:*/
                                '--header-order': '1',
                                '--header-width': '280px',
                                '--header-bg-start-color': '#FFFFFF',
                                '--header-bg-end-color': '#FFFFFF',
                                '--header-gradient-direction': '135deg',
                                '--header-padding': '1.5em',
                                '--header-border-width': '1px',
                                '--header-border-color': '#00000017',
                                '--header-border-radius': '0px',
                                '--header-shadow-size': '10px',
                                '--header-shadow-color': 'rgba(0, 0, 0, 0.05)',
                                /*Header content styles:*/
                                '--header-star-color': '#F47E27',
                                '--header-disabled-star-color': 'inherit',
                                '--header-heading-text-color': '#000000',
                                '--header-heading-font-size': '21px',
                                '--header-heading-font-weight': 'inherit',
                                '--header-heading-line-height': 'inherit',
                                '--header-heading-text-transform': 'inherit',
                                '--header-subheading-text-color': '#000000',
                                '--header-subheading-font-size': 'inherit',
                                '--header-subheading-font-weight': '300',
                                '--header-subheading-line-height': 'inherit',
                                '--header-subheading-text-transform': 'inherit',
                                /*Review item styles:*/
                                '--item-maximum-columns': '5',
                                /*Must be 3 or larger*/ '--item-background-start-color': '#F1F1F1',
                                '--item-background-end-color': '#ffffff',
                                '--item-gradient-direction': '135deg',
                                '--item-padding': '1.5em',
                                '--item-border-width': '0px',
                                '--item-border-color': 'rgba(0,0,0,0.1)',
                                '--item-border-radius': '0px',
                                '--item-shadow-size': '10px',
                                '--item-shadow-color': 'rgba(0,0,0,0.05)',
                                /*Heading styles:*/
                                '--heading-text-color': ' #0E1311',
                                '--heading-text-font-weight': ' 600',
                                '--heading-text-font-family': ' inherit',
                                '--heading-text-line-height': ' 1.4',
                                '--heading-text-letter-spacing': '0',
                                '--heading-text-transform': 'none',
                                /*Body text styles:*/
                                '--body-text-color': ' #0E1311',
                                '--body-text-font-weight': '400',
                                '--body-text-font-family': 'inherit',
                                '--body-text-line-height': '1.7',
                                '--body-text-letter-spacing': '0',
                                '--body-text-transform': 'none',
                                /*Scroll button styles:*/
                                '--scroll-button-icon-color': '#B91948',
                                '--scroll-button-icon-size': '25px',
                                '--scroll-button-bg-color': 'transparent',
                                '--scroll-button-border-width': '0px',
                                '--scroll-button-border-color': '#831E1E00',
                                '--scroll-button-border-radius': '60px',
                                '--scroll-button-shadow-size': '0px',
                                '--scroll-button-shadow-color': 'rgba(0,0,0,0.1)',
                                '--scroll-button-horizontal-position': '3px',
                                '--scroll-button-vertical-position': '0px',
                                /*Badge styles:*/
                                '--badge-icon-color': '#00A673',
                                '--badge-icon-font-size': '15px',
                                '--badge-text-color': '#0E1311',
                                '--badge-text-font-size': '13px',
                                '--badge-text-letter-spacing': 'inherit',
                                '--badge-text-transform': 'none',
                                /*Author styles:*/
                                '--author-font-size': '15px',
                                '--author-font-weight': 'inherit',
                                '--author-text-transform': 'inherit',
                                /*Product photo or review photo styles:*/
                                '--photo-video-thumbnail-size': '60px',
                                '--photo-video-thumbnail-border-radius': '0px',
                                /*Popup styles:*/
                                '--popup-backdrop-color': 'rgba(0,0,0,0.75)',
                                '--popup-color': '#ffffff',
                                '--popup-star-color': 'inherit',
                                '--popup-disabled-star-color': 'inherit',
                                '--popup-heading-text-color': 'inherit',
                                '--popup-body-text-color': 'inherit',
                                '--popup-badge-icon-color': 'inherit',
                                '--popup-badge-icon-font-size': '19px',
                                '--popup-badge-text-color': 'inherit',
                                '--popup-badge-text-font-size': '14px',
                                '--popup-border-width': '0px',
                                '--popup-border-color': 'rgba(0,0,0,0.1)',
                                '--popup-border-radius': '0px',
                                '--popup-shadow-size': '0px',
                                '--popup-shadow-color': 'rgba(0,0,0,0.1)',
                                '--popup-icon-color': '#0E1311',
                                /*Tooltip styles:*/
                                '--tooltip-bg-color': '#0E1311',
                                '--tooltip-text-color': '#ffffff',
                            },
                            });
                        </script>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="bundle-courses-box-part">
    <div class="container">
        <div class="row">
            <div class="bundle-courses-title">
                <h2>Enrol Today And Save Up To 90%!</h2>
            </div>

            <?php
                $bundle_courses_items = [
                    [
                        'bundle_course_img'           => '/wp-content/uploads/2024/04/Media-copy.webp',
                        'bundle_course_title'         => 'Get Any 5 Courses',
                        'bundle_course_sec_title'     => '5 Premium CPD Courses Bundle',
                        'bundle_course_description'   => 'Get an incredible learning opportunity just for £75 containing 5 premium CPD & IPHM accredited courses with…',
                        'bundle_course_rating'        => '4.7',
                        'bundle_course_regular_price' => '£625.00',
                        'bundle_course_sale_price'    => '£75.00',
                        'bundle_course_btn_text'      => 'Buy Now',
                        'bundle_course_btn_url'       => 365013,
                    ],
                    [
                        'bundle_course_img'           => '/wp-content/uploads/2023/05/Essential-Counselling-Skills-14-Courses-Bundle-1-min.webp',
                        'bundle_course_title'         => 'Counselling Skills',
                        'bundle_course_sec_title'     => '10 Courses Bundle',
                        'bundle_course_description'   => 'This comprehensive Counselling Skills course is the perfect way to kickstart your career in the field of counselling…..',
                        'bundle_course_rating'        => '4.9',
                        'bundle_course_regular_price' => '£990.00',
                        'bundle_course_sale_price'    => '£79.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/counselling-skills-10-courses-complete-bundle',
                    ],
                   
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/woman-relaxing-spa-min.webp',
                        'bundle_course_title'         => 'Spa Therapy',
                        'bundle_course_sec_title'     => '8 Premium Courses Bundle',
                        'bundle_course_description'   => 'This spa therapy course supports learners of all skill levels. Whether you’re an intermediate or advanced….',
                        'bundle_course_rating'        => '4.8',
                        'bundle_course_regular_price' => '£792.00',
                        'bundle_course_sale_price'    => '£69.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/all-courses',
                    ],
                
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/portrait-successful-leader-min.webp',
                        'bundle_course_title'         => 'Essential Managerial Skills',
                        'bundle_course_sec_title'     => '8 Premium Courses Bundle',
                        'bundle_course_description'   => 'This essential managerial skills course supports learners of all skill levels. Whether you’re an intermediate….',
                        'bundle_course_rating'        => '4.7',
                        'bundle_course_regular_price' => '£792.00',
                        'bundle_course_sale_price'    => '£89.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/essential-managerial-skills-8-courses-complete-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/business-team-meeting-strategy-marketing-cafe-concept-min.webp',
                        'bundle_course_title'         => 'Management Diploma',
                        'bundle_course_sec_title'     => '8 Premium Courses Bundle',
                        'bundle_course_description'   => 'This management diploma course will give you a competitive advantage in your career, making you stand….',
                        'bundle_course_rating'        => '5.0',
                        'bundle_course_regular_price' => '£792.00',
                        'bundle_course_sale_price'    => '£89.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/management-diploma-8-courses-complete-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/young-attractive-caucasian-smiling-satisfied-businessman-suit-standing-boardroom-with-arms-crossed-background-his-colleagues-having-meeting-min.webp',
                        'bundle_course_title'         => 'Advanced Leadership',
                        'bundle_course_sec_title'     => '8 Premium Courses Bundle',
                        'bundle_course_description'   => 'This advanced leadership course will give you a competitive advantage in your career, making you stand….',
                        'bundle_course_rating'        => '5.0',
                        'bundle_course_regular_price' => '£792.00',
                        'bundle_course_sale_price'    => '£82.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/advanced-leadership-8-premium-courses-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/close-up-image-speaker-giving-lecture-business-seminar-min.webp',
                        'bundle_course_title'         => 'New Manager Training',
                        'bundle_course_sec_title'     => '8 Premium Courses Bundle',
                        'bundle_course_description'   => 'The new manager training – 8 courses complete bundle courses bundle will help learners to fully enhance….',
                        'bundle_course_rating'        => '4.8',
                        'bundle_course_regular_price' => '£792.00',
                        'bundle_course_sale_price'    => '£89.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/new-manager-training-8-courses-complete-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/businessman-leader-modern-office-with-businesspeople-working-min.webp',
                        'bundle_course_title'         => 'Project Management',
                        'bundle_course_sec_title'     => '8 Premium Courses Bundle',
                        'bundle_course_description'   => 'The project management diploma – 8 courses complete bundle courses bundle will help learners to fully enhance….',
                        'bundle_course_rating'        => '4.9',
                        'bundle_course_regular_price' => '£891.00',
                        'bundle_course_sale_price'    => '£99.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/project-management-training-courses-bundle-online',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2022/09/cosmetologist-doing-face-treatment-applying-face-mask.jpg',
                        'bundle_course_title'         => 'Beauty Therapist',
                        'bundle_course_sec_title'     => '7 Premium Courses Bundle',
                        'bundle_course_description'   => 'This beauty therapist course supports learners of all skill levels. Whether you’re an intermediate or advanced learner ….',
                        'bundle_course_rating'        => '5.0',
                        'bundle_course_regular_price' => '£693.00',
                        'bundle_course_sale_price'    => '£73.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/beauty-therapist-7-courses-complete-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/make-up-artist-applying-eyeshadow-woman-min.webp',
                        'bundle_course_title'         => 'Makeup Artist',
                        'bundle_course_sec_title'     => '8 Premium Courses Bundle',
                        'bundle_course_description'   => 'This comprehensive Professional Makeup Artist course is the perfect way to kickstart your career in the field….',
                        'bundle_course_rating'        => '4.7',
                        'bundle_course_regular_price' => '£369.00',
                        'bundle_course_sale_price'    => '£49.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/makeup-artistry-masterclass-4-in-1',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/pretty-sister-spending-time-with-her-baby-brother-sitting-floor-bedroom-beautiful-young-babysitter-playing-with-little-boy-indoors-holding-stuffed-toy-duck-infancy-chil-min-1.webp',
                        'bundle_course_title'         => 'ChildCare Diploma',
                        'bundle_course_sec_title'     => '4 Premium Courses Bundle',
                        'bundle_course_description'   => 'This child care training course will give you a competitive advantage in your career, making you stand out….',
                        'bundle_course_rating'        => '4.8',
                        'bundle_course_regular_price' => '£396.00',
                        'bundle_course_sale_price'    => '£59.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/childcare-diploma-4-courses-complete-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/doctor-looking-pet-closely-min.webp',
                        'bundle_course_title'         => 'Animal Care Diploma',
                        'bundle_course_sec_title'     => '3 Premium Courses Bundle',
                        'bundle_course_description'   => 'This Animal Care and Psychology + Animal Healing Course will give you a competitive advantage in your career….',
                        'bundle_course_rating'        => '4.9',
                        'bundle_course_regular_price' => '£396.00',
                        'bundle_course_sale_price'    => '£55.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/animal-care-diploma-3-courses-complete-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/SEN-teaching-min-1.webp',
                        'bundle_course_title'         => 'SEN Teaching',
                        'bundle_course_sec_title'     => '3 Premium ChildCare Courses',
                        'bundle_course_description'   => 'This comprehensive SEN teaching assistant course is the perfect way to kickstart your career in the field of SEN…',
                        'bundle_course_rating'        => '4.9',
                        'bundle_course_regular_price' => '£396.00',
                        'bundle_course_sale_price'    => '£55.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/sen-teaching-assistant-3-premium-childcare-courses-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/medicine-bottles-home-medical-kit-min.webp',
                        'bundle_course_title'         => 'Paediatric First Aid',
                        'bundle_course_sec_title'     => '3 ChildCare Courses Bundle',
                        'bundle_course_description'   => 'This comprehensive paediatric first aid + 3 childcare course is the perfect way to kickstart your career in the field of….',
                        'bundle_course_rating'        => '4.9',
                        'bundle_course_regular_price' => '£125.00',
                        'bundle_course_sale_price'    => '£29.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/paediatric-first-aid-and-basic-life-support-course',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2022/09/Early-Years-SEN-min.jpg',
                        'bundle_course_title'         => 'Early Years SEN',
                        'bundle_course_sec_title'     => '3 Premium ChildCare Courses',
                        'bundle_course_description'   => 'This SEN teaching and child counselling course will give you a competitive advantage in your career, making you ….',
                        'bundle_course_rating'        => '4.7',
                        'bundle_course_regular_price' => '£396.00',
                        'bundle_course_sale_price'    => '£55.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/early-years-sen-teaching-3-premium-childcare-courses-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/Professional-Electrician-min.webp',
                        'bundle_course_title'         => 'Professional Electrician',
                        'bundle_course_sec_title'     => '13 Courses Bundle',
                        'bundle_course_description'   => 'This professional electrician course will give you a competitive advantage in your career, making you stand….',
                        'bundle_course_rating'        => '4.8',
                        'bundle_course_regular_price' => '£1,287.00',
                        'bundle_course_sale_price'    => '£119.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/professional-electrician-13-electrician-courses-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2022/09/team-diverse-startup-company-colleague-entrepreneur-meeting-professional-workplace-broadroom-1-min.jpg',
                        'bundle_course_title'         => 'Leadership & Management',
                        'bundle_course_sec_title'     => '8 ChildCare Courses Bundle',
                        'bundle_course_description'   => 'This comprehensive Leadership & Management course is the perfect way to kickstart your career in the field of…..',
                        'bundle_course_rating'        => '4.8',
                        'bundle_course_regular_price' => '£792.00',
                        'bundle_course_sale_price'    => '£89.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/leadership-management-diploma-8-courses-complete-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/pretty-sister-spending-time-with-her-baby-brother-sitting-floor-bedroom-beautiful-young-babysitter-playing-with-little-boy-indoors-holding-stuffed-toy-duck-infancy-chil-min-1-1.webp',
                        'bundle_course_title'         => 'ChildCare Diploma',
                        'bundle_course_sec_title'     => '4 Courses Complete Bundle',
                        'bundle_course_description'   => 'This child care training course supports learners of all skill levels. Whether you’re an intermediate or advanced learner….',
                        'bundle_course_rating'        => '4.8',
                        'bundle_course_regular_price' => '£396.00',
                        'bundle_course_sale_price'    => '£59.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/childcare-diploma-4-courses-complete-bundle',
                    ],
                    [
                        'bundle_course_img'           => 'https://lead-academy.org/wp-content/uploads/2023/05/gray-german-shepherd-training-nature-summer-min.webp',
                        'bundle_course_title'         => 'Dog Training Diploma',
                        'bundle_course_sec_title'     => '8 Premium Courses Bundle',
                        'bundle_course_description'   => 'This Dog Training Diploma course supports learners of all skill levels. Whether you’re an intermediate or….',
                        'bundle_course_rating'        => '4.8',
                        'bundle_course_regular_price' => '£792.00',
                        'bundle_course_sale_price'    => '£89.00',
                        'bundle_course_btn_text'      => 'Learn More',
                        'bundle_course_btn_url'       => 'https://lead-academy.org/course/dog-training-diploma-8-courses-complete-bundle',
                    ],
                    // Add more course items here if needed
                ];

                ?>
            <?php foreach ($bundle_courses_items as $key => $course) : ?>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-courses-card-box">
                    <img src="<?php echo $course['bundle_course_img']; ?>" alt="<?php echo $course['bundle_course_title']; ?>">
                    <div class="bundle-course-box-dtls">
                        <!-- Assuming there's an image for the discount -->
                        <div class="bundle-course-discount-percent"><img src="https://lead-academy.org/wp-content/uploads/0223/12/94off.webp" title="99off" alt="99off"></div>
                        <?php if (is_numeric($course['bundle_course_btn_url'])): ?>
                            <h2><span style="font-size:20px;" type="button"
                                        data-variation-id="<?= $course['bundle_course_btn_url'] ?>"
                                        data-quantity="1"
                                        class="custom-add-to-cart" >
                                    <?php echo $course['bundle_course_title']; ?>
                        </span></h2>
                            <?php else: ?>
                                <h2><a href="<?php echo $course['bundle_course_btn_url']; ?>"><?php echo $course['bundle_course_title']; ?></a></h2>
                            <?php endif; ?>

                        <h3><?php echo $course['bundle_course_sec_title']; ?></h3>
                        <p><?php echo $course['bundle_course_description']; ?></p>
                        <div class="row">
                            <div class="col-6">
                                <div class="bundle-rating-course-part">
                                    <!-- Assuming you want to show some rating stars -->
                                    <span class="bundle-course-rating">(<?php echo $course['bundle_course_rating']; ?>)</span>
                                    <span class="fa fa-star rev-checked"></span>
                                    <span class="fa fa-star rev-checked"></span>
                                    <span class="fa fa-star rev-checked"></span>
                                    <span class="fa fa-star rev-checked"></span>
                                    <span class="fa fa-star rev-checked"></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bundle-course-price">
                                    <span class="bundle-regular-price"><del><?php echo $course['bundle_course_regular_price']; ?></del></span>
                                    <span class="bundle-sale-price"><?php echo $course['bundle_course_sale_price']; ?></span>
                                </div>
                            </div>
                        </div>
                        <hr class="solid">
                        <div class="bundle-course-box-button">
                            <?php if (is_numeric($course['bundle_course_btn_url'])): ?>
                                <button type="button"
                                        data-variation-id="<?= $course['bundle_course_btn_url'] ?>"
                                        data-quantity="1"
                                        class="btn custom-add-to-cart bundle-course-btn" >
                                    <?php echo esc_html('BOOK NOW'); ?>
                                </button>
                            <?php else: ?>
                                <a href="<?php echo $course['bundle_course_btn_url']; ?>"><?php echo $course['bundle_course_btn_text']; ?></a>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<!--Why You Should Train With Lead Academy-->
<section id="bundle-why-should-train">
    <div class="container">
        <div class="row">
            <h2>Why You Should Train With <br> Lead Academy</h2>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/website.webp" title="website" alt="website">
                    <h3>Wide range of courses</h3>
                    <p>Lead Academy offers a wide range of courses in several categories through online</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/clipboard.webp" title="clipboard" alt="clipboard">
                    <h3>Comprehensive Syllabus</h3>
                    <p>Learn from expert tutors with industry experience, with learning materials designed to be engaging and easy-to-follow</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/comments.webp" title="comments" alt="comments">
                    <h3>Instant Feedback</h3>
                    <p>Effective assessment frameworks for the evaluation and instant feedback</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/support.webp" title="support" alt="support">
                    <h3>Tutor Support</h3>
                    <p>With all of our courses, you’ll receive access to our committed tutor support benefit</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/certificate-1-1.webp" title="certificate" alt="certificate">
                    <h3>Earn a Verifiable Certificate</h3>
                    <p>On successful completion of your courseyou/your employer can verify your qualification through our website</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="bundle-w-s-t-box">
                    <img src="https://lead-academy.org/wp-content/uploads/2023/05/guarantee.webp" title="guarantee" alt="guarantee">
                    <h3>Quality Guarantees</h3>
                    <p>All our courses are designed by industry experts,meaning we follow rigorousstandards of quality in our teaching and provide quality education</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bundle Partners section -->
<section id="fsc-partners">
    <div class="fsc-container">
        <h2>Approved Member</h2>
    </div>
    <div class="container">
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
get_footer();
?>