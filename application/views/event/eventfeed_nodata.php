<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
<meta name="robots" content="index, follow" />
<title>Wowhubb | Your One Stop Event Networking Platform</title>

<!-- Stylesheets
    ================================================= -->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/ionicons.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
<!-- magnific-popup image-->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/magnific-popup.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/normalize.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/videopopup.css')?>" media="screen" />
<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">

.timeline-nav-bar {
	background: rgba(0,0,0, .7);
	width: 96%;
	position: absolute;
	bottom: 7px;
	height: 45px;
	right: 10px;
}
.timeline-nav-bar ul.follow-me {
	margin: 0;
	position: absolute;
	right: 15px;
	top: 7px;
}
.timeline-nav-bar ul.follow-me1 {
  margin: 0;
  position: absolute;
  left: 15px;
  top: 7px;
}
ul li {
	list-style-image: none;
}
.post-content img.post-image, video.post-video, .google-maps {
	width: 100%;
	height: 350px;
}
#page-contents {
	padding: 30px 0 50px;/*background-color:#e7e5e6;*/
}
#footer {
	background: #fff;
	position: relative;
	top: 0px;
}
.upload-button {
	padding: 4px;
	border: 1px solid black;
	border-radius: 5px;
	display: block;
	float: left;
	margin-top: -40px;
}
.profile-pic {
	max-width: 200px;
	max-height: 200px;
	display: block;
	border-radius: 50px;
}
.file-upload {
	display: none;
}
.dropdown-menu {
	position: absolute;
	top: 100%;
	left: -35px;
	z-index: 999999;
	display: none;
	float: left;
	min-width: 160px;
	padding: 5px 0;
	margin: 2px 0 0;
	font-size: 14px;
	text-align: left;
	list-style: none;
	background-color: #fff;
	-webkit-background-clip: padding-box;
	background-clip: padding-box;
	border: 1px solid #ccc;
	border: 1px solid rgba(0,0,0,.15);
	border-radius: 4px;
	-webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
	box-shadow: 0 6px 12px rgba(0,0,0,.175);
}
#page-contents .form-group i {
	color: #9E9E9E;
	font-size: 16px;
	right: 15px;
	position: absolute;
	top: 15px;
}
/*search box style*/
.live-search-list {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 1em;
	background-color: #2c3e50;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	font-family: 'Lato', sans-serif;
	color: #fff;
}
.live-search-box {
	width: 100%;
	display: block;
	padding: 1em;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border: 1px solid #3498db;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.live-search-list li {
	color: fff;
	list-style: none;
	padding: 0;
	margin: 5px 0;
}
.panel, .flip {
	padding: 5px;
	margin-top:10px;
	text-align: left;
	background-color: transparent;
	border: 0;
	cursor: pointer;
}
.panel {
	padding: 0px;
	display: none;
}
.panel1, .flip1 {
  padding: 5px;
  /*margin-top:10px;*/
  /*text-align: left;*/
  background-color: transparent;
  border: 0;
  cursor: pointer;
}
.panel1 {
  padding: 0px;
  display: none;
}

img.profile-photo1 {
    height: 35px;
    width: 35px;
    border-radius: 50%;
}

/* countdown */
.countdown {
  font-size: 23px;
  color: #333;
  line-height: 1.1em;
  margin: 0px 0 0px;
}

</style>

</head>

<body>

<!-- Header
    ================================================= -->
