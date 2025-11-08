<?php
/**
 * ===============================================================
 * Display Review Part
 * v6 - Popup Skeleton Loading
 * ===============================================================
 */

//SECTION - Fallback Manual Reviews Data
function la_get_manual_reviews_data() {
    return [
        [ 'la_course_reviewer_name' => 'Howard', 'la_course_review_title' => 'Great online training', 'la_course_review' => 'Great online training. Easy to navigate.', 'la_course_review_star' => '5', 'la_google_user_image' => ''],
        [ 'la_course_reviewer_name' => 'Parin', 'la_course_review_title' => 'It was a very good experience', 'la_course_review' => 'It was a very good experience. Through online media, you provide the best education.', 'la_course_review_star' => '5', 'la_google_user_image' => ''],
    ];
}

//SECTION - HTML Helper Functions

function la_get_carousel_skeleton_html() {
    ob_start();
    ?>
    <div class="cat-rv-flex">
        <div class="cat-box-head"><div class="skeleton skeleton-stars"></div></div>
        <div class="cat-feedback-rv"><p><span class="skeleton skeleton-verified"></span></p></div>
    </div>
    <div class="cat-feedback-ds">
        <p class="la-review-first-title"><span class="skeleton skeleton-title"></span></p>
        <p class="la-review-text"><span class="skeleton skeleton-text"></span></p>
        <p class="la-review-text"><span class="skeleton skeleton-text short"></span></p>
        <p class="la-single-reviewer-name"><span class="skeleton skeleton-name"></span></p>
    </div>
    <?php
    return ob_get_clean();
}

/**
 * NEW: Generates the HTML for a single popup skeleton loader.
 * @return string The popup skeleton HTML.
 */
