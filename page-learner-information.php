<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();

$order_id = get_query_var('order_id');
if ( ! function_exists( 'wc_get_order' ) ) {
    return;
}
$order = wc_get_order( $order_id );
$f2f_info = array();
$count = 0;
if ( $order ) {
    foreach ( $order->get_items() as $item_id => $item ) {
        $product_name = $item->get_name();
        $product_id = $item->get_product_id();
        if ( in_array( $product_id, FACE_2_FACE_PRODUCT_CODES ) ) {
            $count++;
            $product_quantity = $item->get_quantity();
            $item_total = $item->get_total();
            $variation_id = $item->get_variation_id();
            if ( $variation_id ) {
                $variation_data = $item->get_meta_data();
                foreach ($variation_data as $meta) {
                    if ($meta->key === 'courses') {
                        $f2f_info[$count]['product_name'] = $product_name;
                        $f2f_info[$count]['product_id'] = $product_id;
                        $f2f_info[$count]['variation_id'] = $variation_id;
                        $f2f_info[$count]['date'] = $meta->value;
                        $f2f_info[$count]['quantity'] = $product_quantity;
                    }
                }
            }
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['learner_information'])){
        $product_id     = explode('~', $selected_option)[0];
        $variation_id   = explode('~', $selected_option)[1];
        $product_name   = get_the_title($product_id);
        $variation_name = get_the_title($variation_id);
        $course_info    = $product_name .' - '.$variation_name;
        
        $info_content = '<p>'.$course_info.'</p>';
        foreach($_POST['info'] as $key => $value){
            $info_content .= "<p><b>Name</b> ".$value['person_title'].": ".$value['first_name']." ".$value['last_name']."</p>";
            $info_content .= "<p><b>Phone</b> ".$value['phone']."</p>";
            $info_content .= "<p><b>Email</b> ".$value['email']."</p>";
            $info_content .= "<p><b>Date of Birth</b> ".$value['date_of_birth']."</p>";
            $info_content .= "<p><b>Profession</b> ".$value['profession']."</p>";
            $info_content .= "<p><b>Address</b> ".$value['billing_address_1'].', '.$value['billing_postcode'].', '.$value['billing_city'].', '.$value['billing_country']."</p>";
            $learner_info = array(
                'course_info'       => $course_info,
                'product_id'        => $product_id,
                'variation_id'      => $variation_id,
                'person_title'      => $value['person_title'],
                'first_name'        => $value['first_name'],
                'last_name'         => $value['last_name'],
                'phone'             => $value['phone'],
                'email'             => $value['email'],
                'date_of_birth'     => $value['date_of_birth'],
                'profession'        => $value['profession'],
                'billing_country'   => $value['billing_country'],
                'billing_address_1' => $value['billing_address_1'],
                'billing_city'      => $value['billing_city'],
                'billing_postcode'  => $value['billing_postcode'],
            );
            $existing_learners = get_post_meta($order_id, 'learners', true);
            if( !is_array($existing_learners) ) {
                $existing_learners = array();
            }
            $existing_learners[] = $learner_info;
            update_post_meta($order_id, 'learners', $existing_learners);
        }
        echo "<h3 class='text-center'>Thanks for adding ".count($existing_learners)." Learners information</h3>";

        $to = 'info@lead-academy.org';
        $subject = 'Learner Information Received Order #'.$order_id;
        $headers = array('Content-Type: text/html; charset=UTF-8');
        wp_mail($to, $subject, $info_content, $headers);

    }
}
// echo "<pre>";
// print_r($f2f_info);
// echo "</pre>";
?>

