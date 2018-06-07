<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="This is social network html5 template available in themeforest......" />
<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
<meta name="robots" content="index, follow" />
<title>Wowhubb | Your One Stop Event Networking Platform</title>

<!-- Stylesheets
    ================================================= -->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/ionicons.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url("assets/images/fav.png") ?>"/>
</head>
<body>

<!-- Header
    ================================================= -->
<header id="header-inverse">
  <nav class="navbar navbar-default menu">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        
        <a class="navbar-brand" href="index-register.html"><img src="<?php echo base_url('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; font-size:25px;">
          Join Wowhubb Network <br> <span style="font-size:13px; background:#e91e63; padding:5px 10px; border-radius:5px;">Enjoy Your Event Hosting Experience</span>
        </ul>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling --> 
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</header>
<!--Header End--> 

<!-- Landing Page Contents
    ================================================= -->
<div id="lp-register">
  <div class="container wrapper">
    <div class="row">
      <div class="col-sm-5">
        <div class="col-sm-12" style="margin-top:50px; margin-bottom:65px;">
          <div class="pull-left"><i class="fa fa-3x fa-calendar"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:23px; margin:0 15px; line-height:30px;">Your One Stop Events<br>
              Networking Platform</h1>
          </div>
        </div>
        <div class="col-sm-12" style="margin-bottom:65px;">
          <div class="pull-left"><i class="fa fa-3x fa-share-square"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:23px; margin:0 15px;  line-height:30px;">Create, Share & Advertise 
              Your <br>
              Personal / Professional Events</h1>
          </div>
        </div>
        <div class="col-sm-12" style="margin-bottom:65px;">
          <div class="pull-left"><i class="fa fa-3x fa-search"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:23px; margin:0 15px;  line-height:30px;">Search & Hire Your Professional <br>
              Local Events Services Providers<br>
              Near you</h1>
          </div>
        </div>
        <div class="col-sm-12" style="margin-bottom:65px;">
          <div class="pull-left"><i class="fa fa-3x fa-tags"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:23px; margin:0 15px;  line-height:30px;">Search & Book Your Next <br>
              Event Venue</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-sm-offset-1">
        <div class="reg-form-container"> 
          
          <!-- Register/Login Tabs-->
          <div class="reg-options">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
              <li><a href="#login" data-toggle="tab">Login</a></li>
            </ul>
            <!--Tabs End--> 
          </div>
          
          <!--Registration Form Contents-->
          <div class="tab-content">
            <div class="tab-pane active" id="register">
              <h3>Register with Wowhubb !!!</h3>
              <p class="text-muted">Enjoy Your Event Hosting Experience.</p>
              
              <!--Register Form-->
              <form action ="<?php echo base_url('Admin/reg_load'); ?>" name="registration_form" id="registration_form" class="form-inline" method="POST" >
                <div class="row">
                  <div class="form-group col-xs-6">
                    <label for="firstname" class="sr-only">First Name</label>
                    <input id="firstname" class="form-control input-group-lg" type="text" name="firstname" title="Enter first name" minlength="3" placeholder="First Name" required />
                  </div>
                  <div class="form-group col-xs-6">
                    <label for="lastname" class="sr-only">Last Name</label>
                    <input id="lastname" class="form-control input-group-lg" type="text" name="lastname" title="Enter last name" placeholder="Last name" required/>
                  </div>
                </div>
                 <div class="row">
                  <div class="form-group col-xs-12">
                    <label for="phone" class="sr-only">Phone Number</label>
                    <input id="txtPhone" pattern="^\+?\d{0,13}" class="form-control input-group-lg" type="text" name="pho_no" title="Enter phone number" placeholder="Your Phone Number" required/>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" class="form-control input-group-lg" type="email" name="Email" title="Enter Email" placeholder="Your Email" required/>
                  </div>
                </div>
               
                <div class="row">
                  <p class="birth"><strong>Date of Birth</strong></p>
                  <div class="form-group col-sm-3 col-xs-6">
                    <label for="month" class="sr-only"></label>
                    <select name="day" class="form-control" id="day" required="required" >
                      <option value="" disabled selected>Day</option>
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
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-3 col-xs-6">
                    <label for="month" class="sr-only"></label>
                    <select name="month" class="form-control" id="month" required>
                      <option value="" disabled selected>Month</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="year" class="sr-only"></label>
                    <select name="year" class="form-control" id="year" required>
                      <option value="" disabled selected>Year</option>
                      <option>2000</option>
                      <option>2001</option>
                      <option>2002</option>
                      <option>2004</option>
                      <option>2005</option>
                      <option>2006</option>
                      <option>2007</option>
                      <option>2008</option>
                      <option>2009</option>
                      <option>2010</option>
                      <option>2011</option>
                      <option>2012</option>
                    </select>
                  </div>
                </div>
                <div class="form-group gender">
                  <label class="radio-inline">
                    <input id="txtgender" type="radio" name="gender"  class="gender" value="male" required>
                    Male </label>
                  <label class="radio-inline">
                    <input id="txtgender" type="radio" name="gender"  class="gender" value="female" required>
                    Female </label>
                    
                </div>
                <div class="row">
                  <div class="form-group col-xs-6">
                    <label for="city" class="sr-only">City</label>
                    <input id="city" class="form-control input-group-lg reg_name" type="text" name="city" title="Enter city" placeholder="Your city"/>
                  </div>
                  <div class="form-group col-xs-6">
                    <label for="country" class="sr-only"></label>
                    <select  name="country" class="form-control" id="country" >
                      <option value="country" disabled selected>Country</option>
                      <option value="AFG">Afghanistan</option>
                      <option value="ALA">Greenland Islands</option>
                      <option value="ALB">Albania</option>
                      <option value="DZA">Algeria</option>
                      <option value="ASM">American Samoa</option>
                      <option value="AND">Andorra</option>
                      <option value="AGO">Angola</option>
                      <option value="AIA">Anguilla</option>
                      <option value="ATA">Antarctica</option>
                      <option value="ATG">Antigua and Barbuda</option>
                      <option value="ARG">Argentina</option>
                      <option value="ARM">Armenia</option>
                      <option value="ABW">Aruba</option>
                      <option value="AUS">Australia</option>
                      <option value="AUT">Austria</option>
                      <option value="AZE">Azerbaijan</option>
                      <option value="BHS">Bahamas</option>
                      <option value="BHR">Bahrain</option>
                      <option value="BGD">Bangladesh</option>
                      <option value="BRB">Barbados</option>
                      <option value="BLR">Belarus</option>
                      <option value="BEL">Belgium</option>
                      <option value="BLZ">Belize</option>
                      <option value="BEN">Benin</option>
                      <option value="BMU">Bermuda</option>
                      <option value="BTN">Bhutan</option>
                      <option value="BOL">Bolivia, Plurinational State of</option>
                      <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                      <option value="BIH">Bosnia and Herzegovina</option>
                      <option value="BWA">Botswana</option>
                      <option value="BVT">Bouvet Island</option>
                      <option value="BRA">Brazil</option>
                      <option value="IOT">British Indian Ocean Territory</option>
                      <option value="BRN">Brunei Darussalam</option>
                      <option value="BGR">Bulgaria</option>
                      <option value="BFA">Burkina Faso</option>
                      <option value="BDI">Burundi</option>
                      <option value="KHM">Cambodia</option>
                      <option value="CMR">Cameroon</option>
                      <option value="CAN">Canada</option>
                      <option value="CPV">Cape Verde</option>
                      <option value="CYM">Cayman Islands</option>
                      <option value="CAF">Central African Republic</option>
                      <option value="TCD">Chad</option>
                      <option value="CHL">Chile</option>
                      <option value="CHN">China</option>
                      <option value="CXR">Christmas Island</option>
                      <option value="CCK">Cocos (Keeling) Islands</option>
                      <option value="COL">Colombia</option>
                      <option value="COM">Comoros</option>
                      <option value="COG">Congo</option>
                      <option value="COD">Congo, the Democratic Republic of the</option>
                      <option value="COK">Cook Islands</option>
                      <option value="CRI">Costa Rica</option>
                      <option value="CIV">C�te d'Ivoire</option>
                      <option value="HRV">Croatia</option>
                      <option value="CUB">Cuba</option>
                      <option value="CUW">Cura�ao</option>
                      <option value="CYP">Cyprus</option>
                      <option value="CZE">Czech Republic</option>
                      <option value="DNK">Denmark</option>
                      <option value="DJI">Djibouti</option>
                      <option value="DMA">Dominica</option>
                      <option value="DOM">Dominican Republic</option>
                      <option value="ECU">Ecuador</option>
                      <option value="EGY">Egypt</option>
                      <option value="SLV">El Salvador</option>
                      <option value="GNQ">Equatorial Guinea</option>
                      <option value="ERI">Eritrea</option>
                      <option value="EST">Estonia</option>
                      <option value="ETH">Ethiopia</option>
                      <option value="FLK">Falkland Islands (Malvinas)</option>
                      <option value="FRO">Faroe Islands</option>
                      <option value="FJI">Fiji</option>
                      <option value="FIN">Finland</option>
                      <option value="FRA">France</option>
                      <option value="GUF">French Guiana</option>
                      <option value="PYF">French Polynesia</option>
                      <option value="ATF">French Southern Territories</option>
                      <option value="GAB">Gabon</option>
                      <option value="GMB">Gambia</option>
                      <option value="GEO">Georgia</option>
                      <option value="DEU">Germany</option>
                      <option value="GHA">Ghana</option>
                      <option value="GIB">Gibraltar</option>
                      <option value="GRC">Greece</option>
                      <option value="GRL">Greenland</option>
                      <option value="GRD">Grenada</option>
                      <option value="GLP">Guadeloupe</option>
                      <option value="GUM">Guam</option>
                      <option value="GTM">Guatemala</option>
                      <option value="GGY">Guernsey</option>
                      <option value="GIN">Guinea</option>
                      <option value="GNB">Guinea-Bissau</option>
                      <option value="GUY">Guyana</option>
                      <option value="HTI">Haiti</option>
                      <option value="HMD">Heard Island and McDonald Islands</option>
                      <option value="VAT">Holy See (Vatican City State)</option>
                      <option value="HND">Honduras</option>
                      <option value="HKG">Hong Kong</option>
                      <option value="HUN">Hungary</option>
                      <option value="ISL">Iceland</option>
                      <option value="IND">India</option>
                      <option value="IDN">Indonesia</option>
                      <option value="IRN">Iran, Islamic Republic of</option>
                      <option value="IRQ">Iraq</option>
                      <option value="IRL">Ireland</option>
                      <option value="IMN">Isle of Man</option>
                      <option value="ISR">Israel</option>
                      <option value="ITA">Italy</option>
                      <option value="JAM">Jamaica</option>
                      <option value="JPN">Japan</option>
                      <option value="JEY">Jersey</option>
                      <option value="JOR">Jordan</option>
                      <option value="KAZ">Kazakhstan</option>
                      <option value="KEN">Kenya</option>
                      <option value="KIR">Kiribati</option>
                      <option value="PRK">Korea, Democratic People's Republic of</option>
                      <option value="KOR">Korea, Republic of</option>
                      <option value="KWT">Kuwait</option>
                      <option value="KGZ">Kyrgyzstan</option>
                      <option value="LAO">Lao People's Democratic Republic</option>
                      <option value="LVA">Latvia</option>
                      <option value="LBN">Lebanon</option>
                      <option value="LSO">Lesotho</option>
                      <option value="LBR">Liberia</option>
                      <option value="LBY">Libya</option>
                      <option value="LIE">Liechtenstein</option>
                      <option value="LTU">Lithuania</option>
                      <option value="LUX">Luxembourg</option>
                      <option value="MAC">Macao</option>
                      <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                      <option value="MDG">Madagascar</option>
                      <option value="MWI">Malawi</option>
                      <option value="MYS">Malaysia</option>
                      <option value="MDV">Maldives</option>
                      <option value="MLI">Mali</option>
                      <option value="MLT">Malta</option>
                      <option value="MHL">Marshall Islands</option>
                      <option value="MTQ">Martinique</option>
                      <option value="MRT">Mauritania</option>
                      <option value="MUS">Mauritius</option>
                      <option value="MYT">Mayotte</option>
                      <option value="MEX">Mexico</option>
                      <option value="FSM">Micronesia, Federated States of</option>
                      <option value="MDA">Moldova, Republic of</option>
                      <option value="MCO">Monaco</option>
                      <option value="MNG">Mongolia</option>
                      <option value="MNE">Montenegro</option>
                      <option value="MSR">Montserrat</option>
                      <option value="MAR">Morocco</option>
                      <option value="MOZ">Mozambique</option>
                      <option value="MMR">Myanmar</option>
                      <option value="NAM">Namibia</option>
                      <option value="NRU">Nauru</option>
                      <option value="NPL">Nepal</option>
                      <option value="NLD">Netherlands</option>
                      <option value="NCL">New Caledonia</option>
                      <option value="NZL">New Zealand</option>
                      <option value="NIC">Nicaragua</option>
                      <option value="NER">Niger</option>
                      <option value="NGA">Nigeria</option>
                      <option value="NIU">Niue</option>
                      <option value="NFK">Norfolk Island</option>
                      <option value="MNP">Northern Mariana Islands</option>
                      <option value="NOR">Norway</option>
                      <option value="OMN">Oman</option>
                      <option value="PAK">Pakistan</option>
                      <option value="PLW">Palau</option>
                      <option value="PSE">Palestinian Territory, Occupied</option>
                      <option value="PAN">Panama</option>
                      <option value="PNG">Papua New Guinea</option>
                      <option value="PRY">Paraguay</option>
                      <option value="PER">Peru</option>
                      <option value="PHL">Philippines</option>
                      <option value="PCN">Pitcairn</option>
                      <option value="POL">Poland</option>
                      <option value="PRT">Portugal</option>
                      <option value="PRI">Puerto Rico</option>
                      <option value="QAT">Qatar</option>
                      <option value="REU">R�union</option>
                      <option value="ROU">Romania</option>
                      <option value="RUS">Russian Federation</option>
                      <option value="RWA">Rwanda</option>
                      <option value="BLM">Saint Barth�lemy</option>
                      <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                      <option value="KNA">Saint Kitts and Nevis</option>
                      <option value="LCA">Saint Lucia</option>
                      <option value="MAF">Saint Martin (French part)</option>
                      <option value="SPM">Saint Pierre and Miquelon</option>
                      <option value="VCT">Saint Vincent and the Grenadines</option>
                      <option value="WSM">Samoa</option>
                      <option value="SMR">San Marino</option>
                      <option value="STP">Sao Tome and Principe</option>
                      <option value="SAU">Saudi Arabia</option>
                      <option value="SEN">Senegal</option>
                      <option value="SRB">Serbia</option>
                      <option value="SYC">Seychelles</option>
                      <option value="SLE">Sierra Leone</option>
                      <option value="SGP">Singapore</option>
                      <option value="SXM">Sint Maarten (Dutch part)</option>
                      <option value="SVK">Slovakia</option>
                      <option value="SVN">Slovenia</option>
                      <option value="SLB">Solomon Islands</option>
                      <option value="SOM">Somalia</option>
                      <option value="ZAF">South Africa</option>
                      <option value="SGS">South Georgia and the South Sandwich Islands</option>
                      <option value="SSD">South Sudan</option>
                      <option value="ESP">Spain</option>
                      <option value="LKA">Sri Lanka</option>
                      <option value="SDN">Sudan</option>
                      <option value="SUR">Suriname</option>
                      <option value="SJM">Svalbard and Jan Mayen</option>
                      <option value="SWZ">Swaziland</option>
                      <option value="SWE">Sweden</option>
                      <option value="CHE">Switzerland</option>
                      <option value="SYR">Syrian Arab Republic</option>
                      <option value="TWN">Taiwan, Province of China</option>
                      <option value="TJK">Tajikistan</option>
                      <option value="TZA">Tanzania, United Republic of</option>
                      <option value="THA">Thailand</option>
                      <option value="TLS">Timor-Leste</option>
                      <option value="TGO">Togo</option>
                      <option value="TKL">Tokelau</option>
                      <option value="TON">Tonga</option>
                      <option value="TTO">Trinidad and Tobago</option>
                      <option value="TUN">Tunisia</option>
                      <option value="TUR">Turkey</option>
                      <option value="TKM">Turkmenistan</option>
                      <option value="TCA">Turks and Caicos Islands</option>
                      <option value="TUV">Tuvalu</option>
                      <option value="UGA">Uganda</option>
                      <option value="UKR">Ukraine</option>
                      <option value="ARE">United Arab Emirates</option>
                      <option value="GBR">United Kingdom</option>
                      <option value="USA">United States</option>
                      <option value="UMI">United States Minor Outlying Islands</option>
                      <option value="URY">Uruguay</option>
                      <option value="UZB">Uzbekistan</option>
                      <option value="VUT">Vanuatu</option>
                      <option value="VEN">Venezuela, Bolivarian Republic of</option>
                      <option value="VNM">Viet Nam</option>
                      <option value="VGB">Virgin Islands, British</option>
                      <option value="VIR">Virgin Islands, U.S.</option>
                      <option value="WLF">Wallis and Futuna</option>
                      <option value="ESH">Western Sahara</option>
                      <option value="YEM">Yemen</option>
                      <option value="ZMB">Zambia</option>
                      <option value="ZWE">Zimbabwe</option>
                    </select>
                  </div>
                </div>
              
              <!--Register Now Form Ends-->
              <p><a href="#">Already have an account?</a></p>
              <button type="submit" id="validate" class="btn btn-primary">Join Now</button>
            </div>
            </form>
            <!--Registration Form Contents Ends--> 
            
            <!--Login-->
            <div class="tab-pane" id="login">
              <h4 class="grey">Send OTP Code to</h4>
                  <form id="otp_form" action ="<?php echo base_url('First_controller/otp_verify'); ?>" class="contact-form">
                    <div class="form-group gender">

                      <label class="radio-inline">
                        <input type="radio" name="optradio" value="phone_no" checked="">Mobile Number
                        <input type="text" pattern="^\+?\d{0,13}" name="pho_no" title="Enter phone Number" placeholder="XXXXXXX256" required>
                      </label>
                      
                    </div>
                    <div class="form-group gender">

                      <label class="radio-inline">
                        <input type="radio" name="optradio" value="email" checked="">Email Address - XXXXXXXXX.danny@gmail.com
                      </label>
                      
                    </div>
                    
                                     
                  <button type ="submit" class="btn-primary">Continue</a></button>
                  </form>
                
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-6"> 
        
        <!--Social Icons-->
        <p style="color:#fff;"> By clicking the JOIN button you confirm that you have read and accepted our <a href="#">Terms of use</a>, <a href="#">Privacy policy</a> and <a href="#">Cookies use policy</a></p>
      </div>
    </div>
  </div>