function la_get_popup_skeleton_html() {
    ob_start();
    ?>
    <div class="google-review-popup-box is-loading">
        <div class="row">
            <div class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1">
                <div class="google-review-user-img"><span class="skeleton skeleton-avatar"></span></div>
            </div>
            <div class="col-8 col-sm-8 col-md-10 col-lg-10 col-xl-10">
                <div class="google-review-popup-content">
                    <h3><span class="skeleton skeleton-name"></span></h3>
                    <div class="google-review-popup-star-icon"><span class="skeleton skeleton-stars"></span></div>
                    <p><span class="skeleton skeleton-text"></span></p>
                    <p><span class="skeleton skeleton-text short"></span></p>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1"></div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}


function la_get_single_carousel_review_html($review, $wrap_in_owl_item = false) {
    ob_start();
    $reviewer_name = !empty($review['la_course_reviewer_name']) ? esc_html($review['la_course_reviewer_name']) : 'Anonymous';
    $review_title = !empty($review['la_course_review_title']) ? esc_html($review['la_course_review_title']) : '';
    $review_text = !empty($review['la_course_review']) ? esc_html($review['la_course_review']) : '';
    $rating = isset($review['la_course_review_star']) && (int)$review['la_course_review_star'] > 0 ? (int)$review['la_course_review_star'] : 5;
    ?>
    <div class="media-29101">
        <div class="cat-feedback-card">
            <div class="cat-rv-flex">
                <div class="cat-box-head"><div class="google-review-popup-star-icon"><?php for ($i = 0; $i < 5; $i++) { echo ($i < $rating) ? '<span><i class="fa-solid fa-star"></i></span>' : '<span><i class="fa-regular fa-star"></i></span>'; } ?></div></div>
                <div class="cat-feedback-rv"><p><img src="https://lead-academy.org/wp-content/uploads/0223/12/verified-2.webp" title="verified" alt="verified"> <span>Verified</span></p></div>
            </div>
            <div class="cat-feedback-ds">
                <p class="la-review-first-title"><strong><?php echo $review_title; ?></strong></p>
                <p class="la-review-text"><?php echo $review_text; ?></p>
                <p class="la-single-reviewer-name"><?php echo $reviewer_name; ?></p>
            </div>
        </div>
    </div>
    <?php
    $inner_html = ob_get_clean();
    if ($wrap_in_owl_item) {
        return '<div class="owl-item">' . $inner_html . '</div>';
    }
    return $inner_html;
}

function la_get_single_popup_review_html($review) {
    ob_start();
    $reviewer_name = !empty($review['la_course_reviewer_name']) ? esc_html($review['la_course_reviewer_name']) : 'Anonymous';
    $review_text = !empty($review['la_course_review']) ? esc_html($review['la_course_review']) : '';
    $rating = isset($review['la_course_review_star']) && (int)$review['la_course_review_star'] > 0 ? (int)$review['la_course_review_star'] : 5;
    
    if (!empty($review['la_google_user_image'])) {
        $user_img = esc_url($review['la_google_user_image']);
    } else {
        $first_letter = strtoupper(substr($reviewer_name, 0, 1));
        $user_img = 'https://ui-avatars.com/api/?name=' . urlencode($first_letter) . '&background=random&size=128&color=fff';
    }
    ?>
    <div class="google-review-popup-box">
        <div class="row">
            <div class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1"><div class="google-review-user-img"><img src="<?php echo $user_img; ?>" alt="<?php echo esc_attr($reviewer_name); ?>"></div></div>
            <div class="col-8 col-sm-8 col-md-10 col-lg-10 col-xl-10">
                <div class="google-review-popup-content">
                    <h3><?php echo $reviewer_name; ?></h3>
                    <div class="google-review-popup-star-icon"><?php for ($i = 0; $i < 5; $i++) { echo ($i < $rating) ? '<span><i class="fa-solid fa-star"></i></span>' : '<span><i class="fa-regular fa-star"></i></span>'; } ?></div>
                    <p><?php echo $review_text; ?></p>
                </div>
            </div>
            <div class="col-2 col-sm-2 col-md-1 col-lg-1 col-xl-1"><div class="google-review-logo"><img src="https://lead-academy.org/wp-content/uploads/0223/12/google_g_icon_download.webp" alt="Google Icon"></div></div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

function la_display_reviews_section() {
    global $post;
    $post_id = $post ? $post->ID : 0;
    $custom_reviews = get_post_meta($post_id, 'la_course_reviews', true);
    $reviews = is_array($custom_reviews) && !empty($custom_reviews) ? $custom_reviews : la_get_manual_reviews_data();
    if (empty($reviews)) return;

    $initial_load_count = 5;
    $total_reviews = count($reviews);
    $initial_reviews = array_slice($reviews, 0, $initial_load_count);
    $sum_ratings = array_sum(array_map(function($r) { return isset($r['la_course_review_star']) && (int)$r['la_course_review_star'] > 0 ? (int)$r['la_course_review_star'] : 5; }, $reviews));
    $average_rating = $total_reviews > 0 ? round($sum_ratings / $total_reviews, 1) : 5;
    
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_script('la-reviews-ajax', ASTRA_CHILD_THEME_DIR_URI . '/assets/js/reviews-ajax.js', ['jquery'], $theme_version, true);
    wp_localize_script('la-reviews-ajax', 'la_reviews_params', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('la_reviews_nonce'),
        'post_id'  => $post_id,
        'reviews_per_page' => 5,
        'total_reviews' => $total_reviews,
        'initial_count' => $initial_load_count,
        'carousel_skeleton_html' => la_get_carousel_skeleton_html(), // Renamed for clarity
        'popup_skeleton_html' => la_get_popup_skeleton_html(),       // NEW: Pass popup skeleton to JS
    ]);
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
    
    <style>
        .cat-feedback-card { height: 230px; display: flex; flex-direction: column; }
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }
        .skeleton {
            animation: shimmer 1.5s infinite linear;
            background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
            background-size: 2000px 104px;
            border-radius: 4px;
            display: inline-block;
            color: transparent;
        }
        .is-loading .skeleton { background-color: #eee; }

        /* Carousel Skeleton Styles */
        .cat-feedback-card.is-loading .skeleton-stars { width: 100px; height: 16px; margin-bottom: 2px; }
        .cat-feedback-card.is-loading .skeleton-verified { width: 70px; height: 20px; }
        .cat-feedback-card.is-loading .skeleton-title { width: 80%; height: 22px; margin-bottom: 12px; }
        .cat-feedback-card.is-loading .skeleton-text { width: 100%; height: 16px; margin-bottom: 8px; }
        .cat-feedback-card.is-loading .skeleton-text.short { width: 90%; }
        .cat-feedback-card.is-loading .skeleton-name { width: 50%; height: 18px; margin-top: 12px; }

        /* Popup Skeleton Styles */
        .google-review-popup-box.is-loading .skeleton-avatar { width: 50px; height: 50px; border-radius: 50%; }
        .google-review-popup-box.is-loading .skeleton-name { width: 150px; height: 20px; margin-bottom: 8px; }
        .google-review-popup-box.is-loading .skeleton-stars { width: 100px; height: 16px; margin-bottom: 8px; }
        .google-review-popup-box.is-loading .skeleton-text { width: 100%; height: 16px; margin-bottom: 8px; }
        .google-review-popup-box.is-loading .skeleton-text.short { width: 70%; }

        button#la-popup-load-more {
            margin: 25px 0;
            background-color: #C52855;
            color: #fff;
            padding: 8px 25px;
            font-size: 14px;
            border-radius: 4px;
            border: 2px solid #C52855;
        }

        button#la-popup-load-more:hover {
            background-color: #fff;
            color: #C52855;
            border: 2px solid #C52855;
        }
    </style>
    
    <section class="la-reviews-carousel-section-wrap la-google-review-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-3 col-xl-3">
                    <div class="la-google-review">
                         <div class="google-review-right-part-top"><p>Google Reviews</p></div>
                        <div class="google-review-popup-star-icon"><?php for ($i = 0; $i < 5; $i++) echo '<span><i class="fa-solid fa-star"></i></span>'; ?></div>
                        <p><strong><?php echo esc_html($average_rating); ?></strong> Stars | <strong><?php echo esc_html($total_reviews); ?></strong> Reviews</p>
                        <img class="google-review-bottom" src="https://lead-academy.org/wp-content/uploads/0223/12/Google-Review-1.webp" title="Google Reviews" alt="Google Reviews">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-9 col-xl-9">
                    <div class="google-carousel-reviews"><div class="owl-carousel owl-2"><?php foreach ($initial_reviews as $review) { echo la_get_single_carousel_review_html($review, false); } ?></div></div>
                </div>
            </div>
        </div>
    </section>

    <section id="google-reviews-popup">
        <div id="popup" class="popup">
            <div class="popup-content">
                <span id="closePopupBtn" class="close"></span>
                <div class="google-popup-review-all-box">
                    <div class="google-review-la-logo"><img src="https://lead-academy.org/wp-content/uploads/2013/11/lead-academy-logo.webp" title="lead-academy-logo" alt="Lead Academy Logo"></div>
                    <div id="la-popup-reviews-container"></div>
                </div>
            </div>
        </div>
    </section>
    <?php
}

