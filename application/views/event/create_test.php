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
   
   
  
   <!-- file upload -->
  
    <!-- CSS adjustments for browsers with JavaScript disabled -->
   
    
    <!--Google Font-->
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
    <style type="text/css">
    select option:first-child { color:red; }
    button, optgroup, select, textarea {
    margin: 0;
    font: inherit;
    color: inherit;
    border-radius: 5px;
   
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
#btnAdd { /*https://stackoverflow.com/questions/14199788/how-do-i-use-an-image-as-a-submit-button */
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
#btnAdd2 { 
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
#btnAdd3 { 
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
#imageUpload1
{
    display: none;
}

#profileImage1
{
    cursor: pointer;
}
#profile-container1 {
    width: 150px;
    height: 150px;
    }
#imageUpload2
{
    display: none;
}

#profileImage2
{
    cursor: pointer;
}

 #imageUpload3
{
    display: none;
}

#profileImage3
{
    cursor: pointer;
}
 
#imageUpload4
{
    display: none;
}


#profile-container4 {
    width: 150px;
    height: 150px;
    }  
#imageUpload5
{
    display: none;
}

#profileImage5
{
    cursor: pointer;
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
      <div class="navbar-header"> <a class="navbar-brand" href="index-register.html"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:13px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Home</span>
          </a> 
          <a href="<?php echo base_url('event/create_event_landing'); ?>" style="text-decoration:none;"><span style="font-size:13px;  background:#757575; padding:5px 10px; border-radius:5px; color:#fff;">Create Event</span>
          </a> 
          <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:13px;  padding:5px 10px; border-radius:5px; color:#fff;"><i class="fa fa-sign-in"></i> Logout</span>
          </a>
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
      
</div>
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        
        <div id="page-contents">
          <div class="row"> 
          
            <div class="col-md-12">

             <div class="col-md-10 form-wizard form-body-classic form-header-classic col-md-offset-1">
            <!-- 
            Just change the class name for make it with different style of design.

            Use anyone class "form-header-classic" or "form-header-modarn" or "form-header-stylist" for set your form header design.
            
            Use anyone class "form-body-classic" or "form-body-material" or "form-body-stylist" for set your form element design.
            -->
            
                   
                        <h3>Create Your Event</h3>
                        <p>Please fill information to a create an event </p>
              
              <!-- Form progress -->
                        <div class="form-wizard-steps form-wizard-tolal-steps-7">
                          <div class="form-wizard-progress">
                              <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="7" style="width: 12.25%;"></div>
                          </div>
                 <!-- Step 1 -->
                          <div class="form-wizard-step active">
                            <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                            <p>Event Type</p>
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
                            <p>Program Schedule</p>
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
                            <p>Event Contact</p>
                          </div>
                 <!-- Step 6 -->
                 <!-- Step 7 -->
                           <div class="form-wizard-step">
                            <div class="form-wizard-step-icon"><i class="fa fa-gift" aria-hidden="true"></i></div>
                            <p>Event Links</p>
                          </div>
                  <!-- Step 7 -->         
                        </div>
              <!-- Form progress -->

                <!-- Form Step 1 -->
                
              <!-- Form Step 1 -->
          <form id="create_event" action="<?php echo base_url('event/program_schdule'); ?>" method="post" enctype="multipart/form-data" > 
 <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="42.84" aria-valuemin="0" aria-valuemax="100" style="width: 42.84%">
                  </div>
                </div>
                <!-- Progress Bar -->
                  <h4> <span>Step 3 - 7</span></h4>
                  <div class='col-sm-6' style="margin-top: 10px;">
                                      <label>!Wowtag Runtime From: </label>                           
                                      <input type='text'  id="datepicker_from" name="datepicker_from" class="form-control required" placeholder="Event Date"/>                   
                                 </div> 
                                  <div class='form-group col-sm-6' >                                    
                                       <input type='text' id="event_date" name="event_date"  class="event_date form-control required" placeholder="Event Date" />             
                                </div>  
          
                 <div class="form-group col-sm-6">                     
                       <input type="text" name="event_venue_name" placeholder="Event Venue Name" class="form-control ">
                </div>
                 <div class="form-group col-sm-6">                    
                       <input type="text" name="address" placeholder="Address" class="form-control ">
                </div>             
                <div class="form-group col-sm-6">                          
                      <input type="text" name="city" placeholder="City" class="form-control ">
                </div>
                <div class="form-group col-sm-6">                          
                      <input type="text" name="state" placeholder="State" class="form-control ">
                </div> 


                    <div class="form-group col-sm-6">                          
                          <input type="text" name="zipcode" placeholder="Zipcode" id="type1" class="typ form-control">
                    </div>    


                <div class="row col-sm-12">
                 <div class="form-group col-sm-6"  style="font-size: 15px;">   
                        <input type="checkbox" name="HelpCheckbox" id="chkBoxHelp" value="Help">
                           Address can only viewed by invited guest 
                        <div id="txtAge" style="display: none; border:1px solid #c5c3c3; background-color: #f8f8f8; border-radius: 10px; font-size: 15px;">
                          <input type="checkbox" name="" style="margin-top: 17px; margin-left: 20px; font-size: 16px;"> some
                          <div class="line-divider" style="margin-top: 10px;"></div>
                          <input type="checkbox" name="" style="margin-top: 17px; margin-left: 20px; font-size: 16px;">text
                        </div>   
                  </div>  
                   <div class="form-group col-sm-6" style="font-size: 15px;">   
                        <input type="checkbox" name="test"  id="test6" >
                          Invited guest can share 
                  </div>
                            <!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <input type="checkbox" name="" >  wowhubb
                                      </div>
                                      <div class="modal-body">
                                        <input type="checkbox" name="" >  wowhubb Checkbox is checked
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                  
              </div> 

               <div class="form-group col-sm-6"  style="font-size: 15px;">                    
                      <input type="radio" name="event_days" id='first_day' value="1">
                      1 Day Event  
                      <input type="radio" name="event_days" id='second_day' value="2">
                      2 Days   
                      <input type="radio" name="event_days" id='third_day' value="3">
                      3 Days 
              </div> 
              <div class="form-group col-sm-6" style="font-size: 15px;">  
                <select id="days">
                  <option  value="select">select</option>
                  <option value="day1">day1</option>
                  <option value="day2">day2</option>
                  <option value="day3">day3</option>
                  <option value="day4">day4</option>
                </select>
              </div>            
                            <div class='form-group col-sm-12' style="margin-top: 30px;">
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </div>
        </fieldset>
                <!-- Form Step 1 -->        
              
              <!-- Form Step 1 -->                 

              <!-- Form Step 2 -->
       
         <fieldset>           
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="57.12" aria-valuemin="0" aria-valuemax="100" style="width:57.12%">
                  </div>
                </div>
                <!-- Progress Bar -->
                <div class="row">
                  <div class="col-md-12">
                      <div class="pull-left">
                          <h4> <button type="button" class="btn btn-next" style="background-color: transparent; padding: 0px; color:#e4297e;"><a style="text-decoration: underline; font-size:20px;">Skip</a></button></h4>   
                       </div> 
                       <div class="pull-right">
                          <h4> <span>Step 4 - 7</span></h4>   
                       </div> 
                  </div> 
               </div>          
                 <div id="exTab2">                    
                  <ul class="nav nav-tabs">
                        <li style="display:none;" class="day1" >
                          <a href="#1" data-toggle="tab" >Day1</a>
                        </li>
                        <li style="display:none;" class="day2">
                          <a href="#2" data-toggle="tab" >Day 2</a>
                        </li>
                        <li style="display:none;" class="day3">
                          <a href="#3" data-toggle="tab" >Day 3</a>
                        </li>
                  </ul>
            <div class="tab-content">             
                 <div class="tab-pane" id="1" >  
                      <div class="form-group col-md-12">
                         <table id="dataTable">
                            <tr>                         
                                <td>                              
                                  <input type="text" name="from_time_day1[]" class="start_time col-md-2 form-control" placeholder="Start Time" />        
                               </td>
                               <td>    
                                  <input type="text" name="to_time_day1[]" class="form-control" placeholder="End Time" >      
                               </td>
                               <td>                              
                                  <input type="text" name="event_day1[]" class="col-md-3 form-control" placeholder="Topic" >           
                              </td>
                              <td>           
                                  <input type="text" name="coordinate_name_day1[]" class="col-md-3 form-control" placeholder="Coordinator" >    
                              </td> 
                            </tr>  
                         </table>  
                          <div class="form-group col-md-12" >                        
                             <input type="button" id="btnAdd" onClick="addRow('dataTable')"  value="Add" class="bt" /> 
                         </div>      
                     </div>                    
                 </div>                        
                        <!-- Day 2 -->
                          <div class="tab-pane" id="2" >
                             <div class="form-group col-md-12" >  
                         <table id="dataTable2" >
                            <tr>                         
                                <td>                              
                                  <input type="text" name="from_time_day2[]" class="start_time col-md-2 form-control" placeholder="Start Time">        
                               </td>
                               <td>    
                                  <input type="text" name="to_time_day2[]" class="end_time col-md-2 form-control" placeholder="End Time">      
                               </td>
                               <td>                              
                                  <input type="text" name="event_day2[]" class="col-md-3 form-control" placeholder="Topic">           
                              </td>
                              <td>           
                                  <input type="text" name="coordinate_name_day2[]" class="col-md-3 form-control" placeholder="Coordinator">    
                              </td> 
                            </tr>  
                         </table>  
                          <div class="form-group col-md-12" >                        
                             <input type="button" id="btnAdd2" onClick="addRow2('dataTable2')"  value="Add" class="bt" /> 
                         </div>      
                     </div>   
                          </div>
                          <!-- Day 3 -->
                          <div class="tab-pane" id="3" style="margin-top: 20px;"> 
                              <div class="form-group col-md-12" >  
                         <table id="dataTable3" >
                            <tr>                         
                                <td>                              
                                  <input type="text" name="from_time_day3[]" class="start_time col-md-2 form-control" placeholder="Start Time">        
                               </td>
                               <td>    
                                  <input type="text" name="to_time_day3[]" class="end_time col-md-2 form-control" placeholder="End Time">      
                               </td>
                               <td>                              
                                  <input type="text" name="event_day3[]" class="col-md-3 form-control" placeholder="Topic">           
                              </td>
                              <td>           
                                  <input type="text" name="coordinate_name_day3[]" class="col-md-3 form-control" placeholder="Coordinator">    
                              </td> 
                            </tr>  
                         </table>  
                          <div class="form-group col-md-12" >                        
                             <input type="button" id="btnAdd3" onClick="addRow3('dataTable3')"  value="Add" class="bt" /> 
                         </div>      
                     </div>   

                          </div>
       </div>
                    </div>
                  
                  <div class='form-group col-sm-12' style="margin-top: 30px;">
                                <div class="form-wizard-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-next">Next</button>
                                </div>
                  </div> 
      
        </fieldset>
 </form>  
              <!-- Form Step 3 -->
    
      
              <!-- Form Step 3 -->
              
              <!-- Form Step 4 -->
            
               <!-- Form Step 5 -->

       
 <!-- </form> -->
                <!-- Form Step 7 -->
          
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
    </div>-->
    
 

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
    <!-- model popup bootstrap --> 
    <script src="<?php echo base_url('assets/js/bootstrap3.3.4.min.js')?>"></script>

    <script>
      
        $('body').on('focus',".event_date", function(){
             $(this).datetimepicker
             ({
                datepicker:false,   //12 hours time format 
                format:'g:i A',
                formatTime: 'g:i A',
                 step: 30, 
                // mask:'29:59 99', 
                 showTimezone: true,   
                  timezone: "-0200",
                ampm: true                        
             });

            });


        $(document).ready(function() {
      $('#days').on('change',function() {
        if (this.value == 'day1') {           
            $('.day1').show();
            $('.day2').hide();
            $('.day3').hide();
        }
        else if (this.value == 'day2') {
            $('.day1').show();
            $('.day2').show();
            $('.day3').hide();
        }
        else if (this.value == 'day3') {
            $('.day1').show();
            $('.day2').show();
            $('.day3').show();
        }
    });
  });


      $(document).ready(function(){
         var checked_status = this.checked;
          $('#lettertyp6').click(function(){
         if(checked_status == true) {
            $('#typ6').show();
            }
            else{
            $('#typ6').hide();
          }
          }); 
          }); 
        function addRow(tableID)
          {
              var table = document.getElementById(tableID);
              var rowCount = table.rows.length;
              if(rowCount < 3)  // limit the user from creating fields more than your limits
              {                 
                  var row = table.insertRow(rowCount);
                  var colCount = table.rows[0].cells.length;
                  for(var i=0; i <colCount; i++) 
                  {
                    var newcell = row.insertCell(i);
                    newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                  }
              }   else
                      {
                         alert("Maximum 3 Event only");                   
                      }
         }
         
               function addRow2(tableID)
          {
              var table = document.getElementById(tableID);
              var rowCount = table.rows.length;
              if(rowCount < 3)  // limit the user from creating fields more than your limits
              {                 
                  var row = table.insertRow(rowCount);
                  var colCount = table.rows[0].cells.length;
                  for(var i=0; i <colCount; i++) 
                  {
                    var newcell = row.insertCell(i);
                    newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                  }
              }   else
                      {
                         alert("Maximum 3 Event only");                   
                      }
         }

           function addRow3(tableID)
          {
              var table = document.getElementById(tableID);
              var rowCount = table.rows.length;
              if(rowCount < 3)  // limit the user from creating fields more than your limits
              {                 
                  var row = table.insertRow(rowCount);
                  var colCount = table.rows[0].cells.length;
                  for(var i=0; i <colCount; i++) 
                  {
                    var newcell = row.insertCell(i);
                    newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                  }
              }   else
                      {
                         alert("Maximum 3 Event only");                   
                      }
         }
      //event days radio button 
    /*  $(document).ready(function() {
      $('input[type=radio][name=event_days]').change(function() {
        if (this.value == '1') {           
            $('.day1').show();
            $('.day2').hide();
            $('.day3').hide();
        }
        else if (this.value == '2') {
            $('.day1').show();
            $('.day2').show();
            $('.day3').hide();
        }
        else if (this.value == '3') {
            $('.day1').show();
            $('.day2').show();
            $('.day3').show();
        }
    });
  }); */
      
      $("#event_date").datetimepicker({
              format:'M-d-Y g:i A',
                formatTime: 'g:i A',
                mask:'29:59 99',    
                ampm: true,
                minDate: 0                   
            });
        //validation
         $("test").validate({
        rules: {
            cover_page: {
                required: true                
            }
          },
           messages: {
             cover_page: "Please specify the Zip Code.",
           },
            });
       $(document).ready(function () {
    $('#chkBoxHelp').click(function () {
        if ($(this).is(':checked')) {
            $("#txtAge").dialog({
                close: function () {
                    $('#chkBoxHelp').prop('checked', false);
                }
            });
        } else {
            $("#txtAge").dialog('close');
        }
    });
});
     //model popup
     $('input[type="checkbox"][name=test]').on('change', function(e){
     if(e.target.checked){
     $('#myModal').modal();
   }
});
          
    
          
       //date time format
           $("#datepicker_from").datetimepicker({             
                format:'M-d-Y g:i A',
                formatTime: 'g:i A',
                mask:'29:59 99',    
                ampm: true,
                minDate: 0      
            });

            $("#datepicker_to").datetimepicker({      
                format:'M-d-Y g:i A',
                formatTime: 'g:i A',
                mask:'29:59 99',    
                ampm: true,
                minDate: 0         
            }); 
    

        
               
        </script>
    
  </body>

</html>
