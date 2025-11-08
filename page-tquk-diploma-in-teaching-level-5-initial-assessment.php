<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();

?>
<style>

input {
    border: 1px solid #adadad !important;
}

input#clear {
    background-color: #af1f47 !important;
    padding: 8px 30px !important;
    border-radius: 4px;
    border: 2px solid #af1f47 !important;
}

input#clear:hover {
    background-color:rgb(255, 255, 255) !important;
    padding: 8px 30px !important;
    border-radius: 4px;
    color: #af1f47 ;
    border: 2px solid #af1f47 !important;
}

input#gform_submit_button_128 {
    background-color: #af1f47 !important;
    padding: 12px 40px !important;
    border: 2px solid #af1f47 !important;
}

input#gform_submit_button_128:hover {
    background-color:rgb(255, 255, 255) !important;
    padding: 12px 40px !important;
    color: #af1f47 ;
    border: 2px solid #af1f47 !important;
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
    margin-bottom: 0;
}

.page-id-445962{
    background-color: #f9f9f9;
}

input {
    background-color: #fff !important;
    padding: 8px 8px !important;
}

select {
    background-color: #fff !important;
}

div#field_128_1 h2 {
    font-size: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #ededed;
    margin: 40px 0px 15px 0px;
}

div#field_128_1 h3 {
    font-size: 22px;
    padding-bottom: 12px;
    border-bottom: 1px solid #b3b3b3;
    margin: 25px 0px 15px 0px;
    width: fit-content;
    font-weight: 500;
}

div#field_128_1 ul {
    margin: 0px 0px 30px 0px;
    padding: 0px 0px 0px 40px;
    list-style: auto;
}

div#field_128_1 p {
    font-size: 18px;
    line-height: 35px;
}

div#field_128_1 ul li {
    font-size: 18px;
    line-height: 40px;
}

.gform_wrapper.gravity-theme .gfield.gfield--width-full {
    background-color: #efefef;
    padding: 20px;
    border: 1px solid #d7d7d7;
    border-radius: 5px;
}

.gchoice {
    padding: 6px 15px;
    background-color: #ffffff;
    margin: 10px 0;
    color: #000000;
    border: 1px solid #d7d7d7;
    border-radius: 6px;
}

.gform-body.gform_body {
    background-color: #ffffff;
    border: 1px solid #dcdcdc;
    padding: 20px;
    border-radius: 10px;
}

fieldset#field_128_30 {
    background-color: #efefef;
    padding: 20px;
    border: 1px solid #d7d7d7;
    border-radius: 5px;
}

/* Responsive layout for smaller screens */
@media (max-width: 767px) {
    section#exam-booking-banner h1 {
    font-size: 24px;
}

div#field_128_1 h2 {
    font-size: 22px;
}

div#field_128_1 p {
    font-size: 16px;
    line-height: 30px;
}

div#field_128_1 h3 {
    font-size: 18px;
}

div#field_128_1 ul li {
    font-size: 16px;
    line-height: 30px;
    margin: 15px 0px;
}

div#field_128_1 ul {
    padding: 0px 0px 0px 30px;
}

}

/* -Tab Device- */
@media only screen and (min-width: 768px) and (max-width: 1024px) {

}

</style>

<section id="exam-booking-banner">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <h1>TQUK Diploma in Teaching Level 5 - Initial Assessment</h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <?php echo do_shortcode('[gravityform id="128" title="false"]'); ?>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
<?php
get_footer();
?>