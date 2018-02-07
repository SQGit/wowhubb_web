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

<!-- country database using js file -->
<script src="<?php echo base_url('assets/js/countries.js')?>"></script> 

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

	.remove {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	  width: 200px;
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
            
            <h3>Create Your Event</h3>
            <p>Please fill information to a create an event </p>
            
            
      <img src="../assets/images/buss-banner.jpg" class="img-thumbnail"  alt="banner-image"/>
      
      
            <!-- Form progress -->
            <div class="form-wizard-steps form-wizard-tolal-steps-5">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="20" data-number-of-steps="5"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p>Sales Event Details</p>
              </div>
              <!-- Step 1 --> 
              
              <!-- Step 2 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-exclamation" aria-hidden="true"></i></div>
                <p>!Wowtag</p>
              </div>
              <!-- Step 2 --> 
              
              <!-- Step 3 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <p>Sales Event Links</p>
              </div>
              <!-- Step 3 --> 
              
              <!-- Step 4  -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                <p>Sales Event Offerings</p>
              </div>
              <!-- Step 4 --> 
              
              <!-- Step 5 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-flash" aria-hidden="true"></i></div>
                <p>Publish &amp; Promote</p>
              </div>
              
            </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
    <form id="create_business_event" action="<?php echo base_url('Event/create_business_event'); ?>"  method="post" enctype="multipart/form-data" >
       
        <fieldset>
                <!-- Progress Bar -->
		                <div class="progress">
		                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="14.28" aria-valuemin="0" aria-valuemax="100" style="width: 14.28%"> </div>
		                </div>
		                <!-- Progress Bar -->
		                <h4> <span>Step 1 - 5</span></h4>
		            	<div class='col-sm-5'>

		                <div class='row'>
			                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Sales Event Objective</div>
			                  	 
			                  	 <div class='form-group col-sm-12' style="display: none;" >
			                      <label>Event Type</label>
			                      <input type='text' name="event_type"  class="form-control textBox" value="<?php echo $this->session->userdata('event_type'); ?>" />
			                    </div>  
			                    <div class='form-group col-sm-12' >
			                      <label>Event Category</label>
			                      <input type='text' name="event_category"  class="form-control textBox" value="<?php echo $this->session->userdata('event_category'); ?>"  readonly/>
			                    </div>

			                    <div class='form-group col-sm-12' >
			                      <label>Sales Event Campaign Objective</label>
			                      <input type='text' name="brand_awareness"  class="form-control textBox" value="<?php echo $this->session->userdata('campaign_objective'); ?>"  readonly/>
			                    </div>
			                    <div class='form-group col-sm-12' >
			                      <label>Event Name</label>
			                      <input type='text' id="event_date" name="event_name"  class="form-control" />
			                    </div>
		                </div>

	                 		<div class='row'>                   
	                    
			                    <div class='form-group col-sm-6' style="width:45%;" >
			                      <label>Event Start Date</label>
			                      <input type='text' id="event_startdate" name="event_startdate"  class="form-control "  />
			                    </div>

			                    <div  class='form-group col-sm-6' style="width:45%; " >
			                      <label>Event Start Time</label>
			                      <input type='text' id="event_startime" name="event_startime"  class="form-control "  />
			                    </div>

			                   
			                    <div class='form-group col-sm-6' style="width:45%;" >
			                      <label>Event End Date</label>
			                      <input type='text' id="event_enddate" name="event_enddate"  class="form-control " />
			                    </div>

			                    <div class='form-group col-sm-6' style="width:45%;">
			                      <label>Event End Time</label>
			                      <input type='text' id="event_endtiming" name="event_endtiming"  class="form-control "  />
			                    </div>
	                   
	                  		</div>

                		</div>

			            <div class='col-sm-4'>
			                <div class='row'>

			                    <div class='form-group col-sm-12'>
			                      <label>Event Description</label>
			                      <textarea type='text' id="description" name="event_description"  class="form-control" style="min-height:300px;" placeholder="Describe What Your Event Is All About " ></textarea>
			                    </div>

			                    		<div class='form-group col-sm-12'>
						                      <div class='col-sm-12' style="background-color:#f9f9f9;">
						                        <label>Event Cover Photo <strong style="color: red; font-size: 20px;"> * </strong></label>
						                        <label>Please browse to upload cover photo</label>
						                        <div class="form-group" style="margin-bottom: 10px;"> 
							                        <div class="field" align="left">
							                         		<input type="button" class="btn btn-primary"  value="Browse..." onclick="document.getElementById('files').click();" />
							                         		<input type="file" style="display:none;" name="cover_img" id="files" class="file" accept="image/*" title="cover image">  
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
			                          <input id="ac-1" name="accordion-1" type="radio" checked />
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
			                    <button type="button" class="btn btn-next" style="background:#005898;">Save Draft</button>
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
			                          <input type='text' id="wow_title" name="event_title" class="form-control" onkeydown="return alphaOnly(wow_title);" style="padding: 6px 30px;"  placeholder="Enter Your !Wowtag Title Here      Example:  Craigsbirthday2017" />
			                        </div>
			                      </div>
			                    </div>
			                  </div>
			                  <div class='form-group col-sm-12'>
			                    <div class='col-sm-12' style="background-color:#f9f9f9; padding-top:15px;">
			                      <div class="text-center">
			                        <label style="color:#333; font-weight: bold; font-size: 16px">Upload Your Event -!Wowtag Video </label>
			                      </div>
				                       <div class="form-group">
					                      	<span class="btn btn-primary btn-file"> 
					                       	 Browse...<input type="file" name="wowtag_video" id="video_size" class=" file" accept="video/*">
					                       	</span>

					                        <div id="video_show" style="display: none;" >
					                        	<video width="200" height="150" controls>
												 	 <source src="mov_bbb.mp4" id="video_here">
												    Your browser does not support HTML5 video.
												</video>
					                        </div>
					                        <div class="input-group col-xs-12" style="margin-top:0px;">
					                          <p>Choose a compelling 60-120 seconds event promotional ads video that will create a lasting impression in your viewers mind</p>
					                        </div>                        
				                      </div>
			                    </div>
			                    <div class='col-sm-6' style="margin-top: 10px;">
			                      <label>!Wowtag Runtime From: </label>
			                      <input type='text'  id="runtime_from" name="runtime_from" class="form-control " placeholder="Event Date" />
			                    </div>
			                    <div class='col-sm-6' style="margin-top: 10px;" >
			                      <label>!Wowtag Runtime To: </label>
			                      <input type='text' id="totime_to" name="totime_to" class="form-control" placeholder="Event Date" />
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
			                    <button type="button" class="btn btn-next" style="background:#005898;">Save Draft</button>
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
                
                <div class="col-md-9"> 
    					<!-- Nav tabs category -->
					    <ul class="nav nav-tabs faq-cat-tabs">
					      <li class="active"><a href="#faq-cat-1" data-toggle="tab" class="text-center">Online Shopping/ Website</a></li>
					      <li><a href="#faq-cat-2" data-toggle="tab" class="text-center">Physical Store Visit</a></li>					      
					    </ul>

    				<div class="tab-content faq-cat-content">
					      	<div class="tab-pane active in fade" id="faq-cat-1">
						        <div class="row">
						        <div class="form-group col-sm-6">
						        	<div class="col-sm-12">

					                  <div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Objective</div>
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
							                 	 <div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Sales Promotion Links</div>
							                   
							                    <div class="form-group col-sm-12">
							                      <label>Enter Your Online URLS</label>
							                      <input type="text"  name="sales_online_url" class="form-control">
							                    </div>
					                    </div>					                
					                   
					            </div>
					                    <div class="form-group col-sm-6">
					                  <div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Select Sales Promotion Country</div>
					                    <div class="form-group col-sm-12" style="margin-top:15px;">

					                      <select name="online_country" onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" style="background-color:#eff0f1;">
									                       		   
									                     
									      </select>
					                    </div>
					                    <div class="form-group col-sm-12">
					                      <label>Enter Sales Promotion State</label>
					                      <!-- <input type="text"  name="online_state" class="form-control"> -->
					                       <select name="online_state" id ="state" class="form-control"></select>
					                       <script language="javascript">print_country("country");</script>	
					                    </div>
					                    </div>
					                   
					                  </div>
					      	</div>

      					<div class="tab-pane fade" id="faq-cat-2">
      						<div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63;">Select Sales Promotion Country</div>
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
		                  			<div class="form-group col-sm-12" style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#e91e63; margin-top:10px;">Store Location #1</div>

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
                    <button type="button" class="btn btn-next" style="background:#005898;">Save Draft</button>
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
                <div class='form-group col-sm-9' style="padding-top:10px; padding-bottom:10px; background-color:#f5f5f5;"> 
                  <div class='form-group col-sm-12' style="margin-bottom:30px!important;">
                  <div class="col-md-3">
                  		<div class="text-center">
                        		<label style="color:#333; font-weight: bold; font-size: 16px">Upload Coupon Image </label>
                      	</div>
                     					<div class="form-group">                      		
					                        <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('coupon_img').click();" />
						                        <input type="file" style="display:none;" name="coupon_img1" id="coupon_img"  accept="image/*">
					                    </div>
                      <!-- <input type="file"  name="coupon_img1"  accept="image/*"> -->
                      <input type='text' name="service_name1"  class="form-control" placeholder="Product/Services Name" />
                      
                      </div>
                  <div class="col-md-3">
                  <div class="col-md-12 text-left"> Select Sales Discount Value</div>
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
                                    <div class="row" style="margin-top:23px; margin-bottom:15px;">

                      <input type='text' id="begine_from1" name="begining_from1"  class="form-control" placeholder="Beginning From" />
                    </div>
                    <div class="row">

                      <input type='text' id="ends_on1" name="begining_end1"  class="form-control"  placeholder="Ends On" />
                    </div>
                    </div>
                    <div class="col-md-3">
	                  <div class="col-md-12 text-center"> Count Down</div>
						<div class="row text-center">
	                      <div class="col-md-12">
	                        <div class="col-md-12" style="border:1px solid #ccc; border-radius:5px; font-size:17px;">23:29s Left</div>
	                      </div>
                                    </div>
                                <div class="col-md-12" style="margin-top:15px; margin-bottom:15px;">
															Select Your Audience Call To Action
                      				<select name="audience_callto_action"  class="form-control" style="background-color:#eff0f1;">
                      				  <option >Select</option>
				                      <option value="Book Now">Book Now</option>
				                      <option value="Grab Your Coupon">Grab Your Coupon</option>			                      
				                     
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
                  <div class="col-md-3"><div class="text-center">
                        <label style="color:#333; font-weight: bold; font-size: 16px">Upload Coupon Image </label>
                      </div>

                       					
                       					<div class="form-group">                      		
					                        <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('coupon_img2').click();" />
						                        <input type="file" style="display:none;" name="coupon_img2" id="coupon_img2" class="file" accept="image/*">
					                     </div>
                        <!-- <input type="file"  name="coupon_img2"  accept="image/*"> -->
                      <input type='text' name="service_name2"  class="form-control" placeholder="Product/Services Name" />
                    
                      </div>
                  		<div class="col-md-3">
                 			 <div class="col-md-12 text-left"> Select Sales Discount Value</div>
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
                                    <div class="row" style="margin-top:23px; margin-bottom:15px;">
                      					<input type='text' id="begine_from2" name="begining_from2"  class="form-control" placeholder="Beginning From" />
                    				</div>
				                    <div class="row">
				                      	<input type='text'   id="ends_on2" name="begining_end2"  class="form-control"  placeholder="Ends On" />
				                    </div>
                    	</div>

		                    	<div class="col-md-3">
		                  			<div class="col-md-12 text-center"> Count Down</div>
											<div class="row text-center">
							                      <div class="col-md-12">
							                        <div class="col-md-12" style="border:1px solid #ccc; border-radius:5px; font-size:17px;">23:29s Left</div>
							                      </div>
		                                    </div>
		                                <div class="col-md-12" style="margin-top:15px; margin-bottom:15px;">
												Select Your Audience Call To Action

		                     				<select name="audience_callto_action" class="form-control" style="background-color:#eff0f1;">
			                     				  <option >Select</option>
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

				                <div class='form-group col-sm-12' style="margin-top: 30px;">
				                  <div class="form-wizard-buttons">
				                    <button type="button" class="btn btn-next" style="background:#005898;">Save Draft</button>
				                    <button type="button" class="btn btn-previous">Previous</button>
				                    <button type="button" class="btn btn-next">Next</button>
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
                		<h4> <span>Step 5 - 5</span></h4>
                
                <div class="col-md-9">
			                <div class="col-md-6">
				                <div class='form-group col-sm-12'>
				                  <label>Select Your Event Promotion Options</label>
				                </div>
			                  	<div class="form-group col-md-12">

			                  	  <div class="pull-left" style="width:5%;">
			                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-right" style="width:90%; font-size:15px;">Publish &amp; Share on My !Wowhubb Network</div>
			                    </div>
			                    <div class="form-group col-md-12">
			                      <div class="pull-left" style="width:5%;">
			                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-right" style="width:90%; font-size:15px;">Publish to Specific Group</div>
			                    </div>
			                    <div class="form-group col-md-12">
			                      <div class="pull-left" style="width:5%;">
			                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-right" style="width:90%; font-size:15px;">Promote My Event On !Wowhubb Network</div>
			                    </div>	                      
			                  
			                </div>
                  
		                  	<div class="col-md-6">
				                  <div class='form-group col-sm-12'>
				                   <label>Sales Event Sponsors Details</label>
				                  </div>
				                  <div class="form-group col-sm-12">
				                    <label> Organisation Name  </label>
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
		                    <button type="button" class="btn btn-next" style="background:#005898;">Save Draft</button>
		                    <button type="button" class="btn btn-previous">Previous</button>
		                    <button type="submit" class="btn btn-next">Publish</button>
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

<!-- Footer
    ================================================= 
    <footer id="footer">
        <div class="container">
          <?php  //$this->load->view('includes/footer.php'); ?>
        </div>
    </footer>
    
    preloader
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>--> 

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
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.js')?>"></script> 

<!-- model popup bootstrap --> 
<!-- <script src="<?php echo base_url('assets/js/bootstrap3.3.4.min.js')?>"></script> -->

<script>

// keyboard accept only alphabets

function alphaOnly(wow_title) {
  var key = event.keyCode;`enter code here`
  return ((key >= 65 && key <= 90) || key == 8);
};

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
				    	maxDate:jQuery('#event_enddate').val()?jQuery('#event_enddate').val():false,
				    	minDate:jQuery('#event_startdate').val()?jQuery('#event_startdate').val():false
				 		})
				 	},
         }); 

    //time picker
  $("#event_startime").datetimepicker(
		  	{ 
                datepicker:false,   //12 hours time format 
                format:'H:i A',
                formatTime: 'H:i A',
                // mask:'29:59 99',  
                step: 5,   
                ampm: true                        
             });

  $("#event_endtiming").datetimepicker(
            { 
                datepicker:false,   //12 hours time format 
                format:'H:i A',
                formatTime: 'H:i A',
                mask:'29:59 99',  
                step: 5,   
                ampm: true 
             });
	
