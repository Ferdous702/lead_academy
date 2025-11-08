<?php
// FAQ Section
if (isset($wc_product_faqs) && is_array($wc_product_faqs) && !empty($wc_product_faqs)) {
?>
    <div id="la-single-faq" class="overflow-hidden">
        <h2 class="text-center">FAQs</h2>
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <?php
            $counter = 20;
            foreach ($wc_product_faqs as $item) {
                $counter++;
                $is_first = ($counter === 21);
            ?>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="panelsStayOpen-heading<?php echo esc_attr($counter); ?>">
                        <button class="accordion-button <?php echo $is_first ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?php echo esc_attr($counter); ?>" aria-expanded="<?php echo $is_first ? 'true' : 'false'; ?>" aria-controls="panelsStayOpen-collapse<?php echo esc_attr($counter); ?>">
                            <?php echo isset($item['faq_title']) ? esc_html($item['faq_title']) : ''; ?>
                        </button>
                    </h3>
                    <div id="panelsStayOpen-collapse<?php echo esc_attr($counter); ?>" class="accordion-collapse collapse <?php echo $is_first ? 'show' : ''; ?>" aria-labelledby="panelsStayOpen-heading<?php echo esc_attr($counter); ?>">
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
}
?>