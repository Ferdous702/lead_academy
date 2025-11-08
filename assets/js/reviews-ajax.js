/**
 * AJAX script for loading reviews (v6 - Popup Skeleton Loading)
 * Adds professional skeleton loading to the popup initialization.
 */
jQuery(function ($) {
    if (typeof la_reviews_params === 'undefined') {
        console.error('Review script parameters are missing.');
        return;
    }

    // --- General Variables ---
    let isLoading = false;
    const totalReviews = parseInt(la_reviews_params.total_reviews, 10);
    const reviewsPerPage = parseInt(la_reviews_params.reviews_per_page, 10);
    const initialCount = parseInt(la_reviews_params.initial_count, 10);
    const owlCarousel = $('.la-google-review-carousel-section .owl-2');
    let carouselOffset = initialCount;

    // --- Owl Carousel Options ---
    const owlOptions = {
        loop: false, margin: 20, nav: true, dots: true,
        responsive: { 0: { items: 1 }, 600: { items: 2 }, 1000: { items: 3 } }
    };

    // --- Carousel Logic ---
    $(document).on('click', '.la-google-review-carousel-section .owl-next', function () {
        if (carouselOffset >= totalReviews || isLoading) { return; }
        fetchMoreReviewsForCarousel();
    });

    function fetchMoreReviewsForCarousel() {
        isLoading = true;
        const jumpToIndex = owlCarousel.find('.owl-item').length;
        const visibleCards = owlCarousel.find('.owl-item.active .cat-feedback-card');

        visibleCards.each(function () { $(this).data('original-html', $(this).html()); });
        visibleCards.html(la_reviews_params.carousel_skeleton_html).addClass('is-loading');

        $.ajax({
            url: la_reviews_params.ajax_url, type: 'POST', dataType: 'json',
            data: {
                action: 'la_load_more_reviews', nonce: la_reviews_params.nonce,
                post_id: la_reviews_params.post_id, offset: carouselOffset,
                limit: -1, context: 'carousel'
            },
            success: function (response) {
                visibleCards.each(function () { $(this).html($(this).data('original-html')).removeClass('is-loading'); });
                if (response.success && response.data.html && response.data.html.trim() !== '') {
                    owlCarousel.trigger('destroy.owl.carousel');
                    owlCarousel.append(response.data.html);
                    carouselOffset += response.data.count;
                    owlCarousel.owlCarousel(owlOptions);
                    owlCarousel.trigger('to.owl.carousel', [jumpToIndex, 0]);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Carousel AJAX Error:', textStatus, errorThrown);
                visibleCards.each(function () { $(this).html($(this).data('original-html')).removeClass('is-loading'); });
            },
            complete: function () { isLoading = false; }
        });
    }

    // --- Popup Logic (UPDATED with Skeleton Loader) ---
    const popup = $('#popup');
    const laGoogleReviewBox = $('.la-google-review');
    const closePopupBtn = $('#closePopupBtn');
    const popupReviewsContainer = $('#la-popup-reviews-container');
    let popupOffset = 0;
    let isPopupInitialized = false;

    laGoogleReviewBox.on('click', function() {
        popup.css('display', 'flex');
        if (!isPopupInitialized) {
            initializePopup();
        }
    });

    function initializePopup() {
        if (isLoading) return;
        isLoading = true;
        
        // NEW: Show skeleton loaders instead of text
        let skeletons = '';
        for (let i = 0; i < 3; i++) { // Show 3 skeleton loaders
            skeletons += la_reviews_params.popup_skeleton_html;
        }
        popupReviewsContainer.html(skeletons);

        $.ajax({
            url: la_reviews_params.ajax_url, type: 'POST', dataType: 'json',
            data: {
                action: 'la_load_more_reviews', nonce: la_reviews_params.nonce,
                post_id: la_reviews_params.post_id, offset: 0,
                limit: initialCount, context: 'popup'
            },
            success: function (response) {
                popupReviewsContainer.empty(); // Remove skeletons
                if (response.success && response.data.html) {
                    isPopupInitialized = true;
                    popupReviewsContainer.append(response.data.html);
                    popupOffset = response.data.count;
                    if (totalReviews > popupOffset) {
                        const loadMoreBtn = $('<button id="la-popup-load-more" class="la-load-more-btn">Load More Reviews</button>');
                        popup.find('.google-popup-review-all-box').append(loadMoreBtn);
                    }
                } else {
                    popupReviewsContainer.html('<div class="review-loader">No reviews found.</div>');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error('Popup Init AJAX Error:', textStatus, errorThrown);
                popupReviewsContainer.html('<div class="review-loader">Failed to load reviews. Please close and try again.</div>');
            },
            complete: function () { isLoading = false; }
        });
    }

    $('body').on('click', '#la-popup-load-more', function() {
        if (isLoading) return;
        const button = $(this);
        button.text('Loading...').prop('disabled', true);
        isLoading = true;

        $.ajax({
            url: la_reviews_params.ajax_url, type: 'POST', dataType: 'json',
            data: {
                action: 'la_load_more_reviews', nonce: la_reviews_params.nonce,
                post_id: la_reviews_params.post_id, offset: popupOffset,
                limit: reviewsPerPage, context: 'popup'
            },
            success: function (response) {
                if (response.success && response.data.html) {
                    popupReviewsContainer.append(response.data.html);
                    popupOffset += response.data.count;
                    if (popupOffset >= totalReviews) button.remove();
                } else {
                    button.remove();
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                 console.error('Popup Load More AJAX Error:', textStatus, errorThrown);
                 button.text('Error. Try again.');
            },
            complete: function() {
                isLoading = false;
                if ($('#la-popup-load-more').length) {
                    button.text('Load More Reviews').prop('disabled', false);
                }
            }
        });
    });

    closePopupBtn.on('click', () => popup.hide());
    popup.on('click', (event) => {
        if ($(event.target).is(popup)) {
            popup.hide();
        }
    });
});