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
<style>
.alert-success-alt {
	border-color: #694D9F;background: #694D9F;color: #fff; 
	}
</style>
</head>


		<body>

        <lavel>no.of days </lavel>

        <select id="btn-add-tab">

          <option> option</option>
          <option value="1"> day1</option>
          <option value="2"> day2</option>
          <option value="3"> day3</option>
          <option value="4"> day4</option>
          <option value="5"> day5</option>
          <option value="6"> day6</option>
          <option value="7"> day7</option>

        </select> <br><br>

        <label> start date</label>
        <input type="date" name="date" id="start_date">

        <label> start time</label>
        <input type="time" name="date" id="start_time"> <br><br>

        <label> end date </label>
        <input type="date" name="end_date" id="end_date">

        <label> end time</label>
        <input type="time" name="date" id="end_time">


	<div class="container">
		<div class="row">
				<div class="col-md-12">
					<p>
						<!-- <button id="btn-add-tab" type="button" class="btn btn-primary pull-right">Add Tab</button> -->
					</p>
							<!-- Nav tabs -->
					<ul id="tab-list" class="nav nav-tabs" role="tablist">
						<!-- <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Day 1</a></li> -->
					</ul>

					<!-- Tab panes -->
					<div id="tab-content" class="tab-content">

						<!-- <div class="tab-pane fade in active" id="tab1">

              Tab 1 content

                      <div class='form-group col-sm-12 text-center'>
                            <div class='form-group col-sm-12 text-center' style="background:#f5f5f5; padding:15px 10px;">
                            <div style="width:10%" class="pull-left"><span style="color:#e9e9e9;">width</span></div>
                              <div style="width:17%" class="pull-left">
                                <label>Event Start Time</label>
                              </div>
                              <div style="width:12%" class="pull-left">
                                  <input type='text' id="day1_start_time" name="event_starttime"  class="form-control" placeholder="8:14"  />
                              </div>
                              
                                <div style="width:17%; margin-left:35px;" class="pull-left">
                                   <label>Event End Time</label>
                                </div>
                              <div style="width:12%" class="pull-left">
                                  <input type='text' id="day1_end_time" name="event_endtime"  class="form-control" placeholder="8:14"  />
                              </div>
                              
                                </div>
                        </div>

                        <div id="day1">                 
                                <div class='form-group col-sm-12' id="day1_dynamicadd_1">                     
                                    <div class="col-md-12">            
                                        <div class="col-md-4">
                                          <div style="width:100%" class="pull-left">
                                              <label><span style="font-size:13px; color:#333;">Itinerary Start Time</span></label>
                                          </div>
                                              <div style="width:30%" class="pull-left">
                                                <select  id="from_hour_1" name="from_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> 
                                                               <option value="0">1 </option> 
                                                                <option value="1">2 </option>
                                                                <option value="2">3 </option>
                                                                <option value="3">4 </option>
                                                                <option value="4">5 </option>
                                                                <option value="5">6 </option>
                                                                <option value="6">7 </option>
                                                                <option value="8">8 </option>
                                                                <option value="9">9 </option>
                                                                <option value="10">10 </option>
                                                                <option value="11">11 </option>
                                                                <option value="12">12 </option>
                                                                
                                                </select>
                                              </div>

                                              <div style="width:30%;margin:0 10px;" class="pull-left">
                                              <select id="from_min_1" name="from_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> 
                                                               <option value="00">:00 </option> 
                                                                <option value="05">:05 </option>
                                                                <option value="10">:10 </option>
                                                                <option value="15">:15 </option>
                                                                <option value="20">:20 </option>
                                                                <option value="25">:25 </option>
                                                                <option value="30">:30 </option>
                                                                <option value="35">:35 </option>
                                                                <option value="40">:40 </option>
                                                                <option value="45">:45 </option>
                                                                <option value="50">:50 </option>
                                                                <option value="55">:55 </option>
                                                               
                                                                
                                                </select>
                                            </div>
                        
                                              <div style="width:30%" class="pull-left">
                                                <select id="from_sec_1" name="from_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> 
                                                               <option value="am">AM </option> 
                                                                <option value="pm">PM </option>
                                                                
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div style="width:100%" class="pull-left">
                                                <label><span style="font-size:13px; color:#333;">Itinerary End Time</span></label>
                                              </div>
                                            <div style="width:30%" class="pull-left">
                                              <select id="to_hour_1" name="to_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> 
                                                           <option value="0">1 </option> 
                                                            <option value="1">2 </option>
                                                            <option value="2">3 </option>
                                                            <option value="3">4 </option>
                                                            <option value="4">5 </option>
                                                            <option value="5">6 </option>
                                                            <option value="6">7 </option>
                                                            <option value="8">8 </option>
                                                            <option value="9">9 </option>
                                                            <option value="10">10 </option>
                                                            <option value="11">11 </option>
                                                            <option value="12">12 </option>
                                                            
                                              </select>
                                          </div>

                                                <div style="width:30%;margin:0 10px;" class="pull-left">
                                                  <select id="to_min_1" name="to_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> 
                                                                <option value="00">:00 </option> 
                                                                <option value="05">:05 </option>
                                                                <option value="10">:10 </option>
                                                                <option value="15">:15 </option>
                                                                <option value="20">:20 </option>
                                                                <option value="25">:25 </option>
                                                                <option value="30">:30 </option>
                                                                <option value="35">:35 </option>
                                                                <option value="40">:40 </option>
                                                                <option value="45">:45 </option>
                                                                <option value="50">:50 </option>
                                                                <option value="55">:55 </option>                                         
                                                  </select>
                                              </div>
                                              <div style="width:30%" class="pull-left">
                                                <select id="to_sec_1" name="to_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> 
                                                                     <option value="am">AM </option> 
                                                                      <option value="pm">PM </option>
                                                                      
                                                  </select>
                                            </div>
                                          </div>
                                          <div class="col-md-4">
                                            <label><span style="font-size:13px; color:#333;">Event Agenda</span></label>
                                             <input type='text' id="agenta_1" name="agenda1[]"  class="form-control"  />
                                          </div>
                                  </div>
                                      <div class="col-md-12">
                                        <div class="col-md-4">
                                          <label><span style="font-size:13px; color:#333;">Facilitator</span></label>
                                          <input type='text' id="facilitator_name_1" name="facilitator_name_day1[]"  class="form-control"  />
                                        </div>
                                        <div class="col-md-8">
                                          <label><span style="font-size:13px; color:#333;">Event Location Venue</span></label>
                                          <select id="location_1" name="location_day1[]" class="form-group venueselectpicker" style="width:100%; padding: 7px 10px; border-radius: 5px;">                                           
                                          </select>
                                        </div>
                                      </div>
                                </div>

                        </div> 

                    <div class="form-group col-md-12" >                        
                             <a href="JavaScript:void(0);" id="btnAdd1"  value="Add"  data-nxt_event_venue="2" /> 
                             <i class="fa fa-plus-circle"></i> Add more event program time slot</a>
                    </div>

            </div> -->
					
				  </div>
			  </div>
		</div>
	</div>
		


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/additional-methods.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert2.all.js') ?>"></script> 
<!--<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> -->
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>  
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.js')?>"></script> 
 
 <script>

