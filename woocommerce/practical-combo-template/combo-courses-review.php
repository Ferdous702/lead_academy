<div id="la-single-feedbacks" class="mb-5">
    <div class="container">
        <h2 id="la-review" class="text-center">Course Reviews</h2>
        <?php
        // This function should be defined in your functions.php or a related include file.
        if (function_exists('la_display_reviews_section')) {
            la_display_reviews_section();
        } else {
            echo '<p class="text-center">Reviews are currently unavailable.</p>';
        }
        ?>
    </div>
</div>