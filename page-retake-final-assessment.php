<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<style>
    section#retake-final-assessment-banner {
    background: linear-gradient(320deg, #ffe3eb91 0%, #ffe3eb91 100%), url(https://lead-academy.org/wp-content/uploads/0223/12/pattern.webp);
    padding: 50px 0px;
    background-size: contain;
    background-attachment: fixed;
}

section#retake-final-assessment-banner h1 {
    color: #303030;
    font-family: "Sen", Sans-serif;
    font-size: 48px;
    font-weight: 600;
    text-align: center;
}

section#retake-final-assessment-form form#gform_96 {
    background-color: #fff;
    box-shadow: 0px 0px 7px 0px #C7C1C1;
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    margin: 0px 0px 40px 0px;
    padding: 30px 30px 30px 30px;
}

section#retake-final-assessment-form {
    padding: 50px 0px;
}

select {
    -webkit-appearance: none !important;
    height: 100% !important;
    background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc) !important;
    background-position: calc(100% - 19px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em !important;
    background-size: 5px 5px, 5px 5px, 1px 1.5em !important;
    background-repeat: no-repeat !important;
    padding: 8px !important;
}

input#gform_submit_button_96 {
    background-color: #AF1F47 !important;
}

/** For mobile devices **/
@media (max-width: 767px) {
    section#retake-final-assessment-banner h1 {
    font-size: 30px;
}

section#retake-final-assessment-banner {
    padding: 30px 0px;
}
}
</style>

<style>
    /* --- Banner Styles (Unchanged) --- */
    section#retake-final-assessment-banner {
        background: linear-gradient(320deg, #ffe3eb91 0%, #ffe3eb91 100%), url(https://lead-academy.org/wp-content/uploads/2022/12/pattern.webp);
        padding: 50px 0px;
        background-size: contain;
        background-attachment: fixed;
    }

    section#retake-final-assessment-banner h1 {
        color: #303030;
        font-family: "Sen", Sans-serif;
        font-size: 48px;
        font-weight: 600;
        text-align: center;
    }

    /* --- Section Padding (Unchanged) --- */
    section#retake-final-assessment-form {
        padding: 50px 0px;
    }

    /* --- NEW Modern & Professional Form Design --- */

    /* Main Form Container */
    .retake-final-assessment form {
        background-color: #ffffff;
        padding: 40px; /* Increased padding for better spacing */
        border-radius: 12px; /* Softer, modern corners */
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08); /* A more subtle, diffused shadow */
        border: 1px solid #e9ecef; /* A light border to define the form */
        margin-top: 20px;
    }

    /* Form Title */
    .retake-final-assessment .title {
        font-family: "Sen", sans-serif;
        font-weight: 700;
        color: #303030;
        margin-bottom: 30px; /* More space below the title */
        font-size: 28px;
    }

    /* Field Labels */
    .retake-final-assessment .form-label {
        font-weight: 600;
        color: #495057; /* A softer black for text */
        margin-bottom: 8px; /* Consistent spacing */
        font-size: 15px;
    }
    
    .retake-final-assessment .form-label .text-danger {
        color: #AF1F47 !important; /* Match the brand's red */
    }

    /* General Input, Textarea, and Select Styling */
    .retake-final-assessment .form-control {
        border: 1px solid #ced4da;
        border-radius: 8px; /* Consistent rounded corners */
        padding: 12px 16px; /* Taller, more spacious fields */
        font-size: 16px;
        color: #333;
        background-color: #f8f9fa; /* Slight off-white background */
        transition: border-color 0.2s ease, box-shadow 0.2s ease; /* Smooth transition for focus */
    }

    .retake-final-assessment .form-control::placeholder {
        color: #999;
    }

    /* Enhanced Focus State for better UX */
    .retake-final-assessment .form-control:focus {
        border-color: #AF1F47; /* Use brand color for focus */
        background-color: #fff;
        box-shadow: 0 0 0 4px rgba(175, 31, 71, 0.1); /* Soft glow effect */
        outline: none; /* Remove default browser outline */
    }

    /* Custom Select Arrow for a Modern Look */
    .retake-final-assessment select.form-control {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        /* A clean, modern SVG arrow */
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right 16px center;
        background-size: 1em;
        padding-right: 40px; /* Make space for the arrow */
    }

    /* Price Display Styling */
    .retake-final-assessment .buybuilder-field label {
        font-size: 1.1rem;
    }
    
    .retake-final-assessment .buybuilder-field span[x-text="field.price"] {
        font-weight: 700;
        font-size: 1.5rem;
        color: #AF1F47;
    }

    /* Modern Submit Button */
    .retake-final-assessment .bbf_form_submit {
        background-color: #AF1F47 !important;
        border: none;
        color: #ffffff;
        padding: 14px 20px;
        font-size: 16px;
        font-family: "Sen", sans-serif;
        font-weight: 700;
        border-radius: 8px;
        width: 100%; /* Makes the button a strong call-to-action */
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
        margin-top: 20px; /* Space above the button */
        transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
    }

    .retake-final-assessment .bbf_form_submit:hover {
        background-color: #8c1938 !important; /* A darker shade on hover */
        transform: translateY(-3px); /* A subtle "lift" effect */
        box-shadow: 0 4px 15px rgba(175, 31, 71, 0.25);
    }
    
    /* --- Responsive Adjustments --- */
    @media (max-width: 767px) {
        section#retake-final-assessment-banner h1 {
            font-size: 30px;
        }
        section#retake-final-assessment-banner {
            padding: 30px 0px;
        }
        .retake-final-assessment form {
            padding: 25px; /* Reduce padding on smaller screens */
        }
        .retake-final-assessment .title {
            font-size: 24px;
        }
    }
</style>
<section id="retake-final-assessment-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1>Retake Final Assessment</h1>
            </div>
        </div>
    </div>
</section>
<section id="retake-final-assessment-form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <?php echo do_shortcode('[bb_form id=12]'); ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
        </div>
    </div>
</section>
<?php
get_footer();
?>