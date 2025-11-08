<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}



$current_product_id 		= get_the_ID();
// if Phlebotomy Training - London
if (get_the_ID() == 366854) {
	$meta_id = 354284;
} else {
	$meta_id = $current_product_id;
}
$watch_video_btn_title      	= get_post_meta($meta_id, 'watch_video_btn', true);
$watch_video_url 				= get_post_meta($meta_id, 'watch_video_url', true);
$la_learner_achievements_image	= get_post_meta($meta_id, 'la_learner_achievements_image', true);
$practical_session_video_url	= get_post_meta($meta_id, 'practical_session_video_url', true);
$practical_session_video_img	= get_post_meta($meta_id, 'practical_session_video_img', true);
$success_story_video_url		= get_post_meta($meta_id, 'success_story_video_url', true);
$success_story_video_img		= get_post_meta($meta_id, 'success_story_video_img', true);
$watch_success_video_url		= get_post_meta($meta_id, 'watch_success_video_url', true);
$course_info_icon_1 			= get_post_meta($meta_id, 'course_info_icon_1', true);
$course_info_text_1 			= get_post_meta($meta_id, 'course_info_text_1', true);
$course_info_icon_2 			= get_post_meta($meta_id, 'course_info_icon_2', true);
$course_info_text_2 			= get_post_meta($meta_id, 'course_info_text_2', true);
$course_info_icon_3 			= get_post_meta($meta_id, 'course_info_icon_3', true);
$course_info_text_3 			= get_post_meta($meta_id, 'course_info_text_3', true);
$course_info_icon_4 			= get_post_meta($meta_id, 'course_info_icon_4', true);
$course_info_text_4 			= get_post_meta($meta_id, 'course_info_text_4', true);
$course_info_icon_5 			= get_post_meta($meta_id, 'course_info_icon_5', true);
$course_info_text_5 			= get_post_meta($meta_id, 'course_info_text_5', true);
$course_info_icon_6 			= get_post_meta($meta_id, 'course_info_icon_6', true);
$course_info_text_6 			= get_post_meta($meta_id, 'course_info_text_6', true);
$wc_product_faqs 				= get_post_meta($current_product_id, 'product_faqs', true);
$product_curriculums			= get_post_meta($meta_id, 'product_curriculums', true);
$wc_product_accreditation		= get_post_meta($meta_id, 'wc_product_accreditation', true);
$wc_product_certification		= get_post_meta($meta_id, 'wc_product_certification', true);
$exm_board_group				= get_post_meta($meta_id, 'exm_board_group', true);
$board_sec_title				= get_post_meta($meta_id, 'board_sec_title', true);
$show_board_sec_btns			= get_post_meta($meta_id, 'board_sec_btns', true);
$course_regular_price 			= get_post_meta($meta_id, '_regular_price', true);
$course_sale_price 				= get_post_meta($meta_id, '_sale_price', true);
$course_reviews 				= get_post_meta($current_product_id, 'la_course_reviews', true);
$image_gallery_btn 				= get_post_meta($meta_id, 'image_gallery_btns', true);
$learner_achievement_btns 		= get_post_meta($meta_id, 'learner_achievement_btns', true);
$practical_session_video_img_btns= get_post_meta($meta_id, 'practical_session_video_img_btns', true);
$Success_Story_video_img_btns 		= get_post_meta($meta_id, 'Success_Story_video_img_btns', true);

$la_phleb_course_regular_price	= get_post_meta($meta_id, 'la_phleb_course_regular_price', true);
$la_phleb_course_sell_price		= get_post_meta($meta_id, 'la_phleb_course_sell_price', true);

// Apply coupon discount to phlebotomy course prices if coupon is active in the URL
if (isset($_GET['coupon']) && function_exists('la_has_active_coupon') && la_has_active_coupon() && WC()->session) {
    $coupon_data = WC()->session->get('url_coupon_data');
    if ($coupon_data && $la_phleb_course_sell_price) {
        // Check if current product is eligible for coupon
        $current_product = wc_get_product($current_product_id);
        if (function_exists('la_is_product_eligible_for_coupon') && la_is_product_eligible_for_coupon($current_product, $coupon_data)) {
            $original_sell_price = floatval($la_phleb_course_sell_price);
            $discounted_price = la_calculate_discounted_price($original_sell_price, $coupon_data);
            $la_phleb_course_sell_price = number_format($discounted_price, 2);
            
            // Update regular price to show original price
            if (!$la_phleb_course_regular_price || floatval($la_phleb_course_regular_price) <= $discounted_price) {
                $la_phleb_course_regular_price = number_format($original_sell_price, 2);
            }
            
            // Debug output
            error_log('Price updated for product ' . $current_product_id . ': ' . $original_sell_price . ' -> ' . $discounted_price);
        }
    }
}

$la_phleb_course_location_root  = get_post_meta($meta_id, 'la_phleb_course_location_root', true);
$la_phleb_course_address_root   = get_post_meta($meta_id, 'la_phleb_course_address_root', true);
$la_phleb_course_time_root      = get_post_meta($meta_id, 'la_phleb_course_time_root', true);

$la_session_overview_title		= get_post_meta($meta_id, 'la_session_overview_title', true);
$la_session_overview_image		= get_post_meta($meta_id, 'la_session_overview_image', true);
$related_product_var			= get_post_meta($meta_id, 'la_related_product_group', true);

// Initialize discount percentage to 0
$discount_percentage = 0; 
// Safely calculate discount percentage
if (is_numeric($la_phleb_course_regular_price) && is_numeric($la_phleb_course_sell_price) && $la_phleb_course_regular_price > 0) {
    $discount_percentage = number_format((($la_phleb_course_regular_price - $la_phleb_course_sell_price) / $la_phleb_course_regular_price * 100), 0);
}

