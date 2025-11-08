<div id="course-fee-info">
    <?php
    // Display coupon notice if active
    if (function_exists('la_display_coupon_notice')) {
        echo la_display_coupon_notice();
    }
    ?>
    <div id="course-fee">
        <p class="la-course-fee-label">Course Fee</p>
        <?php
        $course_regular_price       = '';
        $course_sell_price          = '';
        $course_discount_price      = '';
        $variable_first_id          = '';
        $la_four_inst_price         = '';
        $course_carting_url         = '';
        if ( $product->get_type() == 'variable' ) {
            $variable_producs = la_get_variable_ids_by_product_id($current_product_id);
            $variable_first_id = $variable_producs['variation_ids'][0] ?? null;

            if ($variable_first_id) {
                $variations = la_get_variable_title_price_by_varid($variable_first_id);
                $variable_both_prices = is_array($variations['variations']) ? $variations['variations'] : [];

                if (count($variable_both_prices) >= 2) {
                    $course_regular_price = floatval($variable_both_prices[0]);
                    $course_sell_price = floatval($variable_both_prices[1]);

                    // Apply coupon discount if active for eligible product
                    $original_sell_price = $course_sell_price;
                    if (function_exists('la_has_active_coupon') && la_has_active_coupon() && WC()->session) {
                        $coupon_data = WC()->session->get('url_coupon_data');
                        if ($coupon_data) {
                            $current_product = wc_get_product($current_product_id);
                            if (function_exists('la_is_product_eligible_for_coupon') && la_is_product_eligible_for_coupon($current_product, $coupon_data)) {
                                $course_sell_price = la_calculate_discounted_price($course_sell_price, $coupon_data);
                                // Ensure regular shows original sell price if needed
                                if ($course_regular_price <= $course_sell_price) {
                                    $course_regular_price = $original_sell_price;
                                }
                            }
                        }
                    }

                    $course_discount_price = $course_regular_price > 0 ? round(
                        (($course_regular_price - $course_sell_price) / $course_regular_price) * 100
                    ) : 0;

                    $la_four_inst_price = round($course_sell_price / 4, 2);
                    $course_carting_url = '/cart?add-to-cart=' . $variable_first_id;
                } else {
                    // Fallback in case variations are not as expected
                    $course_regular_price = 0;
                    $course_sell_price = 0;
                    $course_discount_price = 0;
                    $la_four_inst_price = 0;
                    $course_carting_url = '#';
                }
            }
        }
        // Load Clearpay Icon
        // include ASTRA_CHILD_THEME_DIR . '/woocommerce/clearpay-icon.php';
        ?>
        <div id="course-price">
            <div class="float-row">
                <div class="float-left text-left">
                    <?php
                    if ($current_product_id == 445843) {
                        echo '<p class="course-p1-price">£' . $course_sell_price . '+VAT <span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></p>';
                    } elseif ($current_product_id == 418531) {
                        echo '<span style="font-weight: normal;font-size: 14px;padding-left: 3px;position: relative;top: -15px;">(Excl. VAT)</span>';
                    } else {
                        echo '<p class="course-p1-price">£' . $course_sell_price . '<span style="font-weight: normal;font-size: 14px;padding-left: 3px;">(Excl. VAT)</span></p>';
                    }
                    ?>
                </div>
                <div class="float-right text-right">
                    <p class="course-p2-price">£<?php echo $course_regular_price?></p>
                </div> 
            </div>
                <p class="course-p3-price"><img src="/wp-content/uploads/2022/12/discount-white.webp" alt="discount white" style="width: 22px"> <?=$course_discount_price?>% OFF</p>
            <?php
            if (
            // Exceptional Course Ids from BSL Course Cat
            ( '364465' == $current_product_id ) 			// British Sign Language Level 1
            || ( '364491' == $current_product_id ) 			// British Sign Language Level 2
            ) {
                echo '<p class="mt-3 la-course-fee-first-line">👉  Live Zoom Class</p>';
                echo '<p class="la-course-fee-first-line">👉  Official Exam Included</p>';
            } elseif ( '383736' == $current_product_id || '365519' == $current_product_id ) {
                echo '
                <p class="la-bsl-max-learners"><i class="fa fa-users"></i> Maximum 15 Learners</p>
                <!--p class="la-bsl-max-learners"><i class="fa fa-video-camera"></i> Live Zoom Class</p-->
                <p class="la-bsl-max-learners"><i class="fa fa-id-badge"></i> Face to Face Training</p>';
            } else if(368889 == $current_product_id){
                echo '<p class="mt-3 la-course-fee-first-line">👉  Ofqual Regulated Certificate Included</p>';
            } else if(396278 == $current_product_id){
                echo '<p class="mt-3 la-course-fee-first-line">👉  TQUK Accredited Certificate Included </p>';
            } else {
                if ( $current_product_id != 418531 ) { // Exclude CACHE Award in RQF Level 3 Health and Social Care
                    echo '<p class="course-p4-price>👉  CPD UK Accredited PDF Certificate Included</h5>';
                }
            }

            if ( '383736' != $current_product_id && '365519' != $current_product_id ) {
                if($current_product_id == 364465){
                    echo '<p class="la-course-fee-second-line"><img src="/wp-content/uploads/2023/09/instalment-payment-icon.webp" width="50" height="41" alt="6 interest-free payments"> 6 interest-free payments of '.get_woocommerce_currency_symbol().'75</p>';
                }else if ($current_product_id == 364491){
                    echo '<p class="la-course-fee-second-line"><img src="/wp-content/uploads/2023/09/instalment-payment-icon.webp" width="50" height="41" alt="6 interest-free payments"> 6 interest-free payments of '.get_woocommerce_currency_symbol().'100</p>';
                }else{
                    echo '<p class="la-course-fee-second-line"><img src="/wp-content/uploads/2023/09/instalment-payment-icon.webp" width="50" height="41" alt="4 interest-free payments"> 4 interest-free payments of '.get_woocommerce_currency_symbol().$la_four_inst_price.'</p>';
                }
                ?>
                <p class="la-show-black-friday-countdown-reminder"></p>
                <script>
                jQuery(document).ready(function () {
                    getBlackFridayRemainingCountdown();
                });
                </script>
                <?php
            }


            if ( '383736' == $current_product_id || '365519' == $current_product_id ) {
                ?>
                <a href="#" id="bsl-enquiry-btn">Enquiry</a>
                <!-- Popup content -->
                <div id="bsl-inquery-modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>

                        <div class="gcse-inquery-modal-contents">
                            <?php echo do_shortcode( '[contact-form-7 id="b955bde" title="Phlebotomy Courses Enquiry Form"]' ); ?>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <button type="button"
                        data-variation-id="<?= $variable_first_id ?>"
                        data-quantity="1"
                        class="btn custom-add-to-cart" >
                    <?php echo  __('BOOK NOW'); ?>
                </button>
                <?php
            }
            ?>
        </div>
    </div>
    <div id="course-fee-others">
        <?php
        $course_facilities_first_title = get_post_meta( $current_product_id, 'course_facilities_first_title', true ) ? get_post_meta( $current_product_id, 'course_facilities_first_title', true ) : 'Duration: * Hours';
        $course_facilities_second_title = get_post_meta( $current_product_id, 'course_facilities_second_title', true ) ? get_post_meta( $current_product_id, 'course_facilities_second_title', true ) : 'Instant Access';

        if ( $current_product_id == 368595 ) {
            // Empty for Advanced / Competency Phlebotomy Training London
        } else {
            ?>
            <div class="float-row">
                <div class="float-left">
                    <div>
                        <img src="/wp-content/uploads/2022/12/7-hours.webp" alt="14 Days Money Back Guarantee">
                    </div>
                    <?php echo convertMinutesToHours($course_facilities_first_title)?>
                </div>
                <div class="float-right">
                    <div>
                        <img src="/wp-content/uploads/2022/12/face-to-face.webp" alt="Instant Access">
                    </div>
                    <?php echo $course_facilities_second_title?>
                </div>
            </div>
            <?php
        }
    ?>
    </div>
</div>
