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

<!-- country database using js file -->
<script src="<?php echo base_url('assets/js/countries.js')?>"></script> 

<!-- file upload -->

<!-- CSS adjustments for browsers with JavaScript disabled -->

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">

.landing-page .content-bg {
    background-color: rgba(255, 94, 58, 0.95);
    animation-name: none;
}
	
	.form-wizard .btn.btn-previous, .form-wizard .btn.btn-previous:focus, .form-wizard .btn.btn-previous:active:focus, .form-wizard .btn.btn-previous.active:focus {
    background: #888888!important;
}
	/*popup close button  */
	.large.tooltip-inner {
		max-width: 350px;
		width: 350px;
	}
	.form-wizard h3 {
    font-size: 13px;
    font-weight: bold;
    color: #e91e63;
    line-height: 20px;
    margin-top: 0;
    margin-bottom: 5px;
    text-transform: none;
}
.form-wizard h4 {
    float: left;
    font-size: 13px;
    font-weight: bold;
    color: #e91e63;
    line-height: 26px;
    width: 100%;
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
		font-size: 13px;
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
	
	#btnAdd10, #btnremove,#remove_day{
		background-image: url("<?php echo base_url('assets/images/close-outline-32.png')?>");
		background-repeat: no-repeat;
		border: none;
		width: 32px;
		height: 32px;
		cursor: pointer;
		color: transparent;
		background-color: transparent;
		outline: none;
		background-position:74px -2px;
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
	  width: 160px;
	  margin-left: 107px;
     
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
	  width: 160px;
      margin-left: 0px;
	}
	.remove1:hover {
	  background: white;
	  color: black;
	}

	.tab {
	  display: none;
	}
.form-group-1 img {    
    left: 24px;
    position: absolute;
    top: 7px;
}

img {
    max-width: 200px;
    height: auto;
    display: inline-block;
	}

img, #img_files3 {
    max-width: 160px;
    height: auto;
    display: inline-block;
	}
