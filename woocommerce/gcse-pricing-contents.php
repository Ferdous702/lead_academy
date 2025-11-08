<div class="gcse-right-price-selection-wrap">
    <?php 
        $variable_product_ids = la_get_variable_ids_by_product_id( $current_product_id );
    ?>
    <div class="gcse-right-price-selection-holder gcse-study-options">
        <h3>Study Options</h3>
        <div class="gcse-right-price-selection d-flex justify-content-between">
            <?php
                $counter = 0;
                foreach ( array_unique($variable_product_ids['attribute_boards']) as $single_item ) {
                    $counter++;
                    $filterable_id = $counter == 1 ? 'foundation' : 'higher';
                    $active_class = $counter == 1 ? ' active' : '';
                    $checked_item = $counter == 1 ? ' checked' : '';
                    ?>
                    <div class="gcse-right-price-selection-single<?php echo esc_attr($active_class)?>" id="gcse-<?php echo esc_attr($filterable_id)?>-option-action">
                        <label class="checkbox-container">
                            <?php echo esc_html($single_item)?>
                            <input type="radio" name="gcse-study-option"<?php echo $checked_item?>>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                <?php
                if ( $counter > 2 ) {
                    break;
                }
                }
            ?>
        </div>
    </div>
    <div class="gcse-right-price-selection-holder gcse-course-options gcse-boxed-shade">
        <h3>1:1 Session</h3>
        <div class="gcse-head-extra-label">
            <?php 
                $title_str = get_the_title();
                $title_str_array = explode(' ', $title_str);
                $actual_title = $title_str_array['0'] .' '. $title_str_array[1];
            ?>
            <h5><?php echo $actual_title?> <a href="#"><i class="fa fa-info-circle"></i></a></h5>
            <p>Improves self-esteem and confidence with personalised unique learning experience</p>
        </div>
        <div class="gcse-right-price-selection">
            <?php
            // if ( $product->get_type() == 'variable' ) {
                $counter = 0;
                $j = 0;
                $attribute_boards = $variable_product_ids['attribute_boards'];
                $attribute_courses = $variable_product_ids['attribute_courses'];
                $unique_attr_vals = array_unique($attribute_boards);
                $count_attr_vals = array_count_values($attribute_boards);
                $attr_loop_vals = [];
                foreach( $count_attr_vals as $attr_val ){
                    $counter++;
                    $attr_loop_vals[] = $attr_val;
                    if ( $counter > 2 ) {
                        break;
                    }
                }       

                foreach ( $variable_product_ids['variation_ids'] as $variation_id ) {
                    $variations = la_get_variable_title_price_by_varid( $variation_id);
                    $variable_title = $attribute_courses[$j];
                    $variable_price = $variations['variable_price'];
                    $variable_both_prices = $variations['variations'];
                    $checked_item = $j == 0 ? 'checked' : '';
                    // $variable_discount_percentage = round( ( ( $variations['variations'][0] -  $variations['variations'][1] ) / $variations['variations'][0] ) * 100 );
                    if ( $j < $attr_loop_vals[0] ) {
                        $filterable_slug = 'foundation_tier';
                        $dynamic_style = '';
                    } else {
                        $filterable_slug = 'higher_tier';
                        $dynamic_style = ' style="display: none"';
                    }

                    if (strpos($variable_title, 'Monthly')) {
                        $monthly_pack_class = ' monthly_pack';
                    } else {
                        $monthly_pack_class = '';
                    }

                    if ( $j > 1 ) {
                        $dynamic_style = ' style="display: none"';
                    }
                    ?>
                    <div class="gcse-right-price-selection-single <?php echo esc_attr($filterable_slug.$monthly_pack_class)?>" data-payment-type="monthly"<?php echo $dynamic_style?>>
                        <label class="checkbox-container<?php echo $j == 1 || $j == 5 ? ' gcse-best-value' : ''?>" data-current-item="<?php echo $j?>">
                            <span>
                                <?php 
                                if ( $j == 0 || $j == 4 ) {
                                    echo '1 Session Per Week';
                                }
                                if ( $j == 1 || $j == 5 ) {
                                    echo '<span>Best value</span>';
                                    echo '2 Session Per Week';
                                }
                                ?>
                            </span>
                            <span>£<?php echo esc_html($variations['variations'][0])?></span>
                            <span> / month</span>
                            <input type="radio" name="gcse-course-option" value="<?php echo esc_attr($variations['variations'][0])?>" data-var-id="<?php echo esc_attr($variation_id)?>" <?php echo $checked_item?>>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <?php
                    $j++;
                }
            // }
            ?>
        </div>
    </div>
    <div class="gcse-include-fees-checkbox">            
        <div class="gcse-right-price-selection-single">
            <label class="checkbox-container">
                Include GCSE Exam (+260)
                <input type="checkbox" name="gcse-include-exam-fees" value="0" data-var-id="0">
                <span class="checkmark"></span>
            </label>
        </div>  
    </div>

    <div class="gcse-total-course-fees">
        <p class="gcse-course-fees-value d-none">
            <span>£</span>
            <span class="gcse-course-dynamic-fee">129</span>
        </p>
        <a href="#" id="gcse-enroll-btn" data-course-id="<?php echo esc_attr($current_product_id)?>">Enrol Now</a>
        <p class="gcse-course-ajax-confirmation-message"></p>
    </div>
</div>