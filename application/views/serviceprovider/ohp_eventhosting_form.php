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

<!-- file upload -->

<!-- CSS adjustments for browsers with JavaScript disabled -->

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
.nav-tabs>li>a {
	margin-right: 2px;
	line-height: 1.42857143;
	border: 1px solid transparent;
	border-radius: 4px 4px 0 0;
	font-size: 13px;
	text-align: center;
	color: #e91e63;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus {
	color: #e91e63;
	cursor: default;
	background-color: transparent;
	border: 1px solid #ddd;
	border-bottom-color: transparent;
}
.nav-tabs>li.active>a:hover {
	color: #e91e63;
	cursor: default;
	background-color: #ddd;
	border: 1px solid #ddd;
	border-bottom-color: transparent;
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
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="#" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span> </a> <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span> </a> <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span> </a>
        </ul>
        <form class="navbar-form navbar-right hidden-sm">
          <div class="form-group"> <i class="icon ion-android-search"></i>
            <input type="text" class="form-control" placeholder="Search !Events, !Venues, !Wowtags, !People">
          </div>
        </form>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling --> 
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</header>
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
            <!-- 
            Just change the class name for make it with different style of design.

            Use anyone class "form-header-classic" or "form-header-modarn" or "form-header-stylist" for set your form header design.
            
            Use anyone class "form-body-classic" or "form-body-material" or "form-body-stylist" for set your form element design.
            -->
            
            <h3>Organisation Hosting Page</h3>
            <p>Please fill information to connect with us. </p>
            
            
      <img src="../assets/images/ohp_banner.jpg" class="img-thumbnail"  alt="banner-image"/>
      
      
            <!-- Form progress -->
            <div class="form-wizard-steps form-wizard-tolal-steps-3">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="20" data-number-of-steps="3"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p>Basic Info</p>
              </div>
              <!-- Step 1 -->        
              
              <!-- Step 2 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-image" aria-hidden="true"></i></div>
                <p>Product Gallery</p>
              </div>
              <!-- Step 2 --> 
              
              <!-- Step 3  -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                <p>Keyword Search</p>
              </div>
              <!-- Step 3 --> 
              
         
            </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
            <form id="create_event" action="#"  method="post" enctype="multipart/form-data" >
              <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="33.33" aria-valuemin="0" aria-valuemax="100" style="width: 33.33%"> </div>
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
                      <input type='text' name="event_topic"  class="form-control textBox" />
                    </div>
                    <div class='form-group col-sm-6' >
                      <label>Last Name</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>                    
                    <div class='form-group col-sm-6' >
                      <label>Email</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control"  />
                    </div>
                    <div class='form-group col-sm-6' >
                      <label>Phone</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control"  />
                    </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-top:10px;">Business Information</div>
                  <div class="form-group col-sm-12">
                  <!-- Nav tabs category -->
                              <ul class="nav nav-tabs faq-cat-tabs">
                                  <li class="active" style="width: 25%;"><a href="#faq-cat-1" data-toggle="tab" class="text-center">Company /Institution</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-2" data-toggle="tab" class="text-center">A Public Figure, Artist, Guest Speaker</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-3" data-toggle="tab" class="text-center">A Local Based Business</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-4" data-toggle="tab" class="text-center">Entertainment Based Organisation</a></li>
                                  <!--<li><a href="#faq-cat-4" data-toggle="tab" class="text-center">Event Tours</a></li> -->
                              </ul>
                              <div class="tab-content faq-cat-content">
                              <div class="tab-pane active in fade" id="faq-cat-1">

                                      <div class='col-sm-5'>
                   <div class='row'>
                  <div class="form-group col-sm-12" style="font-size: 15px;">
				                      <label>Choose a Category</label>
				                    <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option selected="selected" class="option">Arts &amp; &nbsp;Craft Company</option>
                         <option class="option">Aerospace Company</option>
                         <option class="option">Advertising Media &amp; Public Relations</option>
                         <option class="option">Agricultural Services &amp; Products</option>
                         <option class="option">Air Transport</option>
                         <option class="option">Alcoholics &amp; Beverages</option>
                         <option class="option">Aternative Energy Production &amp; Services</option>
                         <option class="option">Attorneys &amp; Law Firms</option>
                         <option class="option">Banknig &amp; Financial Services Company</option>
                         <option class="option">Beauty Fitness &amp; Health </option>
                         <option class="option">Business Associations</option>
                         <option class="option">Builders &amp; General Contractors</option>
                         <option class="option">Cargo &amp; Freight Company</option>
                         <option class="option">College &amp; Universities</option>
                         <option class="option">Casino &amp; Gambling</option>
                         <option class="option">Community Organisations</option>
                         <option class="option">Community Services </option>
                         <option class="option">Consulting Services </option>
                         <option class="option">Education &amp; Training</option>
                         <option class="option">Elementary School</option>
                         <option class="option">Government Organisation</option></select>
				                  	</select>
		                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Company/Organization Name</label>
                      <input type='text' name="event_topic"  class="form-control textBox" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Venue</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address1</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address2</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Zipcode/Postal Code</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>State</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Country</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option value="0">Albania</option>
				                      <option value="day1">Alaska</option>
				                      <option value="day2">Algeria</option>
				                      <option value="day3">India</option>
                                      <option value="day3">USA</option>
				                     
				                  	</select>
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Website Links</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Business Phone</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    </div>
                  </div>
                  <div class='col-sm-7'>
                  <div class='row'>
                    <div class='form-group col-sm-12'>

                      <textarea type='text' id="description" name="event_description"  class="form-control" style="min-height:300px;" placeholder="Give A Brief Description of Yourself/ Organisation" ></textarea>
                    </div>
                    <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Add Logo Image</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
                        </div>
                      </div>
                    </div>
                    <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Add Cover Page Image</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                                    </div>
                                    <div class="tab-pane in fade" id="faq-cat-2">

                                    
                                      <div class='col-sm-5'>
                   <div class='row'>
                  <div class="form-group col-sm-12" style="font-size: 15px;">
				                      <label>Choose a Category</label>
				                    <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option selected="selected" class="option">Artist</option>
                       <option class="option">Author</option>
                       <option class="option">Music Band</option>
                       <option class="option">Motivational Speaker</option>
                       <option class="option">Comedian</option>
                       <option class="option">Musician</option>
                       <option class="option">Political Candidate</option>
                       <option class="option">Life Coach</option>
                       <option class="option">Fitness Coach</option>
                       <option class="option">Journalist</option>
                       <option class="option">Politician</option>
                       <option class="option">Public Figure</option>
                       <option class="option">Writer </option>
                       <option class="option">Chef</option>
                       <option class="option">Fashion Model</option>
                       <option class="option">Dancer</option>
                       <option class="option">Career Adviser</option></select>
				                  	</select>
		                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Company/Organization Name</label>
                      <input type='text' name="event_topic"  class="form-control textBox" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Venue</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address1</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address2</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Zipcode/Postal Code</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>State</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Country</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option value="0">Albania</option>
				                      <option value="day1">Alaska</option>
				                      <option value="day2">Algeria</option>
				                      <option value="day3">India</option>
                                      <option value="day3">USA</option>
				                     
				                  	</select>
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Website Links</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Business Phone</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    </div>
                  </div>
                  <div class='col-sm-7'>
                  <div class='row'>
                    <div class='form-group col-sm-12'>

                      <textarea type='text' id="description" name="event_description"  class="form-control" style="min-height:300px;" placeholder="Give A Brief Description of Yourself/ Organisation" ></textarea>
                    </div>
                    <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Add Logo Image</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
                        </div>
                      </div>
                    </div>
                    <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Add Cover Page Image</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                                    </div>
                                    <div class="tab-pane in fade" id="faq-cat-3">

                                     
                                      <div class='col-sm-5'>
                   <div class='row'>
                  <div class="form-group col-sm-12" style="font-size: 15px;">
				                      <label>Choose a Category</label>
				                    <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option selected="selected" class="option">Auto Dealer </option>
                       <option class="option">Bar &amp; Resturant </option>
                       <option class="option">Appliance Store</option>
                       <option class="option">Baby &amp; Kids Shop </option>
                       <option class="option">Building Material Store</option>
                       <option class="option">Clothing Store </option>
                       <option class="option">Dentist</option>
                       <option class="option">Computer Services </option>
                       <option class="option">Computer Software</option>
                       <option class="option">Doctor &amp; Other Health Professional Services</option>
                       <option class="option">Fitness Center</option>
                       <option class="option">Home Decor</option>
                       <option class="option">Household Supplies</option>
                       <option class="option">Jeewelry &amp; Watches</option>
                       <option class="option">Office Supplies</option>
                       <option class="option">Pet Supplies</option>
                       <option class="option">Tools &amp; Equipment Store</option>
                       <option class="option">Wine &amp; Spirit Store</option>
                       <option class="option">Health Suppliement Store</option>
                       <option class="option">Nursing Homes </option>
                       <option class="option">Food Store</option>
                       <option class="option">Phone &amp; Accessories</option>
                       <option class="option">Realtor </option>
                       <option class="option">Medical Supplies</option>
                       <option class="option">Publishing &amp; Printing Services </option>
                       <option class="option">Beauty &amp; Spas</option>
                       <option class="option">Trucking &amp; Haulages</option></select>
				                  	</select>
		                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Company/Organization Name</label>
                      <input type='text' name="event_topic"  class="form-control textBox" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Venue</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address1</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address2</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Zipcode/Postal Code</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>State</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Country</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option value="0">Albania</option>
				                      <option value="day1">Alaska</option>
				                      <option value="day2">Algeria</option>
				                      <option value="day3">India</option>
                                      <option value="day3">USA</option>
				                     
				                  	</select>
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Website Links</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Business Phone</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    </div>
                  </div>
                  <div class='col-sm-7'>
                  <div class='row'>
                    <div class='form-group col-sm-12'>

                      <textarea type='text' id="description" name="event_description"  class="form-control" style="min-height:300px;" placeholder="Give A Brief Description of Yourself/ Organisation" ></textarea>
                    </div>
                    <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Add Logo Image</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
                        </div>
                      </div>
                    </div>
                    <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Add Cover Page Image</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                                    </div>
                                    <div class="tab-pane in fade" id="faq-cat-4">

                                     
                                      <div class='col-sm-5'>
                   <div class='row'>
                  <div class="form-group col-sm-12" style="font-size: 15px;">
				                      <label>Choose a Category</label>
				                    <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option selected="selected" class="option">Sports Team</option>
                       <option class="option">Concert Tour</option>
                       <option class="option">Cultural Groups</option>
                       <option class="option">Festivals</option>
                       <option class="option">Movie Theater</option>
                       <option class="option">Television Station</option>
                       <option class="option">Music Awards</option>
                       <option class="option">Performing Arts</option>
                       <option class="option">Podcast</option>
                       <option class="option">Radio Station</option>
                       <option class="option">Theater Arts</option>
                       <option class="option">TV Network</option>
                       <option class="option">Prime Time TV Event</option>
                       <option class="option">TV Shows</option>
                       <option class="option">Magazine</option>
                       <option class="option">Library</option>
                       <option class="option">Muesuem </option>
                       <option class="option">Book Launch</option></select>
				                  	</select>
		                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Company/Organization Name</label>
                      <input type='text' name="event_topic"  class="form-control textBox" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Venue</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address1</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Address2</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Zipcode/Postal Code</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>State</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Country</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option value="0">Albania</option>
				                      <option value="day1">Alaska</option>
				                      <option value="day2">Algeria</option>
				                      <option value="day3">India</option>
                                      <option value="day3">USA</option>
				                     
				                  	</select>
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Website Links</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Business Phone</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                    </div>
                  </div>
                  <div class='col-sm-7'>
                  <div class='row'>
                    <div class='form-group col-sm-12'>

                      <textarea type='text' id="description" name="event_description"  class="form-control" style="min-height:300px;" placeholder="Give A Brief Description of Yourself/ Organisation" ></textarea>
                    </div>
                    <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Add Logo Image</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
                        </div>
                      </div>
                    </div>
                    <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Add Cover Page Image</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
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
            
              
              <!--  Step 2 -->
              <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="66.66" aria-valuemin="0" aria-valuemax="100" style="width: 66.66%"> </div>
                </div>
                <!-- Progress Bar -->
                <h4> <span>Step 2 - 5</span></h4>
                
                <div class='col-sm-12' style="margin-bottom:20px;">
                  <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Product/ Services Gallery (Photos/ Images)</div>
                  <div class='form-group col-sm-6' >
                  <div class='row'>
                  <div class='form-group col-sm-12' >
                      <label>Image Title</label>
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                       <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Upload Hall  Photos/Images</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
                            <div class="col-sm-12"> 
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
    <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Product/Services Header Here "  />
  </div>
                    <div class='form-group col-sm-12' >
                      
                      <textarea type='text' id="description" name="product_description"  class="form-control" style="min-height:100px;" placeholder="Product/Services Description Here " ></textarea>
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
                      <input type='text' id="event_date" name="event_date"  class="form-control" />
                    </div>
                       <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Upload Hall  Photos/Images</label>
                        <div class="form-group">
                          <input type="file" name="img[]" class="file">
                          <div class="input-group col-xs-12"> <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
                          </div>
                          <div class="input-group col-xs-12" style="margin-top:15px;"> <span class="input-group-btn">
                            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                            </span> </div>
                            <div class="col-sm-12"> 
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
    <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Product/Services Header Here "  />
  </div>
                    <div class='form-group col-sm-12' >
                      
                      <textarea type='text' id="description" name="product_description"  class="form-control" style="min-height:100px;" placeholder="Product/Services Description Here " ></textarea>
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
              <!--  Step 2 -->
              <fieldset>
                
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"> </div>
                </div>
                <!-- Progress Bar -->
                <h4> <span>Step 3 - 5</span></h4>
                <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-bottom:15px!important;">
                  Create Your Business Search Coverage Areas &amp; Search Keywords
                 </div> 
                <div class='form-group col-sm-12'>
<div class="form-group col-md-12">Create and Generate Keyword that your clients and customers can use to search for your products and services on the !WOWHUBB NETWORK</div>
<div class='form-group col-sm-12' style="padding-top:15px; padding-bottom:5px; background-color:#f7ebf0; border-radius:5px;  margin-top:25px;  color:#e91e63; margin-bottom:15px!important;">
                     <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        
                        <div class="pull-left" style="width:21%; font-size:14px; margin-right:5px; color:#333;">Enter Your Business Coverage Areas</div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:15px;"><input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Houston"  /></div>
                        <div class="pull-left" style="width:11%; font-size:14px; margin-right:5px; color:#333;">Rank Client Base</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">1</option>
                 					  <option class="option">2</option>
                                      <option class="option">3</option>
                                      <option class="option">4</option>
                                      <option class="option">5</option>
                 </select></div>
                        <button type="button" class="btn-1 btn-next">Submit</button>
                        </div>
                        </div>
                    
                       
                </div>
                 <div class='form-group col-sm-12'>
                   <div class='form-group col-sm-12'>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">1 Houston, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">2 Sugarland <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">3 Katy, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">4 Chennai, India <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">5 Haris, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">6 Downtown, Texas <i class="fa fa-times"></i></div></div>
                  

                 </div>
                 
                 <div class='form-group col-sm-12'>
                 
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">7 Ranchester, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">8 SanAntonio <i class="fa fa-times"></i></div></div>

                 </div>
                 </div>
                <div class='form-group col-sm-12'>

<div class='form-group col-sm-12' style="padding-top:15px; padding-bottom:5px; background-color:#f7ebf0; color:#e91e63; border-radius:5px; margin-top:25px; margin-bottom:15px!important;">
                     <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        
                        <div class="pull-left" style="width:28%; font-size:14px; margin-right:5px; color:#333;"">Generate Your Business Search Keywords Here</div>
                        <div class="pull-left" style="width:36%; font-size:14px; margin-right:15px;"><input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Vanilla Cakes"  /></div>

                        
                        <button type="button" class="btn-1 btn-next">Submit</button>
                        </div>
                        </div>
                    
                       
                </div>
                <div class='form-group col-sm-12'>
                   <div class='form-group col-sm-12'>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">1 Vanilla Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">2 Wedding Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">3 Birthday Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">4 Speciality Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">5 Chocolate Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">6 Cup Cakes <i class="fa fa-times"></i></div></div>
                  

                 </div>
                 
                 <div class='form-group col-sm-12'>
                 
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">7 Ranchester, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">8 SanAntonio <i class="fa fa-times"></i></div></div>

                 </div>
                </div>
                
                
                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">

                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" class="btn btn-next">Publish</button>
                  </div>
                </div>
              </fieldset>
              
              <!--  Step 3 -->
              
            </form>
            <!-- end Step 7 --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Footer
    ================================================= 
    <footer id="footer">
        <div class="container">
          <?php /*?><!--<?php  $this->load->view('includes/footer.php'); ?>--><?php */?>
        </div>
    </footer>
    
   
    <!--div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>--> 

<!-- Scripts
    ================================================= --> 
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
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
<!-- model popup bootstrap --> 
<script src="<?php echo base_url('assets/js/bootstrap3.3.4.min.js')?>"></script>
</body>
</html>
