
<?php
// nail_technician_course_group content
$nail_technician_course_group = get_post_meta( $meta_id, 'nail_technician_course_group', true);
$current_product_id             = get_the_ID();

$la_session_overview_title        = get_post_meta($meta_id, 'la_session_overview_title', true);
$la_session_overview_image        = get_post_meta($meta_id, 'la_session_overview_image', true);

$la_phleb_course_regular_price = get_post_meta( $current_product_id, 'la_phleb_course_regular_price', true);
$la_phleb_course_sell_price = get_post_meta( $current_product_id, 'la_phleb_course_sell_price', true);
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
$wc_product_faqs                        = get_post_meta( $current_product_id, 'product_faqs', true);

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

<link rel="stylesheet" href="https://lead-academy.org/wp-content/themes/lead-academy-child/assets/css/acrylic-nail-extension-course.css">

<!-- Top 3 -->
<section id="phuk-top-3-sec">
      <div class="container">
        <div class="top-benefits">
          <div class="benefit-box">
            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Get-Accredited.webp" alt="Get Accredited">
            <p>Get Accredited</p>
          </div>
          <div class="benefit-box">
            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Get-Insured.webp" alt="Get Insured">
            <p>Get Insured</p>
          </div>
          <div class="benefit-box">
            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Get-Recognised.webp" alt="Get Recognised">
            <p>Get Recognised</p>
          </div>
          <div class="benefit-box">
            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Earn-Money.webp" alt="Earn Money">
            <p>Earn Money</p>
          </div>
        </div>
      </div>
