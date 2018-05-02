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
     <!-- magnific-popup image-->
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/magnific-popup.css')?>" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
    <!-- calender shows library -->
    <link href="<?php echo base_url ('assets/css/fullcalendar.min.css') ?>" rel='stylesheet' />
    <link href="<?php echo base_url ('assets/css/fullcalendar.print.min.css') ?>" rel='stylesheet' media='print' />

  <style type="text/css">


  .form-group i {
  color: #9E9E9E!important;
  font-size: 16px!important;
  right: 15px!important;
  position: absolute!important;
  top: 15px!important;
}
  
  .menu form .form-group i.icon
  {
	  top: 4px!important;
  }
.timeline-nav-bar ul.follow-me {
  margin: 0;
  position: absolute;
  right: 15px;
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
#calendar {
    width: 100%;
    margin: 0 auto;
  }
video {
    position: relative; 
    top: 15%;
    left: 0;
    width: 100%;
    opacity: 1 !important;
}
/*here start with multiple email  */
.multipleInput-container {
     border:1px #999 solid;
     padding:1px;
     padding-bottom:0;
     cursor:text;
     font-size:15px;
     width:100%;
  border-radius: 6px;
  margin-top: 20px;
}
 
.multipleInput-container input {
    outline: none;
    font-size:15px;
    clear:both;
    height:40px;
    border:0;
    margin-bottom:1px;
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
</style>
</head>
  
<body>

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

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
     <div class="timeline-cover">     
              <?php 
                $cover = $this->session->userdata('cover_img');
                if(isset($cover))
                   {
                  ?>
                <img  src="http://104.197.80.225:3010/wow/media/personal/<?php echo $cover; ?>"  style="background-size:cover; width:100%; max-height:300px;"/>
                <?php }   else{   ?>
              <img src="<?php echo base_url('assets/images/covers/1.jpg')?>" style="background-size:cover; width:100%; max-height:300px;" >
                <?php }  ?>
                    
      <!--Timeline Menu for Large Screens-->

      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info">
              
                <?php 

                $img= $this->session->userdata('image');
                   if(!is_null($this->session->userdata('personal_image')))
                   {
                      ?>
                <img id="profileImage" src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" class="profile-pic img-responsive profile-photo" />
                <?php }

                 else{ 
                       
                       ?>
                <img  class="profile-pic img-responsive profile-photo"  id="profileImage" src="<?php echo base_url('assets/images/album/avatar_male.png')?>">;
                <?php
                       } 
                ?>
               
             
            </div>
          </div>

          <div class="col-md-9" >
            <div class="profile-info-1">
              <h3 style="color:#fff;"><?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?> </h3>
              <p style="color:#fff;" class="text-muted"><?php echo $this->session->userdata('designation'); ?></p>
            </div>
            <ul class="list-inline profile-menu">
              <li><a href="<?php echo base_url ('event/profile_get_eventfeed') ?>" class="active">Event Feed</a></li>
              <li><a href="<?php echo base_url('Profile/profile_get'); ?>" > Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get') ?>" > Interests</a></li>
              <li><a href="#">Friend Connections</a></li>
              <li><a href="#">Eventhubb</a></li>
              <li><a href="#">Photos</a></li>
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
            <ul class="list-inline profile-menu">
              <li><a href="<?php echo base_url ('home/profile_update'); ?>" >Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get'); ?>" class="active">Interests</a></li>
              <li><a href="timeline-album.html">Photos</a></li>
              <li><a href="timeline-friends.html">Eventhubb</a></li>
              <li><a href="timeline-friends.html">Wowtag</a></li>
            </ul>
          <button class="btn-primary">Add Friend</button>
        </div>
      </div>
      
      <!--Timeline Menu for Small Screens End--> 
      
    </div>
<div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 15px; margin-top:15px;">
      <div class="row">
   <div class="col-md-3" style="width:20%;">

        <div class="profile-card" style="margin-left:10px;">

            <div style="width:100%; float:left;">
              <?php 
                    if(!is_null($this->session->userdata('personal_image')))
              { ?>                      
              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" />
              <?php }  else { ?> 
               
                 <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo" />
                 <?php } ?>
                <span class="text-white" style="margin-top:5px; font-size:17px;"><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?>        
                </span>

                    <div style="margin-left:65px;">
                        <?php 
                           if(!is_null($this->session->userdata('designation')))
                           { echo $this->session->userdata('designation');  }
                            else { echo " ";} 
                        ?>                              
                    </div>
             </div>

          <div style="font-size:20px; color:#fff; margin-top:-20px; width:100%; float:right; text-align:right;"><a href="#"> &nbsp;&nbsp;<i class="icon ion-arrow-right-b" style="font-size:28px; color:#fff;"></i></a> </div>
          <div class="row">
            <div class="col-md-12 text-center" style="font-size:17px; margin-bottom:10px; margin-top:15px;">Your Network Connections</div>
            <div class="col-md-12 text-center" style="font-size:22px; margin-bottom:150px;">128</div>
            <!-- <div class="col-md-12 text-center" style="font-size:22px; margin-bottom:10px;"><a href="#" style="font-size:15px; color:#fff;">Manage Your Connections</a></div> -->
          </div>
        </div>
        
      </div>


         <!-- center part for event feed -->

      <div class="col-md-6" style="width:46%;">   


      <!-- thoughts  start here -->
                  <?php                            
                        foreach ($eventfeed as $feeds)
                          {                     
                           
                              if($feeds->eventtype == 'thought')  
                                {                              
                                  // print_r($feeds);
                  ?>

        <div class="container post-content">

                <div class="row">
                      <div class="col-md-12" style="margin-top: 20px;">
                          <div class="col-md-9 user-info" >
                            <p style="font-size:13px; font-weight:bold;"> 
                              <!--<img src="../assets/images/wow-black-small.png"> 
                            Saravanan shared a link 2 hrs.--></p>
                          </div>

                      
                          <div class="col-md-3 user-info text-right">
                            <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer;">... <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#"><input type="submit" style="border: none; background: transparent;" value="Hide Post"></a>
                                </li>
                                <li><a href="#"> <input type="submit" style="border: none; background: transparent;" value="Report Post"></a></li>                               
                                    <li>
                                        <form class="delete_thought" action="#" method="POST">
                                          <a href="#" >                                        
                                            <input type="submit" style="border: none; background: transparent; margin-left: 20px; color: #000;" value="Delete Post">
                                          </a>
                                        </form>
                                    </li>

                              </ul>
                            </div>
                          </div>
                      </div>

                  <div class="col-md-12" >
                          <div class="col-md-9">
                              <div class="col-md-2" style="width:20%;">
                                      <?php 
                                        if(!is_null($this->session->userdata('personal_image')))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;">                                       

                                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />                                    

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">                                
                                 
                                     <?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?> 
                                  
                                </div>

                                <p style="font-size:13px; color:#777;">
                                   <?php  if(!is_null($this->session->userdata('designation')))
                                         { echo $this->session->userdata('designation');  } else { echo " ";} ?>
                                </p> 
                                
                              </div>

                          </div>
                      <div class="col-md-12" style="margin-top:5px;">
                        <p class="text-muted"><?php if(isset($feeds->thoughtstext)) { echo $feeds->thoughtstext; } ?></p>
                      </div>
                    </div>

                      <!-- here start with cover image -->

                      <?php 
                            if(isset($feeds->thoughtsimage) && ($feeds->thoughtsimage != 'null') )
                            {
                      ?>
            
                    <div class="col-md-12" style="position: relative;">
                      
                      <div class="gallery" > <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsimage; ?>' > <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsimage; ?>" alt="post-image" class="img-responsive post-image" /> </a> </div>
                    </div>
                      <!-- here end cover image --> 
                    <?php } 
                                      
                            if(isset($feeds->thoughtsvideo) && ($feeds->thoughtsvideo != 'null') )
                            {
                      ?>
            
                    <div class="col-md-12" style="position: relative; margin-top: 20px;">
                      
                     <div class="video">
                                          <div class="col-md-12"> <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsvideo; ?>" >
                                                <video class="myvideo" controlsList="nodownload">
                                               <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsvideo; ?>" type="video/mp4">
                                               </video>
                                            </a> 
                                          </div>
                                      </div>
                    </div>

                    <?php } else { echo " ";} ?>

                 
          </div>

                      <div class="col-md-12">
                            <div  class="flip" style="font-weight:bold; color:#e91e63;">View More Comments</div>
            
                        <div class="panel">            
                                  
                             <?php 
                                if(isset($feeds->comments))
                                  {
                                    foreach($feeds->comments as $com) //here only show three commends condition
                                    {   
                             ?>
                            <div class="pull-left" style="width:10%; margin-top:6px;">
                              <?php if(isset($com->userid->personalimage)){  ?>
                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                              <?php } else { ?>
                              <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                              <?php } ?>
                            </div>
                            <div class="pull-left" style="width:90%;">
                              <div class="pull-left">
                               <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                                  <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                   ?>
                                </span>
                                <?php echo $com->comment;  ?>                            
                              </div>
                              <div class="pull-left" style="width:90%;"> Like. Reply.
                                 <span style="color:#B8B8B8;">
                                  <?php 
                                      $timestamp = strtotime($com->commentedAt);                                      
                                       $comment_date = date('Y-m-d H:i:s', $timestamp);                                
                                  ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                                 </span> 
                              </div>
                            </div>
                             <?php } } ?>
                        </div>

                      </div>          

                          <?php
          
                            if(isset($feeds->comments))
                              {
                                foreach(array_slice($feeds->comments, 0, 3) as $com) //here only show three commends condition
                                {   
                          ?>
         
                      <div class="commend_show col-md-12" style="margin-top:5px;" >
            
                          <div class="pull-left" style="width:10%; margin-top:6px;">
                            <?php if(isset($com->userid->personalimage)) {  ?>
                            <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                            <?php } else { ?>
                            <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                            <?php } ?>
                          </div>

                          <div class="pull-left" style="width:90%;">
                            <div class="pull-left"> <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                              <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                ?>
                              </span>

                              <?php   echo $com->comment;  ?>

                            </div>
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;">   <?php 
                                        $timestamp = strtotime($com->commentedAt);
                                         // echo date('D dS', $timestamp);
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                     
                               ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                               </span>
                            </div>
                 
                          </div>
            
                      </div>
       
                         <?php } } ?>
                    <!-- end comments shows here -->
        
                      <div class="row" style="margin-top:10px;">

                           <div class="col-md-12">
                                <div class="col-md-1">
                                     <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php //echo base_url('event/thought_comments/'.$feeds->_id); ?>" method="post">
                                  <div class="col-md-9">
                                      <div class="form-group">
                                           <i class="fa fa-arrow-circle-right"></i>
                                           <input type="text" name = "comments" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px; border:1px solid #ccc;" required>
                                      </div>
                                  </div>
                                  <div class="col-md-2" style="margin-top: 6px;">
                                    <input type="submit" class="btn-primary" value="Post">
                                  </div>
                                </form>
                            </div>
                      </div>

                        <div class="row" style="margin-top:0px;">
                              <div class="col-md-7">
                                  <form class="thought_wowsome" action="<?php //echo base_url('event/thought_wowsome/'.$feeds->_id); ?>" method="post">
                                        <div class="col-md-5 text-center" style="position: relative; margin-top: -3px;">
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 11px;" id="thoughtwow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:9px;">
                                            <i class="fa fa-share"></i> Shares 
                                            <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu" style="top:-300%!important;">
                                              <li><a href="#">Share post Now(friends)</a></li>
                                              <li><a href="#">Share...</a></li>
                                              <li><a href="#">Share to a page</a></li>
                                          </ul>
                                      </div>
                                  </div>

                                  <div class="col-md-3 text-center">
                                      <a class="btn text-red" style="font-size:11px;"> 
                                          <i class="fa fa-comments"></i> Comments
                                      </a> 
                                  </div>
                            </div>
                            <div class="col-md-5 text-center" style="font-size:12px;">
                              <?php echo $feeds->wowsomecount; ?> Wowsomes &nbsp;&nbsp;
                              <?php echo $feeds->commentcount; ?> Comments </div>
                        </div>                     

        </div>   

         <?php }   ?> 

     <!-- thoughts  end here -->          
           
     <!-- quick evnt start here -->
                  <?php                            
                                                
                              if($feeds->eventtype =='quick_event')  
                                {                              
                     
                  ?>


            <div class="container post-content">

                <div class="row">
                  <div class="col-md-12">
                    <div class="post-detail" style="margin-top:10px;">
                          <div class="col-md-9 user-info" >
                            <p style="font-size:13px; font-weight:bold;"> 
                              <!--<img src="../assets/images/wow-black-small.png"> 
                            Saravanan shared a link 2 hrs.--></p>
                          </div>

                          <div class="col-md-3 user-info text-right">
                            <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer;">... <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#"><input type="submit" style="border: none; background: transparent;" value="Hide Post"></a>
                                </li>
                                <li><a href="#"> <input type="submit" style="border: none; background: transparent;" value="Report Post"></a></li> 
                                <li>
                                      <form class="delete_quick_event" action="<?php echo base_url('event/quick_delete/'.$feeds->_id); ?>" method="POST">
                                          <a href="#" >                                        
                                            <input type="submit" style="border: none; background: transparent; margin-left: 20px; color: #000;" value="Delete Post">
                                          </a>
                                      </form>
                                </li>
                               
                              </ul>
                            </div>
                          </div>

                          <!--div class="col-md-12 line-divider"></div> -->
                          <div class="col-md-12 user-info text-left" style="background-color:#f5f5f5; margin:0px 0px 15px 0px; border-radius:5px;">
                            <p style="font-size:18px; font-weight:normal;  height:25px; padding-top:5px;"><a href="#" style="color:#e91e63; text-decoration:none; font-weight: bold;"><span style="font-size: 22px; font-weight: bold; text-transform:capitalize;"></span>

                               <img src="../assets/images/wow-pink.png"> 

                              <?php if(isset($feeds->eventtitle)) { echo $feeds->eventtitle; } else { echo " " ;} ?>
                              <span style="float: right;  font-size: 15px; font-weight: normal; text-transform:capitalize; color:#333; ">

                              <?php if(isset($feeds->eventcategory)){ echo $feeds->eventcategory;} else { echo " "; } ?>

                              </span></a></p>
                          </div>
                    </div>
                  </div>

                    <div class="col-md-12">
                         <div class="col-md-9">
                              <div class="col-md-2" style="width:20%;">
                                      <?php 
                                        if(!is_null($this->session->userdata('personal_image')))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;">                                       

                                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />                                    

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">                                
                                 
                                     <?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?> 
                                  
                                </div>

                                <p style="font-size:13px; color:#777;">
                                   <?php  if(!is_null($this->session->userdata('designation')))
                                         { echo $this->session->userdata('designation');  } else { echo " ";} ?>
                                </p> 
                                
                              </div>

                          </div>

                      <div class="col-md-3 text-center">
                          <div style="border:1px solid #ccc; border-radius:5px 5px 0 0;">
                              <div style="background-color: #504949; height: 25px; line-height: 25px; border-radius:5px 5px 0 0;">
                                <p style="font-size: 16px; font-weight: bold; color:#fff;">
                                  <?php
                                        if(isset($feeds->eventstartdate) ) 
                                        {                                                                           
                                            echo date('M', strtotime($feeds->eventstartdate));                                                                           
                                  ?>
                                </p>
                              </div>

                              <div style="margin-top: 1px; padding:0px;">
                                <p style="color:#000; font-weight:bold; font-size:9px; margin-bottom:0;">
                                  <?php 
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      echo date('D dS', $timestamp);
                                   ?>
                                  - <span style="font-size:10px; color:#333;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->eventenddate);
                                       echo date('D dS', $timestamp);                                     
                                   ?>
                                </p>
                              </div>

                              <div style="background-color: #c8c2c2; height: 25px; line-height: 25px;">
                                <p style="font-size: 9px;  font-weight: bold; color:#000;">
                                  <?php 
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      echo date('h:i A', $timestamp);
                                      
                                   ?>
                                  - <span style="font-size:9px;  color:#000;"></span>

                                  <?php 
                                      $timestamp = strtotime($feeds->eventenddate);
                                       echo date('h:i A', $timestamp);
                                      
                                   } else { echo 'no data'; } ?>
                                  IST </p>

                              </div>

                          </div>
                      </div>

                      <div class="col-md-12" style="margin-top:5px;">
                        <p class="text-muted"><?php echo $feeds->eventdescription; ?></p>
                      </div>
                    </div>

                  <!-- here start with cover image -->
                <div class="col-md-12" style="position: relative;">

                      <div class="col-md-12" style="position: relative;">
                      
                      <div class="timeline-nav-bar1 hidden-sm hidden-xs">
                              <a href="#modal-1" data-toggle="modal" data-id='<?php echo $feeds->_id; ?>'>
                                <input type="hidden" name="userid" value="<?php echo $feeds->_id; ?>" >
                                <button class="btn-primary" style="padding: 2px 25px;">RSVP</button>
                                </a>
                        <div class="row">
                          <div class="col-md-12 text-right" >
                            <ul class="follow-me list-inline">
                              <li> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      
                                      <div class="video">
                                          <div class="col-md-12"> <a href="<?php echo $feeds->wowtagvideourl; ?>" >
                                                <video class="myvideo" controlsList="nodownload">
                                               <source src="<?php echo $feeds->wowtagvideourl; ?>" type="video/mp4">
                                               </video>
                                            </a> 
                                          </div>
                                      </div>
                    </div>
                      
                                     
                </div>


                  <!-- here end cover image --> 
                </div>

                      <div class="row" >
                        <div class=" col-md-7 pull-left" style="margin-top:5px;" >
                          <p><span style="font-weight: bold; font-size:14px; color:#333;">
                            <?php if(isset($feeds->eventname)) { echo $feeds->eventname; } else { echo " "; } ?>
                            </span>
                          
                          </p>
                        </div>
                        
                        <div class="col-md-5 pull-right" >
                          <p style="color:#333; font-weight:bold;">
                          <div style="width: 5%;" class="pull-left"> <img src="<?php echo base_url('assets/images/map-icon.png'); ?>" > </div>
                          <div style="width: 85%; line-height: 20px; text-transform: capitalize;" class="pull-right "> 
                            <?php                                      
                                        foreach ($feeds->eventvenue as $eventvenues)
                                         {                                              
                                                if(isset($eventvenues->eventvenuecity))
                                                {
                                                  echo   $eventvenues->eventvenuename." ".$eventvenues->eventvenuecity." ".$eventvenues->eventvenueaddress1." ".$eventvenues->eventvenuezipcode;
                                                }                                                                          
                                          }                                    
                            ?>

                          </div>
                          </p>
                        </div>

                        <div class="col-md-12 line-divider"></div>

                      </div>

                    <!-- comments shows here -->
          
                      <div class="col-md-12">
                            <div  class="flip" style="font-weight:bold; color:#e91e63;">View More Comments</div>
            
                        <div class="panel">            
                                  
                             <?php 
                                if(isset($feeds->comments))
                                  {
                                    foreach($feeds->comments as $com) //here only show three commends condition
                                    {   
                             ?>
                            <div class="pull-left" style="width:10%; margin-top:6px;">
                              <?php if(isset($com->userid->personalimage)){  ?>
                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                              <?php } else { ?>
                              <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                              <?php } ?>
                            </div>
                            <div class="pull-left" style="width:90%;">
                              <div class="pull-left">
                               <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                                  <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                   ?>
                                </span>
                                <?php echo $com->comment;  ?>                            
                              </div>
                              <div class="pull-left" style="width:90%;"> Like. Reply.
                                 <span style="color:#B8B8B8;">
                                  <?php 
                                        $timestamp = strtotime($com->commentedAt);                                     
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);                                     
                                  ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                                 </span> 
                              </div>
                            </div>
                             <?php } } ?>
                        </div>

                      </div>
          

                          <?php
          
                            if(isset($feeds->comments))
                              {
                                foreach(array_slice($feeds->comments, 0, 3) as $com) //here only show three commends condition
                                {   
                          ?>
         
                      <div class="commend_show col-md-12" style="margin-top:5px;" >
            
                          <div class="pull-left" style="width:10%; margin-top:6px;">
                            <?php if(isset($com->userid->personalimage)) {  ?>
                            <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                            <?php } else { ?>
                            <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                            <?php } ?>
                          </div>

                          <div class="pull-left" style="width:90%;">
                            <div class="pull-left"> <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                              <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                ?>
                              </span>

                              <?php   echo $com->comment;  ?>

                            </div>
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;">   <?php 
                                        $timestamp = strtotime($com->commentedAt);
                                         // echo date('D dS', $timestamp);
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                     
                               ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                               </span>
                            </div>
                 
                          </div>
            
                      </div>
       
                         <?php } } ?>
                    <!-- end comments shows here -->
        
                      <div class="row" style="margin-top:10px;">

                           <div class="col-md-12">
                                <div class="col-md-1">
                                     <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php echo base_url('event/comments/'.$feeds->_id); ?>" method="post">
                                  <div class="col-md-9">
                                      <div class="form-group">
                                           <i class="fa fa-arrow-circle-right"></i>
                                           <input type="text" name = "comments" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px; border:1px solid #ccc;" required>
                                      </div>
                                  </div>
                                  <div class="col-md-2" style="margin-top: 6px;">
                                    <input type="submit" class="btn-primary" value="Post">
                                  </div>
                                </form>
                            </div>
                      </div>

                        <div class="row" style="margin-top:0px;">
                              <div class="col-md-7">
                                  <form class="wowsome_form" action="<?php echo base_url('event/wowsome/'.$feeds->_id); ?>" method="post">
                                        <div class="col-md-5 text-center" style="position: relative; margin-top: -3px;">
                                            <div style="position: absolute; left: 100px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 11px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:10px;">
                                            <i class="fa fa-share"></i> Shares 
                                            <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu" style="top:-300%!important;">
                                              <li><a href="#">Share post Now(friends)</a></li>
                                              <li><a href="#">Share...</a></li>
                                              <li><a href="#">Share to a page</a></li>
                                          </ul>
                                      </div>
                                  </div>

                                  <div class="col-md-3 text-center">
                                      <a class="btn text-red" style="font-size:11px;"> 
                                          <i class="fa fa-comments"></i> Comments
                                      </a> 
                                  </div>
                            </div>
                            <div class="col-md-5 text-center" style="font-size:12px;">
                              <?php echo $feeds->wowsomecount; ?> Wowsomes &nbsp;&nbsp;
                            <?php echo $feeds->commentcount; ?> Comments </div>
                        </div>

                        
                          <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                                  <a href="#modal_email" style="cursor: pointer;" data-toggle="modal" data-id='<?php echo $feeds->_id; ?>'>
                                 Send Invite</a>                                                         
                          </div>
                         
                       
            </div>

            <?php }   ?>


    <!-- quick event end here -->

    <!-- personal evnt start here -->
                  <?php 
                        if($feeds->eventtype == 'personal_event')  

                                {                              
                                  
                  ?>

            <div class="container post-content">

                <div class="row">
                  <div class="col-md-12">
                    <div class="post-detail" style="margin-top:10px;">
                          <div class="col-md-9 user-info" >
                            <p style="font-size:13px; font-weight:bold;"> 
                              <!--<img src="../assets/images/wow-black-small.png"> 
                            Saravanan shared a link 2 hrs.--></p>
                          </div>

                          <div class="col-md-3 user-info text-right">
                            <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer;">... <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Hide post</a></li>
                                <li><a href="#">Report post</a></li>
                                <li><a href="#">Why am I seeing this?</a></li>
                              </ul>
                            </div>
                          </div>

                          <!--div class="col-md-12 line-divider"></div> -->
                          <div class="col-md-12 user-info text-left" style="background-color:#f5f5f5; margin:0px 0px 15px 0px; border-radius:5px;">
                            <p style="font-size:18px; font-weight:normal;  height:25px; padding-top:5px;"><a href="#" style="color:#e91e63; text-decoration:none; font-weight: bold;"><span style="font-size: 22px; font-weight: bold; text-transform:capitalize;"></span>

                               <img src="../assets/images/wow-pink.png"> 

                              <?php if(isset($feeds->eventtitle)) { echo $feeds->eventtitle; } else { echo " " ;} ?>
                              <span style="float: right;  font-size: 15px; font-weight: normal; text-transform:capitalize; color:#333; ">

                              <?php if(isset($feeds->eventcategory)){ echo $feeds->eventcategory;} else { echo " "; } ?>

                              </span></a></p>
                          </div>
                    </div>
                  </div>

                    <div class="col-md-12">
                          <div class="col-md-9">
                              <div class="col-md-2" style="width:20%;">
                                      <?php 

                                        if(!is_null($this->session->userdata('personal_image')))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;">                                       

                                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />                                    

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">                                
                                 
                                     <?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?> 
                                  
                                </div>

                                <p style="font-size:13px; color:#777;">
                                   <?php  if(!is_null($this->session->userdata('designation')))
                                         { echo $this->session->userdata('designation');  } else { echo " ";} ?>
                                </p> 
                                
                              </div>

                          </div>

                      <div class="col-md-3 text-center">
                          <div style="border:1px solid #ccc; border-radius:5px 5px 0 0;">
                              <div style="background-color: #504949; height: 25px; line-height: 25px; border-radius:5px 5px 0 0;">
                                <p style="font-size: 16px; font-weight: bold; color:#fff;">
                                  <?php
                                        if(isset($feeds->eventstartdate) ) 
                                      {
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      // $new_date = date('M', $timestamp);
                                       echo date('M', $timestamp);
                                      // echo  $timestamp;
                                        // echo $feeds->eventstartdate;
                                   ?>
                                </p>
                              </div>

                              <div style="margin-top: 1px; padding:0px;">
                                <p style="color:#000; font-weight:bold; font-size:10px; margin-bottom:0;">
                                  <?php 
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      echo date('D dS', $timestamp);
                                   ?>
                                  - <span style="font-size:10px; color:#333;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->eventenddate);
                                       echo date('D dS', $timestamp);
                                      // echo date('h:i A l - dS F, Y', $timestamp);
                                   ?>
                                </p>
                              </div>

                              <div style="background-color: #c8c2c2; height: 25px; line-height: 25px;">
                                <p style="font-size: 8px;  font-weight: bold; color:#000;">
                                  <?php 
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      echo date('h:i A', $timestamp);
                                      // echo $feeds->eventstartdate;
                                   ?>
                                  - <span style="font-size:10px;  color:#000;"></span>

                                  <?php 
                                      $timestamp = strtotime($feeds->eventenddate);
                                       echo date('h:i A', $timestamp);
                                      // echo date('h:i A l - dS F, Y', $timestamp);
                                   } else { echo 'no data'; } ?>
                                  IST </p>

                              </div>

                          </div>
                      </div>

                      <div class="col-md-12" style="margin-top:5px;">
                        <p class="text-muted"><?php echo $feeds->eventdescription; ?></p>
                      </div>
                    </div>

                  <!-- here start with cover image -->
            
                    <div class="col-md-12" style="position: relative;">
                      
                      <div class="gallery" > <a class="test-popup-link" href='<?php echo $feeds->coverpageurl; ?>' > <img src="<?php echo $feeds->coverpageurl; ?>" alt="post-image" class="img-responsive post-image" /> </a> </div>
                    </div>

                  <!-- here end cover image --> 
                </div>

                      <div class="row" >
                        <div class=" col-md-7 pull-left" style="margin-top:5px;" >
                          <p><span style="font-weight: bold; font-size:14px; color:#333;">
                            <?php if(isset($feeds->eventname)) { echo $feeds->eventname; } else { echo " "; } ?>
                            </span>
                          <div style="width:100%; margin-top:-15px;">
                            <?php  
                                            if(isset($feeds->donationsurl))
                                            {
                                             echo $feeds->donationsurl; 
                                            } ?>
                          </div>
                          </p>
                        </div>
                        
                        <div class="col-md-5 pull-right" >
                          <p style="color:#333; font-weight:bold;">
                          <div style="width: 5%;" class="pull-left"> <img src="<?php echo base_url('assets/images/map-icon.png'); ?>" > </div>
                          <div style="width: 85%; line-height: 20px; text-transform: capitalize;" class="pull-right "> 
                            <?php

                                       $i=0;

                                        foreach ($feeds->eventvenue as $eventvenues)
                                         {
                                              if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                              {
                                                if(isset($eventvenues->eventvenuecity))
                                                {
                                                  echo   $eventvenues->eventvenuecity;
                                                }
                                              }  
                                              $i++;                             
                                          }                                    
                                   ?>

                             </div>
                          </p>
                        </div>

                        <div class="col-md-12 line-divider"></div>

                      </div>

                      <div class="row">
                         <!-- here start event highlight part -->
                                  <div class="col-md-12">
                                        <h5 style="font-weight:bold;">Event Highlights</h5>
                                  </div>
                            <!-- here start with  event highlight video -->
                          <div class="col-md-12">
                                  <?php if(isset($feeds->wowtagvideourl)) { ?>
                                      <div class="video">
                                          <div class="col-md-4"> <a href="<?php echo $feeds->wowtagvideourl; ?>" >
                                                <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                               <source src="<?php echo $feeds->wowtagvideourl; ?>" type="video/mp4">
                                               </video>
                                            </a> 
                                          </div>
                                      </div>
                                  <?php } else { echo " "; } ?>
                              <!-- here end event highlight video --> 
                              <!-- here start event highlight image -->              
                                   
                                  <div class="gallery">
                                     <?php  if(isset($feeds->eventhighlights1thumb ) && ($feeds->eventhighlights1thumb != 'null')) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='<?php echo $feeds->eventhighlights1thumb; ?>' > 
                                               <img src="<?php echo $feeds->eventhighlights1thumb; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                             <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                           </div>
                                        <?php }  ?>      
                                  </div>               

                                  <div class="video">
                                    <?php  if(isset($feeds->eventhighlights2thumb ) && ($feeds->eventhighlights2thumb != 'null') ) { ?>
                                        <div class="col-md-4"> 
                                             <a href="<?php echo $feeds->eventhighlights2thumb; ?>" >
                                              <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                                   <source src="<?php echo $feeds->eventhighlights2thumb; ?>" type="video/mp4">
                                               </video>
                                               </a> 
                                        </div>
                                        <?php }   ?>              
                                  </div> 
                             
                          </div>                            
                      </div>

         
                    <!-- comments shows here -->
          
                      <div class="col-md-12">
                            <div  class="flip" style="font-weight:bold; color:#e91e63;">View More Comments</div>
            
                        <div class="panel">            
                                  
                             <?php 
                                if(isset($feeds->comments))
                                  {
                                    foreach($feeds->comments as $com) //here only show three commends condition
                                    {   
                             ?>
                            <div class="pull-left" style="width:10%; margin-top:6px;">
                              <?php if(isset($com->userid->personalimage)){  ?>
                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                              <?php } else { ?>
                              <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                              <?php } ?>
                            </div>
                            <div class="pull-left" style="width:90%;">
                              <div class="pull-left">
                               <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                                  <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                   ?>
                                </span>
                                <?php echo $com->comment;  ?>                            
                              </div>
                              <div class="pull-left" style="width:90%;"> Like. Reply.
                                 <span style="color:#B8B8B8;">
                                  <?php 
                                      $timestamp = strtotime($com->commentedAt);
                                       // echo date('D dS', $timestamp);
                                     
                                      // echo $comment_date;
                                     // $time_test =  local_to_gmt($timestamp);
                                       $comment_date = date('Y-m-d H:i:s', $timestamp);
                                       // echo $comment_date;
                                      // echo  date_default_timezone_get();
                                      // echo strtotime(time());

                                  ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                                 </span> 
                              </div>
                            </div>
                             <?php } } ?>
                        </div>

                      </div>
          

                          <?php
          
                            if(isset($feeds->comments))
                              {
                                foreach(array_slice($feeds->comments, 0, 3) as $com) //here only show three commends condition
                                {   
                          ?>
         
                      <div class="commend_show col-md-12" style="margin-top:5px;" >
            
                          <div class="pull-left" style="width:10%; margin-top:6px;">
                            <?php if(isset($com->userid->personalimage)) {  ?>
                            <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                            <?php } else { ?>
                            <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                            <?php } ?>
                          </div>

                          <div class="pull-left" style="width:90%;">
                            <div class="pull-left"> <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                              <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                ?>
                              </span>

                              <?php   echo $com->comment;  ?>

                            </div>
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;">   <?php 
                                        $timestamp = strtotime($com->commentedAt);
                                         // echo date('D dS', $timestamp);
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                     
                               ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                               </span>
                            </div>
                 
                          </div>
            
                      </div>
       
                         <?php } } ?>
                    <!-- end comments shows here -->
        
                      <div class="row" style="margin-top:10px;">

                           <div class="col-md-12">
                                <div class="col-md-1">
                                     <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php //echo base_url('event/comments/'.$feeds->_id); ?>" method="post">
                                  <div class="col-md-9">
                                      <div class="form-group">
                                           <i class="fa fa-arrow-circle-right"></i>
                                           <input type="text" name = "comments" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px; border:1px solid #ccc;" required>
                                      </div>
                                  </div>
                                  <div class="col-md-2" style="margin-top: 6px;">
                                    <input type="submit" class="btn-primary" value="Post">
                                  </div>
                                </form>
                            </div>
                      </div>

                        <div class="row" style="margin-top:0px;">
                              <div class="col-md-7">
                                  <form class="wowsome_form" action="<?php //echo base_url('event/wowsome/'.$feeds->_id); ?>" method="post">
                                        <div class="col-md-5 text-center" style="position: relative; margin-top: -3px;">
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 11px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-4 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:11px;">
                                            <i class="fa fa-share"></i> Shares 
                                            <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu" style="top:-300%!important;">
                                              <li><a href="#">Share post Now(friends)</a></li>
                                              <li><a href="#">Share...</a></li>
                                              <li><a href="#">Share to a page</a></li>
                                          </ul>
                                      </div>
                                  </div>

                                  <div class="col-md-2 text-center">
                                      <a class="btn text-red" style="font-size:11px;"> 
                                          <i class="fa fa-comments"></i> Comments
                                      </a> 
                                  </div>
                            </div>
                            <div class="col-md-5 text-center" style="font-size:12px;">
                              <?php echo $feeds->wowsomecount; ?> Wowsomes &nbsp;&nbsp;
                            <?php echo $feeds->commentcount; ?> Comments </div>
                        </div>
                        <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                                  <a href="#modal_email" style="cursor: pointer;" data-toggle="modal"  data-id='<?php echo $feeds->_id; ?>'>
                                 Send Invite</a>
                        </div>

                        <form action="<?php echo base_url('event/get_eventdetails'); ?>" id="event_details" method="POST">
                              <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                                  <textarea style= "display: none" id="testing" name="details"><?= json_encode($feeds); ?>
                                  </textarea>
                                  <input type="submit" style="border: none; background: transparent;" value="Click for View Details">
                              </div>
                        </form>
            </div>

            <?php }  ?>


    <!-- personal event end here -->

    <!-- professional event show here -->

                      <?php 
                              if($feeds->eventtype == 'professional_event')
                                {                              
                      ?>

            <div class="container post-content">

                <div class="row">
                  <div class="col-md-12">
                    <div class="post-detail" style="margin-top:10px;">
                          <div class="col-md-9 user-info">
                            <p style="font-size:13px; font-weight:bold;"> 
                              <img src="../assets/images/wow-black-small.png"> 
                            Saravanan shared a link 2 hrs.</p>
                          </div>

                          <div class="col-md-3 user-info text-right">
                            <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer;">... <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Hide post</a></li>
                                <li><a href="#">Report post</a></li>
                                <li><a href="#">Why am I seeing this?</a></li>
                              </ul>
                            </div>
                          </div>

                          <!--div class="col-md-12 line-divider"></div> -->
                          <div class="col-md-12 user-info text-left" style="background-color:#f5f5f5; margin:0px 0px 15px 0px; border-radius:5px;">
                            <p style="font-size:18px; font-weight:normal;  height:25px; padding-top:5px;"><a href="#" style="color:#e91e63; text-decoration:none; font-weight: bold;"><span style="font-size: 22px; font-weight: bold; text-transform:capitalize;"></span>

                               <img src="../assets/images/wow-pink.png"> 

                              <?php if(isset($feeds->eventtitle)) { echo $feeds->eventtitle; } else { echo " " ;} ?>
                              <span style="float: right;  font-size: 15px; font-weight: normal; text-transform:capitalize; color:#333; ">

                              <?php if(isset($feeds->eventcategory)){ echo $feeds->eventcategory;} else { echo " "; } ?>

                              </span></a></p>
                          </div>
                    </div>
                  </div>

                    <div class="col-md-12">
                          <div class="col-md-9">
                              <div class="col-md-2" style="width:20%;">
                                      <?php 

                                        if(!is_null($this->session->userdata('personal_image')))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;"> 

                                       

                                             <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />  
                                        

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">
                                 
                                 
                                       <?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?> 
                                  
                               </div>
                                <p style="font-size:13px; color:#777;">
                                  
                                        <?php  
                                              if(!is_null($this->session->userdata('designation')))
                                                  { 
                                                    echo $this->session->userdata('designation'); 
                                                  } 
                                                  else 
                                                  { 
                                                    echo " ";
                                                  } 
                                        ?>
                                 

                                </p>
                              </div>

                          </div>

                      <div class="col-md-3 text-center">
                          <div style="border:1px solid #ccc; border-radius:5px 5px 0 0;">
                              <div style="background-color: #504949; height: 25px; line-height: 25px; border-radius:5px 5px 0 0;">
                                <p style="font-size: 16px; font-weight: bold; color:#fff;">
                                  <?php

                                       $i=0;

                                        foreach ($feeds->eventvenue as $eventvenues)
                                         {
                                              if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                              {
                                                if(isset($eventvenues->eventvenuecity))
                                                {
                                                  echo   $eventvenues->eventvenuecity;
                                                }
                                              }  
                                              $i++;                             
                                          }                                    
                                   ?>
                                </p>
                              </div>

                              <div style="margin-top: 1px; padding:0px;">
                                <p style="line-height: 17px; color:#000; font-weight:bold; font-size:10px; margin-bottom:0;">
                                    <!-- <div style="line-height: 20px; margin-top: 5px;"> -->
                                      <span style="line-height: 20px; text-transform: uppercase; font-weight: bold; font-size: 14px;">
                                    <?php 

                                       if(isset($feeds->runtimefrom) ) 
                                        {                                        
                                          $timestamp = strtotime($feeds->runtimefrom);
                                        // $new_date = date('M', $timestamp);
                                         echo date('M', $timestamp);
                                    ?></span>  <br>

                                      <?php

                                      $timestamp = strtotime($feeds->runtimefrom);
                                      echo date('D dS', $timestamp);
                                      ?>
                                  - <span style="font-size:10px; color:#333;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimeto);
                                       echo date('D dS', $timestamp);
                                      // echo date('h:i A l - dS F, Y', $timestamp);
                                   ?>
                                 <!-- </div> -->
                                </p>
                              </div>

                           <div style="background-color: #c8c2c2; height: 25px; line-height: 25px; ">
                                <p style="font-size: 8px;  font-weight: bold; color:#000; ">
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimefrom);
                                      echo date('h:i A', $timestamp);
                                   ?>
                                  - <span style="font-size:10px;  color:#000;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimeto);
                                       echo date('h:i A', $timestamp);
                                      // echo date('h:i A l - dS F, Y', $timestamp);
                                   }  ?>
                                  IST </p>
                              </div>

                              <div style="background-color: #fc6653; height: 25px; line-height: 25px; ">
                                <p style="font-size: 14px;  font-weight: bold; color:#fff; ">
                                   Event Tours
                                </p>
                              </div>

                          </div>
                      </div>

                      <div class="col-md-12" style="margin-top:5px;">
                        <p class="text-muted">
                          <?php if(isset($feeds->eventdescription)){ echo $feeds->eventdescription; } else { echo " "; } ?>
                            
                          </p>
                      </div>
                    </div>

                  <!-- here start with ticke price, register ticket and cover image -->
            
                    <div class="col-md-12" style="position: relative;">
                      
                      <div class="gallery" > <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->coverpage; ?>' > <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->coverpage; ?>" alt="post-image" class="img-responsive post-image" /> </a> </div>
                    </div>

                  <!-- here end cover image --> 
                </div>

                      <div class="row" >
                        <div class=" col-md-7 pull-left" style="margin-top:5px;" >
                          <p><span style="font-weight: bold; font-size:14px; color:#333;">
                            <?php if(isset($feeds->eventname)) { echo $feeds->eventname; } else { echo " "; } ?>
                            </span>
                          <div style="width:100%; margin-top:-15px;">
                            <?php  
                                            if(isset($feeds->donationsurl))
                                            {
                                               echo $feeds->donationsurl; 
                                            } ?>
                          </div>
                          </p>
                        </div>
                        <div class="col-md-5 pull-right" >
                          <p style="color:#333; font-weight:bold;">
                          <div style="width: 5%;" class="pull-left"> <img src="<?php echo base_url('assets/images/map-icon.png'); ?>" > </div>
                          <div style="width: 85%; line-height: 20px; text-transform: capitalize;" class="pull-right "> 

                           <?php

                                       $i=0;

                                        foreach ($feeds->eventvenue as $eventvenues)
                                         {
                                              if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                              {
                                                if(isset($eventvenues->eventvenuename))
                                                {
                                                  echo   $eventvenues->eventvenuename;
                                                }
                                              }  
                                              $i++;                             
                                          }                                    
                                   ?>

                          </div>
                          </p>
                        </div>

                        <div class="col-md-12 line-divider"></div>

                      </div>

                      <div class="row">
                         <!-- here start event highlight part -->
                                  <div class="col-md-12">
                                        <h5 style="font-weight:bold;">Event Highlights</h5>
                                  </div>
                            <!-- here start with  event highlight video -->
                          <div class="col-md-12">
                                  <?php if(isset($feeds->wowtagvideo)) { ?>
                                      <div class="video">
                                          <div class="col-md-4"> <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo; ?>" >
                                                <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                               <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo; ?>" type="video/mp4">
                                               </video>
                                            </a> 
                                          </div>
                                      </div>
                                  <?php } else { echo " "; } ?>
                              <!-- here end event highlight video --> 
                              <!-- here start event highlight image -->              
                                   
                                  <div class="gallery">
                                     <?php  if(isset($feeds->eventhighlights1) && ($feeds->eventhighlights1 != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights1; ?>' > 
                                               <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights1; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                             <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                           </div>
                                        <?php }  ?>      
                                  </div>               

                                  <div class="video">
                                    <?php  if(isset($feeds->eventhighlightsvideo1 ) && ($feeds->eventhighlightsvideo1 != 'null')) { ?>
                                        <div class="col-md-4"> 
                                             <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlightsvideo1; ?>" >
                                              <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                                   <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlightsvideo1; ?>" type="video/mp4">
                                               </video>
                                               </a> 
                                        </div>
                                        <?php }   ?>              
                                  </div> 
                             
                          </div>                            
                      </div>

         
                    <!-- comments shows here -->
          
                      <div class="col-md-12">
                            <div  class="flip" style="font-weight:bold; color:#e91e63;">View More Comments</div>
            
                        <div class="panel">            
                                  
                             <?php 
                                if(isset($feeds->comments))
                                  {
                                    foreach($feeds->comments as $com) //here only show three commends condition
                                    {   
                             ?>
                            <div class="pull-left" style="width:10%; margin-top:6px;">
                              <?php if(isset($com->userid->personalimage)){  ?>
                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                              <?php } else { ?>
                              <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                              <?php } ?>
                            </div>
                            <div class="pull-left" style="width:90%;">
                              <div class="pull-left">
                               <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                                  <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                   ?>
                                </span>
                                <?php echo $com->comment;  ?>                            
                              </div>
                              <div class="pull-left" style="width:90%;"> Like. Reply.
                                 <span style="color:#B8B8B8;">
                                  <?php 
                                      $timestamp = strtotime($com->commentedAt);
                                       // echo date('D dS', $timestamp);
                                     
                                      // echo $comment_date;
                                     // $time_test =  local_to_gmt($timestamp);
                                       $comment_date = date('Y-m-d H:i:s', $timestamp);
                                       // echo $comment_date;
                                      // echo  date_default_timezone_get();
                                      // echo strtotime(time());

                                  ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                                 </span> 
                              </div>
                            </div>
                             <?php } } ?>
                        </div>

                      </div>
          

                          <?php
          
                            if(isset($feeds->comments))
                              {
                                foreach(array_slice($feeds->comments, 0, 3) as $com) //here only show three commends condition
                                {   
                          ?>
         
                      <div class="commend_show col-md-12" style="margin-top:5px;" >
            
                          <div class="pull-left" style="width:10%; margin-top:6px;">
                            <?php if(isset($com->userid->personalimage)) {  ?>
                            <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                            <?php } else { ?>
                            <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                            <?php } ?>
                          </div>

                          <div class="pull-left" style="width:90%;">
                            <div class="pull-left"> <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                              <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                ?>
                              </span>

                              <?php   echo $com->comment;  ?>

                            </div>
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;">   <?php 
                                        $timestamp = strtotime($com->commentedAt);
                                         // echo date('D dS', $timestamp);
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                     
                               ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                               </span>
                            </div>
                 
                          </div>
            
                      </div>
       
                         <?php } } ?>
                    <!-- end comments shows here -->
        
                      <div class="row" style="margin-top:10px;">

                           <div class="col-md-12">
                                <div class="col-md-1">
                                     <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php //echo base_url('event/comments/'.$feeds->_id); ?>" method="post">
                                  <div class="col-md-9">
                                      <div class="form-group">
                                           <i class="fa fa-arrow-circle-right"></i>
                                           <input type="text" name = "comments" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px; border:1px solid #ccc;" required>
                                      </div>
                                  </div>
                                  <div class="col-md-2" style="margin-top: 6px;">
                                    <input type="submit" class="btn-primary" value="Post">
                                  </div>
                                </form>
                            </div>
                      </div>

                        <div class="row" style="margin-top:0px;">
                              <div class="col-md-7">
                                  <form class="wowsome_form" action="<?php //echo base_url('event/wowsome/'.$feeds->_id); ?>" method="post">
                                        <div class="col-md-5 text-center" style="position: relative; margin-top: -3px;">
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 11px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:11px;">
                                            <i class="fa fa-share"></i> Shares 
                                            <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu" style="top:-300%!important;">
                                              <li><a href="#">Share post Now(friends)</a></li>
                                              <li><a href="#">Share...</a></li>
                                              <li><a href="#">Share to a page</a></li>
                                          </ul>
                                      </div>
                                  </div>

                                  <div class="col-md-3 text-center">
                                      <a class="btn text-red" style="font-size:11px;"> 
                                          <i class="fa fa-comments"></i> Comments
                                      </a> 
                                  </div>
                            </div>
                            <div class="col-md-5 text-center" style="font-size:12px;">
                              <?php echo $feeds->wowsomecount; ?> Wowsomes &nbsp;&nbsp;
                            <?php echo $feeds->commentcount; ?> Comments </div>
                        </div>

                          <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                                  <a href="#modal_email" style="cursor: pointer;" data-toggle="modal"  data-id='<?php echo $feeds->_id; ?>'>
                                 Send Invite</a>
                          </div>
                        <form action="<?php echo base_url('event/get_eventdetails'); ?>" id="event_details" method="POST">
                              <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                                  <textarea style= "display: none" id="testing" name="details"><?= json_encode($feeds); ?>
                                  </textarea>
                                  <input type="submit" style="border: none; background: transparent;" value="Click for View Details">
                              </div>
                        </form>
            </div>

            <?php }   ?>


          
    <!-- professional event end  here -->



    <!-- social event show here -->

                <?php 
                            if($feeds->eventtype == 'socia1_event')  

                              {                                
                ?>

            <div class="container post-content">

                <div class="row">
                  
                  <div class="col-md-12">
                    <div class="post-detail" style="margin-top:10px;">
                          <div class="col-md-9 user-info">
                            <p style="font-size:13px; font-weight:bold;"> 
                              <img src="../assets/images/wow-black-small.png"> 
                            Saravanan shared a link 2 hrs.</p>
                          </div>

                          <div class="col-md-3 user-info text-right">
                            <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer;">... <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Hide post</a></li>
                                <li><a href="#">Report post</a></li>
                                <li><a href="#">Why am I seeing this?</a></li>
                              </ul>
                            </div>
                          </div>

                          <!--div class="col-md-12 line-divider"></div> -->
                          <div class="col-md-12 user-info text-left" style="background-color:#f5f5f5; margin:0px 0px 15px 0px; border-radius:5px;">
                            <p style="font-size:18px; font-weight:normal;  height:25px; padding-top:5px;"><a href="#" style="color:#e91e63; text-decoration:none; font-weight: bold;"><span style="font-size: 22px; font-weight: bold; text-transform:capitalize;"></span>

                               <img src="../assets/images/wow-pink.png"> 

                              <?php if(isset($feeds->eventtitle)) { echo $feeds->eventtitle; } else { echo " " ;} ?>
                              <span style="float: right;  font-size: 15px; font-weight: normal; text-transform:capitalize; color:#333; ">

                              <?php if(isset($feeds->eventcategory)){ echo $feeds->eventcategory;} else { echo " "; } ?>

                              </span></a></p>
                          </div>
                    </div>
                  </div>

                    <div class="col-md-12">
                          <div class="col-md-9">
                              <div class="col-md-2" style="width:20%;">
                                      <?php 

                                         if(!is_null($this->session->userdata('personal_image')))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;">                                         

                                               <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />                                          

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">                                 
                                  
                                       <?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?>                               
                               </div>
                                <p style="font-size:13px; color:#777;">
                                  <?php  if(!is_null($this->session->userdata('designation')))
                                          { echo $this->session->userdata('designation');  } else { echo " ";} ?>
                                </p>
                                </p>
                              </div>

                          </div>

                      <div class="col-md-3 text-center">
                          <div style="border:1px solid #ccc; border-radius:5px 5px 0 0;">
                              <div style="background-color: #504949; height: 25px; line-height: 25px; border-radius:5px 5px 0 0;">
                                <p style="font-size: 16px; font-weight: bold; color:#fff;">
                                  <?php

                                       $i=0;

                                        foreach ($feeds->eventvenue as $eventvenues)
                                         {
                                              if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                              {
                                                if(isset($eventvenues->eventvenuecity))
                                                {
                                                  echo   $eventvenues->eventvenuecity;
                                                }
                                              }  
                                              $i++;                             
                                          }                                    
                                   ?>
                                </p>
                              </div>

                              <div style="margin-top: 1px; padding:0px;">
                                <p style="line-height: 17px; color:#000; font-weight:bold; font-size:10px; margin-bottom:0;">
                                    <!-- <div style="line-height: 20px; margin-top: 5px;"> -->
                                      <span style="line-height: 20px; text-transform: uppercase; font-weight: bold; font-size: 14px;">
                                    <?php 

                                       if(isset($feeds->runtimefrom) ) 
                                        {                                        
                                          $timestamp = strtotime($feeds->runtimefrom);
                                        // $new_date = date('M', $timestamp);
                                         echo date('M', $timestamp);
                                    ?></span>  <br>

                                      <?php

                                      $timestamp = strtotime($feeds->runtimefrom);
                                      echo date('D dS', $timestamp);
                                      ?>
                                  - <span style="font-size:10px; color:#333;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimeto);
                                       echo date('D dS', $timestamp);
                                      // echo date('h:i A l - dS F, Y', $timestamp);
                                   ?>
                                 <!-- </div> -->
                                </p>
                              </div>

                           <div style="background-color: #c8c2c2; height: 25px; line-height: 25px; ">
                                <p style="font-size: 8px;  font-weight: bold; color:#000; ">
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimefrom);
                                      echo date('h:i A', $timestamp);
                                   ?>
                                  - <span style="font-size:10px;  color:#000;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimeto);
                                       echo date('h:i A', $timestamp);
                                      // echo date('h:i A l - dS F, Y', $timestamp);
                                   }  ?>
                                  IST </p>
                              </div>

                              <div style="background-color: #fc6653; height: 25px; line-height: 25px; ">
                                <p style="font-size: 14px;  font-weight: bold; color:#fff; ">
                                   Event Tours
                                </p>
                              </div>

                          </div>
                      </div>

                      <div class="col-md-12" style="margin-top:5px;">
                        <p class="text-muted"><?php echo $feeds->eventdescription; ?></p>
                      </div>
                    </div>

                  <!-- here start with cover image -->
            
                    <div class="col-md-12" style="position: relative;">
                      
                      <div class="gallery" > <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->coverpage; ?>' > <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->coverpage; ?>" alt="post-image" class="img-responsive post-image" /> </a> </div>
                    </div>

                  <!-- here end cover image --> 
                </div>

                      <div class="row" >
                        <div class=" col-md-7 pull-left" style="margin-top:5px;" >
                          <p><span style="font-weight: bold; font-size:14px; color:#333;">
                            <?php if(isset($feeds->eventname)) { echo $feeds->eventname; } else { echo " "; } ?>
                            </span>
                          <div style="width:100%; margin-top:-15px;">
                            <?php  
                                            if(isset($feeds->donationsurl))
                                            {
                                             echo $feeds->donationsurl; 
                                            } ?>
                          </div>
                          </p>
                        </div>
                        
                        <div class="col-md-5 pull-right" >
                          <p style="color:#333; font-weight:bold;">
                          <div style="width: 5%;" class="pull-left"> <img src="<?php echo base_url('assets/images/map-icon.png'); ?>" > </div>
                          <div style="width: 85%; line-height: 20px; text-transform: capitalize;" class="pull-right ">
                           
                                <?php

                                       $i=0;

                                        foreach ($feeds->eventvenue as $eventvenues)
                                         {
                                              if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                              {
                                                if(isset($eventvenues->eventvenuename))
                                                {
                                                  echo   $eventvenues->eventvenuename;
                                                }
                                              }  
                                              $i++;                             
                                          }                                    
                                ?>

                         </div>
                          </p>
                        </div>

                        <div class="col-md-12 line-divider"></div>

                      </div>

                      <div class="row">
                         <!-- here start event highlight part -->
                                  <div class="col-md-12">
                                        <h5 style="font-weight:bold;">Event Highlights</h5>
                                  </div>
                            <!-- here start with  event highlight video -->
                          <div class="col-md-12">
                                  <?php if(isset($feeds->wowtagvideo)) { ?>
                                      <div class="video">
                                          <div class="col-md-4"> <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo; ?>" >
                                                <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                               <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo; ?>" type="video/mp4">
                                               </video>
                                            </a> 
                                          </div>
                                      </div>
                                  <?php } else { echo " "; } ?>
                              <!-- here end event highlight video --> 
                              <!-- here start event highlight image -->              
                                   
                                  <div class="gallery">
                                     <?php  if(isset($feeds->eventhighlights1) && ($feeds->eventhighlights1 != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights1; ?>' > 
                                               <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights1; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                             <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                           </div>
                                        <?php }  ?>      
                                  </div>               

                                  <div class="video">
                                    <?php  if(isset($feeds->eventhighlightsvideo1) && ($feeds->eventhighlightsvideo1 != 'null') ) { ?>
                                        <div class="col-md-4"> 
                                             <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlightsvideo1; ?>" >
                                              <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                                   <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlightsvideo1; ?>" type="video/mp4">
                                               </video>
                                               </a> 
                                        </div>
                                        <?php }   ?>              
                                  </div> 
                             
                          </div>                            
                      </div>

         
                    <!-- comments shows here -->
          
                      <div class="col-md-12">
                            <div  class="flip" style="font-weight:bold; color:#e91e63;">View More Comments</div>
            
                        <div class="panel">            
                                  
                             <?php 
                                if(isset($feeds->comments))
                                  {
                                    foreach($feeds->comments as $com) //here only show three commends condition
                                    {   
                             ?>
                            <div class="pull-left" style="width:10%; margin-top:6px;">
                              <?php if(isset($com->userid->personalimage)){  ?>
                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                              <?php } else { ?>
                              <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                              <?php } ?>
                            </div>
                            <div class="pull-left" style="width:90%;">
                              <div class="pull-left">
                               <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                                  <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                   ?>
                                </span>
                                <?php echo $com->comment;  ?>                            
                              </div>
                              <div class="pull-left" style="width:90%;"> Like. Reply.
                                 <span style="color:#B8B8B8;">
                                  <?php 
                                      $timestamp = strtotime($com->commentedAt);
                                       // echo date('D dS', $timestamp);
                                     
                                      // echo $comment_date;
                                     // $time_test =  local_to_gmt($timestamp);
                                       $comment_date = date('Y-m-d H:i:s', $timestamp);
                                       // echo $comment_date;
                                      // echo  date_default_timezone_get();
                                      // echo strtotime(time());

                                  ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                                 </span> 
                              </div>
                            </div>
                             <?php } } ?>
                        </div>

                      </div>
          

                          <?php
          
                            if(isset($feeds->comments))
                              {
                                foreach(array_slice($feeds->comments, 0, 3) as $com) //here only show three commends condition
                                {   
                          ?>
         
                      <div class="commend_show col-md-12" style="margin-top:5px;" >
            
                          <div class="pull-left" style="width:10%; margin-top:6px;">
                            <?php if(isset($com->userid->personalimage)) {  ?>
                            <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                            <?php } else { ?>
                            <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                            <?php } ?>
                          </div>

                          <div class="pull-left" style="width:90%;">
                            <div class="pull-left"> <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                              <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                ?>
                              </span>

                              <?php   echo $com->comment;  ?>

                            </div>
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;">   <?php 
                                        $timestamp = strtotime($com->commentedAt);
                                         // echo date('D dS', $timestamp);
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                     
                               ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                               </span>
                            </div>
                 
                          </div>
            
                      </div>
       
                         <?php } } ?>
                    <!-- end comments shows here -->
        
                      <div class="row" style="margin-top:10px;">

                           <div class="col-md-12">
                                <div class="col-md-1">
                                     <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php //echo base_url('event/comments/'.$feeds->_id); ?>" method="post">
                                  <div class="col-md-9">
                                      <div class="form-group">
                                           <i class="fa fa-arrow-circle-right"></i>
                                           <input type="text" name = "comments" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px; border:1px solid #ccc;" required>
                                      </div>
                                  </div>
                                  <div class="col-md-2" style="margin-top: 6px;">
                                    <input type="submit" class="btn-primary" value="Post">
                                  </div>
                                </form>
                            </div>
                      </div>

                        <div class="row" style="margin-top:0px;">
                              <div class="col-md-7">
                                  <form class="wowsome_form" action="<?php //echo base_url('event/wowsome/'.$feeds->_id); ?>" method="post">
                                        <div class="col-md-5 text-center" style="position: relative; margin-top: -3px;">
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 11px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:11px;">
                                            <i class="fa fa-share"></i> Shares 
                                            <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu" style="top:-300%!important;">
                                              <li><a href="#">Share post Now(friends)</a></li>
                                              <li><a href="#">Share...</a></li>
                                              <li><a href="#">Share to a page</a></li>
                                          </ul>
                                      </div>
                                  </div>

                                  <div class="col-md-3 text-center">
                                      <a class="btn text-red" style="font-size:11px;"> 
                                          <i class="fa fa-comments"></i> Comments
                                      </a> 
                                  </div>
                            </div>
                            <div class="col-md-5 text-center" style="font-size:12px;">
                              <?php echo $feeds->wowsomecount; ?> Wowsomes &nbsp;&nbsp;
                            <?php echo $feeds->commentcount; ?> Comments </div>
                        </div>

                        <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                                  <a href="#modal_email" style="cursor: pointer;" data-toggle="modal"  data-id='<?php echo $feeds->_id; ?>'>
                                 Send Invite</a>
                        </div>
                        <form action="<?php echo base_url('event/get_eventdetails'); ?>" id="event_details" method="POST">
                              <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                                  <textarea style= "display: none" id="testing" name="details"><?= json_encode($feeds); ?>
                                  </textarea>
                                  <input type="submit" style="border: none; background: transparent;" value="Click for View Details">
                              </div>
                        </form>
            </div>

            <?php }   ?>

    <!-- end socia event here -->



    <!-- business event start here -->

              <?php 
                   if($feeds->eventtype == 'business_event')  

                        {                             
                           
              ?>

            <div class="container post-content">

                <div class="row">
                  
                  <div class="col-md-12">
                    <div class="post-detail" style="margin-top:10px;">
                          <div class="col-md-9 user-info">
                            <p style="font-size:13px; font-weight:bold;"> 
                              <img src="../assets/images/wow-black-small.png"> 
                            Saravanan shared a link 2 hrs.</p>
                          </div>

                          <div class="col-md-3 user-info text-right">
                            <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer;">... <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Hide post</a></li>
                                <li><a href="#">Report post</a></li>
                                <li><a href="#">Why am I seeing this?</a></li>
                              </ul>
                            </div>
                          </div>

                          <!--div class="col-md-12 line-divider"></div> -->
                          <div class="col-md-12 user-info text-left" style="background-color:#f5f5f5; margin:0px 0px 15px 0px; border-radius:5px;">
                            <p style="font-size:18px; font-weight:normal;  height:25px; padding-top:5px;"><a href="#" style="color:#e91e63; text-decoration:none; font-weight: bold;"><span style="font-size: 22px; font-weight: bold; text-transform:capitalize;"></span>

                               <img src="../assets/images/wow-pink.png"> 

                              <?php if(isset($feeds->eventtitle)) { echo $feeds->eventtitle; } else { echo " " ;} ?>
                              <span style="float: right;  font-size: 15px; font-weight: normal; text-transform:capitalize; color:#333; ">

                              <?php if(isset($feeds->eventcategory)){ echo $feeds->eventcategory;} else { echo " "; } ?>

                              </span></a></p>
                          </div>
                    </div>
                  </div>

                    <div class="col-md-12">
                          <div class="col-md-9">
                              <div class="col-md-2" style="width:20%;">
                                      <?php 

                                        if(isset($feeds->sponsorslogo) && ($feeds->sponsorslogo !='null'))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;"> 

                                       
                                              <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->sponsorslogo; ?>" alt="user" class="profile-photo-md pull-left" />
                                        
                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_orgn.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">
                                 
                                 
                                      <?php if(isset($feeds->organisationname)) { echo $feeds->organisationname; } ?> 
                                  
                                </div>
                                
                              </div>

                          </div>

                       <div class="col-md-3 text-center">
                          <div style="border:1px solid #ccc; border-radius:5px 5px 0 0;">
                              <div style="background-color: #504949; height: 45px; line-height: 20px; border-radius:5px 5px 0 0;">
                                <p style="font-size: 12px;  color:#fff;">
                                  <?php
                                        if(isset($feeds->eventsalesdiscount1) ) 
                                      {
                                      
                                       echo $feeds->eventsalesdiscount1." Discount and more ";
                                     
                                   ?>
                                </p>
                              </div>

                              <div style="margin-top: 1px; padding:0px;" class="">  
                                <p style="color:#ef2929; font-weight:bold; font-size:10px; margin-bottom:-13px;" >
                                
                                  <?php                                        
                                      
                                       // $count_down = $feeds->eventsalescouponfrom1." ".$feeds->eventsalescouponto1; 
                                       // echo $count_down;    
                                      $coupon_from = $feeds->eventsalescouponfrom1;
                                      $coupon_to = $feeds->eventsalescouponto1;

                                       $from = strtotime($coupon_from); // or whenever the diwali is
                                      $to=strtotime($coupon_to);
                                      $diffference =($from-$to);
                                      $days=floor($diffference / (60*60*24));
                                      echo "$days days left ";                              
                                                                     
                                   ?>
                                </p>
                              </div>

                              <div style="background-color: #c8c2c2; height: 15px; line-height: 25px;">
                                <p style="font-size: 8px;  font-weight: bold; color:#000;">
                                 
                                   <span style="font-size:10px;  color:#000;"></span>

                                  <?php 
                                     
                                   } else { echo 'no data'; } ?>
                                   </p>

                              </div>

                          </div>
                      </div>



                      <div class="col-md-12" style="margin-top:5px;">
                        <p class="text-muted"><?php echo $feeds->eventdescription; ?></p>
                      </div>
                    </div>

                  <!-- here start with cover image-->
            
                    <div class="col-md-12" style="position: relative;">
                      
                      <div class="gallery" > <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->coverpage; ?>' > <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->coverpage; ?>" alt="post-image" class="img-responsive post-image" /> </a> </div>
                    </div>

                        <!-- here end cover image -->  
                  </div>

                      <div class="row" >
                        <div class=" col-md-7 pull-left" style="margin-top:5px;" >
                          <p><span style="font-weight: bold; font-size:14px; color:#333;">
                            <?php if(isset($feeds->eventname)) { echo $feeds->eventname; } else { echo " "; } ?>
                            </span>
                          <div style="width:100%; margin-top:-15px;">
                                    <?php  
                                            if(isset($feeds->onlinesalespromotionurl))
                                            {
                                               echo "Sponsors ".$feeds->onlinesalespromotionurl; 
                                            }
                                    ?>
                          </div>
                          </p>
                        </div>
                        
                        <div class="col-md-5 pull-right" >
                          <p style="color:#333; font-weight:bold;">
                         
                          <div style="width: 85%; line-height: 20px; text-transform: capitalize;" class="pull-right ">
                           
                                <?php

                                       $i=0;

                                        foreach ($feeds->eventvenue as $eventvenues)
                                         {
                                              if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                              {
                                                if(isset($eventvenues->eventvenuename))
                                                {
                                                  echo   $eventvenues->eventvenuename;
                                                }
                                              }  
                                              $i++;                             
                                          }                                    
                                ?>
                          </div>
                          </p>
                        </div>

                        <div class="col-md-12 line-divider"></div>

                      </div>

                      <div class="row">
                         <!-- here start event highlight part -->
                                  <div class="col-md-12">
                                        <h5 style="font-weight:bold;">Event Highlights</h5>
                                  </div>
                            <!-- here start with  event highlight video -->
                          <div class="col-md-12">
                                  <?php if(isset($feeds->wowtagvideo)) { ?>
                                      <div class="video">
                                          <div class="col-md-4"> <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo; ?>" >
                                                <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                               <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo; ?>" type="video/mp4">
                                               </video>
                                            </a> 
                                          </div>
                                      </div>
                                  <?php } else { echo " "; } ?>
                              <!-- here end event highlight video --> 
                              <!-- here start event highlight image -->              
                                   
                                  <div class="gallery">
                                     <?php  if(isset($feeds->eventsalescoupon1 ) && ($feeds->eventsalescoupon1 != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventsalescoupon1; ?>' > 
                                               <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventsalescoupon1; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                             <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                           </div>
                                        <?php }  ?>      
                                  </div>               

                                   <div class="gallery">
                                     <?php  if(isset($feeds->eventsalescoupon2) && ($feeds->eventsalescoupon2 != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventsalescoupon2; ?>' > 
                                               <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventsalescoupon2; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                             <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                           </div>
                                        <?php }  ?>      
                                  </div>               

                             
                          </div>                            
                      </div>

         
                    <!-- comments shows here -->
          
                      <div class="col-md-12">
                            <div  class="flip" style="font-weight:bold; color:#e91e63;">View More Comments</div>
            
                        <div class="panel">            
                                  
                             <?php 
                                if(isset($feeds->comments))
                                  {
                                    foreach($feeds->comments as $com) //here only show three commends condition
                                    {   
                             ?>
                            <div class="pull-left" style="width:10%; margin-top:6px;">
                              <?php if(isset($com->userid->personalimage)){  ?>
                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                              <?php } else { ?>
                              <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                              <?php } ?>
                            </div>
                            <div class="pull-left" style="width:90%;">
                              <div class="pull-left">
                               <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                                  <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                   ?>
                                </span>
                                <?php echo $com->comment;  ?>                            
                              </div>
                              <div class="pull-left" style="width:90%;"> Like. Reply.
                                 <span style="color:#B8B8B8;">
                                  <?php 
                                      $timestamp = strtotime($com->commentedAt);
                                       // echo date('D dS', $timestamp);
                                     
                                      // echo $comment_date;
                                     // $time_test =  local_to_gmt($timestamp);
                                       $comment_date = date('Y-m-d H:i:s', $timestamp);
                                       // echo $comment_date;
                                      // echo  date_default_timezone_get();
                                      // echo strtotime(time());

                                  ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                                 </span> 
                              </div>
                            </div>
                             <?php } } ?>
                        </div>

                      </div>
          

                          <?php
          
                            if(isset($feeds->comments))
                              {
                                foreach(array_slice($feeds->comments, 0, 3) as $com) //here only show three commends condition
                                {   
                          ?>
         
                      <div class="commend_show col-md-12" style="margin-top:5px;" >
            
                          <div class="pull-left" style="width:10%; margin-top:6px;">
                            <?php if(isset($com->userid->personalimage)) {  ?>
                            <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $com->userid->personalimage; ?>" alt="" class="profile-photo-sm" />
                            <?php } else { ?>
                            <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                            <?php } ?>
                          </div>

                          <div class="pull-left" style="width:90%;">
                            <div class="pull-left"> <span style="font-size:15px; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                              <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                ?>
                              </span>

                              <?php   echo $com->comment;  ?>

                            </div>
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;">   <?php 
                                        $timestamp = strtotime($com->commentedAt);
                                         // echo date('D dS', $timestamp);
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                     
                               ?>
                                 <time class="timeago" datetime="<?php echo $comment_date; ?>"></time>
                               </span>
                            </div>
                 
                          </div>
            
                      </div>
       
                         <?php } } ?>
                    <!-- end comments shows here -->
        
                      <div class="row" style="margin-top:10px;">

                           <div class="col-md-12">
                                <div class="col-md-1">
                                     <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php //echo base_url('event/comments/'.$feeds->_id); ?>" method="post">
                                  <div class="col-md-9">
                                      <div class="form-group">
                                           <i class="fa fa-arrow-circle-right"></i>
                                           <input type="text" name = "comments" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px; border:1px solid #ccc;" required>
                                      </div>
                                  </div>
                                  <div class="col-md-2" style="margin-top: 6px;">
                                    <input type="submit" class="btn-primary" value="Post">
                                  </div>
                                </form>
                            </div>
                      </div>

                        <div class="row" style="margin-top:0px;">
                              <div class="col-md-7">
                                  <form class="wowsome_form" action="<?php //echo base_url('event/wowsome/'.$feeds->_id); ?>" method="post">
                                        <div class="col-md-5 text-center" style="position: relative; margin-top: -3px;">
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 11px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:11px;">
                                            <i class="fa fa-share"></i> Shares 
                                            <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu" style="top:-300%!important;">
                                              <li><a href="#">Share post Now(friends)</a></li>
                                              <li><a href="#">Share...</a></li>
                                              <li><a href="#">Share to a page</a></li>
                                          </ul>
                                      </div>
                                  </div>

                                  <div class="col-md-3 text-center">
                                      <a class="btn text-red" style="font-size:11px;"> 
                                          <i class="fa fa-comments"></i> Comments
                                      </a> 
                                  </div>
                            </div>
                            <div class="col-md-5 text-center" style="font-size:12px;">
                              <?php echo $feeds->wowsomecount; ?> Wowsomes &nbsp;&nbsp;
                            <?php echo $feeds->commentcount; ?> Comments </div>
                        </div>

                          <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                                  <a href="#modal_email" style="cursor: pointer;" data-toggle="modal" data-id='<?php echo $feeds->_id; ?>'>
                                 Send Invite</a>  
                                 <input type="text" value="<?php echo $feeds->_id; ?>" >                             
                          </div>
                         
                        <form action="<?php echo base_url('event/get_eventdetails'); ?>" id="event_details" method="POST">
                            <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                                  <textarea style= "display: none" id="testing" name="details"><?= json_encode($feeds); ?>
                                  </textarea>
                                  <input type="submit" style="border: none; background: transparent;" value="Click for View Details">
                            </div>
                        </form>
            </div>

            <?php }  } ?>

    <!-- end business event here -->     

     </div>
     
       <div class="col-md-4 static"> 
          
          <!--Sticky Timeline Activity Sidebar-->
          <div id="calendar"></div>
        </div>
     

    </div>    
</div>
</div>
 
 <!-- add send email model popup -->
  <div class="modal fade" id="modal_email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Send Invite</h4>

            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#uploadTab" aria-controls="uploadTab" role="tab" data-toggle="tab">Send by Email</a>
                        </li>

                        <li role="presentation">
                          <a href="#browseTab" aria-controls="browseTab" role="tab" data-toggle="tab">Send by Group</a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="uploadTab">
                          <form  class="invite_email_form" action="<?php echo base_url('searchfriends/invite_email/'.$feeds->_id);?>" method="post">    
                            <div class="alert alert-success" id="email_success" role="alert" style="display:none;" >Successfully Sent!!
                            </div>

                             <input type="hidden" name="event_id">  
                              <div class="col-sm-12 form-group" style="margin-top: 15px;">      
                                  <input type="text"  name="invite_msg" class='form-control' placeholder="Send message">          
                              </div>            
                              <div class="col-sm-12 form-group ">
                                <input type="text" id="multi_email" name="email[]" class='form-control' placeholder="Enter Email ID">          
                              </div> 
                              <div class="action text-center">
                                 <button type="submit" class="btn-primary">Invite</button>                            
                              </div>
                          </form>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="browseTab" style="margin-top: 20px;">
                       <form  class="invite_group_form" action="<?php echo base_url('searchfriends/invite_group/'.$feeds->_id);?>" method="post">   
                            <div class="alert alert-success" id="group_success" role="alert" style="display:none;" >Successfully Sent!!
                            </div>

                              <input type="hidden" name="event_id"> 
                                <div class="col-sm-12 form-group ">      
                                    <input type="text"  name="invite_msg" class='form-control' placeholder="Send message">          
                                </div>   

                               <?php                            
                                   foreach ($group_name as $groups)
                                    {                     
                                ?>
                              <div class="col-md-12" >                           

                                <div class="pull-left" style="width:5%;"> 
                                  <input type="checkbox" name="group_name" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;" value="<?php echo $groups->_id;?>">
                                </div>
                              
                                <div class="pull-left" style="width:95%;">
                                   <?php echo $groups->groupname; ?> 
                                </div>

                              </div>
                              <div class="col-md-12" >
                                  <div class="col-md-12" style="border: 0.5px solid #d7d6d6; margin-top: 10px; margin-bottom: 10px; ">  </div>
                              </div>
                               <?php } ?>                            

                            <div class="action text-center">
                                <button type="submit" class="btn-primary">Invite</button>                            
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</div>
<!-- end email popup mode -->
 

<!-- Scripts
    ================================================= -->

<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery-3.2.1.minjs.js')?>" ></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.countdown.min.js')?>" ></script> <!--countdown -->
<script src="<?php echo base_url('assets/js/jquery.sticky-kit.min.js')?>"></script> <!--satic page for left and right side-->
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.appear.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/masonry.pkgd.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/videopopup.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/jquery.timeago.js')?>" ></script> <!--timeago library -->
<script src="<?php echo base_url('assets/js/bootbox.js')?>"></script> <!-- conformation delete boot box -->
    <!-- this under three file calendar shows -->
