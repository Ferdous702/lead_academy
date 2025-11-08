<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<section id="exam-booking-banner">
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			<h1><?php echo get_the_title(); ?></h1>
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
	</div>
</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
			<div class="job-posting-container">
				<div class="job-header">
					<h2>We are hiring!</h2>
					<h3>Freelance Health and Social Care Assessor</h3>
				</div>

				<div class="job-details-grid">
					<div class="job-detail-item">
						<span class="detail-label">Company:</span>
						<span class="detail-value">Lead Academy</span>
					</div>
					<div class="job-detail-item">
						<span class="detail-label">Contract Type:</span>
						<span class="detail-value">Freelance</span>
					</div>
					<div class="job-detail-item">
						<span class="detail-label">Pay Rate:</span>
						<span class="detail-value">£20 per hour</span>
					</div>
					<div class="job-detail-item">
						<span class="detail-label">Locations:</span>
						<span class="detail-value">Swindon, Manchester, London, Birmingham, Leeds, Chester, Cardiff, Yorkshire</span>
					</div>
					<div class="job-detail-item full-width">
						<span class="detail-label">Travelling Cost:</span>
						<span class="detail-value">Travel costs reimbursed when travelling for observation</span>
					</div>
				</div>

				<div class="job-section">
					<div class="section-icon">🏥</div>
					<h4>About Us</h4>
					<p>Lead Academy is a private training provider committed to delivering high-quality vocational education across the UK. We specialise in Health and Social Care qualifications and are expanding our assessor network to meet growing demand.</p>
				</div>

				<div class="job-section">
					<div class="section-icon">🎯</div>
					<h4>Role Overview</h4>
					<p>We are seeking experienced freelance Adult care and Health and Social Care Assessors to conduct learner observations, assess portfolios, and support candidates working towards Level 2–5 qualifications. This role involves conducting face-to-face visits/observation, assessing learners, and offering professional feedback aligned with awarding body standards.</p>
				</div>

				<div class="job-section">
					<div class="section-icon">🔍</div>
					<h4>Key Responsibilities</h4>
					<ul class="job-list">
						<li>Conduct professional observations of learners in care settings</li>
						<li>Assess evidence against qualification criteria and learning outcomes</li>
						<li>Provide constructive feedback and support learner progress</li>
						<li>Complete assessment documentation to audit-ready standards</li>
						<li>Liaise with internal quality assurance and compliance teams</li>
						<li>Travel to learner locations as required (fuel costs reimbursed)</li>
					</ul>
				</div>

				<div class="job-section">
					<div class="section-icon">✅</div>
					<h4>Requirements</h4>
					<ul class="job-list">
						<li>Recognised Assessor qualification (e.g. CAVA, TAQA, A1)</li>
						<li>Occupational competency in Health and Social Care</li>
						<li>Experience assessing Level 2–5 qualifications</li>
						<li>Strong understanding of awarding body standards and compliance</li>
						<li>Willingness to travel across the UK</li>
						<li>Enhanced DBS (or willingness to obtain one)</li>
					</ul>
				</div>

				<div class="job-section">
					<div class="section-icon">🎓</div>
					<h4>Desirable</h4>
					<ul class="job-list">
						<li>IQA qualification</li>
						<li>Familiarity with e-portfolio systems</li>
						<li>Experience with face-to-face observations</li>
					</ul>
				</div>

					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
							<?php echo do_shortcode( '[contact-form-7 id="e2365e2" title="Career Opportunity as an Assessor"]' ); ?>
						<div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
					</div>

				<!-- <div class="job-section apply-section">
					<div class="section-icon">📩</div>
					<h4>How to Apply</h4>
					<p>Please send your CV and a brief cover letter outlining your availability and regions you can cover to:</p>
					<div class="apply-email">
						<a href="mailto:business@lead-academy.org">📧 business@lead-academy.org</a>
					</div>
				</div> -->
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
	</div>
