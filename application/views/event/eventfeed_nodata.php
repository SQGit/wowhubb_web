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
  width: 97%;
  position: absolute;
  bottom: 7px;
  height: 45px;
  right: 10px;
    z-index: 999;
}
.timeline-nav-bar1 {
  position: absolute;  
  bottom: 7px; 
  right: 25px;
  z-index: 99;
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
ul.nav-news-feed li {
    list-style: none;
    display: block;
    padding: 2px 0;
    text-align: left;
}

ul.nav-news-feed {
    padding-left: 20px;
    padding-right: 20px;
    margin: 0 0 0px 0;
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
  margin-top:4px;
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
  background-color: transparent;
  border: 0;
  cursor: pointer;
}
.panel1 {
  padding: 0px;
  display: none;
}
.post-content {
    background: #fff;
    border-radius: 4px;
    width: 100%;
    border: 1px solid #E1E0E0;
    margin-bottom: 10px;
    overflow: hidden;
    position: relative;
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

.btn-primary-1 {
    background: #e91e63;
    padding: 7px 15px!important;
    border: none;
    font-size: 14px;
    border-radius: 4px;
    color: #fff;
    position: relative;
    font-weight: 600;
    outline: none;
    border-radius: 30px;
}

img {
    max-width: 200px;
    height: auto;
    display: inline-block;
  }

  .remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
    width: 200px;     
  }
  .remove:hover {
    background: white;
    color: black;
  }
  
@media (min-width: 1024px)
  {
    .menu form .form-group input.form-control{
      width:250px;
    }
    textarea.form-control
    {
      width:100%;
    }
  }
  .profile-card{
  
  width: 100%;
  height: 80px!important;
  
}
/*here start with multiple email  */
.multipleInput-container {
     border:1px #999 solid;
     padding:1px;
     padding-bottom:0;
     cursor:text;
     font-size:14px;;
     width:100%;
    border-radius: 6px;
    margin-top: 20px;
}
 
.multipleInput-container input {  
    outline: none;
    font-size:14px;;
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
.profile-card {
    background: linear-gradient(to bottom, rgba(63,62,63,.8), rgba(41,41,41,.8)), url(../../images/covers/5.jpg) no-repeat;
    box-shadow: 1px 1px 1px 2px #ECECEC;
    background-size: cover;
    width: 100%;
    min-height: 71px;
    border-radius: 4px;
    padding: 10px 8px 0;
    color: #fff;
    border: 1px solid #f9f9f9;
    margin-bottom: 20px;
}

.profile-card img.profile-photo {
    border: 0px solid #fff;
    float: left;
    margin-right: 20px;
    position: relative;
    top: -4px;
    height: 25px;
    width: 25px;
    border-radius: 50%;
    left: 0;
}

.create-post {
    width: 100%;
    min-height: 90px;
    padding: 20px;
    margin-bottom: 7px;
    border-bottom: 1px solid #ccc;
}

.rsvp-1{
    margin: 0;
    padding: 6px 12px;
    background: #fff none repeat scroll 0 0;
    border: 1px solid rgb(197, 194, 195);
    border-radius: 4px;
    font-size: 12px;
    font-weight: normal;
    color: #333;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    border-radius: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}

</style>

</head>

<body>

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

<div id="page-contents" style="padding:45px 0 50px;">
  <div class="container">
    <div class="row">

      <div class="col-md-12 text-center" style="font-weight: bold; font-size: 13px;">         
          <div class="alert alert-info fade in alert-dismissible" style="margin-top:0px; margin-bottom: 10px; padding-top: 5px;padding-bottom: 5px; background-color: #ddd; border: 1px solid #ccc;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
            <strong>
              <img src="<?php echo base_url('assets/images/wow-tag-icon-1.png'); ?>" alt="Interest" />
            </strong>  <span style="color: #333;"> Let's Check for the Interests and Connect with Friends!! </span>
            <span style="color: #e91e63;">
              <a href="<?php echo base_url('home/interest_get'); ?>" > Click Here </a>
            </span>
          </div>
      </div> 
      
      <!-- Newsfeed Common Side Bar Left
          ================================================= -->
   
    <div class="col-md-2 static">
        <div class="profile-card" style="margin-bottom:3px;">
              <div style="width:100%; float:left;">
                <?php 
                if(!is_null($this->session->userdata('personal_image')))
                { ?>
                <div style="float:left; width:18%;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" /></div>
                <?php }  else { ?>
                <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo" />
                <?php } ?>
                <div class="text-white" style="float:left; width:80%; font-size:13px; margin-top:-4px; line-height:18px; text-transform:capitalize; white-space:nowrap; overflow:hidden; text-overflow: ellipsis;">
                  <span class="name_bottom" title="<?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?>" data-original-title="Tooltip on right" >
                  <?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?>
                  </span>
                </div>
              </div>

              <div style="float:right; width:82%;">
                <p style="margin-top:-16px; font-size:13px; line-height:37px;  text-transform:capitalize;">
                  <?php echo $this->session->userdata('designation');  ?></p>
              </div>

              <div style="font-size:20px; color:#fff; margin-top:-30px; width:100%; float:right; text-align:right;">

                  <?php
                      if($this->session->has_userdata('self_video') && ($this->session->userdata('self_video') != 'null'))               
                      {  
                  ?>
                       
                        <a href="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('self_video'); ?>" class="html5lightbox" data-width="480" data-height="320" > &nbsp;&nbsp;
                          <i class="icon ion-arrow-right-b" style="font-size:28px; color:#fff;"></i>
                        </a> 
                        
                  <?php } ?>
                
              </div>
        </div>

        <!--profile card ends-->
        
        <div id="chat-block" >
          <ul class="nav-news-feed" style="margin-bottom:3px; padding:0;">
            
            <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <img src="<?php echo base_url('assets/images/create-event-icon.png'); ?>" alt="user" /><a style="font-weight: bold;" href="<?php echo base_url('event/event_popup'); ?>">&nbsp;Create Event</a> </li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed" style="padding:0;">
           
            <li><img src="<?php echo base_url('assets/images/event-feed-icon.png'); ?>" style="margin-left:5px;" alt="user" />
              <a href="<?php echo base_url('Event/profile_get_eventfeed'); ?>"> &nbsp;My Feeds</a></li>
            <li><img src="<?php echo base_url('assets/images/profile-icon.png'); ?>" style="margin-left:5px;" alt="user" />
              <a href="<?php echo base_url('Profile/profile_get'); ?>"> &nbsp;My Profile</a></li>
            <li><img src="<?php echo base_url('assets/images/network-icon.png'); ?>" style="margin-left:5px;" alt="user" />
              <a href="<?php echo base_url('Searchfriends/add_friends'); ?>"> &nbsp;My Network</a></li>
            <li><img src="<?php echo base_url('assets/images/album-icon.png'); ?>" style="margin-left:5px;" alt="user" /><a href="#"> &nbsp;My Album</a></li>
            <li><img src="<?php echo base_url('assets/images/wow-tag-icon-1.png'); ?>" style="margin-left:5px;" alt="user" /><a href="#"> &nbsp;Wowtags</a></li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="<?php echo base_url('eventhubb/get_future_eventhubb'); ?>"><img src="<?php echo base_url('assets/images/event-hubb-icon.png'); ?>" style="margin-left:5px;" alt="user" /> &nbsp;Event Hubb</a></div>
            </li>
            <li><img src="<?php echo base_url('assets/images/profile-icon.png'); ?>" style="margin-left:5px;" alt="user" /><a href="#"> &nbsp;Event Organizer</a></li>
             <li><img src="<?php echo base_url('assets/images/album-icon.png'); ?>" style="margin-left:5px;" alt="user" /><a href="#">&nbsp; My Coupons</a></li>
             <li><img src="<?php echo base_url('assets/images/network-icon.png'); ?>" style="margin-left:5px;" alt="user" /><a href="<?php echo base_url('searchfriends/get_group'); ?>"> &nbsp;Group Hubb</a></li>

            
          </ul>
          
          <!--news-feed links ends-->
          <ul class="nav-news-feed" style="padding:10px 0 1px;">
            <h5 style="font-weight:bold; font-size:13px; letter-spacing:-.5px; text-align:left; padding:0; margin:0; padding-left:5px; color:#616770;">Event Pages</h5>
             
                
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed" style="padding:10px 0;">
            <h5 style="font-weight:bold; font-size:13px; letter-spacing:-.5px; text-align:left; padding-left:5px; color:#616770;">Business Pages</h5>
            <li style="color:#e91e63; padding-left:5px;"><strong>Organisations</strong></li>
           

            <!-- company name show here from login page -->
             <?php
             
                  $business =  $this->session->userdata('business');
                  
                    foreach ($business as $business_name) { 
                        if(isset($business_name->companyname)) 
                          {            
                  
              ?>
            <li>             
              <div style="margin-left:0; text-align:left; padding-left:5px;">
                <a href="<?php echo base_url('business/business_pageshow/'.$business_name->_id); ?>">
                    
                    <?php  echo $business_name->companyname; ?>
                </a>
              </div>
            </li>

            <?php } }  ?>
            <!-- company name show end here  -->

            <li  style="color:#e91e63; padding-left:5px;"><strong>Event Service Providers</strong></li>
            
             <!-- event service provider name show here from login page -->
              <?php
             
                  $event_service =  $this->session->userdata('eventservice');
                  
                  foreach ($event_service as $event_service_name) { 
                      if(isset($event_service_name->companyname)) 
                        {            
                  
              ?>
            <li> 

              <div style="margin-left:0; text-align:left; padding-left:5px;">
                    <a href="<?php echo base_url('business/my_eventserviceprovider_pageshow/'.$event_service_name->_id); ?>">
                      
                      <?php  echo $event_service_name->companyname; ?>
                      
                    </a>
              </div>

            </li>

            <?php } }  ?>
            <!-- event service provider name show end here  -->

            <li  style="color:#e91e63; padding-left:5px;"><strong>Event Venues</strong></li>
            <li>
              <div style="margin-left:0; text-align:left; padding-left:5px;"><a href="#">Sharaton Event Center</a></div>
            </li>
          
            
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed"  style="padding:0;">
            <h5 style="font-weight:bold; font-size:13px;  color:#616770; letter-spacing:-.5px; text-align:left;  padding-left:5px; margin-bottom:0;">Create</h5>
             <li>
              <div style="margin-left:0; text-align:left; padding-left:5px;" >
              <a href="<?php echo base_url('Searchfriends/create_group_page'); ?>" style=" color:#da275a;">Group.</a>
              <a href="#" style=" color:#da275a;">Adv.</a> 
              <a href="#" style=" color:#da275a;">Business Ad.</a>
              <a href="<?php echo base_url('business/business_page_landing'); ?>" style=" color:#da275a;">Page</a></div>
            </li>
            
          

          </ul>
          <!--news-feed links ends--> 
          
        </div>
        <!--chat block ends--> 
      </div>
        <!-- center part for event feed -->

      <div class="col-md-7"> 
        
            <div class="create-post" style="background-color: #fff; padding:10px; border-radius:5px;">

              <div class="row" style="background-color:#f6f7f9; border-bottom:1px solid #ccc; margin-bottom:10px;">
              <div class="col-md-12" style="font-size:13px; font-weight:bold; margin-top:10px; margin-bottom:3px;"> <img src="<?php echo base_url('assets/images/sh-th.png'); ?>" alt="share thoughts" /> Share Your Thoughts</div>
              </div>
                <div class="row">


                   <!-- thought form submit here -->
                   <form id="thougths" action="<?php echo base_url('event/update_thoughts'); ?>" method="POST" enctype="multipart/form-data">

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            
                            <?php if(!is_null($this->session->userdata('personal_image')))
                              { ?>

                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" />
                              <?php } else { ?>
                              <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                            <?php } ?>             

                               <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Share your thoughts.." style="margin-left:10px; min-height: 70px; width:470px!important; border-bottom:1px solid #ccc; border-top:0; border-left:0; border-right:0px; box-shadow:none; border-radius:0;" required></textarea>
                        </div>
                    </div>
                     <div class="col-md-12">
                        <div class="col-md-12 col-sm-12" style="margin:25px 0 0; border:0.5px solid #E5E5E5;"></div>
                    </div>

                    <div class="col-md-12 col-sm-12" style="margin-top:0px;"> 
                
                <!-- thoughts update here -->
                
                <div class="tools pull-left">
                  <ul class="publishing-tools list-inline">
                    <li id="url_link" style="background:none; padding:5px 10px; border-radius:25px; border:1px solid #a5a5a5;cursor:pointer;"> <img src='<?php echo base_url('assets/images/link-icon.png'); ?>' alt="user"   />Type URL </li>

                    <li id="upfile1" style="background:none; padding:5px 10px; border-radius:25px; border:1px solid #a5a5a5;cursor:pointer;"> <img src='<?php echo base_url('assets/images/image-icon.png'); ?>' alt="user"  /> Post Image  </li>

                    <li style="background:none; padding:5px 10px; border-radius:25px; border:1px solid #a5a5a5;"> 
                   
                      <input type="file" name="thought_video" id="video_size" class=" file" accept="video/*" style="display:none" >
                      <img src="<?php echo base_url('assets/images/vid-icon.png'); ?>" alt="user" id="upfile2" style="cursor:pointer"/> Post Video  </li>
                  </ul>
                </div>
               <div class="tools pull-right">
                  <input type="submit" name="thoughts" class="btn btn-primary-1 pull-right" style="margin-top:7px; padding-left:25px!important; font-size:13px; padding-right:25px!important;" value="Publish" >
                </div>
              </div>
                      <div class="col-md-12" style="margin-top: 20px; margin-bottom: 20px; display: none;" id="show_text" >
                          <input type="text" class="form-control" name="thought_url_link" id="" placeholder="Enter URL Link">                         
                      </div>                      

                      <div class="col-md-12" style="margin-top: 20px; margin-bottom: 20px;" > <!-- image upload here -->
                          <div class="col-md-6">                             
                             <input type="file" id="file1" name="thought_img" accept="image/*"  style="display:none"> 
                          </div>

                          <div class="col-md-6"> 
                                  <div id="video_show"  style="display: none;" >
                                    <div class="remove_video" style="cursor: pointer;"><i class="fa fa-times-rectangle" style="font-size:25px; float: right;"></i></div>
                                      <video width="200" height="150" controls>
                                          <source src="mov_bbb.mp4" id="video_here" >
                                                Your browser does not support HTML5 video.
                                      </video>                                      
                                  </div>                                   
                          </div>
                      </div>   
                      
                </form>
                <!-- thought form submit end here -->

                  <!-- start today end with shows array_slice 4 event name -->
                  <div class="todayevent_show" > 
                    <div class=" col-md-12" style="border-top: 10px solid #f5f5f5;">
                      <h3 style="font-size:14px;; font-weight:bold; color: #333;">Today Events</h3>
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
                                  <strong>
                                    <a href="#" data-toggle="modal" data-target=".modal-2" >
                                    
                                    <?php if(isset($todayfeeds->eventtitle)) { echo $todayfeeds->eventtitle; } else { echo " "; } ?>
                                      
                                    </a>
                                  </strong>
                                  <br>
                                  <span style="font-size:11px;">
                                    <?php 

                                    if(isset($todayfeeds->eventstartdate))
                                     { 
                                          $timestamp = strtotime($todayfeeds->eventstartdate);                                         
                                          echo date('h:i A', $timestamp);
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
                            <h3 style="font-size:14px;; font-weight:bold; color: #333;">Today Events</h3>
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
                                    <?php if(isset($todayfeeds->eventstartdate))
                                     { 
                                          $timestamp = strtotime($todayfeeds->eventstartdate);
                                          
                                          echo date('h:i A', $timestamp);                                      
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

            <!-- thoughts  start here -->
                  <?php                            
                        foreach ($eventfeed as $feeds)
                          {                    
                            if(isset($feeds->eventtype) && ($feeds->eventtype =='thought')) 
                              {                              
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
                                        <form class="delete_thought" action="<?php echo base_url('event/thoughts_delete/'.$feeds->_id); ?>" method="POST">
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

                                        if(isset($feeds->userid->personalimage))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;"> 

                                        <a href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" > 

                                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $feeds->userid->personalimage; ?>" alt="user" class="profile-photo-md pull-left" />
                                        </a> 

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>"> 
                                    <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> 
                                  </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:14px;; font-weight:bold; color:#555;">
                                 
                                  <a style="color: #333;" href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" >
                                      <?php echo $feeds->userid->firstname ." ".$feeds->userid->lastname ; ?> 
                                  </a>
                                </div>

                                <p style="font-size:13px; color:#777;">
                                  <?php  
                                          if(isset($feeds->userid->designation))
                                            { 
                                               echo $feeds->userid->designation; 
                                            } 
                                          else { echo " ";  } 
                                  ?>
                                </p> 
                                
                              </div>

                          </div>                    

                      <div class="col-md-12" style="margin-top:5px;">
                        <p class="text-muted"><?php if(isset($feeds->thoughtstext)) { echo $feeds->thoughtstext; } ?></p>
                      </div>
                       <div class="col-md-12" style="margin-top:3px;">
                        <p class="text-muted" style="font-size: 16px;"><a href=" <?php if(isset($feeds->urllink)) { echo $feeds->urllink; } ?>" style="color:#333;" target="_blank"> <?php if(isset($feeds->urllink)) { echo $feeds->urllink; } ?></p>
                       
                        <?php if(isset($feeds->imageurl)){ ?>
                          <div class="gallery" > <img style="width:476; height: 249px;" src="<?php echo $feeds->imageurl; ?>" alt="post-image" class="img-responsive post-image" /></div>
                        <?php } ?>

                         <p ><?php if(isset($feeds->title)) { echo $feeds->title; } ?></p>
                          <p ><?php if(isset($feeds->description)) { echo $feeds->description; } ?></p>
                          </a>
                          
                      </div>
                    </div>

                      <!-- here start with cover image -->

                      <?php 
                            if(isset($feeds->thoughtsimageurl) && ($feeds->thoughtsimageurl != 'null') && ($feeds->thoughtsvideo != 'null'))
                            {
                      ?>
            
                    <div class="col-md-6" style="position: relative; margin-top: 20px;">                      
                      <div class="gallery" >
                        <a class="test-popup-link" href='<?php echo $feeds->thoughtsimageurl; ?>' > 
                            <img style="height: 150px;" src="<?php echo $feeds->thoughtsimageurl; ?>" alt="post-image" class="img-responsive post-image" />
                        </a> 
                      </div>
                    </div>                 
            
                              <div class="col-md-6" style="position: relative; margin-top: 20px;">                      
                                      <div class="video">
                                          <div class="col-md-12">
                                            <a href="<?php echo $feeds->thoughtsvideourl; ?>" >
                                              <video class="myvideo" controlsList="nodownload">
                                                <source src="<?php echo $feeds->thoughtsvideourl; ?>" type="video/mp4">
                                              </video>
                                            </a> 
                                          </div>
                                      </div>
                              </div>

                    <?php }  

                    // view only image

                      elseif(isset($feeds->thoughtsimageurl) && ($feeds->thoughtsimageurl != 'null'))
                            { ?>

                    <div class="col-md-12" style="position: relative; margin-top: 20px;">
                      
                      <div class="gallery" > <a class="test-popup-link" href='<?php echo $feeds->thoughtsimageurl; ?>' > <img  src="<?php echo $feeds->thoughtsimageurl; ?>" alt="post-image" class="img-responsive post-image" /> </a> </div>
                    </div>

                    <?php }  elseif(isset($feeds->thoughtsvideo) && ($feeds->thoughtsvideo != 'null')) { ?>

                        <div class="col-md-12" style="position: relative; margin-top: 20px;">
                      
                                      <div class="video">
                                          <div class="col-md-12"> 
                                            <a href="<?php echo $feeds->thoughtsvideourl; ?>" >
                                              <video class="myvideo" controlsList="nodownload">
                                                <source src="<?php echo $feeds->thoughtsvideourl; ?>" type="video/mp4">
                                              </video>
                                            </a> 
                                          </div>
                                      </div>
                         </div>

                  <?php  } ?>

                  <!-- here end with cover image -->

                 
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
                               <span style="font-size:14px;; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                                  <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                   ?>
                                </span>
                                <?php if(isset($com->comment)) { echo $com->comment; }  ?>                           
                              </div>
                              <div class="pull-left" style="width:90%;"> Like. Reply.
                                 <span style="color:#B8B8B8;">
                                  <?php 
                                    if(isset($com->createddisplaytime)) {  
                                        $timestamp = strtotime($com->createddisplaytime);                                        
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                    }
                                  ?>
                                <time class="timeago" datetime="<?php if(isset($comment_date)) {  echo $comment_date; } ?>"></time> 
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
                            <div class="pull-left"> <span style="font-size:14px;; font-weight:bold; margin-top:4px; margin-bottom:0; margin-right:10px;">
                              <?php                        
                                   echo $com->userid->firstname." ".$com->userid->lastname;                  
                                ?>
                              </span>

                              <?php if(isset($com->comment)) { echo $com->comment; }  ?>

                            </div>
                            <div class="pull-left" style="width:90%;"> Like. Reply. 
                              <span style="color:#B8B8B8;"> 
                              <?php 
                                    if(isset($com->createddisplaytime)) {  
                                        $timestamp = strtotime($com->createddisplaytime);                                        
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                    }
                              ?>
                                 <time class="timeago" datetime="<?php if(isset($comment_date)) {  echo $comment_date; } ?>"></time>
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
                                <form class="comments_form" action="<?php echo base_url('event/thought_comments/'.$feeds->_id); ?>" method="post">
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
                                  <form class="thought_wowsome" action="<?php echo base_url('event/thought_wowsome/'.$feeds->_id); ?>" method="post">
                                        <div class="col-md-5 text-center" style="position: relative; margin-top: -3px;">
                                            <div style="position: absolute; left: 100px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 11px;" id="thoughtwow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-4 text-center">
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

        </div>   

         <?php }  } ?> 

      <!-- thoughts  end here -->

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
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
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
<script src="<?php echo base_url('assets/js/html5gallery.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/jquery.timeago.js')?>" ></script> <!--timeago library -->
<script src="<?php echo base_url('assets/js/bootbox.js')?>"></script> <!-- conformation delete boot box -->

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

// hide choose file button show image icon for thoughts
$("#upfile1").click(function () {
    $("#file1").trigger('click');
});

$("#upfile2").click(function () {
    $("#video_size").trigger('click');
});

//image preview and delete step1

$(document).ready(function () {

   if (window.File && window.FileList && window.FileReader) {

      $("#file1").on("change", function (e) {

            var files = e.target.files,
            filesLength = files.length;

            var f = files[0]
            var fileReader = new FileReader();
            fileReader.readAsDataURL(f);

            fileReader.onload = (function (e) {
               var file = e.target;
               $("<span class=\"pip\">" +
                  "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                  "<br/><span class=\"remove\">Remove image</span>" +
                  "</span>").insertAfter("#file1");

                $(".remove").click(function () {
                $(this).parent(".pip").remove();
                $('#file1').val("");

                });
           });
       
      });

   } else {
      alert("Your browser doesn't support to File API")
   }

});

//video size limitation highlight video1

$(document).on("change", "#video_size", function(evt)
        {
            var file = this.files[0];

            if (file.size > 2621440)
             {
                 $('#video_show').hide();  
                 alert('Filesize must 2.5MB or below');           
             }else
             {  
          var $source = $('#video_here');         
          $source[0].src = URL.createObjectURL(this.files[0]);
          $source.parent()[0].load();
          $('#video_show').show();  

          $(".remove_video").click(function () { 
               $('#video_show').hide();                 
                $('#video_size').val("");

                });       
         }

    });


// show url link text box for thought
$("#url_link").click(function(){
     $("#show_text").toggle();   
});


//thougths  form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", "#thougths", function(e){
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

                beforeSend: function()
                            {

                              swal({
                                  title: 'Please Wait...',
                                  text: 'Submitting...',
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
                    
                     window.location.href = base_url + 'event/get_new_eventfeed';
                                                         
                    }else 
                     {                    
                        swal("Sorry!", "somethink wrong try again !", "error");
                     }
                }

            });
        });
 });

