<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
<style>
        section#monthly-freebies-banner {
            background-color: #B91948;
        }
        section#monthly-freebies-banner img {
            width: 100%;
        }
        #monthly-freebies-part-1 p, #monthly-freebies-part-2 p, #monthly-freebies p {
            color: #000000;
            font-family: "Sen", Sans-serif;
            font-size: 20px;
            font-weight: 500;
            line-height: 35px;
        }
        #monthly-freebies-part-1, #monthly-freebies {
            padding: 50px 350px;
            background-color: #F8F8F8;
        }

        #monthly-freebies-part-2 {
            padding: 50px 350px;
            background-color: #B9194814;
        }
        .monthly-freebies-btn a {
            font-family: "Sen", Sans-serif;
            font-size: 18px;
            font-weight: 500;
            fill: #B91948;
            color: #B91948;
            background-color: #B9194800;
            border-style: solid;
            border-width: 2px 2px 2px 2px;
            border-color: #B91948;
            border-radius: 0px 0px 0px 0px;
            padding: 10px 30px 10px 30px;
            text-align: center;
            display: inline-block;
            text-decoration: none;
            margin-top: 30px;
            transition: all 300ms ease;
        }
        .monthly-freebies-btn a:hover, .monthly-freebies-btn a:focus {
            color: #FFFFFF;
            background-color: #B91948;
            transition: all 300ms ease;
        }
        .monthly-freebies-btn {
            text-align: center;
        }
        section#monthly-freebies-break {
            background-color: #C0234E;
            padding: 35px 0px;
        }
        section#monthly-freebies-break h2 {
            color: #FFFFFF;
            font-family: "Sen", Sans-serif;
            font-size: 30px;
            font-weight: 600;
            line-height: 0px;
            text-align: center;
            margin-bottom: 0px;
        }
        .monthly-freebies-icon {
            background-color: #F8F8F8;
            border-style: solid;
            border-width: 2px 2px 2px 2px;
            border-color: #C0234E;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 0px 10px 0px 10px;
            text-align: center;
            margin-top: 35px;
            padding: 15px 0px 5px 0px;
        }
        .monthly-freebies-icon i {
            font-size: 40px;
            color: #c0234e;
        }
        .monthly-freebies-icon h2 a {
            font-size: 14px;
            font-weight: 500;
            font-family: "Poppins", Sans-serif;
            text-decoration: none;
            color: #000;
        }
        .monthly-freebies-icon:hover {
            background-color: #faedf1;
        }
        .monthly-freebies-icon h2 {
            margin-bottom: 0px;
        }
        .monthly-freebies-part-from {
            padding: 30px 40px 10px 40px;
            box-shadow: 0px 20px 30px 0px rgba(0, 0, 0, 0.2);
            margin-top: 40px;
        }
        input#gform_submit_button_25 {
            display: inline-block;
            width: 165px;
            background-color: #C0234E;
            border-radius: 0px 0px 0px 0px;
            padding: 10px 0px 10px 0px;
            font-family: "Poppins", Sans-serif;
            font-size: 16px;
            font-weight: 500;
        }

        @media (max-width: 767px) {
            #monthly-freebies-part-1, #monthly-freebies {
            padding: 50px 0px;
            background-color: #F8F8F8;
            }

            #monthly-freebies-part-2 {
                padding: 50px 0px;
                background-color: #B9194814;
            }

            #monthly-freebies-part-1 p, #monthly-freebies-part-2 p, #monthly-freebies p {
                color: #000000;
                font-family: "Sen", Sans-serif;
                font-size: 18px;
                font-weight: 500;
                line-height: 35px;
            }

            section#monthly-freebies-break h2 {
                color: #FFFFFF;
                font-family: "Sen", Sans-serif;
                font-size: 20px;
                font-weight: 600;
                line-height: 30px;
                text-align: center;
                margin-bottom: 0px;
            }

            .monthly-freebies-btn a {
                font-family: "Sen", Sans-serif;
                font-size: 16px;
                font-weight: 500;
                fill: #B91948;
                color: #B91948;
                background-color: #B9194800;
                border-style: solid;
                border-width: 2px 2px 2px 2px;
                border-color: #B91948;
                border-radius: 0px 0px 0px 0px;
                padding: 10px 20px 10px 20px;
                text-align: center;
                display: inline-block;
                text-decoration: none;
                margin-top: 30px;
                transition: all 300ms ease;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            #monthly-freebies-part-1, #monthly-freebies {
            padding: 50px 0px;
            background-color: #F8F8F8;
            }

            #monthly-freebies-part-2 {
                padding: 50px 0px;
                background-color: #B9194814;
            }

            section#monthly-freebies-break h2 {
                color: #FFFFFF;
                font-family: "Sen", Sans-serif;
                font-size: 24px;
                font-weight: 600;
                line-height: 35px;
                text-align: center;
                margin-bottom: 0px;
            }
        }
    </style>
    <section id="monthly-freebies-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="https://lead-academy.org/wp-content/uploads/2022/10/monthly-freebees-image-min-scaled-1.jpg" alt="Monthly freebees banner">
                </div>
            </div>
        </div>
    </section>
    <section id="monthly-freebies-part-1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>We’re about to bring you the news that is sure to make your day!</p>
                    <p>Do you know about our monthly freebies programme? Let’s give you a quick rundown of it just in case you’re not aware.</p>
                    <p>We have a superb community here at Lead Academy. Our learners are splendid, and we have had nothing but good experiences with them. So we decided it’s time to give something back to the community.</p>
                    <p>That’s how the Monthly Freebies programme was born.</p>
                    <p>Essentially, every month we gift a free course to you, our valued learners. We send the link to your email, and you can directly access the course from there. Once you add it to your cart, it’s yours to keep, completely free of charge. So, to outline this incredible programme:</p>
                    <p> 1. Monthly freebies, as the name suggests, is a programme that is held every month. <br>
                        2. It’s held on the last Friday of the month. <br>
                        3. You can claim a premium CPD accredited course through the link that we send to your email. <br>
                        4. It’s free. You don’t have to spend a single dime on it!</p>
            
                    <div class="monthly-freebies-btn">
                        <a href="#monthly-freebies">CLAIM YOUR FREE COURSE NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="monthly-freebies-break">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Enjoy the Freedom of Choosing Your Free Course!</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="monthly-freebies-part-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Now we have an even more fantastic offer! Won’t it be a thousand times better if you got to choose your monthly freebie course instead of us? So, we’re basically giving you the freedom to choose your course!</p>
                    <p>Yes, you read that right. You will choose the course you want, <strong>EVERY SINGLE MONTH!</strong></p>
                    <p>Now you must be thinking, “how would I do that?”</p>
                    <p>Well, don’t worry. We made a convenient arrangement for you.</p>
                    <p><strong>First,</strong><br>
                        Down below you’ll see a form where you have to fill up some basic contact information so that we will have a way to send your gift to you.
                    </p>
                    <p><strong>Then,</strong><br>
                        Choose the course that you want for free from <a href="https://lead-academy.org/">our website</a>. Remember, only premium CPD courses are under this programme. Other courses like our Ofqual accredited courses are not part of this offer.
                    </p>
                    <p><strong>Now,</strong><br>
                        Visit all our social media profiles (link down below) where you’ll see a pinned post for the monthly freebies programme. Just leave a comment there with the name of the course that you want. Alternatively, you can also join our Facebook group. You can tell us what you want there. There are coupons, discounts and lots of exciting stuff there.
                    </p>
                    <p>We’ll select the course that gets the most vote as the monthly freebie gift. We are eagerly waiting to hear from you!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="monthly-freebies-icon">
                        <a href="https://www.facebook.com/leadacademyonline/">
                            <i aria-hidden="true" class="fab fa-facebook-square"></i>
                        </a>
                        <h2><a href="https://www.facebook.com/leadacademyonline/">Facebook page</a></h2>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="monthly-freebies-icon">
                        <a href="https://www.facebook.com/groups/lead.academy.org">
                            <i aria-hidden="true" class="fab fa-facebook"></i>
                        </a>
                        <h2><a href="https://www.facebook.com/groups/lead.academy.org">Facebook Group</a></h2>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="monthly-freebies-icon">
                        <a href="https://twitter.com/LeadAcademy5">
                            <i aria-hidden="true" class="fab fa-twitter-square"></i>
                        </a>
                        <h2><a href="https://twitter.com/LeadAcademy5">Twitter</a></h2>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <div class="monthly-freebies-icon">
                        <a href="https://www.linkedin.com/school/leadacademyuk">
                            <i aria-hidden="true" class="fab fa-linkedin"></i>
                        </a>
                        <h2><a href="https://www.linkedin.com/school/leadacademyuk">LinkedIn</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="monthly-freebies-break">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Subscribe Our Email List To Claim Your FREE Course Now</h2>
                </div>
            </div>
        </div>
    </section>
    <section id="monthly-freebies">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>If you have filled up the form given below, then we have a way to contact you. We’ll simply email the course link to you, and from the link you can directly add the course to your account for free. There’s no caveat to our freebies. Your access to them will always be as if you’ve purchased them.</p>
                    <div class="monthly-freebies-part-from">
                    <?php
                        echo do_shortcode('[contact-form-7 id="e68a013" title="Monthly Freebees"]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>