</div>
<style>
	select {
	-webkit-appearance: none !important;
	height: 100% !important;
	background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc) !important;
	background-position: calc(100% - 19px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em !important;
	background-size: 5px 5px, 5px 5px, 1px 1.5em !important;
	background-repeat: no-repeat !important;
	padding: 8px !important;
}

td.day_unavailable.ga_time_slots span {
	color: #c1c1c1 !important;
}

td.day_available.ga_time_slots {
	border: 1px solid #ffffff !important;
	border-radius: 6px !important;
	background: #da3369 !important;
	color: #fff;
}
/* Start For Adjust Theme Color */
.ga_appointments_calendar_header,
.ga_monthly_schedule_wrapper table thead,
.ga_monthly_schedule_wrapper table thead th{
	background: #af1f47 !important;
}
#gappointments_calendar_slots label.time_selected div{
	background: #af1f47 !important;
	color: #ffffff !important;
}
#gappointments_calendar_slots label.time_slot{
	color: #af1f47 !important;
}
/* End For Adjust Theme Color */

body .gform_legacy_markup_wrapper .ginput_container.ginput_complex .gfgeo-locator-button-wrapper.infield-locator {
	top: 25% !important;
}

.ga_booking_text {
	font-size: 15px;
}

.ga_delete_booking {
	font-size: 15px;
}

select#txt_country {
	width: 100%;
}

label[for="txt_country"], label[for="txt_search"] {
	font-size: 13px;
	color: #333;
	margin-bottom: 20px;
	display: block;
	margin-top: 8px;
}

button#btn_search {
	padding: 7px 33px;
	background-color: #af1f47;
	border: 2px solid #c6093e;
	transition: all 500ms ease;
	border-radius: 0px 5px 5px 0px;
	margin-left: -5px;
}

button#btn_search:hover {
	background-color: #fff;
	color: #af1f47;
	transition: all 500ms ease;
}

li#field_118_56 h2 {
	font-size: 15px;
	margin-top: 35px;
	font-weight: bold;
	margin-bottom: 20px;
}

span#input_118_54_6_container {
	display: none;
}

input {
	border: 1px solid #adadad !important;
}

select {
	border: 1px solid #adadad !important;
}

li#field_118_41 {
	padding-top: 10px;
}

/* Container styling */
ul.gfield_radio {
	list-style: none;
	padding: 0;
	margin: 0;
	display: flex;
	flex-wrap: wrap;
	gap: 10px;
}

/* Radio button list item */
.gfield_radio li {
	position: relative;
	width: 100%;
	max-width: 500px;
}

/* Hide the original radio input */
.gfield_radio input[type="radio"] {
	display: none;
}

/* Custom label styling */
.gfield_radio label {
	padding: 10px !important;
	border: 2px solid #ddd;
	border-radius: 8px;
	background-color: #f9f9f9;
	transition: all 0.3s ease;
	font-size: 14px !important;
	width: 100% !important;
	height: 95%;
}

/* Hover effect */
.gfield_radio label:hover {
	background-color: #f1f1f1;
	border-color: #aaa;
}

/* Selected radio button styling */
.gfield_radio input[type="radio"]:checked + label {
	background-color: #af1f47 !important;
	border-color: #af1f47 !important;
	color: white;
	font-weight: bold;
	box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* Adjust label text */
.gfield_radio label span {
	font-size: 14px;
	display: block;
	color: #666;
	margin-top: 5px;
}

.gfield_radio input[type="radio"]:checked {
	accent-color: #af1f47;
}

input#gform_submit_button_118 {
	background-color: #af1f47 !important;
	padding: 16px 40px !important;
}

section#exam-booking-banner {
	position: relative !important;
	padding: 120px 0 100px !important;
	background: linear-gradient(135deg, #af1f47 0%, #c6093e 55%, #fce9f0 100%) !important;
	overflow: hidden !important;
	z-index: 1 !important;
}