//thought delete submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".delete_thought", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);

           bootbox.confirm("Are you sure you want to delete?", function(result) {
            if(result)
               {
      
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
                               $('#your-modal').modal('toggle');
                               // $('#success_msg').show(); //success notification id
                               // window.location.href = base_url + 'event/get_eventfeed';
                                                                   
                              }else 
                               {                    
                                  swal("Sorry!", "You don't have delete permission!", "error");
                               }
                          }

                      });
                }
               });
        });
 });

//quick event delete submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".delete_quick_event", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);

           bootbox.confirm("Are you sure you want to delete?", function(result) {
            if(result)
               {
      
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
                               // $('#rsvp_success').show(); //success notification id
                               window.location.href = base_url + 'event/get_eventfeed';
                                                                   
                              }else 
                               {                    
                                  swal("Sorry!", "You don't have delete permission!", "error");
                               }
                          }

                      });
                }
               });
        });
 });

//thought wowsome like form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".thought_wowsome", function(e){
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
                     $(this).find('input[id=thoughtwow_increment]').val(response.message);                                                        
                    }else 
                     {                    
                        swal("Sorry!", "somethink wrong try again !", "error");
                     }
                }

            });
        });
});


// url link  form submit
var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

   $('.url_link').on('change', function(){
     
              
       var searchbox = $('#link_value').val();
       alert(searchbox);
       // var dataString = 'searchword='+ searchbox;
     
        $.ajax({

                url : base_url+'event/thoughtlink/'+searchbox,
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
       
    }); 
   
});



</script>
</body>
</html>
