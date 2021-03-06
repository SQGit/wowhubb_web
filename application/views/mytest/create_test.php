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
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
<!-- calender links -->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.datetimepicker.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/custom/css/form-wizard-blue.css') ?>">
<link rel="stylesheet" href="<?php echo base_url ('assets/css/theme-styles.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/animate.css')?>" />

<!-- file upload -->

<!-- CSS adjustments for browsers with JavaScript disabled -->

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/><style type="text/css">
  
  label.error {
    font-family: 'Roboto', sans-serif;
   color:red; 
  }

  .textBox {
    background-image: url(./assets/images/designation-icon.png);
    background-position: 0 5px;
    background-size: 30px;
    background-repeat: no-repeat;
    padding-left: 17px;
  }
  /*popup close button  */
  .large.tooltip-inner {
    max-width: 350px;
    width: 350px;
  }
  #footer {
    background: #fff;
    position: relative;
    top: 0px;
  }
  .btn-file {
    position: relative;
    overflow: hidden;
  }
  .form-body-classic .form-control {
    margin: 0;
    padding: 6px 12px;
    background: #fff none repeat scroll 0 0;
    border: 1px solid rgb(197, 194, 195);
    border-radius: 4px;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 14px;
    font-weight: normal;
    color: #333;
    -moz-border-radius: none;
    -webkit-border-radius: none;
    border-radius: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
  }
  /*https://stackoverflow.com/questions/14199788/how-do-i-use-an-image-as-a-submit-button */ 
    #btnAdd4, #btnAdd5, #btnAdd6 {
    background-image: url("<?php echo base_url('assets/images/Plus.png')?>");
    background-repeat: no-repeat;
    border: none;
    width: 32px;
    height: 32px;
    cursor: pointer;
    color: transparent;
    background-color: transparent;
    outline: none;
  }
  
  #btnAdd10{
    background-image: url("<?php echo base_url('assets/images/close-outline-32.png')?>");
    background-repeat: no-repeat;
    border: none;
    width: 32px;
    height: 32px;
    cursor: pointer;
    color: transparent;
    background-color: transparent;
    outline: none;
  }
  #textAdd {
    background-image: url("<?php echo base_url('assets/images/Plus.png')?>");
    background-size: cover;
    border: none;
    width: 32px;
    height: 32px;
    cursor: pointer;
    color: transparent;
    background-color: transparent;
    outline: none;
  }
  #imageUpload1 {
    display: none;
  }
  #profileImage1 {
    cursor: pointer;
  }
  #profile-container1 {
    width: 150px;
    height: 150px;
  }
  #imageUpload2 {
    display: none;
  }
  #profileImage2 {
    cursor: pointer;
  }
  #imageUpload3 {
    display: none;
  }
  #profileImage3 {
    cursor: pointer;
  }
  #imageUpload4 {
    display: none;
  }
  #profile-container4 {
    width: 150px;
    height: 150px;
  }
  #imageUpload5 {
    display: none;
  }
  #profileImage5 {
    cursor: pointer;
  }
  .faq-cat-content {
    margin-top: 25px;
  }
  .faq-cat-tabs li a {
    padding: 15px 10px 15px 10px;
    background-color: #ffffff;
    border: 1px solid #dddddd;
    color: #777777;
  }
  .nav-tabs li a:focus, .panel-heading a:focus {
    outline: none;
  }
  .panel-heading a, .panel-heading a:hover, .panel-heading a:focus {
    text-decoration: none;
    color: #777777;
  }
  .faq-cat-content .panel-heading:hover {
    background-color: #efefef;
  }
  .active-faq {
    border-left: 5px solid #888888;
  }
  .panel-faq .panel-heading .panel-title span {
    font-size: 13px;
    font-weight: normal;
  }
  .form-wizard h4 span {
    font-size: 14px;
  }
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
  .ac-container {
    width: 100%;
    margin: 10px auto 30px auto;
    text-align: left;
  }
  .ac-container label {
    padding: 5px 10px;
    position: relative;
    z-index: 20;
    display: block;
    
    cursor: pointer;
    color: #777;
    text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
    line-height: 20px;
    font-size: 12px;
    background: #ffffff;
    background: -moz-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #ffffff), color-stop(100%, #eaeaea));
    background: -webkit-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
    background: -o-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
    background: -ms-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
    background: linear-gradient(top, #ffffff 1%, #eaeaea 100%);
   filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eaeaea', GradientType=0 );
    box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 1px 0px 0px 0px rgba(255,255,255,0.9) inset, 0px 2px 2px rgba(0,0,0,0.1);
  }
  .ac-container label:hover {
    background: #fff;
  }
  .ac-container input:checked + label, .ac-container input:checked + label:hover {
    background: #c6e1ec;
    color: #3d7489;
    text-shadow: 0px 1px 1px rgba(255,255,255, 0.6);
    box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
  }
  .ac-container label:hover:after, .ac-container input:checked + label:hover:after {
    content: '';
    position: absolute;
    width: 24px;
    height: 24px;
    right: 2px;
    top: 2px;
    background: transparent url(../assets/images/arrow_down.png) no-repeat center center;
  }
  .ac-container input:checked + label:hover:after {
    background-image: url(../assets/images/arrow_up.png);
  }
  .ac-container input {
    display: none;
  }
  .ac-container article {
    background: rgba(255, 255, 255, 0.5);
    margin-top: -1px;
    overflow: hidden;
    height: 0px;
    position: relative;
    z-index: 10;
    -webkit-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
    -moz-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
    -o-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
    -ms-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
    transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
  }
  .ac-container article p {
    font-style: italic;
    color: #777;
    line-height: 23px;
    font-size: 14px;
    padding: 5px 20px;
    text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
  }
  .ac-container input:checked ~ article {
    -webkit-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    -moz-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    -o-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    -ms-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
    box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3);
  }
  .ac-container input:checked ~ article.ac-small {
    height: 400px;
  }
  .ac-container input:checked ~ article.ac-medium {
    height: 450px;
  }
  .ac-container input:checked ~ article.ac-large {
    height: 500px;
  }

  .form-group {
    margin-bottom: 5px!important;
  }
  .form-group-1 {
    margin-bottom: 0px;
  }
  .form-body-classic.form-wizard .btn-1 {
    min-width: 105px;
    height: 30px;
      margin: 0;
      padding: 0 20px;
      border: none;
      font-family: 'Lato', sans-serif;
      font-size: 16px;
      font-weight: normal;
      line-height:30px;
      color: #fff;
    background-color:#3A2021;
      -moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px;
      text-shadow: none;
      -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
  }
  .btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
  }

  img {
    max-width: 200px;
    height: auto;
    display: inline-block;
  }

  .remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
    width: 200px;
      /*margin-left: 107px;*/
  }
  .remove:hover {
    background: white;
    color: black;
  }

  .remove1 {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
    width: 200px;
      margin-left: 144px;
  }
  .remove1:hover {
    background: white;
    color: black;
  }
  .tab {
    display: none;
  }
  .tab1 {
    display: none;
  }
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

 .form-group-1 img {    
    left: 24px;
    position: absolute;
    top: 7px;
}

