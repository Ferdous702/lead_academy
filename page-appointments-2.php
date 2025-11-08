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
            <h1>Functional Skills Exam Booking</h1>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
    </div>
</div>
</section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
            <?php echo do_shortcode('[gravityform id="89" title="true"]'); ?>
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

td.day_unavailable.ga_time_slots span {
    color: #c1c1c1 !important;
}

td.day_available.ga_time_slots {
    border: 1px solid #ffffff !important;
    border-radius: 6px !important;
    background: #da3369 !important;
    color: #fff;
}
/* Start For Adjust Theme Color */
.ga_appointments_calendar_header,
.ga_monthly_schedule_wrapper table thead,
.ga_monthly_schedule_wrapper table thead th{
    background: #af1f47 !important;
}
#gappointments_calendar_slots label.time_selected div{
    background: #af1f47 !important;
    color: #ffffff !important;
}
#gappointments_calendar_slots label.time_slot{
    color: #af1f47 !important;
}
/* End For Adjust Theme Color */

body .gform_legacy_markup_wrapper .ginput_container.ginput_complex .gfgeo-locator-button-wrapper.infield-locator {
    top: 25% !important;
}

.ga_booking_text {
    font-size: 15px;
}

.ga_delete_booking {
    font-size: 15px;
}

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
    padding: 7px 33px;
    background-color: #af1f47;
    border: 2px solid #c6093e;
    transition: all 500ms ease;
    border-radius: 0px 5px 5px 0px;
    margin-left: -5px;
}

button#btn_search:hover {
    background-color: #fff;
    color: #af1f47;
    transition: all 500ms ease;
}

li#field_89_56 h2 {
    font-size: 15px;
    margin-top: 35px;
    font-weight: bold;
    margin-bottom: 20px;
}

span#input_89_54_6_container {
    display: none;
}

input {
    border: 1px solid #adadad !important;
}

select {
    border: 1px solid #adadad !important;
}

li#field_89_41 {
    padding-top: 10px;
}

/* Container styling */
ul.gfield_radio {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

/* Radio button list item */
.gfield_radio li {
  position: relative;
  width: 100%;
  max-width: 500px;
}

/* Hide the original radio input */
.gfield_radio input[type="radio"] {
  display: none;
}

/* Custom label styling */
.gfield_radio label {
    padding: 10px !important;
    border: 2px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
    font-size: 14px !important;
    width: 100% !important;
    height: 95%;
}

/* Hover effect */
.gfield_radio label:hover {
  background-color: #f1f1f1;
  border-color: #aaa;
}

/* Selected radio button styling */
.gfield_radio input[type="radio"]:checked + label {
  background-color: #af1f47 !important;
  border-color: #af1f47 !important;
  color: white;
  font-weight: bold;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

/* Adjust label text */
.gfield_radio label span {
  font-size: 14px;
  display: block;
  color: #666;
  margin-top: 5px;
}

.gfield_radio input[type="radio"]:checked {
    accent-color: #af1f47;
}

input#gform_submit_button_89 {
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

li#field_89_45, li#field_89_60 {
    width: 50%;
    display: inline-block;
}

li#field_89_60 {
    position: absolute;
    margin-top: 210px;
    padding-left: 30px;
}

.page-id-403172 {
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

div#no_result_message {
    color: red;
    font-weight: 600;
}

/* Responsive layout for smaller screens */
@media (max-width: 767px) {
  .gfield_radio li {
    width: 100%;
  }

  li#field_89_45, li#field_89_60 {
    width: 100%;
    display: block;
}

li#field_89_60 {
    position: relative;
    margin-top: 40px;
    padding-left: 0px;
    margin-bottom: 40px !important;
}

section#exam-booking-banner h1 {
    font-size: 20px;
    margin-top: 60px;
    padding: 15px 5px;
}

div#address_selection_container select {
    width: -webkit-fill-available;
}

button#btn_search {
    padding: 11px 33px;
}
}

/* -Tab Device- */
@media only screen and (min-width: 768px) and (max-width: 1024px) {
    li#field_89_45 {
    width: 60%;
    display: inline-block;
}

    li#field_89_60 {
    width: 40%;
    display: inline-block;
    margin-top: 120px;
}
}

</style>


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
