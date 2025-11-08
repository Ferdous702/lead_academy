<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
?>
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

input {
    border: 1px solid #adadad !important;
}

select {
    border: 1px solid #adadad !important;
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

input#gform_submit_button_115 {
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

.page-id-432282 {
    background-color: #f9f9f9;
}

input {
    background-color: #fff !important;
    padding: 8px 8px !important;
}

select {
    background-color: #fff !important;
}

textarea#input_115_8 {
    background-color: #fff;
    border: 1px solid #adadad;
}

legend.gfield_label.gform-field-label {
    padding: 25px 0px 0px 0px !important;
    margin: 0px !important;
    line-height: 0;
}

.gform_wrapper.gravity-theme .gfield_label {
    padding: 30px 0px 10px 0px !important;
    margin: 0px !important;
    line-height: 0;
}

.gform_wrapper.gravity-theme .field_sublabel_below .ginput_complex {
    margin-top: 5px;
}

.gform_wrapper.gravity-theme .gfield input.large {
    margin-top: 5px;
}

.ginput_container.ginput_container_select {
    margin-top: 6px;
}

.ginput_container.ginput_container_textarea {
    margin-top: 6px;
}

.gform_wrapper.gravity-theme .ginput_complex .ginput_container_date select {
    min-width: 100px !important;
}

.gfield_description {
    padding-bottom: 5px !important;
}

div#field_115_3, fieldset#field_115_5, div#field_115_6, div#field_115_7, div#field_115_8 {
    background-color: #e7e7e7;
    padding: 15px 15px;
    border-radius: 3px;
    border: 1px solid #bdbdbd;
}

input#gform_submit_button_115 {
    background-color: #af1f47 !important;
    padding: 16px 40px !important;
    border-radius: 6px;
    margin-bottom: 40px;
}

@media (max-width: 767px) {
    #field_115_3 label.gfield_label.gform-field-label {
        line-height: 18px !important;
    }

    .gform_wrapper.gravity-theme .gfield_label {
        padding: 15px 0px 10px 0px !important;
        margin: 0px !important;
        line-height: 0;
    }

    section#exam-booking-banner h1 {
        font-size: 22px;
        margin-top: 60px;
        text-align: center;
        background-color: #af1f47;
        padding: 25px 10px;
        border: 5px solid #ffffff;
        border-radius: 10px;
        color: #ffff;
    }

    input#gform_submit_button_115 {
        background-color: #af1f47 !important;
        padding: 8px 40px !important;
        border-radius: 6px;
        margin-bottom: 40px;
    }
}

</style>
<section id="exam-booking-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                <h1>Tutor Feedback Form</h1>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <?php echo do_shortcode('[contact-form-7 id="1348183" title="Tutor Feedback Form"]'); ?>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>

<?php
get_footer();
?>