img, #img_files4 {
    max-width: 160px;
    height: auto;
    display: inline-block;
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
.step-icn
{
	width: 48px;
    height: 48px;
    margin-top: 0;
    background: #e91e63;
    font-size: 22px;
    line-height: 48px;
	border-radius:50%;
	color:#fff;
	padding:0px 15px;
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
.alert {
     padding: 0px; 
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
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
<!-- breadcrumb for page link -->

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
            
            
          
            
      <img src="../assets/images/buss-banner.jpg" class="img-thumbnail"  alt="banner-image"/>
      
      
            <!-- Form progress -->
            <div class="form-wizard-steps form-wizard-tolal-steps-5">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="20" data-number-of-steps="5"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p>1.Sales Event Details</p>
              </div>
              <!-- Step 1 --> 
              
              <!-- Step 2 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-exclamation" aria-hidden="true"></i></div>
                <p>2.!Wowtag</p>
              </div>
              <!-- Step 2 --> 
              
              <!-- Step 3 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <p>3.Sales Event Links</p>
              </div>
              <!-- Step 3 --> 
              
              <!-- Step 4  -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                <p>4.Sales Event Offerings</p>
              </div>
              <!-- Step 4 --> 
              
              <!-- Step 5 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-flash" aria-hidden="true"></i></div>
                <p>5.Publish &amp; Promote</p>
              </div>
              
            </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
    <form id="create_business_event" action="<?php echo base_url('Event/create_business_event'); ?>"  method="post" enctype="multipart/form-data" autocomplete="off" >
       
        <fieldset>
                <!-- Progress Bar -->
		                <div class="progress">
		                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="14.28" aria-valuemin="0" aria-valuemax="100" style="width: 14.28%"> </div>
		                </div>
		                <!-- Progress Bar -->

		            <div class='col-sm-5'>

		                <div class='row'>
			                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; font-weight:bold;">Sales Event Objective</div>
			                  	 
			                  	 
			                    <div class='form-group col-sm-12' >
			                      <label>Event Category</label>
			                      <input type='text' name="event_category"  class="form-control" value="<?php echo $this->session->userdata('event_category'); ?>"  readonly />
			                    </div>

			                    <div class='form-group col-sm-12' >
			                      <label>Sales Event Campaign Objective</label>
			                      <input type='text' name="brand_awareness"  class="form-control" value="<?php echo $this->session->userdata('campaign_objective'); ?>" readonly/>
			                    </div>
			                    <div class='form-group col-sm-12' >
			                      <label>Event Name</label>
			                      <input type='text' id="event_date" name="event_name" class="form-control required" autocomplete="off" onchange = "cleanspecial_char(this)"/>
			                    </div>
		                </div>

	                 		<div class='row'>                   
	                    
			                    <div class='form-group col-sm-6' style="width:45%;" >
			                      <label>Sales Event Start Date</label>
			                      <input type='text' id="event_startdate" name="event_startdate" class="form-control required" autocomplete="off" />
			                    </div>

			                    <div  class='form-group col-sm-6' style="width:45%;" >
			                      <label>Sales Event Start Time</label>
			                      <input type='text' id="event_startime" name="event_startime" class="form-control required" autocomplete="off" />
			                    </div>
			                   
			                    <div class='form-group col-sm-6' style="width:45%;" >
			                      <label>Sales Event End Date</label>
			                      <input type='text' id="event_enddate" name="event_enddate" class="form-control required" autocomplete="off" />
			                    </div>

			                    <div class='form-group col-sm-6' style="width:45%;">
			                      <label>Sales Event End Time</label>
			                      <input type='text' id="event_endtiming" name="event_endtiming" class="form-control required" autocomplete="off" />
			                    </div>
	                   
	                  		</div>

                	</div>

			            <div class='col-sm-4'>
			                <div class='row'>
			                    <div class='form-group col-sm-12'>
			                      <label>Event Description</label>
			                      <textarea type='text' id="description" name="event_description"  class="form-control required" style="min-height:300px;" maxlength="160" placeholder="Describe What Your Event Is All About" onkeypress="return blockSpecialChar(event)" autocomplete="off" onchange = "cleanspecial_char(this)"></textarea>
			                    </div>

			                    <div class='form-group col-sm-12'>
						            <div class='col-sm-12' style="background-color:#f9f9f9;">
						                <label>Event Cover Photo <strong style="color: red; font-size: 20px;"> * </strong></label>
						                <label>Please browse to upload cover photo</label>
						                <div class="alert alert-danger" id="img_req" role="alert" style="display:none;" >Cover Image is Required
                                		</div>
						                    <div class="form-group" style="margin-bottom: 10px;"> 
							                    <div class="field" align="left">
							                        <input type="button" class="btn btn-primary"  value="Browse..." onclick="document.getElementById('files').click();" />
							                        <input type="file" style="display:none;" name="cover_img" id="files" class="file required" accept="image/*" title="cover image">  
							                    </div> 
						                    </div>		                        
						            </div>
					            </div>

			                    <div class='form-group col-sm-12'>
						            <div class='col-sm-12' style="background-color:#f9f9f9;">
						                <label>Sponsors Logo <strong style="color: red; font-size: 20px;"> * </strong></label>
						                        
						                    <div class="form-group" style="margin-bottom: 10px;"> 
							                    <div class="field" align="left">
									                <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('logo').click();" />
									                <input type="file" style="display:none;" name="logo_img" id="logo" class="file" accept="image/*" title="cover image">  
									            </div> 
						                    </div>		                        
						            </div>
					            </div>

			                </div>
			            </div>

			                <div class='col-sm-3'>
			                  <div class='col-sm-12' style="background-color:#f9f9f9;">
			                    <div class='col-sm-12'>
			                      <h5>Helpful Hints</h5>
			                      <section class="ac-container">
			                        <div>
			                          <input id="ac-1" name="accordion-1" type="radio" />
			                          <label for="ac-1">What is an Event Name?</label>
			                          <article class="ac-small">
			                            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
			                          </article>
			                        </div>
			                        <div>
			                          <input id="ac-2" name="accordion-1" type="radio" />
			                          <label for="ac-2">How to Upload the Event Covepage Photo/ Image?</label>
			                          <article class="ac-medium">
			                            <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
			                          </article>
			                        </div>
			                        <div>
			                          <input id="ac-3" name="accordion-1" type="radio" />
			                          <label for="ac-3">How to select the Time Zone?</label>
			                          <article class="ac-large">
			                            <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
			                          </article>
			                        </div>
			                        <div>
			                          <input id="ac-4" name="accordion-1" type="radio" />
			                          <label for="ac-4">How to select the Event Days Selection?</label>
			                          <article class="ac-large">
			                            <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
			                          </article>
			                        </div>
			                      </section>
			                      <!-- panel-group --> 
			                      
			                    </div>
			                  </div>
			                </div>

			               <div class='col-sm-12'>
                  <div class="form-wizard-buttons">
                    <button type="button" class="btn" style="background:#e72026;"> <i class="fa fa-save"></i> Save Draft</button>
                    <button type="button" class="btn cancel btn-next">Next <i class="fa fa-arrow-right"></i></button>
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

			                <div class='col-sm-9'>
			                  <div class='col-sm-12'>
			                    <div class='col-sm-12' style="padding: 10px 0;">
			                      <div class='col-sm-12' style="margin-bottom: 0px;">
			                        <div class="text-center">
			                          <label style="color:#e91e63; font-weight: bold; font-size: 16px">Create Your Event -!Wowtag </label>
			                        </div>
			                      </div>
			                      <div class='form-group-1 col-sm-12'>
			                        <div class="text-center" >
			                        	<img src="../assets/images/wow-pink.png"> 
			                          <input type='text' id="wow_title" name="event_title" class="form-control required" onkeydown="return alphaOnly(wow_title);" style="padding: 6px 30px;"  placeholder="Enter Your !Wowtag Title Here      Example:  Craigsbirthday2017" autocomplete="off"/>
			                        </div>
			                      </div>
			                    </div>
			                  </div>
			                  <div class='form-group col-sm-12'>
			                    <div class='col-sm-6' style="background-color:#f9f9f9; padding-top:15px;">
			                      <div class="text-center">
			                        <label style="color:#333; font-weight: bold; font-size: 16px">Upload Your Event -!Wowtag Video </label>
			                      </div>
				                       <div class="form-group">
					                      	

					                        <div id="video_show" style="display: none;" >
					                        	<div class="remove_wowtag" style="cursor: pointer;">
							                       <i class="fa fa-window-close" style="font-size:25px; margin-left: 171px;"></i>
							                    </div>
					                        	<video width="200" height="110" controls>
												 	 <source src="mov_bbb.mp4" id="video_here">
												    Your browser does not support HTML5 video.
												</video>
												<audio id="video_url"></audio>
					                        </div>
					                        
                                            <span class="btn btn-primary btn-file"> 
                       	 <i class="fa fa-play-circle"></i> Upload Video<input type="file" name="wowtag_video" id="video_size" class="file" accept="video/*">
                       	</span>
					                        <div class="input-group col-xs-12" style="margin-top:0px;">
					                          <p>Choose a compelling 60-120 seconds event promotional ads video that will create a lasting impression in your viewers mind</p>
					                        </div>                        
				                      </div>
			                    </div>
			                    <div class='col-sm-6' style="margin-top: 10px;">
                                <div class="text-left">
                        <label style="color:#333; font-weight: bold; font-size: 14px">Event Promotional Video </label>
                      </div>
			                      <label>!Wowtag Runtime From: </label>
			                      <input type='text'  id="runtime_from" name="runtime_from" class="form-control required" placeholder="Event Date" autocomplete="off" />
			                    </div>
			                    <div class='col-sm-6' style="margin-top: 10px;" >
			                      <label>!Wowtag Runtime To: </label>
			                      <input type='text' id="totime_to" name="totime_to" class="form-control required" placeholder="Event Date" autocomplete="off"/>
			                    </div>    
			                  </div>
                			</div>
                
			                <div class="row">
			                  <div class='col-sm-3'>
			                    <div class='col-sm-12' style="background-color:#f9f9f9;">
			                      <div class='col-sm-12'>
			                        <h5>Helpful Hints</h5>
			                        <section class="ac-container">
			                          <div>
			                            <input id="ac-5" name="accordion-1" type="radio"/>
			                            <label for="ac-5">How to Upload the Event !Wowtags</label>
			                            <article class="ac-small">
			                              <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
			                            </article>
			                          </div>
			                          <div>
			                            <input id="ac-6" name="accordion-1" type="radio" />
			                            <label for="ac-6">Example of !Wowtags</label>
			                            <article class="ac-medium">
			                              <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
			                            </article>
			                          </div>
			                          <div>
			                            <input id="ac-7" name="accordion-1" type="radio" />
			                            <label for="ac-7">Promoting event using !Wowtags</label>
			                            <article class="ac-large">
			                              <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
			                            </article>
			                          </div>
			                          <div>
			                            <input id="ac-8" name="accordion-1" type="radio" />
			                            <label for="ac-8">What is !Wowtag Runtime</label>
			                            <article class="ac-large">
			                              <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
			                            </article>
			                          </div>
			                        </section>
			                        <!-- panel-group --> 
			                        
			                      </div>
			                    </div>
			                  </div>
			                </div>
			                 <div class='form-group col-sm-12' style="margin-top:25px;">
                 <div class="form-wizard-buttons">
                    <button type="button" class="btn" style="background:#e72026;"><i class="fa fa-save"></i> Save Draft</button>
                    <button type="button" class="btn btn-previous"><i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="button" class="btn btn-next">Next <i class="fa fa-arrow-right"></i></button>
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

                
                <div class="col-md-9"> 
    					<!-- Nav tabs category -->
					    <ul class="nav nav-tabs faq-cat-tabs">
					      <li class="active"><a href="#faq-cat-1" data-toggle="tab" class="text-center" style="font-weight:bold;">Online Shopping/ Website</a></li>
					      <li><a href="#faq-cat-2" data-toggle="tab" class="text-center" style="font-weight:bold;">Physical Store Visit</a></li>					      
					    </ul>

    				<div class="tab-content faq-cat-content">
					      	<div class="tab-pane active in fade" id="faq-cat-1">
						        <div class="row">
						        <div class="form-group col-sm-6">
						        	<div class="col-sm-12">

					                  <div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; font-weight:bold;">Objective</div>
					                    <div class="form-group col-sm-12" style="margin-top:15px;">

					                       <select name="online_sales_objective"  class="form-control" style="background-color:#eff0f1;">
					                       			<option>Select</option>
									                <option value="Send Visitors to Website">Send Visitors to Website</option>
									                <option value="Reach Targeted Audience Near your Business">Reach Targeted Audience Near your Business</option>
									                <option value="Raise Attendance to your Event">Raise Attendance to your Event</option>
									                <option value="Get People to Claim Offers">Get People to Claim Offers</option>
									                     
									        </select>

					                    </div>
					              
					               </div>

					                     <div class="form-group col-sm-12" style="margin-top: 10px;">
							                 	 <div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; font-weight:bold;">Sales Promotion Links</div>
							                   
							                    <div class="form-group col-sm-12">
							                      <label>Enter Your Online URLS</label>
							                      <input type="text"  name="sales_online_url" class="form-control">
							                    </div>
					                    </div>					                
					                   
					            </div>
					                    <div class="form-group col-sm-6">
					                  <div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; font-weight:bold;">Select Sales Promotion Country</div>
					                    <div class="form-group col-sm-12" style="margin-top:15px;">

					                      <select name="online_country" onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" style="background-color:#eff0f1;">
									                     
									      </select>
					                    </div>
					                    <div class="form-group col-sm-12">
					                      <label>Enter Sales Promotion State</label>
					                      
					                       <select name="online_state" id ="state" class="form-control"></select>
					                       <script language="javascript">print_country("country");</script>	
					                    </div>
					                    </div>
					                   
					                  </div>
					      	</div>

      					<div class="tab-pane fade" id="faq-cat-2">
      						<div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; font-weight:bold;">Select Sales Promotion Country</div>
		      				<div class="form-group col-sm-9">
		                  
			                    <div class="form-group col-sm-12" style="margin-top:15px;">

			                      <select name="physical_country" id="days" class="form-control" style="background-color:#eff0f1;">
							                      		<option value="">Country </option> 
			                                            <option value="Afghanistan">Afghanistan </option>
			                                            <option value="Albania">Albania </option>
			                                            <option value="Algeria">Algeria </option>
			                                            <option value="American Samoa">American Samoa </option>
			                                            <option value="Andorra">Andorra </option>
			                                            <option value="Angola">Angola </option>
			                                            <option value="Australia">Australia </option>
			                                            <option value="Bahamas">Bahamas </option>
			                                            <option value="Bahrain">Bahrain </option>
			                                            <option value="Bangladesh">Bangladesh </option>
			                                            <option value="Barbodos">Barbodos </option>
			                                            <option value="Canada">Canada </option>
			                                            <option value="Cape Verde">Cape Verde </option>
			                                            <option value="Chile">Chile </option>
			                                            <option value="China">China </option>
			                                            <option value="Colombia">Colombia </option>
			                                            <option value="Denmark">Denmark </option>
			                                            <option value="Dominica">Dominica </option>
			                                            <option value="Dominican Republic">Dominican Republic </option>
			                                            <option value="Finland">Finland </option>
			                                            <option value="France">France </option>
			                                            <option value="French Guiana">French Guiana </option>
			                                            <option value="Gabon">Gabon </option>
			                                            <option value="Gambia">Gambia </option>
			                                            <option value="Greece">Greece </option>
			                                            <option value="Greenland">Greenland </option>
			                                            <option value="Hong Kong">Hong Kong </option>
			                                            <option value="Hungary">Hungary </option>
			                                            <option value="Iceland">Iceland </option>
			                                            <option value="India">India </option>
			                                            <option value="Iraq">Iraq </option>
			                                            <option value="Ireland">Ireland </option>
			                                            <option value="Italy">Italy </option>
			                                            <option value="Jamaica">Jamaica </option>
			                                            <option value="Japan">Japan </option>
			                                            <option value="Kenya">Kenya </option>
			                                            <option value="Kuwait">Kuwait </option>
			                                            <option value="Latvia">Latvia </option>
			                                            <option value="Lebanon">Lebanon </option>
			                                            <option value="Liberia">Liberia </option>
			                                            <option value="Macao">Macao </option>
			                                            <option value="Madagaskar">Madagaskar </option>
			                                            <option value="Malawi">Malawi </option>
			                                            <option value="Malaysia">Malaysia </option>
			                                            <option value="Mali">Mali </option>
			                                            <option value="Malta">Malta </option>
			                                            <option value="Mexico">Mexico </option>
			                                            <option value="Monaco">Monaco </option>
			                                            <option value="Myanmar">Myanmar </option>
			                                            <option value="Nepal">Nepal </option>
			                                            <option value="Netherlands">Netherlands </option>
			                                            <option value="Nigeria">Nigeria </option>
			                                            <option value="Norway">Norway </option>
			                                            <option value="Oman">Oman </option>
			                                            <option value="Pakistan">Pakistan </option>
			                                            <option value="Palau">Palau </option>
			                                            <option value="Panama">Panama </option>
			                                            <option value="Peru">Peru </option>
			                                            <option value="Philippines">Philippines </option>
			                                            <option value="Poland">Poland </option>
			                                            <option value="Qatar">Qatar </option>
			                                            <option value="Romania">Romania </option>
			                                            <option value="Russian Federation">Russian Federation </option>
			                                            <option value="Samoa">Samoa </option>
			                                            <option value="Senegal">Senegal </option>
			                                            <option value="Spain">Spain </option>
			                                            <option value="Srilanka">Srilanka </option>
			                                            <option value="Switzerland">Switzerland </option>
			                                            <option value="Thailand">Thailand </option>          
							                     
							     </select>
			                    </div>
			                    <div class="form-group col-sm-12" style="margin-top:5px;">

			                      <input type="text" id="event_date" name="physical_state" class="form-control" placeholder="Enter Sales Promotion State">
			                    </div>
		                    </div>

		                    <div id="dynamic_add_storeloc">
		                    	<div class="form-group col-sm-12" id="store_location_1">
		                  			<div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-top:10px; font-weight:bold;">Store Location #1</div>

				                    <div class="form-group col-sm-3" style="margin-top:15px;">
				                      <input type="text" id="store_name_1" name="store_name[]" class="form-control" placeholder="Store Name">
				                    </div>
				                    <div class="form-group col-sm-3" style="margin-top:15px;">
				                      <input type="text" id="store_address_1" name="store_address[]" class="form-control" placeholder="Store Address">
				                    </div>
				                    <div class="form-group col-sm-3" style="margin-top:15px;">
				                      <input type="text" id="store_zipcode_1" name="store_zipcode[]" class="form-control" placeholder="Zipcode">
				                    </div>
				                    <div class="form-group col-sm-3" style="margin-top:15px;">
				                      <input type="text" id="store_city_1" name="store_city[]" class="form-control" placeholder="City">
				                    </div>
		                    
		                   		</div>
		                   	</div>

		                    <div class="form-group col-sm-12">
		                    	 <a href="JavaScript:void(0);" id="add_store_location" data-nxt_store_location="2">
		                    	 	<i class="fa fa-plus-circle"></i> Add More Store Locations
		                    	 </a>
		                    </div>
      					</div>      
      
    				</div>
  				</div>

                <div class='col-sm-3'>
                  <div class='col-sm-12' style="background-color:#f9f9f9;">
                    <div class='col-sm-12'>
                      <h5>Helpful Hints</h5>
                      <section class="ac-container">
                        <div>
                          <input id="ac-9" name="accordion-1" type="radio" />
                          <label for="ac-9">Multiple Venue?</label>
                          <article class="ac-small">
                            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-10" name="accordion-1" type="radio" />
                          <label for="ac-10">Online Event?</label>
                          <article class="ac-medium">
                            <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-11" name="accordion-1" type="radio" />
                          <label for="ac-11">Invite only Events?</label>
                          <article class="ac-large">
                            <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-12" name="accordion-1" type="radio" />
                          <label for="ac-12">Event Sharing?</label>
                          <article class="ac-large">
                            <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
                          </article>
                        </div>
                      </section>
                      <!-- panel-group --> 
                      
                    </div>
                  </div>
                </div>

                <div class='col-sm-12'>
                 <div class="form-wizard-buttons">
                    <button type="button" class="btn" style="background:#e72026;"><i class="fa fa-save"></i> Save Draft</button>
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
                <h4> <span>Step 4 - 5</span></h4>
                <div class='form-group col-sm-9' style="padding-top:10px; padding-bottom:10px; background-color:#f5f5f5;"> 
                <div class='form-group col-sm-12' style="margin-bottom:30px!important;">
                    <div class="col-md-3">
                  		<div class="text-left">
                        	<label style="color:#333; font-weight: bold; font-size: 13px">Upload Coupon Image </label>
                      	</div>
                     	<div class="form-group">                      		
					        <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('img_files3').click();" style="margin-bottom:15px;"/>
						    <input type="file" style="display:none;" name="coupon_img1" id="img_files3"  accept="image/*">
					    </div>
                      
                      <input type='text' name="service_name1"  class="form-control" placeholder="Product/Services Name" />
                	</div>

                  <div class="col-md-3">
                  <div class="col-md-12 text-left" style="font-weight:bold; line-height:20px;"> Select Sales Discount Value</div>
						<div class="row">
                      		<select name="discount_value1" id="days" class="form-control" style="background-color:#eff0f1;">
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

                   
	                <div class="row">
	                    <div class="col-md-6" style="margin-top:20px; ">
	                      <input type='text' id="begine_from1" name="begining_fromdate1" class="form-control" placeholder="Begin Date" />
	                    </div>
	                    <div class="col-md-6" style="margin-top:20px; ">
	                      <input type='text' id="begine_fromtime1" name="begining_fromtime1" class="form-control" placeholder="Begine Time" />
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="col-md-6" style="margin-top:20px; ">
	                      <input type='text' id="ends_on1" name="begining_enddate1" class="form-control"  placeholder="Ends Date" />
	                    </div>  
	                    <div class="col-md-6" style="margin-top:20px; ">
	                      <input type='text' id="ends_ontime1" name="begining_endtime1" class="form-control"  placeholder="Ends Time" />
	                    </div>
	                </div>
                	

                    </div>

                    <div class="col-md-3">
	                  <div class="col-md-12 text-center" style="font-weight:bold;"> Count Down</div>
						<div class="row text-center">
	                      <div class="col-md-12">
	                        <div class="col-md-12" style="border:1px solid #ccc; border-radius:5px; font-size:13px;">23:29s Left</div>
	                      </div>
                        </div>
                        <div class="col-md-12" style="margin-top:15px; margin-bottom:15px; line-height:20px; font-weight:bold;">
							Select Your Audience Call To Action
                      		<select name="audience_callto_action1"  class="form-control" style="background-color:#eff0f1;">
                      			<option >Select</option>
				                <option value="Book_Now">Book Now</option>
				                <option value="Grab_Your_Coupon">Grab Your Coupon</option>			                      
				                     
				            </select>
                   		</div>                  
                    </div>

		                <div class="col-md-3">
		                  	<div class="form-group col-sm-12">
		                  		<textarea class="form-control" name="sales_terams1" placeholder="Coupon Terms & Conditions" style="min-height:170px;"></textarea>
		                	</div>
		                </div>
                 </div> 

                 <!-- second part for add more coupons -->

                 <div class='form-group col-sm-12' id="add_more_show" style="margin-bottom:15px; display: none;">
                  <div class="col-md-3">
                  	<div class="text-left">
                        <label style="color:#333; font-weight: bold; font-size: 13px">Upload Coupon Image </label>
                    </div>
	
                    <div class="form-group">                      		
					    <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('img_files4').click();" />
						<input type="file" style="display:none;" name="coupon_img2" id="img_files4" class="file" accept="image/*">
					</div>
                      
                      <input type='text' name="service_name2"  class="form-control" placeholder="Product/Services Name" />
                    
                      </div>
                  	<div class="col-md-3">
                 			<div class="col-md-12 text-left" style="font-weight:bold; line-height:20px;">
                 			  Select Sales Discount Value
                 			</div>
						<div class="row">
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
                                    

				            <div class="row">
			                    <div class="col-md-6" style="margin-top:20px; ">
			                      <input type='text' id="begine_from2" name="begining_fromdate2" class="form-control" placeholder="Begin Date" />
			                    </div>
			                    <div class="col-md-6" style="margin-top:20px; ">
			                      <input type='text' id="begine_fromtime2" name="begining_fromtime2" class="form-control" placeholder="Begine Time" />
			                    </div>
			                </div>

			                <div class="row">
			                    <div class="col-md-6" style="margin-top:20px; ">
			                      <input type='text' id="ends_on2" name="begining_enddate2" class="form-control"  placeholder="Ends Date" />
			                    </div>  
			                    <div class="col-md-6" style="margin-top:20px; ">
			                      <input type='text' id="ends_ontime2" name="begining_endtime2" class="form-control"  placeholder="Ends Time" />
			                    </div>
			                </div>

                    	</div>

		                    	<div class="col-md-3">
		                  			<div class="col-md-12 text-center"  style="font-weight:bold;"> Count Down</div>
											<div class="row text-center">
							                      <div class="col-md-12">
							                        <div class="col-md-12" style="border:1px solid #ccc; border-radius:5px; font-size:13px;">23:29s Left</div>

							                      </div>
		                                    </div>
		                                <div class="col-md-12" style="margin-top:15px; margin-bottom:15px; font-weight:bold; line-height:20px;">
												Select Your Audience Call To Action
		                     				<select name="audience_callto_action2" class="form-control" style="background-color:#eff0f1;">
			                     				  <option value="">Select</option>
							                      <option value="Book Now">Book Now</option>
							                      <option value="Grab Your Coupon">Grab Your Coupon</option>                     
						                  	</select>
		                   				</div>                    
		                    	</div>
				                    
				                    <div class="col-md-3">
					                  <div class="form-group col-sm-12">
					                  		<textarea class="form-control" name="sales_terams2" placeholder="Coupon Terms & Conditions" style="min-height:170px;"></textarea>
				                	  </div>
				                    </div>				              

				                 </div>

				                    <div class="form-group col-sm-12"> 
					                	<a href="JavaScript:void(0);" id="addmore_discount">
					                		<i class="fa fa-plus-circle"></i> Add More Discount Offerings
					                	</a> 
				               	  	</div>

				                </div>

				                <div class='col-sm-3'>
				                  <div class='col-sm-12' style="background-color:#f9f9f9;">
				                    <div class='col-sm-12'>
				                      <h5>Helpful Hints</h5>
				                      <section class="ac-container">
				                        <div>
				                          <input id="ac-13" name="accordion-1" type="radio" />
				                          <label for="ac-13">What is Sales Discounted Offering?</label>
				                          <article class="ac-small">
				                            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
				                          </article>
				                        </div>
				                        <div>
				                          <input id="ac-14" name="accordion-1" type="radio" />
				                          <label for="ac-14">How does the Count Down Work?</label>
				                          <article class="ac-medium">
				                            <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
				                          </article>
				                        </div>
				                        <div>
				                          <input id="ac-15" name="accordion-1" type="radio" />
				                          <label for="ac-15">Event Agenda?</label>
				                          <article class="ac-large">
				                            <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
				                          </article>
				                        </div>
				                        <div>
				                          <input id="ac-16" name="accordion-1" type="radio" />
				                          <label for="ac-16">Event Program Facilitator?</label>
				                          <article class="ac-large">
				                            <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
				                          </article>
				                        </div>
				                      </section>
				                      <!-- panel-group --> 
				                      
				                    </div>
				                  </div>
				                </div>

				                <div class='col-sm-12'>
                 <div class="form-wizard-buttons">
                    <button type="button" class="btn" style="background:#e72026;"><i class="fa fa-save"></i> Save Draft</button>
                    <button type="button" class="btn btn-previous"><i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="button" class="btn btn-next">Next <i class="fa fa-arrow-right"></i></button>
                  </div>
                </div>
        </fieldset>
        		 
              
              <!--  Step 5 -->
        <fieldset>

                <!--<form id="create_event" action="" method="post" enctype="multipart/form-data" > --> 
                <!-- Progress Bar -->
	                <div class="progress">
	                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
	                </div>
               				 <!-- Progress Bar -->
                		
                
                <div class="col-md-9">
			                <div class="col-md-6">
				                <div class='form-group col-sm-12'>
				                  <label><span style="color:#e91e63;">Select Your Event Promotion Options</span></label>
				                </div>
			                  	<div class="form-group col-md-12">

			                  	  <div class="pull-left" style="width:5%;">
			                        <input type="radio" name="promotion_options"  style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-right" style="width:90%; font-size:13px;">Publish &amp; Share on My !Wowhubb Network</div>
			                    </div>
			                    <div class="form-group col-md-12">
			                      <div class="pull-left" style="width:5%;">
			                        <input type="radio" name="promotion_options" id="promotion_options" value="1" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-right" style="width:90%; font-size:13px;">Publish to Specific Group
			                      		<!-- Modal -->
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                     
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <h4 class="modal-title" style="text-align:center; font-size:18px; padding:10px; background-color:#FDF2F5; border-radius:7px; margin-bottom:10px;">Select Group Name </h4>
                                        <?php                            
			                               foreach ($group_name as $groups)
			                                {                     
			                            ?>
                                      	<div class="col-md-12">                           

				                            <div class="pull-left" style="width:5%;"> 
				                              <input type="checkbox" name="group_name" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="<?php echo $groups->_id;?>">
				                            </div>
				                          
				                            <div class="pull-left" style="width:95%;">
				                               <?php echo $groups->groupname; ?> 
				                            </div>

				                        </div>
				                          	<div class="col-md-12" >
				                              <div class="col-md-12" style="border: 0.5px solid #d7d6d6; margin-top: 10px; margin-bottom: 10px; "> 
				                              </div>
				                          	</div>
				                        <?php } ?>  				                        

                                     <div class="modal-footer" style="border:none;">                                       
                                        <button type="button" class="btn cancel btn-primary" data-dismiss="modal" style="width:100%; border-radius:7px;"><i class="fa fa-paper-plane"></i> Submit</button>
                                      </div>
                                   
                                  	</div>                                  
                                </div>
		                      </div> <!-- here end model popup -->
			                      </div>
			                    </div>
			                    <div class="form-group col-md-12">
			                      <div class="pull-left" style="width:5%;">
			                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-right" style="width:90%; font-size:13px;">Promote My Event On !Wowhubb Network</div>
			                    </div>	                      
			                  
			                </div>
                  
		                  	<div class="col-md-6">
				                  <div class='form-group col-sm-12'>
				                   <label><span style="color:#e91e63;">Sales Event Sponsors Details</span></label>
				                  </div>
				                  <div class="form-group col-sm-12">
				                    <label> Organization Name  </label>
				                    <input type="text" class="form-control"  name="sales_organization_name" placeholder="" >
				                  </div>
				                  <div class="form-group col-sm-12">
				                    <label>Email </label>
				                    <input type="text" class="form-control"  name="sales_email" value="<?php echo $this->session->userdata('email'); ?>"  >
				                  </div>
				                  <div class="form-group col-sm-12">
				                    <label>Phone No </label>
				                    <input type="text" class="form-control"  name="sales_phone" value="<?php echo $this->session->userdata('phone'); ?>" >
				                  </div>
				                  <div class="form-group col-sm-12" style="margin-top:20px;">
				                   		<textarea class="form-control" name="sales_host_msg" placeholder="Event Host Message" style="min-height:170px;"></textarea>
				                  </div>
		                 
		                    </div>                 
                   
                </div>

		                <div class='col-sm-3'>
		                  <div class='col-sm-12' style="background-color:#f9f9f9;">
		                    <div class='col-sm-12'>
		                      <h5>Helpful Hints</h5>
		                      <section class="ac-container">
		                        <div>
		                          <input id="ac-17" name="accordion-1" type="radio" />
		                          <label for="ac-17">Publishing your Sales Events?</label>
		                          <article class="ac-small">
		                            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
		                          </article>
		                        </div>
		                        <div>
		                          <input id="ac-18" name="accordion-1" type="radio" />
		                          <label for="ac-18">Promoting Your Sales Event?</label>
		                          <article class="ac-medium">
		                            <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
		                          </article>
		                        </div>
		                        <div>
		                          <input id="ac-19" name="accordion-1" type="radio" />
		                          <label for="ac-19">Event Pre Activities Clips?</label>
		                          <article class="ac-large">
		                            <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
		                          </article>
		                        </div>
		                        <div>
		                          <input id="ac-20" name="accordion-1" type="radio" />
		                          <label for="ac-20">Event Speaker Links /URLs?</label>
		                          <article class="ac-large">
		                            <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
		                          </article>
		                        </div>
		                      </section>
		                      <!-- panel-group --> 
		                      
		                    </div>
		                  </div>
		                </div>
                
		                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">
                    <button type="button" class="btn" style="background:#e72026;"><i class="fa fa-save"></i> Save Draft</button>
                    <button type="button" class="btn btn-previous"><i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="submit" class="btn btn-next"> <i class="fa fa-thumbs-up"></i>  Publish</button>
                  </div>
                </div>
        </fieldset>
    </form>
              <!-- end Step 5 --> 
          
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
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<!-- <script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>  -->
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.js')?>"></script> 

<script src="<?php echo base_url('assets/js/wickedpicker.js')?>"></script>  
<!-- model popup bootstrap --> 
<script src="<?php echo base_url('assets/js/bootstrap3.3.4.min.js')?>"></script> 

<script>


// keyboard accept only alphabets

function alphaOnly(wow_title) {
  var key = event.keyCode;`enter code here`
  return ((key >= 65 && key <= 90) || key == 8);
};

// accept only text for city
$('.txtOnly').keypress(function (e) {
	var regex = new RegExp("^[0-9a-zA-Z]+$");
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
        

//checkbox  with model popup box last step
$('input[type="radio"][name=promotion_options]').on('change', function(e)
    {
      	if ($(this).val() == "1" ) 
			{
		        if(e.target.checked){
		        $('#myModal').modal();
	        }
	}
});

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

// event start date and end date time 

$("#event_startdate").datetimepicker({       //event stat and end date      
                format:'M-d-Y',      
                timepicker:false,    
                minDate: 0,           
            });

$("#event_enddate").datetimepicker({      
            format:'M-d-Y',      
            timepicker:false,

            onShow:function( ct )  //hide max and min date using picker
	            {
				  	this.setOptions({			  	 				   		
				    	// maxDate:jQuery('#event_enddate').val()?jQuery('#event_enddate').val():false,
				    	minDate:jQuery('#event_startdate').val()?jQuery('#event_startdate').val():false
				 	})
				},
}); 

   // event start time and end time picker
  $("#event_startime").wickedpicker();		
 
  $("#event_endtiming").wickedpicker();
	
//wowtag run from and to date
$("#runtime_from").datetimepicker({      
	format:'M-d-Y',      
	timepicker:false,	
	minDate: 0, 
	onShow:function( ct )
	{
		this.setOptions({			  	 				   		
			maxDate:jQuery('#event_enddate').val()?jQuery('#event_enddate').val():false
		})
	},	                  
});

$("#totime_to").datetimepicker({      
    format:'M-d-Y', 
    timepicker:false,
    onShow:function( ct )
	{
		this.setOptions({			  	 				   		
			maxDate:jQuery('#event_enddate').val()?jQuery('#event_enddate').val():false,
			minDate:jQuery('#event_startdate').val()?jQuery('#event_startdate').val():false
		})
	},	
                
});
         
// begine from  event offering step4

$("#begine_from1").datetimepicker({        
                format:'M-d-Y', 
                timepicker:false,                                
                minDate: 0,                       
            });

$("#ends_on1").datetimepicker({      
    format:'M-d-Y', 
    timepicker:false,                    
    minDate: 0,   
   
    onShow:function( ct )  //hide max and min date using picker
	{
		this.setOptions({				    	
			minDate:jQuery('#begine_from1').val()?jQuery('#begine_from1').val():false
		})
	},
}); 

//  Discount  start time and end time picker
  	$("#begine_fromtime1").wickedpicker();		
 
  	$("#ends_ontime1").wickedpicker();

	$("#begine_fromtime2").wickedpicker();		
 
  	$("#ends_ontime2").wickedpicker();

 

 $("#begine_from2").datetimepicker({       //event stat and end date      
               format:'M-d-Y ',  
               timepicker:false,   
               minDate: 0,           
            });


$("#ends_on2").datetimepicker({      
                format:'M-d-Y ',  
                timepicker:false,

               onShow:function( ct )  //hide max and min date using picker
	            {
				  	this.setOptions({				    	
				    	minDate:jQuery('#begine_from2').val()?jQuery('#begine_from2').val():false
				 	})
				},
}); 


//image preview and delete step1

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

//sponsor logo preview and delete

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#logo").on("change", function(e) {
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
            "</span>").insertAfter("#logo");
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

//event coupon1 image preview and delete

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#img_files3").on("change", function(e) {
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
            "</span>").insertAfter("#img_files3");
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

//event coupon2 image preview and delete

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#img_files4").on("change", function(e) {
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
            "</span>").insertAfter("#img_files4");
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


//video size and duration limitation cover video     

$(document).on("change", "#video_size", function(e)
{

    var file = e.currentTarget.files[0];
  	//check file extension for audio/video type
  	if(file.name.match(/\.(avi|mp3|mp4|mpeg|ogg)$/i)){
    	var obUrl = URL.createObjectURL(file);
    	document.getElementById('video_url').setAttribute('src', obUrl);
   
  	}

	var myVideoPlayer = document.getElementById('video_url');
    
	myVideoPlayer.addEventListener('loadedmetadata', function () {
    	var duration = myVideoPlayer.duration;
    	// console.log("Duration is " + duration.toFixed(0) + " seconds.");

    	if (duration >= 120 )
        	{
		        $('#video_show').hide();	         
		        $('.alert_msg').text("Pls upload 2 Mins video");  
		        $('.alert_msg').show(); 		       

         	}else
         		{	
				  	var $source = $('#video_here');				 
				  	$source[0].src = URL.createObjectURL(e.currentTarget.files[0]);
				  	$source.parent()[0].load();
				  	$('#video_show').show();	
				  	$('.alert_msg').hide();

				  	$(".remove_wowtag").click(function () { 
			               	$('#video_show').hide();                 
			                $('#video_size').val("");

		            }); 	              			  
				}
	});

});

// dynamic store location here

function generete_dynamic_storeloc(count){
	var store_location = ' <div class="form-group col-sm-12" id="store_location_'+count+'">  <div class="form-group col-sm-3" style="margin-top:15px;"> <input type="text" id="store_name_'+count+'" name="store_name[]" class="form-control" placeholder="Store Name"> </div> <div class="form-group col-sm-3" style="margin-top:15px;"> <input type="text" id="store_address_'+count+'" name="store_address[]" class="form-control" placeholder="Store Address"> </div> <div class="form-group col-sm-3" style="margin-top:15px;"> <input type="text" id="store_zipcode_'+count+'" name="store_zipcode[]" class="form-control" placeholder="Zipcode"> </div> <div class="form-group col-sm-3" style="margin-top:15px;"> <input type="text" id="store_city_'+count+'" name="store_city[]" class="form-control" placeholder="City"> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_faq btn btn-info btn-sm"> Remove</a> </div> </div>';

		return store_location;
}



$(document).ready(function(){
        $("#add_store_location").click(function()
        	{     	
		        var nxtticket_count = $(this).data("nxt_store_location"); 
		        var nxtvenueHTML = generete_dynamic_storeloc(nxtticket_count);
		        $("#dynamic_add_storeloc").append(nxtvenueHTML);        
        	    nxtticket_count++;
		       $(this).data('nxt_store_location', nxtticket_count); //update data nxtportion   
   			});   
});

// remove div
$(document).on('click', '.remove_faq', function(e)
    {
	       
	        $(this).parents('[id^=store_location_]').remove();
	       
    });

//show and hide sales event offering  step 4 add more

$(document).ready(function(){
    $("#addmore_discount").click(function(){
        $("#add_more_show").show();
    });
});

//create event for proffesional form submit

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#create_business_event", function(e){
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
		                   
		                    swal({
		                            title: "Success!",
		                            text: "Your Event Created Successfully...",
		                            type: "success",
		                            timer: 5000
		                            }).then(() => {                     
		                   				window.location.href = "<?php echo base_url('event/get_eventfeed'); ?>";
		                  		});;  
		                   
		                }else   { 
                    		    	swal("Sorry!", "somethink wrong try again !", "error");
                   		    	}          
                }

            });

      });

 });

</script>


</body>
</html>
