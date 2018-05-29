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
<!-- country database using js file -->
<script src="<?php echo base_url('assets/js/countries.js')?>"></script> 
<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">



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
	  width: 200px;
      margin-left: 149px;
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
      margin-left: 149px;
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
            
            
            <h3>Event Venue</h3>
            <p>Please fill information to a create an event venues </p>
            
            
      <img src="../assets/images/event-venue.jpg" class="img-thumbnail"  alt="banner-image"/>
      
      
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
                <div class="form-wizard-step-icon"><i class="fa fa-glass" aria-hidden="true"></i></div>
                <p>Amenities-Food Beverages</p>
              </div>
              <!-- Step 2 --> 
              
              <!-- Step 3 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-building" aria-hidden="true"></i></div>
                <p>Halls</p>
              </div>
              <!-- Step 3 --> 
              
              <!-- Step 4  -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-dollar" aria-hidden="true"></i></div>
                <p>Availiabilty &amp; Pricing</p>
              </div>
              <!-- Step 4 --> 
              
              <!-- Step 5 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-question" aria-hidden="true"></i></div>
                <p>Event Venue FAQ's</p>
              </div>
              
            </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
            <form id="create_event" action="#"  method="post" enctype="multipart/form-data" >
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
                      <input type='text' name="first_name"  class="form-control" />
                    </div>
                    <div class='form-group col-sm-6' >
                      <label>Last Name</label>
                      <input type='text'  name="last_name"  class="form-control" />
                    </div>                    
                    <div class='form-group col-sm-6' >
                      <label>Email</label>
                      <input type='text' name="email"  class="form-control"  />
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
				                    <label>Venue Type</label>
				                    <select name="venue_type" id="days" class="form-control" style="background-color:#eff0f1;">
				                     	<option value="Conference Center">Conference Center</option>
						                <option value="Party Hall">Party Hall</option>
						                <option value="Private Dinning">Private Dinning</option>
						                <option value="WorkShop Expos">WorkShop Expos</option>
						                <option value="Concert Hall">Concert Hall</option>
						                <option value="Studio">Studio</option>
						                <option value="Theatre">Theatre</option>
						                <option value="Warehouse">Warehouse</option>
						                <option value="Winery">Winery</option>
						                <option value="Gallery">Gallery</option>
						                <option value="Bar">Bar</option>
						                <option value="Country Club">Country Club</option>
						                <option value="Hotel">Hotel</option>
						                <option value="Cafe">Cafe</option>
						                <option value="Resturant">Resturant</option>
						                <option value="Meeting Space">Meeting Space</option>
						                <option value="Beach Side">Beach Side</option>
				                  	</select>
		                    </div>

		                    <div class='form-group col-sm-12' >
		                      <label>Company/Organization Name</label>
		                      <input type='text' name="organisation_name"  class="form-control" />
		                    </div>
		                    <div class='form-group col-sm-12' >
		                      <label>Venue</label>
		                      <input type='text' name="venue"  class="form-control" />
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
		                      <label>Zipcode/Postal Code</label>
		                      <input type='text' name="zipcode"  class="form-control" />
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
		                      <label>Website Links</label>
		                      <input type='text' name="web_link"  class="form-control" />
		                    </div>

                    </div>
                </div>

                  		<div class='col-sm-7'>
		                  		<div class='row'>
				                    <div class='form-group-1up col-sm-12'>

				                      <textarea type='text'  name="description"  class="form-control" style="min-height:300px;" placeholder="Give A Brief Description of Yourself/ Organisation" ></textarea>
				                    </div>

				                    <div class='form-group col-sm-12'>
				                      <div class='col-sm-12' style="background-color:#f9f9f9;">
				                        <label>Add Cover Page Image</label>
				                        <div class="form-group">
				                          	<div class="field" align="left">
				                         		<input type="button" class="btn btn-primary"  value="Browse Image..." onclick="document.getElementById('cover_img').click();" />
				                         		<input type="file" style="display:none;" name="cover_img" id="cover_img" class="file" accept="image/*" title="cover image">  
				                        	</div>  
				                        </div>
				                      </div>
				                    </div>

				                    <div class='form-group col-sm-12'>
				                      <div class='col-sm-12' style="background-color:#f9f9f9;">
				                        <label>Add Logo Image</label>
				                        <div class="form-group">
				                          	<div class="field" align="left">
				                         		<input type="button" class="btn btn-primary"  value="Browse Image..." onclick="document.getElementById('files').click();" />
				                         		<input type="file" style="display:none;" name="logo_img" id="files" class="file" accept="image/*" title="logo image">  
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
                <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Amenities</div>
                  <div class='form-group col-sm-12' >
                  <div class='row'>
                 <div class='form-group col-sm-12'> Select amenities that are available at your Venue Location</div>
                 <div class='form-group col-sm-12' >
                  	<div class='row' style="margin-top:15px; margin-bottom:15px;">
                    	<div class="form-group-1 col-sm-3">
		                    <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                    </div>
		                    <div class="pull-left" style="width:90%; font-size:14px;">
		                    	<img src="../assets/images/event-venue-icons/av-icon.png" alt="image" width="32" height="32"/>A/V Equipments
		                    </div>
		                </div>

                     	<div class="form-group-1 col-sm-3">
		                    <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                    </div>
		                    <div class="pull-left" style="width:90%; font-size:14px;">
		                    	<img src="../assets/images/event-venue-icons/wifi-icon.png" alt="image" width="32" height="32"/>WiFi
		                    </div>
		                </div>

                     	<div class="form-group-1 col-sm-3">
		                    <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                    </div>
		                    <div class="pull-left" style="width:90%; font-size:14px;">
		                    	<img src="../assets/images/event-venue-icons/car-icon.png" alt="image" width="32" height="32"/>Street Parking
		                    </div>
		                </div>

                   		<div class="form-group-1 col-sm-3">
		                    <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                    </div>
		                    <div class="pull-left" style="width:90%; font-size:14px;">
		                    	<img src="../assets/images/event-venue-icons/handi-icon.png" alt="image" width="32" height="32"/>Handicap Accessible
		                    </div>
		                </div>

                    </div>

                    <div class='row' style="margin-bottom:15px;">
                    	<div class="form-group-1 col-sm-3">
		                    <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                    </div>
		                    <div class="pull-left" style="width:90%; font-size:14px;">
		                    	<img src="../assets/images/event-venue-icons/rt-icon.png" alt="image" width="32" height="32"/>Rooftop
		                    </div>
		                </div>

                    	<div class="form-group-1 col-sm-3">
		                    <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                    </div>
		                    <div class="pull-left" style="width:90%; font-size:14px;">
		                    	<img src="../assets/images/event-venue-icons/pet-icon.png" alt="image" width="32" height="32"/>Pet Friendly
		                    </div>
		                </div>

                      	<div class="form-group-1 col-sm-3">
		                    <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                    </div>
		                    <div class="pull-left" style="width:90%; font-size:14px;">
		                    	<img src="../assets/images/event-venue-icons/valet-icon.png" alt="image" width="32" height="32"/>Valet Parking
		                    </div>
		                </div>

                        <div class="form-group-1 col-sm-3">
		                    <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                    </div>
		                    <div class="pull-left" style="width:90%; font-size:14px;">
		                      	<img src="../assets/images/event-venue-icons/outdoor-icon.png" alt="image" width="32" height="32"/>Outdoor Space
		                    </div>
		                </div>  
                    </div>

                </div>  
                    <div class='form-group col-sm-12' >
                  		<div class="row">
                    		<div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;"> Food  &amp; Beverages
                    		</div>
                  		</div>
                  		<div class="row">
                    		<div class='form-group col-sm-3'> <strong style="font-weight:bold;">Food Items</strong></div>
                    		<div class='form-group col-sm-3'> <strong style="font-weight:bold;">Beverages</strong></div>
                  		</div>

                  	<div class="form-group col-sm-6">
                    	<div class='row' style="margin-top:15px; margin-bottom:15px;">
                      
                      		<div class="form-group-1 col-sm-6">
                        		<div class="pull-left" style="width:10%;">
                          		<input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          		</div>
                        		<div class="pull-left" style="width:90%; font-size:14px;">
                        			<img src="../assets/images/event-venue-icons/ihc-icon.png" alt="image" width="32" height="32"/>In-House Catering Only
                        		</div>
                        	</div>

                      		<div class="form-group-1 col-sm-6">
                        		<div class="pull-left" style="width:10%;">
                          		<input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          		</div>
                        		<div class="pull-left" style="width:90%; font-size:14px;"><img src="../assets/images/event-venue-icons/ihs-icon.png" alt="image" width="32" height="32"/>In-House Supplies Only</div>
                        	</div>

                      		<div class="form-group-1 col-sm-6" style="margin-top:15px;">
                        		<div class="pull-left" style="width:10%;">
                          		<input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          		</div>
                        		<div class="pull-left" style="width:90%; font-size:14px;"><img src="../assets/images/event-venue-icons/ihc-icon.png" alt="image" width="32" height="32"/>Out-Door Catering Allowed</div>
                        	</div>

                      		<div class="form-group-1 col-sm-6" style="margin-top:15px;">
                        		<div class="pull-left" style="width:10%;">
                          		<input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          		</div>
                        		<div class="pull-left" style="width:90%; font-size:14px;"><img src="../assets/images/event-venue-icons/ihs-icon.png" alt="image" width="32" height="32"/>Out-Door Supplies Allowed</div>
                        	</div>
                      
                    	</div>
                  	</div>
                             
                </div>                              
            </div>
        	</div>
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
                
                <div class='col-sm-12'>
                  <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Venue Halls Info</div>
                  	<div class='form-group col-sm-7' >
                  		<div class='row'>                
                  
		                    <div class='form-group col-sm-6' >
		                      	<label>How Many Event Venue Halls Do You Have ?</label>
		                      	<select name="venue_hall_count" class="form-control" style="background-color:#eff0f1;">
			                      	<option value="1">1 Event Venues Hall</option>
							        <option value="2">2 Event Venues Halls</option>
			                 		<option value="3">3 Event Venues Halls</option>
			                 		<option value="4">4 Event Venues Halls</option>
			                 		<option value="5">5 Event Venue Halls</option>
			                 		<option value="6">6 Event Venue Halls</option>
			                 	</select>
		                    </div>

                    		<div class='form-group col-sm-6' >
                      			<label>Select Venue 1 Hall Type</label>
			                    <select name="venue_hall_type" class="form-control" style="background-color:#eff0f1;">
							        <option value="Conference Center">Conference Center</option>
					                <option value="Party Hall">Party Hall</option>
					                <option value="Private Dinning">Private Dinning</option>
					                <option value="WorkShop/Expos">WorkShop/Expos</option>
					                <option value="Concert Hall">Concert Hall</option>
					                <option value="Studio">Studio</option>
					                <option value="Theatre">Theatre</option>
					                <option value="Warehouse">Warehouse</option>
					                <option value="Winery">Winery</option>
					                <option value="Gallery">Gallery</option>
					                <option value="Bar">Bar</option>
					                <option value="Country Club">Country Club</option>
					                <option value="Hotel">Hotel</option>
					                <option value="Cafe">Cafe</option>
					                <option value="Resturant">Resturant</option>
					                <option value="Meeting Space">Meeting Space</option>
					                <option value="Beach Side">Beach Side</option>
					            </select>
                    		</div> 

		                    <div class='form-group col-sm-12' >
		                      <label>Enter Hall Name</label>
		                      <input type='text' name="hall_name" class="form-control"  />
		                    </div>
		                    <div class='form-group col-sm-6' >
		                      <label>Seating Capacity</label>
		                      <input type='text'  name="seating_capacity" class="form-control"  />
		                    </div>
		                    <div class='form-group col-sm-6' >
		                      <label>Standing Capacity</label>
		                      <input type='text'  name="standing_capacity" class="form-control"  />
		                    </div>
           
                    	</div>
                    </div>

                    <div class="col-md-5">
	                    <div class='form-group col-sm-12'>
	                      <label>Hall Description</label>
	                      <textarea type='text' name="event_description"  class="form-control" style="min-height:180px;" placeholder="Describe What Your Hall Information is" ></textarea>
	                    </div>
                    </div>

                    <div class='form-group col-sm-12'>
                      	<div class='col-sm-6' style="background-color:#f9f9f9;">
	                        <label>Upload Hall  Photos/Images</label>
	                        <div class="form-group">
					            <div class="field" align="left">
					                <input type="button" class="btn btn-primary"  value="Browse Image..." onclick="document.getElementById('product_img1').click();" />
					                <input type="file" style="display:none;" name="product_img1" id="product_img1" class="file" accept="image/*" title="cover image">  
					            </div>  
					        </div>
                      	</div>               
                    </div>
                    <!-- <div class="col-sm-12 text-center"> 

                    		<a href="JavaScript:void(0);">
                    		<i class="fa fa-plus-circle"></i> Add More Event Halls Info </a>
                    </div> -->
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
                  Pricing  And Availability Info
                 </div> 
                <div class='form-group col-sm-12'> 
                 <div class='form-group col-sm-1'><img src="../assets/images/event-venue-icons/hall-1.jpg" alt="image"/> </div>
                 	<div class='form-group col-sm-11'>
                    <div class="form-group col-md-12">Hall 1 (  Grace Banquet Center 1)</div>
                     <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          &nbsp;
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">&nbsp;</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;"><strong style="font-weight:bold;">Availability</strong>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <strong style="font-weight:bold;">Daily Rate</strong>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                       <strong style="font-weight:bold;">Hourly Rate</strong>
                        </div>
                        </div>
                    <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Monday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Available</option>
                 <option class="option">Not Available</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$2000"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$200"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Tuesday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Available</option>
                 <option class="option">Not Available</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$2000"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$200"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Wednesday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Available</option>
                 <option class="option">Not Available</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$2000"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$200"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Thursday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Available</option>
                 <option class="option">Not Available</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$2000"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$200"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Friday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Available</option>
                 <option class="option">Not Available</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$2000"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$200"  />
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:14px; margin-right:5px;">Saturday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Available</option>
                 <option class="option">Not Available</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$2000"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="$200"  />
                        </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class='form-group col-sm-12'>                 
                 	
					<div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Coverage Areas & Neigbourhood</div>
                  <div class='form-group col-sm-12' >
                  <div class='row'>
                 <div class='form-group col-sm-12'> Add Location /Neigbourhoods Covered by Your Event Hosting Venues</div></div>
                 <div class='row'>
                 <div class='form-group col-sm-12'>
					<div class="col-md-9">
  						<input type='text' id="coverage_area" name="coverage_area[]"  class="form-control" placeholder="Houston"  /> 
					</div>
					<!-- <div class="col-md-3"><a href="#">Add</a></div> -->
                 </div>
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
                
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
                </div>
                <!-- Progress Bar -->
                <h4> <span>Step 5 - 5</span></h4>
                
                <div class="col-md-12">
               
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Event Venue FAQs</div>
                 
                 
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
                    <button type="button" class="btn btn-next">Finish</button>
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

<script type="text/javascript">
	
//image preview and delete step1 cover image

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#cover_img").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove1\">Remove image</span>" +
            "</span>").insertAfter("#cover_img");
          $(".remove1").click(function(){
            $(this).parent(".pip").remove();
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});	


//image preview and delete step1 logo

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
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
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
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
            "<br/><span class=\"remove1\">Remove image</span>" +
            "</span>").insertAfter("#product_img1");
          $(".remove1").click(function(){
            $(this).parent(".pip").remove();
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API");
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


</script>
</body>
</html>
