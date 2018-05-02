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
<!-- magnific-popup image-->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/magnific-popup.css')?>" />

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- google api key here -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAH0ZxL9hrK1JeL7CDAYWRu7kX-hLeip2c"></script>


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
	background-color: #e91e63;
	font-size: 20px;
	color: #fff;
	width: 35px;
	height: 35px;
	line-height: 35px;
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
  <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" style="position:relative; z-index:969696;"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="position:relative;">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 0px; margin-right:0px; font-size:25px;">
          <li class="dropdown" style="text-align:center;margin-left:10px; margin-right:10px; "><a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none; padding:0;"> <img src="<?php echo base_url('assets/images/home-icon-1.png'); ?>" alt="user" /><br>
            Home </a></li>
          <li class="dropdown" style="text-align:center;margin-left:10px; margin-right:10px; "> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="padding:0;"> <img src="<?php echo base_url('assets/images/notification-icon.png'); ?>" alt="user" /> <br>
            My Alerts <i class="fa fa-caret-down"></i> </a>
            <ul class="dropdown-menu login">
              <div>
                <div class="col-md-12 text-center" style="margin-top:10px; margin-bottom:10px; color:#000; font-size:16px;"><strong><i class="icon ion-android-notifications-none"></i> Alerts</strong></div>
              </div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-10">Vineture  didn't get any new likes this week. Publish a post to engage your audience.
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 15 Hours Ago</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-10">Emeka added a New Event on Hari's Birthday. Lets Check!!
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 13 Hours Ago</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-10">It's Nickybeit Enjoy's birthday today. Help him celebrate!
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal; margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> Yesterday at 10:45pm</p>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div>
                <div class="col-md-12">
                  <div class="text-center"><a href="#" style="color:#555; text-align:center;" >See all</a></div>
                </div>
              </div>
            </ul>
          </li>
          <li class="dropdown" style="margin-left:10px; margin-right:10px; text-align:center;"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="padding:0;"> <img src="<?php echo base_url('assets/images/chat-icon.png'); ?>" alt="user" /><br>
            Friend Requests <i class="fa fa-caret-down"></i> </a>
            <ul class="dropdown-menu login">
              <div>
                <div class="col-md-12 text-center" style="margin-top:10px; margin-bottom:10px; color:#000; font-size:16px;"><strong><i class="icon ion-ios-person-outline"></i> Friend Requests</strong></div>
              </div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-4">Vicky
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 2 Mutual Friends</p>
                  </div>
                </div>
                <div class="col-md-6 text-right pull-right" style="margin-top:10px;">
                  <button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button>
                  <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-4">Emeka
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 2 Mutual Friends</p>
                  </div>
                </div>
                <div class="col-md-6 text-right pull-right" style="margin-top:10px;">
                  <button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button>
                  <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-4">Hari
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 10 Mutual Friends</p>
                  </div>
                </div>
                <div class="col-md-6 text-right pull-right" style="margin-top:10px;">
                  <button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button>
                  <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div> <a href="#" style="color:#333;" >
                <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                <div class="col-md-4">Roshan
                  <div class="pull-left" style="color:#555; width:100%;">
                    <p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 4 Mutual Friends</p>
                  </div>
                </div>
                <div class="col-md-6 text-right pull-right" style="margin-top:10px;">
                  <button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button>
                  <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button>
                </div>
                <div class="col-md-12">
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                </a></div>
              <div>
                <div class="col-md-12">
                  <div class="text-center"><a href="#" style="color:#555; text-align:center;" >See all</a></div>
                </div>
              </div>
            </ul>
          </li>
          <li class="dropdown" style="text-align:center;margin-left:10px; margin-right:10px; "><a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none; padding:0;"> <img src="<?php echo base_url('assets/images/chat-icon-1.png'); ?>" alt="user" /><br>
            Messaging </a></li>
          <li class="dropdown" style="text-align:center; margin-left:10px; margin-right:10px;"><a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none; padding:0;"> <img src="<?php echo base_url('assets/images/create-event-icon-1.png'); ?>" alt="user" /><br>
            Create Event </a></li>
         
          <li class="dropdown" style="text-align:center;margin-left:10px; margin-right:10px; padding-left:10px; padding-right:10px; border-left:1px solid #ccc;"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="padding:0;"><img src="<?php echo base_url('assets/images/prof-icon.png'); ?>" alt="user" /><br>
            Profile <i class="fa fa-caret-down"></i> </a>
            <ul class="dropdown-menu login">
              <div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; color:#000; font-size:16px;">
                 <div style="width:10%; float:left;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" style="width:30px; height:30px;" /></div>
                 <div style="width:90%; float:left;"><strong> Saranya Chandrasekaran</strong><br> 
                 <span style="font-size:13px; color:#999;">Web developer at Vineture Inc.</span></div>
                </div>
              </div>
              <div> 
                
                <div class="col-md-12 text-center">
                <span style="color:e91e63;"><a href="#" style="color:#e91e63;" ><strong>View Profile</strong></a></span>
                  
                </div>
                 <div class="col-md-12">
               <div class="col-md-12" style="background:#f5f5f5; padding-top:5px; padding-bottom:5px;"><span style="color:e91e63;"><a href="#" style="color:#222; font-size:15px;" >My Account</a></span></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> Settings</a></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> Privacy Policy</a></div>
                 
                </div>
                <div class="col-md-12">
               <div class="col-md-12" style="background:#f5f5f5; padding-top:5px; padding-bottom:5px;"><span style="color:e91e63;"><a href="#" style="color:#222; font-size:15px;" >Manage</a></span></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> Edit Profile</a></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> My Event Feed</a></div>
                <div class="col-md-12" style="padding-top:3px; padding-bottom:3px;"><a href="#" style="color:#333;" ><i class="fa fa-caret-right"></i> My Interests</a></div>
                  <div class="col-md-12" style="border-bottom:1px solid #e7e7e7; margin-top:10px; margin-bottom:10px;"></div>
                </div>
                
                </div>
              
           
              <div>
                <div class="col-md-12">
                  <div class="col-md-12">
  <div class="text-left"><a href="<?php echo base_url('home/logout'); ?>" style="color:#333; text-align:left;" >Logout</a></div>
                  </div>
                </div>
              </div>
            </ul>
            </li>
        </ul>
        <form class="navbar-form navbar-right hidden-sm" style="position:absolute; left:210px; top:0px;" >
          <div class="form-group"> <i class="icon ion-android-search"></i>
            <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px;" />
            <br/>
            <span id="display1"> </span> </div>
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
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="../assets/images/nearby_banner.jpg" style="background-size:cover; width:100%; margin-top:20px;" > </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12" style="margin-top:15px; margin-bottom:10px;">
          <div class="col-md-3">
            <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
              <option value="" selected="selected">All Dates</option>
              <option value="today">Today</option>
              <option value="tomorrow">Tomorrow</option>
              <option value="this_week">This Week</option>
              <option value="this_weekend">This Weekend</option>
              <option value="next_week">Next Week</option>
              <option value="next_month">Next Month</option>
            </select>
          </div>
       

          <form class="near_by_event" action="<?php echo base_url('Nearbyevents/nearby_event_service'); ?>" method="POST">

              <div class="col-md-3">
                    <input type='text' name="current_city" class="form-control" style="text-transform: capitalize;" placeholder="Enter your Event City" required />
              </div>
             <!-- <textarea id="city"  name="current_location" style="display: none;"> </textarea> -->

              <div class="col-md-4">
                <select name="event_category" id="days" class="form-control" style="background-color:#eff0f1;" required>
                  <option value="">Select </option>
                  <option value="Networking">Networking Meeting </option>
                  <option value="Class">Class</option>
                  <option value="Convention">Convention</option>
                  <option value="Dinner">Dinner</option>
                  <option value="Seminar">Seminar</option>
                  <option value="Training">Training/Workshop</option>
                  <option value="Conference">Conference</option>
                  <option value="Educational">Educational Program</option>
                  <option value="Startup">Startup Meeting </option>
                  <option value="Leadership">Leadership Workshop</option>
                  <option value="Webnair">Webinar</option>
                  <option value="Podcast">Podcast</option>
                  <option value="Online Meeting">Online Meeting</option>
                  <option value="Private">Private Fundraising</option>
                  <option value="Community Fundraising">Community Fundraising</option>
                  <option value="Public Fundraising">Public Fundraising</option>
                  <option value="Comedy Shows">Comedy Shows</option>
                </select>
              </div>

                <div class="col-md-2 text-center">
                  <a href="#modal-1" data-toggle="modal" > <input  type="submit" class="btn-primary" style="background-color:#fc6653!important; padding-top:5px; padding-bottom:5px;" value="Search"> </a>
                </div>
          </form>

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
              <!--news-feed links ends--> 
              
              <!--news-feed links ends-->
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Categories</h5>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    All Categories</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Corporate Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Political Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Social Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Sales Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Product Launch </div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Meeting</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Board Meeting</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Network Meeting</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Startup Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Group Workshop</div>
                </li>
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Price</h5>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    All Events</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Priced Events</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Free Events</div>
                </li>
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
              </ul>
              
            
              
            </div>
            <!--chat block ends--> 
          </div>

          <div class="col-md-6"> 
            <!-- center box start here  =================================== -->
              <div class="container post-content">                   

                  <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <hr style="margin:5px 0;">
                        </div>
                      </div>

                      <?php 

                            if(isset($nearbyevent))
                              {
                            foreach ($nearbyevent as $nearbyevents)
                            {  
                              
                               
                       ?> 
                             

                    <div class="row">                      
                        
                        <div class="col-md-12" style="margin-top:0px; position:relative">
                          <div class="row">   
                                <div class="col-md-9">
                              <span style="font-size:20px;; font-weight:normal;">
                                  <img src="../assets/images/wow-black-big.png" alt="post-image"> 

                                <?php echo $nearbyevents->eventtitle ?>
                                <span style="font-size:11px; background:#e91e63; color:#FFFFFF; padding:5px 10px; border-radius:5px;">
                                  <?php echo $nearbyevents->tickettype ?></span>
                              </span>
                              <p style="font-size:13px; color:#606060;"><?php echo $nearbyevents->eventname ?></p>                          
                            </div>
                            <div class="col-md-3">
                               <div class="pull-right">
                                  <div class="rr-circle">
                                    <?php if(isset($nearbyevents->wowtagvideo)) { ?>
                                    <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $nearbyevents->wowtagvideo; ?>" target="_blank">
                                        <img src="<?php echo base_url('assets/images/play.png'); ?>" alt="post-image">
                                    </a>
                                    <?php } ?>
                                  </div>
                              </div>
                         
                            </div>                        
                  
                          </div>
                          <div class="gallery">
                              <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $nearbyevents->coverpage; ?>' > <img style="height: 250px!important;" src="http://104.197.80.225:3010/wow/media/event/<?php echo $nearbyevents->coverpage; ?>" alt="post-image" class="img-responsive img-thumbnail post-image"  />
                              </a>
                          </div>

                          <div style="position:absolute; right:10px;bottom: 245px;">
                            <div class="col-md-12">
                              <div class="col-md-12 text-center" style="border-radius:5px; background:rgba(0,0,0,.7);">
                                 <span style="font-size:16px; color:#fff;">
                                    <?php echo $nearbyevents->ticketprice ?>                                  
                                </span> </div>
                            </div>
                          </div>

                          <div class="row">
                             <div class="col-md-5" style="margin-top:0px;">                    
                                 <div class="row">
                                    <div class="col-md-12" style="margin-top:20px; margin-bottom:15px;"> <span style="font-size:25px; color:#555"><?php echo $nearbyevents->eventcategory ?></span></div>
                                 </div>

                                 <?php
                                     foreach ($nearbyevents->eventvenue as $eventvenues)
                                      {
                                                               
                                    ?>
                          
                              <div class="row">
                                <div class="pull-left" style="width:15%;"><img src="../assets/images/map-icon-1.png" alt="post-image"> </div>
                                <div class="pull-left" style="width:85%;">
                                    <span style="font-size:14px;">
                                  
                                                    <?php   
                                                                          
                                                          if(isset($eventvenues->eventvenuecity))
                                                              {
                                                                  echo   $eventvenues->eventvenuename.", ".$eventvenues->eventvenuecity.", ".$eventvenues->eventvenueaddress1.", ".$eventvenues->eventvenuezipcode."<br>";
                                                              }
                                                                                                  
                                                    ?>
                                    </span>
                                </div>
                              </div>

                                    <?php } ?>

                            <div class="row">
                              <div class="pull-left" style="width:15%;"><img src="../assets/images/timer-icon.png" alt="post-image"> </div>
                                  <div class="pull-left" style="width:85%;">
                                    <span style="font-size:14px;">
                                                <?php 
                                                    if(isset($nearbyevents->eventstartdate))
                                                        { 
                                                           $timestamp = strtotime($event->eventstartdate);                                   
                                                           echo date("D d Y", strtotime($event->eventstartdate));
                                                           $timestamp1 = strtotime($event->eventenddate);
                                                           echo date('D d Y', $timestamp1); 
                                                        } 

                                                ?>
                                    </span>
                                  </div>
                            </div>

                                                 
                        </div>

                        <div class="row">
                              <div class="col-md-12">
                                  <form action="<?php echo base_url('Nearbyevents/get_nearbyevent_details'); ?>" method="POST">
                                      <div class="col-md-12 user-info text-center" style="background-color:#f1f1f1; margin:10px 0; border-radius:5px;">
                                          <textarea style= "display: none"  name="details"><?= json_encode($nearbyevents); ?>
                                          </textarea>
                                          <input type="submit" style="border: none; background: transparent; font-weight: bold;" value="View Details">
                                      </div>
                                  </form>
                              </div>
                            </div>     
                          </div> 

                        </div>                       
                 
                    </div>                


                    <?php  } } else {  ?>

                    <center>
                      <img src="<?php echo base_url('assets/images/no_results_icon.png'); ?>" alt="post-image" >

                      <p> Select and Search Your Event category </p>
                    </center>

                    <?php } ?>
                  

                  </div>
            
              </div>
          </div>


          <div class="col-md-3">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; margin-top:0;">Map Locations</h5>
            <div style="margin-left:0; text-align:left;"> <img src="../assets/images/houston-hotels.jpg" class="img-responsive"></div>
          </div>
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
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 


</body>
</html>
