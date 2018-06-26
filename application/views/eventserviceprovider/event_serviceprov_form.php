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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/wickedpicker.css')?>" />
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

/*animation stop*/
.landing-page .content-bg {
    background-color: rgba(255, 94, 58, 0.95);
    animation-name: none;
}
.form-wizard-steps {
    margin: auto;
    overflow: hidden;
    position: relative;
    margin-top: 9px;
}
.progress {
    height: 10px;
    margin-bottom: 11px;
    overflow: hidden;
    background-color: #f5f5f5;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    margin-top: 0px;
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

.more-less {
	float: right;
	color: #212121;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
	border-top-color: #EEEEEE;
}

.file {
	visibility: hidden;
	position: absolute;
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
	 
	}
.remove:hover {
	  background: white;
	  color: black;
	}

.product_gallery_remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
    width: 200px;
    margin-left: 137px;
  }
.product_gallery_remove:hover {
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
	  width: 199px;
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
}
 
.multipleInput-container input {  
    outline: none;
    font-size:13px;
    clear:both;
    height:40px;
	color:#333;
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
  font-size:13px;  
  border-radius: 6px;
  margin: 6px 2px 6px 6px;
}
 
.multipleInput-close {
    width:16px;
    height:16px;
    display:block;
    float:right;
    margin: -2px 0px 0px 8px;
  	color: #fff!important;
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
}
 