/*remove faq input box*/
#remove_faq {
    background-image: url(../assets/images/close-outline-32.png);
    background-repeat: no-repeat;
    border: none;
    width: 32px;
    height: 32px;
    cursor: pointer;
    color: transparent;
    background-color: transparent;
    outline: none;
}

/*hide input type number arrows*/
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
/*.swal2-contentwrapper
{
  margin: 0 auto;
    height: 150px;
}*/
</style>
</head>

<body class="landing-page">

  <div class="swal"></div>
  

<div class="content-bg-wrap">
  <div class="content-bg"></div>
</div>

<!-- Header
    ================================================= -->
<header id="header">
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="JavaScript:void(0);" alt="logo" /></a> </div>
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
      <!-- Collect the nav links, forms, and other content for toggling --> 
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</header>
<div class="google-maps"> </div>
<!--Header End-->

<div class="container"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
    <div id="page-contents">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-10 form-wizard form-body-classic form-header-classic" style="min-width:1200px;"> 
            <!-- 
            Just change the class name for make it with different style of design.

            Use anyone class "form-header-classic" or "form-header-modarn" or "form-header-stylist" for set your form header design.
            
            Use anyone class "form-body-classic" or "form-body-material" or "form-body-stylist" for set your form element design.
            -->
            
            <h3>Create Your Event</h3>
            <p>Please fill information to a create an event </p>
             <img src="../assets/images/banner.jpg" class="img-thumbnail"  alt="banner-image"/>
            <!-- Form progress -->
    <div class="form-wizard-steps form-wizard-tolal-steps-7">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="7" style="width: 12.25%;"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p>Event Details</p>
              </div>
              <!-- Step 1 --> 
              
              <!-- Step 2 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-exclamation" aria-hidden="true"></i></div>
                <p>!Wowtag</p>
              </div>
              <!-- Step 2 --> 
              
              <!-- Step 3 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <p>Event Venue</p>
              </div>
              <!-- Step 3 --> 
              
              <!-- Step 4  -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                <p>Event Schedule</p>
              </div>
              <!-- Step 4 --> 
              
              <!-- Step 5 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-flash" aria-hidden="true"></i></div>
                <p>Event Highlights</p>
              </div>
              <!-- Step 5 --> 
              <!-- Step 6 -->
              <div class="form-wizard-step">
                <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                <p>Event Contact/ URL Links</p>
              </div>
              <!-- Step 6 --> 
              
     </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
    <form id="create_event" action="<?php echo base_url('event/create_test'); ?>"  method="post" enctype="multipart/form-data" > 
      
        <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"> </div>
                </div>
                <!-- Progress Bar -->
                <h4> <span>Step 1 - 7</span></h4>

                <div class='col-sm-5'>
                       <div class='col-sm-12' style="background-color:#f9f9f9;padding-top:10px; ">
                          <div class='col-sm-3'>
                            <label>Evnt Tour City</label>
                          </div>
                          <div class='col-sm-4'>
                            <label>Date</label>
                          </div>
                          <div class='col-sm-4'>
                            <label>Ticket URL</label>
                          </div>
                         <div id="add_tour">
                         </div> 
                     

                <div id="event_tour">
                    <div id="event_tour_1" class="tab">                      

                        <div class='form-group col-sm-12' style="margin-top:20px;">
                          <label>Enter Your Event Venue / location Name</label>                         
                          <input type='text' id="event_tour_name_1" name="event_venue_name[]"  class="form-control textBox" onblur="update_tour()"/>
                        </div>

                        <div class='form-group col-sm-6'>
                          <label>Event Start Date</label>
                          <input type='text' id="tour_startdate_1" name="eventvenue_startdate[]"  class="event_startdate form-control "  />
                        </div>

                        <div class='form-group col-sm-6'>
                          <label>Event Start Time</label>
                          <input type='text' id="tour_startime_1" name="eventvenue_startime[]"  class="event_startime form-control "  />
                        </div>
                       
                        <div class='form-group col-sm-6' >
                          <label>Event End Date</label>
                          <input type='text' id="tour_enddate_1" name="eventvenue_enddate[]"  class="event_enddate form-control " />
                        </div>

                        <div class='form-group col-sm-6'>
                          <label>Event End Time</label>
                          <input type='text' id="tour_endtiming_1" name="eventvenue_endtiming[]"  class="event_endtiming form-control "  />
                        </div>

                        <div class='form-group col-sm-12'>
                          <label>Address 1</label>
                          <input type='text' id="tour_address1_1" name="address1[]"  class="form-control"  />
                        </div>

                        <div class='form-group col-sm-12'>
                          <label>Address 2</label>
                          <input type='text' id="tour_address2_1" name="address2[]"  class="form-control"  />
                        </div>

                        <div class='form-group col-sm-12'>
                          <label>City</label>
                          <input type='text' id="tour_city_1" name="venue_city[]" class="form-control" />
                        </div>

                        <div class='form-group col-sm-12'>  
                           <label>Country</label>                   
                                <select id="tour_country_1" name="venue_country[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> 
                                           <option value="">Country </option> 
                                            <option value="Afghanistan">Afghanistan </option>
                                            <option value="Albania">Albania </option>
                                            <option value="Algeria">Algeria </option>
                                            <option value="American Samoa">American Samoa </option>                               
                                            <option value="Srilanka">Srilanka </option>
                                            <option value="Switzerland">Switzerland </option>
                                            <option value="Thailand">Thailand </option>                                           
                                </select>
                        </div>
                        

                        <div class='form-group col-sm-6'>
                          <label>Ticket URL</label>
                          <input type='text' id="ticket_url_1" name="venue_ticket_url[]" class="form-control" onblur="update_tour()"/>
                        </div>

                        <div class='form-group col-sm-6'>
                          <label>Ticket Price</label>
                          <input type='text' id="ticket_price_1" name="venue_ticket_price[]" class="form-control" />
                        </div>

                        <div class='form-group col-sm-12'>
                          <label>Zipcode/ Postal Code</label>
                          <input type='number' id="tour_zipcode_1" name="zipcode[]"  class="form-control"  />
                        </div>
                  </div>
              </div> 

            </div>  

                   <div class='col-sm-12'> 
                      <div class='col-sm-4'>
                        <a href="JavaScript:void(0);" id="add_event_tour" data-nxt_event_tour="2">
                        <i class="fa fa-plus-circle"></i> Add multiple Tour </a>
                      </div>
                      <div style="overflow:hidden;">
              
                  <div class="col-md-8">
                    <a href="JavaScript:void(0);" id="prevButton" onclick="nextPreview(-1)">Previous</a>
                    <a href="JavaScript:void(0);" id="nextButton" onclick="nextPreview(1)" style="margin-left: 35px;"> Next</a>
                  </div>          
            </div>                     
                   </div> 
                   
            </div>
            <div class='col-sm-12'>
                  <div class="form-wizard-buttons">
                    <button type="button" class="btn btn-next" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                  </div>
                </div>
             
    


    
              <!--  Step 4  event schedule-->
           
    <fieldset>      

               <div class="progress">
                      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="57.12" aria-valuemin="0" aria-valuemax="100" style="width:57.12%">
                       </div>
                </div>
                <!-- Progress Bar -->
                <div class="row">
                  <div class="col-md-9">
                    <div class='form-group col-sm-12'> <a href="JavaScript:void(0);"><i class="fa fa-fast-forward"></i> Skip</a><br>
                      <strong style="font-size: 20px; color: #e91e63">Spice Up Your Upcoming Event By Uploading  A Promotional Ad Video {!Wowtag}  </strong>
                     </div>
                  </div>
                  <div class="col-md-3">
                    <div class="pull-right">
                      <h4> <span>Step 4 - 6</span></h4>
                    </div>
                  </div>
                </div>

            <div class='form-group col-sm-9' style="margin-top: 30px;"> 
                  
                  <!-- Nav tabs category -->
                    <input type="hidden" name="no_of_days" id="no_of_days" value="">
                  <ul id="tab-list" class="nav nav-tabs" role="tablist">
            
                </ul>

                  <!-- Tab panes -->
                  <div id="tab-content" class="tab-content">                   
                </div>
                  
          </div>

                <!-- here end tab view -->
             
                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">
                    <button type="button" class="btn btn-next" style="background:#005898;">Save Draft</button>
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" class="btn btn-next">Next</button>
                  </div>
                </div>
    </fieldset>
