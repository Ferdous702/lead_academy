<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<?php
if ( is_shop() ) {
    ?>
    <script>
        document.title = 'All Courses - Lead Academy';
    </script>
    <?php
    }
    // Initialize the variable with a default empty value to prevent errors
    $login_class = ''; 
    if(is_user_logged_in()){
        $login_class = "admin-class";
    }
?>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php //astra_body_top(); ?>
<?php 
    //wp_body_open(); 
    global $woocommerce;

    // Black Friday Deal Top 
    //if ( is_singular( 'product' ) || is_page( [374924, 343992, 354284] ) ) {

// Start from this line
$cpd_offer_text = "<b>🤍 Valentine's Special Offer!</b> 12 MONTHS ACCESS TO ALL COURSES";

$text_offer = '<b>🤍 Valentine\'s Special Offer!</b> Buy Any Course & Get A Free Premium McAfee Antivirus!';
if (is_product()) {
    $product_id = get_the_ID();
    if ($product_id) {
        $product = wc_get_product($product_id);
        if ($product) {
            $product_price = $product->get_price();
            if($product_price < 30){
                $text_offer = $cpd_offer_text;
                $text_offer = '<a href="/subscription">'.$cpd_offer_text.'</a>';
            }
        }
    }
}
/*
?>
<div class="la-black-friday-deal-top-bar d-block d-sm-none">
    <p><?=$text_offer?></p>
    <p class="la-black-friday-deal-close-btn">X</p>
</div>
<?php
*/
    //}
