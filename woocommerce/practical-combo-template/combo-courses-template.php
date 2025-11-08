<?php
/**
 * Combo Cannulation Product Template
 *
 * This template combines the tabbed course selection, sidebar pricing,
 * and popup functionality for a specific variable product.
 * It is designed to be a self-contained and customizable file.
 *
 * @version 1.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
    return;
}

  // Get the product ID
  $product_id = $product->get_id();

  // Fetch the single meta fields for titles
  $first_title  = get_post_meta( $product_id, 'course_facilities_first_title', true );
  $second_title = get_post_meta( $product_id, 'course_facilities_second_title', true );

  // Fetch the repeatable group field data
  $course_facilities = get_post_meta( $product_id, 'course_facilities_meta_group', true );

	// Banner Offer Section
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/banner-offer-section.php';

	// Top Info Contents - Big device
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/big-device-contents/top-info-sections.php';

	// Top Info Contents - Small device
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/small-device-contents/top-info-contents.php';

	//Bottom Fixed Buy Now Contents - Small device
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-bottom-fixed-buy-now-contents.php';

	//Top Banner Contents
	include ASTRA_CHILD_THEME_DIR . '/woocommerce/banner-offer-contents.php';

?>
<main id="la-single-main">
    <div class="container">
        <section id="main-content">
            <div id="main-left">
                <section id="la-small-screen-enroll-wrapper" class="">
                    <?php
                        // Phlebotomy Courses Right Sidebar Contents
                        include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-courses-right-sidebar-content.php';
                    ?>
                </section>
                
                <?php
                	// Content specific to Combo Face to Face Courses
                  include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-courses-top-contents.php';
                  // Screenshot and Main Content
                  include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-screenshot-wrap.php';
                  // Main Content for Combo Courses
					        include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-courses-main-content.php';
                ?>
			</div>
			<aside id="main-right">
          <?php
            include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-courses-right-sidebar-content.php';
          ?>
      </aside>
		</section>
		<?php
			// Reviews Section
			include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-courses-review.php';
			// Faqs Section
			include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-courses-faq.php';
      // Related Courses Section
      include ASTRA_CHILD_THEME_DIR . '/woocommerce/practical-combo-template/combo-related-courses.php';
		?>
	</div>
</main>

<script>
(function($){
  "use strict";

  // This script is specific to a product, you might want to make this more dynamic if needed.
  if (!document.body.classList.contains('postid-371100')) return;

  // Utility function to format price
  function formatGBP(v){ return '£' + (v == null ? '' : v); }

  // Reads price data from a button's data attributes
  function readPayloadFrom($btn){
    if (!$btn || !$btn.length) return null;
    return {
      onSale : Number($btn.data('on-sale')) === 1,
      sale   : $btn.data('sale'),
      regular: $btn.data('regular'),
      price  : $btn.data('price')
    };
  }

  // Updates the course fee display in the sidebar and mobile bottom bar
  function writeCourseFee(payload){
    if (!payload) return;
    
    // Sidebar price elements
    var $p1 = $('#course-fee-info .course-p1-price'); 
    var $p2 = $('#course-fee-info .course-p2-price'); 
    
    // Mobile bar price elements
    var $mobileSale = $('.mobile-sale-price');
    var $mobileRegular = $('.mobile-prev-price');

    if (payload.onSale && payload.sale){
        var salePriceHTML = formatGBP(payload.sale) + ' <span style="font-weight:normal;font-size:14px;padding-left:3px;">(Excl. VAT)</span>';
        var regularPriceText = payload.regular ? formatGBP(payload.regular) : '';

        // Update sidebar
        if ($p1.length) $p1.html(salePriceHTML);
        if ($p2.length) $p2.text(regularPriceText);

        // Update mobile bar (price only, VAT text is static in HTML)
        if ($mobileSale.length) $mobileSale.text(formatGBP(payload.sale));
        if ($mobileRegular.length) $mobileRegular.text(regularPriceText);

    } else {
        var base = payload.price || payload.regular || payload.sale || '';
        var basePriceHTML = formatGBP(base) + ' <span style="font-weight:normal;font-size:14px;padding-left:3px;">(Excl. VAT)</span>';
        
        // Update sidebar
        if ($p1.length) $p1.html(basePriceHTML);
        if ($p2.length) $p2.text('');
        
        // Update mobile bar
        if ($mobileSale.length) $mobileSale.text(formatGBP(base));
        if ($mobileRegular.length) $mobileRegular.text('');
    }
  }


  // Gets the currently active tab button
  function getActiveTabBtn($root){
    var $scope = $root && $root.length ? $root : $(document);
    var $active = $scope.find('.la-compact-tab-btn.active').first();
    if (!$active.length) $active = $scope.find('.la-compact-tab-btn').first();
    return $active.length ? $active : null;
  }

  // Sync price on initial page load
  function initialSync(){
    var $btn = getActiveTabBtn($(document));
    if ($btn) writeCourseFee( readPayloadFrom($btn) );
  }

  // Poll for tabs to be ready and set up a mutation observer for class changes
  function bootstrapSync(){
    var tried = 0, maxTries = 40; // ~2.4s
    var iv = setInterval(function(){
      tried++;
      var $btn = getActiveTabBtn($(document));
      if ($btn){
        writeCourseFee( readPayloadFrom($btn) );
        clearInterval(iv);
      }
      if (tried >= maxTries) clearInterval(iv);
    }, 60);

    try{
      var mo = new MutationObserver(function(muts){
        for (var i=0;i<muts.length;i++){
          var m = muts[i];
          if (m.type === 'attributes' && m.attributeName === 'class' && m.target.classList && m.target.classList.contains('la-compact-tab-btn') && m.target.classList.contains('active')) {
            // Only update sidebar price if the tab is NOT inside the popup
            if ($(m.target).closest('#la-dates-popup-wrapper').length === 0) {
              writeCourseFee( readPayloadFrom($(m.target)) );
            }
          }
        }
      });
      mo.observe(document.body, {attributes:true, subtree:true, attributeFilter:['class']});
    } catch(e){}
  }

  // --- Popup Logic ---
  var $popupWrapper = $('#la-dates-popup-wrapper');
  var $popupBody = $popupWrapper.find('.la-dates-popup-body');
  var $openBtn = $('#la-open-dates-popup'); // Corrected button ID
  var $closeBtn = $popupWrapper.find('.la-dates-popup-close');
  var $backdrop = $popupWrapper.find('.la-dates-popup-backdrop');

  function openPopup() {
    // 1. Clone the tab section into the popup
    var $contentToClone = $('#course-section-container').clone();
    $popupBody.html($contentToClone);

    // 2. Find the active tab on the main page
    var activeTabId = $('#main-content .la-compact-tab-btn.active').data('tab');

    // 3. Set the corresponding tab in the popup to active
    if (activeTabId) {
        $popupBody.find('.la-compact-tab-btn.active').removeClass('active');
        $popupBody.find('.la-compact-tab-content.active').removeClass('active');

        var $targetTab = $popupBody.find('.la-compact-tab-btn[data-tab="' + activeTabId + '"]');
        var $targetContent = $popupBody.find('#' + activeTabId);

        $targetTab.addClass('active');
        $targetContent.addClass('active');
    }

    // Re-run lucide icons for the cloned content
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
    
    // 4. Show the popup
    $popupWrapper.addClass('active').css('display', 'flex').hide().fadeIn(200);
  }

  function closePopup() {
    $popupWrapper.removeClass('active').fadeOut(200, function() {
        $popupBody.html(''); // Clear content after closing
    });
  }

  $openBtn.on('click', function(e) {
      e.preventDefault();
      openPopup();
  });

  $closeBtn.on('click', closePopup);
  $backdrop.on('click', closePopup);

  // Initialize script on document ready
  $(document).ready(function(){
    initialSync();
    bootstrapSync();

    // Add click handler for the mobile "SEE DATES" button
    // This will trigger the modal popup
    $(document).on('click', '#mobile-see-dates-btn', function(e) {
        e.preventDefault();
        // The sidebar button with this ID is the original trigger for the modal
        $('#enquiry-booking-modal').trigger('click');
    });
  });

})(jQuery);
</script>