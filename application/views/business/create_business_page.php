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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.datetimepicker.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">
body {
	background-color: #e7e5e6;
}
label.error {
	/*font-family: 'Roboto', sans-serif;*/
	color: red;
}
.clr {
	background: #fbbd60;
	color: #3d7489;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
	padding: 10px;
}
.rr-circle {
	border-radius: 50%;
	background-color: #3096EB;
	font-size: 20px;
	color: #fff;
	width: 50px;
	height: 50px;
	line-height: 50px;
	text-align: center;
}
#footer {
	background: #fff;
	position: relative;
	top: 0px;
}
#imageUpload {
	display: none;
}
#profileImage {
	cursor: pointer;
}
#imageUpload1 {
	display: none;
}
#profileImage1 {
	cursor: pointer;
}
.form-wizard {
	padding: 5px;
	background: #fff;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
 //box-shadow: 0px 0px 10px 0px #ccc;
	text-align: left;
}
.nav>li>a:focus, .nav>li>a:hover {
	text-decoration: none;
	background-color: #e91e63;
	color: #fff;
}
.nav-tabs>li {
	float: left;
	margin-bottom: -1px;
	width: 25%;
}
.nav-tabs>li>a {
	margin-right: 2px;
	line-height: 1.42857143;
	border: 1px solid transparent;
	border-radius: 4px 4px 0 0;
	font-size: 16px;
	text-align: center;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
	color: #f7f6f6;
	cursor: default;
	background-color: #e91e63;
	border: 1px solid #ddd;
	border-bottom-color: transparent;
}
/* custom inclusion of right, left and below tabs */

.tabs-right > .nav-tabs, .tabs-left > .nav-tabs {
	border-bottom: 0;
}
.tab-content > .tab-pane, .pill-content > .pill-pane {
	display: none;
}
.tab-content > .active, .pill-content > .active {
	display: block;
}
.tabs-left > .nav-tabs > li, .tabs-right > .nav-tabs > li {
	float: none;
}
.tabs-left > .nav-tabs > li > a, .tabs-right > .nav-tabs > li > a {
	min-width: 74px;
	margin-right: 0;
	margin-bottom: 3px;
}
.tabs-left > .nav-tabs {
	float: left;
	margin-right: 19px;
	border-right: 1px solid #ddd;
}
.tabs-left > .nav-tabs > li > a {
	margin-right: -1px;
	-webkit-border-radius: 4px 0 0 4px;
	-moz-border-radius: 4px 0 0 4px;
	border-radius: 4px 0 0 4px;
}
.tabs-left > .nav-tabs > li > a:hover, .tabs-left > .nav-tabs > li > a:focus {
	border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}
.tabs-left > .nav-tabs .active > a, .tabs-left > .nav-tabs .active > a:hover, .tabs-left > .nav-tabs .active > a:focus {
	border-color: #ddd transparent #ddd #ddd;
}