//SECTION - AJAX Handler
function la_load_more_reviews_handler() {
    if (ob_get_length()) ob_clean();
    check_ajax_referer('la_reviews_nonce', 'nonce');

    if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
        wp_send_json_error(['message' => 'Error: Missing required parameters.']);
        wp_die();
    }
    
    $post_id = intval($_POST['post_id']);
    $offset = intval($_POST['offset']);
    $context = isset($_POST['context']) ? sanitize_text_field($_POST['context']) : 'carousel';
    $limit = isset($_POST['limit']) ? intval($_POST['limit']) : 5;

    $custom_reviews = get_post_meta($post_id, 'la_course_reviews', true);
    $all_reviews = is_array($custom_reviews) && !empty($custom_reviews) ? $custom_reviews : la_get_manual_reviews_data();
    
    if (!is_array($all_reviews) || empty($all_reviews)) {
        wp_send_json_error(['message' => 'No review data found.']);
        wp_die();
    }

    $next_reviews = ($limit === -1 && $context === 'carousel') ? array_slice($all_reviews, $offset) : array_slice($all_reviews, $offset, $limit);

    $html_output = '';
    if (!empty($next_reviews)) {
        foreach ($next_reviews as $review) {
            if ($context === 'popup') {
                $html_output .= la_get_single_popup_review_html($review);
            } else {
                $html_output .= la_get_single_carousel_review_html($review, false);
            }
        }
    }

    wp_send_json_success(['html' => $html_output, 'count' => count($next_reviews)]);
    wp_die();
}
add_action('wp_ajax_la_load_more_reviews', 'la_load_more_reviews_handler');
add_action('wp_ajax_nopriv_la_load_more_reviews', 'la_load_more_reviews_handler');
?>