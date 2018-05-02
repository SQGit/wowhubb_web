<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<title>Wowhubb | Your One Stop Event Networking Platform</title>

<!-- Stylesheets
    ================================================= -->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/ionicons.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
<!-- calender links -->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.datetimepicker.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/custom/css/form-wizard-blue.css') ?>">
<link rel="stylesheet" href="<?php echo base_url ('assets/css/theme-styles.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/animate.css')?>" />
<!-- file upload -->

<!-- CSS adjustments for browsers with JavaScript disabled -->

<!-- country database using js file -->
<script src="<?php echo base_url('assets/js/countries.js')?>"></script> 

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">

.textBox {
	background-image: url(./assets/images/designation-icon.png);
	background-position: 0 5px;
	background-size: 30px;
	background-repeat: no-repeat;
	padding-left: 17px;
}
.form-wizard img
{
	max-width:100%!important;
	max-height:152px!important;
}
/*popup close button  */
.large.tooltip-inner {
	max-width: 350px;
	width: 350px;
}
#footer {
	background: #fff;
	position: relative;
	top: 0px;
}
.btn-file {
	position: relative;
	overflow: hidden;
}
.form-body-classic .form-control {
	margin: 0;
	padding: 6px 12px;
	background: #fff none repeat scroll 0 0;
	border: 1px solid rgb(197, 194, 195);
	border-radius: 4px;
	
	font-size: 14px;
	font-weight: normal;
	color: #333;
	-moz-border-radius: none;
	-webkit-border-radius: none;
	border-radius: none;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
}
.btn-file input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	min-width: 100%;
	min-height: 100%;
	font-size: 100px;
	text-align: right;
	filter: alpha(opacity=0);
	opacity: 0;
	outline: none;
	background: white;
	cursor: inherit;
	display: block;
}
/*https://stackoverflow.com/questions/14199788/how-do-i-use-an-image-as-a-submit-button */ 
#btnAdd, #btnAdd2, #btnAdd3, #btnAdd4, #btnAdd5, #btnAdd6, #btnAdd7 {
	background-image: url("<?php echo base_url('assets/images/Plus.png')?>");
	background-size: cover;
	border: none;
	width: 32px;
	height: 32px;
	cursor: pointer;
	color: transparent;
	background-color: transparent;
	outline: none;
}
#textAdd {
	background-image: url("<?php echo base_url('assets/images/Plus.png')?>");
	background-size: cover;
	border: none;
	width: 32px;
	height: 32px;
	cursor: pointer;
	color: transparent;
	background-color: transparent;
	outline: none;
}
#imageUpload1 {
	display: none;
}
#profileImage1 {
	cursor: pointer;
}
#profile-container1 {
	width: 150px;
	height: 150px;
}
#imageUpload2 {
	display: none;
}
#profileImage2 {
	cursor: pointer;
}
#imageUpload3 {
	display: none;
}
#profileImage3 {
	cursor: pointer;
}
#imageUpload4 {
	display: none;
}
#profile-container4 {
	width: 150px;
	height: 150px;
}
#imageUpload5 {
	display: none;
}
#profileImage5 {
	cursor: pointer;
}
.faq-cat-content {
	margin-top: 25px;
}
.faq-cat-tabs li a {
	padding: 15px 10px 15px 10px;
	background-color: #ffffff;
	border: 1px solid #dddddd;
	color: #777777;
}
.nav-tabs li a:focus, .panel-heading a:focus {
	outline: none;
}
.panel-heading a, .panel-heading a:hover, .panel-heading a:focus {
	text-decoration: none;
	color: #777777;
}
.faq-cat-content .panel-heading:hover {
	background-color: #efefef;
}
.active-faq {
	border-left: 5px solid #888888;
}
.panel-faq .panel-heading .panel-title span {
	font-size: 13px;
	font-weight: normal;
}
.form-wizard h4 span {
	font-size: 14px;
}
.panel-group .panel {
	border-radius: 0;
	box-shadow: none;
	border-color: #EEEEEE;
}
.panel-default > .panel-heading {
	padding: 0;
	border-radius: 0;
	color: #212121;
	background-color: #FAFAFA;
	border-color: #EEEEEE;
}
.panel-title {
	font-size: 14px;
}
.panel-title > a {
	display: block;
	padding: 15px;
	text-decoration: none;
}
.more-less {
	float: right;
	color: #212121;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
	border-top-color: #EEEEEE;
}
.ac-container {
	width: 100%;
	margin: 10px auto 30px auto;
	text-align: left;
}
.ac-container label {
	padding: 5px 10px;
	position: relative;
	z-index: 20;
	display: block;
	
	cursor: pointer;
	color: #777;
	text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
	line-height: 20px;
	font-size: 12px;
	background: #ffffff;
	background: -moz-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #ffffff), color-stop(100%, #eaeaea));
	background: -webkit-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
	background: -o-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
	background: -ms-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
	background: linear-gradient(top, #ffffff 1%, #eaeaea 100%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eaeaea', GradientType=0 );
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 1px 0px 0px 0px rgba(255,255,255,0.9) inset, 0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover {
	background: #fff;
}
.ac-container input:checked + label, .ac-container input:checked + label:hover {
	background: #c6e1ec;
	color: #3d7489;
	text-shadow: 0px 1px 1px rgba(255,255,255, 0.6);
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover:after, .ac-container input:checked + label:hover:after {
	content: '';
	position: absolute;
	width: 24px;
	height: 24px;
	right: 2px;
	top: 2px;
	background: transparent url(../assets/images/arrow_down.png) no-repeat center center;
}
.ac-container input:checked + label:hover:after {
	background-image: url(../assets/images/arrow_up.png);
}
.ac-container input {
	display: none;
}
.ac-container article {
	background: rgba(255, 255, 255, 0.5);
	margin-top: -1px;
	overflow: hidden;
	height: 0px;
	position: relative;
	z-index: 10;
	-webkit-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-moz-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-o-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	-ms-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
}
.ac-container article p {
	font-style: italic;
	color: #777;
	line-height: 23px;
	font-size: 14px;
	padding: 5px 20px;
	text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
}
.ac-container input:checked ~ article {
	-webkit-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-moz-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-o-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	-ms-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3);
}
.ac-container input:checked ~ article.ac-small {
	height: 400px;
}
.ac-container input:checked ~ article.ac-medium {
	height: 450px;
}
.ac-container input:checked ~ article.ac-large {
	height: 500px;
}
.file {
	visibility: hidden;
	position: absolute;
}
.form-group {
	margin-bottom: 5px!important;
}
.form-group-1 {
	margin-bottom: 0px;
}
.form-body-classic.form-wizard .btn-1 {
	min-width: 105px;
	height: 30px;
    margin: 0;
    padding: 0 20px;
    border: none;
    font-family: 'Lato', sans-serif;
    font-size: 16px;
    font-weight: normal;
    line-height:30px;
    color: #fff;
	background-color:#3A2021;
    -moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px;
    text-shadow: none;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
}
.remove {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	  width: 229px;
	  /*margin-left: 107px;*/
	}
.remove:hover {
	  background: white;
	  color: black;
	}

.remove1 {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	  width: 296px;
      margin-left: 109px;
	}
.remove1:hover {
	  background: white;
	  color: black;
	}

img {
    max-width: 200px;
    height: auto;
    display: inline-block;
	}

/*here start with multiple input  words  */
.multipleInput-container {
     border:1px #999 solid;
     padding:1px;
     padding-bottom:0;
     cursor:text;
     font-size:15px;
     width:100%;
    border-radius: 6px;
    margin-top: 20px;
}
 
.multipleInput-container input {  
    outline: none;
    font-size:15px;
    clear:both;
    height:40px;
    border:0;
    margin-bottom:1px;
    background-color: #f8e6ed;
}
 
.multipleInput-container ul {
    list-style-type:none;
}
 
li.multipleInput-email {
    float:left;
    padding:6px ;
    color: #fff;
  background: #FD9160;
  margin-top: 0;
  border-radius: 6px;
  margin: 6px 2px 6px 6px;
}
 
.multipleInput-close {
    width:16px;
    height:16px;
    display:block;
    float:right;
    margin: -2px 0px 0px 8px;
  color: #fff;
  font-size: 16px;
}  

/*here start with multiple input  words  */
.keywordSearch-container {
     border:1px #999 solid;
     padding:1px;
     padding-bottom:0;
     cursor:text;
     font-size:15px;
     width:100%;
    border-radius: 6px;
    margin-top: 20px;
}
 
.keywordSearch-container input {  
    outline: none;
    font-size:15px;
    clear:both;
    height:40px;
    border:0;
    margin-bottom:1px;
    background-color: #f8e6ed;
}
 
.keywordSearch-container ul {
    list-style-type:none;
}
 
li.keywordSearch-email {
    float:left;
    padding:6px ;
    color: #fff;
  background: #FD9160;
  margin-top: 0;
  border-radius: 6px;
  margin: 6px 2px 6px 6px;
}
 
.keywordSearch-close {
    width:16px;
    height:16px;
    display:block;
    float:right;
    margin: -2px 0px 0px 8px;
  color: #fff;
  font-size: 16px;
}  
</style>
</head>

<body class="landing-page">
<div class="content-bg-wrap">
  <div class="content-bg"></div>
</div>

<!-- Header
    ================================================= -->
  <header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
        <div class="container"> 
      
          <?php  include('/../includes/header.php'); ?>
        </div>
        <!-- /.container --> 
      </nav>
  </header>
<!--Header End-->

<div class="google-maps"> </div>
<!--Header End-->

<div class="container"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
    <div id="page-contents">
      <div class="row">
      
        <div class="col-md-12">
          <div class="col-md-10 form-wizard form-body-classic form-header-classic" style="min-width:1200px;"> 
                       
            <h3>Event Service Providers</h3>
            <p>Please fill information to connect with us. </p>
            
            
      <img src="../assets/images/esp-banner.jpg" class="img-thumbnail"  alt="banner-image"/>
      
      
            <!-- Form progress -->
            <div class="form-wizard-steps form-wizard-tolal-steps-5">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="20" data-number-of-steps="5"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p>Basic Info</p>
              </div>
              <!-- Step 1 --> 
              
              <!-- Step 2 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                <p>Business Hours</p>
              </div>
              <!-- Step 2 --> 
              
              <!-- Step 3 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-image" aria-hidden="true"></i></div>
                <p>Product Gallery</p>
              </div>
              <!-- Step 3 --> 
              
              <!-- Step 4  -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                <p>Keyword Search</p>
              </div>
              <!-- Step 4 --> 
              
              <!-- Step 5 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-question" aria-hidden="true"></i></div>
                <p>ESP FAQ's</p>
              </div>
              
            </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
<form id="create_eventserviceprovider" action="<?php echo base_url('Eventserviceprovider/create_eve_service_provider'); ?>" method="post" enctype="multipart/form-data" >

    <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="14.28" aria-valuemin="0" aria-valuemax="100" style="width: 14.28%"> </div>
                </div>
                <!-- Progress Bar -->
                <h4> <span>Step 1 - 5</span></h4>
                <div class='col-sm-12'>
                  <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Basic Info</div>
                  <div class='form-group col-sm-9' >
                  <div class='row'>
                 <div class='form-group col-sm-12'> Business Contact Person Information <em>(To Be Used For Correspondence /Notification)</em></div>
                  
                    <div class='form-group col-sm-6' >
                      <label>First Name</label>
                      <input type='text' name="first_name"  class="form-control textBox" />
                    </div>
                    <div class='form-group col-sm-6' >
                      <label>Last Name</label>
                      <input type='text' name="last_name"  class="form-control" />
                    </div>                    
                    <div class='form-group col-sm-6' >
                      <label>Email</label>
                      <input type='text'  name="email"  class="form-control"  />
                    </div>
                    <div class='form-group col-sm-6' >
                      <label>Phone</label>
                      <input type='text' name="phone_no"  class="form-control"  />
                    </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-top:10px;">Business Information</div>
                  <div class='col-sm-5'>
                   <div class='row'>
                  				<div class="form-group col-sm-12" style="font-size: 15px;">
				                      <label>Services Type</label>
				                    <select name="service_type" class="form-control" style="background-color:#eff0f1;">
				                      	 <option selected="selected">Select Your Services &nbsp;Type</option>
						                 <option value="Catering_Services">Catering Services</option>
						                 <option value="Cakes">Cakes</option>
						                 <option value="Wines">Wines </option>
						                 <option value="BBQ_Indoor">BBQ Indoor &amp; Outdoor</option>
						                 <option value="Music">Music DJ Services</option>
						                 <option value="Event_Organizers">Event Organizers</option>
						                 <option value="Beautician_Services">Beautician Services</option>
						                 <option value="Photography">Photography &amp; Video Services </option>
						                 <option value="Decor">Decor &amp; Party Rentals</option>
						                 <option value="Floral">Floral</option>
						                 <option value="Party_Cleaning_Services">Party Cleaning Services</option>
						                 <option value="Limo">Limo &amp; Car Rentals</option>
						                 <option value="Dress">Dress &amp; Jewellery</option>
						                 <option value="MCs_Comedians">MC's &amp; Comedians</option>
						                 <option value="Event_Guest_Speakers">Event Guest Speakers</option>
						                 <option value="Event_Technology_Support">Event Technology Support</option>
						                 <option value="Event_Gifting">Event Gifting &amp; Souveniers</option>
				                  	</select>
		                    	</div>
                    <div class='form-group col-sm-12' >
                      <label>Company/Organization Name</label>
                      <input type='text' name="organisation_name"  class="form-control textBox" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Venue</label>
                      <input type='text'  name="venue"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address1</label>
                      <input type='text' name="address1"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address2</label>
                      <input type='text' name="address2"  class="form-control" />
                    </div>                   
                   
                    <div class='form-group col-sm-12' >
                      <label>Country</label>
                      			<select name="country" onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" style="background-color:#eff0f1;">
									                     
								</select>
                    </div>

                        <div class='form-group col-sm-12' >
                      		<label>State</label>
                     		<select name="state" id ="state" class="form-control"></select>
					 		<script language="javascript">print_country("country");</script>	
                        </div>

                     <div class='form-group col-sm-12' >
                      <label>Zipcode/Postal Code</label>
                      <input type='text' name="zipcode"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Website Links</label>
                      <input type='text' name="web_link"  class="form-control" />
                    </div>
                    </div>
                  </div>
                  <div class='col-sm-7'>
                  <div class='row'>
                    <div class='form-group col-sm-12'>
                      <label>Venue Description</label>
                      <textarea type='text' name="description"  class="form-control" style="min-height:300px;" placeholder="Describe What Your Event Venue Description Is All About " ></textarea>
                    </div>

                    <div class='form-group col-sm-12'>
                        <div class='col-sm-12' style="background-color:#f9f9f9;">
                       		<label>Add Organisation Logo Image</label>
                                <div class='col-sm-12' style="background-color:#f9f9f9;">					                        
					                    <div class="form-group" style="margin-bottom: 10px;"> 
						                    <div class="field" align="left">
						                        <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('logo').click();" />
						                        <input type="file" style="display:none;" name="logo_img" id="logo" class="file" accept="image/*" title="cover image">  
						                    </div> 
					                    </div>		                        
					            </div>
                        </div>
                    </div>

                    <div class='form-group col-sm-12'>
                        <div class='col-sm-12' style="background-color:#f9f9f9;">
                        	<label>Add Cover Page Image</label>
                            <div class='form-group col-sm-12'>
					                <div class='col-sm-12' style="background-color:#f9f9f9;">					                       
					                    <div class="form-group" style="margin-bottom: 10px;"> 
						                    <div class="field" align="left">
						                        <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('files').click();" />
						                         	<div id="img_preview1"></div>
						                        <input type="file" style="display:none;" name="cover_img" id="files" class="file" accept="image/*" title="cover image">  
						                    </div> 
					                    </div>		                        
					                </div>
				            </div>
                        </div>
                    </div>

                  </div>
                </div>
                  </div>
                </div>
                
                
                <div class='col-sm-12'>
                  <div class="form-wizard-buttons">

                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
              </fieldset>
              
              
              <!-- Form Step 1 --> 
              
              <!-- Form Step 2 -->
              <fieldset>
                
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> </div>
                </div>
                <!-- Progress Bar -->
                <h4> <span>Step 2 - 5</span></h4>
                <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-bottom:15px!important;">
                  Business Hours
                 </div> 
                <div class='form-group col-sm-12'> 


                    <div class="form-group col-md-12">Select Amenities That Are Avaliable At Your Venue Location<br>Hall 1 (  Grace Banquet Center 1)</div>
                     <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          &nbsp;
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">&nbsp;</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;"><strong style="font-weight:bold;">Availability</strong>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <strong style="font-weight:bold;">Opens From</strong>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                       <strong style="font-weight:bold;">Closed At</strong>
                        </div>
                        </div>
                    <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="monday"  style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Monday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half Day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Tuesday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half Day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' name="event_date" class="form-control" placeholder="04:21"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' name="event_date" class="form-control" placeholder="04:21"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Wednesday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
	                        <select name="event_totaldays" class="form-control" style="background-color:#eff0f1;">
					                     <option class="option">Open</option>
	                 					  <option class="option">Closed</option>
	                                      <option class="option">Open Half Day</option>
	                 		</select>
                 		</div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text'  name="event_date" class="form-control" placeholder="04:21"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' name="event_date" class="form-control" placeholder="04:21"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Thursday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half Day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text'  name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text'  name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Friday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half Day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text'  name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Saturday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays"  class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half Day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Sunday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays"  class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half Day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text'  name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' name="event_date"  class="form-control" placeholder="04:21"  />
                        </div>
                        </div>
                        
                   
                </div>
                
                <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-bottom:15px!important;">
                  Customer Engagement Button
                 </div> 

                
                <div class="form-group col-md-5">
                <div class="row"><div class='form-group col-sm-12' >Indicate How You Want Your Customers To Reach Or Contact You</div></div>
                 			<div class='form-group col-sm-12' >
                      			<select name="customer_engagement_btn" class="form-control" style="background-color:#eff0f1;">
                      				  <option>Select</option>
				                      <option value="Book_Us">Book Us</option>
				                      <option value="Contact_Us">Contact Us</option>
				                      <option value="Request_Pricing">Request Pricing</option> 
				                </select>
                    		</div>
                 <div class='form-group col-sm-12' style="margin-top:20px;" >
                	<div class="pull-left" style="width:10%;">
                          <input type="checkbox" name="event_type"  style="width:18px; height:18px;" >
                          </div>
                        <div class="pull-left" style="width:90%; font-size:14px; margin-bottom:5px;">Event Type</div>
                        
                        <div class="pull-left" style="width:10%;">
                          <input type="checkbox" name="event_city" style="width:18px; height:18px;" >
                          </div>
                        <div class="pull-left" style="width:90%; font-size:14px; margin-bottom:5px;">Event City</div>
                        
                        <div class="pull-left" style="width:10%;">
                          <input type="checkbox" name="name"  style="width:18px; height:18px;" >
                          </div>
                        <div class="pull-left" style="width:90%; font-size:14px; margin-bottom:5px;">Name</div>
                        
                        <div class="pull-left" style="width:10%;">
                          <input type="checkbox" name="email" style="width:18px; height:18px;" >
                          </div>
                        <div class="pull-left" style="width:90%; font-size:14px; margin-bottom:5px;">Email</div>
                        
                        <div class="pull-left" style="width:10%;">
                          <input type="checkbox" name="phone_no"  style="width:18px; height:18px;" >
                          </div>
                        <div class="pull-left" style="width:90%; font-size:14px; margin-bottom:5px;">Phone Number</div>
                        
                        <div class="pull-left" style="width:10%;">
                          <input type="checkbox"  name="event_date"  style="width:18px; height:18px;" >
                          </div>
                        <div class="pull-left" style="width:90%; font-size:14px; margin-bottom:5px;">Event Date</div>
                        
                        <div class="pull-left" style="width:10%;">
                          <input type="checkbox"  name="event_time" style="width:18px; height:18px;" >
                          </div>
                        <div class="pull-left" style="width:90%; font-size:14px; margin-bottom:5px;">Event Time</div>
                      </div> 
                </div>
                	<div class='form-group col-sm-4'>
                      <label>Comments</label>
                      <textarea name="comments"  class="form-control" style="min-height:300px;" placeholder="Type Comments" >
                      </textarea>
                    </div>
                <div class='form-group col-sm-12' style="margin-top:25px;">
                  <div class="form-wizard-buttons">

                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
    </fieldset>
              <!-- end Step 2 --> 
              
              <!--  Step 3 -->
    <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> </div>
                </div>
                <!-- Progress Bar -->
                <h4> <span>Step 3 - 5</span></h4>
                
                <div class='col-sm-12' style="margin-bottom:20px;">
                  <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Product/ Services Gallery (Photos/ Images)</div>

                  <div class='form-group col-sm-6'>
                  <div class='row'>
                 	<div class='form-group col-sm-12' >
                      <label>Image Title</label>
                      <input type='text' name="img_title1"  class="form-control" />
                    </div>
                       <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
	                        	<label>Upload Hall  Photos/Images</label>
	                        		<div class="form-group">
				                          	<div class="field" align="left">
				                         		<input type="button" class="btn btn-primary"  value="Browse Image..." onclick="document.getElementById('product_img1').click();" />
				                         		<input type="file" style="display:none;" name="product_img1" id="product_img1" class="file" accept="image/*" title="cover image">  
				                        	</div>  
				                    </div>
	                        <div class='col-sm-12'>
	                    		<a href="JavaScript:void(0);">
	                    		<i class="fa fa-plus-circle"></i> Add More Products/ Services Photos/Images up to 10 </a>
	                    	</div>
                      </div>
                      
                    </div>              
                    
                    </div>
                    </div>
                  <div class="form-group col-md-6">
						  <div class='form-group col-sm-12' style="margin-bottom:15px!important;" >
						    <label>Product/Services Description</label>
						    <input type='text' name="product_header1"  class="form-control" placeholder="Product/Services Header Here "  />
						  </div>
                    <div class='form-group col-sm-12' >
                      
                      <textarea type='text' name="product_description1"  class="form-control" style="min-height:100px;" placeholder="Product/Services Description Here " ></textarea>
                    </div>
                  </div>
                   
                  
                  </div>
                  
                  
                </div>
                
                <div class='col-sm-12' style="margin-bottom:20px;">
                  <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Product/ Services Gallery (Videos)</div>
                  <div class='form-group col-sm-6' >
                  <div class='row'>
                  <div class='form-group col-sm-12' >
                      <label>Video Title</label>
                      <input type='text' name="video_title1"  class="form-control" />
                    </div>
                       <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Upload Hall  Photos/Images</label>
                        		<div class="form-group">
					                <span class="btn btn-primary btn-file"> 
			                       	 Browse...<input type="file" name="product_video1" id="video_size"  accept="video/*">
			                       	</span>

			                        <div id="video_show" style="display: none;" >
			                        	<div class="remove_video" style="cursor: pointer;">
		                       				<i class="fa fa-window-close" style="font-size:25px; margin-left: 171px;"></i>
		                    			</div>
			                        	<video width="200" height="110" controls>
										 	 <source src="mov_bbb.mp4" id="video_here">
										    Your browser does not support HTML5 video.
										</video>
			                        </div>		                        
		                            
		                        </div>
                        <div class='col-sm-12'>
                    		<a href="JavaScript:void(0);">
                    		<i class="fa fa-plus-circle"></i> Add More Products/ Services Photos/Images up to 10 </a>
                    	</div>
                      </div>                      
                    </div>             
                               
                    </div>
                    </div>
                  		<div class="form-group col-md-6">
						  	<div class='form-group col-sm-12' style="margin-bottom:15px!important;" >
						    	<label>Product/Services Description</label>
						    	<input type='text'  name="product_header2"  class="form-control" placeholder="Product/Services Header Here "  />
						  	</div>

		                    <div class='form-group col-sm-12' >		                      
		                      <textarea type='text' name="product_description2" class="form-control" style="min-height:100px;" placeholder="Product/Services Description Here " ></textarea>
		                    </div>
                  		</div>
                  </div>
                 
                </div>
                
                <div class='col-sm-12'>
                  <div class="form-wizard-buttons">

                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
    </fieldset>
              <!--  Step 4 -->

    <fieldset>
                
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%"> </div>
                </div>
                <!-- Progress Bar -->
                <h4> <span>Step 4 - 5</span></h4>
                <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-bottom:15px!important;">
                  Create Your Business Search Coverage Areas &amp; Search Keywords
                 </div> 
                	<div class='form-group col-sm-12'>
						<div class="form-group col-md-12">Create and Generate Keyword that your clients and customers can use to search for your products and services on the !WOWHUBB NETWORK</div>
						<div class='form-group col-sm-12' style="padding-top:15px; padding-bottom:5px; background-color:#f7ebf0; border-radius:5px;  margin-top:25px;  color:#e91e63; margin-bottom:15px!important;">
	                    	<div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
	                        
		                        <div class="pull-left" style="width:21%; font-size:14px; margin-right:5px; color:#333;">Enter Your Business Coverage Areas</div>
		                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:15px;">
		                        	<input type='text' id="coverage_area" name="coverage_area[]"  class="form-control" placeholder="Houston"  />
		                        </div>
		                        <div class="pull-left" style="width:11%; font-size:14px; margin-right:5px; color:#333;">Rank Client Base</div>
		                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
			                        <select name="rank" class="form-control" style="background-color:#eff0f1;">
							                      <option value="1">1</option>
			                 					  <option value="2">2</option>
			                                      <option value="3">3</option>
			                                      <option value="4">4</option>
			                                      <option value="5">5</option>
			                 		</select>
		                 		</div>
		                        
	                        </div>
                        </div>               
                	</div>

                 
                	<div class='form-group col-sm-12'>

						<div class='form-group col-sm-12' style="padding-top:15px; padding-bottom:5px; background-color:#f7ebf0; color:#e91e63; border-radius:5px; margin-top:25px; margin-bottom:15px!important;">
                     	<div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        
                        <div class="pull-left" style="width:28%; font-size:14px; margin-right:5px; color:#333;"">Generate Your Business Search Keywords Here</div>
                        <div class="pull-left" style="width:36%; font-size:14px; margin-right:15px;">
                        	<input type='text'  name="keyword_search[]" id="keyword_search" class="form-control" placeholder="Vanilla Cakes"  /></div>                     
                        </div>
                        </div>                   
                       
                	</div>

                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
    </fieldset>
              
              <!--  Step 5 -->

    <fieldset>
                
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
                </div>
                <!-- Progress Bar -->
                <h4> <span>Step 5 - 5</span></h4>
                
                <div class="col-md-12">
               
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Event Sevice Provider FAQs</div>                 
                 
                   		<!-- dynamic add faq  -->
			                      <div id="dynamic_add_faq">
                                  <div class="row" id="event_faq_1">
                                 	<div class="col-md-6">
                                 	 	<div class="col-md-12" style="margin: 10px 0px;">
                                 	 		<input type="text" id="faq_ques_1" name="faq_ques[]" class="form-control" placeholder="Enter question"> 
                                 		</div> 
                                 	  <div class="col-md-12" style="margin: 10px 0px;">
                                 	   <input type="text" id="faq_ans_1" name="faq_ans[]" class="form-control" placeholder="Enter Answer"> 
                                 	</div>
                                 	 <div class="col-sm-12 text-right">
                                 	   <a href="JavaScript:void(0);"  class="remove_faq btn btn-info btn-sm"> Remove</a>
                                 	  </div> 
                                 	
                                 	</div>
                                  </div>
                                </div>

                                  <a href="JavaScript:void(0);" id="faq_add" data-nxt_event_faq="2">
			                        	<i class="fa fa-plus-circle"></i> Add More Event FAQ's
			                      </a>	

			            <!-- dynamic add faq end here -->	 
                 
                </div>
                
                
                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">
                   
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" class="btn btn-next">Publish</button>
                  </div>
                </div>
    </fieldset>
              
              <!-- end Step 5 --> 
              
             
             
</form>
            <!-- end Step 7 --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Scripts
    ================================================= --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery-3.2.1.minjs.js')?>" ></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 

<script type="text/javascript">


//image preview and delete step1 cover image

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      
        var f = files[0]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;

                  
          $("#img_preview1").html("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#img_files");

          $(".remove").click(function(){
            $(this).parent(".pip").remove();
            $('#files').val("");
          });          
                   
        });
        fileReader.readAsDataURL(f);
      
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});

