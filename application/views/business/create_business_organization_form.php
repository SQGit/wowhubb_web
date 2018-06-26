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
<!-- country database using js file -->
<script src="<?php echo base_url('assets/js/countries.js')?>"></script>

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
/*popup close button  */
.large.tooltip-inner {
	max-width: 350px;
	width: 350px;
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

	img {
    max-width: 200px;
    height: auto;
    display: inline-block;
	}

.cover_remove {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	  width: 200px;
      
	}
.cover_remove:hover {
	  background: white;
	  color: black;
	}	

.remove {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	  width: 200px;
      margin-left: 137px;
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
      margin-left: 137px;
	}
.remove1:hover {
	  background: white;
	  color: black;
	}
	.search_keyword 
{ cursor: pointer; }
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

/*here start with multiple  input words  */
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
    font-size:15px;
    clear:both;
    height:40px;
    border:0;
    margin-bottom:1px;
    background-color: #ff000000;
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
           
            
      <img src="../assets/images/ohp_banner.jpg" class="img-thumbnail"  alt="banner-image" style="margin-top:10px;"/>
      
      
            <!-- Form progress -->
            <div class="form-wizard-steps form-wizard-tolal-steps-3">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="20" data-number-of-steps="3"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p style="font-weight:bold;">1.Basic Info</p>
              </div>
              <!-- Step 1 -->        
              
              <!-- Step 2 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-image" aria-hidden="true"></i></div>
                <p style="font-weight:bold;">2.Product Gallery</p>
              </div>
              <!-- Step 2 --> 
              
              <!-- Step 3  -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                <p style="font-weight:bold;">3.Keyword Search</p>
              </div>
              <!-- Step 3 --> 
              
         
            </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
<form id="create_business_form" action="<?php echo base_url('business/create_business_page'); ?>"  method="POST" enctype="multipart/form-data" >
              
    <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="33.33" aria-valuemin="0" aria-valuemax="100" style="width: 33.33%"> </div>
                </div>
                <!-- Progress Bar -->

                <div class='col-sm-12'>
                  	<div class='row' style="margin-bottom: 25px;">
		                	<div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#000; font-weight:bold;">Basic Info	
		                	</div>               
				                <div class='form-group col-sm-8'>
				                 	<div class='form-group col-sm-12'> Business Contact Person Information <em>(To Be Used For Correspondence /Notification)</em></div>
				                  
				                    <div class='form-group col-sm-6' >
				                      <label>First Name</label>
				                      <input type='text' name="first_name" class="required form-control" />
				                    </div>
				                    <div class='form-group col-sm-6' >
				                      <label>Last Name</label>
				                      <input type='text'  name="last_name" class="required form-control" />
				                    </div>                    
				                    <div class='form-group col-sm-6' >
				                      <label>Email</label>
				                      <input type='text'  name="email"  class="required form-control"  />
				                    </div>
				                    <div class='form-group col-sm-6' >
				                      <label>Phone</label>
				                      <input type='text'  name="phone"  class="required form-control" maxlength="15" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" />
				                    </div>
			                
		               			</div>
		                <div class='form-group col-sm-4'>Business Information <br>
		                	<label>Select Your organization Type</label>
		                		<select name="business_type" id="organisation_type" class="form-control" style="background-color:#eff0f1;">			 
				                    <option value="company">Company /Institution</option>
				                    <option value="public">A Public Figure, Artist, Guest Speaker</option>
				                    <option value="local_business">A Local Based Business</option>
				                    <option value="Entertainment">Entertainment Based organization</option>                  
				            	</select>
		                </div>

                  	</div>
                  	<div class="col-md-12 line-divider"></div> 
                  	                              	
              		<!-- first form -->
                    <div id="first_form" class="animated bounce">

                        <div class='col-sm-5'>
                   			<div class='row'>
                  				<div class="form-group col-sm-12 animated bounceInUp" id="company" style="font-size: 15px;">
				                    <label>Choose a Category</label>
				                    <select name="company_category"  class="form-control" style="background-color:#eff0f1;">
				                      	<option selected="selected" value="Arts Craft Company">Arts &amp; &nbsp;Craft Company</option>
				                        <option value="Aerospace Company">Aerospace Company</option>
				                        <option value="Advertising Media">Advertising Media &amp; Public Relations</option>
				                        <option value="Agricultural Services">Agricultural Services &amp; Products</option>
				                        <option value="Air Transport">Air Transport</option>
				                        <option value="Alcoholics">Alcoholics &amp; Beverages</option>
				                        <option value="Aternative">Aternative Energy Production &amp; Services</option>
				                        <option value="Attorneys">Attorneys &amp; Law Firms</option>
				                        <option value="Banknig">Banknig &amp; Financial Services Company</option>
				                        <option value="Beauty Fitness">Beauty Fitness &amp; Health </option>
				                        <option value="Business Associations">Business Associations</option>
				                        <option value="Builders">Builders &amp; General Contractors</option>
				                        <option value="Cargo">Cargo &amp; Freight Company</option>
				                        <option value="College">College &amp; Universities</option>
				                        <option value="Casino">Casino &amp; Gambling</option>
				                        <option value="Community organizations">Community organizations</option>
				                        <option value="Community Services">Community Services </option>
				                        <option value="Consulting Services">Consulting Services </option>
				                        <option value="Education Training">Education &amp; Training</option>
				                        <option value="Elementary School">Elementary School</option>
				                        <option value="Government organization">Government organization</option>
				                  	</select>
		                    	</div>

		                    		<!-- second form -->
		                    	<div class="form-group col-sm-12 animated bounceInUp" id="public" style="display: none; font-size: 15px;" > 
				                      <label>Choose a Category</label>
				                    	<select name="public_category"  class="form-control" style="background-color:#eff0f1;">
					                      <option selected="selected" value="Artist">Artist</option>
					                       <option value="Author">Author</option>
					                       <option value="Music Band">Music Band</option>
					                       <option value="Motivational Speaker">Motivational Speaker</option>
					                       <option value="Comedian">Comedian</option>
					                       <option value="Musician">Musician</option>
					                       <option value="Political Candidate">Political Candidate</option>
					                       <option value="Life Coach">Life Coach</option>
					                       <option value="Fitness Coach">Fitness Coach</option>
					                       <option value="Journalist">Journalist</option>
					                       <option value="Politician">Politician</option>
					                       <option value="Public Figure">Public Figure</option>
					                       <option value="Writer">Writer </option>
					                       <option value="Chef">Chef</option>
					                       <option value="Fashion Model">Fashion Model</option>
					                       <option value="Dancer">Dancer</option>
					                       <option value="Career Adviser">Career Adviser</option>
				                  		</select>
		                    	</div>

		                    	<!-- third form -->
		                    	<div class="form-group col-sm-12 animated bounceInUp" id="local_business" style="display: none; font-size: 15px;">
				                     <label>Choose a Category</label>
					                    <select name="local_category"  class="form-control" style="background-color:#eff0f1;">
					                      <option selected="selected" value="Auto Dealer" >Auto Dealer </option>
					                       <option value="Bar Resturant">Bar &amp; Resturant </option>
					                       <option value="Appliance Store">Appliance Store</option>
					                       <option value="Baby Kids Shop">Baby &amp; Kids Shop </option>
					                       <option value="Building Material Store">Building Material Store</option>
					                       <option value="Clothing Store">Clothing Store </option>
					                       <option value="Dentist">Dentist</option>
					                       <option value="Computer Services">Computer Services </option>
					                       <option value="Computer Software">Computer Software</option>
					                       <option value="Doctor ">Doctor &amp; Other Health Professional Services</option>
					                       <option value="Fitness Center">Fitness Center</option>
					                       <option value="Home Decor">Home Decor</option>
					                       <option value="Household Supplies">Household Supplies</option>
					                       <option value="Jeewelry Watches">Jeewelry &amp; Watches</option>
					                       <option value="Office Supplies">Office Supplies</option>
					                       <option value="Pet Supplies">Pet Supplies</option>
					                       <option value="Tools Equipment Store">Tools &amp; Equipment Store</option>
					                       <option value="Wine Spirit Store ">Wine &amp; Spirit Store</option>
					                       <option value="Health Suppliement Store">Health Suppliement Store</option>
					                       <option value="Nursing Homes">Nursing Homes </option>
					                       <option value="Food Store">Food Store</option>
					                       <option value="Phone Accessories">Phone &amp; Accessories</option>
					                       <option value="Realtor">Realtor </option>
					                       <option value="Medical Supplies">Medical Supplies</option>
					                       <option value="Publishing Printing Services ">Publishing &amp; Printing Services </option>
					                       <option value="Beauty Spas">Beauty &amp; Spas</option>
					                       <option value="Trucking Haulages">Trucking &amp; Haulages</option>
					                  	</select>
		                    	</div>
		                    	<!-- fourth form -->
		                    	<div class="form-group col-sm-12 animated bounceInUp" id="Entertainment" style="display: none; font-size: 15px;">
				                    <label>Choose a Category</label>
				                    <select name="entertainment_category"  class="form-control" style="background-color:#eff0f1;">
				                       <option selected="selected" value="Sports Team">Sports Team</option>
				                       <option value="Concert Tour">Concert Tour</option>
				                       <option value="Cultural Groups">Cultural Groups</option>
				                       <option value="Festivals">Festivals</option>
				                       <option value="Movie Theater">Movie Theater</option>
				                       <option value="Television Station">Television Station</option>
				                       <option value="Music Awards">Music Awards</option>
				                       <option value="Performing Arts">Performing Arts</option>
				                       <option value="Podcast">Podcast</option>
				                       <option value="Radio Station">Radio Station</option>
				                       <option value="Theater Arts">Theater Arts</option>
				                       <option value="TV Network">TV Network</option>
				                       <option value="Prime Time TV Event">Prime Time TV Event</option>
				                       <option value="TV Shows">TV Shows</option>
				                       <option value="Magazine">Magazine</option>
				                       <option value="Library">Library</option>
				                       <option value="Muesuem">Muesuem </option>
				                       <option value="Book Launch">Book Launch</option>
				                  	</select>
		                    	</div>

				                    <div class='form-group col-sm-12' >
				                      <label>Company/Organization Name</label>
				                      <input type='text' name="company_name"  class="required form-control " />
				                    </div>
				                    <div class='form-group col-sm-12' >
				                      <label>Venue</label>
				                      <input type='text'  name="venue"  class="form-control" />
				                    </div>
				                    <div class='form-group col-sm-12' >
				                      <label>Address1</label>
				                      <input type='text'  name="address1"  class="required form-control" />
				                    </div>
				                    <div class='form-group col-sm-12' >
				                      <label>Address2</label>
				                      <input type='text'  name="address2"  class="form-control" />
				                    </div>		                    
				                   
				                   	 <div class="form-group col-sm-12" >
				                    	<label>Select Country</label>
					                      <select name="country" onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" style="background-color:#eff0f1;">				                     
									      </select>
					                </div>

					                <div class="form-group col-sm-12">
					                      <label>Select State</label>					                      
					                       <select name="state" id ="state" class="form-control"></select>
					                       <script language="javascript">print_country("country");</script>	
					                </div>
                                   
				                    <div class='form-group col-sm-12' >
				                      <label>Zipcode/Postal Code</label>
				                      <input type='text' name="zipcode"  class="form-control" maxlength="6" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" />
				                    </div>
				                    <div class='form-group col-sm-12' >
				                      <label>Website Links</label>
				                      <input type='text'  name="website_link"  class="form-control" />
				                    </div>				                   
                    		</div>
                  		</div>

		                  	<div class='col-sm-7'>
		                  		<div class='row'>
				                    <div class='form-group-1up col-sm-12'>

				                      <textarea type='text'  name="description"  class="form-control" style="min-height:300px;" placeholder="Give A Brief Description of Yourself/ organization" ></textarea>
				                    </div>

				                    <div class='form-group col-sm-12'>
				                      <div class='col-sm-12' style="background-color:#f9f9f9;">
				                        <label>Add Cover Page Image</label>
				                        <div class="alert alert-danger" id="img_req" role="alert" style="display:none;" >Cover Image is Required
                                		</div>
				                        <div class="form-group">
				                          	<div class="field" align="left">
				                         		<input type="button" class="btn btn-primary"  value="Browse Image..." onclick="document.getElementById('cover_img').click();" />
				                         		<div id="img_preview1"></div>
				                         		<input type="file" style="display:none;" name="cover_img" id="cover_img" class="required file" accept="image/*" title="cover image">  
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
                
                <div class='col-sm-12' style="margin-bottom:20px;">
                  <div class="form-wizard-buttons">                 
                    <button type="button" class="cancel btn btn-next">Next <i class="fa fa-arrow-right"></i></button>
                  </div>
                </div>
               
    </fieldset>
    
            
              
              <!--end  Form Step 1 --> 
            
              
              <!--  Step 2 -->
    <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="66.66" aria-valuemin="0" aria-valuemax="100" style="width: 66.66%"> </div>
                </div>
                <!-- Progress Bar -->

                
            <div class='col-sm-12' style="margin-bottom:20px;">
                <div class='row'>
                  <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#000; font-weight:bold;">Product/ Services Gallery (Photos/ Images)</div>
                    <div class='form-group col-sm-6' >
		                <div class='row'>
		                  	<div class='form-group col-sm-12' >
		                      <label>Image Title</label>
		                      <input type='text' name="product_title1"  class="form-control" />
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
			                    		<a href="JavaScript:void(0);" style="color:#000;">
			                    		<i class="fa fa-plus-circle"></i> Add More Products/ Services Photos/Images up to 10 </a>
			                    	</div>
		                        </div>              
		                    </div>              
		                    
		                </div>
                    </div>
                 		<div class="form-group col-md-6">
							<div class='form-group col-sm-12' style="margin-bottom:15px!important;" >
							    <label>Product/Services Description</label>
							    <input type='text'  name="product_heading1"  class="form-control" placeholder="Product/Services Header Here "  />
							</div>
						   <div class='form-group col-sm-12' >
						                      
						     <textarea type='text' name="product_description1"  class="form-control" style="min-height:100px;" placeholder="Product/Services Description Here " ></textarea>
						   </div>
						</div>
                   
                  
                  
                </div>
                  
                  
            </div>
                
            <div class='col-sm-12' style="margin-bottom:20px;">
                <div class='row'>
                  	<div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#000; font-weight:bold;">Product/ Services Gallery (Videos)</div>
                  	<div class='form-group col-sm-6' >
		                <div class='row'>
		                  <div class='form-group col-sm-12' >
		                      <label>Video Title</label>
		                      <input type='text' name="product_title2"  class="form-control" />
		                    </div>
		                       <div class='form-group col-sm-12'>
		                      <div class='col-sm-12' style="background-color:#f9f9f9;">
		                        <label>Upload Hall  Photos/Images</label>

		                        <div class="form-group">
					                <span class="btn btn-primary btn-file"> 
			                       	 Browse...<input type="file" name="product_video1" id="video_size"  accept="video/*">
			                       	</span>

			                        <div id="video_show" style="display: none;" >
			                        	<video width="200" height="150" controls>
										 	 <source src="mov_bbb.mp4" id="video_here">
										    Your browser does not support HTML5 video.
										</video>
			                        </div>		                        
		                            
		                        </div>

		                        <div class='col-sm-12'>
		                    		<a href="JavaScript:void(0);" style="color:#000;">
		                    		<i class="fa fa-plus-circle"></i> Add More Products/ Services Photos/Images up to 10 </a>
		                    	</div>
		                      </div>
		                      
		                    </div>              
		                    
		                </div>
                    </div>
                  	<div class="form-group col-md-6">
					  		<div class='form-group col-sm-12' style="margin-bottom:15px!important;" >
					   			 <label>Product/Services Description</label>
					   			 <input type='text'  name="product_heading2"  class="form-control" placeholder="Product/Services Header Here "  />
					  		</div>
					        <div class='form-group col-sm-12' >					                      
					            <textarea type='text' name="product_description2"  class="form-control" style="min-height:100px;" placeholder="Product/Services Description Here " ></textarea>
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
              <!--  Step 3 -->
    <fieldset>
                
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%"> </div>
                </div>
                <!-- Progress Bar -->

                <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; font-weight:bold; color:#000; margin-bottom:15px!important;">
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
					            <div class="pull-left" style="width:11%; font-size:13px; margin-right:5px; color:#333;">Rank Client Base
					            </div>
					            <div class="pull-left" style="width:20%; font-size:13px; margin-right:10px;">
					               			<select name="rank_city"  class="form-control" style="background-color:#eff0f1;">
									                      <option class="1">1</option>
					                 					  <option class="2">2</option>
					                                      <option class="3">3</option>
					                                      <option class="4">4</option>
					                                      <option class="5">5</option>
					                		</select>
					            </div>
					           
					    </div>
				    </div>              
                       
                </div>
                
                 	<div class='form-group col-sm-12'>
                 			<span style="color: #e91e63; font-size: 17px; text-transform: capitalize;"  id="areakeyword_show" > </span>
             		</div>
               
                <div class='form-group col-sm-12'>

					<div class='form-group col-sm-12' style="padding-top:15px; padding-bottom:5px; background-color:#f7ebf0; color:#e91e63; border-radius:5px; margin-top:25px; margin-bottom:15px!important;">
                     	<div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        
                        	<div class="pull-left" style="width:28%; font-size:13px; margin-right:5px; color:#333;"">Generate Your Business Search Keywords Here</div>
                        	<div class="pull-left" style="width:36%; font-size:13px; margin-right:15px;">
                        		<input type='text'  name="keyword_search[]" id="keyword_search" class="form-control" placeholder="Vanilla Cakes"  />
                        	</div>                       
                        	
                        </div>
                    </div>                      
                </div>
               		<div class='form-group col-sm-12'>
                 			<span style="color: #e91e63; font-size: 13px; text-transform: capitalize;"  id="search_keyword_show" > </span>
             		</div>
                
                
               <div class='col-sm-12'>
                  <div class="form-wizard-buttons" style="margin-bottom:20px;">                   
                    <button type="button" class="btn btn-previous"> <i class="fa fa-arrow-left"></i> Previous</button>
                    <button type="submit" class="btn btn-next"><i class="fa fa-thumbs-up"></i> Publish</button>
                  </div>
                </div>
    </fieldset>
              
              <!-- end Step 3 -->
              
</form>
         
            
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

<script>
	
// hide enter button to submit the form
$(document).ready(function(){
$('#create_business_form').on('keyup keypress', function(e) {
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

if( document.getElementById("cover_img").files.length == 0 ){
    $('#img_req').show();
}
else
{
  $('#img_req').hide();
}
});
//organization type select option  show and hide


$(document).ready(function(){
		$("#organisation_type").change(function () {
				if ($(this).val() == "company" ) 
				 {
                	$("#company").show();
                	$("#public").hide();
                	$("#local_business").hide();
                	$("#Entertainment").hide();
           		 }
           		else if ($(this).val() == "public" ) 
          		 {
          		 	$("#company").hide();
                	$("#public").show();
                	$("#local_business").hide();
                	$("#Entertainment").hide();
          		 }
          		else if ($(this).val() == "local_business" ) 
           		 {
                	$("#company").hide();
                	$("#public").hide();
                	$("#local_business").show();
                	$("#Entertainment").hide();
           		 }
           		else if ($(this).val() == "Entertainment" ) 
           		 {
                	$("#company").hide();
                	$("#public").hide();
                	$("#local_business").hide();
                	$("#Entertainment").show();
           		 }

    });

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


//image preview and delete step1 cover image

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#cover_img").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      
        var f = files[0]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;

                  
          $("#img_preview1").html("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"cover_remove\">Remove image</span>" +
            "</span>").insertAfter("#img_files");

          $(".cover_remove").click(function(){
            $(this).parent(".pip").remove();
            $('#cover_img').val("");
          });          
                   
        });
        fileReader.readAsDataURL(f);
      
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});


//image preview and delete step2 product image

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
    alert("Your browser doesn't support to File API")
  }
});

//video size limitation cover video     

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

//create business form submit

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#create_business_form", function(e){
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
