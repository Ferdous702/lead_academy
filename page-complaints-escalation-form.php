<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<section id="exam-booking-banner">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <h1>Complaints Escalation Form </h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <?php echo do_shortcode('[contact-form-7 id="c44823a" title="Complaints Escalation Form"]'); ?>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
<style>
    select {
    -webkit-appearance: none !important;
    height: 100% !important;
    background-image: linear-gradient(45deg, transparent 50%, gray 50%), linear-gradient(135deg, gray 50%, transparent 50%), linear-gradient(to right, #ccc, #ccc) !important;
    background-position: calc(100% - 19px) calc(1em + 2px), calc(100% - 15px) calc(1em + 2px), calc(100% - 2.5em) 0.5em !important;
    background-size: 5px 5px, 5px 5px, 1px 1.5em !important;
    background-repeat: no-repeat !important;
    padding: 8px !important;
}

input {
    border: 1px solid #adadad !important;
}

select {
    border: 1px solid #adadad !important;
}


input#gform_submit_button_100 {
    background-color: #af1f47 !important;
    padding: 16px 40px !important;
}

section#exam-booking-banner h1 {
    font-size: 30px;
    margin-top: 60px;
    text-align: center;
    background-color: #af1f47;
    padding: 40px 10px;
    border: 5px solid #ffffff;
    border-radius: 10px;
    color: #ffff;
}

.page-id-415006 {
    background-color: #f9f9f9;
}

input {
    background-color: #fff !important;
    padding: 8px 8px !important;
}

select {
    background-color: #fff !important;
}

.gfield_radio li label {
    background-color: #fff !important;
}

textarea {
    background-color: #fff;
    border: 1px solid #adadad;
}

div#gform_drag_drop_area_100_14 {
    background-color: #fff;
    border: 1px dashed #adadad;
}

button#gform_browse_button_100_14 {
    background-color: #da3369;
}

/* Responsive layout for smaller screens */
@media (max-width: 767px) {
  .gfield_radio li {
    width: 100%;
  }

section#exam-booking-banner h1 {
    font-size: 20px;
    margin-top: 60px;
    padding: 15px 5px;
}
}

/* -Tab Device- 
@media only screen and (min-width: 768px) and (max-width: 1024px) {

}*/

</style>
<script>
    jQuery(document).ready(function($) {
        /*function addServiceCosts() {
            var examBody = jQuery('#input_89_7').val();
            console.log(examBody);
            if (examBody == "Open Awards|0") {
                // Add the service cost fields
                jQuery('#service-working-days > tr > td:nth-child(6)').append('<small style="font-size: 10px;display: flex;flex-direction: row-reverse;padding-right: 5px;">£30</small>');
                jQuery('#service-working-days > tr > td:nth-child(7)').append('<small style="font-size: 10px;display: flex;flex-direction: row-reverse;padding-right: 5px;">£30</small>');
            } else {
                // Remove any added price elements
                jQuery('#service-working-days > tr > td:nth-child(6)').find('small').remove();
                jQuery('#service-working-days > tr > td:nth-child(7)').find('small').remove();
            }
        }*/
        // addServiceCosts(); // Update the service cost fields
        // Trigger change event on the Exam Body field
        $('#input_89_7').change(function() {
            // Get the selected value of the Exam Body field
            var selectedExamBody = $(this).val();

            // Get the Exam Type field
            var $examTypeField = $('#input_89_43');

            // Clear existing options in the Exam Type field
            $examTypeField.empty();

            // Conditional logic based on selected Exam Body
            if (selectedExamBody === 'Open Awards|0') {
                // Add and select "Open Awards Remotely" option when "Open Awards" is selected
                $examTypeField.append('<option value="Open Awards Remotely">Remote Exam from Home</option>');
            } else if (selectedExamBody === 'Pearson Edexcel|0') {
                // Add and select "Paper-Based (London)" option when "Pearson Edexcel" selected
                $examTypeField.append('<option value="Paper-Based (London)">Paper-Based Exam (London)</option>');
                $examTypeField.append('<option value="Paper-Based (Swindon)">Paper-Based Exam (Swindon)</option>');
                $examTypeField.append('<option value="Pearson Edexcel Remotely">Remote Exam from Home</option>');
            } else if (selectedExamBody === 'NCFE|0') {
                // Add and select "Paper-Based (London)" option when "NCFE" is selected
                $examTypeField.append('<option value="Paper-Based (London)">Paper-Based Exam (London)</option>');
                $examTypeField.append('<option value="Paper-Based (Swindon)">Paper-Based Exam (Swindon)</option>');
                $examTypeField.append('<option value="NCFE Remotely">Remote Exam from Home</option>');
            }

            // Automatically select the first option in the Exam Type field
            $examTypeField.find('option:first').prop('selected', true);

            // Trigger a change event to update any dependent fields
            $examTypeField.change();
        });

        // Trigger the change event on page load to set the correct options initially
        $('#input_89_7').trigger('change');
    });