$course_facilities_meta_group	= get_post_meta($meta_id, 'course_facilities_meta_group', true);
$la_phleb_course_meta_group		= get_post_meta($meta_id, 'la_phleb_course_meta_group', true);

/* Start for sort date array Ascending */
// Ensure $la_phleb_course_meta_group is a non-empty array before using it
if (is_array($la_phleb_course_meta_group) && !empty($la_phleb_course_meta_group)) {
    if (isset($la_phleb_course_meta_group[0]['adv_course_date']) && $la_phleb_course_meta_group[0]['adv_course_date']) {
        usort($la_phleb_course_meta_group, "sortByDateAdv");
    } else {
        usort($la_phleb_course_meta_group, "sortByDateSingle");
    }
}
/* End for sort date array Ascending */

// Get variable product title and price by variable id
function la_get_variable_title_price_by_varid($variation_id)
{
	$variation 		= wc_get_product($variation_id);
	$variable_title = wc_get_formatted_variation($variation, true, false, false);
	$variable_price = $variation->get_price();
	$variable_stock = $variation->get_stock_status();
	return [
		'variable_title' => $variable_title,
		'variable_price' => $variable_price,
		'variations'	 => [$variation->get_regular_price(), $variation->get_sale_price()],
		'variable_stock' => $variable_stock
	];
}

// Get Course Cat Id array
$course_id_array = la_get_course_cat_id_by_course_id($current_product_id);

