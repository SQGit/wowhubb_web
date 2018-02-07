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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/theme-styles.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css')?>" />

<!--Google Font-->

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png')?>"/>
<style type="text/css">

    label.error {
    font-family: 'Roboto', sans-serif;
   color:red; 
}
#footer {
    background: #fff;
    position: relative;
    top: 10px;
}
.contact-us form.contact-form .form-group input.form-control {
    padding-left: 30px;
    border-radius: 0px;
     border-top: none;
    border-left: none;
    border-right: none;
   
    }
    .form-control:focus {
    border-color: none;
    box-shadow:none;
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
      <div id="map" class="map contact-map1"></div>
</div>
    <div id="page-contents">
      <div class="container">
        <div class="row">             

          <div class="col-md-6 col-md-offset-3" >
            <div class="contact-us" style=" padding: 20px 40px;">
              <div class="row">
                <div class="col-md-12 col-sm-12">
                  <h2 class="black" >Forgot Password </h2>
                  <span style="color:#333; font-size: 15px">Please type the Email or Phone Number </span></h2><hr>
            <form id = "forget_newpass" action ="<?php echo base_url('Home/forget_new_pass'); ?>" method="post" class="contact-form">
                   
                    <div class="form-group" >                                   
                      <input type="text" name="email_phone"  value="<?php echo $this->session->userdata('email_phone'); ?>"  id="contact-email" class="form-control" style="padding-left: 30px;" readonly >
                    </div>

                    <div class="form-group">                    
                      <input  type="password" name="otp" class="form-control" placeholder="otp"  data-error="Phone is required." style="padding-left: 30px;">
                      
                    </div>

                     <div class="form-group">                    
                        <input  type="password" name="new_pass" class="form-control" placeholder="new password"  data-error="Phone is required." style="padding-left: 30px;">                      
                    </div>
                  
                      <button type="submit" class="btn-primary" style="margin-left: 200px;"> Submit </button>
                
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


<!-- Scripts
    ================================================= --> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src= "<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.appear.min.js')?>" ></script>
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js')?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 

<script>
   
   //submit forget password form using jquery

var base_url = '<?php echo base_url() ?>';



$(document).on("submit", "#forget_newpass", function(e){
     e.preventDefault();

      $(this).validate({ 
                          rules: {                             
                                               
                                    otp :"required",
                                    new_pass:
                                    {
                                      required : true,
                                      minlength: 5
                                     }, 
                                                                      
                                },

                          messages: {

                                      otp: {
                                              required: "Please Enter your OTP", 
                                           }, 
                                 
                                      new_pass: {
                                      required: "Please Provide a New Password",
                                      minlength: "Your Password must be at least 5 characters long"
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
                                          swal({
                                                     title: "Success!",
                                                     text: "Your password changed.",
                                                     type: "success",
                                                     timer: 3000
                                                     }).then(() => {                
                                                   window.location.href = base_url + 'home/login';              
                                               });;                    
                                  }
                              else 
                                  {                    
                                          swal(
                                                  'Sorry!',
                                                  response.message, //refer : https://www.sitepoint.com/community/t/return-php-error-using-sweet-alert/265444
                                                  'error'
                                              ); 
                                  }       

                    }
                  });
        }
});


</script>


</body>

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 06:24:19 GMT -->
</html>
