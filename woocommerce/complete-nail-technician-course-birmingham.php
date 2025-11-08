<style>
    #phuk-top-3-sec{
        background-color: #ffeaea;
    }
    #cntc-hero{
        margin-top:0px;
    }
    .single-booking-right{
        width: 150px !important;
    }
    .single-phlebotomy-top-3{
        padding: 19px !important;
    }
    @media screen and (max-width: 1040px) {
        .phlebotomy-top-3 .phlebotomy-container {
            flex-direction: column;
        }
    }
</style>

<style>
    .gift_course_button {
        display: none !important;
    }

    .gform_wrapper.gravity-theme .gform_footer,
    .gform_wrapper.gravity-theme .gform_page_footer {
        padding: 0px !important;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 999999999999;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        padding-bottom: 20px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        max-width: 100%;
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    #enquiryBookingModal .modal-content {
        background-color: #f8f8f8;
        margin: auto;
        padding: 5px 20px 13px 20px;
        border: 1px solid #888;
        width: 750px;
        max-width: 80%;
        max-height: 500px;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa !important;
        float: right;
        font-size: 40px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    #enquiryModal textarea {
        height: 100px;
    }

    div#gform_64_validation_container h2 {
        font-size: 18px;
        line-height: 26px;
    }

    div#enquiryBookingModal {
        color: #000 !important;
        z-index: 99999999999999999;
    }

    div#enquiryBookingModal .single-booking-option {
        margin: 35px 5px 10px;
        overflow-y: scroll;
    }

    div#enquiryBookingModal .close {
        margin-right: -12px;
    }

    div#enquiryBookingModal .float-row {
        justify-content: space-between;
    }

    div#enquiryBookingModal .single-booking-row:first-child {
        border-top: 0;
        margin: 0;
        padding: 0 0 20px;
    }

    /* added by sadman */
    .nail-technician-top-4-right p {
    font-size: 16px !important;
    margin-top: 8px !important;
    text-transform: uppercase;
    font-weight: 700;
    }
    .single-phlebotomy-top-3 p {
    margin: 0 auto 5px;
    }
    @media screen and (max-width: 468px) {
    .single-phlebotomy-top-3 p {
        display: contents !important;
    }
    }
    /* added by sadman */
</style>
<?php
// nail_technician_course_group content
$nail_technician_course_group   = get_post_meta( $meta_id, 'nail_technician_course_group', true);
$current_product_id             = get_the_ID();
$la_phleb_course_regular_price  = get_post_meta( $current_product_id, 'la_phleb_course_regular_price', true);
$la_phleb_course_sell_price     = get_post_meta( $current_product_id, 'la_phleb_course_sell_price', true);
$la_phleb_course_meta_group     = get_post_meta( $current_product_id, 'la_phleb_course_meta_group', true);
$la_phleb_course_location_root  = get_post_meta( $current_product_id, 'la_phleb_course_location_root', true);
$la_phleb_course_address_root   = get_post_meta( $current_product_id, 'la_phleb_course_address_root', true);
$la_phleb_course_time_root      = get_post_meta( $current_product_id, 'la_phleb_course_time_root', true);

$la_nail_technician_after_title     = get_post_meta( $current_product_id, 'la_nail_technician_after_title', true);
$nail_technician_includes_group     = get_post_meta( $current_product_id, 'nail_technician_includes_group', true);
$la_nail_technician_course_description_title     = get_post_meta( $current_product_id, 'la_nail_technician_course_description_title', true);
$la_nail_technician_course_description     = get_post_meta( $current_product_id, 'la_nail_technician_course_description', true);
$la_nail_technician_course_highlights_title     = get_post_meta( $current_product_id, 'la_nail_technician_course_highlights_title', true);
$la_nail_technician_course_highlights     = get_post_meta( $current_product_id, 'la_nail_technician_course_highlights', true);
$la_nail_technician_who_is_title     = get_post_meta( $current_product_id, 'la_nail_technician_who_is_title', true);
$la_nail_technician_who_is     = get_post_meta( $current_product_id, 'la_nail_technician_who_is', true);
$la_nail_technician_why_train_title     = get_post_meta( $current_product_id, 'la_nail_technician_why_train_title', true);
$la_nail_technician_why_train_desc     = get_post_meta( $current_product_id, 'la_nail_technician_why_train_desc', true);