<script>
    function learnerInformation(){
        return {
            currentId: 1,
            fromTitle: "Learner Information Form",
            country_list: [{value:"AF", label:"Afghanistan"},{value:"AX", label:"Aland Islands"},{value:"AL", label:"Albania"},{value:"DZ", label:"Algeria"},{value:"AS", label:"American Samoa"},{value:"AD", label:"Andorra"},{value:"AO", label:"Angola"},{value:"AI", label:"Anguilla"},{value:"AQ", label:"Antarctica"},{value:"AG", label:"Antigua and Barbuda"},{value:"AR", label:"Argentina"},{value:"AM", label:"Armenia"},{value:"AW", label:"Aruba"},{value:"AU", label:"Australia"},{value:"AT", label:"Austria"},{value:"AZ", label:"Azerbaijan"},{value:"BS", label:"Bahamas"},{value:"BH", label:"Bahrain"},{value:"BD", label:"Bangladesh"},{value:"BB", label:"Barbados"},{value:"BY", label:"Belarus"},{value:"BE", label:"Belgium"},{value:"BZ", label:"Belize"},{value:"BJ", label:"Benin"},{value:"BM", label:"Bermuda"},{value:"BT", label:"Bhutan"},{value:"BO", label:"Bolivia"},{value:"BQ", label:"Bonaire, Sint Eustatius And Saba"},{value:"BA", label:"Bosnia and Herzegovina"},{value:"BW", label:"Botswana"},{value:"BV", label:"Bouvet Island"},{value:"IO", label:"Br. Indian Ocean Ter."},{value:"BR", label:"Brazil"},{value:"BN", label:"Brunei Darussalam"},{value:"BG", label:"Bulgaria"},{value:"BF", label:"Burkina Faso"},{value:"BI", label:"Burundi"},{value:"KH", label:"Cambodia"},{value:"CM", label:"Cameroon"},{value:"CA", label:"Canada"},{value:"CV", label:"Cape Verde"},{value:"KY", label:"Cayman Islands"},{value:"CF", label:"Central African Rep."},{value:"TD", label:"Chad"},{value:"CL", label:"Chile"},{value:"CN", label:"China"},{value:"CX", label:"Christmas Island"},{value:"CC", label:"Cocos (Keeling) Islands"},{value:"CO", label:"Colombia"},{value:"KM", label:"Comoros"},{value:"CD", label:"Congo (Dem. Rep.)"},{value:"CG", label:"Congo (Rep.)"},{value:"CK", label:"Cook Islands"},{value:"CR", label:"Costa Rica"},{value:"CI", label:"Côte d'Ivoire"},{value:"HR", label:"Croatia"},{value:"CU", label:"Cuba"},{value:"CW", label:"Curacao"},{value:"CY", label:"Cyprus"},{value:"CZ", label:"Czech Republic"},{value:"DK", label:"Denmark"},{value:"DJ", label:"Djibouti"},{value:"DM", label:"Dominica"},{value:"DO", label:"Dominican Republic"},{value:"EC", label:"Ecuador"},{value:"EG", label:"Egypt"},{value:"SV", label:"El Salvador"},{value:"GQ", label:"Equatorial Guinea"},{value:"ER", label:"Eritrea"},{value:"EE", label:"Estonia"},{value:"ET", label:"Ethiopia"},{value:"FK", label:"Falkland Is. (Malvinas)"},{value:"FO", label:"Faröe Islands"},{value:"FJ", label:"Fiji"},{value:"FI", label:"Finland"},{value:"FR", label:"France"},{value:"GF", label:"French Guiana"},{value:"PF", label:"French Polynesia"},{value:"TF", label:"French Southern Territories"},{value:"GA", label:"Gabon"},{value:"GM", label:"Gambia"},{value:"GE", label:"Georgia"},{value:"DE", label:"Germany"},{value:"GH", label:"Ghana"},{value:"GI", label:"Gibraltar"},{value:"GR", label:"Greece"},{value:"GL", label:"Greenland"},{value:"GD", label:"Grenada"},{value:"GP", label:"Guadeloupe"},{value:"GU", label:"Guam"},{value:"GT", label:"Guatemala"},{value:"GG", label:"Guernsey"},{value:"GN", label:"Guinea"},{value:"GW", label:"Guinea-Bissau"},{value:"GY", label:"Guyana"},{value:"HT", label:"Haiti"},{value:"HM", label:"Heard Island and McDonald Islands"},{value:"HN", label:"Honduras"},{value:"HK", label:"Hong Kong"},{value:"HU", label:"Hungary"},{value:"IS", label:"Iceland"},{value:"IN", label:"India"},{value:"ID", label:"Indonesia"},{value:"IR", label:"Iran"},{value:"IQ", label:"Iraq"},{value:"IE", label:"Ireland"},{value:"IM", label:"Isle of Man"},{value:"IL", label:"Israel"},{value:"IT", label:"Italy"},{value:"JM", label:"Jamaica"},{value:"JP", label:"Japan"},{value:"JE", label:"Jersey"},{value:"JO", label:"Jordan"},{value:"KZ", label:"Kazakhstan"},{value:"KE", label:"Kenya"},{value:"KI", label:"Kiribati"},{value:"KP", label:"Korea (Dem. Rep.)"},{value:"KR", label:"Korea (Rep.)"},{value:"KW", label:"Kuwait"},{value:"KG", label:"Kyrgyzstan"},{value:"LA", label:"Laos"},{value:"LV", label:"Latvia"},{value:"LB", label:"Lebanon"},{value:"LS", label:"Lesotho"},{value:"LR", label:"Liberia"},{value:"LY", label:"Libya"},{value:"LI", label:"Liechtenstein"},{value:"LT", label:"Lithuania"},{value:"LU", label:"Luxembourg"},{value:"MO", label:"Macao"},{value:"MK", label:"Macedonia, TFYR"},{value:"MG", label:"Madagascar"},{value:"MW", label:"Malawi"},{value:"MY", label:"Malaysia"},{value:"MV", label:"Maldives"},{value:"ML", label:"Mali"},{value:"MT", label:"Malta"},{value:"MH", label:"Marshall Islands"},{value:"MQ", label:"Martinique"},{value:"MR", label:"Mauritania"},{value:"MU", label:"Mauritius"},{value:"YT", label:"Mayotte"},{value:"MX", label:"Mexico"},{value:"FM", label:"Micronesia"},{value:"MD", label:"Moldova"},{value:"MC", label:"Monaco"},{value:"MN", label:"Mongolia"},{value:"ME", label:"Montenegro"},{value:"MS", label:"Montserrat"},{value:"MA", label:"Morocco"},{value:"MZ", label:"Mozambique"},{value:"MM", label:"Myanmar"},{value:"NA", label:"Namibia"},{value:"NR", label:"Nauru"},{value:"NP", label:"Nepal"},{value:"NL", label:"Netherlands"},{value:"NC", label:"New Caledonia"},{value:"NZ", label:"New Zealand"},{value:"NI", label:"Nicaragua"},{value:"NE", label:"Niger"},{value:"NG", label:"Nigeria"},{value:"NU", label:"Niue"},{value:"NF", label:"Norfolk Island"},{value:"MP", label:"Northern Mariana Islands"},{value:"NO", label:"Norway"},{value:"OM", label:"Oman"},{value:"PK", label:"Pakistan"},{value:"PW", label:"Palau"},{value:"PS", label:"Palestinian Territory"},{value:"PA", label:"Panama"},{value:"PG", label:"Papua New Guinea"},{value:"PY", label:"Paraguay"},{value:"PE", label:"Peru"},{value:"PH", label:"Philippines"},{value:"PN", label:"Pitcairn"},{value:"PL", label:"Poland"},{value:"PT", label:"Portugal"},{value:"PR", label:"Puerto Rico"},{value:"QA", label:"Qatar"},{value:"RE", label:"Réunion"},{value:"RO", label:"Romania"},{value:"RU", label:"Russia"},{value:"RW", label:"Rwanda"},{value:"GS", label:"S. Georgia and S. Sandwich"},{value:"SH", label:"Saint Helena"},{value:"LC", label:"Saint Lucia"},{value:"MF", label:"Saint Martin"},{value:"PM", label:"Saint Pierre and Miquelon"},{value:"BL", label:"Saint-Barthélemy"},{value:"WS", label:"Samoa"},{value:"SM", label:"San Marino"},{value:"ST", label:"Sao Tomé and Principe"},{value:"SA", label:"Saudi Arabia"},{value:"SN", label:"Senegal"},{value:"RS", label:"Serbia"},{value:"SC", label:"Seychelles"},{value:"SL", label:"Sierra Leone"},{value:"SG", label:"Singapore"},{value:"SX", label:"Sint Maarten"},{value:"SK", label:"Slovakia"},{value:"SI", label:"Slovenia"},{value:"SB", label:"Solomon Islands"},{value:"SO", label:"Somalia"},{value:"ZA", label:"South Africa"},{value:"SS", label:"South Sudan"},{value:"ES", label:"Spain"},{value:"LK", label:"Sri Lanka"},{value:"KN", label:"St. Kitts and Nevis"},{value:"VC", label:"St. Vincent and Grenadines"},{value:"SD", label:"Sudan"},{value:"SR", label:"Suriname"},{value:"SJ", label:"Svalbard and Jan Mayen"},{value:"SZ", label:"Swaziland"},{value:"SE", label:"Sweden"},{value:"CH", label:"Switzerland"},{value:"SY", label:"Syria"},{value:"TW", label:"Taiwan"},{value:"TJ", label:"Tajikistan"},{value:"TZ", label:"Tanzania"},{value:"TH", label:"Thailand"},{value:"TL", label:"Timor-Leste"},{value:"TG", label:"Togo"},{value:"TK", label:"Tokelau"},{value:"TO", label:"Tonga"},{value:"TT", label:"Trinidad and Tobago"},{value:"TN", label:"Tunisia"},{value:"TR", label:"Turkey"},{value:"TM", label:"Turkmenistan"},{value:"TC", label:"Turks and Caicos Is."},{value:"TV", label:"Tuvalu"},{value:"UG", label:"Uganda"},{value:"UA", label:"Ukraine"},{value:"AE", label:"United Arab Emirates"},{value:"UK", label:"United Kingdom"},{value:"UM", label:"United States Minor Outlying Islands"},{value:"US", label:"United States of America"},{value:"VI", label:"United States Virgin Islands"},{value:"UY", label:"Uruguay"},{value:"UZ", label:"Uzbekistan"},{value:"VU", label:"Vanuatu"},{value:"VA", label:"Vatican City"},{value:"VE", label:"Venezuela"},{value:"VN", label:"Viet Nam"},{value:"VG", label:"Virgin Islands, British"},{value:"WF", label:"Wallis and Futuna"},{value:"EH", label:"Western Sahara"},{value:"YE", label:"Yemen"},{value:"ZM", label:"Zambia"},{value:"ZW", label:"Zimbabwe"} ],
            formData: [
                {
                    title: "Learner Information ",
                    id: 1,
                    person_title: "Mr",
                    first_name: "",
                    last_name: "",
                    phone: "",
                    email: "",
                    date_of_birth: "",
                    profession: "",
                    billing_country: "UK",
                    billing_address_1: "",
                    billing_city:"",
                    billing_postcode: "",
                    canShowAddress: false,
                    selectedAddress: "",
                    addresses: [],
                    isProcessing: false
                }
            ],
            addMoreLearner: function (){
                const self = this;
                self.currentId++;
                self.formData.push({
                    title: "Learner Information ",
                    id: self.currentId,
                    person_title: "Mr",
                    first_name: "",
                    last_name: "",
                    phone: "",
                    email: "",
                    date_of_birth: "",
                    profession: "",
                    billing_country: "UK",
                    billing_address_1: "",
                    billing_city:"",
                    billing_postcode: "",
                    canShowAddress: false,
                    selectedAddress: "",
                    addresses: [],
                    isProcessing: false
                })
            },
            init: function (){
                this.$watch('formData',(watchFormData) => {
                    for (let i = 0; i < watchFormData.length; i++) {
                        if ((i+1) !== watchFormData[i].id){
                            console.log(watchFormData[i].id);
                            watchFormData[i].id = i+1;

                        }
                    }
                });
            },
            apiKey: "PCWP7-STA3L-8X8CK-ZB7HB",
            search: function (index){
                const self = this;
                const formItem = self.formData[index];
                const endpoint = "https://ws.postcoder.com/pcw/" + self.apiKey + "/address/";
                const postCode = formItem.billing_postcode.trim();
                let searchterm = encodeURIComponent(postCode);
                if (postCode.length < 1) {
                    console.error("No search term entered.");
                    return;
                }

                const page = 0;
                const addresslines = 1;
                const country = formItem.billing_country.trim();
                const url =  endpoint +
                    country +
                    "/" +
                    searchterm +
                    "?lines=" +
                    addresslines +
                    "&page=" +
                    page +
                    "&exclude=" +
                    (country === "US"
                        ? "dependentlocality,posttown,state,stateabbreviation,postcode,country"
                        : "organisation,posttown,county,postcode,country");

                formItem.addresses = [];
                formItem.selectedAddress = "";
                formItem.isProcessing = true;

                fetch(
                    url
                )
                    .then(response => {
                        if (!response.ok) {
                            throw response;
                        }
                        return response.json();
                    })
                    .then(json => {
                        formItem.canShowAddress = true;
                        formItem.addresses = json;
                        formItem.isProcessing = false;
                        //console.log(json);
                    })
                    .catch(err => {
                        if (typeof err.text === "function") {
                            err.text().then(errorMessage => {
                                console.log(
                                    "Postcoder request error " +
                                    err.status +
                                    " : " +
                                    errorMessage
                                );
                            });
                        } else {
                            console.log(err);
                        }
                        formItem.isProcessing = false;
                    });
            },
            autoComplete: function (index){
                const self = this;
                const formItem = self.formData[index];
                const selectedAddressIndex = formItem.selectedAddress;
                if (selectedAddressIndex !== ""){
                    const selectedAddress = formItem.addresses[selectedAddressIndex];

                    formItem.billing_address_1 = selectedAddress.addressline1;
                    formItem.billing_city = selectedAddress.posttown;
                    formItem.billing_postcode = selectedAddress.postcode;
                } else {
                    formItem.billing_address_1 = "";
                    formItem.billing_city = "";
                    formItem.billing_postcode = "";
                }
            }
        };
    }
