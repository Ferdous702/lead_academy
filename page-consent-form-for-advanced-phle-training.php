<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();

if (is_user_logged_in()) {
    $current_user = wp_get_current_user();
    $allowed_roles = ['administrator', 'editor', 'shop_manager'];
    $listed_subscribers = [175,176,177,194,206];
    $title = "Advanced Competency Practical Training Consent Form";

    if (array_intersect($allowed_roles, (array) $current_user->roles) || 
        (in_array('subscriber', (array) $current_user->roles) && in_array($current_user->ID, $listed_subscribers))) {
            if(isset($_POST['email'])){
                $to = sanitize_email($_POST['email']);
                $subject = 'Urgent: Advanced Phlebotomy Training Consent Form - Must Sign';
                $headers = ['Content-Type: text/html; charset=UTF-8'];
                $message = '
                <p>Dear Learner,</p>
                <p>Good day! Hope this email finds you well. You are required to sign the advanced phlebotomy training consent form. It is mandatory to sign the consent soon.</p>
                <p>Please <a href="https://lead-academy.org/consent-form-advanced-phlebotomy/">click here</a> and sign the consent digitally.</p>
                <p>If you require any further information, don\'t hesitate to get in touch with us at <a href="mailto:info@lead-academy.org">info@lead-academy.org</a> or <a href="tel:0203 880 8347">0203 880 8347</a>.</p>
                <p>Kind regards,<br>Lead Academy Support Team</p>';
                wp_mail($to, $subject, $message, $headers);
                $title = "Email Sent to $to";
            }
    }
}else{
    // Redirect to the homepage
    wp_redirect(home_url());
    exit();
}
?>
<style>
    .container h1{
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
    #email{
        width: 100%;
    }
    .holder{
        margin: 6px 0 0;
        padding: 16px 0;
    }
    div.holder > input[type=submit]{
        background-color: #af1f47 !important;
        padding: 12px 40px !important;
        border: 2px solid #af1f47 !important;
    }
    div.holder > label{
        font-weight: bold;
    }
    @media (max-width: 767px) {
        section#exam-booking-banner h1 {
            font-size: 24px;
        }
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <h1><?=$title?></h1>
            <form method="post">
                <div class="holder">
                    <label for="email">Give Email:<span style="color:red" > *</span>(Required)</label>
                </div>
                <div>
                    <input name="email" id="email" type="email" />
                </div>
                <div class="holder">
                    <input type="submit" value="Submit" />
                </div>
            </form>
            <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        </div>
    </div>
</div>

<?php
get_footer();
?>