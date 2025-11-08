<?php
add_action('woocommerce_after_cart_table', 'la_dl_variation');
function la_dl_variation()
{
	if (in_array(get_current_user_id(), array(4, 30, 144))) {
		echo '<style>dl.variation{display:block !important;}</style>';
	}
}

/**
 * =======================================================================
 * Check the Cart items Belongs to Specified Course Cats
 * =======================================================================
 */
function la_matched_cart_items_belongs_to_specified_cats()
{
	if (! WC()->cart->is_empty()) {
		foreach (WC()->cart->get_cart() as $cart_item) {
			$current_product_id = $cart_item['product_id'];

			//  Only show Student ID section if 445843 exists in cart (Health Care Assistant (HCA) Training Bundle – Training for HCAs)
			$course_ids = array(
				396278,
				418531,
				429648,
				442236,
				452461,
				368889,
				368909,
				440118,
				445843
			);
			if ( in_array( $current_product_id, $course_ids ) ) {
				echo '<style>
					.cart-switch-container-wrapper .cart-switch-container {
						display: none !important;
					}
					.cart-switch-container-wrapper .add-student-id-wrap {
						display: block !important;
					}
				</style>';
			}

			if (in_array($current_product_id, array(389275, 389254))) {
				echo '<style>.cart-switch-container-wrapper{display:none !important;}</style>';
			}
			$course_cat_array 	= la_get_course_cat_id_by_course_id($current_product_id);
			if (
				in_array('331', $course_cat_array) 			// Functional Skills           		
				|| in_array('355', $course_cat_array) 		// Education & Training Category 	
				|| in_array('359', $course_cat_array) 		// GCSE Courses                		
				|| in_array('392', $course_cat_array) 		// ESOL                        		
				// Exceptional Course Ids from BSL Course Cat
				|| ('364465' == $current_product_id) 			// British Sign Language Level 1	
				|| ('418531' == $current_product_id) 			// 	Award in Health and Social Care 
				|| ('364491' == $current_product_id) 			// British Sign Language Level 2 	
				|| ('396278' == $current_product_id) 			// Level 3 Diploma in Adult Care – NVQ 
				|| ('368285' == $current_product_id)			// Shipping charge Product from Others Category 
				// Exceptional Course Ids for Phlebotomy Courses
				|| in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)
				/*
				|| ( '366854' == $current_product_id ) 			// Phlebotomy Training London
				|| ( '376417' == $current_product_id ) 			// Phlebotomy Training Birmingham
				|| ( '376420' == $current_product_id ) 			// Phlebotomy Training Bristol
				|| ( '377824' == $current_product_id ) 			// Phlebotomy Training Swindon
				|| ( '368595' == $current_product_id ) 			// Advanced/Competency Phlebotomy Training - London
				|| ( '382016' == $current_product_id ) 			// Advanced/Competency Phlebotomy Training - Birmingham
				|| ( '386971' == $current_product_id ) 			// Advanced/Competency Phlebotomy Training - Swindon
				|| ( '387587' == $current_product_id ) 			// Vaccination and Immunisation
				|| ( '389230' == $current_product_id ) 			// Vitamin B12 Injection
				|| ( '391063' == $current_product_id ) 			// Care Certificate Training - Face to Face Course
				|| ( '391079' == $current_product_id ) 			// Mandatory Training - CSTF (All in One Day) Course
				|| ( '388994' == $current_product_id ) 			// ECG
				|| ( '370863' == $current_product_id ) 			// Catheterisation Training
				|| ( '371100' == $current_product_id ) 			// Cannulation Training - London
				|| ( '380325' == $current_product_id ) 			// Cannulation Training - Birmingham
				|| ( '389109' == $current_product_id ) 			// Basic Life Support
				*/
				|| ('365273' == $current_product_id) 			// 1 Year Membership
			) {
				return false;
			} else {
				return true;
			}
		}
	}
}

/**
 * =======================================================================
 * Display a switch field at Cart Page 
 * =======================================================================
 */
add_action('woocommerce_after_cart_table', 'la_custom_switch_cart_shortcode_func');

function la_custom_switch_cart_shortcode_func()
{
	add_shortcode('la_custom_switch_cart_field', 'la_custom_switch_cart_shortcode_callback');
}

