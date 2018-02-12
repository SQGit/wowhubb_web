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
	margin: 100px auto 0!important;
}
}
td, tr {
	border-spacing: 2px;
	padding: 0 5px;
}

table {
	border-spacing: 2px;
	padding: 0px;
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
.form-group .btn-1 {
	min-width: 105px;
	height: 30px;
    margin: 0;
    padding: 0 20px;
    border: none;
    font-family: 'Lato', sans-serif;
    font-size: 16px;
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
            <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px; min-width:330px;" />
            <br/>
            <span id="display1"> </span> 
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
    <div class="timeline-cover"> <img class="cover-pic" src="../assets/images/sha-1.jpg" style="background-size:cover; width:100%; margin-top:20px;" > <br>
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info"> <img  src="../assets/images/lily-logo.png" class="profile-pic img-responsive profile-photo" /> </div>
          </div>
          <div class="col-md-9" >
            <div class="profile-info-1"> </div>
            <ul class="list-inline profile-menu">
              <li><a href="#">Venue Overview</a></li>
              <li><a href="#" class="active">Notifications</a></li>
              <li><a href="#">My Event Halls</a></li>
              <li><a href="#">Promote Your Venue</a></li>
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Settings</a></li>
            </ul>
            <ul class="follow-me list-inline">
              <li>Help</li>
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
            <li><a href="timline.html">Venue Overview</a></li>
            <li><a href="timeline-about.html" class="active">Notifications</a></li>
            <li><a href="timeline-album.html">My Event Halls</a></li>
            <li><a href="timeline-friends.html">Promote Your Services</a></li>
            <li><a href="timeline-friends.html">Reviews</a></li>
          </ul>
          <button class="btn-primary">Add Friend</button>
        </div>
      </div>
      <!--Timeline Menu for Small Screens End--> 
      
    </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">
       <div class="col-md-12 col-sm-12" style="margin-top:25px;">
      
     
      
      <div class="col-md-12 col-sm-12" style="margin-bottom:25px;">
      <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
        <div class="col-md-7">
       <div class="form-group col-sm-12"> 


                    <div class="form-group col-md-12"><strong style="font-size:20px;">Lilly Valley Cakes</strong></div>
                    <div class="form-group col-md-12">his unique venue is the oldest hangar on Hobby Airport's grounds, a 1929 Great Silver Fleet Maintenance Hangar. The Hangar can be used for any function you can imagine, large or small.</div>
                    <div class="form-group col-md-12"><strong>Location</strong></div>
                    <div class="form-group col-md-12">1234 Delano Drive <br>
Houston Texas 77777</div>
                     <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          &nbsp;
                          </div>
                        <div class="pull-left" style="width:18%; font-size:14px; margin-right:5px;">&nbsp;</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;"><strong style="font-weight:bold;">Open</strong>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <strong style="font-weight:bold;">From</strong>
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                       <strong style="font-weight:bold;">To</strong>
                        </div>
                        </div>
                    <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:18%; font-size:14px; margin-right:5px;">Monday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$2000">
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$200">
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:18%; font-size:14px; margin-right:5px;">Tuesday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$2000">
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$200">
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:18%; font-size:14px; margin-right:5px;">Wednesday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$2000">
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$200">
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:18%; font-size:14px; margin-right:5px;">Thursday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$2000">
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$200">
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:18%; font-size:14px; margin-right:5px;">Friday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$2000">
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$200">
                        </div>
                        </div>
                        <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        <div class="pull-left" style="width:5%;">
                          <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                          </div>
                        <div class="pull-left" style="width:18%; font-size:14px; margin-right:5px;">Saturday</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">Open</option>
                 					  <option class="option">Closed</option>
                                      <option class="option">Open Half day</option>
                 </select></div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$2000">
                        </div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:10px;">
                        <input type="text" id="event_date" name="event_date" class="form-control" placeholder="$200">
                        </div>
                        </div>

                   
                </div></div> 
      <div class="col-md-5">
      <div class="form-group col-sm-8">
                      <h3>Contact Us</h3>
                     <span style="font-size:18px;">555-555-5556</span><br>wwww.lilyvalleycakes.com
       </div>
       
      
     
      </div>
      </div>
      </div>
      
      <div class="col-md-12 col-sm-12" style="margin-bottom:25px;">
      <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
        <div class="col-md-9">
        <div class=" text-left" style="color:#333; padding-bottom:10px;">
              <strong style="font-size:17px;">Business Photos
              </strong>  </div>
              <div class="form-group col-sm-12">
			                      <label>Products/ Services Title</label>
			                      <input type="text" id="event_date" name="event_name" class="form-control">
                </div>
          <div class="form-group col-sm-12">
                      <label>Products/ Services Price</label>
                     <input type="text" id="event_date" name="event_date" class="form-control">
       </div>
       <div class="form-group col-sm-12">
						                      <div class="col-sm-12" style="background-color:#f9f9f9;">
						                        <label>Add Photos <strong style="color: red; font-size: 20px;"> * </strong></label>
						                        <label>Please browse to add photo</label>
						                        <div class="form-group" style="margin-bottom: 10px;"> 
							                        <div class="field" align="left">
							                         		<input type="button" class="btn btn-primary" value="Browse..." onclick="document.getElementById('files').click();">
							                         		<input type="file" style="display:none;" name="cover_img" id="files" class="file" accept="image/*" title="cover image">  
							                        </div> 
						                        </div>		                        
						                      </div>
                </div>
       <div class="form-group col-sm-12">
        <div class="pull-left" style="width:5%;"><input type="checkbox" name="eventvenue_addressvisible" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;"></div> <div class="pull-left" style="width:95%;">Apply Promo</div> 
        </div>
       
       
        <div class="form-group col-sm-12"> 
					                	<a href="JavaScript:void(0);" id="addmore_discount">
					                		<i class="fa fa-plus-circle"></i> Add More Photos
					                	</a> 
				               	  	</div>
        </div> 
       
        
        <div class="form-group col-sm-12">
        <div class="form-group col-sm-3">
         <div class="form-group col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:10px 5px;">
           <div class="form-group col-sm-12">
             <img  src="../assets/images/esp_3rdparty_1.jpg" class="img-responsive img-thumbnail" />
             </div>
           <div class="form-group col-sm-12">
<div class="col-md-6"><strong>Mango Cakes</strong></div>
<div class="col-md-6 text-right"><img src="../assets/images/edit_icon.png" /></div>
             </div>
           <div class="form-group col-sm-12">
             <div class="col-md-9"><div class="pull-left" style="width:15%;"><input type="checkbox" name="eventvenue_addressvisible" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;"></div> <div class="pull-left" style="width:85%;">Apply Promo</div> </div>
             <div class="col-md-3"><span style="color:#f00; font-size:18px;"><strong>$400</strong></span></div>
             </div>
         </div>
       </div>
       <div class="form-group col-sm-3">
         <div class="form-group col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:10px 5px;">
           <div class="form-group col-sm-12">
             <img  src="../assets/images/esp_3rdparty.jpg" class="img-responsive img-thumbnail" />
             </div>
           <div class="form-group col-sm-12">
<div class="col-md-6"><strong>Vanilla Cakes</strong></div>
<div class="col-md-6 text-right"><img src="../assets/images/edit_icon.png" /></div>
             </div>
           <div class="form-group col-sm-12">
             <div class="col-md-9"><div class="pull-left" style="width:15%;"><input type="checkbox" name="eventvenue_addressvisible" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;"></div> <div class="pull-left" style="width:85%;">Apply Promo</div> </div>
             <div class="col-md-3"><span style="color:#f00; font-size:18px;"><strong>$200</strong></span></div>
             </div>
         </div>
       </div>
       <div class="form-group col-sm-3">
         <div class="form-group col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:10px 5px;">
           <div class="form-group col-sm-12">
             <img  src="../assets/images/esp_3rdparty_1.jpg" class="img-responsive img-thumbnail" />
             </div>
           <div class="form-group col-sm-12">
<div class="col-md-6"><strong>Choco Cakes</strong></div>
<div class="col-md-6 text-right"><img src="../assets/images/edit_icon.png" /></div>
             </div>
           <div class="form-group col-sm-12">
             <div class="col-md-9"><div class="pull-left" style="width:15%;"><input type="checkbox" name="eventvenue_addressvisible" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;"></div> <div class="pull-left" style="width:85%;">Apply Promo</div> </div>
             <div class="col-md-3"><span style="color:#f00; font-size:18px;"><strong>$300</strong></span></div>
             </div>
         </div>
       </div>
       <div class="form-group col-sm-3">
         <div class="form-group col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:10px 5px;">
           <div class="form-group col-sm-12">
             <img  src="../assets/images/esp_3rdparty.jpg" class="img-responsive img-thumbnail" />
             </div>
           <div class="form-group col-sm-12">
<div class="col-md-6"><strong>Choco Cakes</strong></div>
<div class="col-md-6 text-right"><img src="../assets/images/edit_icon.png" /></div>
             </div>
           <div class="form-group col-sm-12">
             <div class="col-md-9"><div class="pull-left" style="width:15%;"><input type="checkbox" name="eventvenue_addressvisible" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;"></div> <div class="pull-left" style="width:85%;">Apply Promo</div> </div>
             <div class="col-md-3"><span style="color:#f00; font-size:18px;"><strong>$300</strong></span></div>
             </div>
         </div>
       </div>
        </div>
      </div>
      
      </div>
      <div class="col-md-12 col-sm-12" style="margin-bottom:25px;">
      <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
        <div class="col-md-9">
        <div class=" text-left" style="color:#333; padding-bottom:10px;">
              <strong style="font-size:17px;">Business Videos
              </strong>  </div>
              <div class="form-group col-sm-12">
			                      <label>Products/ Services Title</label>
			                      <input type="text" id="event_date" name="event_name" class="form-control">
                </div>
          <div class="form-group col-sm-12">
                      <label>Products/ Services Price</label>
                     <input type="text" id="event_date" name="event_date" class="form-control">
       </div>
       <div class="form-group col-sm-12">
						                      <div class="col-sm-12" style="background-color:#f9f9f9;">
						                        <label>Add Photos <strong style="color: red; font-size: 20px;"> * </strong></label>
						                        <label>Please browse to add photo</label>
						                        <div class="form-group" style="margin-bottom: 10px;"> 
							                        <div class="field" align="left">
							                         		<input type="button" class="btn btn-primary" value="Browse..." onclick="document.getElementById('files').click();">
							                         		<input type="file" style="display:none;" name="cover_img" id="files" class="file" accept="image/*" title="cover image">  
							                        </div> 
						                        </div>		                        
						                      </div>
                </div>
       <div class="form-group col-sm-12">
        <div class="pull-left" style="width:5%;"><input type="checkbox" name="eventvenue_addressvisible" style="width:15px; height:15px; background:white; border-radius:5px; border:2px solid #555;"></div> <div class="pull-left" style="width:95%;">Apply Promo</div> 
        </div>
       
       
        <div class="form-group col-sm-12"> 
					                	<a href="JavaScript:void(0);" id="addmore_discount">
					                		<i class="fa fa-plus-circle"></i> Add More Photos
					                	</a> 
				               	  	</div>
        </div> 
       
        
        <div class="form-group col-sm-12">
        <div class="form-group col-sm-3">
         <div class="form-group col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:10px 5px;">
           <div class="form-group col-sm-12">
             <img  src="../assets/images/esp_3rdparty_1.jpg" class="img-responsive img-thumbnail" />
             </div>
           <div class="form-group col-sm-12">
<div class="col-md-6"><strong>Mango Cakes</strong></div>
<div class="col-md-6 text-right"><img src="../assets/images/edit_icon.png" /></div>
             </div>
         
         </div>
       </div>
       <div class="form-group col-sm-3">
         <div class="form-group col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:10px 5px;">
           <div class="form-group col-sm-12">
             <img  src="../assets/images/esp_3rdparty.jpg" class="img-responsive img-thumbnail" />
             </div>
           <div class="form-group col-sm-12">
<div class="col-md-6"><strong>Vanilla Cakes</strong></div>
<div class="col-md-6 text-right"><img src="../assets/images/edit_icon.png" /></div>
             </div>
          
         </div>
       </div>
       <div class="form-group col-sm-3">
         <div class="form-group col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:10px 5px;">
           <div class="form-group col-sm-12">
             <img  src="../assets/images/esp_3rdparty_1.jpg" class="img-responsive img-thumbnail" />
             </div>
           <div class="form-group col-sm-12">
<div class="col-md-6"><strong>Choco Cakes</strong></div>
<div class="col-md-6 text-right"><img src="../assets/images/edit_icon.png" /></div>
             </div>
           
         </div>
       </div>
       <div class="form-group col-sm-3">
         <div class="form-group col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:10px 5px;">
           <div class="form-group col-sm-12">
             <img  src="../assets/images/esp_3rdparty.jpg" class="img-responsive img-thumbnail" />
             </div>
           <div class="form-group col-sm-12">
<div class="col-md-6"><strong>Choco Cakes</strong></div>
<div class="col-md-6 text-right"><img src="../assets/images/edit_icon.png" /></div>
             </div>
          
         </div>
       </div>
        </div>
      </div>
      
      </div>
      
      <div class="col-md-12 col-sm-12" style="margin-bottom:25px;">
      <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
        <div class="col-md-12"> <strong style="font-size:17px;">User Engagement
        </strong></div>
        <div class="col-md-3">
        <div class=" text-left" style="color:#333; padding-bottom:10px;">
                </div>
               <div class="form-group col-sm-12">
                      <label>Select Your Call To Action Button</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#fff;">
				                      <option value="0">Request Pricing</option>
				                      <option value="day1">Book Us</option>
				                      <option value="day2">Book an Appointment</option>
				                      
				                     
               	  </select>
       </div>
         
              
        </div> 
      <div class="col-md-9">
     
       <div class="form-group col-sm-6">
         <div class="row">
           <label>Select Your Customers Feedback Form</label>
         </div>
         <div class="row">
           <div class="pull-left" style="width:10%;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div> <div class="pull-left" style="width:80%;">
           <select name="event_totaldays" id="days" class="form-control" style="background-color:#fff;">
           <option selected="selected" class="option">What Event Are You Planning </option>
                 <option class="option">Wedding</option>
                 <option class="option">Birthday</option>
                 <option class="option">Anniversary</option>
                 <option class="option">Baby Shower</option>
                 <option class="option">Religiuos Event</option>
                 <option class="option">Holiday Party</option>
                 <option class="option">Corporate Event</option>
                 <option class="option">Political Event</option>
                 <option class="option">Social Event</option>
                 <option class="option">Baby Naming</option>
                 <option class="option">Team Outing</option>
                 <option class="option">Sales Event</option>
                 <option class="option">Product Launch Event</option>
                 <option class="option">Photo-File Show Event</option>
                 <option class="option">Bridal Showers</option>
                 <option class="option">Meeting</option>
                 <option class="option">Board Meeting</option>
                 <option class="option">Network Meeting</option>
                 <option class="option">Startup Event</option>
                 <option class="option">Group Workshop</option>
                 <option class="option">Kids Party</option>
                 <option class="option">Music Concert</option></select>
           </div> 
         </div>
         <div class="row">
           <div class="pull-left" style="width:10%; margin-top:7px;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div>
            <div class="pull-left" style="width:90%; margin-top:10px;">How Many People Are Attending</div> 
         </div>
         <div class="row">
           <div class="pull-left" style="width:10%; margin-top:7px;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div>
            <div class="pull-left" style="width:90%; margin-top:10px;">Event City</div> 
         </div>
         <div class="row">
           <div class="pull-left" style="width:10%; margin-top:7px;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div>
            <div class="pull-left" style="width:90%; margin-top:10px;">Event Date /Event Time</div> 
         </div>
         <div class="row">
           <div class="pull-left" style="width:10%; margin-top:7px;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div>
            <div class="pull-left" style="width:90%; margin-top:10px;">Enter Your Budget</div> 
         </div>
         
         
       </div>
       <div class="form-group col-sm-6">
         <div class="row">
           <label>Book Us</label>
         </div>
         
         <div class="row">
           <div class="pull-left" style="width:10%; margin-top:7px;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div>
            <div class="pull-left" style="width:90%; margin-top:10px;">Contact Person</div> 
         </div>
         <div class="row">
           <div class="pull-left" style="width:10%; margin-top:7px;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div>
            <div class="pull-left" style="width:90%; margin-top:10px;">Contact Email</div> 
         </div>
         <div class="row">
           <div class="pull-left" style="width:10%; margin-top:7px;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div>
            <div class="pull-left" style="width:90%; margin-top:10px;">Contact Phone</div> 
         </div>
         <div class="row">
           <div class="pull-left" style="width:10%; margin-top:7px;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div>
            <div class="pull-left" style="width:90%; margin-top:10px;">Comment</div> 
         </div>
         
         
       </div>
     
      </div>
      </div>
      </div>
      <div class="col-md-12 col-sm-12" style="margin-bottom:25px;">
      <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
        <div class="col-md-12"> <strong style="font-size:17px;">Promos &amp; Coupons
        </strong></div>

        
               <div class="form-group col-sm-12">
               <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td height="35"><span id="rtr-s-Text_106_0">Create </span><span id="rtr-s-Text_106_1">Promo Code</span></td>
      <td height="35" colspan="2" align="center">Discount Value</td>
      <td height="35">Usage Limit</td>
      <td height="35">Promo Runs From</td>
      <td height="35">Promo Runs To</td>
      <td height="35">Apply Promo</td>
    </tr>
    <tr>
      <td> <input type="text" id="event_date" name="event_name" class="form-control"></td>
      <td><select name="event_totaldays" id="days" class="form-control" style="background-color:#fff;"><option selected="selected" class="option">Euro</option>
           <option class="option">Dollars</option>
           <option class="option">Naira</option>
           <option class="option">Rupee</option>
           <option class="option">Pounds UK</option>
           <option class="option">Cedi Ghana</option></select></td>
      <td><input type="text" id="event_date" name="event_name" class="form-control"></td>
      <td><input type="text" id="event_date" name="event_name" class="form-control"></td>
      <td><input type="text" id="event_date" name="event_name" class="form-control"></td>
      <td><input type="text" id="event_date" name="event_name" class="form-control"></td>
      <td><select name="event_totaldays" id="days" class="form-control" style="background-color:#fff;"><option selected="selected" class="option">All Products </option>
           <option class="option">Vanilla Cake</option>
           <option class="option">Choco Cakes</option>
           <option class="option">Wedding Cakes</option>
           <option class="option">Birthday Cakes </option>
           <option class="option">Party Cakes </option></select></td>
    </tr>
    <tr>
      <td height="45" colspan="7" align="left" valign="bottom"><div class="pull-left" style="width:3%; margin-top:7px;"><input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"></div>
            <div class="pull-left" style="width:97%; margin-top:10px;">Generate A Coupon QR Code</div> </td>
      </tr>
  </tbody>
</table>
       
       </div>
         
              
        
      
      </div>
      </div>
      <div class="col-md-12 col-sm-12" style="margin-bottom:25px;">
      <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
        <div class="col-md-12"> <strong style="font-size:17px;">Create Your Business Search Coverage Areas And Search Keywords
        </strong></div>

        
               <div class='form-group col-sm-12'>

<div class='form-group col-sm-12' style="padding-top:15px; padding-bottom:5px; background-color:#f7ebf0; border-radius:5px;  margin-top:25px;  color:#e91e63; margin-bottom:15px!important;">
                     <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        
                        <div class="pull-left" style="width:21%; font-size:14px; margin-right:5px; color:#333;">Enter Your Business Coverage Areas</div>
                        <div class="pull-left" style="width:25%; font-size:14px; margin-right:15px;"><input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Houston"  /></div>
                        <div class="pull-left" style="width:11%; font-size:14px; margin-right:5px; color:#333;">Rank Client Base</div>
                        <div class="pull-left" style="width:20%; font-size:14px; margin-right:10px;">
                        <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
				                      <option class="option">1</option>
                 					  <option class="option">2</option>
                                      <option class="option">3</option>
                                      <option class="option">4</option>
                                      <option class="option">5</option>
                 </select></div>
                        <button type="button" class="btn-1 btn-next">Submit</button>
                        </div>
                        </div>
                    
                       
                </div>
                 <div class='form-group col-sm-12'>
                   <div class='form-group col-sm-12'>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">1 Houston, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">2 Sugarland <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">3 Katy, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">4 Chennai, India <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">5 Haris, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">6 Downtown, Texas <i class="fa fa-times"></i></div></div>
                  

                 </div>
                 
                 <div class='form-group col-sm-12'>
                 
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">7 Ranchester, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">8 SanAntonio <i class="fa fa-times"></i></div></div>

                 </div>
                 </div>
                <div class='form-group col-sm-12'>

<div class='form-group col-sm-12' style="padding-top:15px; padding-bottom:5px; background-color:#f7ebf0; color:#e91e63; border-radius:5px; margin-top:25px; margin-bottom:15px!important;">
                     <div class="form-group-1 col-sm-12" style="margin-bottom:15px;">
                        
                        <div class="pull-left" style="width:28%; font-size:14px; margin-right:5px; color:#333;"">Generate Your Business Search Keywords Here</div>
                        <div class="pull-left" style="width:36%; font-size:14px; margin-right:15px;"><input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Vanilla Cakes"  /></div>

                        
                        <button type="button" class="btn-1 btn-next">Submit</button>
                        </div>
                        </div>
                    
                       
                </div>
                <div class='form-group col-sm-12'>
                   <div class='form-group col-sm-12'>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">1 Vanilla Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">2 Wedding Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">3 Birthday Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">4 Speciality Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">5 Chocolate Cakes <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">6 Cup Cakes <i class="fa fa-times"></i></div></div>
                  

                 </div>
                 
                 <div class='form-group col-sm-12'>
                 
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">7 Ranchester, Texas <i class="fa fa-times"></i></div></div>
                   <div class="col-md-2"><div class="col-md-12 text-center" style="border:1px solid #ccc; border-radius:5px;">8 SanAntonio <i class="fa fa-times"></i></div></div>

                 </div>
                </div>
              
        
      
      </div>
      </div>
      <div class="col-md-12" style="margin-top:10px;">
        <div class="row text-center">
                  <button type="submit" class="btn btn-primary">Save All</button>
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

        
//personal self intro video size limitation

  // $(document).on("change", "#self_video", function(evt)
  //       {
  //           var file = this.files[0];

  //           if (file.size > 2621440)
  //            {
  //                  //Now Here I need to update <span> 
  //                $('#video_show1').hide();  
  //                alert('Filesize must 2.5MB or below');           
  //            }
  //       });

//personal profile self video submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#personal_update_video", function(e){
         e.preventDefault();     

         $.validator.addMethod('filesize', function(value, element, param) {
         return this.optional(element) || (element.files[0].size <= param) 
          });   
          
            $(this).validate({ 

                              rules: {                             
                                      self_video:{

                                        required:true,
                                        filesize: 2621440,   //max size 200 kb
                                      },               
                                     
                                     },

                              messages: {                           
                                      self_video: {                                         
                                         
                                          required:"Please Choose file.",
                                          filesize:" file size must be less than 2.5 MB.",
                                      }, 
                                     
                                      },                                                   
                            
                           }); 

    if($(this).valid())
        {     

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
           } 
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
