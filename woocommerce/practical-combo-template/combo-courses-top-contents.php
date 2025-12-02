<?php
/**
 * Phlebotomy Courses Top Tab Contents
 * This version introduces a completely redesigned header with clear, step-by-step
 * instructions and a highly polished, professional, and unique tab design.
 * The mobile hover issue is fixed, and active tabs now feature a check-circle icon
 * for better user feedback. The core functionality remains unchanged.
 */

global $product;

// Ensure we have a variable product before proceeding
if ( $product && $product->is_type( 'variable' ) ) :

    $product_id = $product->get_id();
    $combo_tabs_data = get_post_meta($product_id, 'combo_course_tabs_group', true);
    
    // For product ID 371100, determine tab types based on course type slugs
    if ($product_id == 371100) {
        // Map course types to tab JSON files
        $course_types = ['phlebotomy-cannulation' => 'two_day', 'cannulation-training' => 'one_day'];
    } else {
        // For other products, try to get JSON data first
        $json_data = get_combo_course_data_from_json($product_id);
        
        if ($json_data) {
            // Create a single tab from JSON data
            $course_types = ['default' => 'one_day'];
            $grouped_variations = ['default' => []];
            
            // Convert JSON items to variation-like structure
            foreach ($json_data['items'] as $item) {
                $grouped_variations['default'][] = [
                    'variation_id' => $item['var'],
                    'attributes' => [
                        'attribute_course-type' => 'default'
                    ]
                ];
            }
            
            // Set first prices from JSON data
            $first_prices = [
                'default' => [
                    'price' => str_replace('£', '', $json_data['sell_price']),
                    'regular' => str_replace('£', '', $json_data['regular_price']),
                    'sale' => str_replace('£', '', $json_data['sell_price']),
                    'on_sale' => $json_data['regular_price'] != $json_data['sell_price'] ? 1 : 0,
                ]
            ];
        } else {
            // Fallback to original WooCommerce logic if JSON doesn't exist
            $available_variations = $product->get_available_variations();
            
            // Group variations by the 'Course Type' attribute
            $grouped_variations = [];
            foreach ( $available_variations as $variation ) {
                $course_type_key_1 = 'attribute_pa_course-type';
                $course_type_key_2 = 'attribute_course-type';
                $course_type = null;

                if ( isset( $variation['attributes'][ $course_type_key_1 ] ) && ! empty( $variation['attributes'][ $course_type_key_1 ] ) ) {
                    $course_type = $variation['attributes'][ $course_type_key_1 ];
                } elseif ( isset( $variation['attributes'][ $course_type_key_2 ] ) && ! empty( $variation['attributes'][ $course_type_key_2 ] ) ) {
                    $course_type = $variation['attributes'][ $course_type_key_2 ];
                }

                if ( $course_type ) {
                    if ( ! isset( $grouped_variations[ $course_type ] ) ) {
                        $grouped_variations[ $course_type ] = [];
                    }
                    $grouped_variations[ $course_type ][] = $variation;
                }
            }

            $course_types = array_keys( $grouped_variations );
            
            // Get initial prices for each course type to display in the sidebar on load
            $first_prices = [];
            foreach ( $grouped_variations as $ct => $variations_group ) {
                $first_variation = reset($variations_group);
                if ( ! empty($first_variation['variation_id']) ) {
                    $v_obj = wc_get_product( $first_variation['variation_id'] );
                    if ( $v_obj ) {
                        $first_prices[$ct] = [
                            'price'    => $v_obj->get_price(),
                            'regular'  => $v_obj->get_regular_price(),
                            'sale'     => $v_obj->get_sale_price(),
                            'on_sale'  => $v_obj->is_on_sale() ? 1 : 0,
                        ];
                    }
                }
            }
        }
    }
    ?>

    <script src="https://unpkg.com/lucide@latest"></script>

    <div class="la-compact-wrapper">
        <section id="course-section-container">

            <div class="la-compact-header-wrapper">
                <div class="header-icon">
                    <i data-lucide="edit"></i>
                </div>
                <p>Choose Your Training Program</p>
            </div>

            <?php if ( ! empty( $course_types ) ) : ?>
                <div class="la-compact-tabs__container">
                    <?php
                    $is_first_tab = true;
                    foreach ( $course_types as $course_type_key => $tab_type ) :
                        // For product ID 371100, map course types to tab JSON files
                        if ($product_id == 371100) {
                            $json_data = get_combo_course_data_from_json($product_id, $tab_type);
                            $tab_id = $course_type_key . '_compact';
                            
                            // Use JSON data for prices if available, otherwise fallback to first_prices
                            if ($json_data) {
                                $d_price   = str_replace('£', '', $json_data['sell_price']);
                                $d_regular = str_replace('£', '', $json_data['regular_price']);
                                $d_sale    = str_replace('£', '', $json_data['sell_price']);
                                $d_on_sale = $json_data['regular_price'] != $json_data['sell_price'] ? 1 : 0;
                            } else {
                                $fp = isset($first_prices[$course_type_key]) ? $first_prices[$course_type_key] : null;
                                $d_price   = $fp ? esc_attr( $fp['price'] )   : '';
                                $d_regular = $fp ? esc_attr( $fp['regular'] ) : '';
                                $d_sale    = $fp ? esc_attr( $fp['sale'] )    : '';
                                $d_on_sale = $fp ? esc_attr( $fp['on_sale'] ) : 0;
                            }
                        } else {
                            // For other products, use standard logic
                            $tab_id  = sanitize_title( $course_type_key ) . '_compact';
                            $fp      = isset($first_prices[$course_type_key]) ? $first_prices[$course_type_key] : null;
                            $d_price   = $fp ? esc_attr( $fp['price'] )   : '';
                            $d_regular = $fp ? esc_attr( $fp['regular'] ) : '';
                            $d_sale    = $fp ? esc_attr( $fp['sale'] )    : '';
                            $d_on_sale = $fp ? esc_attr( $fp['on_sale'] ) : 0;
                        }
                        ?>
                        <button
                            class="la-compact-tab-btn <?php echo $is_first_tab ? 'active' : ''; ?>"
                            data-tab="<?php echo esc_attr( $tab_id ); ?>"
                            data-price="<?php echo $d_price; ?>"
                            data-regular="<?php echo $d_regular; ?>"
                            data-sale="<?php echo $d_sale; ?>"
                            data-on-sale="<?php echo $d_on_sale; ?>"
                        >
                            <i class="active-tab-icon" data-lucide="check-circle"></i>
                            <?php
                            // Display appropriate tab name based on course type
                            if ($product_id == 371100) {
                                if ($course_type_key == 'phlebotomy-cannulation') {
                                    echo 'Phlebotomy & Cannulation (2 Day)';
                                } elseif ($course_type_key == 'cannulation-training') {
                                    echo 'Cannulation Training (1 Day)';
                                } else {
                                    echo esc_html( ucwords( str_replace( '-', ' ', $course_type_key ) ) );
                                }
                            } else {
                                echo esc_html( ucwords( str_replace( '-', ' ', $course_type_key ) ) );
                            }
                            ?>
                        </button>
                        <?php
                        $is_first_tab = false;
                    endforeach;
                    ?>
                </div>

                <?php
                $is_first_content = true;
                foreach ( $course_types as $course_type_key => $tab_type ) :
                    $content_id = $course_type_key . '_compact';
                    $tab_meta = false;
                    if (is_array($combo_tabs_data)) {
                        foreach ($combo_tabs_data as $tab) {
                            if (isset($tab['course_type_slug']) && $tab['course_type_slug'] === $course_type_key) {
                                $tab_meta = $tab;
                                break;
                            }
                        }
                    }
                    ?>
                    <div id="<?php echo esc_attr( $content_id ); ?>" class="la-compact-tab-content <?php echo $is_first_content ? 'active' : ''; ?>">
                        <?php if ($tab_meta && !empty($tab_meta['tab_intro_text'])) : ?>
                        <div class="la-compact-tab-intro">
                            <?php echo wpautop($tab_meta['tab_intro_text']); ?>
                        </div>
                        <?php endif; ?>
                        <div class="la-compact-cards-wrapper">
                            <?php
                            // For product ID 371100, use JSON data
                            if ($product_id == 371100) {
                                $json_data = get_combo_course_data_from_json($product_id, $tab_type);
                                
                                if ($json_data) {
                                    // Display data from JSON file
                                    foreach ($json_data['items'] as $item) {
                                        $course_date = $item['date'];
                                        $is_in_stock = $item['seat'] > 0 && !$item['quota'];
                                        $stock_quantity = $item['seat'];
                                        $current_price = str_replace('£', '', $item['sell_price']);
                                        $regular_price = str_replace('£', '', $item['regular_price']);
                                        $sale_price = str_replace('£', '', $item['sell_price']);
                                        $is_on_sale = $item['regular_price'] != $item['sell_price'];
                                        $location = $item['location'];
                                        $check_is_admin = is_user_logged_in() && array_filter(['administrator', 'editor', 'shop_manager'], 'current_user_can');
                                        ?>
                                        <div class='la-compact-card'>
                                            <div class='la-compact-card__header'><p><?php echo esc_html($course_date); ?></p></div>
                                            <div class='la-compact-card__body'>
                                                <div class='la-compact-card__tags'>
                                                    <?php if ($tab_meta && !empty($tab_meta['tab_duration_tag'])) : ?>
                                                        <span class='la-compact-tag'><i data-lucide='calendar-check'></i><?php echo esc_html($tab_meta['tab_duration_tag']); ?></span>
                                                    <?php endif; ?>
                                                    <span class='la-compact-tag'><i data-lucide='clock-3'></i><?php echo esc_html($json_data['time']); ?></span>
                                                    <span class='la-compact-tag'><i data-lucide='map-pin'></i>
                                                    <?php
                                                    if ($check_is_admin == 1) {
                                                        echo $location."Stock=".$item['real'];
                                                    } else {
                                                        echo $location;
                                                    }
                                                    ?>
                                                </span>
                                                </div>
                                                <p class='la-compact-card__venue'><i data-lucide='building-2'></i><?php echo esc_html($json_data['address']); ?></p>
                                                <?php if ( $is_in_stock && $stock_quantity ) : ?>
                                                    <div class='la-compact-card__availability'><i class="fa fa-fire" aria-hidden="true"></i>Hurry! Only <?php echo esc_html( $stock_quantity ); ?> seats left</div>
                                                <?php else : ?>
                                                    <div class='la-compact-card__availability out-of-stock'><i class="fa fa-fire" aria-hidden="true"></i>Sorry! No seats left</div>
                                                <?php endif; ?>
                                            </div>
                                            <div class='la-compact-card__footer'>
                                                <div class='la-compact-price'>
                                                    <?php if ( $is_on_sale ) : ?>
                                                        <span class='current-price'><?php echo wc_price( $sale_price ); ?></span>
                                                        <span class='original-price'><?php echo wc_price( $regular_price ); ?></span>
                                                    <?php else : ?>
                                                        <span class='current-price'><?php echo wc_price( $current_price ); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <?php if ( $is_in_stock ) : ?>
                                                    <form class="cart la-compact-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
                                                        <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
                                                        <input type="hidden" name="variation_id" class="variation_id" value="<?php echo absint( $item['var'] ); ?>" />
                                                        <button type="submit" class="la-compact-book-btn">BOOK NOW</button>
                                                    </form>
                                                <?php else : ?>
                                                    <button type='button' class='la-compact-book-btn la-compact-book-btn--disabled' disabled>FULLY BOOKED</button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    // Fallback to original WooCommerce data if JSON doesn't exist
                                    echo '<div class="woocommerce-info">Course data is currently being updated. Please refresh the page in a moment.</div>';
                                }
                            } else {
                                // For other products, use original WooCommerce logic
                                foreach ( $grouped_variations[$course_type_key] as $variation ) :
                                    $variation_obj = wc_get_product( $variation['variation_id'] );
                                    
                                    $course_date_key_1 = 'attribute_pa_courses-date';
                                    $course_date_key_2 = 'attribute_courses-date';
                                    $course_date = 'Date not set';

                                    if ( isset( $variation['attributes'][ $course_date_key_1 ] ) ) {
                                        $course_date = $variation['attributes'][ $course_date_key_1 ];
                                    } elseif ( isset( $variation['attributes'][ $course_date_key_2 ] ) ) {
                                        $course_date = $variation['attributes'][ $course_date_key_2 ];
                                    }
                                    
                                    $is_in_stock    = $variation_obj->is_in_stock();
                                    $stock_quantity = $variation_obj->get_stock_quantity();
                                    ?>
                                    <div class='la-compact-card'>
                                        <div class='la-compact-card__header'><p><?php echo esc_html($course_date); ?></p></div>
                                        <div class='la-compact-card__body'>
                                            <div class='la-compact-card__tags'>
                                                <?php if ($tab_meta && !empty($tab_meta['tab_duration_tag'])) : ?>
                                                    <span class='la-compact-tag'><i data-lucide='calendar-check'></i><?php echo esc_html($tab_meta['tab_duration_tag']); ?></span>
                                                <?php endif; ?>
                                                <span class='la-compact-tag'><i data-lucide='clock-3'></i>10:00 AM - 05:00 PM</span>
                                                <span class='la-compact-tag'><i data-lucide='map-pin'></i>London</span>
                                            </div>
                                            <p class='la-compact-card__venue'><i data-lucide='building-2'></i>Bank Studio, 23 Park Royal Road, NW10 7JH</p>
                                            <?php if ( $is_in_stock && $stock_quantity ) : ?>
                                                <div class='la-compact-card__availability'><i class="fa fa-fire" aria-hidden="true"></i>Hurry! Only <?php echo esc_html( $stock_quantity ); ?> seats left</div>
                                            <?php else : ?>
                                                <div class='la-compact-card__availability out-of-stock'><i class="fa fa-fire" aria-hidden="true"></i>Sorry! No seats left</div>
                                            <?php endif; ?>
                                        </div>
                                        <div class='la-compact-card__footer'>
                                            <div class='la-compact-price'>
                                                <?php if ( $variation_obj->is_on_sale() ) : ?>
                                                    <span class='current-price'><?php echo wc_price( $variation_obj->get_sale_price() ); ?></span>
                                                    <span class='original-price'><?php echo wc_price( $variation_obj->get_regular_price() ); ?></span>
                                                <?php else : ?>
                                                    <span class='current-price'><?php echo wc_price( $variation_obj->get_price() ); ?></span>
                                                <?php endif; ?>
                                            </div>
                                            
                                            <?php if ( $is_in_stock ) : ?>
                                                <form class="cart la-compact-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
                                                    <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
                                                    <input type="hidden" name="variation_id" class="variation_id" value="<?php echo absint( $variation['variation_id'] ); ?>" />
                                                    <button type="submit" class="la-compact-book-btn">BOOK NOW</button>
                                                </form>
                                            <?php else : ?>
                                                <button type='button' class='la-compact-book-btn la-compact-book-btn--disabled' disabled>FULLY BOOKED</button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    $is_first_content = false;
                endforeach;
                ?>

                <div class="la-compact-pagination">
                    <button id="la-compact-see-more-btn" class="la-compact-pagination-btn"><i data-lucide="arrow-down-circle"></i>See More Dates</button>
                    <button id="la-compact-see-less-btn" class="la-compact-pagination-btn" style="display: none;"><i data-lucide="arrow-up-circle"></i>See Less Dates</button>
                </div>

            <?php else : ?>
                 <div class="woocommerce-info">No course variations have been set up for this product. Please check the product attributes and variations.</div>
            <?php endif; ?>
        </section>
    </div>
<?php endif; ?>