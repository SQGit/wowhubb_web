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
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/><style type="text/css">
	
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

	/*dynamic add event venue address*/
	.tab {
	  display: none; 
	}

	.tab1 {
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

/*here start with keyword input  words  */
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
           
            
            <h3>Create Your Event</h3>
            <p>Please fill information to a create an event </p>
             <img src="../assets/images/open-banner.jpg" class="img-thumbnail"  alt="banner-image"/>
            <!-- Form progress -->
    <div class="form-wizard-steps form-wizard-tolal-steps-8">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="8" style="width: 12.25%;"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p>Event Details</p>
              </div>
              <!-- Step 1 --> 
              
              <!-- Step 2 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <p>Event Venue</p>
              </div>
              
              <!-- Step 2 --> 
              
              <!-- Step 3 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-exclamation" aria-hidden="true"></i></div>
                <p>!Wowtag</p>
              </div>
              <!-- Step 3 --> 
              
              <!-- Step 4  -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                <p>Event Schedule</p>
              </div>
              <!-- Step 4 --> 
              
              <!-- Step 5 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-flash" aria-hidden="true"></i></div>
                <p>Event Highlights</p>
              </div>
              <!-- Step 5 --> 
              <!-- Step 6 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <p>Event Contact/ URL</p>
              </div>
              <!-- Step 6 --> 
                <!-- Step 7 -->
               <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                <p>Event Tours</p>
              </div>
              <!--end  Step 7 -->
              <!-- Step 8 -->
               <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                <p>Audience Engagement</p>
              </div>
              
     </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
  		<form id="create_social_multicity_event" action="<?php echo base_url('event/social_multicity_event'); ?>"  method="post" enctype="multipart/form-data" >  
    	  
    	  <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="12.5" aria-valuemin="0" aria-valuemax="100" style="width: 12.5%"> </div>
                </div>
                <!-- Progress Bar -->
                 <div class="row" style="margin-bottom:15px;">
                     <div class="col-md-12">
                       <div class="col-md-12" style="background:#f5f5f5; padding-top:15px; padding-bottom:15px;">
                         <div class="col-md-12">
                           <div class="col-md-11">
                             <div class="pull-left" style="width:4%;">
                               <img src="../assets/images/ques.png" alt="">
                             </div>
                             <div class="pull-left" style="width:96%;">
                               <p style="line-height:23px;">This includes following Events like Religious Meetings, Conventions, Conferences, Comedy Shows, Music Concerts, Night Parties, Group Meetings etc. In Event details, We provide Event Days, Event Category and also add it is a Free, Paid or Donation based.</p>
                             </div>
                           </div>
                           <div class="col-md-1">
                             <h4> <span>Step 1 - 8</span></h4>
                           </div>
                         </div>
                       </div>
                     </div>
                </div>
       				<div class='col-sm-5'>
                 		<div class='row'>                 			
		                  	<div class='form-group col-sm-12' style="display: none;" >
		                      	<label>Event Type</label>
		                      	<input type='hidden' name="event_type"  class="form-control textBox" value="<?php echo $this->session->userdata('event_type'); ?>" />
		                    </div>
		                    

		                    <div class='form-group col-sm-12' >
		                      <label>Event Category</label>
		                      <input type='text' name="event_category"  class="form-control textBox" value="<?php echo $this->session->userdata('event_category'); ?>"  readonly/>
		                    </div>
		                    <div class='form-group col-sm-12' >
		                      <label>Event Name</label>
		                      <input type='text'  name="event_name" class="form-control required" />
		                    </div>	                    

		                    <div class="form-group col-sm-12" style="font-size: 15px;">
				                      <label>Select Event Days</label>
				                     <select name="event_totaldays" id="btn-add-tab" class="form-control required" style="background-color:#eff0f1;">
				                      <option value="">Select Event Days</option>
				                      <option value="1">1 Day Event</option>
				                      <option value="2">2 Days Event</option>
				                      <option value="3">3 Days Event</option>
				                      <option value="4">4 Days Event</option>
				                      <option value="5">5 Days Event</option>
				                      <option value="6">6 Days Event</option>
				                      <option value="7">7 Days Event</option>
				                  	</select>
		                    </div>

		                    <div id="date_hide" style="display: none;">

			                    <div class='form-group col-sm-6' style="width:45%;" >
			                      <label>Currrent Event Start Date</label>
			                      <input type='text' id="event_startdate" name="event_startdate"  class="form-control required"  />
			                    </div>

			                    <div  class='form-group col-sm-6' style="width:45%; " >
			                      <label>Currrent Event Start Time</label>
			                      <input type='text' id="event_startime" name="event_startime"  class="form-control  "  />
			                    </div>

			                
			                    <div class='form-group col-sm-6' style="width:45%;" >
			                      <label>Currrent Event End Date</label>
			                      <input type='text' id="event_enddate" name="event_enddate"  class="form-control" readonly />
			                    </div>

			                    <div class='form-group col-sm-6' style="width:45%;">
			                      <label>Currrent Event End Time</label>
			                      <input type='text' id="event_endtiming" name="event_endtiming"  class="form-control "  />
			                    </div>		                    
		                	</div>   

		                </div>

		            <div class='row'>    
		                <div class='form-group col-sm-12' >
                    		<label> Organisation Name </label>
                     			<!-- company name show here from login page -->
			            	
			              	<select name="tour_noof_city"  class="form-control " >
			              			<option value="">Select</option>
			              		<?php			             
			                  		$business =  $this->session->userdata('business');
			                  
			                    	foreach ($business as $business_name) { 
			                        	if(isset($business_name->companyname)) 
			                          		{            
			                  
			              		?>
				                    <option value="<?php  echo $business_name->companyname; ?>"><?php  echo $business_name->companyname; ?>
				                    	
				                    </option>	
				                     <?php } }  ?>			                     
			                </select>                    
			           
		            			<!-- company name show end here  -->
                    	</div>
                   	</div>

<!-- here country rupee shows -->
	<script type="text/javascript">

		   	var con=new Array();
			var cur=new Array();
			con[0]='Afghanistan';cur[0]=' ؋';
			con[1]='Albania';cur[1]='L';
			con[2]='Algeria';cur[2]=' د.ج';
			con[3]='Andorra';cur[3]='€ ';
			con[4]='Angola';cur[4]='Kz ';
			con[5]='Antigua and Barbuda';cur[5]='$ ';
			con[6]='Argentina';cur[6]='$ ';
			con[7]='Armenia';cur[7]='֏ ';
			con[8]='Australia';cur[8]='$ ';
			con[9]='Austria';cur[9]='€ ';
			con[10]='Azerbaijan';cur[10]='₼ ';
			con[11]='Bahamas';cur[11]='$ ';
			con[12]='Bahrain';cur[12]='دينار ';
			con[13]='Bangladesh';cur[13]='৳ ';
			con[14]='Barbados';cur[14]='$ ';
			con[15]='Belarus';cur[15]='Br ';
			con[16]='Belgium';cur[16]='€ ';
			con[17]='Belize';cur[17]='$ ';
			con[18]='Benin';cur[18]='Fr ';
			con[19]='Bhutan';cur[19]='Nu.';
			con[20]='Bolivia';cur[20]='Bs.';
			con[21]='Bosnia and Herzegovina';cur[21]=' KM';
			con[22]='Botswana';cur[22]='P ';
			con[23]='Brazil';cur[23]='R$';
			con[24]='Brunei';cur[24]='$';
			con[25]='Bulgaria';cur[25]='лв';
			con[26]='Burkina Faso';cur[26]='Fr ';
			con[27]='Burundi';cur[27]='Fr ';
			con[28]='Cambodia';cur[28]=' ៛ ';
			con[29]='Cameroon';cur[29]='Fr ';
			con[30]='Canada';cur[30]='$ ';
			con[31]='Cape Verde';cur[31]='Cape Verdean escudo';
			con[32]='Central African Republic';cur[32]='Fr ';
			con[33]='Chad';cur[33]='Fr ';
			con[34]='Chile';cur[34]='$ ';
			con[35]='China';cur[35]='¥';
			con[36]='Colombia';cur[36]='$ ';
			con[37]='Comoros';cur[37]='Fr ';
			con[38]='Congo(DRC)';cur[38]='Fr ';
			con[39]='Congo(ROC)';cur[39]='CFA Franc';
			con[40]='Costa Rica';cur[40]='₡';
			con[41]='Cóte d\'Ivoire';cur[41]='Fr ';
			con[42]='Croatia';cur[42]='kn ';
			con[43]='Cuba';cur[43]='$ ';
			con[44]='Cyprus';cur[44]='€ ';
			con[45]='Czech Republic';cur[45]='Kč ';
			con[46]='Denmark';cur[46]='kr ';
			con[47]='Djibouti';cur[47]='Fr ';
			con[48]='Dominica';cur[48]='$ ';
			con[49]='Dominican Republic';cur[49]='$ ';
			con[50]='East Timor';cur[50]='$ ';
			con[51]='Ecuador';cur[51]='$ ';
			con[52]='Egypt';cur[52]=' £';
			con[53]='El Salvador';cur[53]='$ ';
			con[54]='Equatorial Guinea';cur[54]='Fr ';
			con[55]='Eritrea';cur[55]='Nfk ';
			con[56]='Estonia';cur[56]='€ ';
			con[57]='Ethiopia';cur[57]='Br ';
			con[58]='Fiji';cur[58]='$ ';
			con[59]='Finland';cur[59]='€ ';
			con[60]='France';cur[60]='€ ';
			con[61]='Gabon';cur[61]='Fr ';
			con[62]='Gambia';cur[62]='D ';
			con[63]='Georgia';cur[63]='₾ ';
			con[64]='Germany';cur[64]='€ ';
			con[65]='Ghana';cur[65]='₵ ';
			con[66]='Greece';cur[66]='€ ';
			con[67]='Grenada';cur[67]='$ ';
			con[68]='Guatemala';cur[68]='Q ';
			con[69]='Guinea';cur[69]='Fr ';
			con[70]='Guinea-Bissau';cur[70]='Fr ';
			con[71]='Guyana';cur[71]='$ ';
			con[72]='Haiti';cur[72]='G ';
			con[73]='Honduras';cur[73]='L ';
			con[74]='Hungary';cur[74]='Ft ';
			con[75]='Iceland';cur[75]='Kr ';
			con[76]='India';cur[76]='₹';
			con[77]='Indonesia';cur[77]='Rp ';
			con[78]='Iran';cur[78]='﷼';
			con[79]='Iraq';cur[79]='ع.د ';
			con[80]='Ireland';cur[80]='€ ';
			con[81]='Israel';cur[81]='₪ ';
			con[82]='Italy';cur[82]='€ ';
			con[83]='Jamaica';cur[83]='$ ';
			con[84]='Japan';cur[84]='¥ ';
			con[85]='Jordan';cur[85]=' د.ا ';
			con[86]='Kazakhstan';cur[86]='₸ ';
			con[87]='Kenya';cur[87]='Sh ';
			con[88]='Kiribati';cur[88]='$ ';
			con[89]='Korea, North';cur[89]='Won';
			con[90]='Korea, South';cur[90]='Won';
			con[91]='Kuwait';cur[91]=' د.ك';
			con[92]='Kyrgyzstan';cur[92]='c ';
			con[93]='Laos';cur[93]='₭ ';
			con[94]='Latvia';cur[94]='€ ';
			con[95]='Lebanon';cur[95]='ل.ل ';
			con[96]='Lesotho';cur[96]='L ';
			con[97]='Liberia';cur[97]='$ ';
			con[98]='Libya';cur[98]=' ل.د ';
			con[99]='Liechtenstein';cur[99]='Fr ';
			con[100]='Lithuania';cur[100]='€ ';
			con[101]='Luxembourg';cur[101]='€ ';
			con[102]='Macedonia ';cur[102]=' ден';
			con[103]='Madagascar';cur[103]='Ar ';
			con[104]='Malawi';cur[104]='MK ';
			con[105]='Malaysia';cur[105]='RM ';
			con[106]='Maldives';cur[106]='.ރ ';
			con[107]='Mali';cur[107]='Fr ';
			con[108]='Malta';cur[108]='€ ';
			con[109]='Mauritania';cur[109]='UM ';
			con[110]='Mauritius';cur[110]='₨ ';
			con[111]='Mexico';cur[111]='$ ';
			con[112]='Moldova';cur[112]='L ';
			con[113]='Monaco';cur[113]='€ ';
			con[114]='Mongolia';cur[114]='₮ ';
			con[115]='Montenegro';cur[115]='€ ';
			con[116]='Morocco';cur[116]='د.م. ';
			con[117]='Mozambique';cur[117]='MT ';
			con[118]='Myanmar';cur[118]='Ks';
			con[119]='Namibia';cur[119]='$ ';
			con[120]='Nauru';cur[120]='$ ';
			con[121]='Nepal';cur[121]='₨ ';
			con[122]='Netherlands';cur[122]='€ ';
			con[123]='New Zealand';cur[123]='$ ';
			con[124]='Nicaragua';cur[124]='C$';
			con[125]='Niger';cur[125]='Fr';
			con[126]='Nigeria';cur[126]='₦';
			con[127]='Norway';cur[127]='kr';
			con[128]='Oman';cur[128]='ر.ع.';
			con[129]='Pakistan';cur[129]='₨';
			con[130]='Palau';cur[130]='$';
			con[131]='Palestinian State (proposed)';cur[131]='₪';
			con[132]='Panama';cur[132]='$';
			con[133]='Papua New Guinea';cur[133]='K';
			con[134]='Paraguay';cur[134]='₲';
			con[135]='Peru';cur[135]='S/.';
			con[136]='Philippines';cur[136]=' ₱ ';
			con[137]='Poland';cur[137]=' zł ';
			con[138]='Portugal';cur[138]='€ ';
			con[139]='Qatar';cur[139]='ر.ق';
			con[140]='Romania';cur[140]=' lei';
			con[141]='Russia';cur[141]='₽ ';
			con[142]='Rwanda';cur[142]='Fr ';
			con[143]='St. Kitts and Nevis';cur[143]='$ ';
			con[144]='St. Lucia';cur[144]='$ ';
			con[145]='St. Vincent and the Grenadines';cur[145]='$';
			con[146]='Samoa';cur[146]='T';
			con[147]='San Marino';cur[147]='€ ';
			con[148]='Sáo Tomé and Príncipe';cur[148]='Db';
			con[149]='Saudi Arabia';cur[149]=' ر.س';
			con[150]='Senegal';cur[150]='Fr ';
			con[151]='Serbia';cur[151]=' дин. Or din.';
			con[152]='Seychelles';cur[152]='₨ ';
			con[153]='Sierra Leone';cur[153]='Le ';
			con[154]='Singapore';cur[154]='$ ';
			con[155]='Slovakia';cur[155]=' € ';
			con[156]='Slovenia';cur[156]=' € ';
			con[157]='Solomon Islands';cur[157]='$ ';
			con[158]='Somalia';cur[158]='Sh ';
			con[159]='South Africa';cur[159]='R ';
			con[160]='Spain';cur[160]='€ ';
			con[161]='Sri Lanka';cur[161]='Rs ';
			con[162]='Sudan';cur[162]=' ج.س.';
			con[163]='Suriname';cur[163]='$ ';
			con[164]='Swaziland';cur[164]='L';
			con[165]='Sweden';cur[165]='Kr';
			con[166]='Switzerland';cur[166]='Fr ';
			con[167]='Syria';cur[167]='£';
			con[168]='Taiwan';cur[168]=' $ ';
			con[169]='Tajikistan';cur[169]='ЅМ ';
			con[170]='Tanzania';cur[170]='Sh ';
			con[171]='Thailand';cur[171]='฿ ';
			con[172]='Togo';cur[172]='Fr ';
			con[173]='Tonga';cur[173]='T$';
			con[174]='Trinidad and Tobago';cur[174]='$';
			con[175]='Tunisia';cur[175]='ملّيم';
			con[176]='Turkey';cur[176]='₺';
			con[177]='Turkmenistan';cur[177]='m ';
			con[178]='Tuvalu';cur[178]='$ ';
			con[179]='Uganda';cur[179]='Sh ';
			con[180]='Ukraine';cur[180]='₴ ';
			con[181]='United Arab Emirates';cur[181]='فلس';
			con[182]='United Kingdom';cur[182]='£ ';
			con[183]='United States';cur[183]='$ ';
			con[184]='Uruguay';cur[184]='$';
			con[185]='Uzbekistan';cur[185]='soʻm';
			con[186]='Vanuatu';cur[186]='Vt ';
			con[187]='Vatican City (Holy See)';cur[187]='€ ';
			con[188]='Venezuela';cur[188]='Bs ';
			con[189]='Vietnam';cur[189]='₫ ';
			con[190]='Western Sahara (proposed state)';cur[190]='$ ';
			con[191]='Yemen';cur[191]=' ﷼ ';
			con[192]='Zambia';cur[192]='ZK ';
			con[193]='Zimbabwe';cur[193]='$ ';

			function list(index)
			{
				var con=document.getElementById('curr');
				if(index==-1)
				{
					con.value=""; return;
				}
				con.value=cur[index];
			}

	</script>
		                	<div class='row'>    
				               <div class='form-group col-sm-12' style="margin-top: 15px;">

				               	<label>This is</label>
			                      <select name="ticket_type" id="ticket_type" class="form-control" style="background-color:#eff0f1;">
			                      	<option value="select">Select</option>
			                        <option value="Free Event">Free Event</option>
			                        <option value="Paid Event">Paid Event Tickets</option>
			                        <option value="Donation Base">Donation Based</option>
			                      </select>
					                
								</div>
							</div>


		                   <div class='row'>                   
			                    <div class='form-group col-sm-6' style="display: none;" id="price_country">
			                    	<label>Select Country</label>
			                      	<select name=country id=con onChange=list(this.value) class="form-control">
										<script type="text/javascript">
										document.write("<option value=-1>Select Country</option>");
										count=con.length;
										for(i=0;i<count;i++)
										document.write("<option value="+i+">"+con[i]+"</option>");
										</script>
									</select>
			                    </div>

			                    <div class='form-group col-sm-6' style="display: none;" id="ticket_price">
			                      <label>Enter Ticket Price</label>
			                      <input type='text'  name="ticket_price" id="curr" class="form-control"  />
			                    </div> 

			                    <div class='form-group col-sm-12' style="display: none;" id="ticker_url_show">
		                     		<label>Ticket URL</label>
		                      		<input type='text' name="ticket_url" class="form-control" >
		                    	</div>
			                </div>        
       				</div>

                	<div class='col-sm-4'>
			                <div class='row'>
				                    <div class='form-group col-sm-12'>
				                      <label>Event Description</label>
				                      <textarea type='text' id="description" name="event_description"  class="form-control required" style="min-height:150px;" placeholder="Describe What Your Event Is All About " ></textarea>
				                    </div>
				                    <div class='form-group col-sm-12'>
					                    <div class='col-sm-12' style="background-color:#f9f9f9;">
					                        <label>Event Cover Photo <strong style="color: red; font-size: 20px;"> * </strong></label>
					                        <label>Please browse to upload cover photo</label>
					                        <div class="form-group" style="margin-bottom: 10px;"> 
						                        <div class="field" align="left">
						                         		<input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('files').click();" />
						                         		 <div id="img_preview1"></div>
						                         		<input type="file" style="display:none;" name="cover_img" id="files" class="file required" accept="image/*" title="cover image">  
						                        </div> 
					                        </div>		                        
					                    </div>
				                    </div>	

				                     <div class='form-group col-sm-12' style="margin-top: 10px;">
					                      <div class='col-sm-12' style="background-color:#f9f9f9;">
					                        <label>Organisation Logo</label>
					                        <label>Please browse to upload Organisation Logo</label>
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
                    <button type="button" class="btn" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
    	</fieldset>


              <!-- Form Step 1  end--> 
              
             
              
              <!--  Step 2 -->
    <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%"> </div>
                </div>
                <!-- Progress Bar -->
                <div class="row" style="margin-bottom:15px;">
                     <div class="col-md-12">
                       <div class="col-md-12" style="background:#f5f5f5; padding-top:15px; padding-bottom:15px;">
                         <div class="col-md-12">
                           <div class="col-md-11">
                             <div class="pull-left" style="width:4%;">
                               <img src="../assets/images/ques.png" alt="">
                             </div>
                             <div class="pull-left" style="width:96%;">
                               <p style="line-height:23px;">You can enter one or multiple venue for your event on this page.  If your event is taking place on the same date but at multiple location then wowhubb makes it possible for your to do this easily.      </p>
                             </div>
                           </div>
                           <div class="col-md-1">
                             <h4> <span>Step 2 - 8</span></h4>
                           </div>
                         </div>
                       </div>
                     </div>
                </div>
        <div class='col-sm-5'>
            <div class='col-sm-12' style="background-color:#f9f9f9;padding-top:10px; ">
                  		<div id="show_vanue" style="background-color:#bfbebe;padding-top:10px; ">
							<center> <label >CREATE AND ADD YOUR EVENT TOURS CITIES HERE</label></center>  
						</div>               
             	<div id="event_venues">
                	<div id="event_address_1" class="tab">                			

		                    <div class='form-group col-sm-12' style="margin-top:20px;">
		                      <label>Enter Your Event Venue / location Name</label>		                      
		                      <input type='text' id="event_venue_name_1" name="event_venue_name[]"  class="form-control textBox" onblur="update_vanue()"/>
		                    </div>                
		                   
		                    <div class='form-group col-sm-12'>
		                      <label>Address 1</label>
		                      <input type='text' id="address1_1" name="address1[]"  class="form-control"  />
		                    </div>

		                    <div class='form-group col-sm-12'>
		                      <label>Address 2</label>
		                      <input type='text' id="address2_1" name="address2[]"  class="form-control"  />
		                    </div>

		                    <div class='form-group col-sm-12'>
		                      <label>City</label>
		                      <input type='text' id="city_1" name="venue_city[]" class="form-control" onblur="update_vanue()"/ style="text-transform: capitalize;">
		                    </div>
		                    <div class='form-group col-sm-12'>
		                      <label>Zipcode/ Postal Code</label>
		                      <input type='text' id="zipcode_1" name="zipcode[]"  class="form-control"  onblur="update_vanue()"/>
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
				                          <input type='text' name="quesans1"  class="form-control"  />
				                        </div>
				                        <div class="form-group-1 col-md-12">
				                          <p>This is a kids friendly event?</p>
				                          <input type='text' name="quesans2"  class="form-control"  />
				                        </div>
				                        <div class="form-group-1 col-md-12">
				                          <p>What are event parking/Transportantion options to and from event location?</p>
				                          <input type='text' name="quesans3"  class="form-control"  />
				                        </div>
				                        <div class="form-group-1 col-md-12">
				                          <p> What are allowed into the event venue?</p>
				                          <input type='text' name="quesans4"  class="form-control"  />
				                        </div>
				                    </div>

				                    <!-- dynamic faq start here -->
			                       
			                      <div id="dynamic_add_faq">
                                  <div class="row" id="event_faq_1">
                                        
                                
                                  </div>
                                </div>

                                  <a href="JavaScript:void(0);" id="faq_add" data-nxt_event_faq="2">
			                        	<i class="fa fa-plus-circle"></i> Add More Event FAQ's
			                      </a>	

			                        <!-- dynamic faq end here -->	                       
			                       
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
                    <button type="button" class="btn" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
    </fieldset>

 	
 	<!-- start third steps 3 -->

 	<fieldset>
                
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="37.5" aria-valuemin="0" aria-valuemax="100" style="width:37.5%"> </div>
                </div>
                <!-- Progress Bar -->
                <div class="row" style="margin-bottom:15px;">
                     <div class="col-md-12">
                       <div class="col-md-12" style="background:#f5f5f5; padding-top:15px; padding-bottom:15px;">
                         <div class="col-md-12">
                           <div class="col-md-11">
                             <div class="pull-left" style="width:4%;">
                               <img src="../assets/images/ques.png" alt="">
                             </div>
                             <div class="pull-left" style="width:96%;">
                               <p style="line-height:23px;">!Wowtag  is a  catch word or phrase that uniquely identifies your  events  on the wowhubb network,  !Wowtag  can be used to advertise and promote your event  to your audience  to make it more effective create and attach  a 20 to 60 seconds  invite video to your wowtag title or event catch word</p>
                             </div>
                           </div>
                           <div class="col-md-1">
                             <h4> <span>Step 3 - 8</span></h4>
                           </div>
                         </div>
                       </div>
                     </div>
                </div>
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
                          <input type='text' name="event_title" class="form-control required" style="padding: 6px 30px;" placeholder="Enter Your !Wowtag Title Here      Example:  Craigsbirthday2017" />
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
                       	 Browse...<input type="file" name="wowtag_video" id="video_size" class="file" accept="video/*">
                       	</span>

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
                        <div class="input-group col-xs-12" style="margin-top:0px;">
                          <p>Choose a compelling 60-120 seconds event promotional ads video that will create a lasting impression in your viewers mind</p>
                        </div>                        
                      </div>
                    </div>
                    <div class='col-sm-6' style="margin-top: 10px;">
                      <label>!Wowtag Runtime From: </label>
                      <input type='text'  id="runtime_from" name="runtime_from" class="form-control " placeholder="Wowtag Runtime From" />
                    </div>
                    <div class='col-sm-6' style="margin-top: 10px;" >
                      <label>!Wowtag Runtime To: </label>
                      <input type='text' id="totime_to" name="totime_to" class="form-control" placeholder="Wowtag Runtime To" />
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
                    <button type="button" class="btn" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
    </fieldset>

 	<!-- end third steps -->
    
              <!--  Step 4  event schedule-->
    <fieldset> 

           <!-- Progress Bar -->

            	 <div class="progress">
                  		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="49.5" aria-valuemin="0" aria-valuemax="100" style="width:49.5%">
                  		 </div>
                </div>
                <!-- Progress Bar -->
                      <div class="row" style="margin-bottom:15px;">
                   <div class="col-md-1">
                    <div class='form-group col-sm-12'> <a class="btn-next" href="JavaScript:void(0);"><i class="fa fa-fast-forward"></i> Skip</a> </div>
                  </div>
                     <div class="col-md-10">
                       <div class="col-md-12" style="background:#f5f5f5; padding-top:15px; padding-bottom:15px;">
                         <div class="col-md-12">
                   
                             <div class="pull-left" style="width:4%;">
                               <img src="../assets/images/ques.png" alt="">
                             </div>
                             <div class="pull-left" style="width:96%;">
                               <p style="line-height:23px;">Wowhubb saves the cost of printing your next event program schedules / agenda you can simply enter your program time-slots, event facilitators, event agenda and and select specific location for each event slots. Also you can have multiple days event slots  displayed on wowhubb mobile devices of your attendees.</p>
                             </div>
                           
                          
                         </div>
                         
                       </div>
                     </div>
                     
                      <div class="col-md-1">
                             <h4> <span>Step 4 - 8</span></h4>
                           </div>
                </div>
                

        		<div class='form-group col-sm-9' style="margin-top: 30px;"> 
                  
                 	<input type="hidden" name="no_of_days" id="no_of_days" value="">
                	<ul id="tab-list" class="nav nav-tabs" role="tablist">
            
          			</ul>

                  <!-- Tab panes -->
                  <div id="tab-content" class="tab-content">                   
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

                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">
                    <button type="button" class="btn" style="background:#005898;">Save Draft</button>
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
	                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"> </div>
	        </div>
                <!-- Progress Bar -->
           <div class="row" style="margin-bottom:15px;">
                     <div class="col-md-12">
                       <div class="col-md-12" style="background:#f5f5f5; padding-top:15px; padding-bottom:15px;">
                         <div class="col-md-12">
                           <div class="col-md-11">
                             <div class="pull-left" style="width:4%;">
                               <img src="../assets/images/ques.png" alt="">
                             </div>
                             <div class="pull-left" style="width:96%;">
                               <p style="line-height:23px;">Your Event Highlights includes list of Invited Guest Speaker, Guest Artist, Special Activities etc </p>
                             </div>
                           </div>
                           <div class="col-md-1">
                             <h4> <span>Step 5 - 8</span></h4>
                           </div>
                         </div>
                       </div>
                     </div>
                </div>
                 <div class='form-group col-sm-12'>
                  	  <label>Add Your Event Highlights </label>
                </div>
                <div class='col-sm-9' id="highlight2">
	                <div class='form-group col-sm-7' style="margin-bottom: 0px;">
	                  	
	                    <div class='col-md-12' style="background-color:#f9f9f9; padding-top:15px;">
	                        <div class="form-group">                       
		                        <div class="input-group col-xs-12" style="margin-top:0px;">
		                          <p style="line-height:23px;">Choose a compelling 60-120 seconds event promotional ads video that will create a lasting impression in your viewers mind</p>
		                        </div>

		                         <input type="button" class="btn btn-primary"  value="Browse" onclick="document.getElementById('video_size1').click();" />
		                         <input type="file" style="display:none;" name="event_highlight1" id="video_size1" class="file">

			                     	<div id="video_show1" style="display: none;" >
			                     		<div class="remove_video1" style="cursor: pointer;">
		                          			<i class="fa fa-times-rectangle" style="font-size:25px; margin-left: 171px;"></i>
		                        		</div>
			                        	<video width="200" height="110" controls>
										 	 <source src="mov_bbb.mp4" id="video_here1">
										    Your browser does not support HTML5 video.
										</video>
			                        </div>
	                      	</div>
	                    </div>	                    
	                </div>

                <div class='col-sm-5'>
	                <div class='form-group col-sm-12'>
	                  <select name="guest_type1" class="form-control" id="types" >
	                    <option value="">Select Event Guest Type </option>
	                    <option value="Guest Speaker">Guest Speaker </option>
	                    <option value="Guest Artist">Guest Artist </option>
	                    <option value="Comedian">Comedian</option>
	                    <option value="Event Host">Event Host</option>
	                    <option value="Event Celebrants">Event Celebrants</option>
	                    <option value="Others">Others</option>
	                  </select>
	                </div>
	                <div class='form-group col-sm-12'>
	                  <input type="text" name="nameofspeaker1" id="textbox_1" class="form-control" placeholder="Enter Name Of Speaker/Artist/Event Clips">
	                </div>
	                <div class='form-group col-sm-12'>
	                  <input type="text" name="guest_url1" id="textbox_2" class="form-control" placeholder="Event Guest Speaker/Artist URL-Links">
	                </div>
	                <div class='form-group col-sm-12'>
	                  <textarea class="form-control" name="guest_speaker1" placeholder="Event Guest Speaker/ Artist Introduction/ Pre-Events Activities Clips" style="min-height:150px;"></textarea>
	                </div>
                </div>
                		<br><br>

                <!-- second set  -->

                <div id="event_high" style="display: none;">
	                <div class='form-group col-sm-7' style="margin-bottom: 0px;">
	                  	
	                    <div class='col-md-12' style="background-color:#f9f9f9; padding-top:15px;">
	                      <div class="form-group">                       
	                        <div class="input-group col-xs-12" style="margin-top:0px;">
	                          <p style="line-height:23px;">Choose a compelling 60-120 seconds event promotional ads video that will create a lasting impression in your viewers mind</p>
	                        </div>
	                         <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('video_size2').click();" />
	                        <input type="file" style="display:none;" name="event_highlight2" id="video_size2" class="file">
	                      	

	                     	<div id="video_show2" style="display: none;" >
	                     		<div class="remove_video2" style="cursor: pointer;">
		                          	<i class="fa fa-times-rectangle" style="font-size:25px;margin-left: 171px;"></i>
		                        </div>
	                        	<video width="200" height="110" controls>
								 	 <source src="mov_bbb.mp4" id="video_here2">
								    Your browser does not support HTML5 video.
								</video>
	                        </div>                 
	                      </div>
	                    </div>
	                </div>
                <div class='col-sm-5'>
	                <div class='form-group col-sm-12'>
	                  <select name="guest_type2" class="form-control" id="types" >
	                    <option value="">Select Event Guest Type </option>
	                    <option value="Guest Speaker">Guest Speaker </option>
	                    <option value="Guest Artist">Guest Artist </option>
	                    <option value="Comedian">Comedian</option>
	                    <option value="Event Host">Event Host</option>
	                    <option value="Event Celebrants">Event Celebrants</option>
	                    <option value="Others">Others</option>
	                  </select>
	                </div>
	                <div class='form-group col-sm-12'>
	                  <input type="text" name="nameofspeaker2" id="textbox_1" class="form-control" placeholder="Enter Name Of Speaker/Artist/Event Clips">
	                </div>
	                <div class='form-group col-sm-12'>
	                  <input type="text" name="guest_url2" id="textbox_2" class="form-control" placeholder="Event Guest Speaker/Artist URL-Links">
	                </div>
	                <div class='form-group col-sm-12'>
	                  <textarea class="form-control" name="guest_speaker2" placeholder="Event Guest Speaker/ Artist Introduction/ Pre-Events Activities Clips" style="min-height:150px;"></textarea>
	                </div>
                </div>
            </div>

                 <div class='form-group col-sm-12'> <a href="JavaScript:void(0);" id="add_highlight"><i class="fa fa-plus-circle"></i> Add More Event Highlights Clips</a> </div>

            </div>

            	
                <div class='col-sm-3'>
                  <div class='col-sm-12' style="background-color:#f9f9f9;">
                    <div class='col-sm-12'>
                      <h5>Helpful Hints</h5>
                      <section class="ac-container">
                        <div>
                          <input id="ac-17" name="accordion-1" type="radio" />
                          <label for="ac-17">Event Highlights images Size?</label>
                          <article class="ac-small">
                            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-18" name="accordion-1" type="radio" />
                          <label for="ac-18">Event Highlights video size?</label>
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
                    <button type="button" class="btn" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
    </fieldset>
            
              <!-- end Step 5 --> 
              
              <!--  Step 6 -->
     <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="74.5" aria-valuemin="0" aria-valuemax="100" style="width: 74.5%"> </div>
                </div>
                <!-- Progress Bar -->
                     <div class="row" style="margin-bottom:15px;">
                     <div class="col-md-12">
                       <div class="col-md-12" style="background:#f5f5f5; padding-top:15px; padding-bottom:15px;">
                         <div class="col-md-12">
                           <div class="col-md-11">
                             <div class="pull-left" style="width:4%;">
                               <img src="../assets/images/ques.png" alt="">
                             </div>
                             <div class="pull-left" style="width:96%;">
                               <p style="line-height:23px;">Enter the event host details on this page  and also select how your event attendee can contact your organisation</p>
                             </div>
                           </div>
                           <div class="col-md-1">
                             <h4> <span>Step 6 - 8</span></h4>
                           </div>
                         </div>
                       </div>
                     </div>
                </div>
                <div style="clear:both;"></div>
                <div class="col-md-9">
                <div class="col-md-6">
                  
                  <div class="form-group col-sm-12">
                  <div class="pull-left" style="width:80%;">
                    <label> Contact Person Name </label>
                    <input type="text" class="form-control"  name="contact_persona_name" placeholder="" >
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
                    <textarea type="text" class="form-control"  name="eventcontactmsg" placeholder=""></textarea>
                  </div></div>
                  
                  <div class="col-md-6">
                  <div class="form-group col-sm-12">
                    <label> Enter Keyword Search </label>
                   <input type="text" id="keyword_search" class="form-control" name="keyword[]" style="margin-bottom: 15px;" value="">                   
                     <span style="color: #e91e63; font-size: 17px; text-transform: capitalize;"  id="keyword_show" value=""> </span>
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
                  <button type="button" class="btn" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
    </fieldset> 


     <!--  Step 7 -->
     <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"> </div>
                </div>
                <!-- Progress Bar -->
                 <div class="row">
                  <div class="col-md-3">
                    <div class='form-group col-sm-12'> <a class="btn-next" href="JavaScript:void(0);"><i class="fa fa-fast-forward"></i> Skip  Event Does not have Event Tours</a> </div>
                  </div>
                  <div class="col-md-8">
                           <div class="col-md-11">
                             <div class="pull-left" style="width:6%;">
                               <img src="../assets/images/ques.png" alt="">
                             </div>
                             <div class="pull-left" style="width:94%;">
                               <p style="line-height:23px;">For Event taking place in Multiple Cities Across The Globe We Got You Covered</p>
                             </div>
                           </div>
                   </div>
                  <div class="col-md-1">
                    <div class="pull-right">
                      <h4> <span>Step 7 - 8</span></h4>
                    </div>
                  </div>
                </div>

                <div class='col-sm-5'>
           					  <div class='col-sm-12' >
           					  		<div class='col-sm-3'>
           					  			<label>Evnt Tour City</label>
           					  		</div>
           					  		<div class='col-sm-4'>
           					  			<label>Date</label>
           					  		</div>
           					  		<div class='col-sm-4'>
           					  			<label>Ticket URL</label>
           					  		</div>
           					  	 <div id="show_tours">
           					  	 </div> 
           					 

           			<div id="event_tour">
                		<div id="event_tour_1" class="tab1">                			

		                    <div class='form-group col-sm-12' style="margin-top:20px;">
		                      <label>Enter Your Event Venue / location Name</label>		                      
		                      <input type='text' id="event_tour_name_1" name="event_tour_name[]"  class="form-control textBox" />
		                    </div>

		                    <div class='form-group col-sm-6'>
		                      <label>Event Start Date</label>
		                      <input type='text' id="tour_startdate_1" name="eventtour_startdate[]"  class="event_startdate form-control" onblur="update_tour()" />
		                    </div>

		                    <div class='form-group col-sm-6'>
		                      <label>Event Start Time</label>
		                      <input type='text' id="tour_startime_1" name="eventtour_startime[]"  class="event_startime form-control "  />
		                    </div>
		                   
		                    <div class='form-group col-sm-6' >
		                      <label>Event End Date</label>
		                      <input type='text' id="tour_enddate_1" name="eventtour_enddate[]"  class="event_enddate form-control " onblur="update_tour()"/>
		                    </div>

		                    <div class='form-group col-sm-6'>
		                      <label>Event End Time</label>
		                      <input type='text' id="tour_endtiming_1" name="eventtour_endtiming[]"  class="event_endtiming form-control "  />
		                    </div>

		                    <div class='form-group col-sm-12'>
		                      <label>Address 1</label>
		                      <input type='text' id="tour_address1_1" name="tour_address1[]"  class="form-control"  />
		                    </div>

		                    <div class='form-group col-sm-12'>
		                      <label>Address 2</label>
		                      <input type='text' id="tour_address2_1" name="tour_address2[]"  class="form-control"  />
		                    </div>

		                    <div class='form-group col-sm-12'>
		                      <label>City</label>
		                      <input type='text' id="tour_city_1" name="tour_city[]" class="form-control" onblur="update_tour()"/>
		                    </div>

		                    <div class='form-group col-sm-12'>	
		                    	 <label>Country</label>	                  
		                          	<select id="tour_country_1" name="tour_country[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> 
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
		                    

		                    <div class='form-group col-sm-6'>
		                      <label>Ticket URL</label>
		                      <input type='text' id="ticket_url_1" name="tour_ticket_url[]" class="form-control" onblur="update_tour()"/>
		                    </div>

		                    <div class='form-group col-sm-6'>
		                      <label>Ticket Price</label>
		                      <input type='text' id="ticket_price_1" name="tour_ticket_price[]" class="form-control" />
		                    </div>

		                    <div class='form-group col-sm-12'>
		                      <label>Zipcode/ Postal Code</label>
		                      <input type='text' id="tour_zipcode_1" name="tour_zipcode[]"  class="form-control"  />
		                    </div>
               		</div>
            	</div> 
           </div>

                   <div class='col-sm-12'> 
                    	<div class='col-sm-4'>
                    		<a href="JavaScript:void(0);" id="add_event_tour" data-nxt_event_tour="2"> <!-- id="add_event_tour" -->
                    		<i class="fa fa-plus-circle"></i> Add multiple Tour </a>
                    	</div>
                    	<div style="overflow:hidden;">
						 	
							    <div class="col-md-8">
							      <a href="JavaScript:void(0);" id="prevButton" onclick="nextPreview(-1)">Previous</a>
							      <a href="JavaScript:void(0);" id="nextButton" onclick="nextPreview(1)" style="margin-left: 35px;"> Next</a>
							    </div>					
						</div>                     
                   </div> 
                   
        		</div>

               <div class='col-sm-4'>
                  	<div class='row'>
                  			<div class='form-group-1 col-sm-12'>	
                  			 		<label>Select Number of cities for your upcoming Events</label>
				                    <select name="tour_noof_city" id="btn-add-tab" class="form-control " >
				                      <option value="">Select Cities</option>				                     
				                      <option value="2">2 Cities Event/Tours</option>
				                      <option value="3">3 Cities Event/Tours</option>
				                      <option value="4">4 Cities Event/Tours</option>
				                      <option value="5">5 Cities Event/Tours</option>
				                      <option value="6">6 Cities Event/Tours</option>
				                      <option value="7">7 Cities Event/Tours</option>
				                      <option value="8">8 Cities Event/Tours</option>
				                      <option value="9">9 Cities Event/Tours</option>
				                      <option value="10">10 Cities Event/Tours</option>
				                      <option value="11">11 Cities Event/Tours</option>
				                      <option value="12">12 Cities Event/Tours</option>				                     

				                 	</select>
				            </div>

		                    <div class='form-group-1 col-sm-12' style="margin-top: 20px;">
		                      <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventtour_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:90%; font-size:15px;">Address can only be viewed by invited guest</div>
		                    </div>
		                    <div class='form-group-1 col-sm-12'>
			                    <div class="pull-left" style="width:10%;">
			                       <input type="checkbox" name="eventtour_guestshare" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                    </div>
			                    <div class="pull-left" style="width:90%; font-size:15px;">Invited guest can share event</div>
		                    </div>
		                    <div class='form-group-1 col-sm-12'>
		                      <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventtour_onlineevent" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:90%; font-size:15px;">Online  Event</div>
		                    </div>
		                    <div class='form-group-1 col-sm-12'>
		                      <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventtour_inviteonlyevent" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:90%; font-size:15px;">Invite Only Event</div>
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
                    <button type="button" class="btn" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
                
    </fieldset> 

     	<!--  Step 7 -->
         
        <!-- start Step 8 -->

   <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
                </div>

               			 <!-- Progress Bar -->

                <div class="row" style="margin-bottom:15px;">
                     <div class="col-md-12">
                       <div class="col-md-12" style="background:#f5f5f5; padding-top:15px; padding-bottom:15px;">
                         <div class="col-md-12">
                           <div class="col-md-11">
                             <div class="pull-left" style="width:4%;">
                               <img src="../assets/images/ques.png" alt="">
                             </div>
                             <div class="pull-left" style="width:96%;">
                               <p style="line-height:23px;">Choose From The Tabs Below How Your Event Audience Will Engage With Your Event Post</p>
                             </div>
                           </div>
                           <div class="col-md-1">
                             <h4> <span>Step 8 - 8</span></h4>
                           </div>
                         </div>
                       </div>
                     </div>
                </div>
                <div style="clear:both;"></div>

                <div class="col-md-12" >     
	                <div class="col-md-6" >                	
	                    	<h3>Your Current Event City</h3>   
	                    	<div class="form-group col-sm-12" style="font-weight: bold">
		                		<div class="pull-left" style="width:40%;"> Event Venue</div> 
		                		<div class="pull-left" style="width:30%;">Event City </div>
		                		<div class="pull-left" style="width:30%;">Zipcode</div>	                		
		                	</div>            		
	               
		                <div  class="col-md-12 event_venue_details_show" >
		                    
		                </div>
	            	</div>

	            	<div class="col-md-6">
		                    <h3>Your Future Event City</h3>    
		                    	<div class="form-group col-sm-12" style="font-weight: bold">
			                		<div class="pull-left" style="width:20%;"> Event city</div> 
			                		<div class="pull-left" style="width:30%;">Event Start and End Date </div>
			                		<div class="pull-left" style="width:35%;">Ticket URL</div>
			                		<div class="pull-left" style="width:15%;">Ticket Price </div> 
			                	</div>

			                	<!-- dynamically show event tours details here -->
		                
			                <div  class="col-md-12 event_tour_details_show" >
			                    
			                </div>
		            </div>
           		</div>

        	<div class='form-group col-sm-12'> 
                  
                 		 <!-- Nav tabs category -->
                 		<div class="col-md-12 text-center">
	                        <label>Choose Your Audience Form Type</label>
	                    </div>
                 		<div class="col-md-12">
                        	<div class="col-md-offset-4 col-md-4">
                          		<select name="audience_form_type" id="audience_form_type" class="form-group selectpicker" style="width:100%; margin-left:10px; padding: 7px 10px; border-radius: 5px;"> 
		                            <option value="audience_form">Audience Form </option> 
		                            <option value="url_link">URL Links For Event Tickets/Registration</option>		                           
		                            <option value="event_coupon">Event Coupons/Discount Links</option>
		                        </select>
                            </div>
                      	</div>

                  
                		  <!-- Tab panes -->

            <div class="main">

            	<!-- first step -->
                	
                <div id="first_form" class="animated bounce"> 
	                    <div class='form-group col-sm-12' style="background:#f5f5f5; padding:15px 10px;">
	                    	<div class="col-md-12 text-center"><h4>Create Your Event Call To Action Button Form</h4></div>
		                    <div class="col-md-12 text-center">
		                        <label>Select Your Audience Call To Action Button</label>
		                    </div>
	                      
	                      	<div class="col-md-12">
	                        	<div class="col-md-offset-4 col-md-4">
	                          		<select id="action_btn1" name="audience_formaction_btn" class="form-group" style="width:100%; margin-left:10px; padding: 7px 10px; border-radius: 5px;"> 
	                          			<option value="">Select </option>
	                          			<option value="Register">Register </option>     
			                            <option value="Learn More">Learn More </option> 
			                            <option value="Book Now">Book Now</option>
			                            <option value="Apply Now">Apply Now</option>
			                            <option value="Grab Coupon">Grab Your Coupon</option>
			                            <option value="Other">Other</option>
			                        </select>
	                            </div>

	                      	</div> 
	                      	<div class="col-md-12" style='display: none; margin-top: 10px;' id='action_btn1_other'> 
		                      	<div class="col-md-offset-4 col-md-4">
	                            	<input type="text" name="" class="form-control" style="width:100%; margin-left:10px; padding: 7px 10px; border-radius: 5px;" placeholder="Enter Action Button Type ">
	                            </div>
	                        </div>
	                                                  
	                    </div>
                    <div class='form-group col-sm-7'>               
                   		<div class='form-group col-sm-12' style="background:#f5f5f5; padding:15px 10px; margin-top:5px;">
                    		<div class="col-md-12" style="margin-bottom:15px;"><h5>What Information Will you like to ask for from you would be event attendees<br> <br>
							<span style="color:#333;">Event Attendee Information</span></h5></div>
		                    <div class="col-md-12" style="margin-top:15px;">
			                      <div class="pull-left" style="width:5%;">
			                        	<input type="checkbox" name="audience_full_name" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div style="width:20%;" class="pull-left text-left">
			                        <label>Full Name</label>
			                      </div>		                     
		                    </div>
		                    <div class="col-md-12" style="margin-top:15px;">
			                      <div class="pull-left" style="width:5%;">
			                        <input type="checkbox" name="audience_wowtag_id" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div style="width:20%;" class="pull-left text-left">
			                        <label>!Wowtag ID</label>
			                      </div>                      
		                    </div>

		                    <div class="col-md-12" style="margin-top:15px;">
		                       <div class="pull-left" style="width:5%;">
		                        <input type="checkbox" name="audience_email" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                       </div>
		                       <div style="width:20%;" class="pull-left text-left">
		                        <label>Email</label>
		                       </div>		                      
				            </div>

				            <div class="col-md-12" style="margin-top:15px;">
		                       <div class="pull-left" style="width:5%;">
		                        <input type="checkbox" name="audience_gender" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                       </div>
		                       <div style="width:20%;" class="pull-left text-left">
		                       		 <label>Gender</label>		                       		 
		                        </div>	
			                                    
				            </div>


		                    <div class="col-md-12" style="margin-top:5px;">                      
			                      <div class="pull-left" style="width:5%;">
			                        <input type="checkbox" name="audience_phone" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div style="width:20%;" class="pull-left text-left">
			                        <label>Phone</label>
			                      </div>
		                    </div>
		                    <div class="col-md-12" style="margin-top:15px;">                      
		                      		<div class="pull-left" style="width:5%;">
		                        		<input type="checkbox" name="audience_address1" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      		</div>
		                      		<div style="width:20%;" class="pull-left text-left">
		                        		<label>Address 1</label>
		                      		</div>                     
		                    </div>
		                    <div class="col-md-12" style="margin-top:15px;">                      
		                      		<div class="pull-left" style="width:5%;">
		                        		<input type="checkbox" name="audience_address2" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      		</div>
		                      		<div style="width:20%;" class="pull-left text-left">
		                        		<label>Address 2</label>
		                      		</div>                     
		                    </div>
		                    <div class="col-md-12" style="margin-top:15px;">                      
		                      		<div class="pull-left" style="width:5%;">
		                        		<input type="checkbox" name="audience_city" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      		</div>
		                      		<div style="width:20%;" class="pull-left text-left">
		                        		<label>City</label>
		                      		</div>                     
		                    </div>
		                    <div class="col-md-12" style="margin-top:15px;">                      
		                      		<div class="pull-left" style="width:5%;">
		                        		<input type="checkbox" name="audience_country" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      		</div>
		                      		<div style="width:20%;" class="pull-left text-left">
		                        		<label>Country</label>
		                      		</div>                     
		                    </div>    
		                    <div class="col-md-12" style="margin-top:15px;">                      
		                      		<div class="pull-left" style="width:5%;">
		                        		<input type="checkbox" name="audience_zipcode" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      		</div>
		                      		<div style="width:20%;" class="pull-left text-left">
		                        		<label>Zipcode</label>
		                      		</div>                     
		                    </div>                                          
                      	</div>
                    </div>


                	<div class='form-group col-sm-5'>
                     
                   		<div class='form-group col-sm-12' style="background:#f5f5f5; padding:15px 10px; margin-top:5px;">
                    				<div class="col-md-12" style="margin-bottom:5px;"><h5>Select Your Event Promotion Options<br> <br>
									</h5></div>
                     		<div class="form-group col-md-12">
				                        <div class="form-group col-md-12">
						                    <div class="pull-left" style="width:8%;">
						                        <input type="radio" name="promotion_options" value="1" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
						                    </div>
				                      		<div class="pull-left text-left" style="width:92%; font-size:15px;">Publish & Share On My !Wowhubb Network</div>
				                        </div>
					                    <div class="form-group col-md-12">
					                      <div class="pull-left" style="width:8%;">
					                        <input type="radio" name="promotion_options" value="2" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
					                      </div>
					                      <div class="pull-left text-left" style="width:92%; font-size:15px;">Publish to Specific Group
					                      		<!-- Modal -->
                              
					                      </div>
					                    </div>
					                    <div class="form-group col-md-12">
						                      <div class="pull-left" style="width:8%;">
						                        <input type="radio" name="promotion_options" value="3" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
						                      </div>
					                      	  <div class="pull-left text-left" style="width:92%; font-size:15px;">This a Private Event</div>
					                    </div>
					                    <div class="form-group col-md-12">
						                      <div class="pull-left" style="width:8%;">
						                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
						                      </div>
					                     	  <div class="pull-left text-left" style="width:92%; font-size:15px;">Promote My Event On !Wowhubb Network</div>
					                    </div>
                     		</div>
                                        
                      	</div>                    
                    </div>                   
                </div>   


                 
                 <!-- second step    -->
                <div id="second_form" style="display: none;" class="animated bounceInLeft"> 
      		    	<div class='form-group col-sm-12'  style="background:#f5f5f5; padding:15px 10px;">
                    		<div class="col-md-12 text-center"><h4>Create Your Event Call To Action Button Form</h4></div>
			                      <div class="col-md-12 text-center">
			                        <label>Select Your Audience Call To Action Button</label>
			                      </div>
                      
			                        <div class="col-md-12">
				                        <div class="col-md-offset-4 col-md-4">
				                          <select name="action_btn2" class="form-group selectpicker" style="width:100%; margin-left:10px; padding: 7px 10px; border-radius: 5px;"> 
				                          	<option value="">Select </option>    
				                            <option value="Register">Register </option> 
				                            <option value="Learn More">Learn More </option>
				                            <option value="Book Now">Book Now</option>
				                            <option value="Apply Now">Apply Now</option>
				                            <option value="Contact us">Contact Us</option>
				                            <option value="Grab Ticket">Grab Ticket</option>
				                          </select>
				                        </div>
			                        </div>
                    </div>

                	<div class='form-group col-sm-7'>                   
                    
                   			<div class='form-group col-sm-12' style="background:#f5f5f5; padding:15px 10px; margin-top:5px;">
                    			<div class="col-md-12 text-center" style="margin-bottom:15px;"><h5>Your Audience Will Be Directed To This Link For Further Registration<br> <br>
								<span style="color:#333;">Select One URL Event Links</span></h5></div>
	                     		<div id="first_ticket_url">
	                     			<div class="col-md-12" style="margin-top:15px;" id="dynamicticket_1">
	                     				
			                      		<div class="pull-left" style="width:5%;">
			                      			<input type="hidden" name="ticket_url_check[]"  value="off" >
			                       			 <input type="checkbox" class="checkbox" value="on" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      		</div>

			                     	 	<div style="width:40%;" class="pull-left text-left">
			                       		 	 <input type='text' name="url_ticketurl[]"  class="form-control textBox" placeholder="Ticket URLs">
			                      		</div>

			                      		<div style="width:50%;" class="pull-right text-left">
						                      <select name="url_country[]" id="days" class="form-control" style="background-color:#eff0f1;">
							                        <option value="">Country</option>
							                        <option value="Afghanistan">Afghanistan</option>
							                        <option value="Albania">Albania</option>
							                        <option value="Algeria">Algeria</option>
							                        <option value="American">American Somoa</option>
							                        <option value="Angola">Angola</option>
							                        <option value="Antartica">Antartica</option>
							                        <option value="india">india</option>
						                      </select>
			                      		</div>
	                    			</div>
                     			</div>
	                      	
		                     	<div class="form-group col-sm-12" style="margin-top:15px;"> <a href="JavaScript:void(0);" id="ticket_url" data-nxt_ticket_url="2"><i class="fa fa-plus-circle"></i> Add More Ticket URLs</a> </div>

			                    <div class="col-md-12" style="margin-top:15px;">
				                      <div class="pull-left" style="width:5%;">
				                        <input type="checkbox" name="url_donation_url_check"  style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
				                      </div>
				                      <div style="width:95%;" class="pull-left text-left">
				                        <input type='text' name="url_donation_url"  class="form-control textBox" placeholder="Donation URLs">
				                      </div>
			                    </div>
			                    <div class="col-md-12" style="margin-top:15px;">
				                      <div class="pull-left" style="width:5%;">
				                        <input type="checkbox" name="url_website_url_check" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
				                      </div>
				                      <div style="width:95%;" class="pull-left text-left">
				                        <input type='text' name="url_website_url"  class="form-control textBox" placeholder="Website URLs">
				                      </div>		                      
			                    </div>
		                      	<div class="col-md-12" style="margin-top:15px;">
				                      <div class="pull-left" style="width:5%;">
				                        <input type="checkbox" name="url_donthave_link" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
				                      </div>
				                      <div style="width:95%;" class="pull-left text-left">
				                        <input type='text'   class="form-control textBox" placeholder="Event Don't Have URLs">
				                      </div>                      
		                      	</div>                   
                			</div>
                	</div>
                  
               		<div class='form-group col-sm-5'>
                     
                   		<div class='form-group col-sm-12' style="background:#f5f5f5; padding:15px 10px; margin-top:5px;">

                    		<div class="col-md-12" style="margin-bottom:5px;"><h5>Select Your Event Promotion Options<br> <br>
							</h5></div>

                    		<div class="form-group col-md-12">
			                   <div class="form-group col-md-12">
			                   <div class="pull-left" style="width:8%;">
			                        <input type="radio" name="promotion_options" value="1" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-left text-left" style="width:92%; font-size:15px;">Publish & Share On My !Wowhubb Network
			                      </div>
			                      </div>
			                      <div class="form-group col-md-12">
			                      <div class="pull-left" style="width:8%;">
			                        <input type="radio" name="promotion_options" id="promotion_options" value="2" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-left text-left" style="width:92%; font-size:15px;">Publish to Specific Group</div>
			                      </div>
			                      <div class="form-group col-md-12">
			                      <div class="pull-left" style="width:8%;">
			                        <input type="radio" name="promotion_options" value="3" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-left text-left" style="width:92%; font-size:15px;">This a Private Event</div>
			                      </div>
			                      <div class="form-group col-md-12">
			                      <div class="pull-left" style="width:8%;">
			                        <input type="checkbox" name="promotion_options" value="4" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
			                      </div>
			                      <div class="pull-left text-left" style="width:92%; font-size:15px;">Promote My Event On !Wowhubb Network</div>
			                   </div>
                   			</div>
                                         
                 		 </div>
                    
              	 	</div>
         		</div>

                    <!-- third step -->

                    <div id="third_form" style="display: none;" class="animated  bounceInLeft"> 

                   		<div class='form-group col-sm-12' style=" background:#f5f5f5; padding:15px 10px;">
                    		<div class="col-md-12 text-center"><h4>Create Your Event Call To Action Button Form</h4></div>
                      		<div class="col-md-12 text-center">
		                        <label>Select Your Audience Call To Action Button</label>
		                     </div>
                      
		                      	<div class="col-md-12">
			                        <div class="col-md-offset-4 col-md-4">
			                          <select name="action_btn3" class="form-group selectpicker" style="width:100%; margin-left:10px; padding: 7px 10px; border-radius: 5px;"> 		
			                          	<option value="">Select </option> 
			                          	<option value="Register">Register </option>                            
			                            <option value="Learn More">Learn More </option>
			                            <option value="Book Now">Book Now</option>
			                            <option value="Apply Now">Apply Now</option>
			                            <option value="Grab Coupon">Grab Coupon</option>
			                            
			                          </select>
			                        </div>
		                      	</div>
                     	</div>

                 		<div class='form-group col-sm-7'>                 
                        <div class='form-group col-sm-12' style="background:#f5f5f5; padding:15px 10px; margin-top:5px;">
                    			<div class="col-md-12" style="margin-bottom:15px;"><h5>Event Attendee Information<br> </h5></div>
			                    <div class='form-group col-sm-12 text-left' >
			                      	<label>Coupon Title/Code</label>
			                      	<input type='text' name="coupon_code"  class="form-control textBox" />
			                    </div>

			                    <div class='form-group col-sm-12 text-left' >
			                      <label>Coupon Expiry Date</label>
			                      <div class="input-group">
								      <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>						     
			                     	  <input type='text' name="coupon_ex_date" id="coupon_ex_date" class="form-control textBox" />
			                      </div>
			                    </div>

			                    <div class='form-group col-sm-12 text-left' >
			                      <label>Coupon Terms &amp; Conditions</label>
			                      <textarea  name="terms_condition"  class="form-control textBox" style="min-height:120px;"></textarea>
			                    </div>
			                    <div class="form-group col-sm-12 ">
				                    <div class="col-sm-12" style="background-color:#f9f9f9; padding-top:15px;">
					                      <div class="text-center">
					                        <label style="color:#333; font-weight: bold; font-size: 16px">Upload Coupon Image </label>
					                      </div>
					                      <div class="form-group">                      		
					                        <input type="button" class="btn btn-primary"  value="Browse Image.." onclick="document.getElementById('img_files3').click();" />
						                        <input type="file" style="display:none;" name="coupon_img" id="img_files3" class="file" accept="image/*">
					                      </div>
				                    </div>
			                    </div>
                        </div>
                    	</div>

                    	<div class='form-group col-sm-5'>                     
                   				<div class='form-group col-sm-12' style="background:#f5f5f5; padding:15px 10px; margin-top:5px;">
                    				<div class="col-md-12" style="margin-bottom:5px;"><h5>Select Your Event Promotion Options<br> <br>
									</h5></div>
                     				<div class="form-group col-md-12">
					                    <div class="form-group col-md-12">
					                         <div class="pull-left" style="width:8%;">
					                         	<input type="radio" name="promotion_options" value="1" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
					                         </div>
					                      	 <div class="pull-left text-left" style="width:92%; font-size:15px;">Publish & Share On My !Wowhubb Network</div>
					                    </div>
					                    <div class="form-group col-md-12">
					                      	<div class="pull-left" style="width:8%;">
					                        	<input type="radio" name="promotion_options" value="2" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
					                      	</div>
					                      	<div class="pull-left text-left" style="width:92%; font-size:15px;">Publish to Specific Group</div>
					                    </div>
					                    <div class="form-group col-md-12">
						                      <div class="pull-left" style="width:8%;">
						                        	<input type="radio" name="promotion_options" value="3" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
						                      </div>
					                      	  <div class="pull-left text-left" style="width:92%; font-size:15px;">This a Private Event</div>
					                    </div>
					                    <div class="form-group col-md-12">
						                      <div class="pull-left" style="width:8%;">
						                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
						                      </div>
					                      	  <div class="pull-left text-left" style="width:92%; font-size:15px;">Promote My Event On !Wowhubb Network</div>
					                    </div>
                  					</div>
                     			</div>
                    	</div>
                    </div>
           		</div>
        	</div>            
               
                <br>
                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">
                  <button type="button" class="btn" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" class="btn btn-next">Publish</button>
                  </div>
                </div>
    </fieldset>

    <!-- publish to specific group -->
    		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 9999;">

			                                  <div class="modal-dialog" >
			                                    <div class="modal-content">
			                                    
			                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			                                        <h4 class="modal-title" style="text-align:center;">Select Group Name </h4>
			                                        <?php                            
						                               foreach ($group_name as $groups)
						                                {                     
						                            ?>
			                                      	<div class="col-md-12">                           

							                            <div class="pull-left" style="width:5%;"> 
							                              <input type="checkbox" name="group_name" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="<?php echo $groups->_id;?>">
							                            </div>
							                          
							                            <div class="pull-left text-left" style="width:95%;">
							                               <?php echo $groups->groupname; ?> 
							                            </div>

							                        </div>
							                            <div class="col-md-12" >
							                              <div class="col-md-12" style="border: 0.5px solid #d7d6d6; margin-top: 10px; margin-bottom: 10px; "> 
							                              </div>
							                            </div>
							                        <?php } ?>  				                        

			                                      <div class="modal-footer">                                       
			                                        <button type="button" class="btn cancel btn-primary" data-dismiss="modal">Submit</button>
			                                      </div>
			                                   
			                                  </div>                                  
			                                </div>
		                                </div>
          </form>   
           
            <!-- end Step 8 --> 
        
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
<script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 

<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.js')?>"></script> 
<script src="<?php echo base_url('assets/js/wickedpicker.js')?>"></script>   
<script src="<?php echo base_url('assets/js/moment.js')?>"></script> 

<script>
	
var option_template = ''; //golabal variable for dynamic address
var step_to_show = '';
var step_to_tour ='';

// hide enter button to submit the form
$(document).ready(function(){
$('#create_social_multicity_event').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});	
});		