<script src="<?php echo base_url ('assets/js/moment.min.js') ?>"></script>
<!-- <script src="<?php echo base_url ('assets/js/jquery.min.js') ?>"></script> -->
<script src="<?php echo base_url ('assets/js/fullcalendar.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
    
<script>
 
// here mltiple email add 
(function( $ ){
 
     $.fn.multipleInput = function() {
 
          return this.each(function() {
 
               // create html elements
 
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

$('#multi_email').multipleInput();

//event_id could pass to email model popup using popup id
$('#modal_email').on('show.bs.modal', function(e) 
  {
    var event_id = $(e.relatedTarget).data('id');
    
    $(e.currentTarget).find('input[name="event_id"]').val(event_id);
    });


// submit model popup by invite by email
var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".invite_email_form", function(e){
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
                      $('#email_success').show();
                      window.location.href = base_url + 'event/profile_get_eventfeed';                                                        
                    }else 
                     {                    
                        swal("Sorry!", "something wrong try again !", "error");
                     }
                }

            });
        });
});

// submit model popup by invite by group
var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".invite_group_form", function(e){
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
                      $('#group_success').show();
                       window.location.href = base_url + 'event/profile_get_eventfeed';                                                        
                    }else 
                     {                    
                        swal("Sorry!", "something wrong try again !", "error");
                     }
                }

            });
        });
});


//video controls hide and show mouse hover  
$('.myvideo').hover(function toggleControls() {  
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
})
 
 //calendar shows col-md-3

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2018-02-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-02-01',
        },
        {
          title: 'Long Event',
          start: '2018-02-07',
          end: '2018-02-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-02-11',
          end: '2018-02-13'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T10:30:00',
          end: '2018-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-02-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-02-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-02-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-02-28'
        }
      ]
    });

  });
   
  

</script>
  </body>

</html>