<header id="header">
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="position:relative;">

        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">

          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="padding:0;">
                <img src="<?php echo base_url('assets/images/notification-icon.png'); ?>" alt="user" /></a>
                <ul class="dropdown-menu login">
                <div>
                  <div class="col-md-12 text-center" style="margin-top:10px; margin-bottom:10px; color:#000; font-size:16px;"><strong><i class="icon ion-android-notifications-none"></i> Notifications</strong></div>
                </div>
                  <div> 
                  <a href="#" style="color:#333;" >
                    
                  <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                     <div class="col-md-10">Vineture  didn't get any new likes this week. Publish a post to engage your audience.
                     <div class="pull-left" style="color:#555; width:100%;"><p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 15 Hours Ago</p></div>
                     </div>
                  
                    <div class="col-md-12">
                      <div class="col-md-12" style="border-bottom:1px solid #5E5E5E; margin-top:10px; margin-bottom:10px;"></div>
                    </div>
                  </a></div>
                  
                  <div> 
                  <a href="#" style="color:#333;" >
                    
                    <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                     <div class="col-md-10">Emeka added a New Event on Hari's Birthday. Lets Check!!
                     <div class="pull-left" style="color:#555; width:100%;"><p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 13 Hours Ago</p></div>
                     </div>
                  
                    <div class="col-md-12">
                      <div class="col-md-12" style="border-bottom:1px solid #5E5E5E; margin-top:10px; margin-bottom:10px;"></div>
                    </div>
                  </a></div>
                 <div> 
                  <a href="#" style="color:#333;" >
                    
                    <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                     <div class="col-md-10">It's Nickybeit Enjoy's birthday today. Help him celebrate!
                     <div class="pull-left" style="color:#555; width:100%;"><p style="font-weight:normal; margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> Yesterday at 10:45pm</p></div>
                     </div>
                  
                   <div class="col-md-12">
                     <div class="col-md-12" style="border-bottom:1px solid #5E5E5E; margin-top:10px; margin-bottom:10px;"></div>
                  </div>
                  </a></div>
                  <div> 
                  <div class="col-md-12">
                    <div class="text-center"><a href="#" style="color:#555; text-align:center;" >See all</a></div>
                  </div>
                  </div>
                  

                  
            </ul>
            
              </li>
              
              <li class="dropdown" style="margin-left:10px; margin-right:10px;">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true" style="padding:0;">
                <img src="<?php echo base_url('assets/images/chat-icon.png'); ?>" alt="user" /></a>
                <ul class="dropdown-menu login">
                <div>
                  <div class="col-md-12 text-center" style="margin-top:10px; margin-bottom:10px; color:#000; font-size:16px;"><strong><i class="icon ion-ios-person-outline"></i> Friend Requests</strong></div>
                </div>
                  <div> 
                  <a href="#" style="color:#333;" >
                    
                  <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                     <div class="col-md-4">Vicky
                     <div class="pull-left" style="color:#555; width:100%;"><p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 2 Mutual Friends</p></div>
                     </div>
                      <div class="col-md-6 text-right pull-right" style="margin-top:10px;"><button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button> <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button></div>
                  
                    <div class="col-md-12">
                      <div class="col-md-12" style="border-bottom:1px solid #5E5E5E; margin-top:10px; margin-bottom:10px;"></div>
                    </div>
                  </a></div>
                  
                  <div> 
                  <a href="#" style="color:#333;" >
                    
                  <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                     <div class="col-md-4">Emeka
                     <div class="pull-left" style="color:#555; width:100%;"><p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 2 Mutual Friends</p></div>
                     </div>
                      <div class="col-md-6 text-right pull-right" style="margin-top:10px;"><button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button> <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button></div>
                  
                    <div class="col-md-12">
                      <div class="col-md-12" style="border-bottom:1px solid #5E5E5E; margin-top:10px; margin-bottom:10px;"></div>
                    </div>
                  </a></div>
                <div> 
                  <a href="#" style="color:#333;" >
                    
                  <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                     <div class="col-md-4">Hari
                     <div class="pull-left" style="color:#555; width:100%;"><p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 10 Mutual Friends</p></div>
                     </div>
                      <div class="col-md-6 text-right pull-right" style="margin-top:10px;"><button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button> <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button></div>
                  
                    <div class="col-md-12">
                      <div class="col-md-12" style="border-bottom:1px solid #5E5E5E; margin-top:10px; margin-bottom:10px;"></div>
                    </div>
                  </a></div>
                  <div> 
                  <a href="#" style="color:#333;" >
                    
                  <div class="col-md-2" style="margin-top:10px;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-sm" /></div>
                     <div class="col-md-4">Roshan
                     <div class="pull-left" style="color:#555; width:100%;"><p style="font-weight:normal;  margin-bottom:0;"><i class="icon ion-ios-time-outline"></i> 4 Mutual Friends</p></div>
                     </div>
                      <div class="col-md-6 text-right pull-right" style="margin-top:10px;"><button class="btn-primary" style="padding: 2px 10px; background:#e91e63; font-size:11px;">Confirm</button> <button class="btn-primary" style="padding: 2px 10px; font-size:11px; background:#727272;">Delete Request</button></div>
                  
                    <div class="col-md-12">
                      <div class="col-md-12" style="border-bottom:1px solid #5E5E5E; margin-top:10px; margin-bottom:10px;"></div>
                    </div>
                  </a></div>
                  <div> 
                  <div class="col-md-12">
                    <div class="text-center"><a href="#" style="color:#555; text-align:center;" >See all</a></div>
                  </div>
                  </div>            

                  
            </ul>
            
              </li>

               <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <img src="<?php echo base_url('assets/images/chat-icon-1.png'); ?>" alt="user" /> </a>
      


          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span> </a> <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span> </a> <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span> </a>
        </ul>

        <form class="navbar-form navbar-right hidden-sm" style="position:absolute; right:410px; top:0px;" >
          <div class="form-group"> <i class="icon ion-android-search"></i>
            <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px; min-width:330px;" />
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

