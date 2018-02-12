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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/animate.css')?>" />

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
   color:red; 
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
#imageUpload1{
    display: none;
}
#profileImage1{
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

table, td, tr
{
	border-spacing:2px;
	padding:0 5px;
}
.edit-block ul.interests li{
  background: #E8E8E8;
  color: #fff;
  padding: 5px 15px;
  margin-right: 10px;
  margin-top: 5px;
  margin-bottom: 5px;
  border-radius: 40px;
}
.edit-block ul.interests li a{  
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
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span>
          </a> 
          <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span>
          </a> 
          <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span>
          </a>
        </ul>
        

       <form class="navbar-form navbar-right hidden-sm" style="position:absolute; right:325px; top:0px;" >
           <div class="form-group">
                   <i class="icon ion-android-search"></i>

                    <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px; min-width:330px;" /><br/>

                      <span id="display1">               
                      </span>
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
    <div class="timeline-cover"> 
      <form id="cover_img" action="<?php echo base_url('profile/cover_img_upload'); ?>" method="post" enctype="multipart/form-data">
              <?php 
                   if(isset($cover))
                   {
                      ?>
           <img id="profileImage1" class="cover-pic" src="http://104.197.80.225:3010/wow/media/personal/<?php echo $cover; ?>" style="background-size:cover; width:100%; max-height:300px;" alt=""/> 
            <?php } else{ ?>
              <img id="profileImage1" class="cover-pic" src="<?php echo base_url('assets/images/covers/1.jpg')?>" style="background-size:cover; width:100%; max-height:300px;" >;
                <?php }  ?>       
                    
           <input class="cover-upload"  id="imageUpload1" type="file" name="cover_img" accept="image/*" capture>
         </form><br>
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
              <h3 style="color:#fff;"> <?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?> </h3>
              <p style="color:#fff;" class="text-muted"><?php if(!is_null($this->session->userdata('designation') )) { echo $this->session->userdata('designation'); } else { echo " "; } ?></p>
            </div>
            <ul class="list-inline profile-menu">
              <li><a href="<?php echo base_url ('event/profile_get_eventfeed') ?>" >Event Feed</a></li>
              <li><a href="<?php echo base_url('Profile/profile_get'); ?>" class="active">Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get') ?>" >Interests</a></li>
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
      
            
    </div>

    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
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
                    <div class="form-wizard col-md-12">                       
                      <div class="edit-profile-container">
                        <div class="block-title">                           
                        </div>
                        <div class="edit-block" style="margin-bottom: 0px;">                       
                          <div class="row">
                            <div class="col-md-12" style="font-size:15px;">
                              <div class="tabbable tabs-left">
                                <ul class="nav nav-tabs">
                                  <li style="width:100%;" class="active"><a href="#b1" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Overview</a></li>
                                  <li style="width:100%;"><a href="#b" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">About Me</a></li>
                                  <li style="width:100%;"><a href="#c" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Relationships</a></li>
                                  <li style="width:100%;"><a href="#d" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Contact Info</a></li>
                                  <li style="width:100%;"><a href="#e" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Event Info</a></li>
                                </ul>

                          <!-- overview tab for personal  -->

               <div class="tab-content">
                   <div class="tab-pane active" id="b1">
                          <div class="col-md-10">
                                <div class="col-md-12"> This is your  event identification name tag, You can use your "WOWtag ID" to share your personal and professional information and attend at any event. You can create your own WOWtag ID to add some form of personality to yourself.
                                </div>
                             <div class="col-md-12" style="margin-top:15px;">
                                    <div class="pull-left" style="width:7%;"><img src="../assets/images/wow-tag-icon.png" alt=""/></div>
                                  <div class="pull-left" style="width:78%;">
                                      <a href="#" style="font-size:16px; color:#333;"> 
                                       <?php echo $this->session->userdata('wowtag'); ?> 
                                      </a><br>
                                       <span style="color:#fff; font-size:13px; background-color:#e91e63; padding:3px 5px; border-radius:5px;">Your Wowtag ID</span>
                                  </div>
                              </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;">                                        
                                      </div>
                               <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="../assets/images/map-icon.png" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">Place You Live<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->place)){echo $profile->place;} else{echo "";} ?></span></div>                                       
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;">
                                          <a href="#" data-toggle="modal" data-target=".modal-1" >
                                          <img src="../assets/images/edit_icon.png" alt=""/></a>
                                        </div>
                                </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/marr-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">Marital Status <br>
                                          <span style="color:#333; font-size:13px;"> 
                                            <?php if(isset($profile->maritalstatus)){echo $profile->maritalstatus; } else{echo "";} ?></span></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                           <div class="col-md-12">
                                    <div class="pull-left" style="width:7%;"><img src="../assets/images/video-icon.png" alt=""/></div>
                                    <div class="pull-left" style="width:78%;">Personal Self Intro Video<br>
                                            <?php 
                                          if(isset($profile->personalself))
                                          { ?>
                                           <video style="width:160px; height:88px;" id="myvideo" controlsList="nodownload" >
                                               <source src="http://104.197.80.225:3010/wow/media/personal/<?php echo $profile->personalself; ?>" type="video/mp4">
                                           </video><?php } else {  ?>
                                            <video style="width:160px; height:88px;" id="myvideo" >
                                               <source src="" type="video/mp4">
                                            </video>
                                             <?php } ?>
                                     </div>  
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;">
                                          <a href="#" data-toggle="modal" data-target=".modal-video" >
                                          <img src="../assets/images/edit_icon.png" alt=""/></a>
                                        </div>
                           </div>                                     
                   </div>
              </div>
                                  <!-- personal overview model popup -->

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
                    <form action="<?php echo base_url('profile/personal_update_overview'); ?>" method="post"  id="personal_update_overview" class="form-inline">
                           
                            <div class="row" >                              
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Place You Live</label>
                                <input  type="text" class="form-control input-group-lg"  name="place" title="Enter a Date" value="<?php if(isset($profile->place)) {echo $profile->place; } else{echo "";} ?>" />
                              </div>
                            </div>
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Marital Status</label>
                                <select name="marital_status" class="form-control" id="types" >       
                                  <option value="select"><?php if(isset($profile->maritalstatus)){echo $profile->maritalstatus; } else{echo "";} ?>  </option>
                                  <option value="single">Single </option>
                                  <option value="married">Married </option>
                                </select>
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

                  <!-- end personal self intro video model popup -->

              <div class="modal fade modal-video" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form action="<?php echo base_url('profile/personal_update_video'); ?>" method="post"  id="personal_update_video" class="form-inline">                          
                           
                            <div class="row" >                              
                              <div class="form-group col-xs-12">
                                  <label for="date-to" class="">Self Intro Video</label>
                                  <input  type="file" id="self_video" class="form-control input-group-lg"  name="self_video" title="Enter a Date" value="<?php if(isset($profile->place)) {echo $profile->place; } else{echo "";} ?>" accept="video/*" />
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

                              <!-- about me tab for personal  -->

                                  <div class="tab-pane" id="b">
                                    <div class="col-md-10">
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/intro-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Introduction about Yourself<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->aboutme)){echo $profile->aboutme; } else{echo "";} ?></span></div>
                                        <div class="pull-left" style="width:5%; margin-top:10px;"><a href="#">Hide</a></div>
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;">
                                          <a href="#" data-toggle="modal" data-target=".modal-2" >
                                          <img src="../assets/images/edit_icon.png" alt=""/>
                                        </a></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/favorite-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">What Your Favorite Quotes<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->quote)){echo $profile->quote; } else{echo "";} ?>                                            
                                          </span></div>
                                        
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/birthday-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Birth date<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->birthday)){echo $profile->birthday; } else{echo "";} ?></span></div>                                      
                                        
                                      </div>                                      
                                     
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/religion-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">Religion<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->religion)){echo $profile->religion; } else{echo "";} ?></span></div>
                                      
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/language-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">Languages<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->language)){echo $profile->language; } else{echo "";} ?></span><br>
                                         </div>
                                                                               
                                      </div>
                                    </div>
                                  </div>

                                   <!-- personal aboutme model popup -->

          <div class="modal fade modal-2" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form action="<?php echo base_url('profile/personal_update_aboutme'); ?>" method="post"  id="personal_update_aboutme" class="form-inline">                            
                           
                            <div class="row" >                              
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">About Yourself</label>
                                <input  type="text" class="form-control input-group-lg"  name="about_me" title="Enter a Date" value="<?php if(isset($profile->aboutme)) {echo $profile->aboutme; } else{echo "";} ?>" />
                              </div>
                            </div>
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">What Your Favorite Quotes</label>
                                <input  type="text" class="form-control" name="favorite_quote" value="<?php if(isset($profile->quote)) {echo $profile->quote; } else{echo "";} ?>" />
                              </div>
                            </div>
                             <div class="row">   
                              <div class="form-group col-xs-6">
                                <label for="date-to" class="">Birth date</label>
                                <input id="birthday" type="text" class="form-control input-group-lg" name="birthday" title="Enter a Date" value="<?php if(isset($profile->birthday)) {echo $profile->birthday; } else{echo "";} ?>" />
                              </div>                          
                              <div class="form-group col-xs-6">
                                <label for="date-to" class="">Religion</label>
                                <input  type="text" class="form-control input-group-lg" name="religion" title="Enter a Date" value="<?php if(isset($profile->religion)) {echo $profile->religion; } else{echo "";} ?>" />
                              </div>
                            </div>
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Languages</label>
                                <input  type="text" class="form-control input-group-lg" name="language" title="Enter a Date" value="<?php if(isset($profile->language)) {echo $profile->language; } else{echo "";} ?>" />
                              </div>
                            </div>
                            <div class="row">
                              <div style="width:100%;" class="text-center">
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
                   <!-- end about me personal model popup -->

                            <!-- relationship tab for personal  -->

                                  <div class="tab-pane" id="c">
                                    <div class="col-md-10">

                                      <?php 
                                            if(!empty($profile->relationship)) 
                                            {
                                            foreach ($profile->relationship as $relationships) { 

                                            
                                      ?>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:10%;">
                                          <img src="../assets/images/album/avatar_relationship.png" alt=""/></div>
                                          <div class="pull-left" style="width:80%; text-transform: capitalize; font-size: 18px;">
                                            <?php if(isset($relationships->name)) { echo $relationships->name; } else { echo " "; } ?> <br>
                                            <span style="color:#333; font-size:13px;"> <?php if(isset($relationships->relation)) { echo $relationships->relation; } else {  echo ""; } ?>                                             
                                            </span>
                                            <br>
                                          </div>
                                   <!--      <div class="pull-left" style="width:5%; margin-top:10px;"><a href="#">Hide</a></div> -->
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;"> 
                                          <a href="#" data-toggle="modal" data-target=".modal-relation" >
                                            <img src="../assets/images/edit_icon.png" alt=""/></a></div>
                                      </div>

                                     
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <?php } }  else { ?>

                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:10%;">
                                          <img src="../assets/images/album/avatar_relationship.png" alt=""/></div>
                                          <div class="pull-left" style="width:80%; text-transform: capitalize; font-size: 18px;">
                                           Add your relationships <br>
                                            
                                            <br>
                                          </div>
                                   <!--      <div class="pull-left" style="width:5%; margin-top:10px;"><a href="#">Hide</a></div> -->
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;"> 
                                          <a href="#" data-toggle="modal" data-target=".modal-relation" >
                                            <img src="../assets/images/edit_icon.png" alt=""/></a></div>
                                      </div>

                                      <?php } ?>
                                    </div>
                                  </div>


                    <!-- personal relationship  model popup -->

          <div class="modal fade modal-relation" tabindex="-1" role="dialog" aria-hidden="true">
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

                    <form action="<?php echo base_url('profile/personal_update_relationship'); ?>" method="post"  id="personal_update_relation" class="form-inline">                            
                         
                          <div id="dynamic_add_relation">   
                             <?php 
                                    if(!empty($profile->relationship)) 
                                        {  
                                        foreach( $profile->relationship as $relationships )
                                          {
                             ?>
                             <div class="row" id="add_relation_1">   

                              <div class="form-group col-xs-12">
                                <label for="date-to"> Name </label>
                                <input id="relation_name_1" type="text" class="form-control input-group-lg" name="relation_name[]" title="Enter a Date" value="<?php if(isset($relationships->name)) { echo $relationships->name; } else { echo " "; } ?>" />
                              </div>    

                              <div class="form-group col-sm-12" style="font-size: 15px;">
                                <label>Relationship</label>
                                <select name="relation_type[]" id="relation_type_1" class="form-control" style="background-color:#eff0f1;">
                                   <option value="<?php if(isset( $relationships->relation)){echo $relationships->relation; } else{echo "Choose Relationship";} ?> "> <?php if(isset( $relationships->relation)){echo $relationships->relation; } else{echo "Choose Relationship";} ?> </option>
                                  <option value="">Choose Relationship</option>
                                  <option value="Mother">Mother</option>
                                  <option value="Father">Father</option>
                                  <option value="Daughter">Daughter</option>
                                  <option value="Son">Son</option>
                                  <option value="Sister">Sister</option>
                                  <option value="Brother">Brother</option>
                                  <option value="Uncle">Uncle</option>
                                  <option value="Aunt">Aunt</option>
                                  <option value="Friend">Friend</option>
                                  <option value="Niece">Niece</option>
                                  <option value="Cousin(female)">Cousin(female)</option>
                                  <option value="Cousin(male)">Cousin(male)</option>
                                  <option value="Grandfather">Grandfather</option>
                                  <option value="Grandmother">Grandmother</option>
                                  <option value="Grandson">Grandson</option>
                                  <option value="Granddaughter">Granddaughter</option>
                                </select>
                              </div>
                              <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_relation btn btn-info btn-sm"> Remove</a> </div>
                            </div>
                             <?php } } else {  ?>

                                <div class="row" id="add_relation_1">   

                              <div class="form-group col-xs-12">
                                <label for="date-to"> Name </label>
                                <input id="relation_name_1" type="text" class="form-control input-group-lg" name="relation_name[]" title="Enter a Date" value="" />
                              </div>    

                              <div class="form-group col-sm-12" style="font-size: 15px;">
                                <label>Relationship</label>
                                <select name="relation_type[]" id="relation_type_1" class="form-control" style="background-color:#eff0f1;">
                                  
                                  <option value="">Choose Relationship</option>
                                  <option value="Mother">Mother</option>
                                  <option value="Father">Father</option>
                                  <option value="Daughter">Daughter</option>
                                  <option value="Son">Son</option>
                                  <option value="Sister">Sister</option>
                                  <option value="Brother">Brother</option>
                                  <option value="Uncle">Uncle</option>
                                  <option value="Aunt">Aunt</option>
                                  <option value="Friend">Friend</option>
                                  <option value="Niece">Niece</option>
                                  <option value="Cousin(female)">Cousin(female)</option>
                                  <option value="Cousin(male)">Cousin(male)</option>
                                  <option value="Grandfather">Grandfather</option>
                                  <option value="Grandmother">Grandmother</option>
                                  <option value="Grandson">Grandson</option>
                                  <option value="Granddaughter">Granddaughter</option>
                                </select>
                              </div>
                             
                            </div>

                             <?php } ?>

                          </div>
                         

                              <div class="col-md-12">
                                        <div class="pull-left" style="width:100%;"> <span style="color:#e91e63; font-size:13px;">
                                          <a href="JavaScript:void(0);" id="add_relationship" data-nxt_relation_name="2"><i class="fa fa-plus-circle"></i>
                                           Add more Family Members</a></span>
                                        </div>
                              </div>
                            
                            <div class="row">
                              <div style="width:100%;" class="text-center">
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

                   <!-- end relationship personal model popup -->

                          <!-- contact info tab for personal  -->         

                                  <div class="tab-pane" id="d">
                                    <div class="col-md-10">
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/email-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Email <br>
                                          <span style="color:#333; font-size:13px;"><?php echo $this->session->userdata('email'); ?></span></div>
                                        
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/phone-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Phone No <br>
                                          <span style="color:#333; font-size:13px;"><?php echo $this->session->userdata('phone'); ?></span></div>
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/country-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">Country <br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->country)){echo $profile->country; } else{echo "";} ?></span></div>
                                             <div class="pull-left text-right" style="width:10%; margin-top:10px;">
                                           <a href="#" data-toggle="modal" data-target=".modal-3" >
                                          <img src="../assets/images/edit_icon.png" alt=""/></a></div>                                  
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/state-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">State<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->state)){echo $profile->state; } else{echo "";} ?></span></div>
                                                                                
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/social-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Social Links<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->sociallinks)){echo $profile->sociallinks; } else{echo "";} ?></span></div>
                                      
                                      </div>
                                    </div>
                                  </div>

                                   <!-- contact info personal model popup -->

                <div class="modal fade modal-3" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <form action="<?php echo base_url('profile/personal_update_contactinfo'); ?>" method="post" 
                      id="personal_update_contactinfo" class="form-inline">
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Country</label>
                                <input  type="text" class="form-control" name="country" value="<?php if(isset($profile->country)){echo $profile->country; } else{echo "";} ?>" />
                              </div>
                            </div>
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">State</label>
                                <input id="birthday" type="text" class="form-control input-group-lg" name="state" title="Enter a Date" value="<?php if(isset($profile->state)){echo $profile->state; } else{echo "";} ?>" />
                              </div>  
                              </div>                        
                            <div class="row ">  
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Social Links</label>
                                <input  type="text" class="form-control input-group-lg" name="social_link" title="Enter a Date" value="<?php if(isset($profile->sociallinks)){echo $profile->sociallinks; } else{echo "";} ?>" />
                              </div>  
                            </div>
                              <div class="row input_fields_container" style="margin-top:-25px;">  
                                <button class="add_more_button" style="border: none; background: transparent; float: right;">+Add More Fields</button>
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
                   <!-- contact info personal model popup -->

                                   <!-- event info tab for personal  -->

                                  <div class="tab-pane" id="e">
                                    <div class="col-md-10">
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/birthday-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Birthday<br>
                                          <span style="color:#333; font-size:13px;"></span> <br>
                                           </div>
                                       
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;"> <a href="#" data-toggle="modal" data-target=".modal-4" ><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/wedding-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Wedding<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->wedding)){echo $profile->wedding; } else{echo "";} ?></span> <br>
                                        </div>
                                       
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;"><a href="#"><i class="fa fa-bell" ></i></a></div>
                                      </div>                                  
                                      
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/social-1-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Social Functions<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->socialfunction)){echo $profile->socialfunction; } else{echo "";} ?></span> <br>
                                           </div>
                                        
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;"><a href="#"><i class="fa fa-bell" ></i></a></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/parties-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Parties<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile->parties)){echo $profile->parties; } else{echo "";} ?></span> <br>
                                           </div>
                                        
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;"><a href="#"><i class="fa fa-bell" ></i></a></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12 text-center">
                                        <div class="pull-left" style="width:100%;"> <span style="color:#e91e63; font-size:13px;"><a href="#">+ Add Event Functions</a></span> </div>
                                      </div>
                                    </div>
                                  </div>

                                      <!-- event info personal model popup -->

              <div class="modal fade modal-4" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <form action="<?php echo base_url('profile/personal_update_eventinfo'); ?>" method="post"  id="personal_update_eventinfo"
                   class="form-inline">                            
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Wedding</label>
                                <input  type="text" id="wedding" class="form-control" name="wedding" value="<?php if(isset($profile->wedding)){echo $profile->wedding; } else{echo "";} ?>" />
                              </div>
                            </div>                                                  
                            <div class="row ">  
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Social Functions</label>
                                <input  type="text" id="socialfunction" class="form-control input-group-lg" name="social_function" title="Enter a Date" value="<?php if(isset($profile->socialfunction)){echo $profile->socialfunction; } else{echo "";} ?>" />
                              </div>  
                            </div>
                              <div class="row ">  
                              <div class="form-group col-xs-12">
                                <label for="date-to" class=""> Parties</label>
                                <input  type="text" id="party" class="form-control input-group-lg" name="party" title="Enter a Date" value="<?php if(isset($profile->parties)){echo $profile->parties; } else{echo "";} ?>" />
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

                   <!-- event info personal model popup -->

                                </div>
                              </div>
                            </div>                                                        
                          </div>
                          </div>
                          
         </form>
                      </div>
                    </div>
                  </div>


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
              <!-- Day 2 -->

              <!-- professional tab start here  -->

              <div class="tab-pane" id="2" style="margin-top: 20px;">
                <div class="row">
                  <div class="col-md-9">
                    <div class="form-wizard col-md-12">                    
                      <div class="edit-profile-container">
                        <div class="block-title">                         
                        </div>
                      <div class="edit-block" style="margin-bottom: 0px;">
                     
                          <div class="row">
                            <div class="col-md-12" style="font-size:15px;">
                              <div class="tabbable tabs-left">
                                <ul class="nav nav-tabs">
                                  <li style="width:100%;" class="active"><a href="#11" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Overview</a></li>
                                  <li style="width:100%;"><a href="#12" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Professional Background</a></li>
                                
                                  <li style="width:100%;"><a href="#14" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Professional Interests/ Events</a></li>
                                  <li style="width:100%;"><a href="#15" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Professional Groups</a></li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="11">
                                    <div class="col-md-8">
                                      <div class="col-md-12">
                                       This is your  event identification name tag, You can use your "WOWtag ID" to share your personal and professional information and attend at any event. You can create your own WOWtag ID to add some form of personality to yourself.
                                      </div>
                                      <div class="col-md-12" style="margin-top:15px;">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/wow-tag-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;"><a href="#" style="font-size:16px; color:#333;"> <?php echo $this->session->userdata('wowtag'); ?> </a><br>
                                          <span style="color:#fff; font-size:13px; background-color:#e91e63; padding:3px 5px; border-radius:5px;">Your Wowtag ID</span></div>
                                        <div class="pull-left" style="width:5%; margin-top:10px;"><a href="#"></div>
                                        
                                      </div>
                                                                       
                                    </div>
                                  </div>

                 <div class="tab-pane" id="12">
                      <div class="col-md-8">                                     
                           <div class="col-md-12">
                                <div class="pull-left" style="width:7%;"><img src="../assets/images/college-icon.png" alt=""/> </div>
                                 <div class="pull-left" style="width:75%; color:#333;">College<br>
                                 <span style="color:#333; font-size:13px;">
                                  <?php
                                       foreach ($profile->education as $profiles) 
                                        {
                                          echo $profiles;
                                         } 
                                  ?><br>                                        
                                </span></div>
                                       
                                <div class="pull-right text-right" style="width:10%; margin-top:10px;"> <a href="#" data-toggle="modal" data-target=".modal-professional" ><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                            </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                     
                                      <div class="col-md-12">
                                            <div class="pull-left" style="width:7%;"><img src="../assets/images/workplace-icon.png" alt=""/></div>
                                            <div class="pull-left" style="width:75%;">Current Work Place<br>
                                                <span style="color:#333; font-size:13px;"> 
                                                  <?php if(isset($profile->workplace)){echo $profile->workplace; } else{echo "";} ?>
                                                 <br>
                                                </span>
                                            </div>
                                      </div>

                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                     
                                      <div class="col-md-12">
                                            <div class="pull-left" style="width:7%;"><img src="../assets/images/intro-icon.png" alt=""/></div>
                                            <div class="pull-left" style="width:65%; text-transform: capitalize;">Work Experience<br>
                                               <span style="color:#333; font-size:13px;"> 

                                                  <?php 
                                                        foreach($profile->workexperience as $workexperiences)
                                                        {
                                                           if(isset($workexperiences->title)||($workexperiences->company)||($workexperiences->location)||($workexperiences->frommonth)||($workexperiences->fromyear)||($workexperiences->tomonth)||($workexperiences->toyear)|| ($workexperiences->link)||($workexperiences->description))
                                                           {
                                                              echo $workexperiences->title." ".'<br>'; 
                                                              echo $workexperiences->company." ".'<br>'; 
                                                              echo $workexperiences->location." ".'<br>'; 
                                                              echo $workexperiences->frommonth." ".$workexperiences->fromyear."-".$workexperiences->tomonth." ".$workexperiences->toyear."".'<br>'; 
                                                              echo $workexperiences->link." ".'<br>'; 
                                                              echo $workexperiences->description." ".'<br>';
                                                            }                                                      
                                                          else
                                                          {
                                                            echo "Please update Your experience";
                                                          }
                                                        }
                                                  ?>                                                 

                                              </span>

                                            </div>

                                               <div class="pull-right text-right" style="width:20%; margin-top:10px;"> <a href="#" data-toggle="modal" data-target=".modal-ex_professional" ><img src="../assets/images/edit_icon.png" alt=""/></a>
                                                <a href="#" data-toggle="modal" data-target=".modal-ex_professional_new" ><img src="../assets/images/plus-icon" alt=""/></a>
                                               </div>

                                            
                                      </div>

                                             <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                       <div class="col-md-12">
                                            <div class="pull-left" style="width:7%;"><img src="../assets/images/designation-icon.png" alt=""/></div>
                                                <div class="pull-left" style="width:75%;">Designation<br>
                                               <span style="color:#333; font-size:13px;">
                                                     <?php if(isset($profile->designation)){echo $profile->designation; } else{echo "";} ?>
                                                     <br>
                                              </span></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                                <div class="pull-left" style="width:7%;"><img src="../assets/images/certi-icon.png" alt=""/></div>
                                                 <div class="pull-left" style="width:75%;"> Certifications<br>
                                                    <span style="color:#333; font-size:13px;">
                                                     <?php                                  
                                                        foreach ($profile->certification as $profiles) {
                                                              echo $profiles;
                                                            } ?><br> 
                                                    </span>                                       
                                                 </div>                                        
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                   
                                      <div class="col-md-12">
                                              <div class="pull-left" style="width:7%;"><img src="../assets/images/awards-icon.png" alt=""/></div>
                                                  <div class="pull-left" style="width:75%;">About Awards<br>
                                                    <span style="color:#333; font-size:13px;">
                                                     <?php                                  
                                                         foreach ($profile->volunteer as $profiles) {
                                                              echo $profiles;
                                                              } ?><br>
                                                    </span>
                                                 </div>
                                      </div>
                        </div>
                    </div>

                                       <!--  professional model popup -->

          <div class="modal fade modal-professional" tabindex="-1" role="dialog" aria-hidden="true">
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
                      <form action="<?php echo base_url('profile/professional_update'); ?>" method="post"  id="professional_update"
                       class="form-inline">
                                <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">College</label>
                                <input  type="text"  class="form-control" name="college[]" value="<?php
                                          foreach ($profile->education as $profiles) {
                                      echo $profiles;
                                   } ?>" />
                              </div>
                            </div>                                                  
                            <div class="row ">  
                              <div class="form-group col-xs-12">
                                <label for="date-to" class=""> Current Work Place</label>
                                <input  type="text"  class="form-control input-group-lg" name="work_place" title="Enter a Date" value="<?php if(isset($profile->workplace)){echo $profile->workplace; } else{echo "";} ?>" />
                              </div>  
                            </div>
                             <div class="row ">  
                              <div class="form-group col-xs-12">
                                <label for="date-to" class=""> Designation</label>
                                <input  type="text" class="form-control input-group-lg" name="designation" title="Enter a Date" value="<?php if(isset($profile->designation)){echo $profile->designation; } else{echo "";} ?>" />
                              </div>  
                            </div>
                              <div class="row ">  
                              <div class="form-group col-xs-12">
                                <label for="date-to" class=""> Certificates</label>
                                <input  type="text"  class="form-control input-group-lg" name="certificates[]" title="Enter a Date" value="<?php
                                   foreach ($profile->certification as $profiles) {
                                      echo $profiles;
                                   } ?>" />
                              </div>  
                            </div>
                            <div class="row ">  
                              <div class="form-group col-xs-12">
                                <label for="date-to" class=""> Awards</label>
                                <input  type="text"  class="form-control input-group-lg" name="awards[]" title="Enter a Date" value="<?php
                                   foreach ($profile->volunteer as $profiles) {
                                      echo $profiles;
                                   } ?>" />
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
                   <!--  professional background model popup -->

                     <!--  professional work experience  model popup -->
   <div class="modal fade modal-ex_professional" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
               <div class="post-content">                            
                  <div class="post-container" style="padding-bottom:20px;">               
                     <div class="post-detail">
                       <div class="user-info">
                         <h3>Edit Experience</h3>
                            <span style="color:#333; font-size: 15px">Please give the following information to edit</span>
                        </div>                              
                        <div class="line-divider"></div>
            <div class="user-info">
              <div class="row" style="padding:10px;">                              
                      <form action="<?php echo base_url('profile/professional_work_exp'); ?>" method="post"  id="professional_work_exp" 
                        class="form-inline">  

                                 <?php 
                                           foreach($profile->workexperience as $workexperiences)
                                            {
                                  ?>                          
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Title</label>
                                <input type="text" id="wedding" class="form-control" name="title[]" value="<?php if(isset($workexperiences->title)){echo $workexperiences->title; } else{echo "";} ?>" required />
                              </div>
                            </div>                                                  
                            <div class="row ">  
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Company</label>
                                <input  type="text" id="socialfunction" class="form-control input-group-lg" name="company[]" title="Enter a Date" value="<?php if(isset($workexperiences->company)){echo $workexperiences->company; } else{echo "";} ?>" required/>
                              </div>  
                            </div>
                              <div class="row ">  
                                <div class="form-group col-xs-12">
                                  <label for="date-to"> Location</label>
                                  <input  type="text" id="party" class="form-control input-group-lg" name="location[]" title="Enter a Date" value="<?php if(isset($workexperiences->location)){echo $workexperiences->location; } else{echo "";} ?>" required />
                                </div>  
                             </div>
                            <div class="row">  
                                <div class="form-group col-md-6">
                                  <label for="date-to"> From</label>
                                  <select name="from_month[]" class="form-control">
                                    <option value="<?php if(isset($workexperiences->frommonth)){echo $workexperiences->frommonth; } else{echo "Month";} ?> "><?php if(isset($workexperiences->frommonth)){echo $workexperiences->frommonth; } else{echo "Month";} ?>  </option>
                                      <option value=""> Month</option>
                                      <option value="january"> January</option>
                                      <option value="february"> February</option>
                                      <option value="march"> March</option>
                                      <option value="april"> April</option>
                                      <option value="may"> May</option>
                                      <option value="june"> June</option>
                                      <option value="july"> July</option>
                                      <option value="august"> August</option>
                                      <option value="september"> September</option>
                                      <option value="october"> October</option>
                                      <option value="november"> November</option>
                                      <option value="december"> December</option>
                                  </select>
                                </div>  
                                <div class="form-group col-md-6">
                                  <label for="date-to">To</label>
                                 <select name="to_month[]" class="form-control">
                                      <option value="<?php if(isset($workexperiences->tomonth)){echo $workexperiences->tomonth; } else{echo "Month";} ?> "><?php if(isset($workexperiences->tomonth)){echo $workexperiences->tomonth; } else{echo "Month";} ?>  </option>
                                      <option value=""> Month</option>
                                      <option value="january"> January</option>
                                      <option value="february"> February</option>
                                      <option value="march"> March</option>
                                      <option value="april"> April</option>
                                      <option value="may"> May</option>
                                      <option value="june"> June</option>
                                      <option value="july"> July</option>
                                      <option value="august"> August</option>
                                      <option value="september"> September</option>
                                      <option value="october"> October</option>
                                      <option value="november"> November</option>
                                      <option value="december"> December</option>
                                 </select>
                                </div>  
                            </div>

                            <div class="row">  
                                <div class="form-group col-md-6">                                 
                                  <select name="from_year[]" class="form-control">
                                     <option value="<?php if(isset($workexperiences->fromyear)){echo $workexperiences->fromyear; } else{echo "Year";} ?>"><?php if(isset($workexperiences->fromyear)){echo $workexperiences->fromyear; } else{echo "Year";} ?>  </option>
                                      <option value="2017"> 2017</option>
                                      <option value="2016"> 2016</option>
                                      <option value="2015"> 2015</option>
                                      <option value="2014"> 2014</option>
                                      <option value="2013"> 2013 </option>
                                      <option value="2012"> 2012</option>
                                      <option value="2011"> 2011</option>
                                      <option value="2010"> 2010</option>
                                      <option value="2009"> 2009</option>
                                      <option value="2008"> 2008</option>
                                      <option value="2007"> 2007</option>
                                      <option value="2006"> 2006</option>
                                      <option value="2005"> 2005</option>
                                      <option value="2004"> 2004</option>
                                      <option value="2003"> 2003</option>
                                      <option value="2002"> 2002</option>
                                      <option value="2001"> 2001</option>
                                      <option value="2000"> 2000</option>
                                  </select>
                                </div> 

                                <div class="form-group col-md-6">                              
                                 <select name="to_year[]" class="form-control">
                                      <option value="<?php if(isset($workexperiences->toyear)){echo $workexperiences->toyear; } else{echo "Year";} ?>"><?php if(isset($workexperiences->toyear)){echo $workexperiences->toyear; } else{echo "Year";} ?>  </option>
                                      <option value="2017"> 2017</option>
                                      <option value="2016"> 2016</option>
                                      <option value="2015"> 2015</option>
                                      <option value="2014"> 2014</option>
                                      <option value="2013"> 2013 </option>
                                      <option value="2012"> 2012</option>
                                      <option value="2011"> 2011</option>
                                      <option value="2010"> 2010</option>
                                      <option value="2009"> 2009</option>
                                      <option value="2008"> 2008</option>
                                      <option value="2007"> 2007</option>
                                      <option value="2006"> 2006</option>
                                      <option value="2005"> 2005</option>
                                      <option value="2004"> 2004</option>
                                      <option value="2003"> 2003</option>
                                      <option value="2002"> 2002</option>
                                      <option value="2001"> 2001</option>
                                      <option value="2000"> 2000</option>
                                 </select>
                                </div>  
                            </div>

                            <div class="row">  
                                <div class="form-group col-xs-12">
                                  <label for="date-to"> Description</label>
                                 <textarea name="description[]" class="form-control" style="min-height:100px;" > 
                                    <?php 
                                        if(isset($workexperiences->description)) 
                                        {
                                           echo $workexperiences->description; 
                                        } 
                                        else 
                                          { 
                                            echo ""; 
                                          } 
                                    ?>
                                  </textarea> 
                                 
                                </div>  
                            </div>

                            <div class="row">  
                                <div class="form-group col-xs-12">
                                  <label for="date-to">Add or link to external documents, photos, sites, videos, and presentations.</label>
                                </div>  
                            </div>

                             <div class="row">  
                                <div class="form-group col-xs-12">                                  
                                    <input type="button"  id="link_show" value="Link" class="btn">
                                </div>
                            </div>

                             <div class="row">  
                                <div class="form-group col-xs-12">
                                    <input type="text" name="link[]" id="link_url" class="form-control" placeholder="Paste or type a link to a file or video" style="display: none;" value="<?php if(isset($workexperiences->link)){echo $workexperiences->link; } else{echo "";} ?>" >  
                                </div>
                            </div>
                                                      
                            <div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Save Changes" class="btn btn-primary" style="width:140px;">                                
                              </div>
                            </div>
                            <?php } ?>
                      </form>
                  </div>
                 </div>
               </div>                                
             </div>
           </div>
         </div>
       </div>
     </div>


       <!--  professional work experience  model popup 2 -->
   <div class="modal fade modal-ex_professional_new" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
               <div class="post-content">                            
                  <div class="post-container" style="padding-bottom:20px;">               
                     <div class="post-detail">
                       <div class="user-info">
                         <h3>Edit Experience</h3>
                            <span style="color:#333; font-size: 15px">Please give the following information to edit</span>
                        </div>                              
                        <div class="line-divider"></div>
            <div class="user-info">
              <div class="row" style="padding:10px;">                              
                      <form action="<?php echo base_url('profile/professional_work_exp'); ?>" method="post"  id="professional_work_exp" 
                        class="form-inline">  

                                                        
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Title</label>
                                <input type="text" id="wedding" class="form-control" name="title[]" value="" required />
                              </div>
                            </div>                                                  
                            <div class="row ">  
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Company</label>
                                <input  type="text" id="socialfunction" class="form-control input-group-lg" name="company[]" title="Enter a Date" value="" required/>
                              </div>  
                            </div>
                              <div class="row ">  
                                <div class="form-group col-xs-12">
                                  <label for="date-to"> Location</label>
                                  <input  type="text" id="party" class="form-control input-group-lg" name="location[]" title="Enter a Date" value="" required />
                                </div>  
                             </div>
                            <div class="row">  
                                <div class="form-group col-md-6">
                                  <label for="date-to"> From</label>
                                  <select name="from_month[]" class="form-control">
                                   
                                      <option value=""> Month</option>
                                      <option value="january"> January</option>
                                      <option value="february"> February</option>
                                      <option value="march"> March</option>
                                      <option value="april"> April</option>
                                      <option value="may"> May</option>
                                      <option value="june"> June</option>
                                      <option value="july"> July</option>
                                      <option value="august"> August</option>
                                      <option value="september"> September</option>
                                      <option value="october"> October</option>
                                      <option value="november"> November</option>
                                      <option value="december"> December</option>
                                  </select>
                                </div>  
                                <div class="form-group col-md-6">
                                  <label for="date-to">To</label>
                                 <select name="to_month[]" class="form-control">
                                     
                                      <option value=""> Month</option>
                                      <option value="january"> January</option>
                                      <option value="february"> February</option>
                                      <option value="march"> March</option>
                                      <option value="april"> April</option>
                                      <option value="may"> May</option>
                                      <option value="june"> June</option>
                                      <option value="july"> July</option>
                                      <option value="august"> August</option>
                                      <option value="september"> September</option>
                                      <option value="october"> October</option>
                                      <option value="november"> November</option>
                                      <option value="december"> December</option>
                                 </select>
                                </div>  
                            </div>

                            <div class="row">  
                                <div class="form-group col-md-6">                                 
                                  <select name="from_year[]" class="form-control">
                                     <option value=""> Year </option>
                                      <option value="2017"> 2017</option>
                                      <option value="2016"> 2016</option>
                                      <option value="2015"> 2015</option>
                                      <option value="2014"> 2014</option>
                                      <option value="2013"> 2013 </option>
                                      <option value="2012"> 2012</option>
                                      <option value="2011"> 2011</option>
                                      <option value="2010"> 2010</option>
                                      <option value="2009"> 2009</option>
                                      <option value="2008"> 2008</option>
                                      <option value="2007"> 2007</option>
                                      <option value="2006"> 2006</option>
                                      <option value="2005"> 2005</option>
                                      <option value="2004"> 2004</option>
                                      <option value="2003"> 2003</option>
                                      <option value="2002"> 2002</option>
                                      <option value="2001"> 2001</option>
                                      <option value="2000"> 2000</option>
                                  </select>
                                </div> 

                                <div class="form-group col-md-6">                              
                                 <select name="to_year[]" class="form-control">
                                      <option value=""> Year </option>
                                      <option value="2017"> 2017</option>
                                      <option value="2016"> 2016</option>
                                      <option value="2015"> 2015</option>
                                      <option value="2014"> 2014</option>
                                      <option value="2013"> 2013 </option>
                                      <option value="2012"> 2012</option>
                                      <option value="2011"> 2011</option>
                                      <option value="2010"> 2010</option>
                                      <option value="2009"> 2009</option>
                                      <option value="2008"> 2008</option>
                                      <option value="2007"> 2007</option>
                                      <option value="2006"> 2006</option>
                                      <option value="2005"> 2005</option>
                                      <option value="2004"> 2004</option>
                                      <option value="2003"> 2003</option>
                                      <option value="2002"> 2002</option>
                                      <option value="2001"> 2001</option>
                                      <option value="2000"> 2000</option>
                                 </select>
                                </div>  
                            </div>

                            <div class="row">  
                                <div class="form-group col-xs-12">
                                  <label for="date-to"> Description</label>
                                 <textarea name="description[]" class="form-control" style="min-height:100px;" > 
                                   
                                  </textarea> 
                                 
                                </div>  
                            </div>

                            <div class="row">  
                                <div class="form-group col-xs-12">
                                  <label for="date-to">Add or link to external documents, photos, sites, videos, and presentations.</label>
                                </div>  
                            </div>

                             <div class="row">  
                                <div class="form-group col-xs-12">                                  
                                    <input type="button"  id="link_show" value="Link" class="btn">
                                </div>
                            </div>

                             <div class="row">  
                                <div class="form-group col-xs-12">
                                    <input type="text" name="link[]" id="link_url" class="form-control" placeholder="Paste or type a link to a file or video" style="display: none;" value="" >  
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
                      
                   <!--  professional work experience model popup -->

                                  <div class="tab-pane" id="13">
                                    <div class="col-md-8">
                                      
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:100%;"> <span style="color:#e91e63; font-size:13px;"><a href="#">+ Add work/ Job</a></span> </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="14">
                                    <div class="col-md-8">
                                     <div class="col-md-10 text-center" style="margin:5px 0 25px;"><span style="font-size:16px; color:#fff; background:#706666; padding:5px 10px; border-radius:5px;">Seminar/ Conferences</span> </div>
                                     <div class="col-md-2 text-right" style="margin:5px 0 25px;"><a href="#"><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                                      <div class="col-md-12">
                                        <div class="edit-block" style="margin-bottom:0;">
                                          <ul class="list-inline interests">
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Startup</a></li>
                                            <li><a href="#">Computer IT</a></li>
                                            <li><a href="#">Consulting</a></li>
                                            <li><a href="#">Fashion</a></li>
                                          </ul>
                                        </div>
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0 5px;"></div>
                                      <div class="col-md-10 text-center" style="margin:25px 0 25px;"><span style="font-size:16px; color:#fff; background:#706666; padding:5px 10px; border-radius:5px;">Training/ Classes</span> </div>
                                     <div class="col-md-2 text-right" style="margin:25px 0 25px;"><a href="#"><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                                      <div class="col-md-12">
                                        <div class="edit-block" style="margin-bottom:0;">
                                          <ul class="list-inline interests">
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Blogging</a></li>
                                            <li><a href="#">Cooking</a></li>
                                            <li><a href="#">Fitness</a></li>
                                            <li><a href="#">Coding</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0 5px;"></div>
                                      <div class="col-md-10 text-center" style="margin:25px 0 25px;"><span style="font-size:16px; color:#fff; background:#706666; padding:5px 10px; border-radius:5px;">Networking Events</span> </div>
                                     <div class="col-md-2 text-right" style="margin:25px 0 25px;"><a href="#"><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                                      <div class="col-md-12">
                                        <div class="edit-block" style="margin-bottom:0;">
                                          <ul class="list-inline interests">
                                            <li><a href="#">Enterpreneurs</a></li>
                                            <li><a href="#">Writers</a></li>
                                            <li><a href="#">Fundraising</a></li>
                                            <li><a href="#">Founders</a></li>
                                            <li><a href="#">Rallies</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0 5px;"></div>
                                      <div class="col-md-10 text-center" style="margin:25px 0 25px;"><span style="font-size:16px; color:#fff; background:#706666; padding:5px 10px; border-radius:5px;">Online Events</span> </div>
                                     <div class="col-md-2 text-right" style="margin:25px 0 25px;"><a href="#"><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                                      <div class="col-md-12">
                                        <div class="edit-block" style="margin-bottom:0;">
                                          <ul class="list-inline interests">
                                            <li><a href="#">Webinars</a></li>
                                            <li><a href="#">Teleconf</a></li>
                                            <li><a href="#">Podcast</a></li>
                                            <li><a href="#">Campaigns</a></li>
                                            <li><a href="#">Following</a></li>
                                          </ul>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="15">
                                    <div class="col-md-8">
                                      <div class="col-md-10 text-center" style="margin:5px 0 25px;"><span style="font-size:16px; color:#fff; background:#706666; padding:5px 10px; border-radius:5px;">My Professional Group</span> </div>
                                     <div class="col-md-2 text-right" style="margin:5px 0 25px;"><a href="#"><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                                      <div class="col-md-12">
                                        <div class="edit-block" style="margin-bottom:0;">
                                          <ul class="list-inline interests">
                                            <li><a href="#">Texas Businessmen</a></li>
                                            <li><a href="#">Fitness Connection</a></li>
                                            <li><a href="#">YC Coders</a></li>
                                            <li><a href="#">Founders Club</a></li>
                                            <li><a href="#">Fashion Guru</a></li>
                                          </ul>
                                        </div>
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>                            
                            
                          </div>
                          </div>                          
                                                  
                        </form>
                      </div>
                    </div>
                  </div>
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


  // personal relationship dynamic add

  function generete_dynamic_relationship(count){

  var relation = ' <div id="add_relation_'+count+'"> <div class="row"> <div class="form-group col-xs-12"> <label for="date-to" class="">Name</label> <input id="relation_name_'+count+'" type="text" class="form-control input-group-lg" name="relation_name[]" title="Enter a Date" value="" /> </div> <div class="form-group col-sm-12" style="font-size: 15px;"> <label>Relationship</label> <select name="relation_type[]" id="relation_type_'+count+'" class="form-control" style="background-color:#eff0f1;"> <option value="">Choose Relationship</option> <option value="Mother">Mother</option> <option value="Father">Father</option> <option value="Daughter">Daughter</option> <option value="Son">Son</option> <option value="Sister">Sister</option> <option value="Brother">Brother</option> <option value="Uncle">Uncle</option> <option value="Aunt">Aunt</option> <option value="Friend">Friend</option> <option value="Niece">Niece</option> <option value="Cousin(female)">Cousin(female)</option> <option value="Cousin(male)">Cousin(male)</option> <option value="Grandfather">Grandfather</option> <option value="Grandmother">Grandmother</option> <option value="Grandson">Grandson</option> <option value="Granddaughter">Granddaughter</option> </select> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_relation btn btn-info btn-sm"> Remove</a> </div> </div> </div>';

    return relation;
}



$(document).ready(function(){
        $("#add_relationship").click(function()
          {       
            var nxtticket_count = $(this).data("nxt_relation_name"); 
            var nxtvenueHTML = generete_dynamic_relationship(nxtticket_count);
            $("#dynamic_add_relation").append(nxtvenueHTML);        
              nxtticket_count++;
           $(this).data('nxt_relation_name', nxtticket_count); //update data nxtportion   
        });   
});

// remove div
$(document).on('click', '.remove_relation', function(e)
    {
         
          $(this).parents('[id^=add_relation_]').remove();
         
    });

 //personal profile relationship and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#personal_update_relation", function(e){
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
                        // swal("Good job!", "Your profile successfully updated!", "success");
                        window.location.href = base_url + 'profile/profile_get';
                        }else if(response.status == 'Failed')
                       {
                        
                        swal("Sorry!", "somethink wrong !", "error");
                       }          
                    }
                });
          
      });
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
