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
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="../assets/images/esp-plat-banner.jpg" style="background-size:cover; width:100%; margin-top:0px;" > </div>

    
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">

        <div class="col-md-12 col-sm-12" style="margin-top:25px;">
          <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."CateringServices"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;">
              <img src="<?php echo base_url('assets/images/service_provider/catering-services.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;">             
                <strong>Catering Service<br>
                </strong>                
                 Hire the best local Cooks and Cheffs, for your receptions and parties </div>
            </div>
             </a> 
          </div>

          <div class="col-md-3 col-sm-4" style="position:relative;">
           <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."Cakes"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;">
              <img src="<?php echo base_url('assets/images/service_provider/cakes.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;">                
                <strong>Cakes<br>
                </strong>
                 Hire the best pastries in your local areas  for weddings, birthdays, parties. </div>
            </div>
             </a> 
          </div>

          <div class="col-md-3 col-sm-4" style="position:relative;">
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."Wines"); ?>" >
              <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;">
              <img src="<?php echo base_url('assets/images/service_provider/wines.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;">
               <strong>Wines<br>
                </strong> 
                 Find the best wine and beverages around you for your events and parties  </div>
              </div>
            </a> 
          </div>
          
          <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."Music"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;">
              <img src="<?php echo base_url('assets/images/service_provider/music_dj-services.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <strong>Music &amp; DJ Services<br>
                </strong> 
                 Find the best music and parties around you for your events and parties  </div>
            </div>
             </a> 
          </div>
        
      </div>
      
      <!-- second row -->
      
      <div class="col-md-12 col-sm-12" style="margin-top:25px;">
        <div class="col-md-3 col-sm-4" style="position:relative;"> 
          <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."EventOrganizers"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/event-organizer.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;">
               <strong>Event Organizer<br>
                </strong>
              Get the best out of your upcoming event and party by hiring local professional event planners near you.  </div>
            </div>
             </a> 
          </div>
          <div class="col-md-3 col-sm-4" style="position:relative;"> 
          <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."Photography"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/photography_video-services.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <strong>Photographers & Video Services</strong><br>
                Capture every memorable moment in your evvent by hiring  professional local photographers and videographers  </div>
            </div>
             </a> 
          </div>
          
           <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."BBQIndoor"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/bbq-indoor_outdoor.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <strong>BBQ Indoor &amp; Outdoor</strong><br>
                Wear your best look and smile by hiring the best local beautican for your daily local events  </div>
            </div>
             </a> 
          </div>
          
          <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."Decor"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/decor-party-rentals.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <strong>Decor & Party Rentals</strong><br>
                Wear your best look and smile by hiring the best local beautican for your events and lots more </div>
            </div>
             </a> 
          </div>
    
    
       
      </div>
      
      <!-- Third row -->
      
      <div class="col-md-12 col-sm-12" style="margin-top:25px;">
       <div class="col-md-3 col-sm-4" style="position:relative;"> 
        <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."Floral"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/floral.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Floral<br>
                </strong>Get the best bouquest and floral arrangment for your  next special event from selected local florist around you. </div>
            </div>
             </a> 
          </div>
          
           <div class="col-md-3 col-sm-4" style="position:relative;">
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."PartyCleaningServices"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/party-cleaning-services.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Party Cleaning Services<br>
                </strong>After every party comes the cleanup time  hire the best professional cleaners to do the dirty job for you. </div>
            </div>
             </a> 
          </div>
          
           <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."Limo"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/limo_car-rental-services.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Limo & Car Rental Services<br>
                </strong>Chatter and book the local transportation for your next meeting and events, this includes wedding limosines, party buses </div>
            </div>
             </a> 
          </div>
          
           <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."Dress"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/dress_jewellery.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Dress & Jewellery<br>
                </strong>Want to be at your best look for your next event search and find  the best dress shops and jewels places around you.</div>
            </div>
             </a> 
          </div>
       
      </div>
      <div class="col-md-12 col-sm-12" style="margin-top:25px;">
      
       <div class="col-md-3 col-sm-4" style="position:relative;">
        <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."MCsComedians"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/mcs_comedians.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Party MC's & Comedians<br>
                </strong>Keep the excitment going by hiring the best Party MCs and comedian  for your next event in your city </div>
            </div>
             </a> 
          </div>
          
           <div class="col-md-3 col-sm-4" style="position:relative;">
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."EventGuestSpeakers"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/event-guest-speakers.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Event Guest Speakers<br>
                </strong>Search for the best local and international guest speakers for your next event in your city</div>
            </div>
             </a> 
          </div>
          
           <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."EventTechnologySupport"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/event-technology-support.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;">
                <strong>Event Technology Support<br>
                </strong>Hire the best technical hands to maintian, upgrade your IT based hardware 
                  and software for all your events</div>
            </div>
             </a> 
          </div>
          
           <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."EventGifting"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/event-gifting-souveniers.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Event Gifting & Souveniers<br>
                </strong>Get the best customized gifting for your upcoming events from local gift shops around you</div>
            </div>
             </a> 
          </div>
    
      
      </div>
      <div class="col-md-12 col-sm-12" style="margin-top:25px;">
         <div class="col-md-3 col-sm-4" style="position:relative;"> 
          <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."TourBusRentals"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/bus.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Tour Bus Rentals<br>
                </strong>Book local tour buses for your next on the road events</div>
            </div>
             </a> 
          </div>
          
          <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."EventStaffingServers"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/staff.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Event Staffing & Servers<br>
                </strong>Hire the best local event staffing, includes waiters, Security protocols bartenders</div>
            </div>
             </a> 
          </div>
          
           <div class="col-md-3 col-sm-4" style="position:relative;">
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."PartyEntertainers"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/party.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Party Entertainers<br>
                </strong>Crown your next event with great local shows such as clowns, face painters</div>
            </div>
             </a> 
          </div>
          
           <div class="col-md-3 col-sm-4" style="position:relative;"> 
            <a href="<?php echo base_url('Eventserviceprovider/serviceprovider_keyword/'."LifeBandMusic"); ?>" >
            <div class="pull-left" style="border:1px solid #ccc; border-radius:8px; text-align:center; height:230px;"><img src="<?php echo base_url('assets/images/service_provider/mic.png')?>" alt=""/>
              <div class="pull-left" style="color:#333; padding-bottom:10px;"><strong>Life Band Music<br>
                </strong>Hire local and international life band performers for your next big events</div>
            </div>
             </a> 
          </div>
      </div>
      
      <!-- Fourth row --> 
      
    </div>
  </div>

<!-- </form> -->

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

  
  //send keyword 

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("click", "#serviceprovider_keyword", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);
      
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
                       window.location.href = base_url + 'Eventserviceprovider/event_serviceprov_landing_ins';                                
                    }else 
                     {                    
                        swal("Sorry!", "Something Wrong try again !", "error");
                     }
                }

            });
        });
});
    




         
        



       

 
 

    



  </script>
</body>
</html>