$discount_percentage = number_format((($la_phleb_course_regular_price-$la_phleb_course_sell_price)/$la_phleb_course_regular_price*100),0);

// if(get_current_user_id() == 144){
//     echo '<pre>';
//     print_r($nail_technician_course_group);
//     echo '</pre>';
// }
?>
<!-- The Booking Modal -->
<div id="enquiryBookingModal" class="modal phlebotomy-course-top-content-modal">
    <div class="modal-content">
        <span class="close">×</span>
        <div class="single-booking-option">
            <div class="d-flex justify-content-center align-items-center gap-3 py-4">
                <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <span>Loading...</span>
            </div>
        </div>
    </div>
</div>

<!-- Top 3 -->
<section id="phuk-top-3-sec">
    <div class="container">
        <div class="phlebotomy-top-3">
            <div class="phlebotomy-container">
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Get-Accredited.webp" alt="Get Accredited Logo">
                        </div>
                        <div class="float-right nail-technician-top-4-right">     
                            <p>Get Accredited</p>
                        </div>
                    </div>        
                </div>
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Get-Insured.webp" alt="Get Insured Logo">
                        </div>
                        <div class="float-right nail-technician-top-4-right">         
                            <p>Get Insured</p>
                        </div>
                    </div>        
                </div>
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Get-Recognised.webp" alt="Get Recognised Logo">
                        </div>
                        <div class="float-right nail-technician-top-4-right">         
                            <p>Get Recognised</p>
                        </div>
                    </div>        
                </div>
                <div class="single-phlebotomy-top-3">
                    <div class="float-row">
                        <div class="float-left">         
                            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Earn-Money.webp" alt="Earn Money Logo">
                        </div>
                        <div class="float-right nail-technician-top-4-right">         
                            <p>Earn Money</p>
                        </div>
                    </div>        
                </div>
            </div>   
        </div>
    </div>
