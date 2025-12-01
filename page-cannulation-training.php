<?php
/**
 * Template Name: Cannulation Training Page
 * Description: Dynamic version powered by CMB2 metas.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$current_product_id = get_the_ID();

// RETRIEVE ALL CUSTOM META DATA AT THE TOP
// Use get_post_meta() for consistency and organization
$page_meta = array(
    // WordPress native meta fields
    'product_faqs' => get_post_meta( $current_product_id, 'product_faqs', true ),
    'course_reviews' => get_post_meta( $current_product_id, 'la_course_reviews', true ),
    
    // CMB2 meta fields - Top 3 Cards Section
    'top_features' => get_post_meta( $current_product_id, '_la_cannulation_top_features_group', true ),
    
    // CMB2 meta fields - Hero Section
    'hero_description' => get_post_meta( $current_product_id, '_la_cannulation_hero_description', true ),
    
    // CMB2 meta fields - About Section
    'about_subtitle' => get_post_meta( $current_product_id, '_la_cannulation_about_subtitle', true ),
    'about_title' => get_post_meta( $current_product_id, '_la_cannulation_about_title', true ),
    'about_description' => get_post_meta( $current_product_id, '_la_cannulation_about_description', true ),
    'video_url' => get_post_meta( $current_product_id, '_la_cannulation_video_url', true ),
    
    // CMB2 meta fields - Venues Section
    'venues_title' => get_post_meta( $current_product_id, '_la_cannulation_venues_title', true ),
    'venue_products' => get_post_meta( $current_product_id, '_la_cannulation_venue_products', true ),
    'venue_default_features' => get_post_meta( $current_product_id, '_la_cannulation_venue_default_features', true ),
    'venue_button_label' => get_post_meta( $current_product_id, '_la_cannulation_venue_button_label', true ),
    'venue_default_title' => get_post_meta( $current_product_id, '_la_cannulation_venue_default_title', true ),
);

// Extract individual variables for backward compatibility
$wc_product_faqs = $page_meta['product_faqs'];
$course_reviews = $page_meta['course_reviews'];
$top_features = $page_meta['top_features'];
$hero_description = $page_meta['hero_description'];
$about_subtitle = $page_meta['about_subtitle'];
$about_title = $page_meta['about_title'];
$about_description = $page_meta['about_description'];
$video_embed_url = $page_meta['video_url'];
$venues_title = $page_meta['venues_title'];
$venue_products = $page_meta['venue_products'];
$venue_default_features = $page_meta['venue_default_features'];
$venue_button_label = $page_meta['venue_button_label'];
$venue_default_title = $page_meta['venue_default_title'];

$venue_ids = array_filter( array_map( 'intval', explode( ',', $venue_products ) ) );
?>
<!-- Top 3 -->
<section id="phuk-top-3-sec">
	<div class="container">
		<div class="phlebotomy-top-3">
			<div class="phlebotomy-container">
				<?php if ( ! empty( $top_features ) ) : ?>
					<?php foreach ( $top_features as $feature ) : ?>
						<div class="single-phlebotomy-top-3">
							<div class="float-row">
								<div class="float-left">
									<?php if ( ! empty( $feature['image'] ) ) : ?>
										<img src="<?= esc_url( $feature['image'] ) ?>" alt="<?= esc_attr( $feature['title'] ) ?>">
									<?php endif; ?>
								</div>
								<div class="float-right">
									<p><?= esc_html( $feature['title'] ) ?></p>
									<p><?= esc_html( $feature['desc'] ) ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<!-- Top 3 End -->

<!-- Phlebotomy  Hero Section -->
<section id="phuk-hero-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                <h1><?php the_title()?></h1>
                <p><?= wp_kses_post( $hero_description ); ?></p>
            <style>
            .google-review-svg {
                width: 400px;
            }

            @media (max-width: 468px) {
                .google-review-svg {
                width: 300px;
            }
            }
        </style>
                <svg class="google-review-svg" xmlns="http://www.w3.org/2000/svg" id="Layer_1" version="1.1" viewBox="0 0 317 25">
        <defs>
            <style>
            .st0 {
                fill: #01b67a;
            }

            .st1 {
                fill: #005229;
            }

            .st2 {
                font-family: Poppins-Regular, Poppins;
            }

            .st2, .st3, .st4 {
                fill: #fff;
            }

            .st2, .st4 {
                font-size: 10.25px;
            }

            .st5 {
                fill: #e84335;
            }

            .st6 {
                fill: #34a753;
            }

            .st4 {
                font-family: Poppins-SemiBold, Poppins;
                font-weight: 600;
            }

            .st7 {
                fill: #fbbb06;
            }

            .st8 {
                fill: #2d9657;
            }

            .st9 {
                fill: none;
                stroke: #fff;
                stroke-miterlimit: 10;
                stroke-width: .74px;
            }

            .st10 {
                fill: #4385f4;
            }
            </style>
        </defs>
        <g>
            <text class="st4" transform="translate(213.54 16.19)"><tspan x="0" y="0">Customer Reviews</tspan></text>
            <g>
            <path class="st5" d="M190.49,8.85c2.11-4.22,7.66-5.6,11.4-2.58.08.07.33.26.38.33.01.02.03.03.01.05l-2.13,2.12c-.08.03-.04-.05-.08-.08-.06-.06-.25-.18-.33-.24-2.44-1.74-5.83-.46-6.75,2.32l-2.49-1.93Z"></path>
            <path class="st6" d="M193,13.68c.93,2.78,4.35,4.03,6.81,2.36l2.43,1.89c-.85.79-1.81,1.31-2.94,1.6-3.57.91-7.17-.67-8.81-3.94l2.51-1.91Z"></path>
            <path class="st10" d="M199.81,16.05c.75-.51,1.35-1.38,1.48-2.28h-4.06v-2.92h7.13c.42,2.49-.16,5.22-2.02,7.01-.03.03-.08.05-.11.07l-2.43-1.89Z"></path>
            <path class="st7" d="M192.98,10.78c-.11.34-.2.85-.21,1.2-.16.11-.16.37,0,.47.02.4.11.84.24,1.22l-2.51,1.91c-1.09-2.19-1.09-4.56,0-6.75l2.49,1.93Z"></path>
            <path class="st7" d="M192.77,12.46c-.16-.1-.16-.37,0-.47,0,.15,0,.32,0,.47Z"></path>
            </g>
        </g>
        <g>
            <text class="st2" transform="translate(111.5 15.84)"><tspan x="0" y="0">Rated</tspan></text>
            <text class="st2" transform="translate(147.56 16.05)"><tspan x="0" y="0">4.9/5</tspan></text>
            <line class="st9" x1="179.5" y1="5.01" x2="179.5" y2="19.17"></line>
        </g>
        <g>
            <rect class="st8" x="6.57" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M18.75,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M18.75,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M19.97,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
            <rect class="st8" x="26.73" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M38.91,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M38.91,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M40.12,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
            <rect class="st8" x="46.88" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M59.06,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M59.06,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M60.28,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
            <rect class="st8" x="67.03" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M79.22,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M79.22,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M80.43,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
            <rect class="st8" x="87.19" y="2.73" width="18.5" height="18.5"></rect>
            <g>
            <path class="st3" d="M99.37,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"></path>
            <path class="st1" d="M99.37,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"></path>
            <path class="st0" d="M100.59,18.36s.01.01,0,.02v-.02Z"></path>
            </g>
        </g>
        </svg>
               <!-- <a href="#">View Courses</a> -->
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5"></div>
        </div>
    </div>
</section>
<!-- Phlebotomy  Hero Section End -->

<!-- Phlebotomy About Section -->

<section id="phuk-about-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 phuk-about-text-col">
                <div class="phuk-about-text">
					<h2><?= esc_html( $about_subtitle ); ?></h2>
					<h2><?= esc_html( $about_title ); ?></h2>
					<p><?= wp_kses_post( $about_description ); ?></p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
				<div class="phuk-about-video">
					<?php if ( $video_embed_url ) : ?>
						<iframe width="560" height="315"
							src="<?= esc_url( $video_embed_url ); ?>"
							frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen>
						</iframe>
					<?php endif; ?>
				</div>
            </div>
        </div>
    </div>
</section>

<!-- Phlebotomy About Section End -->

<!-- Phlebotomy Our Venue Section -->
<section id="phuk-venue-sec">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?= esc_html( $venues_title ?: 'Our Venues' ); ?></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
                // Loop through venue IDs from CMB2 meta
                if ( ! empty( $venue_ids ) ) :
                    foreach( $venue_ids as $p_id ) :
                        $product_url = get_permalink($p_id);
                        $product_title = get_the_title($p_id);
                        $post_thumbnail_id = get_post_thumbnail_id($p_id);
                        $product_image = wp_get_attachment_image_src($post_thumbnail_id, "full")[0];
                        $product_image_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', TRUE);
                        $product = wc_get_product($p_id);
                        if ($product && $product->is_type('variable')) {
                            $variations = $product->get_available_variations();
                            if (!empty($variations)) {
                                $variation_price = $variations[0]['display_price'];
                                $variation_price_per_month = number_format($variation_price / 4, 2);
                            }
                        }
                        
                        // Dynamically extract location name from product title
                        $location_name = '';
                        if (strpos($product_title, 'London') !== false) {
                            $location_name = 'London';
                        } elseif (strpos($product_title, 'Birmingham') !== false) {
                            $location_name = 'Birmingham';
                        } elseif (strpos($product_title, 'Swindon') !== false) {
                            $location_name = 'Swindon';
                        } elseif (strpos($product_title, 'Bristol') !== false) {
                            $location_name = 'Bristol';
                        } elseif (strpos($product_title, 'Cardiff') !== false) {
                            $location_name = 'Cardiff';
                        } elseif (strpos($product_title, 'Manchester') !== false) {
                            $location_name = 'Manchester';
                        } elseif (strpos($product_title, 'Oxford') !== false) {
                            $location_name = 'Oxford';
                        } elseif (strpos($product_title, 'Cambridge') !== false) {
                            $location_name = 'Cambridge';
                        } elseif (strpos($product_title, 'Leeds') !== false) {
                            $location_name = 'Leeds';
                        }
                        
                        // Get default card title
                        $card_title = $venue_default_title ?: 'IV Cannulation Training';
                        
                        // Get default button label
                        $button_label = $venue_button_label ?: 'BOOK NOW';
            ?>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="fsc-custom-card">
                    <?php if ( $product_image ) : ?>
                        <img src="<?= esc_url($product_image) ?>" alt="<?= esc_attr($product_image_alt ?: $card_title) ?>" width="100%" height="196">
                    <?php endif; ?>
                    <div class="fsc-card-contents">
                        <h3>
                            <a href="<?= esc_url($product_url) ?>"><?= esc_html($card_title) ?></a>
                        </h3>
                        <?php if ( $location_name ) : ?>
                            <p class="fsc-card-price-content">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512" style="margin-right: 5px;">
                                <style>svg{fill:#c52855}</style>
                                <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                            </svg>
                            <?= esc_html($location_name) ?>
                            </span>
                            </p>
                        <?php endif; ?>

                        <p class="fsc-package-includes">Features Included:</p>
                        <ul>
                            <?php if ( ! empty( $venue_default_features ) ) : ?>
                                <?php foreach ( $venue_default_features as $feature ) : ?>
                                    <li><?= esc_html($feature) ?></li>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <li>1 Day Face to Face Training</li>
                                <li>4 Instalments at Checkout</li>
                                <li>Accredited by CPD UK</li>
                                <li>Unlimited Tutor Support</li>
                            <?php endif; ?>
                        </ul>

                        <a href="<?= esc_url($product_url) ?>" class="fsc-view-course-btn"><?= esc_html($button_label) ?></a>
                    </div> <!-- end card contents -->
                </div> <!-- end fsc-custom-card -->
            </div>
            <?php
                    endforeach;
                endif;
            ?>
        </div>
    </div>
</section>


<!-- Phlebotomy Review Section End -->
<section id="phuk-review-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h2>Valuable Feedback From Student</h2>
                <div class="phuk-review-part">
                    <?php
                        echo '
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
                            <style>
                                #phlebotomy-page .la-reviews-carousel-section-wrap {
                                    margin: 120px auto 80px;
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-box-head h2 {
                                    font-size: 20px;
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-rv h3 {
                                    font-size: 16px;
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel.owl-drag .owl-item .cat-feedback-ds p {
                                    font-family: "Sen";
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel .owl-dots.disabled, #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel .owl-nav.disabled {
                                    display: block;
                                }
                                #phlebotomy-page .la-reviews-carousel-section-wrap .owl-carousel .owl-nav .owl-prev {
                                    left: -21px;
                            </style>
                        ';
if (function_exists('la_display_reviews_section')) {
    la_display_reviews_section();
}
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Phlebotomy Review Section End -->

<!-- Phlebotomy FAQ Section --> 
<section id="phuk-faq">
    <div class="container">
        <div id="la-single-faq" class="d-xl-block overflow-hidden">
            <h2 class="text-center"><b>FAQs</b></h2>
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <?php
                    $all_faqs = get_post_meta( get_the_ID(), 'product_faqs', true);
                    $id_number=1;
                    foreach($all_faqs as $faq){
                ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="panelsStayOpen-heading<?=$id_number?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse<?=$id_number?>" aria-expanded="true" aria-controls="panelsStayOpen-collapse<?=$id_number?>"><?=$faq['faq_title']?></button>
                        </h3>
                        <div id="panelsStayOpen-collapse<?=$id_number?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading<?=$id_number?>">
                            <div class="accordion-body">
                                <p><?=$faq['faq_text']?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    $id_number++;
                    }
                ?>
                
            </div>
        </div>
    </div>
</section>

<!-- Phlebotomy FAQ Section End --> 


<style>
    .fsc-card-contents a.fsc-view-course-btn {
    position: absolute !important;
    bottom: -20px;
    left: 0;
    right: 0;
    text-align: center;
    top: auto !important;
    margin: 0px 20px 10px 20px;
}


.fsc-card-contents ul {
    height: auto !important;
}

.fsc-custom-card {
    height: 95%;
}

.fsc-card-contents h3 {
    height: auto;
    font-size: 20px;
}

p.fsc-package-includes {
    height: 35px;
    color: #7b0226 !important;
}

.see-more-btn {
    background: #AF1F47;
    color: #fff;
    border-radius: 5px;
    margin: 20px auto;
    font-size: 18px;
    font-weight: 600;
    padding: 10px 40px;
    border: 2px solid #AF1F47;
    display: block;
    width: -moz-fit-content;
    width: fit-content;
    cursor: pointer;
    transition: all 0.3s ease;
}
.see-more-btn:hover {
    background: #fff;
    color: #AF1F47;
}

@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .fsc-card-contents a.fsc-view-course-btn {
    margin: 0px 35px 10px 35px;
}
}

@media only screen and (max-width: 767px) {
    .fsc-custom-card {
    height: 95%;
    min-height: auto !important;
}

.fsc-card-contents a.fsc-view-course-btn {
    margin: 0px 20px 10px 20px;
}
}

/* Additional styles to match fsc-custom-card exactly */
#phuk-venue-sec .fsc-custom-card {
    background-color: #fff;
    position: relative;
    max-width: 100%;
    border-radius: 10px;
    border: 1px solid #dfdfdf;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
    margin: 15px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

