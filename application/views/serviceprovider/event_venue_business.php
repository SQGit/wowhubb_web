<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<title></title>

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
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="../assets/images/event-venue-1.jpg" style="background-size:cover; width:100%; margin-top:20px;" > </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12" style="margin-top:15px; margin-bottom:10px;">
          <div class="col-md-12">
            <div class="pull-right">
              <button type="submit" class="btn-primary" style="background-color:#fc6653!important;">Contact Us : 1-555-555-5555</button>
              
            </div>
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
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; color:#333;">Sharaton Event Center</h5>
                <li><strong style="font-weight:bold; color:#fc6653!important;">3 Event Centers Available</strong></li>
                <li>his unique venue is the oldest hangar on Hobby Airport's grounds, a 1929 Great Silver Fleet Maintenance Hangar. The Hangar can be used for any function you can imagine, large or small.</li>
                <li>
              
              <button type="submit" data-toggle="modal" data-target=".modal-1" class="btn-primary" style="background-color:#fc6653!important;">Inquiry with us</button>
              
      
                
                </li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; color:#333;">Location</h5>
                
                <li>1234 Delano Drive<br>
                  Houston Texas 77777</li>
              </ul>
              
              <!--news-feed links ends--> 
              
              <!--news-feed links ends-->
              
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; color:#333;">Map Locations</h5>
                <li>
                  <div style="margin-left:0; text-align:left;"> <img src="../assets/images/houston-hotels.jpg" class="img-responsive"></div>
                </li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; color:#333;">Avaliability</h5>
                <li>Monday: By Appt Only<br>
                  Tuesday: By Appt Only<br>
                  Wednesday: By Appt Only<br>
                  Thursday: By Appt Only<br>
                  Friday: By Appt Only<br>
                  Saturday: By Appt Only<br>
                  Sunday: By Appt Only </li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; color:#333;">Food &amp; Beverages</h5>
                <li> 
                <img src="../assets/images/event-venue-icons/ihc-icon.png" alt="image" width="32" height="32"/><strong>Food</strong> - In-House Catering Only</li> 
                <li><img src="../assets/images/event-venue-icons/ihs-icon.png" alt="image" width="32" height="32"/><strong>Beverages</strong> - In-House Supplies Only
                
                </li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; color:#333;">Reviews</h5>
                <li><span style="margin-top:20px;"><i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span></li> 
                <li>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer
<br><em>Markus Houston</em></li>
<li><a href="#" style="color:#e91e63;">Add a Review</a> </li>
                
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
          <div class="col-md-9"> 
            <!-- center box start here  =================================== -->
            <div class="container post-content">
              
              <div class="col-md-12">
                
                <div class="row">
                
                  <div class="col-md-4" style="margin-top:10px;">
                  <span style="font-size:20px;">City Hall 1</span>
                    <div class="gallery"> <img src="../assets/images/sharaton.jpg" alt="post-image" class="img-responsive img-thumbnail"></div>
                    <div class="col-md-12" style="margin-top:10px;">
                      <div class="row">
                        <div class="pull-left" style="font-size:15px; font-weight:bold;">Capacity: <br><span style="color:#429A0B;">100 Standing  50 Seating</span></div>

                      </div>
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                      <div class="row">
                        <div class="pull-left" style="font-size:15px; font-weight:bold;">Pricing</div>
                        <div class="pull-left" style="font-size:13px; line-height:20px;">FRI - SAT: $500<br>
FRI - SAT BUYOUT: $10,000<br>
SUN - THURS: $2,000<br>
SUN - THURS BUYOUT: $2,000<br>
WEDDINGS: Quote Request For Info</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8" style="margin-top:10px;">
                    <div class="row">
                      
                      <div class="pull-left"><strong>Atrium Package: $5,000</strong> <br>
