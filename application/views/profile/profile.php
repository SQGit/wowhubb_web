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
<!-- country database using js file -->
<script src="<?php echo base_url('assets/js/countries.js')?>"></script> 
<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">

body {
	background-color: #e7e5e6;
}
label.error {    
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
	font-size: 14px;
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

.modal-body {
    max-height: calc(100vh - 250px);
    overflow-y: auto;
}
.calendar {
    max-width: 900px;
    margin: 0 auto;
  }
.image {
  display: block;
  width: 100%;
  height: auto;
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
  top: 60px;
  left: 60px;
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
    top: -188px!important;
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
    height: 110px!important; 
     width: 110px!important; 
    border-radius: 50%;
    border: 3px solid #f5f5f5;
}

.alert {
    padding: 0;
    margin-bottom: 0;
    border: 1px solid transparent;
    border-radius: 4px;
}
</style>
<link href="<?php echo base_url ('assets/css/fullcalendar.min.css') ?>" rel='stylesheet' />
<link href="<?php echo base_url ('assets/css/fullcalendar.print.min.css') ?>" rel='stylesheet' media='print' />

</head>
<body class="landing-page">
  <div class="swal"></div>

<div class="content-bg-wrap">
  <div class="content-bg"></div>
</div>

<!-- Header   
    ================================================= -->
  <header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
        <div class="container"> 
      
          <?php  include('/../includes/header.php'); ?>
        </div>
        <!-- /.container --> 
      </nav>
  </header>
<!--Header End-->

<!-- breadcrumb for page link -->
<!-- <div class="container" style="margin-top:20px; margin-bottom:-10px;">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('event/get_eventfeed'); ?>"><strong>Home</strong></a></li>  
      <li class="breadcrumb-item active"><strong>Profile</strong></li>
    </ol>
</div> -->

<div class="google-maps"> </div>
<div class="container"  style="position:relative;"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
    <div class="timeline-cover"> 
        <!-- change cover image -->
        <form id="cover_img" action="<?php echo base_url('profile/cover_img_upload'); ?>" method="post" enctype="multipart/form-data">
              <?php 
                   if(isset($cover))
                   {
                      ?>

           <img id="profileImage1" class="cover-pic image" src="<?php echo $cover; ?>" style="background-size:cover; width:100%; max-height:300px;" alt=""/> 
            <?php } else{ ?>
              <img id="profileImage1" class="cover-pic image" src="<?php echo base_url('assets/images/covers/1.jpg')?>" style="background-size:cover; width:100%; max-height:300px;" >
                <?php }  ?>       
              
                <input class="cover-upload" id="imageUpload1" type="file" name="cover_img" accept="image/*" capture>
              
             <div class="text" id="editcover_img" style="position:absolute; top:40px; left:1062px; width:135px; background:RGBA(0,0,0,.7);"> Add Cover Photo 
              </div>
                
                             
        </form><br>

      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">

          <div class="col-md-4" style="position:relative;">
            <div class="profile-info">

              <div class="col-md-9" style="background:RGBA(0,0,0,.7); border-radius:8px 8px 0 0; padding-top:25px; padding-bottom:0px; border:0px solid #c9c1c1; margin-top:39px; height:149px;">
                <div class="col-md-6 text-left">

              <div style="width:100%; text-align:center;" id="img_hover">

                <form id="profile_img" action="<?php echo base_url('profile/profile_img_upload'); ?>" method="post" enctype="multipart/form-data">
                  <?php 
                     if(isset($img))
                     {
                  ?>
                    <img  id="profileImage" src="<?php echo $img; ?>" class="profile-pic" style="border:3px solid #ccc; border-radius:7px; width:86px; height:86px;" />
                  <?php } else{  ?>                 
                      
                    <img class="img-responsive img-thumbnail"  id="profileImage" src="<?php echo base_url('assets/images/album/avatar_male.png')?>">
                  <?php  }  ?>
               
                  <input class="file-upload" id="imageUpload" type="file" name="profile_img" capture>
                  
                </form>

              </div>
                  <div class="update_profile_pic" id="update_hover"> Update
                  </div>               
                
                </div>
                        <div class="col-md-6" style="position:relative;">                                 
                            <?php 
                              if(isset($profile->personalselfurl)){
                            ?>
                            <div style="position: absolute; left: 47px; top: 30px;">
                              <a href="<?php echo $profile->personalselfurl; ?>" class="html5lightbox" data-width="480" data-height="320">
                              <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user" />
                              </a>
                            </div>
                            <a href="<?php echo $profile->personalselfurl; ?>" class="html5lightbox" data-width="480" data-height="320">
                             <img src="<?php echo $profile->personalselfthumb; ?>"  style="border:3px solid #ccc; border-radius:7px; width:86px; height:86px;" />
                            </a>
                            <?php } else {  ?>
                              <video style="width:86px; height:86px; border-radius:5px;" id="myvideo">
                                <source src="" type="video/mp4">
                              </video>
                            <?php } ?>
                            
                            <div style="position:absolute; right:0; top:-10px;"><a href="#" data-toggle="modal" data-target=".modal-video" >
                            <img src="../assets/images/edit_icon.png" alt="">
                            </a></div>
                        </div>
               
              </div>


              <div class="col-md-11" style="background:none; padding-top:0px; padding-bottom:0px;">
              
                 <div class="row">
                 <div class="col-md-12 text-left" style="margin-top:-20px;" >
                 <div style="font-size:16px; font-weight:normal; line-height:18px; color:#fff; margin-top:0px; margin-left:10px; margin-bottom:0px;">
                 <?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?>
                </div>
                
                    <div style="color:#fff; font-size:14px;">  
                    <img src="../assets/images/wow-pink-1.png" alt=""/>                   
                      <?php echo substr($this->session->userdata('wowtag'), 1); ?>
                     <br> 
                     
                    </div>
                    <div style="margin-top:-3px;" ><span style="color:#fff; font-size:10px; background-color:#e91e63; padding:3px 5px; border-radius:5px; margin-left:12px;">Wowtag ID</span></div> 
                 </div>
                   <div class="col-md-4 text-center" >
                    

                      
                  </div>
                   
                 </div>
              </div>
            </div>
          </div>

          <div class="col-md-8" >
             
            <ul class="list-inline profile-menu">
              
              <li><a href="<?php echo base_url('Profile/profile_get'); ?>" class="active">Profile</a></li>              
              <li><a href="<?php echo base_url ('home/interest_get') ?>" >Interests</a></li>
              <li><a href="<?php echo base_url ('Profile/friends_connection') ?>">Friend Connections</a></li>              
              <li><a href="<?php echo base_url ('Profile/profile_gallery') ?>">Photos</a></li>
            </ul>
            <ul class="follow-me list-inline">
              <li><?php if(isset($frds_count)) { echo $frds_count; } ?> Connections</li>
            </ul>
          </div>
        </div>
        
      </div>
      <!--Timeline Menu for Large Screens End--> 
      
            
    </div>

    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div id="exTab2">
            <ul class="nav nav-tabs">
              <li class="active"> 
                <a  href="#Personal_Profile" data-toggle="tab" style="font-size: 13px; font-weight: bold;">Personal Profile</a>
              </li>
              <li>
                <a href="#professiona_profile" data-toggle="tab" style="font-size: 13px; font-weight: bold;">Professional Profile</a>
              </li>
            </ul>
            <div class="tab-content ">            

              <div class="tab-pane active" id="Personal_Profile" style="margin-top: 20px;">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-wizard col-md-12">                       
                      <div class="edit-profile-container">
                        <div class="block-title">                           
                        </div>
                        <div class="edit-block" style="margin-bottom: 0px;">                       
                          <div class="row">
                            <div class="col-md-12" >
                              <div class="tabbable tabs-left">
                                <ul class="nav nav-tabs">
                                  <li style="width:100%;" class="active">
                                    <a href="#Intro" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Intro
                                    </a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#livecity" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Cities You've Lived In
                                    </a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Contact_info" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Contact Info
                                    </a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Relationships" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Relationships
                                    </a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Your_Life" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Your Life Views
                                    </a>
                                  </li>
                                </ul>

                          <!-- overview tab for personal  -->

               <div class="tab-content">
                      <div class="tab-pane active" id="Intro">
                          <div class="col-md-9">
                                <div class="form-group" style="margin-top: 15px;">  
                                  <div class="col-md-12"><p style="font-size:12px;"> This is your  event identification name tag, You can use your "WOWtag ID" to share your personal and professional information and attend at any event. You can create your own WOWtag ID to add some form of personality to yourself.</p>
                                </div>
                                </div>
                             <div class="col-md-12" style="margin-top:15px;">
                                    <div class="pull-left" style="width:7%;"><img src="../assets/images/wow-tag-icon.png" alt=""/></div>
                                  <div class="pull-left" style="width:78%;">
                                      <a href="#" style="font-size:12px; color:#333;"> 
                                       <?php echo substr($this->session->userdata('wowtag'), 1); ?>
                                      </a><br>
                                       <span style="color:#fff; font-size:13px; background-color:#e91e63; padding:3px 5px; border-radius:5px;">Your Wowtag ID</span>
                                  </div>
                              </div>
                              <!-- <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;">
                              </div>  -->                             
                          </div>
                      </div>
                                  <!-- personal overview model popup -->

            <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">   

                            <div class="post-container" style="padding-bottom:20px;">  
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>                
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3 style="font-size: 13px!important;">Edit Personal Profile</h3>                               
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                              
                    <form action="<?php echo base_url('profile/personal_update_overview'); ?>" method="post"  id="personal_update_overview" class="form-inline">
                           
                            <div class="row" >                              
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Place You Live</label>
                                <input  type="text" class="form-control input-group-lg"  name="place" value="<?php if(isset($profile->place)) {echo $profile->place; } else{echo "";} ?>" />
                              </div>
                            </div>
                            <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Marital Status</label>
                                <select name="marital_status" class="form-control" id="types" >       
                                  
                                  <option value="Single" <?php if(isset($profile->maritalstatus) && ($profile->maritalstatus == "Single" )){ echo "selected"; } else { echo ""; } ?> >Single </option>
                                  <option value="Married" <?php if(isset($profile->maritalstatus) && ($profile->maritalstatus == "Married" )){ echo "selected"; } else { echo ""; } ?>>Married </option>
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
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>                  
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3 style="color:#333; font-size: 13px; font-weight:bold;">Self Intro Video</h3>                              
                                </div>                            
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                              
                    <form action="<?php echo base_url('profile/personal_update_video'); ?>" method="post"  id="personal_update_video" class="form-inline">                          
                           
                            <div class="row" >                              
                              <div class="form-group col-xs-12">
                                 
                                  <input  type="file" id="self_video" class="form-control input-group-lg"  name="self_video" value="<?php if(isset($profile->place)) {echo $profile->place; } else{echo "";} ?>" accept="video/*" />
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

                                  <div class="tab-pane" id="livecity">
                                    <div class="col-md-9">  

                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/state-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize; font-size:13px;">State<br>
                                          <span style="color:#333; font-size:12px;">
                                            <?php if(isset($profile->state)){echo $profile->state; } else{echo "";} ?>
                                              
                                          </span>
                                        </div>
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;">
                                           <a href="#" data-toggle="modal" data-target=".citylive" >
                                          <img src="../assets/images/edit_icon.png" alt=""/></a>
                                        </div>  
                                                                                
                                      </div> 

                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="../assets/images/country-icon.png" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize; font-size:13px;">Country <br>
                                          <span style="color:#333; font-size:12px;">
                                            <?php if(isset($profile->country)){echo $profile->country; } else{echo "";} ?>
                                              
                                          </span>
                                        </div>                                                                        
                                      </div>                                                             
                                                                           
                                    </div>
                                  </div>

                                 

                            <!-- relationship tab for personal  -->

                                  <div class="tab-pane" id="Relationships">
                                   <div class="col-md-9">
                                    <div class="pull-right text-right" style="width:20%; margin-top:10px;"> 
                                         <div style="font-weight: bold; font-size: 12px; color: #333;">Edit
                                          <a href="#" data-toggle="modal" data-target=".modal-relation" >
                                             <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" alt=""/>
                                          </a>
                                         </div>                                           
                                    </div>
                                  </div>
                                    <div class="col-md-9">
                                      
                                      <?php 
                                            if(isset($profile->relationshipstatus)) 
                                            {
                                           
                                      ?>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:10%;">
                                          <img src="../assets/images/album/avatar_relationship.png" alt=""/></div>
                                          <div class="pull-left" style="width:80%; text-transform: capitalize; font-size: 12px;">
                                            <?php if(isset($profile->relationshipstatus)) { echo $profile->relationshipstatus; } else { echo " "; } ?> <br>
                                            <span style="color:#333; font-size:12px;"> 
                                              <?php 
                                                  if(isset($profile->relationshipwith)) {
                                                   echo $profile->relationshipwith; 
                                                 } else { 
                                                  echo ""; } 
                                              ?>                                             
                                            </span>
                                            <br>
                                          </div>                                  
                                        
                                      </div>

                                     
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <?php  }  else { ?>

                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:10%;">
                                          <img src="../assets/images/album/avatar_relationship.png" alt=""/>
                                        </div>
                                          <div class="pull-left" style="width:80%; text-transform: capitalize; font-size: 13px;">
                                           Add your relationships  Status<br>
                                                                                     
                                          </div>                                
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
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <img src="<?php echo base_url('assets/images/wow-close.png'); ?>">
                              </button>                
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3 style="font-size: 13px; font-weight: bold;">Add Relationship</h3>
                                 
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row">      

                    <form action="<?php echo base_url('profile/personal_update_relationship'); ?>" method="post"  id="personal_update_relation" class="form-inline">                            
                         
                          
                             <?php 
                                  if(isset($profile->relationshipstatus))
                                        {  
                             ?>
                                                           

                              <div class="form-group col-sm-12" style="font-size: 13px;">
                                <label>Relationship Status</label>
                                <select name="relation_type" id="relation_type" class="form-control" style="background-color:#eff0f1;font-size: 12px;">
                                  <option value="Single" <?php if(isset($profile->relationshipstatus) && ($profile->relationshipstatus=="Single")){echo "selected"; } else{echo "";} ?> > Single </option>                                   
                                  <option value="In a Relationship" <?php if(isset( $profile->relationshipstatus)&& ($profile->relationshipstatus == "In a Relationship")){echo "selected"; } else{echo "";} ?> > In a Relationship </option> 

                                  <option value="Engaged" <?php if(isset( $profile->relationshipstatus)&& ( $profile->relationshipstatus=="Engaged")){echo "selected"; } else{echo "";} ?> > Engaged </option> 
                                  
                                  <option value="Married" <?php if(isset( $profile->relationshipstatus) && ($profile->relationshipstatus=="Married")){echo "selected"; } else{echo "";} ?>> Married </option> 
                                  
                                  <option value="Divorced" <?php if(isset( $profile->relationshipstatus)&&($profile->relationshipstatus=="Divorced")){echo "selected"; } else{echo "";} ?>>Divorced </option>                            
                                  <option value="Widowed" <?php if(isset( $profile->relationshipstatus)&&($profile->relationshipstatus=="Widowed")){echo "Widowed"; } else{echo "";} ?> > Widowed </option>  
                                  <option value="---"<?php if(isset( $profile->relationshipstatus)&&($profile->relationshipstatus=="---")){echo "selected"; } else{echo "";} ?>> --- </option>                                                             
                                </select>
                              </div>

                            <?php 
                              if($profile->relationshipwith != null){
                            ?>
                              <div class="form-group col-xs-12" id="relationship_with">
                                <label for="date-to"> With </label>
                                <input  id="relation_name" type="text" class="form-control input-group-lg" name="relation_name"  value="<?php if(isset($profile->relationshipwith)) { echo $profile->relationshipwith; } else { echo " "; } ?>" />
                              </div>
                              <?php } else{ ?>
                              <div class="form-group col-xs-12" id="relationship_with" style="display: none;">
                                <label for="date-to"> With </label>
                                <input  id="relation_name" type="text" class="form-control input-group-lg" name="relation_name" style="text-transform: capitalize;" />
                              </div>
                             
                             <?php } } else {  ?>

                              <div class="form-group col-sm-12" style="font-size: 12px;">
                                <label>Relationship Status</label>
                                <select name="relation_type" id="relation_type" class="form-control" style="background-color:#eff0f1;">
                                  
                                  <option value="select">Choose Relationship</option>
                                  <option value="Single">Single</option>
                                  <option value="In a Relationship">In a Relationship</option>
                                  <option value="Engaged">Engaged</option>
                                  <option value="Married">Married</option>                                  
                                  <option value="Divorced">Divorced</option>
                                  <option value="Widowed">Widowed</option>
                                  <option value="---">---</option>                                 
                                </select>
                              </div>

                              <div class="form-group col-xs-12" id="relationship_with" style="display: none;">
                                <label for="date-to"> With </label>
                                <input id="relation_name" type="text" class="form-control input-group-lg" name="relation_name" style="text-transform: capitalize;" />
                              </div>

                             <?php } ?>
                                                     
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

                                  <div class="tab-pane" id="Contact_info">
                                    <div class="col-md-9">
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/email-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; font-size:13px;">Email <br>
                                          <span style="color:#333; font-size:12px;">
                                            <?php echo $this->session->userdata('email'); ?>
                                          </span>
                                        </div>

                                          <div class="pull-left" style="margin-left:3%; margin-top:15px;">                  

                                                <?php 
                                                  if($profile->emailvisible == 'enabled')
                                                  {                                                 
                                                ?>
                                              <div class="toggle-switch">
                                                <label class="switch">
                                                  <input type="checkbox" id="email_enable" name="email_on" value="disabled" checked>
                                                  <span class="slider round"></span>
                                                </label>
                                              </div>
                                              <?php } else{ ?>
                                              <div class="toggle-switch">
                                                <label class="switch">
                                                  <input type="checkbox" id="email_enable" name="email_on" value="enabled">
                                                  <span class="slider round"></span>
                                                </label>
                                              </div>
                                              <?php } ?>
                                          </div>
                                        
                                      </div>

                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="<?php echo base_url('assets/images/phone-icon.png'); ?>" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:78%; font-size:13px;">Phone No <br>
                                          <span style="color:#333; font-size:12px;">
                                            <?php echo $this->session->userdata('phone'); ?>
                                          </span>
                                        </div>   

                                        <div class="pull-left" style="margin-left:3%; margin-top:15px;">                  
                                            <?php 
                                                  if($profile->phonevisible == 'enabled')
                                                  {                                                 
                                            ?>  
                                              <div class="toggle-switch">
                                                <label class="switch">
                                                  <input type="checkbox" id="phone_enable" name="phone_on" value="disabled" checked>
                                                  <span class="slider round"></span>
                                                </label>
                                              </div>
                                            <?php } else{ ?>
                                            <div class="toggle-switch">
                                              <label class="switch">
                                                <input type="checkbox" id="phone_enable" name="phone_on" value="enabled">
                                                <span class="slider round"></span>
                                              </label>
                                            </div>
                                            <?php } ?>

                                        </div>                                    
                                      </div>
                                     
                                    </div>
                                  </div>

                                   <!-- City you live  personal model popup -->

                <div class="modal fade citylive" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">    
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>                 
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3 style="font-size: 13px; font-weight: bold;">Add Live City</h3>                                 
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row">                              
                    <form action="<?php echo base_url('profile/personal_update_contactinfo'); ?>" method="post" 
                      id="personal_update_contactinfo" class="form-inline">                     

                           
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Country</label>
                                <select name="country" onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" style="background-color:#eff0f1;">                                       
                                </select>
                              </div>                       
                             
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">State</label>
                                <select name="state" id ="state" class="form-control"></select>
                                 <script language="javascript">print_country("country");</script> 
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
                   <!-- end City you live  personal model popup -->

                                   <!-- Life views for personal  -->

                                  <div class="tab-pane" id="Your_Life">
                                    <div class="col-md-9">
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="<?php echo base_url('assets/images/birthday-icon.png');?>" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:78%; font-size:12px;">Birthday<br>
                                          <span style="color:#333; font-size:13px;">
                                            <?php
                                              if(!empty($this->session->userdata('birthday'))) {
                                               
                                                 echo date('M d', strtotime($this->session->userdata('birthday')));
                                              } else { 
                                                echo "";
                                              } 
                                            ?>
                                          </span> <br>
                                        </div>
                                       
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;"> 
                                          <a href="#" data-toggle="modal" data-target=".lifeview" >
                                          <img src="<?php echo base_url('assets/images/edit_icon.png');?>" alt=""/></a>
                                        </div>
                                      </div>

                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;">
                                          <img src="<?php echo base_url('assets/images/intro-icon.png');?>" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:78%; font-size:12px;">Gender<br>
                                          <span style="color:#333; font-size:13px;">
                                            <?php echo $this->session->userdata('gender'); ?>
                                              
                                          </span> <br>
                                        </div>
                                       
                                      </div>                                  
                                      
                                    </div>
                                  </div>

                                      <!-- Your life views personal model popup -->

              <div class="modal fade lifeview" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">  
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                              </button>                   
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3 style="font-size: 13px; font-weight: bold;">Add Your Life Views</h3>
                                
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row"> 

                  <form action="<?php echo base_url('profile/your_life_view'); ?>" method="post" id="personal_update_eventinfo"
                   class="form-inline">                            
                            
                              <div class="form-group col-xs-12">
                                <label for="date-to">Birthday</label>
                                <input id="birthday" type="text" class="form-control input-group-lg" name="birthday" value="<?php if(isset($profile->birthday)) {echo $profile->birthday; } else{echo "";} ?>" autocomplete="off" />
                              </div>
                                                                            
                            
                              <div class="form-group col-xs-12">
                                <label for="date-to">Gender</label>
                                <select name="gender" class="form-control" id="types">    
                                  <option value="Male" <?php if(isset($profile->maritalstatus) && ($profile->maritalstatus == "Male" )){ echo "selected"; } else { echo ""; } ?> >Male </option>
                                  <option value="Female" <?php if(isset($profile->maritalstatus) && ($profile->maritalstatus == "Female" )){ echo "selected"; } else { echo ""; } ?>>Female </option>
                                </select>
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


              <div class="col-md-4 static"> 
                 <div class="calendar"></div>
              </div>
            </div>
          </div>
              <!-- here end personal profile -->

              <!-- professional tab start here  -->

              <div class="tab-pane" id="professiona_profile" style="margin-top: 20px;">
                <div class="row">
                  <div class="col-md-8">
                    <div class="form-wizard col-md-12">                    
                      <div class="edit-profile-container">
                        <div class="block-title">                         
                        </div>
                      <div class="edit-block" style="margin-bottom: 0px;">
                     
                          <div class="row">
                            <div class="col-md-12">
                              <div class="tabbable tabs-left">
                                <ul class="nav nav-tabs">
                                  <li style="width:100%;" class="active">
                                    <a href="#professional_intro" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Intro</a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Colleges" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Colleges</a>
                                  </li>
                                
                                  <li style="width:100%;">
                                    <a href="#Work_Experience" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Work Experience</a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Professional_Skills" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Professional Skills</a>
                                  </li>
                                  <li style="width:100%;">
                                    <a href="#Certifications" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:13px;">Certifications</a>
                                  </li>                                  
                                </ul>

              <div class="tab-content">

                <!-- professional intro start here -->

                  <div class="tab-pane active" id="professional_intro">
                      <div class="col-md-8">
                        <div class="col-md-12">
                          <p style="font-size:12px;">This is your  event identification name tag, You can use your "WOWtag ID" to share your personal and professional information and attend at any event. You can create your own WOWtag ID to add some form of personality to yourself.</p>
                        </div>
                        <div class="col-md-12" style="margin-top:15px;">
                          <div class="pull-left" style="width:7%;"><img src="../assets/images/wow-tag-icon.png" alt=""/></div>
                          <div class="pull-left" style="width:78%;"><a href="#" style="font-size:12px; color:#333;">
                           <?php echo substr($this->session->userdata('wowtag'), 1); ?> </a><br>
                          <span style="color:#fff; font-size:13px; background-color:#e91e63; padding:3px 5px; border-radius:5px;">Your Wowtag ID</span>
                          </div>
                          <div class="pull-left" style="width:5%; margin-top:10px;"><a href="#"></div>
                        </div>                                                                       
                      </div>
                  </div>

                  <div class="tab-pane" id="Colleges">
                      <div class="col-md-8">                                     
                        <div class="col-md-12">
                          <div class="pull-left" style="width:7%;">
                           <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                          </div>
                          <div class="pull-left" style="width:75%; color:#333; font-size:14px;">College<br>
                            <span style="color:#333; font-size:13px;">
                              <?php
                              if(!empty($profile->college)) 
                              {
                                foreach ($profile->college as $colleges) 
                                  {
                                    echo $colleges->college;
                                    echo "<br>";
                                    echo $colleges->degree." ".$colleges->field." ,".$colleges->grade;
                                    echo "<br>";                                    
                                    echo $colleges->from." - ".$colleges->to;
                                    echo "<br>";
                                    echo $colleges->description;
                                    echo "<br>";
                                    echo '<div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>';
                                  } 
                              }
                              else
                              {
                                echo "Add Your College Details";
                              }
                              ?>
                              <br>
                            </span>
                          </div>
                                       
                          <div class="pull-right text-right" style="width:10%; margin-top:10px;">
                            <a href="#" data-toggle="modal" data-target=".modal-college" >
                              <img src="../assets/images/edit_icon.png" alt=""/>
                            </a>
                          </div>
                        </div>

                       
                      </div>
                  </div>

          <!--start professional college model popup -->

          <div class="modal fade modal-college" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="post-content">                            
                    <div class="post-container" style="padding-bottom:20px;">
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>   
                    <div class="post-detail">
                                    <div class="user-info">
                                        <h3 style="font-size: 13px;font-weight: bold;">Add Education</h3  >                                       
                                    </div>                              
                                    <div class="line-divider"></div>
                    <div class="modal-body">
                    <div class="user-info">
                    <div class="row">

                      <form action="<?php echo base_url('profile/professional_college'); ?>" method="post" id="professional_college"
                       class="form-inline">

                          <div id="dynamic_add_college">
                            <?php 
                                    if(!empty($profile->college)) 
                                        {  
                                        foreach( $profile->college as $colleges )
                                          {
                             ?>  
                            
                            <div class="row" id="add_college_1"> 

                              <div class="form-group col-xs-12">
                                <label for="date-to"> College</label>
                                <input type="text" id="college_1" class="form-control input-group-lg" name="college[]" style="text-transform: capitalize;" value="<?php if(isset($colleges->college)) {echo $colleges->college; }?>">
                              </div> 

                              <div class="form-group col-xs-12">
                                <label for="date-to"> Degree</label>
                                <input type="text" id="college_1" class="form-control input-group-lg" name="degree[]" style="text-transform: capitalize;" value="<?php if(isset($colleges->degree)) { echo $colleges->degree;} ?>" placeholder="Ex.Bachelor's">
                              </div> 

                              <div class="form-group col-xs-12">
                                <label for="date-to"> Field of study</label>
                                <input type="text" id="field_of_std_1" class="form-control input-group-lg" name="field_of_study[]" style="text-transform: capitalize;" placeholder="Ex.Business" value="<?php if(isset($colleges->field)) { echo $colleges->field; }?>">
                              </div> 

                              <div class="form-group col-xs-12">
                                <label for="date-to"> Grade</label>
                                <input type="text" id="grade_1" class="form-control input-group-lg" name="grade[]" style="text-transform: capitalize;" value="<?php if(isset($colleges->grade)) { echo $colleges->grade; }?>">
                              </div> 
                            
                              <div class="form-group col-xs-6">                                
                                <label for="date-to"> From</label>
                                <select name="from_year[]" id="fromyear_1" class="form-control">
                                     <option value="<?php if(isset($colleges->from)){echo $colleges->from; } else{echo "Year";} ?>">
                                      <?php if(isset($colleges->from)){echo$colleges->from; } else{echo "Year";} ?>  </option>
                                      <option value="2018"> 2018</option>
                                      <option value="2017"> 2017</option>
                                      <option value="2016"> 2016</option>
                                      <option value="2015"> 2015</option>
                                      <option value="2014"> 2014</option>
                                      <option value="2013"> 2013</option>
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
                                <div class="alert alert-danger" id="error_msg" role="alert" style="display:none;" >Your end date can’t be earlier than your start date.
                               </div>                            
                              </div>
                                                          
                              <div class="form-group col-xs-6">                                
                                <label for="date-to"> To</label>
                                <select name="to_year[]" id="toyear_1" class="year_validate form-control">
                                     <option value="<?php if(isset($colleges->to)){echo $colleges->to; } else{echo "Year";} ?>"><?php if(isset($colleges->to)){echo $colleges->to; } else{echo "Year";} ?>  </option>
                                      <option value="2018"> 2018</option>
                                      <option value="2017"> 2017</option>
                                      <option value="2016"> 2016</option>
                                      <option value="2015"> 2015</option>
                                      <option value="2014"> 2014</option>
                                      <option value="2013"> 2013</option>
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

                               <div class="form-group col-xs-12">
                                <label for="date-to"> Description</label>
                                <textarea id="description_1" name="description[]"><?php if(isset($colleges->description)){ echo $colleges->description;} ?> </textarea>
                              </div> 

                           
                                <div class="col-sm-12 text-right"> 
                                 <a href="JavaScript:void(0);" class="animated bounceInLeft remove_college btn btn-info btn-sm">Remove
                                 </a> 
                                </div>
                               </div> 
                               <div class="col-md-12" style="border-bottom:2px solid #ffb3d1; margin:15px 0;"></div>
                            <?php } } else { ?>
                            <div class="row" id="add_college_1"> 

                              <div class="form-group col-xs-12">
                                <label for="date-to"> College</label>
                                <input type="text" id="college_1" class="form-control input-group-lg" name="college[]" style="text-transform: capitalize;" placeholder="Ex.Boston University">
                              </div> 

                              <div class="form-group col-xs-12">
                                <label for="date-to"> Degree</label>
                                <input type="text" id="degree_1" class="form-control input-group-lg" name="degree[]" style="text-transform: capitalize;" placeholder="Ex.Bachelor's">
                              </div> 

                              <div class="form-group col-xs-12">
                                <label for="date-to"> Field of study</label>
                                <input type="text" id="field_of_std_1" class="form-control input-group-lg" name="field_of_study[]" style="text-transform: capitalize;" placeholder="Ex.Business">
                              </div> 

                              <div class="form-group col-xs-12">
                                <label for="date-to"> Grade</label>
                                <input type="text" id="grade_1" class="form-control input-group-lg" name="grade[]" style="text-transform: capitalize;" >
                              </div> 

                            
                              <div class="form-group col-xs-6">                                
                                <label for="date-to"> From</label>
                                <select name="from_year[]" id="fromyear_1" class="form-control">
                                     <option value=""> Year </option>
                                      <option value="2018"> 2018</option>
                                      <option value="2017"> 2017</option>
                                      <option value="2016"> 2016</option>
                                      <option value="2015"> 2015</option>
                                      <option value="2014"> 2014</option>
                                      <option value="2013"> 2013</option>
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
                                <div class="alert alert-danger" id="error_msg" role="alert" style="display:none;" >Your end date can’t be earlier than your start date.
                               </div>

                              </div>
                                                          
                              <div class="form-group col-xs-6">                                
                                <label for="date-to"> To</label>
                                <select name="to_year[]" id="toyear_1" class="year_validate form-control">
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

                              <div class="form-group col-xs-12">
                                <label for="date-to"> Description</label>
                                <textarea id="description_1" name="description[]"> </textarea>
                              </div> 

                            </div> 
                               <div class="col-md-12" style="border-bottom:2px solid #ffb3d1; margin:15px 0;"></div>
                            <?php } ?>

                          </div>

                            <div class="col-md-12">
                              <div class="pull-left" style="width:100%;"> 
                                <span style="color:#e91e63; font-size:13px;">
                                <a href="JavaScript:void(0);" id="add_college" data-nxt_college_name="2">
                                  <i class="fa fa-plus-circle"></i>
                                  Add more College Details
                                </a>
                                </span>
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
          </div>

      <!-- end professional college model popup -->


     

                     <!--  professional work experience  model popup -->
   <div class="modal fade modal-ex_professional" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
           <div class="modal-content">
               <div class="post-content">                            
                  <div class="post-container" style="padding-bottom:20px;"> 
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>                 
                     <div class="post-detail">
                       <div class="user-info">
                         <h3 style="font-size: 13px; font-weight: bold;">Edit Work Experience</h3>
                            
                        </div>                              
                        <div class="line-divider"></div>
                         <div class="modal-body">
            <div class="user-info">
              <div class="row">                              
                      <form action="<?php echo base_url('profile/professional_work_exp'); ?>" method="post"  id="professional_work_exp" 
                        class="form-inline">  
                                 
                  <div id="dynamic_add_exp">   

                      <?php 
                                      if(!empty($profile->workexperience)) 
                                        {  
                                           foreach($profile->workexperience as $workexperiences)
                                            {
                                  ?>  
                      <div class="row" id="profile_exp_1"> 

                               
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Title</label>
                                <input type="text" id="title_1" class="form-control" name="title[]" value="<?php if(isset($workexperiences->title)){echo $workexperiences->title; } else{echo "";} ?>" required />
                              </div>                                                                           
                            
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Company</label>
                                <input  type="text" id="company_1" class="form-control input-group-lg" name="company[]"  value="<?php if(isset($workexperiences->company)){echo $workexperiences->company; } else{echo "";} ?>" required/>
                              </div>  
                                                      
                                <div class="form-group col-xs-12">
                                  <label for="date-to"> Location</label>
                                  <input  type="text" id="location_1" class="form-control input-group-lg" name="location[]"  value="<?php if(isset($workexperiences->location)){echo $workexperiences->location; } else{echo "";} ?>" required />
                                </div>  
                                                         

                           
                                <div class="form-group col-md-6">                                 
                                  <select name="from_year[]" id="fromyear_1" class="form-control">
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
                                 <select name="to_year[]" id="toyear_1" class="form-control">
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
                           
                            
                                <div class="form-group col-xs-12">
                                  <label for="date-to"> Description</label>
                                 <textarea name="description[]" id="description_1" class="form-control" style="min-height:100px;" > 
                                    <?php 
                                        if(isset($workexperiences->description)) 
                                        {
                                           echo $workexperiences->description; 
                                        } 
                                        else 
                                          { 
                                            echo ""; 
                                          } 
                                    ?></textarea> 
                                  
                                </div>  
                            
                          
                                <div class="form-group col-xs-12">
                                  <label for="date-to">Add or link to external documents, photos, sites, videos, and presentations.</label>
                                </div>  
                           

                            
                            <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_exp btn btn-info btn-sm"> Remove</a> </div>
                            
                       </div>
                       <div class="col-md-12" style="border-bottom:2px solid #ffb3d1; margin:15px 0;"></div>
                   
                     <?php } } else { ?>

                            <div class="row" id="profile_exp_1"> 
                             
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Title</label>
                                <input type="text" id="title_1" class="form-control" name="title[]" >
                              </div>                                                                              
                            
                              <div class="form-group col-xs-12">
                                <label for="date-to" >Company</label>
                                <input  type="text" id="company_1" class="form-control input-group-lg" name="company[]" >
                              </div>  
                                                        
                                <div class="form-group col-xs-12">
                                  <label for="date-to"> Location</label>
                                  <input  type="text" id="location_1" class="form-control input-group-lg" name="location[]" title="Enter a location">
                                </div>  
                                                     
                                <div class="form-group col-md-6">                                 
                                  <select name="from_year[]" id="fromyear_1" class="form-control">
                                      <option value=""> Year</option>
                                      <option value="2018"> 2018</option>
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
                                 <select name="to_year[]" id="toyear_1" class="form-control">                                      
                                      <option value=""> Year</option>
                                      <option value="2018"> 2018</option>
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
                           

                          
                                <div class="form-group col-xs-12">
                                  <label for="date-to"> Description</label>
                                 <textarea name="description[]" id="description_1" class="form-control" style="min-height:100px;"></textarea> 
                                 
                                </div>  
                                                 
                       </div>

                      <?php } ?>
                      </div>


                            <div class="form-group col-xs-12">
                              <a href="JavaScript:void(0);" id="add_more_exp" data-add_multi_exp="2">
                              <i class="fa fa-plus-circle"></i> Add multiple Experience </a>
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
     </div>



                      
                  

                            <!-- professional work experience -->

                                  <div class="tab-pane" id="Work_Experience">
                                    <div class="col-md-8">
                                      <div class="col-md-12">
                                          <div class="pull-left" style="width:7%;">
                                             <span class="glyphicon glyphicon-briefcase" style="color: #333;"></span>
                                          </div>
                                            <div class="pull-left" style="width:65%; text-transform: capitalize; font-size:13px;">Work Experience<br>
                                               <span style="color:#333; font-size:12px;"> 

                                                  <?php 
                                                    if(!empty($profile->workexperience))
                                                      {
                                                        foreach($profile->workexperience as $workexperiences)
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
                                                            echo "Please update Your experience";
                                                          }
                                                        
                                                  ?>                                                 

                                              </span>

                                            </div>

                                               <div class="pull-right text-right" style="width:20%; margin-top:10px;"> <a href="#" data-toggle="modal" data-target=".modal-ex_professional" ><img src="../assets/images/edit_icon.png" alt=""/></a>                                               
                                               </div>                                           
                                      </div>                                    
                                    </div>
                                  </div>

                                  <!-- professional skills start here -->
                          <div class="tab-pane" id="Professional_Skills">
                            <div class="col-md-8">
                              <div class="col-md-12">
                              <div class="pull-left" style="width:7%;">
                               <img src="<?php echo base_url('assets/images/designation-icon.png'); ?>" alt=""/>
                              </div>
                              <div class="pull-left" style="width:75%; color:#333; font-size:12px;">
                               
                                <span style="color:#333; font-size:12px; text-transform: capitalize;" >
                                  <?php
                                    if(!empty($profile->professionalskills))
                                    {
                                      foreach ($profile->professionalskills as $professionalskill) 
                                        {
                                          echo $professionalskill."<br>";
                                        } 
                                    } else
                                    {
                                      echo "Update Your Professional Skills";
                                    }
                                  ?>
                                  <br>                                        
                                </span>
                              </div>
                                       
                              <div class="pull-right text-right" style="width:10%; margin-top:10px;">
                                <a href="#" data-toggle="modal" data-target=".modal-professional_skill" >
                                <img src="../assets/images/edit_icon.png" alt=""/>
                                </a>
                              </div>
                              </div>
                              <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;">
                              </div>
                            </div>
                          </div>
                          <!-- professional skills end here -->

                           <!--  professional skill model popup -->
        <div class="modal fade modal-professional_skill" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="post-content">                            
              <div class="post-container" style="padding-bottom:20px;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>   
                <div class="post-detail">
                    <div class="user-info">
                     <h3 style="font-size: 13px; font-weight: bold;"> Professional Skills</h3>
                     
                    </div>                              
                    <div class="line-divider"></div>
                  <div class="user-info">
                    <div class="row">
                      <form action="<?php echo base_url('profile/professional_professionalskills'); ?>" method="post" id="professional_skills" class="form-inline">

                        <div id="dynamic_add_professional"> 
                           <?php
                                    if(!empty($profile->professionalskills))
                                    {
                                      foreach ($profile->professionalskills as $professionalskill) 
                                      {
                            ?>

                          
                              <div class="form-group col-xs-12" id="add_professional_1">
                                <label for="date-to"> Professional Skills</label>
                                <input type="text" id="professional_1" class="form-control input-group-lg" name="professional_skills[]" style="text-transform: capitalize;" value="<?php echo $professionalskill; ?>" >
                              </div>
                               <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_profession btn btn-info btn-sm"> Remove</a> </div>  
                           
                            <?php } } else{ ?>

                           
                              <div class="form-group col-xs-12" id="add_professional_1">
                                <label for="date-to"> Professional Skills</label>
                                <input type="text" id="professional_1" class="form-control input-group-lg" name="professional_skills[]" style="text-transform: capitalize;" >
                              </div>
                               <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_profession btn btn-info btn-sm"> Remove</a> </div>  
                           
                            <?php } ?>

                        </div>

                        <div class="col-md-12">
                            <div class="pull-left" style="width:100%;"> 
                              <span style="color:#e91e63; font-size:13px;">
                              <a href="JavaScript:void(0);" id="add_professional" data-nxt_professional="2">
                                <i class="fa fa-plus-circle"></i>
                                Add more Profession</a>
                              </span>
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
      <!--  professional background model popup -->



                           <!--  professional Certificate start here  -->

                                  <div class="tab-pane" id="Certifications">
                                    <div class="col-md-9">
                                    <div class="pull-right text-right" style="width:20%; margin-top:10px;"> 
                                         <div style="font-weight: bold; font-size: 13px; color: #333;">Edit
                                          <a href="#" data-toggle="modal" data-target=".modal-certificate" >
                                             <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" alt=""/>
                                          </a>
                                         </div>                                           
                                    </div>
                                  </div>
                                    <div class="col-md-9">
                                      
                                      <?php 
                                            if(!empty($profile->certification)) 
                                            {
                                            foreach ($profile->certification as $certifications) { 
                                      ?>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:10%;">
                                          <img src="../assets/images/certi-icon.png" alt=""/>
                                        </div>
                                          <div class="pull-left" style="width:80%; text-transform: capitalize; font-size: 12px;">
                                            <?php if(isset($certifications->certification)) { echo $certifications->certification; } else { echo " "; } ?> - <?php if(isset($certifications->year)) { echo $certifications->year; } else { echo " "; } ?>
                                            <br>
                                           
                                            <span style="color:#333; font-size:13px;">                                             
                                            </span>
                                            <br>
                                          </div>                              
                                      </div>
                                       <?php } }  else { ?>
                                     
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:10%;">
                                          <img src="../assets/images/certi-icon.png" alt=""/>
                                        </div>
                                          <div class="pull-left" style="width:80%; text-transform: capitalize; font-size: 12px;">
                                            Add Your Certificates
                                            <br>
                                           
                                            <span style="color:#333; font-size:13px;">                                             
                                            </span>
                                            <br>
                                          </div> 
                                                               
                                      </div>
                                      <?php } ?>

                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                                                           
                                    </div>
                                  </div>
                            <!--  professional Certificate end here  -->

                             <!-- certificate professional start model popup -->

                <div class="modal fade modal-certificate" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">    
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                              </button>                 
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3 style="font-size: 13px; font-weight: bold;">Add Certificates</h3>
                                 
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row">                              
                    <form action="<?php echo base_url('profile/professional_certificate'); ?>" method="post" 
                      id="professional_certificate" class="form-inline">                     
                           
                          <div id="dynamic_add_certificate">
                              <?php 
                                  if(!empty($profile->certification)) 
                                    {
                                      foreach ($profile->certification as $certifications) { 
                              ?>

                           <div class="form-group col-xs-12" id="add_certificate_1">                               
                              <div class="form-group col-xs-6">
                                <label for="date-to" >Certificate</label>
                                <input type="text" id="certificate_1" class="form-control" name="Certificate[]" value="<?php if(isset($certifications->certification)) { echo $certifications->certification; } else { echo " "; } ?> " />
                              </div>
                                                          
                              <div class="form-group col-xs-6">
                                <label for="date-to">Year</label>
                                <select name="year[]" id="year_1" class="form-control">
                                      <option value="<?php if(isset($certifications->year)) { echo $certifications->year; } else { echo " "; } ?>"> <?php if(isset($certifications->year)) { echo $certifications->year; } else { echo "Year"; } ?></option>
                                      <option value="2018"> 2018</option>
                                      <option value="2017"> 2017</option>
                                      <option value="2016"> 2016</option>
                                      <option value="2015"> 2015</option>
                                      <option value="2014"> 2014</option>
                                      <option value="2013"> 2013</option>
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
                              <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);" class="animated bounceInLeft remove_certificate btn btn-info btn-sm"> Remove</a> </div>                            
                            </div> 

                            <?php } } else {  ?>

                            <div class="form-group col-xs-12" id="add_certificate_1">                               
                              <div class="form-group col-xs-6">
                                <label for="date-to" >Certificate</label>
                                <input type="text" id="certificate_1" class="form-control" name="Certificate[]" />
                              </div>
                                                          
                              <div class="form-group col-xs-6">
                                <label for="date-to">Year</label>
                                <select name="year[]" id="year_1" class="form-control">
                                      <option value=""> Year </option>
                                      <option value="2018"> 2018</option>
                                      <option value="2017"> 2017</option>
                                      <option value="2016"> 2016</option>
                                      <option value="2015"> 2015</option>
                                      <option value="2014"> 2014</option>
                                      <option value="2013"> 2013</option>
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
                              <div class="col-sm-12 text-right"> <a href="JavaScript:void(0);" class="animated bounceInLeft remove_certificate btn btn-info btn-sm"> Remove</a> </div>                            
                            </div> 
                            <?php } ?>

                          </div>

                            <div class="col-md-12">
                                <div class="pull-left" style="width:100%;"> 
                                  <span style="color:#e91e63; font-size:13px;">
                                  <a href="JavaScript:void(0);" id="add_certificate" data-nxt_certificate="2">
                                    <i class="fa fa-plus-circle"></i>
                                  Add more Certificates</a>
                                  </span>
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
                   <!-- end certificate professional model popup -->



                      </div>
                </div>
              </div>                            
            </div>
          </div>                       
      </div>
      </div>
    </div>

          <div class="col-md-4 static"> 
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

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/additional-methods.js') ?>"></script> 

<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url ('assets/js/moment.min.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/fullcalendar.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
<script src="<?php echo base_url ('assets/html5lightbox/html5lightbox.js') ?>"></script><!-- video popup library -->
<script>

   
// tooltip for wowtag id
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
    });  

  
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

