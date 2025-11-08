<?php
/**
 * Lead Academy Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lead Academy Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_LEAD_ACADEMY_CHILD_VERSION', '1.0.0' );
define( 'ASTRA_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'ASTRA_CHILD_THEME_DIR_URI', get_stylesheet_directory_uri() );
// For Face2Face Course top-info-contents.php
define( 'FACE_2_FACE_PRODUCT_CODES', array(354284,366854,376417,413582,376420,377824,408597,368595,382016,386971,410644,420510,371100,380325,388994,413724,389230,387587,413716,391079,391063,389109,394220,409404,413703,414748,414746,414685, 421612, 435450 , 438477, 438480, 436829,440128 , 439294, 440908, 441734, 441758, 443472, 443706, 448459,448192,446501,446674,447327,448877,451550) );
// Update 1 more File woocommerce / phlebotomy-courses-top-contents.php

define( 'CONSENT_FORM', array(366854,376417,376420,377824,408597,368595,382016,386971,410644,420510,371100,380325, 436829) );

define('PHLEBOTOMY_TRAINING',array(366854,354284,376417,376420,377824,408597));


/*
phlebotomy-training-london							366854 & 354284
phlebotomy-training-birmingham						376417
phlebotomy-training-bristol							376420
phlebotomy-training-swindon							377824
phlebotomy-training-cardiff							408597
advanced-phlebotomy-training						368595
advanced-competency-phlebotomy-training-birmingham	382016
advanced-competency-phlebotomy-training-swindon		386971
advanced-competency-phlebotomy-training-bristol		410644
advanced-competency-phlebotomy-training-cardiff		420510
cannulation-training								371100
cannulation-training-birmingham						380325
cannulation-training-swindon						436829
PAT Testing Training Course London					413582
ecg-training										388994
ecg-training-Birmingham								413703
vaccination-and-immunisation-training				387587
vaccination-and-immunisation-training-birmingham	413724
vitamin-b12-injection-course						389230
vitamin-b12-injection-course-birmingham				413716
complete-nail-technician-course						394220
acrylic-nail-extension-course						409404
mandatory-training									391079
care-certificate-training							391063
basic-life-support-training							389109
lymphatic-drainage-massage-training-birmingham		414748
swedish-massage-training-birmingham					414746
swedish-massage-training-london						421612
deep-tissue-massage-training-birmingham				414685
Polygel Nail Extension Course –						435450
IV Cannulation Training Swindon – CPD Accredited 	436829

catheterisation-training							370863
Eyelash Extension Training Course London            439294
Eyelash Extension Training Course Birmingham        440908
Indian Head Massage Training London					441734
Indian Head Massage Training in Birmingham			441758
Eyelash Extension Training Course London		    443472	 
Eyelash Extension Training Course Birmingham		443706	
IV Drip Training London Face to Face Course         448459
Sports Massage Training London – Face-to-Face Course 448192
Reiki Level 1 Training Course Birmingham            446501
Reiki Level 2 Course in Birmingham | Face 2 Face Training 446674
Pregnancy Massage Course Birmingham                 447327
Lymphatic Drainage Massage Training London – Classroom Based Course   448877
PAT Testing Training Birmingham – 1 Day Course With Certificate 451550
*/


/**
 * ===============================================================
 * Enqueue scripts and styles
 * ===============================================================
 */

// Add the Apply Coupon form within the Cart Totals section
function add_apply_coupon_form_to_cart_totals() {
//	if(get_current_user_id()==144){
    ?>
<form class="woocommerce-cart-form" action="https://lead-academy.org/cart" method="post">
	<div class="coupon">
		<label for="coupon_code" class="screen-reader-text">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
		<button type="submit" class="button" id="custom_apply_coupon" name="apply_coupon" value="Apply coupon">Apply coupon</button>
	</div>
</form>
    <?php
//	}
}
// add_action( 'woocommerce_cart_totals_before_order_total', 'add_apply_coupon_form_to_cart_totals' );

