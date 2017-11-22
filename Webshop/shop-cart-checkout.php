<?php
include "dbconfig.php";
session_start();

$shopping_cart = unserialize($_COOKIE["shopping_cart"]);
foreach ($_SESSION['shopping_cart'] as $product_id->$quantity) {
    echo "product_id".$product_id . "<br> quantity = " . $quantity . "<br>";         
}

$number_of_items = $_SESSION["number_of_items"];
echo "number_of_items = " . $number_of_items . "<br>";
echo "count = " . $count($_SESSION['shopping_cart']) . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Checkout | Bravana - Responsive Website Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive Website Template">
        <meta name="author" content="The Develovers">
        <!-- CORE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/elegant-icons.css" rel="stylesheet" type="text/css">
        <!-- THEME CSS -->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css">
        <!-- SHOP CSS -->
        <link href="assets/css/main-shop.css" rel="stylesheet" type="text/css">
        <!-- YOUR CUSTOM CSS -->
        <link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:700,400,400italic,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,300,300italic' rel='stylesheet' type='text/css'>
        <!-- FAVICONS -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/bravana144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/bravana114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/bravana72.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/bravana57.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
<?php include "header.php"; ?>
            <!-- PAGE CONTENT -->
            <div class="page-content">
                <div class="container">
                    <h1 class="margin-bottom-50">Checkout</h1>
                    <div id="checkout-wizard" class="wizard-center">
                        <div class="steps-container">
                            <ul class="list-inline steps">
                                <li data-step="1" data-name="shopping-cart" class="active"><span class="step-number">1</span> <span class="title">Shopping Cart</span></li>
                                <li data-step="2" data-name="shipping"><span class="step-number">2</span><span class="title"> Shipping</span></li>
                                <li data-step="3" data-name="payment"><span class="step-number">3</span><span class="title"> Payment</span></li>
                            </ul>
                        </div>
                        <div class="step-content">
                            <!-- SHOPPING CART -->
                            <div class="step-pane active" data-step="1">
                                <h2 class="sr-only">Shopping Cart</h2>
                                <form action="#" id="form1">
                                    <table class="table shopping-cart-table">
                                        <thead>
                                            <tr>
                                                <th>PRODUCTS</th>
                                                <th>PRICE</th>
                                                <th>QUANTITY</th>
                                                <th>TOTAL</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php while ($row = $result->fetch_assoc()) { ?>
                                                <tr>
                                                    <td class="item">
                                                        <div class="media">
                                                            <span class="media-left">
                                                                <img src= <?php echo $row["image_thumb"] ?> class="product-image" alt="Product Image">
                                                            </span>
                                                            <div class="media-body">
                                                                <a href="#" class="product-title"><?php echo $row["name"] ?></a>
                                                                <span class="brief-desc"><?php echo $row["description"] ?></span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="unit-price"><?php echo $row["price"] ?></td>
                                                    <td class="qty">
                                                        <input type="number" name="product1Qty" min="1" max="9999999" value=<?php echo "66666" ?> class="form-control input-sm qty-spinner input-number_noSpinners">
                                                    </td>
                                                    <td class="total-price">$135</td>
                                                    <td class="remove">
                                                        <button type="button" class="btn btn-link btn-remove" title="Remove this item"><i class="fa fa-remove"></i></button>
                                                    </td>
                                                </tr>
<?php } ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div class="shopping-cart-bottom">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group coupon">
                                                    <p>Enter your coupon/promo/voucher code</p>
                                                    <label for="input-coupon-code" class="coupon-label pull-left">COUPON CODE:</label>
                                                    <div class="input-group input-group-coupon">
                                                        <input type="text" class="form-control" id="input-coupon-code">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-apply-coupon" type="button">APPLY</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <table class="table shopping-cart-summary text-right">
                                                    <tbody>
                                                        <tr>
                                                            <td>Subtotal</td>
                                                            <td>$215</td>
                                                        <tr>
                                                            <td>Coupon <span class="badge">SUMMERPROMO</span></td>
                                                            <td class="discount">- $5</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Total</strong></td>
                                                            <td class="grand-total"><strong>$210</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END SHOPPING CART -->
                            <!-- SHIPPING -->
                            <div class="step-pane" data-step="2">
                                <h2 class="sr-only">Shipping</h2>
                                <p>Proactively streamline world-class experiences without front-end networks. Progressively utilize quality e-services via front-end processes. Conveniently re-engineer client-based mindshare vis-a-vis optimal synergy.</p>
                                <br>
                                <form class="form-horizontal margin-bottom-50px form-billing-shipping" id="form2" data-parsley-validate novalidate>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="billing-address">
                                                <h3>BILLING ADDRESS</h3>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="firstname" class="control-label sr-only">First Name</label>
                                                            <input type="text" class="form-control" id="firstname" placeholder="First Name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address1" class="control-label sr-only">Address Line 1</label>
                                                            <input type="text" class="form-control" id="address1" placeholder="Address Line 1" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="city" class="control-label sr-only">City</label>
                                                            <input type="text" class="form-control" id="city" placeholder="City">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label sr-only">Country</label>
                                                            <select name="country" class="form-control" required data-parsley-error-message="Please select your country">
                                                                <option value="">-- Select Country --</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AX">Åland Islands</option>
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
                                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="BA">Bosnia and Herzegovina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">Côte d'Ivoire</option>
                                                                <option value="HR">Croatia</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CW">Curaçao</option>
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
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
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
                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran, Islamic Republic of</option>
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
                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macao</option>
                                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MD">Moldova, Republic of</option>
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
                                                                <option value="PS">Palestinian Territory, Occupied</option>
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
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="BL">Saint Barthélemy</option>
                                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint Lucia</option>
                                                                <option value="MF">Saint Martin (French part)</option>
                                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="RS">Serbia</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                                <option value="SK">Slovakia</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                <option value="SS">South Sudan</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan, Province of China</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TL">Timor-Leste</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="US">United States</option>
                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands, British</option>
                                                                <option value="VI">Virgin Islands, U.S.</option>
                                                                <option value="WF">Wallis and Futuna</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="lastname" class="control-label sr-only">Last Name</label>
                                                            <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="address2" class="control-label sr-only">Address Line 2</label>
                                                            <input type="text" class="form-control" id="address2" placeholder="Address Line 2">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="zipcode" class="control-label sr-only">Zip Code</label>
                                                            <input type="text" class="form-control" id="zipcode" placeholder="Zip Code">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone" class="control-label sr-only">Phone</label>
                                                            <input type="text" class="form-control" id="phone" placeholder="Phone" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="shipping-address">
                                                <h3>SHIPPING ADDRESS</h3>
                                                <label class="fancy-checkbox">
                                                    <input type="checkbox" id="sameAsBilling">
                                                    <span>Same as billing address</span>
                                                </label>
                                                <div id="shipping-inputs" class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="shp-firstname" class="control-label sr-only">First Name</label>
                                                            <input type="text" class="form-control" id="shp-firstname" placeholder="First Name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="shp-address1" class="control-label sr-only">Address Line 1</label>
                                                            <input type="text" class="form-control" id="shp-address1" placeholder="Address Line 1" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="shp-city" class="control-label sr-only">City</label>
                                                            <input type="text" class="form-control" id="shp-city" placeholder="City">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label sr-only">Country</label>
                                                            <select name="country" id="shp-country" class="form-control" required data-parsley-error-message="Please select your country">
                                                                <option value="">-- Select Country --</option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AX">Åland Islands</option>
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
                                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="BA">Bosnia and Herzegovina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">Côte d'Ivoire</option>
                                                                <option value="HR">Croatia</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CW">Curaçao</option>
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
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
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
                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran, Islamic Republic of</option>
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
                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macao</option>
                                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MD">Moldova, Republic of</option>
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
                                                                <option value="PS">Palestinian Territory, Occupied</option>
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
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="BL">Saint Barthélemy</option>
                                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint Lucia</option>
                                                                <option value="MF">Saint Martin (French part)</option>
                                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="RS">Serbia</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                                <option value="SK">Slovakia</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                <option value="SS">South Sudan</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan, Province of China</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TL">Timor-Leste</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="US">United States</option>
                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands, British</option>
                                                                <option value="VI">Virgin Islands, U.S.</option>
                                                                <option value="WF">Wallis and Futuna</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="shp-lastname" class="control-label sr-only">Last Name</label>
                                                            <input type="text" class="form-control" id="shp-lastname" placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="shp-address2" class="control-label sr-only">Address Line 2</label>
                                                            <input type="text" class="form-control" id="shp-address2" placeholder="Address Line 2">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="shp-zipcode" class="control-label sr-only">Zip Code</label>
                                                            <input type="text" class="form-control" id="shp-zipcode" placeholder="Zip Code">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="shp-phone" class="control-label sr-only">Phone</label>
                                                            <input type="text" class="form-control" id="shp-phone" placeholder="Phone" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <!-- END SHIPPING -->
                            <!-- PAYMENT -->
                            <div class="step-pane" data-step="3">
                                <h2 class="sr-only">Payment</h2>
                                <form id="form-payment" class="form-horizontal left-aligned" data-parsley-validate novalidate>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="payment-method">
                                                <h3>PAYMENT METHOD</h3>
                                                <label class="fancy-radio payment-option option-credit-card">
                                                    <input type="radio" name="payment-method" id="radio-credit-card" checked="checked">
                                                    <span><i></i> <span><i class="fa fa-credit-card"></i> Credit Card</span></span>
                                                </label>
                                                <div class="credit-card-box">
                                                    <p class="header-message"><i class="fa fa-lock"></i> This is a secure 128-bit SSL Encrypted payment. You are safe.</p>
                                                    <div class="credit-card-inputs">
                                                        <div class="form-group">
                                                            <label for="inputCardName" class="col-sm-4 control-label">Name on Card</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="inputCardName" required>
                                                                <p class="help-block"><em>As it appears on your card</em></p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputCardNumber" class="col-sm-4 control-label">Card Number</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="inputCardNumber" data-parsley-type="number" required>
                                                                <p class="help-block"><em>No dashes or spaces</em></p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-4 control-label">Expiration Date</label>
                                                            <div class="col-sm-8">
                                                                <select name="expiryMonth" id="inputExpiryMonth" class="form-control" data-parsley-error-message="Please specify month" data-parsley-errors-container="#error-expiry" required>
                                                                    <option value="">Month</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                    <option value="08">08</option>
                                                                    <option value="09">09</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select> <span class="date-separator">/</span>
                                                                <select name="expiryYear" id="inputExpiryYear" class="form-control" data-parsley-error-message="Please specify year" data-parsley-errors-container="#error-expiry" required>
                                                                    <option value="">Year</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                </select>
                                                                <span id="error-expiry"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputSecurityCode" class="col-sm-4 control-label">Security Code</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control input-security-code" id="inputSecurityCode" data-parsley-type="number" data-parsley-errors-container="#error-security-code" required> <img src="assets/img/shop/payments/credit-card.png" class="img-security-code" alt="Security Code">
                                                                <div class="clearfix"></div>
                                                                <span id="error-security-code"></span>
                                                                <p class="help-block"><em>The last 3 digits displayed on the back of your credit card</em></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label class="fancy-radio payment-option option-paypal">
                                                    <input type="radio" name="payment-method" id="radio-paypal">
                                                    <span><i></i> <span><i class="fa fa-paypal"></i> Paypal</span></span>
                                                </label>
                                                <div class="paypal-input hide-first">
                                                    <div class="form-group">
                                                        <label for="inputPaypalEmail" class="col-sm-3 control-label">Email Address</label>
                                                        <div class="col-sm-6">
                                                            <input type="email" class="form-control" id="inputPaypalEmail">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-md-offset-2">
                                            <div class="payment-summary">
                                                <h3>SUMMARY</h3>
                                                <p>Below is the summary of your purchase</p>
                                                <table class="table payment-summary-table">
                                                    <tbody>
                                                        <tr>
                                                            <td>Subtotal</td>
                                                            <td>$215.25</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Coupon <span class="badge">SUMMERPROMO</span></td>
                                                            <td class="discount">- $5</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping</td>
                                                            <td>$0</td>
                                                        </tr>
                                                        <tr class="row-total">
                                                            <td>Total</td>
                                                            <td>$210.25</td>
                                                        </tr>
                                                        <tr class="row-payment-method">
                                                            <td>Payment Method</td>
                                                            <td>Credit Card
                                                                <br>xxxx-xxxx-xxxx-3456</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                <label class="fancy-checkbox">
                                                                    <input type="checkbox" name="checkTerms" data-parsley-trigger-after-failure="change" required data-parsley-error-message="You must agree with the terms &amp; conditions" data-parsley-errors-container="#error-terms">
                                                                    <span>I agree with <a href="#">Terms &amp; Conditions</a></span>
                                                                </label>
                                                                <p id="error-terms"></p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END PAYMENT -->
                        </div>
                        <!-- BUTTONS -->
                        <div class="actions">
                            <button id="btn-checkout-prev" type="button" class="btn btn-default btn-lg btn-prev hide-first"><i class="fa fa-arrow-circle-left"></i> <span>BACK</span></button>
                            <button id="btn-checkout-next" type="button" class="btn btn-primary btn-lg btn-next"><span>CHECKOUT</span><i class="fa fa-arrow-circle-right"></i></button>
                        </div>
                        <!-- END BUTTONS -->
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            <?php include "footer.php"; ?>
            <div class="back-to-top">
                <a href="#top"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>
        <!-- END WRAPPER -->
        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-2.1.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins/easing/jquery.easing.min.js"></script>
        <script src="assets/js/plugins/fuelux-wizard/wizard.js"></script>
        <script src="assets/js/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
        <script src="assets/js/plugins/parsley-validation/parsley.min.js"></script>
        <script src="assets/js/bravana.js"></script>
        <script src="assets/js/bravana-shop.js"></script>

    </body>

</html>
