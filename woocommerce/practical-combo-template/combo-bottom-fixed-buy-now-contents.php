<?php
// Only show this for face-to-face products.
if ( in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES) ) {
?>
<div class="bottom-fixed-phlebotomy-cta-mobile d-block d-sm-none d-flex justify-content-between">
    <div id="mobile-course-price">
        <span class="d-block">
            <span class="mobile-sale-price"></span>
            <small style="font-size: 15px;">+VAT</small>
        </span>
        <span class="d-block">
            <span class="mobile-prev-price"></span>
        </span>
    </div>
    <button id="mobile-see-dates-btn">SEE DATES</button>
</div>
<?php
}
?>