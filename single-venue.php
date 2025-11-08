<?php
/**
 * The template for displaying a single "Venue" custom post type.
 * Corrected Logic: Displays a point if either the detail or formatted_detail field has content.
 */

defined('ABSPATH') || exit; // Exit if accessed directly.

get_header();

// --- Retrieve all custom field values ---
$venue_map_location = get_post_meta(get_the_ID(), 'la_venue_location', true);
$venue_images = get_post_meta(get_the_ID(), 'la_venue_images', true);
$venue_address = get_post_meta(get_the_ID(), 'la_venue_address', true);
$venue_contact = get_post_meta(get_the_ID(), 'la_venue_contact', true);
$venue_video_links = get_post_meta(get_the_ID(), 'la_venue_video_link', true);
$venue_transport_title = get_post_meta(get_the_ID(), 'la_venue_transport_title', true);
$venue_transport_intro = get_post_meta(get_the_ID(), 'la_venue_transport_intro', true);

// --- Repeater groups ---
$tram_train_points = get_post_meta( get_the_ID(), 'la_venue_transport_tram_train_group', true );
$bus_points = get_post_meta( get_the_ID(), 'la_venue_transport_bus_group', true );
$car_points = get_post_meta( get_the_ID(), 'la_venue_transport_car_group', true );