</section>
<!-- Top 3 End -->
<div class="msg-therapy">
    <!-- Hero section -->
    <section id="cntc-hero">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between">
                    <div class="hero-left">
                        <h1><?=the_title()?></h1>
                        <p>
                            <b>Course Fees:</b> 
                            <del>£<?=$la_phleb_course_regular_price?></del>
                            <span class="course-price">£<?=$la_phleb_course_sell_price?></span>
                            <sub>(Excl. VAT)</sub>
                        </p>
                        <p style="max-width:100%"><?=$la_nail_technician_after_title?></p>
                        <ul class="list-unstyled nail-course-includes">
                            <?php
                            if(count($nail_technician_includes_group) > 1){
                                foreach ($nail_technician_includes_group as $item) {
                                    echo '<li>';
                                    echo '<span><img src="'.$item['nail_technician_includes_image'].'" alt="Recognition Icon"></span>';
                                    echo '<span><b>'.$item['nail_technician_includes_title'].'</b> '.$item['nail_technician_includes_content'].'</span>';
                                    echo '</li>';
                                }
                            }else{
                            ?>
                            <li>
                                <span><img src="https://lead-academy.org/wp-content/uploads/2022/10/recognised-certificate.png" alt="Recognition Icon"></span>
                                <span><b>Certificate:</b> CPD UK Accredited PDF Certificate Included</span>
                            </li>
                            <li>
                                <span><img src="https://lead-academy.org/wp-content/uploads/0223/12/Recognition.webp" alt="Recognition Icon"></span>
                                <span><b>Recognition:</b> Accredited by CPD UK & IPHM</span>
                            </li>
                            <li>
                                <span><img src="https://lead-academy.org/wp-content/uploads/0223/12/Duration.webp" alt="Duration Icon"></span>
                                <span><b>Duration:</b> 3 Days Practical Training</span>
                            </li>
                            <li>
                                <span><img src="https://lead-academy.org/wp-content/uploads/0223/12/Timing.webp" alt="Timing Icon"></span>
                                <span><b>Time:</b> 10 am to 5:30 pm</span>
                            </li>
                            <li>
                                <span><img src="https://lead-academy.org/wp-content/uploads/0223/12/Guidance.webp" alt="Guidance Icon"></span>
                                <span><b>Guidance:</b> Continuous Expert Guidance</span>
                            </li>
                            <li>
                                <span><img src="https://lead-academy.org/wp-content/uploads/0223/12/Entry-Requirement.webp" alt="Entry Requirement Icon"></span>
                                <span><b>Entry Requirement:</b> No academic qualification and no experience are required</span>
                            </li>
                            <li>
                                <span><img src="https://lead-academy.org/wp-content/uploads/0223/12/Live-Practice.webp" alt="Live Practice Icon"></span>
                                <span><b>Live Practice:</b> Practice on each other/ Artificial Arm</span>
                            </li>
                            <li>
                                <span><img src="https://lead-academy.org/wp-content/uploads/0223/12/Payment.webp" alt="Payment Icon"></span>
                                <span><b>Payment:</b> Interest-Free Installments</span>
                            </li>
                            <li>
                                <span><img src="https://lead-academy.org/wp-content/uploads/0223/12/Nail-Kits.webp" alt="Nail Kits Icon"></span>
                                <span><b>Nail Kits:</b> Required to bring your own kit</span>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <div class="buttons-wrap">
                            <a href="#" id="enquiry-booking-modal" class="btn-buy-now">See Dates</a>
                            <a href="#" id="enquiry-booking-modal" class="btn-add-to-cart">Enrol Now</a>
                        </div>
                    </div>      <!-- end hero-left -->

                    <div class="hero-right">
                        <div class="hero-big-img">
                            <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham1.webp" alt="woman-with-nail-art-promoting-design-luxury-earrings-ring">
                        </div>
                        <div class="hero-small-imgs">
                            <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham2.webp" alt="black-nails-manicure 2">
                            <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham3.webp" alt="black-nails-manicure 2">
                            <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham4.webp" alt="black-nails-manicure 2">
                            <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham5.webp" alt="black-nails-manicure 2">
                        </div>
                    </div>      <!-- end hero-right -->
                </div>          <!-- end d-flex -->
            </div>          <!-- end row -->
        </div>
    </section>


    <!-- Service Details Section --> 
    <section id="cntc-service-details">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Become a Professional in Nail Art and Extensions</h2>
            </div>
            <div class="row">
                <div class="service-details-wrap d-flex justify-content-center">
                    <div class="left-service-item">
                        <div class="left-service-item-single">
                            <h3><?=$la_nail_technician_course_description_title?></h3>
                            <?=wpautop($la_nail_technician_course_description)?>
                        </div>

                        <div class="left-service-item-single">
                            <h3><?=$la_nail_technician_course_highlights_title?></h3>
                            <?=wpautop($la_nail_technician_course_highlights)?>
                        </div>
                    </div>

                    <div class="right-service-item">
                        <div class="right-service-item-single">
                            <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham6.webp" alt="beautiful-woman-s-nails-with-beautiful-creative-manicure">
                        </div>
                        <div class="right-service-item-single">
                            <h3><?=$la_nail_technician_who_is_title?></h3>
                            <?=wpautop($la_nail_technician_who_is)?>
                        </div>
                    </div>
                </div>      <!-- end service-details-wrap -->
            </div>          <!-- end row -->
        </div>
    </section>


    <!-- Daywise Course Section --> 
    <section id="cntc-daywise-course">
        <h2 class="cntc-daywise-course-title text-center">Day 1</h2>
        <div class="container">
            <div class="row">   
                <div class="cntc-two-cards d-flex justify-content-center">
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham7.webp" alt="manicures-day1">
                        <div class="cntc-single-card-contents">
                            <h3><?=$nail_technician_course_group[0]['nail_technician_day_title']?></h3>
                            <p class="time-range"><?=$nail_technician_course_group[0]['nail_technician_day_time']?></p>
                            <?=$nail_technician_course_group[0]['nail_technician_day_content']?>
                        </div>
                    </div>
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham8.webp" alt="pedicure-day1">
                        <div class="cntc-single-card-contents">
                            <h3><?=$nail_technician_course_group[1]['nail_technician_day_title']?></h3>
                            <p class="time-range"><?=$nail_technician_course_group[1]['nail_technician_day_time']?></p>
                            <?=$nail_technician_course_group[1]['nail_technician_day_content']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="cntc-daywise-course-title text-center day-2">Day 2</h2>
        <div class="container">
            <div class="row">   
                <div class="cntc-two-cards d-flex justify-content-center">
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham9.webp" alt="gel-extensions-day2">
                        <div class="cntc-single-card-contents">
                            <h3><?=$nail_technician_course_group[2]['nail_technician_day_title']?></h3>
                            <p class="time-range"><?=$nail_technician_course_group[2]['nail_technician_day_time']?></p>
                            <?=$nail_technician_course_group[2]['nail_technician_day_content']?>
                        </div>
                    </div>
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham10.webp" alt="gel-polish-day2">
                        <div class="cntc-single-card-contents">
                            <h3><?=$nail_technician_course_group[3]['nail_technician_day_title']?></h3>
                            <p class="time-range"><?=$nail_technician_course_group[3]['nail_technician_day_time']?></p>
                            <?=$nail_technician_course_group[3]['nail_technician_day_content']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="cntc-daywise-course-title text-center day-3">Day 3</h2>
        <div class="container">
            <div class="row">   
                <div class="cntc-two-cards d-flex justify-content-center">
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham11.webp" alt="acrylics-day3-img">
                        <div class="cntc-single-card-contents">
                            <h3><?=$nail_technician_course_group[4]['nail_technician_day_title']?></h3>
                            <p class="time-range"><?=$nail_technician_course_group[4]['nail_technician_day_time']?></p>
                            <?=$nail_technician_course_group[4]['nail_technician_day_content']?>
                        </div>
                    </div>
                    <div class="cntc-single-card">
                        <img src="/wp-content/uploads/0223/12/complete-nail-technician-course-birmingham12.webp" alt="Sculpting-with-Acrylic">
                        <div class="cntc-single-card-contents">
                            <h3><?=$nail_technician_course_group[5]['nail_technician_day_title']?></h3>
                            <p class="time-range"><?=$nail_technician_course_group[5]['nail_technician_day_time']?></p>
                            <?=$nail_technician_course_group[5]['nail_technician_day_content']?>
                        </div>
                    </div>
                </div>
                <a href="#" id="enquiry-booking-modal" class="cntc-two-cards-bottom-btn">Book Now</a>
            </div>
        </div>
    </section>

    <!-- ACCREDITATION Section --> 
    <section id="msg-trd-section">
        <div class="container">
            <div class="msg-train-b">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="msg-cs-train">
                        <h2 class="text-center">
                            <?=$la_nail_technician_why_train_title?>
                        </h2>
                        <?=$la_nail_technician_why_train_desc?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="cs-accreditation">
                            <h2> COURSE ACCREDITATION </h2>
                            <img src="/wp-content/uploads/2023/06/ac-1.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section --> 
    <section id="msg-trd-section">
        <div class="container">
            <div class="msg-train-b">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center">
                        <div class="success-stories-nail">
                            <h2 class="text-center">Practical Session</h2>
                            <div class="success-stories">
                                <iframe title="Student Stories" width="100%" height="300" src="https://www.youtube.com/embed/hGZraiFGWzM?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center">
                        <div class="nail-success-stories">
                        <h2 class="text-center">
                            From Passion to a Rewarding Career 
                        </h2>
                        <ul>
                            <li>Get Accredited Diploma in 3 days </li>
                            <li>Over 5000 Certificates Awarded </li>
                            <li>98% Success Rate </li>
                            <li>Eligible for Insurance </li>
                            <li>Payment in 4 Instalments  </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feedback Section -->
    <div id="la-single-feedbacks" class="mb-5 ssd-none d-xl-block w-100">
        <div class="container">
        <h2 class="text-center"><b>Valuable Feedback From Student</b></h2>
        <?php
            if (function_exists('la_display_reviews_section')) {
                la_display_reviews_section();
            }
        ?>
        </div>
    </div>

<!-- FAQ Section -->
<section id="msg-faq">
    <div id="la-single-faq" class="d-xl-block overflow-hidden">
        <h2 class="text-center"><b>FAQs</b></h2>
        <div class="accordion" id="accordionPanelsStayOpenExample">
<?php
if(isset($wc_product_faqs) && is_array($wc_product_faqs) && count($wc_product_faqs) > 1){
    $counter = 20;
    foreach ( $wc_product_faqs as $item ) {
        $counter++;
    ?>
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading<?=$counter?>">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$counter?>" aria-expanded="true" aria-controls="panelsStayOpen-collapse<?=$counter?>">
                        <?=$item['faq_title']?>
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse<?=$counter?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?=$counter?>">
                    <div class="accordion-body">
                        <p><?=wpautop($item['faq_text'])?></p>
                    </div>
                </div>
            </div>
    <?php
    }
}else{
?>
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading19">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse19" aria-expanded="true" aria-controls="panelsStayOpen-collapse19">
                        What should I bring to the training?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse19" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading19">
                    <div class="accordion-body">
                        <p>Practically nothing! We've got all your essentials covered for the training session.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading20">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse20" aria-expanded="true" aria-controls="panelsStayOpen-collapse20">
                        Are nail training kits included in the course?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse20" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading20">
                    <div class="accordion-body">
                        <p>Absolutely! Kits are provided for the duration of the course, but they are not for take-home purposes.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading21">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse21" aria-expanded="true" aria-controls="panelsStayOpen-collapse21">
                        Who is a nail technician?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse21" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading21">
                    <div class="accordion-body">
                        <p>A nail technician is a professional who specialises in the beautification and maintenance of nails. They provide services such as manicures, pedicures, nail extensions, and nail art. They are skilled in techniques such as filing, shaping, polishing, and applying various types of nail products.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading23">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse23" aria-expanded="false" aria-controls="panelsStayOpen-collapse23">
                        What does a nail technician do?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse23" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading23">
                    <div class="accordion-body">
                        <p>A nail technician performs a variety of tasks related to nail care and beautification. They clean, shape, and trim nails, apply polish or artificial nails, and provide treatments such as cuticle care and hand massages. Additionally, they may offer advice on nail care and recommend products for at-home maintenance.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading25">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse25" aria-expanded="false" aria-controls="panelsStayOpen-collapse25">
                        What does it take to become a nail technician?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse25" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading25">
                    <div class="accordion-body">
                        <p>To become a nail technician, you should get yourself registered with a certified nail tech course. Lead Academy is one of the best e-learning platforms for professional online courses. These certified courses often cover topics such as sanitation, safety procedures, nail anatomy, and various nail techniques. Additionally, having good manual dexterity, attention to detail, and excellent customer service skills are important qualities for a successful nail technician.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading27">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse27" aria-expanded="false" aria-controls="panelsStayOpen-collapse27">
                        How much do nail technicians make in the UK?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse27" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading27">
                    <div class="accordion-body">
                        <p>The average salary for a nail technician in the UK can vary depending on factors such as experience, location, and clientele. On average, nail technicians in the UK can earn between £15,000 to £25,000 per year. However, experienced and highly skilled nail technicians who have built a loyal client base can earn significantly more.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading29">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse29" aria-expanded="false" aria-controls="panelsStayOpen-collapse29">
                        Are nail artists in high demand?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse29" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading29">
                    <div class="accordion-body">
                        <p>Yes, nail artists are in high demand as more people seek professional nail services for special occasions, events, and everyday grooming. The growing popularity of nail art and the increasing emphasis on self-care have contributed to the high demand for skilled and creative nail artists.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading31">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse31" aria-expanded="false" aria-controls="panelsStayOpen-collapse31">
                        What skills does a nail artist need?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse31" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading31">
                    <div class="accordion-body">
                        <p>A nail artist needs a strong understanding of nail anatomy, knowledge of various nail techniques and trends, proficiency in using different tools and equipment, and excellent attention to detail. Additionally, good communication skills and the ability to provide exceptional customer service are essential for building a loyal client base.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h3 class="accordion-header" id="panelsStayOpen-heading33">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse33" aria-expanded="false" aria-controls="panelsStayOpen-collapse33">
                        How much does nail art cost in the UK?
                    </button>
                </h3>
                <div id="panelsStayOpen-collapse33" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading33">
                    <div class="accordion-body">
                        <p>The cost of nail art in the UK can vary depending on several factors, such as the complexity of the design, the salon's location, and the reputation of the nail artist. On average, basic nail art can range from £10 to £30, while more intricate designs or specialty services may cost upwards of £50 or more.</p>
                    </div>
                </div>
            </div>
<?php
}
?>
        </div>
    </div>
</section>

</div>

<div id="unique-flash-sale-popup" class="unique-popup-container">
    <div class="unique-popup-content">
        <div class="unique-popup-header">
            <p class="unique-popup-p">🔥24-HOUR FLASH SALE🔥</p>
            <span id="unique-popup-close" class="unique-popup-close">&times;</span>
        </div>
        <p>Grab 10% Off for the next 24 hours only</p>
        <?php
        echo do_shortcode('[contact-form-7 id="e95b2a6" title="Complete Nail Technician Popup"]');
        ?>
        <p class="unique-countdown-text">This offer expires in:</p>
        <div id="unique-countdown" class="unique-countdown"></div>
        <p><strong>*Don’t wait - this opportunity won't last long!*</strong></p>
        <p id="copy-confirmation" style="color:green; display:none;">Coupon code copied!</p>
    </div>
</div>

<style>
    /* General popup styles (for larger screens) */
.unique-popup-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    z-index: 9999;
    justify-content: center;
    align-items: center;
}

