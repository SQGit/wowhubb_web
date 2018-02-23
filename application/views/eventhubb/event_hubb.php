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
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

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
table {
	border-spacing: 5px;
}
td {
	padding: 5px 0 0 5px;
}
.nav>li>a:focus, .nav>li>a:hover {
	text-decoration: none;
	background-color: #ddd;
	color: #e91e63;
}
.nav-tabs>li {
	float: left;
	margin-bottom: -1px;
	width: 20%;
}
.nav-tabs>li>a {
	margin-right: 2px;
	line-height: 1.42857143;
	border: 1px solid transparent;
	border-radius: 4px 4px 0 0;
	font-size: 15px;
	text-align: center;
	color: #e91e63;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus {
	color: #e91e63;
	cursor: default;
	background-color: transparent;
	border: 1px solid #ddd;
	border-bottom-color: transparent;
}
.nav-tabs>li.active>a:hover {
	color: #e91e63;
	cursor: default;
	background-color: #ddd;
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
/*******************************
* Does not work properly if "in" is added after "collapse".
* Get free snippets on bootpen.com
*******************************/
.panel-group .panel {
	border-radius: 0;
	box-shadow: none;
	border-color: #EEEEEE;
}
.panel-default > .panel-heading {
	padding: 0;
	border-radius: 0;
	color: #212121;
	background-color: #FAFAFA;
	border-color: #EEEEEE;
}
.panel-title {
	font-size: 14px;
}
.panel-title > a {
	display: block;
	padding: 15px;
	text-decoration: none;
}
.more-less {
	float: right;
	color: #212121;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
	border-top-color: #EEEEEE;
}
/* ----- v CAN BE DELETED v ----- */
body {
	background-color: #26a69a;
}
.demo {
	padding-top: 60px;
	padding-bottom: 60px;
}
.clr {
	background: #fc6653;
	color: #3d7489;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
}
.pnl-brdr-clr {
	margin-top: 10px;
	border: 1px solid #e3e3e3;
	padding-top: 15px;
	padding-bottom: 15px;
	border-radius: 5px;
}

.form-body-classic .btn-1 {
    min-width: 105px;
    height: 30px;
    margin: 0;
    padding: 0 20px;
    border: 1px solid #ccc;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 14px;
    font-weight: bold;
    line-height: 30px;
    color: #333;
    background-color: #D7D7D7;
    -moz-border-radius: 30px;
    -webkit-border-radius: 30px;
    border-radius: 30px;
    text-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}

@media (min-width: 1366px)
{
.modal-lg {
    width: 1000px;
}
}
/*bootbox model popup */
@media (min-width: 768px)  
{
.modal-dialog {
    width: 600px;
    margin: 200px auto;
}
}
.form-wizard img 
{ max-width: 100%!important;
  height: 152px!important;
 }
 #calendar {
    width: 100%;
    margin: 0 auto;
  }

</style>
<link href="<?php echo base_url ('assets/css/fullcalendar.min.css') ?>" rel='stylesheet' />
<link href="<?php echo base_url ('assets/css/fullcalendar.print.min.css') ?>" rel='stylesheet' media='print' />

</head>
<body>

<!-- Header
    ================================================= -->
<header id="header">
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container"> 
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"> <img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span> </a> <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span> </a> <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span> </a>
        </ul>
        <form class="navbar-form navbar-right hidden-sm">
          <div class="form-group"> <i class="icon ion-android-search"></i>
            <input type="text" class="form-control" placeholder="Search !Events, !Venues, !Wowtags, !People">
          </div>
        </form>
      </div>
    </div>
  </nav>
</header>
<!--Header End-->