@media (min-width: 768px) {
.modal-dialog {
	width: 600px;
	margin: 100px auto 0!important;
}
}
table, td, tr {
	border-spacing: 2px;
	padding: 0 5px;
}
.edit-block ul.interests li {
	background: #E8E8E8;
	color: #fff;
	padding: 5px 15px;
	margin-right: 10px;
	margin-top: 5px;
	margin-bottom: 5px;
	border-radius: 40px;
}
.edit-block ul.interests li a {
	color: #333!important;
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
<div class="container"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="../assets/images/cb-banner.jpg" style="background-size:cover; width:100%; margin-top:20px;" > </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">
        <div class="col-md-12 col-sm-12" style="margin-top:25px;">
          <div class="col-md-4 col-sm-4" style="position:relative;"> 
          
          
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px; text-align:center;">
                    
              <div class=" text-center" style="color:#333; padding-bottom:10px;">
              <strong style="font-size:17px;">ORGANISATIONS<br>
                </strong> Create An Event  Business Page </div>
                <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <p>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.</p>
                </div>
                <div class="row text-center">
                 <a href="<?php echo base_url('business/ohp_form'); ?>"> <button type="submit" class="btn btn-primary">Create Your Organisation Event Hosting Page</button></a>
             </div>
            </div>
              
          </div>
          <div class="col-md-4 col-sm-4" style="position:relative;">         
          
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px; text-align:center;">
                    
              <div class=" text-center" style="color:#333; padding-bottom:10px;">
              <strong style="font-size:17px;">EVENT VENUE PROVIDERS<br>
                </strong> List Your Event  Venue Space </div>
                
                <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <p>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.</p>
                </div>
                <div class="row text-center">
                  <a href="<?php echo base_url('service/eventvenue_form'); ?>" >
                    <button type="submit" class="btn btn-primary">Create Your Event Venue Page</button>
                  </a>
             </div>
            </div>
              
          </div>
          <div class="col-md-4 col-sm-4" style="position:relative;"> 
          
          
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px; text-align:center;">
                    
              <div class=" text-center" style="color:#333; padding-bottom:10px;">
              <strong style="font-size:17px;">EVENT PROFESSIONAL VENDORS<br>
                </strong>List Your Event Services</div>
                <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <p>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.</p>
                </div>
                <div class="row text-center">
                  <a href="<?php echo base_url('Eventserviceprovider/service_provider_form'); ?>" >
                    <button type="submit" class="btn btn-primary">Create Your Event Service Page</button>
                  </a>
             </div>
            </div>
              
          </div>
        
        
      </div>
      <div class="col-md-12 col-sm-12" style="margin-top:25px;">
      <div class="col-md-12 col-sm-12">
      <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
        <div class="col-md-5">
        <div class=" text-left" style="color:#333; padding-bottom:10px;">
              <strong style="font-size:17px;">ORGANISATIONS<br>
              </strong> Create An Event  Business Page </div>
        <img src="../assets/images/crb-image.jpg" class="img-responsive img-thumbnail" ></div> 
      <div class="col-md-7">
      <div class="col-md-12">
        <div class="pull-left" style="color:#333; padding-bottom:10px;">
          <p>Wowhubb is a unique event networking platform that gives every organisation the oppourtunty to create, host and organise all of their events in one place,</p>
        </div>
      </div>
      <div class="col-md-12" style="margin-top:5px;">
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Create A One Time Event Business Page Manager</p>
        </div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" ><p style="line-height:18px;">Create & Host All your Your Events</p></div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" ><p style="line-height:18px;">Invite  Attendee In within your network and outside your network</p></div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" ><p style="line-height:18px;">View and send instant notification message to all your event attendees</p></div>
      </div>
      <div class="col-md-12" style="margin-top:5px;">
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Create A One Time Event Business Page Manager</p>
        </div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" ><p style="line-height:18px;">Create & Host All your Your Events</p></div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" ><p style="line-height:18px;">Invite  Attendee In within your network and outside your network</p></div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" ><p style="line-height:18px;">View and send instant notification message to all your event attendees</p></div>
      </div>
          <div class="col-md-12" style="margin-top:5px;">
                  <div class="row text-center">
                      <a class="btn-primary" href="<?php echo base_url('business/ohp_form'); ?>" >Create Your Organisation Event Hosting Page</a>
                  </div>
          </div>
      </div>
      </div>
      </div>
      
      </div>
      
      <div class="col-md-12 col-sm-12" style="margin-top:25px;">
      <div class="col-md-12 col-sm-12">
      <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
        <div class="col-md-5">
        <div class=" text-left" style="color:#333; padding-bottom:10px;">
              <strong style="font-size:17px;">EVENT VENUE PROVIDERS<br>
              </strong> List Your Event Services To local Clients Around you</div>
        <img src="../assets/images/crb-image-2.jpg" class="img-responsive img-thumbnail" ></div> 
      <div class="col-md-7">
      
                <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <p>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. </p>
                </div>
      <div class="col-md-12" style="margin-top:5px;">
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Create and advertise your event support venue to local customers near you</p>
        </div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Recieve daily  business leads for your sevices</p></div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Get the best referals from your exiting customer and clients</p></div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Generate new busines leads on a daily basis</p></div>
      </div>
     
      <div class="col-md-12" style="margin-top:5px;">
        <div class="row text-center">
                   <a href="<?php echo base_url('service/eventvenue_form'); ?>" ><button type="submit" class="btn btn-primary">
                   Create Your Event Venue Page
                  </button></a>
             </div>
      </div>
      </div>
      </div>
      </div>
      
      </div>
      
       <div class="col-md-12 col-sm-12" style="margin-top:25px;">
       <div class="col-md-12 col-sm-12">
      <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
        <div class="col-md-5">
        <div class=" text-left" style="color:#333; padding-bottom:10px;">
              <strong style="font-size:17px;">EVENT PROFESSIONAL VENDORS <br>
              </strong> List Your Event Venue Locally And Get Daily Business Leads</div>
        <img src="../assets/images/crb-image-3.jpg" class="img-responsive img-thumbnail" ></div> 
      <div class="col-md-7">
      
                <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <p>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. </p>
                </div>
      <div class="col-md-12" style="margin-top:5px;">
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Create and advertise your event support services to local customers near you</p>
        </div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Recieve daily  business leads for your sevices</p></div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Get the best referals from your exiting customer and clients</p></div>
        <div class="col-md-3"><img src="../assets/images/crb-1.jpg" class="img-responsive img-thumbnail" >
        <p style="line-height:18px;">Generate new busines leads on a daily basis</p></div>
      </div>
     
      <div class="col-md-12" style="margin-top:5px;">
        <div class="row text-center">
                 <a href="<?php echo base_url('Eventserviceprovider/service_provider_form'); ?>" > 
                  <button type="submit" class="btn btn-primary">Create Your Event Service Page</button>
                </a>
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
</div>

<!-- Footer
    ================================================= --> 

<!-- Scripts
    ================================================= --> 

<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/additional-methods.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 

<script>

  
  
          

</script>


</body>
</html>