// hide and show date depend on select days  step1
$(document).ready(function(){
		$("#btn-add-tab").change(function () {				
            $("#date_hide").show();
		});

});	

// event start time and end time picker
  $("#event_startime").wickedpicker();		
 
  $("#event_endtiming").wickedpicker();

// event start date and end date time 

   $('body').on('focus',".event_startdate", function(){   //dynamically add date
    	$(this).datetimepicker(
    	{
    		format:'M-d-Y',      
    		timepicker:false,
    		minDate: 0,   
    	});
    
	});

    $('body').on('focus',".event_enddate", function(){   //dynamically add date
    	$(this).datetimepicker(
    	{
    		format:'M-d-Y',      
    		timepicker:false,
    		minDate: 0,   
    	});
    
	});

	$('body').on('focus',".event_startime", function(){   //dynamically add time
    	$(this).wickedpicker();
   
	});


	$('body').on('focus',".event_endtiming", function(){   //dynamically add time
    	$(this).wickedpicker();
	});

   
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
            
//event schedule day start and end time 

$('body').on('focus',".day_end_time", function(){   //dynamically add time
    	$(this).wickedpicker();
   
	});


$('body').on('focus',".day_start_time", function(){   //dynamically add time
    	$(this).wickedpicker();
	});


          
 //radio  with model popup box
      $('input[type="radio"][name=promotion_options]').on('change', function(e)
      		{
	          if ($(this).val() == "2" ) 
				{
		          if(e.target.checked){
		          $('#myModal').modal();
		        }
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



//dynamically add event venue address

function generate_address_fields(count)
 {	
	var address  = '<div id="event_address_'+count+'" class="animated bounceInRight tab"> <div class="form-group col-sm-12" style="margin-top:20px;"> <label>Enter Your Event Venue / location Name</label> <input type="text" id="event_venue_name_'+count+'" name="event_venue_name[]"  class="form-control" onblur="update_vanue()" /> </div> <div class="form-group col-sm-12"> <label>Address 1</label> <input type="text" id="address1_'+count+'" name="address1[]"  class="form-control"  /> </div> <div class="form-group col-sm-12"> <label>Address 2</label> <input type="text" id="address2_'+count+'" name="address2[]"  class="form-control" /> </div> <div class="form-group col-sm-12"> <label>City</label> <input type="text" id="city_'+count+'" name="venue_city[]" class="form-control" onblur="update_vanue()"/ style="text-transform: capitalize;"> </div>  <div class="form-group col-sm-12"> <label>Zipcode/ Postal Code</label> <input type="text" id="zipcode_'+count+'" name="zipcode[]" class="form-control" onblur="update_vanue()" /> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);" id="btnAdd10" class="remove_address btn btn-info btn-sm"> </a> </div> </div>';

        return address;
}

   var currentTab = 0; // Current tab is set to be the first tab (0)
   showTab(currentTab); // Display the current tab

  $('#btnAdd7').click(function() //here add address button id name btnAdd7
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
	step_to_venue = '';	

    $('#show_vanue').find('div').remove();
    $('.venueselectpicker option').remove();
    $('.event_venue_details_show').find('div').remove();

    $(".tab").each(function(index){
        var index = index+1;   
        var venue = $(this).find("[id^=event_venue_name_]").val();  
        var city = $(this).find("[id^=city_]").val();
        var zipcode = $(this).find("[id^=zipcode_]").val(); 

        if(venue != '' || city != '' || zipcode != '')
        {
            var template = ' <div class="form-group col-sm-12" style="background-color:#9e9999; margin-top:10px; "> <div class="pull-left" style="width:40%;">Event Venue '+index+'</div>'+
                    '<div class="pull-left" style="width:45%;">'+venue+'</div>'+
                    '<div class="pull-left" style="width:15%;"><img src="../assets/images/map-icon.png" alt="map-icon" /></div> </div>';

            step_to_venue += ' <div class="form-group col-sm-12" style="background-color:#e8e3e3;"> <div class="pull-left" style="width:40%;">'+venue+'</div>'+
                    '<div class="pull-left" style="width:30%;">'+city+' </div>'+
                    '<div class="pull-left" style="width:30%;">'+zipcode+'</div> </div>';

            option_template += '<option value="'+venue+' ">'+venue+' </option>';
        }
        

        $('#show_vanue').append(template);          
      
    }); 

     $('.venueselectpicker').append(option_template);
     $('.event_venue_details_show').append(step_to_venue);
    	          
}

//dynamically add event tour address

function generate_tour_fields(count)
 {	
	var tour_address  = '<div id="event_tour_'+count+'" class="animated bounceInRight tab1"> <div class="form-group col-sm-12" style="margin-top:20px;"> <label>Enter Your Event Venue / location Name</label> <input type="text" id="event_tour_name_'+count+'" name="event_tour_name[]"  class="form-control"  /> </div> <div class="form-group col-sm-6"> <label>Event Start Date</label> <input type="text" id="tour_startdate_'+count+'" name="eventtour_startdate[]"  class="event_startdate form-control " onblur="update_tour()"  /> </div> <div class="form-group col-sm-6"> <label>Event Start Time</label> <input type="text" id="tour_startime_'+count+'" name="eventtour_startime[]"  class="event_startime form-control "  /> </div> <div class="form-group col-sm-6" > <label>Event End Date</label> <input type="text" id="tour_enddate_'+count+'" name="eventtour_enddate[]"  class="event_enddate form-control " onblur="update_tour()" /> </div> <div class="form-group col-sm-6"> <label>Event End Time</label> <input type="text" id="tour_endtiming_'+count+'" name="eventtour_endtiming[]"  class="event_endtiming form-control "  /> </div> <div class="form-group col-sm-12"> <label>Address 1</label> <input type="text" id="tour_address1_'+count+'" name="tour_address1[]"  class="form-control"  /> </div> <div class="form-group col-sm-12"> <label>Address 2</label> <input type="text" id="tour_address2_'+count+'" name="tour_address2[]"  class="form-control" /> </div> <div class="form-group col-sm-12"> <label>City</label> <input type="text" id="tour_city_'+count+'" name="tour_city[]" class="form-control" onblur="update_tour()" /> </div> <div class="form-group col-sm-12"> <label>Country</label> <select id="tour_country_'+count+'" name="tour_country[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="">Country </option> <option value="Afghanistan">Afghanistan </option> <option value="Albania">Albania </option> <option value="Algeria">Algeria </option> <option value="American Samoa">American Samoa </option> <option value="Andorra">Andorra </option> <option value="Angola">Angola </option> <option value="Australia">Australia </option> <option value="Bahamas">Bahamas </option> <option value="Bahrain">Bahrain </option> <option value="Bangladesh">Bangladesh </option> <option value="Barbodos">Barbodos </option> <option value="Canada">Canada </option> <option value="Cape Verde">Cape Verde </option> <option value="Chile">Chile </option> <option value="China">China </option> <option value="Colombia">Colombia </option> <option value="Denmark">Denmark </option> <option value="Dominica">Dominica </option> <option value="Dominican Republic">Dominican Republic </option> <option value="Finland">Finland </option> <option value="France">France </option> <option value="French Guiana">French Guiana </option> <option value="Gabon">Gabon </option> <option value="Gambia">Gambia </option> <option value="Greece">Greece </option> <option value="Greenland">Greenland </option> <option value="Hong Kong">Hong Kong </option> <option value="Hungary">Hungary </option> <option value="Iceland">Iceland </option> <option value="India">India </option> <option value="Iraq">Iraq </option> <option value="Ireland">Ireland </option> <option value="Italy">Italy </option> <option value="Jamaica">Jamaica </option> <option value="Japan">Japan </option> <option value="Kenya">Kenya </option> <option value="Kuwait">Kuwait </option> <option value="Latvia">Latvia </option> <option value="Lebanon">Lebanon </option> <option value="Liberia">Liberia </option> <option value="Macao">Macao </option> <option value="Madagaskar">Madagaskar </option> <option value="Malawi">Malawi </option> <option value="Malaysia">Malaysia </option> <option value="Mali">Mali </option> <option value="Malta">Malta </option> <option value="Mexico">Mexico </option> <option value="Monaco">Monaco </option> <option value="Myanmar">Myanmar </option> <option value="Nepal">Nepal </option> <option value="Netherlands">Netherlands </option> <option value="Niger">Niger </option> <option value="Norway">Norway </option> <option value="Oman">Oman </option> <option value="Pakistan">Pakistan </option> <option value="Palau">Palau </option> <option value="Panama">Panama </option> <option value="Peru">Peru </option> <option value="Philippines">Philippines </option> <option value="Poland">Poland </option> <option value="Qatar">Qatar </option> <option value="Romania">Romania </option> <option value="Russian Federation">Russian Federation </option> <option value="Samoa">Samoa </option> <option value="Senegal">Senegal </option> <option value="Spain">Spain </option> <option value="Srilanka">Srilanka </option> <option value="Switzerland">Switzerland </option> <option value="Thailand">Thailand </option> </select> </div><div class="form-group col-sm-6"> <label>Ticket URL</label> <input type="text" id="ticket_url_'+count+'" name="tour_ticket_url[]" class="form-control" /> </div> <div class="form-group col-sm-6"> <label>Ticket Price</label> <input type="text" id="ticket_price_'+count+'" name="tour_ticket_price[]" class="form-control" onblur="update_tour()" /> </div> <div class="form-group col-sm-12"> <label>Zipcode/ Postal Code</label> <input type="number" id="tour_zipcode_'+count+'" name="tour_zipcode[]"  class="form-control"  /> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);" id="btnremove" class="remove_tour btn btn-info btn-sm"> </a> </div> </div>';

        return tour_address;
}

	var currentTab1 = 0; // Current tab is set to be the first tab (0)
    shownextTab(currentTab1); // Display the current tab

  $('#add_event_tour').click(function() //here add address button id name btnAdd7
    {
		$('[id^=event_tour_]').hide();
        //Once add button is clicked
        var nxttour_count = $(this).data("nxt_event_tour");

        var nxttourHTML = generate_tour_fields(nxttour_count);
		$('[id^=event_tour_'+nxttour_count+']').show();
        $('#event_tour').append(nxttourHTML); // Add field html

		nxttour_count++; //Increment field counter

        $(this).data('nxt_event_tour', nxttour_count); //update data nxtportion   
        nextPreview(1);             

	});

 //remove function

   $(document).on('click', '.remove_tour', function(e)
    {
	        e.preventDefault();
	        nextPreview(-1);
	        $(this).parents('[id^=event_tour_]').remove();
	        update_tour();   //here remove event venue on top
    });

function shownextTab(n)
 {	
  // This function will display the specified tab of the form...
		  var x = document.getElementsByClassName("tab1");
		  x[n].style.display = "block";
		  //... and fix the Previous/Next buttons:
		  if (n == 0) {
		    document.getElementById("prevButton").style.display = "none";
		  } else {
		    document.getElementById("prevButton").style.display = "inline";
		  }
		  if (n == (x.length - 1)) {
		    document.getElementById("nextButton").style.display = "none";
		  } else {
		    document.getElementById("nextButton").style.display = "inline";
		  }
		  update_tour();
}

function nextPreview(n)
 {
  // This function will figure out which tab to display  
	  var x = document.getElementsByClassName("tab1");
	  // Hide the current tab:	   
	  x[currentTab1].style.display = "none";
	  // Increase or decrease the current tab by 1:
	  currentTab1 = currentTab1 + n;  
	  // Otherwise, display the correct tab:	  
	  shownextTab(currentTab1);
}

	
function update_tour() {
	
	step_to_tour = '';

    $('#show_tours').find('div').remove();
    $('.event_tour_details_show').find('div').remove();

    $(".tab1").each(function(index1){
        var index1 = index1+1;   
        var venue = $(this).find("[id^=event_venue_name_]").val();  
        var address = $(this).find("[id^=address1_]").val();

        var city = $(this).find("[id^=tour_city_]").val();
        var start_date = $(this).find("[id^=tour_startdate_]").val();
        var end_date = $(this).find("[id^=tour_enddate_]").val();
        var ticket_url = $(this).find("[id^=ticket_url_]").val();
        var ticket_price = $(this).find("[id^=ticket_price_]").val();


        if(city != '' || ticket_url != '' || start_date != '' || end_date != '' )
        {
            
            var event_tour = ' <div class="form-group col-sm-12" style="background-color:#9e9999; margin-top:10px; "> <div class="pull-left" style="width:20%;">'+city+'</div>'+
                    '<div class="pull-left" style="width:60%;">'+start_date+','+end_date+'</div>'+                    
                    '<div class="pull-left" style="width:20%;">'+ticket_url+'</div></div>'; 

            step_to_tour  += '<div class="form-group col-sm-12" style="background-color:#e8e3e3; "> <div class="pull-left" style="width:20%;">'+city+'</div>'+
                    '<div class="pull-left" style="width:30%;">'+start_date+','+end_date+'</div>'+                    
                    '<div class="pull-left" style="width:35%;"> '+ticket_url+'</div>'+
                    '<div class="pull-left" style="width:15%;"> '+ticket_price+'</div></div>';           
        }        

        $('#show_tours').append(event_tour);    
      
    }); 

    $('.event_tour_details_show').append(step_to_tour);  
    	          
}

	
//dynamic add event program schdule 
// this part will be show event start date

$(function(){ 

  $('#event_startdate').datetimepicker({
  timepicker:false,
  minDate:0,
  format:'M-d-Y',
  onChangeDateTime:function(dp,$input){

    var day_count= $('select').find('option:selected').val();
    

    var startdate = moment(dp).format("M/D/Y");
    var new_date = moment(startdate);
    var enddate = new_date.add(day_count-1, 'days').format('MMM-DD-YYYY');
   
    $('#event_enddate').val(enddate);

    for(var i=1;i<=day_count;i++)
    {
      var startdate = moment(dp).format("M/D/Y");
      var new_date = moment(startdate);

      $('#tab-list #'+i).text(new_date.add(i-1, 'days').format('ddd, MMM Do'));
       
    }

  } 

});
});



// pass value with in same form
$('#event_startime').change(function() {
    $('#day1_start_time').val($(this).val());
});



//dynamic add tab view for event days

$(document).ready(function() {
    $('#btn-add-tab').on('change',function()
     {
        var i = 0;
         var selectedValue = $(this).val();  
          $('#tab-list').html('');        //clear tab data before select option
          $('#tab-content').html('');             
          
          $('#no_of_days').val(selectedValue);

          var tabID = 1;

      for(i=0;i<selectedValue;i++)
      {    
         
        $('#tab-list').append($('<li><a style="text-align:center;" href="#tab' + tabID + '" role="tab" data-toggle="tab"> Day ' + tabID + ' <br> <span id="' + tabID + '"> </span></a></li>'));  //class name - in active hide  

        $('#tab-content').append($('<div class=" tab-pane fade tab_' + tabID + '" id="tab' + tabID + '">  <div class="form-group col-sm-12 text-center"> <div class="form-group col-sm-12 text-center" style="background:#f5f5f5; padding:15px 10px;"> <div style="width:10%" class="pull-left"><span style="color:#e9e9e9;">width</span></div> <div style="width:17%" class="pull-left"> <label>Event Start Time</label> </div> <div style="width:12%" class="pull-left"> <input type="text" id="day1_start_time" name="day'+tabID+'_event_starttime"  class="form-control day_start_time" /> </div> <div style="width:17%; margin-left:35px;" class="pull-left"> <label>Event End Time</label> </div> <div style="width:12%" class="pull-left"> <input type="text" id="day1_end_time" name="day'+tabID+'_event_endtime"  class="form-control day_end_time" placeholder="8:14"  /> </div> </div> </div> <div id="day_' +tabID+' "> <div class="form-group col-sm-12" id="day1_dynamicadd_1"> <div class="col-md-12"> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary Start Time</span></label> </div> <div style="width:30%" class="pull-left"> <select  id="from_hour_1" name="day'+tabID+'_from_hour[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="1">1 </option> <option value="2">2 </option> <option value="3">3 </option> <option value="4">4 </option> <option value="5">5 </option> <option value="6">6 </option> <option value="7">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select> </div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="from_min_1" name="day'+tabID+'_from_min[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select> </div> <div style="width:30%" class="pull-left"> <select id="from_sec_1" name="day'+tabID+'_from_sec[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select> </div> </div> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label> <span style="font-size:13px; color:#333;">Itinerary End Time</span></label> </div> <div style="width:30%" class="pull-left"> <select id="to_hour_1" name="day'+tabID+'_to_hour[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="1">1 </option> <option value="2">2 </option> <option value="3">3 </option> <option value="4">4 </option> <option value="5">5 </option> <option value="6">6 </option> <option value="7">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select> </div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="to_min_1" name="day'+tabID+'_to_min[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select> </div> <div style="width:30%" class="pull-left"> <select id="to_sec_1" name="day'+tabID+'_to_sec[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select> </div> </div> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Event Agenda</span></label> <input type="text" id="agenta_1" name="day'+tabID+'_agenda[]"  class="form-control"  /> </div> </div> <div class="col-md-12"> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Facilitator</span></label> <input type="text" id="facilitator_name_1" name="day'+tabID+'_facilitator_name[]"  class="form-control"  /> </div> <div class="col-md-8"> <label><span style="font-size:13px; color:#333;">Event Location Venue</span></label> <select id="location_1" name="day'+tabID+'_location[]" class="form-group venueselectpicker" style="width:100%; padding: 7px 10px; border-radius: 5px;"> </select> </div> </div> </div> </div> <div class="form-group col-md-12" > <a href="JavaScript:void(0);" class="add_address_dynamic" data-day="' + tabID + '" data-nxt_event_venue="2" > <i class="fa fa-plus-circle"></i> Add more event program time slot</a> </div> </div>'));
         
          tabID++;
      }

       i++;
      
        $(".add_address_dynamic").click(function()
        {      
            var nxtvenue_count = $(this).data("nxt_event_venue"); 
            var day = $(this).data("day"); 
            var nxtvenueHTML = generete_dynamic_venue(day, nxtvenue_count);
            
            $(this).parents("div[class*=' tab_']").find('[id^=day_]').append(nxtvenueHTML);            
            
            $('#day1_dynamicadd_'+nxtvenue_count+' .venueselectpicker').append(option_template);
              nxtvenue_count++;
            $(this).data('nxt_event_venue', nxtvenue_count); //update data nxtportion   
       });

     });
   
});

// Add more event program time slot
function generete_dynamic_venue(day, count){

  var day1  = ' <div class="form-group col-sm-12" id="day1_dynamicadd_'+count+'"> <div class="col-md-12"> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary Start Time</span></label></div> <div style="width:30%" class="pull-left"> <select  id="from_hour_'+count+'" name="day'+day+'_from_hour[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="0">1 </option> <option value="1">2 </option> <option value="2">3 </option> <option value="3">4 </option> <option value="4">5 </option> <option value="5">6 </option> <option value="6">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select></div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="from_min_'+count+'" name="day'+day+'_from_min[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select></div> <div style="width:30%" class="pull-left"> <select id="from_sec_'+count+'" name="day'+day+'_from_sec[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select></div> </div> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary End Time</span></label></div> <div style="width:30%" class="pull-left"> <select id="to_hour_'+count+'" name="day'+day+'_to_hour[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="0">1 </option> <option value="1">2 </option> <option value="2">3 </option> <option value="3">4 </option> <option value="4">5 </option> <option value="5">6 </option> <option value="6">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select></div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="to_min_'+count+'" name="day'+day+'_to_min[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select></div> <div style="width:30%" class="pull-left"> <select id="to_sec_'+count+'" name="day'+day+'_to_sec[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select></div> </div> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Event Agenda</span></label> <input type="text" id="agenta_1" name="day'+day+'_agenda[]"  class="form-control"  /> </div> </div> <div class="col-md-12"> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Facilitator</span></label> <input type="text" id="facilitator_name_'+count+'" name="day'+day+'_facilitator_name[]"  class="form-control"  /> </div> <div class="col-md-8"> <label><span style="font-size:13px; color:#333;">Event Location Venue</span></label> <select id="location_1" name="day'+day+'_location[]" class="form-group venueselectpicker" style="width:100%; padding: 7px 10px; border-radius: 5px;"> </select> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);" id="remove_day" class="remove_dayslot btn btn-info btn-sm"></a> </div> </div> </div>'; 

    return day1;
}
  
//remove days from program schedule function

$(document).on('click', '.remove_dayslot', function(e)
    {
	    $(this).parents('[id^=day1_dynamicadd_]').remove();
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
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});

//organisation logo preview and delete

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
            $('#logo').val("");
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});	

// event highlight1 video and image shows
$(document).on("change", "#video_size1", function(evt)
{
	var files = $('#video_size1')[0].files;
    var len = $('#video_size1').get(0).files.length;

   
   		 f = files[0];

    var ext = f.name.split('.').pop().toLowerCase();

    if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
      
    		 var file = this.files[0];

        		if (file.size > 2621440)
        		 {
		             $('#video_show1').hide();	
		             alert('Filesize must 2.5MB or below');

         		 }else{	
         		 
					  var $source = $('#video_here1');				 
					  $source[0].src = URL.createObjectURL(this.files[0]);
					  $source.parent()[0].load();
					  $('#video_show1').show();					  	

					  $(".remove_video1").click(function () { 
			               	$('#video_show1').hide();                 
			                $('#video_size1').val("");

		                });   

		              $(".pip").remove();
		          			  
				 	}
    	
    }
    else{
    		var files = evt.target.files,
	        filesLength = files.length;    

	        var f = files[0];
	        var fileReader = new FileReader();

	        fileReader.onload = (function(evt) {

		          var file = evt.target;
		          $('#video_show1').hide();    

		          $("<span class=\"pip\">" +
		            "<img class=\"imageThumb\" src=\"" + evt.target.result + "\" title=\"" + file.name + "\"/>" +
		            "<br/><span class=\"remove1\">Remove image</span>" +
		            "</span>").insertAfter("#video_size1");

		          $(".remove1").click(function(){
		            $(this).parent(".pip").remove();
		            $('#video_size1').val("");

		          });          
	                   
	        	});

	    		fileReader.readAsDataURL(f);
           
		}
    
});
	