<div id="page-contents" style="padding:45px 0 50px;">
  <div class="container">
    <div class="row"> 
      
      <!-- Newsfeed Common Side Bar Left
          ================================================= -->
   
    <div class="col-md-3 static">
        <div class="profile-card">
              <div style="width:100%; float:left;">
                <?php 
                if(!is_null($this->session->userdata('personal_image')))
                { ?>
                <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" />
                <?php }  else { ?>
                <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo" />
                <?php } ?>
                <span class="text-white" style="margin-top:5px; font-size:18px;"><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?> </span>
                <p><?php echo $this->session->userdata('designation');  ?></p>
              </div>

              <div style="font-size:20px; color:#fff; margin-top:-20px; width:100%; float:right; text-align:right;">

                  <?php
                       if($this->session->has_userdata('self_video') && ($this->session->userdata('self_video') != 'null') )                          
                      {  
                  ?>

                        <a href="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('self_video'); ?>" >  &nbsp;&nbsp;
                          <i class="icon ion-arrow-right-b" style="font-size:28px; color:#fff;"></i>
                        </a> 
                        
                  <?php } ?>
                
              </div>
        </div>

        <!--profile card ends-->
        
        <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
          <ul class="nav-news-feed" style="margin-bottom:10px;">
            
            <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <img src="<?php echo base_url('assets/images/create-event-icon.png'); ?>" alt="user" /><a style="font-weight: bold;" href="<?php echo base_url('event/event_popup'); ?>">Create Event</a> </li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <!--  <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Our Links</h5>
            <li><img src="<?php echo base_url('assets/images/event-feed-icon.png'); ?>" alt="user" /><a href="#">Event Feed</a></li>-->
            <li><img src="<?php echo base_url('assets/images/profile-icon.png'); ?>" alt="user" />
              <a href="<?php echo base_url('Event/profile_get_eventfeed'); ?>">My Profile</a></li>
            <li><img src="<?php echo base_url('assets/images/network-icon.png'); ?>" alt="user" />
              <a href="<?php echo base_url('Searchfriends/add_friends'); ?>">My Network</a></li>
            <li><img src="<?php echo base_url('assets/images/album-icon.png'); ?>" alt="user" /><a href="#">My Album</a></li>
            <li><img src="<?php echo base_url('assets/images/wow-tag-icon-1.png'); ?>" alt="user" /><a href="#">Wowtags</a></li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="<?php echo base_url('eventhubb/get_eventhubb'); ?>"><img src="<?php echo base_url('assets/images/event-hubb-icon.png'); ?>" alt="user" />Event Hubb</a></div>
            </li>
            <li><img src="<?php echo base_url('assets/images/profile-icon.png'); ?>" alt="user" /><a href="#">Event Organizer</a></li>
             <li><img src="<?php echo base_url('assets/images/album-icon.png'); ?>" alt="user" /><a href="#">My Coupons</a></li>

            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Event Pages</h5>
             
             <li>
              <div style="margin-left:0; text-align:left;">
                <a href="<?php echo base_url('Service/eventvenue_form'); ?>">
                <i class="fa fa-caret-right" style="margin-top:4px;"></i>Event Venue Form</a></div>
            </li>

            <li>
              <div style="margin-left:0; text-align:left;">
                <a href="<?php echo base_url('Service/eventvenue_admin'); ?>">
                <i class="fa fa-caret-right" style="margin-top:4px;"></i>Event Venue Admin </a></div>
            </li>

            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Craig Birthday</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Gina Catering</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Elevation 2017</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Startup 2017</a></div>
            </li>
            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Business Pages</h5>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Hebronplus</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Gina Catering</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Living Word Church</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Sharaton Event Center</a></div>
            </li>
            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Create</h5>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Create Ad</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Create Business Ad</a></div>
            </li>
          </ul>
          <!--news-feed links ends--> 
          
        </div>
        <!--chat block ends--> 
      </div>

        <!-- center part for event feed -->

      <div class="col-md-6"> 
        
            <div class="create-post" style="background-color: #fff; padding:10px; border-radius:5px;">
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="form-group" style="display:-webkit-inline-box; width:90%;">
                            
                            <?php if(!is_null($this->session->userdata('personal_image')))
                              { ?>

                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" />
                              <?php } else { ?>
                              <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                            <?php } ?>
                              <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Share your thoughts.." style="margin-left:10px;"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                      <div class="tools pull-right">
                        <button class="btn btn-primary pull-right" style="margin-top:3px;">Publish</button>
                      </div>
                      <div class="tools pull-right">
                        <ul class="publishing-tools list-inline">
                          <li><a href="#"><img src="<?php echo base_url('assets/images/create-event-icon-2.png'); ?>" alt="user" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url('assets/images/image-icon.png'); ?>" alt="user" /></a></li>
                          <li><a href="#"><img src="<?php echo base_url('assets/images/video-icon.png'); ?>" alt="user" /></a></li>
                        </ul>
                      </div>
                    </div>

                    <!-- start today end with shows array_slice 4 event name -->
                  <div class="todayevent_show"> 
                    <div class=" col-md-12">
                      <h3 style="font-size:14px; font-weight:bold; color: #333;">Today Events</h3>
                    </div>
                                 
                                    <?php   
                                      if(isset($todayfeed))  
                                      {                                           
               
                                        foreach (array_slice($todayfeed, 0, 3) as $todayfeeds) 
                                          {

                                    ?>

                            <div class="col-md-4">    
                             <div class="col-md-12" style="margin-bottom: 15px; ">
                                <div class="pull-left" style="line-height:15px; width: 25%; margin-right: 10%;">
                                  <?php
                                      if(isset($todayfeeds->userid->personalimage))
                                      {
                                    ?>
                                  <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $todayfeeds->userid->personalimage; ?>" alt="user" class="profile-photo1" />
                                  <?php } else { ?>
                                   <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo1" /> 
                                   <?php } ?>
                                </div>

                                <div class="pull-left" style="line-height:15px; width: 5%;">
                                     <img src="../assets/images/wow-black-small.png"> 
                                </div> 

                                <div class="pull-left" style="line-height:15px; width: 60%;">
                                  <strong><a href="#" data-toggle="modal" data-target=".modal-2" >
                                    
                                    <?php if(isset($todayfeeds->eventtitle)) { echo $todayfeeds->eventtitle; } else { echo " "; } ?></a></strong><br>
                                  <span style="font-size:11px;">
                                    <?php if(isset($todayfeeds->runtimefrom))
                                     { 
                                          $timestamp = strtotime($todayfeeds->runtimefrom);
                                          $timestamp1 = strtotime($todayfeeds->runtimeto);
                                          echo date('h:i A', $timestamp).'-'.date('h:i A', $timestamp1);                                          

                                      } ?>
                                        
                                  </span>
                                </div>
                              </div>
                            </div>                            

                               <?php } } ?>                             
                    
                    </div>

                    <!-- end today end with shows array_slice 4 event name -->

                    <!-- start  today end with shows all  event name -->
                   
                      <div class=" col-md-12">
                        <div class=" col-md-12" style="display: none;" id="today_txt">
                            <h3 style="font-size:14px; font-weight:bold; color: #333;">Today Events</h3>
                        </div>
                   
                    <div class="panel1">

                        <?php   
                                      if(isset($todayfeed))  
                                      {                    
                                        foreach ($todayfeed as $todayfeeds) 
                                          {

                                    ?>
                                
                             <div class="col-md-4" style="margin-bottom: 15px; ">
                                <div class="pull-left" style="line-height:15px; width: 25%; margin-right: 10%;">
                                  <?php
                                      if(isset($todayfeeds->userid->personalimage))
                                      {
                                    ?>
                                  <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $todayfeeds->userid->personalimage; ?>" alt="user" class="profile-photo1" />
                                  <?php } else { ?>
                                   <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo1" /> 
                                   <?php } ?>
                                </div>

                                <div class="pull-left" style="line-height:15px; width: 5%;">
                                     <img src="../assets/images/wow-black-small.png"> 
                                 </div> 
                                <div class="pull-left" style="line-height:15px; width: 60%;">
                                  <strong><a href="#" data-toggle="modal" data-target=".modal-2" >
                                    
                                    <?php if(isset($todayfeeds->eventtitle)) { echo $todayfeeds->eventtitle; } ?></a></strong><br>
                                  <span style="font-size:11px;">
                                    <?php if(isset($todayfeeds->runtimefrom))
                                     { 
                                          $timestamp = strtotime($todayfeeds->runtimefrom);
                                          $timestamp1 = strtotime($todayfeeds->runtimeto);
                                          echo date('h:i A', $timestamp).'-'.date('h:i A', $timestamp1);                                          

                                      } ?>
                                        
                                  </span>
                                </div>
                              </div>
                                                         

                               <?php } } ?>                



                     </div>
                      <div class="flip1 col-md-12 col-sm-12 text-center">View all</div>
                  </div>

                  <!-- end today end with shows all event name -->

                </div>
            </div>

              <h1 style="text-align: center;"> No Events listed by your friends</h1>

      </div>