</form>
             
              <!--  Step 5 -->
   
              
              <!-- end Step 5 --> 
              
              <!--  Step 6 -->
   


           
        <!-- strat Step 7 
            </form>-->
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    
<!-- Scripts
    ================================================= --> 
    
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/additional-methods.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 
<!--<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> -->
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>  
>
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.js')?>"></script>  
<script src="<?php echo base_url('assets/js/moment.js')?>"></script> 
 
<!-- model popup bootstrap --> 
<script src="<?php echo base_url('assets/js/bootstrap3.3.4.min.js')?>"></script> 

<script>



  
  
var option_template = ''; //golabal variable for dynamic add address step 3


function valueChanged()
  {
      if($('.no_link').is(":checked"))   
          $(".hide_link").hide();
      else
        $(".hide_link").show();
  }

// hide and show date depend on select days 

$(document).ready(function(){
    $("#btn-add-tab").change(function () {        
               
                  $("#date_hide").show();
              
    });

}); 

    //time picker
  $("#event_startime").datetimepicker(
        { 
                datepicker:false,   //12 hours time format 
                format:'g:i A',
                formatTime: 'g:i A',
                mask:'29:59 99',  
                step: 5,   
                ampm: true                        
             });

  $("#event_endtiming").datetimepicker(
            { 
                datepicker:false,   //12 hours time format 
                format:'H:i A',
                formatTime: 'H:i A',
                mask:'29:59 99',  
                step: 5,   
                ampm: true 
             });

  //wowtag run from and to date

    $("#runtime_from").datetimepicker({      
                  format:'M-d-Y',      
                  timepicker:false,  
                   minDate:0,                     
      
    });


    $("#totime_to").datetimepicker({      
                format:'m-d-Y',      
                timepicker:false,
                  onShow:function( ct )
                  {
              this.setOptions({                       
              maxDate:jQuery('#event_enddate').val()?jQuery('#event_enddate').val():false,
              minDate:jQuery('#event_startdate').val()?jQuery('#event_startdate').val():false
           })
          },  
    });
            
 //checkbox  with model popup box
      $('input[type="checkbox"][name=specific_group]').on('change', function(e)
          {
            if(e.target.checked){
            $('#myModal').modal();
          }
       });

