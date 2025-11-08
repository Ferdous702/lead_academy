<?php
/**
 * The template for displaying search results pages.
 *
 * @package Lead Academy
 */

get_header(); ?>
<style>
section#archive-search-1s {
    position: relative; /* Ensure the parent container is relatively positioned */
    background-color: transparent;
    background-image: linear-gradient(140deg, #B91948 0%, #B91948 89%);
    padding: 35px 0px 0px;
    text-align: center;
}

.background-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(https://lead-academy.org/wp-content/uploads/2022/10/News-Hero-Bg.png);
    background-position: center left;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.15;
    z-index: 1; /* Make sure the overlay is on top */
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

section#archive-search-1s .container {
    position: relative;
    z-index: 2; /* Content should be above the overlay */
}

section#archive-search-1s p,
section#archive-search-1s h1 {
    position: relative;
    z-index: 2;
}

section#archive-search-1s p {
    color: #ffffff;
    font-family: "Montserrat", Sans-serif;
    font-size: 20px;
    font-weight: 300;
    text-transform: capitalize;
}

section#archive-search-1s h1 {
    color: #ffffff;
    font-family: "Varela Round", Sans-serif;
    font-size: 45px;
    font-weight: 300;
    text-transform: capitalize;
}

section#archive-search-2s {
    padding: 35px 0px;
}

section#archive-search-2s .card {
    height: 90%;
    margin: 30px 10px;
}

h5.card-title {
    text-align: center;
}

h5.card-title a {
    color: #000000;
    font-family: "Varela Round", Sans-serif;
    font-size: 20px;
    font-weight: 400;
    text-transform: capitalize;
    line-height: 1.5em;
}

.card-footer a {
    background-color: #b91948;
    border: 1px solid #b91948;
    width: 100%;
    padding: 8px 0px;
}

.card-footer a:hover, .card-footer a:focus {
    background-color: #a60338;
    border: 1px solid #b91948;
}

a.page-numbers {
    background-color: #b91948;
    color: #fff;
    padding: 6px 10px;
}

.page-numbers {
    background-color: #212529;
    color: #fff;
    padding: 6px;
}

nav.navigation.pagination {
    padding: 70px 0px 20px;
}

p.no-post {
    text-align: center;
    font-size: 30px;
    font-weight: 600;
}

section#archive-search-3s {
    background-color: transparent;
    background-image: linear-gradient(130deg, #B91948 0%, #B91948 89%);
    position: relative;
    margin-top: 100px;
}

.background-overlay-2 {    
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(https://lead-academy.org/wp-content/uploads/2022/10/CTA-Shapes.png);
    background-position: center left;
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.15;
    z-index: 1; /* Make sure the overlay is on top */
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
}

section#archive-search-3s .container {
    position: relative;
    z-index: 2; /* Content should be above the overlay */
}

section#archive-search-3s .search-call-icon,
section#archive-search-3s h2,
section#archive-search-3s img {
    position: relative;
    z-index: 2;
}

section#archive-search-3s .shape.shape-top {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100px; /* Adjust as needed for the desired height */
    overflow: hidden;
    z-index: 1; /* Ensures it stays behind the content */
    line-height: 0;
    direction: ltr;
}

section#archive-search-3s .shape.shape-top svg {
    position: relative;
    bottom: 0;
    left: 50%;
    display: block;
    width: calc(230% + 1.3px);
    height: 100px;
    transform: translateX(-50%) rotateY(180deg);
}

section#archive-search-3s .shape.shape-top .shape-fill {
    fill: #ffffff; /* Adjust the color as needed */
}

section#archive-search-3s img {
    border-radius: 300px 100px 100px 100px;
    box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.12);
    vertical-align: middle;
    display: inline-block;
    position: relative;
    top: -80px;
}

section#archive-search-3s h2 {
    color: #ffffff;
    font-family: "Poppins", Sans-serif;
    font-size: 34px;
    font-weight: 400;
    text-transform: capitalize;
}

.search-call-icon a {
    font-family: "Poppins", Sans-serif;
    font-size: 25px;
    font-weight: 400;
    color: #fff;
}

