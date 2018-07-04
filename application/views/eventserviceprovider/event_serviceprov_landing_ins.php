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

.clr {
	background: #fbbd60;
	color: #3d7489;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
	padding: 10px;
}

.btn-primary{
	background: #e91e63;
	padding: 7px 25px;
	border: none;
	font-size: 13px;
	border-radius: 4px;
	color: #fff;
	position: relative;
  font-weight: 600;
  outline: none;
  border-radius: 30px;
}
.rr-circle {
	border-radius: 50%;
	background-color: #3096EB;
	font-size: 13px;
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
	font-size: 13px;
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
      <img id="profileImage1" class="cover-pic" src="<?php echo base_url('assets/images/esp-banner.jpg'); ?>" style="background-size:cover; width:100%; " > 
    </div>

    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">

      <form action="<?php echo base_url('Eventserviceprovider/serviceprovider_search_key'); ?>"  method="post" enctype="multipart/form-data" >  
      
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12" style="margin-top:15px; margin-bottom:10px;">
        <div class="col-md-3"><div style="font-size:13px; font-weight:bold; margin-top:5px;">Type &amp; Search for Event Service Providers</div></div>
        
          <div class="col-md-3">
            <input type='text' id="event_date" name="city" class="form-control" placeholder="Enter your Event City"  style="text-transform: capitalize;" />
          </div>
                    <div class="col-md-4">
                        <select name="service_type" class="required form-control" style="background-color:#eff0f1;">
                             <option selected="">Select Your Services &nbsp;Type</option>
                             <option value="CateringServices">Catering Services</option>
                             <option value="Cakes">Cakes</option>
                             <option value="Wines">Wines </option>
                             <option value="BBQIndoor">BBQ Indoor &amp; Outdoor</option>
                             <option value="Music">Music DJ Services</option>
                             <option value="EventOrganizers">Event Organizers</option>
                             <option value="BeauticianServices">Beautician Services</option>
                             <option value="Photography">Photography &amp; Video Services </option>
                             <option value="Decor">Decor &amp; Party Rentals</option>
                             <option value="Floral">Floral</option>
                             <option value="PartyCleaningServices">Party Cleaning Services</option>
                             <option value="Limo">Limo &amp; Car Rentals</option>
                             <option value="Dress">Dress &amp; Jewellery</option>
                             <option value="MCsComedians">MC's &amp; Comedians</option>
                             <option value="EventGuestSpeakers">Event Guest Speakers</option>
                             <option value="EventTechnologySupport">Event Technology Support</option>
                             <option value="EventGifting">Event Gifting &amp; Souveniers</option>
                             <option value="TourBusRentals">Tour Bus Rentals</option>
                             <option value="EventStaffingServers">Event Staffing & Servers</option>
                             <option value="PartyEntertainers">Party Entertainers</option>
                             <option value="LifeBandMusic">Life Band Music</option>
                        </select>
                    </div>
           <div class="col-md-2 text-center">
          <button type="submit" class="btn-primary" style="background-color:#fc6653!important; padding-top:5px; padding-bottom:5px;">
            <img src="<?php echo base_url('assets/images/search_icon_ev.png');?> "> Search 
          </button>
        </div>
        </div>
       
      </div>
    </form>

      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12"> 
          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static"> 
            
            <!--profile card ends-->
            
            <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:13px; letter-spacing:-.5px; text-align:left; color:#333;">Search Filters</h5>
              </ul>
                      <ul class="nav-news-feed">
                          <select name="event_totaldays" id="days" class="form-control" style="background-color:#fff;">
				                      <option value="0">Sortby Miles</option>
				                      <option value="day1">Sortby Kms</option>
				                	</select>
                      </ul>
              <!--news-feed links ends--> 
              
              <!--news-feed links ends-->
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:13px; letter-spacing:-.5px; text-align:left;">Distance</h5>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    5 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    10 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    15 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    20 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    25 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    30 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    35 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    40 Miles</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    45 Miles</div>
                </li>
                 <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    50 Miles</div>
                </li>
                 <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    100 Miles</div>
                </li>
                
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
                <h5 style="font-weight:bold; font-size:13px; letter-spacing:-.5px; text-align:left;">Sortby</h5>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    Most Popular</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    Distance</div>
                </li>
                <li>
                  <div style="margin-left:0; text-align:left;">
                    <input type="radio">
                    Best Reviews
                  </div>
                </li>
              </ul>          
              
            </div>
            <!--chat block ends--> 
          </div>

           <!-- here google map location fetch -->
            <?php
              
              $loc = array();
              foreach ($serviceprovider as $serviceproviders) {
                 $address = $serviceproviders->address1." ".$serviceproviders->country;
                 
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
           

              <!-- start here -->

              <?php 
                    $i = 1 ;
                    foreach ($serviceprovider as $serviceproviders){
                     
              ?>

              <div class="col-md-12">
                

                <div class="row">
                  <div class="col-md-4" style="margin-top:10px;">
                    <div class="gallery"> 
                      <img style="height: 150px;" src="<?php echo $serviceproviders->coverpageurl;?>" alt="post-image" class="img-responsive img-thumbnail">
                    </div>
                     <div class="col-md-12">
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;">
                        <span style="font-size:12px; color:#e91e63;">
                        <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_business_view/'.$serviceproviders->_id); ?>" style="color:#fc6653;">
                          View Business Page
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
                      <div class="pull-left"><span style="font-size:13px;font-weight: bold;">
                        <?php if(isset($serviceproviders->companyname)) {echo $serviceproviders->companyname; } ?>
                          
                        </span>
                        <p style="font-size:13px;font-weight: bold;">
                          <?php if(isset($serviceproviders->city)) {echo $serviceproviders->city; } ?>
                        </p>
                      </div>
                    </div>
                    
                    <div class="row">
                      <p style="font-size:12px;">

                        <?php 
                          if(isset($serviceproviders->address1) && ($serviceproviders->address1 !='null') ) {
                              echo $serviceproviders->address1;
                            }
                            if(isset($serviceproviders->address2) && ($serviceproviders->address2 !='null') ){
                              echo $serviceproviders->address2;
                            }
                          if(isset($serviceproviders->zipcode) && ($serviceproviders->zipcode !='null') ){
                              echo $serviceproviders->zipcode;
                            }

                          if(isset($serviceproviders->state) && ($serviceproviders->state !='null') ){
                              echo $serviceproviders->state;
                            }
                          if(isset($serviceproviders->country) && ($serviceproviders->country !='null') ){
                              echo $serviceproviders->country;
                            }
                          
                        ?>

                        <br>
                        <span style="margin-top:20px;">Reviews <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span> </p>
                    </div>
                    <div class="row">
                    <p>
                      <?php echo $serviceproviders->venuedescription; ?>
                      <br>
                      <a href="#"><?php if(isset($serviceproviders->websitelink)) { echo  $serviceproviders->websitelink; } ?></a>
                    </p>
  
                    </div>
                    <div class="row">
                      <div class="pull-right" style="color:#429A0B;">Smart Deal  <?php if(isset($serviceproviders->discount1)) {echo $serviceproviders->discount1; } ?> off Until 
                        <?php if(isset($serviceproviders->dicountbegin1)) 
                          {
                            $timestamp = strtotime($serviceproviders->dicountbegin1);
                            echo date('D dS', $timestamp);
                          } 
                          ?> </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:10px;">                    
                    <div class="pull-left" style="color:#333; font-size:15px; margin-top:5px;"><a href="#" style="color:#fff;"><i class="fa fa-mobile"></i> <?php if(isset($serviceproviders->phone)) { echo $serviceproviders->phone;} ?></a></div>
                   
                   <?php if(isset($serviceproviders->customerengagementbutton)) 
                        {?>

                    <div class="pull-right" style="color:#fff; font-size:13px;">
                      <button class="btn-1 btn-primary" style="background-color:#333!important;">
                        <?php echo $serviceproviders->customerengagementbutton; ?>
                      </button>
                    </div>
                    <?php } ?>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiegWT2wCL6Ek8vujvqgtXe1NjcKKNE9k&libraries=places&callback=initMap">
  
</script>


</body>
</html>