.keywordSearch-container input {  
    outline: none;
    font-size:13px;
    clear:both;
    height:40px;
    border:0;
	color:#333;
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
  font-size:13px;
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

.form-control{
  text-transform: capitalize;
}

.alert {
     padding: 4px; 
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
    width: 160px;
}

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
                       
       
            
      <img src="../assets/images/esp-banner.jpg" class="img-thumbnail"  alt="banner-image"/>
      
      
            <!-- Form progress -->
            <div class="form-wizard-steps form-wizard-tolal-steps-5">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="20" data-number-of-steps="5"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p>1.Basic Info</p>
              </div>
              <!-- Step 1 --> 
              
              <!-- Step 2 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                <p>2.Business Hours</p>
              </div>
              <!-- Step 2 --> 
              
              <!-- Step 3 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-image" aria-hidden="true"></i></div>
                <p>3.Product Gallery</p>
              </div>
              <!-- Step 3 --> 
              
              <!-- Step 4  -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                <p>4.Keyword Search</p>
              </div>
              <!-- Step 4 --> 
              
              <!-- Step 5 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-question" aria-hidden="true"></i></div>
                <p>5.ESP FAQ's</p>
              </div>
              
            </div>
            <!-- Form progress --> 
            <!--start  Form Step 1 -->
<form id="create_eventserviceprovider" action="<?php echo base_url('Eventserviceprovider/create_eve_service_provider'); ?>" method="post" enctype="multipart/form-data">

    <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="14.28" aria-valuemin="0" aria-valuemax="100" style="width: 14.28%"> </div>
                </div>
                <!-- Progress Bar -->
                
                <div class='col-sm-12'>
                  <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Basic Info</div>
                  <div class='form-group col-sm-9' >
                  <div class='row'>
                 <div class='form-group col-sm-12'> Business Contact Person Information<em>(To Be Used For Correspondence /Notification)</em></div>
                  
                    <div class='form-group col-sm-6'>
                      <label>First Name</label>
                      <input type='text' name="first_name" class="required form-control" />
                    </div>
                    <div class='form-group col-sm-6' >
                      <label>Last Name</label>
                      <input type='text' name="last_name"  class="required form-control"  />
                    </div>                    
                    <div class='form-group col-sm-6' >
                      <label>Email</label>
                      <input type='text'  name="business_email"  class="required form-control" style="text-transform: none;" />
                    </div>
                    <div class='form-group col-sm-6' >
                      <label>Phone</label>
                      <input type='text' name="phone_no" class="required form-control" maxlength="15" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" />
                    </div>
                    </div>
                    </div>
                  </div>
                  
                  <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-top:10px;">Business Information</div>
                  <div class='col-sm-5'>
                   <div class='row'>
                  				<div class="form-group col-sm-12" style="font-size: 13px;">
				                      <label>Services Type</label>
				                    <select name="service_type" class="required form-control" style="background-color:#eff0f1;">
				                     <option selected="">Select Your Services &nbsp;Type</option>
						                 <option value="CateringServices">Catering Services</option>
						                 <option value="Cakes">Cakes</option>
						                 <option value="Wines">Wines </option>
						                 <option value="BBQIndoor">BBQ Indoor &amp; Outdoor</option>
						                 <option value="Music">Music DJ Services</option>
						                 <option value="EventOrganizers">Event Organizers</option>
						                 <option value="BeauticianServices">Beautician Services</option>
						                 <option value="Photography">Photography &amp; Video Services </option>
						                 <option value="Decor">Decor &amp; Party Rentals</option>
						                 <option value="Floral">Floral</option>
						                 <option value="PartyCleaningServices">Party Cleaning Services</option>
						                 <option value="Limo">Limo &amp; Car Rentals</option>
						                 <option value="Dress">Dress &amp; Jewellery</option>
						                 <option value="MCsComedians">MC's &amp; Comedians</option>
						                 <option value="EventGuestSpeakers">Event Guest Speakers</option>
						                 <option value="EventTechnologySupport">Event Technology Support</option>
						                 <option value="EventGifting">Event Gifting &amp; Souveniers</option>
                             <option value="TourBusRentals">Tour Bus Rentals</option>
                             <option value="EventStaffingServers">Event Staffing & Servers</option>
                             <option value="PartyEntertainers">Party Entertainers</option>
                             <option value="LifeBandMusic">Life Band Music</option>
				                  	</select>
		                    	</div>

                    <div class='form-group col-sm-12' >
                      <label>Organization Name</label>
                      <input type='text' name="organisation_name" class="required form-control" />
                    </div>
                   
                    <div class='form-group col-sm-12' >
                      <label>Address1</label>
                      <input type='text' name="address1" class="required form-control" />
                    </div>
                    
                    <div class='form-group col-sm-12' >
                      <label>Address2</label>
                      <input type='text' name="address2" class="form-control" />
                    </div>   
                                  
                   
                    <div class='form-group col-sm-12' >
                      <label>Country</label>
                      	<select name="country" onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" style="background-color:#eff0f1;">
								        </select>
                    </div>

                    <div class='form-group col-sm-12' >
                        <label>State</label>
                        <select name="state" id="state" class="form-control"></select>
                        <script language="javascript">print_country("country");</script>  
                    </div> 

                    <div class='form-group col-sm-12' >
                        <label>City</label>                        
                        <input type='text' name="city" class="required txtOnly form-control" maxlength="25" />
                    </div>                          

                     <div class='form-group col-sm-12' >
                      <label>Zipcode/Postal Code</label>
                      <input type='text' name="zipcode" class="form-control" maxlength="6" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')"/>
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Website Links</label>
                      <input type='text' name="web_link" class="form-control" />
                    </div>
                    </div>
                  </div>
                  <div class='col-sm-7'>
                  <div class='row'>
                    <div class='form-group col-sm-12'>
                      <label>About Us</label>
                      <textarea type='text' name="description"  class="form-control" style="min-height:300px;" placeholder="Describe What Your Event Service Provider Is All About" maxlength="120" onchange = "cleanspecial_char(this)"></textarea>
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
                          <div class="alert alert-danger" id="img_req" role="alert" style="display:none;" >Cover Image is Required
                          </div>
                        <div class='form-group col-sm-12'>
					                <div class='col-sm-12' style="background-color:#f9f9f9;">					                       
					                    <div class="form-group" style="margin-bottom: 10px;"> 
						                    <div class="field" align="left">
						                        <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('files').click();" />
						                         	<div id="img_preview1"></div>
						                        <input type="file" style="display:none;" name="cover_img" id="files" class="file" accept="image/*" title="cover image" alt="cover image">  
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

                    <button type="button" class="cancel btn btn-next">Next <i class="fa fa-arrow-right"></i></button>
                  </div>
                </div>
    </fieldset>
              
              
              <!-- end Form Step 1 --> 
              
              <!--start Form Step 2 -->
     <fieldset>
                
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> </div>
                </div>
                <!-- Progress Bar -->
               
                <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-bottom:15px!important;">
                  Business Hours
                 </div> 
                    <div class='form-group col-sm-12'>                    
                      <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          &nbsp;
                          </div>
                        <div class="pull-left" style="width:10%; font-size:13px; margin-right:5px;">&nbsp;</div>
                        <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
                          <strong style="font-weight:bold;">Availability</strong>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <strong style="font-weight:bold;">Opens From</strong>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                       <strong style="font-weight:bold;">Closed At</strong>
                        </div>
                      </div>

                      <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="days[]"  style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="Monday">
                        </div>
                        <div class="pull-left" style="width:10%; font-size:13px; margin-right:5px;">Monday</div>
                        <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
                          <select name="Availability[]" class="form-control" style="background-color:#eff0f1;">
                            <option class="Open">Open</option>
                            <option class="Closed">Closed</option>
                            <option class="Open Half Day">Open Half Day</option>
                          </select>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="open_from[]" class="open_from form-control" />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                          <input type='text' name="close_at[]" class="close_at form-control" />
                        </div>
                      </div>

                      <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="days[]" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="Tuesday">
                        </div>
                        <div class="pull-left" style="width:10%; font-size:13px; margin-right:5px;">Tuesday</div>
                        <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
                        <select name="Availability[]" class="form-control" style="background-color:#eff0f1;">
                            <option class="Open">Open</option>
                            <option class="Closed">Closed</option>
                            <option class="Open Half Day">Open Half Day</option>
                        </select>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="open_from[]" class="open_from form-control" />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="close_at[]" class="close_at form-control" />
                        </div>
                      </div>

                      <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="days[]" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="Wednesday">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:13px; margin-right:5px;">Wednesday</div>
                        <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
                          <select name="Availability[]" class="form-control" style="background-color:#eff0f1;">
                               <option class="Open">Open</option>
                              <option class="Closed">Closed</option>
                              <option class="Open Half Day">Open Half Day</option>
                          </select>
                         </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="open_from[]" class="open_from form-control" />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="close_at[]" class="close_at form-control" />
                        </div>
                      </div>

                      <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="days[]" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="Thursday">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:13px; margin-right:5px;">Thursday</div>
                        <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
                          <select name="Availability[]" class="form-control" style="background-color:#eff0f1;">
                            <option class="Open">Open</option>
                            <option class="Closed">Closed</option>
                            <option class="Open Half Day">Open Half Day</option>
                          </select></div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text'  name="open_from[]"  class="open_from form-control"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="close_at[]" class="close_at form-control" />
                        </div>
                      </div>

                      <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="days[]" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="Friday">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:13px; margin-right:5px;">Friday</div>
                        <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
                        <select name="Availability[]" class="form-control" style="background-color:#eff0f1;">
                            <option class="Open">Open</option>
                            <option class="Closed">Closed</option>
                            <option class="Open Half Day">Open Half Day</option>
                        </select></div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="open_from[]"  class="open_from form-control"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text'  name="close_at[]" class="close_at form-control" />
                        </div>
                      </div>

                      <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="days[]" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="Saturday">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:13px; margin-right:5px;">Saturday</div>
                        <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
                        <select name="Availability[]"  class="form-control" style="background-color:#eff0f1;">
                            <option class="Open">Open</option>
                            <option class="Closed">Closed</option>
                            <option class="Open Half Day">Open Half Day</option>
                        </select></div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="open_from[]"  class="open_from form-control"  />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="close_at[]" class="close_at form-control"  />
                        </div>
                      </div>

                      <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="days[]" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="Sunday">
                          </div>
                        <div class="pull-left" style="width:10%; font-size:13px; margin-right:5px;">Sunday</div>
                        <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
                        <select name="Availability[]"  class="form-control" style="background-color:#eff0f1;">
                            <option class="Open">Open</option>
                            <option class="Closed">Closed</option>
                            <option class="Open Half Day">Open Half Day</option>
                        </select>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text'  name="open_from[]"  class="open_from form-control" />
                        </div>
                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:10px;">
                        <input type='text' name="close_at[]"  class="close_at form-control" />
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
                              <option value="">Select</option>
                              <option value="Book Us">Book Us</option>
                              <option value="Contact Us">Contact Us</option>
                              <option value="Request Pricing">Request Pricing</option> 
                        </select>
                      </div>
                            
                    <div class='form-group col-sm-12' style="margin-top:10px;" >
                      <select name="customer_engagement_btn1" class="form-control" style="background-color:#eff0f1;">
                        <option class="option">What Event are you Planning</option>
                        <option class="option">Wedding</option>
                        <option class="option">Birthday</option>
                        <option class="option">Anniversary</option>
                        <option class="option">Baby Shower</option>
                        <option class="option">Religiuos Event</option>
                        <option class="option">Holiday Party</option>
                        <option class="option">Corporate Event</option>
                        <option class="option">Political Event</option>
                        <option class="option">Social Event</option>
                        <option class="option">Baby Naming</option>
                        <option class="option">Team Outing</option>
                        <option class="option">Sales Event</option>
                        <option class="option">Product Launch Event</option>
                        <option class="option">Photo-File Show Event</option>
                        <option class="option">Bridal Showers</option>
                        <option class="option">Meeting</option>
                        <option class="option">Board Meeting</option>
                        <option class="option">Network Meeting</option>
                        <option class="option">Startup Event</option>
                        <option class="option">Group Workshop</option>
                        </select>
                    </div>
                     
                   <div class='form-group col-sm-12' >
                      
                    <div class="pull-left" style="width:10%;" >
                            <input type="checkbox" name="event_type"  style="width:18px; height:18px;" >
                            </div>
                          <div class="pull-left" style="width:90%; font-size:13px; margin-bottom:5px;">Event Type</div>
                          
                          <div class="pull-left" style="width:10%;">
                            <input type="checkbox" name="event_city" style="width:18px; height:18px;" >
                            </div>
                          <div class="pull-left" style="width:90%; font-size:13px; margin-bottom:5px;">Event City</div>
                          
                          <div class="pull-left" style="width:10%;">
                            <input type="checkbox" name="name"  style="width:18px; height:18px;" >
                            </div>
                          <div class="pull-left" style="width:90%; font-size:13px; margin-bottom:5px;">Name</div>
                          
                          <div class="pull-left" style="width:10%;">
                            <input type="checkbox" name="email" style="width:18px; height:18px;" >
                            </div>
                          <div class="pull-left" style="width:90%; font-size:13px; margin-bottom:5px;">Email</div>
                          
                          <div class="pull-left" style="width:10%;">
                            <input type="checkbox" name="phone"  style="width:18px; height:18px;" >
                            </div>
                          <div class="pull-left" style="width:90%; font-size:13px; margin-bottom:5px;">Phone Number</div>
                          
                          <div class="pull-left" style="width:10%;">
                            <input type="checkbox"  name="event_date"  style="width:18px; height:18px;" >
                            </div>
                          <div class="pull-left" style="width:90%; font-size:13px; margin-bottom:5px;">Event Date</div>
                          
                          <div class="pull-left" style="width:10%;">
                            <input type="checkbox"  name="event_time" style="width:18px; height:18px;" >
                            </div>
                          <div class="pull-left" style="width:90%; font-size:13px; margin-bottom:5px;">Event Time</div>
                        </div> 
                </div>
                  <div class='form-group col-sm-4'>
                      <label>Comments</label>
                      <textarea name="comments"  class="form-control" style="min-height:300px;" placeholder="Type Comments" >
                      </textarea>
                    </div>
                <div class='form-group col-sm-12' style="margin-top:25px;">
                  <div class="form-wizard-buttons">

                   <button type="button" class="btn btn-previous"><i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="button" class="btn btn-next">Next <i class="fa fa-arrow-right"></i></button>
                  </div>
                </div>
    </fieldset>
              <!-- end Step 2 --> 
              <!-- end Step 2 --> 
              
              <!--  Step 3 -->
    <fieldset>
              <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> </div>
                </div>
              <!-- Progress Bar -->
               
                
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
                      <div class='form-group col-sm-4'>
      						      <label>Product Head</label>
      						      <input type='text' name="product_header1" class="form-control" placeholder="Product/Services Header Here "  />
                      </div>
                      <div class='form-group col-sm-4'>
                        <label>Sales Discount Value</label>
                        <select name="discount_value1"  class="form-control" style="background-color:#eff0f1;">
                            <option value="">Select</option>
                            <option value="05%">05% Discount</option>
                            <option value="10%">10% Discount</option>
                            <option value="15%">15% Discount</option>
                            <option value="20%">20% Discount</option>
                            <option value="25%">25% Discount</option>
                            <option value="30%">30% Discount</option>
                            <option value="35%">35% Discount</option>
                            <option value="40%">40% Discount</option>
                            <option value="45%">45% Discount</option>
                            <option value="50%">50% Discount</option>
                            <option value="55%">55% Discount</option>
                            <option value="55%">55% Discount</option>
                            <option value="60%">60% Discount</option>
                            <option value="65%">65% Discount</option>
                            <option value="70%">70% Discount</option>
                            <option value="75%">75% Discount</option>
                            <option value="80%">80% Discount</option>
                            <option value="85%">85% Discount</option>
                            <option value="90%">90% Discount</option>
                            <option value="95%">95% Discount</option>
                            <option value="Free">Free</option>                                  
                        </select>
                      </div>
                      <div class='form-group col-sm-4'>
                        <label>Begin Date</label>
                        <input type='text' id="begine_from1" name="begining_fromdate1" class="form-control" placeholder="Begin Date" />
                      </div>
      						 

                    <div class='form-group col-sm-12' >
                        <textarea type='text' name="product_description1" maxlength="160" class="form-control" style="min-height:100px;" placeholder="Product/Services Description Here " ></textarea>
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
                      <input type='text' name="video_title1" class="form-control" />
                    </div>
                      <div class='form-group col-sm-12'>
                      <div class='col-sm-12' style="background-color:#f9f9f9;">
                        <label>Upload Hall  Photos/Images</label>
                        <div class="form-group">
					               

			                        <div id="video_show" style="display: none;" >
			                        	<div class="remove_video" style="cursor: pointer; position:absolute; top: 12px; left: 205px; z-index:9999;">
                                  <img src="<?php echo base_url('assets/images/wow-close.png'); ?>" />
                                </div>
			                        	<video width="200" height="110" controls>
										 	            <source src="mov_bbb.mp4" id="video_here">
										              Your browser does not support HTML5 video.
										            </video>
			                        </div>	

                               <span class="btn btn-primary btn-file"> 
                               <i class="fa fa-play-circle"></i>  Browse...<input type="file" name="product_video1" id="video_size"  accept="video/*">
                          </span>
                           <!-- alert msg show here -->
                        <div class="alert_msg" style="color: red; font-weight: bold; font-size: 16px;" ></div>

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
						  
                      <div class='form-group col-sm-4'>
                        <label>Product Head</label>
                        <input type='text' name="product_header2"  class="form-control" placeholder="Product/Services Header Here "  />
                      </div>
                      <div class='form-group col-sm-4'>
                        <label>Sales Discount Value</label>
                        <select name="discount_value2" id="days" class="form-control" style="background-color:#eff0f1;">
                            <option value="">Select</option>
                            <option value="05%">05% Discount</option>
                            <option value="10%">10% Discount</option>
                            <option value="15%">15% Discount</option>
                            <option value="20%">20% Discount</option>
                            <option value="25%">25% Discount</option>
                            <option value="30%">30% Discount</option>
                            <option value="35%">35% Discount</option>
                            <option value="40%">40% Discount</option>
                            <option value="45%">45% Discount</option>
                            <option value="50%">50% Discount</option>
                            <option value="55%">55% Discount</option>
                            <option value="55%">55% Discount</option>
                            <option value="60%">60% Discount</option>
                            <option value="65%">65% Discount</option>
                            <option value="70%">70% Discount</option>
                            <option value="75%">75% Discount</option>
                            <option value="80%">80% Discount</option>
                            <option value="85%">85% Discount</option>
                            <option value="90%">90% Discount</option>
                            <option value="95%">95% Discount</option>
                            <option value="Free">Free</option>                                  
                        </select>
                      </div>
                      <div class='form-group col-sm-4'>
                        <label>Begin Date</label>
                        <input type='text' id="begine_from2" name="begining_fromdate2" class="form-control" placeholder="Begin Date" />
                      </div>
                   


		                    <div class='form-group col-sm-12' >		                      
		                      <textarea type='text' name="product_description2" class="form-control" style="min-height:100px;" placeholder="Product/Services Description Here " ></textarea>
		                    </div>
                  		</div>
                  </div>
                 
                </div>
                
                <div class='col-sm-12'>
                  <div class="form-wizard-buttons">

                    <button type="button" class="btn btn-previous"><i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="button" class="btn btn-next">Next <i class="fa fa-arrow-right"></i></button>
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
                
                <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-bottom:15px!important;">
                  Create Your Business Search Coverage Areas &amp; Search Keywords
                 </div> 
                	<div class='form-group col-sm-12'>
						<div class="form-group col-md-12">Create and Generate Keyword that your clients and customers can use to search for your products and services on the !WOWHUBB NETWORK</div>
						<div class='form-group col-sm-12' style="padding-top:15px; padding-bottom:5px; background-color:#f7ebf0; border-radius:5px;  margin-top:25px;  color:#e91e63; margin-bottom:15px!important;">
	                    	<div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
	                        
		                        <div class="pull-left" style="width:21%; font-size:13px; margin-right:5px; color:#333;">Enter Your Business Coverage Areas</div>
		                        <div class="pull-left" style="width:25%; font-size:13px; margin-right:15px;">
		                        	<input type='text' id="coverage_area" name="coverage_area[]"  class="form-control" placeholder="Houston"  />
		                        </div>
		                        <div class="pull-left" style="width:11%; font-size:13px; margin-right:5px; color:#333;">Rank Client Base</div>
		                        <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
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
                        
                        <div class="pull-left" style="width:28%; font-size:13px; margin-right:5px; color:#333;"">Generate Your Business Search Keywords Here</div>
                        <div class="pull-left" style="width:36%; font-size:13px; margin-right:15px;">
                        	<input type='text'  name="keyword_search[]" id="keyword_search" class="form-control" placeholder="Vanilla Cakes"  /></div>                     
                        </div>
                        </div>                   
                       
                	</div>

                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">
                    <button type="button" class="btn btn-previous"><i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="button" class="btn btn-next">Next <i class="fa fa-arrow-right"></i></button>
                  </div>
                </div>
    </fieldset>
              
              <!--  Step 5 -->

    <fieldset>
                
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
                </div>
                <!-- Progress Bar -->
                
                
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
                   
                    <button type="button" class="btn btn-previous"><i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="submit" class="btn btn-next"> <i class="fa fa-thumbs-up"></i> Publish</button>
                  </div>
                </div>
    </fieldset>
              
              <!-- end Step 5 --> 
    
</form>
            
            
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
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
<script src="<?php echo base_url('assets/js/wickedpicker.js')?>"></script>

<script type="text/javascript">

// hide enter button to submit the form
$(document).ready(function(){
$('#create_eventserviceprovider').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
}); 
});   

