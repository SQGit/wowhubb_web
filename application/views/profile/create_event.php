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
		<link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url ('assets/css/ionicons.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/calender.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/custom/css/form-wizard-blue.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap-datetimepicker.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap-datetimepicker.min.css') ?>">

   <!-- file upload -->
   <link rel="stylesheet" href="<?php echo base_url ('assets/css/blueimp-gallery.min.css')?>">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.fileupload.css')?>">
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.fileupload-ui.css')?>">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.fileupload-noscript.css')?>">
    </noscript>
    <noscript>
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.fileupload-ui-noscript.css')?>">
    </noscript>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
    <style type="text/css">
    #footer {
    	background: #fff;
    	position: relative;
    	top: 0px;
    }


#imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}
#imageUpload1
{
    display: none;
}

#profileImage1
{
    cursor: pointer;
}

</style>

	</head>

  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="index-register.html"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
         
         <a href="#"> <span style="font-size:13px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Personal</span></a>
           <a href="#"><span style="font-size:13px;  background:#757575; padding:5px 10px; border-radius:5px; color:#fff;">Professional</span></a>

        </ul>
         <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
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
<div class="google-maps">
      <div id="map" class="map contact-map" style="height:50px;"><img src="<?php echo base_url ('assets/images/bg/bg-3.jpg') ?>" width="100%" style="background-attachment: fixed;"  alt=""/></div>
