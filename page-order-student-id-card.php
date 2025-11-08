<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<style>
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
    padding: 8px 33px;
    background-color: #af1f47;
    border: 1px solid #c6093e;
    transition: all 500ms ease;
    border-radius: 0px 5px 5px 0px;
    margin-left: -5px;
}


input#txt_search {
    width: 48%;
}

fieldset {
    padding-top: 25px !important;
}

select {
    -webkit-appearance: none !important;
    height: 100% !important;
    background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc) !important;
    background-position: calc(100% - 19px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em !important;
    background-size: 5px 5px, 5px 5px, 1px 1.5em !important;
    background-repeat: no-repeat !important;
    border: 1px solid #ababab !important;
    color: #000;
}

span#input_8_99_6_container {
    display: none;
}

span#gfield_upload_rules_8_105 {
    margin: 0;
    display: block;
    padding: 0;
    line-height: 0;
    position: relative;
    top: -10px;
}

span#gfield_upload_rules_8_102 {
    margin: 0;
    display: block;
    padding: 0;
}

div#gfield_description_8_105 {
    font-size: 16px;
    color: #790000;
    margin-top: 0;
    font-style: italic;
    padding: 0;
    position: relative;
    top: 5px;
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

span#gfield_upload_rules_8_105 {
    margin: 0;
    display: block;
    padding: 0;
    line-height: 30px;
    position: relative;
    top: 0;
}

span#gfield_upload_rules_8_102 {
    margin: 0;
    display: block;
    padding: 0;
    line-height: 30px;
}