//organisation logo preview and delete step1
 
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#logo").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      
        var f = files[0]
        var fileReader = new FileReader();

        fileReader.onload = (function(e) {

          	var file = e.target;

          	$("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove1\">Remove image</span>" +
            "</span>").insertAfter("#logo");

          	$(".remove1").click(function(){

            $(this).parent(".pip").remove();
            $('#logo').val("");

          });          
                   
        });

        fileReader.readAsDataURL(f);
     
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});	

//image preview and delete step3 product image

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#product_img1").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#product_img1");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
            $('#product_img1').val("");
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});

//video size limitation step3 product video     

$(document).on("change", "#video_size", function(evt)
        {
        		var file = this.files[0];

        		if (file.size > 2621440)
        		 {
		              
		             $('#video_show').hide();	
		             alert('Filesize must 2.5MB or below');           
         		 }else
         		 {	
				  var $source = $('#video_here');				 
				  $source[0].src = URL.createObjectURL(this.files[0]);
				  $source.parent()[0].load();
				  $('#video_show').show();
				  $(".remove_video").click(function () { 
			               	$('#video_show').hide();                 
			                $('#video_size').val("");

		                });   
				  
				 }
				});


// here mltiple cover area add 
(function( $ ){
 
     $.fn.multipleInput = function() {
 
          return this.each(function() {
  
               // list of email addresses as unordered list
               $list = $('<ul />');
 
               // input
               var $input = $('<input type="text" />').keyup(function(event) {
 
                    if(event.which == 32 || event.which == 188) {
                         // key press is space or comma
                        var val = $(this).val().slice(0, -1); // remove space/comma from value
 
                         // append to list of emails with remove button
                         $list.append($('<li class="multipleInput-email"><span> ' + val + '</span></li>')
                              .append($('<a href="#" class="multipleInput-close" title="Remove">x</a>')
                                   .click(function(e) {
                                        $(this).parent().remove();
                                        e.preventDefault();
                                   })
                              )
                         );
                         $(this).attr('placeholder', '');
                         // empty input
                         $(this).val('');
                    }
 
               });
 
               // container div
               var $container = $('<div class="multipleInput-container" />').click(function() {
                    $input.focus();
               });
 
               // insert elements into DOM
               $container.append($list).append($input).insertAfter($(this));
 
               // add onsubmit handler to parent form to copy emails into original input as csv before submitting
               var $orig = $(this);
               $(this).closest('form').submit(function(e) {
 
                    var emails = new Array();
                    $('.multipleInput-email span').each(function() {
                         emails.push($(this).html());
                    });
                    emails.push($input.val());
 
                    $orig.val(emails.join());
 
               });
 
               return $(this).hide();
 
          });
 
     };
})( jQuery );

