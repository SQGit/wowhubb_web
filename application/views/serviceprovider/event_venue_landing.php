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
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="../assets/images/event-venue-1.jpg" style="background-size:cover; width:100%;" > </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row" style="margin-bottom:15px;">
        <div class="col-md-12" style="margin-top:15px; margin-bottom:10px;">
          <div class="col-md-2">
            <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
              <option value="0">Country</option>
              <option value="day1">Alaska</option>
              <option value="day2">Algeria</option>
              <option value="day3">India</option>
              <option value="day3">USA</option>
            </select>
          </div>
          <div class="col-md-2">
             <input type='text' id="event_date" name="event_date"  class="form-control" placeholder="Enter your Event City"  />
          </div>
          <div class="col-md-3">
            <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
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
          <div class="col-md-3">
            <select name="event_totaldays" id="days" class="form-control" style="background-color:#eff0f1;">
              <option selected="selected" class="option">Select Your Event Hall Preference</option>
              <option class="option">Conference Center</option>
              <option class="option">Party Hall</option>
              <option class="option">Private Dinning</option>
              <option class="option">WorkShop/Expos</option>
              <option class="option">Concert Hall</option>
              <option class="option">Studio</option>
              <option class="option">Theatre</option>
              <option class="option">Warehouse</option>
              <option class="option">Winery</option>
              <option class="option">Gallery</option>
              <option class="option">Bar</option>
              <option class="option">Country Club</option>
              <option class="option">Hotel</option>
              <option class="option">Cafe</option>
              <option class="option">Resturant</option>
              <option class="option">Meeting Space</option>
              <option class="option">Beach Side</option>
            </select>
          </div>
          <div class="col-md-2 text-center">
          <button type="submit" class="btn-primary" style="background-color:#fc6653!important; padding-top:5px; padding-bottom:5px;"><img src="../assets/images/search_icon_ev.png"> Search </button>
        </div>
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
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Amenities</h5>
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
              <div class="col-md-12 text-right" style="margin-top:15px; margin-bottom:10px;"><a href="#" style="color:#333;"><i class="fa fa-list" style="font-size:18px;"></i></a>&nbsp;&nbsp; <a href="#" style="color:#333;"><i class="fa fa-th" style="font-size:18px;"></i></a> &nbsp;&nbsp;<span style="font-size:16px;" >Showing 140 Results</span></div>

              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                    <hr style="margin:5px 0;">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4" style="margin-top:10px;">
                    <div class="gallery"> <img src="../assets/images/sharaton.jpg" alt="post-image" class="img-responsive img-thumbnail"></div>
                    <div class="col-md-12">
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;"><span style="font-size:12px; color:#e91e63;"><a href="<?php echo base_url('service/event_venue_business'); ?>" style="color:#fc6653;">View Business Page</a></span></div>
                    </div>
                  </div>
                  <div class="col-md-8" style="margin-top:10px;">
                    <div class="row">
                      <div class="pull-right">
                        <div class="rr-circle">1</div>
                      </div>
                      <div class="pull-left"><span style="font-size:20px;">Sharaton Banquest Center</span>
                        <p style="font-size:16px;">Downtown Houston</p>
                      </div>
                    </div>
                    <div class="row">
                      <p style="font-size:16px;">3 Event Venues Available</p>
                    </div>
                    <div class="row">
                      <p style="font-size:14px;">2345, Blue Street, Sugarland Texas 77334<br>
                        <span style="margin-top:20px;">Reviews <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span> </p>
                    </div>
                    <div class="row">
                      <div class="pull-left" style="font-size:15px; font-weight:bold;">100 Standing  50 Seating</div>
                      <div class="pull-right" style="color:#429A0B;">Smart Deal 20% off Until Feb 29th</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center clr" style="margin-top:10px;">
                   
                    <div style="color:#fff; font-size:18px;">Starting From&nbsp;&nbsp;Hourly Rate $499&nbsp;&nbsp;Daily Rate  $20000</div>
                  </div>
                </div>
              </div>
              
              
           <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                    <hr style="margin:5px 0;">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4" style="margin-top:10px;">
                    <div class="gallery"> <img src="../assets/images/clutch.jpg" alt="post-image" class="img-responsive img-thumbnail"></div>
                     <div class="col-md-12">
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;"><span style="font-size:12px; color:#e91e63;"><a href="<?php echo base_url('service/event_venue_business'); ?>" style="color:#fc6653;">View Business Page</a></span></div>
                    </div>
                  </div>
                  <div class="col-md-8" style="margin-top:10px;">
                    <div class="row">
                      <div class="pull-right">
                        <div class="rr-circle">2</div>
                      </div>
                      <div class="pull-left"><span style="font-size:20px;">Clutch Bar  Resort</span>
                        <p style="font-size:16px;">Downtown Houston</p>
                      </div>
                    </div>  
                    <div class="row">
                      <p style="font-size:16px;"> 3 Event Venues Available< /p>
                    </div>
                    <div class="row">
                      <p style="font-size:14px;">1234 Delano Drive Houston Texas 77734<br>
                        <span style="margin-top:20px;">Reviews <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span> </p>
                    </div>
                    <div class="row">
                      <div class="pull-left" style="font-size:15px; font-weight:bold;">200 Standing  50 Seating</div>
                      <div class="pull-right" style="color:#429A0B;">Smart Deal 20% off Until Feb 29th</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center clr" style="margin-top:10px;">
                   
                    <div style="color:#fff; font-size:18px;">Starting From&nbsp;&nbsp;Hourly Rate $499&nbsp;&nbsp;Daily Rate  $20000</div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-12">
                    <hr style="margin:5px 0;">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4" style="margin-top:10px;">
                    <div class="gallery"> <img src="../assets/images/spring.jpg" alt="post-image" class="img-responsive img-thumbnail"></div>
                     <div class="col-md-12">
                      <div class="pull-left" style="font-size:13px; font-weight:bold; color:#333;"><span style="font-size:12px; color:#e91e63;"><a href="<?php echo base_url('service/event_venue_business'); ?>" style="color:#fc6653;">View Business Page</a></span></div>
                    </div>
                  </div>
                  <div class="col-md-8" style="margin-top:10px;">
                    <div class="row">
                      <div class="pull-right">
                        <div class="rr-circle">3</div>
                      </div>
                      <div class="pull-left"><span style="font-size:20px;">Springbook Event Center</span>
                        <p style="font-size:16px;">Downtown Houston</p>
                      </div>
                    </div>
                    <div class="row">
                      <p style="font-size:16px;">3 Event Venues Available</p>
                    </div>
                    <div class="row">
                      <p style="font-size:14px;">1234 Delano Drive Houston 
Texas 77734<br>
                        <span style="margin-top:20px;">Reviews <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star" style="color:#D0A903;"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> 2.1</span> </p>
                    </div>
                    <div class="row">
                      <div class="pull-left" style="font-size:15px; font-weight:bold;">20 Standing  35 Seating</div>
                      <div class="pull-right" style="color:#429A0B;">Smart Deal 20% off Until Feb 29th</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center clr" style="margin-top:10px;">
                    
                    <div style="color:#fff; font-size:18px;">Starting From&nbsp;&nbsp;Hourly Rate $499&nbsp;&nbsp;Daily Rate  $20000</div>
                  </div>
                </div>
              </div>
              
              
            </div>
          </div>
          <div class="col-md-3">
          <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left; margin-top:0;">Map Locations</h5>
<div style="margin-left:0; text-align:left;">
              <img src="../assets/images/houston-hotels.jpg" class="img-responsive"></div>          </div>
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
