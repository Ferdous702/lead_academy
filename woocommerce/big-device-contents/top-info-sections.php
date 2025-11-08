<!-- Top Info Section -->
<section id="top-info-section" class="d-none d-sm-block">
	<div class="container">
		<div id="top-info-parts">
			<?php
			$installment = 4;
			// Have 6 installment
			// British Sign Language Level 1
			// British Sign Language Level 2
			if (in_array($current_product_id, array(396278, 394447, 364465, 364491))) {
				$installment = 6;
			}
			if (in_array($current_product_id, FACE_2_FACE_PRODUCT_CODES)) {
				$face2face = '<p class="la-top-info-title">Face-to-Face Training Session</p>
				<p>to provide you with the top notch learning experience</p>';
			} elseif ($current_product_id == 445843) {
				$face2face = '<p class="la-top-info-title">Hands on Training</p>
				<p>Learn on your own accord, wherever you want, whenever you want.</p>';
			} else {
				$face2face = '<p class="la-top-info-title">Self-Paced Online Learning</p>
				<p>Learn on your own accord, wherever you want, whenever you want.</p>';
			}
			if (in_array($current_product_id, array(396278, 394447, 364491, 364465, 368889, 368909, 368919))) {
				include ASTRA_CHILD_THEME_DIR . '/woocommerce/educational-training-top-contents.php';
			} else {
			?>
				<div class="top-info-single">
					<div class="top-info-single-left">
						<img src="<?php echo get_site_url() ?>/wp-content/uploads/2022/09/self-paced-training.svg" title="Self Paced Training" alt="self-paced-training">
					</div>
					<div class="top-info-single-right">
						<?= $face2face ?>
					</div>
				</div>
				<div class="top-info-single">
					<div class="top-info-single-left">
						<img src="<?php echo get_site_url() ?>/wp-content/uploads/2022/09/3-instalment.svg" title="Instalment Plan on checkout" alt="instalment-plan-on-checkout">
					</div>
					<div class="top-info-single-right">
						<p class="la-top-info-title"><?= $installment ?> Instalment Plan on checkout</p>
						<p>You have the option to choose from four easy instalment plans.</p>
					</div>
				</div>
				<div class="top-info-single">
					<div class="top-info-single-left">
						<img src="<?php echo get_site_url() ?>/wp-content/uploads/2022/09/14-days-money-back.svg" title="14 Days Money Back Guarantee" alt="14-days-money-back-guarantee">
					</div>
					<div class="top-info-single-right">
						<p class="la-top-info-title">14 Days Money Back Guarantee</p>
						<p>Hassle-free guarantee on purchase, ensuring quality & your peace of mind.</p>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</section>