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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.datetimepicker.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">
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
.form-wizard {
	padding: 25px;
	background: #fff;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	box-shadow: 0px 0px 3px 0px #ccc;
	text-align: left;
}
.timeline-cover {
	background: url("<?php echo base_url ('assets/images/covers/12.jpg') ?>") no-repeat;
	background-position: center;
	background-size: cover;
	min-height: 250px;
	border-radius: 0 0 4px 4px;
	position: relative;
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
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:13px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Home</span>
          </a> 
          <a href="<?php echo base_url('event/create_event_landing'); ?>" style="text-decoration:none;"><span style="font-size:13px;  background:#757575; padding:5px 10px; border-radius:5px; color:#fff;">Create Event</span>
          </a> 
          <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:13px;  padding:5px 10px; border-radius:5px; color:#fff;"><i class="fa fa-sign-in"></i> Logout</span>
          </a>
        </ul>
        <form class="navbar-form navbar-right hidden-sm">
          <div class="form-group"> <i class="icon ion-android-search"></i>
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
      <div class="timeline-nav-bar hidden-sm hidden-xs" style="background:none; bottom:75px;">
        <div class="row">
          <div class="col-md-12 text-center" >
            <h3 style="color:#fff; font-size:40px;">Create, Share &amp; Advertise <br>
              Your Personal Business And Professional Events</h3>
            <div class="col-md-12 text-center"><a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"> <span style="font-size:18px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Lets Get Started</span></a></div>
          </div>
        </div>
      </div>
      <!--Timeline Menu for Large Screens End--> 
      
      <!--Timeline Menu for Small Screens-->
      <div class="navbar-mobile hidden-lg hidden-md">
        <div class="profile-info"> <img src="<?php echo base_url ('assets/images/users/user-1.jpg') ?>" alt="" class="img-responsive profile-photo" />
          <h3 style="color:#fff;">Create, Share &amp; Advertise Your Personal Business And  Professional Events</h3>
        </div>
      </div>
      <!--Timeline Menu for Small Screens End--> 
      
    </div>
    <div id="page-contents">
      <div class="row" style="margin-bottom:25px;">
        <div class="col-md-12">
          <div class="col-md-8" style="border:1px solid #ccc; padding-top:15px; padding-bottom:15px; background:#F1F1F1; margin-bottom:30px;">
            <p>
            <h3>Step 1: Create  Your Event - !Wowhubb </h3>
            <span style="line-height:30px; font-size:16px;">Wowtag  is a unique identifier (Name) for your event that you can use to  share, invite and advertise your event  on billboards, online and on TV advertisements.  
            Your event wowtags, plays the event ad video on user phone and subsequently gives them the opportunity to register for the event , and share the event wowtag. <br>
            All Wowtag has runtime for the video your event can run weeks ahead of the event date and ends on a specific date that you selected</span>
            </p>
            <br>
            <div class="col-md-12 text-center"><a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"> <span style="font-size:18px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Lets Get Started</span></a></div>
          </div>
          <div class="col-md-4"><img src="<?php echo base_url ('assets/images/step1.png') ?>" alt="" class="img-responsive" /></div>
        </div>
      </div>
      <div class="row" style="margin-bottom:25px;">
        <div class="col-md-12">
          <div class="col-md-8" style="border:1px solid #ccc; padding-top:15px; padding-bottom:15px; background:#F1F1F1; margin-bottom:30px;">
            <p style="line-height:30px;">
            <h3>Step 2: Add Event Advertisement Video </h3>
            <span style="line-height:30px; font-size:16px;">Upload your event !wowtag video and use it to invite your event audience  and also to create reward coupon  and other attractive incentive for your events<br>
            Use your event !wowtag video to promote your event on various media platforms ( Billboards, Handbills, Online, Tv Ads, and lots more</span>
            </p>
            <br>
            <div class="col-md-12 text-center"><a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"> <span style="font-size:18px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Lets Get Started</span></a></div>
          </div>
          <div class="col-md-4"><img src="<?php echo base_url ('assets/images/step2.png') ?>" alt="" class="img-responsive" /></div>
        </div>
      </div>
      <div class="row" style="margin-bottom:25px;">
        <div class="col-md-12">
          <div class="col-md-8" style="border:1px solid #ccc; padding-top:15px; padding-bottom:15px; background:#F1F1F1; margin-bottom:30px;">
            <p style="line-height:50px;">
            <h3 style="line-height:30px;">Step 3: Publish And Promote Your Event using Your Event !WOWtag  Catch-word </h3>
            <span style="line-height:30px; font-size:16px;">Engage your targeted audience using your event !wowtag video
            Attract highly targeted audiences using !wowtag Sponsored Content, Raise your Product, brand &amp; Services awareness and gain followers generate quality leads, Recieve real time audience engagement via the 
            !wowtag dashboard across multiple locations in one map display format.</span>
            </p>
            <p>
            <h3 style="line-height:30px;">Create Catch-Word !Wowtags Across Multiple  Media Platform &amp; Recieve Real Time Audience Leads & Engagement</h3>
            </p>
            <div class="row">
              <div class="col-md-4"><img src="<?php echo base_url ('assets/images/ad-1.jpg') ?>" alt="" class="img-responsive img-thumbnail" /></div>
              <div class="col-md-4"><img src="<?php echo base_url ('assets/images/ad-2.jpg') ?>" alt="" class="img-responsive img-thumbnail" /></div>
              <div class="col-md-4"><img src="<?php echo base_url ('assets/images/ad-3.jpg') ?>" alt="" class="img-responsive img-thumbnail" /></div>
            </div>
            <br>
            <div class="col-md-12 text-center"><a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"> <span style="font-size:18px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Lets Get Started</span></a></div>
          </div>
          <div class="col-md-4"><img src="<?php echo base_url ('assets/images/step3.png') ?>" alt="" class="img-responsive" /></div>
        </div>
        <div class="col-md-12 text-center" style="background:#f5f5f5; padding-bottom:15px;">
          <p style="font-size:18px; padding:15px;">Reach Your Targeted Audience using !WOWtag <br>
            unique advertisement  platform</p>
          <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"> <span style="font-size:18px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Lets Get Started</span></a></div>
      </div>
    </div>
  </div>
</div>

<!-- Footer
    ================================================= 
<footer id="footer">
  <div class="container">
    <?php  $this->load->view('includes/footer.php'); ?>
  </div>
</footer>

preloader
<div id="spinner-wrapper">
  <div class="spinner"></div>
</div>-->

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
