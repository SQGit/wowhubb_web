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
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>

<style type="text/css">
  
 
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
      font-family: 'Source Sans Pro', sans-serif;
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



/*hide input type number arrows*/
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}

.form-wizard img 
{ max-width: 100%!important;
  
 }
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
      <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
        <div class="container"> 
      
          <?php  include('/../includes/header.php'); ?>
        </div>
        <!-- /.container --> 
      </nav>
  </header>
<!--Header End-->
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
           
            
            <h3>Create Your Event</h3>
            <p>Please fill information to a create an event </p>
             <img src="<?php echo base_url('assets/images/prof-banner.jpg');?>" class="img-thumbnail"  alt="banner-image" style="height:152px!important;"/>
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
              
            
              
     </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
   <form id="proffesional_event" action="<?php echo base_url('eventhubb/update_professional_eventdetails'); ?>"  method="post" enctype="multipart/form-data">  

        <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
                </div>
                <!-- Progress Bar -->
                  <div class="row" style="margin-bottom:15px;">
                     <div class="col-md-12">
                       <div class="col-md-12" style="background:#f5f5f5; padding-top:15px; padding-bottom:15px;">
                         <div class="col-md-12">
                           <div class="col-md-11">
                             <div class="pull-left" style="width:4%;">
                               <img src="../assets/images/ques.png" alt="">
                             </div>
                             <div class="pull-left" style="width:96%;">
                               <p style="line-height:23px;">This includes following Events like Class, Convention, Seminar, Webinar, Online Meeting, Podcasting etc. In Event details, We provide Event Days, Event Category and also add it is a Free, Paid or Donation based.</p>
                             </div>
                           </div>
                           <div class="col-md-1">
                             <h4> <span>Step 1 - 1</span></h4>
                           </div>
                         </div>
                       </div>
                     </div>
                </div>
            
              <div class='col-sm-5'>
                    <div class='row'>
                      <input type='hidden' name="event_id"  class="form-control" value="<?php echo $event->_id; ?>" >
                       
                        <div class='form-group col-sm-12' >
                          <label>Event Category</label>
                          <input type='text' name="event_category" class="form-control" value="<?php echo $event->eventcategory; ?>" />
                        </div>
                        <div class='form-group col-sm-12' >
                          <label>Event Name</label>
                          <input type='text'  name="event_name" class="form-control " value="<?php echo $event->eventname; ?>"/>
                        </div>                        

                        <div class="form-group col-sm-12 " style="font-size: 15px;">
                              <label>Select Event Days</label>
                             <select name="event_totaldays" id="btn-add-tab" class="form-control " >
                              <option value="">Select Event Days</option>
                              <option value="1">1 Day Event</option>
                              <option value="2">2 Days Event</option>
                              <option value="3">3 Days Event</option>
                              <option value="4">4 Days Event</option>
                              <option value="5">5 Days Event</option>
                              <option value="6">6 Days Event</option>
                              <option value="7">7 Days Event</option>
                            </select>
                        </div>

                        <div id="date_hide" style="display: none;">

                          <div class='form-group col-sm-6' style="width:45%;" >
                            <label>Currrent Event Start Date</label>
                            <input type='text' id="event_startdate" name="event_startdate"  class="form-control" value="<?php 
                          $timestamp = strtotime($event->eventstartdate);
                                      echo date('M-d-Y', $timestamp); ?>"  />
                          </div>

                          <div  class='form-group col-sm-6' style="width:45%; " >
                            <label>Currrent Event Start Time</label>
                            <input type='text' id="event_startime" name="event_startime"  class="form-control" value="<?php 
                          $timestamp = strtotime($event->eventstartdate);
                                      echo date('g:i A', $timestamp); ?>"  />
                          </div>

                      
                          <div class='form-group col-sm-6' style="width:45%;" >
                            <label>Currrent Event End Date</label>
                            <input type='text' id="event_enddate" name="event_enddate"  class="form-control" value="<?php 
                          $timestamp = strtotime($event->eventenddate);
                                      echo date('M-d-Y', $timestamp); ?>"/>
                          </div>

                          <div class='form-group col-sm-6' style="width:45%;">
                            <label>Currrent Event End Time</label>
                            <input type='text' id="event_endtiming" name="event_endtiming"  class="form-control" value="<?php 
                          $timestamp = strtotime($event->eventenddate);
                                      echo date('g:i A', $timestamp); ?>"  />
                          </div>                        
                      </div>   

                    </div>

                <div class='row'>   
                    <div class='form-group col-sm-12' >
                            <label> Organisation Name </label>
                          <!-- company name show here from login page -->
                    
                        <select name="organisation_name"  class="form-control" >
                          <option value="">Select</option>
                        <?php                  
                            $business =  $this->session->userdata('business');
                        
                            foreach ($business as $business_name) { 
                                if(isset($business_name->companyname)) 
                                    {            
                        
                        ?>
                          
                            <option value="<?php  echo $business_name->companyname; ?>">
                              <?php  echo $business_name->companyname; ?>
                              
                            </option> 
                             <?php } }  ?>                           
                        </select>                    
                 
                      <!-- company name show end here  -->
                      </div>
                    </div>


