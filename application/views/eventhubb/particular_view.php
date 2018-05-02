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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/videopopup.css')?>"/>
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
  z-index: 9999;
}
.timeline-nav-bar1 {
  position: absolute;  
  bottom: 7px; 
  right: 25px;
  z-index: 9999;
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
/*#page-contents {
	padding: 30px 0 50px; 
 
}*/
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

video {
    position: relative; 
    top: 15%;
    left: 0;
    width: 100%;
    opacity: 1 !important;
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
      /*margin-left: 107px;*/
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
  height: 120px!important;
  
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
                <span class="text-white" style="margin-top:5px; font-size:17px;"><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?> </span>
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
             <li><img src="<?php echo base_url('assets/images/network-icon.png'); ?>" alt="user" /><a href="<?php echo base_url('searchfriends/get_group'); ?>">Group Hubb</a></li>

            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Event Pages</h5>
             
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Business Pages</h5>
            <li style="background-color:#EFEFEF; padding:5px 10px; border-radius:5px;"><strong>Organisations</strong></li>
           

            <!-- company name show here from login page -->
             <?php
                  $business =  $this->session->userdata('business');
                  
                    foreach ($business as $business_name) { 
                    if(isset($business_name->companyname)) 
                    {            
                  
              ?>
            <li>             
              <div style="margin-left:0; text-align:left;">
                <a href="<?php echo base_url('business/my_business_pageshow/'.$business_name->_id); ?>">
                    <i class="fa fa-caret-right" style="margin-top:4px;"></i>
                    <?php  echo $business_name->companyname; ?>
                </a>
              </div>
            </li>

            <?php } }  ?>
            <!-- company name show end here  -->

            <li style="background-color:#EFEFEF; padding:5px 10px; border-radius:5px;"><strong>Event Service Providers</strong></li>
            <li> 
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Amazing Bakery</a></div>
            </li>
            <li style="background-color:#EFEFEF; padding:5px 10px; border-radius:5px;"><strong>Event Venues</strong></li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Sharaton Event Center</a></div>
            </li>
          
            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Create</h5>
             <li>
              <div style="margin-left:0; text-align:left;"><a href="<?php echo base_url('Searchfriends/create_group_page'); ?>"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Create Group</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Create Ad</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Create Business Ad</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="<?php echo base_url('business/business_page_landing'); ?>"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Create Business Page</a></div>
            </li>
            
          </ul>
          <!--news-feed links ends--> 
          
        </div>
        <!--chat block ends--> 
      </div>

        <!-- center part for event feed start here-->

      <div class="col-md-6"> 
        
            <div class="create-post" style="background-color: #fff; padding:10px; border-radius:5px;">
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

                               <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Share your thoughts.." style="margin-left:10px; min-height: 70px; width:470px!important; border-bottom:1px solid #ccc; border-top:0; border-left:0; border-right:0px; box-shadow:none; border-radius:0;"></textarea>
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
                  <input type="submit" name="thoughts" class="btn btn-primary-1 pull-right" style="margin-top:7px; padding-left:25px!important; padding-right:25px!important;" value="Publish" >
                </div>
              </div>
                      <div class="col-md-12" style="margin-top: 20px; margin-bottom: 20px; display: none;" id="show_text" >
                          <input type="text" class="form-control" name="thought_url_link" id="" placeholder="Enter URL Link">                         
                      </div>                      

                      <div class="col-md-12" style="margin-top: 20px; margin-bottom: 20px;" > <!-- image upload here -->
                          <div class="col-md-6">
                             <input type="hidden" onclick="document.getElementById('file1').click();" />
                             <input type="file" id="file1" name="thought_img" accept="image/*" style="display:none"> 
                          </div>

                          <div class="col-md-6"> 
                                  <div id="video_show"  style="display: none;" >
                                      <video width="200" height="150" controls>
                                          <source src="mov_bbb.mp4" id="video_here" class="remove_video">
                                                Your browser does not support HTML5 video.
                                      </video>
                                  </div> 
                                  <!--  <div style="position:absolute; right:203px; top:0px;"><a href="#" class="delete"><i class="glyphicon glyphicon-remove"></i></a></div> -->
                          </div>
                      </div>   
                      
                </form>
                <!-- thought form submit end here -->

                    <!-- start today end with shows array_slice 4 event name -->
                  <div class="todayevent_show" > 
                    <div class=" col-md-12" style="border-top: 10px solid #f5f5f5;">
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

      <!-- thoughts  start here -->
                  <?php                            
                        foreach ($eventfeed as $feeds)
                          {                    
                            if($feeds->eventtype =='thought')  
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

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">
                                 
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
                            if(isset($feeds->thoughtsimage) && ($feeds->thoughtsimage != 'null') && ($feeds->thoughtsvideo != 'null'))
                            {
                      ?>
            
                    <div class="col-md-6" style="position: relative; margin-top: 20px;">
                      
                      <div class="gallery" > <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsimage; ?>' > <img style="height: 150px;" src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsimage; ?>" alt="post-image" class="img-responsive post-image" /> </a> </div>
                    </div>                 
            
                    <div class="col-md-6" style="position: relative; margin-top: 20px;">
                      
                                      <div class="video">
                                          <div class="col-md-12"> <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsvideo; ?>" >
                                                <video class="myvideo" controlsList="nodownload">
                                               <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsvideo; ?>" type="video/mp4">
                                               </video>
                                            </a> 
                                          </div>
                                      </div>
                    </div>

                    <?php }  

                    // view only image

                      elseif(isset($feeds->thoughtsimage) && ($feeds->thoughtsimage != 'null'))
                            { ?>

                    <div class="col-md-12" style="position: relative; margin-top: 20px;">
                      
                      <div class="gallery" > <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsimage; ?>' > <img  src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->thoughtsimage; ?>" alt="post-image" class="img-responsive post-image" /> </a> </div>
                    </div>

                    <?php }  else { echo " "; } ?>

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

                                        if(isset($feeds->userid->personalimage))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;"> 

                                        <a href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" > 

                                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $feeds->userid->personalimage; ?>" alt="user" class="profile-photo-md pull-left" />
                                        </a> 

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">
                                 
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
                                          else { echo " ";} 
                                  ?>
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
                      <?php if($this->session->userdata('wowtag') != ($feeds->userid->wowtagid) ){ ?>
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
                      <?php  } ?>
                                      <div class="video">
                                          <div class="col-md-12"> <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo; ?>" >
                                                <video class="myvideo" controlsList="nodownload">
                                               <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo; ?>" type="video/mp4">
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

                       
            </div>

            <?php }   ?>


    <!-- quick event end here -->

      <!-- personal evnt start here -->
                  <?php                            
                                                
                              if($feeds->eventtype =='personal_event')  
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

                                        if(isset($feeds->userid->personalimage))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;"> 

                                        <a href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" > 

                                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $feeds->userid->personalimage; ?>" alt="user" class="profile-photo-md pull-left" />
                                        </a> 

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">
                                 
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
                                          else { echo " ";} 
                                  ?>
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
                                      // $timestamp = strtotime($feeds->eventstartdate);
                                      
                                       echo date('M', strtotime($feeds->eventstartdate));
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
                                <p style="font-size: 9px;  font-weight: bold; color:#000;">
                                  <?php 
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      echo date('h:i A', $timestamp);
                                      // echo $feeds->eventstartdate;
                                   ?>
                                  - <span style="font-size:9px;  color:#000;"></span>

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
                      <?php if($this->session->userdata('wowtag') != ($feeds->userid->wowtagid) ){ ?>
                      <div class="timeline-nav-bar hidden-sm hidden-xs">
                        <div class="row">
                          <div class="col-md-12 text-right" >
                            <ul class="follow-me list-inline">
                              <li><a href="#modal-1" data-toggle="modal" data-id='<?php echo $feeds->_id; ?>'>
                                <input type="hidden" name="userid" value="<?php echo $feeds->_id; ?>" >
                                <button class="btn-primary" style="padding: 2px 25px;">RSVP</button>
                                </a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <?php  } ?>
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
                                                if(isset($eventvenues->eventvenuecity))
                                                {
                                                  echo   $eventvenues->eventvenuename." ".$eventvenues->eventvenuecity." ".$eventvenues->eventvenueaddress1." ".$eventvenues->eventvenuezipcode;
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
                                     <?php  if(isset($feeds->eventhighlights1 ) && ($feeds->eventhighlights1 != 'null')) { ?>
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
                                    <?php  if(isset($feeds->eventhighlights1 ) && ($feeds->eventhighlights1 != 'null') ) { ?>
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
                            <div  class="flip" style="font-weight:bold;	color:#e91e63;">View More Comments</div>
            
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
                                  <a href="#modal_email" style=" cursor: pointer;" data-toggle="modal"  data-id='<?php echo $feeds->_id; ?>'>
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

                                        if(isset($feeds->userid->personalimage))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;"> 

                                        <a href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" > 

                                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $feeds->userid->personalimage; ?>" alt="user" class="profile-photo-md pull-left" />
                                        </a> 

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">
                                 
                                  <a style="color: #333;" href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" >
                                      <?php echo $feeds->userid->firstname ." ".$feeds->userid->lastname ; ?> 
                                  </a>
                               </div>
                                <p style="font-size:13px; color:#777;">
                                  <?php  
                                        if(isset($feeds->userid->designation))
                                          { 
                                            echo $feeds->userid->designation; 
                                          } else
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

                                       if(isset($feeds->eventstartdate) ) 
                                        {                                        
                                          $timestamp = strtotime($feeds->eventstartdate);
                                        
                                         echo date('M', $timestamp);
                                    ?></span>  <br>

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

                           <div style="background-color: #c8c2c2; height: 25px; line-height: 25px; ">
                                <p style="font-size: 9px;  font-weight: bold; color:#000; ">
                                  <?php 
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      echo date('h:i A', $timestamp);
                                   ?>
                                  - <span style="font-size:9px;  color:#000;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->eventenddate);
                                       echo date('h:i A', $timestamp);
                                      
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
                      <?php if($this->session->userdata('wowtag') != ($feeds->userid->wowtagid) ){ ?>
                      <div class="timeline-nav-bar hidden-sm hidden-xs">

                        <div class="row">
                          <div class="col-md-6 text-left" >
                            <ul class="follow-me1 list-inline">
                              <li><a href="#" data-toggle="modal" >
                                <input type="hidden" name="userid" value="<?php echo $feeds->_id; ?>" >
                                <span  style="padding: 2px 25px; font-size: 18px; color: #fff!important;">
                                  <?php 
                                        if(isset($feeds->ticketprice))
                                            {  
                                               echo $feeds->ticketprice; 
                                            } 
                                            else { echo " "; }
                                  ?>                                    
                                </span>
                                </a> </li>
                            </ul>
                          </div>

                          <div class="col-md-6 text-right" >
                            <ul class="follow-me list-inline">
                              <li><a href="#" data-toggle="modal" >
                                <input type="hidden" name="userid" value="<?php echo $feeds->_id; ?>" >
                                 <?php 
                                        if(isset($feeds->engagementformaction) && ($feeds->engagementformaction !="")) 
                                            { 
                                              '<button class="btn-primary" style="padding: 2px 25px;">';                                 
                                                echo $feeds->engagementformaction;
                                              '</button>';
                                            } 
                                  ?>                                    
                                
                                </a> </li>
                            </ul>
                          </div>
                        </div>

                      </div>
                      <?php  } ?>
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

                                        if(isset($feeds->userid->personalimage))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;"> 

                                        <a href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" > 

                                              <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $feeds->userid->personalimage; ?>" alt="user" class="profile-photo-md pull-left" />
                                        </a> 

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">
                                 
                                  <a style="color: #333;" href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" >
                                      <?php echo $feeds->userid->firstname ." ".$feeds->userid->lastname ; ?> 
                                  </a>
                               </div>
                                <p style="font-size:13px; color:#777;">
                                  <?php  if(isset($feeds->userid->designation))
                                          { echo $feeds->userid->designation; } else { echo " ";} ?>
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
                                  <span style="line-height: 20px; text-transform: uppercase; font-weight: bold; font-size: 14px;">
                                    <?php 

                                       if(isset($feeds->eventstartdate) ) 
                                        {                                        
                                          $timestamp = strtotime($feeds->eventstartdate);                                        
                                         echo date('M', $timestamp);
                                    ?>
                                      
                                  </span>  <br>

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

                           <div style="background-color: #c8c2c2; height: 25px; line-height: 25px; ">
                                <p style="font-size: 9px;  font-weight: bold; color:#000; ">
                                  <?php 
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      echo date('h:i A', $timestamp);
                                   ?>
                                  - <span style="font-size:9px;  color:#000;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->eventenddate);
                                       echo date('h:i A', $timestamp);                                     
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
                      <?php if($this->session->userdata('wowtag') != ($feeds->userid->wowtagid) ){ ?>
                      <div class="timeline-nav-bar hidden-sm hidden-xs">

                       <div class="row">
                          <div class="col-md-6 text-left" >
                            <ul class="follow-me1 list-inline">
                              <li><a href="#" data-toggle="modal" >
                                <input type="hidden" name="userid" value="<?php echo $feeds->_id; ?>" >
                                <span  style="padding: 2px 25px; font-size: 18px; color: #fff!important;"><?php if(isset($feeds->ticketprice)) { echo '$'.$feeds->ticketprice; } else { echo " ";} ?></span>
                                </a> </li>
                            </ul>
                          </div>

                          <div class="col-md-6 text-right" >
                            <ul class="follow-me list-inline">
                              <li><a href="#" data-toggle="modal" >
                                <input type="hidden" name="userid" value="<?php echo $feeds->_id; ?>" >
                                <button class="btn-primary" style="padding: 2px 25px;"><?php if(isset($feeds->engagementformaction)) { echo $feeds->engagementformaction; } else { echo " ";} ?></button>
                                </a> </li>
                            </ul>
                          </div>
                        </div>

                      </div>
                      <?php  } ?>
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

                                        if(isset($feeds->sponsorslogo) && ($feeds->sponsorslogo !='null'))
                                          {
                                      ?>
                                        
                                  <div class="post-detail" style="margin:0;"> 

                                        <a href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" > 

                                              <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->sponsorslogo; ?>" alt="user" class="profile-photo-md pull-left" />
                                        </a> 

                                  </div>

                                  <?php  } else  { ?>

                                  <a href="#"> <img src="<?php echo base_url('assets/images/album/avatar_orgn.png'); ?>" alt="user" class="profile-photo-md" /> </a>
                                      
                                  <?php } ?>
                              </div>

                              <div class="user-info">
                                <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">
                                 
                                  <a style="color: #333;" href="<?php echo base_url('profile/profile_thirdparty_view/'.$feeds->userid->_id); ?>" >
                                      <?php if(isset($feeds->organisationname)) { echo $feeds->organisationname; } ?> 
                                  </a>
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
                                <p style="font-size: 10px;  font-weight: bold; color:#000;">
                                 
                                   <span style="font-size:9px;  color:#000;"></span>

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
                      <?php if($this->session->userdata('wowtag') != ($feeds->userid->wowtagid) ){ ?>
                      <div class="timeline-nav-bar hidden-sm hidden-xs">

                       <div class="row">
                          <div class="col-md-6 text-left" >
                            <ul class="follow-me1 list-inline">
                              <li><a href="#" data-toggle="modal" >
                                <input type="hidden" name="userid" value="<?php echo $feeds->_id; ?>" >
                                <span  style="padding: 2px 25px; font-size: 18px; color: #fff!important;"><?php if(isset($feeds->ticketprice)) { echo '$'.$feeds->ticketprice; } else { echo " ";} ?></span>
                                </a> </li>
                            </ul>
                          </div>

                           <!-- here cover img with action button -->

                          <div class="col-md-6 text-right" >   
                            <ul class="follow-me list-inline">
                              <li><a href="#" data-toggle="modal" >
                                <input type="hidden" name="userid" value="<?php echo $feeds->_id; ?>" >
                                <button class="btn-primary" style="padding: 2px 25px;"><?php if(isset($feeds->eventsalesaction1)) { echo $feeds->eventsalesaction1; } else { echo " ";} ?></button>
                                </a> </li>
                            </ul>
                          </div>
                        </div>

                      </div>
                      <?php  } ?>
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
            <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="<?php echo base_url('Nearbyevents/nearby_event'); ?>" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-location-arrow"></i> Search for Nearby Events</a></div>
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

  <!-- add send email model popup -->
  <div class="modal fade" id="modal_email" role="dialog" style="z-index:99999;">
        <div class="modal-dialog" style="width: 500px!important;">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="text-align:center;">Send Invite By Email </h4>
                </div>
                <div class="modal-body">
                  <div class="prescription_details">
                    <form  class="invite_email_form" action="<?php echo base_url('searchfriends/invite_email/'.$feeds->_id);?>" method="post">    <div class="alert alert-success" id="email_success" role="alert" style="display:none;" >Successfully Send Invite
                        </div>

                         <input type="hidden" name="event_id">             
                          <div class="col-sm-12 form-group ">      
                            <input type="email" name="email[]" class='form-control' placeholder="Enter Email ID">          
                          </div>   

                        <div class="action text-center">
                            <button type="submit" class="btn-primary">Invite</button>
                            
                        </div>
                    </form>
                  </div>
                </div><!--/.modal nody -->
                
          </div>
        </div>
      </div>
<!-- end email popup mode -->

<!-- Scripts
    ================================================= --> 
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
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
<script src="<?php echo base_url('assets/js/jquery.timeago.js')?>" ></script> <!--timeago library -->
<script src="<?php echo base_url('assets/js/bootbox.js')?>"></script> <!-- conformation delete boot box -->


<!-- search suggestion box plugin --> 


</body>
</html>
