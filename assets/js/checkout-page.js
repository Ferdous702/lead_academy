jQuery(document).ready(function () {

    // Add a new heading after the 'Profession' field
    
    var newHeading = '<h3 class="billing_head">Billing Information</h3>';
    setTimeout(function() {
        jQuery('#la_profession_field_field').after(newHeading);
    }, 500);
    // setTimeout(function() {
    //     jQuery('#payment .wc_payment_method > input').click();
    // }, 5000);
    jQuery('#billing_country').change(function () {
        var country = jQuery(this).val();
        if (country == 'UAE') {
            jQuery('#billing_postcode_field').removeClass('validate-required');
            jQuery('#billing_postcode').prop('required', false);
        }
        jQuery('#billing_postcode_field').show();
    });

    // Save the fields in cookies when they change
    jQuery('#la_title_field, #billing_first_name, #billing_last_name, #billing_email, #billing_phone, #billing_birth_date, #billing_birth_day, #billing_birth_month, #billing_birth_year, #la_profession_field, #billing_country, #billing_address_1, #billing_address_2, #billing_city, #billing_postcode').on('change', function () {
        document.cookie = jQuery(this).attr('id') + "=" + jQuery(this).val() + "; path=/";
    });
    if (!document.cookie.includes('billing_birth_day')) {
        document.cookie = "billing_birth_day=0; path=/";
    }
    if (!document.cookie.includes('billing_birth_month')) {
        document.cookie = "billing_birth_month=0; path=/";
    }
    if (!document.cookie.includes('billing_birth_year')) {
        document.cookie = "billing_birth_year=0; path=/";
    }

    // Function to get a specific cookie by name
    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length == 2) return parts.pop().split(";").shift();
    }

    jQuery('body').on('change', '#billing_country', function () {
        setTimeout(function() {
            jQuery('.billing_head').remove();
            jQuery('#la_profession_field_field').after(newHeading);
        }, 500);
    });

    jQuery('body').on('change', '#address_selection_container > select', function () {
        let address = jQuery(this).find('option:selected').text();
        console.log(address);
        document.cookie = "billing_address_1=" + jQuery('#billing_address_1').val() + "; path=/";
        document.cookie = "billing_city=" + jQuery('#billing_city').val() + "; path=/";
        document.cookie = "billing_postcode=" + jQuery('#billing_postcode').val() + "; path=/";
    });

    // Populate the fields with the cookie data if they exist
    jQuery('#la_title_field').val(getCookie('la_title_field'));
    jQuery('#billing_first_name').val(getCookie('billing_first_name'));
    jQuery('#billing_last_name').val(getCookie('billing_last_name'));
    jQuery('#billing_email').val(getCookie('billing_email'));
    jQuery('#billing_phone').val(getCookie('billing_phone'));
    jQuery('#billing_birth_day').val(getCookie('billing_birth_day'));
    jQuery('#billing_birth_month').val(getCookie('billing_birth_month'));
    jQuery('#billing_birth_year').val(getCookie('billing_birth_year'));
    jQuery('#la_profession_field').val(getCookie('la_profession_field'));
    if(getCookie('billing_country') != null){
        jQuery('#billing_country').val(getCookie('billing_country'));
    }else{
        // document.cookie = "billing_country=GB; path=/";
    }
    jQuery('#billing_address_1').val(getCookie('billing_address_1'));
    jQuery('#billing_address_2').val(getCookie('billing_address_2'));
    jQuery('#billing_city').val(getCookie('billing_city'));
    jQuery('#billing_postcode').val(getCookie('billing_postcode'));

    let birthDate = getCookie('billing_birth_date');
    if (birthDate && birthDate.includes('-')) {
        birthDate = birthDate.replace(/-/g, ' '); // Replace all dashes with spaces
    }
    jQuery('#billing_birth_date').val(birthDate);

    function updateBirthDateField() {
        let day = jQuery('#billing_birth_day').val();
        let month = jQuery('#billing_birth_month').val();
        let year = jQuery('#billing_birth_year').val();

        if (day != 0 && month != 0 && year != 0) {
            let date = day + ' ' + month + ' ' + year;
            jQuery('#billing_birth_date').val(date);
            document.cookie = "billing_birth_date="+date+"; path=/";
        }
    }
    jQuery('#billing_birth_day, #billing_birth_month, #billing_birth_year').on('change', updateBirthDateField);
});