</script>

<script>
jQuery(document).ready(function($) {
    // Define a mapping between country codes and Gravity Forms country names
    var countryMapping = {
        "AF": "Afghanistan",
        "AX": "Aland Islands",
        "AL": "Albania",
        "DZ": "Algeria",
        "AS": "American Samoa",
        "AD": "Andorra",
        "AO": "Angola",
        "AI": "Anguilla",
        "AQ": "Antarctica",
        "AG": "Antigua and Barbuda",
        "AR": "Argentina",
        "AM": "Armenia",
        "AW": "Aruba",
        "AU": "Australia",
        "AT": "Austria",
        "AZ": "Azerbaijan",
        "BS": "Bahamas",
        "BH": "Bahrain",
        "BD": "Bangladesh",
        "BB": "Barbados",
        "BY": "Belarus",
        "BE": "Belgium",
        "BZ": "Belize",
        "BJ": "Benin",
        "BM": "Bermuda",
        "BT": "Bhutan",
        "BO": "Bolivia",
        "BQ": "Bonaire, Sint Eustatius And Saba",
        "BA": "Bosnia and Herzegovina",
        "BW": "Botswana",
        "BV": "Bouvet Island",
        "IO": "Br. Indian Ocean Ter.",
        "BR": "Brazil",
        "BN": "Brunei Darussalam",
        "BG": "Bulgaria",
        "BF": "Burkina Faso",
        "BI": "Burundi",
        "KH": "Cambodia",
        "CM": "Cameroon",
        "CA": "Canada",
        "CV": "Cape Verde",
        "KY": "Cayman Islands",
        "CF": "Central African Rep.",
        "TD": "Chad",
        "CL": "Chile",
        "CN": "China",
        "CX": "Christmas Island",
        "CC": "Cocos (Keeling) Islands",
        "CO": "Colombia",
        "KM": "Comoros",
        "CD": "Congo (Dem. Rep.)",
        "CG": "Congo (Rep.)",
        "CK": "Cook Islands",
        "CR": "Costa Rica",
        "CI": "Côte d'Ivoire",
        "HR": "Croatia",
        "CU": "Cuba",
        "CW": "Curacao",
        "CY": "Cyprus",
        "CZ": "Czech Republic",
        "DK": "Denmark",
        "DJ": "Djibouti",
        "DM": "Dominica",
        "DO": "Dominican Republic",
        "EC": "Ecuador",
        "EG": "Egypt",
        "SV": "El Salvador",
        "GQ": "Equatorial Guinea",
        "ER": "Eritrea",
        "EE": "Estonia",
        "ET": "Ethiopia",
        "FK": "Falkland Is. (Malvinas)",
        "FO": "Faröe Islands",
        "FJ": "Fiji",
        "FI": "Finland",
        "FR": "France",
        "GF": "French Guiana",
        "PF": "French Polynesia",
        "TF": "French Southern Territories",
        "GA": "Gabon",
        "GM": "Gambia",
        "GE": "Georgia",
        "DE": "Germany",
        "GH": "Ghana",
        "GI": "Gibraltar",
        "GR": "Greece",
        "GL": "Greenland",
        "GD": "Grenada",
        "GP": "Guadeloupe",
        "GU": "Guam",
        "GT": "Guatemala",
        "GG": "Guernsey",
        "GN": "Guinea",
        "GW": "Guinea-Bissau",
        "GY": "Guyana",
        "HT": "Haiti",
        "HM": "Heard Island and McDonald Islands",
        "HN": "Honduras",
        "HK": "Hong Kong",
        "HU": "Hungary",
        "IS": "Iceland",
        "IN": "India",
        "ID": "Indonesia",
        "IR": "Iran",
        "IQ": "Iraq",
        "IE": "Ireland",
        "IM": "Isle of Man",
        "IL": "Israel",
        "IT": "Italy",
        "JM": "Jamaica",
        "JP": "Japan",
        "JE": "Jersey",
        "JO": "Jordan",
        "KZ": "Kazakhstan",
        "KE": "Kenya",
        "KI": "Kiribati",
        "KP": "Korea (Dem. Rep.)",
        "KR": "Korea (Rep.)",
        "KW": "Kuwait",
        "KG": "Kyrgyzstan",
        "LA": "Laos",
        "LV": "Latvia",
        "LB": "Lebanon",
        "LS": "Lesotho",
        "LR": "Liberia",
        "LY": "Libya",
        "LI": "Liechtenstein",
        "LT": "Lithuania",
        "LU": "Luxembourg",
        "MO": "Macao",
        "MK": "Macedonia, TFYR",
        "MG": "Madagascar",
        "MW": "Malawi",
        "MY": "Malaysia",
        "MV": "Maldives",
        "ML": "Mali",
        "MT": "Malta",
        "MH": "Marshall Islands",
        "MQ": "Martinique",
        "MR": "Mauritania",
        "MU": "Mauritius",
        "YT": "Mayotte",
        "MX": "Mexico",
        "FM": "Micronesia",
        "MD": "Moldova",
        "MC": "Monaco",
        "MN": "Mongolia",
        "ME": "Montenegro",
        "MS": "Montserrat",
        "MA": "Morocco",
        "MZ": "Mozambique",
        "MM": "Myanmar",
        "NA": "Namibia",
        "NR": "Nauru",
        "NP": "Nepal",
        "NL": "Netherlands",
        "NC": "New Caledonia",
        "NZ": "New Zealand",
        "NI": "Nicaragua",
        "NE": "Niger",
        "NG": "Nigeria",
        "NU": "Niue",
        "NF": "Norfolk Island",
        "MP": "Northern Mariana Islands",
        "NO": "Norway",
        "OM": "Oman",
        "PK": "Pakistan",
        "PW": "Palau",
        "PS": "Palestinian Territory",
        "PA": "Panama",
        "PG": "Papua New Guinea",
        "PY": "Paraguay",
        "PE": "Peru",
        "PH": "Philippines",
        "PN": "Pitcairn",
        "PL": "Poland",
        "PT": "Portugal",
        "PR": "Puerto Rico",
        "QA": "Qatar",
        "RE": "Réunion",
        "RO": "Romania",
        "RU": "Russia",
        "RW": "Rwanda",
        "GS": "S. Georgia and S. Sandwich",
        "SH": "Saint Helena",
        "LC": "Saint Lucia",
        "MF": "Saint Martin",
        "PM": "Saint Pierre and Miquelon",
        "BL": "Saint-Barthélemy",
        "WS": "Samoa",
        "SM": "San Marino",
        "ST": "Sao Tomé and Principe",
        "SA": "Saudi Arabia",
        "SN": "Senegal",
        "RS": "Serbia",
        "SC": "Seychelles",
        "SL": "Sierra Leone",
        "SG": "Singapore",
        "SX": "Sint Maarten",
        "SK": "Slovakia",
        "SI": "Slovenia",
        "SB": "Solomon Islands",
        "SO": "Somalia",
        "ZA": "South Africa",
        "SS": "South Sudan",
        "ES": "Spain",
        "LK": "Sri Lanka",
        "KN": "St. Kitts and Nevis",
        "VC": "St. Vincent and Grenadines",
        "SD": "Sudan",
        "SR": "Suriname",
        "SJ": "Svalbard and Jan Mayen",
        "SZ": "Swaziland",
        "SE": "Sweden",
        "CH": "Switzerland",
        "SY": "Syria",
        "TW": "Taiwan",
        "TJ": "Tajikistan",
        "TZ": "Tanzania",
        "TH": "Thailand",
        "TL": "Timor-Leste",
        "TG": "Togo",
        "TK": "Tokelau",
        "TO": "Tonga",
        "TT": "Trinidad and Tobago",
        "TN": "Tunisia",
        "TR": "Turkey",
        "TM": "Turkmenistan",
        "TC": "Turks and Caicos Is.",
        "TV": "Tuvalu",
        "UG": "Uganda",
        "UA": "Ukraine",
        "AE": "United Arab Emirates",
        "UK": "United Kingdom",
        "US": "United States",
        "UY": "Uruguay",
        "UZ": "Uzbekistan",
        "VU": "Vanuatu",
        "VA": "Vatican",
        "VE": "Venezuela",
        "VN": "Viet Nam",
        "WF": "Wallis and Futuna",
        "EH": "Western Sahara",
        "YE": "Yemen",
        "ZM": "Zambia",
        "ZW": "Zimbabwe"
    };

    // Listen for changes in the custom country select dropdown
    $('#txt_country').change(function() {
        // Get the selected country code from the custom select
        var selectedCountryCode = $(this).val();
        
        // Get the corresponding country name from the mapping
        var countryName = countryMapping[selectedCountryCode];

        // If a country name is found in the mapping
        if (countryName) {
            // Find the Gravity Forms address field for country
            var gravityCountryField = $('#input_89_54_6'); // _6 is for the country field in Gravity Forms address

            // Set the Gravity Forms country field value to match the country name
            gravityCountryField.val(countryName).trigger('change');
        } else {
            console.error("Country code not found in the mapping");
        }
    });
});

</script>

<script>
    jQuery(document).ready(function($) {
        function toggleFields() {
            var totalAmount = parseFloat($('#input_89_63').val()) || 0; // Get the total amount

            if (totalAmount > 0) {
                $('#field_89_63').show(); // Show the total amount field
                $('#field_89_65').show(); // Show the payment method field
            } else {
                $('#field_89_63').hide(); // Hide the total amount field
                $('#field_89_65').hide(); // Hide the payment method field
            }
        }

        // Call the function on initial load
        toggleFields();

        // Call the function when the appointment cost input changes
        $('body').on('change', '.ginput_appointment_cost_input', function() {
            toggleFields();
        });
    });

</script>

<?php
get_footer();
?>
