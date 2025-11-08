jQuery(document).ready(function($) {
    $(document.body).on('updated_wc_div', function() {
        let cartForms = $('.woocommerce-cart-form');
        if (cartForms.length > 1) {
            cartForms.slice(1).remove();
        }
        hideOthers();
    });
    hideOthers();
    
    // Call the function to hide the variations information
    function hideOthers(){
        $('.variation-Courses p').each(function (){
            var dateString = $(this).text();
            var yearMatch = dateString.match(/(\d{4})/); // Matches a four-digit number
            var year = yearMatch ? yearMatch[0] : null;
            var monthMatch = dateString.match(/([A-Za-z]+)(?=,\s*\d{4})/); // Matches the month before the year
            var month = monthMatch ? monthMatch[0] : null;
            if (!month && !year){
                // $(this).parent().hide();
            }
        });
    }
});