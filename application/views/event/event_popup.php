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
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/theme-styles.css')?>" />
    <!-- calender links -->
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.datetimepicker.css')?>" />
   
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/custom/css/form-wizard-blue.css') ?>">
   
    

   <!-- file upload -->
  
    <!-- CSS adjustments for browsers with JavaScript disabled -->
   
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
    <style type="text/css">
  
    #footer {
      background: #fff;
      position: relative;
      top: 0px;
    }
      input[type=radio] {
    border: 0px;
    width: 5%;
    height: 15px;
}
.form-wizard {
    padding: 25px;
    background: #fff;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    box-shadow: 0px 0px 6px 3px #777;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 13px;
    font-weight: normal;
    color: #333;
    line-height: 30px;
    text-align: center;
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
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
       <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span>
          </a> 
          <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span>
          </a> 
          <a href="<?php echo base_url('event/create_event_landing'); ?>" style="text-decoration:none;"><span style="font-size:13px;  background:#757575; padding:5px 10px; border-radius:5px; color:#fff;">Help</span>
          </a> 
          <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span>
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
      
</div>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        
        <div id="page-contents">
          <div class="row"> 
          
            <div class="col-md-12">

              <div class="col-md-8 form-wizard form-body-classic form-header-classic col-md-offset-2">
            <!-- 
            Just change the class name for make it with different style of design.

            Use anyone class "form-header-classic" or "form-header-modarn" or "form-header-stylist" for set your form header design.
            
            Use anyone class "form-body-classic" or "form-body-material" or "form-body-stylist" for set your form element design.
            -->
            
                   
                    <h3>Select Your Event Type</h3>
                     <p style="font-weight: bold;">Please select any one of the category </p>
              <!-- Form Step 1 -->
         <fieldset>
                                         
           <form id="create_event" action="<?php echo base_url('event/event_popup_details'); ?>" method="post" >   
         
                 <div class="row"> 
                    <div class="col-md-6">
                        <div class="col-md-12" style="border:1px solid #ccc; padding-top:15px; padding-bottom:15px; background-color: transparent; border-radius: 5px;">
                          <input type="radio" name="event_type" id="event_type" value="1" style="padding-bottom:15px;" onClick="javascript:return yourfunction(1)"  >
                          <span style="font-size: 17px; font-weight: bold;">Private/ Personal Events</span>
                           <p> This includes following events Weddings, Anniversaries Bridal Showers, Baby Showers, Graduations etc 
                           </p> 
                           <div id = "one" style = "display:none" >
                                <select name="private_personal" id="event_category_1" class="form-control" >
                                        <option value="">Select </option>
                                        <option value="Anniversary">Anniversary </option>
                                        <option value="Baby Shower">Baby Shower</option>
                                        <option value="Birthday Party">Birthday Party</option> 
                                        <option value="Holiday Party">Holiday Party</option>   
                                        <option value="Wedding">Wedding</option> 
                                        <option value="Baby Naming">Baby Naming</option> 
                                        <option value="Gratuation Party">Gratuation Party</option>
                                        <option value="Team Outing">Team Outing</option>
                                        <option value="Photo/File Shoot">Photo/File Shoot Event</option> 
                                        <option value="Bridal Shower">Bridal Shower Event</option> 
                                        <option value="Meeting">Meeting</option> 
                                        <option value="Group Meetings">Group Meetings</option>
                                        <option value="others">Others</option>              
                                </select> 
                          </div>
                          <div style='display:none; margin-top: 20px;' id='private_other'>
                            <input type="text" name="private_other" class="form-control" placeholder="Enter Event category">
                          </div>  

                    </div>
                   </div>              
                     <div class="col-md-6">
                        <div class="col-md-12" style="border:1px solid #ccc; padding-top:15px; padding-bottom:15px; background-color: transparent; border-radius: 5px;">
                          <input type="radio" name="event_type" id="event_type" value="2" onClick="javascript:return yourfunction(2)" >
                         <span style="font-size: 17px; font-weight: bold;">Professional/ Corporate Events</span>
                           <p> This includes following events Sales & Marketing Events, Business leads events, Business campaigns, branding etc 
                           </p> 
                       <div id = "two" style = "display:none" >    
                           <select name="professional_corporate" id="event_category_2" class="form-control">  
                                        <option value="">Select </option>   
                                        <option value="Networking">Networking Meeting </option>
                                        <option value="Class">Class</option>
                                         <option value="Convention">Convention</option>  
                                         <option value="Dinner">Dinner</option>   
                                         <option value="Seminar">Seminar</option>   
                                         <option value="Training">Training/Workshop</option>
                                         <option value="Conference">Conference</option>
                                         <option value="Educational">Educational Program</option>
                                         <option value="Startup">Startup Meeting </option>
                                         <option value="Leadership">Leadership Workshop</option>
                                         <option value="Webnair">Webinar</option>
                                         <option value="Podcast">Podcast</option>
                                         <option value="Online Meeting">Online Meeting</option>
                                         <option value="Private">Private Fundraising</option>
                                         <option value="Community Fundraising">Community Fundraising</option>
                                         <option value="Public Fundraising">Public Fundraising</option>
                            </select> 
                      </div>      
                        </div>  
                    </div>                 
                </div>

                <div class="row" style="margin-top: 25px">                       
                   <div class="col-md-6">
                        <div class="col-md-12" style="border:1px solid #ccc; padding-top:15px; padding-bottom:15px;background-color: transparent; border-radius: 5px;">
                         <input type="radio" name="event_type" value="3" id="event_type" onClick="javascript:return yourfunction(3)">
                          <span style="font-size: 17px; font-weight: bold;">Social Open Event</span>
                           <p> This includes following events Religious Meetings, Coventions,  Conferences, Comedy Shows, Music Concerts, Night Parties, Group Meetings etc
                           </p>
                            <div id = "three" style = "display:none" >    
                                <label>Concerts  Parties Events</label>                                  
                                  <select name="social" id="event_category_3" class="form-control"> 
                                        <option value="">Select </option>    
                                        <option value="Holiday Party ">Holiday Party </option>
                                        <option value="Music Concert">Music Concert</option>
                                        <option value="Kids Concert">Kids Concert</option> 
                                        <option value="Adult Concert">Adult Concert</option>   
                                        <option value="Camp Meeting">Camp Meeting</option> 
                                        <option value="Comedy Shows">Comedy Shows</option>
                                        <option value="Camp Meeting">Camp Meeting</option>  
                                        <option value="Christian Meeting">Christian Meeting/Events</option>  
                                        <option value="Muslim Meeting">Muslim Meeting</option>  
                                        <option value="Cultural Events">Cultural Events</option>  
                                        <option value="Judaism">Judaism</option>  
                                        <option value="Eastern Religion">Eastern Religion</option>  
                                        <option value="New Age">New Age</option> 
                                        <option value="Guided Tours">Guided Tours</option> 
                                        <option value="Crusing Tours">Crusing Tours</option> 
                                        <option value="Arts Culture">Arts & Culture Tourism</option> 
                                        <option value="Vacation Tours">Vacation Tours</option> 
                                        <option value="Recreational Tours">Recreational Tours</option> 
                                        <option value="Road Trip">Road Trip</option> 
                                        <option value="Religious Tourism">Religious Tourism</option> <option value="Wellness Tourism">Wellness Tourism</option> 
                                        <option value="Excursion">Excursion</option> 
                                        <option value="Spring Break">Spring Break Events</option> 
                                        <option value="Safari Tours">Safari Tours</option> 
                                        <option value="Special Interest">Special Interest Tours</option> 
                                        <option value="Adventure Tours">Adventure Tours</option> 
                                        <option value="Educational Tours">Educational Tours</option> 
                                        <option value="Business Tours">Business Tours</option> 
                                        <option value="others">Others</option> 
                                </select>  
                         </div>  
                          <div style='display:none; margin-top: 20px;' id='party_other'>
                            <input type="text" name="party_other" class="form-control" placeholder="Enter Event category">
                          </div>                                               
                      </div>  
                    </div>
                  
                    <div class="col-md-6">
                        <div class="col-md-12" style="border:1px solid #ccc; padding-top:15px; padding-bottom:15px; background-color: transparent; border-radius: 5px;">
                          <input type="radio" name="event_type" value="4" id="event_type"  onClick="javascript:return yourfunction(4)" >
                           <span style="font-size: 17px; font-weight: bold;">Sales/ Business Leads Events</span>
                           <p> This includes following events such as Sales & Marketing Events, Business leads events, Business campaigns, Customer engagement etc 
                           </p> 
                       <div id = "four" style = "display:none" >     
                           <label>Select Sales Event Industry</label>                         
                           <select name="sales_business" id="event_category_4" class="form-control" >     
                                        <option value="">Select </option>
                                        <option value="Arts Entertaiment">Arts & Entertaiment </option>
                                        <option value="Food Drink">Food & Drink</option>
                                        <option value="Technology Computers">Technology & Computers</option><option value="Aerospace">Aerospace</option>   
                                        <option value="Health Beauty">Health & Beauty</option>
                                       <option value="Food Beverages">Food & Beverages</option><option value="Medical Health">Medical & Health</option>
                                       <option value="Insurance">Insurance</option>
                                       <option value="Auto Mobile">Auto mobile</option>
                                       <option value="Energy">Energy</option>
                                       <option value="Education Training">Education & Training</option>
                                       <option value="Cargo Freight">Cargo & Freight</option>
                                       <option value="Telecommunication">Tele communication </option>
                                       <option value="Business Consulting">Business Consulting</option>
                                       <option value="Finance Tax">Finance and Tax</option>
                            </select>  
                            <label>Select Sales Event Campaign  Objective</label>
                            <select name="sales_business1" id="event_category_4" class="form-control">   
                                       <option value="">Select </option>  
                                       <option value="Brand Awareness">Brand Awareness Events</option>
                                       <option value="Trade Show">Trade Show</option>
                                       <option value="Lead Generation">Lead Generation </option>
                                       <option value="Customer Engagement">Customer Engagement</option>
                                       <option value="Store Visit">Store Visit</option>
                                       <option value="Online Store">Online Store Visit </option>
                            </select>                           
                     </div>    
                        </div>  

                     </div>
                        <div class="col-md-12 text-center" style="margin-top: 20px;">
                           <button type="submit" class="btn-primary" id="btnSubmit"> Continue</button>
                        </div>
           </form>  
                </div>      
                     
        </fieldset>
         
                     
            </div>
          
          
          </div>
        </div>
      </div>
    </div>
</div>

    <!-- Footer
    =================================================
    <footer id="footer">
        <div class="container">
          <?php  $this->load->view('includes/footer.php'); ?>
        </div>
    </footer>
    
    preloader
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div> -->
    
 

    <!-- Scripts
    ================================================= -->
    <script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> 
    <script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script>
    <script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>  
   
    
  </body>
  <script>

    // other option private event hide and show
    $(document).ready(function(){
    $('#event_category_1').on('change', function() {
      if ( this.value == 'others')
      {
        $("#private_other").show();
      }
      else
      {
        $("#private_other").hide();
      }
    });
});
     // other option party event hide and show
    $(document).ready(function(){
    $('#event_category_3').on('change', function() {
      if ( this.value == 'others')
      {
        $("#party_other").show();
      }
      else
      {
        $("#party_other").hide();
      }
    });
});

//radio button validation
   $(function()
   {
        $("#btnSubmit").on('click', function()
        {
          if ($('input[id="event_type"]:checked').length== 0)
            {
                swal('Please select any one event type...');
                return false;
            }
            var radio_val = $('input[id="event_type"]:checked').val();
            var cat = "event_category_"+radio_val;
             
            if($("select[id="+cat+"] option:selected").val()=="")
            {
                swal('Please select event category');
                return false;   
            }
             $('#btnSubmit').click(function() 
             {
              $(this).validate();
             });
        });
  });
    //select button show depends on radio
    //https://stackoverflow.com/questions/29317034/drop-down-value-depends-on-radio-button-selection
         function yourfunction(radioid)
        {
            if(radioid == 1)
            {    
              document.getElementById('one').style.display = 'block';
              document.getElementById('two').style.display = 'none';
              document.getElementById('three').style.display = 'none';
              document.getElementById('four').style.display = 'none';
             }
           else if(radioid == 2)
            {  
              document.getElementById('four').style.display = 'none';
              document.getElementById('three').style.display = 'none';
              document.getElementById('two').style.display = '';
              document.getElementById('one').style.display = 'none';
           }
           else if(radioid == 3)
            {  
              document.getElementById('four').style.display = 'none';
              document.getElementById('three').style.display = '';
              document.getElementById('two').style.display = 'none';
              document.getElementById('one').style.display = 'none';
           }
           else if(radioid == 4)
            {  
              document.getElementById('four').style.display = '';
              document.getElementById('three').style.display = 'none';
              document.getElementById('two').style.display = 'none';
              document.getElementById('one').style.display = 'none';
           }

        } 

       
</script>

</html>