// event highlight2 video and image shows
$(document).on("change", "#video_size2", function(evt)
{
	var files = $('#video_size2')[0].files;
    var len = $('#video_size2').get(0).files.length;

   
   		 f = files[0];

    var ext = f.name.split('.').pop().toLowerCase();

    if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
      
    		 var file = this.files[0];

        		if (file.size > 2621440)
        		 {
		             $('#video_show2').hide();	
		             alert('Filesize must 2.5MB or below');

         		 }else{	
         		 
					  var $source = $('#video_here2');				 
					  $source[0].src = URL.createObjectURL(this.files[0]);
					  $source.parent()[0].load();
					  $('#video_show2').show();					  	

					  $(".remove_video2").click(function () { 
			               	$('#video_show2').hide();                 
			                $('#video_size2').val("");

		                });   

		              $(".pip").remove();
		          			  
				 	}
    	
    }
    else{
    		var files = evt.target.files,
	        filesLength = files.length;    

	        var f = files[0];
	        var fileReader = new FileReader();

	        fileReader.onload = (function(evt) {

		          var file = evt.target;
		          $('#video_show2').hide(); 

		          $("<span class=\"pip\">" +
		            "<img class=\"imageThumb\" src=\"" + evt.target.result + "\" title=\"" + file.name + "\"/>" +
		            "<br/><span class=\"remove1\">Remove image</span>" +
		            "</span>").insertAfter("#video_size2");

		          $(".remove1").click(function(){
		            $(this).parent(".pip").remove();
		            $('#video_size2').val("");
		          });          
	                   
	        	});

	        	 
	    		fileReader.readAsDataURL(f);
           
		}
    
});


