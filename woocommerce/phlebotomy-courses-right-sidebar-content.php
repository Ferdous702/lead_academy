<div id="course-fee-info">
    <?php
    // Display coupon notice if active
    if (function_exists('la_display_coupon_notice')) {
        echo la_display_coupon_notice();
    }
    ?>
    <div id="course-fee">
        <p class="course-p-heading">Course Fee</p>
        <div id="course-price">
            <div class="float-row">
                <div class="float-left text-left">
                    <p class="course-p1-price">£<?php echo $la_phleb_course_sell_price?><span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></p>
                </div>
                <div class="float-right text-right">
                    <p class="course-p2-price">£<?php echo $la_phleb_course_regular_price?></p>
                </div>
            </div>
            <p class="course-p3-price"><img src="/wp-content/uploads/2022/12/discount-white.webp" alt="discount white" style="width: 22px"> <?=$discount_percentage?>% OFF</p>
            <p class="course-p4-price"><img src="/wp-content/uploads/0223/12/Accredited-Certificate.svg" alt="Accredited Certificate" style="width: 25px">Accredited Certificate Included</p>
            <p class="la-show-black-friday-countdown-reminder"></p>
            <script>
                jQuery(document).ready(function () {
                    getBlackFridayRemainingCountdown();
                });
            </script>
            <button id="enquiry-booking-modal" class="red-button">ENROL NOW</button>

            <!-- Trigger/Open The Modal -->
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

                @media screen and (max-width: 768px) {
                    div#enquiryBookingModal {
                        padding-bottom: 0;
                    }

                    /* Modal Content */
                    #enquiryBookingModal .modal-content {
                        padding: 5px 0 0 0;
                        max-width: 100% !important;
                        max-height: 100% !important;
                        ;

                    }
                }


                .postid-446501 .phlebotomy-in-house-single-item {
                    display: none;
                }

                .postid-446501 #screenshot-wrap {
                    display: none;
                }

                .postid-446674 .phlebotomy-in-house-single-item {
                    display: none;
                }

                .postid-446674 #screenshot-wrap {
                    display: none;
                }

                .postid-447327 .phlebotomy-in-house-single-item {
                    display: none;
                }

                .postid-447327 #screenshot-wrap {
                    display: none;
                }

                .postid-448877 .phlebotomy-in-house-single-item {
                    display: none;
                }

                .postid-448877 #screenshot-wrap {
                    display: none;
                }
            </style>
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

            <script>
                // Get the booking modal
                let enqueryBookingModal = document.getElementById("enquiryBookingModal");

                // Get the button that opens the modal
                let enqueryRedBtn = document.getElementById("enquiry-booking-modal");

                // Get the <span> element that closes the modal
                let enqueryCloseEl = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                enqueryRedBtn.onclick = function() {
                    enqueryBookingModal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                enqueryCloseEl.onclick = function() {
                    enqueryBookingModal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == enqueryBookingModal) {
                        enqueryBookingModal.style.display = "none";
                    }
                }
            </script>
        </div>
    </div>
    <?php if ($current_product_id != 368595): ?>
        <div id="course-fee-others">
            <?php if (is_array($course_facilities_meta_group) && count($course_facilities_meta_group) > 1): ?>
                <div class="la-gcse-bottom-post-content cpd-course-all-icons-content">
                    <?php foreach ($course_facilities_meta_group as $facilities): ?>
                        <?php
                        foreach ($facilities['course_facilities_image'] as $img) {
                            $icon = $img;
                        }
                        ?>
                        <div class="la-gcse-bottom-single d-flex flex-column text-center">
                            <div class="la-cpd-single-icon-holder">
                                <img decoding="async" width="30" height="30" src="<?= $icon ?>" alt="<?= $facilities['course_facilities_text_b'] ?>">
                            </div>
                            <div class="la-cpd-single-icon-contents">
                                <p style="font-size:16px; font-weight: normal; "><?= $facilities['course_facilities_text_b'] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <?php
                if (
                    $current_product_id == 371100 ||        // IV Cannulation Training London – CPD Accredited
                    $current_product_id == 380325 ||        // IV Cannulation Training – Birmingham
                    $current_product_id == 436829           // IV Cannulation Training – Swindon
                ):
                ?>
                    <div class="float-row">
                        <div class="float-left">
                            <div>
                                <img src="/wp-content/uploads/2022/12/7-hours.webp" alt="Accredited by">
                            </div>
                            Accredited by <br />
                            The CPD Certification Service
                        </div>
                        <div class="float-right">
                            <div>
                                <img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="Practical Training Session">
                            </div>
                            Practical Training Session <br />
                            By Experienced Phlebotomists
                        </div>
                    </div>

                    <div class="float-row">
                        <div class="float-left">
                            <div>
                                <img src="/wp-content/uploads/2022/12/7-hours.webp" alt="Recognised Certification">
                            </div>
                            Recognised Certification <br />
                            by NHS
                        </div>
                        <div class="float-right">
                            <div>
                                <img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="7 Hours Practical">
                            </div>
                            training to training
                        </div>
                    </div>
                <?php else : ?>
                    <div class="float-row">
                        <div class="float-left">
                            <div>
                                <img src="/wp-content/uploads/2022/12/face-to-face.webp"
                                    alt="14 Days Money Back Guarantee">
                            </div>
                            14 Days Money Back Guarantee
                        </div>
                        <div class="float-right">
                            <?php
                            if ($current_product_id == 391079) {
                                echo '<div>
                                    <img src="/wp-content/uploads/2019/11/Accredited-by.png" alt="Accredited By CPD UK">
                                </div>Accredited By CPD UK';
                            } else {
                            ?>
                                <div>
                                    <img src="/wp-content/uploads/2022/12/instalment.webp" alt="High Pass Rate">
                                </div>
                                High Pass Rate
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="float-row">
                        <div class="float-left">
                            <div>
                                <img src="/wp-content/uploads/2022/12/7-hours.webp"
                                    alt="8 Hours Practical + 3 Hours Theoretical Study">
                            </div>
                            <?php
                            $la_duration = get_post_meta(get_the_ID(), 'la_duration_hours', true);
                            $product_id = get_the_ID();
                            if ($la_duration) {
                                echo $la_duration;
                            } else {
                                if ($product_id == 382016 || $product_id == 386971) {
                                    echo '3 Days Practical Training';
                                } elseif ($product_id == 389230) {
                                    echo '7.5 Hours Practical';
                                } elseif ($product_id == 447327 || $product_id == 446674 || $product_id == 446501) {
                                    echo '7 Hours Practical';
                                } elseif ($product_id == 451550) {
                                    echo '8 Hours Practical';
                                } else {
                                    echo '7.5 Hours Practical + 3 Hours Theoretical Study';
                                }
                            }
                            ?>
                        </div>
                        <div class="float-right">
                            <div>
                                <img src="/wp-content/uploads/2022/12/14-days.webp"
                                    alt="Certificate Upon Completion">
                            </div>
                            Certificate Upon Completion
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>