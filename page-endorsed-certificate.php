<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<style>
    /* Style the input field where auto-suggest is applied */
    #input_33_62 {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    /* Style the suggestion dropdown */
    .ui-autocomplete {
        max-height: 200px;
        overflow-y: auto;
        overflow-x: hidden;
        border: 1px solid #ddd;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        font-size: 16px;
        z-index: 1000;
    }

    /* Style individual suggestion items */
    .ui-autocomplete .ui-menu-item {
        padding: 10px;
        border-bottom: 1px solid #eee;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    /* Hover effect for suggestion items */
    .ui-autocomplete .ui-menu-item:hover {
        background-color: #f1f1f1;
    }

    /* Focus effect on selected suggestion */
    .ui-autocomplete .ui-state-focus {
        background-color: #e6e6e6;
        color: #333;
    }

    /* Optional: Style the form field wrapper */
    .gfield {
        margin-bottom: 20px;
    }

    /* Optional: Style the form label */
    label[for="input_33_62"] {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 5px;
        display: block;
    }

    ul#ui-id-1 {
        width: max-content;
    }


    select#txt_country {
        width: 100%;
    }

    label[for="txt_country"],
    label[for="txt_search"] {
        font-size: 13px;
        color: #333;
        margin-bottom: 20px;
        display: block;
        margin-top: 8px;
    }

    li#field_6_106 {
        margin: 0 !important;
        width: 100%;
    }

    button#btn_search {
        padding: 8px 33px;
        background-color: #af1f47;
        border: 1px solid #c6093e;
        transition: all 500ms ease;
        border-radius: 0px 5px 5px 0px;
        margin-left: -5px;
    }

    span#input_33_44_6_container {
        display: none;
    }

    input#txt_search {
        width: 48%;
    }

    fieldset {
        padding-top: 25px !important;
    }

    span#input_6_44_6_container {
        display: none;
    }

    label#input_6_110_1_label {
        display: inline;
    }

    .form-text {
    font-weight: 600;
    }

    /* -Mobile Device- */
    @media (max-width: 767px) {
        button#btn_search {
            padding: 11px 20px;
            background-color: #af1f47;
            border: 1px solid #c6093e;
            transition: all 500ms ease;
            border-radius: 0px 5px 5px 0px;
            margin-left: -5px;
        }

        ul#ui-id-1 {
            width: fit-content !important;
            margin-right: 25px;
        }
    }
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" />
<section id="order-certificate-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="order-certificate-banner-text border">
                    <h1>Obtain Your Certificate of Achievement
                        As Proof of Your New Skills</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="order-certificate-info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="order-certificate-info-box">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-4 col-xl-4"></div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <div class="certificate-info-title">
                                <h2>Certificate</h2>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-4 col-xl-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
                        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                            <div class="order-certificate-info-box-1">
                                <h2>CPD UK and IPHM Accredited Certificate</h2>
                                <div class="icon-parent">
                                    <div class="icons">
                                        <i aria-hidden="true" class="fas fa-award"></i>
                                    </div>
                                </div>
                                <p>CPD is globally recognised by employers, professional organisations and academic intuitions, thus a certificate from CPD Certification Service creates value towards your professional goal and achievement. CPD certified certificates are accepted by thousands of professional bodies and government regulators here in the UK and around the world.<br><br>
                                    On successful completion of Lead Academy courses, you will be eligible to order your CPD and IPHM accredited certificate of achievement as proof of your new skill. You can also share this certificate with prospective employers and your professional network which will help you to drive a successful career in your chosen industry. You/your employer can verify your certificate through our website.
                                </p>
                                <img src="https://lead-academy.org/wp-content/uploads/0223/12/1-2.webp" alt="Lead-Academy Certificate of Achievement">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
                    </div>
                    <div class="order-certificate-info-box-2">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <h2>Quality Licence Scheme Endorsed Certificate</h2>
                                <div class="icon-parent">
                                    <div class="icons">
                                        <i aria-hidden="true" class="fas fa-award"></i>
                                    </div>
                                </div>
                                <p>The Quality Licence Scheme is a brand of the Skills and Education Group, a leading national awarding organisation for providing high-quality vocational qualifications across a wide range of industries. It will give you a competitive advantage in your career, making you stand out from all other applicants and employees.</p>
                                <img src="https://lead-academy.org/wp-content/uploads/0223/12/ABC-Awards-Endorsed-Certificate-frame.webp" alt="Quality Licence Scheme Endorsed Certificate">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <h2>Transcript From Lead Academy</h2>
                                <div class="icon-parent">
                                    <div class="icons">
                                        <i aria-hidden="true" class="fas fa-award"></i>
                                    </div>
                                </div>
                                <p>On successful completion of your course, you can order a transcript from Lead Academy as proof of completing your training and attaining new skill. A transcript is evidence of completing your course modules. It has a detailed record of all the modules that you have studied throughout the study period.</p>
                                <img src="https://lead-academy.org/wp-content/uploads/0223/12/Transcript-1187x1536-1.webp" alt="Transcript From Lead Academy">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
                        <div class="col-12 col-sm-12 col-md-10 col-lg-8 col-xl-8">
                            <div class="order-certificate-info-box-1 order-certificate-info-box-3">
                                <h2>Certificate of Completion</h2>
                                <div class="icon-parent">
                                    <div class="icons">
                                        <i aria-hidden="true" class="fas fa-award"></i>
                                    </div>
                                </div>
                                <p>On completion of the course, you will be eligible to obtain your free PDF certificate of course completion. However, it is recommended that you should have a CPD & IPHM accredited certificate or a Quality License Scheme endorsed certificate and transcript that is valued by employers in the UK and globally.</p>
                                <img src="https://lead-academy.org/wp-content/uploads/0223/12/MicrosoftTeams-image-90-1.webp" alt="Certificate of Completion">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-1 col-lg-2 col-xl-2"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>
