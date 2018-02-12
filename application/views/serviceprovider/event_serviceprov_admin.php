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
    <div class="timeline-cover"> <img class="cover-pic" src="http://localhost/wowhubb/assets/images/lily-1.jpg" style="background-size:cover; width:100%; margin-top:20px;" > <br>
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info"> <img  src="http://localhost/wowhubb/assets/images/lily-logo.png" class="profile-pic img-responsive profile-photo" /> </div>
          </div>
          <div class="col-md-9" >
            <div class="profile-info-1"> </div>
            <ul class="list-inline profile-menu">
              <li><a href="#">Venue Overview</a></li>
              <li><a href="#" class="active">Notifications</a></li>
              <li><a href="#">Products &amp; Services</a></li>
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
            <li><a href="timeline-friends.html">Promote Your Venue</a></li>
            <li><a href="timeline-friends.html">Reviews</a></li>
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
            <div class="tab-content ">
              <div class="tab-pane active" id="1" style="margin-top: 20px;">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-wizard col-md-12">
                      <div class="edit-profile-container">
                        <div class="block-title"> </div>
                        <div class="edit-block" style="margin-bottom: 0px;">
                          <div class="row">
                            <div class="col-md-12" style="font-size:15px;">
                              <div class="tabbable tabs-left">
                                <div class="col-md-2">
                                  <ul class="nav nav-tabs">
                                    <li style="width:100%;" class="active"><a href="#b1" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">
                                      <div class="row">
                                        <div class="col-md-12 text-center" style="margin-bottom:15px;"><strong>Venue Inquiry</strong></div>
                                        <div class="col-md-6"><img src="http://localhost/wowhubb/assets/images/em.png" class="img-circle img-thumbnail"><br>
                                          <span style="font-size:11px;"><strong>Daniells</strong></span></div>
                                        <div class="col-md-6" style="margin-top:5px;"><span style="font-size:11px;">01/01/2018 9:00PM</span></div>
                                        <div class="col-md-12" style="margin-top:5px;">
                                          <p style="font-size:12px;">Lorem Ipsum is simply dummy text.. </p>
                                        </div>
                                      </div>
                                      </a></li>
                                    <li style="width:100%;"><a href="#b" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">
                                      <div class="row">
                                        <div class="col-md-12 text-center" style="margin-bottom:15px;"><strong>Venue Inquiry</strong></div>
                                        <div class="col-md-6"><img src="http://localhost/wowhubb/assets/images/td.png" class="img-circle img-thumbnail"><br>
                                          <span style="font-size:11px;"><strong>TD Jakes</strong></span></div>
                                        <div class="col-md-6" style="margin-top:5px;"><span style="font-size:11px;">01/01/2018 9:00PM</span></div>
                                        <div class="col-md-12" style="margin-top:5px;">
                                          <p style="font-size:12px;">Lorem Ipsum is simply dummy text.. </p>
                                        </div>
                                      </div>
                                    </a> </li>
                                    <li style="width:100%;"><a href="#c" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">
                                      <div class="row">
                                        <div class="col-md-12 text-center" style="margin-bottom:15px;"><strong>Venue Inquiry</strong></div>
                                        <div class="col-md-6"><img src="http://localhost/wowhubb/assets/images/em.png" class="img-circle img-thumbnail"><br>
                                          <span style="font-size:11px;"><strong>Daniells</strong></span></div>
                                        <div class="col-md-6" style="margin-top:5px;"><span style="font-size:11px;">01/01/2018 9:00PM</span></div>
                                        <div class="col-md-12" style="margin-top:5px;">
                                          <p style="font-size:12px;">Lorem Ipsum is simply dummy text.. </p>
                                        </div>
                                      </div>
                                      </a></li>
                                    <li style="width:100%;"><a href="#d" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">
                                      <div class="row">
                                        <div class="col-md-12 text-center" style="margin-bottom:15px;"><strong>Venue Inquiry</strong></div>
                                        <div class="col-md-6"><img src="http://localhost/wowhubb/assets/images/td.png" class="img-circle img-thumbnail"><br>
                                          <span style="font-size:11px;"><strong>TD Jakes</strong></span></div>
                                        <div class="col-md-6" style="margin-top:5px;"><span style="font-size:11px;">01/01/2018 9:00PM</span></div>
                                        <div class="col-md-12" style="margin-top:5px;">
                                          <p style="font-size:12px;">Lorem Ipsum is simply dummy text.. </p>
                                        </div>
                                      </div>
                                    </a> </li>
                                    
                                  </ul>
                                </div>
                                
                                <!-- overview tab for personal  -->
                                
                                <div class="tab-content">

                                    <h4 style="margin-left:205px;">Inquiry Notifications &nbsp;&nbsp;<span><a href="#" style="font-size:15px; color:#0066E0;">Book a Request</a></span></h4>
                                  
                                  <div class="tab-pane active" id="b1">
                                    <div class="col-md-10">
                                      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:12px;">
                                        <tbody>
                                          <tr>
                                            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                  <tr>
                                                    <td width="23%" rowspan="2" align="center" valign="top" bgcolor="#F7F7F7"><img src="http://localhost/wowhubb/assets/images/em.png" class="img-circle img-thumbnail"><br>
                                                      <span style="font-size:12px;">Tony Daniel</span></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event Type</strong><br></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event City<br>
                                                      </strong></td>
                                                    <td width="7%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event Attendee #</strong><br></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong># Of Event Days</strong><br></td>
                                                    <td width="26%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Prefered Meeting Date</strong><br></td>
                                                    <td width="20%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Preferred Time</strong><br></td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top"> Wedding</td>
                                                    <td align="center" valign="top">Houston </td>
                                                    <td align="center" valign="top"> 150 People</td>
                                                    <td align="center" valign="top"> 1 Day</td>
                                                    <td align="center" valign="top"> October/31/2018<br>
                                                      <em style="font-size:10px;">Accepts Flexible Date Options</em></td>
                                                    <td align="center" valign="top"> 10:00AM-4:30PM</td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top" bgcolor="#F7F7F7"><strong>Contact Info</strong><br></td>
                                                    <td align="center" valign="top" bgcolor="#F7F7F7"><strong>Email</strong><br></td>
                                                    <td colspan="5" rowspan="2" align="center" valign="top" bgcolor="#F7F7F7"><strong>Comments</strong><br>                                                      Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu </td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top">555-555-5555</td>
                                                    <td align="center" valign="top">tdaniel@gmail.com</td>
                                                  </tr>
                                                </tbody>
                                            </table></td>
                                            <td align="left" valign="top"><strong>Send A Reply</strong>
                                              <textarea type='text' id="description" name="event_description"  class="form-control" style="min-height:100px; font-size:12px;" placeholder="Comments " ></textarea>
                                              <div class="col-md-12">
                                                <div class="pull-left" style="width:20%;">
                                                  <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                                                </div>
                                                <div class="pull-left" style="width:80%; font-size:11px; margin-bottom:15px;"> &nbsp;Send a Copy To Receiver Email</div>
                                                <button class="btn-primary">Send</button>
                                              </div></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">&nbsp;</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  <!-- personal overview model popup --> 
                                  
                                  <!-- about me tab for personal  -->
                                  
                                  <div class="tab-pane" id="b">
                                    <div class="col-md-10">
                                      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:12px;">
                                        <tbody>
                                          <tr>
                                            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                  <tr>
                                                    <td width="23%" rowspan="2" align="center" valign="top" bgcolor="#F7F7F7"><img src="http://localhost/wowhubb/assets/images/td.png" class="img-circle img-thumbnail"><br>
                                                      <span style="font-size:12px;">TD Jakes</span></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event Type</strong><br></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event City<br>
                                                      </strong></td>
                                                    <td width="7%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event Attendee #</strong><br></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong># Of Event Days</strong><br></td>
                                                    <td width="26%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Prefered Meeting Date</strong><br></td>
                                                    <td width="20%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Preferred Time</strong><br></td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top">Birthday</td>
                                                    <td align="center" valign="top">Texas </td>
                                                    <td align="center" valign="top"> 200 People</td>
                                                    <td align="center" valign="top"> 2 Days</td>
                                                    <td align="center" valign="top"> Decemeber/31/2018<br>
                                                      <em style="font-size:10px;">Accepts Flexible Date Options</em></td>
                                                    <td align="center" valign="top"> 11:00AM-4:30PM</td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top" bgcolor="#F7F7F7"><strong>Contact Info</strong><br></td>
                                                    <td align="center" valign="top" bgcolor="#F7F7F7"><strong>Email</strong><br></td>
                                                    <td colspan="5" rowspan="2" align="center" valign="top" bgcolor="#F7F7F7"><strong>Comments</strong><br>                                                      Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu </td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top">456-777-8596</td>
                                                    <td align="center" valign="top">tdjakes@gmail.com</td>
                                                  </tr>
                                                </tbody>
                                            </table></td>
                                            <td align="left" valign="top"><strong>Send A Reply</strong>
                                              <textarea type='text' id="description" name="event_description"  class="form-control" style="min-height:100px; font-size:12px;" placeholder="Comments " ></textarea>
                                              <div class="col-md-12">
                                                <div class="pull-left" style="width:20%;">
                                                  <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                                                </div>
                                                <div class="pull-left" style="width:80%; font-size:11px; margin-bottom:15px;"> &nbsp;Send a Copy To Receiver Email</div>
                                                <button class="btn-primary">Send</button>
                                              </div></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">&nbsp;</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  
                                  <!-- personal aboutme model popup -->
                                  
                                  <div class="tab-pane" id="c">
                                    <div class="col-md-10">
                                      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:12px;">
                                        <tbody>
                                          <tr>
                                            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                  <tr>
                                                    <td width="23%" rowspan="2" align="center" valign="top" bgcolor="#F7F7F7"><img src="http://localhost/wowhubb/assets/images/em.png" class="img-circle img-thumbnail"><br>
                                                      <span style="font-size:12px;">Tony Daniel</span></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event Type</strong><br></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event City<br>
                                                      </strong></td>
                                                    <td width="7%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event Attendee #</strong><br></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong># Of Event Days</strong><br></td>
                                                    <td width="26%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Prefered Meeting Date</strong><br></td>
                                                    <td width="20%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Preferred Time</strong><br></td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top"> Wedding</td>
                                                    <td align="center" valign="top">Houston </td>
                                                    <td align="center" valign="top"> 150 People</td>
                                                    <td align="center" valign="top"> 1 Day</td>
                                                    <td align="center" valign="top"> October/31/2018<br>
                                                      <em style="font-size:10px;">Accepts Flexible Date Options</em></td>
                                                    <td align="center" valign="top"> 10:00AM-4:30PM</td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top" bgcolor="#F7F7F7"><strong>Contact Info</strong><br></td>
                                                    <td align="center" valign="top" bgcolor="#F7F7F7"><strong>Email</strong><br></td>
                                                    <td colspan="5" rowspan="2" align="center" valign="top" bgcolor="#F7F7F7"><strong>Comments</strong><br>                                                      Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu </td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top">555-555-5555</td>
                                                    <td align="center" valign="top">tdaniel@gmail.com</td>
                                                  </tr>
                                                </tbody>
                                            </table></td>
                                            <td align="left" valign="top"><strong>Send A Reply</strong>
                                              <textarea type='text' id="description" name="event_description"  class="form-control" style="min-height:100px; font-size:12px;" placeholder="Comments " ></textarea>
                                              <div class="col-md-12">
                                                <div class="pull-left" style="width:20%;">
                                                  <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                                                </div>
                                                <div class="pull-left" style="width:80%; font-size:11px; margin-bottom:15px;"> &nbsp;Send a Copy To Receiver Email</div>
                                                <button class="btn-primary">Send</button>
                                              </div></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">&nbsp;</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  
                                  <!-- contact info tab for personal  -->
                                  
                                  <div class="tab-pane" id="d">
                                    <div class="col-md-10">
                                      <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="font-size:12px;">
                                        <tbody>
                                          <tr>
                                            <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                  <tr>
                                                    <td width="23%" rowspan="2" align="center" valign="top" bgcolor="#F7F7F7"><img src="http://localhost/wowhubb/assets/images/td.png" class="img-circle img-thumbnail"><br>
                                                      <span style="font-size:12px;">TD Jakes</span></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event Type</strong><br></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event City<br>
                                                      </strong></td>
                                                    <td width="7%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Event Attendee #</strong><br></td>
                                                    <td width="8%" align="center" valign="top" bgcolor="#F7F7F7"><strong># Of Event Days</strong><br></td>
                                                    <td width="26%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Prefered Meeting Date</strong><br></td>
                                                    <td width="20%" align="center" valign="top" bgcolor="#F7F7F7"><strong>Preferred Time</strong><br></td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top">Birthday</td>
                                                    <td align="center" valign="top">Texas </td>
                                                    <td align="center" valign="top"> 200 People</td>
                                                    <td align="center" valign="top"> 2 Days</td>
                                                    <td align="center" valign="top"> Decemeber/31/2018<br>
                                                      <em style="font-size:10px;">Accepts Flexible Date Options</em></td>
                                                    <td align="center" valign="top"> 11:00AM-4:30PM</td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top" bgcolor="#F7F7F7"><strong>Contact Info</strong><br></td>
                                                    <td align="center" valign="top" bgcolor="#F7F7F7"><strong>Email</strong><br></td>
                                                    <td colspan="5" rowspan="2" align="center" valign="top" bgcolor="#F7F7F7"><strong>Comments</strong><br>                                                      Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu </td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" valign="top">456-777-8596</td>
                                                    <td align="center" valign="top">tdjakes@gmail.com</td>
                                                  </tr>
                                                </tbody>
                                            </table></td>
                                            <td align="left" valign="top"><strong>Send A Reply</strong>
                                              <textarea type='text' id="description" name="event_description"  class="form-control" style="min-height:100px; font-size:12px;" placeholder="Comments " ></textarea>
                                              <div class="col-md-12">
                                                <div class="pull-left" style="width:20%;">
                                                  <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                                                </div>
                                                <div class="pull-left" style="width:80%; font-size:11px; margin-bottom:15px;"> &nbsp;Send a Copy To Receiver Email</div>
                                                <button class="btn-primary">Send</button>
                                              </div></td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">&nbsp;</td>
                                          </tr>
                                          <tr>
                                            <td colspan="2">&nbsp;</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                  </div>
                                  
                                  <!-- contact info personal model popup --> 
                                  
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
              <!-- Day 2 --> 
              
              <!-- professional tab start here  --> 
              
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