function la_custom_switch_cart_shortcode_callback()
{
	ob_start();
	global $woocommerce;
	// $value = WC()->session->get('add_a_product');

	$student_id_card_in_cart 					= '';
	$gift_card_in_cart 							= '';
	$qls_in_cart								= '';
	$cpd_iphm_pdf_hardcopy_in_cart 				= '';
	$english_revision_materials_in_cart 		= '';
	$math_revision_materials_in_cart  			= '';
	$math_two_revision_materials_in_cart  		= '';

	if (isset(WC()->cart)) {
		// ID Card Course
		$product_id 					= 365011;
		$student_id_card 				= WC()->cart->generate_cart_id($product_id);
		$student_id_card_in_cart 		= WC()->cart->find_product_in_cart($student_id_card);
		// CPD & IPHM QLS Course
		$product_id 					= 380530;
		$cpd_uk_iphm_qls_cert 			= WC()->cart->generate_cart_id($product_id);
		$cpd_uk_iphm_qls_cert_in_cart 	= WC()->cart->find_product_in_cart($cpd_uk_iphm_qls_cert);
		// CPD & IPHM Accredited Certificate
		$product_id 					= 380469;
		$cpd_iphm_cert_course 			= WC()->cart->generate_cart_id($product_id);
		$cpd_iphm_cert_course_in_cart 	= WC()->cart->find_product_in_cart($cpd_iphm_cert_course);
		// Quality License Scheme
		$product_id = 380471;
		$qls_cert_course 				= WC()->cart->generate_cart_id($product_id);
		$qls_cert_course_in_cart		= WC()->cart->find_product_in_cart($qls_cert_course);
		//English Level 2 Revision Materials
		$product_id 							= 382297;
		$english_revision_materials 			= WC()->cart->generate_cart_id($product_id);
		$english_revision_materials_in_cart 	= WC()->cart->find_product_in_cart($english_revision_materials);

		//Math Level 1 Revision Materials math
		$product_id 							= 382803;
		$math_revision_materials 				= WC()->cart->generate_cart_id($product_id);
		$math_revision_materials_in_cart 		= WC()->cart->find_product_in_cart($math_revision_materials);
		//Math Level 2 Revision Materials math
		$product_id 							= 382805;
		$math_two_revision_materials 			= WC()->cart->generate_cart_id($product_id);
		$math_two_revision_materials_in_cart 	= WC()->cart->find_product_in_cart($math_two_revision_materials);

		// Check the desired product in cart
		function la_matched_cart_item($product_id)
		{
			$product_ids = (array) $product_id;

			if (! WC()->cart->is_empty()) {
				foreach (WC()->cart->get_cart() as $cart_item) {
					if (in_array($cart_item['product_id'], $product_ids)) {
						return true;
					}
				}
			}
			return false;
		}

		function is_exam_specific_variation_in_cart($product_id, $variation_ids)
		{
			foreach (WC()->cart->get_cart() as $cart_item) {
				if (in_array($cart_item['product_id'], $product_id)) {
					if (in_array($cart_item['variation_id'], $variation_ids)) {
						return true;
					}
				}
			}
			return false;
		}

		// Start Loop for cart-suggestion post type
		if (!function_exists('get_valid_variation_by_product')) {
			function get_valid_variation_by_product($product_id) {
				$meta_id = ($product_id == 366854) ? 354284 : $product_id;
				$course_meta_group = get_post_meta($meta_id, 'la_phleb_course_meta_group', true);

				if (empty($course_meta_group) || !is_array($course_meta_group)) {
					return null;
				}

				$sort_function = isset($course_meta_group[0]['adv_course_date']) ? 'sortByDateAdv' : 'sortByDateSingle';
				if (!function_exists($sort_function)) {
					return null;
				}

				usort($course_meta_group, $sort_function);

				$check_time = "12:00:00";
				$today = strtotime('today ' . $check_time);

				foreach ($course_meta_group as $course) {
					if (empty($course['la_phleb_course_var_id'])) continue;
					if (!empty($course['la_phleb_course_quota_full']) && $course['la_phleb_course_quota_full'] === 'on') continue;
					if (!empty($course['la_phleb_course_delete']) && $course['la_phleb_course_delete'] === 'on') continue;
					if (!empty($course['course_hide_on_cart']) && $course['course_hide_on_cart'] === 'on') continue;

					$date_field = isset($course['adv_course_date']) ? $course['adv_course_date'] : (isset($course['single_course_date']) ? $course['single_course_date'] : null);
					if (!$date_field) continue;

					$course_date = strtotime($date_field . ' ' . $check_time);
					if ($course_date < $today) continue;

					$variation_id = $course['la_phleb_course_var_id'];
					$stock_qty = get_stock_by_variation($variation_id);

					if ($stock_qty > 0) {
						return [
							'product_id' => intval($product_id),
							'variation_id' => intval($variation_id),
							'date' => $course['la_phleb_course_date'],
						];
					}
				}
				return null;
			}
		}

		if (!function_exists('replace_course_placeholders')) {
			function replace_course_placeholders($template, $course_data) {
				if (empty($course_data) || !is_array($course_data)) return $template;

				if (isset($course_data['product_id'])) {
					$template = str_replace('[product_id]', $course_data['product_id'], $template);
				}

				if (isset($course_data['variation_id'])) {
					$template = str_replace('[variation_id]', $course_data['variation_id'], $template);
				}

				if (isset($course_data['date'])) {
					$template = str_replace('[date]', $course_data['date'], $template);
				}

				return $template;
			}
		}

		$args = array(
			'post_type' => 'cart-suggestion',
			'posts_per_page' => -1,
		);
		$loop = new WP_Query($args);
		while ($loop->have_posts()) : $loop->the_post();
			$cart_product_id = get_the_ID();
			$cart_target_id = get_post_meta($cart_product_id, 'cart_target_group', true);

			$target_cart_sort = array();
			foreach ($cart_target_id as $cart) {
				$target_cart_sort[] = intval($cart['cart_target_id']);
			}
			$product_id = get_post_meta($cart_product_id, 'cart_suggestion_this', true);
			$variation_array = get_post_meta($cart_product_id, 'cart_group', true);

			$variation_sort = array();
			foreach ($variation_array as $var) {
				$variation_sort[] = $var['cart_variation_id'];
			}
			$course_data = get_valid_variation_by_product($product_id);
			$template = apply_filters('the_content', get_post_field('post_content', $cart_product_id));
			$new_content = replace_course_placeholders($template, $course_data);
			if (is_array($variation_array) && count($variation_array) > 1) {
				if (is_exam_specific_variation_in_cart($target_cart_sort, $variation_sort) && ! la_matched_cart_item($product_id)) {
					echo $new_content;
				}
			} else {
				if (la_matched_cart_item($target_cart_sort) && ! la_matched_cart_item($product_id)) {
					echo $new_content;
				}
			}
		endwhile;
		// End Loop for cart-suggestion post type

		// Check the Cart items Belongs to Specified Course Cats
		function la_is_cart_items_belongs_to_specified_cats($specified_cats)
		{
			if (! WC()->cart->is_empty()) {
				foreach (WC()->cart->get_cart() as $cart_item) {
					$current_product_id = $cart_item['product_id'];
					$course_cat_array 	= la_get_course_cat_id_by_course_id($current_product_id);
					$matched_cart_item	= array_intersect($course_cat_array, $specified_cats);
					if (! empty($matched_cart_item)) {
						return true;
					}
				}
			}
		}


		// 331			// Functional Skills           		
		// 359			// GCSE Courses                		
		// 392 			// ESOL   
		if (la_is_cart_items_belongs_to_specified_cats([331, 392]) && 4 == get_current_user_id()) {
?>
			<div class="cart-switch-container-wrapper d-none">
				<h3><img src="/wp-content/uploads/2022/12/fire-icon.gif"> Special Offer <img src="/wp-content/uploads/2022/12/fire-icon.gif"></h3>
				<p class="text-center">Get Tutor Support Anytime!</p>
				<div class="cart-switch-container cart-select-tutor-support-hourly-wrap">
					<span class="cart-switch-text">Tutor Support - 1:1 - GBP 20/Hour</span>
					<select class="cart-select-tutor-support-hourly" data-gtm-form-interact-field-id="0">
						<option>Select Hour</option>
						<option>1 Hour</option>
						<option>2 Hours</option>
						<option>3 Hours</option>
					</select>
					<span class="cart-switch-prc"><b>£20</b></span>
					<div class="la-add-to-cart-tutor-hourly-btn-wrap">
						<a href="#" class="la-add-to-cart-tutor-hourly-btn">Add to Cart</a>
					</div>
				</div>
			</div>
	<?php
		}
	}



	// Functional Skills English Level 2
	$english_product_ids_to_check = array('363209');
	$english_variation_ids_to_check = array('372053', '363565', '372054', '363560');
	//363561 372054 363560 363562

	function is_english_exam_specific_variation_in_cart($product_ids, $variation_ids)
	{
		foreach (WC()->cart->get_cart() as $cart_item) {
			if (in_array($cart_item['product_id'], $product_ids) && in_array($cart_item['variation_id'], $variation_ids)) {
				return true;
			}
		}
		return false;
	}

	// Functional Skills Maths Level 1
	$fs_math_product_ids_to_check = array('363223');
	$fs_math_variation_ids_to_check = array('372049', '363596', '363590', '372050');

	function is_fs_math_exam_specific_variation_in_cart($product_ids, $variation_ids)
	{
		foreach (WC()->cart->get_cart() as $cart_item) {
			if (in_array($cart_item['product_id'], $product_ids) && in_array($cart_item['variation_id'], $variation_ids)) {
				return true;
			}
		}
		return false;
	}

	// Functional Skills Maths Level 2
	$fs_math_two_product_ids_to_check = array('363172');
	$fs_math_two_variation_ids_to_check = array('372044', '363607', '372043', '363602');

	function is_fs_math_two_exam_specific_variation_in_cart($product_ids, $variation_ids)
	{
		foreach (WC()->cart->get_cart() as $cart_item) {
			if (in_array($cart_item['product_id'], $product_ids) && in_array($cart_item['variation_id'], $variation_ids)) {
				return true;
			}
		}
		return false;
	}
	?>
	<div class="cart-switch-container-wrapper">
		<div class="la-cart-special-offers-overlay-layer">
			<p>We're adding the offer to the cart..</p>
		</div>
		<h3><img src="/wp-content/uploads/2022/12/fire-icon.gif"> Special Offer <img src="/wp-content/uploads/2022/12/fire-icon.gif"></h3>
		<p class="text-center">Offers are applicable only if you add now!</p>
		<?php
		if (la_matched_cart_items_belongs_to_specified_cats()) {
		?>
			<div class="cart-switch-container add-cpd-uk-iphm-qls-certificate-wrap">
				<label class="switch">
					<input type="checkbox" class="switch-box" id="add-cpd-uk-iphm-qls-certificate" data-course-id="380530" <?php if ($cpd_uk_iphm_qls_cert_in_cart) echo 'checked'; ?>>
					<span class="slider round"></span>
				</label>
				<span class="cart-switch-text">CPD UK & IPHM Accredited and Quality License Scheme Endorsed Hardcopy & PDF Certificate + Transcript + Enrolment Letter (40% off) Actual Price £142 now £85</span>
				<span class="cart-switch-prc la-best-value"><del>£142.00</del> <b>£85.00</b></span>
			</div>
			<div class="cart-switch-container add-quality-license-endorsed-certificate-wrap">
				<label class="switch">
					<input type="checkbox" class="switch-box" id="add-quality-license-endorsed-certificate" data-course-id="380471" <?php if ($qls_cert_course_in_cart) echo 'checked'; ?>>
					<span class="slider round"></span>
				</label>
				<span class="cart-switch-text">Quality License Scheme Endorsed Hardcopy Certificate + Transcript + Enrolment Letter (40% off)</span>
				<span class="cart-switch-prc"><b>£55.00</b></span>
			</div>
			<div class="cart-switch-container add-cpd-iphm-accredited-certificate-wrap">
				<label class="switch">
					<input type="checkbox" class="switch-box" id="add-cpd-iphm-accredited-certificate" data-course-id="380469" <?php if ($cpd_iphm_cert_course_in_cart) echo 'checked'; ?>>
					<span class="slider round"></span>
				</label>
				<span class="cart-switch-text">CPD & IPHM Accredited Hardcopy Certificate + Transcript + Enrolment Letter (53% off)</span>
				<span class="cart-switch-prc"><b>£35.00</b></span>
			</div>
		<?php
		}
		?>
		<div class="cart-switch-container add-student-id-wrap">
			<label class="switch">
				<input type="checkbox" class="switch-box" id="add-student-id" <?php if ($student_id_card_in_cart) echo 'checked'; ?>>
				<span class="slider round"></span>
			</label>
			<span class="cart-switch-text">Student ID Card - (3 Years Validity) - (20% Off)</span>
			<span class="cart-switch-prc"><b>£14.99</b></span>
		</div>

		<?php
		// English Level 2 Revision Materials is in the cart
		if (is_english_exam_specific_variation_in_cart($english_product_ids_to_check, $english_variation_ids_to_check)) {
		?>
			<div class="cart-switch-container add-revision-materials-wrap">
				<label class="switch">
					<input type="checkbox" class="switch-box" id="english-revision-materials" <?php if ($english_revision_materials_in_cart) echo 'checked'; ?>>
					<span class="slider round"></span>
				</label>
				<span class="cart-switch-text">Revision Materials - Functional Skills English Level 2 - (20% Off)</span>
				<span class="cart-switch-prc"><b>£49.00</b></span>
			</div>
		<?php
		}

		// Functional Skills Maths Level 1 Revision Materials is in the cart
		if (is_fs_math_exam_specific_variation_in_cart($fs_math_product_ids_to_check, $fs_math_variation_ids_to_check)) {
		?>
			<div class="cart-switch-container add-revision-materials-wrap">
				<label class="switch">
					<input type="checkbox" class="switch-box" id="revision-materials-math" <?php if ($math_revision_materials_in_cart) echo 'checked'; ?>>
					<span class="slider round"></span>
				</label>
				<span class="cart-switch-text">Revision Materials - Functional Skills Maths Level 1 - (20% Off)</span>
				<span class="cart-switch-prc"><b>£49.00</b></span>
			</div>
		<?php
		}

		// Functional Skills Maths Level 2 Revision Materials is in the cart
		if (is_fs_math_two_exam_specific_variation_in_cart($fs_math_two_product_ids_to_check, $fs_math_two_variation_ids_to_check)) {
		?>
			<div class="cart-switch-container add-revision-materials-wrap">
				<label class="switch">
					<input type="checkbox" class="switch-box" id="revision-materials-math-2" <?php if ($math_two_revision_materials_in_cart) echo 'checked'; ?>>
					<span class="slider round"></span>
				</label>
				<span class="cart-switch-text">Revision Materials - Functional Skills Maths Level 2 - (20% Off)</span>
				<span class="cart-switch-prc"><b>£49.00</b></span>
			</div>
		<?php
		}

		// Get tutor support hourly options
		function la_get_tutor_support_hourly_option($course_id)
		{
		?>
			<select class="cart-select-tutor-support-hourly">
				<option>Select Hour</option>
				<?php
				$variable_products = la_get_variable_ids_by_product_id($course_id);
				foreach ($variable_products['variation_ids'] as $variation_id) {
					$variation 		= wc_get_product($variation_id);
					$variable_title = wc_get_formatted_variation($variation, true, false, false);
					$variable_price = $variation->get_price();
					echo "<option value='{$variation_id}' data-tutor-support-variable-price='{$variable_price}'>{$variable_title}</option>";
				}
				?>
			</select>
		<?php
		}


		// Tutor support on Cart Page
		if (la_is_cart_items_belongs_to_specified_cats([331, 392, 359])) {
		?>
			<style>
				.cart-switch-container.cart-select-tutor-support-hourly-wrap {
					border: 1px solid #dadada;
					padding: 16px;
					background: #ffe9f1;
					margin-bottom: 28px;
				}

				.cart-select-tutor-support-hourly-wrap label.switch {
					top: 0;
				}

				.cart-select-tutor-support-hourly-wrap span.cart-switch-prc {
					vertical-align: middle;
				}

				.cart-select-tutor-support-hourly-wrap .cart-switch-text {
					width: calc(100% - 268px);
					margin-bottom: 50px;
					font-weight: bold;
				}

				.cart-select-tutor-support-hourly-wrap select {
					font-weight: bold;
					color: #333;
				}

				.cart-select-tutor-support-hourly-wrap p {
					margin: 0;
					font-weight: normal;
				}

				@media (max-width: 768px) {
					.cart-select-tutor-support-hourly-wrap .cart-switch-text {
						width: 100%;
						margin-bottom: 20px;
					}

					.cart-select-tutor-support-hourly-wrap span.cart-switch-prc {
						vertical-align: top;
						margin-top: 10px;
					}

					.cart-select-tutor-support-hourly-wrap .cart-select-tutor-support-hourly {
						margin-bottom: 20px;
					}
				}

				@media (max-width: 640px) {}
			</style>
			<div class="cart-switch-container cart-select-tutor-support-hourly-wrap">
				<div>
					<p style="font-weight: bold">
						<span style="color: #af1f47;margin-bottom: 15px;display: inline-block;">Get Expert Tutor Support Anytime! </span>
						<span>(Select Hours and Add to Your Cart Now!)
					</p></span>
				</div>
				<label class="switch d-none">
					<input type="checkbox" class="switch-box" id="add-tutor-support-hourly-rate">
					<span class="slider round"></span>
				</label>
				<span class="cart-switch-text">Live 1:1 Expert Tutor Support (15% Off)</span>
				<?php la_get_tutor_support_hourly_option('382458') ?>
				<span class="cart-switch-prc"><b>£30</b></span>
				<div>
					<p>** Class scheduled at your own time</p>
					<p>** Always delivered by a qualified and experienced tutor</p>
				</div>
			</div>
		<?php
		}

		// Only for GCSE Courses on Cart page
		if (la_is_cart_items_belongs_to_specified_cats([359]) && 4 == get_current_user_id()) {
		?>
			<style>
				.cart-select-tutor-support-hourly-wrap label.switch {
					top: 0;
				}

				.cart-select-tutor-support-hourly-wrap span.cart-switch-prc {
					vertical-align: middle;
				}

				.cart-select-tutor-support-hourly-wrap p {
					margin: 0;
				}
			</style>
			<div class="cart-switch-container cart-gcse-tutor-support-hourly-wrap">
				<div>
					<p style="margin-bottom: 4px"><b>Book with an expert tutor</b></p>

					<ul class="ms-0">
						<li>Class always delivered by a qualified and experienced tutor </li>
						<li>Unlimited practice materials </li>
						<li>Helping students to get their desired grade </li>
						<li>Flexible tuition options & cancel anytime </li>
					</ul>
				</div>
				<label class="switch">
					<input type="checkbox" class="switch-box" data-course-id="382811" id="add-gcse-live-tutor-support-1-session" <?php if (matched_cart_items('382811')) echo 'checked'; ?>>
					<span class="slider round"></span>
				</label>
				<span class="cart-switch-text">
					1:1 Live Tutor Support - via Zoom<br />
					1 session per week / 4 sessions per month - £96/month
				</span>
				<span class="cart-switch-prc"><b>£96</b></span>
			</div>
			<div class="cart-switch-container cart-gcse-tutor-support-hourly-wrap">
				<label class="switch">
					<input type="checkbox" class="switch-box" data-course-id="382812" id="add-gcse-live-tutor-support-2-session" <?php if (matched_cart_items('382812')) echo 'checked'; ?>>
					<span class="slider round"></span>
				</label>
				<span class="cart-switch-text">
					1:1 Live Tutor Support - via Zoom<br />
					2 session per week / 8 sessions per month - £192/month
				</span>
				<span class="cart-switch-prc"><b>£192</b></span>
				<div>
					<p>**Class scheduled at your own time </p>
				</div>
			</div>
		<?php
		}
		?>
	</div>
<?php
	$shortcode_content = ob_get_clean();
	return $shortcode_content;
}

/*
// Adding phlebotomy courses after place order button
add_action( 'woocommerce_checkout_order_review', 'add_phlebotomy_courses_after_checkout_button' );

function add_phlebotomy_courses_after_checkout_button() {
	global $woocommerce;

	// Check the desired product in cart
	function la_matched_cart_item( $product_id ){
		if ( ! WC()->cart->is_empty() ) {
			foreach(WC()->cart->get_cart() as $cart_item ) {
				if ( $cart_item['product_id'] == $product_id ) {
					return true;
				}
			}
		}
	}
}
*/
?>