</div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="footer-wrapper">
        <div class="col-md-3 col-sm-3">
          <h5>Join Wowhubb</h5>
          <ul class="footer-links">
            <li><a href="#">How it Works</a></li>
            <li><a href="#">Create your Wowhubb</a></li>
            <li><a href="#">Booking your Event Venue</a></li>
            <li><a href="#">Hire Event Services Professional</a></li>
            <li><a href="#">Wowhubb Mobile app</a></li>
            <li><a href="#">Wowhubb Event check-in app</a></li>
            <li><a href="#">Wowhubb Event Resources</a></li>
            <li><a href="#">Wowhubb Conference Manager</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3">
          <h5>Find Events</h5>
          <ul class="footer-links">
            <li><a href="#">Events Near me</a></li>
            <li><a href="#">Technology Based Events</a></li>
            <li><a href="#">Business Networking Events</a></li>
            <li><a href="#">Classes</a></li>
            <li><a href="#">Arts</a></li>
            <li><a href="#">Music</a></li>
            <li><a href="#">Food &amp; Drink</a></li>
            <li><a href="#">Parties</a></li>
            <li><a href="#">Religious</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3">
          <h5>Plan Events</h5>
          <ul class="footer-links">
            <li><a href="#">Event Management</a></li>
            <li><a href="#">Event Geotags</a></li>
            <li><a href="#">Non-profit </a></li>
            <li><a href="#">Event RSVP</a></li>
            <li><a href="#">Private Events</a></li>
            <li><a href="#">Public Events</a></li>
            <li><a href="#">Professional Events</a></li>
            <li><a href="#">Startup Events</a></li>
            <li><a href="#">Sell Tickets</a></li>
            <li><a href="#">Brand Services</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3">
          <h5>Contact Us</h5>
          <ul class="contact">
            <li><i class="icon ion-ios-telephone-outline"></i>1-713-482-7574</li>
            <li><i class="icon ion-ios-email-outline"></i>info@wowhubb.com</li>
            <li><i class="icon ion-ios-location-outline"></i>5800 Ranchester Dr #168, <br>Houston, TX 77036, USA</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright">
    <p>Copyright @Wowhubb 2017. All rights reserved</p>
  </div>
