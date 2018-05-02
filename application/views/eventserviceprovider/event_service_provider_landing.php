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
.table>thead>tr>th
{
	border-bottom:0!important;
}
h3
{
	color:#333!important;
}

label.error {
	/*font-family: 'Roboto', sans-serif;*/
	color: red;
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
td, tr {
	border-spacing: 2px;
	padding: 0 5px;
}
table {
	border-spacing: 2px;
	padding: 0px;
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
    <div class="timeline-cover" style="position: relative; max-height:320px;"> 
      <?php
          // print_r($detail);
         if(isset($event_service_provider->coverpage))
          {
       ?>
      <img class="cover-pic" src="http://104.197.80.225:3010/wow/media/eventservice/<?php echo $event_service_provider->coverpage;?>"  style="background-size:cover; width:100%; max-height:300px;" > 
      <br>
      <?php } else { ?>
                <img class="cover-pic" src='<?php echo base_url("assets/images/mf-1.jpg");?>' style="background-size:cover; width:100%; margin-top:20px;" > 
      <?php } ?>
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">

            <div class="profile-info">
                  <?php
                     if(isset($event_service_provider->businesslogo))
                      {
                   ?>
             <img  src="http://104.197.80.225:3010/wow/media/eventservice/<?php echo $event_service_provider->businesslogo;?>" class="profile-pic img-responsive profile-photo" /> 
              <?php } ?>
           </div>
          </div>
          <div class="col-md-9" >
            <div class="profile-info-1"> </div>
            <ul class="list-inline profile-menu">
              <li><a href="<?php echo base_url('service/ohp_admin_home'); ?>" class="active">Home</a></li>
              <li><a href="<?php echo base_url('service/ohp_eventfeed'); ?>">Event Feed</a></li>
              <li><a href="<?php echo base_url('service/ohp_network_members'); ?>">Network Members</a></li>
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="#">Album</a></li>
              <li><a href="#">Videos</a></li>
            </ul>
            <ul class="follow-me list-inline">
              <li>Help</li>
            </ul>
          </div>
        </div>
      </div>
      <!--Timeline Menu for Large Screens End--> 
      
      <!--Timeline Menu for Small Screens-->
      <div class="navbar-mobile hidden-lg hidden-md">
        <div class="profile-info"> <img src="<?php echo base_url ('assets/images/users/user-1.jpg') ?>" alt="" class="img-responsive profile-photo" />
          <h3 style="color:#fff;">Emeka Ike</h3>
          <p style="color:#fff;" class="text-muted">Managing Director</p>
        </div>
        <div class="mobile-menu">
          <ul class="list-inline">
            <li><a href="timline.html">Venue Overview</a></li>
            <li><a href="timeline-about.html" class="active">Notifications</a></li>
            <li><a href="timeline-album.html">My Event Halls</a></li>
            <li><a href="timeline-friends.html">Promote Your Venue</a></li>
            <li><a href="timeline-friends.html">Reviews</a></li>
          </ul>
          <button class="btn-primary">Add Friend</button>
        </div>
      </div>
      <!--Timeline Menu for Small Screens End--> 
      
    </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-2" style="margin-top:15px;">
            <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;"> 
              
              <!--news-feed links ends-->
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Events Hubb</h5>

                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="<?php echo base_url('service/ohp_publish_event'); ?>">Published Events</a> </li>

                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="<?php echo base_url('service/ohp_notification_page'); ?>">Invites-Notifications</a> </li>

                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"><a style="font-weight: bold;" href="<?php echo base_url('service/ohp_wowtag'); ?>">Wowtag</a> </li>

                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>

              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Post</h5>
                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="<?php echo base_url('service/ohp_eventfeed'); ?>">Published Posts</a> </li>
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Admin</h5>
                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="<?php echo base_url('service/ohp_admin_members_admin'); ?>">Manage Members</a> </li>
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Manage ADs</h5>
                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="#">Promote Your Events</a> </li>
              
              </ul>
            </div>
          </div>

          <div class="col-md-7">
            <div class="col-md-12">
              <div class="row">
                <div class="row">
                <div class="col-md-12" style="background: #fff; box-shadow: 1px 1px 1px 2px #ECECEC; padding: 10px 7px; border-radius: 3px; margin-top:15px;">
                  <div class="col-md-10">
                    <h3 style="font-size:17px; font-weight:bold;">About Us</h3>
                    <p> <?php if(isset($event_service_provider->venuedescription)) { echo $event_service_provider->venuedescription; } ?></p>
                  </div>
                    <div class="col-md-2 text-right" style="margin-top:15px;">
                      <a href="#">
                        <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" alt="" /> Edit
                      </a>
                    </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="row">
                <div class="col-md-12" style="background: #fff; box-shadow: 1px 1px 1px 2px #ECECEC; padding: 10px 7px; border-radius: 3px; margin-top:15px;">
                  <div class="col-md-6">
                    <h3 style="font-size:17px; font-weight:bold;">Address</h3>
                    <p> <?php if(isset($event_service_provider->venue)) { echo $event_service_provider->venue; } ?> <br>
                       <?php if(isset($event_service_provider->address1)) { echo $event_service_provider->address1; } ?> <br>
                       <?php if(isset($event_service_provider->country)) { echo $event_service_provider->state." ".$event_service_provider->country." ".$event_service_provider->zipcode; } ?> <br>
                      <strong>Call Us - </strong> <?php if(isset($event_service_provider->phone)) { echo $event_service_provider->phone; } ?> <br>
                      <strong>Web - </strong>  <?php if(isset($event_service_provider->websitelink)) { echo $event_service_provider->websitelink; } ?> </p>
                  </div>
                  <div class="col-md-6" style="padding:15px;"> <img src="<?php echo base_url('assets/images/ohp-hotels.jpg');?>" alt="" class="img-responsive img-thumbnail" /> </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="row">
                <div class="col-md-12" style="background: #fff; box-shadow: 1px 1px 1px 2px #ECECEC; padding: 10px 7px; border-radius: 5px; margin-top:15px;">
                  <div class="col-md-10">
                    <h3 style="font-size:17px; font-weight:bold;">Business Hours</h3>
 <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Days</th>
      <th>Working Hours</th>
      <th>Closed</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Monday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tuesday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Wednesday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Thursday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Friday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>Saturday</td>
      <td>-</td>
      <td>Closed</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td>Sunday</td>
      <td>-</td>
      <td>Closed</td>
    </tr>
  </tbody>
</table>

                   
                  </div>

                  <div class="col-md-2 text-right" style="margin-top:15px;">
                    <a href="#">
                      <img src="<?php echo base_url('assets/images/edit_icon.png');?>" alt="" /> Edit 
                    </a>
                  </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

         
          <div class="col-md-3" style="margin-top:15px;">
            <div class="col-md-12" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
              <div class="col-md-12">
  <div class="row">
    <div class="col-md-12">
      <h3 style="font-size:16px; font-weight:bold;">Welcome To Your Event Hosting  Page</h3>
      <p>Welcome to your evvent hosting page on !wowhubb, you can create, host and advertise all your company, organisation and business event in one place 
        An amaazing platform to get all things event handled for you.</p>
      </div>
    <div class="col-md-12">
      <h3 style="font-size:16px; font-weight:bold;">Invite Your Friends To Event Network Page</h3>
      <div class="col-md-6">
        <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
          <div class="col-md-12 text-center"><img src="<?php echo base_url('assets/images/em.png');?> " class="img-responsive img-circle img-thumbnail" alt="user"></div>
          <span style="font-size:15px; font-weight:bold;">Tony Adams</span>
          
          <br>
          <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-sm" type="button">Invite</button></span>
          </div>
        </div>
      <div class="col-md-6">
        <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
          <div class="col-md-12 text-center"><img src="<?php echo base_url('assets/images/td.png');?>" class="img-responsive img-circle img-thumbnail" alt="user"></div>
          <span style="font-size:15px; font-weight:bold;">TD Jakes</span>
          
          <br>
          <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-sm" type="button">Invite</button></span>
          </div>
        </div>
      <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"></div>
      <div class="col-md-6">
        <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
          <div class="col-md-12 text-center"><img src="<?php echo base_url('assets/images/em.png');?>" class="img-responsive img-circle img-thumbnail" alt="user"></div>
          <span style="font-size:15px; font-weight:bold;">Tony Adams</span>
          
          <br>
          <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-sm" type="button">Invite</button></span>
          </div>
        </div>
      <div class="col-md-6">
        <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
          <div class="col-md-12 text-center"><img src="<?php echo base_url('assets/images/td.png');?>" class="img-responsive img-circle img-thumbnail" alt="user"></div>
          <span style="font-size:15px; font-weight:bold;">TD Jakes</span>
          
          <br>
          <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-sm" type="button">Invite</button></span>
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

  
 
 

</script>
</body>
</html>
