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
<header id="header">
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
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
     <?php 
                $cover = $this->session->userdata('cover_img');
                if(isset($cover))
                   {
                  ?>
                <img  src="http://104.197.80.225:3010/wow/media/personal/<?php echo $cover; ?>"  style="background-size:cover; width:100%; max-height:300px;"/>
                <?php }   else{   ?>
              <img src="<?php echo base_url('assets/images/covers/1.jpg')?>" style="background-size:cover; width:100%; max-height:300px;" >
                <?php }  ?> ;
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info">
              <form id="profile_img" action="<?php echo base_url('profile/profile_img_upload'); ?>" method="post" enctype="multipart/form-data">
                <?php 
                $img= $this->session->userdata('image');
                   if(isset($img))
                   { ?>
                      
                <img  id="profileImage" src="http://104.197.80.225:3010/wow/media/personal/<?php echo $img; ?>" class="profile-pic img-responsive profile-photo" />
                <?php }  else{  ?>

                <img  class="profile-pic img-responsive profile-photo"  id="profileImage" src="<?php echo base_url('assets/images/album/avatar_male.png')?>">;
                <?php  }   ?>                    
               
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
                                <div class="col-md-12"> This is your  event identification name tag, You can use your "WOWtag ID" to share your personal and professional information and attend at any event. You can create your own WOWtag ID to add some form of personality to yourself.</div>
                             <div class="col-md-6" style="margin-top:15px;">
                                    <div class="pull-left" style="width:15%;"><img src="../assets/images/wow-tag-icon.png" alt=""/></div>
                                  <div class="pull-left" style="width:85%;">
                                      <a href="#" style="font-size:16px; color:#333;"> 
                                      <em style="font-size:20px;">!</em> Emeka Ike 
                                      </a><br>
                                       <span style="color:#fff; font-size:13px; background-color:#e91e63; padding:3px 5px; border-radius:5px;">Your Wowtag ID</span>
                                  </div>
                              </div>
                                      
                                      <div class="col-md-6" style="margin-top: 15px;">
                                        <div class="pull-left" style="width:15%;">
                                          <img src="../assets/images/map-icon.png" alt=""/>
                                        </div>
                                        <div class="pull-left" style="width:85%;">Place You Live <br>
                                          <span style="color:#333; font-size:13px;">From OMR, Ghana, Nigeria</span></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/marr-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Marital Status <br>
                                          <span style="color:#333; font-size:13px;">Married to Julie Johnson</span></div>
                                        
                                      </div>
                                      
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/marr-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Personal Self Intro Video<br>
                                         </div>                                        
                                         <video style="width:160px; height:88px;" controls controlsList="nodownload">
                                             <source src="<?php echo base_url('assets/videos/test.mp4'); ?>" type="video/mp4">
                                         </video>

                                      </div>
                                     
                                    </div>
                             </div>
                                 
                              <!-- about me tab for personal  -->

                                  <div class="tab-pane" id="b">
                                    <div class="col-md-10">
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/intro-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Introduction about Yourself<br>
                                          <span style="color:#333; font-size:13px;">I am Emeka Ike and I am from Ghana, Nigeria.
                                          
                                          I am a second-year student in CS Branch, pursuing my Btech from lovely professional university (LPU), Ghana, Nigeria.
                                          
                                          So far my family background is concerned,</span></div>
                                        
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/favorite-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">What Your Favorite Quotes<br>
                                          <span style="color:#333; font-size:13px;">Your time is God greatest gift to you so use it wisely</span></div>
                                        
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/birthday-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Birth date<br>
                                          <span style="color:#333; font-size:13px;">Jan 27th</span></div>                                     
                                        
                                      </div>                                   
                                      
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/religion-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Religion<br>
                                          <span style="color:#333; font-size:13px;">Christian</span></div>                                     
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/language-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Languages<br>
                                          <span style="color:#333; font-size:13px;">English, Hindi, Nigerian</span><br>
                                          </div>
                                                                               
                                      </div>
                                    </div>
                                  </div>

                                 

                            <!-- relationship tab for personal  -->

                                  <div class="tab-pane" id="c">
                                    <div class="col-md-10">
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:18%;"><img src="../assets/images/prof-pic.png" alt=""/></div>
                                        <div class="pull-left" style="width:67%;">Jane Deo<br>
                                          <span style="color:#333; font-size:13px;">Wife, Homemaker</span><br>
                                        </div>
                                       
                                        
                                      </div>
                                      
                                     
                                    </div>
                                  </div>

                          <!-- contact info tab for personal  -->         

                                  <div class="tab-pane" id="d">
                                    <div class="col-md-10">
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/marr-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Email <br>
                                          <span style="color:#333; font-size:13px;">emekaike2234@gmail.com</span></div>
                                        
                                      </div>
                                      
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/email-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Phone No <br>
                                          <span style="color:#333; font-size:13px;">1708-555-5555</span></div>
                                        
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/country-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Country <br>
                                          <span style="color:#333; font-size:13px;">United States</span></div>
                                                                              
                                      </div>
                                     
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/state-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">State<br>
                                          <span style="color:#333; font-size:13px;">Texas, Houston</span></div>
                                                                                
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/social-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Social Links<br>
                                          <span style="color:#333; font-size:13px;">www.emekaike.com/profile</span></div>
                                       
                                      
                                      </div>
                                    </div>
                                  </div>

                                   <!-- event info tab for personal  -->

                                  <div class="tab-pane" id="e">
                                    <div class="col-md-10">
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/birthday-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Birthday<br>
                                          <span style="color:#333; font-size:13px;">Jan 1991</span> <br>
                                          </div>                                       
                                       
                                      </div>
                                     
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/wedding-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Wedding<br>
                                          <span style="color:#333; font-size:13px;">Jan 2014</span> <br>
                                          </div>                                       
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/anniv-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Anniversary<br>
                                          <span style="color:#333; font-size:13px;">Mar 1995</span> <br>
                                          </div>
                                                                              
                                      </div>
                                     
                                      <div class="col-md-6">
                                        <div class="pull-left" style="width:15%;"><img src="../assets/images/social-1-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:85%;">Social Functions<br>
                                          <span style="color:#333; font-size:13px;">Jan 2000</span> <br>
                                         </div>                                       
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/parties-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;">Parties<br>
                                          <span style="color:#333; font-size:13px;">Jan 2015</span> <br>
                                          </div>                                     
                                      
                                      </div>                                      
                                     
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
                     <form action="<?php echo base_url('profile/profile_update'); ?>" method="post"  id="profile_update" class="form-inline">
                          <div class="row">
                            <div class="col-md-12" style="font-size:15px;">
                              <div class="tabbable tabs-left">
                                <ul class="nav nav-tabs">
                                  <li style="width:100%;" class="active"><a href="#11" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Overview</a></li>
                                  <li style="width:100%;"><a href="#12" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Professional Background</a></li>
                                  <!--li style="width:100%;"><a href="#13" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Company Info/ Job Info</a></li-->
                                  <li style="width:100%;"><a href="#14" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Professional Interests/ Events</a></li>
                                  <li style="width:100%;"><a href="#15" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Professional Groups</a></li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="11">
                                    <div class="col-md-8">
                                      <div class="col-md-12"> This is your  event identification name tag, You can use your "WOWtag ID" to share your personal and professional information and attend at any event. You can create your own WOWtag ID to add some form of personality to yourself.</div>
                                      <div class="col-md-12" style="margin-top:15px;">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/wow-tag-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:78%;"><a href="#" style="font-size:16px; color:#333;"> <em style="font-size:20px;">!</em> Emeka Ike </a><br>
                                          <span style="color:#fff; font-size:13px; background-color:#e91e63; padding:3px 5px; border-radius:5px;">Your Wowtag ID</span></div>
                                        <div class="pull-left" style="width:5%; margin-top:10px;"><a href="#"></a></div>
                                       
                                      </div>
                                                                       
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="12">
                                    <div class="col-md-8">
                                      <div class="col-md-12 text-center" style="margin:5px 0 25px;"><span style="font-size:16px; background:#ECECEC; padding:5px 10px; border-radius:5px;">About Education</span></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/edu-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:75%;">Computer Science<br>
                                          <span style="color:#333; font-size:13px;">University of Chicago<br>
                                          Bsc in Computer Science<br>
                                          1988-1989 <br>
                                          </span> </div>
                                       
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12 text-center" style="margin:5px 0 25px;"><span style="font-size:16px; background:#ECECEC; padding:5px 10px; border-radius:5px;">About Experience</span></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/edu-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:75%;">Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus,<br>
                                          </span>  </div>
                                        
                                       
                                        <div class="col-md-12" style="padding-right:0; padding-left:0; margin-top:15px;">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-size:14px!important;">
                                          <tbody>
                                            <tr>
                                              <td height="40" bgcolor="#EDEDED"><strong>Worked at</strong></td>
                                              <td height="40" bgcolor="#EDEDED"><strong>Position Held</strong></td>
                                              <td height="40" bgcolor="#EDEDED"><strong>Current From</strong></td>
                                              <td height="40" bgcolor="#EDEDED"><strong>Current To</strong></td>
                                             
                                            </tr>
                                            
                                            <tr style="border-bottom:1px solid #ccc;">
                                              <td height="45">Vineture</td>
                                              <td height="45">Project Manager</td>
                                              <td height="45">10/31/2013</td>
                                              <td height="45">11/31/2013</td>
                                            </tr>
                                            <tr>
                                                  <td height="1" bgcolor="#EDEDED" colspan="6"></td>
                                            </tr>
                                            <tr>
                                              <td height="45">Buncard LLC</td>
                                              <td height="45">Business Analyst</td>
                                              <td height="45">10/31/2013</td>
                                              <td height="45">11/31/2013</td>
                                            </tr>
                                            <tr>
                                                  <td height="1" bgcolor="#EDEDED" colspan="6"></td>
                                            </tr>
                                            <tr>
                                              <td height="45">Synergy LLC</td>
                                              <td height="45">Sr. Business Analyst</td>
                                              <td height="45">10/31/2016</td>
                                              <td height="45">11/31/2016</td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12 text-center" style="margin:5px 0 25px;"><span style="font-size:16px; background:#ECECEC; padding:5px 10px; border-radius:5px;">About Certification</span></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/certi-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:75%;">Certified  Fitness Trainer<br>
                                          <span style="color:#333; font-size:13px;">Certfied  CPR<br>
                                          Certfied  Cardiologist <br>
                                          </span></div>
                                      </div>
                                      <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0;"></div>
                                      <div class="col-md-12 text-center" style="margin:5px 0 25px;"><span style="font-size:16px; background:#ECECEC; padding:5px 10px; border-radius:5px;">About Awards</span></div>
                                      <div class="col-md-12">
                                        <div class="pull-left" style="width:7%;"><img src="../assets/images/awards-icon.png" alt=""/></div>
                                        <div class="pull-left" style="width:75%;">Best  Graduating Student UIC 1999<br>
                                          <span style="color:#333; font-size:13px;">EID  Entrepruership award 2015<br>
                                          </span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
                                     <div class="col-md-10 text-center" style="margin:5px 0 25px;"><span style="font-size:16px; color:#fff; background:#706666; padding:5px 10px; border-radius:5px;">My Professional Interest</span> </div>
                                     
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
                                      
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="15">
                                    <div class="col-md-8">
                                      <div class="col-md-10 text-center" style="margin:5px 0 25px;"><span style="font-size:16px; color:#fff; background:#706666; padding:5px 10px; border-radius:5px;">My Professional Group</span> </div>
                                    
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
                            <!--div class="col-md-12">
                                <div class="col-md-12" style="border-bottom:1px solid #ccc; margin:15px 0"></div>
                              </div--> 
                            
                          </div>
                          </div>
                          
                          <!--div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Edit Changes" data-toggle="modal" data-target=".modal-1" class="btn btn-primary" style="width:140px;">
                                
                              </div>
                            </div-->
                          
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

</body>
</html>
