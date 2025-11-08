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
            <h1>Student ID Card Order Details
            </h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <?php echo do_shortcode('[contact-form-7 id="4fa2634" title="Student ID Card Order Details"]'); ?>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
<style>

input {
    border: 1px solid #adadad !important;
}

select {
    border: 1px solid #adadad !important;
}


input#gform_submit_button_109 {
    background-color: #af1f47 !important;
    padding: 16px 40px !important;
}

section#exam-booking-banner h1 {
    font-size: 30px;
    margin-top: 60px;
    text-align: center;
    background-color: #af1f47;
    padding: 40px 10px;
    border: 5px solid #ffffff;
    border-radius: 10px;
    color: #ffff;
}

.page-id-421223 {
    background-color: #f9f9f9;
}

input {
    background-color: #fff !important;
    padding: 8px 8px !important;
}

select {
    background-color: #fff !important;
}

div#no_result_message {
    color: red;
    font-weight: 600;
}

/* Responsive layout for smaller screens */
@media (max-width: 767px) {

section#exam-booking-banner h1 {
    font-size: 20px;
    margin-top: 60px;
    padding: 15px 5px;
}
}


</style>

<?php
get_footer();
?>