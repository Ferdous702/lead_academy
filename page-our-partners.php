<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<section id="our-partner-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Our Partners</h1>
            </div>
        </div>
    </div>
</section>
<section id="partner-img-box">
    <div class="container">
        <div class="row">
            <?php
            $our_partner_items = [
                [
                    'img_url'      => '/wp-content/uploads/2022/09/CPD-Member.png',
                    'partner_link'   => 'https://cpduk.co.uk/',
                    'alt_text' => 'CPD-Member',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/QLS_Logo_Colour.png',
                    'partner_link'   => '#',
                    'alt_text' => 'QLS LOGO',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/Rospa-Member.png',
                    'partner_link'   => '#',
                    'alt_text' => 'Rospa Member',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/awards-Logo-6-3.png',
                    'partner_link'   => '#',
                    'alt_text' => 'Awards Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/Reed-Logo-1.png',
                    'partner_link'   => '#',
                    'alt_text' => 'Reed Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/awards-Logo-7-3-1.png',
                    'partner_link'   => '#',
                    'alt_text' => 'GroupOn',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/Wowcher-Logo-1.png',
                    'partner_link'   => '#',
                    'alt_text' => 'Wowcher Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/Laimoon-1.png',
                    'partner_link'   => '#',
                    'alt_text' => 'Laimoon Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/awards-Logo-9.png',
                    'partner_link'   => 'https://jooble.org/',
                    'alt_text' => 'Jooble',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/awards-Logo-9-1.png',
                    'partner_link'   => 'https://www.couponupto.com/coupons/lead-academy',
                    'alt_text' => 'Coupon up to',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/awards-Logo-9-1-1.png',
                    'partner_link'   => 'https://www.takethiscourse.net/',
                    'alt_text' => 'Take this course',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/awards-Logo-9-2.png',
                    'partner_link'   => 'https://www.couponxoo.com/stores/lead-academy',
                    'alt_text' => 'Coupon xoo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/wethrift-1.png',
                    'partner_link'   => 'https://www.wethrift.com/lead-academy',
                    'alt_text' => 'Wethrift',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/ecopict-logo-2.png',
                    'partner_link'   => 'https://ecopict.com/',
                    'alt_text' => 'Ecopict Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/DealsDaddyVoucherSite.png',
                    'partner_link'   => 'https://dealsdaddy.co.uk/store/leadacademy/',
                    'alt_text' => 'Deals Daddy Voucher Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/5d4612234465e5001b93ec2e-6f718c.png',
                    'partner_link'   => 'junilearning.com',
                    'alt_text' => 'Junilearning Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/MicrosoftTeams-image-9.png',
                    'partner_link'   => '#',
                    'alt_text' => 'Curateddeals Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/Socialbleads-Logo-LA.png',
                    'partner_link'   => '#',
                    'alt_text' => 'Socialbleads Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/httpscouponnreview.comcouponslead-academy.png',
                    'partner_link'   => '#',
                    'alt_text' => 'couponnreview.com',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/Coursef.png',
                    'partner_link'   => '#',
                    'alt_text' => 'Coursef',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/bestproductlist-.png',
                    'partner_link'   => 'https://www.bestproductlists.com/',
                    'alt_text' => 'Bestproductlists Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/Coupontoaster.png',
                    'partner_link'   => 'https://coupontoaster.com/lead-academy-discount',
                    'alt_text' => 'coupontoaster logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/cropped-CheapDiscountCode-1.png',
                    'partner_link'   => '#',
                    'alt_text' => 'Cheap Discount Code Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/09/Coupontoaster-1.png',
                    'partner_link'   => 'https://www.todaydeals.org/store/lead-academy',
                    'alt_text' => 'Today deals Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/TENERE.png',
                    'partner_link'   => 'https://lead-academy.tenereteam.com/coupons',
                    'alt_text' => 'Tenereteam Logo',
                ],
                [
                    'img_url'      => '/wp-content/uploads/2022/12/logo-1.png',
                    'partner_link'   => 'https://www.couponblender.com/lead-academy/',
                    'alt_text' => 'Coupon blender',
                ],
                [
                    'img_url'      => '/wp-content/uploads/0223/12/Logo-PNG.jpg',
                    'partner_link'   => '#',
                    'alt_text' => 'BELMONT INSTITUTE',
                ]
            ];

foreach ($our_partner_items as $item) :
    $partner_link = $item['partner_link'];
    $url_parts = parse_url($partner_link);
    $is_valid_link = $partner_link !== '#' && isset($url_parts['path']) && $url_parts['path'] !== '/';
    ?>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 patner-mr-top">
                    <div class="partner-img-box">
                        <?php if ($is_valid_link) : ?>
                            <a href="<?php echo esc_url($partner_link); ?>" target="_blank" rel="noopener noreferrer">
                                <img src="<?php echo esc_url($item['img_url']); ?>" alt="<?php echo esc_attr($item['alt_text']); ?>">
                            </a>
                        <?php else : ?>
                            <div>
                                <img src="<?php echo esc_url($item['img_url']); ?>" alt="<?php echo esc_attr($item['alt_text']); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>