// input type multiple words 
$('#coverage_area').multipleInput();

// here mltiple cover area add 
(function( $ ){
 
     $.fn.keywordSearch  = function() {
 
          return this.each(function() {
  
               // list of email addresses as unordered list
               $list1 = $('<ul />');
 
               // input
               var $input = $('<input type="text" placeholder="enter kery" />').keyup(function(event) {
 
                    if(event.which == 32 || event.which == 188) {
                         // key press is space or comma
                        var val = $(this).val().slice(0, -1); // remove space/comma from value
 
                         // append to list of emails with remove button
                         $list1.append($('<li class="keywordSearch-email"><span> ' + val + '</span></li>')
                              .append($('<a href="#" class="keywordSearch-close" title="Remove">x</a>')
                                   .click(function(e) {
                                        $(this).parent().remove();
                                        e.preventDefault();
                                   })
                              )
                         );
                         $(this).attr('placeholder', '');
                         // empty input
                         $(this).val('');
                    }
 
               });
 
               // container div
               var $container = $('<div class="keywordSearch-container" />').click(function() {
                    $input.focus();
               });
 
               // insert elements into DOM
               $container.append($list1).append($input).insertAfter($(this));
 
               // add onsubmit handler to parent form to copy emails into original input as csv before submitting
               var $orig = $(this);
               $(this).closest('form').submit(function(e) {
 
                    var emails = new Array();
                    $('.keywordSearch-email span').each(function() {
                         emails.push($(this).html());
                    });
                    emails.push($input.val());
 
                    $orig.val(emails.join());
 
               });
 
               return $(this).hide();
 
          });
 
     };
})( jQuery );