• Full use of Museum; exhibits remain open for guest to enjoy <br>
• Full use of the Building and Grounds For Contracted Amount of Time <br>
• 2 Paved parking lots (150 cars) <br>
• Use of our Tables and Chairs: (20) 60" Rounds; (200) White Folding Chairs <br>
• Set Up and Tear Down of Tables and Chairs<br> 
• 2 Catering Prep areas with all necessary power supply <br>
• 2 Event Security Officers for your Event (additional officers needed for parties over 200) <br>
• Professional event planner available for full service coordinating, partial coordinating, basic coordinating, or day-of coordinating (see attached descriptions)<br> 
• Valet Parking for Your Guests Available (please contact us for quote)
                      </div>
                    </div>
                    
                    <div class="row"><div class="form-group col-sm-12">
                  <div class="row" style="margin-top:15px; margin-bottom:15px;">
                  <strong>Amenities</strong> <br>
                    <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/av-icon.png" alt="image" width="32" height="32">A/V </div>
		                    </div>
                     <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/wifi-icon.png" alt="image" width="32" height="32">WiFi</div>
		                    </div>
                     <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/car-icon.png" alt="image" width="32" height="32">Street Parking</div>
		                    </div>       
                   <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/handi-icon.png" alt="image" width="32" height="32">Handicap</div>
		                    </div>
                            </div>
                            <div class="row" style="margin-bottom:15px;">
                    <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/rt-icon.png" alt="image" width="32" height="32">Rooftop</div>
		                    </div>
                    <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/pet-icon.png" alt="image" width="32" height="32">Pet Friendly</div>
		                    </div>
                      <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/valet-icon.png" alt="image" width="32" height="32">Valet Parking</div>
		                    </div> 
                      <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/outdoor-icon.png" alt="image" width="32" height="32">Outdoor Space</div>
		                    </div>  
                      </div> 
                      </div></div>
                  </div>
                </div>
                
              </div>
              
              <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;">                                        
                                      </div>
              <div class="col-md-12">
                
                <div class="row">
                
                  <div class="col-md-4" style="margin-top:10px;">
                  <span style="font-size:20px;">City Hall 2</span>
                    <div class="gallery"> <img src="../assets/images/sharaton.jpg" alt="post-image" class="img-responsive img-thumbnail"></div>
                    <div class="col-md-12" style="margin-top:10px;">
                      <div class="row">
                        <div class="pull-left" style="font-size:15px; font-weight:bold;">Capacity: <br><span style="color:#429A0B;">100 Standing  50 Seating</span></div>

                      </div>
                    </div>
                    <div class="col-md-12" style="margin-top:10px;">
                      <div class="row">
                        <div class="pull-left" style="font-size:15px; font-weight:bold;">Pricing</div>
                        <div class="pull-left" style="font-size:13px; line-height:20px;">FRI - SAT: $500<br>
FRI - SAT BUYOUT: $10,000<br>
SUN - THURS: $2,000<br>
SUN - THURS BUYOUT: $2,000<br>
WEDDINGS: Quote Request For Info</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8" style="margin-top:10px;">
                    <div class="row">
                      
                      <div class="pull-left"><strong>Atrium Package: $5,000</strong> <br>
