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

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/><style type="text/css">
	
	label.error {
    font-family: 'Roboto', sans-serif;
   color:red; 
	}

	.textBox {
		background-image: url(./assets/images/designation-icon.png);
		background-position: 0 5px;
		background-size: 30px;
		background-repeat: no-repeat;
		padding-left: 17px;
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
		font-family: 'Source Sans Pro', sans-serif;
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
	  #btnAdd4, #btnAdd5, #btnAdd6 {
		background-image: url("<?php echo base_url('assets/images/Plus.png')?>");
		background-repeat: no-repeat;
		border: none;
		width: 32px;
		height: 32px;
		cursor: pointer;
		color: transparent;
		background-color: transparent;
		outline: none;
	}
	
	#btnAdd10{
		background-image: url("<?php echo base_url('assets/images/close-outline-32.png')?>");
		background-repeat: no-repeat;
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

	img {
    max-width: 200px;
    height: auto;
    display: inline-block;
	}

	.remove {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	  width: 200px;
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
	  width: 200px;
      margin-left: 144px;
	}
	.remove1:hover {
	  background: white;
	  color: black;
	}
	.tab {
	  display: none;
	}

.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

 .form-group-1 img {    
    left: 24px;
    position: absolute;
    top: 7px;
}

/*remove faq input box*/
#remove_faq {
    background-image: url(../assets/images/close-outline-32.png);
    background-repeat: no-repeat;
    border: none;
    width: 32px;
    height: 32px;
    cursor: pointer;
    color: transparent;
    background-color: transparent;
    outline: none;
}

/*hide input type number arrows*/
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
/*.swal2-contentwrapper
{
	margin: 0 auto;
    height: 150px;
}*/
</style>
</head>

<body class="landing-page">

	<div class="swal"></div>
	

<div class="content-bg-wrap">
  <div class="content-bg"></div>
</div>

