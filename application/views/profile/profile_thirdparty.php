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


</style>
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
          <div class="col-md-3">
            <div class="profile-info">
             
                <?php 
                   if(isset($profile_info->personalimage))
                   {
                      ?>
                <img   src="http://104.197.80.225:3010/wow/media/personal/<?php echo $profile_info->personalimage; ?>" class="img-responsive profile-photo" />
                <?php }

                 else{ 
                       
                       ?>
                <img  class="img-responsive profile-photo"  src="<?php echo base_url('assets/images/album/avatar_male.png')?>">;
                <?php
                       } 
                ?>

            </div>
          </div>
          <div class="col-md-9" >
            <div class="profile-info-1">
              <h3 style="color:#fff;"> <?php echo $profile_info->firstname." ". $profile_info->lastname; ?> </h3>
              <p style="color:#fff;" class="text-muted"><?php if(isset($profile_info->designation) ) { echo $profile_info->designation; } else { echo " ";} ?></p>
            </div>
            <ul class="list-inline profile-menu">
              <li><a href="#" class="active">Profile</a></li>
              <li><a href="#" >Interests</a></li>
              <li><a href="#">Photos</a></li>
              <li><a href="#">Eventhubb</a></li>
              <li><a href="#">Wowtag</a></li>
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

                                        <!--<img src="<?php echo base_url('assets/images/wow-pink.png'); ?>"> -->
                                       <?php echo $profile_info->wowtagid; ?> 
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
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->place)){echo $profile_info->place;} else{echo "";} ?></span></div>                                       
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;">
                                         
                                        </div>
                                </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/marr-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">Marital Status <br>
                                          <span style="color:#333; font-size:13px;"> 
                                            <?php if(isset($profile_info->maritalstatus)){echo $profile_info->maritalstatus; } else{echo "";} ?></span></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                           <div class="col-md-12">
                                    <div class="pull-left" style="width:7%;"><img src="../assets/images/video-icon.png" alt=""/></div>
                                    <div class="pull-left" style="width:78%;">Personal Self Intro Video<br>
                                            <?php 
                                          if(isset($profile_info->personalself))
                                          { ?>
                                           <video style="width:160px; height:88px;" id="myvideo" controlsList="nodownload" >
                                               <source src="http://104.197.80.225:3010/wow/media/personal/<?php echo $profile_info->personalself; ?>" type="video/mp4">
                                           </video><?php } else {  ?>
                                            <video style="width:160px; height:88px;" id="myvideo" >
                                               <source src="" type="video/mp4">
                                            </video>
                                             <?php } ?>
                                     </div>  
                                        <div class="pull-left text-right" style="width:10%; margin-top:10px;">
                                         
                                        </div>
                           </div>                                     
                   </div>
                      </div>
                                 
                     <!-- about me tab for personal  -->

                      <div class="tab-pane" id="b">
                            <div class="col-md-10">
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/intro-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Introduction about Yourself<br>
                                        <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->aboutme)){echo $profile_info->aboutme; } else{echo "";} ?></span></div>
                                    </div>

                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/favorite-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">What Your Favorite Quotes<br>
                                        <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->quote)){echo $profile_info->quote; } else{echo "";} ?>
                                        </span></div>
                                      </div>

                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/birthday-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Birth date<br>
                                        <span style="color:#333; font-size:13px;">
                                          
                                          <?php 
                                              if(isset($profile_info->birthday))
                                               { 
                                                $timestamp = strtotime($profile_info->birthday);
                                                echo date('M d', $timestamp);
                                               } else
                                                {echo "";}
                                          ?>
                                            
                                          </span></div>                                      
                                      </div>                                      
                                     
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/religion-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">Religion<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->religion)){echo $profile_info->religion; } else{echo "";} ?></span></div>
                                      </div>

                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/language-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">Languages<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->language)){echo $profile_info->language; } else{echo "";} ?></span><br>
                                         </div>
                                      </div>
                              </div>
                      </div>

                                   
                      <!-- relationship tab for personal  -->

                      <div class="tab-pane" id="c">
                            <div class="col-md-10">
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:18%;">
                                          <img src="<?php echo base_url('assets/images/prof-pic'); ?>" alt=""/></div>
                                        <div class="pull-left" style="width:67%;">Jane Deo<br>
                                          <span style="color:#333; font-size:13px;">Wife, Homemaker</span><br>
                                        </div>
                                    </div>

                                    
                            </div>
                      </div>

                      <!-- contact info tab for personal  -->         

                      <div class="tab-pane" id="d">
                            <div class="col-md-10">
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/email-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Email <br>
                                          <span style="color:#333; font-size:13px;">
                                            <!--<?php echo  $profile_info->email; ?> -->
                                         </span></div>
                                    </div>

                                    <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/phone-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Phone No <br>
                                          <span style="color:#333; font-size:13px;">
                                           <!-- <?php echo  $profile_info->phone; ?> -->
                                            
                                          </span></div>
                                    </div>

                                    <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/country-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">Country <br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->country)){echo $profile_info->country; } else{echo "";} ?></span></div>
                                                                           
                                    </div>

                                    <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/state-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%; text-transform: capitalize;">State<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->state)){echo $profile_info->state; } else{echo "";} ?></span></div>
                                                                                
                                    </div>

                                    <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/social-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Social Links<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->sociallinks)){echo $profile_info->sociallinks; } else{echo "";} ?></span></div>
                                    </div>

                            </div>
                      </div>

                      <!-- event info tab for personal  -->

                      <div class="tab-pane" id="e">
                          <div class="col-md-10">                                   
                                   
                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/wedding-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Wedding<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->wedding)){echo $profile_info->wedding; } else{echo "";} ?></span> <br>
                                        </div>
                                                                            
                                    </div>                                  
                                      
                                    <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>

                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/social-1-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Social Functions<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->socialfunction)){echo $profile_info->socialfunction; } else{echo "";} ?></span> <br>
                                           </div>                                        
                                        
                                    </div>

                                    <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>

                                    <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/parties-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Parties<br>
                                          <span style="color:#333; font-size:13px;"><?php if(isset($profile_info->parties)){echo $profile_info->parties; } else{echo "";} ?></span> <br>
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

                 <!-- search for event info -->
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
                                  <li style="width:100%;" class="active"><a href="#11" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Overview</a></li>
                                  <li style="width:100%;"><a href="#12" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Professional Background</a></li>
                                
                                  <li style="width:100%;"><a href="#14" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Professional Interests/ Events</a></li>
                                  <li style="width:100%;"><a href="#15" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Professional Groups</a></li>
                                </ul>
                                <div class="tab-content">
                                  
                                  <div class="tab-pane active" id="11">
                                    <div class="col-md-8">
                                      <div class="col-md-12"> This is your  event identification name tag, You can use your "WOWtag ID" to share your personal and professional information and attend at any event. You can create your own WOWtag ID to add some form of personality to yourself.</div>
                                      <div class="col-md-12" style="margin-top:15px;">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/wow-tag-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;"><a href="#" style="font-size:16px; color:#333;"><?php echo $profile_info->wowtagid; ?> </a><br>
                                          <span style="color:#fff; font-size:13px; background-color:#e91e63; padding:3px 5px; border-radius:5px;">Your Wowtag ID</span></div>
                                        <div class="pull-left" style="width:5%; margin-top:10px;"><a href="#"></div>                                        
                                      </div>
                                    </div>
                                  </div>

                      <!-- tab view for proffesional background -->

                           <div class="tab-pane" id="12">
                      <div class="col-md-8">                                     
                           <div class="col-md-12">
                                <div class="pull-left" style="width:7%;"><img src="../assets/images/college-icon.png" alt=""/> </div>
                                 <div class="pull-left" style="width:75%; color:#333;">College<br>
                                 <span style="color:#333; font-size:13px;"><?php
                                       foreach ($profile_info->education as $profiles) {
                                          echo $profiles;
                                          } ?><br>                                        
                                </span></div>
                                       
                                <div class="pull-right text-right" style="width:10%; margin-top:10px;"> <a href="#" data-toggle="modal" data-target=".modal-professional" ><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                            </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                     
                                      <div class="col-md-12">
                                            <div class="pull-left" style="width:7%;"><img src="../assets/images/workplace-icon.png" alt=""/></div>
                                            <div class="pull-left" style="width:75%;">Current Work Place<br>
                                                <span style="color:#333; font-size:13px;"> 
                                                  <?php if(isset($profile_info->workplace)){echo $profile_info->workplace; } else{echo "";} ?>
                                                 <br>
                                                </span>
                                            </div>
                                      </div>

                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                     
                                      <div class="col-md-12">
                                            <div class="pull-left" style="width:7%;"><img src="../assets/images/intro-icon.png" alt=""/></div>
                                            <div class="pull-left" style="width:75%; text-transform: capitalize;">Work Experience<br>
                                               <span style="color:#333; font-size:13px;"> 
                                                 <?php if(isset($profile_info->workexperience->title)){echo $profile_info->workexperience->title; } else{echo "";} ?> 

                                                  <?php if(isset($profile_info->workexperience->company)){echo $profile_info->workexperience->company; } else{echo "";} ?> 
                                                   <br>

                                                  <?php if(isset($profile_info->workexperience->location)){echo $profile_info->workexperience->location; } else{echo "";} ?>
                                                   <br>

                                                  <?php if(isset($profile_info->workexperience->frommonth)){echo $profile_info->workexperience->frommonth.' '. $profile_info->workexperience->fromyear.' - '.$profile_info->workexperience->tomonth.' '.$profile_info->workexperience->toyear; } else{echo "";} ?> 
                                                   <br>

                                                   <?php if(isset($profile_info->workexperience->link)){echo $profile_info->workexperience->link; } else{echo "";} ?> 
                                                   <br>

                                                  <?php if(isset($profile_info->workexperience->description)){echo $profile_info->workexperience->description; } else{echo "";} ?> 
                                                   <br>

                                              </span>

                                            </div>

                                               <div class="pull-right text-right" style="width:10%; margin-top:10px;"> <a href="#" data-toggle="modal" data-target=".modal-ex_professional" ><img src="../assets/images/edit_icon.png" alt=""/></a></div>
                                      </div>

                                             <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                       <div class="col-md-12">
                                            <div class="pull-left" style="width:7%;"><img src="../assets/images/designation-icon.png" alt=""/></div>
                                                <div class="pull-left" style="width:75%;">Designation<br>
                                               <span style="color:#333; font-size:13px;">
                                                     <?php if(isset($profile_info->designation)){echo $profile_info->designation; } else{echo "";} ?>
                                                     <br>
                                              </span></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                                <div class="pull-left" style="width:7%;"><img src="../assets/images/certi-icon.png" alt=""/></div>
                                                 <div class="pull-left" style="width:75%;"> Certifications<br>
                                                    <span style="color:#333; font-size:13px;">
                                                     <?php                                  
                                                        foreach ($profile_info->certification as $profiles) {
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
                                                         foreach ($profile_info->volunteer as $profiles) {
                                                              echo $profiles;
                                                              } ?><br>
                                                    </span>
                                                 </div>
                                      </div>
                        </div>
                    </div>


                            <!-- tab view for proffesional interest -->

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
<script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> 
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