// personal relationship dynamic add

  function generete_dynamic_sociallink(count){

  var links = ' <div id="add_sociallink_'+count+'"> <label for="date-to" class="">Social Links</label> <input type="text" class="form-control input-group-lg" style="margin-top:10px;" name="social_link[]" id="social_link_'+count+'"/> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_link btn btn-info btn-sm"> Remove</a> </div> </div>';

    return links;
}


$(document).ready(function(){
        $("#sociallinks").click(function()
          { 

            var nxtticket_count = $(this).data("nxt_social_link"); 
            var nxtvenueHTML = generete_dynamic_sociallink(nxtticket_count);
            $("#dynamic_add_sociallink").append(nxtvenueHTML);        
              nxtticket_count++;
           $(this).data('nxt_social_link', nxtticket_count); //update data nxtportion   
        });   
});

// remove div
$(document).on('click', '.remove_link', function(e)
    {         
          $(this).parents('[id^=add_sociallink_]').remove();
         
    });



$("#profileImage1").click(function(e) { //this two value is cover image  id name 
    $("#imageUpload1").click();
}); 

$("#editcover_img").click(function(e) { //this two value is cover image  id name 
    $("#imageUpload1").click();
}); 
   

$("#profileImage").click(function(e) { //this two value is profile image  id name 
    $("#imageUpload").click();  
}); 

