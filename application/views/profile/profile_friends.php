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
#calendar {
    max-width: 900px;
    margin: 0 auto;
  }
.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 250px;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background:rgba(0,0,0,0.3);
  z-index:998;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 16px;
  position: absolute;
  top: 45%;
  right: 0%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  cursor:pointer;
}

.prof-phto
{
	padding:10px 5px; 
	border:1px solid #ccc; 
	border-radius:10px;
}

img.profile-photo-small {
    height: 60px;
    width: 60px;
    
}

.text-greeny
{
	 color:#329C00;
}

.card-info-1
{
	height:105px;
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
<div class="container" style="margin-top:20px; margin-bottom:-10px;">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('event/get_eventfeed'); ?>"><strong>Home</strong></a></li>  
      <li class="breadcrumb-item"><a href="<?php echo base_url('Profile/profile_get'); ?>"><strong>Profile</strong></a></li>
      <li class="breadcrumb-item active"><strong>Friends Connections</strong></li>
    </ol>
</div>

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
                <?php }  ?> 
                    
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info">
              
                <?php 
                $img= $this->session->userdata('personal_image');
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
               
             
            </div>
          </div>
          <div class="col-md-9" >
            <div class="profile-info-1">
              <h3 style="color:#fff;"><?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?> </h3>
              <p style="color:#fff;" class="text-muted"><?php echo $this->session->userdata('designation'); ?></p>
            </div>


            <ul class="list-inline profile-menu">
              <!-- <li><a href="<?php echo base_url ('event/profile_get_eventfeed') ?>" >Event Feed</a></li> -->
              <li><a href="<?php echo base_url('Profile/profile_get'); ?>" >Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get') ?>"  >Interests</a></li>
              <li><a href="<?php echo base_url ('Profile/friends_connection') ?>" class="active">Friend Connections</a></li>
              <li><a href="#">Eventhubb</a></li>
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
          <ul class="list-inline profile-menu">
              <li><a href="<?php echo base_url ('home/profile_update'); ?>" >Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get'); ?>" class="active">Interests</a></li>
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
        <div class="col-md-12" style="padding-top:15px;">
       <div class="col-md-12"> 
        <h3 style="margin-top:0;">
          <img src="<?php echo base_url('assets/images/send-group.png')?>"> Friends
        </h3>        
       </div>
                
            <?php 
                foreach ($friend->friends as  $frds) {
                
              ?>

                <div class="col-md-3 col-sm-3" style="margin-top: 10px;">
                  <div class="friend-card prof-phto col-md-12  card-info-1">
                  	
                  	<div class="card-info  col-md-3">
                      <?php 
                          if(isset($frds->personalimage)){
                      ?>
                      <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $frds->personalimage; ?>" alt="user" class="profile-photo-small">
                      <?php } else { ?>
                      <img src="<?php echo base_url('assets/images/avatar/avatar_small_friends.png')?>" alt="user" class="profile-photo-small">
                      <?php } ?>
                      
                    </div>
                    <div class="friend-info col-md-9">
                        <a href="#" class="pull-right text-greeny"><img src="<?php echo base_url('assets/images/greeny.png')?>"> My Friend</a>
                      	<h5><a href="#" class="profile-link"><?php echo $frds->firstname." ".$frds->lastname; ?></a></h5>
                      	<p><?php echo $frds->mutualfriends; ?> Mutual Connections</p>
                      </div>
                  </div>
                </div>

            <?php } ?>

                
               
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
<script src="<?php echo base_url ('assets/js/moment.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 

<script>


</script>
</body>
</html>