?>
<header id="header">
    <div class="container">
        <div id="logo" class="display-inline-block">
            <a href="<?php echo get_bloginfo( 'url' ); ?>" class="display-inline-block">
                <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2013/11/lead-academy-logo.webp" alt="lead-academy-logo" title="lead-academy-logo" width="230" height="46"> 
            </a>
        </div>

    <script>
        jQuery(document).ready(function () {
            function handleOnResize(){
                let headerElWidth = jQuery('#header').width();
                console.log('headerElWidth '+headerElWidth);
                if (headerElWidth < 1101){
                    jQuery('.courses-btn').on('click', function (e) {
                        e.preventDefault();
                        jQuery('.la-all-courses-mega-menu-wrap').addClass('show');
                        jQuery('#mobile-menu-expandable ul.product-categories').addClass('d-none');
                    });
                    jQuery('#mobile-menu-expandable div.textwidget > ul').append('<li class="la-popular-course more-cat"><span>More Categories <i class="fa fa-angle-double-right"></i></span></li>');
                    jQuery('#mobile-menu-expandable li.more-cat').click(function(){
                        jQuery('.la-all-courses-mega-menu-wrap').removeClass('show');
                        jQuery('#mobile-menu-expandable ul.product-categories').removeClass('d-none');
                        setTimeout(function() {
                            jQuery('.la-all-courses-mega-menu-wrap').addClass('show');
                        }, 300);
                    });
                    jQuery('#mobile-header-links a.top-search-icon').click(function(e){
                        e.preventDefault();
                        console.log('Clicked on Search');
                        if(jQuery('#header #mobile-header-search').is(":visible")){
                            jQuery("#mobile-menu-expandable").children().each(function(index, element){
                                if(index != 6){
                                    jQuery(this).show();
                                }
                            });
                            jQuery('#header .la-loggedin-user-icon').show();
                            jQuery('#mobile-menu-expandable').hide();
                        }else{
                            jQuery("#mobile-menu-expandable").children().each(function(index, element){
                                if(index != 6){
                                    jQuery(this).hide();
                                }
                            });
                            jQuery('#header .la-loggedin-user-icon').hide();
                            jQuery('#mobile-menu-expandable').show();
                        }
                    });
                    jQuery('#mobile-header-links .right-elements a.top-nav-bars').click(function(){
                        jQuery("#mobile-menu-expandable").children().each(function(index, element){
                            if(index != 6){
                                jQuery(this).show();
                            }
                        });
                        jQuery('#header #mobile-header-search').hide();
                        jQuery('#header .la-loggedin-user-icon').hide();
                        setTimeout(function() {
                            if(jQuery('#mobile-menu-expandable').is(":hidden")){
                                jQuery('.top-nav-bars').removeClass('expanded-menu-bar');
                            }
                        }, 500);
                    });
                    if(jQuery('#mobile-menu-expandable').hasClass('admin-class')){
                        jQuery('#mobile-menu-expandable > nav.subjects-menu-container.display-inline-block > div.la-all-courses-mega-menu-wrap').addClass('admin-class');
                    }
                }else{
                    setTimeout(function() {
                        console.log('Hide Tigger '+headerElWidth);
                        jQuery('#mobile-header-search').hide();
                    }, 5000);
                }
            }
            jQuery(window).resize(function(){
                //handleOnResize();
            });
            handleOnResize();
            /** * ====================================================================
             * Top header actions
             * ====================================================================
             */

            let topNavBars = jQuery('#mobile-header-links .right-elements a.top-nav-bars');
            let topMobileMenu = jQuery('#mobile-menu-expandable');
            let topHeaderSearch = jQuery('#header #mobile-header-search');
            let topSearchIcon = jQuery('#mobile-header-links .right-elements a.top-search-icon');
            topSearchIcon.on('click', function () {
                topHeaderSearch.slideToggle('fast');
            });
            topNavBars.on('click', function (e) {
                e.preventDefault();
                topMobileMenu.slideToggle('fast');
                jQuery(this).toggleClass('expanded-menu-bar');
                jQuery('body').toggleClass('no-scrolling-anymore');
                jQuery('.elementor-364497 .elementor-element.elementor-element-5339870').css({ 'z-index': '1' });
            });
            jQuery('#mobile-header-links .right-elements a.top-nav-bars.expanded-menu-bar').on('click', function () {
                jQuery('.elementor-364497 .elementor-element.elementor-element-5339870').css({ 'z-index': 'unset' });
            });

            jQuery('.la-popular-course-sml-devices p.la-mega-menu-label').prepend('<span class="back-to-mega-menu"><i class="fa fa-angle-double-left"></i> Back</span>');
            jQuery('.subjects-menu-container p.la-mega-menu-label').prepend('<span class="back-to-mega-menu"><i class="fa fa-angle-double-left"></i> Back</span>');
            jQuery('.back-to-mega-menu').on('click', function (e) {
                e.preventDefault();
                console.log('Clicked On back-to-mega-menu');
                jQuery('.la-popular-course-sml-devices, .la-all-courses-mega-menu-wrap, .la-hot-deals-submenu').removeClass('show');
            });
        });
    </script>
        <div id="mobile-header-links">
            <div class="right-elements">
                <a href="tel:03001245585" class="top-phone-icon lazyloaded" aria-label="Call us"> <i class="fa fa-phone"></i> <span class="d-none">Call us</span> </a>
                <a href="#" class="top-search-icon" aria-label="Search"> <i class="fa fa-search"></i> <span class="d-none">Search</span> </a>
                <a href="#" class="top-nav-bars" aria-label="Open navigation menu"> <i class="fa fa-bars"></i> <span class="d-none">Navbar</span> </a>
            </div>
        </div>
        <div id="mobile-menu-expandable" class="<?php echo esc_attr($login_class); ?>">
            <?php echo do_shortcode( '[courses_menu]' ); ?>

            <a href="<?php echo get_bloginfo( 'url' ); ?>/all-courses">
                <i class="fa fa-users"></i> All Courses
            </a>

            <nav class="hot-deal-wrapper">
                <a href="#" class="hot-deal-btn">
                    <i class="fa fa-fire"></i> Hot Deals <i class="fa fa-chevron-down"></i>
                </a>
                <div class="la-hot-deals-submenu <?php echo esc_attr($login_class); ?>">
                    <p class="mb-0"><span class="back-to-mega-menu"><i class="fa fa-angle-double-left"></i> Back</span></p>
                    <a href="/bundle-offer">Bundle Offer</a>
                    <a href="/staff-training">Staff Training</a>
                    <a href="/order-gift-card">Order Gift Card</a>
                </div>
            </nav>

            <a href="<?php echo get_site_url()?>/subscription" class="lifetime-membership">
                <i class="fa fa-shield"></i> Lifetime Membership
            </a>

            <a href="<?php echo get_site_url()?>/contact-us" class="contact-us-menu-item">
                <i class="fa fa-headphones"></i> Contact Us
            </a>
            
            <a href="<?php echo wc_get_cart_url()?>">
                <i class="fa fa-shopping-cart"></i> My Basket
            </a>

            <div class="display-inline-block la-ajax-src hide-tab hide-mobile">
                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            </div>

            <div id="mobile-header-search" class="display-inline-block la-ajax-src">
                <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
            </div>

            <?php
