<div id="course-fee-info">
    <div id="course-fee">
        <p class="course-p-heading">Course Fee</p>
        <div id="course-price">
            <div class="float-row">
                <div class="float-left text-left">
                    <p class="course-p1-price">£<?php echo esc_html($la_phleb_course_sell_price); ?><span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></p>
                </div>
                <div class="float-right text-right">
                    <p class="course-p2-price">£<?php echo esc_html($la_phleb_course_regular_price); ?></p>
                </div>
            </div>
            <p class="course-p3-price"><img src="/wp-content/uploads/2022/12/discount-white.webp" title="discount white" alt="discount white"  style="width: 22px; height: 100%;"> <?php echo esc_html($discount_percentage); ?>% OFF</p>
            <p class="course-p4-price"><img src="/wp-content/uploads/0223/12/Accredited-Certificate.svg" title="Accredited Certificate" alt="Accredited Certificate" style="width: 25px">Accredited Certificate Included</p>
            <p class="la-show-black-friday-countdown-reminder"></p>
                        <script>
                jQuery(document).ready(function () {
                    getBlackFridayRemainingCountdown();
                });
            </script>
            <button id="enquiry-booking-modal" class="red-button">ENROL NOW</button>
            <!-- The Booking Modal -->
            <div id="enquiryBookingModal" class="modal phlebotomy-course-top-content-modal">
                <div class="modal-content">
                    <span class="close">×</span>
                    <?php 
                    include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-courses-top-contents.php';
                    ?>
                </div>
            </div>

        </div>
    </div>

    <div id="course-fee-others">
        <?php 
        if ( !empty($course_facilities_meta_group) && is_array($course_facilities_meta_group) ): 
        ?>
            <div class="la-gcse-bottom-post-content cpd-course-all-icons-content">
                <?php foreach ($course_facilities_meta_group as $facility): ?>
                    <?php 
                    $icon_url = !empty($facility['course_facilities_image']) ? array_values($facility['course_facilities_image'])[0] : '';
                    $facility_text = isset($facility['course_facilities_text_b']) ? $facility['course_facilities_text_b'] : '';
                    ?>
                    <div class="la-gcse-bottom-single d-flex flex-column text-center">
                        <div class="la-cpd-single-icon-holder">
                            <?php if ($icon_url): ?>
                                <img decoding="async" width="30" height="30" src="<?= esc_url($icon_url) ?>" alt="<?= esc_attr($facility_text) ?>">
                            <?php endif; ?>
                        </div>
                        <div class="la-cpd-single-icon-contents">
                            <p style="font-size:16px; font-weight: normal; "><?= esc_html($facility_text) ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="float-row">
                <div class="float-left"><div><img src="/wp-content/uploads/2022/12/7-hours.webp" alt="Accredited by"></div>Accredited by <br /> The CPD Certification Service</div>
                <div class="float-right"><div><img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="Practical Training Session"></div>Practical Training Session <br /> By Experienced Phlebotomists</div>
            </div>
            <div class="float-row">
                <div class="float-left"><div><img src="/wp-content/uploads/2022/12/7-hours.webp" alt="Recognised Certification"></div>Recognised Certification <br /> by NHS</div>
                <div class="float-right"><div><img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="7 Hours Practical"></div>7 Hours practical training</div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
// Display Learner Achievement, Practical Session, Success Story sections
if (isset($current_product_id)) {
    // Learners Achievement Image
    if ( (isset($learner_achievement_btns) && $learner_achievement_btns != 'hide') ) {
        $la_learner_achievements_image = empty($la_learner_achievements_image) ? '/wp-content/uploads/2023/05/plebotomy-practical-session-27-may.webp' : $la_learner_achievements_image;
        ?>
        <div id="phlebotomy-practical-session">
            <p>Learners Achievement</p>
            <a href="<?php echo esc_url($la_learner_achievements_image); ?>" class="fancybox">
                <img src="<?php echo esc_url($la_learner_achievements_image); ?>" width="357" height="268" alt="<?php echo esc_attr(get_the_title($current_product_id) . ' Learners Achievement'); ?>">
            </a>
        </div>
        <?php
    }
    // Practical Session Video
    if ( (isset($practical_session_video_img_btns) && $practical_session_video_img_btns != 'hide') ) {
        $practical_session_video_url = empty($practical_session_video_url) ? '#' : $practical_session_video_url;
        $practical_session_video_img = empty($practical_session_video_img) ? '/wp-content/uploads/2023/06/practical-session.webp' : $practical_session_video_img;
        ?>
        <div id="phlebotomy-practical-session" class="practical-session-exclude">
            <p>Practical Session</p>
            <a href="<?= esc_url($practical_session_video_url) ?>" class="fancybox">
                <img src="<?= esc_url($practical_session_video_img) ?>" width="357" height="205" alt="practical video session">
            </a>
        </div>
        <?php
    }
    // Success Story Video
    if ( (isset($Success_Story_video_img_btns) && $Success_Story_video_img_btns != 'hide') ) {
        $success_story_video_url = empty($success_story_video_url) ? '#' : $success_story_video_url;
        $success_story_video_img = empty($success_story_video_img) ? 'https://lead-academy.org/wp-content/uploads/2024/11/Student-Testimonial.webp' : $success_story_video_img;
        ?>
        <div id="phlebotomy-practical-session">
            <p>Success Story</p>
            <a href="<?= esc_url($success_story_video_url) ?>" class="fancybox">
                <img src="<?= esc_url($success_story_video_img) ?>" width="357" height="205" alt="success story">
            </a>
        </div>
        <?php
    }
}
?>

<div id="get-in-touch">
    <p>Get In Touch Today</p>
    <a href="#" onclick="LC_API.open_chat_window();return false;">Live CHAT WITH US</a>
    <a href="tel:03001245585">CALL ON - 0300 124 5585</a>
</div>
