<?php

defined( 'ABSPATH' ) || exit;

get_header();

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$current_course_id = get_the_ID();	
$course_faqs = get_post_meta( $current_course_id, 'product_faqs', true);

global $product;

// Get variable product title and price by variable id
function la_get_variable_title_price_by_varid( $variation_id ) {
	$variation 		= wc_get_product($variation_id);
	$variable_title = wc_get_formatted_variation( $variation, true, false, false );
	$variable_price = $variation->get_price();
	return [
		'variable_title' => $variable_title,
		'variable_price' => $variable_price,
		'variations' => [$variation->get_regular_price(), $variation->get_sale_price()]
	];
}

// Top info contents
include ASTRA_CHILD_THEME_DIR . '/gcse/top-info-sections.php';
// Banner contents
include ASTRA_CHILD_THEME_DIR . '/gcse/banner-offer-contents.php';
?>
<main id="la-single-main">
	<div class="container">
        <?php
        // Nav contents
        include ASTRA_CHILD_THEME_DIR . '/gcse/nav-contents.php';
        ?>
        <section id="main-content">
            <div id="main-left">
                <div id="single-course-details" class="">
                    <?php 
                        if ( get_the_content() ) {
                            wpautop(the_content());
                        } else {
                            la_get_dummy_course_content();
                        }
                    ?>
                </div>

                <div id="gcse-single-video-section">
                    <h2><b>Our Successful Students</b></h2>
                    <iframe width="100%" height="376" src="https://www.youtube.com/embed/1r1atkQ68yE?si=sJivaQVyndYzsSs2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>  <!-- end main-left -->

            <!-- Sidebar -->
            <aside id="main-right">
                <div class="gcse-right-price-selection-wrap">
                    <h2>Select Options</h2>
                    <?php
                    $current_post_id        = get_the_ID();						
                    $current_course_id      = get_post_meta( $current_post_id, 'la_gcse_course_id', true);    
                    $variable_product_ids   = la_get_variable_ids_by_product_id( $current_course_id );
                    ?>
                    <div class="gcse-right-price-selection-holder gcse-study-options">
                        <h3>Study Options</h3>
                        <div class="gcse-right-price-selection d-flex justify-content-between">
                            <?php
                                $counter = 0;
                                foreach ( array_unique($variable_product_ids['attribute_boards']) as $single_item ) {
                                    $counter++;
                                    $filterable_id = $counter == 1 ? 'foundation' : 'higher';
                                    $active_class = $counter == 1 ? ' active' : '';
                                    ?>
                                    <div class="gcse-right-price-selection-single<?php echo esc_attr($active_class)?>" id="gcse-<?php echo esc_attr($filterable_id)?>-option-action">
                                        <label class="checkbox-container">
                                            <?php echo esc_html($single_item)?>
                                            <input type="radio" name="gcse-study-option">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                <?php
                                if ( $counter > 2 ) {
                                    break;
                                }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="gcse-right-price-selection-holder gcse-course-options">
                        <h3>Course Options</h3>
                        <div class="gcse-right-price-selection">
                            <?php
                            // if ( $product->get_type() == 'variable' ) {
                                $counter = 0;
                                $j = 0;
                                $attribute_boards = $variable_product_ids['attribute_boards'];
                                $attribute_courses = $variable_product_ids['attribute_courses'];
                                $unique_attr_vals = array_unique($attribute_boards);
                                $count_attr_vals = array_count_values($attribute_boards);
                                $attr_loop_vals = [];
                                foreach( $count_attr_vals as $attr_val ){
                                    $counter++;
                                    $attr_loop_vals[] = $attr_val;
                                    if ( $counter > 2 ) {
                                        break;
                                    }
                                }       

                                foreach ( $variable_product_ids['variation_ids'] as $variation_id ) {
                                    $variations = la_get_variable_title_price_by_varid( $variation_id);
                                    $variable_title = $attribute_courses[$j];
                                    $variable_price = $variations['variable_price'];
                                    $variable_both_prices = $variations['variations'];
                                    // $variable_discount_percentage = round( ( ( $variations['variations'][0] -  $variations['variations'][1] ) / $variations['variations'][0] ) * 100 );
                                    if ( $j < $attr_loop_vals[0] ) {
                                        $filterable_slug = 'foundation_tier';
                                        $dynamic_style = '';
                                    } else {
                                        $filterable_slug = 'higher_tier';
                                        $dynamic_style = ' style="display: none"';
                                    }

                                    if (strpos($variable_title, 'Monthly')) {
                                        $monthly_pack_class = ' monthly_pack';
                                    } else {
                                        $monthly_pack_class = '';
                                    }
                                    ?>
                                    <div class="gcse-right-price-selection-single <?php echo esc_attr($filterable_slug.$monthly_pack_class)?>" data-payment-type="monthly"<?php echo $dynamic_style?>>
                                        <label class="checkbox-container">
                                            <?php echo esc_html($variable_title)?>
                                            <input type="radio" name="gcse-course-option" value="<?php echo esc_attr($variations['variations'][0])?>" data-var-id="<?php echo esc_attr($variation_id)?>">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <?php
                                    $j++;
                                }
                            // }
                            ?>
                        </div>
                    </div>
                    <div class="gcse-right-price-selection-holder gcse-payment-options">
                        <h3>Payment Options</h3>
                        <div class="gcse-right-price-selection d-flex justify-content-between">
                            <div class="gcse-right-price-selection-single pay-upfront">
                                <label class="checkbox-container">
                                    Pay Upfront
                                    <input type="radio" name="gcse-payment-option" value="0">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="gcse-right-price-selection-single pay-monthly">
                                <label class="checkbox-container">
                                    Pay Monthly
                                    <input type="radio" name="gcse-payment-option" value="0">
                                    <span class="checkmark"></span>
                                </label>      
                            </div>
                        </div>
                    </div>
                    <div class="gcse-include-fees-checkbox d-none">
                        <label for="gcse-include-fees">
                            <input type="checkbox" value="245" id="gcse-include-fees">
                        </label>                    
                        <label for="gcse-include-fees-monthly">
                            <input type="checkbox" value="21" id="gcse-include-fees-monthly">
                        </label>                    
                    </div>

                    <div class="gcse-total-course-fees">
                        <p class="gcse-course-fees-value">
                            <span>£</span>
                            <span class="gcse-course-dynamic-fee">0</span>
                        </p>
                        <a href="#" id="gcse-enroll-btn" data-course-id="<?php echo esc_attr($current_course_id)?>">Enrol Now</a>
                        <p class="gcse-course-ajax-confirmation-message"></p>
                    </div>
                </div>

                <div id="get-in-touch">
                    <h2><b>Get In Touch Today</b></h2>
                    <a href="#" onclick="LC_API.open_chat_window();return false">Live CHAT WITH US</a>
                    <a href="tel:0300 124 5585">CALL ON - 0300 124 5585</a>
                </div>
            </aside>
        </section>  <!-- end main-content section -->

		<?php
        // FAQ Section
        if(is_array($course_faqs) && count($course_faqs) > 0 ) {
            ?>
            <div id="la-single-faq" class="gcse-single-faq overflow-hidden">
                <h2 class="text-center"><b>FAQs</b></h2>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <?php    
                    $counter = 20;
                    foreach ( $course_faqs as $item ) {
                        $counter++;
                        ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="panelsStayOpen-heading<?php echo esc_attr($counter)?>">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo esc_attr($counter)?>" aria-expanded="<?php echo esc_attr($counter==21?'true':'false')?>" aria-controls="panelsStayOpen-collapse<?php echo esc_attr($counter)?>">
                                    <?php echo $item['faq_title']?>
                                </button>
                            </h3>
                            <div id="panelsStayOpen-collapse<?php echo esc_attr($counter)?>" class="accordion-collapse collapse<?php echo esc_attr($counter==21?' show':'')?>" aria-labelledby="panelsStayOpen-heading<?php echo esc_attr($counter++)?>">
                                <div class="accordion-body">
                                    <?php echo wpautop($item['faq_text'])?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
        }	// end condition of faq contents
		?>
    </div>  <!-- end container -->
</main>

<?php
get_footer();