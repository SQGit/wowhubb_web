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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.datetimepicker.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/intlTelInput.css')?>">
<link rel="stylesheet" href="<?php echo base_url ('assets/css/theme-styles.css')?>" />
 
<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url("assets/images/fav.png") ?>"/>
<style>

label.error {
    font-family: 'Roboto', sans-serif;
   color:red; 
}
.iti-flag {background-image: url("<?php echo base_url ('assets/css/flags.png')?>");}

.frm-con{
  background: #fff;
  border: 1px solid #f1f2f2;
  box-shadow: none;
  border-radius: 4px;
  color: #939598;
  width: 100% !important;
}
#registration_form .form-control, #Login_form .form-control {
    background: #fff;
    color: #333333;
    /* border-radius: 30px; */
    box-shadow: none;
    width: 100%;
    border: 1px solid #888;
    padding-left: 15px;
     border-top: none;
    border-left: none;
    border-right: none;
    border-radius:0px;
}
.intl-tel-input.allow-dropdown input, .intl-tel-input.allow-dropdown input[type=text], .intl-tel-input.allow-dropdown input[type=tel], .intl-tel-input.separate-dial-code input, .intl-tel-input.separate-dial-code input[type=text], .intl-tel-input.separate-dial-code input[type=tel] {
    padding-right: 6px;
    padding-left: 52px;
    margin-left: 0;
    width: 300px;
     border-top: none;
    border-left: none;
    border-right: none;
     border-radius:0px;
    border-bottom:1px solid #888;
  }
  #lp-register .wrapper {
    padding-top: 91px;
    padding-bottom: 0px;
}
 /*bootrap class*/
