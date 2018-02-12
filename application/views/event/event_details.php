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
<link rel="stylesheet" href="<?php echo base_url ('assets/js/videopopup.css')?>" />

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
	padding: 0 0 0 15px;
}
.nav>li>a:focus, .nav>li>a:hover {
	text-decoration: none;
	background-color: #ddd;
	color: #e91e63;
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
</style>
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
                                              <div class="timeline-cover-event-details" style="position: relative; max-height:320px;">
                                                 <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->coverpage; ?>" style="background-size:cover; width:100%; max-height:300px;" />            
                                                <div class="timeline-nav-bar hidden-sm hidden-xs">
                                                  <div class="row">
                                                    <div class="col-md-3">
                                                      <div class="profile-info" style="top:-5px!important;">

                                                        <h3 style="color:#fff;">
                                                          <img src="../assets/images/wow-white-big.png"> 
                                                          <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                        </h3>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                      <ul class="follow-me list-inline">
                                                        <li><?php echo $event->wowsomecount.' '. 'wowsome'; ?> &nbsp;&nbsp; Comments </li>
                                                        <li>
                                                          <button class="btn-primary" style="padding: 2px 25px;">RSVP</button>
                                                        </li>
                                                      </ul>
                                                    </div>
                                                    <div class="col-md-1">
                                                      <div class="pull-right" style="margin-top:12px; margin-right:30px;"> <a href="#" style="text-decoration:none;"> &nbsp;&nbsp;<img src="../assets/images/play-button.png" alt="logo" /> </a> </div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <!--Timeline Menu for Large Screens End--> 
                                              </div>
                                              <!--Timeline Menu for Large Screens-->
                                              <div class="navbar-mobile hidden-lg hidden-md">
                                                <div class="profile-info">
                                                  <h3 style="color:#fff;">!Craigs Birthday</h3>
                                                </div>
                                                <div class="mobile-menu">
                                                  <button class="btn-primary">RSVP</button>
                                                  <a href="#" style="text-decoration:none;"> &nbsp;&nbsp; <img src="../images/play-button.png" alt="logo" /> </a> </div>
                                              </div>


                  <div id="page-contents" class="row" style="background-color:#FFFFFF;">

          <!-- personal event  details-->

                              <?php 
                                 if($event->eventtype == 'personal_event') 
                                    { 
                                                  
                              ?>  

                                    <!-- personal event info -->
                                    <div class="col-md-4">
                                      <div class="col-md-4">
                                        <h4>Event Info</h4>
                                      </div>
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>                                         
                                          <tr>
                                            <td height="40" colspan="2" bgcolor="#f9f9f9">
                                              <strong style="font-size:16px;">Description </strong>         
                                            </td>
                                          </tr>
                                          <tr>
                                            <td height="40" colspan="2" bgcolor="#fff"><?php echo $event->eventdescription; ?> </td>
                                          </tr>          

                                                  <!-- personal event -->
                                                    <?php 
                                                    if(isset($event->eventstartdate))
                                                        { ?>
                                                      <tr>
                                                        <td width="24%" bgcolor="#f9f9f9"><strong>
                                                            <i class="fa fa-calendar"></i> Date</strong>
                                                        </td>
                                                        <td width="75%" height="40" bgcolor="#f9f9f9">
                                                          <strong> 
                                                                
                                                                      <?php 
                                                                          $timestamp = strtotime($event->eventstartdate);                                                                              
                                                                                // echo date('D d Y', $timestamp);
                                                                      echo date("D d Y", strtotime($event->eventstartdate));

                                                                      ?> 
                                                        -  <span style="font-size:10px; color:#333;"></span> 
                                                                      <?php 
                                                                                $timestamp = strtotime($event->eventenddate);
                                                                                 echo date('D d Y', $timestamp);                         
                                                                     ?>IST
                                                          </strong>
                                                        </td>
                                                      </tr>

                                                      <tr>
                                                        <td bgcolor="#ffffff"><strong><i class="fa fa-clock-o"></i> Time</strong></td>
                                                        <td height="40" bgcolor="#ffffff"> 
                                                          <strong> 
                                                            <?php 
                                                                     $timestamp = strtotime($event->eventstartdate);
                                                                      echo date(' h:i A', $timestamp);
                                                                  ?> -              
                                                                  <span style="font-size:10px; color:#333;"></span> 
                                                                  <?php 
                                                                     $timestamp = strtotime($event->eventenddate);
                                                                     echo date(' h:i A', $timestamp);
                                                             ?>
                                                         </strong>
                                                        </td>
                                                      </tr>

                                                      <?php } else { ?>

                                                       <!-- professional event -->
                                    
                                                      <tr>
                                                        <td width="24%" bgcolor="#f9f9f9"><strong>
                                                            <i class="fa fa-calendar"></i> Date</strong>
                                                        </td>
                                                        <td width="75%" height="40" bgcolor="#f9f9f9">
                                                          <strong> 
                                                                
                                                                      <?php 
                                                                          
                                                                               $timestamp = strtotime($event->runtimefrom);
                                                                                echo date('D d Y', $timestamp);
                                                                      ?> -  <span style="font-size:10px; color:#333;"></span> 
                                                                      <?php 
                                                                                $timestamp = strtotime($event->runtimefrom);
                                                                                 echo date('D d Y', $timestamp);                         
                                                                     ?>IST
                                                          </strong>
                                                        </td>
                                                      </tr>

                                                      <tr>
                                                        <td bgcolor="#ffffff"><strong><i class="fa fa-clock-o"></i> Time</strong></td>
                                                        <td height="40" bgcolor="#ffffff"> 
                                                          <strong> 
                                                            <?php 
                                                                     $timestamp = strtotime($event->runtimeto);
                                                                      echo date(' h:i A', $timestamp);
                                                                  ?> -              
                                                                  <span style="font-size:10px; color:#333;"></span> 
                                                                  <?php 
                                                                     $timestamp = strtotime($event->runtimeto);
                                                                     echo date(' h:i A', $timestamp);
                                                             ?>
                                                         </strong>
                                                        </td>
                                                      </tr>

                                                      <?php } ?>
                                                      <!-- end professional event date and time-->

                                                        <tr>
                                                          <td bgcolor="#f9f9f9"> 
                                                            <strong>
                                                              <i class="fa fa-map-marker"></i> Venue
                                                            </strong>
                                                          </td>
                                                          <td height="40" bgcolor="#f9f9f9">                                                          
                                                             <?php  

                                                                 $i=0;

                                                                  foreach ($event->eventvenue as $eventvenues)
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
                                                          </td>
                                                        </tr>                                                        

                                                        <tr>
                                                          <td bgcolor="#ffffff"><strong>Donation URL</strong></td>
                                                          <td height="40" bgcolor="#ffffff">
                                                            <span id="rtr-s-Text_206_1">
                                                            <a href="#">
                                                              <?php if(isset( $event->donationsurl)) { echo $event->donationsurl; } else { echo "" ; } ?>                                                              
                                                            </a>
                                                            </span>
                                                          </td>
                                                        </tr>                                                   
                                                                                                             
                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:16px;">Event FAQs</strong></td>
                                                        </tr>

                                                         <?php 
                                                          if(isset($event->faqquestion1) && ($event->faqanswer1)) 
                                                            {
                                                        ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion1) && ($event->faqanswer1) ) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion1."</p>".$event->faqanswer1;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion2) && ($event->faqanswer2)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion2."</p>".$event->faqanswer2;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion3) && ($event->faqanswer3)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion3."</p>".$event->faqanswer3;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion4) && ($event->faqanswer4)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion4."</p>".$event->faqanswer4;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <?php } else { ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff"> You miss to add your Event FAQ's </td>
                                                        </tr>

                                                        <?php } ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:16px;">Event Sponsors Details</strong></td>
                                                        </tr>
                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">Soundbeat  Jam Club</td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                            <?php if(isset( $event->donationsurl)) { echo $event->donationsurl; } else { echo "" ; } ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:16px;">Contact Event Organisers</strong></td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                            <div class="form-group" >
                                                              <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size: 13px;">
                                                                  <option value="day1">Reason for Contact</option>
                                                                  <option value="day2">Question About Event</option>
                                                                  <option value="day3">Question About Event Tours</option>
                                                                  <option value="day4">Question About Event Tickets</option>
                                                                  <option value="day5">Question About Event Logistics</option>
                                                              </select>
                                                            </div>
                                                            <div class='form-group' >
                                                              <input type='text' name="event_topic"  class="form-control textBox" placeholder="Your Name" />
                                                            </div>
                                                            <div class='form-group' >
                                                              <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Phone No (Optional)" />
                                                            </div>
                                                            <div class='form-group' >
                                                              <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Email" />
                                                            </div>
                                                            <div class='form-group' >
                                                              <textarea class="form-control" placeholder="Your Message" style="min-height:150px;"> </textarea>
                                                               <em style="color: #2980b9;"> Information Provided Here is only seen by Event organizers</em> 
                                                            </div>

                                                              <div class='form-group'>
                                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                              </div>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                  </table>
                                              </div>

                                         <!-- end with personal event info-->


                        
     <!-- personal event details -->

                      <div class="col-md-8"> 
                            <!-- Nav tabs category -->
                              <ul class="nav nav-tabs faq-cat-tabs">
                                  <li class="active" style="width: 33.33%;"><a href="#faq-cat-1" data-toggle="tab" class="text-center">Event Highlights</a></li>
                                  <li style="width: 33.33%;"><a href="#faq-cat-2" data-toggle="tab" class="text-center">Event Schedule</a></li>
                                  <li style="width: 33.33%;"><a href="#faq-cat-3" data-toggle="tab" class="text-center">Event Discussions</a></li>
                                  <!--<li><a href="#faq-cat-4" data-toggle="tab" class="text-center">Event Tours</a></li> -->
                              </ul>

                          <div class="tab-content faq-cat-content">

                                  

                                    <div class="tab-pane active in fade" id="faq-cat-1">

                                      

                                        <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                          <h4 style="color:#fff; line-height:30px;">Event Highlights<br>
                                            <span style="font-size:28px;">
                                               <img src="../assets/images/wow-white-big.png">
                                                <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span></h4>
                                        </div>

                                          

                                        <div class="col-md-12 pnl-brdr-clr">
                                          <?php if(isset($event->eventspeakername1)) { ?>
                                            <div class="col-md-5">

                                              <?php if(isset($event->eventhighlights1) && (($event->eventhighlights1) != 'null')  )

                                              { ?>

                                              <div style="width:27%;" class="pull-left">
                                                <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlights1; ?>" class="img-thumbnail"  />
                                              </div>
                                              <?php } ?>  

                                              <div style="width:73%;" class="pull-left">
                                                <?php if(isset($event->eventhighlightsvideo1) && (($event->eventhighlightsvideo1) != 'null')  ) { ?>

                                            <div id="vidBox">
                                              <div id="videCont" style="margin-top: -19px!important;"> 
                                                <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo1; ?>" id="video-trigger">
                                                <video   id="demo"  style="width: 200px; height: 150px;" controls controlsList="nodownload">
                                                   <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo1; ?>" type="video/mp4">
                                                </video>
                                                </a>
                                              </div>
                                            </div>  
                                                                                  
                                                <?php } ?>

                                                <br>
                                                <h5 style="color:#333; line-height:20px;">
                                                  <?php echo $event->eventspeakername1; ?><br>
                                                <span style="font-size:12px;">
                                                   <?php echo $event->eventguesttype1; ?></span></h5>
                                              </div>

                                            </div>

                                          <div class="col-md-7">
                                            <h5 style="color:#333; line-height:20px;">!Cdaniells</h5>
                                            <p><?php echo $event->eventspeakeractivities1; ?></p>
                                            <a href="#"><?php echo $event->eventspeakerlink1; ?> </a>
                                          </div>
                                            <?php } else { echo "You didn't add any Event Highlights";  } ?>
                                        </div>

                                        <!-- event highlight 2 -->

                                        <?php if(isset($event->eventspeakername2)) { ?>

                                          <div class="col-md-12 pnl-brdr-clr">
                                            <div class="col-md-5">
                                              <?php if($event->eventhighlights2 != 'null'){ ?>
                                              <div style="width:27%;" class="pull-left">
                                                <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlights2; ?>" class="img-thumbnail"  />
                                              </div>
                                              <?php } ?>

                                              <div style="width:73%;" class="pull-left">
                                                  <video style="width: 200px; height: 150px;" controls controlsList="nodownload">
                                                    <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo2; ?>" type="video/mp4">
                                                  </video><br>
                                                <h5 style="color:#333; line-height:20px;"><?php echo $event->eventspeakername2; ?><br>
                                                  <span style="font-size:12px;">
                                                    <?php echo $event->eventguesttype2; ?>
                                                  </span></h5>
                                              </div>
                                            </div>
                                            <div class="col-md-7">
                                              <h5 style="color:#333; line-height:20px;">!Tdjakes</h5>
                                              <p> <?php echo $event->eventspeakeractivities2; ?></p>
                                              <a href="#"><?php echo $event->eventspeakerlink2; ?></a>
                                            </div>

                                          </div> 
                                        <?php } ?>
                                    </div>
                                    

                              <div class="tab-pane fade" id="faq-cat-2">
                                    <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:10px;">
                                              <h4 style="color:#fff; line-height:30px;">Event Schedules<br>
                                              <span style="font-size:28px;">
                                                 <img src="../assets/images/wow-white-big.png">
                                                <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span></h4>
                                    </div>

                                    

                                    <ul class="nav nav-tabs faq-cat-tabs">
                                      <li class="active"><a href="#faq-cat-5" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day1 
                                       </a></li>
                                      <li><a href="#faq-cat-6" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day2 
                                        </a></li>
                                      <li><a href="#faq-cat-7" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day3 </a></li>
                                    </ul>

                                    <div class="tab-content faq-cat-content">  

                                        <!-- day1       -->
                                        <div class="tab-pane active in fade" id="faq-cat-5">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    <?php 
                                                      $i=0; 
                                                      foreach ($event->programschedule as $events) 
                                                       {
                                                          if($i==0 && $events->day == "1" )
                                                                  {  
                                                                    echo $events->starttime."-". $events->endtime ; 
                                                                    
                                                                  }
                                                                  $i++;

                                                       }  ?>                                                        
                                                                  
                                                      <br>

                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                <?php 
                                                  foreach ($event->programschedule as $events) { 
                                                      $day1 = $events->day;
                                                      if($day1 == "1" )
                                                      {  ?>      
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                        <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                                      </strong><br>Event Facilitator:
                                                      <?php echo  $events->facilitator; ?> 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong><?php echo $events->agenda; ?>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong><?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?></strong><br>
                                                    </td>
                                                </tr>

                                                <?php } } ?>  

                                                
                                            </tbody>
                                          </table>
                                        </div>

                                        <!-- day2 -->

                                          <div class="tab-pane fade" id="faq-cat-6"> 

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    <?php 
                                                      $i=0; 
                                                      foreach ($event->programschedule as $events) 
                                                       {
                                                          if($i==0 && $events->day == "2" )
                                                                  {  
                                                                    echo $events->starttime."-". $events->endtime ;
                                                                  }
                                                                  $i++;

                                                       }  ?>   <br>                                  
                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                <?php foreach ($event->programschedule as $events) { 
                                                      $day1 = $events->day;
                                                      if($day1 == "2" )
                                                      {  ?>      
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                        <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                                      </strong><br>
                                                      <?php echo  $events->facilitator; ?> 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong><?php echo $events->agenda; ?>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong><?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?></strong><br>
                                                    </td>
                                                </tr>

                                                <?php } } ?>  

                                            </tbody>
                                          </table>

                                          </div>

                                          <!-- day 3  -->
                                          <div class="tab-pane fade" id="faq-cat-7"> 

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    <?php 
                                                      $i=0; 
                                                      foreach ($event->programschedule as $events) 
                                                       {
                                                          if($i==0 && $events->day == "3" )
                                                                  {  
                                                                    echo $events->starttime."-". $events->endtime ;
                                                                  }
                                                                  $i++;

                                                       }  ?>   <br>                                  
                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                <?php foreach ($event->programschedule as $events) { 
                                                      $day1 = $events->day;
                                                      if($day1 == "3" )
                                                      {  ?>      
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                        <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                                      </strong><br>
                                                      <?php echo  $events->facilitator; ?> 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong><?php echo $events->agenda; ?>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong><?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?></strong><br>
                                                    </td>
                                                </tr>

                                                <?php } } ?>  
                                                
                                            </tbody>
                                          </table>

                                          </div>

                                    </div>
                              </div>


                                        <div class="tab-pane fade" id="faq-cat-3">
                                              <div class="col-md-12 text-center clr" style="margin-bottom:20px;">
                                                <h4 style="color:#fff; line-height:30px;">Event Discussions<br>
                                                  <span style="font-size:28px;"> 
                                                     <img src="../assets/images/wow-white-big.png">
                                                    <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                  </span></h4>
                                              </div>
                                              <div class="row" style="margin-top:10px;">
                                                <div class="col-md-12">
                                                  <div class="col-md-1"><img src="http://104.197.80.225:8080/wowhubb/assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> </div>
                                                  <div class="col-md-11">
                                                    <div class="pull-left">
                                                      <h3 style="margin-top:0; font-size:16px; color:#333;">
                                                       <img src="../assets/images/wow-black-small.png"> Dr.Segun</h3>
                                                      How was the event today? </div>
                                                    <div class="pull-right">Nov 27, 11:23 AM</div>
                                                  </div>
                                                  <div class="col-md-12 line-divider" style="margin-top:10px;"></div>
                                                </div>
                                              </div>

                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="col-md-1"><img src="http://104.197.80.225:8080/wowhubb/assets/images/users/user-2.jpg" alt="" class="profile-photo-sm"> </div>
                                              <div class="col-md-11">
                                                <div class="pull-left">
                                                  <h3 style="margin-top:0; font-size:16px; color:#333;"><img src="../assets/images/wow-black-small.png"> Dr.John walkers</h3>
                                                  Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu </div>
                                                <div class="pull-right">Nov 27, 12:23 PM</div>
                                              </div>
                                              <div class="col-md-12 line-divider" style="margin-top:10px;"></div>
                                            </div>
                                          </div>

                                          <div class="row" style="margin-top:200px;">
                                            <div class="col-md-12" style="background-color:#f5f5f5;">
                                              <div class="row" style="margin-top:10px;">
                                                <div class="col-md-1"> <img src="http://104.197.80.225:8080/wowhubb/assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> </div>
                                                <div class="col-md-9">
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px;">
                                                  </div>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                  <button class="btn-primary">Send</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                       <!-- four tab view -->

                                     
                                      </div>
                          </div>
                      </div>

  <!-- personal event end -->


  <!-- professional event start here -->

                      <?php 
                            } else  if($event->eventtype == 'professional_event') 
                              {
                      ?>
                          <!-- professional event info -->
                       <div class="col-md-4">
                                      <div class="col-md-4">
                                        <h4>Event Info</h4>
                                      </div>
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>                                         
                                          <tr>
                                            <td height="40" colspan="2" bgcolor="#f9f9f9">
                                              <strong style="font-size:16px;">Description </strong>         
                                            </td>
                                          </tr>
                                          <tr>
                                            <td height="40" colspan="2" bgcolor="#fff"><?php echo $event->eventdescription; ?> </td>
                                          </tr>          

                                                  <!-- personal event -->
                                                    <?php 
                                                    if(isset($event->eventstartdate))
                                                        { ?>
                                                      <tr>
                                                        <td width="24%" bgcolor="#f9f9f9"><strong>
                                                            <i class="fa fa-calendar"></i> Date</strong>
                                                        </td>
                                                        <td width="75%" height="40" bgcolor="#f9f9f9">
                                                          <strong> 
                                                                
                                                                      <?php 
                                                                          
                                                                               $timestamp = strtotime($event->eventstartdate);
                                                                                echo date('D d Y', $timestamp);
                                                                      ?> -  <span style="font-size:10px; color:#333;"></span> 
                                                                      <?php 
                                                                                $timestamp = strtotime($event->eventenddate);
                                                                                 echo date('D d Y', $timestamp);                         
                                                                     ?>IST
                                                          </strong>
                                                        </td>
                                                      </tr>

                                                      <tr>
                                                        <td bgcolor="#ffffff"><strong><i class="fa fa-clock-o"></i> Time</strong></td>
                                                        <td height="40" bgcolor="#ffffff"> 
                                                          <strong> 
                                                            <?php 
                                                                     $timestamp = strtotime($event->eventstartdate);
                                                                      echo date(' h:i A', $timestamp);
                                                                  ?> -              
                                                                  <span style="font-size:10px; color:#333;"></span> 
                                                                  <?php 
                                                                     $timestamp = strtotime($event->eventenddate);
                                                                     echo date(' h:i A', $timestamp);
                                                             ?>
                                                         </strong>
                                                        </td>
                                                      </tr>

                                                      <?php } else { ?>

                                                       <!-- professional event -->
                                    
                                                      <tr>
                                                        <td width="24%" bgcolor="#f9f9f9"><strong>
                                                            <i class="fa fa-calendar"></i> Date</strong>
                                                        </td>
                                                        <td width="75%" height="40" bgcolor="#f9f9f9">
                                                          <strong> 
                                                                
                                                                      <?php 
                                                                          
                                                                               $timestamp = strtotime($event->runtimefrom);
                                                                                echo date('D d Y', $timestamp);
                                                                      ?> -  <span style="font-size:10px; color:#333;"></span> 
                                                                      <?php 
                                                                                $timestamp = strtotime($event->runtimefrom);
                                                                                 echo date('D d Y', $timestamp);                         
                                                                     ?>IST
                                                          </strong>
                                                        </td>
                                                      </tr>

                                                      <tr>
                                                        <td bgcolor="#ffffff"><strong><i class="fa fa-clock-o"></i> Time</strong></td>
                                                        <td height="40" bgcolor="#ffffff"> 
                                                          <strong> 
                                                            <?php 
                                                                     $timestamp = strtotime($event->runtimeto);
                                                                      echo date(' h:i A', $timestamp);
                                                                  ?> -              
                                                                  <span style="font-size:10px; color:#333;"></span> 
                                                                  <?php 
                                                                     $timestamp = strtotime($event->runtimeto);
                                                                     echo date(' h:i A', $timestamp);
                                                             ?>
                                                         </strong>
                                                        </td>
                                                      </tr>

                                                      <?php } ?>
                                                      <!-- end professional event date and time-->

                                                        <tr>
                                                          <td bgcolor="#f9f9f9"> 
                                                            <strong>
                                                              <i class="fa fa-map-marker"></i> Venue
                                                            </strong>
                                                          </td>
                                                          <td height="40" bgcolor="#f9f9f9"> <?php if(isset($event->eventtimezone)){ echo $event->eventtimezone; } ?> </td>
                                                        </tr>   

                                                         <tr>
                                                          <td bgcolor="#ffffff"><strong>Ticket URL</strong></td>
                                                          <td height="40" bgcolor="#ffffff">
                                                            <span id="rtr-s-Text_206_1">
                                                            <a href="#">
                                                              <?php
                                                               
                                                                  foreach ($event->eventvenue as $eventvenues) 
                                                                  {
                                                                      if(isset( $eventvenues->eventvenueticketurl))                                                                 
                                                                     {
                                                                      echo $eventvenues->eventvenueticketurl;
                                                                      } 
                                                                  
                                                                  else { echo "" ; }  }
                                                              ?>                                                              
                                                            </a>
                                                            </span>
                                                          </td>
                                                        </tr>                                                     

                                                       <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:16px;">Event FAQs</strong></td>
                                                        </tr>

                                                         <?php 
                                                          if(isset($event->faqquestion1) && ($event->faqanswer1)) 
                                                            {
                                                        ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion1) && ($event->faqanswer1) ) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion1."</p>".$event->faqanswer1;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion2) && ($event->faqanswer2)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion2."</p>".$event->faqanswer2;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion3) && ($event->faqanswer3)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion3."</p>".$event->faqanswer3;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion4) && ($event->faqanswer4)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion4."</p>".$event->faqanswer4;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <?php } else { ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff"> You miss to add your Event FAQ's </td>
                                                        </tr>

                                                        <?php } ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:16px;">Event Sponsors Details</strong></td>
                                                        </tr>
                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">Soundbeat  Jam Club</td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                            <?php if(isset( $event->donationsurl)) { echo $event->donationsurl; } else { echo "" ; } ?>
                                                          </td>
                                                        </tr>

                                                        <tr >
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9">
                                                            <strong style="font-size:16px;">
                                                                
                                                                Contact Event Organisers
                                                            </strong>
                                                          </td>
                                                        </tr>

                                                        
                                                        <tr id="hide_contact_form">
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                            <div class="form-group" >
                                                              <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size: 13px;">
                                                                  <option value="Reason for Contact">Reason for Contact</option>
                                                                  <option value="Question About Event">Question About Event</option>
                                                                  <option value="Question About Event Tours">Question About Event Tours</option>
                                                                  <option value="Question About Event Tickets">Question About Event Tickets</option>
                                                                  <option value="Question About Event Logistics">Question About Event Logistics</option>
                                                              </select>
                                                            </div>
                                                            <div class='form-group' >
                                                              <input type='text' name="event_topic"  class="form-control textBox" placeholder="Your Name" />
                                                            </div>
                                                            <div class='form-group' >
                                                              <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Phone No (Optional)" />
                                                            </div>
                                                            <div class='form-group' >
                                                              <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Email" />
                                                            </div>
                                                            <div class='form-group' >
                                                              <textarea class="form-control" placeholder="Your Message" style="min-height:150px;"> </textarea>
                                                               <em style="color: #2980b9;"> Information Provided Here is only seen by Event organizers</em> 
                                                            </div>

                                                              <div class='form-group'>
                                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                              </div>
                                                            </td>
                                                        </tr>
                                                     

                                                    </tbody>
                                                  </table>
                                              </div>

                                         <!-- end with professional event info-->


                      <!-- end with professional event details-->
                      <div class="col-md-8"> 
                            <!-- Nav tabs category -->
                              <ul class="nav nav-tabs faq-cat-tabs">
                                  <li class="active" style="width: 25%;"><a href="#faq-cat-1" data-toggle="tab" class="text-center">Event Highlights</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-2" data-toggle="tab" class="text-center">Event Schedule</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-3" data-toggle="tab" class="text-center">Event Discussions</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-4" data-toggle="tab" class="text-center">Event Tours</a></li> 
                              </ul>

                          <div class="tab-content faq-cat-content">

                                  

                                    <div class="tab-pane active in fade" id="faq-cat-1">

                                      

                                        <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                          <h4 style="color:#fff; line-height:30px;">Event Highlights<br>
                                            <span style="font-size:28px;">
                                               <img src="../assets/images/wow-white-big.png">
                                              <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                            </span></h4>
                                        </div>

                                          

                                        <div class="col-md-12 pnl-brdr-clr">
                                          <?php if(isset($event->eventspeakername1)) { ?>
                                            <div class="col-md-5">

                                              <?php if(isset($event->eventhighlights1) && (($event->eventhighlights1) != 'null')  )

                                              { ?>

                                              <div style="width:27%;" class="pull-left">
                                                <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlights1; ?>" class="img-thumbnail"  />
                                              </div>
                                              <?php } ?>  

                                              <div style="width:73%;" class="pull-left">
                                                <?php if(isset($event->eventhighlightsvideo1) && (($event->eventhighlightsvideo1) != 'null')  ) { ?>

                                            <div id="vidBox">
                                              <div id="videCont" style="margin-top: -19px!important;">
                                                <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo1; ?>" id="video-trigger">
                                                <video   id="demo"  style="width: 200px; height: 150px;" controls controlsList="nodownload">
                                                   <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo1; ?>" type="video/mp4">
                                                </video>
                                                </a>
                                              </div>
                                            </div>
                                           


                                                <?php } ?>
                                                <br>
                                                <h5 style="color:#333; line-height:20px;">
                                                  <?php echo $event->eventspeakername1; ?><br>
                                                <span style="font-size:12px;">
                                                   <?php echo $event->eventguesttype1; ?></span></h5>
                                              </div>

                                            </div>

                                          <div class="col-md-7">
                                            <h5 style="color:#333; line-height:20px;">!Cdaniells</h5>
                                            <p><?php echo $event->eventspeakeractivities1; ?></p>
                                            <a href="#"><?php echo $event->eventspeakerlink1; ?> </a>
                                          </div>
                                            <?php } else { echo "You didn't add any Event Highlights";  } ?>
                                        </div>

                                        <!-- event highlight 2 -->

                                        <?php if(isset($event->eventspeakername2)) { ?>

                                          <div class="col-md-12 pnl-brdr-clr">
                                            <div class="col-md-5">
                                              <?php if($event->eventhighlights2 != 'null'){ ?>
                                              <div style="width:27%;" class="pull-left">
                                                <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlights2; ?>" class="img-thumbnail"  />
                                              </div>
                                              <?php } ?>

                                              <div style="width:73%;" class="pull-left">
                                                  <video style="width: 200px; height: 150px;" controls controlsList="nodownload">
                                                    <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo2; ?>" type="video/mp4">
                                                  </video><br>
                                                <h5 style="color:#333; line-height:20px;"><?php echo $event->eventspeakername2; ?><br>
                                                  <span style="font-size:12px;">
                                                    <?php echo $event->eventguesttype2; ?>
                                                  </span></h5>
                                              </div>
                                            </div>
                                            <div class="col-md-7">
                                              <h5 style="color:#333; line-height:20px;">!Tdjakes</h5>
                                              <p> <?php echo $event->eventspeakeractivities2; ?></p>
                                              <a href="#"><?php echo $event->eventspeakerlink2; ?></a>
                                            </div>

                                          </div> 
                                        <?php } ?>
                                    </div>
                                    

                              <div class="tab-pane fade" id="faq-cat-2">
                                    <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:10px;">
                                              <h4 style="color:#fff; line-height:30px;">Event Schedule<br>
                                              <span style="font-size:28px;">
                                                 <img src="../assets/images/wow-white-big.png">
                                               <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span></h4>
                                    </div>

                                  
                                    <ul class="nav nav-tabs faq-cat-tabs">
                                      <li class="active"><a href="#faq-cat-5" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day1 
                                       </a></li>
                                      <li><a href="#faq-cat-6" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day2 
                                        </a></li>
                                      <li><a href="#faq-cat-7" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day3 </a></li>
                                    </ul>
                                  

                                    <div class="tab-content faq-cat-content">  

                                        <!-- day1       -->
                                        <div class="tab-pane active in fade" id="faq-cat-5">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    <?php 
                                                      $i=0; 
                                                      foreach ($event->programschedule as $events) 
                                                       {
                                                          if($i==0 && $events->day == "1" )
                                                                  {  
                                                                    echo $events->starttime."-". $events->endtime ; 
                                                                    
                                                                  }
                                                                  $i++;

                                                       }  ?>                                                        
                                                                  
                                                      <br>

                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                <?php foreach ($event->programschedule as $events) { 
                                                      $day1 = $events->day;
                                                      if($day1 == "1" )
                                                      {  ?>      
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                        <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                                      </strong><br>Event Facilitator:
                                                      <?php echo  $events->facilitator; ?> 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong><?php echo $events->agenda; ?>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong><?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?></strong><br>
                                                    </td>
                                                </tr>

                                                <?php } } ?>  

                                                
                                            </tbody>
                                          </table>
                                        </div>

                                        <!-- day2 -->

                                          <div class="tab-pane fade" id="faq-cat-6"> 

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    <?php 
                                                      $i=0; 
                                                      foreach ($event->programschedule as $events) 
                                                       {
                                                          if($i==0 && $events->day == "2" )
                                                                  {  
                                                                    echo $events->starttime."-". $events->endtime ;
                                                                  }
                                                                  $i++;

                                                       }  ?>   <br>                                  
                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                <?php foreach ($event->programschedule as $events) { 
                                                      $day1 = $events->day;
                                                      if($day1 == "2" )
                                                      {  ?>      
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                        <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                                      </strong><br>
                                                      <?php echo  $events->facilitator; ?> 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong><?php echo $events->agenda; ?>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong><?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?></strong><br>
                                                    </td>
                                                </tr>

                                                <?php } } ?>  

                                            </tbody>
                                          </table>

                                          </div>

                                          <!-- day 3  -->
                                          <div class="tab-pane fade" id="faq-cat-7"> 

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    <?php 
                                                      $i=0; 
                                                      foreach ($event->programschedule as $events) 
                                                       {
                                                          if($i==0 && $events->day == "3" )
                                                                  {  
                                                                    echo $events->starttime."-". $events->endtime ;
                                                                  }
                                                                  $i++;

                                                       }  ?>   <br>                                  
                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                <?php foreach ($event->programschedule as $events) { 
                                                      $day1 = $events->day;
                                                      if($day1 == "3" )
                                                      {  ?>      
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                        <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                                      </strong><br>
                                                      <?php echo  $events->facilitator; ?> 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong><?php echo $events->agenda; ?>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong><?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?></strong><br>
                                                    </td>
                                                </tr>

                                                <?php } } ?>  
                                                
                                            </tbody>
                                          </table>

                                          </div>

                                    </div>
                              </div>


                                        <div class="tab-pane fade" id="faq-cat-3">
                                              <div class="col-md-12 text-center clr" style="margin-bottom:20px;">
                                                <h4 style="color:#fff; line-height:30px;">Event Discussions<br>
                                                  <span style="font-size:28px;"> 
                                                     <img src="../assets/images/wow-white-big.png">
                                                    <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                  </span></h4>
                                              </div>
                                              <div class="row" style="margin-top:10px;">
                                                <div class="col-md-12">
                                                  <div class="col-md-1"><img src="http://104.197.80.225:8080/wowhubb/assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> </div>
                                                  <div class="col-md-11">
                                                    <div class="pull-left">
                                                      <h3 style="margin-top:0; font-size:16px; color:#333;">
                                                       <img src="../assets/images/wow-black-small.png"> Dr.Segun</h3>
                                                      How was the event today? </div>
                                                    <div class="pull-right">Nov 27, 11:23 AM</div>
                                                  </div>
                                                  <div class="col-md-12 line-divider" style="margin-top:10px;"></div>
                                                </div>
                                              </div>

                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="col-md-1"><img src="../assets/images/users/user-2.jpg" alt="" class="profile-photo-sm"> </div>
                                              <div class="col-md-11">
                                                <div class="pull-left">
                                                  <h3 style="margin-top:0; font-size:16px; color:#333;"><img src="../assets/images/wow-black-small.png"> Dr.John walkers</h3>
                                                  Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu </div>
                                                <div class="pull-right">Nov 27, 12:23 PM</div>
                                              </div>
                                              <div class="col-md-12 line-divider" style="margin-top:10px;"></div>
                                            </div>
                                          </div>

                                          <div class="row" style="margin-top:200px;">
                                            <div class="col-md-12" style="background-color:#f5f5f5;">
                                              <div class="row" style="margin-top:10px;">
                                                <div class="col-md-1"> <img src="../assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> </div>
                                                <div class="col-md-9">
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px;">
                                                  </div>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                  <button class="btn-primary">Send</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                       <!-- four tab view -->

                                      <div class="tab-pane fade" id="faq-cat-4">
                                          <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                            <h4 style="color:#fff; line-height:30px;">Event Tours<br>
                                              <span style="font-size:28px;">
                                                <img src="../assets/images/wow-white-big.png">
                                                <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span></h4>
                                          </div>

                                          <?php 

                                                foreach ($event->eventvenue as $eventvenues) 
                                                {
                                                
                                              
                                          ?>

                                          <div class="col-md-12 pnl-brdr-clr">

                                            <div class="col-md-8">
                                              <div style="width:35%;" class="pull-left"><img src="../assets/images/city-1.jpg" class="img-responsive"/></div>
                                              <div style="width:65%;" class="pull-left">
                                                <div style="width:100%; padding:10px 5px; background-color:#333; color:#fff;" class="pull-left">
                                                  <div class="pull-left">

                                                    <?php if(isset($eventvenues->eventvenuecountry)) { echo $eventvenues->eventvenuecountry; } ?>
                                                      
                                                  </div>

                                                  <div class="pull-right">
                                                      <?php
                                                          if(isset($eventvenues->eventvenuestartdate) ) 
                                                          {
                                                              $timestamp = strtotime($eventvenues->eventvenuestartdate);                                              
                                                              echo date('M &\nb\sp;', $timestamp); 

                                                             $timestamp = strtotime($eventvenues->eventvenuestartdate);
                                                             echo date('d', $timestamp);  
                                                          ?>
                                                            -
                                                          <?php
                                                             $timestamp = strtotime($eventvenues->eventvenueenddate);
                                                             echo date('d', $timestamp); 
                                                          }                                   
                                                      ?>
                                                 
                                                  </div>

                                                </div>
                                                <p style="padding:10px;">Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. <br>
                                                  <a>
                                                    <?php if(isset($eventvenues->eventvenuename)) { echo $eventvenues->eventvenuename; } ?>
                                                      
                                                    </a><br>
                                                  <a>
                                                     <?php if(isset($eventvenues->eventvenueaddress1))
                                                      { 
                                                        echo $eventvenues->eventvenueaddress1." ".$eventvenues->eventvenuecity." ".$eventvenues->eventvenuezipcode ;
                                                      } ?>
                                                  </a></p>
                                              </div>
                                            </div>
         
                                            <div class="col-md-4">
                                              <div style="width:100%; padding:10px 25px; background-color:#333; color:#fff; font-size:16px;" class="pull-left">
                                                <div class="pull-left">
                                                    <img src="../assets/images/wow-white-big.png">
                                                   <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                </div>
                                                <div class="pull-right"><span style="color:#fc6653;">
                                                   <?php if(isset($eventvenues->eventvenueticketprice) ) { echo "$"." ".$eventvenues->eventvenueticketprice; } else {echo " "; } ?>
                                                </span></div>
                                              </div>
                                              <div style="width:100%; margin-top:15px; color:#333;" class="pull-left text-center">
                                                <p style="font-size:16px;">
                                                  <?php
                                                          if(isset($eventvenues->eventvenuestartdate) ) 
                                                          {
                                                             
                                                             $timestamp = strtotime($eventvenues->eventvenuestartdate);
                                                             echo date('h:i A', $timestamp);  
                                                          ?>
                                                            -
                                                          <?php
                                                             $timestamp = strtotime($eventvenues->eventvenueenddate);
                                                             echo date('h:i A', $timestamp); 
                                                          }                                   
                                                      ?>

                                                </p>
                                              </div>
                                              <div style="width:100%; color:#333;" class="pull-left text-center">
                                                <p>
                                                  <button class="btn-primary" style="padding: 2px 25px;">Grab Your Tickets</button>
                                                </p>
                                              </div>
                                            </div>

                                          </div>

                                          <?php  } ?>

                                         
                                      </div>
                          </div>
                      </div>

                      

  <!-- professional event end here -->


  <!-- social event start here -->

                      <?php 
                            } else  if($event->eventtype == 'socia1_event') 
                              {
                      ?>
                          <!-- social event info -->
                       <div class="col-md-4">
                                      <div class="col-md-12">
                                        <h4>Social Event Info</h4>
                                      </div>
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>                                         
                                          <tr>
                                            <td height="40" colspan="2" bgcolor="#f9f9f9">
                                              <strong style="font-size:16px;">Description </strong>         
                                            </td>
                                          </tr>
                                          <tr>
                                            <td height="40" colspan="2" bgcolor="#fff"><?php echo $event->eventdescription; ?> </td>
                                          </tr>          

                                                  <!-- social event -->
                                                    <?php 
                                                    if(isset($event->eventstartdate))
                                                        { ?>
                                                      <tr>
                                                        <td width="24%" bgcolor="#f9f9f9"><strong>
                                                            <i class="fa fa-calendar"></i> Date</strong>
                                                        </td>
                                                        <td width="75%" height="40" bgcolor="#f9f9f9">
                                                          <strong> 
                                                                
                                                                      <?php 
                                                                          
                                                                               $timestamp = strtotime($event->eventstartdate);
                                                                                echo date('D d Y', $timestamp);
                                                                      ?> -  <span style="font-size:10px; color:#333;"></span> 
                                                                      <?php 
                                                                                $timestamp = strtotime($event->eventenddate);
                                                                                 echo date('D d Y', $timestamp);                         
                                                                     ?> IST
                                                          </strong>
                                                        </td>
                                                      </tr>

                                                      <tr>
                                                        <td bgcolor="#ffffff"><strong><i class="fa fa-clock-o"></i> Time</strong></td>
                                                        <td height="40" bgcolor="#ffffff"> 
                                                          <strong> 
                                                            <?php 
                                                                     $timestamp = strtotime($event->eventstartdate);
                                                                      echo date(' h:i A', $timestamp);
                                                                  ?> -              
                                                                  <span style="font-size:10px; color:#333;"></span> 
                                                                  <?php 
                                                                     $timestamp = strtotime($event->eventenddate);
                                                                     echo date(' h:i A', $timestamp);
                                                             ?>
                                                         </strong>
                                                        </td>
                                                      </tr>

                                                      <?php } ?>

                                                       
                                    
                                                     
                                                        <tr>
                                                          <td bgcolor="#f9f9f9"> 
                                                            <strong>
                                                              <i class="fa fa-map-marker"></i> Venue
                                                            </strong>
                                                          </td>
                                                          <td height="40" bgcolor="#f9f9f9"> <?php if(isset($event->eventtimezone)){ echo $event->eventtimezone; } ?> </td>
                                                        </tr>   

                                                         <tr>
                                                          <td bgcolor="#ffffff"><strong>Ticket Link</strong></td>
                                                          <td height="40" bgcolor="#ffffff">
                                                            <span id="rtr-s-Text_206_1">
                                                            <a href="#">
                                                              <?php
                                                               
                                                                  foreach ($event->eventvenue as $eventvenues) 
                                                                  {
                                                                      if(isset( $eventvenues->eventvenueticketurl))                                                                 
                                                                     {
                                                                      echo $eventvenues->eventvenueticketurl;
                                                                      } 
                                                                  
                                                                  else { echo "" ; }  }
                                                              ?>                                                              
                                                            </a>
                                                            </span>
                                                          </td>
                                                        </tr>                                                     

                                                       <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:16px;">Event FAQs</strong></td>
                                                        </tr>

                                                         <?php 
                                                          if(isset($event->faqquestion1) && ($event->faqanswer1)) 
                                                            {
                                                        ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion1) && ($event->faqanswer1) ) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion1."</p>".$event->faqanswer1;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion2) && ($event->faqanswer2)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion2."</p>".$event->faqanswer2;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion3) && ($event->faqanswer3)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion3."</p>".$event->faqanswer3;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion4) && ($event->faqanswer4)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion4."</p>".$event->faqanswer4;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <?php } else { ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff"> You miss to add your Event FAQ's </td>
                                                        </tr>

                                                        <?php } ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:16px;">Event Sponsors Details</strong></td>
                                                        </tr>
                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">Soundbeat  Jam Club</td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                            <?php if(isset( $event->donationsurl)) { echo $event->donationsurl; } else { echo "" ; } ?>
                                                          </td>
                                                        </tr>

                                                        <tr >
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9">
                                                            <strong style="font-size:16px;">
                                                                
                                                                Contact Event Organisers
                                                            </strong>
                                                          </td>
                                                        </tr>

                                                        
                                                        <tr id="hide_contact_form">
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                            <div class="form-group" >
                                                              <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1; font-size: 13px;">
                                                                  <option value="Reason for Contact">Reason for Contact</option>
                                                                  <option value="Question About Event">Question About Event</option>
                                                                  <option value="Question About Event Tours">Question About Event Tours</option>
                                                                  <option value="Question About Event Tickets">Question About Event Tickets</option>
                                                                  <option value="Question About Event Logistics">Question About Event Logistics</option>
                                                              </select>
                                                            </div>
                                                            <div class='form-group' >
                                                              <input type='text' name="event_topic"  class="form-control textBox" placeholder="Your Name" />
                                                            </div>
                                                            <div class='form-group' >
                                                              <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Phone No (Optional)" />
                                                            </div>
                                                            <div class='form-group' >
                                                              <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Email" />
                                                            </div>
                                                            <div class='form-group' >
                                                              <textarea class="form-control" placeholder="Your Message" style="min-height:150px;"> </textarea>
                                                               <em style="color: #2980b9;"> Information Provided Here is only seen by Event organizers</em> 
                                                            </div>

                                                              <div class='form-group'>
                                                                <button type="button" class="btn btn-primary">Cancel</button>
                                                                <button type="button" class="btn btn-primary">Submit</button>
                                                              </div>
                                                            </td>
                                                        </tr>
                                                     

                                                    </tbody>
                                                  </table>
                                              </div>

                                         <!-- end with social event info-->


                     
                      <div class="col-md-8"> 
                            <!-- Nav tabs category -->
                              <ul class="nav nav-tabs faq-cat-tabs">
                                  <li class="active" style="width: 25%;"><a href="#faq-cat-1" data-toggle="tab" class="text-center">Event Highlights</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-2" data-toggle="tab" class="text-center">Event Schedule</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-3" data-toggle="tab" class="text-center">Event Discussions</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-4" data-toggle="tab" class="text-center">Event Tours</a></li> 
                              </ul>

                          <div class="tab-content faq-cat-content">                                  

                                    <div class="tab-pane active in fade" id="faq-cat-1">                                      

                                        <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                          <h4 style="color:#fff; line-height:30px;">Event Highlights<br>
                                            <span style="font-size:28px;">
                                               <img src="../assets/images/wow-white-big.png">
                                              <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                            </span></h4>
                                        </div>

                                          

                                        <div class="col-md-12 pnl-brdr-clr">
                                          <?php if(isset($event->eventspeakername1)) { ?>
                                            <div class="col-md-5">

                                              <?php if(isset($event->eventhighlights1) && (($event->eventhighlights1) != 'null')  )

                                              { ?>

                                              <div style="width:27%;" class="pull-left">
                                                <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlights1; ?>" class="img-thumbnail"  />
                                              </div>
                                              <?php } ?>  

                                              <div style="width:73%;" class="pull-left">
                                                <?php if(isset($event->eventhighlightsvideo1) && (($event->eventhighlightsvideo1) != 'null')  ) { ?>

                                            <div id="vidBox">
                                              <div id="videCont" style="margin-top: -19px!important;">
                                                <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo1; ?>" id="video-trigger">
                                                <video   id="demo"  style="width: 200px; height: 150px;" controls controlsList="nodownload">
                                                   <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo1; ?>" type="video/mp4">
                                                </video>
                                                </a>
                                              </div>
                                            </div>
                                           


                                                <?php } ?>
                                                <br>
                                                <h5 style="color:#333; line-height:20px;">
                                                  <?php echo $event->eventspeakername1; ?><br>
                                                <span style="font-size:12px;">
                                                   <?php echo $event->eventguesttype1; ?></span></h5>
                                              </div>

                                            </div>

                                          <div class="col-md-7">
                                            <h5 style="color:#333; line-height:20px;">!Cdaniells</h5>
                                            <p><?php echo $event->eventspeakeractivities1; ?></p>
                                            <a href="#"><?php echo $event->eventspeakerlink1; ?> </a>
                                          </div>
                                            <?php } else { echo "You didn't add any Event Highlights";  } ?>
                                        </div>

                                        <!-- event highlight 2 -->

                                        <?php if(isset($event->eventspeakername2)) { ?>

                                          <div class="col-md-12 pnl-brdr-clr">
                                            <div class="col-md-5">
                                              <?php if($event->eventhighlights2 != 'null'){ ?>
                                              <div style="width:27%;" class="pull-left">
                                                <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlights2; ?>" class="img-thumbnail"  />
                                              </div>
                                              <?php } ?>

                                              <div style="width:73%;" class="pull-left">
                                                  <video style="width: 200px; height: 150px;" controls controlsList="nodownload">
                                                    <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo2; ?>" type="video/mp4">
                                                  </video><br>
                                                <h5 style="color:#333; line-height:20px;"><?php echo $event->eventspeakername2; ?><br>
                                                  <span style="font-size:12px;">
                                                    <?php echo $event->eventguesttype2; ?>
                                                  </span></h5>
                                              </div>
                                            </div>
                                            <div class="col-md-7">
                                              <h5 style="color:#333; line-height:20px;">!Tdjakes</h5>
                                              <p> <?php echo $event->eventspeakeractivities2; ?></p>
                                              <a href="#"><?php echo $event->eventspeakerlink2; ?></a>
                                            </div>

                                          </div> 
                                        <?php } ?>
                                    </div>
                                    

                              <div class="tab-pane fade" id="faq-cat-2">
                                    <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:10px;">
                                              <h4 style="color:#fff; line-height:30px;">Event Schedule<br>
                                              <span style="font-size:28px;">
                                                 <img src="../assets/images/wow-white-big.png">
                                               <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span></h4>
                                    </div>

                                  
                                    <ul class="nav nav-tabs faq-cat-tabs">
                                      <li class="active"><a href="#faq-cat-5" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day1 
                                       </a></li>
                                      <li><a href="#faq-cat-6" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day2 
                                        </a></li>
                                      <li><a href="#faq-cat-7" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day3 </a></li>
                                    </ul>
                                  

                                    <div class="tab-content faq-cat-content">  

                                        <!-- day1       -->
                                        <div class="tab-pane active in fade" id="faq-cat-5">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    <?php 
                                                      $i=0; 
                                                      foreach ($event->programschedule as $events) 
                                                       {
                                                          if($i==0 && $events->day == "1" )
                                                                  {  
                                                                    echo $events->starttime."-". $events->endtime ; 
                                                                    
                                                                  }
                                                                  $i++;

                                                       }  ?>                                                        
                                                                  
                                                      <br>

                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                <?php foreach ($event->programschedule as $events) { 
                                                      $day1 = $events->day;
                                                      if($day1 == "1" )
                                                      {  ?>      
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                        <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                                      </strong><br>Event Facilitator:
                                                      <?php echo  $events->facilitator; ?> 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong><?php echo $events->agenda; ?>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong><?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?></strong><br>
                                                    </td>
                                                </tr>

                                                <?php } } ?>  

                                                
                                            </tbody>
                                          </table>
                                        </div>

                                        <!-- day2 -->

                                          <div class="tab-pane fade" id="faq-cat-6"> 

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    <?php 
                                                      $i=0; 
                                                      foreach ($event->programschedule as $events) 
                                                       {
                                                          if($i==0 && $events->day == "2" )
                                                                  {  
                                                                    echo $events->starttime."-". $events->endtime ;
                                                                  }
                                                                  $i++;

                                                       }  ?>   <br>                                  
                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                <?php foreach ($event->programschedule as $events) { 
                                                      $day1 = $events->day;
                                                      if($day1 == "2" )
                                                      {  ?>      
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                        <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                                      </strong><br>
                                                      <?php echo  $events->facilitator; ?> 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong><?php echo $events->agenda; ?>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong><?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?></strong><br>
                                                    </td>
                                                </tr>

                                                <?php } } ?>  

                                            </tbody>
                                          </table>

                                          </div>

                                          <!-- day 3  -->
                                          <div class="tab-pane fade" id="faq-cat-7"> 

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    <?php 
                                                      $i=0; 
                                                      foreach ($event->programschedule as $events) 
                                                       {
                                                          if($i==0 && $events->day == "3" )
                                                                  {  
                                                                    echo $events->starttime."-". $events->endtime ;
                                                                  }
                                                                  $i++;

                                                       }  ?>   <br>                                  
                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                <?php foreach ($event->programschedule as $events) { 
                                                      $day1 = $events->day;
                                                      if($day1 == "3" )
                                                      {  ?>      
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                        <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                                      </strong><br>
                                                      <?php echo  $events->facilitator; ?> 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong><?php echo $events->agenda; ?>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong><?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?></strong><br>
                                                    </td>
                                                </tr>

                                                <?php } } ?>  
                                                
                                            </tbody>
                                          </table>

                                          </div>

                                    </div>
                              </div>


                                        <div class="tab-pane fade" id="faq-cat-3">
                                              <div class="col-md-12 text-center clr" style="margin-bottom:20px;">
                                                <h4 style="color:#fff; line-height:30px;">Event Discussions<br>
                                                  <span style="font-size:28px;"> 
                                                     <img src="../assets/images/wow-white-big.png">
                                                    <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                  </span></h4>
                                              </div>
                                              <div class="row" style="margin-top:10px;">
                                                <div class="col-md-12">
                                                  <div class="col-md-1"><img src="http://104.197.80.225:8080/wowhubb/assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> </div>
                                                  <div class="col-md-11">
                                                    <div class="pull-left">
                                                      <h3 style="margin-top:0; font-size:16px; color:#333;">
                                                       <img src="../assets/images/wow-black-small.png"> Dr.Segun</h3>
                                                      How was the event today? </div>
                                                    <div class="pull-right">Nov 27, 11:23 AM</div>
                                                  </div>
                                                  <div class="col-md-12 line-divider" style="margin-top:10px;"></div>
                                                </div>
                                              </div>

                                          <div class="row">
                                            <div class="col-md-12">
                                              <div class="col-md-1"><img src="../assets/images/users/user-2.jpg" alt="" class="profile-photo-sm"> </div>
                                              <div class="col-md-11">
                                                <div class="pull-left">
                                                  <h3 style="margin-top:0; font-size:16px; color:#333;"><img src="../assets/images/wow-black-small.png"> Dr.John walkers</h3>
                                                  Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu </div>
                                                <div class="pull-right">Nov 27, 12:23 PM</div>
                                              </div>
                                              <div class="col-md-12 line-divider" style="margin-top:10px;"></div>
                                            </div>
                                          </div>

                                          <div class="row" style="margin-top:200px;">
                                            <div class="col-md-12" style="background-color:#f5f5f5;">
                                              <div class="row" style="margin-top:10px;">
                                                <div class="col-md-1"> <img src="../assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> </div>
                                                <div class="col-md-9">
                                                  <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px;">
                                                  </div>
                                                </div>
                                                <div class="col-md-2 text-center">
                                                  <button class="btn-primary">Send</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                       <!-- four tab view -->

                                      <div class="tab-pane fade" id="faq-cat-4">
                                          <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                            <h4 style="color:#fff; line-height:30px;">Event Tours<br>
                                              <span style="font-size:28px;">
                                                <img src="../assets/images/wow-white-big.png">
                                                <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span></h4>
                                          </div>

                                          <?php 

                                                foreach ($event->eventvenue as $eventvenues) 
                                                {
                                                
                                              
                                          ?>

                                          <div class="col-md-12 pnl-brdr-clr">

                                            <div class="col-md-8">
                                              <div style="width:35%;" class="pull-left"><img src="../assets/images/city-1.jpg" class="img-responsive"/></div>
                                              <div style="width:65%;" class="pull-left">
                                                <div style="width:100%; padding:10px 5px; background-color:#333; color:#fff;" class="pull-left">
                                                  <div class="pull-left">

                                                    <?php if(isset($eventvenues->eventvenuecountry)) { echo $eventvenues->eventvenuecountry; } ?>
                                                      
                                                  </div>

                                                  <div class="pull-right">
                                                      <?php
                                                          if(isset($eventvenues->eventvenuestartdate) ) 
                                                          {
                                                              $timestamp = strtotime($eventvenues->eventvenuestartdate);                                              
                                                              echo date('M &\nb\sp;', $timestamp); 

                                                             $timestamp = strtotime($eventvenues->eventvenuestartdate);
                                                             echo date('d', $timestamp);  
                                                          ?>
                                                            -
                                                          <?php
                                                             $timestamp = strtotime($eventvenues->eventvenueenddate);
                                                             echo date('d', $timestamp); 
                                                          }                                   
                                                      ?>
                                                 
                                                  </div>

                                                </div>
                                                <p style="padding:10px;">Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. <br>
                                                  <a>
                                                    <?php if(isset($eventvenues->eventvenuename)) { echo $eventvenues->eventvenuename; } ?>
                                                      
                                                    </a><br>
                                                  <a>
                                                     <?php if(isset($eventvenues->eventvenueaddress1))
                                                      { 
                                                        echo $eventvenues->eventvenueaddress1." ".$eventvenues->eventvenuecity." ".$eventvenues->eventvenuezipcode ;
                                                      } ?>
                                                  </a></p>
                                              </div>
                                            </div>
         
                                            <div class="col-md-4">
                                              <div style="width:100%; padding:10px 25px; background-color:#333; color:#fff; font-size:16px;" class="pull-left">
                                                <div class="pull-left">
                                                    <img src="../assets/images/wow-white-big.png">
                                                   <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                </div>
                                                <div class="pull-right"><span style="color:#fc6653;">
                                                   <?php if(isset($eventvenues->eventvenueticketprice) ) { echo "$"." ".$eventvenues->eventvenueticketprice; } else {echo " "; } ?>
                                                </span></div>
                                              </div>
                                              <div style="width:100%; margin-top:15px; color:#333;" class="pull-left text-center">
                                                <p style="font-size:16px;">
                                                  <?php
                                                          if(isset($eventvenues->eventvenuestartdate) ) 
                                                          {
                                                             
                                                             $timestamp = strtotime($eventvenues->eventvenuestartdate);
                                                             echo date('h:i A', $timestamp);  
                                                          ?>
                                                            -
                                                          <?php
                                                             $timestamp = strtotime($eventvenues->eventvenueenddate);
                                                             echo date('h:i A', $timestamp); 
                                                          }                                   
                                                      ?>

                                                </p>
                                              </div>
                                              <div style="width:100%; color:#333;" class="pull-left text-center">
                                                <p>
                                                  <button class="btn-primary" style="padding: 2px 25px;">Grab Your Tickets</button>
                                                </p>
                                              </div>
                                            </div>

                                          </div>

                                          <?php  } ?>

                                         
                                      </div>
                          </div>
                      </div>

                      

  <!-- social event end here -->



  <!-- business event start here -->

                      <?php 
                             }else
                              {
                      ?>

                        <!-- sales event info -->
                       <div class="col-md-4">
                                      <div class="col-md-12">
                                        <h4>Sales Event Info</h4>
                                      </div>
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>                                         
                                          <tr>
                                            <td height="40" colspan="2" bgcolor="#f9f9f9">
                                              <strong style="font-size:16px;">Description </strong>         
                                            </td>
                                          </tr>
                                          <tr>
                                            <td height="40" colspan="2" bgcolor="#fff"><?php echo $event->eventdescription; ?> </td>
                                          </tr>        


                                                        <tr>
                                                          <td bgcolor="#f9f9f9"> 
                                                            <strong>
                                                              <i class="fa fa-map-marker"></i> Offer
                                                            </strong>
                                                          </td>
                                                          <td height="40" bgcolor="#f9f9f9"> 
                                                            <?php 
                                                                    $timestamp = strtotime($event->runtimefrom);
                                                                                echo date('F ', $timestamp);  //F is full month name show
                                                                          
                                                                               $timestamp = strtotime($event->runtimefrom);
                                                                                echo date('dS', $timestamp);
                                                                      ?> -  <span style="font-size:10px; color:#333;"></span> 
                                                                      <?php 
                                                                                $timestamp = strtotime($event->runtimeto);
                                                                                 echo date('dS ', $timestamp);                         
                                                            ?>


                                                           </td>
                                                        </tr> 

                                                        <tr>
                                                          <td bgcolor="#f9f9f9"> 
                                                            <strong>
                                                              <i class="fa fa-map-marker"></i> Target Near me
                                                            </strong>
                                                          </td>
                                                          <td height="40" bgcolor="#f9f9f9"> <?php if(isset($event->eventtimezone)){ echo $event->eventtimezone; } ?> </td>
                                                        </tr> 

                                                       
                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:16px;">Sales Event FAQs</strong></td>
                                                        </tr>

                                                         <?php 
                                                          if(isset($event->faqquestion1) && ($event->faqanswer1)) 
                                                            {
                                                        ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion1) && ($event->faqanswer1) ) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion1."</p>".$event->faqanswer1;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion2) && ($event->faqanswer2)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion2."</p>".$event->faqanswer2;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion3) && ($event->faqanswer3)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion3."</p>".$event->faqanswer3;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion4) && ($event->faqanswer4)) 
                                                                    {
                                                                      echo "<p style='font-size:15px;'>".$event->faqquestion4."</p>".$event->faqanswer4;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <?php } else { ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff"> You miss to add your Event FAQ's </td>
                                                        </tr>

                                                        <?php } ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:16px;">Event Sponsors Details</strong></td>
                                                        </tr>
                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">Soundbeat  Jam Club</td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                            <?php if(isset( $event->donationsurl)) { echo $event->donationsurl; } else { echo "" ; } ?>
                                                          </td>
                                                        </tr>

                                                    </tbody>
                                                  </table>
                                              </div>

                                         <!-- end with personal event info-->

                     
                      <!-- sales event details -->
                      <div class="col-md-8"> 
                            <!-- Nav tabs category -->
                             

                          <div class="tab-content faq-cat-content">
                                  

                                    <div class="tab-pane active in fade" id="faq-cat-1">                                    

                                        <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                          <h4 style="color:#fff; line-height:30px;">
                                            <span style="font-size:28px;">
                                               <img src="../assets/images/wow-white-big.png">
                                              <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                            </span> <br>
                                            <?php if(isset($event->eventname) ) { echo $event->eventname; } else {echo " "; } ?>
                                         </h4>
                                        </div>
                                          
                                        <!-- here add business event details  first set-->

                                         <div class="col-md-12 pnl-brdr-clr">

                                            <div class="col-md-8">
                                              <div style="width:35%;" class="pull-left">
                                                 <?php  if(isset($event->eventsalescoupon1 ) && ($event->eventsalescoupon1 != 'null') ) { ?>
                                                  <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventsalescoupon1; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                                   <?php } else {  ?>
                                                <img src="../assets/images/sales-1.png" class="img-responsive">
                                                <?php }  ?>  
                                              </div>
                                              <div style="width:65%;" class="pull-left">
                                                <div style="width:100%; padding:10px 5px; background-color:#333; color:#fff;" class="pull-left">
                                                  <div class="pull-left">

                                                    Teen Back To School Wears                                                     
                                                  </div>

                                                  

                                                </div>
                                                <p style="padding:10px;">Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. <br>
                                                  <a>
                                                      <?php  
                                                            if(isset($event->onlinesalespromotionurl))
                                                            {
                                                               echo "Sponsors ".$event->onlinesalespromotionurl; 
                                                            }
                                                      ?>                                             
                                                    </a></p>
                                              </div>
                                            </div>
         
                                            <div class="col-md-4">
                                              <div style="width:100%; padding:10px 10px; background-color:#333; color:#fff; font-size:13px;" class="pull-left">
                                                <div class="pull-left">
                                                    
                                                   <?php
                                                        if(isset($event->eventsalesdiscount1) ) 
                                                        {                                                      
                                                           echo $event->eventsalesdiscount1." Off on all Sales";
                                                        }                                          
                                                   ?>                                      
                                                 </div>
                                                <div class="pull-right"><span style="color:#fc6653; font-size:15px;">
                                                   11:59s                                                </span></div>
                                              </div>
                                              <div style="width:100%; margin-top:15px; color:#333;" class="pull-left text-center">
                                                <p style="font-size:16px;">
                                                  7:00AM - 4:00PM
                                                </p>
                                              </div>
                                              <div style="width:100%; color:#333;" class="pull-left text-center">
                                                <p>
                                                  <button class="btn-primary" style="padding: 2px 25px;">Grab Your Coupons</button>
                                                </p>
                                              </div>
                                            </div>

                                          </div>                                        

                                        <!-- event coupon 2 -->

                                         <div class="col-md-12 pnl-brdr-clr">

                                            <div class="col-md-8">
                                              <div style="width:35%;" class="pull-left">
                                                 <?php  if(isset($event->eventsalescoupon2 ) && ($event->eventsalescoupon2 != 'null') ) { ?>
                                                  <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventsalescoupon2; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                                   <?php } else {  ?>
                                                <img src="../assets/images/sales-1.png" class="img-responsive">
                                                <?php }  ?>  
                                              </div>
                                              <div style="width:65%;" class="pull-left">
                                                <div style="width:100%; padding:10px 5px; background-color:#333; color:#fff;" class="pull-left">
                                                  <div class="pull-left">

                                                    Teen Back To School Wears                                                     
                                                  </div>

                                                  

                                                </div>
                                                <p style="padding:10px;">Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. <br>
                                                  <a>
                                                     <?php  
                                                            if(isset($event->onlinesalespromotionur2))
                                                            {
                                                               echo "Sponsors ".$event->onlinesalespromotionur2; 
                                                            }
                                                      ?>                                                       
                                                    </a></p>
                                              </div>
                                            </div>
         
                                            <div class="col-md-4">
                                              <div style="width:100%; padding:10px 10px; background-color:#333; color:#fff; font-size:13px;" class="pull-left">
                                                <div class="pull-left">                                                    
                                                   <?php
                                                        if(isset($event->eventsalesdiscount2) ) 
                                                        {                                                      
                                                           echo $event->eventsalesdiscount2." Off on all Sales";
                                                        }                                          
                                                   ?>                                                  </div>
                                                <div class="pull-right"><span style="color:#fc6653; font-size:15px;">
                                                   11:59s                                                </span></div>
                                              </div>
                                              <div style="width:100%; margin-top:15px; color:#333;" class="pull-left text-center">
                                                <p style="font-size:16px;">
                                                  7:00AM - 4:00PM
                                                </p>
                                              </div>
                                              <div style="width:100%; color:#333;" class="pull-left text-center">
                                                <p>
                                                  <button class="btn-primary" style="padding: 2px 25px;">Grab Your Coupons</button>
                                                </p>
                                              </div>
                                            </div>

                                          </div>
                                    </div>
                                    

                             

                                        

                                       

                          </div>
                      </div>

                      <?php } ?>

  <!-- business event end here -->

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
<script src="<?php echo base_url('assets/js/videopopup.js')?>"></script> 

<script>


  $(function () {
 $('#vidBox').VideoPopUp({
  opener: "video-trigger"
  idvideo: "demo"
  });
});

</script>




</body>
</html>
