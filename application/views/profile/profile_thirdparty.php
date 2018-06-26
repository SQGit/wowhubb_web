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
	margin: 200px auto 0!important;
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
.calendar {
    max-width: 900px;
    margin: 0 auto;
  }

.text {
  color: white;
  font-size: 13px;
  position: absolute;
  top: 36px;
  left: 82px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  cursor:pointer;
  background-color: #111;
  padding: 3px 10px;
  border-radius: 5px;
}
.update_profile_pic{
  color: white;
  font-size: 13px;
  position: absolute;
  top: 73px;
  left: 67px;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  cursor:pointer;
  background-color: rgba(0,0,0,.5);
  padding: 3px 10px;
  border-radius: 5px;
}

#update_hover {
    opacity: 0.0;
    -webkit-transition: all 500ms ease-in-out;
    -moz-transition: all 500ms ease-in-out;
    -ms-transition: all 500ms ease-in-out;
    -o-transition: all 500ms ease-in-out;
    transition: all 500ms ease-in-out;
}

#img_hover:hover + #update_hover {
    opacity: 1.0;
}
.profile-info {
    position: absolute;
    text-align: center;
    padding: 0 20px;
    top: -168px!important;
    z-index: 999;
}
.fc-toolbar h2 {
    margin-top: 15px;
    margin-bottom: 0;
  font-size:15px!important;
  font-weight:bold;
}
.timeline-cover {
    position: relative;
    max-height: 305px!important;
}

.profile-info img.profile-photo {
    height: 100px!important; 
     width: 108px!important; 
    border-radius: 50%;
    border: 3px solid #f5f5f5;
}
</style>
<link href="<?php echo base_url ('assets/css/fullcalendar.min.css') ?>" rel='stylesheet' />
<link href="<?php echo base_url ('assets/css/fullcalendar.print.min.css') ?>" rel='stylesheet' media='print' />


</head>
<body class="landing-page">
<div class="content-bg-wrap">
  <div class="content-bg"></div>
</div>

<!-- Header
    ================================================= -->
<!-- Header
    ================================================= -->
  <header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
        <div class="container"> 
      
          <?php  include('/../includes/header.php'); ?>
        </div>
        <!-- /.container --> 
      </nav>

       <form class="navbar-form navbar-right hidden-sm" style="position:absolute; right:325px; top:0px;" >
           <div class="form-group">
                   <i class="icon ion-android-search"></i>

                    <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px; min-width:330px;" /><br/>

                      <span id="display1">               
                      </span>
                     
           </div>            
       </form>
  </header>
<!--Header End-->
  

