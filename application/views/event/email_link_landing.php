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
img {
  max-width: 100%;
  height: auto;
  display: inline-block;
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
          <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Login</span> </a>
        </ul>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling --> 
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</header>
<!--Header End-->
<div class="google-maps"> </div>
<div class="container-fluid" style="padding-left:0px!important;"> <img src="<?php echo base_url('assets/images/bg_email.png');?>" style="position:fixed; z-index:-99;"> </div>
<div class="container"> 
  
  <!-- Timeline
      ================================================= -->

      
  <div class="timeline">
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; border-radius:0px; padding-top: 0px; margin-top:50px;">
      <div class="row">
        <div class="col-md-12 col-sm-12" style="margin-top:0px; padding-left:0; padding-right:0;">

          <?php 
            if($eventfeed->eventtype == 'quick_event')
            { ?>
                    <div class="col-md-7" >
                        <div class="video" >
                              <div class="col-md-12" style="margin-top:0px; padding-left:0; padding-right:0;"> 
                                <a href="<?php echo $eventfeed->wowtagvideourl; ?>" >
                                    <video class="myvideo" controlsList="nodownload" style="width: 100%;">
                                        <source src="<?php echo $eventfeed->wowtagvideourl; ?>" type="video/mp4">
                                    </video>
                                </a> 
                              </div>
                        </div>
                    </div>
         
          <div class="col-md-5">

                      <h3>Location</h3>
                      <p> 
                                  <?php                                        
                                          $i=0;

                                         foreach ($eventfeed->eventvenue as $eventvenues)
                                          {
                                            if(isset($eventvenues->eventvenuenumber))
                                            {
                                              if( $i==0 && $eventvenues->eventvenuenumber == "1" )
                                              {
                                                if(isset($eventvenues->eventvenuecity))
                                                {
                                                  echo   $eventvenues->eventvenuename." ".$eventvenues->eventvenuecity." ".$eventvenues->eventvenueaddress1." <br>".$eventvenues->eventvenuezipcode;
                                                }
                                              }  
                                              $i++;                             
                                            }
                                          }                                    
                                   ?>
                      </p>
              
                            <h3>Date &amp; Time</h3>
                      <p>            
                                <?php
                                        if(isset($eventfeed->eventstartdate) ) 
                                        {
                                          echo date('M', strtotime($eventfeed->eventstartdate));
                                          echo '   ';
                                          $timestamp = strtotime($eventfeed->eventstartdate);
                                          echo date('D dS', $timestamp);
                                          echo ' -  ';
                                          $timestamp1 = strtotime($eventfeed->eventenddate);
                                           echo date('D dS', $timestamp1);
                                        }
                                  ?><br>
                                <?php 
                                      $timestamp = strtotime($eventfeed->eventstartdate);
                                      echo date('h:i A', $timestamp);
                                      echo ' -  ';
                                      $timestamp1 = strtotime($eventfeed->eventenddate);
                                      echo date('h:i A', $timestamp1);
                                ?> 
                      </p>
              
            <span style="font-size:25px;"><?php if(isset($eventfeed->eventcategory)){ echo $eventfeed->eventcategory;} else { echo ""; } ?></span><br>
            <span style="font-size:18px; color:#999;"><?php if(isset($eventfeed->eventname)){ echo $eventfeed->eventname;} else { echo ""; } ?></span> 
          </div>
        
          <div class="col-md-5" style="margin-top:35px;">
            <a href="#modal-1" data-toggle="modal"  style="color:#FFE500; font-size:17px;"> <button class="btn-primary" style="padding: 2px 25px;">RSVP Register</button></a>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
        <div class="col-md-12 col-sm-12" style="border-bottom:1px solid #ccc;" ></div>
        </div>

        <div class="col-md-12 col-sm-12" >
          <div class="col-md-7">
            <h3>Description</h3>
            <p> <?php if(isset($eventfeed->eventdescription)){ echo $eventfeed->eventdescription;} else { echo ""; } ?> </p>
                       
          </div>
          <div class="col-md-5">
           
                <h3>Event Organizer</h3>
                  <?php 
                      if(isset($eventfeed->eventcontactname))
                      {
                        echo $eventfeed->eventcontactname."<br>";
                        echo $eventfeed->eventcontactphone."<br>";
                        echo $eventfeed->eventcontactemail."<br>";
                        echo $eventfeed->eventcontactmessage;
                      } 
                     else { echo ""; }
                  ?>         

            
          </div>
        </div>

   
      <?php }  else { ?>
    </div>

<!-- here start with other events -->
    <div class="row">
        <div class="col-md-12 col-sm-12" >
           
          <div class="col-md-7">
            <div class="gallery" > 
              <a class="test-popup-link" href='<?php echo $eventfeed->coverpageurl; ?>' >
               <img src="<?php echo $eventfeed->coverpageurl; ?>" alt="post-image" class="post-image" style="background-size: cover; width: 100%; height: 325px;"/> </a> 
             </div>
          </div>

         
          <div class="col-md-5">
              
                  <h3>Location</h3>
                      <p> 
                                  <?php
                                        
                                          $i=0;

                                         foreach ($eventfeed->eventvenue as $eventvenues)
                                          {
                                            if(isset($eventvenues->eventvenuenumber))
                                            {
                                              if( $i==0 && $eventvenues->eventvenuenumber == "1" )
                                              {
                                                if(isset($eventvenues->eventvenuecity))
                                                {
                                                  echo   $eventvenues->eventvenuename." ".$eventvenues->eventvenuecity." ".$eventvenues->eventvenueaddress1." <br>".$eventvenues->eventvenuezipcode;
                                                }
                                              }  
                                              $i++;                             
                                            }
                                          }                                    
                                   ?>
                      </p>        
                    <h3>Date &amp; Time</h3>
                        <p>            
                                <?php
                                        if(isset($eventfeed->eventstartdate) ) 
                                        {
                                          echo date('M', strtotime($eventfeed->eventstartdate));
                                          echo '   ';
                                          $timestamp = strtotime($eventfeed->eventstartdate);
                                          echo date('D dS', $timestamp);
                                          echo ' -  ';
                                          $timestamp1 = strtotime($eventfeed->eventenddate);
                                           echo date('D dS', $timestamp1);
                                        }
                                  ?><br>
                                <?php 
                                      $timestamp = strtotime($eventfeed->eventstartdate);
                                      echo date('h:i A', $timestamp);
                                      echo ' -  ';
                                      $timestamp1 = strtotime($eventfeed->eventenddate);
                                      echo date('h:i A', $timestamp1);
                                ?> 
                      </p> 

            <span style="font-size:25px;"><?php if(isset($eventfeed->eventcategory)){ echo $eventfeed->eventcategory;} else { echo ""; } ?></span><br>
            <span style="font-size:18px; color:#999;"><?php if(isset($eventfeed->eventname)){ echo $eventfeed->eventname;} else { echo ""; } ?></span> </div>
          
          <div class="col-md-5" style="margin-top:25px;">
            <a href="#modal-1" data-toggle="modal"  style="color:#FFE500; font-size:17px;"> <button class="btn-primary" style="padding: 2px 25px;">RSVP Register</button></a>
          </div>
        </div>

        <div class="container">
          <div class="row">
              <div class="col-md-12 col-sm-12" style="margin-top: 15px;">
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-12 col-sm-12" style="border-bottom:1px solid #ccc;" ></div>
                 </div>
              </div>
          </div>
        

        <div class="col-md-12 col-sm-12" >
          <div class="col-md-7">
            <h3>Description</h3>
            <p> <?php if(isset($eventfeed->eventdescription)){ echo $eventfeed->eventdescription;} else { echo ""; } ?> </p>
            <br>           
          </div>

          <div class="col-md-5">
             <h3>Event Organizer</h3>
                  <?php 
                      if(isset($eventfeed->eventcontactname))
                      {
                        echo $eventfeed->eventcontactname."<br>";
                        echo $eventfeed->eventcontactphone."<br>";
                        echo $eventfeed->eventcontactemail."<br>";
                        echo $eventfeed->eventcontactmessage;
                      } 
                     else { echo ""; }
                  ?>
          </div>
        </div>
        
        <div class="col-md-12 col-sm-12" style="margin-top: 15px;">
         <div class="col-md-12 col-sm-12" style="border-bottom:1px solid #ccc; margin-top:0px; margin-bottom:15px;" ></div>
       </div>

        <div class="col-md-12 col-sm-12" >
          <div class="col-md-12">
            <h3>Event Highlights</h3>
            <div class="col-md-3"><h4 style="font-size:17px; color:#e91e63;"><?php if(isset($eventfeed->eventtitle)){ echo $eventfeed->eventtitle;} else { echo ""; } ?></h4>
           
            
              
                <?php  if(isset($eventfeed->eventhighlights1) && ($eventfeed->eventhighlights1 != 'null')) { ?>
               
                  <div class="gallery" > 
                  <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $eventfeed->eventhighlights1; ?>' >
                   <img src="http://104.197.80.225:3010/wow/media/event/<?php echo $eventfeed->eventhighlights1; ?>" alt="post-image" class="post-image" style="background-size: cover; width: 100%; height: 170px;"/> </a> 
                 </div>
                </div>
                <?php } ?>
                  
                <div class="col-md-9">
                    <p> <?php if(isset($eventfeed->eventspeakername1)) { echo $eventfeed->eventspeakername1; } ?> </p>
                    <p> <?php if(isset($eventfeed->eventguesttype1)) { echo $eventfeed->eventguesttype1; } ?> </p>
                    <p> <?php if(isset($eventfeed->eventspeakeractivities1)) { echo $eventfeed->eventspeakeractivities1; } ?> </p>      
                    <p> <a href="#"><?php if(isset($eventfeed->eventspeakerlink1)) { echo $eventfeed->eventspeakerlink1; } ?></a> </p>
                </div>
          </div>
         
        </div>

        </div>
      </div>
    <?php } ?>
     <!-- end with other event -->
  </div>
  
</div>
</div>

<!-- register model popup -->
            <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="post-content">
                        <div class="user-info text-center" style="background:#e91e63; margin-top:-15px; padding:10px 15px; color:#fff!important;">
                            <h3 style="color:#fff; font-size:25px; font-weight:normal;">Please Register or Login to Continue!! </h3>
                        </div>
                      <div class="post-container" style="padding-bottom:20px;">
                        <div class="post-detail">
                                         
                          <div class="user-info">
                            <div class="row" style="padding:10px;">
                            <div class="col-md-3">
                              <img src="<?php echo base_url ('assets/images/app-icon.png') ?>" alt="app-icon" /></div>
                                  <div class="col-md-9"><span style="font-size:15px;">Wowhubb is the Event Networking Platform for Create, Host and Share your Personal, Professional and Business Leads and Sales events. We are Best Event Networking Platform Anytime and Anywhere.</span> </div>
                                  <!-- this form submit rsvp -->
                                                           
                                 <div class="row">
                                    <div class="col-md-12" style="margin-top:10px;">
                                      <div class="col-md-12 text-center">
                                   
                                        <a href="<?php echo base_url('Home/login'); ?>" style="color:#333;">
                                          <button type="submit" class="btn btn-primary" style="padding:7px 25px!important;">I Already have an Account</button>
                                          </a><br>
                                          
                                          <a href="<?php echo base_url('Home/index'); ?>" style="color:#333;">
                                          <span style="font-size:15px; color:#555;">Click to Register</span></a>
                                        
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
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
 

<script>

  
//video controls hide and show mouse hover  
    $('.myvideo').hover(function toggleControls() {  
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
})

 
  </script>
</body>
</html>