<div class="container">
  <div class="timeline-cover-event-details" style="position: relative; max-height:320px;"> <img src="../assets/images/eventhubb.jpg" style="background-size:cover; width:100%; max-height:300px;">
    <div class="timeline-nav-bar hidden-sm hidden-xs">
      <div class="row">
        <div class="col-md-3">
          <div class="profile-info" style="top:-5px!important;">
            <h3 style="color:#fff;"> Eventhubb </h3>
          </div>
        </div>
        <div class="col-md-9 text-right" style="margin-top:5px;">
          <ul class="follow-me list-inline">
            <li style="font-size:18px;"><img src="../assets/images/create-event-icon-3.png"> Calendarize Your Events </li>
          </ul>
        </div>
      </div>
    </div>
    <!--Timeline Menu for Large Screens End--> 
  </div>
  <div id="page-contents" class="row" style="background-color:#FFFFFF; margin-top:15px;">
    <div class="col-md-12"> 
      <!-- Nav tabs category -->
      <ul class="nav nav-tabs faq-cat-tabs">
        <li class="active"><a href="#faq-cat-1" data-toggle="tab" class="text-center" style="font-size:18px; font-weight:bold;">Hosting</a></li>
        <li><a href="#faq-cat-2" data-toggle="tab" class="text-center" style="font-size:18px; font-weight:bold;">My Invites</a></li>
        <li><a href="#faq-cat-3" data-toggle="tab" class="text-center" style="font-size:18px; font-weight:bold;">Past Events</a></li>
        <li><a href="#faq-cat-4" data-toggle="tab" class="text-center" style="font-size:18px; font-weight:bold;">Event Organizer</a></li>
        <li><a href="#faq-cat-41" data-toggle="tab" class="text-center" style="font-size:18px; font-weight:bold;">Calendar Events</a></li>
      </ul>
      <div class="tab-content faq-cat-content">
        <div class="tab-pane active in fade" id="faq-cat-1">
          <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:20px;">
            <h4 style="color:#fff; line-height:30px;">Event Hubb<br>
              <span style="font-size:28px;">Hosting Details</span></h4>
          </div>
          <ul class="nav nav-tabs faq-cat-tabs">
            <li class="active"><a href="#faq-cat-5" data-toggle="tab" class="text-center" style="line-height:16px; font-size:14px; color:#333;">Personal/ Private Events</a></li>
            <li><a href="#faq-cat-6" data-toggle="tab" class="text-center" style="line-height:16px; font-size:14px; color:#333;">Open Social Events</a></li>
            <li><a href="#faq-cat-7" data-toggle="tab" class="text-center" style="line-height:16px; font-size:14px; color:#333;">Professional Events</a></li>
            <li><a href="#faq-cat-8" data-toggle="tab" class="text-center" style="line-height:16px; font-size:14px; color:#333;">Business Events</a></li>
            <li><a href="#faq-cat-9" data-toggle="tab" class="text-center" style="line-height:16px; font-size:14px; color:#333;">Event Draft</a></li>
          </ul>

          <div class="tab-content faq-cat-content">
            <div class="tab-pane active in fade" id="faq-cat-5">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pnl-brdr-clr">
                <tbody>
                  <tr style="font-size:16px;">
                    <td height="40" bgcolor="#f9f9f9"><strong>Event Category</strong></td>
                    <td width="18%" bgcolor="#f9f9f9"><strong>Venue</strong></td>
                    <td width="9%" bgcolor="#f9f9f9"><strong>Attending</strong></td>
                    <td width="19%" bgcolor="#f9f9f9"><strong>Edit Event</strong></td>
                    <td width="20%" bgcolor="#f9f9f9"><strong>Send Event Notification</strong></td>
                    <td width="13%" bgcolor="#f9f9f9"><strong>Event Organizer</strong></td>
                    <td width="7%" height="40" bgcolor="#f9f9f9"><strong>Delete </strong></td>
                  </tr>

                    <?php 
                          foreach ($eventhubbfeed as $feeds) 
                          {
                            
                            if($feeds->eventtype == 'personal_event')
                            {
                          
                    ?>

                  <tr>
                        <td width="14%" height="40" rowspan="2" align="left" valign="top" bgcolor="#fff"><div><img src="http://104.197.80.225:3010/wow/media/event/<?php echo $feeds->coverpage; ?>" class="img-responsive img-thumbnail" alt=""></div>
                          <strong style="font-size:16px; color:#fc6653;">
                            <?php if(isset($feeds->eventtitle)) { echo $feeds->eventtitle; } else{ echo "";} ?>
                              
                            </strong>
                        </td>

                        <td rowspan="2" align="left" valign="top" bgcolor="#fff">
                          <strong>
                                    <?php

                                       $i=0;

                                        foreach ($feeds->eventvenue as $eventvenues)
                                         {
                                              if($i==0 && $eventvenues->eventvenuenumber == "1" )
                                              {
                                                if(isset($eventvenues->eventvenuecity))
                                                {
                                                  echo   $eventvenues->eventvenuename.", ".$eventvenues->eventvenuecity.", ".$eventvenues->eventvenueaddress1.", ".$eventvenues->eventvenuezipcode;
                                                }
                                              }  
                                              $i++;                             
                                          }                                    
                                    ?>
                            </strong>
                        </td>

                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff">
                      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td height="30" align="center" valign="middle"><strong style="font-size:16px;">RSVP</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="font-size:22px; color:#FF7600;">150</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><a href="#" data-toggle="modal" data-target=".modal-1" >Invites List</a></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                           
                              <td width="82%" height="20">
                                <form action="<?php echo base_url('eventhubb/get_eventdetails'); ?>" id="event_details" method="POST"> 
                                  <!-- <a href="#modal-eventdetails" data-toggle="modal" data-id='<?php echo $feeds->_id; ?>'>  -->
                                    <strong>
                                      <a href="#">
                                     <textarea style= "display: none;"  name="details"><?= json_encode($feeds); ?>
                                     </textarea>
                                      <!-- <input type="text" name="userid" value="<?php echo $feeds->_id; ?>" > -->
                                     <input type="submit" style="border: none; background: transparent;" value="Event Details">                            
                                     </a></strong>
                                </form>
                              </td>
                            <td width="18%" height="20"><a href="#"><img src="../assets/images/edit_icon.png" alt=""></a></td>
                          </tr>
                          <tr>
                            <td height="20">
                              <strong>
                                <a href="#">
                                  <form action="<?php echo base_url('eventhubb/get_eventwowtag'); ?>" id="event_details" method="POST">
                                     <textarea style= "display: none;"  name="details"><?= json_encode($feeds); ?>
                                     </textarea>
                                      <input type="submit" style="border: none; background: transparent;" value="Event Wowtag">
                                  </form>
                               
                                </a>
                              </strong>
                            </td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20">
                              <strong>
                                <a href="#">
                                    <form action="<?php echo base_url('eventhubb/get_eventvenue'); ?>" id="event_details" method="POST">
                                       <textarea style= "display: none;" name="details"><?= json_encode($feeds); ?>
                                       </textarea>
                                        <input type="submit" style="border: none; background: transparent;" value="Event Venue">
                                    </form>
                                </a>
                              </strong>
                            </td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20"><strong><a href="#">Event Schedule</a></strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20">
                              <strong>
                                <a href="#">
                                    <form action="<?php echo base_url('eventhubb/get_eventhighlight'); ?>" id="event_details" method="POST">
                                       <textarea style="display: none;" name="details"><?= json_encode($feeds); ?>
                                       </textarea>
                                        <input type="submit" style="border: none; background: transparent;" value="Event Highlights">
                                    </form>                               
                                </a>
                              </strong>
                            </td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20">
                              <strong>
                              <a href="#">
                                    <form action="<?php echo base_url('eventhubb/get_eventcontact'); ?>" id="event_details" method="POST">
                                       <textarea style= "display: none;" name="details"><?= json_encode($feeds); ?>
                                       </textarea>
                                        <input type="submit" style="border: none; background: transparent;" value="Event  Contacts /URLs">
                                    </form>                             
                              </a>
                            </strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td align="left" valign="top" bgcolor="#fff">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="left" valign="top" bgcolor="#f9f9f9"><select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                                <option value="day1">Send Invite Notification</option>
                                <option value="day1">Send Group Notification</option>
                              </select></td>
                          </tr>
                          <tr>
                            <td><textarea type="text" id="description" name="event_description" class="form-control" style="min-height:90px; font-size:13px;" placeholder="Describe What Your Event Is All About "></textarea></td>
                          </tr>
                          <tr>
                            <td><input type="submit" class="btn-primary" value="Send"></td>
                          </tr>
                        </tbody>
                      </table></td>
                        <td rowspan="2" align="center" valign="top" bgcolor="#fff">
                          <a href="#">
                            <img src="../assets/images/create-event-icon-2.png" alt=""> <br>
                          Event Service Provider 
                        </a>
                      </td>

                      <td height="40" rowspan="2" align="center" valign="top" bgcolor="#fff">
                        <form class="delete_event" action="<?php echo base_url('eventhubb/delete_event'); ?>" method="POST" >
                          <input type="hidden" name="event_id" value="<?php echo $feeds->_id; ?>">
                          <input type="submit" class="btn-primary" value="Delete Event">
                        </form>
                      </td>

                  </tr>

                   <tr>
                    <td align="left" valign="top" bgcolor="#fff">&nbsp;</td>
                  </tr>                               
                              
                  <?php } } ?>              

                  
              </tbody>
              </table>
            </div>


            <div class="tab-pane fade" id="faq-cat-6">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pnl-brdr-clr">
                <tbody>
                  <tr style="font-size:16px;">
                    <td height="40" bgcolor="#f9f9f9"><strong>Event Category</strong></td>
                    <td width="16%" bgcolor="#f9f9f9"><strong>Venue</strong></td>
                    <td width="16%" bgcolor="#f9f9f9"><strong>Attending</strong></td>
                    <td width="13%" bgcolor="#f9f9f9"><strong>Edit Event</strong></td>
                    <td width="24%" bgcolor="#f9f9f9"><strong>Send Event Notification</strong></td>
                    <td width="15%" height="40" bgcolor="#f9f9f9"><strong>Advertise Your Event </strong></td>
                  </tr>
                  <tr>
                    <td width="16%" height="40" rowspan="2" align="left" valign="top" bgcolor="#fff"><div><img src="../assets/images/post-images/15.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Summer 2017</strong><br>
                      Seminar/ Conferences</td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><strong>Grace Convection Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                      09:00 AM</td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td height="30"><strong>Registered</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="font-size:22px; color:#FF7600;">1500</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><a href="#" data-toggle="modal" data-target=".modal-2" >Invites List</a></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td width="82%" height="20"><strong>Event Details</strong></td>
                            <td width="18%" height="20"><a href="#"><img src="../assets/images/edit_icon.png" alt=""></a></td>
                          </tr>
                          <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20" colspan="2"><a href="#"><img src="../assets/images/delete-icon.png" alt="" width="18" height="18"> Delete Event</a></td>
                          </tr>
                          <tr>
                            <td height="20"></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="left" valign="top" bgcolor="#f9f9f9"><select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                                <option value="day1">Send Invite Notification</option>
                                <option value="day1">Send General Notification</option>
                              </select></td>
                          </tr>
                          <tr>
                            <td><textarea type="text" id="description" name="event_description" class="form-control" style="min-height:90px; font-size:13px;" placeholder="Type Something "></textarea></td>
                          </tr>
                          <tr>
                            <td><input type="submit" class="btn-primary" value="Send"></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff">
                    <div class="form-group col-sm-12" style="font-size: 15px;">
                      <label>Select Country</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                        <option value="day1">Country</option>
                        <option value="day2">Afghanistan</option>
                        <option value="day3">Albania</option>
                        <option value="day4">Algeria</option>
                        <option value="day5">American Somoa</option>
                        <option value="day6">Angola</option>
                        <option value="day7">Antartica</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <div class="pull-left" style="width:25%;">
                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:75%;"> Wowhubb Network</div>
                    </div>
                      <div class="col-md-12" style="margin-bottom:10px;">
                        <div class="pull-left" style="width:25%;">
                          <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                        </div>
                        <div class="pull-left" style="width:75%;">Specific Target Group</div>
                      </div>
                      <input type="submit" class="btn-primary" style="background-color:#535353;" value="Create Your Event Ads">
                      </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" bgcolor="#fff">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="16%" height="40" rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><div><img src="../assets/images/post-images/16.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Fabulous events</strong><br>
                      Meeting</td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><strong>Grace Convection Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                      09:00 AM</td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td height="30"><strong>Registered</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="font-size:22px; color:#FF7600;">1000</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><a href="#" data-toggle="modal" data-target=".modal-2" >Invites List</a></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#f9f9f9">
                      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td width="82%" height="20"><strong>Event Details</strong></td>
                            <td width="18%" height="20"><a href="#"><img src="../assets/images/edit_icon.png" alt=""></a></td>
                          </tr>
                          <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20" colspan="2"><a href="#"><img src="../assets/images/delete-icon.png" alt="" width="18" height="18"> Delete Event</a></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="left" valign="top" bgcolor="#f9f9f9"><select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                                <option value="day1">Send Invite Notification</option>
                                <option value="day1">Send General Notification</option>
                              </select></td>
                          </tr>
                          <tr>
                            <td><textarea type="text" id="description" name="event_description" class="form-control" style="min-height:90px; font-size:13px;" placeholder="Type Something"></textarea></td>
                          </tr>
                          <tr>
                            <td><input type="submit" class="btn-primary" value="Send"></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff">
                    <div class="form-group col-sm-12" style="font-size: 15px;">
                      <label>Select Country</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                        <option value="day1">Country</option>
                        <option value="day2">Afghanistan</option>
                        <option value="day3">Albania</option>
                        <option value="day4">Algeria</option>
                        <option value="day5">American Somoa</option>
                        <option value="day6">Angola</option>
                        <option value="day7">Antartica</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <div class="pull-left" style="width:25%;">
                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:75%;"> Wowhubb Network</div>
                    </div>
                      <div class="col-md-12" style="margin-bottom:10px;">
                        <div class="pull-left" style="width:25%;">
                          <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                        </div>
                        <div class="pull-left" style="width:75%;">Specific Target Group</div>
                      </div>
                      
                        <input type="submit" class="btn-primary" style="background-color:#535353;" value="Create Your Event Ads">
                      
                      </td>
                      
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="tab-pane fade" id="faq-cat-7"> 
            
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pnl-brdr-clr">
                <tbody>
                  <tr style="font-size:16px;">
                    <td height="40" bgcolor="#f9f9f9"><strong>Event Category</strong></td>
                    <td width="16%" bgcolor="#f9f9f9"><strong>Venue</strong></td>
                    <td width="16%" bgcolor="#f9f9f9"><strong>Attending</strong></td>
                    <td width="13%" bgcolor="#f9f9f9"><strong>Edit Event</strong></td>
                    <td width="24%" bgcolor="#f9f9f9"><strong>Send Event Notification</strong></td>
                    <td width="15%" height="40" bgcolor="#f9f9f9"><strong>Advertise Your Event </strong></td>
                  </tr>
                  <tr>
                    <td width="16%" height="40" rowspan="2" align="left" valign="top" bgcolor="#fff"><div><img src="../assets/images/post-images/5.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Worship Explosion</strong><br>
                      Music Program</td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><strong>Grace Convection Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                      09:00 AM</td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td height="30"><strong>Registered</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="font-size:22px; color:#FF7600;">1500</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><a href="#">Invites List</a></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td width="82%" height="20"><strong>Event Details</strong></td>
                            <td width="18%" height="20"><a href="#"><img src="../assets/images/edit_icon.png" alt=""></a></td>
                          </tr>
                          <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20" colspan="2"><a href="#"><img src="../assets/images/delete-icon.png" alt="" width="18" height="18"> Delete Event</a></td>
                          </tr>
                          <tr>
                            <td height="20"></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="left" valign="top" bgcolor="#f9f9f9"><select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                                <option value="day1">Send Invite Notification</option>
                                <option value="day1">Send General Notification</option>
                              </select></td>
                          </tr>
                          <tr>
                            <td><textarea type="text" id="description" name="event_description" class="form-control" style="min-height:90px; font-size:13px;" placeholder="Type Something "></textarea></td>
                          </tr>
                          <tr>
                            <td><input type="submit" class="btn-primary" value="Send"></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff">
                    <div class="form-group col-sm-12" style="font-size: 15px;">
                      <label>Select Country</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                        <option value="day1">Country</option>
                        <option value="day2">Afghanistan</option>
                        <option value="day3">Albania</option>
                        <option value="day4">Algeria</option>
                        <option value="day5">American Somoa</option>
                        <option value="day6">Angola</option>
                        <option value="day7">Antartica</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <div class="pull-left" style="width:25%;">
                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:75%;"> Wowhubb Network</div>
                    </div>
                      <div class="col-md-12" style="margin-bottom:10px;">
                        <div class="pull-left" style="width:25%;">
                          <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                        </div>
                        <div class="pull-left" style="width:75%;">Specific Target Group</div>
                      </div>
                      <input type="submit" class="btn-primary" style="background-color:#535353;" value="Create Your Event Ads">
                      </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" bgcolor="#fff">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="16%" height="40" rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><div><img src="../assets/images/post-images/6.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Excellent 3PM</strong><br>
                      Convention/ Meeting</td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><strong>Grace Convection Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                      09:00 AM</td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td height="30"><strong>Registered</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="font-size:22px; color:#FF7600;">1000</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><a href="#">Invites List</a></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td width="82%" height="20"><strong>Event Details</strong></td>
                            <td width="18%" height="20"><a href="#"><img src="../assets/images/edit_icon.png" alt=""></a></td>
                          </tr>
                          <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20" colspan="2"><a href="#"><img src="../assets/images/delete-icon.png" alt="" width="18" height="18"> Delete Event</a></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="left" valign="top" bgcolor="#f9f9f9"><select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                                <option value="day1">Send Invite Notification</option>
                                <option value="day1">Send General Notification</option>
                              </select></td>
                          </tr>
                          <tr>
                            <td><textarea type="text" id="description" name="event_description" class="form-control" style="min-height:90px; font-size:13px;" placeholder="Type Something"></textarea></td>
                          </tr>
                          <tr>
                            <td><input type="submit" class="btn-primary" value="Send"></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff">
                    <div class="form-group col-sm-12" style="font-size: 15px;">
                      <label>Select Country</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                        <option value="day1">Country</option>
                        <option value="day2">Afghanistan</option>
                        <option value="day3">Albania</option>
                        <option value="day4">Algeria</option>
                        <option value="day5">American Somoa</option>
                        <option value="day6">Angola</option>
                        <option value="day7">Antartica</option>
                      </select>
                    </div>
                    <div class="col-md-12">
                      <div class="pull-left" style="width:25%;">
                        <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:75%;"> Wowhubb Network</div>
                    </div>
                      <div class="col-md-12" style="margin-bottom:10px;">
                        <div class="pull-left" style="width:25%;">
                          <input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                        </div>
                        <div class="pull-left" style="width:75%;">Specific Target Group</div>
                      </div>
                      
                        <input type="submit" class="btn-primary" style="background-color:#535353;" value="Create Your Event Ads">
                      
                      </td>
                      
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="tab-pane fade" id="faq-cat-8"> 

               <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pnl-brdr-clr">
                <tbody>
                  <tr style="font-size:16px;">
                    <td height="40" bgcolor="#f9f9f9"><strong>Event Category</strong></td>
                    <td width="18%" bgcolor="#f9f9f9"><strong>Venue</strong></td>
                    <td bgcolor="#f9f9f9"><strong>Coupon Clicks</strong></td>
                    <td bgcolor="#f9f9f9"><strong>Edit Event</strong></td>
                    <td bgcolor="#f9f9f9"><strong>Expires</strong></td>
                    <td bgcolor="#f9f9f9"><strong>Wowtag</strong></td>
                    <td height="40" bgcolor="#f9f9f9"><strong>Delete </strong></td>
                  </tr>
                  <tr style="font-size:16px;">
                    <td height="40" colspan="2" bgcolor="#f9f9f9"><strong>Hosted by !BlackFridaySales</strong><strong></strong></td>
                    <td width="9%" bgcolor="#f9f9f9">&nbsp;</td>
                    <td width="19%" bgcolor="#f9f9f9">&nbsp;</td>
                    <td width="20%" bgcolor="#f9f9f9">&nbsp;</td>
                    <td width="13%" bgcolor="#f9f9f9">&nbsp;</td>
                    <td width="7%" height="40" bgcolor="#f9f9f9">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="14%" height="40" rowspan="2" align="left" valign="top" bgcolor="#fff"><div><img src="../assets/images/target-1.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">Target	</strong><br>
                      Birthday</td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><img src="../assets/images/sales-1.png" class="img-responsive img-thumbnail" alt=""><br>
                    <a href="#">www.target.coupon/Blacksales</a></td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff">
                      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td height="30" align="center" valign="middle"><strong style="font-size:16px;">RSVP</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="font-size:22px; color:#FF7600;">1500</strong></td>
                          </tr>
                          <tr>
                            <td height="30">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td width="82%" height="20"><strong>Event Details</strong></td>
                            <td width="18%" height="20"><a href="#"><img src="../assets/images/edit_icon.png" alt=""></a></td>
                          </tr>
                          <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20">&nbsp;</td>
                            <td height="20">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" cellspacing="0" cellpadding="0">

                        <tbody>
                          <tr>
                            <td align="left" valign="top" bgcolor="#f9f9f9"><a href="#"><img src="../assets/images/create-event-icon-2.png" alt=""></a></td>
                          </tr>
                          <tr>
                            <td>02/21/2018</td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="center" valign="top" bgcolor="#fff"><a href="#"><iframe width="200" height="115" src="https://www.youtube.com/embed/HbPcjwKH0HM" frameborder="0"  encrypted-media allowfullscreen></iframe><br>
                      Update </a></td>
                    <td height="40" rowspan="2" align="center" valign="top" bgcolor="#fff"><input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      <br>
                      Promote</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" bgcolor="#fff">&nbsp;</td>
                  </tr>
                </tbody>
              </table>



            </div>

             <div class="tab-pane fade" id="faq-cat-9">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pnl-brdr-clr">
                <tbody>
                  <tr style="font-size:16px;">
                    <td height="40" bgcolor="#f9f9f9"><strong>Event Category</strong></td>
                    <td width="18%" bgcolor="#f9f9f9"><strong>Venue</strong></td>
                    <td width="9%" bgcolor="#f9f9f9"><strong>Attending</strong></td>
                    <td width="19%" bgcolor="#f9f9f9"><strong>Edit Event</strong></td>
                    <td width="20%" bgcolor="#f9f9f9"><strong>Send Event Notification</strong></td>
                    <td width="13%" bgcolor="#f9f9f9"><strong>Event Organizer</strong></td>
                    <td width="7%" height="40" bgcolor="#f9f9f9"><strong>Delete </strong></td>
                  </tr>
                  <tr>
                    <td width="14%" height="40" rowspan="2" align="left" valign="top" bgcolor="#fff"><div><img src="../assets/images/post-images/1.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Craigs Birthday</strong><br>
                      Birthday</td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><strong>Grace Convection Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                      09:00 AM</td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff">
                      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td height="30" align="center" valign="middle"><strong style="font-size:16px;">RSVP</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="font-size:22px; color:#FF7600;">1550</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><a href="#" data-toggle="modal" data-target=".modal-1" >Invites List</a></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td width="82%" height="20"><strong>Event Details</strong></td>
                            <td width="18%" height="20"><a href="#"><img src="../assets/images/edit_icon.png" alt=""></a></td>
                          </tr>
                          <tr>
                            <td height="20"><strong>Event Wowtag</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20"><strong style="color: #ccc;">Event Venue</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20"><strong style="color: #ccc;">Event Schedule</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20"><strong style="color: #ccc;">Event Highlights</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20"><strong style="color: #ccc;">Event  Contacts /URLs</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="left" valign="top" bgcolor="#f9f9f9"><select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                                <option value="day1">Send Invite Notification</option>
                                <option value="day1">Send Group Notification</option>
                              </select></td>
                          </tr>
                          <tr>
                            <td><textarea type="text" id="description" name="event_description" class="form-control" style="min-height:90px; font-size:13px;" placeholder="Describe What Your Event Is All About "></textarea></td>
                          </tr>
                          <tr>
                            <td><input type="submit" class="btn-primary" value="Send"></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="center" valign="top" bgcolor="#fff"><a href="#"><img src="../assets/images/create-event-icon-2.png" alt=""> <br>
                      Event Service Provider </a></td>
                    <td height="40" rowspan="2" align="center" valign="top" bgcolor="#fff"><input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      <br>
                      Publish</td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" bgcolor="#fff">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="14%" height="40" rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><div><img src="../assets/images/post-images/13.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Tony Grace</strong><br>
                      Baby Shower</td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><strong>Grace Convection Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                      09:00 AM</td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td height="30" align="center" valign="middle"><strong style="font-size:16px;">RSVP</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="font-size:22px; color:#FF7600;">2000</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><a href="#" data-toggle="modal" data-target=".modal-1" >Invites List</a></td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td width="82%" height="20"><strong>Event Details</strong></td>
                            <td width="18%" height="20"><a href="#"><img src="../assets/images/edit_icon.png" alt=""></a></td>
                          </tr>
                          <tr>
                            <td height="20"><strong>Event Wowtag</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20"><strong style="color: #ccc;">Event Venue</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20"><strong style="color: #ccc;">Event Schedule</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20"><strong style="color: #ccc;">Event Highlights</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="20"><strong style="color: #ccc;">Event  Contacts /URLs</strong></td>
                            <td height="20">&nbsp;</td>
                          </tr>
                        </tbody>
                      </table></td>
                    <td align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td align="left" valign="top" bgcolor="#f9f9f9"><select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size:13px;">
                                <option value="day1">Send Invite Notification</option>
                                <option value="day1">Send Group Notification</option>
                              </select></td>
                          </tr>

                          <tr>
                            <td><textarea type="text" id="description" name="event_description" class="form-control" style="min-height:90px; font-size:13px;" placeholder="Describe What Your Event Is All About "></textarea></td>
                          </tr>

                          <tr>
                            <td><input type="submit" class="btn-primary" value="Send"></td>
                          </tr>

                        </tbody>
                      </table>
                    </td>

                    <td rowspan="2" align="center" valign="top" bgcolor="#f9f9f9"><a href="#"><img src="../assets/images/create-event-icon-2.png" alt=""> <br>
                      Event Service Provider </a></td>
                    <td height="40" rowspan="2" align="center" valign="top" bgcolor="#f9f9f9"><input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      <br>
                      Publish</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>

        <div class="tab-pane fade" id="faq-cat-2">
              <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:20px;">
                <h4 style="color:#fff; line-height:30px;">Event Hubb<br>
                  <span style="font-size:28px;">My Invites</span></h4>
              </div>
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pnl-brdr-clr">
                <tbody>
                  <tr style="font-size:16px;">
                    <td height="40" bgcolor="#f9f9f9"><strong>Event Category</strong></td>
                    <td width="22%" bgcolor="#f9f9f9"><strong>Venue</strong></td>
                    <td width="18%" bgcolor="#f9f9f9"><strong>Attending</strong></td>
                    <td width="16%" bgcolor="#f9f9f9"><strong>!Wowtag</strong></td>
                    <td width="10%" bgcolor="#f9f9f9"><strong>Share Event</strong></td>
                    <td width="13%" bgcolor="#f9f9f9"><strong>Event Pass Ticket</strong></td>
                    <td width="7%" height="40" bgcolor="#f9f9f9"><strong>Delete </strong></td>
                  </tr>
                  <tr>
                    <td width="14%" height="40" rowspan="2" align="left" valign="top" bgcolor="#fff"><div><img src="../assets/images/post-images/1.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Craigs Birthday</strong><br>
                      Birthday<br>
                      <a href="#"><strong>View Event Details</strong></a></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><strong>Grace Convection Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                      09:00 AM</td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="color:#FF7600;">Attending</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="color:#2C4683;">1000 Attending</strong></td>
                          </tr>
                         
                        </tbody>
                      </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td rowspan="2"><img src="../assets/images/event-hubb-video.jpg" alt=""></td>
                            
                          </tr>
                          
                        </tbody>
                      </table></td>
                    <td align="center" valign="top" bgcolor="#fff"><a href="#"><img src="../assets/images/social-icon.png" alt=""></a></td>
                    <td rowspan="2" align="center" valign="top" bgcolor="#fff"><span style="font-size:16px;">Free</span></td>
                    <td height="40" rowspan="2" align="center" valign="top" bgcolor="#fff"><input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                    </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" bgcolor="#fff">&nbsp;</td>
                  </tr>
                  <tr>
                    <td width="14%" height="40" rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><div><img src="../assets/images/post-images/1.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Summer 2017</strong><br>
                      Seminar/ Conferences<br>
                      <a href="#"><strong>View Event Details</strong></a></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><strong>Green Exhibition Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                    09:00 AM</td>
                    <td height="40" rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="color:#FF7600;">Attending</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="color:#2C4683;">1000 Attending</strong></td>
                          </tr>
                          
                        </tbody>
                    </table></td>
                    <td rowspan="2" align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          <tr>
                            <td rowspan="2"><img src="../assets/images/event-hubb-video.jpg" alt=""></td>                            
                          </tr>                          
                        </tbody>
                    </table></td>
                    <td align="center" valign="top" bgcolor="#f9f9f9"><a href="#"><img src="../assets/images/social-icon.png" alt=""></a></td>
                    <td rowspan="2" align="center" valign="top" bgcolor="#f9f9f9"><span style="font-size:16px;">Free</span></td>
                    <td height="40" rowspan="2" align="center" valign="top" bgcolor="#f9f9f9"><input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                    </td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" bgcolor="#f9f9f9">&nbsp;</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="tab-pane fade" id="faq-cat-3">
        <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:20px;">
            <h4 style="color:#fff; line-height:30px;">Event Hubb<br>
              <span style="font-size:28px;">Past Events</span></h4>
          </div>
         <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pnl-brdr-clr">
                <tbody>
                  <tr style="font-size:16px;">
                    <td height="40" bgcolor="#f9f9f9"><strong>Event Category</strong></td>
                    <td width="22%" bgcolor="#f9f9f9"><strong>Venue</strong></td>
                    <td width="18%" bgcolor="#f9f9f9"><strong>Attending</strong></td>
                    <td width="7%" height="40" bgcolor="#f9f9f9"><strong>Delete </strong></td>
                  </tr>
                  <tr>
                    <td width="14%" height="40" align="left" valign="top" bgcolor="#fff"><div><img src="../assets/images/post-images/1.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Craigs Birthday</strong><br>
                      Birthday<br>
                      <a href="#"><strong>View Event Details</strong></a></td>
                    <td align="left" valign="top" bgcolor="#fff"><strong>Grace Convection Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                      09:00 AM</td>
                    <td height="40" align="left" valign="top" bgcolor="#fff"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="color:#FF7600;">Attended</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="color:#2C4683;">1000 Attended</strong></td>
                          </tr>
                         
                        </tbody>
                      </table></td>
                    <td height="40" align="left" valign="top" bgcolor="#fff"><input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                    </td>
                  </tr>
                  <tr>
                    <td width="14%" height="40" align="left" valign="top" bgcolor="#f9f9f9"><div><img src="../assets/images/post-images/1.jpg" class="img-responsive img-thumbnail" alt=""></div>
                      <strong style="font-size:16px; color:#fc6653;">!Summer 2017</strong><br>
                      Seminar/ Conferences<br>
                      <a href="#"><strong>View Event Details</strong></a></td>
                    <td align="left" valign="top" bgcolor="#f9f9f9"><strong>Green Exhibition Center</strong><br>
                      1234  Fire Street Houston<br>
                      Texas 77777<br>
                      13th- 14th  January 2017<br>
                    09:00 AM</td>
                    <td height="40" align="left" valign="top" bgcolor="#f9f9f9"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                          
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="color:#FF7600;">Attended</strong></td>
                          </tr>
                          <tr>
                            <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="color:#2C4683;">1000 Attended</strong></td>
                          </tr>
                          
                        </tbody>
                    </table></td>
                    <td height="40" align="left" valign="top" bgcolor="#f9f9f9"><input type="checkbox" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>

        <div class="tab-pane fade" id="faq-cat-4">
        <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:20px;">
            <h4 style="color:#fff; line-height:30px;">Event Hubb<br>
              <span style="font-size:28px;">Event Organizer</span></h4>
          </div>
          <div class="col-md-4 text-center col-md-offset-4" style="margin-top:10px; margin-bottom:20px;">
            <label>Search For Event Services Category</label>
                      <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
                      	<option value="Cakes">Cakes</option>
                        <option value="Catering">Catering</option>
                        <option value="Cabs">Cabs</option>
                        
                      </select>
          </div>
          <div class="col-md-6">
         <div class="col-md-12" style="border:1px solid #ccc; border-radius:5px; padding-top:10px; padding-bottom:10px;">
          <div class="row">
            <div class="col-md-6">
              <h3 style="font-size:17px;">!Gina Cakes</h3>
            </div>
            <div class="col-md-6 text-right" style="margin-top:20px;"><i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p style="font-size:14px;">Restaurant, Catering Food</p>
            </div>
            <div class="col-md-6 text-right" style="font-size:16px;">2.2</div>
          </div>
          <div class="row"><div class="col-md-12"><hr style="margin:5px 0;"></div></div>
          <div class="row">
            <div class="col-md-4" style="margin-top:10px;">
              <div class="gallery"> <img src="../assets/images/cake/cake1.jpg" alt="post-image" class="img-responsive img-thumbnail"> <br> 
                <a href="#">View Business Page</a></div>
            </div>
            <div class="col-md-8" style="margin-top:10px;">
              <p style="font-size:14px;">2345, Blue Street, Sugarland Texas 77334<br>
                Opens @7:00pm<br>
                713-555-5555<br>
                <span style="font-size:14px; color:#e91e63;"><a href="#">www.ginacakes.com</a></span></p>
              <div class="col-md-10">
                <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
                      	<option value="Event group">Event Group</option>
                        <option value="Network friend">Network Friend</option>

                        
                      </select>
              </div>
              <div class="col-md-2 text-right"><a href="#"><img src="../assets/images/social-icon.png" alt="post-image" ></a></div>
            </div>
          </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="col-md-12" style="border:1px solid #ccc; border-radius:5px; padding-top:10px; padding-bottom:10px;">
          <div class="row">
            <div class="col-md-6">
              <h3 style="font-size:17px;">!Amazing Bakery </h3>
            </div>
            <div class="col-md-6 text-right" style="margin-top:20px;"><i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star"></i> <i class="fa fa-2x fa-star-o"></i> <i class="fa fa-2x fa-star-o"></i></div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p style="font-size:14px;">Restaurant, Catering Food</p>
            </div>
            <div class="col-md-6 text-right" style="font-size:16px;">3</div>
          </div>
          <div class="row"><div class="col-md-12"><hr style="margin:5px 0;"></div></div>
          <div class="row">
            <div class="col-md-4" style="margin-top:10px;">
              <div class="gallery"> <img src="../assets/images/cake/cake2.jpg" alt="post-image" class="img-responsive img-thumbnail"> <br> 
                <a href="#">View Business Page</a></div>
            </div>
            <div class="col-md-8" style="margin-top:10px;">
              <p style="font-size:14px;">4005, Garden Street, Sugarland Texas 77334<br>
                Opens @6:00pm<br>
                813-288-8956<br>
                <span style="font-size:14px; color:#e91e63;"><a href="#">www.amazingbakery.com</a></span></p>
              <div class="col-md-10">
                <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
                      	<option value="Event group">Event Group</option>
                        <option value="Network friend">Network Friend</option>

                        
                      </select>
              </div>
              <div class="col-md-2 text-right"><a href="#"><img src="../assets/images/social-icon.png" alt="post-image" ></a></div>
            </div>
          </div>
        </div>
        </div>
        </div>
        <div class="tab-pane fade" id="faq-cat-41">
        <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:20px;">
            <h4 style="color:#fff; line-height:30px;">Event Hubb<br>
              <span style="font-size:28px;">Calendar Events</span></h4>
          </div>
          
          <div class="col-md-12" style="margin-top:10px;">
          <div id="calendar"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



   <!-- modal popup personal event   -->

      <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px; background-color: #908c8c2e;">              
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3>Invite a Friend</h3>
                                 <span style="color:#333; font-size: 15px">Please give the following information</span>
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                           
                  <form action="" method="post"  id="personal_update_aboutme" class="form-inline">                           
                    <div class="row">  
                      <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                             <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                     
                       
                           </div>
                      </div>

                        <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Emeka </div>                            
                             
                            <div style="font-size:11px;">Software Analyst</div> 
                              <div style="font-size:12px; color: #e91e63;">!Tony  </div>
                               Chennai
                            <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                   
                       
                           </div>
                       </div>

                      <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;"> Emeka Daniells</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                            <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                  
                       
                           </div>
                      </div>

                      <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;"> Developer</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Chennai
                             <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                   
                       
                           </div>
                      </div>

                      <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                             <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                    
                       
                           </div>
                      </div>

                      <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Chennai
                            <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                     
                       
                           </div>
                      </div>
                    </div>


                      <!-- end first -->
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                             <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                     
                       
                           </div>
                    </div>

                        <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Emeka </div>                            
                             
                            <div style="font-size:11px;">Software Analyst</div> 
                              <div style="font-size:12px; color: #e91e63;">!Tony  </div>
                               Chennai
                            <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                   
                       
                           </div>
                       </div>

                      <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;"> Emeka Daniells</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                            <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                  
                       
                           </div>
                      </div>

                      <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;"> Developer</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Chennai
                             <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                   
                       
                           </div>
                      </div>

                      <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                             <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                    
                       
                           </div>
                      </div>

                      <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Chennai
                            <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                     
                       
                           </div>
                         </div>
                      </div>
                      <!-- end second row -->
                      <div class="row" style="margin-top: 20px;">

                        <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                             <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                     
                       
                           </div>
                          </div>

                          <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Emeka </div>                            
                             
                            <div style="font-size:11px;">Software Analyst</div> 
                              <div style="font-size:12px; color: #e91e63;">!Tony  </div>
                               Chennai
                            <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                   
                       
                           </div>
                          </div>

                          <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;"> Emeka Daniells</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                            <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                  
                       
                           </div>
                          </div>

                          <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;"> Developer</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Chennai
                             <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                   
                       
                           </div>
                          </div>

                          <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                             <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                    
                       
                           </div>
                          </div>

                          <div class="col-md-2">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Chennai
                            <div style="color: #0e8e18; font-weight: bold;"> RSVP <i class="glyphicon glyphicon-ok"> </i> </div>                     
                       
                           </div>
                          </div>

                       </div>                             
                          
                  </form>
                               </div>
                                </div>
                                  </div>                                
                              </div>
                            </div>
                          </div>
                        </div>
      </div>
                      <!-- end personal model popup -->




 <!-- modal open social event event   -->

      <div class="modal fade modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:10px; background-color: #908c8c2e;">              
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3><center>Invites List</center></h3>
                                 
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                           
                  <form action="" method="post"  id="personal_update_aboutme" class="form-inline">                           
                    <div class="row">  
                      <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                             <div style="color: #0e8e18; font-weight: bold;"> Attending  <i class="glyphicon glyphicon-ok"> </i> </div>   
                             <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>                     
                       
                           </div>
                      </div>

                        <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Emeka </div>                            
                             
                            <div style="font-size:11px;">Software Analyst</div> 
                              <div style="font-size:12px; color: #e91e63;">!Tony  </div>
                               Chennai
                            <div style="color: #0e8e18; font-weight: bold;"> Interested <i class="glyphicon glyphicon-ok"> </i> </div>   
                            <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>                
                       
                           </div>
                       </div>

                      <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;"> Emeka Daniells</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                            <div style="color: #0e8e18; font-weight: bold;"> Attending <i class="glyphicon glyphicon-ok"> </i> </div>    
                             <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>             
                           </div>
                      </div>                                   

                      <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;"> Developer</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Chennai
                             <div style="color: #0e8e18; font-weight: bold;"> Interested <i class="glyphicon glyphicon-ok"> </i> </div>  
                              <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>                  
                       
                           </div>
                      </div>
                    </div>
                       <!-- first row end -->

                    <div class="row" style="margin-top: 20px;">  
                      <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                             <div style="color: #0e8e18; font-weight: bold;"> Attending  <i class="glyphicon glyphicon-ok"> </i> </div>   
                             <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>                     
                       
                           </div>
                      </div>

                        <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Emeka </div>                            
                             
                            <div style="font-size:11px;">Software Analyst</div> 
                              <div style="font-size:12px; color: #e91e63;">!Tony  </div>
                               Chennai
                            <div style="color: #0e8e18; font-weight: bold;"> Interested <i class="glyphicon glyphicon-ok"> </i> </div>   
                            <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>                
                       
                           </div>
                       </div>

                      <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;"> Emeka Daniells</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                            <div style="color: #0e8e18; font-weight: bold;"> Attending <i class="glyphicon glyphicon-ok"> </i> </div>    
                             <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>             
                           </div>
                      </div>                                   

                      <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;"> Developer</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Chennai
                             <div style="color: #0e8e18; font-weight: bold;"> Interested <i class="glyphicon glyphicon-ok"> </i> </div>  
                              <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>                  
                       
                           </div>
                      </div>
                    </div>
                       <!-- second row end -->

                      <div class="row" style="margin-top: 20px;">  
                      <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                             <div style="color: #0e8e18; font-weight: bold;"> Attending  <i class="glyphicon glyphicon-ok"> </i> </div>   
                             <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>                     
                       
                           </div>
                      </div>

                        <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Emeka </div>                            
                             
                            <div style="font-size:11px;">Software Analyst</div> 
                              <div style="font-size:12px; color: #e91e63;">!Tony  </div>
                               Chennai
                            <div style="color: #0e8e18; font-weight: bold;"> Interested <i class="glyphicon glyphicon-ok"> </i> </div>   
                            <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>                
                       
                           </div>
                       </div>

                      <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;"> Emeka Daniells</div>                            
                             
                            <div style="font-size:11px;">Account Manager</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Houston
                            <div style="color: #0e8e18; font-weight: bold;"> Attending <i class="glyphicon glyphicon-ok"> </i> </div>    
                             <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>             
                           </div>
                      </div>                                   

                      <div class="col-md-3">
                           <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                             <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                             <div style="font-size:15px; font-weight:bold; line-height: 15px;">Tony Adams</div>
                            
                             
                            <div style="font-size:11px;"> Developer</div> 
                              <div style="font-size:12px; color: #e91e63;">!emeka  </div>
                               Chennai
                             <div style="color: #0e8e18; font-weight: bold;"> Interested <i class="glyphicon glyphicon-ok"> </i> </div>  
                              <span class="form-body-classic"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-eye-open"></i>  Registration Info</button></span>                  
                       
                           </div>
                      </div>
                    </div>
                       <!-- third row end -->





                  
                      
                  </form>
                               </div>
                                </div>
                                  </div>                                
                              </div>
                            </div>
                          </div>
                        </div>
      </div>
                      <!-- end open social event model popup -->





   <!-- event details edit model popup -->
   <!-- <?php print_r($event); ?> -->

   <div class="modal fade" id="modal-eventdetails" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="post-content">
                      <div class="post-container" style="padding-bottom:20px;">
                        <div class="post-detail">
                                          <div class="user-info">
                                              <h3>Edit Event Details </h3>
                                              <span style="color:#333; font-size: 15px">Please give the following information to edit</span> 
                                          </div>
                                          <div class="line-divider"></div>
                          <div class="user-info">
                            <div class="row" style="padding:10px;">
                                               <div class="alert alert-success" id="rsvp_success" role="alert" style="display:none;" >Successfully Register
                                               </div>
                                                <!-- this form submit rsvp -->
                              <form action="<?php echo base_url('event/rsvp_update/'.$feeds->_id); ?>" method="post" class="register_rsvp" class="form-inline">

                                <textarea name="userid"><?php echo $feeds->_id ?></textarea> 
                                
                                  <div class='row'>
                                    <div class='form-group col-sm-12'  >
                                      <label>Event type</label>
                                      <input type='text' name="event_type"  class="form-control" value="" >
                                    </div>
                                    <div class='form-group col-sm-12' >
                                      <label>Event Category</label>
                                      <input type='text' name="event_category"  class="form-control " value="" >
                                    </div>
                                    <div class='form-group col-sm-12' >
                                      <label>Event Name</label>
                                      <input type='text'  name="event_name" class="form-control " value="" >
                                    </div>
                                  </div>

                                <div class='row'>
                                        <div class='form-group col-sm-12' >
                                          <label>Event City </label>
                                          <input type='text' id="time_zone" name="time_zone"  class="form-control  " />
                                        </div>

                                        <div class="form-group col-sm-12 " style="font-size: 15px;">
                                              <label>Select Event Days</label>
                                            <select name="eventdayscount" id="btn-add-tab" class="form-control " style="background-color:#eff0f1;">
                                              <option value="" >Select Event Days</option>
                                              <option value="1">1 Day Event</option>
                                              <option value="2">2 Days Event</option>
                                              <option value="3">3 Days Event</option>
                                              <option value="4">4 Days Event</option>
                                              <option value="5">5 Days Event</option>
                                              <option value="6">6 Days Event</option>
                                              <option value="7">7 Days Event</option>
                                            </select>
                                        </div>

                                    <div id="date_hide" >

                                        <div class='form-group col-sm-6' style="width:45%;" >
                                          <label>Event Start Date</label>
                                          <input type='text' id="event_startdate" name="event_startdate"  class="form-control "  />
                                        </div>

                                        <div  class='form-group col-sm-6' style="width:45%; " >
                                          <label>Event Start Time</label>
                                          <input type='text' id="event_startime" name="event_startime"  class="form-control  "  />
                                        </div>

                                    
                                        <div class='form-group col-sm-6' style="width:45%;" >
                                          <label>Event End Date</label>
                                          <input type='text' id="event_enddate" name="event_enddate"  class="form-control" />
                                        </div>

                                        <div class='form-group col-sm-6' style="width:45%;">
                                          <label>Event End Time</label>
                                          <input type='text' id="event_endtiming" name="event_endtiming"  class="form-control "  />
                                        </div>                        
                                    </div>   
                                       
                                </div>
                       
                              </form> 
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
<footer id="footer"> </footer>