// --- Helper function ---
if (!function_exists('get_youtube_id_from_url')) {
    function get_youtube_id_from_url($url) {
        preg_match('/(youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $url, $match);
        return isset($match[2]) && strlen($match[2]) === 11 ? $match[2] : false;
    }
}
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<style>
    :root {
        --theme-primary: #af1f47;
        --theme-dark: #1c1c1c;
        --theme-text: #343a40;
        --theme-light-bg: rgb(255, 255, 255);
        --theme-border: #e9ecef;
    }

    /* --- List Item Styling --- */
    .transport-point-content {
        display: flex;
        align-items: flex-start;
        width: 100%;
        line-height: 1.6;
    }
    .transport-point-content::before {
        content: "\F138"; /* Bootstrap Icons arrow-right-short */
        font-family: "bootstrap-icons" !important;
        font-weight: bold;
        color: var(--theme-primary);
        margin-right: 0.75rem;
        margin-top: 0.1em;
    }

    /* --- Styling for the default-visible formatted content --- */
    /* Indent formatted content when there is also a main detail text */
    .transport-point-content + .point-formatted-content {
         margin-left: 25px; 
    }
    .point-formatted-content p:last-child {
        margin-bottom: 0;
    }

.point-formatted-content ul {
    padding: 0;
    margin: 6px 0 0 30px;
}

.point-formatted-content p, .point-formatted-content ul, .transport-point-content span {
    font-size: 18px;
}

.ast-container {
    background-color: #f7f7f7;
}
    
    /* Other existing styles */
    p { margin: 0; }
    .section-wrapper { padding: 3rem 0; }
    .venue-section-title { font-size: 2.25rem; font-weight: 700; color: var(--theme-dark); margin-bottom: 1rem; display: block; }
    .section-subtitle {
    font-size: 18px;
    color: #000000;
    margin-bottom: 3.5rem;
    max-width: 700px;
    font-weight: 500;
    margin-left: auto;
    margin-right: auto;
}
    .venue-section-title i { color: var(--theme-primary); margin-right: 0.75rem; }
    .card { border: none; border-radius: 0.75rem; }
    .venue-title-banner { background: var(--theme-primary); padding: 5rem 1rem; color: white; border-top: 1px solid #333333; }
    .venue-title-banner h1 { font-size: 3.25rem; font-weight: 700; color: var(--theme-light-bg); }
    .address-card { background-color: var(--theme-light-bg); padding: 2.5rem; height: 100%; }
    .address-card h2 { color: var(--theme-dark); font-weight: 600; font-size: 1.5rem; display: flex; align-items: center; border-bottom: 2px dotted rgba(28, 28, 28, 0.2); width: max-content; padding-bottom: 10px; margin-bottom: 10px; }
    .address-card p { font-size: 18px; line-height: 1.7; color: #2a2b2c; }
    .address-card .info-block i.bi { color: var(--theme-primary); font-size: 1.5rem; margin-right: 1rem; }
    .map-container { height: 100%; border-radius: 0.75rem; overflow: hidden; border: 6px solid #ffffff; }
    .map-container iframe { height: 100%; width: 100%; min-height: 350px; border: 0; }
    .transport-item { background-color: #ffffff; border: 1px solid var(--theme-border); border-radius: 0.75rem; padding: 1.5rem; }
    .transport-item-header { display: flex; align-items: center; gap: 1rem; margin-bottom: 1rem; border-bottom: 1px solid rgba(28, 28, 28, 0.1); padding-bottom: 20px; }
    .transport-item-header .icon-container { flex-shrink: 0; width: 45px; height: 45px; background-color: rgba(175, 31, 71, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; }
    .transport-item-header .icon-container i { color: var(--theme-primary); font-size: 1.5rem; }
    .transport-item-header h3 { color: var(--theme-dark); font-weight: 600; margin-bottom: 0; font-size: 20px; }
    .transport-details-list { list-style-type: none; padding-left: 0; margin: 0; display: flex; flex-direction: column; gap: 1rem; }
    .main-content-area { background-color: var(--theme-light-bg); border-radius: 0.75rem; padding: 2.5rem; }
    .gallery-item-link { display: block; border-radius: 0.75rem; overflow: hidden; transition: transform 0.3s ease; }
    .gallery-item-link:hover { transform: scale(1.05); }
</style>

<script>
jQuery(document).ready(function($) {
    // Fancybox initialization
    $('[data-fancybox]').fancybox({
        loop: true,
        buttons: ["zoom", "slideShow", "fullScreen", "thumbs", "close"],
        transitionEffect: "fade",
    });
});
</script>

<div class="container-fluid venue-title-banner">
    <div class="container text-center">
        <h1><?php echo esc_html(get_the_title()); ?></h1>
        <p class="lead">Essential location and access details for your course.</p>
    </div>
</div>

<div class="container">
    <div class="row section-wrapper align-items-stretch g-4 g-lg-5">
        <div class="col-lg-5 d-flex">
            <div class="card shadow-sm address-card w-100">
                <div class="info-block mb-auto">
                    <h2><i class="bi bi-geo-alt-fill"></i>Venue Address</h2>
                    <p><?php echo !empty($venue_address) ? nl2br(esc_html($venue_address)) : 'Address information will be provided upon booking.'; ?></p>
                </div>
                <?php if (!empty($venue_contact)): ?>
                <div class="info-block mt-4 pt-4">
                    <h2><i class="bi bi-telephone-fill"></i>Contact Information</h2>
                    <p><?php echo nl2br(esc_html($venue_contact)); ?></p>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-7 d-flex">
            <div class="map-container card shadow-sm w-100">
                <?php if (!empty($venue_map_location)) : ?>
                    <iframe src="<?php echo esc_url($venue_map_location); ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <?php else: ?>
                    <div class="d-flex align-items-center justify-content-center h-100 bg-light"><p class="text-muted">Map not available</p></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="section-wrapper">
        <div class="text-center">
            <h2 class="venue-section-title"><i class="bi bi-sign-merge-right-fill"></i><?php echo !empty($venue_transport_title) ? esc_html($venue_transport_title) : 'Getting Here'; ?></h2>
            <?php if (!empty($venue_transport_intro)) : ?>
                <p class="section-subtitle"><?php echo esc_html($venue_transport_intro); ?></p>
            <?php endif; ?>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="d-flex flex-column gap-3">

                    <?php if ( ! empty( $tram_train_points ) && is_array( $tram_train_points ) ) : ?>
                        <div class="transport-item">
                            <div class="transport-item-header">
                                <div class="icon-container"><i class="bi bi-train-front"></i></div><h3>By Tram / Train</h3>
                            </div>
                            <div class="transport-item-body">
                                <ul class="transport-details-list">
                                    <?php foreach ( $tram_train_points as $entry ) : ?>
                                        <?php // CORRECTED LOGIC: Render li if either detail OR formatted_detail exists.
                                        if ( ! empty( $entry['detail'] ) || ! empty( $entry['formatted_detail'] ) ) : ?>
                                            <li>
                                                <?php // Only show the main detail text if it's not empty.
                                                if ( ! empty( $entry['detail'] ) ) : ?>
                                                    <div class="transport-point-content">
                                                        <span><?php echo esc_html( $entry['detail'] ); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                                
                                                <?php // Only show the formatted detail content if it's not empty.
                                                if ( ! empty( $entry['formatted_detail'] ) ) : ?>
                                                    <div class="point-formatted-content">
                                                        <?php echo apply_filters('the_content', $entry['formatted_detail']); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ( ! empty( $bus_points ) && is_array( $bus_points ) ) : ?>
                         <div class="transport-item">
                            <div class="transport-item-header">
                                <div class="icon-container"><i class="bi bi-bus-front"></i></div><h3>By Bus</h3>
                            </div>
                            <div class="transport-item-body">
                                <ul class="transport-details-list">
                                    <?php foreach ( $bus_points as $entry ) : ?>
                                        <?php // CORRECTED LOGIC: Render li if either detail OR formatted_detail exists.
                                        if ( ! empty( $entry['detail'] ) || ! empty( $entry['formatted_detail'] ) ) : ?>
                                            <li>
                                                <?php // Only show the main detail text if it's not empty.
                                                if ( ! empty( $entry['detail'] ) ) : ?>
                                                    <div class="transport-point-content">
                                                        <span><?php echo esc_html( $entry['detail'] ); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                                
                                                <?php // Only show the formatted detail content if it's not empty.
                                                if ( ! empty( $entry['formatted_detail'] ) ) : ?>
                                                    <div class="point-formatted-content">
                                                        <?php echo apply_filters('the_content', $entry['formatted_detail']); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if ( ! empty( $car_points ) && is_array( $car_points ) ) : ?>
                         <div class="transport-item">
                            <div class="transport-item-header">
                                <div class="icon-container"><i class="bi bi-car-front-fill"></i></div><h3>By Car</h3>
                            </div>
                            <div class="transport-item-body">
                                <ul class="transport-details-list">
                                     <?php foreach ( $car_points as $entry ) : ?>
                                        <?php // CORRECTED LOGIC: Render li if either detail OR formatted_detail exists.
                                        if ( ! empty( $entry['detail'] ) || ! empty( $entry['formatted_detail'] ) ) : ?>
                                            <li>
                                                <?php // Only show the main detail text if it's not empty.
                                                if ( ! empty( $entry['detail'] ) ) : ?>
                                                    <div class="transport-point-content">
                                                        <span><?php echo esc_html( $entry['detail'] ); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                                
                                                <?php // Only show the formatted detail content if it's not empty.
                                                if ( ! empty( $entry['formatted_detail'] ) ) : ?>
                                                    <div class="point-formatted-content">
                                                        <?php echo apply_filters('the_content', $entry['formatted_detail']); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <?php if (get_the_content()) : ?>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-12">
                    <div class="card shadow-sm main-content-area"><?php the_content(); ?></div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    
    <?php if (!empty($venue_video_links) && is_array($venue_video_links) && !empty(array_filter($venue_video_links))) : ?>
    <div class="section-wrapper">
        <div class="text-center">
            <h2 class="venue-section-title"><i class="bi bi-camera-reels-fill"></i>Virtual Tour</h2>
            <p class="section-subtitle">Watch our videos to get a better sense of the venue and facilities before your course.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach (array_filter($venue_video_links) as $video_link) : ?>
                <div class="col-md-6">
                    <a href="<?php echo esc_url($video_link); ?>" data-fancybox="venue-videos" class="gallery-item-link card shadow-sm">
                        <?php $video_id = get_youtube_id_from_url($video_link); $thumbnail_url = $video_id ? "https://i.ytimg.com/vi/{$video_id}/hqdefault.jpg" : ""; ?>
                        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="Venue Video Thumbnail" class="img-fluid">
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <?php if (!empty($venue_images)) : ?>
    <div class="section-wrapper">
        <div class="text-center">
            <h2 class="venue-section-title"><i class="bi bi-images"></i>Venue Gallery</h2>
            <p class="section-subtitle">Explore our facility through the image gallery below.</p>
        </div>
        <div class="row g-3 g-sm-4">
            <?php foreach ((array) $venue_images as $attachment_id => $attachment_url) :
                $full_image_url = wp_get_attachment_url($attachment_id);
                $thumbnail_image_url = wp_get_attachment_image_url($attachment_id, 'large');
                $image_alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true) ?: get_the_title();
                if ($full_image_url && $thumbnail_image_url) :
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <a href="<?php echo esc_url($full_image_url); ?>" data-fancybox="venue-gallery" data-caption="<?php echo esc_attr($image_alt); ?>" class="gallery-item-link card shadow-sm">
                        <img src="<?php echo esc_url($thumbnail_image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="img-fluid">
                    </a>
                </div>
            <?php
                endif;
            endforeach;
            ?>
        </div>
    </div>
    <?php endif; ?>
</div>

<?php
get_footer();
?>