function la_wp_scripts() {

	
	/* --- CSS --- */
	// wp_enqueue_style( 'lead-academy-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_LEAD_ACADEMY_CHILD_VERSION, 'all' );
	// wp_enqueue_style( 'lead-academy-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_LEAD_ACADEMY_CHILD_VERSION, 'all' );
	wp_enqueue_style( 'la-bootstrap', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/bootstrap/bootstrap.css' );
	wp_enqueue_style( 'la-beta-custom', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/la-beta-custom.css', array(), time() );
	wp_enqueue_style( 'contact-seven-form', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/contact-form.css', array(), time() );
	wp_enqueue_style( 'all-course-page-design', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/all-course-page-design.css', array(), time(), 'all');
	wp_enqueue_style( 'la-main', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/la-main.css', array(), time(), 'all' );
	wp_enqueue_style( 'custom-menu', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/custom-menu.css', array(), time(), 'all' );
	wp_enqueue_style( 'la-course-details-styles', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/course-details-styles.css', array(), time()  );
	wp_enqueue_style( 'font-awesome-4-7', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'font-google', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap', array(), '1.0.0' );
	wp_enqueue_style('owl.carousel.min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', false);
	wp_enqueue_style('owl.theme.min', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', false);

	/** Custom add to cart start */
    wp_enqueue_script( 'add-to-cart-la', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/ajax-add-to-cart-la.js', array('jquery'), time(), true );
    // Pass the AJAX URL to the script
    wp_localize_script( 'add-to-cart-la', 'add_to_cart_la_object', array(
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
    /** Custom add to cart end */
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if(is_page( 'learner-information' )) {
		if (!wp_script_is('alpine-js')) {
			wp_enqueue_script('alpine-js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', [], '3.x.x', true);
		}
		
	}
	
	if(is_page( 'cart' )) {
	// 	wp_enqueue_style( 'cart-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/cart-page.css', array(), time(), 'all' );
		wp_enqueue_style( 'cart-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/cart-page-suggestion.css', array(), time(), 'all' );
		wp_enqueue_script( 'cart-form', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/cart-form.js', array('jquery'), rand(1, 9999), true );
	}

	if(is_page( 'checkout' )) {
			wp_enqueue_style( 'checkout-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/la-checkout-page-style.css', array(), time(), 'all' );
			wp_enqueue_script( 'checkout-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/checkout-page.js', array('jquery'), time(), true );
			wp_enqueue_script( 'select-payment-method', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/select-payment-method.js', array('jquery'), time(), true );
	}

	if(is_page ( array('complete-nail-technician-course'))) {
		wp_enqueue_style( 'phlebotomy-training', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/phlebotomy-training.css', array(), time(), 'all' );
	}

	if(is_page(array('phlebotomy-training-london','phlebotomy-training-birmingham','nail-technician','mental-health-first-aid'))) {
		wp_enqueue_style( 'phlebotomy-training', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/phlebotomy-training.css', array(), time(), 'all' );
		wp_enqueue_style( 'phlebotomy-modal-css', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/jquery.modal.min.css', array(), time(), 'all' );

		// Load JS
		wp_enqueue_script( 'phlebotomy-modal-js', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/jquery.modal.min.js', array('jquery'), time(), true );
		wp_enqueue_script( 'phlebotomy-training', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/phlebotomy-training.js', array('phlebotomy-modal-js', 'jquery'), time(), true );
	}
	if(is_page(array('adult-gcse-courses', 'esol-courses', 'teacher-training-courses', 'ecg-training', 'vitamin-b12-injection-course', 'vaccination-and-immunisation-training', 'phlebotomy-training', 'health-and-social-care-courses'))){
		wp_enqueue_style( 'landing-page-css', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/landing-page.css', array(), time(), 'all' );
	}

	if(is_404()){
		wp_enqueue_style( 'error-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/error-page.css', array(), time(), 'all' );
	}
	
	if(is_page(array('our-partners'))){
		wp_enqueue_style( 'our-partners-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/our-partner-page.css', array(), time(), 'all' );
	}

	if(is_page(array('bundle-offer', 'first-aid-courses', 'past-papers-functional-skill', 'monthly-scholarship'))){
		wp_enqueue_style( 'bundle-offer-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/bundle-offer-page.css', array(), time(), 'all' );
	}

	if(is_page(array('faq'))){
		wp_enqueue_style( 'faq-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/faq-page-style.css', array(), time(), 'all' );
	}

	if(is_page(array('order-gift-card'))){
		wp_enqueue_style( 'order-gift-card-new-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/order-gift-card-page.css', array(), time(), 'all' );
	}

	if(is_page(array('about-us'))){
		wp_enqueue_style( 'about-us-new-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/about-us-page-style.css', array(), time(), 'all' );
	}

	if(is_page(array('first-aid-courses'))){
		wp_enqueue_style( 'first-aid-courses-style', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/first-aid-courses.css', array(), time(), 'all' );
	}

	if(is_page(array('subscription', 'first-aid-courses'))){
		wp_enqueue_style( 'subscription-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/subscription-page-style.css', array(), time(), 'all' );
	}

	if(is_page(array('order-student-id-card'))){
		wp_enqueue_style( 'order-student-id-card-page-style', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/order-student-id-card-page.css', array(), time(), 'all' );
	}

	if(is_page(array('food-hygiene-certificate'))){
		wp_enqueue_style( 'food-hygiene-certificate-style', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/food-hygiene-certificate.css', array(), time(), 'all' );
	}

	if(is_page(array('staff-training'))){
		wp_enqueue_style( 'staff-training-style', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/staff-training-style.css', array(), time(), 'all' );
		wp_enqueue_script( 'staff-training-scripts', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/staff-training.js', array('jquery'), time(), true );
	}

	if(is_page(array('free-courses'))){
		wp_enqueue_style( 'free-courses', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/free-courses.css', array(), time(), 'all' );
	}

	if(is_page(array('past-papers-functional-skill'))){
		wp_enqueue_style( 'past-papers-functional-skill-style', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/past-papers-functional-skill.css', array(), time(), 'all' );
	}

	if(is_page(array('health-and-safety-courses'))){
		wp_enqueue_style( 'health-and-safety-courses-style', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/health-and-safety-courses-style.css', array(), time(), 'all' );
	}

	if(is_page(array('exam-booking','gcse-exam-booking','bsl-exam-booking', 'tutor-support', 'education-and-training-tutor-support', 'education-and-training-assignments'))){
		wp_enqueue_style( 'exam-booking-page-style', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/exam-booking-style.css', array(), time(), 'all' );
	}

	if(is_page(array('order-certificate', 'endorsed-certificate', 'order-certificate-of-completion'))){
		wp_enqueue_style( 'order-certificate-style', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/order-certificate-page-style.css', array(), time(), 'all' );
	}

	if(is_page(array('functional-skills-english-level-2-past-papers',
                     'functional-skills-english-level-1-past-papers',
                     'functional-skills-maths-level-1-past-papers',
'functional-skills-maths-level-2-past-papers',
'highfield-qualification-functional-skills-maths-level-2-past-papers-new',
'highfield-qualifications-functional-skills-english-level-1-past-papers-new',
'highfield-qualifications-functional-skills-english-level-2-past-papers-new',
'highfield-qualifications-functional-skills-maths-level-1-past-papers-new'))){
		wp_enqueue_style('fa-mock-test', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/fs-mock-test.css', array(), time(), 'all');
	}

	if(is_page( array(
			'phlebotomy-training',
			'phlebotomy-training-new',
			'ecg-training',
			'vaccination-and-immunisation-training',
			'vitamin-b12-injection-course',
			'health-and-social-care-courses',
			'cannulation-training', 	// Cannulation Training
			390119, 	// Clinical Skills Training
			391681		// Advanced Phlebotomy Training
		)) || is_archive('venue')
	) {
		wp_enqueue_style( 'phlebotomy-training-landing-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/phuk-landing-page.css', array(), time(), 'all' );
		wp_enqueue_style( 'phlebotomy-training-london', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/phlebotomy-training.css', array(), time(), 'all' );
	}
	

	if(is_page ( array( 
		'massage-therapy-courses', 
		'nail-technician-courses', 
		'complete-nail-technician-course',
		'makeup-and-beauty-courses',
		'advanced-phlebotomy-training',
		'clinical-skills-training'
		))
	) {
		wp_enqueue_style( 'massage-therapy', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/massage-therapy-style.css', array(), time(), 'all' );
	}

	if (get_the_ID() == 394220 || get_the_ID() == 409404 || get_the_ID() == 438477 || get_the_ID() == 438480 || get_the_ID() == 440128 || get_the_ID() ==  440908) {
		wp_enqueue_style( 'massage-therapy', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/massage-therapy-style.css', array(), time(), 'all' );
		wp_enqueue_style( 'phlebotomy-training', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/phlebotomy-training.css', array(), time(), 'all' );
	}	

	if(is_page( 'contact-us' )) {
		wp_enqueue_style( 'contact-us', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/contact-us-style.css', array(), time(), 'all' );
	}

	if(is_page( 'home' )) {
		wp_enqueue_style( 'home-page', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/la-home-page-style.css', array(), time(), 'all' );
	}

	if(is_singular( array('gcse', 'product') )) {
		wp_enqueue_style( 'gcse', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/gcse-styles.css', array(), time(), 'all' );
	}
	if (is_singular('gcse') || in_array(get_the_ID(), array(368905, 368929, 379419, 368926, 372130))) {
		wp_enqueue_script( 'gcse', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/gcse-scripts.js', array('jquery'), time(), true );
		wp_localize_script(
			'gcse',
			'gcse_obj',
			array(
				'ajax_url' => admin_url( 'admin-ajax.php' ),
				'cart_url' => wc_get_cart_url(),
			)
		);
	}

	/* --- JS --- */
	wp_enqueue_script( 'la-owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), time() );
	wp_enqueue_script( 'la-postcoder-address', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/postcoder-address.js', '', time() );
	wp_enqueue_script( 'la-main', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/la-main.js', array('jquery'), time(), true );
	wp_enqueue_script( 'contact-seven-form', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/contact-seven-form.js', array('jquery'), time(), true );
	wp_enqueue_script( 'la-bootstrap-js', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/bootstrap.min.js', array('jquery'), time(), true );
	wp_enqueue_script( 'la-bootstrap-bundle-js', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/bootstrap.bundle.min.js', array('jquery'), time(), true );
	wp_enqueue_script( 'ls-course-details-scripts', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/course-details-scripts.js', array('jquery'), time(), true );
	wp_enqueue_script( 'ls-on-switch-add-product-cart-scripts', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/switch_add_product_to_cart.js', array('jquery', 'la-owl-carousel'), time(), true );

	// Load Omnisend script
	if ( is_home() || is_front_page() ) {
		wp_enqueue_script( 'ls-omnisend-scripts', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/omnisend.js', array(), time(), true );
	}

	// Ajaxify all-courses page
	wp_enqueue_script( 'la-courses-ajaxify', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/ajaxify-courses.js', array('jquery'), time(), true );
// 
	// Localize variables for ajaxify-courses
	wp_localize_script(
		'la-courses-ajaxify',
		'ajaxify_courses_ot',
		array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'total_products' => wp_count_posts('product')->publish,
		)
	);
  
    // Localize the script with new data
    wp_localize_script('ls-course-details-scripts', 'fully_booked_ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('fully_booked_nonce')
    ));

	// Ajaxify the header searchbar
	// wp_enqueue_script( 'la-header-searchbar-ajaxify', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/header-searchbar-ajaxify.js', array('jquery'), time(), true );

	// // Localize the header searchbar
	// wp_localize_script(
	// 	'la-header-searchbar-ajaxify',
	// 	'header_searchbar_ajaxify',
	// 	array(
	// 		'ajax_url' => admin_url( 'admin-ajax.php' ),
	// 	)
	// );
}
add_action( 'wp_enqueue_scripts', 'la_wp_scripts', 15 );

// Enqueue admin script
add_action( 'admin_enqueue_scripts', 'la_include_admin_scripts' );
function la_include_admin_scripts() {	
	// WordPress media uploader scripts
	if ( ! did_action( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
	// Admin CSS
	wp_enqueue_style( 'la_admin_styles', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/la-admin-styles.css', array(), time(), 'all' );
	
	// our custom JS
 	wp_enqueue_script( 'la_include_admin_script', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/la-admin-script.js', array( 'jquery' ) );
}

// Load dummy contents function
require_once ASTRA_CHILD_THEME_DIR . '/inc/dummy-contents.php';
// Load Ajaxify courses function
require_once ASTRA_CHILD_THEME_DIR . '/inc/ajaxify-courses.php';
// Load checkout functions
require_once ASTRA_CHILD_THEME_DIR . '/inc/checkout-functions.php';
// Load custom functions
require_once ASTRA_CHILD_THEME_DIR . '/inc/custom-functions.php';
// Load course additional metaboxes
require_once ASTRA_CHILD_THEME_DIR . '/inc/wc-custom-metas.php';
// Load course reviews
require_once ASTRA_CHILD_THEME_DIR . '/inc/la-reviews.php';
// Load course reviews
require_once ASTRA_CHILD_THEME_DIR . '/inc/make-custom-feed.php';
// Load popular courses shortcode content
require_once ASTRA_CHILD_THEME_DIR . '/inc/popular-courses-shortcode-content.php';
// Load specific course's prices by id shortcode content
require_once ASTRA_CHILD_THEME_DIR . '/inc/specific-courses-price-shortcode-content.php';
// Load custom meta field on product_cat taxonomy content
require_once ASTRA_CHILD_THEME_DIR . '/inc/la-custom-taxonomy-content.php';
// Load custom API endpoint content
require_once ASTRA_CHILD_THEME_DIR . '/inc/custom-endpoint.php';
// Load header searchbar ajaxify content
require_once ASTRA_CHILD_THEME_DIR . '/inc/header-searchbar-ajaxify.php';
// Export custom product datas in CSV format
require_once ASTRA_CHILD_THEME_DIR . '/inc/la-export-products.php';
// Export custom order datas in CSV format
require_once ASTRA_CHILD_THEME_DIR . '/inc/la-export-orders.php';
// For Suggestion on Cart page
require_once ASTRA_CHILD_THEME_DIR . '/inc/cart-page-suggestion.php';
// Load Flash Sale Popup Functions
require_once ASTRA_CHILD_THEME_DIR . '/inc/la-flash-sale-popup.php';


/**
 * ================================================================================
 * LA Register Menus
 * ================================================================================
 */
function la_theme_setup() {
	// Register Nav Menu
	register_nav_menus(
		array(
			'footer-menu-1'	=> esc_html__( 'Footer Menu 1', 'astra' ),
			'footer-menu-2' => esc_html__( 'Footer Menu 2', 'astra' ),
		)
	);

	// Set Image Sizes
	add_image_size('la_course_archive_thumb_245x150', 245, 150, true);
}
add_action( 'after_setup_theme', 'la_theme_setup' );

add_action('wp_footer', 'hide_entire_nitro');
function hide_entire_nitro(){
	if(!in_array(get_current_user_id(), array(16, 51))){ //ali@lead-academy.org=16 rahad.ads@gmail.com=51
		echo '<style>#wp-admin-bar-nitropack-top-menu-purge-entire-cache{display:none !important}</style>';
		echo '<style>#wp-admin-bar-optimizations-invalidate-cache{display:none !important}</style>';
		echo '<style>#wp-admin-bar-nitropack-top-menu-settings{display:none !important}</style>';
	}
}


/**
 * ================================================================================
 * Get variable product ids by product id
 * ================================================================================
 */
function la_get_variable_ids_by_product_id( $product_id ) {
	$variations = [];
	$product = wc_get_product($product_id);
	if ( $product->get_type() == 'variable' ) {
		$variations = $product->get_available_variations();
		foreach ( $variations as $variation ) {
			$variations['attribute_boards'][] = $variation['attributes']['attribute_boards'];
			$variations['attribute_courses'][] = $variation['attributes']['attribute_courses'];
			$variations['variation_ids'][] = $variation['variation_id'];
		}
	}
	return $variations;
}



/**
 * ================================================================================
 * LA Courses Menu
 * ================================================================================
 */
add_action( 'after_setup_theme', 'register_courses_menu' );
function register_courses_menu() {
	register_nav_menu( 'courses-menu', __( 'Courses Menu', 'astra' ) );
}
function show_courses_menu() {
?>
	<nav class="subjects-menu-container display-inline-block">
		<a href="#find-courses" class="courses-btn display-inline-block">Find Course <i class="fa fa-chevron-down"></i></a>
		<div class="la-all-courses-mega-menu-wrap">
			<?php
				dynamic_sidebar( 'popular-courses-top' );
				dynamic_sidebar( 'sidebar-courses-top' );
			?>
			<div class="la-our-clients-mega-menu">
				<a href="#"><img src="/wp-content/uploads/0223/12/CPDmember.webp"  alt="CPD Certified" title="CPD Certified"></a>
				<a href="#"><img src="/wp-content/uploads/2022/07/signature-logo-83c764f558b2aeb3deeda61465b5ac7ebcf56b4f029083e1adb29acb41ac08f3.jpg" title="Signature" alt="Signature"></a>
				<a href="#"><img src="/wp-content/uploads/2022/07/edexcel-vector-logo.png" title="Edexcel" alt="Edexcel"></a>
				<a href="#"><img src="/wp-content/uploads/2022/07/QLS-Logo-Colour.png" title="QLS" alt="QLS"></a>
				<a href="#"><img src="/wp-content/uploads/2022/10/ncfe.jpeg" title="NCFE" alt="NCFE"></a>
			</div>
		</div>
	</nav>
<?php
}
add_shortcode( 'courses_menu', 'show_courses_menu' );


/**
 * ================================================================================
 * Register Sidebars LA
 * ================================================================================
 */
function la_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'astra' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'astra' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar', 'astra' ),
			'id'            => 'sidebar-footer',
			'description'   => esc_html__( 'Add Footer widgets here.', 'astra' ),
			'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<p class="footer-widget-title">',
			'after_title'   => '</p>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Courses Top Sidebar', 'astra' ),
			'id'            => 'sidebar-courses-top',
			'description'   => esc_html__( 'Add Course Categories widgets here.', 'astra' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<p class="la-mega-menu-widget-label d-none">',
			'after_title'   => '</p>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Popular Courses Top', 'astra' ),
			'id'            => 'popular-courses-top',
			'description'   => esc_html__( 'Add Popular Courses Categories widgets here.', 'astra' ),
			'before_widget' => '<ul class="la-popular-courses">',
			'after_widget'  => '</ul>',
			'before_title'  => '<p class="la-mega-menu-label">',
			'after_title'   => '</p>',
		)
	);
}
add_action( 'widgets_init', 'la_widgets_init' );


/**
 * ===============================================================
 * Detect user device
 * ===============================================================
 */
function la_is_user_from_big_device() {
	$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
	$isMob = is_numeric(strpos($ua, "mobile"));
	$isTab = is_numeric(strpos($ua, "tablet"));
	$isIpad = is_numeric(strpos($ua, "ipad"));
	$isPlaybook = is_numeric(strpos($ua, "playbook"));
	if ( !$isMob && !$isTab && !$isIpad && !$isPlaybook ) {
		return true;
	} else {
		return false;
	}
}


/**
 * ===============================================================
 * ADD PAYMENT METHOD BULK FILTER FOR ORDERS
 * ===============================================================
 */

function add_filter_by_payment_method_orders() {

    global $typenow;

    if ( 'shop_order' === $typenow ) {

        // get all payment methods

        $gateways = WC()->payment_gateways->payment_gateways();

        ?>

        <select name="_shop_order_payment_method" id="dropdown_shop_order_payment_method">

            <option value=""><?php esc_html_e( 'All Payment Methods', 'text-domain' ); ?></option>

            <?php foreach ( $gateways as $id => $gateway ) : ?>

            <option value="<?php echo esc_attr( $id ); ?>" <?php echo esc_attr( isset( $_GET['_shop_order_payment_method'] ) ? selected( $id, $_GET['_shop_order_payment_method'], false ) : '' ); ?>>

                <?php echo esc_html( $gateway->get_method_title() ); ?>

            </option>

            <?php endforeach; ?>

        </select>

        <?php

    }

}

add_action( 'restrict_manage_posts', 'add_filter_by_payment_method_orders', 99 );

 

function add_filter_by_payment_method_orders_query( $vars ) {

    global $typenow;

    if ( 'shop_order' === $typenow && isset( $_GET['_shop_order_payment_method'] ) ) {

        $vars['meta_key']   = '_payment_method';

        $vars['meta_value'] = wc_clean( $_GET['_shop_order_payment_method'] );

    }

    return $vars;

}

add_filter( 'request', 'add_filter_by_payment_method_orders_query', 99 );


/**
 * ===============================================================
 * Overwrite teh WC Product title
 * ===============================================================
 */
function woocommerce_template_loop_product_title() {
	global $is_related_product_loop;

	$tag = 'h2';
	if ( isset( $is_related_product_loop ) && $is_related_product_loop ) {
		$tag = 'span';
	}
	echo '<' . $tag . ' class="' . esc_attr( apply_filters( 'woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title' ) ) . '">' . get_the_title() . '</' . $tag . '>'; 
}


/**
 * ===============================================================
 * Calculate Discount Percentage
 * ===============================================================
 */
function calculate_discount_percentage( $real_price, $sale_price) {
	return round( ($real_price - $sale_price)/$real_price * 100 );
}


/**
 * ===============================================================
 * Change number or products per row to 3
 * ===============================================================
 */
add_filter('loop_shop_columns', 'la_loop_columns', 999);
function la_loop_columns() 
{
	return 3; // 3 products per row
}


/**
 * ===============================================================
 * Display Review Part
 * ===============================================================
 */
function get_reviews_part() {
	?>
	<script src="https://widget.reviews.io/carousel-inline-iframeless/dist.js?_t=2022042105"></script>
	<link rel="stylesheet" href="https://assets.reviews.io/css/widgets/carousel-widget.css?_t=2022042105">
	<link rel="stylesheet" href="https://assets.reviews.io/iconfont/reviewsio-icons/style.css?_t=2022042105">
	<div id="reviewsio-carousel-widget"></div>
	<script>
		new carouselInlineWidget('reviewsio-carousel-widget',{
		/*Your REVIEWS.io account ID:*/
		store: 'lead-academy-org',
		sku: '',
		lang: 'en',
		carousel_type: 'default',
		styles_carousel: 'CarouselWidget--sideHeader--withcards ',

		/*Widget settings:*/
		options:{
			general:{
			/*What reviews should the widget display? Available options: company, product, third_party. You can choose one type or multiple separated by comma.*/
			review_type: 'company, product',
			/*Minimum number of reviews required for widget to be displayed*/
			min_reviews: '1',
			/*Maximum number of reviews to include in the carousel widget.*/
			max_reviews: '20',
			address_format: 'CITY, COUNTRY',
			/*Carousel auto-scrolling speed. 3000 = 3 seconds. If you want to disable auto-scroll, set this value to false.*/
			enable_auto_scroll: 10000,
			},
			header:{
			/*Show overall rating stars*/
			enable_overall_stars: true,
			rating_decimal_places: 2,
			},
			reviews: {
			/*Show customer name*/
			enable_customer_name: true,
			/*Show customer location*/
			enable_customer_location: false,
			/*Show "verified review" badge*/
			enable_verified_badge: true,
			/*Show "I recommend this product" badge (Only for product reviews)*/
			enable_recommends_badge: true,
			/*Show photos attached to reviews*/
			enable_photos: true,
			/*Show videos attached to reviews*/
			enable_videos: true,
			/*Show when review was written*/
			enable_review_date: true,
			/*Hide reviews written by the same customer (This may occur when customer reviews multiple products)*/
			disable_same_customer: true,
			/*Minimum star rating*/
			min_review_percent: 4,
			/*Show 3rd party review source*/
			third_party_source: true,
			/*Hide reviews without comments (still shows if review has a photo)*/
			hide_empty_reviews: true,
			/*Show product name*/
			enable_product_name: true,
			/*Show only reviews which have specific tags (multiple semicolon separated tags allowed i.e tag1;tag2)*/
			tags: "",
			/*Show branch, only one input*/
			branch: "",
			enable_branch_name: false,
			},
			popups: {
			/*Make review items clickable (When they are clicked, a popup appears with more information about a customer and review)*/
			enable_review_popups:  true,
			/*Show "was this review helpful" buttons*/
			enable_helpful_buttons: true,
			/*Show how many times review was upvoted as helpful*/
			enable_helpful_count: true,
			/*Show share buttons*/
			enable_share_buttons: true,
			},
		},
		translations: {
		verified_customer:  "Verified Customer",
		},
		styles:{
		/*Base font size is a reference size for all text elements. When base value gets changed, all TextHeading and TexBody elements get proportionally adjusted.*/
		'--base-font-size': '16px',
		'--base-maxwidth':'100%',

		/*Logo styles:*/
		'--reviewsio-logo-style':'var(--logo-normal)',

		/*Star styles:*/
		'--common-star-color':'#F47E27',
		'--common-star-disabled-color':' rgba(0,0,0,0.25)',
		'--medium-star-size':' 22px',
		'--small-star-size':'19px', /*Modal*/
		'--x-small-star-size':'19px',
		'--x-small-star-display':'inline-flex',

		/*Header styles:*/
		'--header-order':'1',
		'--header-width':'280px',
		'--header-bg-start-color':'#FFFFFF',
		'--header-bg-end-color':'#FFFFFF',
		'--header-gradient-direction':'135deg',
		'--header-padding':'1.5em',
		'--header-border-width':'1px',
		'--header-border-color':'#00000017',
		'--header-border-radius':'0px',
		'--header-shadow-size':'10px',
		'--header-shadow-color':'rgba(0, 0, 0, 0.05)',

		/*Header content styles:*/
		'--header-star-color':'#F47E27',
		'--header-disabled-star-color':'inherit',
		'--header-heading-text-color':'#000000',
		'--header-heading-font-size':'21px',
		'--header-heading-font-weight':'inherit',
		'--header-heading-line-height':'inherit',
		'--header-heading-text-transform':'inherit',
		'--header-subheading-text-color':'#000000',
		'--header-subheading-font-size':'inherit',
		'--header-subheading-font-weight':'300',
		'--header-subheading-line-height':'inherit',
		'--header-subheading-text-transform':'inherit',

		/*Review item styles:*/
		'--item-maximum-columns':'5',/*Must be 3 or larger*/
		'--item-background-start-color':'#F1F1F1',
		'--item-background-end-color':'#ffffff',
		'--item-gradient-direction':'135deg',
		'--item-padding':'1.5em',
		'--item-border-width':'0px',
		'--item-border-color':'rgba(0,0,0,0.1)',
		'--item-border-radius':'0px',
		'--item-shadow-size':'10px',
		'--item-shadow-color':'rgba(0,0,0,0.05)',

		/*Heading styles:*/
		'--heading-text-color':' #0E1311',
		'--heading-text-font-weight':' 600',
		'--heading-text-font-family':' inherit',
		'--heading-text-line-height':' 1.4',
		'--heading-text-letter-spacing':'0',
		'--heading-text-transform':'none',

		/*Body text styles:*/
		'--body-text-color':' #0E1311',
		'--body-text-font-weight':'400',
		'--body-text-font-family':'inherit',
		'--body-text-line-height':'1.7',
		'--body-text-letter-spacing':'0',
		'--body-text-transform':'none',

		/*Scroll button styles:*/
		'--scroll-button-icon-color':'#B91948',
		'--scroll-button-icon-size':'25px',
		'--scroll-button-bg-color':'transparent',

		'--scroll-button-border-width':'0px',
		'--scroll-button-border-color':'#831E1E00',

		'--scroll-button-border-radius':'60px',
		'--scroll-button-shadow-size':'0px',
		'--scroll-button-shadow-color':'rgba(0,0,0,0.1)',
		'--scroll-button-horizontal-position':'3px',
		'--scroll-button-vertical-position':'0px',

		/*Badge styles:*/
		'--badge-icon-color':'#00A673',
		'--badge-icon-font-size':'15px',
		'--badge-text-color':'#0E1311',
		'--badge-text-font-size':'13px',
		'--badge-text-letter-spacing':'inherit',
		'--badge-text-transform':'none',

		/*Author styles:*/
		'--author-font-size':'15px',
		'--author-font-weight':'inherit',
		'--author-text-transform':'inherit',

		/*Product photo or review photo styles:*/
		'--photo-video-thumbnail-size':'60px',
		'--photo-video-thumbnail-border-radius':'0px',

		/*Popup styles:*/
		'--popup-backdrop-color':'rgba(0,0,0,0.75)',
		'--popup-color':'#ffffff',
		'--popup-star-color':'inherit',
		'--popup-disabled-star-color':'inherit',
		'--popup-heading-text-color':'inherit',
		'--popup-body-text-color':'inherit',
		'--popup-badge-icon-color':'inherit',
		'--popup-badge-icon-font-size':'19px',
		'--popup-badge-text-color':'inherit',
		'--popup-badge-text-font-size':'14px',
		'--popup-border-width':'0px',
		'--popup-border-color':'rgba(0,0,0,0.1)',
		'--popup-border-radius':'0px',
		'--popup-shadow-size':'0px',
		'--popup-shadow-color':'rgba(0,0,0,0.1)',
		'--popup-icon-color':'#0E1311',

		/*Tooltip styles:*/
		'--tooltip-bg-color':'#0E1311',
		'--tooltip-text-color':'#ffffff',
		},
	});

	</script>
<?php
}


/**
 * Add Access Course section in Side Cart Plugin
 */
add_action('xoo_wsc_body_end', 'la_xoo_wsc_body_end');
function la_xoo_wsc_body_end() {
	?>
	<style>
        .access-content,
		.access-content * {
            font-family: 'Open Sans';
            color: #fff;
		}
        .access-content {
            background-color: #282830;
            padding: 15px 10px 20px;
        }
        .access-content div {
            display: block;
            text-align: center;
        }
        .access-content h3 {
            font-size: 19px;
			font-weight: 700;
            margin: 0;
            text-align: center;
        }
        .access-content .cart {
            text-align: center;
        }
        #add-access-sidecart-button {
            border-radius: 30px;
            border: 2px solid #B91948;
            background-color: #fff;
            color: #B91948;
            display: inline-block;
            font-size: 16px;
            margin: 30px 0;
            padding: 15px 20px;
            text-decoration: none;
            transition: 0.3s ease-in-out 0s;
        }
        #add-access-sidecart-button:hover {
            background-color: #B91948;
            border: 2px solid #fff;
			color: #fff;
            font-weight: 700;
        }
        #access-content-text {
            font-size: 16px;
        } 
    </style>

<?php

	// $access_product_id 	= 380011; 
	$access_product_id 	= 380015; 

	if( 0 >= matched_cart_items( $access_product_id ) ) 
	{
		
		$access_title 			= "Upgrade to get Lifetime ACCESS to ALL COURSES for only £149.00";
		$access_product_url 	= "/course/lifetime-membership";
		$access_content_text 	= "Lifetime Membership to All Courses. Certain courses are not included. Can't be used in conjunction with any other offer.";
		
?>

	<div class="access-content">
		<h3><?php echo $access_title; ?></h3>
		<form class="cart" action="<?php echo get_bloginfo( 'url' ) . $access_product_url; ?>" method="post" enctype="multipart/form-data" data-uw-styling-context="true">
			<input type="hidden" name="quantity" value="1">
			<button type="submit" class="single_add_to_cart_button button alt" id="add-access-sidecart-button" name="add-to-cart" value="<?php echo $access_product_id; ?>">ADD OFFER TO CART</button>
		</form>
		<div id="access-content-text"><?php echo $access_content_text; ?></div> 
	</div>
	<?php
	}
}

/**
 * Check the products are present in the Cart
 */
function matched_cart_items( $search_products ) {
    $count = 0; // Initializing

    if ( ! WC()->cart->is_empty() ) {
        // Loop though cart items
        foreach(WC()->cart->get_cart() as $cart_item ) {
            // Handling also variable products and their products variations
            $cart_item_ids = array($cart_item['product_id'], $cart_item['variation_id']);

            // Handle a simple product Id (int or string) or an array of product Ids 
            if ( ( is_array($search_products) && array_intersect($search_products, cart_item_ids) ) || ( !is_array($search_products) && in_array($search_products, $cart_item_ids) ) ) 
			{
                $count++; // incrementing items count
			}
        }
    }
    return $count; // returning matched items count 
}


/**
 * ================================================
 * Carousel Reviews Section
 * ================================================
 */
add_shortcode( 'la-reviews-carousel-section', 'get_la_reviews_carousel_section' );
function get_la_reviews_carousel_section( $atts ) {
    ob_start();
	$la_blog_args = shortcode_atts( array(
        'title'   => null,
        'text'    => null
	), $atts, 'la-reviews-carousel-section');   

	$reviews = get_post_meta( get_the_ID(), 'la_course_reviews', true );
	get_la_reviews_carousel_markup( $reviews );
    $get_la_reviews_carousel_section = ob_get_clean();
    
	return $get_la_reviews_carousel_section;
}


/**
 * =======================================================================
 * Display a switch field at Cart Page 
 * =======================================================================
 */

function get_la_reviews_carousel_markup( $reviews ){
?>
<script src="https://widget.reviews.io/carousel-inline-iframeless/dist.js?_t=2024020715"></script>
<link rel="stylesheet" href="https://assets.reviews.io/css/widgets/carousel-widget.css?_t=2024020715">
<link rel="stylesheet" href="https://assets.reviews.io/iconfont/reviewsio-icons/style.css?_t=2024020715">
<div id="reviewsio-carousel-widget"></div>
<script>

new carouselInlineWidget('reviewsio-carousel-widget',{
      /*Your REVIEWS.io account ID:*/
      store: 'lead-academy-org',
      sku: '<?=get_the_ID()?>',
      lang: 'en',
      carousel_type: 'default',
      styles_carousel: 'CarouselWidget--sideHeader--withcards',

      /*Widget settings:*/
      options:{
        general:{
          /*What reviews should the widget display? Available options: company, product, third_party. You can choose one type or multiple separated by comma.*/
          review_type: 'company, product',
          /*Minimum number of reviews required for widget to be displayed*/
          min_reviews: '1',
          /*Maximum number of reviews to include in the carousel widget.*/
          max_reviews: '20',
          address_format: 'CITY, COUNTRY',
          /*Carousel auto-scrolling speed. 3000 = 3 seconds. If you want to disable auto-scroll, set this value to false.*/
          enable_auto_scroll: 10000,
        },
        header:{
          /*Show overall rating stars*/
          enable_overall_stars: true,
          rating_decimal_places: 2,
        },
        reviews: {
          /*Show customer name*/
          enable_customer_name: true,
          /*Show customer location*/
          enable_customer_location: false,
          /*Show "verified review" badge*/
          enable_verified_badge: true,
          /*Show "verified subscriber" badge*/
          enable_subscriber_badge: true,
          /*Show "I recommend this product" badge (Only for product reviews)*/
          enable_recommends_badge: true,
          /*Show photos attached to reviews*/
          enable_photos: false,
          /*Show videos attached to reviews*/
          enable_videos: true,
          /*Show when review was written*/
          enable_review_date: false,
          /*Hide reviews written by the same customer (This may occur when customer reviews multiple products)*/
          disable_same_customer: true,
          /*Minimum star rating*/
          min_review_percent: 4,
          /*Show 3rd party review source*/
          third_party_source: true,
          /*Hide reviews without comments (still shows if review has a photo)*/
          hide_empty_reviews: true,
          /*Show product name*/
          enable_product_name: true,
          /*Show only reviews which have specific tags (multiple semicolon separated tags allowed i.e tag1;tag2)*/
          tags: "",
          /*Show branch, only one input*/
          branch: "",
          enable_branch_name: false,
        },
        popups: {
          /*Make review items clickable (When they are clicked, a popup appears with more information about a customer and review)*/
          enable_review_popups:  true,
          /*Show "was this review helpful" buttons*/
          enable_helpful_buttons: true,
          /*Show how many times review was upvoted as helpful*/
          enable_helpful_count: true,
          /*Show share buttons*/
          enable_share_buttons: true,
        },
    },
    translations: {
      verified_customer:  "Verified Customer",
    },
    styles:{
      /*Base font size is a reference size for all text elements. When base value gets changed, all TextHeading and TexBody elements get proportionally adjusted.*/
      '--base-font-size': '16px',
      '--base-maxwidth':'100%',

      /*Logo styles:*/
      '--reviewsio-logo-style':'var(--logo-normal)',

      /*Star styles:*/
      '--common-star-color':'#F47E27',
      '--common-star-disabled-color':' rgba(0,0,0,0.25)',
      '--medium-star-size':' 22px',
      '--small-star-size':'19px', /*Modal*/
      '--x-small-star-size':'22px',
      '--x-small-star-display':'inline-flex',

      /*Header styles:*/
      '--header-order':'1',
      '--header-width':'280px',
      '--header-bg-start-color':'#FFFFFF',
      '--header-bg-end-color':'#FFFFFF',
      '--header-gradient-direction':'135deg',
      '--header-padding':'1.5em',
      '--header-border-width':'1px',
      '--header-border-color':'#DCDCDC',
      '--header-border-radius':'0px',
      '--header-shadow-size':'10px',
      '--header-shadow-color':'rgba(0, 0, 0, 0.05)',

      /*Header content styles:*/
      '--header-star-color':'#F47E27',
      '--header-disabled-star-color':'inherit',
      '--header-heading-text-color':'#000000',
      '--header-heading-font-size':'inherit',
      '--header-heading-font-weight':'inherit',
      '--header-heading-line-height':'inherit',
      '--header-heading-text-transform':'inherit',
      '--header-subheading-text-color':'#000000',
      '--header-subheading-font-size':'inherit',
      '--header-subheading-font-weight':'300',
      '--header-subheading-line-height':'inherit',
      '--header-subheading-text-transform':'inherit',

      /*Review item styles:*/
      '--item-maximum-columns':'5',/*Must be 3 or larger*/
      '--item-background-start-color':'#ffffff',
      '--item-background-end-color':'#ffffff',
      '--item-gradient-direction':'135deg',
      '--item-padding':'1.5em',
      '--item-border-width':'0px',
      '--item-border-color':'rgba(0,0,0,0.1)',
      '--item-border-radius':'0px',
      '--item-shadow-size':'10px',
      '--item-shadow-color':'rgba(0,0,0,0.05)',

      /*Heading styles:*/
      '--heading-text-color':' #0E1311',
      '--heading-text-font-weight':' 600',
      '--heading-text-font-family':' inherit',
      '--heading-text-line-height':' 1.4',
      '--heading-text-letter-spacing':'0',
      '--heading-text-transform':'none',

      /*Body text styles:*/
      '--body-text-color':' #0E1311',
      '--body-text-font-weight':'400',
      '--body-text-font-family':' inherit',
      '--body-text-line-height':' 1.4',
      '--body-text-letter-spacing':'0',
      '--body-text-transform':'none',

      /*Scroll button styles:*/
      '--scroll-button-icon-color':'#0E1311',
      '--scroll-button-icon-size':'24px',
      '--scroll-button-bg-color':'transparent',

      '--scroll-button-border-width':'0px',
      '--scroll-button-border-color':'rgba(0,0,0,0.1)',

      '--scroll-button-border-radius':'60px',
      '--scroll-button-shadow-size':'0px',
      '--scroll-button-shadow-color':'rgba(0,0,0,0.1)',
      '--scroll-button-horizontal-position':'3px',
      '--scroll-button-vertical-position':'0px',

      /*Badge styles:*/
      '--badge-icon-color':'#00A673',
      '--badge-icon-font-size':'15px',
      '--badge-text-color':'#0E1311',
      '--badge-text-font-size':'inherit',
      '--badge-text-letter-spacing':'inherit',
      '--badge-text-transform':'inherit',

      /*Author styles:*/
      '--author-font-size':'16px',
      '--author-font-weight':'inherit',
      '--author-text-transform':'inherit',

      /*Product photo or review photo styles:*/
      '--photo-video-thumbnail-size':'60px',
      '--photo-video-thumbnail-border-radius':'0px',

      /*Popup styles:*/
      '--popup-backdrop-color':'rgba(0,0,0,0.75)',
      '--popup-color':'#ffffff',
      '--popup-star-color':'inherit',
      '--popup-disabled-star-color':'inherit',
      '--popup-heading-text-color':'inherit',
      '--popup-body-text-color':'inherit',
      '--popup-badge-icon-color':'inherit',
      '--popup-badge-icon-font-size':'19px',
      '--popup-badge-text-color':'inherit',
      '--popup-badge-text-font-size':'14px',
      '--popup-border-width':'0px',
      '--popup-border-color':'rgba(0,0,0,0.1)',
      '--popup-border-radius':'0px',
      '--popup-shadow-size':'0px',
      '--popup-shadow-color':'rgba(0,0,0,0.1)',
      '--popup-icon-color':'#0E1311',

      /*Tooltip styles:*/
      '--tooltip-bg-color':'#0E1311',
      '--tooltip-text-color':'#ffffff',
    },
});

</script>
<?php
}


add_action('wp_ajax_myajax_add_product_to_cart', 'myajax_callback_add_product_to_cart');
add_action('wp_ajax_nopriv_myajax_add_product_to_cart', 'myajax_callback_add_product_to_cart');
function myajax_callback_add_product_to_cart() 
{
	// Grab POSTed data, typecast as INT.
	$product_id = (int) $_POST['product_id'];
	$quantity = (int) $_POST['quantity'];
	$var_id = isset($_POST['var_id']) ? (int) $_POST['var_id'] : '';

	if ($quantity) {
		if ($var_id != '') {
			WC()->cart->add_to_cart( $product_id, $quantity, $var_id);
		} else {
			WC()->cart->add_to_cart( $product_id, $quantity);
		}
	}
	else {
		global $woocommerce;
		foreach ($woocommerce->cart->get_cart() as $cart_item_key => $cart_item) {
			if ($cart_item['product_id'] == $product_id) {
				$woocommerce->cart->remove_cart_item($cart_item_key);
			}
		}
	}
	exit();
}

// if ( current_user_can('manage_options') ) {
	add_action('woocommerce_after_cart_table', function(){
		echo do_shortcode("[la_custom_switch_cart_field]");
	});
// }


// Remove Country field on Checkout page
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
// add_action( 'woocommerce_checkout_after_customer_details', 'woocommerce_checkout_coupon_form', 10 ); 
// add_action( 'woocommerce_after_checkout_form', 'woocommerce_checkout_coupon_form' );
add_action( 'woocommerce_review_order_after_cart_contents', 'woocommerce_checkout_coupon_form_custom' );
function woocommerce_checkout_coupon_form_custom() {
    echo '<tr class="coupon-form"><td colspan="2">';
    
    wc_get_template(
        'checkout/form-coupon.php',
        array(
            'checkout' => WC()->checkout(),
        )
    );
    echo '</tr></td>';
}


// Remove Country field on Checkout page
add_filter('woocommerce_checkout_fields','la_remove_optional_country_field_on_checkout');
function la_remove_optional_country_field_on_checkout($fields){
	unset($fields['billing']['billing_state']);
	// unset($fields['order']['order_comments']);
	// unset($fields['order']['order_comments']);
	
	// echo '<pre>';
	// print_r($fields);
	// echo '</pre>';
	// return 'Removed';
	return $fields;
}

/* Billing Information Re Order Start */
add_filter('woocommerce_checkout_fields', 'la_add_profession_field', 8);
function la_add_profession_field($fields){
	$fields['billing']['la_title_field'] = array(
		'label' => 'Select Title',
		'required' => true,
		'priority' => 9,
		'type' => 'select',
		'options' => [
			'Mr' 	=> 'Mr',
			'Mrs' 	=> 'Mrs',
			'Miss' 	=> 'Miss',
			'Ms' 	=> 'Ms'
		]
	);
	$fields['billing']['billing_email'] = array(
		'label' => 'Email Address (You will receive login details on this email)',
		'class'       => array('form-row-wide'),
		'required' => true,
		'priority' => 21,
		'type' => 'email',
	);
	$fields['billing']['billing_phone'] = array(
		'label' => 'Phone Number',
		'required' => true,
		'priority' => 22,
		'type' => 'text',
	);
	$fields['billing']['la_profession_field'] = array(
		'label' => 'Current Profession',
		'required' => true,
		'priority' => 29,
		'type' => 'text',
	);

    $fields['billing']['billing_postcode'] = array(
        'label' => 'Postcode',
        'required' => true,
        'priority' => 45,
        'type' => 'text',
        'placeholder' => 'To Search',
    );

    // Start for filter Post Code by Country
	$optional_country = array('UAE', 'AE');

	// Ensure the customer object is initialized
	if ( WC()->customer ) {
		$billing_country = WC()->customer->get_billing_country();
		
		// Check if the billing country is in the list of optional countries
		if ( in_array($billing_country, $optional_country) ) {
			$fields['billing']['billing_postcode']['required'] = false;
		}
	}
	// End for filter Post Code by Country

    $fields['postcode']['priority'] = 46;
    $fields['billing']['btn_search_postcode'] = array(
        'label' => 'Search',
        'priority' => 47,
        'type' => 'button'
    );

	$fields['billing']['billing_address_1'] = array(
		'label' => 'Street Address',
		'required' => true,
		'priority' => 50,
		'type' => 'text',
	);

	$fields['billing']['billing_city'] = array(
		'label' => 'Town / City',
		'required' => true,
		'priority' => 60,
		'type' => 'text',
	);



	return $fields;
}

/** * Update the order meta with field value */
// 0 woocommerce_checkout_update_order_meta		$_POST $_SESSION
// 6 woocommerce_checkout_order_processed		$_POST $_SESSION
// 1 woocommerce_payment_complete				$_POST $_SESSION
// 7 woocommerce_thankyou						$_SESSION Saving
// 2 woocommerce_before_pay_action
// 3 woocommerce_after_pay_action
// 4 woocommerce_checkout_create_order
// 5 woocommerce_checkout_update_order

// Saving metadata for PayPal transaction
add_action( 'woocommerce_checkout_order_processed', 'la_title_field_update_order_meta' );
add_action( 'woocommerce_checkout_update_order_meta', 'la_title_field_update_order_meta' );
function la_title_field_update_order_meta( $order_id ) {
	if ( ! empty( $_POST['la_title_field'] ) ) {
		update_post_meta( $order_id, 'la_title_field', sanitize_text_field( $_POST['la_title_field'] ) );
	}
	if ( ! empty( $_POST['billing_birth_date'] ) ) {
		update_post_meta( $order_id, 'billing_birth_date', sanitize_text_field( $_POST['billing_birth_date'] ) );
	}
	if ( ! empty( $_POST['la_profession_field'] ) ) {
		update_post_meta( $order_id, 'la_profession_field', sanitize_text_field( $_POST['la_profession_field'] ) );
	}
}

// Display Meta field on order page
add_action( 'woocommerce_admin_order_data_after_billing_address', 'my_custom_checkout_field_display_admin_order_meta', 1, 1 );

function my_custom_checkout_field_display_admin_order_meta($order){
	$order_title_meta = get_post_meta( $order->id, 'la_title_field', true );
	$billing_birth_date = get_post_meta( $order->id, 'billing_birth_date', true );
	$la_profession_field = get_post_meta( $order->id, 'la_profession_field', true );
	if ( $order_title_meta ) {
		echo '<p><strong>'.__('Title').':</strong> ' . $order_title_meta . '</p>';
	}
	if ( $billing_birth_date ) {
		echo '<p><strong>'.__('Date of Birth').':</strong> ' . $billing_birth_date . '</p>';
	}
	if ( $la_profession_field ) {
		echo '<p><strong>'.__('Current Profession').':</strong> ' . $la_profession_field . '</p>';
	}
}

//Change the Billing Address checkout label
function wc_billing_field_strings( $translated_text, $text, $domain ) {
	switch ( $translated_text ) {
		case 'Billing details' :
            $translated_text = 'Learner Information';
            break;
        case 'Return to shop' :
            $translated_text = __( 'Return to All Courses', 'woocommerce' );
            break;
	}
	return $translated_text;
}
add_filter( 'gettext', 'wc_billing_field_strings', 20, 3 );

// Removing Additional Info section from Checkout page
add_filter('woocommerce_enable_order_notes_field', '__return_false');


/* Code for adding Custom HTML on Checkout Page */
// Display a custom checkout field
// add_action( 'woocommerce_review_order_before_submit', 'custom_checkbox_checkout_field', 8 );
add_action( 'woocommerce_checkout_order_review', 'custom_checkbox_checkout_field' );
function custom_checkbox_checkout_field() {
	// Lifetime Access on Checkout
	if ( la_matched_cart_items_belongs_to_specified_cats() ) {
		?>
		<div class="la-checkout-lifetime-access-offer">
			<h4>You Just Unlocked a Deal! <img src="/wp-content/uploads/2022/12/fire-icon.gif"></h4>	
			<div class="cart-options-item">
				<label class="cart-options-label">
					<input type="checkbox" value="382795" data-course-id="382795" class="checkout-lifetime-access-course-offer" <?php if(matched_cart_items('382795')) echo 'checked'; ?>>
					<div class="cart-options-title">
						<strong>Lifetime Course Access £4.99 (75% off)</strong>
					</div>
				</label>
			</div>
		</div>
		<?php
	} 

    // $value = WC()->session->get('add_a_product');
?>
<div class="la-checkout-special-offer d-none">
    <!-- <h4>Deal Of The Month</h4>	 -->
    <h4>Deal Of The Day <img src="/wp-content/uploads/2022/12/fire-icon.gif"></h4>	
	<div class="cart-options-item">
		<label class="cart-options-label">
			<input type="checkbox" value="49" class="cart-option-input">
			<div class="cart-options-title">
				<strong>Lifetime Membership For Only £149</strong>
				<!-- <span class="u-regular">+299</span> -->
			</div>
			<!-- <div class="cart-options__desc">High Quality Study Materials | CPD Certified Courses | Unlimited Access | Learn New Skills On Your Schedule</div> -->
			<div class="cart-options__desc">Lifetime Access | Get 1000+ CPD Accredited Courses | Free Student ID Card | 24/7 Customer Support | Tutor Support <a href="/subscription" target="_blank">Learn More</a></div>
			
<!-- Get Free Access For 2 Family Members

Free CPD Accredited PDF Certificate for 10 Courses
Free CPD Accredited Hardcopy Certificate for 4 Courses
Free Course Completion PDF Certificate -->



		</label>
	</div>
</div>
<?php
}

// The jQuery Ajax request
add_action( 'wp_footer', 'checkout_custom_jquery_script' );
function checkout_custom_jquery_script() {
    // Only checkout page
    if( is_checkout() && ! is_wc_endpoint_url() ):

    // Remove custom WC session variables on load
    if( WC()->session->get('add_a_product') ){
        WC()->session->__unset('add_a_product');
    }
    if( WC()->session->get('product_added_key') ){
        WC()->session->__unset('product_added_key');
    }
    // jQuery Ajax code
    ?>
    <script type="text/javascript">
    jQuery( function($){
        if (typeof wc_checkout_params === 'undefined')
            return false;

        $('.cart-options-item label.cart-options-label input.cart-option-input').on( 'change', function(){
            var value = $(this).prop('checked') === true ? 'yes' : 'no';

            $.ajax({
                type: 'POST',
                url: wc_checkout_params.ajax_url,
                data: {
                    'action': 'add_a_product',
                    'add_a_product': value,
                },
                success: function (result) {
                    $('body').trigger('update_checkout');
                    console.log(result);
                }
            });
        });
    });
    </script>
    <?php
    endif;
}

// The Wordpress Ajax PHP receiver
add_action( 'wp_ajax_add_a_product', 'checkout_ajax_add_a_product' );
add_action( 'wp_ajax_nopriv_add_a_product', 'checkout_ajax_add_a_product' );
function checkout_ajax_add_a_product() {
    if ( isset($_POST['add_a_product']) ){
        WC()->session->set('add_a_product', esc_attr($_POST['add_a_product']));
        echo $_POST['add_a_product'];
    }
    die();
}

//WP Send Mail
add_action('wp_ajax_send_wp_mail_query', 'send_wp_mail_query_function');
add_action('wp_ajax_nopriv_send_wp_mail_query', 'send_wp_mail_query_function');
function send_wp_mail_query_function(){
	$to = 'info@lead-academy.org';
	//$to = 'akashkhan85@gmail.com';
	$name = sanitize_text_field($_POST['name']);
	$mail = sanitize_email($_POST['mail']);
	$phone = sanitize_text_field($_POST['phone']);
	$url = sanitize_url($_POST['url']);
	$subject = 'Query For '.htmlspecialchars_decode($url);
	$message = "<p style='font-size:20px'>";
	$message .= "Name: $name <br>";
	$message .= "Phone: $phone <br>";
	$message .= "$mail<br>";
	$message .= "$url";
	$message .= "</p>";
	$headers = array( 'Content-Type: text/html; charset=UTF-8' );
	if(wp_mail($to, $subject, $message, $headers)){
		echo 'Mail Sent';
	}else{
		echo 'Error';
	}
}

// Add remove free product
add_action( 'woocommerce_before_calculate_totals', 'adding_removing_specific_product' );
function adding_removing_specific_product( $cart ) {
    if (is_admin() && !defined('DOING_AJAX'))
        return;

    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 )
        return;

	// $special_offer_course_id = 365013;
	$special_offer_course_id = 365275;
    if( WC()->session->get('add_a_product') == 'yes' && ! WC()->session->get('product_added_key') )
    {
        $cart_item_key = $cart->add_to_cart( $special_offer_course_id );
        WC()->session->set('product_added_key', $cart_item_key);
    }
    elseif( WC()->session->get('add_a_product') == 'no' && WC()->session->get('product_added_key') )
    {
        $cart_item_key = WC()->session->get('product_added_key');
        $cart->remove_cart_item( $cart_item_key );
        WC()->session->__unset('product_added_key');
    }
}

// Adding images after place order button
// add_action( 'woocommerce_review_order_after_submit', 'add_images_after_checkout_button' );
add_action( 'woocommerce_checkout_order_review', 'add_images_after_checkout_button' );

function add_images_after_checkout_button() {
?>
<div id="la-payment-images-after-order-button">
	<img src="<?php echo get_site_url()?>/wp-content/uploads/2022/10/lead-payment-logos.png">
	<img src="<?php echo get_site_url()?>/wp-content/uploads/2022/10/LA-footer-promise.png">
</div>
<?php
}

// API Key
// PCW2H-BFQ2Z-DCDDS-8BMZE

// After checkout form
add_action('woocommerce_after_checkout_form', 'la_adding_postcode_auto_fillup_script');
function la_adding_postcode_auto_fillup_script(){
	?>
	<script>
		// Adding the Search Button
		var whereToAddSearchBtn = document.getElementById("billing_postcode").parentNode.parentNode;
		var button = document.createElement('span');
		var text = document.createTextNode("Search");
		button.id = 'btn_search_postcode';
		button.appendChild(text);
		whereToAddSearchBtn.appendChild(button);

		var searchButton = document.getElementById('btn_search_postcode');
		// searchButton.style.display = 'none';
		
		// Creating Address Selection Container Element
		var addressSelectionContainer = document.createElement('div');
		addressSelectionContainer.id = 'address_selection_container';
		searchButton.parentNode.appendChild(addressSelectionContainer);
		
		// Creating No Result Message Container Element
		var noResultMessageContainer = document.createElement('div');
		noResultMessageContainer.id = 'no_result_message';
		var text = document.createTextNode("Address not found, please enter manually.");
		noResultMessageContainer.appendChild(text);
		searchButton.parentNode.appendChild(noResultMessageContainer);

		// Prevent loading page
		searchButton.addEventListener('click', function(e){
			e.stopPropagation();
			console.log('search button clicked');
			// return false;
		});

		// Initializing the Post Coder Address Function
        new PostcoderAddress({
            // apikey: 'PCW45-12345-12345-1234X', 
            // apikey: 'PCW2H-BFQ2Z-DCDDS-8BMZE', 
            apikey: 'PCWP7-STA3L-8X8CK-ZB7HB', 
            searchterm: '#billing_postcode', // query selector of the searchterm input field
            addressselectioncontainer: '#address_selection_container', // container for the address selection drop down
            noresultmessage: '#no_result_message',
            country: '#billing_country',  // Country select list; leave blank if not using a country select list 
            countrycode: '', // Hard code if not using a country select list; leave blank otherwise 
            searchbutton: '#btn_search_postcode', 
            organisation: '',  // Leave blank if form does not have a separate organisation field 
            addressline1: '#billing_address_1', 
            addressline2: '',  // Leave blank if form does not have an addressline2 
            addressline3: '',  // Leave blank if form does not have an addressline3 
            //addressline4: '',  // Leave blank if form does not have an addressline4
            county: '', // Leave blank if form does not have a county
            posttown: '#billing_city', 
            postcode: '#billing_postcode' 
        })

    </script>
	<?php
}

// make sure the priority value is correct, running after the default priority.
remove_action( 'woocommerce_checkout_order_review', 'woocommerce_checkout_payment', 20 );
add_action( 'woocommerce_after_order_notes', 'woocommerce_checkout_payment', 20 );

function woocommerce_checkout_adding_payment_title() {

	// if ( la_is_cart_items_belongs_to_specified_cats( [ 331 ] ) && 4 == get_current_user_id() ) {
	// 	echo '<h2>FS Courses in Cart</h2>';
	// }

	// Black Friday Deal Contents
	?>
	<div class="la-black-friday-deal-checkout">
		<div class="la-cart-special-offers-overlay-layer">
			<p>We're adding the Deal to the cart..</p>
		</div>

		<h3>You Just Unlocked the Best Deal of the Month! <img src="/wp-content/uploads/2022/12/fire-icon.gif"></h3>
		<div class="cart-options-item">
			<label class="cart-options-label">
				<div class="la-office-2021-purchase-wrap">
					<strong>
						MS Office 2021 Lifetime Subscription <br>(Windows/Mac) - £99 (75% off)
					</strong>

					<div class="la-office-2021-button-wrap" data-course-id="387181">
						<a href="#" data-course-var-id="387182" class="purchase-office-2021">Add to Cart</a>
					</div>
				</div>
				<hr>
				<div class="cart-options-title">
					<strong>MS Office 2019 Lifetime Subscription (Windows/Mac) - £26 (75% off)</strong>
					<a href="#" id="la-black-friday-deal-checkout-btn" data-course-id="384735">Add to Cart</a>
				</div>
			</label>
		</div>
		<div class="cart-vanue-time-wrap">
			<ul>
				<li>This product sells on <b>£344.88 on Microsoft Website</b> and it's available for £26 for only this time.</li>
				<li>This offer is NOT available at ANY other time or place.</li>
			</ul>
		</div>
	</div>
	<?php
	// Payment options - Checkout
	echo '<h3 class="la-checkout-addtion-payment-title">Payment Options</h3>';

	// Return true while the provided product variations matched once
	function la_is_this_product_vars_in_cart( $product_id ) {
		$specific_var_ids = la_get_variable_ids_by_product_id( $product_id );
		if ( count( $specific_var_ids ) > 0 ) {
			foreach( $specific_var_ids['variation_ids'] as $single_var_id ) {
				if( matched_cart_items( $single_var_id ) > 0 ) {
					return true;
				}
			}
		}
	}
	// Return true while the provided product variations matched once
	function la_is_this_product_title_has_month() {
		// $variable_title = [];
		foreach ( WC()->cart->get_cart() as $cart_item ) {
			$variation_id 		= $cart_item['variation_id'];
			$variation 			= wc_get_product($variation_id);
			$variable_title 	= wc_get_formatted_variation( $variation, true, false, false );
			if ( strpos( trim($variable_title), 'Monthly' ) !== false ) {
				return true;
			}
		}
	}

	$cart_order_titles = array(); // Initializing
    // Loop through cart items 
    foreach ( WC()->cart->get_cart() as $cart_item ) {
        $cart_order_titles[] = $cart_item['data']->get_attribute( 'boards' ) ? strtolower($cart_item['data']->get_attribute( 'boards' )) : 'N/A';
	}

	// 372121			Higher - GCSE Maths Online Course Only Monthly
	// 372102			Higher - GCSE Maths Online Course + GCSE Maths Exam Monthly
	// 374115			Foundation - GCSE Maths Online Course Only Monthly
	// 382310			Foundation - GCSE Maths Online Course + GCSE Maths Exam Monthly

	if(get_current_user_id()==144){
		echo '<pre>';
		var_dump($cart_order_titles);
		echo '</pre>';
	}
	// Check the expected variation
	if ( 
		in_array( 'pay in 6', $cart_order_titles ) 			// If course attribute matched
		|| in_array( 'pay in 10', $cart_order_titles ) 		// If course attribute matched
		|| la_is_this_product_title_has_month()				// GCSE Custom Post Type - Math
	) {
		?>
		<style>
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.payment_method_stripe, .woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.payment_method_eh_paypal_express, .woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.payment_method_klarna_payments_pay_over_time, .woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.wc_payment_method.payment_method_clearpay, .woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.wc_payment_method{
				display: none;
			}
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.payment_method_gocardless {
				display: block;
			}
		</style>
		<?php
	}

	// Check the expected variation
	if ( in_array( 'Pay in 12 months', $cart_order_titles ) && ( ( matched_cart_items( '376838' ) > 0 ) || ( matched_cart_items( '376839' ) > 0 ) ) ) {
		?>
		<style>
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.wc_payment_method {
				display: none;
			}
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.payment_method_gocardless {
				display: block;
			}
		</style>
		<?php
	}

	// Check the expected Product/variation in cart or not
	if ( 
		WC()->cart->total <= 260 // If Cart total less than or equal to 260
		// Functional Skills Maths Level 1 Online Course with Exam
		|| (matched_cart_items( '363596' ) > 0) // NCFE - Official Remote Exam Only
		|| (matched_cart_items( '363590') > 0) // Edexcel - Official Exam Only
		// Functional Skills English Level 1 Online Course with Exam
		|| (matched_cart_items( '363544' ) > 0) // NCFE - Official Remote Exam Only
		|| (matched_cart_items( '363538') > 0) // Edexcel - Official Exam Only
		// Functional Skills Maths Level 2 Online Course and Exam
		|| (matched_cart_items( '363607' ) > 0) // NCFE - Official Exam Only
		|| (matched_cart_items( '363602') > 0) // Edexcel - Official Exam Only
		// Functional Skills English Level 2 Online Course and Exam
		|| (matched_cart_items( '363565' ) > 0) // NCFE - Official Exam Only
		|| (matched_cart_items( '363560') > 0) // Edexcel - Official Exam Only
		// Functional Skills Maths and English Level 2 Course | GCSE Equivalent
		|| (matched_cart_items( '364470' ) > 0) // NCFE - Official Remote Exam Only
		|| (matched_cart_items( '364472' ) > 0) // NCFE - Official Paper Based Exam..
		|| (matched_cart_items( '364475') > 0) // Edexcel - Official Exam Only
		// Certificate in British Sign Language Level 2 (RQF) - Official Exam Included
		|| (matched_cart_items( '364495') > 0) // Level 2 Award in BSL via Live Zoom Class + Official Exam - Variant
		// Phlebotomy Training Course
		|| la_is_this_product_vars_in_cart( '366854' ) == 1
		// Phlebotomy Training Swiindon
		|| la_is_this_product_vars_in_cart( '377824' ) == 1
		// Phlebotomy Training Bristol
		|| la_is_this_product_vars_in_cart( '376420' ) == 1
		// Phlebotomy Training Birmingham
		|| la_is_this_product_vars_in_cart( '376417' ) == 1
		// Phlebotomy Training Cardiff
		|| la_is_this_product_vars_in_cart( '408597' ) == 1
		// Advanced / Competency Phlebotomy Training
		|| la_is_this_product_vars_in_cart( '368595' ) == 1
		// Venepuncture and Cannulation Training - CPD Approved Training
		|| la_is_this_product_vars_in_cart( '371100' ) == 1
		// Catheterisation Training
		|| la_is_this_product_vars_in_cart( '370863' ) == 1
		// GCSE Courses
		|| (matched_cart_items( '382378' ) > 0) // GCSE Biology Online Course and Exam | AQA
		|| (matched_cart_items( '369150' ) > 0) // GCSE Chemistry Course and Exam | AQA
		|| (matched_cart_items( '379432' ) > 0) // GCSE Physics Online Course and Exam
		|| (matched_cart_items( '372103' ) > 0) // GCSE Maths Online Course and Exam | Edexcel
		|| (matched_cart_items( '372137' ) > 0) // GCSE English Language Course and Exam | AQA
		// Other Products
		|| (matched_cart_items( '386854' ) > 0) // GCSE English Language Course and Exam | AQA
		|| (matched_cart_items( '386245' ) > 0) // GCSE English Language Course and Exam | AQA
		|| (matched_cart_items( '387969' ) > 0) // Phlebotomy + Advanced Phlebotomy + Cannulation Training Payment 
		|| (matched_cart_items( '388301' ) > 0) // Phlebotomy + Advanced Phlebotomy + Cannulation Training Payment 
		|| (matched_cart_items( '389578' ) > 0) // Functional Skills English Level 2 Remaining Payment
		|| (matched_cart_items( '389578' ) > 0) // Functional Skills English Level 2 Remaining Payment 
		|| (matched_cart_items( '391043' ) > 0) // Advanced / Competency Phlebotomy Training Swindon
		|| (matched_cart_items( '393424' ) > 0) // Remaining Payment of Functional Skills Maths and English
		|| (matched_cart_items( '411950' ) > 0) // Remaining Payment for Basic and Advance Phlebotomy Training 
		|| (matched_cart_items( '414005' ) > 0) // Remaining Payment of Level 5 Diploma in Education and Training
	) {
		?>
		<style>
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.wc_payment_method.payment_method_partially {
				display: none;
			}
		</style>
		<?php
	}


	// Check the expected variation
	// if ( 
	// 	( matched_cart_items( '376838' ) > 0 ) // NCFE - Official Exam Only
	// 	|| ( matched_cart_items( '376839' ) > 0 ) // NCFE - Official Exam Only
	// ) {
	// }

	
	// Hiding all payment methods without the GoCardless only for these variants
	if ( 
		( matched_cart_items( '391454' ) > 0 )		// Level 3 Award in Education and Training
		|| 	( matched_cart_items( '374344' ) > 0 )		// Level 4 Certificate in Education and Training
		|| 	( matched_cart_items( '393169' ) > 0 )		// Level 5 Diploma in Education and Training
		|| 	( matched_cart_items( '440153' ) > 0 )		// Level 5 Diploma in Teaching (Further Education and Skills)
		// British Sign Language
		|| 	( matched_cart_items( '394708' ) > 0 )		// Level 3 Certificate in BSL (RQF) - Live Zoom Class
		|| 	( matched_cart_items( '394792' ) > 0 )		// Level 2 Certificate in BSL (RQF) - Live Zoom Class
		//|| 	( matched_cart_items( '364495' ) > 0 )		// Level 1 Certificate in BSL (RQF) - Live Zoom Class
		// GCSE Courses
		|| (matched_cart_items( '368905' ) > 0) // GCSE Biology Online Course and Exam | AQA
		|| (matched_cart_items( '368929' ) > 0) // GCSE Chemistry Course and Exam | AQA
		|| (matched_cart_items( '379419' ) > 0) // GCSE Physics Online Course and Exam
		|| (matched_cart_items( '368926' ) > 0) // GCSE Maths Online Course and Exam | Edexcel
		|| (matched_cart_items( '372130' ) > 0) // GCSE English Language Course and Exam | AQA
		|| (matched_cart_items( '418542' ) > 0) // Level 3 Award in Health and Social Care Course | NVQ/RQF
	 ) {
		?>
		<style>
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li:not(.payment_method_gocardless) {
				display: none;
			}
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.payment_method_gocardless {
				display: block;
			}
		</style>
		<?php
	}

	// Hiding all payment methods without the Clearpay and Klarna only for these variants
	if ( 
		// Level 5 Diploma in Education and Training Payment
		matched_cart_items( '387963' ) > 0 ||

		// Remaining Payment of Phlebotomy Training Birmingham 
		matched_cart_items( '389342' ) > 0 ||

		// Remaining Payment for Advanced Phlebotomy 
		matched_cart_items( '389285' ) > 0 ||

		// Phlebotomy Training - London (26th February- 2 learners) 
		matched_cart_items( '389425' ) > 0
	 ) {
		?>
		<style>
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.wc_payment_method.payment_method_stripe,
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.wc_payment_method.payment_method_partially,
			.woocommerce-page.woocommerce-checkout #payment ul.payment_methods li.wc_payment_method.payment_method_eh_paypal_express
			{
				display: none;
			}
		</style>
		<?php
	}
}
add_action( 'woocommerce_after_order_notes', 'woocommerce_checkout_adding_payment_title', 19 );

// Disabling coupon for variables
add_filter( 'woocommerce_coupon_is_valid', 'custom_coupon_validity', 10, 3 );
function custom_coupon_validity( $is_valid, $coupon, $discount ){
	// echo '<pre>';
	// print_r($coupon->get_data()['id']);
	// print_r($discount);
	// echo '</pre>';

	$is_global_coupon = get_field('global-coupon', $coupon->get_data()['id']);
	if ( $is_global_coupon ) {
		return $is_valid;
	}
    $menu_orders = array(); // Initializing
    // Loop through cart items 
    foreach ( WC()->cart->get_cart() as $cart_item ) {
        $product = $cart_item['variation_id'] > 0 ? wc_get_product($cart_item['product_id']) : $cart_item['data'];

		if( $product->is_type('variable') ) {
			$menu_orders[] = $cart_item['data']->get_data()['menu_order'];
			// Loop through product attributes
			foreach( $menu_orders as $menu_order ) {
				if( $menu_order > 1 ) {
					$is_valid = false; // attribute found, coupons are not valid
					function coupon_error_message_change($err, $err_code, $WC_Coupon) {
						switch ( $err_code ) {				
							case $WC_Coupon::E_WC_COUPON_INVALID_FILTERED:
							$err = 'Sorry! This Coupon isn\'t applicable here.';
						}
						return $err;
					}
					
					add_filter( 'woocommerce_coupon_error','coupon_error_message_change',10,3 );
					break; // Stop and exit from the loop
				}
			}
        }
    }
    return $is_valid;
}

// Adding a custom checkout date field
add_filter( 'woocommerce_billing_fields', 'add_birth_date_billing_field', 20, 1 );
function add_birth_date_billing_field($billing_fields) {

    $billing_fields['billing_birth_date'] = array(
        'type'        => 'text', //[was date] make it text on request of Ali Shohel at 8-Match-2024 16:08PM BDT Time
        'label'       => __('Date Of Birth [Needed For Certification/Registration]'),
        'priority'    => 25,
        'required'    => true,
        'clear'       => true,
    );

	// Date of Birth 3 steps start
	$billing_fields['billing_birth_day'] = array(
		'type'     => 'select',
		'label'    => __('Day'),
		'required' => true,
		'priority' => 26,
		'options'  => array_merge(['0' => 'Day'], array_combine(range(1, 31), range(1, 31))),
	);

	$billing_fields['billing_birth_month'] = array(
		'type'     => 'select',
		'class'    => array('form-row-first'),
		'label'    => __('Month'),
		'required' => true,
		'priority' => 27,
		'options' => [
			'0'   => 'Month', // Default option
			'Jan' => 'January', 
			'Feb' => 'February', 
			'Mar' => 'March', 
			'Apr' => 'April', 
			'May' => 'May', 
			'Jun' => 'June', 
			'Jul' => 'July', 
			'Aug' => 'August', 
			'Sep' => 'September', 
			'Oct' => 'October', 
			'Nov' => 'November', 
			'Dec' => 'December'
		]
	);	
		
	// Year Select
	$current_year = date('Y');
	$years = ['0' => 'Year'] + array_combine(range($current_year, 1901, -1), range($current_year, 1901, -1));
	$billing_fields['billing_birth_year'] = array(
        'type'    => 'select',
		'class'       => array('form-row-last'),
		'label'   => __('Year'),
		'required' => true,
		'priority' => 28,
		'options' => $years,
    );
	// Date of Birth 3 steps end

    return $billing_fields;
}


//Hide side cart icon specified category courses
function hide_side_cart_icon_on_specific_category_products() {
    // Define the category IDs where you want to hide the side cart icon.
    $category_ids_to_hide_icon = array(331, 392, 359, 17); // Replace with your category IDs.

    // Get the current product page ID.
    $current_product_id = get_the_ID();

    // Check if the current product belongs to any of the specified categories.
    if (has_term($category_ids_to_hide_icon, 'product_cat', $current_product_id)) {
        echo '<style>.xoo-wsc-modal { display: none !important; }</style>';
    }
}

add_action('wp_head', 'hide_side_cart_icon_on_specific_category_products');


/**
 * Automatically add an CPD & IPHM Accredited (Duel Accreditation) PDF Certificate + Transcript product to the cart when a product from the "massage therapy" category is added.
 */
function add_accredited_product_to_cart() {
    // Check if we are on the cart or checkout page.
    if ( is_cart() || is_checkout() ) {
        // Replace with the ID of your accredited product.
        $accredited_product_id = '382443';

        // Replace with the ID of your "massage therapy" category.
        $massage_category_id = '295';
        $bsl_category_id = '300';

        $found_category_product = false;

        // Check for products in the cart.
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
            // Check if a product from the "massage therapy" category is in the cart.
            if ( 
				has_term( $massage_category_id, 'product_cat', $cart_item['product_id'] )
				// || has_term( $bsl_category_id, 'product_cat', $cart_item['product_id'] ) 
			) {
                $found_category_product = true;
                break;
            }
        }

        // Check if the accredited product is not already in the cart and massage therapy product is found.
        if ( $found_category_product && !WC()->cart->find_product_in_cart( $accredited_product_id ) ) {
            // Check if the session variable is not set.
            if ( !WC()->session->get( 'accredited_product_added' ) ) {
                WC()->cart->add_to_cart( $accredited_product_id );
                WC()->session->set( 'accredited_product_added', true );
            }
        } elseif (!$found_category_product) {
            // Reset the session variable if the massage therapy product is removed from the cart.
            WC()->session->__unset( 'accredited_product_added' );
        }
    }
}
add_action( 'wp', 'add_accredited_product_to_cart' );

/**
 * ===============================================================
 * Hide 👉 CPD UK PDF Certificate for Massage Therapy Category
 * ===============================================================
 */

 function hide_section_based_on_category_massage_therapy() {

 

    if (is_product() && has_term('massage-therapy', 'product_cat')) {

        echo '<style type="text/css">.single-product #course-price .mt-3 { display: none; }</style>';

    }

}

add_action('wp_head', 'hide_section_based_on_category_massage_therapy');


// Redirect to cart while cancelled the payment
add_action('woocommerce_cancelled_order','lenura_redirect_to_home');
 function lenura_redirect_to_home() {
    wp_redirect(home_url( '/cart/' )); // REDIRECT PATH
 }

// Apply coupon for specific products
function la_apply_coupon_based_on_products( $coupon ) {
	if ( $coupon == 'ne2p15' ) {
		// Array of predefined product IDs or variable product IDs

		// If more than two predefined products or variable products are in the cart, apply the coupon
		if ( la_check_predefined_products_in_cart() >= 2 ) {
		} else {
			wc_clear_notices();
			wc_add_notice( 'Sorry! You have to purchase 2 or more items from the listed Courses for applying the Coupon.', 'notice' );
			// Remove the coupon from the cart
			WC()->cart->remove_coupon( 'ne2p15' );
		}
	}
}
add_action( 'woocommerce_applied_coupon', 'la_apply_coupon_based_on_products', 10, 1 );

// Check those products again if any item removed from the cart
function check_products_in_cart() {
    // Check if the coupon is already applied
    if ( WC()->cart->has_discount( 'ne2p15' ) ) {
		
		// wc_add_notice( 'the coupon in the cart.', 'notice' );
		if ( !(la_check_predefined_products_in_cart() >= 2)) {
			wc_clear_notices();
			// // Remove the coupon from the cart
			WC()->cart->remove_coupon( 'ne2p15' );
			// // Optionally display a notice
			wc_add_notice( 'Coupon Removed! You have to purchase 2 or more items from the listed Courses for applying the Coupon.', 'notice' );
		}
    }
}

add_action( 'woocommerce_before_calculate_totals', 'check_products_in_cart' );

// Check products in the cart
function la_check_predefined_products_in_cart() {
	$predefined_product_ids = array( 
		382016, // Advanced/Competency Phlebotomy Training Birmingham
		368595, // Advanced/Competency Phlebotomy Training London
		386971, // Advanced/Competency Phlebotomy Training Swindon
		410644, // Advanced/Competency Phlebotomy Training Bristol
		380389, // Cannulation Training Course London - CPD Approved (15% Off)
		388994, // ECG Training - ECG Interpretation Course | London
		413703, // ECG Training - ECG Interpretation Course | Birmingham
		387587,  // Vaccination and Immunisation Training | Flu & COVID Vaccine Training
		413724  // Vaccination and Immunisation Training | Flu & COVID Vaccine Training
	);

	// Count how many predefined products or variable products are in the cart
	$predefined_product_count = 0;
	foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
		$product_id = $cart_item['product_id'];
		if ( in_array( $product_id, $predefined_product_ids ) ) {
			$predefined_product_count += $cart_item['quantity'];
		}
	}
	return $predefined_product_count;
}

// Fetching Google Sheets data using the API
function fetch_course_names_from_google_sheet() {
    // Google Sheets API URL for your spreadsheet and range
    $spreadsheetId = '1ZTyb5t0REEfi10gREJJ3AegnGDO3RJBJwffs68gqWFQ';
    $range = 'Sheet1!A2:A'; // Assuming course names are in column A
    $apiKey = 'AIzaSyAwEiWzbMMrvsTBlYHl_saxf-YUUO_0zTM';

    $url = "https://sheets.googleapis.com/v4/spreadsheets/$spreadsheetId/values/$range?key=$apiKey";

    $response = wp_remote_get($url);
    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (!empty($data['values'])) {
        return array_map('trim', array_column($data['values'], 0));
    }

    return [];
}

// Handle the AJAX request to fetch course names
function get_course_names() {
    // Debug message
    error_log('AJAX called for fetching course names');
    
    $course_names = fetch_course_names_from_google_sheet();
    wp_send_json($course_names); // Send data back as JSON
}
add_action('wp_ajax_get_course_names', 'get_course_names');
add_action('wp_ajax_nopriv_get_course_names', 'get_course_names');

function enqueue_course_autocomplete_script() {
    // Define the IDs or slugs of the pages where you want to enqueue the script
    $target_pages = array('order-certificate', 'endorsed-certificate'); // Replace with actual slugs

    // Check if we are on one of the target pages
    if (is_page($target_pages)) {
        // Enqueue jQuery UI Autocomplete
        wp_enqueue_script('jquery-ui-autocomplete');
        
		// Enqueue your custom JS file
        wp_enqueue_script('course-autocomplete', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/course-autocomplete-gravity-form.js', array('jquery'), null, true);
        
        // Localize ajaxurl to pass it to JavaScript
        wp_localize_script('course-autocomplete', 'ajaxurl', array('url' => admin_url('admin-ajax.php')));
    }
}
add_action('wp_enqueue_scripts', 'enqueue_course_autocomplete_script');

// Displaying Learner Information in the Admin Order Edit Page
add_action('woocommerce_admin_order_data_after_order_details', 'display_learner_meta_fields_in_admin');
function display_learner_meta_fields_in_admin($order){
	$existing_learners = get_post_meta($order->get_id(), 'learners', true);
	if( is_array($existing_learners) ) {
		foreach($existing_learners as $info){
			echo "<h4>Course Information: {$info['course_info']}</h4>";
			echo "<p><strong>Name:</strong> {$info['person_title']} {$info['first_name']} {$info['last_name']} ({$info['profession']})</p>";
			echo "<p><strong>Phone:</strong> {$info['phone']}</p>";
			echo "<p><strong>Email:</strong> {$info['email']}</p>";
			echo "<p><strong>Date of Birth:</strong> {$info['date_of_birth']}</p>";
			echo "<p><strong>Address:</strong> {$info['billing_address_1']}, {$info['billing_postcode']}, {$info['billing_city']}, {$info['billing_country']}</p>";
		}
	}
}


add_filter('woocommerce_available_payment_gateways', 'remove_payment_methods_for_specific_product');
function remove_payment_methods_for_specific_product($available_gateways) {
    if (is_admin()) return $available_gateways;
	
	if (!WC()->cart) return $available_gateways;
    $product_id_to_check = 409463;
    $product_in_cart = false;

    // Check if the specific product is in the cart
    foreach (WC()->cart->get_cart() as $cart_item) {
        if ($cart_item['product_id'] == $product_id_to_check) {
            $product_in_cart = true;
            break;
        }
    }

    // If the product is in the cart, remove specific payment methods
    if ($product_in_cart) {
        unset($available_gateways['gocardless']);
        unset($available_gateways['partially']);
    }

    return $available_gateways;
}

/** Custom add to cart post function */
function ajax_add_to_cart_la() {
    if (isset($_POST['product_id']) || isset($_POST['variation_id'])) {
        $product_id = intval($_POST['product_id']);
        $variation_id = intval($_POST['variation_id']);
        $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

        if ($product_id && $variation_id){
            // Add the product to the cart
            $added = WC()->cart->add_to_cart($product_id, $quantity, $variation_id);
        } elseif ($variation_id){
            $added = WC()->cart->add_to_cart($variation_id, $quantity);
        } else {
            $added = WC()->cart->add_to_cart($product_id, $quantity);
        }

        if ($added) {
            wp_send_json_success([
                "message" => "Successfully add to cart",
                'cart_url' => wc_get_checkout_url(),
            ]);
        } else {
            wp_send_json_error([
                'message' => 'Could not add product to cart'
            ]);
        }
    }
}
add_action('wp_ajax_ajax_add_to_cart_la', 'ajax_add_to_cart_la');
add_action('wp_ajax_nopriv_ajax_add_to_cart_la', 'ajax_add_to_cart_la');
/** Custom add to cart post function */


function svg_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'svg_mime_types');

// Checkout Page Student ID Card
function student_id_card(){
    ?>
    <div id="checkout_page-student_id_card">
        <div class="student_id_card_banner">
            <div class="student_id_card_banner-content">
                <h1>Add a Student ID Card</h1>
                <p>Get your student ID card and avail exclusive discounts on several websites and stores for 3 years for just £14.99</p>
                <a href="#" id="la-black-friday-deal-checkout-btn" data-course-id="365011" class="student_id_card_add-card-btn">ADD OFFER TO CART</a>
            </div>
            <div class="student_id_card_banner-image">
                <img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/banner.webp" title="Student ID Card" alt="Student ID Card">
            </div>
        </div>
    </div>

    <style>
    .loader {
        border: 2px solid #f3f3f3;
        border-top: 2px solid #3498db;
        border-radius: 50%;
        width: 12px;
        height: 12px;
        display: inline-block;
        animation: spin 1s linear infinite;
        vertical-align: middle;
		margin-left: 20px;
    }
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
	.added-success {
		color: #fff;
		font-weight: bold;
		margin: 2px;
		font-size: 13px;
		display: block;
	}
    </style>

    <!-- Inline JavaScript using jQuery -->
    <script>
    jQuery(document).ready(function($){
        $('#la-black-friday-deal-checkout-btn').on('click', function(e){
            e.preventDefault();
            var $btn = $(this);
            
            if ($btn.next('.loader').length === 0) {
                var loader = $('<span class="loader"></span>');
                $btn.after(loader);
            }
            
            setTimeout(function(){
                $btn.next('.loader').remove();
                
                var successMessage = $('<span class="added-success">Added Successfully</span>');
                $btn.after(successMessage);
                
                setTimeout(function(){
                    successMessage.fadeOut('slow', function(){
                        $(this).remove();
                    });
                }, 2000);
            }, 2000); 
        });
    });
    </script>
    <?php
}
//add_action('woocommerce_checkout_before_customer_details','student_id_card',1);


/**
 * FINAL VERSION: Generate and inject separate, corrected schemas for Course, Reviews, and FAQ.
 * This version handles all requirements:
 * 1. Creates a separate Course schema for product/course pages.
 * 2. Creates a separate Review Snippet for products.
 * 3. Calculates aggregateRating from all reviews but displays only the latest 15 reviews.
 * 4. Creates a separate FAQPage Snippet from the 'product_faqs' custom field.
 * 5. Ensures no errors on pages where course/product data is not available.
 */
add_action('wp_footer', 'la_generate_all_structured_data');

function la_generate_all_structured_data()
{
    // Exit if it's an admin page
    if (is_admin()) {
        return;
    }

    $post_id = get_the_ID();
    $post_type = get_post_type($post_id);
    
    // ======================================================
    //   SCHEMA BLOCK 1: COURSE (For "Course list item" snippet)
    // ======================================================
    
    // This block should run on single product pages
    // if (is_singular('product')) {
    //     $product = wc_get_product($post_id);
    //     if ($product) {
    //         $course_schema = [
    //             '@context' => 'https://schema.org',
    //             '@type' => 'Course',
    //             'name' => $product->get_name(),
    //             'description' => $product->get_short_description() ?: $product->get_description(),
    //             'provider' => [
    //                 '@type' => 'Organization',
    //                 'name' => 'Lead Academy',
    //             ],
    //         ];

    //         // --- Build "offers" Object ---
    //         $price = $product->get_price();
    //         if (!empty($price)) {
    //             $course_schema['offers'] = [
    //                 '@type' => 'Offer',
    //                 'price' => $price,
    //                 'priceCurrency' => get_woocommerce_currency(),
    //                 'availability' => 'https://schema.org/InStock',
    //             ];
    //         }
            
    //         // --- Build "hasCourseInstance" Object ---
    //         $course_schema['hasCourseInstance'] = [
    //             '@type' => 'CourseInstance',
    //             'courseMode' => 'https://schema.org/BlendedMode', // Correct enum for Blended Learning
    //             'courseWorkload' => 'PT11H', // A default workload value
    //         ];
            
    //         $image_id = $product->get_image_id();
    //         if ($image_id) {
    //              $course_schema['image'] = wp_get_attachment_url($image_id);
    //         }

    //         // --- Print the Course Schema Script ---
    //         echo '<script type="application/ld+json">' . json_encode($course_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
    //     }
    // }


    // ======================================================
    //   SCHEMA BLOCK 2: REVIEWS (For "Review snippets")
    // ======================================================
    if (is_singular('product')) {
        $reviews_data = get_post_meta($post_id, 'la_course_reviews', true);

        if (!empty($reviews_data) && is_array($reviews_data)) {
            
            $total_rating_sum = 0;
            $total_valid_review_count = 0;

            // First, calculate aggregate rating based on ALL reviews.
            foreach ($reviews_data as $review) {
                if (!empty($review['la_course_review_star']) && !empty($review['la_course_reviewer_name'])) {
                    $total_valid_review_count++;
                    $total_rating_sum += (float) $review['la_course_review_star'];
                }
            }

            if ($total_valid_review_count > 0) {
                // Sort reviews by date (newest first).
                usort($reviews_data, function ($a, $b) {
                    $date_a = !empty($a['la_course_review_date']) ? strtotime($a['la_course_review_date']) : 0;
                    $date_b = !empty($b['la_course_review_date']) ? strtotime($b['la_course_review_date']) : 0;
                    return $date_b <=> $date_a; // For descending order (newest first).
                });

                // Limit to the latest 15 reviews for the `review` property.
                $latest_15_reviews = array_slice($reviews_data, 0, 15);
                $review_schema_array = [];

                foreach ($latest_15_reviews as $review) {
                    if (empty($review['la_course_review_star']) || empty($review['la_course_reviewer_name'])) continue;

                    $iso_date = !empty($review['la_course_review_date']) ? gmdate('Y-m-d', strtotime($review['la_course_review_date'])) : '';
                    
                    $individual_review = [
                        '@type' => 'Review',
                        'name' => !empty($review['la_course_review_title']) ? $review['la_course_review_title'] : '',
                        'reviewRating' => ['@type' => 'Rating', 'ratingValue' => (string)$review['la_course_review_star'], 'bestRating' => '5', 'worstRating' => '1'],
                        'author' => ['@type' => 'Person', 'name' => $review['la_course_reviewer_name']],
                        'reviewBody' => !empty($review['la_course_review']) ? strip_tags($review['la_course_review']) : '',
                        'datePublished' => $iso_date,
                    ];
                    
                    if (!empty($review['la_google_user_image'])) {
                         $individual_review['author']['image'] = $review['la_google_user_image'];
                    }

                    $review_schema_array[] = $individual_review;
                }

                $aggregate_rating_schema = [
                    '@type' => 'AggregateRating',
                    'ratingValue' => (string) round($total_rating_sum / $total_valid_review_count, 2),
                    'reviewCount' => (string) $total_valid_review_count, // Use total count here.
                ];

                $review_container_schema = [
                    '@context' => 'https://schema.org',
                    '@type' => 'Product',
                    'name' => get_the_title($post_id),
                    'aggregateRating' => $aggregate_rating_schema,
                    'review' => $review_schema_array, // Only latest 15 reviews here.
                ];

                echo '<script type="application/ld+json">' . json_encode($review_container_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
            }
        }
    }
    
    // ======================================================
    //   SCHEMA BLOCK 3: FAQPage
    // ======================================================
    if (is_singular('product') || is_page()) {
        $faq_data = get_post_meta($post_id, 'product_faqs', true);

        if (!empty($faq_data) && is_array($faq_data)) {
            $faq_main_entity = [];
            foreach ($faq_data as $faq_item) {
                if (!empty($faq_item['faq_title']) && !empty($faq_item['faq_text'])) {
                    $faq_main_entity[] = [
                        '@type' => 'Question',
                        'name' => $faq_item['faq_title'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => wp_strip_all_tags($faq_item['faq_text']),
                        ],
                    ];
                }
            }

            if (!empty($faq_main_entity)) {
                $faq_schema = [
                    '@context' => 'https://schema.org',
                    '@type' => 'FAQPage',
                    'mainEntity' => $faq_main_entity,
                ];

                echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
            }
        }
    }
}

