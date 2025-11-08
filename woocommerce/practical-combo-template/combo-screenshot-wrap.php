<?php
// FILE: your-template-file.php
// PURPOSE: To display an image gallery as a Modern Slick Slider

//----------------------------------------------------------------------
// STEP 1: HEADER SCRIPTS & STYLES (Unchanged)
// Ensure these are loaded on your page. jQuery should be loaded before these.
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<style>
  .fancybox img {
    border: none !important;
    box-shadow: none !important;
    margin: 0 !important;
}
</style>
<?php
//----------------------------------------------------------------------
// STEP 2: PHP/HTML CODE (Unchanged)
// This part correctly sets up the image data and HTML structure.

$product_title_for_alt = get_the_title(isset($current_product_id) ? $current_product_id : get_the_ID());

if (isset($image_gallery_btn) && $image_gallery_btn != 'hide') {
    $gallery_images = [];
    $gallery_title = '';

    if (isset($la_session_overview_title) && !empty($la_session_overview_image) && is_array($la_session_overview_image)) {
        // Use custom images
        $gallery_title = esc_html($la_session_overview_title);
        $image_count = count($la_session_overview_image);
        $counter = 1;
        foreach ($la_session_overview_image as $attachment_id => $img_url) {
            $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
            if (empty($alt_text)) {
                $alt_text = esc_attr($product_title_for_alt) . ' Dry Lab Practical Session image';
                if ($image_count > 1) {
                    $alt_text .= ' ' . $counter;
                }
            }
            $gallery_images[] = ['url' => $img_url, 'alt' => $alt_text];
            $counter++;
        }
    } else {
        // Fallback to default gallery images
        $gallery_title = 'Previous Practical Session Overview';
        $base_alt = esc_attr($product_title_for_alt) . ' Dry Lab Practical Session image';
        $gallery_images = [
            ['url' => '/wp-content/uploads/2023/02/screenshot-1.webp', 'alt' => $base_alt . ' 1'],
            ['url' => '/wp-content/uploads/2023/02/screenshot-2.webp', 'alt' => $base_alt . ' 2'],
            ['url' => '/wp-content/uploads/2023/02/screenshot-3.webp', 'alt' => $base_alt . ' 3'],
            ['url' => '/wp-content/uploads/2023/02/screenshot-4.webp', 'alt' => $base_alt . ' 4'],
        ];
    }
    ?>
    <div id="screenshot-wrap">
        <div id="screenshot" class="phlebotomy-common">
            <h2><?php echo $gallery_title; ?></h2>
            
            <div class="slider-container-modern">
                <div class="screenshot-slider-modern">
                    <?php foreach ($gallery_images as $image): ?>
                        <div class="slick-slide-item">
                            <a href="<?php echo esc_url($image['url']); ?>" class="fancybox" data-fancybox="gallery">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php
//----------------------------------------------------------------------
// STEP 3: UPDATED JAVASCRIPT & CSS
// Button positions and slider speeds have been updated.
?>

<style>
    /* Main container for the slider */
    .slider-container-modern {
        position: relative;
        margin: 20px 40px; /* Add margin to make space for external arrows */
        padding: 0;
    }

    /* Styling for each image frame based on your CSS */
    .screenshot-slider-modern .slick-slide-item a {
        display: block;
        cursor: pointer !important;
        background: #fff;
        border: 5px solid #fff;
        border-radius: 3px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        margin: 5px;
        padding: 0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .screenshot-slider-modern .slick-slide-item a:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.08);
    }
    
    /* CSS for consistent image height */
    .screenshot-slider-modern .slick-slide-item img {
        display: block;
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 0;
    }

    /* Arrow Styling */
    .slick-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        background-color: transparent;
        border: none;
        padding: 0;
        margin: 0;
        cursor: pointer !important;
    }
    
    /* === Position arrows outside the slider content === */
    .slick-prev {
        left: -45px;
    }
    .slick-next {
        right: -35px;
    }

    /* Fix for double arrows by hiding the default slick font icon */
    .slick-prev:before, .slick-next:before {
        content: '' !important;
    }

    .slick-arrow i {
        color: #b02348;
        border: 1px solid #b02348;
        padding: 5px 8px;
        border-radius: 30px;
        font-size: 18px;
        transition: all 0.3s ease;
    }
    
    .slick-arrow:hover i {
        background-color: #b02348;
        color: #fff;
    }

    .slick-disabled:hover i {
        background-color: transparent;
        color: #b02348;
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
        .slider-container-modern {
            margin: 0px 0 20px;
        }

        .slick-arrow {
            top: auto;
            bottom: 0px;
            transform: translateY(0) !important;
        }

        .slick-prev {
            left: 30%;
            transform: translateX(-30%);
        }

        .slick-next {
            right: 30%;
            transform: translateX(30%);
        }

        .slick-list.draggable {
            padding: 30px;
        }
    }
</style>

<script>
jQuery(document).ready(function($) {
    // 1. Initialize FancyBox (unchanged)
    $('.fancybox').fancybox({
        buttons: ["zoom", "share", "close"],
    });

    // 2. Initialize Slick Slider (Speed values updated)
    $('.screenshot-slider-modern').slick({
        dots: false,
        infinite: true,
        speed: 800,           // UPDATED: Normal transition speed
        autoplay: true,
        autoplaySpeed: 2000,  // UPDATED: Time between slides
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        pauseOnHover: true,
        prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
});
</script>
