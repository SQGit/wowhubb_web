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
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>

<style type="text/css">
	
	a.delete { position:absolute;width:30px;height:30px; color: #000; }
	.image:hover a.delete { display:block; }

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
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="JavaScript:void(0);" alt="logo" /></a> </div>
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
         
            
            <h3>Create Your Event</h3>
            <p>Please fill information to a create an event </p>
             <img src="../assets/images/banner.jpg" class="img-thumbnail"  alt="banner-image"/>
            <!-- Form progress -->
    <div class="form-wizard-steps form-wizard-tolal-steps-1">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="100" data-number-of-steps="7" style="width: 100%;"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p>Event Venue</p>
              </div>
              <!-- Step 1 --> 
              
            
              
     </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
    <form id="edit_eventvenue" action="<?php echo base_url('eventhubb/update_eventvenue'); ?>"  method="POST" enctype="multipart/form-data" > 
    	
    	
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
                </div>
                <!-- Progress Bar -->
               
                <div class="col-md-12">
                	<h4> <span>Step 1</span></h4>
            	</div>
            	  <input type="hidden" name="event_id"  value="<?php echo $event->_id; ?>">
        <div class='col-sm-5'>
        	
            <div class='col-sm-12' style="background-color:#f9f9f9;padding-top:10px; ">
                  		<div id="show_vanue" style="background-color:#bfbebe;padding-top:10px; ">
							<center> <label >CREATE AND ADD YOUR EVENT TOURS CITIES HERE</label></center>  
						</div> 

             	<div id="event_venues" >
                	<div id="event_address_1" class="tab" >                			

		                    <div class='form-group col-sm-12' style="margin-top:20px;">
		                      <label>Enter Your Event Venue / location Name</label>
		                      <input type='text' id="event_venue_name_1" name="event_venue_name[]" class="form-control" onblur="update_vanue()" value="<?php  

                                                                 $i=0;

                                                                  foreach ($event->eventvenue as $eventvenues)
                                                                   {
                                                                        if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                                                        {
                                                                          if(isset($eventvenues->eventvenuename))
                                                                          {
                                                                            echo   $eventvenues->eventvenuename;
                                                                          }
                                                                        }  
                                                                        $i++;                             
                                                                    }                                    
                                                             ?>">
		                    </div>

		                    <div class='form-group col-sm-12'>
		                      	<label>Address 1</label>
		                      	<input type='text' id="address1_1" name="address1[]"  class="form-control" value="<?php  

                                                                 $i=0;

                                                                  foreach ($event->eventvenue as $eventvenues)
                                                                   {
                                                                        if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                                                        {
                                                                          if(isset($eventvenues->eventvenueaddress1))
                                                                          {
                                                                            echo   $eventvenues->eventvenueaddress1;
                                                                          }
                                                                        }  
                                                                        $i++;                             
                                                                    }                                    
                                                             ?>" >
		                    </div>

		                    <div class='form-group col-sm-12'>
		                      	<label>Address 2</label>
		                      	<input type='text' id="address2_1" name="address2[]" class="form-control" value="<?php  

                                                                 $i=0;

                                                                  foreach ($event->eventvenue as $eventvenues)
                                                                   {
                                                                        if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                                                        {
                                                                          if(isset($eventvenues->eventvenueaddress2))
                                                                          {
                                                                            echo   $eventvenues->eventvenueaddress2;
                                                                          }
                                                                        }  
                                                                        $i++;                             
                                                                    }                                    
                                                             ?>">
		                    </div>

		                    <div class='form-group col-sm-12'>
		                      <label>City</label>
		                      <input type='text' id="city_1" name="venue_city[]" class="form-control" value="<?php  

                                                                 $i=0;

                                                                  foreach ($event->eventvenue as $eventvenues)
                                                                   {
                                                                        if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                                                        {
                                                                          if(isset($eventvenues->eventvenuecity))
                                                                          {
                                                                            echo   $eventvenues->eventvenuecity;
                                                                          }
                                                                        }  
                                                                        $i++;                             
                                                                    }                                    
                                                             ?>">
		                    </div>		                   

		                    <div class='form-group col-sm-12'>
		                      <label>Zipcode/ Postal Code</label>
		                      <input type='number' id="zipcode_1" name="zipcode[]" class="form-control" value="<?php  

                                                                 $i=0;

                                                                  foreach ($event->eventvenue as $eventvenues)
                                                                   {
                                                                        if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                                                        {
                                                                          if(isset($eventvenues->eventvenuezipcode))
                                                                          {
                                                                            echo   $eventvenues->eventvenuezipcode;
                                                                          }
                                                                        }  
                                                                        $i++;                             
                                                                    }                                    
                                                             ?>">
		                    </div>
               		</div>
            	</div> 
            </div>

                   <div class='col-sm-12'> 
                    	<div class='col-sm-4'>
                    		<a href="JavaScript:void(0);" id="btnAdd7" data-nxt_event_address="2">
                    		<i class="fa fa-plus-circle"></i> Add multiple venue </a>
                    	</div>
                    	<div style="overflow:hidden;">
						 	
							    <div  class="col-md-8">
							      <a href="JavaScript:void(0);" id="prevBtn" onclick="nextPrev(-1)">Previous</a>
							      <a href="JavaScript:void(0);" id="nextBtn" onclick="nextPrev(1)" style="margin-left: 35px;"> Next</a>
							    </div>					
						</div>                     
                   </div>  
        </div>

                <div class='col-sm-4'>
                  	<div class='row'>
		                    <div class='form-group-1 col-sm-12'>
		                      <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:90%; font-size:15px;">Address can only be viewed by invited guest</div>
		                    </div>
		                    <div class='form-group-1 col-sm-12'>
			                    <div class="pull-left" style="width:10%;">
			                       <input type="checkbox" name="eventvenue_guestshare" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                    </div>
			                    <div class="pull-left" style="width:90%; font-size:15px;">Invited guest can share event</div>
		                    </div>
		                    <div class='form-group-1 col-sm-12'>
		                      <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_onlineevent" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:90%; font-size:15px;">Online  Event</div>
		                    </div>
		                    <div class='form-group-1 col-sm-12'>
		                      <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_inviteonlyevent" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:90%; font-size:15px;">Invite Only Event</div>
		                    </div>

		                    <!-- event FAQ part here -->
	                    <div class='form-group col-sm-12'>
		                    <div class='col-sm-12' style="background-color:#f9f9f9;">
			                        <div class="form-group col-md-12 text-center" style="margin-top:15px;">
			                          <label>Event FAQ's</label>
			                        </div>
			                      
			                       <div class="row">
			                         	<div class="form-group-1 col-md-12">
				                          <p>What is Event Age Requirement?</p>
				                          <input type='text'  name="quesans1"  class="form-control" value="<?php if(isset($event->faqanswer1)) { echo $event->faqanswer1; } ?>">
				                        </div>
				                        <div class="form-group-1 col-md-12">
				                          <p>This is a kids friendly event?</p>
				                          <input type='text' name="quesans2"  class="form-control" value="<?php if(isset($event->faqanswer2)) { echo $event->faqanswer2; } ?>">
				                        </div>
				                        <div class="form-group-1 col-md-12">
				                          <p>What are event parking/Transportantion options to and from event location?</p>
				                          <input type='text'  name="quesans3"  class="form-control" value="<?php if(isset($event->faqanswer3)) { echo $event->faqanswer3; } ?>">
				                        </div>
				                        <div class="form-group-1 col-md-12">
				                          <p> What are allowed into the event venue?</p>
				                          <input type='text'  name="quesans4"  class="form-control" value="<?php if(isset($event->faqanswer4)) { echo $event->faqanswer4; } ?>">
				                        </div>
				                    </div>

			                      <div id="dynamic_add_faq">
                                  <div class="row" id="event_faq_1">
                                        
                                   <!--  <div class="col-md-12" style="margin: 10px 0px;">
                                        <input type="text" id="faq_ques_1" name="faq_ques[]" class="form-control" placeholder="Enter question">                                      
                                    </div>
                                    <div class="col-md-12" style="margin: 10px 0px;">
                                        <input type="text" id="faq_ans_1" name="faq_ans[]" class="form-control" placeholder="Enter Answer">                                
                                    </div> -->

                                  </div>
                                </div>

                                  <a href="JavaScript:void(0);" id="faq_add" data-nxt_event_faq="2">
			                        	<i class="fa fa-plus-circle"></i> Add More Event FAQ's
			                      </a>            
                    
			                       
		                    </div>
	                    </div>

                  	</div>
                </div>

                 <!-- here end tab view -->
                <div class='col-sm-3'>
                  <div class='col-sm-12' style="background-color:#f9f9f9;">
                    <div class='col-sm-12'>
                      <h5>Helpful Hints</h5>
                      <section class="ac-container">
                        <div>
                          <input id="ac-13" name="accordion-1" type="radio" />
                          <label for="ac-13">Event Start and End Time?</label>
                          <article class="ac-small">
                            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-14" name="accordion-1" type="radio" />
                          <label for="ac-14">Itinerary Time Slot?</label>
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
                    <button type="submit" class="btn btn-next">Upload</button>
                  </div>
                </div>
    </form>
 
              <!-- Form Step 1 --> 
         

      
                     
        
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
 

 
<!-- model popup bootstrap --> 
<!-- <script src="<?php echo base_url('assets/js/bootstrap3.3.4.min.js')?>"></script> -->

<script>


 var option_template = ''; //golabal variable for dynamic add address step 3

 //dynamically add event venue address

function generate_address_fields(count)
 {	
	var address  = '<div id="event_address_'+count+'" class="animated bounceInRight tab"> <div class="form-group col-sm-12" style="margin-top:20px;"> <label>Enter Your Event Venue / location Name</label> <input type="text" id="event_venue_name_'+count+'" name="event_venue_name[]"  class="form-control" onblur="update_vanue()" /> </div> <div class="form-group col-sm-12"> <label>Address 1</label> <input type="text" id="address1_'+count+'" name="address1[]"  class="form-control"  /> </div> <div class="form-group col-sm-12"> <label>Address 2</label> <input type="text" id="address2_'+count+'" name="address2[]"  class="form-control"  /> </div> <div class="form-group col-sm-12"> <label>City</label> <input type="text" id="city_'+count+'" name="venue_city[]" class="form-control" /> </div> <div class="form-group col-sm-12">  <div class="form-group col-sm-12"> <label>Zipcode/ Postal Code</label> <input type="number" id="zipcode_'+count+'" name="zipcode[]"  class="form-control"  /> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);" id="btnAdd10" class="remove_address btn btn-info btn-sm"> </a> </div> </div>';

        return address;
}

var currentTab = 0; // Current tab is set to be the first tab (0)
   showTab(currentTab); // Display the current tab

  $('#btnAdd7').click(function() //here add address
    {
		$('[id^=event_address_]').hide();
        //Once add button is clicked
        var nxtaddress_count = $(this).data("nxt_event_address");

        var nxtaddressHTML = generate_address_fields(nxtaddress_count);
		$('[id^=event_address_'+nxtaddress_count+']').show();
        $('#event_venues').append(nxtaddressHTML); // Add field html

		nxtaddress_count++; //Increment field counter

        $(this).data('nxt_event_address', nxtaddress_count); //update data nxtportion   
        nextPrev(1);             

	});

 //remove function

   $(document).on('click', '.remove_address', function(e)
    {
	        e.preventDefault();
	        nextPrev(-1);
	        $(this).parents('[id^=event_address_]').remove();
	        update_vanue();   //here remove event venue on top
    });

function showTab(n)
 {	
  // This function will display the specified tab of the form...
		  var x = document.getElementsByClassName("tab");
		  x[n].style.display = "block";
		  //... and fix the Previous/Next buttons:
		  if (n == 0) {
		    document.getElementById("prevBtn").style.display = "none";
		  } else {
		    document.getElementById("prevBtn").style.display = "inline";
		  }
		  if (n == (x.length - 1)) {
		    document.getElementById("nextBtn").style.display = "none";
		  } else {
		    document.getElementById("nextBtn").style.display = "inline";
		  }
		  update_vanue();
}

function nextPrev(n)
 {
  // This function will figure out which tab to display  
	  var x = document.getElementsByClassName("tab");
	  // Hide the current tab:	   
	  x[currentTab].style.display = "none";
	  // Increase or decrease the current tab by 1:
	  currentTab = currentTab + n;  
	  // Otherwise, display the correct tab:	  
	  showTab(currentTab);
}

	
function update_vanue() {
	
	option_template = '';

    $('#show_vanue').find('div').remove();
    $('.venueselectpicker option').remove();

    $(".tab").each(function(index){
        var index = index+1; 
        var venue = $(this).find("[id^=event_venue_name_]").val();  
        var address = $(this).find("[id^=address1_]").val();
        // var city = $(this).find("[id^=city_]").val();

        if(venue != '' || address != '')
        {
            var template = ' <div class="form-group col-sm-12" style="background-color:#9e9999; margin-top:10px; "> <div class="pull-left" style="width:40%;">Event Venue '+index+'</div>'+
                    '<div class="pull-left" style="width:45%;"> '+venue+' </div>'+
                    '<div class="pull-left" style="width:15%;"><img src="../assets/images/map-icon.png" alt="map-icon" /></div> </div>';

            option_template += '<option value="'+venue+' ">'+venue+' </option>';
        }
        

        $('#show_vanue').append(template);          
      
    }); 

     // $('.venueselectpicker').append(option_template);
    	          
}

// dynamic event FAQ here

function generete_dynamic_faq(count){
	var faq = ' <div class="row animated pulse" id="event_faq_'+count+'"> <div class="col-md-12" style="margin: 10px 0px;"> <input type="text" id="faq_ques_'+count+'" name="faq_ques[]" class="form-control" placeholder="Enter question"> </div> <div class="col-md-12" style="margin: 10px 0px;"> <input type="text" id="faq_ans_'+count+'" name="faq_ans[]" class="form-control" placeholder="Enter Answer"> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_faq btn btn-info btn-sm"> Remove</a> </div> </div>';

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


//create event form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#edit_eventvenue", function(e){

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
		                                                 timer: 3000
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
