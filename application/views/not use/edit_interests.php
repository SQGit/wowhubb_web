<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Wowhubb | Your One Stop Event Networking Platform</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap.min.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url ('assets/css/ionicons.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css') ?>" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
    <style type="text/css">
#footer {
	background: #fff;
	position: relative;
	top: 0px;
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
      <div class="navbar-header"> <a class="navbar-brand" href="index-register.html"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
         
         <a href="#"> <span style="font-size:13px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Personal</span></a>
           <a href="#"><span style="font-size:13px;  background:#757575; padding:5px 10px; border-radius:5px; color:#fff;">Professional</span></a>
        </ul>
         <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search !Events, !Venues, !Wowtags, !People">
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

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="<?php echo base_url ('assets/images/users/user-1.jpg') ?>" alt="" class="img-responsive profile-photo" />
                  <h3>!Emeka Ike</h3>
                  <p class="text-muted">Managing Director</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.html" class="active">About</a></li>
                  <li><a href="<?php echo base_url ('Profile/profile_interest') ?>" >Interests</a></li>
                  <li><a href="timeline-album.html">Photos</a></li>
                  <li><a href="timeline-friends.html">Eventhubb</a></li>
                  <li><a href="timeline-friends.html">Wowtag</a></li>
                </ul>
                <ul class="follow-me list-inline">
                  <li>102 Connections</li>
                  
                  
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
                  <img src="<?php echo base_url ('assets/images/users/user-1.jpg') ?>" alt="" class="img-responsive profile-photo" />
                  <h3>!Emeka Ike</h3>
                  <p class="text-muted">Managing Director</p>
                </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="timeline-about.html" class="active">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
                <li><i class="icon ion-ios-information-outline"></i><a href="<?php echo base_url('Profile/edit_profile')  ?>">Basic Information</a></li>
                <li><i class="icon ion-ios-briefcase-outline"></i><a href="<?php echo base_url('Profile/edit_work_education')  ?>">Education and Work</a></li>
                <li  class="active"><i class="icon ion-ios-heart-outline"></i><a href="<?php echo base_url('Profile/edit_interests')  ?>">My Interests</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="<?php echo base_url('Profile/edit_account_settings')  ?>">Account Settings</a></li>
                
              </ul>
            </div>
            <div class="col-md-6">

              <!-- Edit Interests
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-heart-outline"></i>My Interests</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <ul class="list-inline interests">
                  
                 <?php 
                  foreach($interests as $interest)
     {?>
       
       
       <li><a href="#"><img src="<?php echo base_url().'assets/images/interests/'.$interest.'.png' ?>" width="25" height="25" alt=""/> <?php echo $interest; ?></a></li>
     <?php }

                 ?>
                  
                  	<!-- <li><a href="#"><img src="<?php //echo base_url ('assets/images/interests/icon_1_white_hdpi.png') ?>" width="25" height="25" alt=""/> Business Networking Events</a></li>
                  	<li><a href="#"><img src="<?php //echo base_url ('assets/images/interests/icon_2_white_hdpi.png') ?>" width="25" height="25" alt=""/> Technology Events</a></li>
                  	<li><a href="#"><img src="<?php //echo base_url ('assets/images/interests/icon_3_white_hdpi.png') ?>" width="25" height="25" alt=""/> Professional Training </a></li>
                  	<li><a href="#"><img src="<?php //echo base_url ('assets/images/interests/icon_4_white_hdpi.png') ?>" width="25" height="25" alt=""/> Comedy Shows & Events</a></li>
                  	<li><a href="#"><img src="<?php// echo base_url ('assets/images/interests/icon_5_white_hdpi.png') ?>" width="25" height="25" alt=""/> Media Film Fashion</a></li> -->
                  </ul>
                  <div class="line"></div>
                  <div class="row">
                    
                    
                    <div class="form-group col-sm-4 text-center">
                      <button class="btn btn-primary">Add Interest</button>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 static">
              
              <!--Sticky Timeline Activity Sidebar-->
              <div id="sticky-sidebar">
                <h4 class="grey">Search for Event</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link" style="font-size:20px;">Event Venues</a></p>
                    <p class="text-muted">All Event Venues</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link" style="font-size:20px;">Event Service Providers</a></p>
                    <p class="text-muted">Service Providers</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link" style="font-size:20px;">Event Tickets</a></p>
                    <p class="text-muted">Browse all</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link" style="font-size:20px;">!WOW</a></p>
                    <p class="text-muted">Upcoming Events</p>
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
<footer id="footer">
        <div class="container">
            <?php  $this->load->view('includes/footer.php'); ?>
        </div>
</footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    


    <!-- Scripts
    ================================================= -->
    <script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/script.js') ?>"></script>
    
  </body>

</html>
