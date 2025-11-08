<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
    
<style>
    #course-evaluation-banner {
        background: linear-gradient(320deg, #b91948de 0%, #303131f2 100%), url(https://lead-academy.org/wp-content/uploads/0223/12/customer-review-satisfaction-feedback-survey-concept.webp);
        padding: 80px 0px;
        background-size: cover;
    }

    #course-evaluation-banner h1 {
        color: #FFFFFF;
        font-family: "Sen", Sans-serif;
        font-size: 50px;
        font-weight: bold;
        text-align: center;
    }

    .course-evaluation-form {
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 15px 30px 15px 30px;
    }

    section#course-evaluation-form-part {
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

    input#gform_submit_button_49 {
        background-color: #B91948;
    }

    /** For mobile devices **/
    @media (max-width: 767px) {
        #course-evaluation-banner h1 {
            font-size: 30px;
            margin-bottom: 0;
        }

        #course-evaluation-banner {
            padding: 50px 0px;
        }

        section#course-evaluation-form-part {
            padding: 30px 0px;
        }

        .course-evaluation-form {
            padding: 20px;
        }
    }

    /** For tablet devices **/
    @media (min-width: 768px) and (max-width: 1023px) {
        #course-evaluation-banner h1 {
            font-size: 30px;
        }

        #course-evaluation-banner {
            padding: 60px 0px;
        }
    }
</style>
    <section id="course-evaluation-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Course Evaluation</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="course-evaluation-form-part">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="course-evaluation-form">
                        <?php echo do_shortcode('[contact-form-7 id="5c66224" title="Course Evaluation Survey"]'); ?>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>