$('#keyword_search').keywordSearch();

// dynamic event FAQ here

function generete_dynamic_faq(count){
	var faq = ' <div class="row animated pulse" id="event_faq_'+count+'"><div class="col-md-6"> <div class="col-md-12" style="margin: 10px 0px;"> <input type="text" id="faq_ques_'+count+'" name="faq_ques[]" class="form-control" placeholder="Enter question"> </div> <div class="col-md-12" style="margin: 10px 0px;"> <input type="text" id="faq_ans_'+count+'" name="faq_ans[]" class="form-control" placeholder="Enter Answer"> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_faq btn btn-info btn-sm"> Remove</a></div> </div> </div>';

		return faq;
}



$(document).ready(function(){
        $("#faq_add").click(function()
        	{     	
		        var nxtticket_count = $(this).data("nxt_event_faq"); 
		        var nxtvenueHTML = generete_dynamic_faq(nxtticket_count);
		        $("#dynamic_add_faq").append(nxtvenueHTML);        
        	    nxtticket_count++;
		       $(this).data('nxt_event_faq', nxtticket_count); //update data nxtportion   
   			});   
});

// remove div
$(document).on('click', '.remove_faq', function(e)
    {
	       
	        $(this).parents('[id^=event_faq_]').remove();
	       
    });

