<div id="single-course-details" class="">
    <?php
    // Display main product content, or dummy content if empty
    if (get_the_content()) {
        the_content();
    } else {
        // This function should be defined in your functions.php
        if (function_exists('la_get_dummy_course_content')) {
            la_get_dummy_course_content();
        }
    }
    ?>
</div>
        <style>
            @media (max-width: 768px) {
                    div#enquiryBookingModal {
                        padding-bottom: 0;
                    }

                    /* Modal Content */
                    #enquiryBookingModal .modal-content {
                        padding: 5px 0 0 0;
                        max-width: 100% !important;
                        max-height: 100% !important;

                    }

                    #subscribe-us, #get-in-touch, #phlebotomy-practical-session {
                        display: none;
                    }

                    #mobile-phlebotomy-practical-session {
                        display: block !important;
                        margin: 30px auto;
                        text-align: center;
                        border: 2px solid #DCDCDC;
                        border-radius: 5px;
                        padding: 20px;
                        text-align: center;
                        background-color: #fff;
                    }

                    #mobile-phlebotomy-practical-session p {
                        margin-bottom: 10px !important;
                        color: #1C1D1F !important;
                        font-size: 22px !important;
                        font-weight: 600 !important;
                        line-height: 1.2 !important;
                    }

                    #mobile-phlebotomy-practical-session .fancybox img {
                        border: 5px solid #fff;
                        border-radius: 3px;
                        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
                        margin: 5px;
                    }
                }

            #mobile-phlebotomy-practical-session {
                display: none;
            }
        </style>
<?php
// Display Learner Achievement, Practical Session, Success Story sections
if (isset($current_product_id)) {
    // Practical Session Video
    if ( (isset($practical_session_video_img_btns) && $practical_session_video_img_btns != 'hide') ) {
        $practical_session_video_url = empty($practical_session_video_url) ? '#' : $practical_session_video_url;
        $practical_session_video_img = empty($practical_session_video_img) ? '/wp-content/uploads/2023/06/practical-session.webp' : $practical_session_video_img;
        ?>
        <div id="mobile-phlebotomy-practical-session">
            <p><b>Practical Session</b></p>
            <a href="<?= esc_url($practical_session_video_url) ?>" class="fancybox">
                <img src="<?= esc_url($practical_session_video_img) ?>" width="357" height="205" alt="practical video session">
            </a>
        </div>
        <?php
    }
}
?>