.unique-popup-content {
    background: linear-gradient(135deg, #fff, #ffd1d8);
    padding: 40px 20px 20px 20px;
    text-align: center;
    max-width: 550px;
    width: 90%;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    position: relative;
    animation: fadeIn 0.5s ease-in-out;
}

.unique-popup-header h2 {
    color: #FF1493 ;
    font-size: 24px;
    margin: 0;
}

.unique-popup-p {
    color: #FF1493 ;
    margin: 0;
    font-size: 36px !important;
    margin-bottom: 30px !important;
    font-weight: 700;
}

span#unique-popup-close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 22px;
    cursor: pointer;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    color: #ff1493;
    background-color: #ffffff;
    border: 1px solid #ff1493;
    display: flex;
    justify-content: center;
    align-items: center;
    line-height: 1;
    text-align: center;
}

.unique-promo-code {
    font-size: 24px;
    font-weight: bold;
    color: #FF1493 ;
}

.unique-countdown-text {
    margin-top: 10px;
    font-weight: bold;
}

.unique-countdown {
    font-size: 22px;
    color: #FF1493 ;
    font-weight: bold;
    margin-top: 10px;
}

/* Align form labels to the left */
#gform_91 .gfield_label {
    text-align: left;
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

/* Adjust input fields width for better alignment */
#gform_91 .ginput_container input, 
#gform_91 .ginput_container select, 
#gform_91 .ginput_container textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 0px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
}

