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
<!-- magnific-popup image-->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/magnific-popup.css')?>" />
<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">

body {
	background-color: #e7e5e6;
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
.profile-info {
    position: absolute;
    text-align: center;
    padding: 0 20px;
    top: -188px!important;
    z-index: 999;
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
      <li class="breadcrumb-item"><a href="<?php echo base_url('Profile/profile_get'); ?>"><strong>Profile</strong></a></li>
      <li class="breadcrumb-item active"><strong>Friends Connections</strong></li>
    </ol>
</div> -->

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
                <img  src="<?php echo $cover; ?>"  style="background-size:cover; width:100%; max-height:300px;"/>
                <?php }   else{   ?>
              <img src="<?php echo base_url('assets/images/covers/1.jpg')?>" style="background-size:cover; width:100%; max-height:300px;" >
                <?php }  ?> 
                    
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">

          <div class="col-md-4" style="position:relative;">
            <div class="profile-info">

              <div class="col-md-9" style="background:RGBA(0,0,0,.7); border-radius:8px 8px 0 0; padding-top:25px; padding-bottom:0px; border:0px solid #c9c1c1; margin-top:39px; height:149px;">
                <div class="col-md-6 text-left">

              <div style="width:100%; text-align:center;" >
               
                  <?php 
                     $img= $this->session->userdata('personal_image');
                     if(isset($img))
                     {
                  ?>
                    <img  id="profileImage" src="<?php echo $img; ?>" class="profile-pic" style="border:3px solid #ccc; border-radius:7px; width:86px; height:86px;" />
                  <?php } else{  ?>                 
                      
                    <img class="img-responsive img-thumbnail"  id="profileImage" src="<?php echo base_url('assets/images/album/avatar_male.png')?>">
                  <?php  }  ?>           
              </div>
                             
                
                </div>
                        <div class="col-md-6" style="position:relative;">                                 
                            <?php 
                              $selfvideo= $this->session->userdata('self_video');
                              if(isset($selfvideo)){
                            ?>
                            <div style="position: absolute; left: 40px; top: 30px;">
                              <a href="<?php echo $selfvideo; ?>" class="html5lightbox" data-width="480" data-height="320">
                              <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user" />
                              </a>
                            </div>
                            <a href="<?php echo  $selfvideo; ?>" class="html5lightbox" data-width="480" data-height="320">
                            <video style="width:86px; height:86px; background-color:#e9e9e9; border-radius:5px;" id="myvideo" controlsList="nodownload" >
                              <source src="<?php echo  $selfvideo; ?>" type="video/mp4">
                            </video>
                            </a>
                            <?php } else {  ?>
                              <video style="width:86px; height:86px; border-radius:5px;" id="myvideo">
                                <source src="" type="video/mp4">
                              </video>
                            <?php } ?>                            
                           
                        </div>
               
              </div>


              <div class="col-md-11" style="background:none; padding-top:0px; padding-bottom:0px;">
              
                 <div class="row">
                 <div class="col-md-12 text-left" style="margin-top:-20px;" >
                 <div style="font-size:16px; font-weight:normal; line-height:18px; color:#fff; margin-top:0px; margin-left:10px; margin-bottom:0px;">
                 <?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?>
                </div>
                
                    <div style="color:#fff; font-size:14px;">  
                    <img src="<?php echo base_url('assets/images/wow-pink-1.png'); ?>" alt=""/>                   
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
              
              <li><a href="<?php echo base_url('Profile/profile_get'); ?>" >Profile</a></li>             
              <li><a href="<?php echo base_url ('home/interest_get') ?>" >Interests</a></li>
              <li><a href="<?php echo base_url ('Profile/friends_connection') ?>" class="active">Friend Connections</a></li>
              
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
                          if(isset($frds->personalimageurl)){
                      ?>
                      <img src="<?php echo $frds->personalimageurl; ?>" alt="user" class="profile-photo-small">
                      <?php } else { ?>
                      <img src="<?php echo base_url('assets/images/avatar/avatar_small_friends.png')?>" alt="user" class="profile-photo-small">
                      <?php } ?>
                      
                    </div>
                    <div class="friend-info col-md-9">
                        <a href="#" class="pull-right text-greeny"><img src="<?php echo base_url('assets/images/greeny.png')?>"> Friend</a>
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
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/html5gallery.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 

<script src="<?php echo base_url ('assets/js/moment.min.js') ?>"></script>

<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
<script src="<?php echo base_url ('assets/html5lightbox/html5lightbox.js') ?>"></script><!-- video popup library -->

<script>

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
