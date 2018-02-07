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
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"> <img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="position:relative;">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span> </a> <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span> </a> <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span> </a>
        </ul>
        <form class="navbar-form navbar-right hidden-sm" style="position:absolute; right:325px; top:0px;" >
          <div class="form-group"> <i class="icon ion-android-search"></i>
            <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px; min-width:330px;" />
            <br/>
            <span id="display1"> </span> 
            <!-- <input type="text" class="search form-control" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People">                 
                        --> 
          </div>
        </form>
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
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;"><span style="font-size:12px; color:#e91e63;"><a href="#" style="color:#fc6653;">View Business Page</a></span></div>
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
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;"><span style="font-size:12px; color:#e91e63;"><a href="#" style="color:#fc6653;">View Business Page</a></span></div>
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
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;"><span style="font-size:12px; color:#e91e63;"><a href="#" style="color:#fc6653;">View Business Page</a></span></div>
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
                      <p style="font-size:14px;">1234 Delano Drive Houston 
Texas 77734<br>
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

    $(document).ready(function() {
    var max_fields_limit      = 5; //set limit for maximum input fields
    var x = 1; //initialize counter for text box
    $('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
        e.preventDefault();
        if(x < max_fields_limit){ //check conditions
            x++; //counter increment
            $('.input_fields_container').append('<div ><input type="text" class="form-control" style="margin-top:10px;" name="links[]"/></div>'); //add input field
        }
    });  
    
});


      $("#profileImage1").click(function(e) { //this two value is cover image  id name 
             $("#imageUpload1").click();
              });      

             $("#profileImage").click(function(e) { //this two value is profile image  id name 
            $("#imageUpload").click();  
            }); 


            $("#birthday").datetimepicker({
            timepicker:false,
            format:"M-d-Y",           
            });
           
            $("#wedding").datetimepicker({
            timepicker:false,
            format:"M-d-Y",           
            });

            $("#socialfunction").datetimepicker({
            timepicker:false,
            format:"M-d-Y",           
            });

            $("#party").datetimepicker({
            timepicker:false,
            format:"M-d-Y",           
            });



         //personal profile over view submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#personal_update_overview", function(e){
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
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {
                        swal("Good job!", "Your profile successfully updated!", "success");
                        window.location.href = base_url + 'profile/profile_get';
                        }else if(response.status == 'Failed')
                       {
                        
                        swal("Sorry!", "somethink wrong !", "error");
                       }          
                    }
                });
          
      });
   });

        
//personal self intro video size limitation

  // $(document).on("change", "#self_video", function(evt)
  //       {
  //           var file = this.files[0];

  //           if (file.size > 2621440)
  //            {
  //                  //Now Here I need to update <span> 
  //                $('#video_show1').hide();  
  //                alert('Filesize must 2.5MB or below');           
  //            }
  //       });

//personal profile self video submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#personal_update_video", function(e){
         e.preventDefault();     

         $.validator.addMethod('filesize', function(value, element, param) {
         return this.optional(element) || (element.files[0].size <= param) 
          });   
          
            $(this).validate({ 

                              rules: {                             
                                      self_video:{

                                        required:true,
                                        filesize: 2621440,   //max size 200 kb
                                      },               
                                     
                                     },

                              messages: {                           
                                      self_video: {                                         
                                         
                                          required:"Please Choose file.",
                                          filesize:" file size must be less than 2.5 MB.",
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
                      success: function(response)
                      {
                         if(response.status == 'success')
                         {
                          swal("Good job!", "Your profile successfully updated!", "success");
                          window.location.href = base_url + 'profile/profile_get';
                          }else if(response.status == 'Failed')
                         {                    
                          swal("Sorry!", "somethink wrong !", "error");
                         }          
                      }
                  });
           } 
      });
   });
     //personal profile aboutme submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#personal_update_aboutme", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {                    
                    swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
   });

        //personal profile contact info submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

  $(document).ready(function(){

    $(document).on("submit", "#personal_update_contactinfo", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {
                    
                    swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
   });

 //personal profile event info submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

 $(document).ready(function(){

    $(document).on("submit", "#personal_update_eventinfo", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {
                    
                    swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
   });

 //professional profile full page submit and updated profile page

     var base_url = '<?php echo base_url() ?>'; //form submited
    $(document).ready(function(){

    $(document).on("submit", "#professional_update", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {
                      swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
    });

    //professional profile work experience update

var base_url = '<?php echo base_url() ?>'; //form submited
    $(document).ready(function(){

    $(document).on("submit", "#professional_work_exp", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {
                      swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
    });

//profile image upload here 
//https://stackoverflow.com/questions/41406509/add-a-profile-picture-in-form-in-html-and-css
$(document).ready(function() {
    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }    
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $(".file-upload").on('change', function(){
        readURL(this);
        $('#profile_img').submit();
        // document.getElementById('profile_img').submit();
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });

    $("#profile_img").submit(function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    
                    // window.location.href = "<?php //echo base_url('profile/profile_img_upload');?>";
                   
                   }else if(response.status == 'Failed')
                   {
                    
                    swal('Somethink will be wrong plz try again..');
                   }
          

                }
                });
           
    });
});

//cover image upload here 

$(document).ready(function() {
    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.cover-pic').attr('src', e.target.result);
            }    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".cover-upload").on('change', function(){
        readURL(this);
        $('#cover_img').submit();
        // document.getElementById('profile_img').submit();
    });
    
    $(".upload-button").on('click', function() {
       $(".cover-upload").click();
    });


    $("#cover_img").submit(function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    
                    // window.location.href = "<?php //echo base_url('profile/profile_img_upload');?>";                   
                   }else if(response.status == 'Failed')
                   {
                    
                    swal('Somethink will be wrong plz try again..');
                   }
          

                }
                });
           
    });
});

  </script>
</body>
</html>