/* Adjust the alignment of the submit button */
#gform_91 .gform_footer .gform_button {
    width: 100%;
    padding: 15px;
    background-color: #FF1493 ;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 20px;
}

/* Style for better form layout */
#gform_91 .gform_fields .gfield {
    margin-bottom: 0px;
}

.confirmation-container {
    background-color: #f9f9f9; /* Light background for contrast */
    padding: 20px; /* Space around the text */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    text-align: center; /* Center text alignment */
    margin-top: 20px; /* Space above the confirmation message */
}

.confirmation-container h3 {
    color: #b91948 !important;
    font-size: 22px !important;
    margin-bottom: 0px;
}

.confirmation-container p {
    font-size: 18px !important;
}

.unique-popup-content p {
    font-size: 16px;
}

.unique-promo-code {
    font-size: 20px; /* Size of the promo code */
    font-weight: bold; /* Make the promo code bold */
    color: #ff1493; /* Blue color for the promo code */
    cursor: pointer; /* Show pointer cursor on hover */
    transition: color 0.3s ease; /* Smooth transition for hover effect */
}

.unique-promo-code:hover {
    color: #0056b3; /* Darker blue on hover */
}


/* Mobile responsiveness */
@media screen and (max-width: 767px) {
    #gform_91 .ginput_container {
        width: 100%;
    }
}


