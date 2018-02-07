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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/ionicons.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/theme-styles.css')?>" />
<!-- country code with flag -->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/intlTelInput.css')?>">
<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet"><!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">
#footer {
    background: #fff;
    position: relative;
    top:-33px;
}
.iti-flag {background-image: url("<?php echo base_url ('assets/css/flags.png')?>");}
.flg
{
background: #fff;
  color: #333333; 
  box-shadow: none; border: 1px solid #e91e63;
  padding-left: 15px;
  outline: none;
  border-top: none;
    border-left: none;
    border-right: none;
}
.intl-tel-input {
    position: relative;
    width: 50%;
    display: inline-block;
}

#page-contents .contact-us .frm-con {
    background: #fff;
    color: #333333;    
    box-shadow: none;
    border: 1px solid #e91e63;
    padding-left: 15px;
    outline: none;
    border-top: none;
    border-left: none;
    border-right: none;
    border-radius:0px;
    width: 320px;
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
      <div class="navbar-header">
        
        <a class="navbar-brand" href="#"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu" style="margin-top: 10px;">
          <a style="text-decoration: none;" href="<?php echo base_url('Home/login'); ?>">
           <span style="font-size:13px; background:#e91e63; color:#fff;  padding:5px 10px; border-radius:5px;">Log In to Existing Account</span>
         </a>
        </ul>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling --> 
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</header>
 <div class="google-maps">
      <div id="map" class="map contact-map1"></div>
</div>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">
            <div class="col-md-6" style="margin-top:-130px;" >
        <div class="col-md-12" style="margin-bottom:25px;">
          <div class="pull-left"><i class="fa fa-3x fa-calendar" style="color:#fff"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:20px; margin:0 15px; line-height:30px; font-weight: 300;">Your One Stop Events
              Networking <br>Platform</h1>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom:25px;">
          <div class="pull-left"><i class="fa fa-3x fa-share-square" style="color:#fff"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:20px; margin:0 15px;  line-height:30px; font-weight: 300;">Create, Share & Advertise 
              Your 
              Personal /<br> Professional Events</h1>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom:25px;">
          <div class="pull-left"><i class="fa fa-3x fa-search" style="color:#fff"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:20px; margin:0 15px;  line-height:30px; font-weight: 300;">Search & Hire Your Professional <br>Local Events
               Services Providers Near you</h1>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom:25px;">
          <div class="pull-left"><i class="fa fa-3x fa-tags" style="color:#fff"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:20px; margin:0 15px;  line-height:30px; font-weight: 300;">Search & Book Your Next Event Venue</h1>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom:25px;">
        <p style="color:#fff; font-size: 15px;">Create, host and share your personal, professional and business events. We are best event networking platform anytime and anywhere.</p></div> 
        
        <div class="col-md-12" style="margin-bottom:25px;">
        <p style="color:#fff; font-size: 15px;"><a href="#" style="text-decoration:none; font-size:15px; color:#ead76f;"><i class="fa fa-caret-right"></i> Create Your Events - Personal, Professional &amp; Business Events</a></p></div> 
      </div>
    			<div class="col-md-6">
            <div class="contact-us" style=" padding:20px 40px 20px 40px;">
            	<div class="row">
            		<div class="col-md-12 col-sm-12">
                  <h2 class="black" >Create Wowhubb Account <br><span style="color:#333; font-size: 15px">Your One Stop Events Networking Platform</span></h2>
                  <hr style="margin-bottom:0;">
                  <p>To ensure a safer and more exiting community, all members must be verified to join. Please enter phone number including country code to receive a verification code via SMS/ Email. </p>

                 <form id="otp_form" action ="<?php echo base_url('Home/otp_verify'); ?>" method="post" class="contact-form">

                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" id="group1_Phone" name="group1" value="pho_no" style="margin-top: 10px;" required>                        
                        <label style="width: 100px;">Mobile Number</label>
                        <div id="phono" style="display: none;">
                         <input type="text"  id= "phone" class="flg group1 group1_Phone" style="width:360px;" pattern="^\+?\d{0,13}" name="pho_no" value="<?php echo $this->session->userdata('phone'); ?>" title="Enter phone Number" readonly>
                      </div>
                      </label>                   
                    </div>    

                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" name="group1" value="email" id="group1_EMail" style="margin-top: 10px;"><label style="width: 100px;">Email Address</label>
                        <div id="email" style="display: none;" >
                        <input type="email" name="group1_EMailText" class="frm-con group1 group1_EMail" value="<?php echo $this->session->userdata('email'); ?>" readonly>
                      </div>
                      </label>                      
                    </div>    

                   <div class="row text-center">        
                      <button type ="submit" class="btn-primary" id="submit">Get your Verification Code</button>
                 </div>

                  </form>
                  
                </div>            		
            	</div>
            </div>            
            <div class="col-md-12 text-center" style="background-color:RGBA(0, 0, 0, .6); margin-top:15px; border-radius:4px; padding-top:10px; padding-bottom:10px;"><a href="#" style="text-decoration:none; font-size:15px; color:#fff;">How it Works?</div>
              </div>
    		</div>
    	</div>
    </div>
<!--Header End--> 

<!-- Landing Page Contents
    ================================================= -->

<footer id="footer">
  <div class="container">
    <?php  include('includes/footer.php'); ?>
    </div>
</footer>
<!--preloader
<div id="spinner-wrapper">
  <div class="spinner"></div>
</div>-->

<!-- Scripts
    ================================================= --> 
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.appear.min.js')?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.incremental-counter.js')?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.form-validator.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.form-validator.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
<!-- country code 
http://www.jqueryscript.net/form/jQuery-International-Telephone-Input-With-Flags-Dial-Codes.html-->
<script src="<?php echo base_url ('assets/js/intlTelInput.js')?>"></script>
<script src="<?php echo base_url ('assets/js/utils.js')?>"></script>

<script>
   $("#phone").intlTelInput(); //country code
   
   $(document).ready(function(){    //radio button validation

       $("input[type='radio']").change(function() {
      $('.'+$(this).attr('name')).each(function(index) {
        $(this).removeAttr('required');
      });
       if($(this).is(':checked')) {
        $('.'+$(this).attr('id')).each(function(index) {
          $(this).prop('required',true);
        });
      }
    });
    $('#submit').click(function() {
      $(this).validate();
    });
  });
 
       $("input[type='radio']").change(function(){

        if($(this).val()=="pho_no")
        {
           $("#phono").show();
           $("#email").hide();
        }
         else if($(this).val()=="email")
        {
           $("#email").show();
           $("#phono").hide();
        }
    });

</script>

</body>

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 06:24:19 GMT -->
</html>
