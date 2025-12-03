<?php
/**
 * Phlebotomy Courses Top Tab Contents
 * Optimized exclusively for product ID 371100
 * Uses JSON-based system for maximum performance
 */

global $product;

// Ensure we have product ID 371100 before proceeding
if ( $product && $product->get_id() == 371100 && $product->is_type( 'variable' ) ) :

    $product_id = $product->get_id();
    $combo_tabs_data = get_post_meta($product_id, 'combo_course_tabs_group', true);
    
    // Define course types for product 371100
    $course_types = ['phlebotomy-cannulation' => 'two_day', 'cannulation-training' => 'one_day'];
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
                        $tab_id = $course_type_key . '_compact';
                        ?>
                        <button
                            class="la-compact-tab-btn <?php echo $is_first_tab ? 'active' : ''; ?>"
                            data-tab="<?php echo esc_attr( $tab_id ); ?>"
                        >
                            <i class="active-tab-icon" data-lucide="check-circle"></i>
                            <?php
                            // Display appropriate tab name based on course type
                            if ($course_type_key == 'phlebotomy-cannulation') {
                                echo 'Phlebotomy & Cannulation (2 Day)';
                            } elseif ($course_type_key == 'cannulation-training') {
                                echo 'Cannulation Training (1 Day)';
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
                        // Create mapping from course_type_key to database course_type_slug
                        $course_type_mapping = [
                            'phlebotomy-cannulation' => 'Phlebotomy & Cannulation (2 Day)',
                            'cannulation-training' => 'Cannulation Training (1 Day)'
                        ];
                        
                        $db_course_type_slug = isset($course_type_mapping[$course_type_key]) ? $course_type_mapping[$course_type_key] : $course_type_key;
                        
                        foreach ($combo_tabs_data as $tab) {
                            if (isset($tab['course_type_slug']) && $tab['course_type_slug'] === $db_course_type_slug) {
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
                            $json_data = get_combo_course_data_from_json($product_id, $tab_type);
                            
                            if ($json_data) {
                                // Display data from JSON file
                                foreach ($json_data['items'] as $item) {
                                    $course_date = $item['date'];
                                    $is_in_stock = $item['real'] > 0 && !$item['quota'];
                                    $stock_quantity = $item['seat'];
                                    $current_price = str_replace('£', '', $item['sell_price']);
                                    $regular_price = str_replace('£', '', $item['regular_price']);
                                    $sale_price = str_replace('£', '', $item['sell_price']);
                                    $is_on_sale = $item['regular_price'] != $item['sell_price'];
                                    $location = $json_data['location'];
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
                                                    echo $location." Stock= ".$item['real'];
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
                                // Fallback message if JSON doesn't exist
                                echo '<div class="woocommerce-info">Course data is currently being updated. Please refresh the page in a moment.</div>';
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