/* Fade-in animation */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Tablet styles (max-width: 1024px) */
@media screen and (max-width: 1024px) {
    .unique-popup-content {
        max-width: 450px; /* Reduce content width */
        padding: 30px 15px 15px 15px; /* Reduce padding */
    }

    .unique-popup-header h2 {
        font-size: 22px; /* Reduce header font size */
    }

    .unique-popup-p {
        font-size: 22px; /* Reduce header font size */
    }

    .unique-promo-code {
        font-size: 22px; /* Adjust promo code size */
    }

    .unique-countdown {
        font-size: 20px; /* Adjust countdown font size */
    }
}

/* Mobile styles (max-width: 767px) */
@media screen and (max-width: 767px) {
    .unique-popup-content {
        max-width: 90%; /* Make the popup full width for mobile */
        padding: 45px 10px 10px 10px; /* Reduce padding for mobile */
    }

    .unique-popup-header h2 {
        font-size: 22px !important; /* Smaller header font size */
    }

    .unique-popup-p {
        font-size: 22px !important; /* Smaller header font size */
    }

    .unique-promo-code {
        font-size: 18px !important; /* Adjust promo code size for mobile */
    }

    .unique-countdown {
        font-size: 18px !important; /* Smaller countdown font size */
    }

    .unique-popup-content h3 {
    font-size: 18px !important;
    margin: 0px !important
    }

    .unique-popup-close {
        top: 5px;
        right: 5px;
        font-size: 18px; /* Smaller close button */
        width: 22px;
        height: 22px;
    }

    #gform_91 .ginput_container input, #gform_91 .ginput_container select, #gform_91 .ginput_container textarea {
    padding: 4px 10px;
    }

    #gform_91 .gform_footer .gform_button {
        padding: 5px;
    }

    legend.gfield_label.gform-field-label.gfield_label_before_complex, label.gfield_label.gform-field-label {
    font-size: 14px !important;
    }
}

</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Check if the popup has already been shown this session
    if (!sessionStorage.getItem("popupShown")) {
        // Set a timer to display the popup after 5 seconds
        setTimeout(function() {
            document.getElementById("unique-flash-sale-popup").style.display = "flex";
            // Mark that the popup has been shown
            sessionStorage.setItem("popupShown", "true");
        }, 5000); // Show after 5 seconds
    }

    // Close popup when the close button is clicked
    document.getElementById("unique-popup-close").onclick = function() {
        document.getElementById("unique-flash-sale-popup").style.display = "none";
    };

    // Countdown timer
    var countdownDate = new Date().getTime() + 24 * 60 * 60 * 1000; // 24 hours from now

    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countdownDate - now;

        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("unique-countdown").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("unique-countdown").innerHTML = "EXPIRED";
        }
    }, 1000);
});

// Function to copy the coupon code
function copyCoupon() {
    var couponCode = document.getElementById("unique-promo-code").textContent;
    var textarea = document.createElement("textarea");
    textarea.value = couponCode;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);

    // Show confirmation message
    var confirmationMessage = document.getElementById("copy-confirmation");
    confirmationMessage.style.display = "block";
    setTimeout(function() {
        confirmationMessage.style.display = "none";
    }, 2000);
}
</script>
