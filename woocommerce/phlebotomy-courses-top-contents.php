<div id="phlebotomy-course-top-content-wrap">
    <div class="phlebotomy-common">
        <h2 class="booking-options">Booking Options
            <img width="24" src="https://lead-academy.org/wp-content/uploads/2022/12/info.webp" title="info icon" alt="info icon">
</h2>
        <style>
            @media screen and (min-width: 1px) and (max-width: 600px) {
                .single-booking-left {
                    width: 100%;
                }
            }
        </style>
        <div class="single-booking-option overflow-hidden mb-4">
            <div class="single-booking-row float-row d-flex">
                <div class="single-booking-left">
                    <p class="course-structure"> <img width="27" src="https://lead-academy.org/wp-content/uploads/2022/12/classroom-session.webp" title="Classroom session" alt="Classroom session">Course Structure</p>
                    <ul>
                    <?php

                    $current_product_id 		= get_the_ID();
                    // if Phlebotomy Training - London
                    if (get_the_ID() == 366854) {
                        $meta_id = 354284;
                    } else {
                        $meta_id = $current_product_id;
                    }
                    $in_house_section_btns      	= get_post_meta($meta_id, 'in_house_section_btns', true);
/**
 * Changed content for ecg-training         388994
 * Changed content for ecg-training         413703
 * vaccination-and-immunisation-training    387587
 * vitamin-b12-injection-course             389230
 * basic-life-support-training              389109
 * cannulation-training                     371100
 * cannulation-training-birmingham          380325
 * cannulation-training-swindon             436829
 */

                        if (in_array(get_the_ID(), array(389230, 413716))) {
                            ?>
                            <li>You will have practical sessions in a physical classroom setting.</li>
                            <li>It will allow you for real-time interaction, questions and answers, and hands-on practice.</li>
                            <li>Gain real-life experience and support from industry-experienced tutors.</li>
                            <?php
                        } elseif(in_array(get_the_id(), array(371100, 380325, 436829))){
                            ?>
                            <li>You will study theoretical and practical sessions in a physical classroom setting.</li>
                            <li>It will allow you for real-time interaction, questions and answers, and hands-on practice.</li>
                            <li>Gain confidence by practicing on silicone arms under the supervision of professionals.</li>
                            <?php
                        } elseif (in_array(get_the_ID(), array(388994, 413703, 387587, 389109, 413724))) {
                            ?>
                            <li>You will study theoretical and practical sessions in a physical classroom setting.</li>
                            <li>It will allow you for real-time interaction, questions and answers, and hands-on practice.</li>
                            <li>Gain real-life experience and support from industry-experienced tutors.</li>
                            <?php
                        } elseif (in_array(get_the_ID(), array(413582, 414748, 414746, 414685))) {
                            ?>
                            <li>You will study practical sessions in a physical classroom setting.</li>
                            <li>Gain real-life experience and support from industry-experienced tutors.</li>
                            <li>Get a chance to interact with fellow professionals and get certified.</li>
                            <?php
                        } elseif (in_array(get_the_ID(), array(368595, 382016, 386971, 410644, 420510, 443472 , 443706))) {
                            ?>
                            <li>You will study practical sessions in a physical classroom setting.</li>
                            <li>Gain real-life experience and support from industry-experienced tutors.</li>
                            <li>Get a chance to interact with fellow professionals and get certified.</li>
                            <?php
                        }elseif (in_array(get_the_ID(), array(448192,448192,441734,441758,458975,453344))) {
                            ?>
                            <li>Gain real-life experience and support from industry-experienced tutors.</li>
                            <li>Get a chance to interact with fellow professionals and get certified.</li>
                            <?php
                        }else {
                            ?>
                            <li>You will study theoretical part online, and practical sessions in a physical classroom setting.</li>
                            <li>Gain real-life experience and support from industry-experienced tutors.</li>
                            <li>Get a chance to interact with fellow professionals and get certified.</li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="single-booking-right ps-4">
                    <div style="text-align: right;color: #AF1F47;font-size: 16px;font-weight: 700;">
                        <img src="https://lead-academy.org/wp-content/uploads/2022/12/discount.webp" alt="discount" title="discount" width="20">
                        <span><?=$discount_percentage?>% Off</span>
                    </div>
                    <div class="float-row la_phleb_course_price" style="margin: 13px 0 10px;">
                        <span class="float-left" style="font-size: 20px; font-weight: 700;">£<?php echo $la_phleb_course_sell_price?></span>
                        <span class="float-right text-right" style="font-size: 18px;"><del>£<?php echo $la_phleb_course_regular_price?></del></span>
                    </div>
                    <button class="single-booking-btn" id="see-dates-btn">SEE DATES</button>
                </div>
            </div>
            <div id="show-classroom-schedule-wrap" style="display: none;">
                <div class="d-flex justify-content-center align-items-center gap-3 py-4">
                    <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <span>Loading...</span>
                </div>
            </div>
        </div>

        <?php
        // Hide the section for the Advanced / Competency Phlebotomy Training London
         $excluded_product_ids = array('368595', '387587', '413582','389230' , '413716', '394220' , '409404' , '391079' , '391063' , '414748' , '414746' , '421612' , '414685' , '435450', '370863' , '439294' , '440908' , '441734' , '441758' , '443472' , '443706' );

        if (!in_array($current_product_id, $excluded_product_ids)){
            if($in_house_section_btns != 'hide') {
            ?>
            <div class="single-booking-option phlebotomy-in-house-single-item overflow-hidden" style="margin-bottom: 0">
                <div class="single-booking-row float-row d-flex">
                    <div class="single-booking-left">
                        <p class="in-house"><img src="https://lead-academy.org/wp-content/uploads/2022/12/in-house.webp" title="Classroom session" alt="Classroom session" width="27">In-House</p>
                        <ul>
                            <li>Corporate Companies that wish to train their entire workforce</li>
                            <li>Learn the most in-demand skills</li>
                            <li>We provide tailored courses based on your requirements to train your employees</li>
                        </ul>
                    </div>
                    <div class="single-booking-right">
                        <button id="enquire-now-btn" class="single-booking-btn">ENQUIRE NOW</button>
                    </div>

                    <!-- Trigger/Open The Modal -->
                    <style>
                        .postid-435450 .single-booking-option.phlebotomy-in-house-single-item.overflow-hidden {
                                display: none;
                        }
                        .gift_course_button {
                            display: none !important;
                        }
                        .gform_wrapper.gravity-theme .gform_footer, .gform_wrapper.gravity-theme .gform_page_footer{
                            padding: 0px !important;
                        }
                        /* The Modal (background) */
                        .modal {
                        display: none; /* Hidden by default */
                        position: fixed; /* Stay in place */
                        z-index: 999999999999; /* Sit on top */
                        padding-top: 100px; /* Location of the box */
                        padding-bottom: 20px; /* Location of the box */
                        left: 0;
                        top: 0;
                        width: 100%; /* Full width */
                        max-width: 100%;
                        height: 100%; /* Full height */
                        overflow: auto; /* Enable scroll if needed */
                        background-color: rgb(0,0,0); /* Fallback color */
                        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                        }

                        /* Modal Content */
                        .modal-content {
                        background-color: #f8f8f8;
                        margin: auto;
                        padding: 5px 20px 13px 20px;								  
                        border: 1px solid #888;
                        width: 420px;
                        max-width: 80%;
                        }

                        /* The Close Button */
                        .close {
                        color: #aaaaaa;
                        float: right;
                        font-size: 28px;
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
                    </style>

                    <!-- The Modal -->
                    <div id="enquiryModal" class="modal">
                        <div class="modal-content">
                            <span class="close">×</span>
                            <p><?php echo do_shortcode( '[contact-form-7 id="b955bde" title="Phlebotomy Courses Enquiry Form"]' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
        }
        ?>
    </div>
</div>