$('.txtOnly').keypress(function (e) {
      var regex = new RegExp("^[a-zA-Z]+$");
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if (regex.test(str)) {
        return true;
      }
      else
      {
      e.preventDefault();
      $('.error').show();
      $('.error').text('Please Enter Alphabate');
      return false;
      }
    });

// not allow special character
function cleanspecial_char(t) {
            t.value = t.value.toString().replace(/[^a-zA-Z 0-9\n\r]+/g, '');
        }

// validation for image
$(document).on("click", ".cancel", function(e){

if( document.getElementById("files").files.length == 0 ){
    $('#img_req').show();
}
else
{
  $('#img_req').hide();
}
});



// begine from  event offering step3

$("#begine_from1").datetimepicker({        
                format:'M-d-Y', 
                timepicker:false,                                
                minDate: 0,                       
            });

$("#begine_from2").datetimepicker({        
                format:'M-d-Y', 
                timepicker:false,                                
                minDate: 0,                       
            });

// business start time and end time picker
  $(".open_from").wickedpicker();    
 
  $(".close_at").wickedpicker();


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
            "<br/><span class=\"product_gallery_remove\">Remove image</span>" +
            "</span>").insertAfter("#product_img1");
          $(".product_gallery_remove").click(function(){
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
            $('.alert_msg').text("Filesize must 2.5MB or below");  
            $('.alert_msg').show();
		                    
        }else{  
         		 
				  var $source = $('#video_here');				 
				  $source[0].src = URL.createObjectURL(this.files[0]);
				  $source.parent()[0].load();
				  $('#video_show').show();
				  $(".remove_video").click(function (){ 
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
               var $input = $('<input type="text" placeholder="Enter Keywords" style="font-size:13px;" />').keyup(function(event) {
 
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
		                                    text: "Event Service Provider Has Created Successfully..",
		                                    type: "success",
		                                    timer: 3000
		                                    }).then(() => {                     
		                					window.location.href = "<?php echo base_url('event/get_eventfeed'); ?>";
		              					});;  
		                   
		                    }
		                    else 
		                   	{
		                    	swal("Sorry!", "Something Wrong Try Again!", "error");
		                  	}          
		                }

		       });
		// }
     

 });

</script>
</body>
</html>
