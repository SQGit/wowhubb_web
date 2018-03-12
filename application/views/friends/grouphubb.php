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
label.error {
	/*font-family: 'Roboto', sans-serif;*/
	color: red;
}
.clr {
	background: #fbbd60;
	color: #3d7489;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
	padding: 10px;
}
.rr-circle {
	border-radius: 50%;
	background-color: #3096EB;
	font-size: 20px;
	color: #fff;
	width: 50px;
	height: 50px;
	line-height: 50px;
	text-align: center;
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
#imageUpload1 {
	display: none;
}
#profileImage1 {
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

}
.nav-tabs>li>a {
	margin-right: 2px;
	line-height: 1.42857143;
	border: 1px solid transparent;
	border-radius: 4px 4px 0 0;
	font-size: 16px;
	text-align: center;
	color:#333;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
	color: #333;
	font-weight:bold;
	cursor: pointer;
	background-color: white;
	border-bottom:3px solid #e91e63;
	border-top:none;
	border-right:none;
	border-left:none;
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
table, td, tr {
	border-spacing: 2px;
	padding: 0 5px;
}
.edit-block ul.interests li {
	background: #E8E8E8;
	color: #fff;
	padding: 5px 15px;
	margin-right: 10px;
	margin-top: 5px;
	margin-bottom: 5px;
	border-radius: 40px;
}
.edit-block ul.interests li a {
	color: #333!important;
}
img.profile-photo-1 {
	height: 80px;
	width: 80px;
	border-radius: 50%;
}
img.profile-photo-2 {
	height: 32px;
	width: 32px;
	border-radius: 50%;
}
.pull-left .btn-1 {
	min-width: 105px;
	height: 30px;
    margin: 0;
    padding: 0 20px;
    border: none;

    
    font-weight: normal;
    line-height:30px;
    color: #fff;
	background-color:#3A2021;
    -moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px;
    text-shadow: none;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
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
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span> </a> <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span> </a> <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span> </a>
        </ul>
        <form class="navbar-form navbar-right hidden-sm" style="position:absolute; right:325px; top:0px;" >
          <div class="form-group"> <i class="icon ion-android-search"></i>
            <input type="text" class=" form-control live-search-box" name="" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px; min-width:330px;" />
            <br/>
            
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
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="../assets/images/cb-banner.jpg" style="background-size:cover; width:100%; margin-top:20px;" > </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">
        <div class="col-md-12 col-sm-12" style="margin-top:15px;">
          <div class="col-md-12">
            <div class="pull-right">
              <a href="#" data-toggle="modal" data-target=".modal-1"><button type="submit" class="btn btn-primary">+ Create Group</button></a>
            </div>
          </div>
        </div>
         <div class="col-md-12"> 
                            <!-- Nav tabs category -->
                              <ul class="nav nav-tabs faq-cat-tabs">
                                  <li class="active"><a href="#faq-cat-1" data-toggle="tab" class="text-center">Event Groups</a></li>
                                  <li><a href="#faq-cat-2" data-toggle="tab" class="text-center">Discover Groups</a></li>


                              </ul>

                          <div class="tab-content faq-cat-content">                                  

                                    <div class="tab-pane active in fade" id="faq-cat-1"> 
        <div class="col-md-12 col-sm-12" style="margin-top:15px;">
          <div class="col-md-12 col-sm-12">
            
            <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">PENDING INVITATIONS</strong></div>
              </div>
              <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Vineture Group</strong></div>
                  <div class="col-md-12">Invited by Emeka<br>
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  <div class="col-md-12">
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                  </div>
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Decline</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              
              <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images//users/user-9.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Rockers Team</strong></div>
                  <div class="col-md-12">Invited by Saranya Chandrasekaran<br>
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  <div class="col-md-12">
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                  </div>
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Decline</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-3.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Houston Online</strong></div>
                  <div class="col-md-12">Invited by Emily Jackson<br>
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  <div class="col-md-12">
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                  </div>
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Decline</button>
                </div>
                
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images//users/user-19.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">GIT Team</strong></div>
                  <div class="col-md-12">Invited by Hari<br>
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  <div class="col-md-12">
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-2" ></div>
                    <div class="pull-left" style="width:15%;"><img src="../assets/images/td.png" class="profile-photo-2" ></div>
                  </div>
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Decline</button>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-12 col-sm-12" style="margin-top:15px;">
          <div class="col-md-12 col-sm-12">
            
            <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">YOUR GROUPS</strong></div>
              </div>
              <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Vineture Group</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">2 Unread Posts</span></div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn-1 btn-primary">Leave Group</button>

                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-1.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Parallels Group</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">2 Unread Posts</span></div>                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn-1 btn-primary">Leave Group</button>

                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-3.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Synergy Structures</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">2 Unread Posts</span></div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn-1 btn-primary">Leave Group</button>

                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-7.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Maxwell Inc</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">2 Unread Posts</span></div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn-1 btn-primary">Leave Group</button>

                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              
              
               
               
            </div>
          </div>
        </div>
        </div>
        
         <div class="tab-pane fade" id="faq-cat-2"> 
        <div class="col-md-12 col-sm-12" style="margin-top:15px;">
          <div class="col-md-12 col-sm-12">
            
            <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Recommended</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Vineture Group</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Local</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images//users/user-9.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Rockers Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-3.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Houston Online</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images//users/user-19.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">GIT Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Decline</button>
                </div>
                
              </div>
            </div>
            <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; margin-top:15px; border-radius:8px; padding:15px 10px;">
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Films &amp; TV</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-11.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Vineture Group</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Trending</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-5.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Rockers Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-3.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Houston Online</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-10.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">GIT Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                
              </div>
            </div>
            <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; margin-top:15px; border-radius:8px; padding:15px 10px;">
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Friends</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Vineture Group</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">School &amp; Education</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-4.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Rockers Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-3.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Houston Online</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images//users/user-19.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">GIT Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
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
</div>

<!-- create group modrl popup -->
<div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">                  
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3>Create Group</h3>
                                 <span style="color:#333; font-size: 15px">Please give the following information to create group</span>
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                              
                   
                    <!-- <form action="<?php echo base_url('searchfriends/create_group'); ?>"> -->
                            <div class="row" >                              
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Name Your Group</label>
                                <input  type="text" class="form-control input-group-lg"  name="group_name" placeholder="Ex.Wowhubb Group"  />
                              </div>
                            </div>
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Add Some People</label>
                                 <input type="text" class="search form-control " id="searchbox" name="people_add" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px;" />
                                 <span id="display1"> </span>
                              </div>
                            </div>
                            
                            <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Select Privacy</label>
                                <select name="privacy" id="days" class="form-control" style="background-color:#f5f5f5;">
                                      <option value="Public Group">Public Group</option>
                                      <option value="Closed Group">Closed Group</option>
                                      <option value="Secret Group">Secret Group</option>                                 
                                     
                                    </select>
                              </div>
                            </div>
                                                                                 
                            <div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Create" class="btn btn-primary" style="width:140px;">
                              </div>
                            </div>
                    <!-- </form> -->
                  
                               </div>
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
  

</script>
  
  
</body>
</html>