<!-- here country rupee shows -->
  <script type="text/javascript">

      var con=new Array();
      var cur=new Array();
      con[0]='Afghanistan';cur[0]=' ؋';
      con[1]='Albania';cur[1]='L';
      con[2]='Algeria';cur[2]=' د.ج';
      con[3]='Andorra';cur[3]='€ ';
      con[4]='Angola';cur[4]='Kz ';
      con[5]='Antigua and Barbuda';cur[5]='$ ';
      con[6]='Argentina';cur[6]='$ ';
      con[7]='Armenia';cur[7]='֏ ';
      con[8]='Australia';cur[8]='$ ';
      con[9]='Austria';cur[9]='€ ';
      con[10]='Azerbaijan';cur[10]='₼ ';
      con[11]='Bahamas';cur[11]='$ ';
      con[12]='Bahrain';cur[12]='دينار ';
      con[13]='Bangladesh';cur[13]='৳ ';
      con[14]='Barbados';cur[14]='$ ';
      con[15]='Belarus';cur[15]='Br ';
      con[16]='Belgium';cur[16]='€ ';
      con[17]='Belize';cur[17]='$ ';
      con[18]='Benin';cur[18]='Fr ';
      con[19]='Bhutan';cur[19]='Nu.';
      con[20]='Bolivia';cur[20]='Bs.';
      con[21]='Bosnia and Herzegovina';cur[21]=' KM';
      con[22]='Botswana';cur[22]='P ';
      con[23]='Brazil';cur[23]='R$';
      con[24]='Brunei';cur[24]='$';
      con[25]='Bulgaria';cur[25]='лв';
      con[26]='Burkina Faso';cur[26]='Fr ';
      con[27]='Burundi';cur[27]='Fr ';
      con[28]='Cambodia';cur[28]=' ៛ ';
      con[29]='Cameroon';cur[29]='Fr ';
      con[30]='Canada';cur[30]='$ ';
      con[31]='Cape Verde';cur[31]='Cape Verdean escudo';
      con[32]='Central African Republic';cur[32]='Fr ';
      con[33]='Chad';cur[33]='Fr ';
      con[34]='Chile';cur[34]='$ ';
      con[35]='China';cur[35]='¥';
      con[36]='Colombia';cur[36]='$ ';
      con[37]='Comoros';cur[37]='Fr ';
      con[38]='Congo(DRC)';cur[38]='Fr ';
      con[39]='Congo(ROC)';cur[39]='CFA Franc';
      con[40]='Costa Rica';cur[40]='₡';
      con[41]='Cóte d\'Ivoire';cur[41]='Fr ';
      con[42]='Croatia';cur[42]='kn ';
      con[43]='Cuba';cur[43]='$ ';
      con[44]='Cyprus';cur[44]='€ ';
      con[45]='Czech Republic';cur[45]='Kč ';
      con[46]='Denmark';cur[46]='kr ';
      con[47]='Djibouti';cur[47]='Fr ';
      con[48]='Dominica';cur[48]='$ ';
      con[49]='Dominican Republic';cur[49]='$ ';
      con[50]='East Timor';cur[50]='$ ';
      con[51]='Ecuador';cur[51]='$ ';
      con[52]='Egypt';cur[52]=' £';
      con[53]='El Salvador';cur[53]='$ ';
      con[54]='Equatorial Guinea';cur[54]='Fr ';
      con[55]='Eritrea';cur[55]='Nfk ';
      con[56]='Estonia';cur[56]='€ ';
      con[57]='Ethiopia';cur[57]='Br ';
      con[58]='Fiji';cur[58]='$ ';
      con[59]='Finland';cur[59]='€ ';
      con[60]='France';cur[60]='€ ';
      con[61]='Gabon';cur[61]='Fr ';
      con[62]='Gambia';cur[62]='D ';
      con[63]='Georgia';cur[63]='₾ ';
      con[64]='Germany';cur[64]='€ ';
      con[65]='Ghana';cur[65]='₵ ';
      con[66]='Greece';cur[66]='€ ';
      con[67]='Grenada';cur[67]='$ ';
      con[68]='Guatemala';cur[68]='Q ';
      con[69]='Guinea';cur[69]='Fr ';
      con[70]='Guinea-Bissau';cur[70]='Fr ';
      con[71]='Guyana';cur[71]='$ ';
      con[72]='Haiti';cur[72]='G ';
      con[73]='Honduras';cur[73]='L ';
      con[74]='Hungary';cur[74]='Ft ';
      con[75]='Iceland';cur[75]='Kr ';
      con[76]='India';cur[76]='₹';
      con[77]='Indonesia';cur[77]='Rp ';
      con[78]='Iran';cur[78]='﷼';
      con[79]='Iraq';cur[79]='ع.د ';
      con[80]='Ireland';cur[80]='€ ';
      con[81]='Israel';cur[81]='₪ ';
      con[82]='Italy';cur[82]='€ ';
      con[83]='Jamaica';cur[83]='$ ';
      con[84]='Japan';cur[84]='¥ ';
      con[85]='Jordan';cur[85]=' د.ا ';
      con[86]='Kazakhstan';cur[86]='₸ ';
      con[87]='Kenya';cur[87]='Sh ';
      con[88]='Kiribati';cur[88]='$ ';
      con[89]='Korea, North';cur[89]='Won';
      con[90]='Korea, South';cur[90]='Won';
      con[91]='Kuwait';cur[91]=' د.ك';
      con[92]='Kyrgyzstan';cur[92]='c ';
      con[93]='Laos';cur[93]='₭ ';
      con[94]='Latvia';cur[94]='€ ';
      con[95]='Lebanon';cur[95]='ل.ل ';
      con[96]='Lesotho';cur[96]='L ';
      con[97]='Liberia';cur[97]='$ ';
      con[98]='Libya';cur[98]=' ل.د ';
      con[99]='Liechtenstein';cur[99]='Fr ';
      con[100]='Lithuania';cur[100]='€ ';
      con[101]='Luxembourg';cur[101]='€ ';
      con[102]='Macedonia ';cur[102]=' ден';
      con[103]='Madagascar';cur[103]='Ar ';
      con[104]='Malawi';cur[104]='MK ';
      con[105]='Malaysia';cur[105]='RM ';
      con[106]='Maldives';cur[106]='.ރ ';
      con[107]='Mali';cur[107]='Fr ';
      con[108]='Malta';cur[108]='€ ';
      con[109]='Mauritania';cur[109]='UM ';
      con[110]='Mauritius';cur[110]='₨ ';
      con[111]='Mexico';cur[111]='$ ';
      con[112]='Moldova';cur[112]='L ';
      con[113]='Monaco';cur[113]='€ ';
      con[114]='Mongolia';cur[114]='₮ ';
      con[115]='Montenegro';cur[115]='€ ';
      con[116]='Morocco';cur[116]='د.م. ';
      con[117]='Mozambique';cur[117]='MT ';
      con[118]='Myanmar';cur[118]='Ks';
      con[119]='Namibia';cur[119]='$ ';
      con[120]='Nauru';cur[120]='$ ';
      con[121]='Nepal';cur[121]='₨ ';
      con[122]='Netherlands';cur[122]='€ ';
      con[123]='New Zealand';cur[123]='$ ';
      con[124]='Nicaragua';cur[124]='C$';
      con[125]='Niger';cur[125]='Fr';
      con[126]='Nigeria';cur[126]='₦';
      con[127]='Norway';cur[127]='kr';
      con[128]='Oman';cur[128]='ر.ع.';
      con[129]='Pakistan';cur[129]='₨';
      con[130]='Palau';cur[130]='$';
      con[131]='Palestinian State (proposed)';cur[131]='₪';
      con[132]='Panama';cur[132]='$';
      con[133]='Papua New Guinea';cur[133]='K';
      con[134]='Paraguay';cur[134]='₲';
      con[135]='Peru';cur[135]='S/.';
      con[136]='Philippines';cur[136]=' ₱ ';
      con[137]='Poland';cur[137]=' zł ';
      con[138]='Portugal';cur[138]='€ ';
      con[139]='Qatar';cur[139]='ر.ق';
      con[140]='Romania';cur[140]=' lei';
      con[141]='Russia';cur[141]='₽ ';
      con[142]='Rwanda';cur[142]='Fr ';
      con[143]='St. Kitts and Nevis';cur[143]='$ ';
      con[144]='St. Lucia';cur[144]='$ ';
      con[145]='St. Vincent and the Grenadines';cur[145]='$';
      con[146]='Samoa';cur[146]='T';
      con[147]='San Marino';cur[147]='€ ';
      con[148]='Sáo Tomé and Príncipe';cur[148]='Db';
      con[149]='Saudi Arabia';cur[149]=' ر.س';
      con[150]='Senegal';cur[150]='Fr ';
      con[151]='Serbia';cur[151]=' дин. Or din.';
      con[152]='Seychelles';cur[152]='₨ ';
      con[153]='Sierra Leone';cur[153]='Le ';
      con[154]='Singapore';cur[154]='$ ';
      con[155]='Slovakia';cur[155]=' € ';
      con[156]='Slovenia';cur[156]=' € ';
      con[157]='Solomon Islands';cur[157]='$ ';
      con[158]='Somalia';cur[158]='Sh ';
      con[159]='South Africa';cur[159]='R ';
      con[160]='Spain';cur[160]='€ ';
      con[161]='Sri Lanka';cur[161]='Rs ';
      con[162]='Sudan';cur[162]=' ج.س.';
      con[163]='Suriname';cur[163]='$ ';
      con[164]='Swaziland';cur[164]='L';
      con[165]='Sweden';cur[165]='Kr';
      con[166]='Switzerland';cur[166]='Fr ';
      con[167]='Syria';cur[167]='£';
      con[168]='Taiwan';cur[168]=' $ ';
      con[169]='Tajikistan';cur[169]='ЅМ ';
      con[170]='Tanzania';cur[170]='Sh ';
      con[171]='Thailand';cur[171]='฿ ';
      con[172]='Togo';cur[172]='Fr ';
      con[173]='Tonga';cur[173]='T$';
      con[174]='Trinidad and Tobago';cur[174]='$';
      con[175]='Tunisia';cur[175]='ملّيم';
      con[176]='Turkey';cur[176]='₺';
      con[177]='Turkmenistan';cur[177]='m ';
      con[178]='Tuvalu';cur[178]='$ ';
      con[179]='Uganda';cur[179]='Sh ';
      con[180]='Ukraine';cur[180]='₴ ';
      con[181]='United Arab Emirates';cur[181]='فلس';
      con[182]='United Kingdom';cur[182]='£ ';
      con[183]='United States';cur[183]='$ ';
      con[184]='Uruguay';cur[184]='$';
      con[185]='Uzbekistan';cur[185]='soʻm';
      con[186]='Vanuatu';cur[186]='Vt ';
      con[187]='Vatican City (Holy See)';cur[187]='€ ';
      con[188]='Venezuela';cur[188]='Bs ';
      con[189]='Vietnam';cur[189]='₫ ';
      con[190]='Western Sahara (proposed state)';cur[190]='$ ';
      con[191]='Yemen';cur[191]=' ﷼ ';
      con[192]='Zambia';cur[192]='ZK ';
      con[193]='Zimbabwe';cur[193]='$ ';

      function list(index)
      {
        var con=document.getElementById('curr');
        if(index==-1)
        {
          con.value=""; return;
        }
        con.value=cur[index];
      }

      function list_dynamic(index)
      {
        var con=document.getElementById('ticket_price_1');
        if(index==-1)
        {
          con.value=""; return;
        }
        con.value=cur[index];
      }

  </script>
                      <div class='row'>    
                       <div class='form-group col-sm-12' style="margin-top: 15px;">

                        <label>This is</label>
                            <select name="ticket_type" id="ticket_type" class="form-control" style="background-color:#eff0f1;">
                              <option value="<?php echo $event->tickettype; ?>" ><?php echo $event->tickettype; ?></option>
                              <option value="Free Event">Free Event</option>
                              <option value="Paid Event">Paid Event Tickets</option>
                              <option value="Donation Base">Donation Based</option>
                            </select>
                          
                </div>
              </div>

                       <div class='row'>                   
                          <div class='form-group col-sm-6' style="display: none;" id="price_country">
                            <label>Select country</label>
                              <select name=country  onChange=list(this.value) class="con form-control">
                    <script type="text/javascript">
                    document.write("<option value=-1>Select Country</option>");
                    count=con.length;
                    for(i=0;i<count;i++)
                    document.write("<option value="+i+">"+con[i]+"</option>");
                    </script>
                  </select>
                          </div>

                          <div class='form-group col-sm-6' style="display: none;" id="ticket_price">
                            <label>Enter Ticket Price</label>
                            <input type='text'  name="ticket_price" id="curr"  class="form-control" value="<?php if(isset($event->ticketprice)) { echo $event->ticketprice; } ?>"/>
                          </div> 

                          <div class='form-group col-sm-12' style="display: none;" id="ticker_url_show">
                             <label>Ticket URL</label>
                              <input type='text' name="ticket_url" class="form-control" value="<?php if(isset($event->eventticketurl)) { echo $event->eventticketurl; } ?>">
                          </div>   

                      </div> 

                          
              </div>

                  <div class='col-sm-4'>
                      <div class='row'>
                            <div class='form-group col-sm-12'>
                              <label>Event Description</label>
                              <textarea type='text' id="description" name="event_description"  class="form-control required " style="min-height:150px;" placeholder="Describe What Your Event Is All About " >
                                <?php if(isset($event->eventdescription)) { echo $event->eventdescription; }  ?>
                              </textarea>
                            </div>
                            <div class='form-group col-sm-12'>
                                <div class='col-sm-12' style="background-color:#f9f9f9;">
                                  <label>Event Cover Photo <strong style="color: red; font-size: 20px;"> * </strong></label>
                                  <label>Please browse to upload cover photo</label>
                                  <div class="form-group" style="margin-bottom: 10px;"> 
                                    <div class="field" align="left">
                                        <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('files').click();" />
                                        <div id="img_preview1"></div>
                                        <input type="file" style="display:none;" name="cover_img" id="files" class="file" accept="image/*" title="cover image">  
                                    </div> 

                                    <div class="remove_img" style="position:relative;">
                                      <img src="<?php echo $event->coverpageurl; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>  
                                       <div style="position:absolute; right:203px; top:0px;"><a href="#" class="delete"><i class="glyphicon glyphicon-remove"></i></a></div>
                                    </div>  
                                  </div>                            
                                </div>
                            </div>

                            <div class='form-group col-sm-12' style="margin-top: 10px;">
                              <div class='col-sm-12' style="background-color:#f9f9f9;">
                                  <label>Organisation Logo</label>
                                  <label>Please browse to upload Organisation Logo</label>
                                  <div class="form-group" style="margin-bottom: 10px;"> 
                                    <div class="field" align="left">
                                      <input type="button" class="btn btn-primary"  value="Browse.." onclick="document.getElementById('logo').click();" />
                                      <input type="file" style="display:none;" name="logo_img" id="logo" class="file" accept="image/*" title="cover image">  
                                    </div> 
                                  </div>  
                                  <div class="remove_logoimg" style="position:relative;">
                                      <img src="<?php echo $event->organisationlogourl; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>  
                                       <div style="position:absolute; right:203px; top:0px;"><a href="#" class="delete_logo"><i class="glyphicon glyphicon-remove"></i></a></div>
                                  </div>                           
                              </div>
                            </div>
                      </div>
                  </div>
                  

                
                <div class='col-sm-12'>
                  <div class="form-wizard-buttons">                   
                    <button type="submit" class="btn btn-next">Update</button>
                  </div>
                </div>
      </fieldset>

    </form>
 
              <!-- Form Step 1 --> 
             
        
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
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>   
 

