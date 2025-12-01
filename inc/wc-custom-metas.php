<?php
// Set currimulum image size
add_image_size('la-course-curriculum-img-80x50', 80, 50, true);

// Get products functions
function la_get_wc_products_with_ids(){
	$all_products = [];
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
        'post_status' => 'publish'
    );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
		// Product loop
		while ( $loop->have_posts() ) : $loop->the_post();
			global $product;
			$product_id = $loop->post->ID;
			$all_products[$product_id] = get_the_title();
		endwhile;
	} else {
		$all_products[] = '<h3>Sorry, no course found!</h3>';
	}

    // Resetting the query
    wp_reset_query();

	return $all_products;
}


/**
 * Callback function to show Course Tab Assignment field only for product ID 371100
 */
function show_course_tab_assignment_for_product_371100( $field_args, $field ) {
	// Get the current post ID
	$post_id = isset( $_GET['post'] ) ? intval( $_GET['post'] ) :
			   ( isset( $_POST['post_ID'] ) ? intval( $_POST['post_ID'] ) : 0 );
	
	// Only show for product ID 371100
	return $post_id === 371100;
}

add_action( 'cmb2_admin_init', 'wc_product_metaboxes' );
function wc_product_metaboxes() {
	// LMS Courses metas
	$lmsc_metas = new_cmb2_box( array(
		'id'            => 'lms_courses_options',
		'title'         => 'LMS Courses Options',
		// 'desc'         	=> 'Please don\'t add more than 2 boards, extra boards will be ignored.',
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	) );
	$lmsc_metas->add_field( array(
		'name' => 'LMS Course ID',
		'desc' => 'Enter the course ID',
		// 'default' => 'Choose Your Booking Option',
		'id'   => 'lms_course_id',
		'type' => 'text',
	) );

	$lmsc_metas->add_field( array(
		'name' => 'NEW LMS Course ID',
		'desc' => 'Enter the NEW LMS Course ID',
		// 'default' => 'Choose Your Booking Option',
		'id'   => 'new_lms_course_id',
		'type' => 'text',
	) );

	$lmsc_metas->add_field( array(
		'name'    => 'Course Check Complete ?',
		'desc'    => 'Input Course Checking status',
		'id'      => 'lms_course_status',
		'type'    => 'select',
		'default' => 'No',
		'options' => array(
			'Yes' => 'Yes',
			'No'  => 'No',
		),
	) );


	// Special template Section
	
		$special_template = new_cmb2_box( array(
		'id'            => 'special_template_options',
		'title'         => 'Special Template Options',
		// 'desc'         	=> 'Please don\'t add more than 2 boards, extra boards will be ignored.',
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	) );

		$special_template->add_field( array(
		'name'    => 'Email Template Status ?',
		'desc'    => 'if its needed modify any email section then select Yes and and contact email marketer for create/modify template omnisend',
		'id'      => 'special_template_status',
		'type'    => 'select',
		'default' => 'No',
		'options' => array(
			'Yes' => 'Yes',
			'No'  => 'No',
		),
	) );


		// New Meta Box for Combo Course Tabs
    $combo_tabs_metas = new_cmb2_box(array(
        'id'            => 'combo_course_tab_options',
        'title'         => 'Combo Course Tab Options',
        'object_types'  => array('product'),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ));

    $combo_tabs_group_id = $combo_tabs_metas->add_field(array(
        'id'          => 'combo_course_tabs_group',
        'type'        => 'group',
        'repeatable'  => true,
        'options'     => array(
            'group_title'   => 'Tab {#}',
            'add_button'    => 'Add Another Tab',
            'remove_button' => 'Remove Tab',
            'closed'        => true,
            'sortable'      => true,
        ),
    ));

    $combo_tabs_metas->add_group_field($combo_tabs_group_id, array(
        'name' => 'Course Type Slug',
        'desc' => 'Enter the exact slug for the course type attribute (e.g., "phlebotomy-cannulation-2-day"). Find this in Products > Attributes. <strong>Do not add suffixes like "_compact".</strong>',
        'id'   => 'course_type_slug',
        'type' => 'text',
    ));

    $combo_tabs_metas->add_group_field($combo_tabs_group_id, array(
        'name' => 'Tab Introductory Text',
        'desc' => 'To create a link that switches tabs, use this HTML in the "Text" editor: <code>&lt;a href="#" class="switch-tab-link" data-target="target-course-slug"&gt;link text&lt;/a&gt;</code>. Replace "target-course-slug" with the slug of the tab you want to switch to.',
        'id'   => 'tab_intro_text',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
    ));

    $combo_tabs_metas->add_group_field($combo_tabs_group_id, array(
        'name' => 'Duration Tag',
        'desc' => 'Enter the text for the duration tag (e.g., "1 Day", "2 Days").',
        'id'   => 'tab_duration_tag',
        'type' => 'text',
    ));

	// COMPLETE NAIL TECHNICIAN COURSE Start
	$nail_technician_metas = new_cmb2_box(array(
		'id'            => 'nail_technician_course_options',
        'title'         => 'Complete Nail Technician Course Days List',
        'object_types'  => array( 'product', ), // Post type
		'show_on'  		=> array( 'key' => 'id', 'value' => array(394220, 409404 , 438477 , 438480 ,440128 , 440908) ), // Post IDs
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true, // Show field names on the left
	));
	$nail_technician_group_id = $nail_technician_metas->add_field( array(
		'id'          => 'nail_technician_course_group',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'List {#}',
			'add_button'    => 'Add Another List',
			'remove_button' => 'Remove List',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	$nail_technician_metas->add_group_field( $nail_technician_group_id, array(
		'name' => 'Day Title',
		'desc' => 'Enter Day Title',
		'id'   => 'nail_technician_day_title',
		'type' => 'text',
	) );
	$nail_technician_metas->add_group_field( $nail_technician_group_id, array(
		'name' => 'Day Time',
		'desc' => 'Enter Day Time',
		'id'   => 'nail_technician_day_time',
		'type' => 'text',
	) );
	$nail_technician_metas->add_group_field( $nail_technician_group_id, array(
        'name' => 'Day Content',
        'desc' => 'Enter Day Content',
        'id'   => 'nail_technician_day_content',
        'type' => 'wysiwyg',
		'options' => array(),
	) );

	$nail_technician_after_title = new_cmb2_box(array(
		'id'            => 'nail_technician_after_title',
        'title'         => 'After Title Text',
        'object_types'  => array( 'product', ), // Post type
		'show_on'  		=> array( 'key' => 'id', 'value' => array(394220, 409404 , 438477 , 438480 , 440128 , 440908) ), // Post IDs
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true, // Show field names on the left
	));
	$nail_technician_after_title->add_field( array(
		'name' => 'After Title Text',
		'desc' => 'Enter After Title Text',
		'id'   => 'la_nail_technician_after_title',
		'type' => 'textarea',
	) );

	$nail_technician_includes = new_cmb2_box(array(
		'id'            => 'nail_technician_includes',
        'title'         => 'Complete Nail Technician Includes',
        'object_types'  => array( 'product', ), // Post type
		'show_on'  		=> array( 'key' => 'id', 'value' => array(394220, 409404 , 438477 , 438480 ,440128 , 440908) ), // Post IDs
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true, // Show field names on the left
	));
	$nail_technician_includes_group_id = $nail_technician_includes->add_field( array(
		'id'          => 'nail_technician_includes_group',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'List {#}',
			'add_button'    => 'Add Another List',
			'remove_button' => 'Remove List',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	$nail_technician_includes->add_group_field( $nail_technician_includes_group_id, array(
		'name' => 'Item Icon',
		'desc' => 'Give Item Image',
		'id'   => 'nail_technician_includes_image',
		'type' => 'file',
		'query_args' => array( 'type' => 'image' ),
		'text' => array(
			'add_upload_files_text' => 'Add or Upload Image',
			'remove_image_text' => 'Remove Image',
			'file_text' => 'File',
			'file_download_text' => 'Download',
			'remove_text' => 'Remove',
		),
	) );
	$nail_technician_includes->add_group_field( $nail_technician_includes_group_id, array(
		'name' => 'Item Title',
		'desc' => 'Enter Item Title',
		'id'   => 'nail_technician_includes_title',
		'type' => 'text',
	) );
	$nail_technician_includes->add_group_field( $nail_technician_includes_group_id, array(
		'name' => 'Item Content',
		'desc' => 'Enter Item Content',
		'id'   => 'nail_technician_includes_content',
		'type' => 'text',
	) );

	$nail_technician_description = new_cmb2_box(array(
		'id'            => 'nail_technician_course_description',
        'title'         => 'Course Description',
        'object_types'  => array( 'product', ), // Post type
		'show_on'  		=> array( 'key' => 'id', 'value' => array(394220, 409404 , 438477 , 438480 ,440128 , 440908) ), // Post IDs
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true, // Show field names on the left
	));
	$nail_technician_description->add_field( array(
		'name' => 'Course Description Title',
		'desc' => 'Enter Course Description Title',
		'id'   => 'la_nail_technician_course_description_title',
		'type' => 'text',
	) );
	$nail_technician_description->add_field( array(
		'name' => 'Course Description',
		'desc' => 'Enter Course Description',
		'id'   => 'la_nail_technician_course_description',
		'type' => 'wysiwyg',
		'options' => array(),
	) );

	$nail_technician_highlights = new_cmb2_box(array(
		'id'            => 'nail_technician_course_highlights',
        'title'         => 'Course Highlights',
        'object_types'  => array( 'product', ), // Post type
		'show_on'  		=> array( 'key' => 'id', 'value' => array(394220, 409404 , 438477 , 438480 ,440128 , 440908) ), // Post IDs
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true, // Show field names on the left
	));
	$nail_technician_highlights->add_field( array(
		'name' => 'Course highlights Title',
		'desc' => 'Enter Course Highlights Title',
		'id'   => 'la_nail_technician_course_highlights_title',
		'type' => 'text',
	) );
	$nail_technician_highlights->add_field( array(
		'name' => 'Course Highlights',
		'desc' => 'Enter Course Highlights',
		'id'   => 'la_nail_technician_course_highlights',
		'type' => 'wysiwyg',
		'options' => array(),
	) );

	$nail_technician_who_is = new_cmb2_box(array(
		'id'            => 'nail_technician_who_is',
        'title'         => 'Who is this Nail Technician Course For?',
        'object_types'  => array( 'product', ), // Post type
		'show_on'  		=> array( 'key' => 'id', 'value' => array(394220, 409404 , 438477 , 438480 ,440128 , 440908) ), // Post IDs
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true, // Show field names on the left
	));
	$nail_technician_who_is->add_field( array(
		'name' => 'Who is this Nail Technician Course For? Title',
		'desc' => 'Enter Who is this Nail Technician Course For? Title',
		'id'   => 'la_nail_technician_who_is_title',
		'type' => 'text',
	) );
	$nail_technician_who_is->add_field( array(
		'name' => 'Who is this Nail Technician Course For? Description',
		'desc' => 'Enter Who is this Nail Technician Course For? Description',
		'id'   => 'la_nail_technician_who_is',
		'type' => 'wysiwyg',
		'options' => array(),
	) );

	$nail_technician_why_train = new_cmb2_box(array(
		'id'            => 'nail_technician_why_train',
        'title'         => 'WHY TRAIN WITH US',
        'object_types'  => array( 'product', ), // Post type
		'show_on'  		=> array( 'key' => 'id', 'value' => array(394220, 409404 , 438477 , 438480 , 440128 , 440908) ), // Post IDs
        'context'       => 'normal',
        'priority'      => 'default',
        'show_names'    => true, // Show field names on the left
	));
	$nail_technician_why_train->add_field( array(
		'name' => 'WHY TRAIN WITH US Title',
		'desc' => 'Enter WHY TRAIN WITH US Title',
		'id'   => 'la_nail_technician_why_train_title',
		'type' => 'text',
	) );
	$nail_technician_why_train->add_field( array(
		'name' => 'WHY TRAIN WITH US Description',
		'desc' => 'Enter WHY TRAIN WITH US Description',
		'id'   => 'la_nail_technician_why_train_desc',
		'type' => 'wysiwyg',
		'options' => array(),
	) );
	// COMPLETE NAIL TECHNICIAN COURSE Start
	
	// LA Overview
	$la_session_overview = new_cmb2_box( array(
		'id'            => 'la_session_overview',
		'title'         => 'LA Session Overview',
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	) );
	$la_session_overview->add_field( array(
		'name' => 'LA Session Overview Title',
		'desc' => 'Enter LA Session Overview Title',
		'id'   => 'la_session_overview_title',
		'type' => 'text',
	) );
	$la_session_overview->add_field(array(
		'name' => 'Session Overview Image',
		'desc' => 'Give Session Overview Image',
		'id'   => 'la_session_overview_image',
		'type' => 'file_list',
		'query_args' => array( 'type' => 'image' ),
		'text' => array(
			'add_upload_files_text' => 'Add or Upload Image',
			'remove_image_text' => 'Remove Image',
			'file_text' => 'File',
			'file_download_text' => 'Download',
			'remove_text' => 'Remove',
		),
	) );

		$la_session_overview->add_field( array(
		'name' => 'Show Course Session Overview Image gallery?',
		'desc' => 'You Could Show/Hide The Practical Session Overview Here.',
		'id'   => 'image_gallery_btns',
		'type' => 'radio_inline',
		'options' => [
			'show' => 'Show',
			'hide' => 'Hide',
		],
		'default' => 'show',
	));


	// LA Related Product
	$la_related_product = new_cmb2_box( array(
		'id'            => 'la_related_product',
		'title'         => 'LA Related Product',
		'object_types'  => array( 'product', 'page'), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	) );
	$la_related_product_group_id = $la_related_product->add_field( array(
		'id'          => 'la_related_product_group',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Product {#}',
			'add_button'    => 'Add Another Product',
			'remove_button' => 'Remove Product',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	$la_related_product->add_group_field( $la_related_product_group_id, array(
		'name' => 'Product ID',
		'desc' => 'Enter Product ID',
		'id'   => 'product_id',
		'type' => 'text',
	) );
	
	// Video URL metas
	$video_opt_cmb = new_cmb2_box( array(
		'id'            => 'wc_product_video_url',
		'title'         => 'Video Option',
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	) );
	$video_opt_cmb->add_field( array(
		'name' => 'Button Title',
		'desc' => 'Enter the Button title',
		'default' => 'Watch Now',
		'id'   => 'watch_video_btn',
		'type' => 'text',
	) );
	$video_opt_cmb->add_field( array(
		'name' => 'Video URL',
		'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
		'id'   => 'watch_video_url',
		'type' => 'oembed',
	) );

	$right_side_bar_content = new_cmb2_box( array(
		'id'            => 'right_side_bar_content',
		'title'         => 'Right Side Bar Content',
		'object_types'  => array( 'product', 'page'), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	) );
	$right_side_bar_content->add_field( array(
		'name' => 'Learners Achievement Image',
		'desc' => 'Give Learners Achievement Image',
		'id'   => 'la_learner_achievements_image',
		'type' => 'file',
		'query_args' => array( 'type' => 'image' ),
		'text' => array(
			'add_upload_files_text' => 'Add or Upload Image',
			'remove_image_text' => 'Remove Image',
			'file_text' => 'File',
			'file_download_text' => 'Download',
			'remove_text' => 'Remove',
		),
	) );

		$right_side_bar_content->add_field( array(
		'name' => 'Show Course Learners Achievement Image?',
		'desc' => 'You Could Show/Hide Learners Achievement Image Here.',
		'id'   => 'learner_achievement_btns',
		'type' => 'radio_inline',
		'options' => [
			'show' => 'Show',
			'hide' => 'Hide',
		],
		'default' => 'show',
	));

	$right_side_bar_content->add_field( array(
		'name' => 'Practical Session Video URL',
		'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
		'id'   => 'practical_session_video_url',
		'type' => 'oembed',
	) );
	$right_side_bar_content->add_field( array(
		'name' => 'Practical Session Video Image',
		'desc' => 'Give Practical Session Video Image',
		'id'   => 'practical_session_video_img',
		'type' => 'file',
		'query_args' => array( 'type' => 'image' ),
		'text' => array(
			'add_upload_files_text' => 'Add or Upload Image',
			'remove_image_text' => 'Remove Image',
			'file_text' => 'File',
			'file_download_text' => 'Download',
			'remove_text' => 'Remove',
		),
	) );

		$right_side_bar_content->add_field( array(
		'name' => 'Show Practical Session Video & Image?',
		'desc' => 'You Could Show/Hide Practical Session Video & Image Here.',
		'id'   => 'practical_session_video_img_btns',
		'type' => 'radio_inline',
		'options' => [
			'show' => 'Show',
			'hide' => 'Hide',
		],
		'default' => 'show',
	));

	$right_side_bar_content->add_field( array(
		'name' => 'Success Story Video URL',
		'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
		'id'   => 'success_story_video_url',
		'type' => 'oembed',
	) );
	$right_side_bar_content->add_field( array(
		'name' => 'PSuccess Story Video Image',
		'desc' => 'Give Success Story Video Image',
		'id'   => 'success_story_video_img',
		'type' => 'file',
		'query_args' => array( 'type' => 'image' ),
		'text' => array(
			'add_upload_files_text' => 'Add or Upload Image',
			'remove_image_text' => 'Remove Image',
			'file_text' => 'File',
			'file_download_text' => 'Download',
			'remove_text' => 'Remove',
		),
	) );


		$right_side_bar_content->add_field( array(
		'name' => 'Show Success Story Video & Image?',
		'desc' => 'You Could Show/Hide Success Story Video & Image Here.',
		'id'   => 'Success_Story_video_img_btns',
		'type' => 'radio_inline',
		'options' => [
			'show' => 'Show',
			'hide' => 'Hide',
		],
		'default' => 'show',
	));

	$top_bar_content = new_cmb2_box( array(
	'id'            => 'top_bar_content',
	'title'         => 'Top Bar IN-HOUSE Section',
	'object_types'  => array( 'product', 'page'), // Post type
	'context'       => 'normal',
	'priority'      => 'default',
	'show_names'    => true, // Show field names on the left
) );

    $top_bar_content->add_field( array(
	'name' => 'Show In-House Section?',
	'desc' => 'You Could Show/Hide In-House Section Here.',
	'id'   => 'in_house_section_btns',
	'type' => 'radio_inline',
	'options' => [
		'show' => 'Show',
		'hide' => 'Hide',
	],
	'default' => 'show',
));


	// Cart Suggestion Meta
	$cart_suggestion_cmb = new_cmb2_box( array(
		'id'            => 'cart_suggestion_meta',
		'title'         => 'Cart Suggestion Meta',
		'object_types'  => array( 'cart-suggestion', ), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	) );

	$cart_target_group_id = $cart_suggestion_cmb->add_field( array(
		'id'          => 'cart_target_group',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Target {#}',
			'add_button'    => 'Add Another Target',
			'remove_button' => 'Remove Target',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	$cart_suggestion_cmb->add_group_field( $cart_target_group_id, array(
		'name' => 'Target ID',
		'desc' => 'Enter Target ID',
		'id'   => 'cart_target_id',
		'type' => 'text',
	) );

	$cart_suggestion_cmb->add_field( array(
		'name' => 'This Product ID',
		'desc' => 'Input This Product ID',
		'id'   => 'cart_suggestion_this',
		'type' => 'text',
	) );
	$cart_group_id = $cart_suggestion_cmb->add_field( array(
		'id'          => 'cart_group',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Variation {#}',
			'add_button'    => 'Add Another Variation',
			'remove_button' => 'Remove Variation',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	$cart_suggestion_cmb->add_group_field( $cart_group_id, array(
		'name' => 'Variation ID',
		'desc' => 'Enter Variation ID',
		'id'   => 'cart_variation_id',
		'type' => 'text',
	) );

	// Success Story Video metas
	$success_video_opt_cmb = new_cmb2_box( array(
		'id'            => 'wc_product_success_video_url',
		'title'         => 'Success Stories Video Option',
		// 'desc'         	=> 'Please don\'t add more than 2 boards, extra boards will be ignored.',
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	) );
	$success_video_opt_cmb->add_field( array(
		'name' => 'Success Stories Video URL',
		'desc' => 'Enter a youtube, twitter, or instagram URL. Supports services listed at <a href="http://codex.wordpress.org/Embeds">http://codex.wordpress.org/Embeds</a>.',
		'id'   => 'watch_success_video_url',
		'type' => 'oembed',
	) );
	
	// FAQ Metas
	$faq_cmb = new_cmb2_box( array(
		'id'            => 'wc_product_faqs',
		'title'         => 'Product FAQ',
		'object_types'  => array( 'page', 'product', 'gcse' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$faq_group_id = $faq_cmb->add_field( array(
		'id'          => 'product_faqs',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Item {#}',
			'add_button'    => 'Add Another Item',
			'remove_button' => 'Remove Item',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	$faq_cmb->add_group_field( $faq_group_id, array(
		'name' => 'FAQ Title',
		'desc' => 'Enter the FAQ title',
		'id'   => 'faq_title',
		'type' => 'text',
	) );
	$faq_cmb->add_group_field( $faq_group_id, array(
		'name' => 'FAQ Text',
		'desc' => 'Enter the FAQ text',
		'id'   => 'faq_text',
		'type' => 'textarea',
	) );

    // Curriculums metas
    $curr_cmb = new_cmb2_box( array(
		'id'            => 'wc_product_curr',
		'title'         => 'Course Curriculums',
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$curr_group_id = $curr_cmb->add_field( array(
		'id'          => 'product_curriculums',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Item {#}',
			'add_button'    => 'Add Another Item',
			'remove_button' => 'Remove Item',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	$curr_cmb->add_group_field( $curr_group_id, array(
		'name' => 'Curriculum Title',
		'desc' => 'Enter the curriculum title',
		'id'   => 'curr_title',
		'type' => 'text',
	) );
	// $curr_cmb->add_group_field( $curr_group_id, array(
	// 	'name'    => 'Curriculum Image',
	// 	'desc'    => 'Upload the image',
	// 	'id'      => 'curr_image',
	// 	'type'    => 'file_list',
	// 	'query_args' => array( 'type' => 'image' ), // Only images attachment
	// 	// Optional, override default text strings
	// 	'text' => array(
	// 		'add_upload_files_text' => 'Add Images', // default: "Add or Upload Files"
	// 		// 'remove_image_text' => 'Replacement', // default: "Remove Image"
	// 		'file_text' => 'Image', // default: "File:"
	// 		// 'file_download_text' => 'Replacement', // default: "Download"
	// 		// 'remove_text' => 'Replacement', // default: "Remove"
	// 	),
	// ) );
	$curr_cmb->add_group_field( $curr_group_id, array(
		'name' => 'Curriculum Text',
		'desc' => 'Enter the Curriculum text',
		'id'   => 'curr_text',
		'type' => 'text',
		'repeatable' => true,
	) );
	$curr_cmb->add_group_field( $curr_group_id, array(
		'name' => 'Curriculum Duration',
		'desc' => 'Enter the Curriculum Duration',
		'id'   => 'curr_dur',
		'type' => 'text',
		'repeatable' => true,
	) );


    // Accreditation metas
    $acc_cmb = new_cmb2_box( array(
		'id'            => 'wc_product_acc',
		'title'         => 'Course Accreditation',
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$acc_cmb->add_field( array(
		'name'    => 'Accreditation',
		'desc'    => 'Accreditation goes here',
		'id'      => 'wc_product_accreditation',
		'type'    => 'wysiwyg',
		'options' => array(),
	) );


    // Certification metas
    $acc_cmb = new_cmb2_box( array(
		'id'            => 'wc_product_cert',
		'title'         => 'Course certification',
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$acc_cmb->add_field( array(
		'name'    => 'Certification',
		'desc'    => 'Certification goes here',
		'id'      => 'wc_product_certification',
		'type'    => 'wysiwyg',
		'options' => array(),
	) );


    // Exam Board metas
    $exm_borad_cmb = new_cmb2_box( array(
		'id'            => 'wc_product_exm_board',
		'title'         => 'Exam Board Options',
		// 'desc'         	=> 'Please don\'t add more than 2 boards, extra boards will be ignored.',
		'object_types'  => array( 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	) );
	$exm_borad_cmb->add_field( array(
		'name' => 'Board Section Title',
		'desc' => 'Enter the board section title',
		'default' => 'Choose Your Booking Option',
		'id'   => 'board_sec_title',
		'type' => 'text',
	) );
	$exm_borad_cmb->add_field( array(
		'name' => 'Show Course Attribute Buttons on Board Option?',
		'desc' => 'You Could Show/Hide The Course Attributes Buttons Here.',
		'id'   => 'board_sec_btns',
		'type' => 'radio_inline',
		'options' => [
			'show' => 'Show',
			'hide' => 'Hide',
		],
		'default' => 'show',
	) );

	// Right Sidebar Course Facilities Option metas
	$course_facilities_options_cmb = new_cmb2_box( array(
		'id'            => 'wc_product_facilities_options',
		'title'         => 'Right Sidebar Course Facilities Option',
		// 'desc'         	=> 'Please don\'t add more than 2 boards, extra boards will be ignored.',
		'object_types'  => array( 'product','page' ), // Post type
		//'show_on'  		=> array( 'key' => 'id', 'value' => FACE_2_FACE_PRODUCT_CODES ), // Post IDs
		'context'       => 'normal',
		'priority'      => 'default',
		'show_names'    => true, // Show field names on the left
	));
	$course_facilities_options_cmb->add_field( array(
		'name' => 'First Item Title',
		'desc' => 'Enter the first item title. Ex: Duration: 13 Hours',
		// 'default' => 'Choose Your Booking Option',
		'id'   => 'course_facilities_first_title',
		'type' => 'text',
	));
	$course_facilities_options_cmb->add_field( array(
		'name' => 'Second Item Title',
		'desc' => 'Enter the second item title. Ex: Instant Access',
		// 'default' => 'Choose Your Booking Option',
		'id'   => 'course_facilities_second_title',
		'type' => 'text',
	));
	$course_facilities_metas_group_id = $course_facilities_options_cmb->add_field( array(
		'id'          => 'course_facilities_meta_group',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Course Facilities Item {#}',
			'add_button'    => 'Add Another Item',
			'remove_button' => 'Remove Item',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	));
	$course_facilities_options_cmb->add_group_field( $course_facilities_metas_group_id, array(
		'name' => 'Icon',
		'id'   => 'course_facilities_image',
		'desc' => 'Upload Course Facilities Image',
		'type' => 'file_list',
		'query_args' => array( 'type' => 'image' ),
		'text' => array(
			'add_upload_files_text' => 'Add or Upload Image',
			'remove_image_text' => 'Remove Image',
			'file_text' => 'File',
			'file_download_text' => 'Download',
			'remove_text' => 'Remove',
		),
	));
//	$course_facilities_options_cmb->add_group_field( $course_facilities_metas_group_id, array(
//		'name' => 'Course Facilities Text One',
//		'desc' => 'Enter Course Facilities',
//		'id'   => 'course_facilities_text_a',
//		'type' => 'text',
//	));
	$course_facilities_options_cmb->add_group_field( $course_facilities_metas_group_id, array(
		'name' => 'Course Facilities Text Two',
		'desc' => 'Enter Course Facilities',
		'id'   => 'course_facilities_text_b',
		'type' => 'text',
	));


    // Reviews metas
    $course_revs = new_cmb2_box( array(
		'id'            => 'la_course_reviews_el',
		'title'         => 'Course Reviews',
		'object_types'  => array( 'page', 'product', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$course_revs_group_id = $course_revs->add_field( array(
		'id'          => 'la_course_reviews',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Item {#}',
			'add_button'    => 'Add Another Item',
			'remove_button' => 'Remove Item',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	$course_revs->add_group_field( $course_revs_group_id, array(
		'name' => 'Reviewer Name',
		'desc' => 'Enter the Reviewer Name',
		'id'   => 'la_course_reviewer_name',
		'type' => 'text',
	) );
	$course_revs->add_group_field( $course_revs_group_id, array(
		'name' => 'Review Title',
		'desc' => 'Enter the Review title',
		'id'   => 'la_course_review_title',
		'type' => 'text',
	) );
	$course_revs->add_group_field( $course_revs_group_id, array(
		'name' => 'Review Star',
		'desc' => 'Enter 4 or 5 Star',
		'id'   => 'la_course_review_star',
		'type' => 'text',
		'attributes' => array(
			'type' => 'number',
		),
	) );
	$course_revs->add_group_field( $course_revs_group_id, array(
		'name' => 'Review Date',
		'desc' => 'Enter the Review date',
		'id'   => 'la_course_review_date',
		'type' => 'text_date',
		'date_format' => 'M d, Y',
	) );
	$course_revs->add_group_field( $course_revs_group_id, array(
		'name' => 'Review',
		'desc' => 'Enter the Review',
		'id'   => 'la_course_review',
		'type' => 'textarea',
	) );

	$course_revs->add_group_field( $course_revs_group_id, array(
		'name' => 'User Image',
		'desc' => 'Give User Image',
		'id'   => 'la_google_user_image',
		'type' => 'file',
		'query_args' => array( 'type' => 'image' ),
		'text' => array(
			'add_upload_files_text' => 'Add or Upload Image',
			'remove_image_text' => 'Remove Image',
			'file_text' => 'File',
			'file_download_text' => 'Download',
			'remove_text' => 'Remove',
		),
	) );

	// GCSE Custom post type metas
	$gcse_meta = new_cmb2_box( array(
		'id'            => 'la_gcse_course_metas',
		'title'         => 'Course Options',
		'object_types'  => array( 'gcse', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$gcse_meta->add_field( array(
		'name' => 'Select GCSE Course',
		'desc' => 'Select the Course',
		'id'   => 'la_gcse_course_id',
		'type' => 'select',
		'options' => la_get_wc_products_with_ids()
	) );

		// Venue Custom post type metas
		$venue_meta = new_cmb2_box( array(
		'id'            => 'la_venue_metas',
		'title'         => 'Venue Options',
		'object_types'  => array( 'venue', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		) );

		$venue_meta->add_field( array(
			'name' => 'Venue Map Location',
			'desc' => 'Give Venue Map Location (preferably an iframe embed URL from Google Maps, etc.)',
			'id'   => 'la_venue_location',
			'type' => 'text_url'
		) );

		$venue_meta->add_field( array(
			'name' => 'Venue Images',
			'desc' => 'Upload images for the venue gallery',
			'id'   => 'la_venue_images',
			'type' => 'file_list',
			'query_args' => array( 'type' => 'image' ),
			'text' => array(
				'add_upload_files_text' => 'Add or Upload Image',
				'remove_image_text' => 'Remove Image',
				'file_text' => 'File',
				'file_download_text' => 'Download',
				'remove_text' => 'Remove',
			),
		) );

		// General Textarea Fields for information:
		$venue_meta->add_field( array(
			'name' => 'Address',
			'desc' => 'Enter the full address of the venue.',
			'id'   => 'la_venue_address',
			'type' => 'textarea_small'
		) );

		$venue_meta->add_field( array(
			'name' => 'Contact Information',
			'desc' => 'Enter contact details (e.g., Phone: 0300 124 5585, Email: info@example.com).',
			'id'   => 'la_venue_contact',
			'type' => 'textarea_small'
		) );

		$venue_meta->add_field( array(
			'name' => 'Transportation Access Introduction',
			'desc' => 'Provide an introductory text for the transportation access section (e.g., "Our venue location has excellent transportation access...").',
			'id'   => 'la_venue_transport_intro',
			'type' => 'textarea_small'
		) );

		// Repeater Fields for Transportation Details:

// Group: Transportation: By Tram/Train
    $venue_meta->add_field( array(
        'id'          => 'la_venue_transport_tram_train_group',
        'type'        => 'group',
        'description' => 'Add individual points about tram/train access. You can add extra formatted details for each point.',
        'options'     => array(
            'group_title'   => __( 'Tram/Train Point {#}', 'textdomain' ),
            'add_button'    => __( 'Add Tram/Train Point', 'textdomain' ),
            'remove_button' => __( 'Remove Tram/Train Point', 'textdomain' ),
            'sortable'      => true,
            'closed'        => true,
        ),
        'fields'      => array(
            array(
                'name' => 'Detail',
                'desc' => 'Enter the main sentence for this point (e.g., "Salford Quays (nearest)").',
                'id'   => 'detail',
                'type' => 'textarea_small',
            ),
            array(
                'name'    => 'Formatted Details (Optional)',
                'desc'    => 'Add optional formatted text, images, or lists for this specific point. This will appear in a toggle on the front-end.',
                'id'      => 'formatted_detail',
                'type'    => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 8,
                ),
            ),
        ),
    ) );

    // Group: Transportation: By Bus
    $venue_meta->add_field( array(
        'id'          => 'la_venue_transport_bus_group',
        'type'        => 'group',
        'description' => 'Add individual points about bus access.',
        'options'     => array(
            'group_title'   => __( 'Bus Point {#}', 'textdomain' ),
            'add_button'    => __( 'Add Bus Point', 'textdomain' ),
            'remove_button' => __( 'Remove Bus Point', 'textdomain' ),
            'sortable'      => true,
            'closed'        => true,
        ),
        'fields'      => array(
            array(
                'name' => 'Detail',
                'desc' => 'Enter the main sentence for this bus point.',
                'id'   => 'detail',
                'type' => 'textarea_small',
            ),
            array(
                'name'    => 'Formatted Details (Optional)',
                'desc'    => 'Add optional formatted details for this specific point.',
                'id'      => 'formatted_detail',
                'type'    => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 8,
                ),
            ),
        ),
    ) );

    // Group: Transportation: By Car
    $venue_meta->add_field( array(
        'id'          => 'la_venue_transport_car_group',
        'type'        => 'group',
        'description' => 'Add individual points about car access and parking.',
        'options'     => array(
            'group_title'   => __( 'Car Point {#}', 'textdomain' ),
            'add_button'    => __( 'Add Car Point', 'textdomain' ),
            'remove_button' => __( 'Remove Car Point', 'textdomain' ),
            'sortable'      => true,
            'closed'        => true,
        ),
        'fields'      => array(
            array(
                'name' => 'Detail',
                'desc' => 'Enter the main sentence for this car/parking point.',
                'id'   => 'detail',
                'type' => 'textarea_small',
            ),
            array(
                'name'    => 'Formatted Details (Optional)',
                'desc'    => 'Add optional formatted details for this specific point.',
                'id'      => 'formatted_detail',
                'type'    => 'wysiwyg',
                'options' => array(
                    'textarea_rows' => 8,
                ),
            ),
        ),
    ) );

		$venue_meta->add_field( array(
		'name' => 'Venue Video Links', // Changed name to plural for clarity
		'desc' => 'Enter YouTube video URLs. Click "Add Row" to add multiple videos.',
		'id'   => 'la_venue_video_link', // Keep the same ID so existing data is not lost
		'type' => 'text_url',
		'protocols' => array('http', 'https'),
		'repeatable' => true, // <-- THIS IS THE KEY CHANGE!
		'options' => array(
			'add_row_txt' => 'Add Another Video', // Custom text for the "Add Row" button
			'remove_row_txt' => 'Remove Video',
		),
	) );


	// Phlebotomy Courses Custom metas
	$phleb_metas = new_cmb2_box( array(
		'id'            => 'la_phleb_course_metas',
		'title'         => 'Phlebotomy Course Options',
		'object_types'  => array( 'product', 'page' ), // Post type
		'show_on'  		=> array( 'key' => 'id', 'value' => FACE_2_FACE_PRODUCT_CODES ), // Post IDs
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$phleb_metas->add_field( array(
		'name' => 'Course Regular Price',
		'desc' => 'Write the Course Regular Price',
		'id'   => 'la_phleb_course_regular_price',
		'type' => 'text',
	) );
	$phleb_metas->add_field( array(
		'name' => 'Course Sell Price',
		'desc' => 'Write the Course Sell Price',
		'id'   => 'la_phleb_course_sell_price',
		'type' => 'text',
	) );
	$phleb_metas->add_field( array(
		'name' => 'Location Root',
		'desc' => 'Write the Location. Ex: London',
		'id'   => 'la_phleb_course_location_root',
		'type' => 'text',
	) );
	$phleb_metas->add_field( array(
		'name' => 'Address Root',
		'desc' => 'Write the Address. Ex: 25A Wincott Street, Kennington, SE11 4NT',
		'id'   => 'la_phleb_course_address_root',
		'type' => 'text',
	) );
	$phleb_metas->add_field( array(
		'name' => 'Course Time Root',
		'desc' => 'Write the Time. Ex: 10:00 AM - 05:30 PM',
		'id'   => 'la_phleb_course_time_root',
		'type' => 'text',
	) );
	$phleb_metas->add_field( array(
		'name' => 'StudyPlex Product ID',
		'desc' => 'Write StudyPlex Product ID. Ex: 6153',
		'id'   => 'sp_product_id',
		'type' => 'text',
	) );
	$phleb_metas->add_field( array(
		'name' => 'phlebotomycourse.uk Product ID',
		'desc' => 'Write phlebotomycourse.uk Product ID. Ex: 362',
		'id'   => 'pb_product_id',
		'type' => 'text',
	) );
	$phleb_metas_group_id = $phleb_metas->add_field( array(
		'id'          => 'la_phleb_course_meta_group',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Phlebotomy Item {#}',
			'add_button'    => 'Add Another Item',
			'remove_button' => 'Remove Item',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );

	$phleb_metas->add_group_field( $phleb_metas_group_id, array(

		'name' => 'Course Tab Assignment',
		'desc' => 'Select which tab this course should appear in (London Post ID 397 only)',
		'id'   => 'phuk_course_tab',
		'type' => 'select',
		'options' => array(
			'two_day' => 'Phlebotomy & Cannulation (2 Day)',
			'one_day' => 'Cannulation Training (1 Day)',
		),
		'default' => 'one_day',
		'show_on_cb' => 'show_course_tab_assignment_for_product_371100',
	));

	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Course Date',
		'desc' => 'Write the Date. Ex: 5th November, 2024',
		'id'   => 'la_phleb_course_date',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Course First Date',
		'desc' => 'Both 3 Days and Single Day Eg: 31 November 2024',
		'id'   => 'adv_course_date',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Course Middle Date',
		'desc' => 'Only for 3 Days Eg: 31 November 2024',
		'id'   => 'adv_course_middle_date',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Course Last Date',
		'desc' => 'Only for 3 Days Eg: 31 November 2024',
		'id'   => 'adv_course_last_date',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Location',
		'desc' => 'Write the Location. Ex: London',
		'id'   => 'la_phleb_course_location',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Address',
		'desc' => 'Write the Address. Ex: 25A Wincott Street, Kennington, SE11 4NT',
		'id'   => 'la_phleb_course_address',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Course Time',
		'desc' => 'Write the Time. Ex: 10:00 AM - 05:30 PM',
		'id'   => 'la_phleb_course_time',
		'type' => 'text',
	) );

	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'variant Regular Price',
		'desc' => 'Write the variant Regular Price',
		'id'   => 'la_regular_price',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'variant Sell Price',
		'desc' => 'Write the variant Sell Price',
		'id'   => 'la_sell_price',
		'type' => 'text',
	) );

	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Course Seats Left',
		'desc' => 'Write how many seats left. Ex: Hurry ! Only 05 seats left',
		'id'   => 'la_phleb_course_seats_left',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Course ID',
		'desc' => 'Write the Exact Course ID Carefully. Ex: 376420',
		'id'   => 'la_phleb_course_var_id',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'StudyPlex Course ID',
		'desc' => 'Write the Exact Course ID Carefully. Ex: 8070',
		'id'   => 'sp_phleb_course_var_id',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'phlebotomycourse.uk Course ID',
		'desc' => 'Write the Exact Course ID Carefully. Ex: 897',
		'id'   => 'pb_phleb_course_var_id',
		'type' => 'text',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Batch Full?',
		'desc' => 'Check the box if this Batch full.',
		'id'   => 'la_phleb_course_quota_full',
		'type' => 'checkbox',
	) );
	/*
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Hide This on Top?',
		'desc' => 'Check if this hide',
		'id'   => 'la_phleb_course_hide',
		'type' => 'checkbox',
	) );
	*/
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Hide This on Cart Suggestion?',
		'desc' => 'Check if this hide in Cart Suggestion',
		'id'   => 'course_hide_on_cart',
		'type' => 'checkbox',
	) );
	$phleb_metas->add_group_field( $phleb_metas_group_id, array(
		'name' => 'Remove Item?',
		'desc' => 'Please don\'t Permanently <b>Remove Item</b> only Check',
		'id'   => 'la_phleb_course_delete',
		'type' => 'checkbox',
	) );
}