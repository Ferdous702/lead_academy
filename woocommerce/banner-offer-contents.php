<section id="top-banner">
	<div class="bg-overlay">
		<?php
			$product_image = wp_get_attachment_image_src( get_post_thumbnail_id( $current_product_id ), 'full' );
		?>
		<img src="<?php echo $product_image[0]?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" width="708" height="401">
	</div>
	<div class="container">
		<h1><?php the_title()?></h1>

        <?php
        if ( current_user_can('manage_options') ) {
            if(in_array( $current_product_id, array(376160, 376417, 376420, 377824, 408652) )) {
                ?>
                <p>Our phlebotomy training helps people to get trained and work as phlebotomists in private & public healthcare organisations.</p>
                <?php
            }
        }
        ?>
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
            <path class="st5" d="M190.49,8.85c2.11-4.22,7.66-5.6,11.4-2.58.08.07.33.26.38.33.01.02.03.03.01.05l-2.13,2.12c-.08.03-.04-.05-.08-.08-.06-.06-.25-.18-.33-.24-2.44-1.74-5.83-.46-6.75,2.32l-2.49-1.93Z"/>
            <path class="st6" d="M193,13.68c.93,2.78,4.35,4.03,6.81,2.36l2.43,1.89c-.85.79-1.81,1.31-2.94,1.6-3.57.91-7.17-.67-8.81-3.94l2.51-1.91Z"/>
            <path class="st10" d="M199.81,16.05c.75-.51,1.35-1.38,1.48-2.28h-4.06v-2.92h7.13c.42,2.49-.16,5.22-2.02,7.01-.03.03-.08.05-.11.07l-2.43-1.89Z"/>
            <path class="st7" d="M192.98,10.78c-.11.34-.2.85-.21,1.2-.16.11-.16.37,0,.47.02.4.11.84.24,1.22l-2.51,1.91c-1.09-2.19-1.09-4.56,0-6.75l2.49,1.93Z"/>
            <path class="st7" d="M192.77,12.46c-.16-.1-.16-.37,0-.47,0,.15,0,.32,0,.47Z"/>
            </g>
        </g>
        <g>
            <text class="st2" transform="translate(111.5 15.84)"><tspan x="0" y="0">Rated</tspan></text>
            <text class="st2" transform="translate(147.56 16.05)"><tspan x="0" y="0">4.9/5</tspan></text>
            <line class="st9" x1="179.5" y1="5.01" x2="179.5" y2="19.17"/>
        </g>
        <g>
            <rect class="st8" x="6.57" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M18.75,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M18.75,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M19.97,18.36s.01.01,0,.02v-.02Z"/>
            </g>
            <rect class="st8" x="26.73" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M38.91,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M38.91,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M40.12,18.36s.01.01,0,.02v-.02Z"/>
            </g>
            <rect class="st8" x="46.88" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M59.06,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M59.06,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M60.28,18.36s.01.01,0,.02v-.02Z"/>
            </g>
            <rect class="st8" x="67.03" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M79.22,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M79.22,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M80.43,18.36s.01.01,0,.02v-.02Z"/>
            </g>
            <rect class="st8" x="87.19" y="2.73" width="18.5" height="18.5"/>
            <g>
            <path class="st3" d="M99.37,14.59c.4,1.23.8,2.46,1.2,3.69v.07s-4.13-2.97-4.13-2.97l-4.15,2.99,1.57-4.88-4.13-3.01h5.12l1.59-4.88,1.6,4.88h5.12c-1.38,1.01-2.76,2.03-4.15,3.04-.17.12-.34.23-.5.35l-2.04,1.49,2.9-.75Z"/>
            <path class="st1" d="M99.37,14.59l-2.9.75,2.04-1.49c.16-.12.34-.23.5-.35.13.36.24.73.36,1.09Z"/>
            <path class="st0" d="M100.59,18.36s.01.01,0,.02v-.02Z"/>
            </g>
        </g>
        </svg>

		<div id="top-banner-buttons">
			
        <!-- Trigger/Open The Modal -->
        <style>
            #videoModal iframe {
                width: 940px !important;
                height: 503px !important;
            }
            @media screen (max-width: 768px) {
                #videoModal iframe {
                    height: 324px !important;
                }
            }
            .gift_course_button {
                display: none !important;
            }
            .gform_wrapper.gravity-theme .gform_footer, .gform_wrapper.gravity-theme .gform_page_footer{
                padding: 0px !important;
            }
            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 999; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            padding-bottom: 20px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            max-width: 100%;
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                background-color: #f8f8f8;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 940px;
                max-width: 80%;
            }

            /* The Close Button */
            .close {
                color: #fff;
                position: absolute;
                top: 10px;
                right: 12px;
                width: 30px;
                height: 30px;
                line-height: 30px;
                background: #b2234e;
                border-radius: 50%;
                font-size: 26px;
                font-weight: bold;
                font-family: 'Poppins';
                text-align: center;
            }

            .close:hover,
            .close:focus {
            color: #fff;
            text-decoration: none;
            cursor: pointer;
            }

            #enquiryModal textarea {
                height: 100px;
            }
            div#gform_64_validation_container h2 {
                font-size: 18px;
                line-height: 26px;
            }
            </style>
			<!-- <a href="#exam-board" id="la-course-enrol-now">ENROL NOW</a> -->
			<?php
				if ( $watch_video_url ) {
					echo '<a href="#" id="videoModalTrigger" class="la-watch-now-btn"><i class="fa fa-play-circle"></i> '.esc_html($watch_video_btn_title == '' ? 'Watch Now' : $watch_video_btn_title).'</a>';
				}
			?>
		</div>

        <!-- The Modal -->
        <?php
        // Extract YouTube video ID from URL for proper API integration
        $video_id = '';
        if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $watch_video_url, $matches)) {
            $video_id = $matches[1];
        }

        if ($video_id) {
        ?>
        <div id="videoModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <iframe
                    id="yTPlayer"
                    width="1200"
                    height="675"
                    src="https://www.youtube.com/embed/<?php echo esc_attr($video_id); ?>?enablejsapi=1&feature=oembed"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById("videoModal");

            // Get the button that opens the modal
            var btn = document.getElementById("videoModalTrigger");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // Get the iframe with reliable ID selection
            var iframeEl = document.getElementById("yTPlayer");

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                // Stop the video completely using YouTube Player API
                if (iframeEl && iframeEl.contentWindow) {
                    iframeEl.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
                }
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    // Also stop the video when clicking outside
                    if (iframeEl && iframeEl.contentWindow) {
                        iframeEl.contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*');
                    }
                    modal.style.display = "none";
                }
            }
        </script>
        <?php
        }
        ?>
	</div>