section#exam-booking-banner::before {
	content: "" !important;
	position: absolute !important;
	width: 420px !important;
	height: 420px !important;
	border-radius: 50% !important;
	background: radial-gradient(circle, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 70%) !important;
	top: -140px !important;
	right: -120px !important;
	z-index: -1 !important;
}

section#exam-booking-banner::after {
	content: "" !important;
	position: absolute !important;
	width: 360px !important;
	height: 360px !important;
	border-radius: 50% !important;
	background: radial-gradient(circle, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0) 70%) !important;
	bottom: -160px !important;
	left: -120px !important;
	z-index: -1 !important;
}

section#exam-booking-banner .container {
	position: relative !important;
	z-index: 2 !important;
}

section#exam-booking-banner .row {
	justify-content: center !important;
}

section#exam-booking-banner h1 {
	font-size: 40px !important;
	margin: 0 !important;
	text-align: center !important;
	padding: 40px 20px !important;
	border-radius: 18px !important;
	border: 1px solid rgba(255, 255, 255, 0.55) !important;
	color: #ffffff !important;
	text-transform: uppercase !important;
	letter-spacing: 1.2px !important;
	box-shadow: 0 32px 90px rgba(15, 23, 42, 0.18) !important;
	background: rgba(255, 255, 255, 0.12) !important;
	backdrop-filter: blur(6px) !important;
}

li#field_118_45, li#field_118_60 {
	width: 50%;
	display: inline-block;
}

li#field_118_60 {
	position: absolute;
	margin-top: 210px;
	padding-left: 30px;
}

.page-id-433919 {
	background-color: #f9f9f9;
}
/* 
input {
	background-color: #fff !important;
	padding: 8px 8px !important;
} */

select {
	background-color: #fff !important;
}

.gfield_radio li label {
	background-color: #fff !important;
}

div#no_result_message {
	color: red;
	font-weight: 600;
}

div#gfield_description_118_6 {
	padding-top: 0;
}

.tsfabc {
	padding-bottom: 15px;
}

/* Responsive layout for smaller screens */
@media (max-width: 767px) {
	.gfield_radio li {
	width: 100%;
	}

	li#field_118_45, li#field_118_60 {
	width: 100%;
	display: block;
}

li#field_118_60 {
	position: relative;
	margin-top: 40px;
	padding-left: 0px;
	margin-bottom: 40px !important;
}

section#exam-booking-banner h1 {
	font-size: 20px;
	margin-top: 60px;
	padding: 15px 5px;
}

div#address_selection_container select {
	width: -webkit-fill-available;
}

button#btn_search {
	padding: 11px 33px;
}
}