</footer>
<!--preloader-->
<div id="spinner-wrapper">
  <div class="spinner"></div>
</div>

<!-- Scripts
    ================================================= --> 
<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.appear.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.incremental-counter.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.form-validator.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.form-validator.min.js') ?>"></script>
 <script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>

 <!-- form validate using jquery -->

  <script>
//submit form using jquery


var base_url = '<?php echo base_url() ?>';

$(document).ready(function(){

$(document).on("submit", "#registration_form", function(e){
     e.preventDefault();
    var url = $(this).attr('action');
    var formdata = new FormData(this);
 //alert(url);
        $.ajax({
                url : url,
                method: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                dataType:'json',
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },
                success: function(response)
                {
                   if(response.success == 'success')
                   {
                     swal({
                          title:'Good job!',
                          text:'You are successfully Register!',
                          type:'success',
                          timer: 3000
                        });
                     // alert('success');
                       window.location.href = "<?php echo base_url('Admin/otp_page') ?>";
                   
                   }else 
                   {
                    swal(
                          'Sorry!',
                          'You email already exit!',
                          'error'
                        );
                    // alert('username or password is incorrectt!');
                   }
          

                }

            });


});

});

</script>

<script>
//submit otp form using jquery


var base_url = '<?php echo base_url() ?>';