<div class="col-md-3 static">
      <div id="sticky-sidebar" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:6px 0 0 0; border-radius:5px;">
        <ul class="nav-news-feed">
          <div class="row" style="margin:15px 0 5px 0;">
            <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;">
              <a href="<?php echo base_url('Service/eventvenue_landing'); ?>" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-birthday-cake"></i> Book Next Event Venue</a></div>
          </div>
          <div class="row" style="margin:5px 0;">
            <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="<?php echo base_url('service/service_provider'); ?>" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-users"></i> Search Service Provider</a></div>
          </div>
          <div class="row" style="margin:5px 0;">
            <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-location-arrow"></i> Search for Nearby Events</a></div>
          </div>
        </ul>
        <ul class="nav-news-feed">
          <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Suggested Groups</h5>
          <div class="col-md-12" style="margin:0 0 15px 0;">
            <div class="row"><img src="<?php echo base_url('assets/images/post-images/14.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
            <div class="row">Beautiful World Events<br>
              170,173 members</div>
            <div class="row"><a href="#" class="text-pink"><span style="font-size:15px;"><i class="fa fa-arrow-circle-o-right"></i> Join</span></a></div>
          </div>
          <div class="col-md-12" style="margin:0 0 15px 0;">
            <div class="row"><img src="<?php echo base_url ('assets/images/post-images/2.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
            <div class="row">Basic Magic Show<br>
              200,024 members</div>
            <div class="row"><a href="#" class="text-pink"><span style="font-size:15px;"><i class="fa fa-arrow-circle-o-right"></i> Join</span></a></div>
          </div>
        </ul>
        <!--news-feed links ends-->
        <ul class="nav-news-feed">
          <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Suggested Posts</h5>
          <div class="col-md-12" style="margin:0 0 15px 0;">
            <div class="row"><img src="<?php echo base_url ('assets/images/post-images/1.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
            <div class="row">Beautiful Quotes World<br>
              170,173 members</div>
            <div class="row"><a href="#" class="text-pink"><span style="font-size:15px;"><i class="fa fa-arrow-circle-o-right"></i> Join</span></a></div>
          </div>
        </ul>
        <!--news-feed links ends-->
        <ul class="nav-news-feed">
          <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px;">Trending</h5>
          <li><i class="fa fa-bolt"></i>
            <div><a href="#">Western Desert of Egypt</a> <br>
              Cairo (AFP) - At least 35 Egyptian troops and police officers were killed in clashes.. <a href="#" style="text-decoration:none;">Read more..</a></div>
          </li>
          <li><i class="fa fa-bolt"></i>
            <div><a href="#">Western Desert of Egypt</a> <br>
              Cairo (AFP) - At least 35 Egyptian troops and police officers were killed in clashes.. <a href="#" style="text-decoration:none;">Read more..</a></div>
          </li>
          <li><i class="fa fa-bolt"></i>
            <div><a href="#">Western Desert of Egypt</a> <br>
              Cairo (AFP) - At least 35 Egyptian troops and police officers were killed in clashes.. <a href="#" style="text-decoration:none;">Read more..</a></div>
          </li>
        </ul>
        <!--news-feed links ends-->
        <ul class="nav-news-feed">
          <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Sponsored Ads</h5>
          <div class="col-md-12" style="margin:0 0 15px 0;">
            <div class="row"><img src="<?php echo base_url('assets/images/post-images/15.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
            <div class="row">Summer Party Celebration<br>
              170,173 members</div>
            <div class="row"><a href="#" class="text-pink"><span style="font-size:14px;"><i class="fa fa-arrow-circle-o-right"></i> Know more</span></a></div>
          </div>
          <div class="col-md-12" style="margin:0 0 15px 0;">
            <div class="row"><img src="<?php echo base_url('assets/images/post-images/16.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
            <div class="row">Fabulous Events<br>
              170,173 members</div>
            <div class="row"><a href="#" class="text-pink"><span style="font-size:14px;"><i class="fa fa-arrow-circle-o-right"></i> Know more</span></a></div>
          </div>
        </ul>
        <!--news-feed links ends--> 
      </div>
    </div>
    <!-- start RSVP model popup -->
       
              
             
              
 <!-- end RSVP model popup --> 
    
    <!-- Newsfeed Common Side Bar Right
          ================================================= -->
    

  </div>

