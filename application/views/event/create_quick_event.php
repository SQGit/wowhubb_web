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
label.error {
    font-family: 'Roboto', sans-serif;
   	color:red; 
}

	/*popup close button  */
.large.tooltip-inner {
		max-width: 350px;
		width: 350px;
}

@media (min-width: 768px)
	{
.modal-dialog {
    width: 450px!important;
    margin: 30px auto;
	}
}
	.modal-header {
    padding: 15px;
     border-bottom: none!important;
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
		font-size: 12px;
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
	
	.active-faq {
		border-left: 5px solid #888888;
	}
	.panel-faq .panel-heading .panel-title span {
		font-size: 13px;
		font-weight: normal;
	}
	.form-wizard h4 span {
		font-size: 13px;
		font-weight:bold;
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
		font-size: 12px;
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
    top: 9px;
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
          <div class="col-md-10 form-wizard form-body-classic form-header-classic" style="min-width:1200px; padding:5px 25px;"> 
          
         
            
           
    <img src="../assets/images/banner.jpg" class="img-thumbnail" style="margin-top:10px;" alt="banner-image"/>
            <!-- Form progress -->
    <div class="form-wizard-steps form-wizard-tolal-steps-3">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="33.33" data-number-of-steps="7" style="width: 33.33%;"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p style="font-weight:bold;">1.Event Details</p>
              </div>
              <!-- Step 1 --> 
              
              <!-- Step 2 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-exclamation" aria-hidden="true"></i></div>
                <p style="font-weight:bold;">2.!Wowtag</p>
              </div>
              <!-- Step 2 --> 
              
              <!-- Step 3 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <p style="font-weight:bold;">3.Event Venue</p>
              </div>
              <!-- Step 3 -->            
              
     </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
    <form id="create_quick_event" action="<?php echo base_url('event/quick_event'); ?>"  method="post" enctype="multipart/form-data" > 
    	
    	  	<fieldset>
                <!-- Progress Bar -->
               <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="33.33" aria-valuemin="0" aria-valuemax="100" style="width: 33.33%"> </div>
                </div>

        	<div class='col-sm-5'>
                <div class='row'>
                    <div class='form-group col-sm-12' >
                      <label>Event Category</label>
                      <input type='text' name="event_category" class="form-control" value="<?php echo $event_category; ?>"  readonly/>
                    </div> 

                    <div class='form-group col-sm-12' >
                      <label>Event Name</label>
                      <input type='text' name="event_name" class="form-control required" style="text-transform: capitalize;" autocomplete="off" />
                    </div>
                    
                </div>

            			<div class='row'>
		                    <div class='form-group col-sm-12' >
		                      <label>Event City </label>
		                      <input type='text' id="time_zone" name="time_zone" class="form-control required" autocomplete="off"/>
		                    </div>

		                    <div class='form-group col-sm-6' >
		                      <label>Event Start Date</label>
		                      <input type='text' id="event_startdate" name="event_startdate" class="form-control required" autocomplete="off" />
		                    </div>

		                    <div  class='form-group col-sm-6' >
		                      <label>Event Start Time</label>
		                      <input type='text' name="event_startime" id="event_startime" class="form-control" autocomplete="off"/>
		                    </div>
		                
		                    <div class='form-group col-sm-6' >
		                      <label>Event End Date</label>
		                      <input type='text' id="event_enddate" name="event_enddate" class="form-control required" autocomplete="off" />
		                    </div>

		                    <div class='form-group col-sm-6'>
		                      <label>Event End Time</label>
		                      <input type='text' id="event_endtiming" name="event_endtiming" class="form-control" autocomplete="off" />
		                    </div>
            			</div>
       		</div>

                	<div class='col-sm-4'>
	                  	<div class='row'>
		                    <div class='form-group col-sm-12'>
		                      <label>Event Description</label>
		                      <textarea type='text' id="description" name="event_description"  class="form-control required" style="min-height:300px;" placeholder="Describe What Your Event Is All About" autocomplete="off" >
		                      </textarea>
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
                
                <div class='col-sm-12' style="margin-bottom:20px;">
                  <div class="form-wizard-buttons">                 
                    <button type="button" class="btn btn-next">Next <i class="fa fa-arrow-right"></i></button>
                  </div>
                </div>

    	</fieldset>
 
              <!-- Form Step 1 --> 
              
              <!-- Form Step 2 -->

   	<fieldset>
                
                <!-- Progress Bar -->
               <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="66.66" aria-valuemin="0" aria-valuemax="100" style="width: 66.66%"> </div>
                </div>
                
                <div class='col-sm-9'>

                  <div class='col-sm-12'>
                    <div class='col-sm-12' style="padding: 10px 0;">
                      <div class='col-sm-12' style="margin-bottom: 0px;">
                        <div class="text-center">
                          <label style="color:#e91e63; font-weight: bold; font-size: 15px">Create Your Event -!Wowtag </label>
                        </div>
                      </div>
                      <div class='form-group-1 col-sm-12'>
                        <div class="text-center" >
                        	<img src="<?php echo base_url('assets/images/wow-pink.png'); ?>" />
                          <input type='text' name="event_title" class="noSpace form-control"  style="padding: 6px 30px;"   placeholder="Enter Your !Wowtag Title Here      Example: Craigsbirthday2017" autocomplete="off" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class='form-group col-sm-12'>
                  <div class='col-sm-6'>
                    <div class='col-sm-12' style="background-color:#f9f9f9; padding-top:15px;">
                      <div class="text-left">
                        <label style="color:#333; font-weight: bold; font-size: 14px">Upload Your Event -!Wowtag Video </label>
                      </div>
                      <div class="form-group">
                      

                        <div id="video_show" style="display: none; margin-top:20px;" >
                        		<div class="remove_video" style="cursor: pointer; position:absolute; top: 55px; left: 210px; z-index:9999;">
		                          	<img src="<?php echo base_url('assets/images/wow-close.png'); ?>" />
		                        </div>
                        	<video width="200" height="150" controls>
							 	 <source src="mov_bbb.mp4" id="video_here">
							    Your browser does not support HTML5 video.
							</video>
							<audio id="video_url"></audio>

                        </div>
                        	<span class="btn btn-primary btn-file"> 
                       	 <i class="fa fa-play-circle"></i> Upload Video<input type="file" name="wowtag_video" id="video_size" class="file required" accept="video/*">
                       	</span>
                        <div class="alert_msg" style="color: red; font-weight: bold; font-size: 13px; margin-top:15px;" ></div>

                        <div class="input-group col-xs-12" style="margin-top:10px; line-height:20px;">
                          <p>Choose a compelling 60-120 seconds event promotional ads video that will create a lasting impression in your viewers mind.</p>
                        </div>                        
                      </div>
                    </div>
                    </div>
                    <div class='col-sm-6'>
                    <div class='col-sm-12' style="margin-top: 10px;">
                    <div class="text-left">
                        <label style="color:#333; font-weight: bold; font-size: 14px">Event Promotional Video </label>
                      </div>
                      <label>!Wowtag Runtime From: </label>
                      <input type='text'  id="runtime_from" name="runtime_from" class="form-control required" autocomplete="off" />
                    </div>
                    <div class='col-sm-12' style="margin-top: 10px;" >
                      <label>!Wowtag Runtime To: </label>
                      <input type='text' id="totime_to" name="totime_to" class="form-control required" autocomplete="off" />
                    </div>
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

                <div class='form-group col-sm-12' style="margin-top:25px; margin-bottom:20px;">
                  <div class="form-wizard-buttons">
                   
                    <button type="button" class="btn btn-previous"><i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="button" class="btn btn-next">Next <i class="fa fa-arrow-right"></i></button>
                  </div>
                </div>
    </fieldset>
   	
              <!-- end Step 2 --> 
      <!--  Step 3 -->

             
    <fieldset>
    	 <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
                </div>
               
        <div class='col-sm-5'>
        	<div class='form-group col-sm-12' style="margin-top:15px;">
		        <div class="pull-left" style="width:5%;">
		            <input type="checkbox" name="online_event" id="online_event" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;">
		        </div>

		        <div class="pull-left" style="width:95%; font-size:13px; font-weight:bold; margin-top:-3px;">This is an Online Event</div>
		    </div>    

		    <div class='form-group col-sm-12' id="show_eventtype" style="display: none;" >
                <label>Select Event Type</label>
                    <select name="event_type" id="online_event_type" class="form-control " style="background-color:#eff0f1;" autocomplete="off">
                        <option value="">Select </option>	
                        <option value="Webinar">Webinar </option>
                        <option value="Teleconference">Teleconference</option>
                        <option value="Podcast">Podcast</option>                                              
				    </select>
            </div>    

            <div class='form-group col-sm-12' id="webinar_link" style="display: none;">		                    
		        <input type='text' name="webinar_link"  class="form-control " placeholder="Webinar Link/URL" autocomplete="off"/>
		    </div>	

		    <div class='form-group col-sm-12' id="tele_phone" style="display: none;">		                     
		      <input type='text'  name="tele_phone"  class="form-control" placeholder="Teleconference Phone" autocomplete="off" />
		    </div>	

		    <div class='form-group col-sm-12' id="tele_passcode" style="display: none;" >		                     
		      <input type='text'  name="tele_passcode"  class="form-control" placeholder="Teleconference Passcode" autocomplete="off" />
		    </div> 
        	
            <div class='col-sm-12' id="show_venue" style="background-color:#f9f9f9;padding-top:10px; ">                  		

		        <div class='form-group col-sm-12' style="margin-top:20px;">
		          <label>Enter Your Event Venue / Location Name</label>
		          <input type='text'  name="event_venue_name"  class="form-control" style="text-transform: capitalize;" autocomplete="off"/>
		        </div>

		        <div class='form-group col-sm-12'>
		          <label>Address 1</label>
		          <input type='text'  name="address1" class="form-control" autocomplete="off"/>
		        </div>

		        <div class='form-group col-sm-12'>
		          <label>Address 2</label>
		          <input type='text'  name="address2" class="form-control" autocomplete="off" />
		        </div>

		        <div class='form-group col-sm-12'>
		          <label>City</label>
		          <input type='text'  name="venue_city" class="form-control" autocomplete="off" />
		        </div>	

		        <div class='form-group col-sm-12'>
		          <label>State</label>
		          <input type='text'  name="venu_state" class="form-control" autocomplete="off" />
		        </div>	                   
	                   
		        <div class='form-group col-sm-12'>
		          <label>Zipcode/ Postal Code</label>
		          <input type='text'  name="zipcode" class="form-control" autocomplete="off"  />
		        </div>
            </div>
            	       
        </div>

                <div class='col-sm-4'>

                	 <!-- event FAQ part here -->
	                    <div class='form-group col-sm-12'>
		                    <div class='col-sm-12' style="background-color:#f9f9f9;">
			                        <div class="form-group col-md-12 text-center" style="margin-top:10px;">
			                          <label>Event Contact</label>
			                        </div>
			                      
			                       <div class="row">						                         	
					                    <div class='form-group col-sm-12'>
					                      <label>Enter Name</label>
					                      <input type='text' name="contact_name" class="form-control required" autocomplete="off" />
					                    </div>

				                         <div class='form-group col-sm-12'>
					                      <label>Enter Email</label>
					                      <input type='text'  name="contact_email" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" autocomplete="off" />
					                    </div>

				                        <div class='form-group col-sm-12'>
					                      <label>Enter Phone</label>
					                      <input type='text'  name="contact_phone" class="form-control" value="<?php echo $this->session->userdata('phone'); ?>" autocomplete="off" />
					                    </div>

				                        <div class="form-group col-md-12">
				                        	<label>Enter Message</label>
				                            <textarea class="form-control" name="contact_msg" placeholder="Event Guest Speaker/ Artist Introduction/ Pre-Events Activities Clips" style="min-height:150px;" autocomplete="off">
				                            </textarea>
				                        </div>
				                    </div>			                       
		                    </div>
	                    </div>
			<div class='form-group col-sm-12'>        
                  	<div class='row'>
		                    <div class='form-group col-sm-12' style="margin-top:15px;">
		                   <div class='form-group col-sm-12'>
		                      <div class="pull-left" style="width:8%;">
		                        <input type="radio" name="promotion_options" id="promotion_options" value="1" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:92%; font-size:13px; font-weight:bold; margin-top:-3px;">Publish To Specific Group
		                      		<!-- Modal popup -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" style="text-align:center; font-size:18px; padding:10px; background-color:#FDF2F5; border-radius:7px; margin-bottom:10px;">Select Group Name </h4>
                                        <?php                            
			                               foreach ($group_name as $groups)
			                                {                     
			                            ?>
                                      	<div class="col-md-12">                           

				                            <div class="pull-left" style="width:6%; margin-top:4px;"> 
				                       <input type="checkbox" name="group_name" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;" value="<?php echo $groups->_id;?>">
				                            </div>
				                          
				                            <div class="pull-left" style="width:94%;">
				                               <?php echo $groups->groupname; ?> 
				                            </div>

				                        </div>
				                          <div class="row" >
                                          <div class="col-md-12">
                                          
                                          <div class="col-md-12">
				                              <div class="col-md-12" style="border-bottom: 0.5px solid #E9E9E9; margin-top: 5px; margin-bottom: 5px; "> 
				                              </div>
                                              </div>
                                              </div>
				                          </div>
				                        <?php } ?>  
				                        

                                      <div class="modal-footer" style="border:none;">                                       
                                        <button type="button" class="btn cancel btn-primary" data-dismiss="modal" style="width:100%; border-radius:7px;"><i class="fa fa-paper-plane"></i> Submit</button>
                                      </div>
                                    </div>
                                  </div>                                  
                                </div>

		                      </div>
		                    </div>
		                </div>
		                    <div class='form-group col-sm-12'>
			                    <div class="pull-left" style="width:8%;">
			                       <input type="radio" name="promotion_options" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;">
			                    </div>
			                    <div class="pull-left" style="width:92%; font-size:13px; font-weight:bold; margin-top:-3px;">Invited Guest Can Share Event</div>
		                    </div>
		                    
		                    <div class='form-group col-sm-12'>
		                      <div class="pull-left" style="width:8%;">
		                        <input type="radio" name="promotion_options" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:92%; font-size:13px; font-weight:bold; margin-top:-3px;">Invite Only Event</div>
		                    </div>        

		                    <div class='form-group col-sm-12'>
		                      <div class="pull-left" style="width:8%;">
		                        <input type="checkbox" name="reg_rsvp" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:92%; font-size:13px; font-weight:bold; margin-top:-3px;">Register For RSVP</div>
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
                  <div class="form-wizard-buttons" style="margin-bottom:20px;">                   
                    <button type="button" class="btn btn-previous"> <i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="submit" class="btn btn-next"> <i class="fa fa-thumbs-up"></i> Publish</button>
                  </div>
                </div>
    </fieldset>    
   
</form>
           
        <!-- stop Step 3  -->          
        
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
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>  
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.js')?>"></script>  
<script src="<?php echo base_url('assets/js/wickedpicker.js')?>"></script>  
 
<!-- model popup bootstrap --> 
<script src="<?php echo base_url('assets/js/bootstrap3.3.4.min.js')?>"></script> 

<script>


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
		        $('.alert_msg').text("Pls Upload 2 Mins Video");  
		        $('.alert_msg').show();  

         	}else
         		{	
				  	var $source = $('#video_here');				 
				  	$source[0].src = URL.createObjectURL(e.currentTarget.files[0]);
				  	$source.parent()[0].load();
				  	$('#video_show').show();	
				  	$('.alert_msg').hide();

				  	$(".remove_video").click(function () { 
			               	$('#video_show').hide();                 
			                $('#video_size').val("");

		            }); 	              			  
				}
	});

});