//wowtag run from and to date
             $("#runtime_from").datetimepicker({      
                format:'M-d-Y ', 
                timepicker:false,
                minDate: 0,        
              
            });
              $("#totime_to").datetimepicker({      
               format:'M-d-Y', 
               timepicker:false,
               onShow:function( ct )
	               	{
				  	 	this.setOptions({			  	 				   		
				    	maxDate:jQuery('#event_enddate').val()?jQuery('#event_enddate').val():false,
				    	
				   })
				  },	
                
            });
         
// begine from  event offering 

 $("#begine_from1").datetimepicker({       //event stat and end date      
                format:'M-d-Y',      
                timepicker:false,    
                minDate: 0,           
            });

 $("#begine_from2").datetimepicker({       //event stat and end date      
                format:'M-d-Y',      
                timepicker:false,    
                minDate: 0,           
            });



$("#ends_on1").datetimepicker({      
                format:'M-d-Y',      
               timepicker:false,
               

               onShow:function( ct )  //hide max and min date using picker
	               	{
				  	 	this.setOptions({			  	 				   		
				    	// maxDate:jQuery('#event_enddate').val()?jQuery('#event_enddate').val():false,
				    	minDate:jQuery('#begine_from1').val()?jQuery('#begine_from1').val():false
				 		})
				 	},
         }); 

$("#ends_on2").datetimepicker({      
                format:'M-d-Y',      
               timepicker:false,
               

               onShow:function( ct )  //hide max and min date using picker
	               	{
				  	 	this.setOptions({			  	 				   		
				    	// maxDate:jQuery('#event_enddate').val()?jQuery('#event_enddate').val():false,
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
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#img_files3");
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
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#img_files4");
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


//video size limitation wowtag video   step2  

$(document).on("change", "#video_size", function(evt)
        {
        		var file = this.files[0];

        		if (file.size > 2621440)
        		 {
		               //Now Here I need to update <span> 
		             $('#video_show').hide();	
		             alert('Filesize must 2.5MB or below');           
         		 }else
         		 {	
				  var $source = $('#video_here');				 
				  $source[0].src = URL.createObjectURL(this.files[0]);
				  $source.parent()[0].load();
				  $('#video_show').show();				  
				 }
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
                   // alert("success");
                    // swal('Your Event Created Successfully...');
                    window.location.href = "<?php echo base_url('event/get_eventfeed'); ?>";
                   
                    }else 
                   {
                    
                    swal("Sorry!", "somethink wrong try again !", "error");
                   }          
                }

            });

      });

 });

</script>



</body>
</html>