//event schedule day start and end time 

 $('body').on('focus',".day_end_time", function(){   //dynamically add time
      $(this).datetimepicker(
      {
          datepicker:false,   //12 hours time format 
                format:'h:i A',
                formatTime: 'h:i A',
                // mask:'29:59 99',  
                step: 5,   
                ampm: true  
      });
    
  });

$('body').on('focus',".day_start_time", function(){   //dynamically add time
      $(this).datetimepicker(
      {
          datepicker:false,   //12 hours time format 
                format:'h:i A',
                formatTime: 'h:i A',
                // mask:'29:59 99',  
                step: 5,   
                ampm: true  
      });
    
  });

//dynamically add event venue address

// function generate_address_fields(count)
//  {  
//   var address  = '<div id="event_address_'+count+'" class="animated bounceInRight tab"> <div class="form-group col-sm-12" style="margin-top:20px;"> <label>Enter Your Event Venue / location Name</label> <input type="text" id="event_venue_name_'+count+'" name="event_venue_name[]"  class="form-control" onblur="update_vanue()" /> </div> <div class="form-group col-sm-12"> <label>Address 1</label> <input type="text" id="address1_'+count+'" name="address1[]"  class="form-control"  /> </div> <div class="form-group col-sm-12"> <label>Address 2</label> <input type="text" id="address2_'+count+'" name="address2[]"  class="form-control"  /> </div> <div class="form-group col-sm-12"> <label>City</label> <input type="text" id="city_'+count+'" name="venue_city[]" class="form-control" /> </div> <div class="form-group col-sm-12">  <div class="form-group col-sm-12"> <label>Zipcode/ Postal Code</label> <input type="number" id="zipcode_'+count+'" name="zipcode[]"  class="form-control"  /> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);" id="btnAdd10" class="remove_address btn btn-info btn-sm"> </a> </div> </div>';

//         return address;
// }

//    var currentTab = 0; // Current tab is set to be the first tab (0)
//    showTab(currentTab); // Display the current tab

//   $('#btnAdd7').click(function() //here add address
//     {
//     $('[id^=event_address_]').hide();
//         //Once add button is clicked
//         var nxtaddress_count = $(this).data("nxt_event_address");

//         var nxtaddressHTML = generate_address_fields(nxtaddress_count);
//     $('[id^=event_address_'+nxtaddress_count+']').show();
//         $('#event_venues').append(nxtaddressHTML); // Add field html

//     nxtaddress_count++; //Increment field counter

//         $(this).data('nxt_event_address', nxtaddress_count); //update data nxtportion   
//         nextPrev(1);             

//   });

//  //remove function

//    $(document).on('click', '.remove_address', function(e)
//     {
//           e.preventDefault();
//           nextPrev(-1);
//           $(this).parents('[id^=event_address_]').remove();
//           update_vanue();   //here remove event venue on top
//     });

// function showTab(n)
//  {  
//   // This function will display the specified tab of the form...
//       var x = document.getElementsByClassName("tab");
//       x[n].style.display = "block";
//       //... and fix the Previous/Next buttons:
//       if (n == 0) {
//         document.getElementById("prevBtn").style.display = "none";
//       } else {
//         document.getElementById("prevBtn").style.display = "inline";
//       }
//       if (n == (x.length - 1)) {
//         document.getElementById("nextBtn").style.display = "none";
//       } else {
//         document.getElementById("nextBtn").style.display = "inline";
//       }
//       update_vanue();
// }

// function nextPrev(n)
//  {
//   // This function will figure out which tab to display  
//     var x = document.getElementsByClassName("tab");
//     // Hide the current tab:     
//     x[currentTab].style.display = "none";
//     // Increase or decrease the current tab by 1:
//     currentTab = currentTab + n;  
//     // Otherwise, display the correct tab:    
//     showTab(currentTab);
// }

  
// function update_vanue() {
  
