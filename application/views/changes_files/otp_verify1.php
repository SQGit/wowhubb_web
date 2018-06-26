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
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png')?>"/>
<style type="text/css">
#footer {
    background: #fff;
    position: relative;
    top: 250px;
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
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; font-size:25px;">
          Join Wowhubb Network <br> <span style="font-size:13px; background:#e91e63; padding:5px 10px; border-radius:5px;">Enjoy Your Event Hosting Experience</span>
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
                  <h2 class="black" >Wowhubb OTP</h2>
                  <span style="color:#333; font-size: 15px">Please type the OTP (One time Password) </span></h2><hr>
                  
                  <form id = "login_form" action ="<?php echo base_url('Home/otp_validation'); ?>" method="post" class="contact-form">
                   
                    <div class="form-group" >
                      <i class="icon ion-android-call"></i>
                      <input type="hidden" name="password" value="<?php echo $this->session->userdata('password'); ?>">
                      <input type="text" name="email"  value="<?php echo $this->session->userdata('email'); ?>"  id="contact-email" class="form-control" style="padding-left: 30px;">
                    </div>

                    <div class="form-group">
                      <i class="icon ion-android-create"></i>
                      <input id="contact-phone" type="password" name="otp" class="form-control" placeholder="Enter your OTP *" required="required" data-error="Phone is required." style="padding-left: 30px;">
                    </div>
                  
                      <button type="submit" class="btn-primary" style="margin-left: 250px;"> Submit </button>
                
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
<script src= "<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.appear.min.js')?>" ></script> 
<script src="<?php echo base_url ('assets/js/jquery.incremental-counter.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js')?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
<script>

var base_url = '<?php echo base_url() ?>';

$(document).ready(function(){

$(document).on("submit", "#login_form", function(e){
     e.preventDefault();
    var url = $(this).attr('action');
    var formdata = new FormData(this);
 //alert(url);
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
                    //alert('success');
                    window.location.href = "<?php echo base_url('Home/firsttime_interest') ?>";
                   
                   }else 
                   {
                    
                    swal(
                          'Sorry',
                          'Otp incorrect please try again!',
                          'error'
                        )
                   }
          

                }

            });


});

});


</script>


</body>

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 06:24:19 GMT -->
</html>
