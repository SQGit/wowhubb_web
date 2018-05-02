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
#footer {
	background: #fff;
	position: relative;
	top: 0px;
}
#page-contents{
  padding: 10px 0 50px 25px;
  background-color:#fff;
  border-radius:5px;
}
#imageUpload {
	display: none;
}
#profileImage {
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
    margin: 50px auto 0!important;
}
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
    <div class="timeline-cover"> <img src="../assets/images/covers/1.jpg" style="background-size:cover; width:100%; max-height:300px;" alt=""/>; 
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info">
              <form id="profile_img" action="<?php echo base_url('profile/profile_img_upload'); ?>" method="post" enctype="multipart/form-data">
                <?php 
                   if(isset($img))
                   {
                      ?>
                <img  id="profileImage" src="http://104.197.80.225:3010/wow/media/personal/<?php echo $img; ?>" class="profile-pic img-responsive profile-photo" />
                <?php }

                 else{ 
                       
                       ?>
                <img  class="profile-pic img-responsive profile-photo"  id="profileImage" src="<?php echo base_url('assets/images/album/avatar_male.png')?>">;
                <?php
                       } 
                ?>
                <input class="file-upload" id="imageUpload" type="file" name="profile_img" capture>
              </form>
            </div>
          </div>
          <div class="col-md-9" >
            <div class="profile-info-1">
              <h3 style="color:#fff;">Emeka Ike</h3>
              <p style="color:#fff;" class="text-muted">Managing Director</p>
            </div>
            <ul class="list-inline profile-menu">
              <li><a href="timeline.html" class="active">Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get') ?>" >Interests</a></li>
              <li><a href="timeline-album.html">Photos</a></li>
              <li><a href="timeline-friends.html">Eventhubb</a></li>
              <li><a href="timeline-friends.html">Wowtag</a></li>
            </ul>
            <ul class="follow-me list-inline">
              <li>102 Connections</li>
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
            <li><a href="timline.html">About</a></li>
            <li><a href="timeline-about.html" class="active">Interests</a></li>
            <li><a href="timeline-album.html">Photos</a></li>
            <li><a href="timeline-friends.html">Eventhubb</a></li>
            <li><a href="timeline-friends.html">Wowtag</a></li>
          </ul>
          <button class="btn-primary">Add Friend</button>
        </div>
      </div>
      <!--Timeline Menu for Small Screens End--> 
      
    </div>
    <div id="page-contents" style="border:1px solid #e6e6e6;">
      <div class="row">
        <div class="col-md-12">
          <div id="exTab2" >
            <ul class="nav nav-tabs">
              <li class="active"> <a  href="#1" data-toggle="tab">Personal Profile</a> </li>
              <li><a href="#2" data-toggle="tab">Professional Profile</a> </li>
            </ul>
            <div class="tab-content ">
              <div class="tab-pane active" id="1" style="margin-top: 20px;">
                <div class="row">
                  <div class="col-md-9">
                    <div class="tab-pane active" id="a">
                      <div class="form-wizard col-md-12"  > 
                        <!-- Edit Work and Education
              ================================================= -->
                        <div class="edit-profile-container">
                          <div class="block-title"> 
                            <!--<h4 class="grey"><i class="fa fa-user"></i>Personal Profile</h4>--> 
                          </div>
                          <div class="edit-block" style="margin-bottom: 0px;">
                          
                            <div class="row">
                              <div class="col-md-12">
                                <div class="col-md-1 text-right"><i class="fa fa-envelope fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Email</span> <br>
                                 <?php echo $this->session->userdata('email'); ?></div>
                              </div>                               
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-child fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">About Me</span> <br>
                                 <?php if(isset($profile->aboutme)){echo $profile->aboutme;} else{echo "";} ?></div>                                 
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-1" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-map fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Place You Live</span> <br>
                                 <?php if(isset($profile->place)){echo $profile->place;} else{echo "";} ?></div>                                 
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-1" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-gift fa-3x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Birthday</span> <br>
                                 <?php if(isset($profile->birthday)){echo $profile->birthday;}else{echo "";} ?></div>
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-1" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-users fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Weddings</span> <br>
                                  <?php if(isset($profile->wedding)) {echo $profile->wedding;} else{echo "";} ?></div>
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-1" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-calendar fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Social Functions</span> <br>
                                  <?php if(isset( $profile->socialfunction)) {echo $profile->socialfunction; } else{echo "";}?></div>
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-1" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                             <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa  fa-star fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Parties</span> <br>
                                  <?php if(isset( $profile->parties)) {echo $profile->parties; } else{echo "";}?></div>
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-1" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-heart fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Marital Status</span> <br>
                                 
                                  <?php if(isset($profile->maritalstatus)){echo $profile->maritalstatus; } else{echo "";} ?>
                                 </div>
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-1" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              
                            </div>                          
                            </div>                        
                           
                        </div>
                      </div>
                    </div>
                  </div>
 <!-- personal model popup -->
           <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">                  
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3>Edit Personal Profile</h3>
                                 <span style="color:#333; font-size: 15px">Please give the following information to edit</span>
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                              
                    <form action="<?php echo base_url('profile/personal_update'); ?>" method="post"  id="personal_update" class="form-inline">                            
                           
                            <div class="row" style="margin-top:15px;">
                              <div class="form-group col-xs-6">
                                <label for="date-from">About Me</label>
                                <input  type="text" class="form-control input-group-lg" name="about_me" title="Enter a Date" value="<?php if(isset($profile->aboutme)){echo $profile->aboutme;}else{echo "";} ?>" />
                              </div>
                              <div class="form-group col-xs-6">
                                <label for="date-to" class="">Place You Live</label>
                                <input id="party" type="text" class="form-control input-group-lg"  name="place" title="Enter a Date" value="<?php if(isset($profile->place)) {echo $profile->place; } else{echo "";} ?>" />
                              </div>
                            </div>
                            <div class="row" style="margin-top:15px;">
                              <div class="form-group col-xs-6">
                                <label for="date-from">Birthday</label>
                                <input id="birthday" type="text" class="form-control input-group-lg" name="birthday" title="Enter a Date" value="<?php if(isset($profile->birthday)){echo $profile->birthday;}else{echo "";} ?>" />
                              </div>
                              <div class="form-group col-xs-6">
                                <label for="date-to" class="">Weddings</label>
                                <input id="wedding" type="text"  class="datepicker form-control input-group-lg"  name="wedding" title="Enter a Date" value="<?php if(isset($profile->wedding)) {echo $profile->wedding;} else{echo "";} ?>" />
                              </div>
                            </div>
                            <div class="row" style="margin-top:15px;">
                              <div class="form-group col-xs-6">
                                <label for="date-from">Social Functions</label>
                                <input id="socialfunction" type="text" class="datepicker form-control input-group-lg"  name="social" title="Enter a Date" value="<?php if(isset( $profile->socialfunction)) {echo $profile->socialfunction; } else{echo "";}?>" />
                              </div>
                              <div class="form-group col-xs-6">
                                <label for="date-to" class="">Parties</label>
                                <input id="party" type="text" class="form-control input-group-lg"  name="party" title="Enter a Date" value="<?php if(isset($profile->parties)) {echo $profile->parties; } else{echo "";} ?>" />
                              </div>
                            </div>
                            <div class="row" style="margin-top:15px;">
                              
                              <div class="form-group col-xs-6">
                                <label for="date-to" class="">Marital Status</label>
                                <select name="marital_status" class="form-control" id="types" >          
                                  <option value="select"><?php if(isset($profile->maritalstatus)){echo $profile->maritalstatus; } else{echo "";} ?>  </option>
                                  <option value="single">Single </option>
                                  <option value="married">Married </option>
                                </select>
                              </div>
                            </div>
                            <div class="row" style="margin-top:15px;" >
                              <div class="form-group col-xs-6" style="margin-top: -15px;">
                                <label for="date-from"></label>
                                <input type="text" id="other" class="form-control input-group-lg" name="other" style="display: none;" placeholder="Married to" />
                              </div>
                            </div>
                            <div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Save Changes" class="btn btn-primary" style="width:140px;">
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
                   <!-- end personal model popup -->


                  <div class="col-md-3 static"> 
                    
                    <!--Sticky Timeline Activity Sidebar-->
                    <div id="sticky-sidebar">
                      <h4 class="grey"><i class="fa fa-search"></i> Search for Event</h4>
                      <div class="feed-item">
                        <div class="live-activity"> <span><a href="#" style="font-size:16px;">Event Venues</a></span>
                          <p class="text-muted">All Event Venues</p>
                        </div>
                      </div>
                      <div class="feed-item">
                        <div class="live-activity"> <span><a href="#" style="font-size:16px;">Event Service Providers</a></span>
                          <p class="text-muted">Service Providers</p>
                        </div>
                      </div>
                      <div class="feed-item">
                        <div class="live-activity"> <span><a href="#" style="font-size:16px;">Event Tickets</a></span>
                          <p class="text-muted">Browse all</p>
                        </div>
                      </div>
                      <div class="feed-item">
                        <div class="live-activity"> <span><a href="#" style="font-size:16px;">!WOW</a></span>
                          <p class="text-muted">Upcoming Events</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end with personal profile tab -->
              
              <div class="tab-pane" id="2" style="margin-top: 20px;">
                <div class="row">
                   <div class="col-md-9">
                    <div class="tab-pane active" id="a">
                      <div class="form-wizard col-md-12"  > 
                        <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                  <div class="block-title"> 
                            <!--<h4 class="grey"><i class="fa fa-user"></i>Personal Profile</h4>--> 
                          </div>
                      <div class="edit-block" style="margin-bottom: 0px;">
                            <div class="row">
                                <div class="col-md-11">
                                  <div class="col-md-1 text-right"><i class="fa fa-briefcase fa-2x" style="color:#797979;"></i></div>
                                  <div class="col-md-11"><span style="font-size:18px;">Designation</span> <br>
                                    <?php if(isset($profile->designation)){echo $profile->designation;} else{echo "";} ?></div>
                                </div>
                                 <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-2" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                                <div class="col-md-12">
                                  <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-graduation-cap fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Education</span> <br>
                                  <?php                                  
                                   foreach ($profile->education as $profiles) {
                                      echo $profiles;
                                   } ?>
                                     </div>
                                    
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-2" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-desktop fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Work Experience</span> <br>
                                 <?php                                  
                                   foreach ($profile->workexperience as $profiles) {
                                      echo $profiles;
                                   } ?></div>
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-2" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-book fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Certifications/Skills</span> <br>
                                 <?php                                  
                                   foreach ($profile->certification as $profiles) {
                                      echo $profiles;
                                   } ?></div>
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-2" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>
                              <div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-11">
                                <div class="col-md-1 text-right"><i class="fa fa-user fa-2x" style="color:#797979;"></i></div>
                                <div class="col-md-11"><span style="font-size:18px;">Volunteer Profile</span> <br>
                                 <?php                                  
                                   foreach ($profile->volunteer as $profiles) {
                                      echo $profiles;
                                   } ?></div>
                              </div>
                               <div class="col-md-1" style="margin-top: 15px;">                        
                                  <a href="#" data-toggle="modal" data-target=".modal-2" > <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" height=30px; width=30px;> </a>
                               </div>                              
                            </div>        
                  </div>                      
                          
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- professional model popup -->
           <div class="modal fade modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">                  
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3>Edit Professional Profile</h3>
                                 <span style="color:#333; font-size: 15px">Please give the following information to edit</span>
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                              
               <form action="<?php echo base_url('profile/professional_update'); ?>" method="post"  id="professional_update" class="form-inline">
                            <div class="row">
                              <div class="form-group col-xs-6">
                                <label for="date-from">Designation</label>
                                <input id="date-from" class="form-control input-group-lg" type="text" name="designation" value="<?php echo $profile->designation; ?>"  />
                              </div>
                              <div class="form-group col-xs-6">
                                <label for="date-to" >Education</label>
                                <input id="date-from" class="form-control input-group-lg" type="text" name="education[]" title="Enter a Date"  value="<?php                foreach ($profile->education as $educations) {
                                      echo $educations;
                                   } ?>" />
                              </div>
                            </div>
                           
                            <div class="row" style="margin-top:15px;">
                              <div class="form-group col-xs-6">
                                <label for="date-from">Work Experience</label>
                                <input id="birthday" type="text" class="form-control input-group-lg" name="work_exp[]" title="Enter a Date" value="<?php                  foreach ($profile->workexperience as $workexperiences) {
                                      echo $workexperiences;
                                   } ?>" />
                              </div>
                              <div class="form-group col-xs-6">
                                <label for="date-to" class="">Certifications/Skills</label>
                                <input id="wedding" type="text"  class="datepicker form-control input-group-lg"  name="certification[]" title="Enter a Date" value="<?php                                  
                                   foreach ($profile->certification as $certifications) {
                                      echo $certifications;
                                   } ?>" />
                              </div>
                            </div>     
                            <div class="row" style="margin-top:15px;">
                              <div class="form-group col-xs-6">
                                <label for="date-from">Volunteer Profile</label>
                                <input id="birthday" type="text" class="form-control input-group-lg" name="volunteer[]" title="Enter a Date" value="<?php                 foreach ($profile->volunteer as $volunteers) {
                                      echo $volunteers;
                                   } ?>" />
                              </div>
                            </div>            
                            <div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Save Changes" class="btn btn-primary" style="width:140px; margin-top: 20px;">
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
                   <!-- end professional model popup -->
                  <div class="col-md-3 static">                     
                    <!--Sticky Timeline Activity Sidebar-->
                    <div id="sticky-sidebar">
                      <h4 class="grey"><i class="fa fa-search"></i> Search for Event</h4>
                      <div class="feed-item">
                        <div class="live-activity"> <span><a href="#" style="font-size:16px;">Event Venues</a></span>
                          <p class="text-muted">All Event Venues</p>
                        </div>
                      </div>
                      <div class="feed-item">
                        <div class="live-activity"> <span><a href="#" style="font-size:16px;">Event Service Providers</a></span>
                          <p class="text-muted">Service Providers</p>
                        </div>
                      </div>
                      <div class="feed-item">
                        <div class="live-activity"> <span><a href="#" style="font-size:16px;">Event Tickets</a></span>
                          <p class="text-muted">Browse all</p>
                        </div>
                      </div>
                      <div class="feed-item">
                        <div class="live-activity"> <span><a href="#" style="font-size:16px;">!WOW</a></span>
                          <p class="text-muted">Upcoming Events</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Day 3 --> 
              
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
<script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 

</body>
</html>
