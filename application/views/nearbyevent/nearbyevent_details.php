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
	font-size: 13px;
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
	font-size: 13px;
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
      <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
        <div class="container"> 
      
          <?php  include('/../includes/header.php'); ?>
        </div>
        <!-- /.container --> 
      </nav>
  </header>
<!--Header End-->

                                      <div class="container">
                                              <div class="timeline-cover-event-details" style="position: relative; min-height:220px;">
                                                 <img src="<?php echo $event->coverpageurl; ?>" style="background-size:cover; width:100%; max-height:220px;" />            
                                                <div class="timeline-nav-bar hidden-sm hidden-xs">
                                                  <div class="row">
                                                    <div class="col-md-3">
                                                      <div class="profile-info" style="top:-5px!important;">

                                                        <h3 style="color:#fff; font-size: 15px;">
                                                          <img src="../assets/images/wow-white-big.png"> 
                                                          <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                        </h3>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                      <ul class="follow-me list-inline">
                                                        <li>Wowsome &nbsp;&nbsp; Comments </li>
                                                        <!-- <li>
                                                          <button class="btn-primary" style="padding: 2px 25px;">RSVP</button>
                                                        </li> -->
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

          
  <!-- professional event start here -->

                      <?php 
                            if($event->eventtype == 'professional_event') 
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
                                              <strong style="font-size:13px;">Description </strong>         
                                            </td>
                                          </tr>
                                          <tr>
                                            <td height="40" colspan="2" bgcolor="#fff"><?php echo $event->eventdescription; ?> </td>
                                          </tr>          
                                              <!-- professional event -->
                                    
                                                      <tr>
                                                        <td width="24%" bgcolor="#f9f9f9">
                                                          <strong>
                                                            <i class="fa fa-calendar"></i> Date
                                                          </strong>
                                                        </td>
                                                        <td width="75%" height="40" bgcolor="#f9f9f9">
                                                          <strong> 
                                                                      <?php 
                                                                          
                                                                               $timestamp = strtotime($event->eventstartdate);
                                                                                echo date('D d M Y', $timestamp);
                                                                      ?> -  <span style="font-size:10px; color:#333;"></span> 
                                                                      <?php 
                                                                                $timestamp = strtotime($event->eventenddate);
                                                                                 echo date('D d M Y', $timestamp);                         
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

                                                     
                                                      <!-- end professional event date and time-->

                                                        <!-- event venue show start  here -->

                                                      <?php
                                                             foreach ($event->eventvenue as $eventvenues)
                                                                {
                                                            ?>
                                                        <tr>
                                                          
                                                          <td bgcolor="#f9f9f9"> 
                                                            <strong>
                                                              <i class="fa fa-map-marker"></i> Venue <?php echo $eventvenues->eventvenuenumber ; ?>
                                                            </strong>
                                                          </td>
                                                          <td height="40" bgcolor="#f9f9f9">                                                          
                                                             <?php   
                                                                if(isset($eventvenues->eventvenuecity))
                                                                {
                                                                  echo   $eventvenues->eventvenuename.", ".$eventvenues->eventvenuecity.", ".$eventvenues->eventvenueaddress1.", ".$eventvenues->eventvenuezipcode."<br>";
                                                                }
                                                                                              
                                                             ?>
                                                          </td>                                                       

                                                        </tr>  
                                                        <?php } ?>                                                         
                                                                      
                                                         <!-- event venue end show here -->
                                                         <tr>
                                                          <td bgcolor="#ffffff"><strong>Ticket URL</strong></td>
                                                          <td height="40" bgcolor="#ffffff">
                                                            <span id="rtr-s-Text_206_1">
                                                            <a href="#">
                                                              <?php
                                                                if(isset( $event->eventticketurl))
                                                                  {
                                                                    echo $event->eventticketurl;
                                                                  } 
                                                                  else { echo "Don't have any ticket URL" ; }  
                                                              ?>                                                              
                                                            </a>
                                                            </span>
                                                          </td>
                                                        </tr>                                                     

                                                       <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:13px;">Event FAQs</strong></td>
                                                        </tr>

                                                         <?php 
                                                          if(isset($event->faqquestion1) && ($event->faqanswer1)) 
                                                            {
                                                        ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion1) && ($event->faqanswer1) ) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion1."</p>".$event->faqanswer1;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion2) && ($event->faqanswer2)) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion2."</p>".$event->faqanswer2;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion3) && ($event->faqanswer3)) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion3."</p>".$event->faqanswer3;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion4) && ($event->faqanswer4)) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion4."</p>".$event->faqanswer4;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <?php } else { ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff"> You miss to add your Event FAQ's </td>
                                                        </tr>

                                                        <?php } 

                                                        if(!empty($event->eventfaqs))
                                                        {
                                                          $i=5;
                                                          foreach ($event->eventfaqs as $eventfaq) {
                                                          
                                                          ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset($eventfaq->faqquestion)) 
                                                                    {
                                                                      echo "<p style='font-size:13px; font-weight:bold;'>".$i.".".$eventfaq->faqquestion."</p>".$eventfaq->faqanswer;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td> 
                                                        </tr>

                                                       <?php $i++; } } ?>


                                                       <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:13px;">Event Sponsors Details</strong></td>
                                                        </tr>

                                                        <?php 
                                                              if(isset($event->eventcontactmessage) || ($event->eventcontactemail) || ($event->eventcontactphone) || ($event->eventcontactname) ) 
                                                                 { 
                                                        ?>
                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                            <?php 
                                                                  echo $event->eventcontactname." <br>".$event->eventcontactphone." <br>".$event->eventcontactemail."<br>".$event->eventcontactmessage;

                                                            ?>

                                                          </td>
                                                        </tr>   

                                                        <?php } ?>                                                   


                                                    </tbody>
                                                  </table>
                                              </div>

                                         <!-- end with professional event info-->


                      <!-- end with professional event details-->
                      <div class="col-md-8"> 
                            <!-- Nav tabs category -->
                              <ul class="nav nav-tabs faq-cat-tabs">
                                  <li class="active" style="width: 25%;"><a href="#profe_eventhighlight" data-toggle="tab" class="text-center">Event Highlights</a></li>
                                  <li style="width: 25%;"><a href="#professional_schedule" data-toggle="tab" class="text-center">Event Schedule</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-3" data-toggle="tab" class="text-center">Event Discussions</a></li>
                                  <li style="width: 25%;"><a href="#professional_tour" data-toggle="tab" class="text-center">Event Tours</a></li> 
                              </ul>

                          <div class="tab-content faq-cat-content">
                                  
                                    <div class="tab-pane active in fade" id="profe_eventhighlight">

                                        <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                          <h4 style="color:#fff; line-height:30px;  font-size:13px; font-weight:bold;">Event Highlights<br>
                                            <span style="font-size:13px; font-weight:bold;">
                                               <img src="../assets/images/wow-white-big.png">
                                              <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                            </span></h4>
                                        </div>
                                          
                                        <!-- event highlight 1 -->
                                        <?php if(isset($event->eventspeakername1)) { ?>
                                        <div class="col-md-12 pnl-brdr-clr">                                    
                                          <div class="col-md-5">
                                            <div style="width:100%;" class="pull-left">
                                      <?php 
                                          if(preg_match('/(\.jpg|\.png|\.bmp)$/i',$event->eventhighlights1url)) {
                                      ?>
                                            <div class="gallery">
                                              <a class="test-popup-link" href='<?php echo $event->eventhighlights1url; ?>' > 
                                               <img src="<?php echo $event->eventhighlights1url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                            </div>                                        

                                      <?php } else if (preg_match('/(\.mp4)$/i',$event->eventhighlights1url)){ ?>
                                        <div class="video">                                       
                                          
                                              <a href="<?php echo $event->eventhighlights1url; ?>" class="html5lightbox" data-width="480" data-height="320">
                                                <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                                     <source src="<?php echo $event->eventhighlights1url; ?>" type="video/mp4">
                                                </video>
                                              </a>                                          
                                        </div> 
                                      <?php } ?>   
                                         
                                              <h5 style="color:#333; line-height:20px;  font-weight:bold; font-size:13px;">
                                                  <img src="<?php echo base_url('assets/images/profile-icon.png');?>" alt="user">
                                                    <?php echo $event->eventspeakername1; ?><br>
                                                <span style="font-size:12px;  color:#969696;">
                                                   <?php echo $event->eventguesttype1; ?>                                                  
                                                </span>
                                              </h5>
                                            </div>

                                          </div>

                                          <div class="col-md-7">
                                           
                                            <p><?php echo $event->eventspeakeractivities1; ?></p>
                                            <img src="<?php echo base_url('assets/images/network-icon.png'); ?>" alt="user">
                                            <a href="#"> <?php echo $event->eventspeakerlink1; ?> </a>
                                          </div>                                           

                                        </div>
                                    <?php } ?>
                                        <!-- event highlight 2 -->

                                        <?php if(isset($event->eventspeakername2)) { ?>

                                          <div class="col-md-12 pnl-brdr-clr">
                                            <div class="col-md-5">

                                              <div style="width:100%;" class="pull-left">
                                      <?php 
                                          if (preg_match('/(\.jpg|\.png|\.bmp)$/i',$event->eventhighlights2url)) {
                                      ?>
                                            <div class="gallery">
                                              <a class="test-popup-link" href='<?php echo $event->eventhighlights2url; ?>' > 
                                               <img src="<?php echo $event->eventhighlights2url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                            </div>                                        

                                      <?php } else if (preg_match('/(\.mp4)$/i',$event->eventhighlights2url)){ ?>
                                              <div class="video">                                       
                                          
                                               <a href="<?php echo $event->eventhighlights2url; ?>" class="html5lightbox" data-width="480" data-height="320">
                                                <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                                     <source src="<?php echo $event->eventhighlights2url; ?>" type="video/mp4">
                                                </video>
                                                 </a>                                         
                                                   
                                              </div> 
                                      <?php } ?>   
                                             
                                              <h5 style="color:#333; line-height:20px;  font-weight:bold; font-size:13px;">
                                                  <img src="<?php echo base_url('assets/images/profile-icon.png'); ?>" alt="user">
                                                    <?php echo $event->eventspeakername2; ?><br>
                                                <span style="font-size:12px; color:#969696;">
                                                   <?php echo $event->eventguesttype2; ?>                                                  
                                                </span>
                                              </h5>
                                            </div>

                                          </div>

                                          <div class="col-md-7">
                                           
                                            <p><?php echo $event->eventspeakeractivities2; ?></p>
                                            <img src="<?php echo base_url('assets/images/network-icon.png'); ?>" alt="user">
                                            <a href="#"> <?php echo $event->eventspeakerlink2; ?> </a>
                                          </div>                                   

                                  </div>
                                   <?php } ?>       
                                        
                                </div>
                                    

                              <div class="tab-pane fade" id="professional_schedule">
                                        <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:10px;">
                                              <h4 style="color:#fff; line-height:30px;  font-size:15px; font-weight:bold;">Event Schedules<br>
                                              <span style="font-size:13px; font-weight:bold;">
                                                 <img src="../assets/images/wow-white-big.png">
                                                <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span></h4>
                                        </div>                             
                                  
                                              <!-- tab content show here  -->

                                        <ul class="nav nav-tabs" role="tablist">
                                            <?php 
                                                $day = 1;                                                 
                                                $dayinc = 0;

                                                foreach ($event->programschedule as $events) { 
                                                 
                                                    $timestamp = strtotime("$event->eventstartdate +$dayinc day");
                                                    $date = date('M-d-Y', $timestamp);

                                                  if($events->eventnumber == "1")
                                                  {
                                                        

                                                    if($day == 1)
                                                    {
                                                      

                                                      echo '<li class="active"><a data-toggle="tab" href="#tab-'.$day.'" style="line-height:16px; font-size:12px; color:#333; font-weight:bold;">Day- '.$events->day.'<br> '.$date.'</a></li>';

                                                    }else{

                                                        echo '<li><a data-toggle="tab" href="#tab-'.$day.'" style="line-height:16px; font-size:12px; color:#333; font-weight:bold;">Day- '.$events->day.'<br> '.$date.'</a></li>';
                                                    }

                                                    $day++;
                                                    $dayinc++;                                                    
                                                  }  
                                               
                                                } ?>
                                        </ul>
                                  
                                          <!-- tab content show here  -->
                                    <div  id="tab-content" class="tab-content"> 

                                        <?php

                                        for($eventday = 1; $eventday<$day; $eventday++)
                                        {

                                        ?>
                                            <?php if($eventday == 1){ ?>

                                            <div class="tab-pane fade in active" id="tab-<?php echo $eventday; ?>">

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody> 
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:13px;">Event Duration
                                                      <br>
                                            <?php

                                            foreach ($event->programschedule as $events) {
                                            
                                                if($events->day == $eventday )
                                                {
                                                    if( $events->eventnumber == "1" )
                                                            {  
                                                                echo $events->starttime."-". $events->endtime ; 
                                                            } 
                                                    
                                                }
                                                
                                            }

                                            ?>

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
                                                     if( $events->day == "1" )
                                                        {  
                                                                   
                                                ?> 
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
                                                 <?php } }?>

                                                </tbody>
                                            </table>

                                            </div>

                                            <?php } else{ ?>


                                        <div class="tab-pane fade" id="tab-<?php echo $eventday; ?>">

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody> 

                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:13px;">Event Duration
                                                      <br>
                                            <?php

                                            foreach ($event->programschedule as $events) {
                                            
                                                if($events->day == $eventday )
                                                {
                                                    if( $events->eventnumber == "1" )
                                                            {  
                                                                echo $events->starttime."-". $events->endtime ; 
                                                            } 
                                                    
                                                }
                                                
                                            }

                                            ?>

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
                                            
                                                if($events->day == $eventday )
                                                { ?>

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
                                            
                                            <?php  
                                                }
                                                
                                            }

                                            ?>

                                            </tbody>
                                            </table>
                                              
                                        </div>


                                    <?php 
                                            }

                                    }

                                    ?>
                                    </div>  

                              </div>

                                     <!-- event schedule end here -->

                                        <div class="tab-pane fade" id="faq-cat-3">
                                              <div class="col-md-12 text-center clr" style="margin-bottom:20px;">
                                                <h4 style="color:#fff; line-height:30px;">Event Discussions<br>
                                                  <span style="font-size:15px;"> 
                                                     <img src="../assets/images/wow-white-big.png">
                                                    <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                  </span></h4>
                                              </div>
                                              <div class="row" style="margin-top:10px;">
                                                <div class="col-md-12">
                                                  <div class="col-md-1"><img src="http://104.197.80.225:8080/wowhubb/assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> </div>
                                                  <div class="col-md-11">
                                                    <div class="pull-left">
                                                      <h3 style="margin-top:0; font-size:13px; color:#333;">
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
                                                  <h3 style="margin-top:0; font-size:13px; color:#333;"><img src="../assets/images/wow-black-small.png"> Dr.John walkers</h3>
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

                                       <!-- four tab view  event tours-->

                                      <div class="tab-pane fade" id="professional_tour">
                                          <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                            <h4 style="color:#fff; line-height:30px; font-size:15px; font-weight:bold;">Event Tours<br>
                                              <span style="font-size:13px; font-weight:bold;">
                                                <img src="../assets/images/wow-white-big.png">
                                                <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span></h4>
                                          </div>

                                         

                                          <div class="col-md-12 pnl-brdr-clr">

                                              <?php 
                                                 if(isset($event->eventtour))
                                                  {
                                                    foreach ($event->eventtour as $eventtours) 
                                                    {                                                
                                              
                                              ?>

                                            <div class="col-md-8">
                                              <div style="width:35%;" class="pull-left">
                                                <img src="<?php echo $event->coverpageurl; ?>" class="img-responsive"/>
                                              </div>
                                              <div style="width:65%;" class="pull-left">
                                                <div style="width:100%; padding:10px 5px; background-color:#6a6a6a; color:#fff;" class="pull-left">

                                                  <div class="pull-left">
                                                    <?php if(isset($eventtours->eventtourcountry)) { echo $eventtours->eventtourcountry; } ?>                                                        
                                                  </div>

                                                  <div class="pull-right">
                                                      <?php
                                                          if(isset($eventtours->eventtourstartdate) ) 
                                                          {
                                                              
                                                             $tourstartdate = str_replace(' ', '',$eventtours->eventtourstartdate);
                                                            
                                                              $timestamp = strtotime($tourstartdate);

                                                              echo date('M &\nb\sp;', $timestamp); 

                                                             $timestamp1 = strtotime($tourstartdate);
                                                             echo date('d', $timestamp1);  
                                                          ?>
                                                            -
                                                          <?php
                                                            $tourenddate = str_replace(' ', '',$eventtours->eventtourenddate);
                                                            $enddate = strtotime($tourenddate);
                                                            echo date('d', $enddate); 
                                                          }                                   
                                                      ?>
                                                 
                                                  </div>
                                                </div>

                                                <p style="padding:10px;">
                                                 <a style="color:#333; font-weight:bold;">
                                                    <?php if(isset($eventtours->eventtourname)) { echo $eventtours->eventtourname; } ?>
                                                      
                                                  </a><br>
                                                   <img src="../assets/images/map-icon-1.png" alt=""><a style="color:#333;">
                                                     <?php if(isset($eventtours->eventtouraddress1))
                                                      { 
                                                        echo $eventtours->eventtouraddress1." ".$eventtours->eventtourcity." ".$eventtours->eventtourzipcode ;
                                                      } ?>
                                                  </a><br>

                                                   <?php if(isset($eventtours->eventtourticketurl)) { echo $eventtours->eventtourticketurl; } ?>
                                                </p>

                                              </div>
                                            </div>
         
                                            <div class="col-md-4">
                                              <div style="width:100%; padding:10px 25px; background-color:#6a6a6a; color:#fff; font-size:13px;" class="pull-left">
                                                <div class="pull-left">
                                                    <img src="../assets/images/wow-white-big.png">
                                                   <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                </div>
                                                <div class="pull-right"><span style="color:#fc6653;">
                                                   <?php if(isset($eventtours->eventtourticketprice) ) { echo $eventtours->eventtourticketprice; } else {echo " "; } ?>
                                                </span></div>
                                              </div>
                                              <div style="width:100%; margin-top:15px; color:#333;" class="pull-left text-center">
                                                <p style="font-size:12px; font-weight:bold;">
                                                  <?php
                                                          if(isset($eventtours->eventtourstartdate) ) 
                                                          {
                                                             
                                                             $timestamp = strtotime($tourstartdate);
                                                             echo date('h:i A', $timestamp);  
                                                          ?>
                                                            -
                                                          <?php
                                                             $timestamp = strtotime($tourenddate);
                                                             echo date('h:i A', $timestamp); 
                                                          }                                   
                                                      ?>
                                                </p>                                                
                                              </div>


                                               <?php
                                                    if(isset($event->engagementformaction) ){ ?>
                                              <div style="width:100%; color:#333;" class="pull-left text-center">
                                                <p>
                                                  <button class="btn btn-primary" style="font-size:13px;">
                                                    <?php echo $event->engagementformaction; ?>
                                                  </button>
                                                </p>
                                              </div>
                                              <?php } ?>
                                            </div>

                                             <?php  } } else { echo "You miss to add Event Tours";  } ?>

                                          </div>
                                         
                                      </div>
                          </div>
                      </div>
                      

  <!-- professional event end here -->


  <!-- social event start here -->

                      <?php 
                            } else if($event->eventtype == 'social_event') 
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
                                              <strong style="font-size:13px;">Description </strong>         
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

                                                      <!-- event venue show start  here -->

                                                      <?php
                                                          foreach ($event->eventvenue as $eventvenues)
                                                            {
                                                      ?>
                                                        <tr>
                                                          
                                                          <td bgcolor="#f9f9f9"> 
                                                            <strong>
                                                              <i class="fa fa-map-marker"></i> Venue <?php echo $eventvenues->eventvenuenumber ; ?>
                                                            </strong>
                                                          </td>
                                                          <td height="40" bgcolor="#f9f9f9">                                                          
                                                             <?php   
                                                                      
                                                                          if(isset($eventvenues->eventvenuecity))
                                                                          {
                                                                            echo   $eventvenues->eventvenuename.", ".$eventvenues->eventvenuecity.", ".$eventvenues->eventvenueaddress1.", ".$eventvenues->eventvenuezipcode."<br>";
                                                                          }
                                                                                              
                                                             ?>
                                                          </td>                                                       

                                                        </tr>  
                                                                  <?php                                                         
                                                                        
                                                                      }                                    
                                                                   ?>   
                                                         <!-- event venue end show here -->
                                                         <tr>
                                                          <td bgcolor="#ffffff"><strong>Ticket Link</strong></td>
                                                          <td height="40" bgcolor="#ffffff">
                                                            <span id="rtr-s-Text_206_1">
                                                            <a href="#">
                                                               <?php
                                                                  if(isset( $event->eventticketurl))
                                                                    {
                                                                      echo $event->eventticketurl;
                                                                    } 
                                                                  
                                                                else { echo "Don't have any ticket URL" ; }  
                                                              ?>                                                            
                                                            </a>
                                                            </span>
                                                          </td>
                                                        </tr>                                                     

                                                       <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:13px;">Event FAQs</strong></td>
                                                        </tr>

                                                         <?php 
                                                          if(isset($event->faqquestion1) && ($event->faqanswer1)) 
                                                            {
                                                        ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion1) && ($event->faqanswer1) ) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion1."</p>".$event->faqanswer1;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion2) && ($event->faqanswer2)) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion2."</p>".$event->faqanswer2;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion3) && ($event->faqanswer3)) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion3."</p>".$event->faqanswer3;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion4) && ($event->faqanswer4)) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion4."</p>".$event->faqanswer4;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <?php } 

                                                        if(!empty($event->eventfaqs))
                                                        {
                                                          $i=5;
                                                          foreach ($event->eventfaqs as $eventfaq) {
                                                          
                                                          ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset($eventfaq->faqquestion)) 
                                                                    {
                                                                      echo "<p style='font-size:13px; font-weight:bold;'>".$i.".".$eventfaq->faqquestion."</p>".$eventfaq->faqanswer;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td> 
                                                        </tr>

                                                       <?php $i++; } }  ?>

                                                       <tr>
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:13px; color:#e91e63;">Event Sponsors Details</strong></td>
                                                        </tr>
                                                         <?php 
                                                              if(isset($event->eventcontactmessage) || ($event->eventcontactemail) || ($event->eventcontactphone) || ($event->eventcontactname) ) 
                                                                 { 
                                                        ?>
                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                            <?php 
                                                                  echo $event->eventcontactname." <br>".$event->eventcontactphone." <br>".$event->eventcontactemail."<br>".$event->eventcontactmessage;

                                                            ?>

                                                          </td>
                                                        </tr>   

                                                        <?php } ?>    
                                                    </tbody>
                                                  </table>
                                              </div>

                                         <!-- end with social event info-->


                     
                      <div class="col-md-8"> 
                            <!-- Nav tabs category -->
                              <ul class="nav nav-tabs faq-cat-tabs">
                                  <li class="active" style="width: 25%;"><a href="#social-highlight" data-toggle="tab" class="text-center">Event Highlights</a></li>
                                  <li style="width: 25%;"><a href="#social-schedule" data-toggle="tab" class="text-center">Event Schedule</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-3" data-toggle="tab" class="text-center">Event Discussions</a></li>
                                  <li style="width: 25%;"><a href="#social-tour" data-toggle="tab" class="text-center">Event Tours</a></li> 
                              </ul>

                          <div class="tab-content faq-cat-content">                                  

                                    <div class="tab-pane active in fade" id="social-highlight">                                      

                                        <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                          <h4 style="color:#fff; line-height:30px;  font-size:13px; font-weight:bold;">Event Highlights<br>
                                            <span style="font-size:13px; font-weight:bold;">
                                               <img src="../assets/images/wow-white-big.png">
                                              <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                            </span>
                                          </h4>
                                        </div>
                                          
                                    <!-- event highlight 1 -->
                                 <?php if(isset($event->eventspeakername1)) { ?>
                                <div class="col-md-12 pnl-brdr-clr">
                                  <div class="col-md-5">
                                      <div style="width:100%;" class="pull-left">
                                      <?php 
                                          if (preg_match('/(\.jpg|\.png|\.bmp)$/i',$event->eventhighlights1url)) {
                                      ?>
                                            <div class="gallery">
                                              <a class="test-popup-link" href='<?php echo $event->eventhighlights1url; ?>' > 
                                               <img src="<?php echo $event->eventhighlights1url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                            </div>                                        

                                      <?php } else if (preg_match('/(\.mp4)$/i',$event->eventhighlights1url)){ ?>
                                        <div class="video">                                       
                                          
                                              <a href="<?php echo $event->eventhighlights1url; ?>" class="html5lightbox" data-width="480" data-height="320">
                                                <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                                     <source src="<?php echo $event->eventhighlights1url; ?>" type="video/mp4">
                                                </video>
                                              </a>                                          
                                        </div> 
                                      <?php } ?>   
                                        
                                              <h5 style="color:#333; line-height:20px;  font-weight:bold; font-size:13px;">
                                                  <img src="<?php echo base_url('assets/images/profile-icon.png'); ?>" alt="user">
                                                    <?php echo $event->eventspeakername1; ?><br>
                                                <span style="font-size:12px; color:#969696;">
                                                   <?php echo $event->eventguesttype1; ?>                                                  
                                                </span>
                                              </h5>
                                            </div>

                                          </div>

                                          <div class="col-md-7">
                                           
                                            <p><?php echo $event->eventspeakeractivities1; ?></p>
                                            <img src="<?php echo base_url('assets/images/network-icon.png'); ?>" alt="user">
                                            <a href="#"> <?php echo $event->eventspeakerlink1; ?> </a>
                                          </div>                                         
                              </div>
                              <?php }  ?>

                                        <!-- event highlight 2 -->

                              <?php if(isset($event->eventspeakername2)) { ?>
                                  <div class="col-md-12 pnl-brdr-clr">
                                    <div class="col-md-5">
                                      <div style="width:100%;" class="pull-left">
                                      <?php 
                                          if (preg_match('/(\.jpg|\.png|\.bmp)$/i',$event->eventhighlights2url)) {
                                      ?>
                                            <div class="gallery">
                                              <a class="test-popup-link" href='<?php echo $event->eventhighlights2url; ?>' > 
                                               <img src="<?php echo $event->eventhighlights2url; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>
                                             </a> 
                                            </div>                                        

                                      <?php } else if (preg_match('/(\.mp4)$/i',$event->eventhighlights2url)){ ?>
                                              <div class="video">                                       
                                          
                                               <a href="<?php echo $event->eventhighlights2url; ?>" class="html5lightbox" data-width="480" data-height="320">
                                                <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                                     <source src="<?php echo $event->eventhighlights2url; ?>" type="video/mp4">
                                                </video>
                                                 </a>                                         
                                                   
                                              </div> 
                                      <?php } ?>   
                                         
                                              <h5 style="color:#333; line-height:20px; font-weight:bold; font-size:13px;">
                                                  <img src="<?php echo base_url('assets/images/profile-icon.png');?>" alt="user">
                                                  <?php echo $event->eventspeakername2; ?><br>
                                                <span style="font-size:12px; color:#969696;">
                                                   <?php echo $event->eventguesttype2; ?>                                                  
                                                </span>
                                              </h5>
                                            </div>

                                          </div>

                                          <div class="col-md-7">                                           
                                            <p><?php echo $event->eventspeakeractivities2; ?></p>
                                           <img src="<?php echo base_url('assets/images/network-icon.png');?>" alt="user">
                                           <a href="#"> <?php echo $event->eventspeakerlink2; ?> </a>
                                          </div>                                   

                                  </div> 
                            <?php }  ?>      
                                        
                          </div>
                                    
                                    <!-- end event highlight here -->
                                    

                             <div class="tab-pane fade" id="social-schedule">
                                        <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:10px;">
                                            <h4 style="color:#fff; line-height:30px;  font-size:15px; font-weight:bold;">Event Schedules
                                              <br>
                                              <span style="font-size:13px; font-weight:bold;">
                                                 <img src="../assets/images/wow-white-big.png">
                                                <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span>
                                            </h4>
                                        </div>                             
                                  
                                              <!-- tab content show here  -->

                                        <ul class="nav nav-tabs" role="tablist">
                                            <?php 
                                                $day = 1;                                                 
                                                $dayinc = 0;                                               
                                                
                                                foreach ($event->programschedule as $events) {

                                                 
                                                    $timestamp = strtotime("$event->eventstartdate +$dayinc day");
                                                    $date = date('M-d-Y', $timestamp);

                                                  if($events->eventnumber == "1")
                                                  {                                                        

                                                    if($day == 1)
                                                    {
                                                      

                                                      echo '<li class="active"><a data-toggle="tab" href="#tab-'.$day.'" style="line-height:16px; font-size:12px; color:#333; font-weight:bold;">Day- '.$events->day.'<br> '.$date.'</a></li>';

                                                    }else{

                                                        echo '<li><a data-toggle="tab" href="#tab-'.$day.'" style="line-height:16px; font-size:12px; color:#333;  font-weight:bold;">Day- '.$events->day.'<br> '.$date.'</a></li>';
                                                    }

                                                    $day++;
                                                    $dayinc++;                                                    
                                                  }  
                                               
                                                } ?>
                                      </ul>

                                  
                                          <!-- tab content show here  -->

                                        
                                    <div  id="tab-content" class="tab-content"> 

                                        <?php

                                        for($eventday = 1; $eventday<$day; $eventday++)
                                        {

                                        ?>
                                            <?php if($eventday == 1){ ?>

                                  <div class="tab-pane fade in active" id="tab-<?php echo $eventday; ?>">

                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody> 
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:13px;">Event Duration
                                                      <br>
                                            <?php

                                            foreach ($event->programschedule as $events) {
                                            
                                                if($events->day == $eventday )
                                                {
                                                    if( $events->eventnumber == "1" )
                                                            {  
                                                                echo $events->starttime."-". $events->endtime ; 
                                                            } 
                                                    
                                                }
                                                
                                            }

                                            ?>

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
                                                     if( $events->day == "1" )
                                                        {  
                                                                   
                                                ?> 
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
                                                 <?php } }?>

                                                </tbody>
                                      </table>

                                  </div>

                                            <?php } else{ ?>


                                        <div class="tab-pane fade" id="tab-<?php echo $eventday; ?>">

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody> 

                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:13px;">Event Duration
                                                      <br>
                                            <?php

                                            foreach ($event->programschedule as $events) {
                                            
                                                if($events->day == $eventday )
                                                {
                                                    if( $events->eventnumber == "1" )
                                                            {  
                                                                echo $events->starttime."-". $events->endtime ; 
                                                            } 
                                                    
                                                }
                                                
                                            }

                                            ?>

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
                                            
                                                if($events->day == $eventday )
                                                { ?>

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
                                            
                                            <?php  
                                                }
                                                
                                            }

                                            ?>

                                            </tbody>
                                            </table>
                                              
                                        </div>


                                    <?php 
                                            }

                                    }

                                    ?>
                                    </div> 

                              </div>

                            <!-- event schedule end here -->


                                        <div class="tab-pane fade" id="faq-cat-3">
                                              <div class="col-md-12 text-center clr" style="margin-bottom:20px;">
                                                <h4 style="color:#fff; line-height:30px;">Event Discussions<br>
                                                  <span style="font-size:15px;"> 
                                                     <img src="../assets/images/wow-white-big.png">
                                                    <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                  </span></h4>
                                              </div>
                                              <div class="row" style="margin-top:10px;">
                                                <div class="col-md-12">
                                                  <div class="col-md-1"><img src="http://104.197.80.225:8080/wowhubb/assets/images/users/user-1.jpg" alt="" class="profile-photo-sm"> </div>
                                                  <div class="col-md-11">
                                                    <div class="pull-left">
                                                      <h3 style="margin-top:0; font-size:13px; color:#333;">
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
                                                  <h3 style="margin-top:0; font-size:13px; color:#333;"><img src="../assets/images/wow-black-small.png"> Dr.John walkers</h3>
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

                                      <!-- four tab view  event tours-->

                                      <div class="tab-pane fade" id="social-tour">
                                          <div class="col-md-12 text-center clr" style="margin-top:10px;">
                                            <h4 style="color:#fff; line-height:30px;   font-size:15px; font-weight:bold;">Event Tours<br>
                                              <span style="font-size:13px; font-weight:bold;">
                                                <img src="../assets/images/wow-white-big.png">
                                                <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                              </span></h4>
                                          </div>                                         

                                          <div class="col-md-12 pnl-brdr-clr">

                                             <?php 
                                                 if(isset($event->eventtour) )
                                                  {
                                                    foreach ($event->eventtour as $eventtours) 
                                                    {                                                 
                                              
                                              ?>

                                            <div class="col-md-8">
                                              <div style="width:35%;" class="pull-left"><img src="<?php echo $event->coverpageurl; ?>" class="img-responsive"/></div>
                                              <div style="width:65%;" class="pull-left">
                                                <div style="width:100%; padding:10px 5px; background-color:#333; color:#fff;" class="pull-left">
                                                  <div class="pull-left">

                                                    <?php if(isset($eventtours->eventtourcountry)) { echo $eventtours->eventtourcountry; } ?>
                                                      
                                                  </div>

                                                  <div class="pull-right">
                                                      <?php
                                                          if(isset($eventtours->eventtourstartdate) ) 
                                                          {
                                                              $tourstartdate = str_replace(' ', '',$eventtours->eventtourstartdate);
                                                              $timestamp = strtotime($tourstartdate);

                                                              echo date('M &\nb\sp;', $timestamp); 

                                                            
                                                            $startdate = strtotime($eventtours->eventtourstartdate);
                                                            echo date('d', $startdate);  
                                                          ?>
                                                            -
                                                          <?php
                                                              $tourenddate = str_replace(' ', '',$eventtours->eventtourenddate);
                                                              $enddate = strtotime($tourenddate);
                                                              echo date('d', $enddate); 
                                                          }                                   
                                                      ?>
                                                 
                                                  </div>

                                                </div>
                                                <p style="padding:10px;">
                                                  <a style="color:#333; font-weight:bold;">
                                                    <?php if(isset($eventtours->eventtourname)) { echo $eventtours->eventtourname; } ?>
                                                      
                                                    </a><br>
                                                   <img src="../assets/images/map-icon-1.png" alt=""><a  style="color:#333;">
                                                     <?php if(isset($eventtours->eventtouraddress1))
                                                      { 
                                                        echo $eventtours->eventtouraddress1." ".$eventtours->eventtourcity." ".$eventtours->eventtourzipcode ;
                                                      } ?>
                                                  </a><br>
                                                   <?php if(isset($eventtours->eventtourticketurl)) { echo $eventtours->eventtourticketurl; } ?>
                                                </p>
                                              </div>
                                            </div>
         
                                            <div class="col-md-4">
                                              <div style="width:100%; padding:10px 25px; background-color:#333; color:#fff; font-size:13px;" class="pull-left">
                                                <div class="pull-left">
                                                    <img src="../assets/images/wow-white-big.png">
                                                   <?php if(isset($event->eventtitle) ) { echo $event->eventtitle; } else {echo " "; } ?>
                                                </div>
                                                <div class="pull-right"><span style="color:#fc6653;">
                                                   <?php if(isset($eventtours->eventtourticketprice) ) { echo $eventtours->eventtourticketprice; } else {echo " "; } ?>
                                                </span></div>
                                              </div>

                                              <div style="width:100%; margin-top:15px; color:#333;" class="pull-left text-center">
                                                <p style="font-size:13px;">
                                                  <?php
                                                          if(isset($eventtours->eventtourstartdate) ) 
                                                          {                                                             
                                                            $starttime = strtotime($eventtours->eventtourstartdate);
                                                            echo date('h:i A', $starttime);                                               
                                                            echo "-";                                                        
                                                            $endtime = strtotime($eventtours->eventtourenddate);
                                                            echo date('h:i A', $endtime); 
                                                          }                                   
                                                  ?>
                                                </p>
                                              </div>

                                              <?php
                                                  if(isset($event->engagementformaction) ) 
                                                          {  ?> 
                                              <div style="width:100%; color:#333;" class="pull-left text-center">
                                                <p>
                                                  <button class="btn-primary" style="font-size:13px;">
                                                    <?php echo $event->engagementformaction ?>
                                                  </button>
                                                </p>
                                              </div>
                                              <?php } ?>
                                            </div>

                                              <?php  }  } else { echo "You miss to add Event Tours "; } ?>

                                          </div>
                                        

                                          <!-- here end event tours -->
                                         
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
                                              <strong style="font-size:13px;">Description </strong>         
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
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:13px;">Sales Event FAQs</strong></td>
                                                        </tr>

                                                         <?php 
                                                          if(isset($event->faqquestion1) && ($event->faqanswer1)) 
                                                            {
                                                        ?>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion1) && ($event->faqanswer1) ) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion1."</p>".$event->faqanswer1;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion2) && ($event->faqanswer2)) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion2."</p>".$event->faqanswer2;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion3) && ($event->faqanswer3)) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion3."</p>".$event->faqanswer3;
                                                                    } else { echo "" ; }
                                                             ?>
                                                          </td>
                                                        </tr>

                                                        <tr>
                                                          <td height="40" colspan="2" bgcolor="#fff">
                                                             <?php if(isset( $event->faqquestion4) && ($event->faqanswer4)) 
                                                                    {
                                                                      echo "<p style='font-size:13px;'>".$event->faqquestion4."</p>".$event->faqanswer4;
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
                                                          <td height="40" colspan="2" bgcolor="#f9f9f9"><strong style="font-size:13px;">Event Sponsors Details</strong></td>
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
                                            <span style="font-size:15px;">
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
                                                <div class="pull-right"><span style="color:#fc6653; font-size:13px;">
                                                   11:59s                                                </span></div>
                                              </div>
                                              <div style="width:100%; margin-top:15px; color:#333;" class="pull-left text-center">
                                                <p style="font-size:13px;">
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
                                                <div class="pull-right"><span style="color:#fc6653; font-size:13px;">
                                                   11:59s                                                </span></div>
                                              </div>
                                              <div style="width:100%; margin-top:15px; color:#333;" class="pull-left text-center">
                                                <p style="font-size:13px;">
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
  // idvideo: "demo"
  });
});



</script>





</body>
</html>