<section id="certificate-student-id-card">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="certificate-student-id-card-1">
                    <h2>Student ID Card</h2>
                    <div class="icon-parent">
                        <div class="icons">
                            <i aria-hidden="true" class="fas fa-award"></i>
                        </div>
                    </div>
                    <div class="certificate-student-id-card-box">
                        <h3>Start saving today. Obtain your student ID card now and enjoy the benefits of getting student discounts.</h3>
                        <h3>Benefits you will gain:</h3>
                        <ul>
                            <li><i class="fas fa-check" aria-hidden="true"></i> 1-Year validity of the student ID card</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Proof of student enrolment at Lead Academy</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Benefit of getting student discounts</li>
                            <li><i class="fas fa-check" aria-hidden="true"></i> Save money on spending</li>
                        </ul>
                    </div>
                    <img src="https://lead-academy.org/wp-content/uploads/2023/02/ID-card-1-1.webp" alt="Student ID Card">
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
        </div>
    </div>
</section>
<style>
    .order-certificate-form .order-certificate-custom-field .col-lg-12 {
        margin: 30px 0px;
        box-shadow: 0 4px 8px rgb(0 0 0 / 5%);
        padding: 20px;
        background-color: #fff;
        border-left: 4px solid #b91948;
        margin: 15px 0px;
    }

    .endorsed-certificate {
        margin: 0 !important;
    }

    .order-certificate-form {
        background: linear-gradient(180deg, #fff1f5 0%, #fff 100%);
        border: 5px solid #ffffff;
    }

    .order-certificate-form h3 {
        display: none;
    }

    .form-check-input:checked {
        background-color: #af1f47 !important;
        border-color: #af1f47 !important;
        box-shadow: 0 4px 8px rgb(0 0 0 / 28%) !important;
    }

    .form-check-input[type=radio]:checked+label {
        font-weight: 600;
    }

    label.form-check-label {
        cursor: pointer;
    }

    .order-certificate-form .btn {
        background-color: #af1f47;
        border: 2px solid #af1f47;
        padding: 8px 50px;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 35px;
        box-shadow: 0 4px 0px #b9194836 !important;
        color: rgb(255, 255, 255);
        transition: all 500ms ease;
        margin-top: 40px;
    }

    .order-certificate-form .btn:hover {
        background-color: #ffffff;
        border: 2px solid #af1f47;
        padding: 8px 50px;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 35px;
        box-shadow: 0 4px 0px #b91948 !important;
        color: #af1f47;
        transition: all 500ms ease;
    }

    .order-certificate-form label.form-label {
        font-size: 20px;
        font-weight: 600;
        padding: 0;
        border-bottom: 1px solid #e3e3e3;
        padding-bottom: 10px;
        margin-bottom: 15px;
        width: 100%;
    }

    .order-certificate-form .form-check {
        margin: 0px 0px 20px 0px;
        font-size: 16px;
    }

    .order-certificate-form label.form-check-label {
        padding: 0;
    }

    .endorsed-certificate-transcript .form-text {
        font-size: 14px;
        padding: 10px 8px;
        box-shadow: 0 4px 8px rgb(0 0 0 / 5%);
        border-bottom: 2px solid #af1f47;
        margin-top: 30px;
        color: #303030;
        background-color: #f5f5f5;
        width: fit-content;
    }

    /* Styles for mobile devices (widths up to 767px) */
    @media only screen and (max-width: 767px) {
        .order-certificate-form label.form-label {
            font-size: 18px;
        }

    }
</style>
<section id="order-certificate">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="order-certificate-title">
                            <h2>Order Certificate</h2>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4"></div>
                </div>
                <div class="order-certificate-form">
                    <?php echo do_shortcode('[bb_form id=3]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="la-cretificate-of-achivment">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/Cretificate-Lead-Academy_update-1.webp" alt="Cretificate Lead Academy">
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 align-self-center">
                <p>The course was super helpful in getting new skills. I am glad I did the course as it helped me gain the certificate of achievement and the literature on where to find information related to Leadership and Management.</p>
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/LA-ABC-awards-certificate-template.webp" alt="Cretificate Lead Academy">
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 align-self-center">
                <p>The Data Analysis course is really informative and well presented. I am feeling happy after enrolling in this course and at the end with the endorsed certificate from the Quality Licence Scheme.</p>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        var courseNames = [];

        // Fetch course names using AJAX
        $.get(ajaxurl, {
            action: 'get_course_names'
        }, function(response) {
            console.log(response); // Debug to see if course names are fetched
            courseNames = response;

            // Apply jQuery UI Autocomplete to both fields
            $('#textarea-1737107925247, #textarea-1737463965933').autocomplete({
                source: courseNames,
                minLength: 2,
                select: function(event, ui) {
                    this.value = ui.item.value;
                    return false;
                }
            });
        });
    });
</script>
<?php
get_footer();
?>