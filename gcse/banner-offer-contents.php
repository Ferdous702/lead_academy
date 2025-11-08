<section id="top-banner">
	<div class="bg-overlay">
		<?php
			$course_img = wp_get_attachment_image_src( get_post_thumbnail_id( $current_course_id ), 'full' );
		?>
		<img src="<?php echo $course_img[0]?>" alt="<?php echo get_the_title()?>" title="<?php echo get_the_title()?>" width="708" height="401">
	</div>
	<div class="container">
		<h1><?php the_title()?></h1>
        <h2>A rigorous online course that will equip you with both basic and advanced skills and understanding regarding GCSE.</h2>

		<img src="<?php echo get_site_url()?>/wp-content/uploads/2022/10/Trust-Pilot-Micro-Combo-3-1.svg" width="317" height="25" alt="trustpilot-rating" id="trustpilot-rating-img">
		<div id="top-banner-buttons" class="d-none">
			<a href="#exam-board" id="la-course-enrol-now">ENROL NOW</a>
		</div>
	</div>
</section>