.alert { 
    padding: 5px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.close {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
    margin-right: 20px;
}

.tooltip-inner {
  max-width: 350px;
  width: 350px;
}
.landing-page {
    position: relative!important;
    min-height: 40vh!important;
}
.copyright{
	
  background: #231F20!important;
  text-align: center!important;
  color: #fff!important;
  padding: 12px 0 0px!important;  
   position:relative!important; 
  bottom: 0px!important;
  width: 100%!important;

}
@media (min-width: 768px)
{
.modal-dialog {
    width: 600px;
    margin: 200px auto!important;
}

}
.modal-backdrop.in {
	filter: alpha(opacity=50);
	opacity: .7!important;
}

.footer-links li
{
	list-style-type:none; 
	display:inline-block;
	margin:5px 15px;
	float:left;
	color:#FDFDFD!important;
}

.footer-links li a
{
	
	color:#FDFDFD!important;
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
           <span style="font-size:13px; background:#e91e63; color:#fff;  padding:5px 10px; border-radius:5px;">Log In Here</span>
         </a>
        </ul>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling --> 
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</header>
<!--Header End--> 

<!-- Landing Page Contents
    ================================================= -->
<div id="lp-register" style="background-image: none;">
  <div class="container wrapper">
    <div class="row">
       <div class="col-md-6" style="margin-top:20px;" >
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
            <h1 class="text-white" style="font-size:20px; margin:0 15px;  line-height:30px; font-weight: 300;">Create, Share & Advertise Your Personal, <br> Social Corporate and  Professional Events</h1>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom:25px;">
          <div class="pull-left"><i class="fa fa-3x fa-search" style="color:#fff"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:20px; margin:0 15px;  line-height:30px; font-weight: 300;">Search & Hire Your Professional <br>Local Events
               Services Providers Near you</h1>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom:10px;">
          <div class="pull-left"><i class="fa fa-3x fa-tags" style="color:#fff"></i> </div>
          <div class="pull-left">
            <h1 class="text-white" style="font-size:20px; margin:0 15px;  line-height:30px; font-weight: 300;">Search & Book Your Next Event Venue</h1>
          </div>
        </div>
        <div class="col-md-12" style="margin-bottom:10px;">
          <p style="color:#fff; font-size: 15px;">Create, Host and Share your Personal, Professional, Business Leads and Sales events. We are Best Event Networking Platform Anytime and Anywhere. 
           <!--span style="color: #FFE500; font-size: 17px; font-weight: bold;"><i class="fa fa-play"></i> Create Your Events - Personal, Professional & Business Events.
           </span-->
            <div class="col-sm-12  text-left" style="margin-bottom:10px;">
        <p>
        <a href="#modal-1" data-toggle="modal"  style="color:#FFE500; font-size:17px;"> <!-- this is register model popup -->       
        <div class="pull-left" style="width:5%;"><img src="<?php echo base_url('assets/images/cb.png'); ?>"></div>
        <div class="pull-left" style="width:95%; margin-top:4px;">
              <span style="color:#ff0; font-size:17px;"> Create an Event Business Hosting Page </span>
        </div>
        </a>
        </p>
        </div>
         </p>
       </div> 
        <div class="col-md-12" style="margin-bottom:10px;">
          <div class="col-md-4">
            <a href="<?php echo base_url('service/service_provider_landing'); ?>" ><div class="col-md-12 text-center" style="border:1px solid #fff; border-radius:5px; padding-bottom:15px;">
            <div class="col-md-12" style="margin-top:15px; text-align:center;"><img src="<?php echo base_url('assets/images/home-1.png'); ?>" alt="img"></div>
              <div class="col-md-12" style="margin-top:15px; color:#fff; line-height:20px;">Click To Find Your Next Event Services Professionals</div>
            </div></a>
          </div>
          <div class="col-md-4">
          <div class="col-md-12" style="border:1px solid #fff; border-radius:5px; padding-bottom:15px;">
            <a href="<?php echo base_url('service/eventvenue_landing_without'); ?>"><div class="col-md-12" style="margin-top:15px; text-align:center;"><img src="<?php echo base_url('assets/images/home-2.png'); ?>" alt="img"></div>
              <div class="col-md-12 text-center" style="margin-top:15px; color:#fff; line-height:20px;">Click To Find And Book Your Next Event Venue</div>
            </div></a>
          </div>
          <div class="col-md-4">
          <a href="<?php echo base_url('nearbyevents/nearby_event_without'); ?>"><div class="col-md-12 text-center" style="border:1px solid #fff; border-radius:5px; padding-bottom:15px;">
            <div class="col-md-12" style="margin-top:15px; text-align:center;"><img src="<?php echo base_url('assets/images/home-3.png'); ?>" alt="img"></div>
              <div class="col-md-12" style="margin-top:15px; color:#fff; line-height:20px;">Click To Discover Event Happening Near You</div>
            </div></a>
          </div>
        </div> 
       
      </div>
      <div class="col-sm-6">
        <div class="reg-form-container"> 
          
          <!-- Register/Login Tabs-->
          
          
          <!--Registration Form Contents-->
          <div class="tab-content">
            <div class="tab-pane active" id="register">

              <h2 style="text-align: center;">Create An Account</h2>

              <h4 class="text-muted" style="font-weight: bold;text-align: center;">Join !Wowhubb Exciting Network </h4><p style="text-align: center;"> and Enjoy Your Next Event Hosting Experience</p>
              
              <!--Register Form-->
              <form id="registration_form" action ="<?php echo base_url('Home/reg_load'); ?>" method="post">

                <div id="success"></div>
               
                <div class="row">                 
                  <div class="form-group col-xs-6">                   
                    <input type="text" class="form-control input-group-lg" name="firstname" id="firstname" placeholder="First Name" autocomplete="off" />
                  </div>
                  <div class="form-group col-xs-6">                   
                    <input id="lastname" class="form-control input-group-lg" type="text" name="lastname"  placeholder="Last name"  autocomplete="off"/>
                  </div>
                </div>

                <div class="row" style="margin-bottom: 5px;">
                    <div class="form-group col-xs-12">
                       <label for="email" class="sr-only">Email</label>
                       <input id="email" class="form-control input-group-lg" type="email" name="Email"  placeholder="Enter Your Email" autocomplete="off" />
                    </div>
                </div>

                <div class="row">               
                  <div class="form-group col-xs-12">
                    <label for="phone" class="sr-only">Phone Number</label>
                    <input id="phone" pattern="^\+?\d{0,13}" class="frm-con input-group-lg" type="text" name="pho_no" style="font-size: 14px;" title="Enter phone number" placeholder="Your Phone Number" autocomplete="off" />      
                  </div>
                </div>

                <div class="row">

                    <div class="form-group col-xs-3" style="margin-top: 10px;">                   
                        <label>!Wowtag ID</label>                                 
                    </div>

                    <div class="form-group col-xs-8">                   
                      <input id="wowtag" class="form-control input-group-lg" name="wowtagid" placeholder="Create Your Personalized ID" autocomplete="off" />                                 
                    </div>

                    <div class="form-group col-xs-1" style="margin-top: 15px;">   
                          <a href="#" data-toggle="tooltip" title="Wowtag is a unique identifier(Name) for your event that you can use to share, invite and advertise your event on billboards, online and on TV advertisements."><i class="fa  fa-question-circle" ></i></a>  
                    </div>                      
                </div>

                  <div id="result"></div>

                
                <div class="row">
                  <div class="form-group col-xs-12">
                      <label for="phone" class="sr-only">Password</label>
                      <input type="password" id="password" class="form-control input-group-lg"  name="password" placeholder="New Password" autocomplete="off"/>                  
                  </div>
                </div>
                 

                <div class="row">
                  <p class="birth"><label>Date of Birth</label></p>
                  <div class="form-group col-sm-3 col-xs-6">
                    <label for="month" class="sr-only"></label>
                    <select name="day" class="form-control" id="day">
                      <option value="" disabled selected>Day</option>
                      <option value="01">01</option>
                      <option value="02">02</option>
                      <option value="03">03</option>
                      <option value="04">04</option>
                      <option value="05">05</option>
                      <option value="06">06</option>
                      <option value="07">07</option>
                      <option value="08">08</option>
                      <option value="09">09</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-3 col-xs-6">
                    <label for="month" class="sr-only"></label>
                    <select name="month" class="form-control" id="month" >
                      <option value="" disabled selected>Month</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                  </div>
                  <div class="form-group col-sm-6 col-xs-12">
                    <label for="year" class="sr-only"></label>
                    <select name="year" class="form-control" id="year" >
                      <option value="" disabled selected>Year</option>
                      <option>2018</option>
                      <option>2017</option>
                      <option>2016</option>
                      <option>2015</option>
                      <option>2014</option>
                      <option>2013</option>
                      <option>2012</option>
                      <option>2011</option>
                      <option>2010</option>
                      <option>2009</option>
                      <option>2008</option>
                      <option>2007</option>
                      <option>2006</option>
                      <option>2005</option>
                      <option>2004</option>
                      <option>2003</option>
                      <option>2002</option>
                      <option>2001</option>
                      <option>2000</option>
                      <option>1999</option>
                      <option>1998</option>
                      <option>1997</option>
                      <option>1996</option>
                      <option>1995</option>
                      <option>1994</option>
                      <option>1993</option>
                      <option>1992</option>
                      <option>1991</option>
                      <option>1990</option>
                      <option>1989</option>
                      <option>1988</option>
                      <option>1987</option>
                      <option>1986</option>
                      <option>1985</option>
                      <option>1984</option>
                      <option>1983</option>
                      <option>1982</option>
                      <option>1981</option>
                      <option>1980</option>
                      <option>1979</option>
                      <option>1978</option>
                      <option>1977</option>
                      <option>1976</option>
                      <option>1975</option>
                      <option>1974</option>
                      <option>1973</option>
                      <option>1972</option>
                      <option>1971</option>
                      <option>1970</option>
                      <option>1969</option>
                      <option>1968</option>
                      <option>1967</option>
                      <option>1966</option>
                      <option>1965</option>
                      <option>1964</option>
                      <option>1963</option>
                      <option>1962</option>
                      <option>1961</option>
                      <option>1960</option>
                      <option>1959</option>
                      <option>1958</option>
                      <option>1957</option>
                      <option>1956</option>
                      <option>1955</option>
                      <option>1954</option>
                      <option>1953</option>
                      <option>1952</option>
                      <option>1951</option>
                      <option>1950</option>
                      <option>1949</option>
                      <option>1948</option>
                      <option>1947</option>
                      <option>1946</option>
                      <option>1945</option>
                      <option>1944</option>
                      <option>1943</option>
                      <option>1943</option>
                      <option>1942</option>
                      <option>1941</option>
                      <option>1940</option>
                      <option>1939</option>
                      <option>1938</option>
                      <option>1937</option>
                      <option>1936</option>
                      <option>1935</option>
                      <option>1934</option>
                      <option>1933</option>
                      <option>1932</option>
                      <option>1931</option>
                      <option>1930</option>
                      <option>1929</option>
                      <option>1928</option>
                      <option>1927</option>
                      <option>1926</option>
                      <option>1925</option>
                      <option>1924</option>
                      <option>1923</option>
                      <option>1922</option> 
                      <option>1921</option>
                      <option>1920</option>
                      <option>1919</option>
                      <option>1918</option>
                      <option>1917</option>
                      <option>1916</option>
                      <option>1915</option>
                      <option>1914</option>
                      <option>1913</option>
                      <option>1912</option>                               
                      <option>1911</option>
                      <option>1910</option>
                     
                    </select>
                  </div>
                </div>

                <label>Gender</label>
                <div class="form-group gender col-xs-12" style="font-size: 14px;">
               
                     <p class='container_test'>
                    <label for="gender" class="radio-inline">
                       <input type="radio" id="gender"  name="gender"  class="" value="male" style="width:18px; height:18px;" >&nbsp;Male
                    </label>                      
                    <label for="gender" class="radio-inline">
                      <input type="radio" id=""  name="gender"  class="" value="female" style="width:18px; height:18px;" >&nbsp;Female                      
                    </label>   
                    </p>                 
                </div>
               <div id="gender_val"> </div>				
              
                <p > By clicking Join Now, you agree to our <a href="#" style="color:blue;font-weight: bold;">Terms, Data Policy</a>,  and <a href="#" style="color:blue;font-weight: bold;">Cookies  Policy, </a> You may receive SMS Notification from us  and can opt out any time.</p>
              
              
              
              <div class="row text-center">
                  <button type="submit"  class="btn btn-primary" style="padding:7px 25px!important;">Join Now</button>
             </div>
            </div>
            </form>
            
            <!--Registration Form Contents Ends--> 
          </div>
        </div>
        <div class="row">
      <div class="col-sm-12 text-center" > 
        
        <!--Social Icons-->
        <p><a style="color:#ddb424;" href="<?php echo base_url('Home/login'); ?>">Already have an account <strong style="font-weight: bold;">Sign in</strong> </a></p>
        
      </div>
     
    </div>
      </div>
    </div>
    
  </div>
</div>

<footer id="footer"  style="background:transparent!important;">
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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script>  
<script src="<?php echo base_url ('assets/js/additional-methods.js') ?>"></script>
<script src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
<script src="<?php echo base_url ('assets/js/intlTelInput.js')?>"></script>
<script src="<?php echo base_url ('assets/js/utils.js')?>"></script>
 
  <script>

    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
    });    

    $("#phone").intlTelInput(); //country code

     //datepicker id and date format
       $("#datepicker").datetimepicker({
        timepicker:false,
        format:"m-d-Y",
       
        });

     //registration form validation 
      
         $(document).on("submit", "#registration_form", function(e){

            e.preventDefault();
                 $(this).validate({ 
                          rules: {                             
                                    firstname:"required",                    
                                    lastname:"required",
                                    wowtagid:"required",
                                    pho_no :"required",
                                    password:
                                    {
                                      required : true,
                                      minlength: 5
                                     }, 
                                    Email:
                                    {
                                      required : true,
                                      email: true
                                     }, 
                                    day:"required",
                                    month:"required",
                                    year:"required",
                                    gender :"required",
                                  
                                },
                          messages: {                           
                                  firstname: {
                                      required: "Please Enter your Firstname", 
                                  }, 
                                  lastname: {
                                      required: "Please Enter your Lastname",
                                  }, 
                                  wowtagid: {
                                      required: "Please Enter your Wowtag ID",
                                      minlength: "Your Password must be at least 5 characters long"
                                  }, 
                                   password: {
                                      required: "Please Provide a Password",
                                      minlength: "Your Password must be at least 5 characters long"
                                  }, 
                                   Email: {
                                      required: "Please Enter a Valid Email Address",
                                  }, 
                                  day: {
                                      required: "Please Choose day",
                                  },
                                  month: {
                                      required: "Please Choose month",
                                  },
                                  year: {
                                      required: "Please Choose year",
                                  },

                                  gender: {
                                      required: "Please Choose Gender",
                                  },                                        
                             },

                              errorPlacement: function(error, element)  //place to show gender error
                              {
                                  if ( element.is(":radio") ) 
                                  {
                                      error.appendTo( element.parents('.container_test') );
                                  }
                                  else 
                                  { // This is the default behavior 
                                      error.insertAfter( element );
                                  }
                               }

                           }); 


              if($(this).valid())
                   {
                        var base_url = '<?php echo base_url() ?>';    
                        var url = $(this).attr('action');
                        var formdata = new FormData(this);
                 
                        $.ajax({
                                url : url,
                                method: 'POST',
                                data: formdata,
                                processData: false,
                                contentType: false,
                                dataType:'json',
                                error: function(xhr, status, error)
                                {   
                                    alert(xhr.responseText);
                                },
                                success: function(response)
                                {                   
                                   if(response.status == 'success')
                                   {
                                     
                                         swal({
                                                 title: "Success!",
                                                 text: "Your Wowhubb Account has Created.",
                                                 type: "success",
                                                 timer: 5000
                                                 }).then(() => {                
                                               window.location.href = "<?php echo base_url('home/otp_page'); ?>";              
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

   
     //send input value to home/wowtag page

    $(document).ready(function () {

      $("#wowtag").blur(function(e){

          e.preventDefault();

          var wowtag = $('#wowtag').val();

          var wowname = $('input[name=wowtagid]').val();

           if(wowname.trim().length == 0)
           {
             $("#result").html('<div class="alert alert-warning alert-dismissable "> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Warning!</strong> Wowtag ID is Mandatory. </div>');
           }
          
           else
           {
          $.ajax({

                url : '<?php echo base_url('home/wowtag');?>',
                method: 'POST',
                data: 'wowtag='+wowtag,               
                dataType:'json',
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },
                success: function(response)
                {                   
                    if(response.status == 'success')
                     {
                      
                        $("#result").html('<div class="alert alert-success alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> Your !Wowtag ID was Create Successfully. </div>');
                                           
                     }

                     else 
                     {                     
                       $("#result").html('<div class="alert alert-danger alert-dismissable"> <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> <strong>Sorry!</strong> This Already Exists! Please Try new one. </div>');
                     }
                }
            });
        }
           
    });
    }); 
                  

   

</script>
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="post-content">
                    <div class="user-info text-center" style="background:#e91e63; margin-top:-15px; padding:10px 15px; color:#fff!important;">
                                              <h3 style="color:#fff; font-size:25px; font-weight:normal;">Please Register or Login to Continue!! </h3>

                                          </div>
                      <div class="post-container" style="padding-bottom:20px;">
                        <div class="post-detail">
                                          
                                          
                          <div class="user-info">
                            <div class="row" style="padding:10px;">
                            <div class="col-md-3"><img src="<?php echo base_url ('assets/images/app-icon.png') ?>" alt="app-icon" /></div>
<div class="col-md-9"><span style="font-size:15px;">Wowhubb is the Event Networking Platform for Create, Host and Share your Personal, Professional and Business Leads and Sales events. We are Best Event Networking Platform Anytime and Anywhere.</span> </div>
<!-- this form submit rsvp -->
                              
                               
                              
                              <div class="row">
                                    <div class="col-md-12" style="margin-top:10px;">
                                      <div class="col-md-12 text-center">
                                   
                                        <a href="<?php echo base_url('Home/login'); ?>" style="color:#333;">
                                          <button type="submit" class="btn btn-primary" style="padding:7px 25px!important;">I Already have an Account</button>
                                          </a><br>
                                          
                                          <a href="<?php echo base_url('Home/index'); ?>" style="color:#333;">
                                          <span style="font-size:15px; color:#555;">Click to Register</span></a>
                                        
                                          
                                
                                       
                                      </div>
                                    </div>
                                  </div>
                             

                                  <!--div class="row">
                                    <div class="col-md-12">
                                      <div class="col-md-12">
                                        <div style="width:50%;" class="text-left pull-left">
                                        <div class="pull-left"><img src="<?php echo base_url ('assets/images/left-design.png') ?>" alt="right-arrow" /></div>
                                          <div class="pull-left"> <a href="<?php echo base_url('Home/index'); ?>" style="color:#333;"><span style="font-size:15px; color:#e91e63;"><em>To continue,</em></span><br>
                                          <span style="font-size:17px;">REGISTER <img src="<?php echo base_url ('assets/images/right-arrow.png') ?>" alt="right-arrow" /></a> </span></div>
                                          
                                        </div>
                                        <div style="width:50%;" class="text-left pull-left">
                                        <div class="pull-left"><img src="<?php echo base_url ('assets/images/left-design.png') ?>" alt="right-arrow" /></div>
                                        <div class="pull-left"> <a href="<?php echo base_url('Home/login'); ?>" style="color:#333;"><span style="font-size:15px; color:#e91e63;"><em>Already Registered?</em></span><br>
                                        <span  style="font-size:17px;">LOGIN <img src="<?php echo base_url ('assets/images/right-arrow.png') ?>" alt="right-arrow" /></a> </span>
                                        </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div-->

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

</div>
</div>

</body>


</html>