</div>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        
        <div id="page-contents">
          <div class="row"> 
          
            <div class="col-md-12"  >

              <div class="form-wizard form-body-classic form-header-classic">
            <!-- 
            Just change the class name for make it with different style of design.

            Use anyone class "form-header-classic" or "form-header-modarn" or "form-header-stylist" for set your form header design.
            
            Use anyone class "form-body-classic" or "form-body-material" or "form-body-stylist" for set your form element design.
            -->
            
                      <form role="form" action="#" method="post">

                        <h3>Create Your Event</h3>
                        <p>Please fill information to a create an event </p>
              
              <!-- Form progress -->
                        <div class="form-wizard-steps form-wizard-tolal-steps-6">
                          <div class="form-wizard-progress">
                              <div class="form-wizard-progress-line" data-now-value="8.33" data-number-of-steps="6" style="width: 8.33%;"></div>
                          </div>
                <!-- Step 1 -->
                          <div class="form-wizard-step active">
                            <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <p>!Wowtag</p>
                          </div>
                <!-- Step 1 -->
                
                <!-- Step 2 -->
                          <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-location-arrow" aria-hidden="true"></i></div>
                            <p>Event Venue</p>
                          </div>
                <!-- Step 2 -->
                
                <!-- Step 3 -->
                <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                            <p>Program Schedule</p>
                          </div>
                <!-- Step 3 -->
                
                <!-- Step 4 -->
                <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <p>Event Highlights</p>
                          </div>
                <!-- Step 5 -->
                <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <p>Event Contact</p>
                          </div>
                          <!-- Step 6 -->
                           <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                            <p>Gift Registry</p>
                          </div>
                        </div>
              <!-- Form progress -->
                        
              
              <!-- Form Step 1 -->
                        <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="16.66" aria-valuemin="0" aria-valuemax="100" style="width: 16.66%">
                  </div>
                </div>
                <!-- Progress Bar -->
                            <h4> <span>Step 1 - 6</span></h4>
                             <div class="row">
                                <div class='col-sm-6'>
                                   <div class="form-group">
                                      <label>Wowtag ID: <span>*</span></label>
                                       <input type="text" name="First Name" placeholder="Wowtag ID" class="form-control required">
                                    </div>
                                </div>
                             </div>
                           <div class="row">
                                <div class='col-sm-6'>
                                    <div class="form-group text-center">
                                       <label style="color:#e91e63;">!Wowtag Runtime </label>
                                    
                                    </div>
                                </div>
                          </div>
  
                  <div class="container">
                      <div class="row">
                          <div class='col-sm-3'>
                              <div class="form-group">
                                <label>From: </label>
                                  <div class='input-group date' id='datetimepicker1'>
                                      <input type='text' class="form-control" />
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                          </div>
                          <div class='col-sm-3'>
                              <div class="form-group">
                                <label>To: </label>
                                  <div class='input-group date' id='datetimepicker2'>
                                      <input type='text' class="form-control" />
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                   <div class="container">
                      <div class="row">
                          <div class='col-sm-3'>
                              <div class="form-group">
                                <label>Wowtag Video </label>
                                   <image id="profileImage" src="http://lorempixel.com/100/100" />
                                      <input id="imageUpload" type="file" 
                                        name="profile_photo" placeholder="Photo" required="" capture>
                              </div>
                          </div>
                          <div class='col-sm-3'>
                              <div class="form-group">
                                <label>Cover Page </label>
                                   <image id="profileImage1" src="http://lorempixel.com/100/100" />
                                      <input id="imageUpload1" type="file" 
                                        name="profile_photo" placeholder="Photo" required="" capture>
                              </div>
                          </div>
                          
                      </div>
                  </div>  
                   
            
                            <div class="form-wizard-buttons">
                                  <button type="button" class="btn btn-next">Next</button>
                            </div>
        </fieldset>
              <!-- Form Step 1 -->

              <!-- Form Step 2 -->
                            <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 32.66%">
                  </div>
                </div>
                <!-- Progress Bar -->
              <h4>Contact Information : <span>Step 2 - 6</span></h4>
                <div class="form-group">
                     
                       <input type="text" name="venue" placeholder="Event Venue Name" class="form-control required">
                </div>
                 <div class="form-group">
                     
                       <input type="text" name="venue" placeholder="Address" class="form-control required">
                </div>
              
                <div class="form-group">                          
                      <input type="text" name="city" placeholder="City" class="form-control required">
                </div>
                <div class="form-group">                          
                      <input type="text" name="state" placeholder="State" class="form-control required">
                </div>
                <div class="form-group">                          
                      <input type="text" name="zipcode" placeholder="zipcode" class="form-control required">
                </div>   
                <div class="form-group">                          
                      <input type="checkbox" name="invite" class="form-control required">
                      Address can only be viewed by invited gust <br>
                      <input type="checkbox" name="invite" class="form-control required">
                      Invited guest can share  <br>
                      <input type="checkbox" name="invite" class="form-control required">
                      1 Day Event  
                      <input type="checkbox" name="invite" class="form-control required">
                      2 Days   
                      <input type="checkbox" name="invite" class="form-control required">
                      3 Days 

                </div>       
                
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
              <!-- Form Step 2 -->

              <!-- Form Step 3 -->
                            <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="48.99" aria-valuemin="0" aria-valuemax="100" style="width: 48.99%">
                  </div>
                </div>
                <!-- Progress Bar -->
                                <h4>Official Information: <span>Step 3 - 6</span></h4>
                <div class="form-group">
                              <label>Employee ID: <span>*</span></label>
                                    <input type="text" name="Employee ID" placeholder="Employee ID" class="form-control required">
                                </div>
                                
                
                <div class="form-group">
                              <label>Working Hours: <span>*</span></label>
                                    <input type="text" name="Working Hours" placeholder="Working Hours" class="form-control required">
                                </div>
                
                <br/>
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
              <!-- Form Step 3 -->
              
              <!-- Form Step 4 -->
              <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="65.32" aria-valuemin="0" aria-valuemax="100" style="width: 65.32%">
                  </div>
                </div>
                <!-- Progress Bar -->
            <h4>Payment Information: <span>Step 4 - 6</span></h4>
                <div style="clear:both;"></div>
                <div class="form-group">
                              <label>Bank Name: <span>*</span></label>
                                    <input type="text" name="Bank Name" placeholder="Bank Name" class="form-control required">
                                </div>
     
                <br/>
                <div class="container-fluid">
                <div class="row form-inline">
                <div class="form-group col-md-3 col-xs-3">
                  <label>Expiry Date: </label>
                </div>
                
               
                                </div>
                </div>
                <br/>
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>
              <!-- Form Step 4 -->

               <!-- Form Step 5 -->

                <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="81.65" aria-valuemin="0" aria-valuemax="100" style="width: 81.65%">
                  </div>
                </div>
                <!-- Progress Bar -->
            <h4>Payment Information: <span>Step 4 - 6</span></h4>
                <div style="clear:both;"></div>
                <div class="form-group">
                              <label>Bank Name: <span>*</span></label>
                                    <input type="text" name="Bank Name" placeholder="Bank Name" class="form-control required">
                                </div>
     
                <br/>
                <div class="container-fluid">
                <div class="row form-inline">
                <div class="form-group col-md-3 col-xs-3">
                  <label>Expiry Date: </label>
                </div>
                </div>
                </div>
                <br/>
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                <!-- Form Step 5 -->
                <!-- Form Step 6 -->
                <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="97.98" aria-valuemin="0" aria-valuemax="100" style="width: 97.98%">
                  </div>
                </div>
                <!-- Progress Bar -->
            <h4>Payment Information: <span>Step 4 - 6</span></h4>
                <div style="clear:both;"></div>
                <div class="form-group">
                              <label>Bank Name: <span>*</span></label>
                                    <input type="text" name="Bank Name" placeholder="Bank Name" class="form-control required">
                                </div>
     
                <br/>
                <div class="container-fluid">
                <div class="row form-inline">
                <div class="form-group col-md-3 col-xs-3">
                  <label>Expiry Date: </label>
                </div>
                </div>
                </div>
                <br/>
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>

                <!-- Form Step 6 -->

                      
           </form>
            
            </div>
             
             

            
          
          </div>
        </div>
      </div>
    </div>