div#gfield_description_8_105 {
    font-size: 12px;
    top: 0px;
}

}
</style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
    <section id="student-id-card-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Order Student ID Card</h1>
                </div>
            </div>
        </div>
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M790.5,93.1c-59.3-5.3-116.8-18-192.6-50c-29.6-12.7-76.9-31-100.5-35.9c-23.6-4.9-52.6-7.8-75.5-5.3
              c-10.2,1.1-22.6,1.4-50.1,7.4c-27.2,6.3-58.2,16.6-79.4,24.7c-41.3,15.9-94.9,21.9-134,22.6C72,58.2,0,25.8,0,25.8V100h1000V65.3
              c0,0-51.5,19.4-106.2,25.7C839.5,97,814.1,95.2,790.5,93.1z" fill="white"></path>
          </svg>                  
    </section>
    <section id="start-saving-today">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Start Saving Today</h2>
                    <p>Order your student ID card now and enjoy the benefits of getting student discounts.</p>
                </div>
            </div>
            <div class="start-saving-today-part-2">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                        <h3>Benefits you will gain:</h3>
                        <div class="start-saving-today-icon-text">
                            <ul>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    <span>1-Year validity of the student ID card</span>
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    <span>Proof of student enrolment at Lead Academy</span>
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    <span>Benefit of getting student discounts</span>
                                </li>
                                <li>
                                    <span><i class="fa-solid fa-circle-check"></i></span>
                                    <span>Save money on spending</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 align-self-center">
                        <img src="https://lead-academy.org/wp-content/uploads/2023/02/ID-card-1-1.webp" alt="Student ID Card">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .student-id-card-form {
            background: linear-gradient(180deg, #fff1f5 0%, #fff 100%);
            box-shadow: 0 4px 8px rgb(0 0 0 / 21%);
            border: 5px solid #ffffff;
        }

        .student-id-card-form label.form-label {
            font-size: 20px;
            font-weight: 600;
        }

        .student-id-card-form .form-check {
            margin: 0px 0px 10px 10px;
            font-size: 16px;
        }

        .total-fee .buybuilder-field {
            box-shadow: 0 4px 8px rgb(0 0 0 / 0%) !important;
        }

        .govt-issued-id, .photo, .student-id-card, .validity, .shipping  {
            margin: 30px 0px;
            box-shadow: 0 4px 8px rgb(0 0 0 / 5%);
            padding: 20px;
            background-color: #fff;
            border-left: 4px solid #b91948;
        }

        .govt-issued-id .form-text {
            font-size: 14px;
            padding: 10px 8px;
            box-shadow: 0 4px 8px rgb(0 0 0 / 5%);
            border-bottom: 2px solid #af1f47;
            margin-top: 30px;
            color: #303030;
            background-color: #f5f5f5;
            width: fit-content;
        }

        .govt-issued-id .form-text::before {
            content: "\f2c2";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-right: 8px;
            color: #af1f47;
            font-size: 16px;
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

        .student-id-card-form .btn {
            background-color: #af1f47;
            border: 2px solid #af1f47;
            padding: 8px 50px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 35px;
            box-shadow: 0 4px 0px #b9194836 !important;
            color:rgb(255, 255, 255);
            transition: all 500ms ease;
        }

        .student-id-card-form .btn:hover {
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

        .student-id-card-form h3 {
            font-size: 30px;
            border-bottom: 6px solid #ffffff;
            padding-bottom: 40px;
            color: #000;
            box-shadow: 0 2px 0px #af1f47;
            margin-bottom: 0;
        }

        /* Styles for mobile devices (widths up to 767px) */
        @media only screen and (max-width: 767px) {
            .student-id-card-form h3 {
                font-size: 26px;
                padding-bottom: 22px;
            }

            .student-id-card-form label.form-label {
                font-size: 18px;
            }

            .govt-issued-id, .photo, .student-id-card, .validity, .shipping {
                padding-left: 6px;
            }
        }
    </style>
    <section id="order-your-card">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Order Your Card</h2>
                    <p>Order your student ID card now and enjoy the benefits of getting student discounts.</p>
                    <div class="student-id-card-form">
                        <?php echo do_shortcode('[bb_form id=1]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blazing-discount-deals">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>Blazing Discount Deals</h2>
                    <p>Enjoy the benefits of getting student discounts from our registered partners by ordering your student ID card.</p>
                </div>
            </div>
            <div class="blazing-discount-deals-card">
                <div class="row">
                <?php
                $blazing_deals_items = [
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/30-Days-Free-Trial-and-Monthly-Subscription-Fee-of-8.95.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/les-mills.png',
                        'title'       => '30 Days Free Trial and Monthly Subscription Fee of £8.95',
                        'url'         => 'http://link.lesmillsondemand.com/SH1Gi',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/images-1_1024x1024.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/craft-ease-logo-vertical_pbn.png',
                        'title'       => '20% off on first paint by numbers and diamond painting kits',
                        //'url'         => 'https://www.craft-ease.com/discount/LEAD-ACA-20',
                        'url'         => '#',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/the-best-vpn-services-for-2021_9qt3.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/NordVPN-logo.jpg',
                        'title'       => '2 Years Offer: Get 73% OFF for only £2.33/mo.',
                        'url'         => 'https://go.nordvpn.net/aff_c?offer_id=15&aff_id=53306',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/career-hunter-1.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/learn-hunter-2.png',
                        'title'       => 'Get flat 20% off on Full Individual Access',
                        'url'         => 'https://www.careerhunter.io/upgrade',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/cartridge.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Cart.jpg',
                        'title'       => '8% Off on Cartridge People Own Brand Ink and Toner Cartridges',
                        'url'         => '#',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/MicrosoftTeams-image-69.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-68.jpg',
                        'title'       => '10% discount on any full priced product',
                        'url'         => 'https://www.meencanta.co.uk/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/CareerAddict-Reveals-Employees-Would-Quit-Their-Job-Because-of-No-Progression-2-990x660-1.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-5.png',
                        'title'       => '10% discount on CV Writing service',
                        'url'         => 'https://www.careeraddict.com/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/pact.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Pact-Coffee.jpg',
                        'title'       => 'Get £5 off your first bag of coffee or box of pods when you sign up to a recurring Pact plan',
                        'url'         => 'https://www.pactcoffee.com/coffee-plans/signup?voucher=ACADEMY195',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/Rombouts2.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/RomboutsLogo400x400-1.jpg',
                        'title'       => '10% Off first Rombouts Coffee and Coffee Machines Order!',
                        'url'         => 'https://www.rombouts.com/be_en/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/hostinger-cover.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/hostiner.png',
                        'title'       => 'Get 7% off on a web-hosting plan',
                        'url'         => 'https://www.hostinger.com/webhosting',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/Sekdona-1.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-39.jpg',
                        'title'       => '20% discount on all watches',
                        'url'         => 'https://www.sekonda.com/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/DSCF7361-001.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/shakeaway.png',
                        'title'       => '10% discount by showing Student ID card',
                        'url'         => '#',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/Mindful-Chef.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-10.jpg',
                        'title'       => 'Get 25% off on the first 2 boxes',
                        'url'         => '#',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/MicrosoftTeams-image-14-1536x841-1.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-13-1536x1536.jpg',
                        'title'       => '25% Student Discount on all products',
                        'url'         => 'https://www.onnorlife.com/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/mw-Banner.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-16.png',
                        'title'       => 'Get 15% discount on all products (MW Messy Weekend)',
                        'url'         => 'https://messyweekend.com/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/Loci.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Loci.png',
                        'title'       => 'Get 15% discount on all products',
                        'url'         => 'https://lociwear.com/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/silver-lantern.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Silver-Lantern.png',
                        'title'       => '10% off all teas/products on orders of £5 or more',
                        'url'         => 'https://silverlanterntea.co.uk/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/Rymen-cover.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/Rymen.jpg',
                        'title'       => 'Get 5% off on all products',
                        'url'         => 'https://www.rymanbusiness.com/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/ushi-wear.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-44.jpg',
                        'title'       => '20% discount on any order',
                        'url'         => 'https://www.ushiwear.co.uk/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/HOS.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-46.jpg',
                        'title'       => 'Get 20% discount on any order',
                        'url'         => 'https://houseofspells.co.uk/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/claim_v4.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-57.png',
                        'title'       => '10% Discount on Insurance Policy',
                        'url'         => 'https://uk.westminster.global/?Introducer=99847',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/Balance-Coffee-min.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/BalanceCoffee_Logo-black-min.png',
                        'title'       => '20% discount on Coffee Bags category (beans or ground)',
                        'url'         => 'http://www.balancecoffee.co.uk/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/MicrosoftTeams-image-24.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-23.jpg',
                        'title'       => '5% discount on any order',
                        'url'         => 'https://www.engraversguild.co.uk/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/MicrosoftTeams-image-26.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-25.jpg',
                        'title'       => '5% discount on any order (Lovelox London)',
                        'url'         => 'https://www.loveloxlockets.com/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/MicrosoftTeams-image-28.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-27.png',
                        'title'       => '20% sitewide shopping discount and 40% off on fabrics, label & transfer paper orders',
                        'url'         => 'https://www.bagsoflove.co.uk/',
                    ],
                    [
                        'top_img'     => 'https://lead-academy.org/wp-content/uploads/2023/02/MicrosoftTeams-image-32.webp',
                        'logo_img'    => 'https://lead-academy.org/wp-content/uploads/2022/10/MicrosoftTeams-image-31.jpg',
                        'title'       => 'Get 15% discount on all isoul products. Minimum order value is £10',
                        'url'         => 'https://www.isoul.co.uk/',
                    ],
                ];
                foreach( $blazing_deals_items as $discount_item ) : ?>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="blazing-discount-deals-card-box">
                            <a href="<?php echo $discount_item['url']; ?>"><img class="blazing-discount-deals-card-box-1" src="<?php echo $discount_item['top_img']; ?>" alt="<?php echo $discount_item['title']; ?>"></a>
                            <a class="blazing-discount-deals-card-box-2" href="<?php echo $discount_item['url']; ?>"><img src="<?php echo $discount_item['logo_img']; ?>" alt="<?php echo $discount_item['title']; ?> Logo"></a>
                            <h3><a href="<?php echo $discount_item['url']; ?>"><?php echo $discount_item['title']; ?></a></h3>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>