$(document).ready(function(){

$(document).on("submit", "#otp_form", function(e){
     e.preventDefault();
    var url = $(this).attr('action');
    var formdata = new FormData(this);

    

 //alert(url);
        $.ajax({
                url : url,
                method: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                dataType:'json',
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal(
                          'Good job!',
                          'You clicked the button!',
                          'success'
                        );
                     window.location.href = "<?php echo base_url('Admin/login') ?>";
                   
                   }else if(response.status == 'Failed')
                   {
                    
                    alert('username or password is incorrect!');
                   }
          

                }

            });


});

});

</script>
<!-- form validation 
  <script>
  function ValidateRegister()
  {
    var name = document.registration_form.firstname;
    var lastname = document.registration_form.lastname;
    var email = document.registration_form.Email;
    var phone = document.registration_form.pho_no;
    var gender = document.registration_form.gender;
    var password = document.registration_form.password;

    if(name.value == "")
    {
      windows.alert("please enter your First Name");
      name.focus();
      return false;
    }
    if(name.value == "")
    {
      windows.alert("please enter your Last Name");
      name.focus();
      return false;
    }
    if (email.value == "")
    {
        alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    
    if (email.value.indexOf("@", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (email.value.indexOf(".", 0) < 0)
    {
        window.alert("Please enter a valid e-mail address.");
        email.focus();
        return false;
    }
    if (phone.value == "")
    {
        window.alert("Please enter your telephone number.");
        phone.focus();
        return false;
    }
    if (password.value.length < 6 )
    {
        window.alert("Please enter your password min six character.");
        phone.focus();
        return false;
    }
  }

  </script>-->
</body>


</html>
