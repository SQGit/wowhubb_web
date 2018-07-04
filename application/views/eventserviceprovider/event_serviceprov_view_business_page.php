<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<title>Event Service Providers - 3rd Party</title>

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

.clr {
	background: #fbbd60;
	color: #3d7489;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
	padding: 10px;
}
.rr-circle {
	border-radius: 50%;
	background-color: #3096EB;
	font-size: 20px;
	color: #fff;
	width: 50px;
	height: 50px;
	line-height: 50px;
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

<!-- Header /../includes/
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
      <img class="cover-pic" src="<?php echo base_url('assets/images/esp-3-banner.jpg'); ?>" style="background-size:cover; width:100%; margin-top:15px;" > 
    </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12" style="margin-top:15px; margin-bottom:10px;">
          <div class="col-md-12">
            <div class="pull-right">
              <button type="button" class="btn-primary" style="background-color:#fc6653!important; font-size:13px;">
                Contact Us : <?php if(isset($serviceprovider->phone)) { echo $serviceprovider->phone;} ?>  
              </button>
              
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12"> 
          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
          <div class="col-md-3 static"> 

            <!-- here google map location fetch -->
            <?php
                  $address = $serviceprovider->address1." ".$serviceprovider->state." ".$serviceprovider->country;
                  $prepAddr = str_replace(' ','+',$address);

                  $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
                  $output= json_decode($geocode);
                  $latitude = $output->results[0]->geometry->location->lat;
                  $longitude = $output->results[0]->geometry->location->lng;

            ?>
            <input type="hidden" id="latitude" value="<?php echo $latitude; ?>">
            <input type="hidden" id="longitude" value="<?php echo $longitude; ?>">
            
            <!--profile card ends-->
            
            <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:13px; font-weight:bold; letter-spacing:-.5px; text-align:left; color:#333;">
                  <?php if(isset($serviceprovider->companyname)) { echo $serviceprovider->companyname;} ?>
                </h5>

                <li><?php if(isset($serviceprovider->venuedescription)) { echo $serviceprovider->venuedescription;} ?>.</li>
                <li>
              
              <button type="submit" data-toggle="modal" data-target=".modal-1" class="btn-primary" style="background-color:#fc6653!important; font-size:13px;">Inquiry with us</button>
              
      
                
                </li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:13px; font-weight:bold; letter-spacing:-.5px; text-align:left; color:#333;">Location</h5>
                
                <li>
                  
                    <?php 
                          if(isset($serviceprovider->address1) && ($serviceprovider->address1 !='null') ) {
                              echo $serviceprovider->address1;
                            }
                            if(isset($serviceprovider->address2) && ($serviceprovider->address2 !='null') ){
                              echo $serviceprovider->address2;
                            }
                          if(isset($serviceprovider->zipcode) && ($serviceprovider->zipcode !='null') ){
                              echo $serviceprovider->zipcode;
                            }

                          if(isset($serviceprovider->state) && ($serviceprovider->state !='null') ){
                              echo $serviceprovider->state;
                            }
                          if(isset($serviceprovider->country) && ($serviceprovider->country !='null') ){
                              echo $serviceprovider->country;
                            }
                          
                        ?>
                </li>
              </ul>
              
              <!--news-feed links ends--> 
              
                         
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:13px; font-weight:bold; letter-spacing:-.5px; text-align:left; color:#333;">Map Locations</h5>
                <li>
                    <div id="map" style="width:100%;height:300px; margin:0;">              
                  </div>
                </li>
              </ul>
              
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:13px; font-weight:bold; letter-spacing:-.5px; text-align:left; color:#333;">Reviews</h5>
                <li><span style="margin-top:20px;"><i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span></li> 
                <li>Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer
                  <br><em>Markus Houston</em></li>
                <li><a href="#" style="color:#e91e63;">Add a Review</a> </li>
                
              </ul>
              
              
            </div>
            <!--chat block ends--> 
          </div>
          <div class="col-md-9"> 
            <!-- center box start here  =================================== -->
            <div class="container post-content" style="padding:10px 15px;">
              <div class="col-md-12"> 
              <ul class="nav nav-tabs faq-cat-tabs">
        <li class="active">
          <a href="#faq-cat-1" data-toggle="tab" class="text-center" style="font-size:13px; color:#333; font-weight:bold;">Photo Gallery
          </a>
        </li>
        <li><a href="#faq-cat-2" data-toggle="tab" class="text-center" style="font-size:13px;  color:#333; font-weight:bold;">Video Gallery</a></li>
     
      </ul>
        <div class="tab-content faq-cat-content">
         <div class="tab-pane active in fade" id="faq-cat-1">
           <div class="row" style="margin-top:15px;">
             <div class="col-md-5">
             <div class="col-md-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
                <div class="text-center" style="font-size:12px; margin-top:10px; color:#f00;">
                  <strong><?php if(isset($serviceprovider->producttitle1)) { echo $serviceprovider->producttitle1;} ?></strong>
                </div>

                <?php if(isset($serviceprovider->productfile1url) && ($serviceprovider->productfile1url != 'null') )
                  {
                ?>
                <div class="text-center">
                  <img src="<?php echo $serviceprovider->productfile1url; ?>" class="img-responsive img-thumbnail" > 
                </div>

                <?php } else{ ?>

                <div class="text-center">
                  <img src="<?php echo base_url('assets/images/esp_3rdparty.jpg'); ?>" class="img-responsive img-thumbnail" > 
                </div>

                <?php } ?>

                <div class="text-center" style="font-size:12px; margin-top:10px;">
                  <strong>Smart Deal  <?php if(isset($serviceprovider->discount1)) {echo $serviceprovider->discount1; } ?> off Until <?php if(isset($serviceprovider->dicountbegin1)) 
                          {
                            $timestamp = strtotime($serviceprovider->dicountbegin1);
                            echo date('D dS', $timestamp);
                          } 
                          ?>                            
                  </strong>
                </div>

                 <div class="text-center" style="font-size:13px; margin-top:10px;">
                  <button type="submit" class="btn btn-primary" style="font-size:12px;">Add To My Event Organizer Page</button>
                </div>
                
             </div>   
              </div>
              <div class="col-md-7">  
                
                <div  style="font-size:12px; margin-top:10px;">
                  <strong><?php if(isset($serviceprovider->productheading1)) { echo $serviceprovider->productheading1;} ?></strong>
                </div>

                <div  style="font-size:12px; margin-top:10px;">
                  <p>
                    <?php if(isset($serviceprovider->productdescription1)) { echo $serviceprovider->productdescription1;} ?>
                  </p>
                </div>
                
              </div>

              <div class="row">
               <div class="col-md-12" style="margin-top: 15px;"> 
                 <h5 style="font-weight:bold; font-size:13px; font-weight:bold; letter-spacing:-.5px; color:#333; margin-left: 10px;">Business Hours</h5>   
               <table class="table table-striped">
                        <thead>
                          <tr>                           
                            <th>Days</th>
                            <th>Availability</th>
                            <th>Opens From</th>
                            <th>Closed at</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php 
                            foreach ($serviceprovider->businesshours as $hours) {
                          ?>
                          <tr>
                            
                            <td><?php echo $hours->weekday; ?></td>
                            <td><?php echo $hours->availability; ?></td>
                            <td><?php echo $hours->opensfrom; ?></td>
                            <td><?php echo $hours->closedat; ?></td>
                            
                          </tr>

                          <?php  } ?>
                           
                        </tbody>
                      </table>
                 </div> 
                </div>             
                        
           </div>
          </div>

          <div class="tab-pane in fade" id="faq-cat-2">
            <div class="row" style="margin-top:15px;">
              <div class="col-md-5">
                <div class="col-md-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
                
                <div class="text-center" style="font-size:12px; margin-top:10px; color:#f00;">
                  <strong><?php if(isset($serviceprovider->producttitle2)) { echo $serviceprovider->producttitle2;} ?></strong>
                </div>

                <?php if(isset($serviceprovider->productfile2url) && ($serviceprovider->productfile2url != 'null') )
                  {
                ?>
                <div class="text-center">                 
                  <div style="position: absolute; left: 180px; top: 80px;">
                    <a href="<?php echo $serviceprovider->productfile2url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                      <img src="<?php echo base_url('assets/images/youtube.png'); ?>" alt="user"  />
                    </a>
                  </div>
                    <a href="<?php echo $serviceprovider->productfile2url; ?>" class="html5lightbox" data-width="480" data-height="320" >
                      <img style="height: 150px;" class="img-responsive post-image" src="<?php echo $serviceprovider->productfile2thumb; ?>">
                    </a>
                </div>
               <?php } else{ ?>

                <div class="text-center">
                  <img src="<?php echo base_url('assets/images/dany-cakes.jpg'); ?>" class="img-responsive img-thumbnail" > 
                </div>

                <?php } ?>

                <div class="text-center" style="font-size:12px; margin-top:10px;">
                  <strong>Smart Deal  <?php if(isset($serviceprovider->discount2)) {echo $serviceprovider->discount2; } ?> off Until <?php if(isset($serviceprovider->dicountbegin2)) 
                          {
                            $timestamp = strtotime($serviceprovider->dicountbegin2);
                            echo date('D dS', $timestamp);
                          } 
                          ?>                            
                  </strong>
                </div>

                <div class="text-center" style="font-size:12px; margin-top:10px;">
                  <button type="submit" class="btn btn-primary"  style="font-size:12px;">Add To My Event Organizer Page</button>
                </div>

              </div>
              </div>

              <div class="col-md-7">   
                <div  style="font-size:12px; margin-top:10px;">
                  <strong><?php if(isset($serviceprovider->productheading2)) { echo $serviceprovider->productheading2;} ?></strong>
                </div>

                <div  style="font-size:12px; margin-top:10px;">
                  <p><?php if(isset($serviceprovider->productdescription2)) { echo $serviceprovider->productdescription2;} ?></p>
                </div>
              </div> 

              
               
              </div>
              
            </div>
          </div>

        </div>
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
<div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">                  
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3>Lily Valley Cakes<br>
                                  <span style="color:#333; font-size: 15px;">
                                    Fillout our Inquiry Form
                                  </span>
                                  </h3>
                                 
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                              
                    <form action="http://localhost/wowhubb/profile/personal_update_overview" method="post"  id="personal_update_overview" class="form-inline">
                           
                            <div class="row" >                              
                              <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <label for="date-to" class="">Select your Event Type</label>
                              <select name="event_totaldays" id="days" class="form-control">
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
                                <option class="option">Music Concert</option>
                              </select>
                              </div>
                            </div>
                             <div class="row">   
                              <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <label for="date-to" class="">Enter Your Event City</label>
                                 <input type='text' name="event_topic"  class="form-control textBox" />
                              </div>
                            </div>
                            
                            <div class="row">   
                              <div class="form-group col-xs-6" style="margin-bottom:15px;">
                                <label for="date-to" class=""># of Event Attendee </label>
                                <input type='text' name="event_topic"  class="form-control textBox" />
                              </div>
                              <div class="form-group col-xs-6" style="margin-bottom:15px;">
                                <label for="date-to" class=""># of Event Days </label>
                                <select name="eventspace" class="form-control" id="types" >       
                                  <option selected="selected" class="option">1 Day Event</option>
                                   <option class="option">2 Days Event</option>
                                   <option class="option">3 Days Event</option>
                                   <option class="option">4 Days Event</option>
                                </select>
                              </div>
                            </div>
                            
                            <div class="row">   
                              <div class="form-group col-xs-6" style="margin-bottom:15px;">
                                <label for="date-to" class="">Preferred Meeting Date </label>
                                <input type='text' name="event_topic"  class="form-control textBox" />
                              </div>
                              <div class="form-group col-xs-6" style="margin-top:33px; margin-bottom:15px;">
                                <div class="pull-left" style="width:10%;">
		                        <input type="checkbox" name="eventvenue_addressvisible" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
		                      </div>
		                      <div class="pull-left" style="width:90%; font-size:13px;">My Date Can be Flexible</div>
                              </div>
                            </div>
                            <div class="row">
                            <div class="form-group col-xs-12 text-center">
                            <textarea type="text" id="description" name="event_description" class="form-control" style="min-height:90px; font-size:13px;" placeholder="Leave Comments"></textarea>
                            </div>
                            
                              </div>
                            <div class="row">   
                              <div class="form-group col-xs-12 text-center">
                                <label for="date-to" class="">Select Your Meeting Time </label>
                                
                              </div>
                              <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <div class="pull-left" style="width:48%;">
		                        <input type='text' name="event_topic"  class="form-control textBox" />
		                      </div>
		                      <div class="pull-right" style="width:48%;">
                              <input type='text' name="event_topic"  class="form-control textBox" />
                              </div>
                              </div>
                            </div>
                            
                         
                            <div class="row">   
                            <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <div class="pull-left" style="width:48%; margin-bottom:15px;">
		                        <input type='text' name="event_topic"  class="form-control textBox" placeholder="First Name" />
		                      </div>
		                      <div class="pull-right" style="width:48%; margin-bottom:15px;">
                              <input type='text' name="event_topic"  class="form-control textBox" placeholder="Last Name" />
                              </div>
                              <div class="pull-left" style="width:48%;">
                              <input type='text' name="event_topic"  class="form-control textBox" placeholder="Email" />
                              </div>
                              <div class="pull-right" style="width:48%;">
                              <input type='text' name="event_topic"  class="form-control textBox" placeholder="Phone Number" />
                              </div>
                              </div>

                              
                            </div>
                            
                            <div class="row">   
                              <div class="form-group col-xs-12" style="margin-bottom:15px;">
                                <label for="date-to" class="">Add Product  To Your Inquiry </label>
                                 <input type='text' name="event_topic"  class="form-control textBox" />
                              </div>
                            </div>
                                                                                 
                            <div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Submit" class="btn btn-primary" style="width:140px; font-size:13px;">
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

function myMap() {

  var lan = document.getElementById("latitude").value;
  var lon = document.getElementById("longitude").value;
  
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(lan,lon); 
  var mapOptions = {center: myCenter, zoom: 10};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiegWT2wCL6Ek8vujvqgtXe1NjcKKNE9k&libraries=places&callback=myMap"></script>

</script>
</body>
</html>