<!-- Header
    ================================================= -->
 <header id="header">
  <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" style="position:relative; z-index:969696;"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="position:relative;">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 0px; margin-right:0px; font-size:25px;">
          <li class="dropdown" style="text-align:center;margin-left:10px; margin-right:10px; "><a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none; padding:0;"> <img src="<?php echo base_url('assets/images/home-icon-1.png'); ?>" alt="user" /><br>
            Home </a></li>
          <li class="dropdown" style="text-align:center;margin-left:10px; margin-right:10px; "> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="padding:0;"> <img src="<?php echo base_url('assets/images/notification-icon.png'); ?>" alt="user" /> <br>
            My Alerts <i class="fa fa-caret-down"></i> </a>
            <ul class="dropdown-menu login">
              <div>
                <div class="col-md-12 text-center" style="margin-top:10px; margin-bottom:10px; color:#000; font-size:16px;"><strong><i class="icon ion-android-notifications-none"></i> Alerts</strong></div>
              </div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-10">Vineture  didn't get any new likes this week. Publish a post to engage your audience.
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 15 Hours Ago</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-10">Emeka added a New Event on Hari's Birthday. Lets Check!!
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 13 Hours Ago</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-10">It's Nickybeit Enjoy's birthday today. Help him celebrate!
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal; margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> Yesterday at 10:45pm</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div>
                <div class="col-md-12">
                  <div class="text-center"><a href="#" style="color:#555; text-align:center;" >See all</a></div>
                </div>
              </div>
            </ul>
          </li>
          <li class="dropdown" style="margin-left:10px; margin-right:10px; text-align:center;"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="padding:0;"> <img src="<?php echo base_url('assets/images/chat-icon.png'); ?>" alt="user" /><br>
            Friend Requests <i class="fa fa-caret-down"></i> </a>
            <ul class="dropdown-menu login">
              <div>
                <div class="col-md-12 text-center" style="margin-top:10px; margin-bottom:10px; color:#000; font-size:16px;"><strong><i class="icon ion-ios-person-outline"></i> Friend Requests</strong></div>
              </div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-4">Vicky
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 2 Mutual Friends</p>
                  </div>
                </div>
                <div class="col-md-6 text-right pull-right" style="margin-top:10px;">
                  <button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button>
                  <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-4">Emeka
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 2 Mutual Friends</p>
                  </div>
                </div>
                <div class="col-md-6 text-right pull-right" style="margin-top:10px;">
                  <button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button>
                  <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-4">Hari
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 10 Mutual Friends</p>
                  </div>
                </div>
                <div class="col-md-6 text-right pull-right" style="margin-top:10px;">
                  <button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button>
                  <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-4">Roshan
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 4 Mutual Friends</p>
                  </div>
                </div>
                <div class="col-md-6 text-right pull-right" style="margin-top:10px;">
                  <button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button>
                  <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div>
                <div class="col-md-12">
                  <div class="text-center"><a href="#" style="color:#555; text-align:center;" >See all</a></div>
                </div>
              </div>
            </ul>
          </li>
          <li class="dropdown" style="text-align:center;margin-left:10px; margin-right:10px; "><a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none; padding:0;"> <img src="<?php echo base_url('assets/images/chat-icon-1.png'); ?>" alt="user" /><br>
            Messaging </a></li>
          <li class="dropdown" style="text-align:center; margin-left:10px; margin-right:10px;"><a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none; padding:0;"> <img src="<?php echo base_url('assets/images/create-event-icon-1.png'); ?>" alt="user" /><br>
            Create Event </a></li>
         
          <li class="dropdown" style="text-align:center;margin-left:10px; margin-right:10px; padding-left:10px; padding-right:10px; border-left:1px solid #ccc;"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="padding:0;"><img src="<?php echo base_url('assets/images/prof-icon.png'); ?>" alt="user" /><br>
            Profile <i class="fa fa-caret-down"></i> </a>
            <ul class="dropdown-menu login">
              <div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; color:#000; font-size:16px;">
                 <div style="width:10%; float:left;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" style="width:30px; height:30px;" /></div>
                 <div style="width:90%; float:left;"><strong> Saranya Chandrasekaran</strong><br> 
                 <span style="font-size:13px; color:#999;">Web developer at Vineture Inc.</span></div>
                </div>
              </div>
              <div> 
                
                <div class="col-md-12 text-center">
                <span style="color:e91e63;"><a href="#" style="color:#e91e63;" ><strong>View Profile</strong></a></span>
                  
                </div>
                 <div class="col-md-12">
               <div class="col-md-12" style="background:#f5f5f5; padding-top:5px; padding-bottom:5px;"><span style="color:e91e63;"><a href="#" style="color:#222; font-size:15px;" >My Account</a></span></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> Settings</a></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> Privacy Policy</a></div>
                 
                </div>
                <div class="col-md-12">
               <div class="col-md-12" style="background:#f5f5f5; padding-top:5px; padding-bottom:5px;"><span style="color:e91e63;"><a href="#" style="color:#222; font-size:15px;" >Manage</a></span></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> Edit Profile</a></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> My Event Feed</a></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> My Interests</a></div>
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                
                </div>
              
           
              <div>
                <div class="col-md-12">
                  <div class="col-md-12">
  <div class="text-left"><a href="<?php echo base_url('home/logout'); ?>" style="color:#333; text-align:left;" >Logout</a></div>
                  </div>
                </div>
              </div>
            </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-right hidden-sm" style="position:absolute; left:210px; top:0px;" >
          <div class="form-group"> <i class="icon ion-android-search"></i>
            <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px;" />
            <br/>
            <span id="display1"> </span> </div>
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
            
            <h3>Create Your Event</h3>
            <p>Please fill information to a create an event </p>
             <img src="../assets/images/banner.jpg" class="img-thumbnail"  alt="banner-image"/>
            <!-- Form progress -->
    <div class="form-wizard-steps form-wizard-tolal-steps-7">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="100" data-number-of-steps="7" style="width: 100%;"></div>
              </div>
             
              <!-- Step 6 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <p>Event Contact/ URL Links</p>
              </div>
              <!-- Step 6 --> 
              
     </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
    <form id="create_eventcontact" action="<?php echo base_url('eventhubb/update_eventcontact'); ?>"  method="post" enctype="multipart/form-data" > 
    	
    
    <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
                </div>
                <!-- Progress Bar -->
                 <div class="col-md-10">
                	<h4> <strong>Spice Up Your Upcoming Event By Uploading  A Promotional Ad Video {!Wowtag}</strong></h4>
            	</div>
                <div class="col-md-2">
                	<h4> <span>Step 1</span></h4>
            	</div>
            	<input type='hidden' name="event_id"  class="form-control" value="<?php echo $event->_id; ?>" >
                <div style="clear:both;"></div>
                <div class="col-md-9">
                <div class="col-md-6">
                  	<div class="form-group col-sm-12">
	                  <div class="pull-left" style="width:80%;">
	                    <label> Name </label>
	                    <input type="text" class="form-control"  name="eventcontactname" value="<?php if(isset($event->eventcontactname)) { echo $event->eventcontactname; } ?>" >
	                  </div>

	                    <div class="pull-left" style="width:17%; margin-left:3%; margin-top:15px;">                  
	                        <div class="toggle-switch">
	                          <label class="switch">
	                            <input type="checkbox" checked>
	                            <span class="slider round"></span>
	                          </label>
	                        </div>                      
	                    </div>

                  	</div>
                  <div class="form-group col-sm-12">
                   <div class="pull-left" style="width:80%;">
                    <label>Email </label>
                    <input type="text" class="form-control"  name="eventcontactemail" value="<?php echo $this->session->userdata('email'); ?>"  >
                     </div>
                    <div class="pull-left" style="width:17%; margin-left:3%; margin-top:15px;">
                  
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                          </label>
                        </div>
                      
                    </div>
                  </div>
                  <div class="form-group col-sm-12">
                   <div class="pull-left" style="width:80%;">
                    <label>Phone </label>
                    <input type="text" class="form-control"  name="eventcontactphone" value="<?php echo $this->session->userdata('phone'); ?>"  >
                    </div>
                    <div class="pull-left" style="width:17%; margin-left:3%; margin-top:15px;">
                  
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                          </label>
                        </div>
                      
                    </div>
                  </div>
                  <div class="form-group col-sm-12">
                    <label>Event Host Message</label>
                    <textarea type="text" class="form-control"  name="message"  ><?php if(isset($event->eventcontactmessage)) { echo $event->eventcontactmessage; } ?></textarea>
                  </div></div>
                  
                  <div class="col-md-6">
                  		<div class="hide_link">
		                  <div class="form-group col-sm-12">
		                    <label> Donation URL </label>
		                    <input type="text" class="form-control"  name="donation_url" value="<?php if(isset($event->donationsurl)) { echo $event->donationsurl; } ?>"  >
		                  </div>
		                  <div class="form-group col-sm-12">
		                    <label>Gift Registry URL </label>
		                    <input type="text" class="form-control"  name="gift_url" value="<?php if(isset($event->giftregistryurl)) { echo $event->giftregistryurl; } ?>"  >
		                  </div>
		                  <div class="form-group col-sm-12">
		                    <label>Other URL </label>
		                    <input type="text" class="form-control"  name="other_url" value="<?php if(isset($event->otherurl)) { echo $event->otherurl; } ?>" >
		                  </div>
             			</div>

		                  <div class="form-group col-sm-12">
		                    <div class="pull-left" style="width:5%; margin-top:15px;">
		                        <input type="checkbox" name="event_no_url" class="no_link" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"  onchange="valueChanged()"> 
		                      </div>
		                      <div class="pull-left" style="width:90%; margin-left:15px; margin-top:15px; font-size:15px;">Event Don't Have URLs</div>
		                  </div>

                  </div>
                  <div class="col-md-12" style="border:0.5px solid #ccc; margin-top:15px; margin-bottom:15px;"></div>
                   <div class="form-group col-md-12">
                   <div class="form-group col-md-12">
                   <div class="pull-left" style="width:5%;">
                        <input type="checkbox" name="public_share" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:95%; font-size:15px;">Publish &amp; Share on My !Wowhubb Network</div>
                      </div>
                      <div class="form-group col-md-12">
                      <div class="pull-left" style="width:5%;">
                        <input type="checkbox" name="specific_group" id="specific_group" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:95%; font-size:15px;">Publish to Specific Group
                      	<!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <input type="checkbox" name="" >  Wowhubb friends group
                                      </div>
                                      <div class="modal-body">
                                        <input type="checkbox" name="" >  My group only 
                                      </div>
                                      <div class="modal-footer">                                       
                                        <button type="button" class="btn btn-primary">Save</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                      </div>
                      </div>
                      <div class="form-group col-md-12">
                      <div class="pull-left" style="width:5%;">
                        <input type="checkbox" name="private_event" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:95%; font-size:15px;">This is a Private Event</div>
                      </div>
                      <div class="form-group col-md-12">
                      <div class="pull-left" style="width:5%;">
                        <input type="checkbox" name="reg_rsvp" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:95%; font-size:15px;">Guest Register with RSVP</div>
                   </div>
                   </div>
                </div>
               
                <div class='col-sm-3'>
                  <div class='col-sm-12' style="background-color:#f9f9f9;">
                    <div class='col-sm-12'>
                      <h5>Helpful Hints</h5>
                      <section class="ac-container">
                        <div>
                          <input id="ac-21" name="accordion-1" type="radio" />
                          <label for="ac-21">Event Host Details</label>
                          <article class="ac-small">
                            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-22" name="accordion-1" type="radio" />
                          <label for="ac-22">Event URLs</label>
                          <article class="ac-medium">
                            <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-23" name="accordion-1" type="radio" />
                          <label for="ac-23">Publish & Share Events on Network</label>
                          <article class="ac-large">
                            <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-24" name="accordion-1" type="radio" />
                          <label for="ac-24">Publish to specific group</label>
                          <article class="ac-large">
                            <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
                          </article>
                        </div>
                      </section>
                      <!-- panel-group --> 
                      
                    </div>
                  </div>
                </div>
                <br>
                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">
                  <button type="button" class="btn btn-next" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" class="btn btn-next">Publish</button>
                  </div>
                </div>
    </fieldset>  

</form>
           
        <!-- strat Step 7  -->          
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>	


<!-- Scripts
    ================================================= --> 
    
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/additional-methods.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 
<!--<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> -->
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>   
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.js')?>"></script>   
<script src="<?php echo base_url('assets/js/moment.js')?>"></script> 
 
<!-- model popup bootstrap --> 
<!-- <script src="<?php echo base_url('assets/js/bootstrap3.3.4.min.js')?>"></script> -->

<script>

 //create event form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#create_eventcontact", function(e){

        e.preventDefault();        
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
		                   // alert("success");
		                    swal({
		                                                 title: "Success!",
		                                                 text: "Your Event Created Successfully...",
		                                                 type: "success",
		                                                 timer: 5000
		                                                 }).then(() => {                     
		                   									 window.location.href = "<?php echo base_url('eventhubb/get_eventhubb'); ?>";
		                   								});;  
		                   
		                    }
		                    else 
		                   	{
		                    
		                    	swal("Sorry!", "somethink wrong try again !", "error");
		                  	 }          
		                }

		       });
     

 });


</script>

</body>
</html>