<div class="google-maps"> </div>
<div class="container"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
    <div class="timeline-cover"> 
    
              <?php 
                   if(isset($profile_info->personalcover))
                   {
                      ?>
           <img  src="http://104.197.80.225:3010/wow/media/personal/<?php echo $profile_info->personalcover; ?>" style="background-size:cover; width:100%; max-height:300px;" alt=""/> 
            <?php } else{ ?>
              <img  src="<?php echo base_url('assets/images/covers/1.jpg')?>" style="background-size:cover; width:100%; max-height:300px;" >;
                <?php }  ?>      
          
        <br>
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-4">
            <div class="profile-info">
                            
                 <div class="col-md-12" style="background-color:#333; border-radius:8px 8px 0 0; padding-top:20px; padding-bottom:15px; border:1px solid #c9c1c1;">
                <div class="col-md-6 text-left">

                <div style="width:100%;" id="img_hover">
                  <?php 
                    if(isset($profile_info->personalimage))
                     {
                  ?>
                    <img  id="profileImage" src="http://104.197.80.225:3010/wow/media/personal/<?php echo $profile_info->personalimage; ?>" class="profile-pic img-responsive profile-photo" />
                  <?php } else{  ?>                 
                      
                    <img class="img-responsive img-circle" id="profileImage" src="<?php echo base_url('assets/images/album/avatar_male.png')?>">
                  <?php  }  ?>               
               
                </div>                  

                <div style="font-size:12px; font-weight:normal; line-height:18px; color:#fff; margin-top:5px;">
                 <?php echo $profile_info->firstname." ".$profile_info->lastname; ?>
                </div>

                <div style="font-size:12px; font-weight:bold;  color:#fff; margin-top:0px;">
                    <?php
                      if(isset($profile_info->designation)) {
                        echo  $profile_info->designation;
                      } else {
                              echo " "; 
                        } 
                    ?>
                   
                </div>
                
                </div>
                        <div class="col-md-6">                                 
                            <?php 
                              if(isset($profile_info->personalself)){
                            ?>
                            <div style="position: absolute; left: 65px; top: 50px;">
                              <a href="http://104.197.80.225:3010/wow/media/personal/<?php echo $profile_info->personalself; ?>" class="html5lightbox" data-width="480" data-height="320">
                              <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user" />
                              </a>
                            </div>
                            <a href="http://104.197.80.225:3010/wow/media/personal/<?php echo $profile_info->personalself; ?>" class="html5lightbox" data-width="480" data-height="320">
                            <video style="width:125px; height:125px; background-color:#e9e9e9; border-radius:5px;" id="myvideo" controlsList="nodownload" >
                              <source src="http://104.197.80.225:3010/wow/media/personal/<?php echo $profile_info->personalself; ?>" type="video/mp4">
                            </video>
                            </a>
                            <?php } else {  ?>
                              <video style="width:125px; height:125px;" id="myvideo">
                                <source src="" type="video/mp4">
                              </video>
                            <?php } ?>
                        </div>
               
              </div>
                  <div class="col-md-12" style="background-color:#f3f3f3; padding-top:3px; padding-bottom:3px;">
                 <div class="row">
                   <div class="col-md-9">
                    <img src="<?php echo base_url('assets/images/wow-pink-1.png'); ?>" alt="">
                    <span style="color:#000; font-size:18px;">
                       <?php if(isset($profile_info->wowtagid)){echo $profile_info->wowtagid; } else{echo "";} ?>
                     
                   </span></div>
                    <div class="col-md-3">
                      <a href="#" data-toggle="modal" data-target=".modal-video" >
                      <img src="../assets/images/edit_icon.png" alt="">
                      </a>
                    </div>
                 </div>
              </div>    
                

            </div>
          </div>

          <div class="col-md-8" >
            
            <ul class="list-inline profile-menu">
              
              <li><a href="<?php echo base_url('Profile/profile_get'); ?>" class="active">Profile</a></li>
              <!-- <li><a href="<?php echo base_url ('event/profile_get_eventfeed') ?>" >Event Feed</a></li> -->
              <li><a href="<?php echo base_url ('home/interest_get') ?>" >Interests</a></li>
              <li><a href="<?php echo base_url ('Profile/friends_connection') ?>">Friend Connections</a></li>
              
              <li><a href="#">Photos</a></li>
            </ul>
            <ul class="follow-me list-inline">
              <li><?php if(isset($frds_count)) { echo $frds_count; } ?> Connections</li>
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
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div id="exTab2" >
            <ul class="nav nav-tabs">
              <li class="active"> <a  href="#1" data-toggle="tab" style="font-size: 13px; font-weight: bold;">Personal Profile</a> </li>
              <li><a href="#2" data-toggle="tab" style="font-size: 13px; font-weight: bold;">Professional Profile</a> </li>
            </ul>

            <div class="tab-content">            

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

                                  <li style="width:100%;" class="active">
                                    <a href="#Intro" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Intro
                                    </a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#livecity" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Cities You've Lived In</a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Relationships" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Relationships</a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Contact-Info" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Contact Info</a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Your-Life-view" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Your Life View</a>
                                  </li>
                                </ul>

                      <!-- overview tab for personal  -->

                  <div class="tab-content">
                        <div class="tab-pane active" id="Intro">
                          <div class="col-md-9">
                                <div class="col-md-12">
                                <p style="font-size:13px;"> This is your  event identification name tag, You can use your "WOWtag ID" to share your personal and professional information and attend at any event. You can create your own WOWtag ID to add some form of personality to yourself.</p>
                                </div>
                              <div class="col-md-12" style="margin-top:15px;">
                                    <div class="pull-left" style="width:7%;">
                                      <img src="../assets/images/wow-tag-icon.png" alt=""/>
                                    </div>
                                  <div class="pull-left" style="width:78%;">
                                      <a href="#" style="font-size:16px; color:#333;"> 
                                        <img src="<?php echo base_url('assets/images/wow-tag-icon.png'); ?>"> 
                                       <?php echo $profile_info->wowtagid; ?> 
                                      </a><br>
                                      <span style="color:#fff; font-size:13px; background-color:#e91e63; padding:3px 5px; border-radius:5px;">Wowtag ID
                                      </span>
                                  </div>
                              </div>
                          </div>
                        </div>
                                 
                     <!-- about me tab for personal  -->

                      <div class="tab-pane" id="livecity">
                            <div class="col-md-9">
                                    
                                  <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="<?php echo base_url('assets/images/state-icon.png'); ?>" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize; font-size:13px;">State<br>
                                          <span style="color:#333; font-size:13px;">
                                            <?php if(isset($profile_info->state)){echo $profile_info->state; } else{echo "";} ?>
                                              
                                          </span>
                                        </div>
                                  </div> 

                                  <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                     <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="<?php echo base_url('assets/images/country-icon.png'); ?>" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize; font-size:13px;">Country <br>
                                          <span style="color:#333; font-size:13px;">
                                            <?php if(isset($profile_info->country)){echo $profile_info->country; } else{echo "";} ?>
                                          </span>
                                        </div>                                                                        
                                      </div>       

                              </div>
                      </div>

                                   
                      <!-- relationship tab for personal  -->

                      <div class="tab-pane" id="Relationships">
                            <div class="col-md-9">
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:10%;">
                                         <img src="<?php echo base_url('assets/images/album/avatar_relationship.png');?>" alt=""/></div>
                                        <div class="pull-left" style="width:67%;">
                                          <?php if(isset($profile_info->relationshipstatus)){echo $profile_info->relationshipstatus; } else{echo "";} ?>
                                          <br>
                                          <span style="color:#333; font-size:13px;">
                                          <?php if(isset($profile_info->relationshipwith)){echo $profile_info->relationshipwith; } else{echo "";} ?>
                                          </span><br>
                                        </div>
                                    </div>
                            </div>
                      </div>

                      <!-- contact info tab for personal  -->         

                      <div class="tab-pane" id="Contact-Info">
                            <div class="col-md-9">
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="<?php echo base_url('assets/images/email-icon.png'); ?>" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Email <br>
                                          <span style="color:#333; font-size:13px;">

                                          <?php 
                                            if(isset($profile_info->email) && ($profile_info->emailvisible == 'enabled')){
                                              echo $profile_info->email; 
                                            } else{
                                              echo "";
                                            } 
                                          ?>
                                         </span></div>
                                    </div>

                                    <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="<?php echo base_url('assets/images/phone-icon.png');?>" alt=""/></div>
                                    <div class="pull-left" style="width:78%;">Phone No <br>
                                      <span style="color:#333; font-size:13px;">
                                        <?php 
                                          if(isset($profile_info->phone)&& ($profile_info->phonevisible == 'enabled')){
                                            echo $profile_info->phone; 
                                          } else{
                                            echo "";
                                          } 

                                        ?>                                            
                                      </span>
                                    </div>
                                    </div>
                            </div>
                      </div>

                      <!-- event info tab for personal  -->

                      <div class="tab-pane" id="Your-Life-view">
                          <div class="col-md-9">                                   
                                   
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="<?php echo base_url('assets/images/birthday-icon.png'); ?>" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:78%;">Birthday<br>
                                          <span style="color:#333; font-size:13px;">
                                            <?php 
                                            if(isset($profile_info->birthday)){
                                              echo date('M d', strtotime($profile_info->birthday));
                                              
                                               } else{
                                                echo "";
                                              } 
                                            ?>
                                          </span> <br>
                                        </div>
                                    </div>                                  
                                      
                                    <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>

                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="<?php echo base_url('assets/images/social-1-icon.png'); ?>" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:78%;">Gender<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->gender)){echo $profile_info->gender; } else{echo "";} ?></span> <br>
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
           <div class="col-md-3 static"> 
            <div class="calendar"></div>
          </div>
         
      </div>

  </div>
 

              <!-- tab  2 -->

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
                                  <li style="width:100%;" class="active">
                                    <a href="#professional_intro" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Intro</a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Colleges" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Colleges</a>
                                  </li>
                                
                                  <li style="width:100%;">
                                    <a href="#Work-Experience" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Work Experience</a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Professional-Skills" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Professional Skills</a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Certifications" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Certifications</a>
                                  </li>
                                </ul>


                    <div class="tab-content">
                                  
                                  <div class="tab-pane active" id="professional_intro">
                                    <div class="col-md-8">
                                      <div class="col-md-12"> 
                                        <p style="font-size:13px;"> This is your  event identification name tag, You can use your "WOWtag ID" to share your personal and professional information and attend at any event. You can create your own WOWtag ID to add some form of personality to yourself.
                                        </p>
                                        </div>
                                      <div class="col-md-12" style="margin-top:15px;">
                                        <div class="pull-left" style="width:7%;"><img src="<?php echo base_url('assets/images/wow-tag-icon.png'); ?>" alt=""/></div>

                                        <div class="pull-left" style="width:78%;">
                                          <a href="#" style="font-size:16px; color:#333;">
                                          <?php echo $profile_info->wowtagid; ?> 
                                        </a><br>

                                        <span style="color:#fff; font-size:13px; background-color:#e91e63; padding:3px 5px; border-radius:5px;">Wowtag ID</span></div>
                                        <div class="pull-left" style="width:5%; margin-top:10px;"><a href="#"></div>                                        
                                      </div>
                                    </div>
                                  </div>

                      <!-- tab view for proffesional background -->

                    <div class="tab-pane" id="Colleges">
                      <div class="col-md-8">                                     
                           <div class="col-md-12">
                                <div class="pull-left" style="width:7%;">
                                  <img src="<?php echo base_url('assets/images/college-icon.png');?>" alt=""/> </div>
                                 <div class="pull-left" style="width:75%; color:#333;">College<br>
                                 <span style="color:#333; font-size:13px;">
                                   
                                <?php
                                  if(!empty($profile_info->college)) 
                                  {
                                    foreach ($profile_info->college as $colleges) 
                                      {
                                        echo $colleges->college;
                                        echo "<br>";
                                        echo $colleges->from." - ".$colleges->to;
                                        echo "<br>";
                                      } 
                                  }
                              
                                ?>
                               </span>
                              </div>
                                       
                                <div class="pull-right text-right" style="width:10%; margin-top:10px;"> <a href="#" data-toggle="modal" data-target=".modal-professional" ><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                            </div>
                                  
                        </div>
                    </div>


                            <!-- tab view for proffesional interest -->

                            <div class="tab-pane" id="Certifications">
                                    <div class="col-md-8">
                                      
                                     
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:6%;"> 
                                          <img src="<?php echo base_url('assets/images/certi-icon.png'); ?>" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:90%; color:#333;">Certifications</div>
                                         <?php 
                                            if(!empty($profile_info->certification)) 
                                            {
                                            foreach ($profile_info->certification as $certifications) { 
                                          ?>
                                          <div class="pull-left" style="width:100%; text-transform: capitalize; font-size: 15px;">
                                            <?php if(isset($certifications->certification)) { echo $certifications->certification; } else { echo " "; } ?> - <?php if(isset($certifications->year)) { echo $certifications->year; } else { echo " "; } ?>
                                                                                      
                                            <span style="color:#333; font-size:13px;">                                             
                                            </span>
                                            <br>
                                          </div>                              
                                           <?php } } ?>
                                      </div>
                                      
                                    </div>
                            </div>


                                  <div class="tab-pane" id="Work-Experience">
                                    <div class="col-md-8">
                                     
                                      <div class="col-md-12">
                                            <div class="pull-left" style="width:7%;">
                                              <img src="<?php echo base_url('assets/images/intro-icon.png'); ?>" alt=""/></div>
                                            <div class="pull-left" style="width:65%; text-transform: capitalize; font-size:13px;">Work Experience<br>
                                               <span style="color:#333; font-size:13px;"> 

                                                  <?php 
                                                    if(!empty($profile_info->workexperience))
                                                      {
                                                        foreach($profile_info->workexperience as $workexperiences)
                                                        {
                                                           if(isset($workexperiences->title)||($workexperiences->company)||($workexperiences->location)||($workexperiences->fromyear)||($workexperiences->toyear)|| ($workexperiences->description))
                                                           {
                                                              echo $workexperiences->title." ".'<br>'; 
                                                              echo $workexperiences->company." ".'<br>'; 
                                                              echo $workexperiences->location." ".$workexperiences->fromyear." ".$workexperiences->toyear." ".'<br>'; 
                                                           
                                                              echo $workexperiences->description." ".'<br> <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>';
                                                            }
                                                        }
                                                      }
                                                      else
                                                          {
                                                            echo "Not Updated experience";
                                                          }
                                                        
                                                  ?>                                                 

                                              </span>

                                            </div>

                                              <div class="pull-right text-right" style="width:20%; margin-top:10px;"> <a href="#" data-toggle="modal" data-target=".modal-ex_professional" ><img src="../assets/edit_icon.png" alt=""/></a>                                               
                                              </div>                                           
                                      </div>            
                                      
                                      
                                    </div>
                                  </div>


                                  <div class="tab-pane" id="Professional-Skills">
                                    <div class="col-md-8">
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                         <img src="<?php echo base_url('assets/images/designation-icon.png'); ?>" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:75%; color:#333; font-size:13px;">
                                         
                                          <span style="color:#333; font-size:13px; text-transform: capitalize;" >
                                            <?php
                                              if(!empty($profile_info->professionalskills))
                                              {
                                                foreach ($profile_info->professionalskills as $professionalskill) 
                                                  {
                                                    echo $professionalskill."<br>";
                                                  } 
                                              } else
                                              {
                                                echo "Not Updated Professional Skills";
                                              }
                                            ?>
                                            <br>                                        
                                          </span>
                                        </div>
                                       
                                        <div class="pull-right text-right" style="width:10%; margin-top:10px;">
                                          <a href="#" data-toggle="modal" data-target=".modal-professional_skill" >
                                          <img src="../assets/edit_icon.png" alt=""/>
                                          </a>
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
                  
                    <div class="calendar"></div>
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
<script src="<?php echo base_url ('assets/js/moment.min.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/fullcalendar.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
<script src="<?php echo base_url ('assets/html5lightbox/html5lightbox.js') ?>"></script>
<script>


 
// video display 
  $('#myvideo').hover(function toggleControls() {  //video controls hide and show mouse hover
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
})

  
   
//calendar shows col-md-3

  $(document).ready(function() {

    $('.calendar').fullCalendar({
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