</div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
        <div class="container">
          <?php  $this->load->view('includes/footer.php'); ?>
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
    <script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> <!-- this two script is date script -->
    <script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
     <script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script>


     <script src="<?php echo base_url('assets/js/gallery.min.js')?>"></script> 
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads --> 
    <script src="<?php echo base_url('assets/js/jquery.iframe-transport.js')?>"></script> 
    <!-- The basic File Upload plugin --> 
    <script src="<?php echo base_url('assets/js/jquery.fileupload.js')?>"></script> 
    <!-- The File Upload processing plugin --> 
    <script src="<?php echo base_url('assets/js/jquery.fileupload-process.js')?>"></script> 
    <!-- The File Upload image preview & resize plugin --> 
    <script src="<?php echo base_url('assets/js/jquery.fileupload-image.js')?>"></script> 
    <!-- The File Upload audio preview plugin --> 
    <script src="<?php echo base_url('assets/js/jquery.fileupload-audio.js')?>"></script> 
    <!-- The File Upload video preview plugin --> 
    <script src="<?php echo base_url('assets/js/jquery.fileupload-video.js')?>"></script> 
    <!-- The File Upload validation plugin --> 
    <script src="<?php echo base_url('assets/js/jquery.fileupload-validate.js')?>"></script> 
    <!-- The File Upload user interface plugin --> 
    <script src="<?php echo base_url('assets/js/jquery.fileupload-ui.js')?>"></script> 
    <!-- The main application script --> 
   
    <script src="<?php echo base_url('assets/js/tmpl.min.js')?>"></script> 
    <!-- The Load Image plugin is included for the preview images and image resizing functionality --> 
    <script src="<?php echo base_url('assets/js/load-image.all.min.js')?>"></script> 
    <!-- The Canvas to Blob plugin is included for image resizing functionality --> 
    <script src="<?php echo base_url('assets/js/canvas-to-blob.min.js')?>"></script> 
    <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.js')?>"></script> 
    <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js')?>"></script> <script src="<?php echo base_url('assets/less/datetimepicker.less')?>"></script>
    <script>
           
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
           
            $(function () {
                $('#datetimepicker2').datetimepicker();
            });

            $("#profileImage").click(function(e) {
              $("#imageUpload").click();
            });

             $("#profileImage1").click(function(e) {
              $("#imageUpload1").click();
            });
        </script>
    
  </body>

</html>
