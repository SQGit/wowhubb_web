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
    z-index: 1000;
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

<div id="page-contents" style="padding:45px 0 50px;">
  <div class="container">
    <div class="row"> 
      
      <!-- Newsfeed Common Side Bar Left
          ================================================= -->
      <div class="col-md-3 static">
        
        <!--profile card ends-->
        
        <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">FILTERS</h5>
           
          </ul>
          <!--news-feed links ends-->
         

          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;"> FLAVOUR</h5>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Chocolate</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>vanilla</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Strawberry</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Pineapple</a></div>
            </li>
            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">DISCOUNT</h5>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#">
                <input type="checkbox" > 50% or more</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"> 
                <input type="checkbox" >  40% or more</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#">
                <input type="checkbox" > 30% or more</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#">
                <input type="checkbox" > 20% or more</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#">
                <input type="checkbox" > 10% or more</a></div>
            </li>
            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">AVAILABILITY</h5>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Out of stock</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Clear all</a></div>
            </li>
          </ul>
          <!--news-feed links ends--> 
          
        </div>
        <!--chat block ends--> 
      </div>
     <div class="col-md-6">         
        <!-- center box start here  =================================== -->
              <div class="container post-content">
        <div class="col-md-12 text-right" style="margin-top:15px; margin-bottom:10px;"><a href="<?php echo base_url('service/service_provider_details'); ?>"><i class="fa fa-list" style="font-size:18px;"></i></a>&nbsp;&nbsp; <a href="<?php echo base_url('service/service_provider_grid'); ?>"><i class="fa fa-th" style="font-size:18px;"></i></a> &nbsp;&nbsp;<span style="font-size:16px;">Showing 140 Results</span></div>
        <div class="row"><div class="col-md-12"><hr style="margin:5px 0;"></div></div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h3>!Gina Cakes</h3>
            </div>
            <div class="col-md-6 text-right" style="margin-top:20px;"><i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p style="font-size:16px;">Restaurant, Catering Food</p>
            </div>
            <div class="col-md-6 text-right" style="font-size:16px;">2.2</div>
          </div>
          <div class="row"><div class="col-md-12"><hr style="margin:5px 0;"></div></div>
          <div class="row">
            <div class="col-md-4" style="margin-top:10px;">
              <div class="gallery"> <img src="<?php echo base_url('assets/images/cake/cake1.jpg'); ?>" alt="post-image" class="img-responsive img-thumbnail" /> <br> 3000 Wowsomes</div>
            </div>
            <div class="col-md-8" style="margin-top:10px;">
              <p style="font-size:16px;">2345, Blue Street, Sugarland Texas 77334<br>
                Opens @7:00pm<br>
                713-555-5555<br>
                <span style="font-size:14px; color:#e91e63;"><a href="#">www.ginacakes.com</a></span></p>
              <div class="col-md-10">
                <button type="submit" class="btn-primary" style="background-color:transparent; border:1px solid #e91e63; color:#333;"> Wowsomes </button>
                <button type="submit" class="btn-primary"> Call Now </button>
              </div>
              <div class="col-md-2 text-right"><a href="#"><i class="fa fa-3x fa-map-marker"></i></a></div>
            </div>
          </div>
        </div>
        <div class="col-md-12" style="background-color:#f5f5f5; margin-top:20px; margin-bottom:20px;">
          <div class="row">
            <div class="col-md-6">
              <h3>!Amazing Bakery </h3>
            </div>
            <div class="col-md-6 text-right" style="margin-top:20px;"><i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p style="font-size:16px;">Restaurant, Catering Food</p>
            </div>
            <div class="col-md-6 text-right" style="font-size:16px;">3</div>
          </div>
          <div class="row"><div class="col-md-12"><hr style="margin:5px 0;"></div></div>
          <div class="row">
            <div class="col-md-4" style="margin-top:10px;">
              <div class="gallery"> <img src="<?php echo base_url('assets/images/cake/cake2.jpg'); ?>" alt="post-image" class="img-responsive img-thumbnail" /> <br> 200 Wowsomes</div>
            </div>
            <div class="col-md-8" style="margin-top:10px;">
              <p style="font-size:16px;">4005, Garden Street, Sugarland Texas 77334<br>
                Opens @6:00pm<br>
                813-288-8956<br>
                <span style="font-size:14px; color:#e91e63;"><a href="#">www.amazingbakery.com</a></span></p>
              <div class="col-md-10">
                <button type="submit" class="btn-primary" style="background-color:transparent; border:1px solid #e91e63; color:#333;"> Wowsomes </button>
                <button type="submit" class="btn-primary"> Call Now </button>
              </div>
              <div class="col-md-2 text-right"><a href="#"><i class="fa fa-3x fa-map-marker"></i></a></div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h3>!Jessie Cake Point </h3>
            </div>
            <div class="col-md-6 text-right" style="margin-top:20px;"><i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p style="font-size:16px;">Restaurant, Cakes</p>
            </div>
            <div class="col-md-6 text-right" style="font-size:16px;">3</div>
          </div>
          <div class="row"><div class="col-md-12"><hr style="margin:5px 0;"></div></div>
          <div class="row">
            <div class="col-md-4" style="margin-top:10px;">
              <div class="gallery"> <img src="<?php echo base_url('assets/images/cake/cake3.jpg'); ?>" alt="post-image" class="img-responsive img-thumbnail" /> <br> 2000 Wowsomes</div>
            </div>
            <div class="col-md-8" style="margin-top:10px;">
              <p style="font-size:16px;">856, Lawn Street, Sugarland Texas 77334<br>
                Opens @8:00pm<br>
                852-288-8956<br>
                <span style="font-size:14px; color:#e91e63;"><a href="#">www.jessiecakepoint.com</a></span></p>
              <div class="col-md-10">
                <button type="submit" class="btn-primary" style="background-color:transparent; border:1px solid #e91e63; color:#333;"> Wowsomes </button>
                <button type="submit" class="btn-primary"> Call Now </button>
              </div>
              <div class="col-md-2 text-right"><a href="#"><i class="fa fa-3x fa-map-marker"></i></a></div>
            </div>
          </div>
        </div>

          <div class="col-md-12" style="background-color:#f5f5f5; margin-top:20px; margin-bottom:20px;">
          <div class="row">
            <div class="col-md-6">
              <h3>!Jessie Cake Point </h3>
            </div>
            <div class="col-md-6 text-right" style="margin-top:20px;"><i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p style="font-size:16px;">Restaurant, Cakes</p>
            </div>
            <div class="col-md-6 text-right" style="font-size:16px;">3</div>
          </div>
          <div class="row"><div class="col-md-12"><hr style="margin:5px 0;"></div></div>
          <div class="row">
            <div class="col-md-4" style="margin-top:10px;">
              <div class="gallery"> <img src="<?php echo base_url('assets/images/cake/cake1.jpg'); ?>" alt="post-image" class="img-responsive img-thumbnail" /> <br> 2000 Wowsomes</div>
            </div>
            <div class="col-md-8" style="margin-top:10px;">
              <p style="font-size:16px;">856, Lawn Street, Sugarland Texas 77334<br>
                Opens @8:00pm<br>
                852-288-8956<br>
                <span style="font-size:14px; color:#e91e63;"><a href="#">www.jessiecakepoint.com</a></span></p>
              <div class="col-md-10">
                <button type="submit" class="btn-primary" style="background-color:transparent; border:1px solid #e91e63; color:#333;"> Wowsomes </button>
                <button type="submit" class="btn-primary"> Call Now </button>
              </div>
              <div class="col-md-2 text-right"><a href="#"><i class="fa fa-3x fa-map-marker"></i></a></div>
            </div>
          </div>
        </div>

          <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
              <h3>!Jessie Cake Point </h3>
            </div>
            <div class="col-md-6 text-right" style="margin-top:20px;"><i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p style="font-size:16px;">Restaurant, Cakes</p>
            </div>
            <div class="col-md-6 text-right" style="font-size:16px;">3</div>
          </div>
          <div class="row"><div class="col-md-12"><hr style="margin:5px 0;"></div></div>
          <div class="row">
            <div class="col-md-4" style="margin-top:10px;">
              <div class="gallery"> <img src="<?php echo base_url('assets/images/cake/cake2.jpg'); ?>" alt="post-image" class="img-responsive img-thumbnail" /> <br> 2000 Wowsomes</div>
            </div>
            <div class="col-md-8" style="margin-top:10px;">
              <p style="font-size:16px;">856, Lawn Street, Sugarland Texas 77334<br>
                Opens @8:00pm<br>
                852-288-8956<br>
                <span style="font-size:14px; color:#e91e63;"><a href="#">www.jessiecakepoint.com</a></span></p>
              <div class="col-md-10">
                <button type="submit" class="btn-primary" style="background-color:transparent; border:1px solid #e91e63; color:#333;"> Wowsomes </button>
                <button type="submit" class="btn-primary"> Call Now </button>
              </div>
              <div class="col-md-2 text-right"><a href="#"><i class="fa fa-3x fa-map-marker"></i></a></div>
            </div>
          </div>
        </div>

          <div class="col-md-12" style="background-color:#f5f5f5; margin-top:20px; margin-bottom:20px;">
          <div class="row">
            <div class="col-md-6">
              <h3>!Jessie Cake Point </h3>
            </div>
            <div class="col-md-6 text-right" style="margin-top:20px;"><i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p style="font-size:16px;">Restaurant, Cakes</p>
            </div>
            <div class="col-md-6 text-right" style="font-size:16px;">3</div>
          </div>
          <div class="row"><div class="col-md-12"><hr style="margin:5px 0;"></div></div>
          <div class="row">
            <div class="col-md-4" style="margin-top:10px;">
              <div class="gallery"> <img src="<?php echo base_url('assets/images/cake/cake3.jpg'); ?>" alt="post-image" class="img-responsive img-thumbnail" /> <br> 2000 Wowsomes</div>
            </div>
            <div class="col-md-8" style="margin-top:10px;">
              <p style="font-size:16px;">856, Lawn Street, Sugarland Texas 77334<br>
                Opens @8:00pm<br>
                852-288-8956<br>
                <span style="font-size:14px; color:#e91e63;"><a href="#">www.jessiecakepoint.com</a></span></p>
              <div class="col-md-10">
                <button type="submit" class="btn-primary" style="background-color:transparent; border:1px solid #e91e63; color:#333;"> Wowsomes </button>
                <button type="submit" class="btn-primary"> Call Now </button>
              </div>
              <div class="col-md-2 text-right"><a href="#"><i class="fa fa-3x fa-map-marker"></i></a></div>
            </div>
          </div>
        </div>
        <!--Grid View-->
        
        
       
      </div>
      </div>
      <!-- Newsfeed Common Side Bar Right
          ================================================= -->
      <div class="col-md-3 static">
            <div id="sticky-sidebar" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:6px 0 0 0; border-radius:5px;">
              <ul class="nav-news-feed">
                  <div class="row" style="margin:15px 0 5px 0;">
                      <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/catering-services.png');?>" > Catering Service</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/cakes.png');?>" > Cakes</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/wines.png');?>" ></i> Wines</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/bbq_indoor_outdoor.png');?>" > BBQ Indoor & Outdoor</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/music_dj-services.png');?>" > Music & DJ Services</a></div>
                  </div>  
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/event-organizer.png');?>" > Event Organizer</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/beauty-services.png');?>" > Beauty Services</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/photography_video-services.png');?>" > Photography & Video Services</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/decor-party-rentals.png');?>" > Decor & Party Rentals</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/floral.png');?>" > Floral</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/party-cleaning-services.png');?>" > Party cleaning services</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/limo_car-rental-services.png');?>" > Limo & Car Rental Services</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/dress_jewellery.png');?>" > Dress & Jewellery</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/mc_comedians.png');?>" > MC's & Comedians</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/event-guest-speakers.png');?>" > Events Guest Speakers</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/event-technology-support.png');?>" > Event Technology Support</a></div>
                  </div>
                  <div class="row" style="margin:5px 0;">
                    <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><img src="<?php echo base_url('assets/images/service_provider_icon/event_gifting_souveniers.png');?>" > Event Gifting Souveniers</a></div>
                  </div><br>
            </ul>         
        </div>
     </div>   
  </div>
</div>



<!-- Scripts
    ================================================= --> 
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



</body>
</html>
