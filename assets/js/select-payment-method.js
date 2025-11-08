jQuery(document).ready(function($) {
    function selectVisiblePaymentMethod() {
        var visibleMethods = $('.wc_payment_method:visible');
        if (visibleMethods.length === 1) {
            visibleMethods.find('input[type="radio"]').prop('checked', true);
        } else if (visibleMethods.length > 1) {
            // Select the first payment method if more than one is visible
            visibleMethods.first().find('input[type="radio"]').prop('checked', true);
        }
    }

    // Call the function on document ready
    selectVisiblePaymentMethod();

    // Call the function when payment methods are updated (e.g., after AJAX calls)
    $(document.body).on('updated_checkout', function() {
        selectVisiblePaymentMethod();
    });
});
