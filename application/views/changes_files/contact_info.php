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
                  <form action="<?php echo base_url('profile/profile_img_upload'); ?>" method="post" enctype="multipart/form-data">
                  <input type="file"  name="img">
                   <input type="submit" name="upload" value="upload">
                  </form>
                  <!--
                  <img src="<?php //echo base_url ('assets/images/users/user-1.jpg') ?>" alt="" class="img-responsive profile-photo" />
                  <h3>!Emeka Ike</h3>
                  <p class="text-muted">Managing Director</p>-->
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
                <li><a href="timline.html">About</a></li>
                <li><a href="timeline-about.html" class="active">Interests</a></li>
                <li><a href="timeline-album.html">Photos</a></li>
                <li><a href="timeline-friends.html">Eventhubb</a></li>
                <li><a href="timeline-friends.html">Wowtag</a></li>
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
              	<li class="active"><i class="icon ion-ios-information-outline"></i><a href="<?php echo base_url('Profile/aboutme')  ?>">About Me</a></li>
                <li><i class="icon ion-ios-heart-outline"></i><a href="<?php echo base_url('Profile/contact_info')  ?>">Contact info</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="<?php echo base_url('Profile/edit_account_settings')  ?>">My Event info</a></li>
              	
              </ul>
            </div>
            <div class="col-md-6">

              <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>Contact Info</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="education" id="education" class="form-inline">
                    
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date-from">Phone Number</label>
                        <input id="date-from" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" placeholder="from" value="<?php echo $this->session->userdata('phone'); ?>" readonly />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date-to" class="">Show phone to</label>
                        <select class="form-control" id="year">
                          <option value="">select</option>
                          <option value="">Hide phone number</option>
                          <option value="">show phone number to selected group</option>
                         
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date-from">Email</label>
                        <input id="date-from" class="form-control input-group-lg" type="text" name="date" title="Enter a Date" value="<?php echo $this->session->userdata('email'); ?>" readonly/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date-to" class="">Show Email to</label>
                        <select class="form-control" id="year">
                          <option value="">select</option>
                          <option value="">Hide Email</option>
                          <option value="">show Email to selected group</option>
                         
                        </select>
                      </div>
                    </div>
                     <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date-from">Address</label>
                        <input id="date-from" class="form-control input-group-lg" type="date" name="date" title="Enter a Date" placeholder="from" value="chennai" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date-to" class="">Show Address to</label>
                        <select class="form-control" id="year">
                          <option value="">select</option>
                          <option value="">Hide Address</option>
                          <option value="">show Address to selected group</option>
                         
                        </select>
                      </div>
                    </div>
                    
                    <div class="row">
                       <div  style="width:600px;" class="text-center">
                         <button class="btn btn-primary" style="width:140px;">Save Changes</button>
                        </div>
                    </div>
                  </form>
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