<script>


 // event start time picker
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
                format:'g:i A',
                formatTime: 'g:i A',
                mask:'29:59 99',  
                step: 5,   
                ampm: true 
             });

  //event start and end date 

  $('#event_startdate').datetimepicker({
  timepicker:false,
  minDate:0,
  format:'M-d-Y',
   });

  $('#event_enddate').datetimepicker({
  timepicker:false,
  minDate:0,
  format:'M-d-Y',
   });

// hide and show date depend on select days  step1
$(document).ready(function(){
    $("#btn-add-tab").change(function () {    
               
            $("#date_hide").show();               
    });

}); 

//ticket select option  show and hide
$(document).ready(function(){
    $("#ticket_type").change(function () {
        if ($(this).val() == "Free Event" || $(this).val() == "select") 
         {
                  $("#ticket_price").hide();
                  $("#ticker_url_show").hide();
                  $("#price_country").hide();
               }
                else
               {
                  $("#ticket_price").show();
                  $("#ticker_url_show").show();
                  $("#price_country").show();
               }
    });

}); 

//image preview and delete step1 cover image

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      
        var f = files[0]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;

                  
          $("#img_preview1").html("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#img_files");

          $(".remove").click(function(){
            $(this).parent(".pip").remove();
            $('#files').val("");
          });          
                   
        });
        fileReader.readAsDataURL(f);
      
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});

