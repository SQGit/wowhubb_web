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
ul li {
    list-style-image: none;
}
  .post-content img.post-image, video.post-video, .google-maps {
    width: 100%;
    height: 350px;
}
   #page-contents{
      padding: 30px 0 50px;
      background-color:#e7e5e6;
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
    left:-35px;
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

#page-contents .form-group i{
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
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:13px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Home</span>
          </a> 
          <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:13px;  background:#757575; padding:5px 10px; border-radius:5px; color:#fff;">Create Event</span>
          </a> 
          <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:13px;  padding:5px 10px; border-radius:5px; color:#fff;"><i class="fa fa-sign-in"></i> Logout</span>
          </a>
        </ul>
        

       <form class="navbar-form navbar-right hidden-sm" style="position:absolute; right:245px; top:0px;" >
           <div class="form-group">
                   <i class="icon ion-android-search"></i>

                    <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" /><br/>

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
            <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo$this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" />
            <?php }  else { ?> 
             
               <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo" />
               <?php } ?>
              <span class="text-white" style="margin-top:5px; font-size:18px;"><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?>          
            </span>
            <p><?php echo $this->session->userdata('designation');  ?></p>
           </div>
          <div style="font-size:20px; color:#fff; margin-top:-20px; width:100%; float:right; text-align:right;"><a href="#"> &nbsp;&nbsp;<i class="icon ion-arrow-right-b" style="font-size:28px; color:#fff;"></i></a> </div>
        </div>
        <!--profile card ends-->
        
        <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Create</h5>
            <li style="background-color:#f1f1f1; padding:5px; border-radius:5px;">
            <i class="fa fa-child" style="color: #e91e63;"> </i><a style="font-weight: bold;" href="<?php echo base_url('event/event_popup'); ?>">Create Event</a>
            </li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
          <!--  <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Our Links</h5>-->
            <li><i class="fa fa-newspaper-o"  style="color: #e91e63;"></i>
              <div><a href="#">Event Feed</a></div>
            </li>
            <li><i class="fa fa-user"  style="color: #e91e63;"></i>
              <div><a href="<?php echo base_url('profile/profile_get'); ?>">My Profile</a></div>
            </li>
            <li><i class="fa fa-share-alt"  style="color: #e91e63;"></i>
              <div><a href="#">My Network</a></div>
            </li>
            <li><i class="fa fa-folder-open"  style="color: #e91e63;"></i>
              <div><a href="#">My Album</a></div>
            </li>
            <li><i class="fa fa-exclamation-circle"  style="color: #e91e63;"></i>
              <div><a href="#">Wowtags</a></div>
            </li>
            <li><i class="fa fa-users"  style="color: #e91e63;"></i>
              <div><a href="#">Event Hubb</a></div>
            </li>
            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>

          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Event Pages</h5>
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
     <div class="col-md-6">         
        <!-- Post Create Box =================================== -->          
        <div class="create-post" style="background-color: #fff; padding:10px; border-radius:5px;">
             <div class="row">
                     <div class="col-md-7 col-sm-7">
                         <div class="form-group" style="display:-webkit-inline-box; width:80%;"> 
                              <?php if(!is_null($this->session->userdata('personal_image')))
                              { ?>
                                <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" />
                              <?php } else { ?>
                                 <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                              <?php } ?>                                                         
                             
                              <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Share your thoughts.."></textarea>     
                         </div>
                     </div>
                      <div class="col-md-5 col-sm-5">
                          <div class="tools">
                              <ul class="publishing-tools list-inline">
                                <li><a href="#"><i class="ion-compose"></i></a></li>
                                <li><a href="#"><i class="ion-images"></i></a></li>
                                <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                              </ul>
                              <button class="btn btn-primary pull-right" style="margin-top:3px;">Publish</button>
                          </div>
                      </div>
              </div>
        </div>

          <?php            
            foreach ($eventfeed as $feeds)
           {
            
           ?> 
       <div class="container post-content">
          <div class="row">
            <div class="col-md-12">
              <div class="post-detail" style="margin-top:10px;">
                <div class="col-md-9 user-info">
                   <p style="font-size:13px; font-weight:bold;">
                 <em><strong> ! </strong></em>Scarlet Johnson Thomson shared a link 2 hrs.</p>
                </div> 
                <div class="col-md-3 user-info text-right">
                  <div class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer;">...
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Hide post</a></li>
                        <li><a href="#">Report post</a></li>
                        <li><a href="#">Why am I seeing this?</a></li>
                      </ul>
                   </div>
                  
                </div>
                 <!--div class="col-md-12 line-divider"></div> -->
                  <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:0px 0px 15px 0px; border-radius:5px;">
                        <p style="font-size:18px; font-weight:normal;  height:25px; padding-top:5px;"><a href="#" style="color:#e91e63; text-decoration:none; font-weight: bold;"><span style="font-size: 22px; font-weight: bold;"></span><?php echo $feeds->eventname; ?><span style="float: right;  font-size: 20px; font-weight: bold; "> <?php if(isset($feeds->eventtype)){ echo $feeds->eventtype;} else { echo " "; } ?></span></a></p>                    
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
                       <div class="post-detail" style="margin:0;"> <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $feeds->userid->personalimage; ?>" alt="user" class="profile-photo-md pull-left" /> </div> 
                        <?php  } else  { ?>                               
                          <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                           <?php } ?>                               
                </div>
                  <div class="user-info">
                      <div class="profile-link" style="font-size:19px; font-weight:bold; color:#555;">
                          <?php echo $feeds->userid->firstname ." ".$feeds->userid->lastname ; ?>    
                      </div>
                      <p style="font-size:13px; color:#777;"><?php  if(isset($feeds->userid->designation))
                            { echo $feeds->userid->designation; } else { echo " ";} ?></p>
                  </div>
              </div>
              <div class="col-md-3 text-center">
                <div style="border:1px solid #ccc; border-radius:5px 5px 0 0;">
                  <div style="background-color: #504949; height: 25px; line-height: 25px; border-radius:5px 5px 0 0;">
                    <p style="font-size: 16px; font-weight: bold; color:#fff;">
                        <?php 
                          $timestamp = strtotime($feeds->runtimefrom);
                          echo date('M', $timestamp);
                       ?>
                     </p>
                  </div>
                  <div style="margin-top: 1px; padding:0px;">
                    <p style="color:#000; font-weight:bold; font-size:10px; margin-bottom:0;">
                      <?php 
                          $timestamp = strtotime($feeds->runtimefrom);
                          echo date('D dS', $timestamp);
                       ?> -                
                      <span style="font-size:10px; color:#333;"></span> 
                       <?php 
                          $timestamp = strtotime($feeds->runtimeto);
                           echo date('D dS', $timestamp);
                          // echo date('h:i A l - dS F, Y', $timestamp);
                       ?>                       
                    </p>
                  </div>
                  <div style="background-color: #c8c2c2; height: 25px; line-height: 25px; ">
                    <p style="font-size: 10px;  font-weight: bold; color:#000;">
                       <?php 
                          $timestamp = strtotime($feeds->runtimefrom);
                          echo date('h:i A', $timestamp);
                       ?> -                
                      <span style="font-size:10px;  color:#000;"></span> 
                       <?php 
                          $timestamp = strtotime($feeds->runtimeto);
                           echo date('h:i A', $timestamp);
                          // echo date('h:i A l - dS F, Y', $timestamp);
                       ?>  IST  
                     </p>
                  </div>
                </div>
              </div>
              <div class="col-md-12" style="margin-top:5px;">
                <p class="text-muted"><?php echo $feeds->eventdescription; ?></p>
              </div>
            </div>
                  <!-- here start with cover image -->
                   <div class="col-md-12">
                          <div class="gallery">
                               <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->coverpage1; ?>' >
                                <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->coverpage1; ?>" alt="post-image" class="img-responsive post-image" />
                               </a>
                         </div>
                   </div>
                   <!-- here end cover image -->
          </div>
          <div class="row" >
            <div class=" col-md-7 pull-left" style="margin-top:5px;" >
              <p><span style="font-weight: bold; font-size:14px; color:#333;">                
                <?php  echo $feeds->eventtopic; ?>                                
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
              <p>
              <h5 style="color:#333; font-weight:bold;"><i class="fa fa-map-marker"></i> 
                  <?php echo $feeds->eventvenuename." ". $feeds->eventvenueaddress." ".$feeds->eventvenuecity." ".$feeds->eventvenuezipcode; ?>
              </h5>              
              </p>
            </div>
            <div class="col-md-12 line-divider"></div>
          </div>
          <div class="row"> <!-- here start event highlight part -->
                     <div class="col-md-12">
                      <h5 style="font-weight:bold;">Event Highlights</h5>
                    </div>
                  <!-- here start with  event highlight video -->
                  <div class="col-md-12">
                   <div class="video">  
                      <div class="col-md-4">
                          <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo1; ?>" >
                            <video style="width:160px; height:88px;" controls controlsList="nodownload">
                                 <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->wowtagvideo1; ?>" type="video/mp4">
                             </video>
                          </a>
                      </div>
                  </div>    
                  <!-- here end event highlight video -->
                <!-- here start event highlight image -->
                  <?php 
                   if(isset($feeds->eventhighlights1)) { ?>

                    <div class="gallery">     
                            <div class="col-md-4"> 
                                 <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights1; ?>' > 
                                      <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights1; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/> 
                                 </a>
                            </div> <?php } else { ?>
                              
                            <div class="col-md-4">
                                <a  href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights1; ?>' >
                                  <video style="width:160px; height:88px;" controls>
                                       <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights1; ?>" type="video/mp4">
                                   </video>
                                </a>
                            </div>   <?php }  ?> 
                            <div class="col-md-4">
                                   <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights2; ?>' >
                                       <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->eventhighlights2; ?>"  style="width:160px; height:88px;" alt="user" class="img-responsive img-thumbnail"/>
                                   </a>
                            </div>
                    </div>   <!-- here end event highlight image -->  
                    </div>
          </div><!-- here end event highlight part -->

          <div class="row" style="margin-top:10px;">
                 <div class="col-md-1"> 
                      <img src="<?php echo base_url('assets/images/users/user-1.jpg'); ?>" alt="" class="profile-photo-sm" /> 
                 </div>
                 <div class="col-md-8">
                   <div class="form-group">
                         <i class="fa fa-arrow-circle-right"></i>
                         <input type="text" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px; border:1px solid #ccc;">
                   </div>
                     <br>                        
                        <div class="pull-right" style="text-align:right; margin-top:-20px; font-size:12px;"><a href="#">View More Comments</a>
                        </div>
                 </div>
                 <div class="col-md-2">
                      <button class="btn-primary">Post</button>
                 </div>
          </div>
                   <div class="row" style="margin-top:10px;">
                        <div class="col-md-7"> 
                           <form id="wowsome_form" action="<?php echo base_url('event/wowsome/'.$feeds->_id); ?>" method="post">                          
                                                           
                                  <div class="col-md-4 text-center"> <a class="btn text-pink" style="font-size:11px;"><i class="icon ion-thumbsup"></i><input type="submit" style="border: none; background: transparent; width:70px;" value="wowsome" ></a>
                                   </div> 
                             </form>  
                            <div class="col-md-4 text-center">                                
                                  <div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer; font-size:11px;"><i class="fa fa-share"></i>  Shares
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu" style="top:-300%!important;">
                                          <li><a href="#">Share post Now(friends)</a></li>
                                          <li><a href="#">Share...</a></li>
                                          <li><a href="#">Share to a page</a></li>                    
                                        </ul>
                                  </div>
                            </div>

                               <div class="col-md-4 text-center"><a class="btn text-red" style="font-size:11px;">             
                               <i class="fa fa-comments"></i> Comments</a> 
                             </div>  
                            <div style="margin-left: 40px;" >
                               <i class="icon ion-thumbsup"></i>
                               <input type="text" style="border: none; background: transparent;" class="wow_increment" value="<?php echo $feeds->wowsome; ?>">   
                            </div>           
                        </div>
                             <div class="col-md-5" style="font-size:12px;"> 100 Wowsomes &nbsp;&nbsp;30 Comments
                            </div>
                   </div>
                   
                    
                   <form action="<?php echo base_url('event/get_eventdetails') ?>" id="event_details" method="POST">
                    <div class="col-md-12 user-info text-center" style="background-color:#f5f5f5; margin:10px 0; border-radius:5px;">
                      <textarea style= "display: none" id="testing" name="details"><?= json_encode($feeds); ?></textarea>
                      <input type="submit" style="border: none;" value="Click for View Details">
                        <!-- <p style="font-size:13px; font-weight:normal; color:#333; height:20px; padding-top:3px;"><a href="#" onClick='getEventFeeds(JSON.stringify(<?= json_encode($feeds); ?>))' style="color:#333;">Click for View Details</a></p> -->
                    </div>
                  </form>
        </div>
        <?php }  ?>

      </div>
      <!-- Newsfeed Common Side Bar Right
          ================================================= -->
      <div class="col-md-3 static">

       <div id="sticky-sidebar" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:6px 0 0 0; border-radius:5px;">
          <ul class="nav-news-feed">
            <div class="row" style="margin:15px 0 5px 0;">
              <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-birthday-cake"></i> Book Next Event Venue</a></div>
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
    
  </div>
</div>



<!-- Scripts
    ================================================= --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery-3.2.1.minjs.js')?>" ></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.appear.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/masonry.pkgd.min.js')?>" ></script>
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>" ></script>
<script src="<?php echo base_url('assets/js/videopopup.js')?>" ></script>
<!-- search suggestion box plugin -->

<script>          
    
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
    
      //event details form submit

     function getEventFeeds(feed){
      // alert(JSON.stringify(feed));
    var base_url = '<?php echo base_url() ?>';
    // alert(typeof(feed));
       $.ajax({
                url : base_url+'event/get_eventdetails',
                context:this,
                method: 'POST',
                data: feed,
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
                    
                      alert(JSON.stringify(response));
                    // swal('Your Event Created Successfully...');                   
                    }else 
                   {
                    
                    swal("Sorry!", "somethink wrong try again !", "error");
                   }
          
                }

            });
     }
      
      //wowsome like form submit
    var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#wowsome_form", function(e){
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
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },              
                
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                      var wow = '.wow_increment';
                       $(wow).val(response.message);
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