• Full use of Museum; exhibits remain open for guest to enjoy <br>
• Full use of the Building and Grounds For Contracted Amount of Time <br>
• 2 Paved parking lots (150 cars) <br>
• Use of our Tables and Chairs: (20) 60" Rounds; (200) White Folding Chairs <br>
• Set Up and Tear Down of Tables and Chairs<br> 
• 2 Catering Prep areas with all necessary power supply <br>
• 2 Event Security Officers for your Event (additional officers needed for parties over 200) <br>
• Professional event planner available for full service coordinating, partial coordinating, basic coordinating, or day-of coordinating (see attached descriptions)<br> 
• Valet Parking for Your Guests Available (please contact us for quote)
                      </div>
                    </div>
                    
                    <div class="row"><div class="form-group col-sm-12">
                  <div class="row" style="margin-top:15px; margin-bottom:15px;">
                  <strong>Amenities</strong> <br>
                    <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/av-icon.png" alt="image" width="32" height="32">A/V </div>
		                    </div>
                     <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/wifi-icon.png" alt="image" width="32" height="32">WiFi</div>
		                    </div>
                     <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/car-icon.png" alt="image" width="32" height="32">Street Parking</div>
		                    </div>       
                   <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/handi-icon.png" alt="image" width="32" height="32">Handicap</div>
		                    </div>
                            </div>
                            <div class="row" style="margin-bottom:15px;">
                    <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/rt-icon.png" alt="image" width="32" height="32">Rooftop</div>

		                    </div>
                    <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/pet-icon.png" alt="image" width="32" height="32">Pet Friendly</div>
		                    </div>
                      <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/valet-icon.png" alt="image" width="32" height="32">Valet Parking</div>
		                    </div> 
                      <div class="form-group-1 col-sm-3">
		                      
		                      <div class="pull-left" style="width:100%; font-size:12px;"><img src="../assets/images/event-venue-icons/outdoor-icon.png" alt="image" width="32" height="32">Outdoor Space</div>
		                    </div>  
                      </div> 
                      </div></div>
                  </div>
                </div>
                
              </div>
              
              
            </div>
          </div>
          <!-- Newsfeed Common Side Bar Right
          ================================================= --> 
          
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">                  
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3>Sharaton Event Center<br><span style="color:#333; font-size: 15px">Fillout our Inquiry Form</span></h3>
                                 
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                              
                    <form action="http://localhost/wowhubb/profile/personal_update_overview" method="post"  id="personal_update_overview" class="form-inline">
                           
                            <div class="row" >                              
                              <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <label for="date-to" class="">Select your Event Type</label>
                               <select name="event_totaldays" id="days" class="form-control">
              <option selected="selected" class="option">What Event Are You Planning </option>
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
              <option class="option">Kids Party</option>
              <option class="option">Music Concert</option>
            </select>
                              </div>
                            </div>
                             <div class="row">   
                              <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <label for="date-to" class="">Select Your Event Space</label>
                                <select name="eventspace" class="form-control" id="types" >       
                                  <option selected="selected" class="option">City Hall 1</option>
                                   <option class="option">City Hall 2</option>
                                   <option class="option">City Hall 3</option>
                                   <option class="option">City Hall 4</option>
                                </select>
                              </div>
                            </div>
                            
                            <div class="row">   
                              <div class="form-group col-xs-6" style="margin-bottom:15px;">
                                <label for="date-to" class=""># of Event Attendee </label>
                                <input type='text' name="event_topic"  class="form-control textBox" />
                              </div>
                              <div class="form-group col-xs-6" style="margin-bottom:15px;">
                                <label for="date-to" class=""># of Event Days </label>
                                <select name="eventspace" class="form-control" id="types" >       
                                  <option selected="selected" class="option">1 Day Event</option>
                                   <option class="option">2 Days Event</option>
                                   <option class="option">3 Days Event</option>
                                   <option class="option">4 Days Event</option>
                                </select>
                              </div>
                            </div>
                            
                            <div class="row">   
                              <div class="form-group col-xs-6" style="margin-bottom:15px;">
                                <label for="date-to" class="">Preferred Meeting Date </label>
                                <input type='text' name="event_topic"  class="form-control textBox" />
                              </div>
                              <div class="form-group col-xs-6" style="margin-top:33px; margin-bottom:15px;">
                                <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:90%; font-size:14px;">My Date Can be Flexible</div>
                              </div>
                            </div>
                            <div class="row">   
                              <div class="form-group col-xs-12 text-center">
                                <label for="date-to" class="">Select Your Meeting Time </label>
                                
                              </div>
                              <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <div class="pull-left" style="width:48%;">
		                        <input type='text' name="event_topic"  class="form-control textBox" />
		                      </div>
		                      <div class="pull-right" style="width:48%;">
                              <input type='text' name="event_topic"  class="form-control textBox" />
                              </div>
                              </div>
                            </div>
                            
                            <div class="row">   
                            <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#333;"><strong>FOOD &amp; BEVERAGES</strong></div>
                              <div class="form-group col-xs-12" style="margin-top:15px;">
                               
                                <div class="pull-left" style="width:5%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:95%; font-size:14px;">Food &amp; Beverages Needed</div>
                              </div>
                              <div class="form-group col-xs-12">
                                
                                <div class="pull-left" style="width:5%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:95%; font-size:14px;">I will Bring My Food &amp; Beverages</div>
                              </div>
                              <div class="form-group col-xs-12" style="color:#DB0003;">Note: Venue does not accept outside food & Beverages </div>
                              
                            </div>
                            
                            <div class="row">   
                            <div class='form-group col-sm-12' style="padding-top:5px; padding-bottom:5px; background-color:#f5f5f5; color:#333; margin-top:15px;"><strong>A/V EQUIPMENTS</strong></div>
                              <div class="form-group col-xs-12" style="margin-top:15px;">
                               
                                <div class="pull-left" style="width:5%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:95%; font-size:14px;">I Need Audio / Visual Equipments</div>
                              </div>
                              <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <label>Leave Additional Comments..</label>
		                      <textarea type="text" id="description" name="event_description" class="form-control required" style="min-height:100px;" placeholder="Describe What Your Event Is All About "></textarea>
                                
                              </div>

                              
                            </div>
                            <div class="row">   
                            <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <div class="pull-left" style="width:48%; margin-bottom:15px;">
		                        <input type='text' name="event_topic"  class="form-control textBox" placeholder="First Name" />
		                      </div>
		                      <div class="pull-right" style="width:48%; margin-bottom:15px;">
                              <input type='text' name="event_topic"  class="form-control textBox" placeholder="Last Name" />
                              </div>
                              <div class="pull-left" style="width:48%;">
                              <input type='text' name="event_topic"  class="form-control textBox" placeholder="Email" />
                              </div>
                              <div class="pull-right" style="width:48%;">
                              <input type='text' name="event_topic"  class="form-control textBox" placeholder="Phone Number" />
                              </div>
                              </div>

                              
                            </div>
                                                                                 
                            <div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Submit" class="btn btn-primary" style="width:140px;">
                              </div>
                            </div>
                          </form>
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