<!--preloader-->
<div id="spinner-wrapper">
  <div class="spinner"></div>
</div>

<!-- Scripts
    ================================================= --> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/additional-methods.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 
<!--<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> -->
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>   
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.js')?>"></script>   
<script src="<?php echo base_url('assets/js/moment.js')?>"></script> 
<script src="<?php echo base_url('assets/js/bootbox.js')?>"></script> <!-- conformation delete boot box -->
<script>

//user_id could pass to model popup using popup id
$('#modal-eventdetails').on('show.bs.modal', function(e) 
  {
    var userid = $(e.relatedTarget).data('id');
    $(e.currentTarget).find('input[name="userid"]').val(userid);
    });


//event delete from db

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".delete_event", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);

     bootbox.confirm("Are you sure you want to delete?", function(result) {
        if(result)
          {
      
      
        $.ajax({
                url : url,
                context:this,
                method: 'POST',
                data: formdata,
                processData: false,
                contentType: false,
                dataType:'json',
                context:this,   //here we use this function so declare here
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },              
                
                success: function(response)
                {
                   if(response.status == 'success')
                   {                     
                        window.location.href = base_url+'eventhubb/get_eventhubb';                                     
                    }else 
                     {                    
                        swal("Sorry!", "somethink wrong try again !", "error");
                     }
                }

            });

    }
     }); 
    
        });

});

</script>
<script src="<?php echo base_url ('assets/js/moment.min.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/fullcalendar.min.js') ?>"></script>
<script>

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2018-02-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-02-01',
        },
        {
          title: 'Long Event',
          start: '2018-02-07',
          end: '2018-02-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-02-11',
          end: '2018-02-13'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T10:30:00',
          end: '2018-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-02-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-02-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-02-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-02-28'
        }
      ]
    });

  });

</script>
</body>
</html>
