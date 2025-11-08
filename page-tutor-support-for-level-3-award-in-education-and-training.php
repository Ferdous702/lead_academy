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
            <h1><?=get_the_title();?></h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <?php echo do_shortcode('[gravityform id="118" title="false"]'); ?>
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

input {
    background-color: #fff !important;
    padding: 8px 8px !important;
}

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