<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="post-content">
                      <div class="post-container" style="padding-bottom:20px;">
                        <div class="post-detail">
                                          <div class="user-info">
                                              <h3>RSVP Register</h3>
                                              <span style="color:#333; font-size: 15px">Please give the following information to edit</span> 
                                          </div>
                                          <div class="line-divider"></div>
                          <div class="user-info">
                            <div class="row" style="padding:10px;">
                                               <div class="alert alert-success" id="rsvp_success" role="alert" style="display:none;" >Successfully Register
                                               </div>
                                                <!-- this form submit rsvp -->
                              <form action="<?php echo base_url('event/rsvp_update/'.$feeds->_id); ?>" method="post" class="register_rsvp" class="form-inline">
                                  <div class="row">
                                         <input type="hidden" name="bookId">
                                    <div class="col-md-12" style="margin: 10px 0px;">
                                        <div class="form-group col-xs-12 pull-left" style="width:60%; margin-top: 3px;">
                                            <label for="date-to">Number of person attending: </label>
                                            <select name="rsvp" class="form-group selectpicker" style="width: 30%; padding-left: 15px; border-radius: 5px; margin-left: 10px;">
                                              <option value="">Select </option>
                                              <option value="1">1 </option>
                                              <option value="2">2 </option>
                                              <option value="3">3 </option>
                                              <option value="4">4 </option>
                                              <option value="5">5 </option>
                                              <option value="6">6 </option>
                                              <option value="7">7 </option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div style="width:100%;" class="text-center">
                                      <input type="submit" value="Register" class="btn btn-primary" style="width:140px;">
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