//   option_template = '';

//     $('#show_vanue').find('div').remove();
//     $('.venueselectpicker option').remove();

//     $(".tab").each(function(index){
//         var index = index+1; 
//         var venue = $(this).find("[id^=event_venue_name_]").val();  
//         var address = $(this).find("[id^=address1_]").val();
//         // var city = $(this).find("[id^=city_]").val();

//         if(venue != '' || address != '')
//         {
//             var template = ' <div class="form-group col-sm-12" style="background-color:#9e9999; margin-top:10px; "> <div class="pull-left" style="width:40%;">Event Venue '+index+'</div>'+
//                     '<div class="pull-left" style="width:45%;"> '+venue+' </div>'+
//                     '<div class="pull-left" style="width:15%;"><img src="../assets/images/map-icon.png" alt="map-icon" /></div> </div>';

//             option_template += '<option value="'+venue+' ">'+venue+' </option>';
//         }
        

//         $('#show_vanue').append(template);          
      
//     }); 

//      $('.venueselectpicker').append(option_template);
                
// }


//dynamic add event tour


function generate_tour_fields(count)
 {  
  var tour_address  = '<div id="event_tour_'+count+'" class="animated bounceInRight tab"> <div class="form-group col-sm-12" style="margin-top:20px;"> <label>Enter Your Event Venue / location Name</label> <input type="text" id="event_tour_name_'+count+'" name="event_venue_name[]"  class="form-control" onblur="update_vanue()" /> </div> <div class="form-group col-sm-6"> <label>Event Start Date</label> <input type="text" id="tour_startdate_'+count+'" name="eventvenue_startdate[]"  class="event_startdate form-control " /> </div> <div class="form-group col-sm-6"> <label>Event Start Time</label> <input type="text" id="tour_startime_'+count+'" name="eventvenue_startime[]"  class="event_startime form-control "  /> </div> <div class="form-group col-sm-6" > <label>Event End Date</label> <input type="text" id="tour_enddate_'+count+'" name="eventvenue_enddate[]"  class="event_enddate form-control " /> </div> <div class="form-group col-sm-6"> <label>Event End Time</label> <input type="text" id="tour_endtiming_'+count+'" name="eventvenue_endtiming[]"  class="event_endtiming form-control "  /> </div> <div class="form-group col-sm-12"> <label>Address 1</label> <input type="text" id="tour_address1_'+count+'" name="address1[]"  class="form-control"  /> </div> <div class="form-group col-sm-12"> <label>Address 2</label> <input type="text" id="tour_address2_'+count+'" name="address2[]"  class="form-control" /> </div> <div class="form-group col-sm-12"> <label>City</label> <input type="text" id="tour_city_'+count+'" name="venue_city[]" class="form-control" /> </div> <div class="form-group col-sm-12"> <label>Country</label> <select id="tour_country_'+count+'" name="venue_country[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="">Country </option> <option value="Afghanistan">Afghanistan </option> <option value="Albania">Albania </option> <option value="Algeria">Algeria </option> <option value="American Samoa">American Samoa </option> <option value="Andorra">Andorra </option> <option value="Angola">Angola </option> <option value="Australia">Australia </option> <option value="Bahamas">Bahamas </option> <option value="Bahrain">Bahrain </option> <option value="Bangladesh">Bangladesh </option> <option value="Barbodos">Barbodos </option> <option value="Canada">Canada </option> <option value="Cape Verde">Cape Verde </option> <option value="Chile">Chile </option> <option value="China">China </option> <option value="Colombia">Colombia </option> <option value="Denmark">Denmark </option> <option value="Dominica">Dominica </option> <option value="Dominican Republic">Dominican Republic </option> <option value="Finland">Finland </option> <option value="France">France </option> <option value="French Guiana">French Guiana </option> <option value="Gabon">Gabon </option> <option value="Gambia">Gambia </option> <option value="Greece">Greece </option> <option value="Greenland">Greenland </option> <option value="Hong Kong">Hong Kong </option> <option value="Hungary">Hungary </option> <option value="Iceland">Iceland </option> <option value="India">India </option> <option value="Iraq">Iraq </option> <option value="Ireland">Ireland </option> <option value="Italy">Italy </option> <option value="Jamaica">Jamaica </option> <option value="Japan">Japan </option> <option value="Kenya">Kenya </option> <option value="Kuwait">Kuwait </option> <option value="Latvia">Latvia </option> <option value="Lebanon">Lebanon </option> <option value="Liberia">Liberia </option> <option value="Macao">Macao </option> <option value="Madagaskar">Madagaskar </option> <option value="Malawi">Malawi </option> <option value="Malaysia">Malaysia </option> <option value="Mali">Mali </option> <option value="Malta">Malta </option> <option value="Mexico">Mexico </option> <option value="Monaco">Monaco </option> <option value="Myanmar">Myanmar </option> <option value="Nepal">Nepal </option> <option value="Netherlands">Netherlands </option> <option value="Niger">Niger </option> <option value="Norway">Norway </option> <option value="Oman">Oman </option> <option value="Pakistan">Pakistan </option> <option value="Palau">Palau </option> <option value="Panama">Panama </option> <option value="Peru">Peru </option> <option value="Philippines">Philippines </option> <option value="Poland">Poland </option> <option value="Qatar">Qatar </option> <option value="Romania">Romania </option> <option value="Russian Federation">Russian Federation </option> <option value="Samoa">Samoa </option> <option value="Senegal">Senegal </option> <option value="Spain">Spain </option> <option value="Srilanka">Srilanka </option> <option value="Switzerland">Switzerland </option> <option value="Thailand">Thailand </option> </select> </div><div class="form-group col-sm-6"> <label>Ticket URL</label> <input type="text" id="ticket_url_'+count+'" name="venue_ticket_url[]" class="form-control" /> </div> <div class="form-group col-sm-6"> <label>Ticket Price</label> <input type="text" id="ticket_price_'+count+'" name="venue_ticket_price[]" class="form-control" /> </div> <div class="form-group col-sm-12"> <label>Zipcode/ Postal Code</label> <input type="number" id="tour_zipcode_'+count+'" name="zipcode[]"  class="form-control"  /> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);" id="btnAdd10" class="remove_address btn btn-info btn-sm"> </a> </div> </div>';

        return tour_address;
}

  var curTab = 0; // Current tab is set to be the first tab (0)
    shownextTab(curTab); // Display the current tab

  $('#add_event_tour').click(function() //here add address button id name btnAdd7
    {
    $('[id^=event_tour_]').hide();
        //Once add button is clicked
        var nxttour_count = $(this).data("nxt_event_tour");

        var nxttourHTML = generate_tour_fields(nxttour_count);
    $('[id^=event_tour_'+nxttour_count+']').show();
        $('#event_tour').append(nxttourHTML); // Add field html

    nxttour_count++; //Increment field counter

        $(this).data('nxt_event_tour', nxttour_count); //update data nxtportion   
        nextPreview(1);             

  });

 //remove function

   $(document).on('click', '.remove_address', function(e)
    {
          e.preventDefault();
          nextPreview(-1);
          $(this).parents('[id^=event_tour_]').remove();
          update_tour();   //here remove event venue on top
    });