//event highlight2  show and hide

		$("#add_highlight").click(function(){
   				 $("#event_high").show();
		});

 
//ticket select option  show and hide
$(document).ready(function(){
		$("#ticket_type").change(function () {
				if ($(this).val() == "Free Event" || $(this).val() == "select") 
				 {
                	$("#ticket_price").hide();
                	$("#ticker_url_show").hide();
                	$("#price_country").hide();
           		 }
           	    else
           		 {
                	$("#ticket_price").show();
                	$("#ticker_url_show").show();
                	$("#price_country").show();
           		 }
		});

});	

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


//dynamic add ticket url

function generete_dynamic_ticket(count){
	var ticket = '<div class="col-md-12" style="margin-top:15px;" id="dynamicticket_'+count+'"> <div class="pull-left" style="width:5%;"> <input type="hidden" name="ticket_url_check[]"  value="off" > <input type="checkbox" class="checkbox" value="on" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"> </div> <div style="width:40%;" class="pull-left text-left"> <input type="text" name="url_ticketurl[]"  class="form-control textBox" placeholder="Ticket URLs"> </div> <div style="width:50%;" class="pull-right text-left"> <select name="url_country[]" id="days" class="form-control" style="background-color:#eff0f1;"> <option value="">Country</option> <option value="Afghanistan">Afghanistan</option> <option value="Albania">Albania</option> <option value="Algeria">Algeria</option> <option value="American Somoa">American Somoa</option> <option value="Angola">Angola</option> <option value="Antartica">Antartica</option> </select> </div> </div>'

	return ticket;
}