span.icon-list-icon {
    margin-right: 10px;
}

.card-footer {
    background-color: #b91948;
}

.card img {
    height: 215px;
}

/* -Mobile Device- */
@media (max-width: 767px) {
    section#archive-search-1s p {
    font-size: 18px;
}

section#archive-search-1s h1 {
    font-size: 22px;
}

h5.card-title a {
    font-size: 15px;
    line-height: 25px;
}

.card img {
    height: 100px;
}

section#archive-search-2s .card {
    height: 90%;
    margin: 20px 0px;
}

.card-footer {
    padding: 0px;
}

.card-footer a {
    font-size: 12px;
}

section#archive-search-3s h2 {
    font-size: 22px;
    padding: 125px 0px 0px 0px;
    margin-bottom: 10px;
}

.search-call-icon a {
    font-size: 18px;
}

section#archive-search-3s img {
    position: inherit;
    margin: 20px 0px;
}
}

/* -Tab Device- */
@media only screen and (min-width: 768px) and (max-width: 1024px) {
section#archive-search-1s h1 {
    font-size: 30px;
}

.card img {
    height: 180px;
}

h5.card-title a {
    font-size: 18px;
}

.card-footer a {
    font-size: 15px;
}

section#archive-search-3s img {
    top: -45px;
}

section#archive-search-3s h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.search-call-icon a {
    font-size: 20px;
}


}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.2.0/css/all.css"/>
<section id="archive-search-1s">
    <div class="background-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <p>find what you're looking for</p>
                <h1 class="page-title">
                    <?php printf( esc_html__( 'Search Results for: %s', 'lead-academy' ), '<span>' . get_search_query() . '</span>' ); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section id="archive-search-2s">
    <?php
    // Start the loop
    if ( have_posts() ) :
        echo '<div class="container">';
        echo '<div class="row">';
        while ( have_posts() ) :
            the_post();
            $post_id = get_the_ID(); // Get the post ID
            ?>
            <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 post-<?php echo $post_id; ?>"> <!-- Added post ID to the card class -->
                <div class="card"> 
                    <a href="<?php the_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'medium', array( 'class' => 'card-img-top' ) ); ?>
                        <?php else : ?>
                            <img src="https://lead-academy.org/wp-content/uploads/0223/12/Lead-Academy.webp" class="card-img-top" alt="<?php the_title_attribute(); ?>" />
                        <?php endif; ?>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
                        <p class="card-text">
                            <?php // the_excerpt(); ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <?php
                        $post_type = get_post_type(); // Get the post type
                        if ( $post_type == 'product' ) {
                            $button_text = __( 'View Course', 'lead-academy' );
                        } elseif ( $post_type == 'page' ) {
                            $button_text = __( 'View Page', 'lead-academy' );
                        } else {
                            $button_text = __( 'Read More', 'lead-academy' );
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html( $button_text ); ?></a>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        echo '</div>'; // End row
        echo '</div>'; // End container
    ?>
    <div class="container">
        <?php
        // Pagination
        the_posts_pagination( array(
            'mid_size' => 2,
            'prev_text' => __( '&laquo; Previous', 'lead-academy' ),
            'next_text' => __( 'Next &raquo;', 'lead-academy' ),
        ) );
    else :
        ?>
        <p class="no-post"><?php esc_html_e( 'It seems we can\'t find what you\'re looking for.', 'lead-academy' ); ?></p>
        <?php
    endif;
    ?>
    </div>
</section>

<section id="archive-search-3s">
    <div class="background-overlay-2"></div>
    <div class="shape shape-top" data-negative="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
            c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
            c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>		
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 align-self-center">
                <h2>Call a Support Agent</h2>
                <div class="search-call-icon">
                    <a href="tel:020%203880%208347">
						<span class="icon-list-icon">
                            <i class="fa-solid fa-phone"></i>
                        </span>
						<span class="icon-list-text">020 3880 8347</span>
					</a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <img src="https://lead-academy.org/wp-content/uploads/0223/12/CTA-News-1.webp" alt="Search Lead Academy Courses">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>