/* Job Posting Styles */
.job-posting-container {
	position: relative;
	margin: 60px 0;
	padding: 56px 60px;
	border-radius: 24px;
	border: 1px solid rgba(175, 31, 71, 0.14);
	background: linear-gradient(150deg, #ffffff 0%, #fff5f8 100%);
	box-shadow: 0 32px 80px rgba(15, 23, 42, 0.1);
	overflow: hidden;
	isolation: isolate;
}

.job-posting-container::before,
.job-posting-container::after {
	content: "";
	position: absolute;
	border-radius: 50%;
	z-index: -1;
}

.job-posting-container::before {
	top: -140px;
	right: -120px;
	width: 420px;
	height: 420px;
	background: radial-gradient(circle at center, rgba(175, 31, 71, 0.22) 0%, rgba(175, 31, 71, 0) 70%);
}

.job-posting-container::after {
	bottom: -180px;
	left: -120px;
	width: 360px;
	height: 360px;
	background: radial-gradient(circle at center, rgba(198, 9, 62, 0.16) 0%, rgba(198, 9, 62, 0) 70%);
}

.job-header {
	display: flex;
	flex-direction: column;
	align-items: center;
	text-align: center;
	margin-bottom: 48px;
	gap: 16px;
	padding-bottom: 0;
	border-bottom: none;
}

.job-header::after {
	content: "";
	width: 160px;
	height: 4px;
	border-radius: 999px;
	background: linear-gradient(90deg, #af1f47 0%, #c6093e 100%);
}

.job-header h2 {
	color: #af1f47;
	font-size: 40px;
	font-weight: 700;
	margin: 0;
	letter-spacing: 1px;
	text-transform: uppercase;
}

.job-header h3 {
	color: #333333;
	font-size: 26px;
	font-weight: 600;
	margin: 0;
}

.job-details-grid {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	gap: 24px;
	margin-bottom: 48px;
	background: rgba(255, 255, 255, 0.78);
	padding: 32px;
	border-radius: 18px;
	border: 1px solid rgba(175, 31, 71, 0.12);
	box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.35);
	backdrop-filter: blur(8px);
}

.job-detail-item {
	display: flex;
	flex-direction: column;
	gap: 6px;
	padding: 18px 20px;
	border-radius: 14px;
	background: linear-gradient(135deg, rgba(175, 31, 71, 0.04) 0%, rgba(175, 31, 71, 0.1) 100%);
	border: 1px solid rgba(175, 31, 71, 0.1);
	box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
}

.job-detail-item.full-width {
	grid-column: 1 / -1;
}

.detail-label {
	font-weight: 700;
	color: #af1f47;
	font-size: 13px;
	text-transform: uppercase;
	letter-spacing: 0.8px;
}

.detail-value {
	color: #1b1b1b;
	font-size: 17px;
	line-height: 1.6;
}

.job-section {
	position: relative;
	margin-bottom: 32px;
	padding: 32px 36px 32px 112px;
	border-radius: 18px;
	background: rgba(255, 255, 255, 0.92);
	border: 1px solid rgba(175, 31, 71, 0.12);
	box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08);
	transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.job-section:last-of-type {
	margin-bottom: 0;
}

.job-section:hover {
	border-color: rgba(175, 31, 71, 0.45);
	box-shadow: 0 28px 72px rgba(175, 31, 71, 0.16);
	transform: translateY(-6px);
}

.section-icon {
	position: absolute;
	left: 36px;
	top: 36px;
	display: flex;
	align-items: center;
	justify-content: center;
	width: 60px;
	height: 60px;
	border-radius: 18px;
	background: linear-gradient(135deg, rgba(175, 31, 71, 0.18) 0%, rgba(198, 9, 62, 0.12) 100%);
	color: #af1f47;
	font-size: 28px;
	box-shadow: 0 16px 38px rgba(175, 31, 71, 0.22);
}

.job-section h4 {
	color: #af1f47;
	font-size: 24px;
	font-weight: 700;
	margin: 0 0 16px;
}

.job-section p {
	color: #3d3d3d;
	font-size: 17px;
	line-height: 1.85;
	margin: 0;
}

.job-list {
	list-style: none;
	padding: 0;
	margin: 0;
	display: grid;
	gap: 14px;
}

.job-list li {
	position: relative;
	padding-left: 32px;
	color: #3d3d3d;
	font-size: 16px;
	line-height: 1.7;
}

.job-list li:before {
	content: "";
	position: absolute;
	left: 0;
	top: 8px;
	width: 18px;
	height: 18px;
	border-radius: 50%;
	border: 2px solid #af1f47;
	background: rgba(255, 255, 255, 0.8);
}

.job-list li:after {
	content: "";
	position: absolute;
	left: 5px;
	top: 12px;
	width: 8px;
	height: 8px;
	border-left: 2px solid #af1f47;
	border-bottom: 2px solid #af1f47;
	transform: rotate(-45deg);
}

.apply-section {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	text-align: center;
	padding: 52px 48px;
	margin-top: 48px;
	background: linear-gradient(135deg, #af1f47 0%, #c6093e 100%);
	color: #ffffff;
	border: none;
	border-radius: 22px;
	box-shadow: 0 28px 72px rgba(175, 31, 71, 0.28);
}

.apply-section .section-icon {
	position: static;
	margin-bottom: 20px;
	background: rgba(255, 255, 255, 0.22);
	color: #ffffff;
	box-shadow: none;
}

.apply-section h4 {
	color: #ffffff;
	margin-bottom: 12px;
}

.apply-section p {
	color: rgba(255, 255, 255, 0.92);
	font-size: 18px;
	margin-bottom: 20px;
}

.apply-email {
	margin-top: 12px;
}

.apply-email a {
	display: inline-flex;
	align-items: center;
	justify-content: center;
	padding: 14px 44px;
	border-radius: 60px;
	background: #ffffff;
	color: #af1f47;
	font-size: 19px;
	font-weight: 700;
	text-decoration: none;
	border: 2px solid transparent;
	box-shadow: 0 18px 44px rgba(0, 0, 0, 0.25);
	transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.apply-email a:hover {
	transform: translateY(-4px);
	box-shadow: 0 28px 72px rgba(0, 0, 0, 0.35);
	border-color: rgba(175, 31, 71, 0.65);
}

.job-posting-container .wpcf7-form {
	margin-top: 40px !important;
	display: grid !important;
	gap: 24px !important;
	padding: 36px 40px !important;
	border-radius: 18px !important;
	border: 1px solid rgba(175, 31, 71, 0.14) !important;
	background: rgba(255, 255, 255, 0.96) !important;
	box-shadow: 0 24px 60px rgba(15, 23, 42, 0.08) !important;
}

.job-posting-container .wpcf7-form h4 {
	font-size: 26px !important;
	color: #af1f47 !important;
	font-weight: 700 !important;
	text-align: center !important;
	margin: 0 0 12px !important;
	text-transform: uppercase !important;
	letter-spacing: 0.8px !important;
}

.job-posting-container .wpcf7-form-control-wrap.la-cf-7form-filed {
	display: flex !important;
	flex-direction: column !important;
	gap: 10px !important;
	padding: 20px 24px !important;
	border-radius: 16px !important;
	border: 1px solid rgba(175, 31, 71, 0.15) !important;
	background: linear-gradient(135deg, rgba(175, 31, 71, 0.06) 0%, rgba(255, 255, 255, 0.95) 100%) !important;
	box-shadow: 0 18px 38px rgba(15, 23, 42, 0.07) !important;
}

.job-posting-container .wpcf7-form-control-wrap.la-cf-7form-filed label {
	font-size: 15px !important;
	color: #2a2a2a !important;
	font-weight: 600 !important;
	letter-spacing: 0.4px !important;
}

.job-posting-container .wpcf7-form-control-wrap.la-cf-7form-filed .wpcf7-form-control {
	width: 100% !important;
	background: #ffffff !important;
	border: 1px solid rgba(175, 31, 71, 0.4) !important;
	border-radius: 12px !important;
	padding: 14px 18px !important;
	font-size: 15px !important;
	color: #1f1f1f !important;
	transition: border-color 0.25s ease, box-shadow 0.25s ease !important;
}

.job-posting-container .wpcf7-form-control-wrap.la-cf-7form-filed .wpcf7-form-control:focus {
	border-color: #af1f47 !important;
	box-shadow: 0 0 0 4px rgba(175, 31, 71, 0.15) !important;
	outline: none !important;
}

.job-posting-container .wpcf7-form-control-wrap.la-cf-7form-filed small {
	color: rgba(63, 63, 63, 0.8) !important;
	font-size: 13px !important;
}

.job-posting-container .wpcf7-form .wpcf7-submit {
	justify-self: center !important;
	background: linear-gradient(135deg, #af1f47 0%, #c6093e 100%) !important;
	color: #ffffff !important;
	padding: 16px 48px !important;
	border: none !important;
	border-radius: 999px !important;
	font-size: 17px !important;
	font-weight: 700 !important;
	letter-spacing: 0.6px !important;
	box-shadow: 0 22px 48px rgba(175, 31, 71, 0.28) !important;
	transition: transform 0.25s ease, box-shadow 0.25s ease !important;
}

.job-posting-container .wpcf7-form .wpcf7-submit:hover {
	transform: translateY(-3px) !important;
	box-shadow: 0 28px 64px rgba(175, 31, 71, 0.34) !important;
}

.job-posting-container .wpcf7-form .recaptcha-wrapper {
	display: flex !important;
	justify-content: center !important;
	padding-top: 6px !important;
}

.job-posting-container .wpcf7-form .wpcf7-not-valid-tip {
	color: #c6093e !important;
	font-weight: 600 !important;
}

.job-posting-container .wpcf7-form.sent .wpcf7-response-output,
.job-posting-container .wpcf7-form.failed .wpcf7-response-output,
.job-posting-container .wpcf7-form.invalid .wpcf7-response-output {
	border-radius: 12px !important;
	border-width: 2px !important;
	font-size: 15px !important;
	padding: 14px 22px !important;
}

/* Responsive Styles for Job Posting */
@media (max-width: 991px) {
	.job-posting-container {
		padding: 44px 36px;
	}

	.job-details-grid {
		padding: 28px;
	}

	.job-section {
		padding: 28px 32px 28px 96px;
	}

	.section-icon {
		left: 24px;
		top: 28px;
		width: 56px;
		height: 56px;
	}

	.job-posting-container .wpcf7-form {
		padding: 28px 24px !important;
		gap: 20px !important;
	}

	.job-posting-container .wpcf7-form h4 {
		font-size: 22px !important;
	}

	.job-posting-container .wpcf7-form-control-wrap.la-cf-7form-filed {
		padding: 18px 16px !important;
	}

	.job-posting-container .wpcf7-form .wpcf7-submit {
		width: 100% !important;
	}
}

@media (max-width: 767px) {
	.job-posting-container {
		margin: 30px 0;
		padding: 30px 22px;
		border-radius: 18px;
	}

	section#exam-booking-banner {
		padding: 80px 0 70px !important;
	}

	.job-header h2 {
		font-size: 28px;
	}

	.job-header h3 {
		font-size: 18px;
	}

	section#exam-booking-banner h1 {
		font-size: 26px !important;
		padding: 28px 16px !important;
		letter-spacing: 0.6px !important;
	}

	.job-details-grid {
		padding: 20px;
		gap: 16px;
	}

	.job-detail-item {
		padding: 16px;
	}

	.job-section {
		padding: 24px;
		margin-bottom: 24px;
	}

	.job-section:not(.apply-section) {
		padding-left: 24px;
	}

	.job-section:not(.apply-section) .section-icon {
		position: static;
		margin-bottom: 16px;
	}

	.section-icon {
		width: 52px;
		height: 52px;
		border-radius: 50%;
	}

	.job-list li {
		padding-left: 28px;
	}

	.job-list li:before {
		top: 6px;
	}

	.job-list li:after {
		top: 9px;
	}

	.apply-section {
		padding: 36px 24px;
		margin-top: 32px;
	}

	.apply-email a {
		font-size: 17px;
		padding: 12px 30px;
	}

	.job-posting-container .wpcf7-form {
		margin-top: 28px !important;
		padding: 24px 20px !important;
		gap: 18px !important;
	}

	.job-posting-container .wpcf7-form h4 {
		font-size: 20px !important;
		letter-spacing: 0.5px !important;
	}

	.job-posting-container .wpcf7-form-control-wrap.la-cf-7form-filed {
		padding: 16px 14px !important;
	}

	.job-posting-container .wpcf7-form .wpcf7-submit {
		padding: 14px 28px !important;
		font-size: 16px !important;
	}
}

/* -Tab Device- */
@media only screen and (min-width: 768px) and (max-width: 1024px) {
	li#field_118_45 {
	width: 60%;
	display: inline-block;
}

	li#field_118_60 {
	width: 40%;
	display: inline-block;
	margin-top: 120px;
}
}

</style>

<?php
get_footer();
?>