function shownextTab(n)
 {  
  // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevButton").style.display = "none";
      } else {
        document.getElementById("prevButton").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextButton").style.display = "none";
      } else {
        document.getElementById("nextButton").style.display = "inline";
      }
      update_tour();
}

function nextPreview(n)
 {
  // This function will figure out which tab to display  
    var x = document.getElementsByClassName("tab");
    // Hide the current tab:     
    x[curTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    curTab = curTab + n;  
    // Otherwise, display the correct tab:    
    shownextTab(curTab);
}

  
function update_tour() {
  
  // option_template = '';

    $('#template').find('div').remove();
   

    $(".tab").each(function(){
        // var tesr = index1+1;   
        var venue = $(this).find("[id^=event_tour_name_]").val();  
        var address = $(this).find("[id^=address1_]").val();

        var city = $(this).find("[id^=city_]").val();
        var start_date = $(this).find("[id^=event_startdate_]").val();
        var end_date = $(this).find("[id^=event_enddate_]").val();
        var ticket_url = $(this).find("[id^=ticket_url_]").val();



        if(venue != '' || ticket_url != '' )
        {
            var template = ' <div class="form-group col-sm-12" style="background-color:#9e9999; margin-top:10px; "> <div class="pull-left" style="width:40%;">Event tour </div>'+
                    '<div class="pull-left" style="width:45%;">'+venue+'</div>'+
                    '<div class="pull-left" style="width:15%;">'+ticket_url+'</div> </div>';

            var event_tour = ' <div class="form-group col-sm-12" style="background-color:#9e9999; margin-top:10px; "> <div class="pull-left" style="width:10%;">'+venue+'</div>'+
                    '<div class="pull-left" style="width:45%;">'+start_date+'</div>'+                    
                    '<div class="pull-left" style="width:10%;">'+ticket_url+'</div>';          
        }        

        $('#add_tour').append(template);    
      
    }); 
                
}


  
 //dynamic add event program schdule 
// this part will be show event start date

$(function(){ 

  $('#event_startdate').datetimepicker({
  timepicker:false,
  minDate:0,
  format:'M-d-Y',
  onChangeDateTime:function(dp,$input){

    var day_count= $('select').find('option:selected').val();
    

    var startdate = moment(dp).format("M/D/Y");
    var new_date = moment(startdate);
    var enddate = new_date.add(day_count-1, 'days').format('MMM-DD-YYYY');
   
    $('#event_enddate').val(enddate);

    for(var i=1;i<=day_count;i++)
    {
      var startdate = moment(dp).format("M/D/Y");
      var new_date = moment(startdate);

      $('#tab-list #'+i).text(new_date.add(i-1, 'days').format('ddd, MMM Do'));
       
    }

  } 

});
});

// end date

$(function(){

  $('#event_enddate').datetimepicker({
  timepicker:false,
  format:'M-d-Y',
  onChangeDateTime:function(dp,$input){
    // alert($input.val())
  }
});
});

// pass value with in same form
$('#event_startime').change(function() {
    $('#day1_start_time').val($(this).val());
});



$(document).ready(function() {
    $('#btn-add-tab').on('change',function()
     {
        var i = 0;
         var selectedValue = $(this).val();  
          $('#tab-list').html('');        //clear tab data before select option
          $('#tab-content').html('');             
          
          $('#no_of_days').val(selectedValue);

          var tabID = 1;

      for(i=0;i<selectedValue;i++)
      {    
         
        $('#tab-list').append($('<li><a style="text-align:center;" href="#tab' + tabID + '" role="tab" data-toggle="tab"> Day ' + tabID + ' <br> <span id="' + tabID + '"> </span></a></li>'));

        $('#tab-content').append($('<div class=" tab-pane fade in active tab_' + tabID + '" id="tab' + tabID + '">  <div class="form-group col-sm-12 text-center"> <div class="form-group col-sm-12 text-center" style="background:#f5f5f5; padding:15px 10px;"> <div style="width:10%" class="pull-left"><span style="color:#e9e9e9;">width</span></div> <div style="width:17%" class="pull-left"> <label>Event Start Time</label> </div> <div style="width:12%" class="pull-left"> <input type="text" id="day1_start_time" name="day'+tabID+'_event_starttime"  class="form-control day_start_time" /> </div> <div style="width:17%; margin-left:35px;" class="pull-left"> <label>Event End Time</label> </div> <div style="width:12%" class="pull-left"> <input type="text" id="day1_end_time" name="day'+tabID+'_event_endtime"  class="form-control day_end_time" placeholder="8:14"  /> </div> </div> </div> <div id="day_' +tabID+' "> <div class="form-group col-sm-12" id="day1_dynamicadd_1"> <div class="col-md-12"> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary Start Time</span></label> </div> <div style="width:30%" class="pull-left"> <select  id="from_hour_1" name="day'+tabID+'_from_hour[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="1">1 </option> <option value="2">2 </option> <option value="3">3 </option> <option value="4">4 </option> <option value="5">5 </option> <option value="6">6 </option> <option value="7">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select> </div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="from_min_1" name="day'+tabID+'_from_min[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select> </div> <div style="width:30%" class="pull-left"> <select id="from_sec_1" name="day'+tabID+'_from_sec[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select> </div> </div> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label> <span style="font-size:13px; color:#333;">Itinerary End Time</span></label> </div> <div style="width:30%" class="pull-left"> <select id="to_hour_1" name="day'+tabID+'_to_hour[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="1">1 </option> <option value="2">2 </option> <option value="3">3 </option> <option value="4">4 </option> <option value="5">5 </option> <option value="6">6 </option> <option value="7">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select> </div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="to_min_1" name="day'+tabID+'_to_min[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select> </div> <div style="width:30%" class="pull-left"> <select id="to_sec_1" name="day'+tabID+'_to_sec[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select> </div> </div> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Event Agenda</span></label> <input type="text" id="agenta_1" name="day'+tabID+'_agenda[]"  class="form-control"  /> </div> </div> <div class="col-md-12"> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Facilitator</span></label> <input type="text" id="facilitator_name_1" name="day'+tabID+'_facilitator_name[]"  class="form-control"  /> </div> <div class="col-md-8"> <label><span style="font-size:13px; color:#333;">Event Location Venue</span></label> <select id="location_1" name="day'+tabID+'_location[]" class="form-group venueselectpicker" style="width:100%; padding: 7px 10px; border-radius: 5px;"> </select> </div> </div> </div> </div> <div class="form-group col-md-12" > <a href="JavaScript:void(0);" class="add_address_dynamic" data-day="' + tabID + '" data-nxt_event_venue="2" > <i class="fa fa-plus-circle"></i> Add more event program time slot</a> </div> </div>'));
         
          tabID++;
      }

       i++;
      
        $(".add_address_dynamic").click(function()
        {      
            var nxtvenue_count = $(this).data("nxt_event_venue"); 
            var day = $(this).data("day"); 
            var nxtvenueHTML = generete_dynamic_venue(day, nxtvenue_count);
            
            $(this).parents("div[class*=' tab_']").find('[id^=day_]').append(nxtvenueHTML);            
            
            $('#day1_dynamicadd_'+nxtvenue_count+' .venueselectpicker').append(option_template);
              nxtvenue_count++;
            $(this).data('nxt_event_venue', nxtvenue_count); //update data nxtportion   
       });

     });
   
});


// Add more event program time slot
function generete_dynamic_venue(day, count){

  var day1  = ' <div class="form-group col-sm-12" id="day1_dynamicadd_'+count+'"> <div class="col-md-12"> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary Start Time</span></label></div> <div style="width:30%" class="pull-left"> <select  id="from_hour_'+count+'" name="day'+day+'_from_hour[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="0">1 </option> <option value="1">2 </option> <option value="2">3 </option> <option value="3">4 </option> <option value="4">5 </option> <option value="5">6 </option> <option value="6">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select></div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="from_min_'+count+'" name="day'+day+'_from_min[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select></div> <div style="width:30%" class="pull-left"> <select id="from_sec_'+count+'" name="day'+day+'_from_sec[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select></div> </div> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary End Time</span></label></div> <div style="width:30%" class="pull-left"> <select id="to_hour_'+count+'" name="day'+day+'_to_hour[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="0">1 </option> <option value="1">2 </option> <option value="2">3 </option> <option value="3">4 </option> <option value="4">5 </option> <option value="5">6 </option> <option value="6">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select></div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="to_min_'+count+'" name="day'+day+'_to_min[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select></div> <div style="width:30%" class="pull-left"> <select id="to_sec_'+count+'" name="day'+day+'_to_sec[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select></div> </div> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Event Agenda</span></label> <input type="text" id="agenta_1" name="day'+day+'_agenda[]"  class="form-control"  /> </div> </div> <div class="col-md-12"> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Facilitator</span></label> <input type="text" id="facilitator_name_'+count+'" name="day'+day+'_facilitator_name[]"  class="form-control"  /> </div> <div class="col-md-8"> <label><span style="font-size:13px; color:#333;">Event Location Venue</span></label> <select id="location_1" name="day'+day+'_location[]" class="form-group venueselectpicker" style="width:100%; padding: 7px 10px; border-radius: 5px;"> </select> </div> </div> </div>'; 

    return day1;
}
      
   
//image preview and delete step1

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});

