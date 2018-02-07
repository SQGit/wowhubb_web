<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<title>Wowhubb | Your One Stop Event Networking Platform</title>

<!-- Stylesheets
    ================================================= -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/theme-styles.css')?>" />
<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/fav.png')?>"/>
<style type="text/css">
#footer {
	background: #fff;
	position: relative;
	top: 50px;
}
.redBackground{
background-color:rgba(204, 180, 190, 0.32);
width:124px; 
height:124px; 
border-radius:8px;
}
input[type=checkbox] {
    margin: 6px 0 0 6px;
    margin-top: 1px\9;
    line-height: normal;

}
input[type=checkbox] {
      display:none;

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
      <div class="navbar-header"> <a class="navbar-brand" href="index-register.html"><img src="<?php echo base_url('assets/images/logo.png')?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; font-size:25px;">
          Join Wowhubb Network <br>
          <span style="font-size:13px; background:#e91e63; padding:5px 10px; border-radius:5px;">Enjoy Your Event Hosting Experience</span>
        </ul>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling --> 
      <!-- /.navbar-collapse --> 
    </div>
    <!-- /.container --> 
  </nav>
</header>
<div id="page-contents" style="margin-top:150px;">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="contact-us" style="padding: 23px 9px 20px 45px;">
        <div class="row">

            <!-- First  row -->
      <form action = "<?php echo base_url('Home/interest_load'); ?>" id = "interest_form" method="POST" >
          <div class="col-md-12 col-sm-12" style="margin-top:10 px;">

              <div class="col-md-2 col-sm-4">
                  <div style="left:11px; top:1px;">
                      <input name="img1[]" type="checkbox" value="business" id="check1">
                      <label for="check1">
                 
                      <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_1_pink_xhdpi.png')?>" alt=""/></div></label>
                  </div>
                      <div style="text-align:left; line-height:22px;">Business Networking Events</div>                  
              </div>

              <div class="col-md-2 col-sm-4">
                  <div style="left:11px; top:1px;">
                      <input name="img1[]" type="checkbox" value="startup" id="check2">
                      <label for="check2">
                      <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center;  cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_2_pink_xhdpi.png')?>" alt=""/></div></label>
                  </div>
                      <div style="text-align:left; line-height:22px;">Startup Technology Events</div>
                 
              </div>

              <div class="col-md-2 col-sm-4">
                  <div style="left:11px; top:1px;">
                     <input name="img1[]" type="checkbox" value="professional" id="check3">
                     <label for="check3">
                      <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center;  cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_3_pink_xhdpi.png')?>" alt=""/></div></label>
                  </div>    
                      <div style="text-align:left; line-height:22px;">Professional Training Events</div>                  
              </div>

              <div class="col-md-2 col-sm-4" >
                <div style="left:11px; top:1px;">
                  <input name="img1[]" type="checkbox" value="comedy" id="check4">
                   <label for="check4">
                  <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_4_pink_xhdpi.png')?>" alt=""/></div></label>
                </div>
                  <div style="text-align:left; line-height:22px;">Comedy Talk Shows &amp; Events</div>               
              </div>

              <div class="col-md-2 col-sm-4">
                <div style="left:11px; top:1px;">
                  <input name="img1[]" type="checkbox" value="media" id="check5">
                   <label for="check5">
                  <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_5_pink_xhdpi.png')?>" alt=""/></div></label>
                </div>
                  <div style="text-align:left; line-height:22px;">Media Film Fashion &amp; Culture Events</div>                
              </div>

              <div class="col-md-2 col-sm-4">
                  <div style="left:11px; top:1px;">
                    <input name="img1[]" type="checkbox" value="homelife" id="check6">
                    <label for="check6">
                    <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_6_pink_xhdpi.png')?>" alt=""/></div></label>
                  </div>
                  <div style="text-align:left; line-height:22px;">Homelife Styles</div>
            </div>

          </div>

              <!-- second row -->

          <div class="col-md-12 col-sm-12" style="margin-top:5px;">

            <div class="col-md-2 col-sm-4">
                <div style="left:11px; top:1px;">
                  <input type="checkbox" name="img1[]" value="music" id="check7" >
                  <label for="check7">
                  <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_7_pink_xhdpi.png')?>" alt=""/></div></label>
                </div>
                  <div style="text-align:left; line-height:22px;">Hobbies</div>               
            </div>

            <div class="col-md-2 col-sm-4">
              <div style="left:11px; top:1px;">
                <input type="checkbox" name="img1[]" value="hobbies" id="check8">
                 <label for="check8">
                <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_8_pink_xhdpi.png')?>" alt=""/></div></label>
              </div>  
                <div style="text-align:left; line-height:22px;">Music Arts</div>            
            </div>

            <div class="col-md-2 col-sm-4" >
              <div style="left:11px; top:1px;">
                  <input type="checkbox" name="img1[]" value="parties" id="check9">
                  <label for="check9">
                  <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_9_pink_xhdpi.png')?>" alt=""/></div></label>
              </div>
                  <div style="text-align:left; line-height:22px;">Parties</div>              
            </div>

            <div class="col-md-2 col-sm-4" >
              <div style="left:11px; top:1px;">
                <input type="checkbox" name="img1[]" value="religion" id="check10">
                 <label for="check10">
                <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_10_pink_xhdpi.png')?>" alt=""/></div></label>
               </div>  
                <div style="text-align:left; line-height:22px;">Religion Spirtuality</div>           
            </div>

            <div class="col-md-2 col-sm-4">
              <div style="left:11px; top:1px;">
                <input type="checkbox" name="img1[]" value="charity" id="check11">
                 <label for="check11">
                <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_11_pink_xhdpi.png')?>" alt=""/></div></label>
              </div>
               <div style="text-align:left; line-height:22px;">Charity Cause &amp; Community Events</div>               
            </div>

            <div class="col-md-2 col-sm-4">
              <div style="left:11px; top:1px;">
                <input type="checkbox" name="img1[]" value="family" id="check12">
                 <label for="check12">
                <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_12_pink_xhdpi.png')?>" alt=""/></div></label>
               </div>
              <div style="text-align:left; line-height:22px;">Family Education</div>           
           </div>

          </div>

            <!-- Third row -->

          <div class="col-md-12 col-sm-12" style="margin-top:5px;">

              <div class="col-md-2 col-sm-4">
                  <div style="left:11px; top:1px;">
                    <input type="checkbox" name="img1[]" value="food" id="check13">
                     <label for="check13">
                     <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_13_pink_xhdpi.png')?>" alt=""/></div></label>
                  </div>
                  <div style="text-align:left; line-height:22px;">Food Drink</div>              
              </div>

              <div class="col-md-2 col-sm-4">
                  <div style="left:11px; top:1px;">
                    <input type="checkbox" name="img1[]" value="wellness" id="check14">
                     <label for="check14">
                     <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_14_pink_xhdpi.png')?>" alt=""/></div></label>
                  </div>
                  <div style="text-align:left; line-height:22px;">Wellness Fitness</div>            
              </div>

            <div class="col-md-2 col-sm-4">
                <div style="left:11px; top:1px;">
                  <input type="checkbox" name="img1[]" value="sports" id="check15">
                   <label for="check15">
                  <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_15_pink_xhdpi.png')?>" alt=""/></div></label>
                </div>
                <div style="text-align:left; line-height:22px;">Sports Events</div>              
            </div>

            <div class="col-md-2 col-sm-4">
                <div style="left:11px; top:1px;">
                    <input type="checkbox" name="img1[]" value="travel" id="check16">
                    <label for="check16">
                    <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_16_pink_xhdpi.png')?>" alt=""/></div></label>
                </div>
                <div style="text-align:left; line-height:22px;">Travel Tours &amp; Vacation Sports</div>                
            </div>

            <div class="col-md-2 col-sm-4" >
              <div style="left:11px; top:1px;">
                <input type="checkbox" name="img1[]" value="autoboats" id="check17">
                 <label for="check17">
                <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_17_pink_xhdpi.png')?>" alt=""/></div></label>
              </div>
                <div style="text-align:left; line-height:22px;">Auto Boats &amp; Air</div>
            </div>

            <div class="col-md-2 col-sm-4">
                <div style="left:11px; top:1px;">
                  <input type="checkbox" name="img1[]" value="holiday" id="check18">
                   <label for="check18">
                  <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_18_pink_xhdpi.png')?>" alt=""/></div></label>
                </div>
                  <div style="text-align:left; line-height:22px;">Holiday Events</div>               
            </div>

           </div>

              <!-- Fourth row -->

           <div class="col-md-12 col-sm-12" style="margin-top:5px;">

                <div class="col-md-2 col-sm-4">
                    <div style="left:11px; top:1px;">
                       <input type="checkbox" name="img1[]" value="school" id="check19">
                       <label for="check19">
                       <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_19_pink_xhdpi.png')?>" alt=""/></div></label>
                    </div>
                    <div style="text-align:left; line-height:22px;">School Events</div>              
                </div>

              <div class="col-md-2 col-sm-4">
                  <div style="left:11px; top:1px;">
                     <input type="checkbox" name="img1[]" value="govt" id="check20">
                     <label for="check20">
                     <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_20_pink_xhdpi.png')?>" alt=""/></div></label>
                  </div>
                  <div style="text-align:left; line-height:22px;">Govt Events</div>                
              </div>

            <div class="col-md-2 col-sm-4">
              <div  style="left:11px; top:1px;">
                  <input type="checkbox" name="img1[]" value="political" id="check21">
                  <label for="check21">
                  <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:125px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_21_pink_xhdpi.png')?>" alt=""/></div></label>
              </div>
              <div style="text-align:left; line-height:22px;">Political Events</div>            
          </div>
          
          <div class="col-md-12 col-sm-12 text-center" style="margin-top:25px;">
          <input type="submit" value="Submit" class="btn-primary">

      </form>
          
          <button class="btn-primary">
            <a style="text-decoration:none;color:#fff;" href="<?php echo base_url('event/get_eventfeed'); ?>" >Skip For Later</a>
          </button>
     
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



<!-- Scripts
    ================================================= --> 
<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js')?>"></script> 
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.appear.min.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.incremental-counter.js')?>"></script> 
<script src="<?php echo base_url('assets/js/script.js')?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
<script>
// checkbox background color change
$("input[type='checkbox']").change(function(){
    if($(this).is(":checked")){
        $(this).parent().addClass("redBackground"); 
    }else{
        $(this).parent().removeClass("redBackground");  
    }
});



//submit interest form using jquery
var base_url = '<?php echo base_url() ?>';

$(document).ready(function(){

$(document).on("submit", "#interest_form", function(e){
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
                    swal("Good job!", "Your Interest will be added!", "success");
                    // alert('success');
                    window.location.href = "<?php echo base_url('event/get_eventfeed');?>";
                   
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

<!-- Mirrored from thunder-team.com/friend-finder/index-register.html by HTTrack Website Copier/3.x [XR&CO'2010], Thu, 31 Aug 2017 06:24:19 GMT -->
</html>
