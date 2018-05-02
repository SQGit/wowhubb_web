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
<!-- magnific-popup image-->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/magnific-popup.css')?>" />

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- google api key here -->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAH0ZxL9hrK1JeL7CDAYWRu7kX-hLeip2c"></script>


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
.clr {
	background: #fbbd60;
	color: #3d7489;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
	padding: 10px;
}
.rr-circle {
	border-radius: 50%;
	background-color: #e91e63;
	font-size: 20px;
	color: #fff;
	width: 35px;
	height: 35px;
	line-height: 35px;
	text-align: center;
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
table, td, tr {
	border-spacing: 2px;
	padding: 0 5px;
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
      <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
        <div class="container"> 
      
          <?php  include('/../includes/header.php'); ?>
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
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="../assets/images/nearby_banner.jpg" style="background-size:cover; width:100%; margin-top:20px;" > </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12" style="margin-top:15px; margin-bottom:10px;">
          <div class="col-md-3">
            <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
              <option value="" selected="selected">All Dates</option>
              <option value="today">Today</option>
              <option value="tomorrow">Tomorrow</option>
              <option value="this_week">This Week</option>
              <option value="this_weekend">This Weekend</option>
              <option value="next_week">Next Week</option>
              <option value="next_month">Next Month</option>
            </select>
          </div>
       

          <form class="near_by_event" action="<?php echo base_url('Nearbyevents/nearby_event_service'); ?>" method="POST">

              <div class="col-md-3">
                    <input type='text' name="current_city" class="form-control" style="text-transform: capitalize;" placeholder="Enter your Event City" required />
              </div>
             <!-- <textarea id="city"  name="current_location" style="display: none;"> </textarea> -->

              <div class="col-md-4">
                <select name="event_category" id="days" class="form-control" style="background-color:#eff0f1;" required>
                  <option value="">Select </option>
                  <option value="Networking">Networking Meeting </option>
                  <option value="Class">Class</option>
                  <option value="Convention">Convention</option>
                  <option value="Dinner">Dinner</option>
                  <option value="Seminar">Seminar</option>
                  <option value="Training">Training/Workshop</option>
                  <option value="Conference">Conference</option>
                  <option value="Educational">Educational Program</option>
                  <option value="Startup">Startup Meeting </option>
                  <option value="Leadership">Leadership Workshop</option>
                  <option value="Webnair">Webinar</option>
                  <option value="Podcast">Podcast</option>
                  <option value="Online Meeting">Online Meeting</option>
                  <option value="Private">Private Fundraising</option>
                  <option value="Community Fundraising">Community Fundraising</option>
                  <option value="Public Fundraising">Public Fundraising</option>
                  <option value="Comedy Shows">Comedy Shows</option>
                </select>
              </div>

                <div class="col-md-2 text-center">
                   <input  type="submit" class="btn-primary" style="background-color:#fc6653!important; padding-top:5px; padding-bottom:5px;" value="Search">
                </div>
          </form>

        </div>
      </div>

      
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12"> 
          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static"> 
            
            <!--profile card ends-->
            
            <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; color:#333;">SEARCH FILTERS</h5>
              </ul>
              <!--news-feed links ends--> 
              
              <!--news-feed links ends-->
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Categories</h5>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    All Categories</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Corporate Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Political Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Social Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Sales Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Product Launch </div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Meeting</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Board Meeting</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Network Meeting</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Startup Event</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Group Workshop</div>
                </li>
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Price</h5>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    All Events</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Priced Events</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Free Events</div>
                </li>
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
              </ul>
              
              <!--news-feed links ends--> 
              <!--ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">AVAILABILITY</h5>
                <li>
                  <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Out of stock</a></div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Clear all</a></div>
                </li>
              </ul--> 
              <!--news-feed links ends--> 
              
            </div>
            <!--chat block ends--> 
          </div>

          <div class="col-md-6"> 
            <!-- center box start here  =================================== -->
              <div class="container post-content">                   

                  <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <hr style="margin:5px 0;">
                        </div>
                      </div>

                      <?php 

                            if(isset($nearbyevent))
                              {
                            foreach ($nearbyevent as $nearbyevents)
                            {  
                              
                               
                       ?> 
                             

                    <div class="row">                      
                        
                        <div class="col-md-12" style="margin-top:0px; position:relative">
                          <div class="row">   
                                <div class="col-md-9">
                              <span style="font-size:20px;; font-weight:normal;">
                                  <img src="../assets/images/wow-black-big.png" alt="post-image"> 

                                <?php echo $nearbyevents->eventtitle ?>
                                <span style="font-size:11px; background:#e91e63; color:#FFFFFF; padding:5px 10px; border-radius:5px;">
                                  <?php echo $nearbyevents->tickettype ?></span>
                              </span>
                              <p style="font-size:13px; color:#606060;"><?php echo $nearbyevents->eventname ?></p>                          
                            </div>
                            <div class="col-md-3">
                               <div class="pull-right">
                                  <div class="rr-circle">
                                    <?php if(isset($nearbyevents->wowtagvideo)) { ?>
                                    <a href="http://104.197.80.225:3010/wow/media/event/<?php echo $nearbyevents->wowtagvideo; ?>" target="_blank">
                                        <img src="<?php echo base_url('assets/images/play.png'); ?>" alt="post-image">
                                    </a>
                                    <?php } ?>
                                  </div>
                              </div>
                         
                            </div>                        
                  
                          </div>
                          <div class="gallery">
                              <a class="test-popup-link" href='http://104.197.80.225:3010/wow/media/event/<?php echo $nearbyevents->coverpage; ?>' > <img style="height: 250px!important;" src="http://104.197.80.225:3010/wow/media/event/<?php echo $nearbyevents->coverpage; ?>" alt="post-image" class="img-responsive img-thumbnail post-image"  />
                              </a>
                          </div>

                          <div style="position:absolute; right:10px;bottom: 245px;">
                            <div class="col-md-12">
                              <div class="col-md-12 text-center" style="border-radius:5px; background:rgba(0,0,0,.7);">
                                 <span style="font-size:16px; color:#fff;">
                                    <?php echo $nearbyevents->ticketprice ?>                                  
                                </span> </div>
                            </div>
                          </div>

                          <div class="row">
                             <div class="col-md-5" style="margin-top:0px;">                    
                                 <div class="row">
                                    <div class="col-md-12" style="margin-top:20px; margin-bottom:15px;"> <span style="font-size:25px; color:#555"><?php echo $nearbyevents->eventcategory ?></span></div>
                                 </div>

                                 <?php
                                     foreach ($nearbyevents->eventvenue as $eventvenues)
                                      {
                                                               
                                    ?>
                          
                              <div class="row">
                                <div class="pull-left" style="width:15%;"><img src="../assets/images/map-icon-1.png" alt="post-image"> </div>
                                <div class="pull-left" style="width:85%;">
                                    <span style="font-size:14px;">
                                  
                                                    <?php   
                                                                          
                                                          if(isset($eventvenues->eventvenuecity))
                                                              {
                                                                  echo   $eventvenues->eventvenuename.", ".$eventvenues->eventvenuecity.", ".$eventvenues->eventvenueaddress1.", ".$eventvenues->eventvenuezipcode."<br>";
                                                              }
                                                                                                  
                                                    ?>
                                    </span>
                                </div>
                              </div>

                                    <?php } ?>

                            <div class="row">
                              <div class="pull-left" style="width:15%;"><img src="../assets/images/timer-icon.png" alt="post-image"> </div>
                                  <div class="pull-left" style="width:85%;">
                                    <span style="font-size:14px;">
                                                <?php 
                                                    if(isset($nearbyevents->eventstartdate))
                                                        { 
                                                           $timestamp = strtotime($nearbyevents->eventstartdate);                                   
                                                           echo date("D d Y", strtotime($nearbyevents->eventstartdate));
                                                           $timestamp1 = strtotime($nearbyevents->eventenddate);
                                                           echo date('D d Y', $timestamp1); 
                                                        } 

                                                ?>
                                    </span>
                                  </div>
                            </div>
                                                 
                        </div>

                        <div class="row">
                              <div class="col-md-12">
                                  <form action="<?php echo base_url('Nearbyevents/get_nearbyevent_details'); ?>" method="POST">
                                      <div class="col-md-12 user-info text-center" style="background-color:#f1f1f1; margin:10px 0; border-radius:5px;">
                                          <textarea style= "display: none"  name="details"><?= json_encode($nearbyevents); ?>
                                          </textarea>
                                          <input type="submit" style="border: none; background: transparent; font-weight: bold;" value="View Details">
                                      </div>
                                  </form>
                              </div>
                            </div>     
                          </div> 

                        </div>                       
                 
                    </div>                


                    <?php  } } else {  ?>

                    <center>
                      <img src="<?php echo base_url('assets/images/no_results_icon.png'); ?>" alt="post-image" >

                      <p> Select and Search Your Event category </p>
                    </center>

                    <?php } ?>
                  

                  </div>
            
              </div>
          </div>


          <div class="col-md-3">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; margin-top:0;">Map Locations</h5>
            <div style="margin-left:0; text-align:left;"> <img src="../assets/images/houston-hotels.jpg" class="img-responsive"></div>
          </div>
          <!-- Newsfeed Common Side Bar Right
          ================================================= --> 
          
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
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 

<script>

  // get current location

$(document).ready(function() {
         var currgeocoder;

         //Set geo location lat and long

         navigator.geolocation.getCurrentPosition(function(position, html5Error) {

             geo_loc = processGeolocationResult(position);
             currLatLong = geo_loc.split(",");
             initializeCurrent(currLatLong[0], currLatLong[1]);

        });

        //Get geo location result

       function processGeolocationResult(position) {
             html5Lat = position.coords.latitude; //Get latitude
             html5Lon = position.coords.longitude; //Get longitude
             html5TimeStamp = position.timestamp; //Get timestamp
             html5Accuracy = position.coords.accuracy; //Get accuracy in meters
             return (html5Lat).toFixed(8) + ", " + (html5Lon).toFixed(8);
       }

        //Check value is present or not & call google api function

        function initializeCurrent(latcurr, longcurr) {
             currgeocoder = new google.maps.Geocoder();
             console.log(latcurr + "-- ######## --" + longcurr);

             if (latcurr != '' && longcurr != '') {
                 var myLatlng = new google.maps.LatLng(latcurr, longcurr);
                 return getCurrentAddress(myLatlng);
             }
       }

        //Get current address

         function getCurrentAddress(location) {
              currgeocoder.geocode({
                  'location': location

            }, function(results, status) {
           
                if (status == google.maps.GeocoderStatus.OK) {
                    console.log(results[0]);
                    
                    $("#address").html(results[0].formatted_address);
                     $('#city').html(results[0].address_components[1].long_name);
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
         }
    });

//magnific-popup image shows

$('.gallery').each(function() { // the containers for all your galleries
    $(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});
         //personal profile over view submit and updated profile page

// var base_url = '<?php echo base_url() ?>'; //form submited

//     $(document).ready(function(){

//     $(document).on("submit", function(e){
//             e.preventDefault();

          
//             var url = $(this).attr('action');
//             var formdata = new FormData(this);
          
//             $.ajax({
//                     url : url,
//                     method: 'POST',
//                     data: formdata,
//                     processData: false,
//                     contentType: false,
//                     dataType:'json',
//                     error: function(xhr,status,error)
//                     {   
//                         alert(xhr.responseText);
//                     },
//                     success: function(response)
//                     {
//                        if(response.status == 'success')
//                        {
//                         // swal("Good job!", "Your profile successfully updated!", "success");
//                         // window.location.href = base_url + 'profile/profile_get';
//                         }else if(response.status == 'Failed')
//                        {
                        
//                         swal("Sorry!", "somethink wrong !", "error");
//                        }          
//                     }
//                 });
          
//       });
//    });

        

    



  </script>
</body>
</html>