//organisation logo preview and delete step1
 
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#logo").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      
        var f = files[0]
        var fileReader = new FileReader();

        fileReader.onload = (function(e) {

            var file = e.target;

            $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#logo");

            $(".remove").click(function(){

            $(this).parent(".pip").remove();
            $('#logo').val("");

          });          
                   
        });

        fileReader.readAsDataURL(f);
     
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
}); 


//delete cover image from db shows
$(".delete").click(function(){
    $(".remove_img").remove();
});

//delete cover image from db shows
$(".delete_logo").click(function(){
    $(".remove_logoimg").remove();
});

//create event form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#proffesional_event", function(e){

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
                    beforeSend: function()
                    {

                      swal({
                          title: 'Please Wait...',
                          text: 'Submitting...',
                          toast: true,
                          target: '.swal',              
                         
                          onOpen: () => {
                            swal.showLoading()
                         }
                      }); 
          
                    },
                    
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {
                       
                        swal({
                                                     title: "Success!",
                                                     text: "Your Event Created Successfully...",
                                                     type: "success",
                                                     timer: 3000
                                                     }).then(() => {                     
                                         window.location.href = "<?php echo base_url('eventhubb/get_future_eventhubb'); ?>";
                                      });;  
                       
                        }
                        else 
                        {
                        
                          swal("Sorry!", "somethink wrong try again !", "error");
                         }          
                    }

           });
    
     

 });

 
</script>

</body>
</html>