$("#update_hover").click(function(e) { //this update_hover is cover image text id for select profile image   
    $("#imageUpload").click();  
}); 


// calender for event info
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

//ticket select option  show and hide

  $(document).on('change', '#relation_type',function () {
           
      if ($(this).val() == "Single" || $(this).val() == "select" || $(this).val() == "Divorced" || $(this).val() == "Widowed" || $(this).val() == "---"  ) 
          {
            $("#relationship_with").hide();
          }     
      
      else
          {
            $("#relationship_with").show();
          }
  });





  function generete_dynamic_relationship(count){

  var relation = ' <div id="add_relation_'+count+'"> <div class="row"> <div class="form-group col-xs-12"> <label for="date-to" class="">Name</label> <input id="relation_name_'+count+'" type="text" class="form-control input-group-lg" name="relation_name[]"  value="" /> </div> <div class="form-group col-sm-12" style="font-size: 12px;"> <label>Relationship</label> <select name="relation_type[]" id="relation_type_'+count+'" class="form-control" style="background-color:#eff0f1;"> <option value="">Choose Relationship</option> <option value="Mother">Mother</option> <option value="Father">Father</option> <option value="Daughter">Daughter</option> <option value="Son">Son</option> <option value="Sister">Sister</option> <option value="Brother">Brother</option> <option value="Uncle">Uncle</option> <option value="Aunt">Aunt</option> <option value="Friend">Friend</option> <option value="Niece">Niece</option> <option value="Cousin(female)">Cousin(female)</option> <option value="Cousin(male)">Cousin(male)</option> <option value="Grandfather">Grandfather</option> <option value="Grandmother">Grandmother</option> <option value="Grandson">Grandson</option> <option value="Granddaughter">Granddaughter</option> </select> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_relation btn btn-info btn-sm"> Remove</a> </div> </div> </div>';

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

// dynamic add certificate
  function generete_dynamic_certificate(count){

  var certificate = ' <div class="form-group col-xs-12" id="add_certificate_'+count+'"> <div class="form-group col-xs-6"> <label for="date-to" >Certificate</label> <input  type="text" id="certificate_'+count+'" class="form-control" name="Certificate[]"  style="text-transform: capitalize;" /> </div> <div class="form-group col-xs-6"> <label for="date-to" class="">Year</label> <select name="year[]" id="year_'+count+'" class="form-control"> <option value=""> Year</option> <option value="2018"> 2018</option> <option value="2017"> 2017</option> <option value="2016"> 2016</option> <option value="2015"> 2015</option> <option value="2014"> 2014</option> <option value="2013"> 2013 </option> <option value="2012"> 2012</option> <option value="2011"> 2011</option> <option value="2010"> 2010</option> <option value="2009"> 2009</option> <option value="2008"> 2008</option> <option value="2007"> 2007</option> <option value="2006"> 2006</option> <option value="2005"> 2005</option> <option value="2004"> 2004</option> <option value="2003"> 2003</option> <option value="2002"> 2002</option> <option value="2001"> 2001</option> <option value="2000"> 2000</option> </select> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_certificate btn btn-info btn-sm"> Remove</a> </div> </div>';

    return certificate;
}



$(document).ready(function(){
        $("#add_certificate").click(function()
          {       
            var next_certificate = $(this).data("nxt_certificate"); 
            var nxtvenueHTML = generete_dynamic_certificate(next_certificate);
            $("#dynamic_add_certificate").append(nxtvenueHTML);        
              next_certificate++;
           $(this).data('nxt_certificate', next_certificate); //update data nxtportion   
        });   
});

// remove div
$(document).on('click', '.remove_certificate', function(e)
    {
         
          $(this).parents('[id^=add_certificate_]').remove();
         
    });

// dynamic add college
  function generete_dynamic_college(count){

  var college = ' <div class="row" id="add_college_'+count+'"> <div class="form-group col-xs-12"> <label for="date-to"> College</label> <input type="text" id="college_'+count+'" class="form-control input-group-lg" name="college[]" > </div> <div class="form-group col-xs-12"> <label for="date-to"> Degree</label> <input type="text" id="degree_'+count+'" class="form-control input-group-lg" name="degree[]" style="text-transform: capitalize;" placeholder="Ex.Bachelors"> </div> <div class="form-group col-xs-12"> <label for="date-to"> Field of study</label> <input type="text" id="field_of_std_'+count+'" class="form-control input-group-lg" name="field_of_study[]" style="text-transform: capitalize;" placeholder="Ex.Business"> </div> <div class="form-group col-xs-12"> <label for="date-to"> Grade</label> <input type="text" id="grade_'+count+'" class="form-control input-group-lg" name="grade[]" style="text-transform: capitalize;" > </div> <div class="form-group col-xs-6"> <label for="date-to"> From</label> <select name="from_year[]" id="fromyear_'+count+'" class="form-control"> <option value=""> Year </option> <option value="2017"> 2017</option> <option value="2016"> 2016</option> <option value="2015"> 2015</option> <option value="2014"> 2014</option> <option value="2013"> 2013 </option> <option value="2012"> 2012</option> <option value="2011"> 2011</option> <option value="2010"> 2010</option> <option value="2009"> 2009</option> <option value="2008"> 2008</option> <option value="2007"> 2007</option> <option value="2006"> 2006</option> <option value="2005"> 2005</option> <option value="2004"> 2004</option> <option value="2003"> 2003</option> <option value="2002"> 2002</option> <option value="2001"> 2001</option> <option value="2000"> 2000</option> </select> <div class="alert alert-danger" id="error_msg_'+count+'" role="alert" style="display:none;" >Your end date can’t be earlier than your start date. </div> </div> <div class="form-group col-xs-6"> <label for="date-to"> To</label> <select name="to_year[]" id="toyear_'+count+'" class="year_validate1 form-control"> <option value=""> Year </option> <option value="2017"> 2017</option> <option value="2016"> 2016</option> <option value="2015"> 2015</option> <option value="2014"> 2014</option> <option value="2013"> 2013 </option> <option value="2012"> 2012</option> <option value="2011"> 2011</option> <option value="2010"> 2010</option> <option value="2009"> 2009</option> <option value="2008"> 2008</option> <option value="2007"> 2007</option> <option value="2006"> 2006</option> <option value="2005"> 2005</option> <option value="2004"> 2004</option> <option value="2003"> 2003</option> <option value="2002"> 2002</option> <option value="2001"> 2001</option> <option value="2000"> 2000</option> </select> </div> <div class="form-group col-xs-12"> <label for="date-to"> Description</label> <textarea id="description_'+count+'" name="description[]"> </textarea> </div> <div class="col-sm-12 text-right"> <a href="JavaScript:void(0);" class="animated bounceInLeft remove_college btn btn-info btn-sm"> Remove </a> </div> <div class="col-md-12" style="border-bottom:2px solid #ffb3d1; margin:15px 0;"></div> </div>';


    return college;
}


$(document).ready(function(){
        $("#add_college").click(function()
          {       
            var next_certificate = $(this).data("nxt_college_name"); 
            var nxtvenueHTML = generete_dynamic_college(next_certificate);
            $("#dynamic_add_college").append(nxtvenueHTML);        
              next_certificate++;
           $(this).data('nxt_college_name', next_certificate); //update data nxtportion   

            $('.year_validate1').change(function(e)
              {
                  var fromyear = $("#fromyear_").val(); //Year, Month, Date
                  var endyear = $("#toyear_").val(); //Year, Month, Date
                                  if (endyear > fromyear) {
                                      $('#error_msg_').hide();
                                  } else {
                                      $('#error_msg_').show();
                                  }
              });

        }); 

});

// remove div
$(document).on('click', '.remove_college', function(e)
    {
       $(this).parents('[id^=add_college_]').remove();
    });


$(document).on('change', '.year_validate', function(e)
    {
        var fromyear = $("#fromyear_1").val(); //Year, Month, Date
        var endyear = $("#toyear_1").val(); //Year, Month, Date
                        if (endyear > fromyear) {
                            $('#error_msg').hide();
                        } else {
                            $('#error_msg').show();
                        }
    });



// dynamic add professional
  function generete_dynamic_professional(count){

  var professional = ' <div class="form-group col-xs-12" id="add_professional_'+count+'"> <label for="date-to"> Professional Skills</label> <input type="text" id="professional_'+count+'" class="form-control input-group-lg" name="professional_skills[]" style="text-transform: capitalize;" >  <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_profession btn btn-info btn-sm"> Remove</a> </div> </div>';

    return professional;
}



$(document).ready(function(){
        $("#add_professional").click(function()
          {       
            var next_professional = $(this).data("nxt_professional"); 
            var nxtvenueHTML = generete_dynamic_professional(next_professional);
            $("#dynamic_add_professional").append(nxtvenueHTML);        
              next_professional++;
           $(this).data('nxt_professional', next_professional); //update data nxtportion   
        });   
});

// remove div
$(document).on('click', '.remove_profession', function(e)
    {
       $(this).parents('[id^=add_professional_]').remove();
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

                        beforeSend: function()
                        {

                          swal({
                              title: 'Please Wait...',
                              text: 'Uploading...',
                              toast: true,
                              target: '.swal',              
                             
                              onOpen: () => {
                                swal.showLoading()
                             }
                          }); 
              
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

 //professional profile certifcate submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

 $(document).ready(function(){

    $(document).on("submit", "#professional_certificate", function(e){
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

    $(document).on("submit", "#professional_skills", function(e){
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

//professional college  updated profile page

     var base_url = '<?php echo base_url() ?>'; //form submited
    $(document).ready(function(){

    $(document).on("submit", "#professional_college", function(e){
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

//dynamic add experience

function generete_dynamic_exp(count){

  var exp = ' <div class="row" id="profile_exp_'+count+'">  <div class="col-md-12" style="border-bottom:2px solid #ffb3d1; margin:15px 0;"></div>  <div class="form-group col-xs-12"> <label for="date-to" >Title</label> <input type="text" id="title_'+count+'" class="form-control" name="title[]"/> </div> <div class="form-group col-xs-12"> <label for="date-to" >Company</label> <input  type="text" id="company_'+count+'" class="form-control input-group-lg" name="company[]"  >  </div>  <div class="form-group col-xs-12"> <label for="date-to"> Location</label> <input  type="text" id="location_'+count+'" class="form-control input-group-lg" name="location[]" >  </div>   <div class="form-group col-md-6"> <select name="from_year[]" id="fromyear_'+count+'" class="form-control"> <option value=""> Year</option><option value="2018"> 2018</option>  <option value="2017"> 2017</option> <option value="2016"> 2016</option> <option value="2015"> 2015</option> <option value="2014"> 2014</option> <option value="2013"> 2013 </option> <option value="2012"> 2012</option> <option value="2011"> 2011</option> <option value="2010"> 2010</option> <option value="2009"> 2009</option> <option value="2008"> 2008</option> <option value="2007"> 2007</option> <option value="2006"> 2006</option> <option value="2005"> 2005</option> <option value="2004"> 2004</option> <option value="2003"> 2003</option> <option value="2002"> 2002</option> <option value="2001"> 2001</option> <option value="2000"> 2000</option> </select> </div> <div class="form-group col-md-6"> <select name="to_year[]" id="toyear_'+count+'" class="form-control">  <option value=""> Year</option><option value="2018"> 2018</option> <option value="2017"> 2017</option> <option value="2016"> 2016</option> <option value="2015"> 2015</option> <option value="2014"> 2014</option> <option value="2013"> 2013 </option> <option value="2012"> 2012</option> <option value="2011"> 2011</option> <option value="2010"> 2010</option> <option value="2009"> 2009</option> <option value="2008"> 2008</option> <option value="2007"> 2007</option> <option value="2006"> 2006</option> <option value="2005"> 2005</option> <option value="2004"> 2004</option> <option value="2003"> 2003</option> <option value="2002"> 2002</option> <option value="2001"> 2001</option> <option value="2000"> 2000</option> </select> </div>  <div class="form-group col-xs-12"> <label for="date-to"> Description</label> <textarea name="description[]" id="description_'+count+'" class="form-control" style="min-height:100px;" > </textarea> </div>  <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_exp btn btn-info btn-sm"> Remove</a> </div> </div> </div>';

    return exp;
}


$(document).ready(function(){
        $("#add_more_exp").click(function()
          {       
            var nxtticket_count = $(this).data("add_multi_exp"); 
            var nxtvenueHTML = generete_dynamic_exp(nxtticket_count);
            $("#dynamic_add_exp").append(nxtvenueHTML);        
              nxtticket_count++;
           $(this).data('add_multi_exp', nxtticket_count); //update data nxtportion   
        });   
});

// remove div
$(document).on('click', '.remove_exp', function(e)
    {
         
          $(this).parents('[id^=profile_exp_]').remove();
         
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

//profile email toogle enable  form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("click", "#email_enable", function(){

      var textval = $('#email_enable').val();

        $.ajax({
                url :  base_url+'Profile/email_enable/'+textval,
                context:this,
                method: 'POST',
                // data: formdata,
                processData: false,
                contentType: false,
                dataType:'json',
                // context:this,   //here we use this function so declare here
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },              
                
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                                                           
                    }else 
                     {                    
                        swal("Sorry!", "Something Wrong try again !", "error");
                     }
                }

            });
        });
});

//profile phone toogle enable  form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("click", "#phone_enable", function(){

      var textval = $('#phone_enable').val();

        $.ajax({
                url :  base_url+'Profile/phone_enable/'+textval,
                context:this,
                method: 'POST',
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
                                                      
                    }else 
                     {                    
                        swal("Sorry!", "Something Wrong try again !", "error");
                     }
                }

            });
        });
});

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
