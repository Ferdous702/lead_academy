<!-- Sticky CTA section for mobile device -->
<?php
	$course_regular_price       = '0';
	$course_sell_price          = '0';
	$course_carting_url         = '#';

	// if ( is_user_logged_in() && (get_current_user_id() == 4) ) {
	// 	echo '<pre>';
	// 	print_r(la_is_it_cpd_course());
	// 	echo '</pre>';
	// }

	if ( 
		in_array( '331', $course_id_array ) 			// Functional Skills
		// || in_array( '355', $course_id_array ) 		// Education & Training Category
		|| in_array( '359', $course_id_array ) 			// GCSE Courses
		|| in_array( '392', $course_id_array ) 			// ESOL
		// BSL Courses
		|| ( '365519' == $current_product_id )
		|| ( '377744' == $current_product_id )
		// Exceptional Course Ids from BSL Course Cat
		|| ( '396278' == $current_product_id ) 			// Level 3 Diploma in Adult Care
		|| ( '364465' == $current_product_id ) 			// British Sign Language Level 1
		|| ( '364491' == $current_product_id ) 			// British Sign Language Level 2
		|| ( '394447' == $current_product_id ) 			// British Sign Language Level 3
		|| ( '447672' == $current_product_id )			// Level 1 Health and Safety in a Construction Environment (Leading to CSCS Green Card)
		|| ( '405511' == $current_product_id )			// Laser Awards – Online Level 2 Award for Personal Licence Holders RQF (APLH)
		|| ( '368285' == $current_product_id )			// Shipping charge Product from Others Category
		// Exceptional Course Ids for Phlebotomy Courses
		|| in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)
	) {	
		if ( 
			//'394447' == $current_product_id ||	// Level 3 Certificate in British Sign Language (RQF) - Live Zoom Class
			//'364491' == $current_product_id ||	// Level 2 Certificate in British Sign Language (RQF) - Live Zoom Class
			//'364465' == $current_product_id ||	// Level 1 Certificate in British Sign Language (RQF) - Live Zoom Class
			'368889' == $current_product_id ||	// Level 3 Award in Education and Training | AET Course
			'368909' == $current_product_id ||	// Level 4 Award in Education and Training
			'368919' == $current_product_id	||	// Level 5 Award in Education and Training
			in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)
		) {
		?>
		<div class="bottom-fixed-phlebotomy-cta-mobile d-block d-sm-none d-flex justify-content-between">
			<div id="exam-board-total">
				<span class="d-block"><span class="course-sale-price"><?php echo get_woocommerce_currency_symbol()?><?php echo $la_phleb_course_sell_price?><small style="font-size: 15px;">+VAT</small></span></span>
				<span class="d-block"><?php echo get_woocommerce_currency_symbol()?><span class="course-prev-price"><?php echo $la_phleb_course_regular_price?></span></span>
			</div>
			<button id="phlebotomy-modal-enroll-btn">Buy Now</button>
		</div>
		<?php
		} elseif ( '383736' == $current_product_id || '365519' == $current_product_id || '377744' == $current_product_id ) {
			?>
			<!-- <div class="bottom-fixed-bsl-cta-mobile d-block d-sm-none d-flex justify-content-between"> -->
			<div class="bottom-fixed-bsl-cta-mobile d-none justify-content-between">
				<div id="exam-board-total">
					<span class="d-block"><?php echo get_woocommerce_currency_symbol()?><span class="course-sale-price"><?php echo $course_sell_price?></span></span>
					<span class="d-block"><?php echo get_woocommerce_currency_symbol()?><span class="course-prev-price"><?php echo $course_regular_price?></span></span>
				</div>
				<a href="#" id="bsl-modal-enroll-btn">Buy Now</a>
			</div>
			<?php
		} else {
		?>
		<div class="bottom-fixed-cta-mobile d-block d-sm-none d-flex justify-content-between">
			<div id="exam-board-total">
				<span class="d-block"><span class="course-sale-price"><?php echo get_woocommerce_currency_symbol()?><?php echo $course_sell_price?><small style="font-size: 15px;">+VAT</small></span></span>
				<span class="d-block"><?php echo get_woocommerce_currency_symbol()?><span class="course-prev-price"><?php echo $course_regular_price?></span></span>
			</div>
			<a href="<?php echo $course_carting_url?>" id="enroll-btn">Buy Now</a>

		</div>
		<?php
		}
	} else {
		if ( $product->get_type() == 'variable' ) {
			$variable_producs       = la_get_variable_ids_by_product_id( $current_product_id );
			$variable_first_id      = $variable_producs['variation_ids'][0];
			$variations             = la_get_variable_title_price_by_varid( $variable_first_id);
			$course_regular_price   = $variations['variations'][0];
			$course_sell_price      = $variations['variations'][1];
			$course_carting_url     = '/cart?add-to-cart='.$variable_first_id;
		}
		?>
		<div class="bottom-fixed-cta-mobile d-block d-sm-none d-flex justify-content-between">
			<div id="exam-board-total">
				<span class="d-block"><span class="course-sale-price"><?php echo get_woocommerce_currency_symbol()?><?php echo $course_sell_price?><small style="font-size: 15px;">+VAT</small></span></span>
				<span class="d-block"><?php echo get_woocommerce_currency_symbol()?><span class="course-prev-price"><?php echo $course_regular_price?></span></span>
			</div>
            <button type="button"
                    data-variation-id="<?= $variable_first_id ?>"
                    data-quantity="1"
                    class="btn custom-add-to-cart" >
                <?php echo  __('BOOK NOW'); ?>
            </button>

		</div>
		<?php
	}
?>