</div>
</div>



 <!-- share your through model popup -->

           <div class="modal fade modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">              
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3> <img src="../assets/images/wow-pink.png"> Ramya Birthday</h3>
                                 
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                           
                  <form action="#" method="post"  id="personal_update_aboutme" class="form-inline">
                           
                            <div class="row" >                              
                               <div class="col-md-12 col-sm-12">
                        <div class="col-md-2">
                            
                            <?php if(!is_null($this->session->userdata('personal_image')))
                              { ?>

                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" />
                              <?php } else { ?>
                              <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                            <?php } ?>
                            
                        </div>
                        <div class="col-md-10">
                              <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Share your thoughts.." style="margin-left:10px; height:150px;"></textarea>
                            </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                      <div class="col-md-8">
                        <div class="tools text-right" style="margin-top:15px;">
                          <button class="btn btn-primary pull-right" style="margin-top:3px;">Publish</button>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="tools text-center" style="margin-top:20px;">
                          <ul class="publishing-tools list-inline">
                            <li><a href="#"><img src="<?php echo base_url('assets/images/create-event-icon-2.png'); ?>" alt="user" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url('assets/images/image-icon.png'); ?>" alt="user" /></a></li>
                            <li><a href="#"><img src="<?php echo base_url('assets/images/video-icon.png'); ?>" alt="user" /></a></li>
                          </ul>
                        </div>
                      </div>
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
                   <!-- end share your through model popup -->

