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
<!-- <link rel="stylesheet" href="<?php echo base_url ('assets/css/theme-styles.css')?>" /> -->
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

@media (min-width: 768px)
{
.modal-dialog {
    width: 600px;
    margin: 200px auto!important;
}

}
.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: .7!important;
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

img {
  max-width: 100%;
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
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"> <img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="position:relative;">
        
       
      </div>
      <!-- Collect the nav links, forms, and other content for toggling --> 
      <!-- /.navbar-collapse --> 
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
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="../assets/images/esp-banner.jpg" style="background-size:cover; width:100%; margin-top:20px;" > </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12" style="margin-top:15px; margin-bottom:10px;">
          <div class="col-md-3">
            <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
              <option value="0">Country</option>
              <option value="day1">Alaska</option>
              <option value="day2">Algeria</option>
              <option value="day3">India</option>
              <option value="day3">USA</option>
            </select>
          </div>
          <div class="col-md-3">
            <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Enter your Event City"  />
          </div>
          <div class="col-md-4">
            <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
              <option selected="selected" class="option">Select Your &nbsp;Event Services Vendors Here </option>
           <option class="option">Catering Services </option>
           <option class="option">Cakes </option>
           <option class="option">Wine &amp; Beverages</option>
           <option class="option">BBQ indoor &amp; Outdoor</option>
           <option class="option">Music &amp; DJ Services</option>
           <option class="option">Event Planners and Organizers </option>
           <option class="option">Beautican Services </option>
           <option class="option">Photography &amp; Videography Services</option>
           <option class="option">Decor &amp; Party Rentals</option>
           <option class="option">Floral</option>
           <option class="option">Party Cleaning Services </option>
           <option class="option">Limo &amp; Car Rentals </option>
           <option class="option">Event Staffing &amp; Servers </option>
           <option class="option">Dress &amp; Jewellery</option>
           <option class="option">MCs &amp; Comedians</option>
           <option class="option">Event Guest Speakers</option>
           <option class="option">Event Technology Support</option>
           <option class="option">Event Gifting &amp; Sourveniers</option>
           <option class="option">Life Bands </option>
            </select>
          </div>
           <div class="col-md-2 text-center">
          <button type="submit" class="btn-primary" style="background-color:#fc6653!important; padding-top:5px; padding-bottom:5px;"><img src="../assets/images/search_icon_ev.png"> Search </button>
        </div>
        </div>
       
      </div>
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12"> 
          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static"> 
            
            <!--profile card ends-->
            
            <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; color:#333;">SEARCH FILTERS</h5>
              </ul>
              <ul class="nav-news-feed">
              <select name="event_totaldays" id="days" class="form-control" style="background-color:#fff;">
				                      <option value="0">Sortby Miles</option>
				                      <option value="day1">Sortby Kms</option>
				                     
				                     
				                  	</select>
              </ul>
              <!--news-feed links ends--> 
              
              <!--news-feed links ends-->
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Distance</h5>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    5 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    10 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    15 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    20 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    25 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    30 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    35 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    40 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    45 Miles</div>
                </li>
                 <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    50 Miles</div>
                </li>
                 <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    100 Miles</div>
                </li>
                
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Sortby</h5>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    Most Popular</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    Distance</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    Best Reviews</div>
                </li>
              </ul>
          
              
              <!--news-feed links ends--> 
              <!--ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">AVAILABILITY</h5>
                <li>
                  <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Out of stock</a></div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Clear all</a></div>
                </li>
              </ul--> 
              <!--news-feed links ends--> 
              
            </div>
            <!--chat block ends--> 
          </div>
          <div class="col-md-6"> 
            <!-- center box start here  =================================== -->
            <div class="container post-content">
            <div class="col-md-7 pull-left text-left" style="margin-top:16px;"><span style="font-size:16px;"><strong>Featured Cakes Places In</strong> Houston </span></div>
              <div class="col-md-5 pull-right text-right" style="margin-top:15px; margin-bottom:10px;"><a href="#" style="color:#333;"><i class="fa fa-list" style="font-size:14px;"></i></a>&nbsp;&nbsp; <a href="#" style="color:#333;"><i class="fa fa-th" style="font-size:14px;"></i></a> &nbsp;&nbsp;<span style="font-size:14px;" >Showing 140 Results</span></div>

              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                    <hr style="margin:5px 0;">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4" style="margin-top:10px;">
                    <div class="gallery"> <img src="../assets/images/lily-cake.jpg" alt="post-image" class="img-responsive img-thumbnail"></div>
                     <div class="col-md-12">
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;"><span style="font-size:12px; color:#e91e63;"><a href="#modal-1" data-toggle="modal" style="color:#fc6653;">View Business Page</a></span></div>
                    </div>
                  </div>
                  <div class="col-md-8" style="margin-top:10px;">
                    <div class="row">
                      <div class="pull-right">
                        <div class="rr-circle">1</div>
                      </div>
                      <div class="pull-left"><span style="font-size:20px;">Lily Valley Cakes</span>
                        <p style="font-size:16px;">Downtown Houston</p>
                      </div>
                    </div>
                    
                    <div class="row">
                      <p style="font-size:14px;">2345, Blue Street, Sugarland Texas 77334<br>
                        <span style="margin-top:20px;">Reviews <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span> </p>
                    </div>
                    <div class="row">
                    <p>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. <br><a href="#">www.lilyvalleycakes.com</a></p>
  
                    </div>
                    <div class="row">

                      <div class="pull-right" style="color:#429A0B;">Smart Deal 20% off Until Feb 29th</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center clr" style="margin-top:10px;">                    
                    <div class="pull-left" style="color:#333; font-size:18px; margin-top:5px;"><a href="#" style="color:#fff;"><i class="fa fa-mobile"></i> 555-555-5555</a></div>
                    <div class="pull-right" style="color:#fff; font-size:18px;"><button class="btn-1 btn-primary" style="background-color:#333!important;">Request Pricing</button></div>
                  </div>
                </div>
              </div>
              
              
           <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                    <hr style="margin:5px 0;">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4" style="margin-top:10px;">
                    <div class="gallery"> <img src="../assets/images/dany-cakes.jpg" alt="post-image" class="img-responsive img-thumbnail"></div>
                     <div class="col-md-12">
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;"><span style="font-size:12px; color:#e91e63;"><a href="#modal-1" data-toggle="modal" style="color:#fc6653;">View Business Page</a></span></div>
                    </div>
                  </div>
                  <div class="col-md-8" style="margin-top:10px;">
                    <div class="row">
                      <div class="pull-right">
                        <div class="rr-circle">2</div>
                      </div>
                      <div class="pull-left"><span style="font-size:20px;">Dany Cakes</span>
                        <p style="font-size:16px;">Downtown Houston</p>
                      </div>
                    </div>
                    <div class="row">
                      <p style="font-size:16px;">3 Event Venues Available</p>
                    </div>
                    <div class="row">
                      <p style="font-size:14px;">1234 Delano Drive Houston 
Texas 77734<br>
                        <span style="margin-top:20px;">Reviews <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span> </p>
                    </div>
                    <div class="row">
                    <p>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. <br><a href="#">www.danycakes.com</a></p>
  
                    </div>
                    <div class="row">
                      
                      <div class="pull-right" style="color:#429A0B;">Smart Deal 20% off Until Feb 29th</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                   <div class="col-md-12 text-center clr" style="margin-top:10px;">                    
                    <div class="pull-left" style="color:#333; font-size:18px; margin-top:5px;"><a href="#" style="color:#fff;"><i class="fa fa-mobile"></i> 555-555-5555</a></div>
                    <div class="pull-right" style="color:#fff; font-size:18px;"><button class="btn-1 btn-primary" style="background-color:#333!important;">Request Pricing</button></div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                    <hr style="margin:5px 0;">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4" style="margin-top:10px;">
                    <div class="gallery"> <img src="../assets/images/amazing-cakes.jpg" alt="post-image" class="img-responsive img-thumbnail"></div>
                     <div class="col-md-12">
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;"><span style="font-size:12px; color:#e91e63;"><a href="#modal-1" data-toggle="modal" style="color:#fc6653;">View Business Page</a></span></div>
                    </div>
                  </div>
                  <div class="col-md-8" style="margin-top:10px;">
                    <div class="row">
                      <div class="pull-right">
                        <div class="rr-circle">3</div>
                      </div>
                      <div class="pull-left"><span style="font-size:20px;">Amazing Cakes</span>
                        <p style="font-size:16px;">Downtown Houston</p>
                      </div>
                    </div>
                    <div class="row">
                      <p style="font-size:16px;">3 Event Venues Available</p>
                    </div>
                    <div class="row">
                      <p style="font-size:14px;">1234 Delano Drive Houston Texas 77734<br>
                        <span style="margin-top:20px;">Reviews <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span> </p>
                    </div>
                    <div class="row">
                    <p>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. <br><a href="#">www.amakingcakes.com</a></p>
  
                    </div>
                    <div class="row">
                      
                      <div class="pull-right" style="color:#429A0B;">Smart Deal 20% off Until Feb 29th</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                   <div class="col-md-12 text-center clr" style="margin-top:10px;">                    
                    <div class="pull-left" style="color:#333; font-size:18px; margin-top:5px;"><a href="#" style="color:#fff;"><i class="fa fa-mobile"></i> 555-555-5555</a></div>
                    <div class="pull-right" style="color:#fff; font-size:18px;"><button class="btn-1 btn-primary" style="background-color:#333!important;">Request Pricing</button></div>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
           <div class="col-md-3">
          <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; margin-top:0;">Map Locations</h5>
<div style="margin-left:0; text-align:left;">
              <img src="../assets/images/houston-hotels.jpg" class="img-responsive"></div>          </div>
          <!-- Newsfeed Common Side Bar Right
          ================================================= --> 
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- model popup for registration -->
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="post-content">
                    <div class="user-info text-center" style="background:#e91e63; margin-top:-15px; padding:10px 15px; color:#fff!important;">
                                              <h3 style="color:#fff; font-size:25px; font-weight:normal;">Please Register or Login to Continue!! </h3>

                                          </div>
                      <div class="post-container" style="padding-bottom:20px;">
                        <div class="post-detail">
                                          
                                          
                          <div class="user-info">
                            <div class="row" style="padding:10px;">
                            <div class="col-md-3"><img src="<?php echo base_url ('assets/images/app-icon.png') ?>" alt="app-icon" /></div>
<div class="col-md-9"><span style="font-size:15px;">Wowhubb is the Event Networking Platform for Create, Host and Share your Personal, Professional and Business Leads and Sales events. We are Best Event Networking Platform Anytime and Anywhere.</span> </div>
<!-- this form submit rsvp -->
                              
                               
                              
                              <div class="row">
                                    <div class="col-md-12" style="margin-top:10px;">
                                      <div class="col-md-12 text-center">
                                   
                                        <a href="<?php echo base_url('Home/login'); ?>" style="color:#333;">
                                          <button type="submit" class="btn btn-primary" style="padding:7px 25px!important;">I Already have an Account</button>
                                          </a><br>
                                          
                                          <a href="<?php echo base_url('Home/index'); ?>" style="color:#333;">
                                          <span style="font-size:15px; color:#555;">Click to Register</span></a>
                                        
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

  
  $('#link_show').click(function() //professional work experience
  {
      $('#link_url').show();
  });

  $('#myvideo').hover(function toggleControls() {  //video controls hide and show mouse hover
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
})



  </script>
</body>
</html>