// pass value with in same form
$('#start_time').change(function() {
    $('#day1_start_time').val($(this).val());
});



$(document).ready(function() {
    $('#btn-add-tab').on('change',function()
     {
        var i = 0;
         var selectedValue = $(this).val();  
          $('#tab-list').html('');        //clear tab data before select option
          $('#tab-content').html('');             
          var tabID = 1;

      for(i=0;i<selectedValue;i++)
      {    
         
        $('#tab-list').append($('<li><a href="#tab' + tabID + '" role="tab" data-toggle="tab">Day ' + tabID + '</a></li>'));

        $('#tab-content').append($('<div class=" tab-pane fade in active" id="tab' + tabID + '">  <div class="form-group col-sm-12 text-center"> <div class="form-group col-sm-12 text-center" style="background:#f5f5f5; padding:15px 10px;"> <div style="width:10%" class="pull-left"><span style="color:#e9e9e9;">width</span></div> <div style="width:17%" class="pull-left"> <label>Event Start Time</label> </div> <div style="width:12%" class="pull-left"> <input type="text" id="day1_start_time" name="event_starttime"  class="form-control" /> </div> <div style="width:17%; margin-left:35px;" class="pull-left"> <label>Event End Time</label> </div> <div style="width:12%" class="pull-left"> <input type="text" id="day1_end_time" name="event_endtime"  class="form-control" placeholder="8:14"  /> </div> </div> </div> <div id="day1"> <div class="form-group col-sm-12" id="day1_dynamicadd_1"> <div class="col-md-12"> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary Start Time</span></label> </div> <div style="width:30%" class="pull-left"> <select  id="from_hour_1" name="from_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="1">1 </option> <option value="2">2 </option> <option value="3">3 </option> <option value="4">4 </option> <option value="5">5 </option> <option value="6">6 </option> <option value="7">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select> </div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="from_min_1" name="from_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select> </div> <div style="width:30%" class="pull-left"> <select id="from_sec_1" name="from_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select> </div> </div> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label> <span style="font-size:13px; color:#333;">Itinerary End Time</span></label> </div> <div style="width:30%" class="pull-left"> <select id="to_hour_1" name="to_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="1">1 </option> <option value="2">2 </option> <option value="3">3 </option> <option value="4">4 </option> <option value="5">5 </option> <option value="6">6 </option> <option value="7">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select> </div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="to_min_1" name="to_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select> </div> <div style="width:30%" class="pull-left"> <select id="to_sec_1" name="to_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select> </div> </div> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Event Agenda</span></label> <input type="text" id="agenta_1" name="agenda1[]"  class="form-control"  /> </div> </div> <div class="col-md-12"> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Facilitator</span></label> <input type="text" id="facilitator_name_1" name="facilitator_name_day1[]"  class="form-control"  /> </div> <div class="col-md-8"> <label><span style="font-size:13px; color:#333;">Event Location Venue</span></label> <select id="location_1" name="location_day1[]" class="form-group venueselectpicker" style="width:100%; padding: 7px 10px; border-radius: 5px;"> </select> </div> </div> </div> </div> <div class="form-group col-md-12" > <a href="JavaScript:void(0);" id="add_address_dynamic"  data-nxt_event_venue="2" /> <i class="fa fa-plus-circle"></i> Add more event program time slot</a> </div> </div>'));
         
          tabID++;
      }

       i++;
       	
     });

    
    // var list = document.getElementById("tab-list");
});