</script>
<style>
    .la-primary-btn {
        background: #AF1F47;
        color: #ffffff;
        border-radius: 5px;
        font-weight: 600;
        padding: 10px;
        border: 2px solid #AF1F47;
    }
    .la-primary-btn:hover, .la-primary-btn:active , .la-primary-btn:focus  {
        background: #9d1039;
        border: 2px solid #9d1039;
    }
    .person_title > label{
        text-wrap: nowrap;
    }
    .person_title > select{
        padding: 12px;
    }
</style>
<?php
if ( $order  && $count > 0 ) {
?>
<form method="post">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10">
                <div x-data="learnerInformation()" class="my-4">
                    <h3 class="text-center" x-text="fromTitle"></h3>
                    <label for="course" class="form-label">Select Course from the list:</label>
                    <select name="course" class="form-select text-center mb-3" id="course">
                        <?php
                        foreach ($f2f_info as $key => $value) {
                            echo '<option value='.$value['product_id'].'~'.$value['variation_id'].'>'. $value['product_name'].' - '.$value['date']. '</option>';
                        }
                        ?>
                    </select>
                    <input type="hidden" name="learner_information" />
                    <template x-for="(item, itemIndex) in formData">
                        <div class="mb-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 x-text="`${item.title} ${item.id}`"></h3>
                                <template x-if="item.id != '1'">
                                    <button @click="formData.splice(itemIndex, 1)" type="button" class="la-primary-btn">Remove</button>
                                </template>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="mb-3 person_title">
                                        <label class="form-label">Select Title <span style="color: red;"> *</span></label>
                                        <select class="select form-select" x-model.trim()="item.person_title" :name="`info[${item.id}][person_title]`" required>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Dr">Dr</option>>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">First name <span style="color: red;"> *</span></label>
                                        <input class="form-control" type="text" x-model.trim()="item.first_name" :name="`info[${item.id}][first_name]`" placeholder="Enter first Name"  required />
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Last name <span style="color: red;"> *</span></label>
                                        <input class="form-control" type="text" x-model.trim()="item.last_name" :name="`info[${item.id}][last_name]`" placeholder="Enter Last Name"  required />
                                    </div>
                                </div>

                            </div>


                            <div class="mb-3">
                                <label class="form-label">Phone Number <span style="color: red;">*</span></label>
                                <input class="form-control" type="text"  x-model.trim()="item.phone" :name="`info[${item.id}][phone]`" placeholder="Enter phone"  required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address (You will receive login details on this email) <span style="color: red;"> *</span></label>
                                <input class="form-control" type="email"   x-model.trim()="item.email" :name="`info[${item.id}][email]`" placeholder="Enter Email" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date Of Birth (eg. 2004-03-31) [Needed For Certification/Registration] <span style="color: red;"> *</span></label>
                                <input class="form-control" type="text"   x-model.trim()="item.date_of_birth" :name="`info[${item.id}][date_of_birth]`" placeholder="2004-03-31" required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Current Profession <span style="color: red;"> *</span></label>
                                <input class="form-control" type="text" x-model.trim()="item.profession"  :name="`info[${item.id}][profession]`" placeholder="Enter Profession" required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Country / Region <span style="color: red;"> *</span></label>
                                <select class="select form-select" x-model.trim()="item.billing_country" :name="`info[${item.id}][billing_country]`" required>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Sint Eustatius And Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="IO">Br. Indian Ocean Ter.</option>
                                    <option value="BR">Brazil</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Rep.</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CD">Congo (Dem. Rep.)</option>
                                    <option value="CG">Congo (Rep.)</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Côte d'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Is. (Malvinas)</option>
                                    <option value="FO">Faröe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea (Dem. Rep.)</option>
                                    <option value="KR">Korea (Rep.)</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao</option>
                                    <option value="MK">Macedonia, TFYR</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PS">Palestinian Territory</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Réunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="GS">S. Georgia and S. Sandwich</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="MF">Saint Martin</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="BL">Saint-Barthélemy</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tomé and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SX">Sint Maarten</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="KN">St. Kitts and Nevis</option>
                                    <option value="VC">St. Vincent and Grenadines</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syria</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Is.</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="UK" selected>United Kingdom</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="US">United States of America</option>
                                    <option value="VI">United States Virgin Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VA">Vatican City</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands, British</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Street address <span style="color: red;"> *</span></label>
                                <input class="form-control" type="text" x-model.trim()="item.billing_address_1"  :name="`info[${item.id}][billing_address_1]`" placeholder="Enter street address" required />
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Town / City <span style="color: red;"> *</span></label>
                                <input class="form-control" type="text" x-model.trim()="item.billing_city"  :name="`info[${item.id}][billing_city]`" placeholder="Enter City" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Postcode <span style="color: red;"> *</span></label>
                                <input class="form-control" type="text" x-model.trim()="item.billing_postcode"  :name="`info[${item.id}][billing_postcode]`" placeholder="Enter postcode" required />
                            </div>
                            <div class="mb-3">
                                <button @click="search(itemIndex)" class="la-primary-btn" type="button" :disabled="item.isProcessing">
                                <span x-show="item.isProcessing">
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    <span>Processing...</span>
                                </span>
                                    <span x-show="item.isProcessing == false">Search</span>
                                </button>

                            </div>

                            <div class="mb-3">
                                <template x-if="item.canShowAddress && item.addresses.length > 0">
                                    <div>
                                        <select x-model.trim()="item.selectedAddress" @change="autoComplete(itemIndex)" class="form-select select">
                                            <option value="">Select an address</option>
                                            <template x-for="(address, addressIndex) in item.addresses">
                                                <option :value="addressIndex" x-text="address.summaryline"></option>
                                            </template>
                                        </select>
                                    </div>
                                </template>
                                <template x-if="item.canShowAddress && item.addresses.length < 1 && item.isProcessing == false ">
                                    <div>Address not found, please enter manually.</div>
                                </template>
                            </div>
                        </div>
                    </template>
                    <div class="d-flex justify-content-between align-items-center">
                        <button @click="addMoreLearner" class="la-primary-btn" type="button">Add More Learner</button>
                        <button type="submit" class="la-primary-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
}else{
    echo "<h3 class='text-center'>Something is wrong !</h3>";
}
get_footer();
?>