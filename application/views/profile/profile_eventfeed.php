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
#calendar {
    width: 100%;
    margin: 0 auto;
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
      
          <?php  include('/../includes/header.php'); ?>
        </div>
        <!-- /.container --> 
      </nav>
  </header>
<!--Header End-->
<!-- breadcrumb for page link -->
<!-- <div class="container" style="margin-top:20px;">

<ol class="breadcrumb" style="margin-bottom:-10px!important;">
  <li class="breadcrumb-item"><a href="<?php echo base_url('event/get_eventfeed'); ?>"><strong>Home</strong></a></li>  
  <li class="breadcrumb-item active"><strong>My Feeds</strong></li>
</ol>
</div> -->

    <div class="container" style="margin-top: 5px;">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
   
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 15px; margin-top:15px;">
      <div class="row">

   <div class="col-md-3 static" style="width:20%;">

        <div class="profile-card" id="chat-block" style="margin-left:10px;">
        

            <div style="width:100%; float:left;">
              <?php 
                    if(!is_null($this->session->userdata('personal_image')))
              { ?>                      
              <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" />
              <?php }  else { ?> 
               
                 <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo" />
                 <?php } ?>
                <span class="text-white" style="margin-top:5px; font-size:13px; text-transform:capitalize;">
                  <?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?>        
                </span>

                    <div style="margin-left:65px;">
                        <?php 
                           if(!is_null($this->session->userdata('designation')))
                           { echo $this->session->userdata('designation');  }
                            else { echo " ";} 
                        ?>                              
                    </div>
             </div>

          <div style="font-size:15px; color:#fff; margin-top:-20px; width:100%; float:right; text-align:right;">
                  <?php
                      if($this->session->has_userdata('self_video') && ($this->session->userdata('self_video') != 'null'))               
                      {  
                  ?>
                       
                        <a href="<?php echo $this->session->userdata('self_video'); ?>" class="html5lightbox" data-width="480" data-height="320" > &nbsp;&nbsp;
                          <i class="icon ion-arrow-right-b" style="font-size:28px; color:#fff;"></i>
                        </a> 
                        
                  <?php } ?>
           </div>

          <div class="row">
            <div class="col-md-12 text-center" style="font-size:15px; margin-bottom:10px; margin-top:15px;">Your Network Connections</div>
            <div class="col-md-12 text-center" style="font-size:13px; margin-bottom:150px;">
              <?php if(isset($frds_count)) { echo $frds_count; } ?>
              
            </div>
            </div>
          </div>
         
        
      </div>


         <!-- center part for event feed -->

      <div class="col-md-6" style="width:46%;">   


      <!-- thoughts  start here -->
                  <?php                            
                        foreach ($eventfeed as $feeds)
                          {                     
                              if(isset($feeds->eventtype) && ($feeds->eventtype == 'thought'))  
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

                                      <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />                                    

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
                      
                      <div class="gallery" > 
                        <a class="test-popup-link" href='<?php echo $feeds->thoughtsimageurl; ?>' >
                         <img src="<?php echo $feeds->thoughtsimageurl; ?>" alt="post-image" class="img-responsive post-image" />
                        </a> 
                      </div>
                    </div>
                      <!-- here end cover image --> 
                    <?php } 
                                      
                            if(isset($feeds->thoughtsvideo) && ($feeds->thoughtsvideo != 'null') )
                            {
                      ?>
            
                    <div class="col-md-12" style="position: relative; margin-top: 20px;">
                          
                                <div class="col-md-12">
                                    <div style="position: absolute; left: 231px; top: 157px;">
                                      <a href="<?php echo $feeds->thoughtsvideourl; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                      <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user" />
                                      </a>
                                    </div>
                                    <a href="<?php echo $feeds->thoughtsvideourl; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                    <img class="img-responsive post-image"  src="<?php echo $feeds->thoughtsvideothumb; ?>" >
                                    </a>
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
                              <?php if(isset($com->userid->personalimageurl)){  ?>
                              <img src="<?php echo $com->userid->personalimageurl; ?>" alt="" class="profile-photo-sm" />
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
                            <?php if(isset($com->userid->personalimageurl)) {  ?>
                            <img src="<?php echo $com->userid->personalimageurl; ?>" alt="" class="profile-photo-sm" />
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
                                     <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form action="<?php echo base_url('event/myfeed_thought_comments/'.$feeds->_id); ?>" method="post">
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
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 10px;" id="thoughtwow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:8px;">
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
                                                
                      if(isset($feeds->eventtype) && ($feeds->eventtype =='quick_event'))  
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
                                      <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />                                    
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
                                <p style="font-size: 8px;  font-weight: bold; color:#000;">
                                  <?php 
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      echo date('h:i A', $timestamp);
                                      
                                   ?>
                                  - <span style="font-size:8px;  color:#000;"></span>

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
                                  <div style="position: absolute; left: 231px; top: 157px;">
                                    <a href="<?php echo $feeds->wowtagvideourl; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                    <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user" />
                                    </a>
                                  </div>
                                  <a href="<?php echo $feeds->wowtagvideourl; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                    <img src="<?php echo $feeds->wowtagvideothumb; ?>" class="img-responsive post-image">
                                  </a>                
                                     
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
                                    if(isset($com->createddisplaytime)){

                                        $timestamp = strtotime($com->createddisplaytime);                                        
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                      }
                                     
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
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;">
                               <?php 
                                    if(isset($com->createddisplaytime)){

                                        $timestamp = strtotime($com->createddisplaytime);                                        
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                      }
                                     
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
                                     <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php echo base_url('event/myfeeds_comments/'.$feeds->_id); ?>" method="post">
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
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 10px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:8px;">
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
                        if(isset($feeds->eventtype) && ($feeds->eventtype == 'personal_event'))  
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

                                              <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />                                    

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
                                        echo date('M', $timestamp);
                                      
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
                                      
                                   ?>
                                </p>
                              </div>

                              <div style="background-color: #c8c2c2; height: 25px; line-height: 25px;">
                                <p style="font-size: 8px;  font-weight: bold; color:#000;">
                                  <?php 
                                      $timestamp = strtotime($feeds->eventstartdate);
                                      echo date('h:i A', $timestamp);
                                      
                                   ?>
                                  - <span style="font-size:8px;  color:#000;"></span>

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
                                   <?php if(isset($feeds->wowtagvideo) && ($feeds->wowtagvideo !='null')) { ?>
                                      <div class="video">
                                          <div class="col-md-4"> 
                                             <div style="position: absolute; left: 80px; top: 36px;">
                                                <a href="<?php echo $feeds->wowtagvideourl; ?>" class="html5lightbox" data-width="480" data-height="320">
                                                 <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                              </div>
                                              <a href="<?php echo $feeds->wowtagvideourl; ?>" class="html5lightbox" data-width="480" data-height="320">
                                              <img src="<?php echo $feeds->wowtagvideothumb; ?>" alt="user" class="img-responsive img-thumbnail" style="width:160px; height:88px;" />                                            
                                            </a> 
                                          </div>

                                      </div>
                                  <?php } else { echo " "; } ?>
                              <!-- here end event highlight video --> 
                              <!-- here start event highlight image -->              
                                   
                                  <?php 
                                  if (isset($feeds->eventhighlights1url) && (preg_match('/(\.jpg|\.png|\.bmp)$/i',$feeds->eventhighlights1url))) {
                                  ?>
                                     <div class="gallery">
                                     <?php  if(isset($feeds->eventhighlights1url) && ($feeds->eventhighlights1url != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='<?php echo $feeds->eventhighlights1url; ?>' > 
                                               <img src="<?php echo $feeds->eventhighlights1url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                            <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                            </div>
                                        <?php }  ?>      
                                  </div>  

                                 <?php } else if (isset($feeds->eventhighlights1url) && (preg_match('/(\.mp4)$/i',$feeds->eventhighlights1url))){ ?>                                 
                                  
                                      
                                        <?php  if(isset($feeds->eventhighlights1url ) && ($feeds->eventhighlights1url != 'null')) { ?>
                                        <div class="col-md-4"> 
                                            <div style="position: absolute; left: 80px; top: 36px;">
                                               <a href="<?php echo $feeds->eventhighlights1url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                                 <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                            </div>

                                            <a href="<?php echo $feeds->eventhighlights1url; ?>" class="html5lightbox" data-width="480" data-height="320">
                                            <img  class="img-responsive post-image" style="width:160px; height:88px;" src="<?php echo $feeds->eventhighlights1thumb; ?>">
                                            </a> 
                                        </div>
                                        <?php }  } ?>              
                                      

                                   <!-- event hightlight2 start here  -->
                                <?php 
                                  if (isset($feeds->eventhighlights2url) && (preg_match('/(\.jpg|\.png|\.bmp|\.jpeg)$/i',$feeds->eventhighlights2url))) {
                                ?>
                                    <div class="gallery">
                                     <?php  if(isset($feeds->eventhighlights2url) && ($feeds->eventhighlights2url != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='<?php echo $feeds->eventhighlights2url; ?>' > 
                                               <img src="<?php echo $feeds->eventhighlights2url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                            <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                           </div>
                                        <?php }  ?>      
                                    </div>  

                                 <?php } else if (isset($feeds->eventhighlights2url) && (preg_match('/(\.mp4)$/i',$feeds->eventhighlights2url))){  ?>
                                                                   
                                      
                                      <?php  if(isset($feeds->eventhighlights2url ) && ($feeds->eventhighlights2url != 'null')) { ?>
                                        <div class="col-md-4"> 
                                           <div style="position: absolute; left: 80px; top: 36px;">
                                               <a href="<?php echo $feeds->eventhighlights2url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                                 <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                            </div>
                                          <a href="<?php echo $feeds->eventhighlights2url; ?>" class="html5lightbox" data-width="480" data-height="320">
                                            <img class="img-responsive post-image" style="width:160px; height:88px;" src="<?php echo $feeds->eventhighlights2thumb; ?>">
                                          </a>
                                        </div>
                                      <?php }  } ?>              
                                   
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
                                    if(isset($com->createddisplaytime)){

                                        $timestamp = strtotime($com->createddisplaytime);                                        
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                      }
                                     
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
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;"> 
                               <?php 
                                    if(isset($com->createddisplaytime)){

                                        $timestamp = strtotime($com->createddisplaytime);                                        
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                      }
                                     
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
                                     <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php echo base_url('event/myfeeds_comments/'.$feeds->_id); ?>" method="post">
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
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 10px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-4 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:8px;">
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
                      <div class="col-md-12" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;"> 
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images/send_invite_hdpi.png'); ?>" alt="user" />
                            <a href="#modal_email" style="cursor: pointer;" data-toggle="modal"  data-id='<?php echo $feeds->_id; ?>'>
                                 Send Invite</a>
                        </div>

                        <form action="<?php echo base_url('event/get_eventdetails'); ?>" id="event_details" method="POST">
                              <div class="col-md-6 user-info text-center" >
                                  <textarea style= "display: none" id="testing" name="details"><?= json_encode($feeds); ?>
                                  </textarea>
                                  <img src="<?php echo base_url('assets/images/view_details_hdpi.png'); ?>" alt="user" />
                                  <input type="submit" style="border: none; background: transparent;" value="Click for View Details">
                              </div>
                        </form>
                      </div>
            </div>

            <?php }  ?>


    <!-- personal event end here -->

    <!-- professional event show here -->

                      <?php 
                              if(isset($feeds->eventtype) && ($feeds->eventtype == 'professional_event'))
                                {                              
                      ?>

            <div class="container post-content">

                <div class="row">
                  <div class="col-md-12">
                    <div class="post-detail" style="margin-top:10px;">
                          <div class="col-md-9 user-info">
                            <p style="font-size:13px; font-weight:bold;"> 
                              <!-- <img src="../assets/images/wow-black-small.png"> 
                            Saravanan shared a link 2 hrs. --></p>
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

                                       

                                             <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />  
                                        

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
                                    
                                      <span style="line-height: 20px; text-transform: uppercase; font-weight: bold; font-size: 14px;">
                                    <?php 

                                       if(isset($feeds->runtimefrom) ) 
                                        {                                        
                                          $timestamp = strtotime($feeds->runtimefrom);                                       
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
                                   ?>
                                
                                </p>
                              </div>

                           <div style="background-color: #c8c2c2; height: 25px; line-height: 25px; ">
                                <p style="font-size: 8px;  font-weight: bold; color:#000; ">
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimefrom);
                                      echo date('h:i A', $timestamp);
                                   ?>
                                  - <span style="font-size:8px;  color:#000;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimeto);
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
                                  <?php if(isset($feeds->wowtagvideo) && ($feeds->wowtagvideo !='null')) { ?>
                                      
                                          <div class="col-md-4" style="position: relative;"> 
                                              <div style="position: absolute; left: 80px; top: 36px;">
                                                <a href="<?php echo $feeds->wowtagvideourl; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                                <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                              </div>
                                            <a href="<?php echo $feeds->wowtagvideourl; ?>" >
                                              <img src="<?php echo $feeds->wowtagvideothumb; ?>" alt="user" class="img-responsive img-thumbnail" style="width:160px; height:88px;"/>
                                                
                                            </a> 
                                          </div>
                                      
                                  <?php } else { echo " "; } ?>
                              <!-- here end event highlight video --> 
                              <!-- here start event highlight image -->              
                                   
                                  <?php 
                                  if (isset($feeds->eventhighlights1url) && (preg_match('/(\.jpg|\.png|\.bmp)$/i',$feeds->eventhighlights1url))) {
                                  ?>
                                     <div class="gallery">
                                     <?php  if(isset($feeds->eventhighlights1url) && ($feeds->eventhighlights1url != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='<?php echo $feeds->eventhighlights1url; ?>' > 
                                               <img src="<?php echo $feeds->eventhighlights1url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                            <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                            </div>
                                        <?php }  ?>      
                                  </div>  

                                 <?php } else if (isset($feeds->eventhighlights1url) && (preg_match('/(\.mp4)$/i',$feeds->eventhighlights1url))){ ?>
                                  
                                  
                                     
                                        <?php  if(isset($feeds->eventhighlights1url ) && ($feeds->eventhighlights1url != 'null')) { ?>
                                        <div class="col-md-4"> 
                                             <div style="position: absolute; left: 80px; top: 36px;">
                                               <a href="<?php echo $feeds->eventhighlights1url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                                 <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                            </div>

                                            <a href="<?php echo $feeds->eventhighlights1url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                            <img src="<?php echo $feeds->eventhighlights1thumb; ?>" alt="user" class="img-responsive img-thumbnail" style="width:160px; height:88px;" />  
                                            </a> 
                                        </div>
                                        <?php }  } ?>              
                                                                              
                                        
                                      <!-- event hightlight2 start here  -->
                                <?php 
                                  if (isset($feeds->eventhighlights2url) && (preg_match('/(\.jpg|\.png|\.bmp|\.jpeg)$/i',$feeds->eventhighlights2url))) {
                                ?>
                                    <div class="gallery">
                                     <?php  if(isset($feeds->eventhighlights2url) && ($feeds->eventhighlights2url != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='<?php echo $feeds->eventhighlights2url; ?>' > 
                                               <img src="<?php echo $feeds->eventhighlights2url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                            <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                           </div>
                                        <?php }  ?>      
                                    </div>  

                                 <?php } else if (isset($feeds->eventhighlights2url) && (preg_match('/(\.mp4)$/i',$feeds->eventhighlights2url))) {  ?>
                                                                   
                                      
                                      <?php  if(isset($feeds->eventhighlights2url ) && ($feeds->eventhighlights2url != 'null')) { ?>
                                        <div class="col-md-4"> 
                                             <div style="position: absolute; left: 80px; top: 36px;">
                                               <a href="<?php echo $feeds->eventhighlights2url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                                 <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                            </div>

                                            <a href="<?php echo $feeds->eventhighlights2url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                            <img src="<?php echo $feeds->eventhighlights2thumb; ?>" alt="user" class="img-responsive img-thumbnail" style="width:160px; height:88px;" />  
                                            </a> 
                                        </div>
                                      <?php }  } ?>              
                                     
                                
                                          
                             
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
                                    if(isset($com->createddisplaytime)){

                                        $timestamp = strtotime($com->createddisplaytime);                                        
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                      }
                                     
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
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;">  
                             <?php 
                                    if(isset($com->createddisplaytime)){

                                        $timestamp = strtotime($com->createddisplaytime);                                        
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                      }
                                     
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
                                     <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php echo base_url('event/myfeeds_comments/'.$feeds->_id); ?>" method="post">
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
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 10px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:8px;">
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

                      <div class="col-md-12" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;"> 
                          <div class="col-md-6">
                                <img src="<?php echo base_url('assets/images/send_invite_hdpi.png'); ?>" alt="user" />
                                <a href="#modal_email" style="cursor: pointer;" data-toggle="modal"  data-id='<?php echo $feeds->_id; ?>'>
                                 Send Invite</a>
                          </div>
                        <form action="<?php echo base_url('event/get_eventdetails'); ?>" id="event_details" method="POST">
                             <div class="col-md-6 user-info text-center" >
                                  <textarea style= "display: none" id="testing" name="details"><?= json_encode($feeds); ?>
                                  </textarea>
                                  <img src="<?php echo base_url('assets/images/view_details_hdpi.png'); ?>" alt="user" />
                                  <input type="submit" style="border: none; background: transparent;" value="Click for View Details">
                              </div>
                        </form>
                      </div>
            </div>

            <?php }   ?>


          
    <!-- professional event end  here -->



    <!-- social event show here -->

                <?php 
                            if(isset($feeds->eventtype) && ($feeds->eventtype == 'social_event'))  

                              {                                
                ?>

            <div class="container post-content">

                <div class="row">
                  
                  <div class="col-md-12">
                    <div class="post-detail" style="margin-top:10px;">
                          <div class="col-md-9 user-info">
                            <p style="font-size:13px; font-weight:bold;"> 
                              <!-- <img src="../assets/images/wow-black-small.png"> 
                            Saravanan shared a link 2 hrs. --></p>
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

                                               <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo-md pull-left" />                                          

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
                                   
                                    <span style="line-height: 20px; text-transform: uppercase; font-weight: bold; font-size: 14px;">
                                    <?php 

                                       if(isset($feeds->runtimefrom) ) 
                                        {                                        
                                          $timestamp = strtotime($feeds->runtimefrom);                                        
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
                                   ?>
                                 
                                </p>
                              </div>

                           <div style="background-color: #c8c2c2; height: 25px; line-height: 25px; ">
                                <p style="font-size: 8px;  font-weight: bold; color:#000; ">
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimefrom);
                                      echo date('h:i A', $timestamp);
                                   ?>
                                  - <span style="font-size:8px;  color:#000;"></span>
                                  <?php 
                                      $timestamp = strtotime($feeds->runtimeto);
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
                                  <?php if(isset($feeds->wowtagvideo) && ($feeds->wowtagvideo !='null')) { ?>
                                    
                                          <div class="col-md-4" style="position: relative;"> 
                                              <div style="position: absolute; left: 80px; top: 36px;">
                                                <a href="<?php echo $feeds->wowtagvideourl; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                                 <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                              </div>
                                            <a href="<?php echo $feeds->wowtagvideourl; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                              <img src="<?php echo $feeds->wowtagvideothumb; ?>" alt="user" class="img-responsive img-thumbnail" style="width:160px; height:88px;"/>
                                                
                                            </a> 
                                          </div>
                                     
                                  <?php } else { echo " "; } ?>
                              <!-- here end event highlight video --> 
                              <!-- here start event highlight image -->              
                                   
                                  <?php 
                                  if (isset($feeds->eventhighlights1url) && (preg_match('/(\.jpg|\.png|\.bmp)$/i',$feeds->eventhighlights1url))) {
                                  ?>
                                    <div class="gallery">
                                        <?php  if(isset($feeds->eventhighlights1url) && ($feeds->eventhighlights1url != 'null') ) { ?>
                                        <div class="col-md-4"> 
                                            <a class="test-popup-link" href='<?php echo $feeds->eventhighlights1url; ?>' > 
                                               <img src="<?php echo $feeds->eventhighlights1url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                            </a> 
                                        </div>
                                        <?php } else {  ?>
                                            <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                            </div>
                                        <?php }  ?>      
                                    </div>  

                                 <?php } else if (isset($feeds->eventhighlights1url) && (preg_match('/(\.mp4)$/i',$feeds->eventhighlights1url))) { ?>
                                      
                                        <?php  if(isset($feeds->eventhighlights1url ) && ($feeds->eventhighlights1url != 'null')) { ?>
                                        <div class="col-md-4"> 
                                              <div style="position: absolute; left: 80px; top: 36px;">
                                               <a href="<?php echo $feeds->eventhighlights1url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                                 <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                            </div>

                                            <a href="<?php echo $feeds->eventhighlights1url; ?>" class="html5lightbox" data-width="480" data-height="320">
                                            <img  class="img-responsive post-image" style="width:160px; height:88px;" src="<?php echo $feeds->eventhighlights1thumb; ?>">
                                            </a> 
                                        </div>
                                        <?php } }  ?>              
                                      
                                        
                                      <!-- event hightlight2 start here  -->
                                <?php 
                                  if (isset($feeds->eventhighlights2url) && (preg_match('/(\.jpg|\.png|\.bmp|\.jpeg)$/i',$feeds->eventhighlights2url))) {
                                ?>
                                    <div class="gallery">
                                     <?php  if(isset($feeds->eventhighlights2url) && ($feeds->eventhighlights2url != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='<?php echo $feeds->eventhighlights2url; ?>' > 
                                               <img src="<?php echo $feeds->eventhighlights2url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                      </div>
                                      <?php } else {  ?>
                                            <div class="col-md-4"> 
                                             <img src="<?php echo base_url('assets/images/bg.png'); ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                           </div>
                                        <?php }  ?>      
                                    </div>  

                                 <?php } else if (isset($feeds->eventhighlights2url) && (preg_match('/(\.mp4)$/i',$feeds->eventhighlights2url))) {  ?>
                                                                   
                                      
                                      <?php  if(isset($feeds->eventhighlights2url ) && ($feeds->eventhighlights2url != 'null')) { ?>
                                        <div class="col-md-4"> 
                                             <div style="position: absolute; left: 80px; top: 36px;">
                                               <a href="<?php echo $feeds->eventhighlights2url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                                 <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                            </div>
                                          <a href="<?php echo $feeds->eventhighlights2url; ?>" class="html5lightbox" data-width="480" data-height="320">
                                            <img class="img-responsive post-image" style="width:160px; height:88px;" src="<?php echo $feeds->eventhighlights2thumb; ?>">
                                          </a>
                                        </div>
                                      <?php }  } ?>              
                                         
                             
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
                                     <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php echo base_url('event/myfeeds_comments/'.$feeds->_id); ?>" method="post">
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
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 10px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:8px;">
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

                      <div class="col-md-12" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">  
                        <div class="col-md-6">
                            <img src="<?php echo base_url('assets/images/send_invite_hdpi.png'); ?>" alt="user" />
                            <a href="#modal_email" style="cursor: pointer;" data-toggle="modal"  data-id='<?php echo $feeds->_id; ?>'>
                                 Send Invite</a>
                        </div>
                        <form action="<?php echo base_url('event/get_eventdetails'); ?>" id="event_details" method="POST">
                              <div class="col-md-6 user-info text-center" >
                                  <textarea style= "display: none" id="testing" name="details"><?= json_encode($feeds); ?>
                                  </textarea>
                                  <img src="<?php echo base_url('assets/images/view_details_hdpi.png'); ?>" alt="user" />
                                  <input type="submit" style="border: none; background: transparent;" value="Click for View Details">
                              </div>
                        </form>
                      </div>
            </div>

            <?php }   ?>

    <!-- end socia event here -->



    <!-- business event start here -->

              <?php 
                   if(isset($feeds->eventtype) && ($feeds->eventtype == 'business_event'))  

                        {                             
                           
              ?>

            <div class="container post-content">

                <div class="row">
                  
                  <div class="col-md-12">
                    <div class="post-detail" style="margin-top:10px;">
                          <div class="col-md-9 user-info">
                            <p style="font-size:13px; font-weight:bold;"> 
                              <!-- <img src="../assets/images/wow-black-small.png"> 
                            Saravanan shared a link 2 hrs. --></p>
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
                      
                      <div class="gallery" > 
                        <a class="test-popup-link" href='<?php echo $feeds->coverpageurl; ?>' > 
                          <img src="<?php echo $feeds->coverpageurl; ?>" alt="post-image" class="img-responsive post-image" /> 
                        </a>
                      </div>
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
                                  <?php if(isset($feeds->wowtagvideo) && ($feeds->wowtagvideo !='null')) { ?>
                                      <div class="video">
                                          <div class="col-md-4" style="position: relative;"> 
                                              <div style="position: absolute; left: 80px; top: 36px;">
                                                <a href="<?php echo $feeds->wowtagvideourl; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                                 <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                                                </a>
                                              </div>
                                            <a href="<?php echo $feeds->wowtagvideourl; ?>" class="html5lightbox" data-width="480" data-height="320" >
                                              <img src="<?php echo $feeds->wowtagvideothumb; ?>" alt="user" class="img-responsive img-thumbnail" style="width:160px; height:88px;"/>
                                                
                                            </a> 
                                          </div>
                                      </div>
                                  <?php } else { echo " "; } ?>
                              <!-- here end event highlight video --> 
                              <!-- here start event highlight image -->              
                                   
                                  <div class="gallery">
                                     <?php  if(isset($feeds->eventsalescoupon1 ) && ($feeds->eventsalescoupon1 != 'null') ) { ?>
                                      <div class="col-md-4"> 
                                            <a class="test-popup-link" href='<?php echo $feeds->eventsalescoupon1url; ?>' > 
                                               <img src="<?php echo $feeds->eventsalescoupon1url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
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
                                            <a class="test-popup-link" href='<?php echo $feeds->eventsalescoupon2url; ?>' > 
                                               <img src="<?php echo $feeds->eventsalescoupon2url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
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
                                    if(isset($com->createddisplaytime)){

                                        $timestamp = strtotime($com->createddisplaytime);                                         
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                    } 
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
                            <div class="pull-left" style="width:90%;"> Like. Reply. <span style="color:#B8B8B8;"> 
                              <?php 
                                    if(isset($com->createddisplaytime)){

                                        $timestamp = strtotime($com->createddisplaytime);                                         
                                        $comment_date = date('Y-m-d H:i:s', $timestamp);
                                    } 
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
                                     <img src="<?php echo $this->session->userdata('personal_image'); ?>" alt="" class="profile-photo-sm" />
                                </div>
                                <form class="comments_form" action="<?php echo base_url('event/myfeeds_comments/'.$feeds->_id); ?>" method="post">
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
                                            <div style="position: absolute; left: 97px; top: 3px; ">
                                                 <input type="text" style="border: none; background: transparent; color: #e91e63; font-size: 10px;" id="wow_increment" value="<?php $like = count($feeds->wowsome); echo $like; ?>">
                                            </div>
                                            <a class="btn text-pink" style="font-size:11px;">
                                                <i class="icon ion-thumbsup"></i>
                                                <input type="submit" style="border: none; background: transparent; width:70px; outline: none; text-transform: capitalize;" value="Wowsomes" >
                                            </a> 
                                        </div>
                                  </form>

                                  <div class="col-md-3 text-center">
                                      <div class="dropdown"> 
                                          <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:8px;">
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

                        <div class="col-md-12" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;"> 
                          <div class="col-md-6">
                              <img src="<?php echo base_url('assets/images/send_invite_hdpi.png'); ?>" alt="user" />
                              <a href="#modal_email" style="cursor: pointer;" data-toggle="modal" data-id='<?php echo $feeds->_id; ?>'>
                                 Send Invite</a>  
                                                             
                          </div>
                         
                          <form action="<?php echo base_url('event/get_eventdetails'); ?>" id="event_details" method="POST">
                            <div class="col-md-6 user-info text-center" >
                                  <textarea style= "display: none" id="testing" name="details"><?= json_encode($feeds); ?>
                                  </textarea>
                                  <img src="<?php echo base_url('assets/images/view_details_hdpi.png'); ?>" alt="user" />
                                  <input type="submit" style="border: none; background: transparent;" value="Click for View Details">
                            </div>
                          </form>
                        </div>
            </div>

            <?php }  } ?>

    <!-- end business event here -->     

     </div>
     
       <div class="col-md-4 static"> 
          <div id="sticky-sidebar">
          <!--Sticky Timeline Activity Sidebar-->
          <div id="calendar"></div>
        </div>
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

<script src="<?php echo base_url('assets/js/jquery.timeago.js')?>" ></script> <!--timeago library -->
<script src="<?php echo base_url('assets/js/bootbox.js')?>"></script> <!-- conformation delete boot box -->
    <!-- this under three file calendar shows -->
<script src="<?php echo base_url ('assets/js/moment.min.js') ?>"></script>
<!-- <script src="<?php echo base_url ('assets/js/jquery.min.js') ?>"></script> -->
<script src="<?php echo base_url ('assets/js/fullcalendar.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
<script src="<?php echo base_url ('assets/html5lightbox/html5lightbox.js') ?>"></script><!-- video popup library -->
    
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
 
 // show comment time
 $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $("time.timeago").timeago();
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
                    }
                  else 
                     {                    
                        swal("Sorry!", "somethink wrong try again !", "error");
                     }
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

//show view more commends
$(document).ready(function(){               
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