#phuk-venue-sec .fsc-custom-card:hover {
    transform: translateY(-5px) !important;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1) !important;
}

#phuk-venue-sec .fsc-custom-card img {
    width: 100% !important;
    border-radius: 10px 10px 0 0 !important;
    height: auto;
    max-height: 196px;
    object-fit: cover;
}

#phuk-venue-sec .fsc-card-contents {
    background-color: #fff;
    padding: 20px;
    position: relative;
}

#phuk-venue-sec .fsc-card-contents h3 {
    color: #000;
    font-size: 20px;
    font-weight: 600;
    font-family: "Sen", Sans-serif;
    margin-bottom: 10px;
    text-align: left !important;
    padding: 0px 0px !important;
}

#phuk-venue-sec .fsc-card-contents h3 a {
    color: #000;
    text-decoration: none;
}

#phuk-venue-sec .fsc-card-contents h3 a:hover {
    color: #AF1F47;
}

#phuk-venue-sec .fsc-card-price-content {
    display: flex;
    align-items: center;
    color: #555 !important;
    margin-bottom: 15px !important;
    font-size: 16px;
}

#phuk-venue-sec .fsc-card-contents ul {
    list-style-type: none;
    padding: 0;
    margin-bottom: 60px;
}

#phuk-venue-sec .fsc-card-contents li {
    font-size: 1rem !important;
    color: #555 !important;
    margin-bottom: 15px !important;
    position: relative;
    list-style: none;
    padding-left: 1.5em;
}

#phuk-venue-sec .fsc-card-contents li::before {
    position: absolute;
    left: 0;
    content: "\f058";
    font-family: 'FontAwesome';
    color: #AF1F47;
    margin-right: 10px;
    font-size: 18px;
}

#phuk-venue-sec .fsc-view-course-btn {
    color: white !important;
    padding: 10px 20px !important;
    border-radius: 5px !important;
    text-align: center !important;
    font-weight: bold !important;
    text-decoration: none !important;
    transition: background-color 0.3s ease !important;
    cursor: pointer;
    background-image: linear-gradient(103deg, #D64A71 0%, #C52C52 100%);
    display: inline-block;
    font-size: 16px;
}

#phuk-venue-sec .fsc-view-course-btn:hover {
    background-image: linear-gradient(103deg, #C52C52 0%, #D64A71 100%);
}

.phuk-card-box {
	border: 1px solid #cccccc !important;
	border-radius: 10px !important;
}

</style>

<?php get_footer(); ?>