//create event service provider form submit

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).on("submit", "#create_eventserviceprovider", function(e){

        e.preventDefault();

    //      $(this).validate({ 
    //                       rules: {                             
    //                                 event_name:"required",                  
    //                              	event_startdate: "required",
    //                              	event_enddate: "required",
    //                              	cover_img: "required",
    //                              	event_description: "required",
    //                              	event_title: "required",
    //                              	wowtag_video: "required",
    //                              	eventcontactname: "required",
    //                              },

    //                       messages: {                           
    //                               event_name: {
    //                                   required: "Please fill Event Name", 
    //                               }, 
    //                               event_startdate: {
    //                                   required: "Required ", 
    //                               }, 
    //                               event_enddate: {
    //                                   required: "Required", 
    //                               }, 
    //                               cover_img: {
    //                                   required: "Choose cover image", 
    //                               }, 
    //                               event_description: {
    //                                   required: "Please fill Description", 
    //                               }, 
    //                               event_title: {
    //                                   required: "Please fill Description", 
    //                               }, 
    //                               wowtag_video: {
    //                                   required: "Choose", 
    //                               },
    //                               eventcontactname: {
    //                                   required: "required this field", 
    //                               },
                                                   
    //                          },

    //                        }); 

    // if($(this).valid())
    //     {     
		        var url = $(this).attr('action');
		        var formdata = new FormData(this);
		      
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
		                beforeSend: function()
		                {

		                	swal({
						              title: 'Please Wait...',
						              text: 'Submitting...',
						              toast: true,
						              target: '.swal',              
						             
						              onOpen: () => {
						                swal.showLoading()
					             	 }
					            }); 
		      
		                },
		                
		                success: function(response)
		                {
		                   if(response.status == 'success')
		                   {
		                   
		                    		swal({
		                                    title: "Success!",
		                                    text: "Your Event Created Successfully...",
		                                    type: "success",
		                                    timer: 3000
		                                    }).then(() => {                     
		                					window.location.href = "<?php echo base_url('event/get_eventfeed'); ?>";
		              					});;  
		                   
		                    }
		                    else 
		                   	{
		                    	swal("Sorry!", "somethink wrong try again !", "error");
		                  	}          
		                }

		       });
		// }
     

 });

</script>
</body>
</html>