//dynamic add event highlights first day

function generete_dynamic_venue(count){

	var day1  = ' <div class="form-group col-sm-12" id="day1_dynamicadd_'+count+'"> <div class="col-md-12"> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary Start Time</span></label></div> <div style="width:30%" class="pull-left"> <select  id="from_hour_'+count+'" name="from_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="0">1 </option> <option value="1">2 </option> <option value="2">3 </option> <option value="3">4 </option> <option value="4">5 </option> <option value="5">6 </option> <option value="6">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select></div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="from_min_'+count+'" name="from_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select></div> <div style="width:30%" class="pull-left"> <select id="from_sec_'+count+'" name="from_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select></div> </div> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary End Time</span></label></div> <div style="width:30%" class="pull-left"> <select id="to_hour_'+count+'" name="to_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="0">1 </option> <option value="1">2 </option> <option value="2">3 </option> <option value="3">4 </option> <option value="4">5 </option> <option value="5">6 </option> <option value="6">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select></div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="to_min_'+count+'" name="to_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select></div> <div style="width:30%" class="pull-left"> <select id="to_sec_'+count+'" name="to_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select></div> </div> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Event Agenda</span></label> <input type="text" id="agenta_1" name="agenda1[]"  class="form-control"  /> </div> </div> <div class="col-md-12"> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Facilitator</span></label> <input type="text" id="facilitator_name_'+count+'" name="facilitator_name_day1[]"  class="form-control"  /> </div> <div class="col-md-8"> <label><span style="font-size:13px; color:#333;">Event Location Venue</span></label> <select id="location_1" name="location_day1[]" class="form-group venueselectpicker" style="width:100%; padding: 7px 10px; border-radius: 5px;"> </select> </div> </div> </div>'; 

		return day1;
}

$(document).ready(function(){
  
        $("#add_address_dynamic").click(function()
        {		      	
        	
		        var nxtvenue_count = $(this).data("nxt_event_venue"); 
		        var nxtvenueHTML = generete_dynamic_venue(nxtvenue_count);
		        $("#day1").append(nxtvenueHTML);		        
		        
        	    // $('#day1_dynamicadd_'+nxtvenue_count+' .venueselectpicker').append(option_template);
        	    // nxtvenue_count++;
		       $(this).data('nxt_event_venue', nxtvenue_count); //update data nxtportion   
   		 });
   
});

</script>
</body>

</html>