// Check GCSE course
function la_is_gcse_courses($current_product_id)
{
	$course_cat_array = la_get_course_cat_id_by_course_id($current_product_id);
	if (in_array('359', $course_cat_array)) {
		return true;
	}
}
// Check for specific product IDs and include corresponding templates
if ($current_product_id == 409404) {
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/acrylic-nail-extension-course.php';
} elseif ($current_product_id == 394220) {
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/complete-nail-technician-course.php';
} elseif ($current_product_id == 438477) {
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/complete-nail-technician-course-birmingham.php';
} elseif ($current_product_id == 438480) {
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/complete-nail-technician-course-swindon.php';
}elseif ($current_product_id == 440128) {
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/eyelash-extensions-training-london.php';
}elseif ($current_product_id == 440908) {
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/eyelash-extensions-training-birmingham.php';
}elseif ($current_product_id == 371100) {
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-courses-template.php';
}else {

	// Banner Offer Section
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/banner-offer-section.php';

	// Top Info Contents - Big device
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/big-device-contents/top-info-sections.php';

	// Top Info Contents - Small device
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/small-device-contents/top-info-contents.php';

	// Bottom Fixed Buy Now Button - Small device
	// if ( 
	// 	'382548' != $current_product_id  
	// 	'376417' != $current_product_id 		// Phlebotomy Training Birmingham
	// ) {
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/small-device-contents/bottom-fixed-buy-now-contents.php';
	// }

	if (function_exists('is_product') && is_product()) {
?>
		<style>
			#linesopen-outer .linesopen {
				width: unset;
				max-width: unset;
			}
		</style>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
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
	<?php
	}
	?>

	<?php
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/banner-offer-contents.php';

	// Loading Marque contents for GCSE Course only
	if (has_term(359, 'product_cat')) {
	?>
		<script src="<?php echo ASTRA_CHILD_THEME_DIR_URI ?>/assets/js/jquery.marquee.js"></script>
		<div class="la-gcse-marquee">
			<p>No joining fee </p>
			<p>Cancel anytime</p>
			<p>Book class schedule at your convenient time</p>
			<p>Study from your comfort zone</p>
			<p>No cancellation fee</p>
			<p>Memberships that suit you</p>
		</div>
		<script>
			(function($) {
				$('.la-gcse-marquee').marquee({
					gap: 30,
					delayBeforeStart: 1500,
					direction: 'left',
					duplicated: true,
					duration: 18000,
					startVisible: true
				});
			})(jQuery);
		</script>
	<?php
	}
	?>

	<main id="la-single-main">
		<div class="container">
			<?php
			$product = wc_get_product($current_product_id);
			if (367525 == $current_product_id) {
				// Load exam board content
				include ASTRA_CHILD_THEME_DIR . '/woocommerce/gift-card-template.php';
			} else {
				if (la_is_user_from_big_device()) {
					include ASTRA_CHILD_THEME_DIR . '/woocommerce/big-device-contents/nav-contents.php';
				}
			?>

				<section id="main-content">
					<div id="main-left">
						<?php
						// Load Modal for both devices only for BSL Course
						if ('377744' == $current_product_id) {
							// Load Enquery Modal content
							include ASTRA_CHILD_THEME_DIR . '/woocommerce/enquery-modal-content.php';
						}
						// Escape these courses to load Course Info contents
						// if ( 
						// 	('368889' != $current_product_id) 
						// 	&& ('368909' != $current_product_id) 
						// 	&& ('368919' != $current_product_id) 
						// 	&& ('368926' != $current_product_id) 						// GCSE Maths Online Course and Exam | Edexcel
						// 	&& ('372130' != $current_product_id) 						// GCSE English Language Course and Exam | AQA
						// 	&& ('368905' != $current_product_id) 						// GCSE Biology Language Course and Exam | AQA
						// 	&& ('379419' != $current_product_id) 						// GCSE Physics Language Course and Exam | AQA
						// 	&& ('368929' != $current_product_id) 						// GCSE Chemistry Language Course and Exam | AQA
						// 	&& ('382531' != $current_product_id) 						// NEW CPD Course to show
						// ) {
						// 	include ASTRA_CHILD_THEME_DIR . '/woocommerce/course-info-contents.php';
						// }

						// Load Exam Board for Small device
						// if ( ! la_is_user_from_big_device() ) {
						?>
						<section id="la-small-screen-enroll-wrapper" class="">
							<?php
							if (in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)) {
								// Phlebotomy Courses Right Sidebar Contents
								include ASTRA_CHILD_THEME_DIR . '/woocommerce/phlebotomy-courses-right-sidebar-content.php';
								/*
							} elseif ( 
								'368889' 	== $current_product_id		//	Level 3 Award in Education and Training
								|| '368909' == $current_product_id		// Level 4 Certificate in Education and Training
								|| '368919' == $current_product_id 		// Level 5 Diploma in Education and Training
							 ) {
								// Education & Training Course Purchasing Contents
								include ASTRA_CHILD_THEME_DIR . '/woocommerce/education-training-course-purchase-contents.php';
								*/
							} elseif ('370863' == $current_product_id) {
								include ASTRA_CHILD_THEME_DIR . '/woocommerce/catheterisation-price-content.php';
							} elseif ('377744' == $current_product_id) {
								// Load Enquery Modal content
								// include ASTRA_CHILD_THEME_DIR . '/woocommerce/enquery-modal-content.php';
								// Load BSL Price content
								include ASTRA_CHILD_THEME_DIR . '/woocommerce/bsl-price-content.php';
							} else if (
								is_array($course_id_array) && in_array('331', $course_id_array) 	// Functional Skills           		
								|| is_array($course_id_array) && in_array('355', $course_id_array) 	// Education & Training Category
								|| is_array($course_id_array) && in_array('359', $course_id_array) 	// GCSE Courses                		
								|| is_array($course_id_array) && in_array('392', $course_id_array) 	// ESOL                        		
								// Exceptional Course Ids from BSL Course Cat
								|| ('429648' == $current_product_id) 			// NCFE CACHE Level 2 Certificate in Health and Social Care – RQF
								|| ('418531' == $current_product_id) 			// Level 3 Award in Health and Social Care Course | NVQ/RQF
								|| ('396278' == $current_product_id) 			// Level 3 Diploma in Adult Care
								|| ('457409' == $current_product_id) 			// TQUK Level 4 Award in the Internal Quality Assurance of Assessment Processes & Practice (RQF)

								|| ('452461' == $current_product_id) 			//  Level 3 Certificate In Assessing Vocational Achievement​ (CAVA) (RQF) Course
								|| ('394447' == $current_product_id) 			// Level 3 Certificate in British Sign Language
								|| ('364491' == $current_product_id) 			// Level 2 Certificate in British Sign Language
								|| ('364465' == $current_product_id) 			// Level 1 Certificate in British Sign Language
								|| ('368285' == $current_product_id)			// Shipping charge Product from Others Category
								|| ('442236' == $current_product_id)			// TQUK Level 2 Diploma in Care (RQF) – Adult Care
								|| ('447672' == $current_product_id)			// Level 1 Health and Safety in a Construction Environment (Leading to CSCS Green Card)
								|| ('405511' == $current_product_id)			// Laser Awards – Online Level 2 Award for Personal Licence Holders RQF (APLH)
								||	in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)
							) {
							?>
								<div id="exam-board" class="">
									<?php
									// Load exam board content
									include ASTRA_CHILD_THEME_DIR . '/woocommerce/exam-board.php';
									?>
								</div>
							<?php
							} else {
								// Load Two Categories Pricing content
								include ASTRA_CHILD_THEME_DIR . '/woocommerce/two-categories-pricing-content.php';
							}
							?>
						</section>
						<?php
						// }

						if (in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)) {
							// Load Course Contents for both Devices
							// Phlebotomy Courses Top Contents
							include ASTRA_CHILD_THEME_DIR . '/woocommerce/phlebotomy-courses-top-contents.php';
							$product_title_for_alt = get_the_title($current_product_id);

						if ($image_gallery_btn != 'hide') {
							if ($la_session_overview_title && !empty($la_session_overview_image) && is_array($la_session_overview_image)) {
							?>
								<div id="screenshot-wrap">
									<div id="screenshot" class="phlebotomy-common">
										<h2><?php echo esc_html($la_session_overview_title); ?></h2>
										<div class="single-screenshot-item fancybox">
											<?php
												$image_count = count($la_session_overview_image);
												$counter = 1;

												foreach ($la_session_overview_image as $attachment_id => $img_url) {
													$alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);

													if (empty($alt_text)) {
														$alt_text = esc_attr($product_title_for_alt) . ' Dry Lab Practical Session image';
														if ($image_count > 1) {
															$alt_text .= ' ' . $counter;
														}
													}
											?>
													<a href="<?php echo esc_url($img_url); ?>" class="fancybox">
														<img src="<?php echo esc_url($img_url); ?>" width="160" height="144" alt="<?php echo esc_attr($alt_text); ?>" title="<?php echo esc_attr($alt_text); ?>">
													</a>
											<?php
													$counter++;
												}
											?>
										</div>
									</div>
								</div>
							<?php
							} elseif (in_array($current_product_id, ['443706', '443472'])) {
							?>
								<style>
									#screenshot-wrap {
										display: none;
									}
								</style>
								<div id="screenshot-wrap">
									<div id="screenshot" class="phlebotomy-common">
										<h2>Previous Practical Session Overview</h2>
										<div class="single-screenshot-item fancybox">
											<a href="/wp-content/uploads/2023/02/screenshot-1.webp" class="fancybox">
												<img src="/wp-content/uploads/2023/02/screenshot-1.webp" width="160" height="144" alt="<?php echo esc_attr($product_title_for_alt); ?> title="<?php echo esc_attr($product_title_for_alt); ?> Dry Lab Practical Session image 1">
											</a>
											<a href="/wp-content/uploads/2023/02/screenshot-2.webp" class="fancybox">
												<img src="/wp-content/uploads/2023/02/screenshot-2.webp" width="160" height="144" alt="<?php echo esc_attr($product_title_for_alt); ?> title="<?php echo esc_attr($product_title_for_alt); ?> Dry Lab Practical Session image 2">
											</a>
											<a href="/wp-content/uploads/2023/02/screenshot-3.webp" class="fancybox">
												<img src="/wp-content/uploads/2023/02/screenshot-3.webp" width="160" height="144" alt="<?php echo esc_attr($product_title_for_alt); ?> title="<?php echo esc_attr($product_title_for_alt); ?> Dry Lab Practical Session image 3">
											</a>
											<a href="/wp-content/uploads/2023/02/screenshot-4.webp" class="fancybox">
												<img src="/wp-content/uploads/2023/02/screenshot-4.webp" width="160" height="144" alt="<?php echo esc_attr($product_title_for_alt); ?> title="<?php echo esc_attr($product_title_for_alt); ?> Dry Lab Practical Session image 4">
											</a>
										</div>
									</div>
								</div>
							<?php
							} else {
							?>
								<div id="screenshot-wrap">
									<div id="screenshot" class="phlebotomy-common">
										<h2>Previous Practical Session Overview</h2>
										<div class="single-screenshot-item fancybox">
											<a href="/wp-content/uploads/2023/02/screenshot-1.webp" class="fancybox">
												<img src="/wp-content/uploads/2023/02/screenshot-1.webp" width="160" height="144" alt="<?php echo esc_attr($product_title_for_alt); ?> title="<?php echo esc_attr($product_title_for_alt); ?> Dry Lab Practical Session image 1">
											</a>
											<a href="/wp-content/uploads/2023/02/screenshot-2.webp" class="fancybox">
												<img src="/wp-content/uploads/2023/02/screenshot-2.webp" width="160" height="144" alt="<?php echo esc_attr($product_title_for_alt); ?> title="<?php echo esc_attr($product_title_for_alt); ?> Dry Lab Practical Session image 2">
											</a>
											<a href="/wp-content/uploads/2023/02/screenshot-3.webp" class="fancybox">
												<img src="/wp-content/uploads/2023/02/screenshot-3.webp" width="160" height="144" alt="<?php echo esc_attr($product_title_for_alt); ?> title="<?php echo esc_attr($product_title_for_alt); ?> Dry Lab Practical Session image 3">
											</a>
											<a href="/wp-content/uploads/2023/02/screenshot-4.webp" class="fancybox">
												<img src="/wp-content/uploads/2023/02/screenshot-4.webp" width="160" height="144" alt="<?php echo esc_attr($product_title_for_alt); ?> title="<?php echo esc_attr($product_title_for_alt); ?> Dry Lab Practical Session image 4">
											</a>
										</div>
									</div>
								</div>
							<?php
							}
							// For Load ECG top contents and ECG Course Preview
						}
						}
						?>

						<div id="single-course-details" class="">
							<?php
							if (get_the_content()) {
								wpautop(the_content());
							} else {
								la_get_dummy_course_content();
							}
							?>
						</div>
						<?php

						// Product Curriculum
						// Check if $product_curriculums is an array and not empty before counting
						if (is_array($product_curriculums) && count($product_curriculums) > 1) {
						?>
							<div id="la-single-curriculum" class="w-100">
								<h2>Course Curriculum</h2>

								<div id="la-course-curriculum">
									<div class="mcdt-accordion">
										<?php
										$j = 0;
										$fs_unit = 0;
										$fs_math_extra_contents = [
											[
												'The number system gives you a general insight into the mathematical operations regarding the given numbers. You will acquire skills in division, multiplication, addition and subtraction, which require steps in real-life contexts.',
												'You will be learning many types of fractions, including improper fractions, proper fractions, equivalent fractions and more. Along with this, you will learn Ordering Decimal Numbers, Subtracting Decimals, multiplying and dividing decimals and more, which enables you to apply real-world problem-solving.',
												'You will learn to calculate the Percentage and how to express a Number as a Percentage of Another. Interpreting the Original Value, Calculating Percent Increase and Decrease, and so on. This learning you can easily apply in real-life counting issues along with increasing your rational thinking.',
												'You will be learning to calculate the Total Amounts using Ratios, direct Proportion, Inverse Proportion and many more things, which help you in doing comparisons, learning science and engineering and more.',
												'You will learn the definition of formulas Formula Using Words, Multi-Step Formulas, Formula Using Letters and so on. Learning formulas has a large impact on real life as these formulas are used extensively in measuring, building infrastructure and more.',
											],
											[
												'You will be mastering Solving Money Related Questions, including percentage-based discounts, discounts Related to Fractions, Profit and Percentage, etc. This money math learning will help you to understand money-earning and saving-related issues that you face in daily activities.',
												'You will learn units and Types of Units, Units of Weight, Units of Length, Units of Capacity, etc. Also, you will gain knowledge about steps to convert between Metric Units, Imperial to Imperial Conversions, and Other Unit Conversions will help pursue a higher university degree.',
												'You will be clearing the concept of speed, calculations to find out distance and time, density, Relation between Density, Weight and Volume.',
												'You will learn to find perimeter and area, Circle, perimeter of triangle etc. which require in measurement, design and planning and so on.',
												'You will gain skills in formulas for calculating area, finding areas of complex shapes, applying area calculations in complex questions, different Types of 3D Shapes, surface area, finding the surface area of complex 3D Shapes, using nets, plans and elevations, etc. learning about area and shapes will certainly help you in building your dream home and more. ',
												'In the volume classes, you will learn Formulas for calculating volume, Questions based on volumes of different 3D Shapes, finding the Scale in a Diagram, Making Scale Drawings, which are required in building critical thinking skills and more. ',
												'You will be learning necessary things about the coordinate Grid, How to Read Coordinates on a Grid? Plotting Points on a Grid and more which extensively requires in making video games, medical imaging, physics and more '
											],
											[
												'You will be learning about median and mode, which is one of the most interesting mathematical chapters. As you will know how to find the median and mode from the sets of numbers, you can easily implement such learning in household work and other places as well.',
												'You will be able to find the mean, median and mode. Knowing how to find these is highly important in all aspects of life.',
												'You will learn Probability: Definition and Meaning, Calculating Probabilities, Probability of Something Happening and Something Not Happening, etc. Once you know how to find probability, you can easily detect business profit loss and implement other parts of your life. '
											]
										];
										foreach ($product_curriculums as $item) {
											$j++;
										?>
											<div>
												<a class="mcdt-toggle<?php echo esc_attr($j == 1 ? ' mcdt-toggle-show' : '') ?>" href="#">
													<?php echo $item['curr_title'] ?> <span class="fa fa-chevron-right"></span>
												</a>

												<div class="mcdt-inner">
													<?php
													$counter = 0;
													$curr_dur = isset($item['curr_dur']) && is_array($item['curr_dur']) ? $item['curr_dur'] : [];
													if(isset($item['curr_text']) && is_array($item['curr_text'])){
														foreach ($item['curr_text'] as $curr_text) {
															if ($current_product_id == '363172') {
														?>
																<div class="single-curr-item-wrap">
																	<div class="single-curr-item">
																		<p><?php echo $curr_text ?></p>
																		<span><?php echo isset($curr_dur[$counter]) ? $curr_dur[$counter] : ''; ?></span>
																	</div>
																	<?php echo '<p>' . $fs_math_extra_contents[$fs_unit][$counter++] . '</p>'; ?>
																</div>
															<?php
															} else {
															?>
																<div class="single-curr-item">
																	<p><?php echo $curr_text ?></p>
																	<span><?php echo isset($curr_dur[$counter]) ? $curr_dur[$counter] : ''; ?></span>
																</div>
														<?php
															}
															$counter++;
														}
													}
													?>
												</div>
											</div>
										<?php
											$fs_unit++;
										}
										?>
									</div>
								</div>
							</div>
						<?php
						}

						// Product Accreditation
						if ($wc_product_accreditation) {
						?>
							<div id="la-single-accreditation" class="d-none overflow-hidden d-xl-block w-100">
								<h2>Recognised Accreditation</h2>
								<?php echo wpautop($wc_product_accreditation) ?>
							</div>
						<?php
						}

						// Product Certification
						if ($wc_product_certification) {
						?>
							<div id="la-certification" class="mb-5 d-none d-xl-block w-100">
								<h2>Certification</h2>
								<?php echo wpautop($wc_product_certification) ?>
							</div>
						<?php
						}

						// Load GCSE Pricing Contents for these Courses
						// if ( 
						// 	'368926' == $current_product_id 				// GCSE Maths Online Course and Exam | Edexcel
						// 	|| '372130' == $current_product_id 				// GCSE English Language Course and Exam | AQA
						// 	|| '368905' == $current_product_id 				// GCSE Biology Language Course and Exam | AQA
						// 	|| '379419' == $current_product_id 				// GCSE Physics Language Course and Exam | AQA
						// 	|| '368929' == $current_product_id 				// GCSE Chemistry Language Course and Exam | AQA
						// ) {	
						// 	include ASTRA_CHILD_THEME_DIR . '/woocommerce/small-device-contents/gcse-accordion-contents.php';
						// } else {
						// 	include ASTRA_CHILD_THEME_DIR . '/woocommerce/small-device-contents/accordion-contents.php';
						// }


						// Success Student Video Section
						if ($watch_success_video_url) {
						?>
							<div id="la-single-success-story" class="mb-5 ssd-none d-block d-sm-none w-100">
								<p>Success Stories</p>
								<?php
								if ($watch_success_video_url) {
									echo wp_oembed_get(esc_url($watch_success_video_url));
								}
								?>
							</div>
						<?php
						}
						?>
					</div> <aside id="main-right">

						<?php
						if (in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)) {
							// Phlebotomy Courses Right Sidebar Contents
							include ASTRA_CHILD_THEME_DIR . '/woocommerce/phlebotomy-courses-right-sidebar-content.php';
							/*
					} elseif ( 
						'368889' 	== $current_product_id		//	Level 3 Award in Education and Training
						|| '368909' == $current_product_id		// Level 4 Certificate in Education and Training
						|| '368919' == $current_product_id 		// Level 5 Diploma in Education and Training
					 ) {
						// Education & Training Course Purchasing Contents
						include ASTRA_CHILD_THEME_DIR . '/woocommerce/education-training-course-purchase-contents.php';
						*/
						} elseif ('370863' == $current_product_id) {
							include ASTRA_CHILD_THEME_DIR . '/woocommerce/catheterisation-price-content.php';
						} elseif ('377744' == $current_product_id) {
							// Load Enquery Modal content
							// include ASTRA_CHILD_THEME_DIR . '/woocommerce/enquery-modal-content.php';
							// Load BSL Price content
							include ASTRA_CHILD_THEME_DIR . '/woocommerce/bsl-price-content.php';
						} else if (
							is_array($course_id_array) && in_array('331', $course_id_array) 	// Functional Skills           		
							|| is_array($course_id_array) && in_array('355', $course_id_array) 	// Education & Training Category
							|| is_array($course_id_array) && in_array('359', $course_id_array) 	// GCSE Courses                		
							|| is_array($course_id_array) && in_array('392', $course_id_array) 	// ESOL                        		
							// Exceptional Course Ids from BSL Course Cat
							|| ('429648' == $current_product_id) 			// NCFE CACHE Level 2 Certificate in Health and Social Care – RQF
							|| ('418531' == $current_product_id) 			// Level 3 Award in Health and Social Care Course | NVQ/RQF
							|| ('396278' == $current_product_id) 			// Level 3 Diploma in Adult Care
							|| ('457409' == $current_product_id) 			// TQUK Level 4 Award in the Internal Quality Assurance of Assessment Processes & Practice (RQF)
							|| ('452461' == $current_product_id) 			// Level 3 Certificate In Assessing Vocational Achievement​ (CAVA) (RQF) Course
							|| ('394447' == $current_product_id) 			// Level 3 Certificate in British Sign Language
							|| ('364491' == $current_product_id) 			// Level 2 Certificate in British Sign Language
							|| ('364465' == $current_product_id) 			// Level 1 Certificate in British Sign Language
							|| ('368285' == $current_product_id)			// Shipping charge Product from Others Category
							|| ('442236' == $current_product_id)			// TQUK Level 2 Diploma in Care (RQF) – Adult Care
							|| ('447672' == $current_product_id)			// Level 1 Health and Safety in a Construction Environment (Leading to CSCS Green Card)
							|| ('405511' == $current_product_id)			// Laser Awards – Online Level 2 Award for Personal Licence Holders RQF (APLH)
							||	in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)
						) {
						?>
							<div id="exam-board" class="">
								<?php
								// Load exam board content
								include ASTRA_CHILD_THEME_DIR . '/woocommerce/exam-board.php';
								?>
							</div>
						<?php
						} else {
							// Load Two Categories Pricing content
							include ASTRA_CHILD_THEME_DIR . '/woocommerce/two-categories-pricing-content.php';
						}
						// }
						?>

						<?php
						if (in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES) || $current_product_id == 366854) {
						// ✅ Show Learners Achievement Image if not hidden
						if ($learner_achievement_btns != 'hide') {
							if (empty($la_learner_achievements_image)) {
								$la_learner_achievements_image = '/wp-content/uploads/2023/05/plebotomy-practical-session-27-may.webp';
							}

							$alt_text_learners = '';
							$attachment_id_learners = attachment_url_to_postid($la_learner_achievements_image);

							if ($attachment_id_learners) {
								$alt_text_learners = get_post_meta($attachment_id_learners, '_wp_attachment_image_alt', true);
							}

							if (empty($alt_text_learners)) {
								$product_title = get_the_title($current_product_id);
								$alt_text_learners = $product_title . ' Learners Achievement';
							}
							?>
							<div id="phlebotomy-practical-session">
								<p>Learners Achievement</p>
								<a href="<?php echo esc_url($la_learner_achievements_image); ?>" class="fancybox">
									<img src="<?php echo esc_url($la_learner_achievements_image); ?>" width="357" height="268" alt="<?php echo esc_attr($alt_text_learners); ?>" title="<?php echo esc_attr($alt_text_learners); ?>">
								</a>
							</div>
							<?php
						}

						// ✅ Practical Session: only show if practical_session_video_img_btns != 'hide'
						if ($practical_session_video_img_btns != 'hide') {
							if (empty($practical_session_video_url)) {
								$practical_session_video_url = 'https://youtu.be/Cd9KWB50ztI';
							}

							if (empty($practical_session_video_img)) {
								$practical_session_video_img = '/wp-content/uploads/2023/06/practical-session.webp';
							}

							if ($product_id != 413582 && $product_id != 435450) {
								?>
								<div id="phlebotomy-practical-session" class="practical-session-exclude">
									<p>Practical Session</p>
									<a href="<?= $practical_session_video_url ?>" class="fancybox">
										<img src="<?= $practical_session_video_img ?>" width="357" height="205" alt="practical video session" title="practical video session">
									</a>
								</div>
								<?php
							}
						}

						// ✅ Success Story: only show if Success_Story_video_img_btns != 'hide'
						if ($Success_Story_video_img_btns != 'hide') {
							if (empty($success_story_video_url)) {
								$success_story_video_url = 'https://youtu.be/bERqcY6jcXA?t=7';
							}

							if (empty($success_story_video_img)) {
								$success_story_video_img = '/wp-content/uploads/2023/06/success-story-1.webp';
							}
							?>
							<div id="phlebotomy-practical-session">
								<p>Success Story</p>
								<a href="<?= $success_story_video_url ?>" class="fancybox">
									<img src="<?= $success_story_video_img ?>" width="357" height="205" alt="success story" title="success story">
								</a>
							</div>
							<?php
						}

					} else {
						// ✅ For other products: only show Success Story if allowed
						if ($Success_Story_video_img_btns != 'hide') {
							if (empty($success_story_video_url)) {
								$success_story_video_url = 'https://www.youtube.com/watch?v=1r1atkQ68yE';
							}

							if (empty($success_story_video_img)) {
								$success_story_video_img = 'https://lead-academy.org/wp-content/uploads/2024/11/Student-Testimonial.webp';
							}
							?>
							<div id="phlebotomy-practical-session">
								<p>Success Story</p>
								<a href="<?= $success_story_video_url ?>" class="fancybox">
									<img src="<?= $success_story_video_img ?>" width="357" height="205" alt="success story" title="success story">
								</a>
							</div>
							<?php
							}
						}
						?>
						<div id="get-in-touch">
							<?php
							if ($current_product_id == '368889') {
							?>
								<h2 style="font-size: 26px;">PTLLS Online Training Course</h2>
								<a href="https://lead-academy.org/wp-content/uploads/0223/12/Education-and-Training-Level-3.pdf">Download Brochure</a>
							<?php
							} else {
							?>
								<p>Get In Touch Today</p>
								<a href="#" onclick="LC_API.open_chat_window();return false">Live CHAT WITH US</a>
								<a href="tel:0300 124 5585">CALL ON - 0300 124 5585</a>
							<?php
							}
							?>
						</div>
						<?php 
							// The $product object is already defined globally. Use it.
							if ($product) {
								$price = $product->get_price();
								if ($price < 30) {
						?>
							<div class="subscription-poster">
								<p>1 Year & Lifetime Membership</p>
								<div class="text-start">
									<ul class="d-flex gap-3">
										<li> <span><i class="fa-solid fa-circle-check"></i></span> <span>Get 1000+ CPD Accredited Courses</span> </li>
										<li> <span><i class="fa-solid fa-circle-check"></i></span> <span>Free Course Completion PDF Certificate</span> </li>
										<li> <span><i class="fa-solid fa-circle-check"></i></span> <span>Free Student ID Card</span> </li>
										<li> <span><i class="fa-solid fa-circle-check"></i></span> <span>24/7 Customer Support</span> </li>
										<li> <span><i class="fa-solid fa-circle-check"></i></span> <span>Tutor Support</span> </li>
									</ul>
								</div>
								<a href="/subscription">View Subcriptions Offers</a>
							</div>
						<?php
								}
							}
						?>

					</aside>
				</section> <div id="la-single-feedbacks" class="mb-5 ssd-none d-xl-block w-100">
					<div class="container">
						<h2 id="la-review" class="text-center">Course Reviews</h2>
						<?php
						// Load Reviews Section
						if (function_exists('la_display_reviews_section')) {
							la_display_reviews_section();
						}
						?>
					</div>
				</div>

				<?php
				// if ( la_is_user_from_big_device() ) {
				// FAQ Section
				// Check if $wc_product_faqs is an array and not empty before counting/looping
				if (is_array($wc_product_faqs) && !empty($wc_product_faqs)) {
				?>
					<div id="la-single-faq" class="overflow-hidden">
						<h2 class="text-center">FAQs</h2>

						<div class="accordion" id="accordionPanelsStayOpenExample">
							<?php
							$counter = 20;
							foreach ($wc_product_faqs as $item) {
								$counter++;
							?>
								<div class="accordion-item">
									<h3 class="accordion-header" id="panelsStayOpen-heading<?php echo esc_attr($counter) ?>">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo esc_attr($counter) ?>" aria-expanded="<?php echo esc_attr($counter == 21 ? 'true' : 'false') ?>" aria-controls="panelsStayOpen-collapse<?php echo esc_attr($counter) ?>">
											<?php echo isset($item['faq_title']) ? $item['faq_title'] : ''; ?>
										</button>
									</h3>
									<div id="panelsStayOpen-collapse<?php echo esc_attr($counter) ?>" class="accordion-collapse collapse<?php echo esc_attr($counter == 21 ? ' show' : '') ?>" aria-labelledby="panelsStayOpen-heading<?php echo esc_attr($counter++) ?>">
										<div class="accordion-body">
											<?php echo isset($item['faq_text']) ? wpautop($item['faq_text']) : ''; ?>
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
				// }

				// Check if $related_product_var is an array and not empty before counting/looping
				if (is_array($related_product_var) && count($related_product_var) > 1) {
				?>
					<div id="la-single-learners-bought" class="overflow-hidden mb-5">
						<h2 class="text-center">Learner’s Also Bought</h2>
						<section id="single-related-products" class="related products">
							<ul class="products columns-4">
								<?php
								foreach ($related_product_var as $rp) {
									// Ensure product_id exists and is not empty
									if (empty($rp['product_id'])) {
										continue;
									}
									$rp_product = wc_get_product($rp['product_id']);
									if ($rp_product) {
										$rp_product_url = get_permalink($rp['product_id']);
										$rp_title = get_the_title($rp['product_id']);
										$rp_post_thumbnail_id = get_post_thumbnail_id($rp['product_id']);
										$rp_product_image = wp_get_attachment_image_src($rp_post_thumbnail_id, "la_course_archive_thumb_245x150");
										$rp_product_image_alt = get_post_meta($rp_post_thumbnail_id, '_wp_attachment_image_alt', true);
										$rp_product_image_title = get_the_title($rp_post_thumbnail_id);

										if ($rp_product->get_type() == 'variable') {
											$variations = $rp_product->get_available_variations();

											if (!empty($variations)) { // Ensure there is at least one variation
												$first_variation_id = $variations[0]['variation_id'];
												$child_item = wc_get_product($first_variation_id);
												$rp_regular_price = $child_item->get_regular_price();
												$rp_sale_price = $child_item->get_sale_price();
											} else {
												$rp_regular_price = $rp_sale_price = null; // No variations available
											}
										} else {
											$rp_regular_price = $rp_product->get_regular_price();
											$rp_sale_price = $rp_product->get_sale_price();
										}
									}
								?>
									<li class="ast-article-single ast-woo-product-no-review desktop-align-left tablet-align-left mobile-align-left product type-product post-<?= esc_attr($rp['product_id']) ?> status-publish last instock product_cat-others product_cat-product-link has-post-thumbnail sale taxable shipping-taxable purchasable product-type-variable">
										<div class="col-md-4">
											<div class="course-card-box">
												<div class="course-card">
													<div class="course-card-img">
														<img src="<?= esc_url($rp_product_image[0]) ?>" alt="<?= esc_attr($rp_product_image_alt) ?>" title="<?= esc_attr($rp_product_image_alt) ?>">
													</div>
													<div class="course-body">
														<div class="course-card-title">
															<a href="<?= esc_url($rp_product_url) ?>" class="course-title">
																<h3 class="woocommerce-loop-product__title"><?= esc_html($rp_title) ?></h3>
															</a>
														</div>
														<div class="la-rv-course-ratings">
															<img src="https://lead-academy.org/wp-content/uploads/2022/08/Group-15155.png" alt="tp-logo" title="tp-logo">
														</div>
														<div>
															<div class="la-course-price">
																<del><?= get_woocommerce_currency_symbol() . esc_html($rp_regular_price) ?></del>
																<p><?= get_woocommerce_currency_symbol() . esc_html($rp_sale_price) ?></p>
															</div>
														</div>
													</div>
												</div>
												<div class="course-d-btn">
													<a href="<?= esc_url($rp_product_url) ?>" class="course-title">View Course <img src="https://lead-academy.org/wp-content/uploads/2022/10/view-course-right-arrow.svg" alt="right arrow image" title="right arrow image"></a>
												</div>
											</div>
										</div>
									</li>
								<?php
								}
								echo '</ul></section></div>';
							}
							// Hide the related courses for Phlebotomy course
							else if (!in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)) {
								//if ( ('376160' != $current_product_id) && ('376417' != $current_product_id) && ('376420' != $current_product_id) && ('377824' != $current_product_id) ) {
								?>
								<div id="la-single-learners-bought" class="overflow-hidden mb-5">
									<h2 class="text-center">Learner’s Also Bought</h2>
									<?php
									echo do_shortcode('[related_products per_page="4"]');
									?>
								</div>
						<?php
							}
						}	// end condition of gift card
						?>
					</div>

					<div id="linesopen-outer">
						<a href="tel:0300 124 5585" class="linesopen gtm invert" data-gtm-event="InteractionGAEvent" data-gtm-event-category="Click" data-gtm-event-action="call">
							<i class="fas fa-headset"></i>
							<div>
								<div>Lines <span class="highlight">open Now!</span></div>
								<span class="d-block small">
									<span class="sr-only">- Click here to</span>
									Get your queries resolved!
								</span>
								<div class="mt-auto flex-row lines">
									<span class="phone">
										<span class="sr-only">or call us on</span>
										0300 124 5585
									</span>
								</div>
							</div>
						</a>
						<div class="mobile-linesopen-outer">
							<a href="tel:0300 124 5585" class="linesopen-mbl-btn" rel="">
								<i class="fa fa-phone"></i> <span>Call us today</span>
							</a>
						</div>
					</div>
	</main>

