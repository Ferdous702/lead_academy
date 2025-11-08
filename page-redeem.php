<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<style>
section#redeem-part {
    text-align: center;
}

section#redeem-part h1 {
    color: #000000;
    font-family: "Sen", Sans-serif;
    font-size: 40px;
    font-weight: 700;
    margin-top: 50px;
}

section#redeem-part p {
    margin-top: 30px;
    margin-bottom: 55px;
}

input#gform_submit_button_3 {
    background-color: #af1f47;
}

section#redeem-subscribe {
    padding: 60px 0px;
}

section#redeem-subscribe h2 {
    color: #000000;
    font-family: "Sen", Sans-serif;
    font-weight: 600;
    text-align: center;
}

section#redeem-subscribe p {
    text-align: center;
    font-family: "Sen", Sans-serif;
    font-weight: 400;
    font-size: 18px;
    color: #7a7a7a;
    margin-bottom: 50px;
}

section#redeem-subscribe h2 {
    color: #000000;
    font-family: "Sen", Sans-serif;
    font-weight: 600;
    text-align: center;
    font-size: 28px;
}

input#gform_submit_button_81 {
    background-color: #af1f47;
}

@media (max-width: 767px) {
	section#redeem-part h1 {
    font-size: 22px;
}

section#redeem-subscribe h2 {
    font-size: 22px;
}

section#redeem-subscribe p {
    font-size: 16px;
}
}
</style>
<section id="redeem-part">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<h1>Redeem Your Voucher – Claim Discounts Instantly</h1>
				<hr class="solid">
				<p>Thank you for purchasing the course. Please enter your details below to redeem your voucher.</p>
				<?php
				echo do_shortcode('[contact-form-7 id="e0d3281" title="Redeem Voucher Manual"]');
				?>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>