$(document).on("change", "input.checkbox", function() {
	// $('input.checkbox').change(function () {
	
    var value = $(this).is(":checked") ? $(this).val() : 'off';

    $(this).siblings("input[name='ticket_url_check[]']").val(value);    
});


$(document).ready(function(){
        $("#ticket_url").click(function()
        {		      	
        	
		        var nxtticket_count = $(this).data("nxt_ticket_url"); 
		        var nxtvenueHTML = generete_dynamic_ticket(nxtticket_count);
		        $("#first_ticket_url").append(nxtvenueHTML);        
        	    nxtticket_count++;
		       $(this).data('nxt_ticket_url', nxtticket_count); //update data nxtportion   
   		 });
   
});

//event coupon image preview and delete

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


//coupon expiry date 

$("#coupon_ex_date").datetimepicker({      
                format:'m-d-Y',      
               timepicker:false,
         }); 

//Audience form select option  show and hide

$(document).ready(function(){
		$("#audience_form_type").change(function () {
				if ($(this).val() == "audience_form" ) 
				 {
                	$("#first_form").show();
                	$("#second_form").hide();
                	$("#third_form").hide();
           		 }
           	    else if ($(this).val() == "url_link" ) 
           		 {
                	$("#first_form").hide();
                	$("#second_form").show();
                	$("#third_form").hide();
           		 }
           		else if ($(this).val() == "event_coupon" ) 
           		 {
                	$("#first_form").hide();
                	$("#second_form").hide();
                	$("#third_form").show();
           		 }
		});

});	

//Action button  select option  show and hide
$(document).ready(function(){
	$("#action_btn1").change(function () {
			if ($(this).val() == "other" ) 
				 {
                	$("#action_btn1_other").show();                	
           		 }
           		else
           		{
           			$("#action_btn1_other").hide();  
           		}
	});
});	

// here mltiple keyword 
(function( $ ){
 
     $.fn.keywordSearch  = function() {
 
          return this.each(function() {
  
               // list of email addresses as unordered list
               $list1 = $('<ul />');
 
               // input
               var $input = $('<input type="text" />').keyup(function(event) {
 
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

//create event for social multi city form submit

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#create_social_multicity_event", function(e){
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
                   
                    window.location.href = "<?php echo base_url('event/get_eventfeed'); ?>";
                   
                    }else 
                   {
                    
                    swal("Sorry!", "Oops!! Something Went Wrong! Please Try Again !", "error");
                   }          
                }

            });

      });

 });


</script>

</body>
</html>