<?php
}
do_action('woocommerce_after_single_product');
?>

<?php
// Popup Added for Deep Tissue Massage Training – 1-Day | CPD & IPHM Accredited
if ( is_product() && get_the_ID() === 414685 ) :
?>
<div id="unique-flash-sale-popup" class="unique-popup-container">
    <div class="unique-popup-content">
        <div class="unique-popup-header">
            <p class="unique-popup-p">🔥24-HOUR FLASH SALE🔥</p>
            <span id="unique-popup-close" class="unique-popup-close">&times;</span>
        </div>
        <p>Grab 10% Off for the next 24 hours only</p>
        <?php
		echo do_shortcode('[contact-form-7 id="9d8a618" title="Deep Tissue Massage Training Popup"]');
        ?>
        <p class="unique-countdown-text">This offer expires in:</p>
        <div id="unique-countdown" class="unique-countdown"></div>
        <p><strong>*Don’t wait - this opportunity won't last long!*</strong></p>
        <p id="copy-confirmation" style="color:green; display:none;">Coupon code copied!</p>
    </div>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function () {
  // Find the popup and close button elements once
  const flashSalePopup = document.getElementById("unique-flash-sale-popup");
  const popupCloseButton = document.getElementById("unique-popup-close");
  const countdownTimer = document.getElementById("unique-countdown");

  // Check if the flash sale popup element actually exists on the page
  if (flashSalePopup) {
    // Check if the popup has already been shown this session
    if (!sessionStorage.getItem("popupShown")) {
      // Set a timer to display the popup after 5 seconds
      setTimeout(function () {
        flashSalePopup.style.display = "flex";
        // Mark that the popup has been shown
        sessionStorage.setItem("popupShown", "true");
      }, 5000); // Show after 5 seconds
    }
  }

  // Check if the close button exists before adding a click event
  if (popupCloseButton) {
    // Close popup when the close button is clicked
    popupCloseButton.onclick = function () {
      // Also check if the popup exists before trying to hide it
      if (flashSalePopup) {
        flashSalePopup.style.display = "none";
      }
    };
  }

  // Check if the countdown timer element exists
  if (countdownTimer) {
    // Countdown timer
    var countdownDate = new Date().getTime() + 24 * 60 * 60 * 1000; // 24 hours from now

    var x = setInterval(function () {
      var now = new Date().getTime();
      var distance = countdownDate - now;

      var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      countdownTimer.innerHTML = hours + "h " + minutes + "m " + seconds + "s ";

      if (distance < 0) {
        clearInterval(x);
        countdownTimer.innerHTML = "EXPIRED";
      }
    }, 1000);
  }
});

// Function to copy the coupon code
function copyCoupon() {
  var couponCodeEl = document.getElementById("unique-promo-code");
  var confirmationMessage = document.getElementById("copy-confirmation");

  // Check if the elements exist before proceeding
  if (couponCodeEl && confirmationMessage) {
    var couponCode = couponCodeEl.textContent;
    var textarea = document.createElement("textarea");
    textarea.value = couponCode;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand("copy");
    document.body.removeChild(textarea);

    // Show confirmation message
    confirmationMessage.style.display = "block";
    setTimeout(function () {
      confirmationMessage.style.display = "none";
    }, 2000);
  }
}
</script>

<?php
endif;
?>