<!-- Scripts
    ================================================= --> 
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery-3.2.1.minjs.js')?>" ></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.countdown.min.js')?>" ></script> <!--countdown -->

<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.appear.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/masonry.pkgd.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/videopopup.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/jquery.timeago.js')?>" ></script> <!--timeago library -->


<!-- search suggestion box plugin --> 

<script>  


$('.countdown').countdown('2018/04/02', function(event) {
        $(this).html(event.strftime('%H:%M:%S'));
      });



  $(document).ready(function(){
            // find the input fields and apply the time select to them.
            jQuery("time.timeago").timeago();
        });

$(document).ready(function(){               //show view more commends
    $(".flip").click(function(){
        $(".panel").slideToggle("slow");
    });
});  

 //commend show and hide

$(document).ready(function(){
    $(".flip").click(function(){
      $(".commend_show").hide();
  });
}); 

 //show view more today event

$(document).ready(function(){              
    $(".flip1").click(function(){
        $(".panel1").slideToggle("slow");
    });
});  

 //today event  show and hide

$(document).ready(function(){
    $(".flip1").click(function(){
      $(".todayevent_show").hide();
      $("#today_txt").show();
  });
}); 


  //user_id could pass to model popup using popup id
$('#modal-1').on('show.bs.modal', function(e) 
  {
    var bookId = $(e.relatedTarget).data('id');
    $(e.currentTarget).find('input[name="bookId"]').val(bookId);
    });

  //video controls hide and show mouse hover  
    $('.myvideo').hover(function toggleControls() {  
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
})

//search option form submit
var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(".search").keyup(function() 
      {
              
       var searchbox = $('#searchbox').val();
       var dataString = 'searchword='+ searchbox;
      if(searchbox=='')
        {
          $('#display1').html("");
        }
        else
        {
        $.ajax({

                url : base_url+'event/search/'+searchbox,
                context:this,
                type: 'POST',
                //data: dataString,
                processData: false,
                contentType: false,
                // dataType:'json',
                error: function(xhr,status,error)
                {   
                   alert(xhr.responseText);
                },              
                
                success: function(response)
                {
                   $('#display1').html(response);
                }

            });
       }
    }); 
   
});

//wowsome like form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".wowsome_form", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);
      
        $.ajax({
                url : url,
                context:this,
                method: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                dataType:'json',
                context:this,   //here we use this function so declare here
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },              
                
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                     $(this).find('input[id=wow_increment]').val(response.message);
                      // var wow = '.wow_increment';
                      //  $(wow).val(response.message);
                        // alert(this.test);                                       
                    }else 
                     {                    
                        swal("Sorry!", "somethink wrong try again !", "error");
                     }
                }

            });
        });
});

//rsvp  form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".register_rsvp", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);
      
        $.ajax({
                url : url,
                context:this,
                method: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                dataType:'json',
                context:this,   //here we use this function so declare here
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },              
                
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                     $('#rsvp_success').show(); //success notification id
                     window.location.href = base_url + 'event/get_eventfeed';
                                                         
                    }else 
                     {                    
                        swal("Sorry!", "somethink wrong try again !", "error");
                     }
                }

            });
        });
 });


//profile third party view  form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("click", ".profile_form", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);
      
        $.ajax({
                url : url,
                context:this,
                method: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                dataType:'json',
                context:this,   //here we use this function so declare here
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },              
                
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                     // $(this).find('input[id=wow_increment]').val(response.message);
                      // var wow = '.wow_increment';
                      //  $(wow).val(response.message);
                        // alert(this.test);                                       
                    }else 
                     {                    
                        swal("Sorry!", "somethink wrong try again !", "error");
                     }
                }

            });
        });
});
   
 //magnific-popup image shows

$('.gallery').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});

</script>
</body>
</html>
