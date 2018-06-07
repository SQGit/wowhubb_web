<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="This is social network html5 template available in themeforest......" />
<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
<meta name="robots" content="index, follow" />
<title>Wowhubb | Your One Stop Event Networking Platform</title>

<!-- Stylesheets
    ================================================= -->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/ionicons.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/intlTelInput.css')?>">

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">
#footer {
    background: #fff;
    position: relative;
    top:96px;
}
.iti-flag {background-image: url("<?php echo base_url ('assets/css/flags.png')?>");}

</style>
</head>
<body>

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
      <div id="map" class="map contact-map"><img src="<?php echo base_url ('assets/images/covers/6.jpg') ?>" width="100%"  alt=""/></div>
</div>
    <div id="page-contents">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 col-md-offset-2">
            <div class="contact-us" style=" padding: 20px 40px;">
            	<div class="row">
            		<div class="col-md-12 col-sm-12">
                  <h2 class="black" >Create Wowhubb Account <br><span style="color:#333; font-size: 15px">Your One Stop Events Networking Platform</span></h2><hr>
                  <form id="otp_form" action ="<?php echo base_url('Home/otp_verify'); ?>" method="post" class="contact-form">

                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio" id="group1_Phone" name="group1" value="pho_no" style="margin-top: 10px;" required><label>Mobile Number</label>

                        

                        <input type="text" class="frm-con group1 group1_Phone" id="phone"  pattern="^\+?\d{0,13}" name="pho_no" title="Enter phone Number" placeholder="Enter Phone Number" >
                      </label>
                      
                    </div>
                    
                    <div class="form-group gender">

                      <label class="radio-inline">
                        <input type="radio" name="group1" value="email" id="group1_EMail" style="margin-top: 10px;"><label>Email Address</label>
                        <input  type="text" name="group1_EMailText" class="frm-con group1 group1_EMail" title="Enter Email" placeholder="Enter Email address" >
                      </label>
                      
                    </div>             
                           
                  <button type ="submit" class="btn-primary" id="submit">Send OTP</button>
                 
                  </form>
                  <form action="<?php echo base_url('Home/wowtag'); ?>" method="post">
                      <input  type="text" name="wowtagid" class="frm-con group1 group1_EMail" title="Enter Email" placeholder="Enter Email address" >
                      <button type ="submit" class="btn-primary" id="submit">upload</button>
                  </form>
                </div>
            		
            	</div>
            </div>
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
<!--preloader-->
<div id="spinner-wrapper">
  <div class="spinner"></div>
</div>




<!-- Scripts
    ================================================= --> 
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.appear.min.js')?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.incremental-counter.js')?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.form-validator.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.form-validator.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/jquery-latest.min.js')?>"></script>

<script src="<?php echo base_url ('assets/js/intlTelInput.js')?>"></script>
<script src="<?php echo base_url ('assets/js/utils.js')?>"></script>

<script>
  $("#phone").intlTelInput(

);
    $(document).ready(function(){

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
 
</script>


</body>

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 06:24:19 GMT -->
</html>
