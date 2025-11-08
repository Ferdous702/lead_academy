<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<style>
    section#retake-final-assessment-banner {
    background: url(https://lead-academy.org/wp-content/uploads/0223/12/Phlebotomy-Training-Bg-Image.webp);
    padding: 70px 0px;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
}

section#retake-final-assessment-banner h1 {
    color: #303030;
    font-family: "Sen", Sans-serif;
    font-size: 48px;
    font-weight: 600;
    text-align: center;
    color: #fff;
}

section#retake-final-assessment-form form#gform_86 {
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

input#gform_submit_button_86 {
    background-color: #AF1F47 !important;
}

div#field_86_10 {
    font-size: 18px;
}

input#clear {
    padding: 10px 40px;
    background-color: #000;
}

input#gfgeo-locator-button-86_13 {
    background-color: #000;
}

/** For mobile devices **/
@media (max-width: 767px) {
    section#retake-final-assessment-banner h1 {
    font-size: 30px;
}

section#retake-final-assessment-banner {
    padding: 30px 0px;
}

canvas#gfds_signature_7 {
    width: 100%;
}
}
</style>
<section id="retake-final-assessment-banner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1>Phlebotomy Training Declaration</h1>
            </div>
        </div>
    </div>
</section>
<section id="retake-final-assessment-form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                <?php echo do_shortcode('[contact-form-7 id="f10073f" title="Phlebotomy Training Declaration"]'); ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2"></div>
        </div>
    </div>
</section>
<script>
document.getElementById('input_86_12').addEventListener('focus', function(event) {
    event.target.blur(); // Immediately blur the input field to prevent focus
});

document.getElementById('input_86_12').addEventListener('keydown', function(event) {
    event.preventDefault(); // Prevent any key presses
});
</script>
<?php
get_footer();
?>