</section>
<?php
// BSL					300
// Bundle Courses		347
// Functional Skills	331
// GCSE Courses			359
// Education & Training	355
$specified_cats = [];
$la_course_terms = get_the_terms( get_the_ID(), 'product_cat' );
foreach( $la_course_terms as $cat ) {
	$specified_cats[] = $cat->term_id;
	$specified_cats[] = $cat->parent;
}

function la_get_dynamic_class_for_recurring_payment_courses( $recurring_course_cats ){
	foreach( $recurring_course_cats as $cat ) {
		if( in_array( $cat, $specified_cats ) ) {
			echo 'la-recurring-enabled-course cat-'.$cat.', specified-'.implode('|', $specified_cats);
		}
	}
}

// if ( current_user_can( 'manage_options' ) ) {
// 	echo '<pre>';
// 	print_r( $specified_cats );
// 	echo '</pre>';
// }


if ( 
    // Vaccination and Immunisation Training with Basic Life Support
    '387587' == $current_product_id 
) {
        ?>
        <section class="promo-sell">
            <div class="promo-sell-s">
            <p>GET <span>EXTRA 10% DISCOUNT </span>FOR FIRST PURCHASE: <span id="coupon">VACCI10LA</span> AT CHECKOUT</p>
            </div>
        </section>
        <?php
    // } elseif( in_array( '359', $specified_cats ) ) {
        ?>
        <!-- <section id="promo-sell-ten" class="promo-sell">
            <div class="promo-sell-s">
                <p>SUMMER SALE, <span>GET 10% OFF!</span> USE COUPON: <span id="coupon">LA10P</span> AT CHECKOUT</p>
            </div>
        </section>  -->
        <?php
    // }
}
?>