</section>
<!-- Top 3 End -->
<div class="msg-therapy">
    <!-- Hero section -->
    <section id="cntc-hero">
      <div class="container">
        <div class="hero-wrapper">
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
                        <ul class="list-unstyled nail-course-includes course-features">
                            <?php
                            if(is_array($nail_technician_includes_group) && count($nail_technician_includes_group) > 1){
                                foreach ($nail_technician_includes_group as $item) {
                                    echo '<li>';
                                    echo '<span><img src="'.$item['nail_technician_includes_image'].'" alt="Recognition Icon"></span>';
                                    echo '<span><b>'.$item['nail_technician_includes_title'].'</b> '.$item['nail_technician_includes_content'].'</span>';
                                    echo '</li>';
                                }
                            }else{
                            ?>
                            <li><img src="https://lead-academy.org/wp-content/uploads/2022/10/recognised-certificate.png" alt="Certificate icon"><span><b>Certificate:</b> CPD UK Accredited PDF Certificate Included</span></li>
                            <li><img src="https://lead-academy.org/wp-content/uploads/0223/12/Recognition.webp" alt="Recognition icon"><span><b>Recognition:</b> Accredited by CPD UK & IPHM</span></li>
                            <li><img src="https://lead-academy.org/wp-content/uploads/0223/12/life-insurance-1.webp" alt="Insurance icon"><span><b>Insurance:</b> Become Eligible To apply for the Insurance</span></li>
                            <li><img src="https://lead-academy.org/wp-content/uploads/0223/12/Duration.webp" alt="Duration icon"><span><b>Duration:</b> 1 Days Practical Training</span></li>
                            <li><img src="https://lead-academy.org/wp-content/uploads/0223/12/Timing.webp" alt="Timing icon"><span><b>Timing:</b> 10 am to 5 pm</span></li>
                            <li><img src="https://lead-academy.org/wp-content/uploads/0223/12/Guidance.webp" alt="Guidance icon"><span><b>Guidance:</b> Continuous Expert Guidance</span></li>
                            <li><img src="https://lead-academy.org/wp-content/uploads/0223/12/Entry-Requirement.webp" alt="Entry Requirement icon"><span><b>Entry Requirement:</b> No academic qualification and no experience are required</span></li>
                            <li><img src="https://lead-academy.org/wp-content/uploads/0223/12/Live-Practice.webp" alt="Live Practice icon"><span><b>Live Practice:</b> Training In London (No model required)</span></li>
                            <li><img src="https://lead-academy.org/wp-content/uploads/0223/12/Payment.webp" alt="Payment icon"><span><b>Payment:</b> Interest-Free Installments</span></li>
                            <li><img src="https://lead-academy.org/wp-content/uploads/0223/12/Nail-Kits.webp" alt="Nail Kits icon"><span><b>Training Needs:</b> Nail kit required; equipment provided during course</span></li>
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
                        <div class="main-img">
                        <img src="https://lead-academy.org/wp-content/uploads/0223/12/1.webp" alt="Hand with modern, colorful nail art">
                        </div>
                        <div class="thumbs">
                        <img src="https://lead-academy.org/wp-content/uploads/0223/12/4.webp" alt="Hands showing intricate, dark acrylic nails">
                        <img src="https://lead-academy.org/wp-content/uploads/0223/12/3.webp" alt="Close up of a woman's face with colorful nails">
                        </div>
                    </div><!-- end hero-right -->
                </div>          <!-- end d-flex -->
            </div>          <!-- end row -->
        </div>
    </section>


    <!-- Service Details Section --> 
    <section id="cntc-service-details">
        <div class="container">
            <div class="row">
                <h2 class="text-center themed-section-title">Become a Professional in Acrylic Nail Extensions</h2>
            </div>
            <div class="row g-4 g-lg-5 align-items-stretch">
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
                        <div class="right-service-item-single box-shadow-none">
                            <img src="https://lead-academy.org/wp-content/uploads/0223/12/6.webp" alt="beautiful-woman-s-nails-with-beautiful-creative-manicure">
                        </div>
                        <div class="right-service-item-single bg-theme-color">
                            <h3><?=$la_nail_technician_who_is_title?></h3>
                            <?=wpautop($la_nail_technician_who_is)?>
                        </div>
                    </div>
                </div>      <!-- end service-details-wrap -->
            </div>          <!-- end row -->
        </div>
    </section>



    <style>
        #screenshot-wrap .single-screenshot-item img {
            width: 100% !important;
            height: auto !important;
        }

        #screenshot-wrap {
            margin: 40px auto 0 !important;
            border-radius: 10px !important;
        }

        #screenshot-wrap .single-screenshot-item a {
            margin: 0px 10px !important;
        }

        div#screenshot h2 {
            text-align: center !important;
            padding: 20px 0px !important;
            border-bottom: 1px solid #e8e8e8 !important;
        }

        @media screen and (max-width: 767px) {
            #screenshot-wrap .single-screenshot-item a {
                margin: 0px 0px !important;
            }

        }

        #linesopen-outer .linesopen {
            width: unset;
            max-width: unset;
        }
    </style>

 <!-- Gallery Section end --> 

    <!-- Daywise Course Section --> 
    <section id="cntc-daywise-course">
        <div class="container">
             <div class="text-center mb-5">
                <p class="course-structure-tag">COURSE STRUCTURE</p>
                <h2 class="cntc-daywise-course-title text-center">Our 1-Day Training Outline</h2>
            </div>
            <div class="row">   
                <div class="cntc-two-cards d-flex justify-content-center">
                    <div class="cntc-single-card">
                        <img src="https://lead-academy.org/wp-content/uploads/0223/12/7.webp" alt="manicures-day1">
                        <div class="cntc-single-card-contents">
                            <h3><?=$nail_technician_course_group[0]['nail_technician_day_title']?></h3>
                            <p class="time-range"><?=$nail_technician_course_group[0]['nail_technician_day_time']?></p>
                            <?=$nail_technician_course_group[0]['nail_technician_day_content']?>
                        </div>
                    </div>
                    <div class="cntc-single-card">
                        <img src="https://lead-academy.org/wp-content/uploads/0223/12/8.webp" alt="pedicure-day1">
                        <div class="cntc-single-card-contents">
                            <h3><?=$nail_technician_course_group[1]['nail_technician_day_title']?></h3>
                            <p class="time-range"><?=$nail_technician_course_group[1]['nail_technician_day_time']?></p>
                            <?=$nail_technician_course_group[1]['nail_technician_day_content']?>
                        </div>
                    </div>
                </div>
                <a href="#" id="enquiry-booking-modal" class="cntc-two-cards-bottom-btn btn-buy-now">Book Now</a>
            </div>
        </div>
    </section>

    <?php
    // Practical Session Video
    if ( (isset($practical_session_video_img_btns) && $practical_session_video_img_btns != 'hide') ) {
        $practical_session_video_url = empty($practical_session_video_url) ? '#' : $practical_session_video_url;
        $practical_session_video_img = empty($practical_session_video_img) ? '/wp-content/uploads/2023/06/practical-session.webp' : $practical_session_video_img;
        ?>
        <div id="phlebotomy-practical-session" class="practical-session-exclude">
            <p>Practical Session</p>
            <a href="<?= esc_url($practical_session_video_url) ?>" class="fancybox">
                <img src="<?= esc_url($practical_session_video_img) ?>" width="557" height="505" alt="practical video session">
            </a>
        </div>
        <?php
    }
   

    add_action('cmb2_admin_init', 'wc_custom_metaboxe');

    function wc_custom_metaboxe()
    {

        $la_session_overview = new_cmb2_box(array(
            'id'            => 'la_session_overview',
            'title'         => 'LA Session Overview',
            'object_types'  => array('product',), // Post type
            'context'       => 'normal',
            'priority'      => 'default',
            'show_names'    => true, // Show field names on the left
        ));
        $la_session_overview->add_field(array(
            'name' => 'LA Session Overview Title',
            'desc' => 'Enter LA Session Overview Title',
            'id'   => 'la_session_overview_title',
            'type' => 'text',
        ));
        $la_session_overview->add_field(array(
            'name' => 'Session Overview Image',
            'desc' => 'Give Session Overview Image',
            'id'   => 'la_session_overview_image',
            'type' => 'file_list',
            'query_args' => array('type' => 'image'),
            'text' => array(
                'add_upload_files_text' => 'Add or Upload Image',
                'remove_image_text' => 'Remove Image',
                'file_text' => 'File',
                'file_download_text' => 'Download',
                'remove_text' => 'Remove',
            ),
        ));
    }

    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery(".fancybox").fancybox({
                // Optional: Add custom options here
                // For example:
                transitionEffect: "fade",
                transitionDuration: 500,
                arrows: true,
                buttons: ["zoom", "share", "close"],
                thumbs: {
                    autoStart: true
                }
            });
        });
    </script>

    <!-- ACCREDITATION Section --> 
    <section id="msg-trd-section">
        <div class="container">
            <div class="msg-train-b">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="msg-cs-train design-for-mobile">
                        <h2 class="text-center">
                            <?=$la_nail_technician_why_train_title?>
                        </h2>
                        <?=$la_nail_technician_why_train_desc?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="cs-accreditation design-for-mobile">
                            <h2> COURSE ACCREDITATION </h2>
                            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Image.webp" alt="">
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
                            <h2 class="text-center">Success Stories</h2>
                            <div class="success-stories">
                                <iframe title="Student Stories" width="100%" height="300" src="https://www.youtube.com/embed/1r1atkQ68yE?si=aqvxy9adZU24xYWx" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 align-self-center">
                        <div class="nail-success-stories">
                        <h2 class="text-center">
                            From Passion to a Rewarding Career
                        </h2>
                        <p>
                            Experience unparalleled hands-on training in our intensive London workshop. Under the guidance of industry 
                            experts, master flawless acrylic application, nail anatomy, and salon-ready skills—all in one day. 
                            Leave equipped, certified, and insurable to confidently launch or elevate your career in the dynamic 
                            beauty industry. Your future as a nail artist begins now.
                        </p>
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
if(is_array($wc_product_faqs) && count($wc_product_faqs) > 1){
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