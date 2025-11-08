<?php
/**
 * Functions for displaying the conditional flash sale popup.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

function unique_flash_sale_assets() {
    $target_product_ids = array(
        // Makeup and Beauty
        435450, 409404, 
        // Clinical Skills
        388994, 391063,
        // Massage Therapy
        439294, 414748, 421612, 414746, 441734, 441758,
        // Vaccination and Immunisation Training London | With Basic Life Support Skills
        387587,
        // Pat Training 23 Sep 2025
        451550, 413582
    ); //

    if ( is_product() ) { //
        $current_product_id = get_the_ID(); //

        if ( in_array( $current_product_id, $target_product_ids ) ) { //
            wp_enqueue_script( 'unique-flash-sale-script', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/offer-camping-form.js', array('jquery'), time(), true ); //
            wp_enqueue_style( 'unique-flash-sale-style', ASTRA_CHILD_THEME_DIR_URI . '/assets/css/offer-camping-form.css', array(), time(), 'all' ); //
            add_action( 'wp_footer', 'display_unique_flash_sale_popup' ); //
        }
    }
}
add_action( 'wp_enqueue_scripts', 'unique_flash_sale_assets' ); //

function display_unique_flash_sale_popup() {
    global $product;
    if ( ! is_a( $product, 'WC_Product' ) ) { //
        return;
    }
    $current_product_id = $product->get_id(); //
    $form_id = 0; //

    $makeup_ids = array(435450, 409404); //
    $clinical_ids = array(388994, 391063); //
    $massage_ids = array(439294, 414748, 421612, 414746, 441734, 441758); //
    $vaccination = array(387587);
    $patTraining = array(451550, 413582);

    if ( in_array($current_product_id, $makeup_ids) ) { //
        $form_id = "67aa2d6"; //
    } elseif ( in_array($current_product_id, $clinical_ids) ) { //
        $form_id = "f7d809a"; //
    } elseif ( in_array($current_product_id, $massage_ids) ) { //
        $form_id = "b8e5859"; //
    } elseif ( in_array($current_product_id, $vaccination) ) { //
        $form_id = "5d8f585"; //
    } elseif ( in_array($current_product_id, $patTraining) ) { //
        $form_id = "2cec3ce"; //
    }
    if ( $form_id > 0 ) { //
    ?>
    <div id="unique-flash-sale-popup" class="unique-popup-container">
        <div class="unique-popup-content">
            <div class="unique-popup-header">
                <p class="unique-popup-p">🔥24-HOUR FLASH SALE🔥</p>
                <span id="unique-popup-close" class="unique-popup-close">&times;</span>
            </div>
            <p>Grab 10% Off for the next 24 hours only</p>
            <?php
            echo do_shortcode('[contact-form-7 id=' . $form_id . ']'); //
            ?>
            <p class="unique-countdown-text">This offer expires in:</p>
            <div id="unique-countdown" class="unique-countdown"></div>
            <p><strong>*Don’t wait - this opportunity won't last long!*</strong></p>
            <p id="copy-confirmation" style="color:green; display:none;">Coupon code copied!</p>
        </div>
    </div>
    <?php
    }
}
