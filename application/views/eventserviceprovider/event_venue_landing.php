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

<!-- country database using js file -->
<script src="<?php echo base_url('assets/js/countries.js')?>"></script> 

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">
body {
	background-color: #e7e5e6;
}

.clr {
	background: #fbbd60;
	color: #3d7489;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
	padding: 10px;
}
.rr-circle {
	border-radius: 50%;
	background-color: #3096EB;
	font-size: 15px;
	color: #fff;
	width: 35px;
	height: 35px;
	line-height: 35px;
	text-align: center;
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

ul.nav-news-feed li div {
    position: relative;
	margin-left: 0px; 
}
.form-control {
	display: block;
	width: 100%;
	height: 34px;
	padding: 6px 12px;
	font-size: 13px;
	line-height: 1.42857143;
	color: #555;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ccc;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
	-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}
</style>
</head>
<body class="landing-page">
<div class="content-bg-wrap">
  <div class="content-bg"></div>
</div>

<!-- Header  /../includes/
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
    <div class="timeline-cover"> 
      <img id="profileImage1" class="cover-pic" src="<?php echo base_url('assets/images/event-venue-1.jpg');?>" style="background-size:cover; width:100%;" > 
    </div>

    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row" style="margin-bottom:15px;">
      
      <form action="<?php echo base_url('Eventserviceprovider/eventvenue_search_key'); ?>"  method="post" enctype="multipart/form-data" >      
        <div class="col-md-12" style="margin-top:15px; margin-bottom:10px;">
          <div class="col-md-3">
            
            <select name="country" onchange="print_state('state',this.selectedIndex);" id="country" class="form-control" style="background-color:#eff0f1;">                                       
            </select>

          </div>

                                <select name="online_state" id ="state" class="form-control" style="display: none;"></select>
                                <script language="javascript">print_country("country");</script> 

          <div class="col-md-3">
             <input type='text' name="city" class="form-control" placeholder="Enter your Event City" style="text-transform: capitalize;"  />
          </div>
          

          <div class="col-md-4">
                      <select name="venue_type"  class="form-control" style="background-color:#eff0f1;font-size: 12px;">
                            <option value="">Select</option>
                            <option value="Conference Center">Conference Center</option>
                            <option value="Party Hall">Party Hall</option>
                            <option value="Private Dinning">Private Dinning</option>
                            <option value="WorkShop Expos">WorkShop Expos</option>
                            <option value="Concert Hall">Concert Hall</option>
                            <option value="Studio">Studio</option>
                            <option value="Theatre">Theatre</option>
                            <option value="Warehouse">Warehouse</option>
                            <option value="Winery">Winery</option>
                            <option value="Gallery">Gallery</option>
                            <option value="Bar">Bar</option>
                            <option value="Country Club">Country Club</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Cafe">Cafe</option>
                            <option value="Resturant">Resturant</option>
                            <option value="Meeting Space">Meeting Space</option>
                            <option value="Beach Side">Beach Side</option>
                      </select>
          </div>
          <div class="col-md-2 text-center">
          <button type="submit" class="btn-primary" style="background-color:#fc6653!important; padding-top:5px; padding-bottom:5px;"><img src="../assets/images/search_icon_ev.png"> Search </button>
        </div>

     

        </div>
        </form>
      </div>


      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12"> 
          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static"> 
            
            <!--profile card ends-->
            
            <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:13 px; letter-spacing:-.5px; text-align:left; color:#333;">SEARCH FILTERS</h5>
              </ul>
              <!--news-feed links ends--> 
              
              <!--news-feed links ends-->
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:13px; letter-spacing:-.5px; text-align:left;">Amenities</h5>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    AV Equipment</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Beach Front</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Break out Rooms</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Business Center</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Coat Check</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Great Views</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Handicap Accessible</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Indoor</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Media Room</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Coat Check</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Non-Smoking</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Outdoor</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Overnight Rooms</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Pet Friendly</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Pool</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Rooftop</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Rooms Available</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Smoking</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Spa</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Street Parking</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Theater</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Valet Parking</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="checkbox">
                    Wifi</div>
                </li>
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
              </ul>
             
            </div>
            <!--chat block ends--> 
          </div>

            <!-- here google map location fetch -->
            <?php
              
              $loc = array();
              foreach ($eventvenue as $eventvenues) {
                 $address = $eventvenues->address1." ".$eventvenues->country;
                 
                  $prepAddr = str_replace(' ','+',$address);
                                  
                  $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
                  $output= json_decode($geocode);
                               
                  $location  = $output->results[0]->geometry->location;
                  
                  array_push($loc, $location);
                 
              }

                $loc_json = json_encode($loc);
                echo '<script> var markers ='.$loc_json.' </script>'; 
               
            ?>
               

          <div class="col-md-6"> 
            <!-- center box start here  =================================== -->
            <div class="container post-content">
              <!--div class="col-md-12 text-right" style="margin-top:15px; margin-bottom:10px;">
                <a href="#" style="color:#333;"><i class="fa fa-list" style="font-size:13px;"></i></a>&nbsp;&nbsp; 
                <a href="#" style="color:#333;"><i class="fa fa-th" style="font-size:13px;"></i></a> &nbsp;&nbsp;
                <span style="font-size:13px;" >Showing 140 Results</span>
              </div-->

             <?php 
                    $i = 1; 
                    foreach ($eventvenue as $eventvenues){
              ?>

              <div class="col-md-12">
               
                <div class="row">
                  <div class="col-md-4" style="margin-top:10px;">

                    <?php 
                      if(isset($eventvenues->coverpageurl)){
                    ?>

                    <div class="gallery"> 
                      <img style="height: 170px;" src="<?php echo $eventvenues->coverpageurl;?>" alt="post-image" class="img-responsive img-thumbnail">
                    </div> 
                    <?php } else{ ?>
                    <div class="gallery"> 
                      <img src="../assets/images/sharaton.jpg" alt="post-image" class="img-responsive img-thumbnail">
                    </div>
                    <?php } ?>

                    <div class="col-md-12">
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;">
                        <span style="font-size:12px; color:#e91e63;">
                          <a href="<?php echo base_url('Eventserviceprovider/venue_business_view/'.$eventvenues->_id); ?>" style="color:#fc6653;">View Business Page
                          </a>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-8" style="margin-top:10px;">
                    <div class="row">
                      <div class="pull-right">
                        <div class="rr-circle"><?php echo $i; ?></div>
                      </div>
                      <div class="pull-left">
                        <span style="font-size:13px; font-weight: bold;">
                           <?php if(isset($eventvenues->companyname)) {echo $eventvenues->companyname; } ?>
                        </span>
                        <p style="font-size:13px;font-weight: bold;">
                          <?php if(isset($eventvenues->city)) { echo $eventvenues->city; } ?>
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <p style="font-size:13px;">1 Event Venues Available</p>
                    </div>
                    <div class="row">
                      <p style="font-size:12px;">
                        <?php 
                       
                          if(isset($eventvenues->address1) && ($eventvenues->address1 !='null') ) {
                              echo $eventvenues->address1;
                            }
                            if(isset($eventvenues->address2) && ($eventvenues->address2 !='null') ){
                              echo $eventvenues->address2;
                            }
                          if(isset($eventvenues->zipcode) && ($eventvenues->zipcode !='null') ){
                              echo $eventvenues->zipcode;
                            }

                          if(isset($eventvenues->state) && ($eventvenues->state !='null') ){
                              echo $eventvenues->state;
                            }
                          if(isset($eventvenues->country) && ($eventvenues->country !='null') ){
                              echo $eventvenues->country;
                            }
                                                

                        ?>
                        <br>
                        <span style="margin-top:20px;">Reviews <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span> </p>
                    </div>
                    <div class="row">
                      <div class="pull-left" style="font-size:13px; font-weight:bold;">
                       <?php if(isset($eventvenues->eventvenuehallseating)) {echo $eventvenues->eventvenuehallseating." Seating"; } ?> 

                      <?php if(isset($eventvenues->eventvenuehallstanding)) {echo $eventvenues->eventvenuehallstanding." Standing"; } ?>
                      </div>
                      <div class="pull-right" style="color:#429A0B;">
                        Smart Deal <?php if(isset($eventvenues->discount1)) {echo $eventvenues->discount1; } ?> off Until 
                        <?php if(isset($eventvenues->dicountbegin1)) 
                          {
                            $timestamp = strtotime($eventvenues->dicountbegin1);
                            echo date('D dS', $timestamp);
                          } 
                          ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center clr" style="margin-top:10px;">
                   
                    <div style="color:#fff; font-size:13px;">
                    
                      <?php 
                      foreach ($eventvenues->pricingandavailability as $price) 
                         
                         {
                           if($price->day == 'Monday')
                           {
                              echo 'Starting From Hourly Rate '. $price->hourlyrate.' Daily Rate '.$price->dailyrate;
                            }
                          } 
                      ?>

                    </div>
                  </div>
                </div>
              </div>
              
               <?php $i++; } ?>
              
              <!-- end here -->

            </div>
          </div>
          <div class="col-md-3">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; margin-top:0;">Map Locations</h5>
            <div style="margin-left:0; text-align:left;">
                    <div id="mapCanvas" style="width:275px;height:325px; margin:0;"> 
                    </div>
            </div>          
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
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 

<script>
 

function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
        mapTypeId: 'roadmap'
    };
                    
    // Display a map on the web page
    map = new google.maps.Map(document.getElementById("mapCanvas"), mapOptions);
    map.setTilt(50);
     
        
    // Add multiple markers to map
    var infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Place each marker on the map  
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i].lat, markers[i].lng);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
           
        });
        
        // Center the map to fit all markers on the screen
        map.fitBounds(bounds);
    }

    // Set zoom level
    var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
    });
    
}
// Load initialize function
google.maps.event.addDomListener(window, 'load', initMap);

</script> 

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiegWT2wCL6Ek8vujvqgtXe1NjcKKNE9k&libraries=places&callback=initMap"></script>
</body>
</html>