//event highlight image preview and delete

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#img_files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove1\">Remove image</span>" +
            "</span>").insertAfter("#img_files");
          $(".remove1").click(function(){
            $(this).parent(".pip").remove();
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
  
//event highlight2 image preview and delete

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#img_files2").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove1\">Remove image</span>" +
            "</span>").insertAfter("#img_files2");
          $(".remove1").click(function(){
            $(this).parent(".pip").remove();
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
}); 


//event highlight2  show and hide

    $("#add_highlight").click(function(){
           $("#event_high").show();
    });

//event days dropdown button 

$(document).ready(function()
{
     $('#days').on('change',function() {
        if (this.value == 'day1')
        {           
            $('.day1').show();
            $('.day2').hide();
            $('.day3').hide();
            $('.day4').hide();
            $('.day5').hide();
            $('.day6').hide();
            $('.day7').hide();
        }
        else if (this.value == 'day2') {
            $('.day1').show();
            $('.day2').show();
            $('.day3').hide();
            $('.day4').hide();
            $('.day5').hide();
            $('.day6').hide();
            $('.day7').hide();

        }
        else if (this.value == 'day3') {
            $('.day1').show();
            $('.day2').show();
            $('.day3').show();
            $('.day4').hide();
            $('.day5').hide();
            $('.day6').hide();
            $('.day7').hide();
        }
         });
 });

// dynamic event FAQ here

function generete_dynamic_faq(count){
  var faq = ' <div class="row animated pulse" id="event_faq_'+count+'"> <div class="col-md-12" style="margin: 10px 0px;"> <input type="text" id="faq_ques_'+count+'" name="faq_ques[]" class="form-control" placeholder="Enter question"> </div> <div class="col-md-12" style="margin: 10px 0px;"> <input type="text" id="faq_ans_'+count+'" name="faq_ans[]" class="form-control" placeholder="Enter Answer"> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_faq btn btn-info btn-sm"> Remove</a> </div> </div>';

    return faq;
}



$(document).ready(function(){
        $("#faq_add").click(function()
          {       
            var nxtticket_count = $(this).data("nxt_event_faq"); 
            var nxtvenueHTML = generete_dynamic_faq(nxtticket_count);
            $("#dynamic_add_faq").append(nxtvenueHTML);        
              nxtticket_count++;
           $(this).data('nxt_event_faq', nxtticket_count); //update data nxtportion   
        });   
});

// remove div
$(document).on('click', '.remove_faq', function(e)
    {
         
          $(this).parents('[id^=event_faq_]').remove();
         
    });


 //create event form submit

// var base_url = '<?php echo base_url() ?>'; //form submited


//     $(document).on("submit", "#create_event", function(e){

//         e.preventDefault();

//          $(this).validate({ 
//                           rules: {                             
//                                     event_name:"required",                  
//                                   event_startdate: "required",
//                                   event_enddate: "required",
//                                   cover_img: "required",
//                                   event_description: "required",
//                                   event_title: "required",
//                                   wowtag_video: "required",
//                                   eventcontactname: "required",
//                                  },

//                           messages: {                           
//                                   event_name: {
//                                       required: "Please fill Event Name", 
//                                   }, 
//                                   event_startdate: {
//                                       required: "Required ", 
//                                   }, 
//                                   event_enddate: {
//                                       required: "Required", 
//                                   }, 
//                                   cover_img: {
//                                       required: "Choose cover image", 
//                                   }, 
//                                   event_description: {
//                                       required: "Please fill Description", 
//                                   }, 
//                                   event_title: {
//                                       required: "Please fill Description", 
//                                   }, 
//                                   wowtag_video: {
//                                       required: "Choose", 
//                                   },
//                                   eventcontactname: {
//                                       required: "required this field", 
//                                   },
                                                   
//                              },

//                            }); 

//     if($(this).valid())
//         {     
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
//                     beforeSend: function()
//                     {

//                       swal({
//                           title: 'Please Wait...',
//                           text: 'Submitting...',
//                           toast: true,
//                           target: '.swal',              
                         
//                           onOpen: () => {
//                             swal.showLoading()
//                          }
//                       }); 
          
//                     },
                    
//                     success: function(response)
//                     {
//                        if(response.status == 'success')
//                        {
//                        // alert("success");
//                         swal({
//                                                      title: "Success!",
//                                                      text: "Your Event Created Successfully...",
//                                                      type: "success",
//                                                      timer: 5000
//                                                      }).then(() => {                     
//                                          window.location.href = "<?php echo base_url('event/get_eventfeed'); ?>";
//                                       });;  
                       
//                         }
//                         else 
//                         {
                        
//                           swal("Sorry!", "somethink wrong try again !", "error");
//                          }          
//                     }

//            });
//     }
     

//  });


</script>

</body>
</html>