// hide enter button to submit the form
$(document).ready(function(){
$('#create_quick_event').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});	
});		

// without space for event title
$('.noSpace').keyup(function() {
 this.value = this.value.replace(/\s/g,'');
});

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

// select check box show online event select option
$('#online_event').on('change',function(){
	if ($(this).is(':checked')) 
	{
		$("#show_eventtype").show(); 
		$("#show_venue").hide(); 
	}
	else
	{
		$("#show_eventtype").hide();  
		$("#show_venue").show(); 
	}
    
});

//online select option  show and hide
$(document).ready(function(){
		$("#online_event_type").on('change',function () {
				if ($(this).val() == "Teleconference" || $(this).val() == "Podcast") 
				 {
                	$("#tele_phone").show();
                	$("#tele_passcode").show();
                	$("#webinar_link").hide();
           		 }
           	    else
           		 {
                	$("#tele_phone").hide();
                	$("#tele_passcode").hide();
                	$("#webinar_link").show();
           		 }
		});

});	

// event start time and end time picker
$("#event_startime").wickedpicker();		
 
$("#event_endtiming").wickedpicker();

  //wowtag run from and to date

    $("#runtime_from").datetimepicker({      
	                format:'M-d-Y',      
	               	timepicker:false,  
	               	 minDate:0,   
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


 //dynamic add event program schdule 
// this part will be show event start date
 
$('#event_startdate').datetimepicker({
  timepicker:false,
  minDate:0,
  format:'M-d-Y',  

});

// end date

$('#event_enddate').datetimepicker({
  timepicker:false,  
  format:'M-d-Y',
	onShow:function( ct )
	    {
			this.setOptions({			  	 				   		
			minDate:jQuery('#event_startdate').val()?jQuery('#event_startdate').val():false				    	
			})
		},  
});

 //create event form submit

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).on("submit", "#create_quick_event", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {                             
                                    event_name:"required",                  
                                 	event_startdate: "required",
                                 	event_enddate: "required",
                                 	cover_img: "required",
                                 	event_description: "required",
                                 	event_title: "required",
                                 	wowtag_video: "required",
                                 	eventcontactname: "required",
                                 },

                          messages: {                           
                                  event_name: {
                                      required: "Please fill Event Name", 
                                  }, 
                                  event_startdate: {
                                      required: "Required ", 
                                  }, 
                                  event_enddate: {
                                      required: "Required", 
                                  }, 
                                  cover_img: {
                                      required: "Choose cover image", 
                                  }, 
                                  event_description: {
                                      required: "Please Fill Description", 
                                  }, 
                                  event_title: {
                                      required: "Please Enter Event Title", 
                                  }, 
                                  wowtag_video: {
                                      required: "Choose Wowtag_Video", 
                                  },
                                  eventcontactname: {
                                      required: "Required this Field", 
                                  },
                                                   
                             },

                           }); 

    if($(this).valid())
        {     
   
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
		                   
		                    }
		                    else 
		                   	{		                    
		                    	swal("Sorry!", "Something wrong try again !", "error");
		                  	}          
		                }

		       });	
		}
});


</script>

</body>
</html>
