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
table{
  border-spacing: 5px;
}
td {
	padding:0 0 0 15px;
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
  font-size: 15px;
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

.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
  border-bottom: 0;
}

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}

.tab-content > .active,
.pill-content > .active {
  display: block;
}


.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
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

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
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
</style>
</head>
<body>

<!-- Header
    ================================================= -->
    <header id="header">
            <nav class="navbar navbar-default navbar-fixed-top menu">
                 <div class="container">       
             <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                           <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>">
                           <img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> 
                      </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                         <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
                              <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span>
                              </a> 
                              <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span>
                              </a> 
                              <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span>
                              </a>
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
                                   <h3 style="color:#fff;"><?php echo $event->eventname; ?></h3>
                                </div>
                          </div>
                          <div class="col-md-8">                
                            <ul class="follow-me list-inline">
                              <li>
                                  <?php echo $event->wowsomecount.' '. 'wowsome'; ?> &nbsp;&nbsp; Comments
                              </li>
                              <li>
                                <button class="btn-primary" style="padding: 2px 25px;">RSVP</button>
                              </li>             
                            </ul>
                          </div>
                          <div class="col-md-1">
                                <div class="pull-right" style="margin-top:12px; margin-right:30px;">
                                    <a href="#" style="text-decoration:none;"> &nbsp;&nbsp;<img src="<?php echo base_url ('assets/images/play-button.png') ?>" alt="logo" />
                                    </a>
                                </div>
                          </div>
                      </div>
                  </div><!--Timeline Menu for Large Screens End-->
        </div>
  <!--Timeline Menu for Large Screens-->
                      <div class="navbar-mobile hidden-lg hidden-md">
                             <div class="profile-info">                  
                                    <h3 style="color:#fff;">!Craigs Birthday</h3>
                             </div>
                              <div class="mobile-menu">              
                                <button class="btn-primary">RSVP</button>
                                <a href="#" style="text-decoration:none;"> &nbsp;&nbsp;
                                  <img src="<?php echo base_url ('assets/images/play-button.png') ?>" alt="logo" />
                                </a>
                              </div>
                      </div>
  
        <div id="page-contents" style="padding-top:10px; background-color: #fff;">  
              <div class="row">
                    <div class="col-md-12">
                         <div id="exTab2" >
                              <ul class="nav nav-tabs">
                                <li class="active">
                                   <a href="#1" data-toggle="tab">Event Info</a> 
                                </li>
                                <li><a href="#2" data-toggle="tab">Event Highlights</a> </li>
                                <li><a href="#3" data-toggle="tab">Event Schedule</a> </li>
                                <li><a href="#4" data-toggle="tab">Event Discussions</a> </li>
                              </ul>
                          <div class="tab-content ">
                            <div class="tab-pane active" id="1" style="margin-top: 20px;">
                              <div class="row">
                                <div class="col-md-12">                  
                                  <div class="col-md-6" >
                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                              <tr>
                                                <td><strong>Description</strong></td> 
                                                    <td>
                                                          <?php echo $event->eventcontactmessage; ?>
                                                    </td> 
                                              </tr>
                                              <tr> 
                                                <td width="24%" bgcolor="#f9f9f9">
                                                  <strong><i class="fa fa-calendar"></i> Date
                                                  </strong>
                                                </td>                     
                                                <td width="75%" height="40" bgcolor="#f9f9f9">
                                                  <?php 
                                                    $timestamp = strtotime($event->eventstartdate);
                                                    echo date('D d Y', $timestamp);
                                                  ?> -              
                                                  <span style="font-size:10px; color:#333;"></span> 
                                                  <?php 
                                                      $timestamp = strtotime($event->eventenddate);
                                                       echo date('D d Y', $timestamp);                          
                                                  ?>
                                                   IST
                         
                                                </td>
                                              </tr>
                                              <tr>
                                                <td bgcolor="#ffffff">
                                                  <strong><i class="fa fa-clock-o"></i> Time
                                                  </strong>
                                                </td>   
                                                <td height="40" bgcolor="#ffffff">
                                                  <?php 
                                                     $timestamp = strtotime($event->eventstartdate);
                                                      echo date(' h:i A', $timestamp);
                                                  ?> -              
                                                  <span style="font-size:10px; color:#333;"></span> 
                                                  <?php 
                                                     $timestamp = strtotime($event->eventenddate);
                                                     echo date(' h:i A', $timestamp);
                                                  ?>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td bgcolor="#f9f9f9">
                                                  <strong><i class="fa fa-map-marker"></i> Venue
                                                  </strong>
                                                </td>                      
                                                <td height="40" bgcolor="#f9f9f9">
                                                  <?php echo $event->eventtimezone; ?>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td bgcolor="#ffffff">
                                                  <strong>Gift Registry URL</strong>
                                                </td>                      
                                                <td height="40" bgcolor="#ffffff">
                                                  <span id="rtr-s-Text_206_1">
                                                    <a href="#"><?php echo $event->giftregistryurl; ?></a>
                                                  </span>
                                                </td>
                                              </tr>
                                              <tr>
                                                <td bgcolor="#f9f9f9">
                                                  <strong>Donation URL</strong>
                                                </td>                      
                                                <td height="40" bgcolor="#f9f9f9">
                                                  <a href="#"><?php echo $event->donationsurl; ?></a>
                                                </td>
                                              </tr>

                                        </tbody>
                                      </table>
                                  </div>              
                
                                  <div class="col-md-6" style="margin-top:5px;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d631.4248051165667!2d-95.5490684!3d29.7161023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c2d9ac045da3%3A0x875214246d49a380!2s5800+Ranchester+Dr+%23168%2C+Houston%2C+TX+77036%2C+USA!5e1!3m2!1sen!2sin!4v1477376746471" width="100%" height="225" frameborder="0" style="border:0" allowfullscreen>
                                    </iframe>                  
                                  </div>
                                </div> 

                                  <div class="col-md-12">
                                     <div class="col-md-12">
                                         <a class="btn text-blue"><i class="icon ion-thumbsup"></i> Wowsomes </a>
                                         <a class="btn text-green"><i class="fa fa-share"></i> Shares</a>
                                         <a class="btn text-red"><i class="fa fa-comments"></i> Comments</a> 
                                      </div>
                                  </div>         
                              </div>
                            </div>

            <!--  Event Highlights 1 -->
            
                          <div class="tab-pane" id="2" style="margin:10px;">
                            <div class="row">
                              <div class="col-md-12 text-center" style="background-color: #FEC4B7;"> 
                                    <h3 style="font-size:21px; margin:10px 0;">Event Highlight <br>
                                        <?php echo $event->eventname; ?>
                                    </h3>
                              </div>   
                                <div class="col-md-12" style="background-color: #F1EFEF; margin-top: 10px;">                 
                                  <table>
                                    <tr>
                                      <td>
                                        <img  style="width: 200px; height: 150px;" src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlights1; ?>"  alt="user" class="img-responsive img-thumbnail"/>
                                      </td>
                                      <td>
                                        <video style="width: 400px; height: 220px;" controls controlsList="nodownload">
                                           <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo1; ?>" type="video/mp4">
                                        </video>
                                      </td>
                                      <td>
                                        <?php echo $event->eventspeakeractivities1; ?> <br> <br>       <a href="#"><?php echo $event->eventspeakerlink1; ?> </a>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td> </td>
                                      <td> <?php echo $event->eventspeakername1; ?> <br> <?php echo $event->eventguesttype1; ?></td>
                                    </tr>
                                  </table>    
                                </div>  
                            </div> 

                <!-- event highlight 2 -->

                            <?php if($event->eventspeakeractivities2 != null)
                                   { ?>
                            <div class="row">
                              <div class="col-md-12" style="background-color: #F1EFEF; margin-top: 10px;">             
                                <table>
                                  <tr>
                                    <td>
                                      <img  style="width: 200px; height: 150px;" src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlights2; ?>"  alt="user" class="img-responsive img-thumbnail"/>
                                    </td>
                                    <td>
                                      <video style="width: 400px; height: 220px;" controls controlsList="nodownload">
                                         <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $event->eventhighlightsvideo2; ?>" type="video/mp4">
                                      </video>
                                    </td>
                                    <td>   
                                      <?php echo $event->eventspeakeractivities2; ?>  <br><br>       <a href="#"> <?php echo $event->eventspeakerlink2; ?></a>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td> </td>
                                    <td> <?php echo $event->eventspeakername2; ?> <br> <?php echo $event->eventguesttype2; ?></td>
                                    </tr>
                                </table>    
                              </div>  
                            </div> 
                            <?php } ?> 
                          </div>

            <!-- event schedule -->

            <div class="tab-pane" id="3" style="margin-top: 20px;">
                  <div class="row" style="margin-top:20px;">                       
                      <div class="col-md-12">
                           <div class="tabbable tabs-left">
                              <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#a" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Day 1</a>
                                </li>
                                <li>
                                    <a href="#b" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Day 2</a>
                                </li>                                
                                <li>
                                    <a href="#c" data-toggle="tab" style="background-color:transparent; color:#333; text-align:left; font-size:14px;">Day 3</a>
                                </li>
                              </ul> 

                        <div class="tab-content"> 
                          <!-- program schdule day 1 -->

                            <div class="tab-pane active" id="a">
                              <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                      <tr>
                                          <th style="text-align: center; ">  Event Duration  <br>
                                            <?php foreach ($event->programschedule as $events) { 
                                                   $day1 = $events->day;                           
                                                  if($day1 == "1" )
                                                  {  echo $events->starttime;  } } ?> 
                                          </th>
                                      </tr> 
                                      <tr>
                                          <td width="24%" bgcolor="#f9f9f9">
                                            <strong style="font-size:15px;"> Time</strong>
                                          </td>                     
                                          <td height="40" bgcolor="#f9f9f9">
                                            <strong style="font-size:15px;">Agenda </strong>
                                          </td>
                                          <td bgcolor="#f9f9f9">
                                            <strong style="font-size:15px;">facilitator</strong>
                                          </td>          
                                          <td bgcolor="#f9f9f9">
                                            <strong style="font-size:15px;">Location</strong>
                                          </td>
                                      </tr>

                                          <?php foreach ($event->programschedule as $events) { 
                                           $day1 = $events->day;                            
                                           if($day1 == "1" )
                                             {  ?>
                       
                                      <tr>
                                          <td bgcolor="#ffffff">
                                               <?php echo $events->itystarttime.' - ' .$events->ityendtime; ?>
                                          </td>   
                                          <td height="40" bgcolor="#ffffff"><?php echo $events->agenda; ?>
                                          </td>
                                          <td bgcolor="#ffffff">
                                              <?php echo  $events->facilitator; ?>
                                          </td>        
                                          <td align="left" valign="middle" bgcolor="#ffffff">
                                              <a href="#" style="color:#333;">
                                                  <i class="fa fa-map-marker"></i> 
                                                    <?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?>
                                              </a>
                                          </td>
                                      </tr>
                                     <?php } } ?>                     
                                </tbody>
                              </table>
                            </div>

                  <!-- program schdule day 2 -->

                            <div class="tab-pane" id="b">
                                <table width="90%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                       <tr>
                                          <td width="24%" bgcolor="#f9f9f9">
                                              <strong style="font-size:17px;"> Time</strong>
                                          </td>                     
                                          <td height="40" bgcolor="#f9f9f9">
                                              <strong style="font-size:17px;">Program </strong>
                                          </td>
                                          <td bgcolor="#f9f9f9">
                                              <strong style="font-size:17px;">Topic</strong>
                                          </td>          
                                          <td bgcolor="#f9f9f9">
                                              <strong style="font-size:17px;">Location</strong>
                                          </td>
                                       </tr>
                                <?php foreach ($event->programschedule as $events) { 
                                      $day1 = $events->day;
                                      if($day1 == "2" )
                                      {  ?>

                                        <tr>
                                          <td bgcolor="#ffffff">
                                             <?php echo $events->itystarttime.'-' .$events->ityendtime; ?>
                                          </td>   
                                          <td height="40" bgcolor="#ffffff">
                                              <?php echo $events->agenda; ?>
                                          </td>
                                          <td bgcolor="#ffffff">
                                              <?php echo  $events->facilitator; ?>
                                          </td>        
                                          <td align="left" valign="middle" bgcolor="#ffffff">
                                              <a href="#" style="color:#333;">
                                                  <i class="fa fa-map-marker"></i> 
                                                    <?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?>
                                              </a>
                                          </td>
                                        </tr>
                                
                                <?php } } ?>                   
                            </tbody>
                     </table>
                  </div>
                  <!-- program schdule day 3 -->
                  <div class="tab-pane" id="c"> 
                    <table width="90%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td width="24%" bgcolor="#f9f9f9"><strong style="font-size:17px;"> Time</strong></td>                     
                        <td height="40" bgcolor="#f9f9f9"><strong style="font-size:17px;">Program </strong></td>
                        <td bgcolor="#f9f9f9"><strong style="font-size:17px;">Topic</strong></td>          
                        <td bgcolor="#f9f9f9"><strong style="font-size:17px;">Location</strong></td>
                      </tr>
                       <?php foreach ($event->programschedule as $events) { 
                            $day1 = $events->day;
                            // print_r($day1);
                            if($day1 == "3" )
                             {
                        ?>

                      <tr>
                        <td bgcolor="#ffffff"> <?php echo $events->itystarttime.'-' .$events->ityendtime; ?></td>   
                        <td height="40" bgcolor="#ffffff"><?php echo $events->agenda; ?></td>
                        <td bgcolor="#ffffff"><?php echo  $events->facilitator; ?></td>        
                        <td align="left" valign="middle" bgcolor="#ffffff"><a href="#" style="color:#333;"><i class="fa fa-map-marker"></i> <?php if(isset( $events->location)){ echo  $events->location; } else { echo " ";} ?>
                        </a></td>
                      </tr>
                      <?php } } ?>                      
                     
                    </tbody>
                  </table>
                  </div>                  
               </div>
             </div>
              </div>
            </div>
            </div>

            <!-- Day 4 -->
             <div class="tab-pane" id="4" style="margin-top: 20px;">
               <div class="row">
                 <div class="col-md-12">
                   <div class="col-md-1"><img src="http://104.197.80.225:8080/wowhubb/assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> </div>
                   <div class="col-md-11">
                     <div class="pull-left">
                       <h3 style="margin-top:0; font-size:16px; color:#333;">!Dr.Segun</h3>
                       How was the event today?
                     </div>
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
                       <h3 style="margin-top:0; font-size:16px; color:#333;">!Dr.John walkers</h3>
                       Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu 
                     </div>
                     <div class="pull-right">Nov 27, 12:23 PM</div>
                   </div>
                   <div class="col-md-12 line-divider" style="margin-top:10px;"></div>
                 </div>
               </div>
               <div class="row" style="margin-top:200px;">
                 <div class="col-md-12" style="background-color:#f5f5f5;">
                 <div class="row" style="margin-top:10px;">
                 <div class="col-md-1"> 
                      <img src="http://104.197.80.225:8080/wowhubb/assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> 
                 </div>
                 <div class="col-md-9">
                   <div class="form-group">
                 
                         <input type="text" class="form-control" placeholder="Post a comment" style="margin:5px 0 0 5px;">
                   </div>
                       
                 </div>
                 <div class="col-md-2 text-center">
                      <button class="btn-primary">Send</button>
                 </div>
          </div></div>
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
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>
</body>
</html>