/*
            if ( is_user_logged_in() ) { ?>
                <div class="display-inline-flex hide-tab hide-mobile la-loggedin-user-icon">
                    <a href="#" class="loggedin-user-btn display-inline-block"><i class="fa fa-user"></i></a>
                    <div class="loggedin-user-submenu">
                        <a id="la-login-link" href="https://lms.lead-academy.org/student-portal/">Learning Portal</a>
                        <a href="/my-account">Billing Account</a>
                        <a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" class="header-user-link display-inline-block">Logout</a>
                    </div>
                </div>
                <a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" class="header-user-link">Logout</a>
            <?php } else { ?>
                <a id="la-login-link" href="<?php echo esc_url( 'https://lms.lead-academy.org/student-portal/' ); ?>" class="header-user-link login display-inline-block">
                    <i class="fa fa-user"></i> Login
                </a>
            <?php }
*/
            ?>
        </div>
    </div>
</header>
<?php
// Start from this line
$cpd_offer_image = "/wp-content/uploads/0223/12/Black-Friday-website-header.webp";

$img_offer = '<img width="100%" src="/wp-content/uploads/0223/12/Black-Friday-website-header.webp" title="Lead Academy Offer" alt="Lead Academy Offer">';
if (is_product()) {
    $product_id = get_the_ID();
    if ($product_id) {
        $product = wc_get_product($product_id);
        if ($product) {
            $product_price = $product->get_price();
            if($product_price < 30){
                $img_offer = '<a href="/subscription"><img width="100%" src="'.$cpd_offer_image.'" alt="Lead Academy Offer" title="Lead Academy Offer"></a>';
            }
        }
    }
}
?>
<div class="big-device-la-header-offer-content">
    <?=$img_offer?>
</div>
<style>
    /* Default styles: display for big device */
.big-device-la-header-offer-content {
    display: block;
    border-bottom: none !important;
}

.small-device-la-header-offer-content {
    display: none;
}

.la-black-friday-deal-top-bar p a {
    margin: 0;
    color: #fff;
    line-height: 20px;
    font-weight: bold;
}

div#mobile-header-search {
    display: none;
}

/* Media query for small devices (max-width: 767px) */
@media only screen and (max-width: 767px) {
    .big-device-la-header-offer-content {
        display: none; /* Hide big device content */
        border-bottom: none !important;
    }

    .small-device-la-header-offer-content {
        display: block; /* Show small device content */
    }

    .single-product .small-device-la-header-offer-content {
        display: none !important; /* Show small device content */
    }
    
    div#mobile-header-search {
        display: block;
        margin: 15px 0px 0px 0px;
    }
}

@media (min-width: 768px) and (max-width: 1024px) {
    div#mobile-header-search {
        display: block;
        margin: 15px 0px 0px 0px;
    }
}
</style>
<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	// astra_header_before();

	// astra_header();

	// astra_header_after();

	// astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>