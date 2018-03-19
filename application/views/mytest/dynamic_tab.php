<?php
ini_set('default_charset', 'UTF-8');

$html = 'https://stackoverflow.com/';

// $tags = get_meta_tags('https://www.w3schools.com/html/');

// echo $tags['keywords'];     

libxml_use_internal_errors(true);
$c = file_get_contents("https://www.w3schools.com/");
$d = new DomDocument();
$d->loadHTML($c);
$xp = new domxpath($d);
$length = $xp->query("//meta[@property='og:title']" );
var_dump($length);
if($length == 'true')
{
  echo "true";
}
else
{
  echo "false";
}
// foreach ($xp->query("//meta[@property='og:title']") as $el) {
//     echo $el->getAttribute("content");
// }
// foreach ($xp->query("//meta[@property='og:description']") as $el) {
//     echo $el->getAttribute("content");
// }


?>

<!-- <img height="150px" width="150px" src="https://assets-cdn.github.com/images/modules/open_graph/github-logo.png"  > -->

<!DOCTYPE html>
<html >
<head>

  
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/select2.min.css')?>" />
<style>
.alert-success-alt {
  border-color: #694D9F;background: #694D9F;color: #fff; 
  }
</style>
</head>


    <body>

      <!-- multiple option select -->
       <!-- <form action="<?php echo base_url('searchfriends/create_group'); ?>"> -->
                           

                            <div class="row">   
                              <div class="form-group col-xs-3">
                                <label for="date-to" class="">Add Some People</label>
                                <select id="select-client" class="form-control" style="width: 350px;">
                            
                                </select>
                              </div>
                            </div>                            
                            
                          
                                                                                 
                            <div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Create" class="btn btn-primary" style="width:140px;">
                              </div>
                            </div>
        <!-- </form>  -->


      <input type="text" list="cars" />
      <datalist id="cars">
        <option>Volvo</option>
        <option>Saab</option>
        <option>Mercedes</option>
        <option>Audi</option>
      </datalist>
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
        <input type="text" name="date" id="start_date">

        <label> start time</label>
        <input type="text" name="start_time" id="start_time"> <br><br>

        <label> end date </label>
        <input type="text" name="end_date" id="end_date" readonly>

        <label> end time</label>
        <input type="text" name="date" id="end_time">


  <div class="container">
    <div class="row">
        <div class="col-md-12">
         
              <!-- Nav tabs -->
          <ul id="tab-list" class="nav nav-tabs" role="tablist">
            
          </ul>

          <!-- Tab panes -->
          <div id="tab-content" class="tab-content">

            
          
          </div>
        </div>
    </div>
  </div>   
                      
<!-- tab view                       -->


            <div class="col-md-8"> 
                            <!-- Nav tabs category -->
                              <ul class="nav nav-tabs faq-cat-tabs">
                                  <li class="active" style="width: 25%;"><a href="#faq-cat-1" data-toggle="tab" class="text-center">Event Highlights</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-2" data-toggle="tab" class="text-center">Event Schedule</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-3" data-toggle="tab" class="text-center">Event Discussions</a></li>
                                  <li style="width: 25%;"><a href="#faq-cat-4" data-toggle="tab" class="text-center">Event Tours</a></li> 
                              </ul>

                                                          

                              <div class="tab-pane fade" id="faq-cat-2">
                                    <div class="col-md-12 text-center clr" style="margin-top:10px; margin-bottom:10px;">
                                              <h4 style="color:#fff; line-height:30px;">Event Schedule<br>
                                              <span style="font-size:28px;">
                                                 <img src="../assets/images/wow-white-big.png">
                                              
                                              </span></h4>
                                    </div>

                                  
                                    <ul class="nav nav-tabs faq-cat-tabs">
                                      <li class="active"><a href="#faq-cat-5" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day1 
                                       </a></li>
                                      <li><a href="#faq-cat-6" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day2 
                                        </a></li>
                                      <li><a href="#faq-cat-7" data-toggle="tab" class="text-center" style="line-height:16px; font-size:12px; color:#333;">Day3 </a></li>
                                    </ul>
                                  

                                    <div class="tab-content faq-cat-content">  

                                        <!-- day1       -->
                                        <div class="tab-pane active in fade" id="faq-cat-5">
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                    hgjghjg                                                    
                                                                  
                                                      <br>

                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                 
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                      
                                                      </strong><br>Event Facilitator:
                                                    
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong></strong><br>
                                                    </td>
                                                </tr>

                                               

                                                
                                            </tbody>
                                          </table>
                                        </div>

                                        <!-- day2 -->

                                          <div class="tab-pane fade" id="faq-cat-6"> 

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                                                  
                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                              
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                       
                                                      </strong><br>
                                                    
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong>hhkhjk</strong><br>
                                                    </td>
                                                </tr>

                                               

                                            </tbody>
                                          </table>

                                          </div>

                                          <!-- day 3  -->
                                          <div class="tab-pane fade" id="faq-cat-7"> 

                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                  <td height="40" colspan="3" align="center" valign="middle" bgcolor="#f9f9f9">
                                                    <strong style="font-size:16px;">Event Duration
                                                      <br>
                                                                                
                                                    </strong>
                                                  </td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" height="40" bgcolor="#fff"><strong>Event Itinerary Time</strong></td>
                                                  <td width="51%" bgcolor="#fff"><strong>Event Topic/Agenda</strong></td>
                                                  <td width="19%" height="40" bgcolor="#fff"><strong>Event Location</strong></td>
                                                </tr>

                                                
                                                <tr>
                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>
                                                       jgjhgj
                                                      </strong><br>
                                                     jhjhk 
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9">
                                                      <strong>jhkhk
                                                      </strong>
                                                    </td>

                                                    <td height="40" bgcolor="#f9f9f9"><strong></strong><br>
                                                    </td>
                                                </tr>

                                                
                                            </tbody>
                                          </table>

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
<script src="<?php echo base_url('assets/js/moment.js')?>"></script> 
 <script src="<?php echo base_url('assets/js/select2.min.js')?>"></script> 
 <script>

// select search option
var base_url = '<?php echo base_url() ?>';

var studentSelect = $('#select-client');

var data=[{
full_name:"chirag patel",
id:"patel"
},{
full_name:"patel",
id:"patel1"
}]

for(var i=0;i<data.length;i++){
var option = new Option(data[i].full_name, data[i].id, true, true);
studentSelect.append(option).trigger('change');
}

// manually trigger the `select2:select` event
studentSelect.trigger({
  type: 'select2:select',
  params: {
    data: data
  }
  
});


    function formatRepo (repo)
      {
          return repo.firstname;
      }

  function formatRepoSelection (repo) {
    return repo.firstname || repo.text;
  }

$("#select-client").select2({
           
      multiple:true,

            ajax: {

                    url: base_url+'searchfriends/search_friends/',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                      return {
                        q: params.term
                      };
                    },
                    processResults: function (data) {     
                      return {
                        results: data.message
                      };
                    },
                    cache: true
                  },

                  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
                  minimumInputLength: 1,
                  templateResult: formatRepo, // omitted for brevity, see the source of this page
                  templateSelection: formatRepoSelection, // omitted for brevity, see the source of this page
                  placeholder: "Enter name"
});



 $("#end_time").datetimepicker(
            { 
                datepicker:false,   //12 hours time format 
                format:'H:i A',
                formatTime: 'H:i A',
                mask:'29:59 99',  
                step: 5,   
                ampm: true 
             });

  $("#start_time").datetimepicker(
            { 
                datepicker:false,   //12 hours time format 
                format:'H:i A',
                formatTime: 'H:i A',
                mask:'29:59 99',  
                step: 5,   
                ampm: true 
             });


$(function(){

//   $.datetimepicker.setDateFormatter({
//     parseDate: function (date, format) {
//         var d = moment(date, format);
//         return d.isValid() ? d.toDate() : false;
//     },
    
//     formatDate: function (date, format) {
//         return moment(date).format(format);
//     }
// });

  $('#start_date').datetimepicker({
  timepicker:false,
  minDate:0,
  format:'M-d-Y',
  onChangeDateTime:function(dp,$input){

    var day_count= $('select').find('option:selected').val();
    

    var startdate = moment(dp).format("M/D/Y");
    var new_date = moment(startdate);
    var enddate = new_date.add(day_count-1, 'days').format('MMM-DD-YYYY');
   
    $('#end_date').val(enddate);

    for(var i=1;i<=day_count;i++)
    {
      var startdate = moment(dp).format("M/D/Y");
      var new_date = moment(startdate);

      $('#tab-list #'+i).text(new_date.add(i-1, 'days').format('ddd, MMM Do'));
       
    }

  } 

});
});


// end date

$(function(){

  $('#end_date').datetimepicker({
  timepicker:false,
  format:'M-d-Y',
  onChangeDateTime:function(dp,$input){
    // alert($input.val())
  }
});
});





// pass value with in same form
$('#start_time').change(function() {
    $('#day1_start_time').val($(this).val());
});


      // $(document).on('click',"#add_address_dynamic",function(){
        $(".add_address_dynamic").click(function()
        {           
          
          alert('test');
            var nxtvenue_count = $(this).data("nxt_event_venue"); 
            var nxtvenueHTML = generete_dynamic_venue(nxtvenue_count);
            $("#day1").append(nxtvenueHTML);            
            
              // $('#day1_dynamicadd_'+nxtvenue_count+' .venueselectpicker').append(option_template);
              // nxtvenue_count++;
           $(this).data('nxt_event_venue', nxtvenue_count); //update data nxtportion   
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
         
        $('#tab-list').append($('<li><a style="text-align:center;" href="#tab' + tabID + '" role="tab" data-toggle="tab"> Day ' + tabID + ' <br><span style="margin-top:10px;" id="' + tabID + '"> </span></a></li>'));

        $('#tab-content').append($('<div class=" tab-pane fade in active tab_' + tabID + '" id="tab' + tabID + '">  <div class="form-group col-sm-12 text-center"> <div class="form-group col-sm-12 text-center" style="background:#f5f5f5; padding:15px 10px;"> <div style="width:10%" class="pull-left"><span style="color:#e9e9e9;">width</span></div> <div style="width:17%" class="pull-left"> <label>Event Start Time</label> </div> <div style="width:12%" class="pull-left"> <input type="text" id="day1_start_time" name="event_starttime"  class="form-control" /> </div> <div style="width:17%; margin-left:35px;" class="pull-left"> <label>Event End Time</label> </div> <div style="width:12%" class="pull-left"> <input type="text" id="day1_end_time" name="event_endtime"  class="form-control" placeholder="8:14"  /> </div> </div> </div> <div id="day_' +tabID+' "> <div class="form-group col-sm-12" id="day1_dynamicadd_1"> <div class="col-md-12"> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary Start Time</span></label> </div> <div style="width:30%" class="pull-left"> <select  id="from_hour_1" name="from_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="1">1 </option> <option value="2">2 </option> <option value="3">3 </option> <option value="4">4 </option> <option value="5">5 </option> <option value="6">6 </option> <option value="7">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select> </div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="from_min_1" name="from_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select> </div> <div style="width:30%" class="pull-left"> <select id="from_sec_1" name="from_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select> </div> </div> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label> <span style="font-size:13px; color:#333;">Itinerary End Time</span></label> </div> <div style="width:30%" class="pull-left"> <select id="to_hour_1" name="to_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="1">1 </option> <option value="2">2 </option> <option value="3">3 </option> <option value="4">4 </option> <option value="5">5 </option> <option value="6">6 </option> <option value="7">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select> </div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="to_min_1" name="to_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select> </div> <div style="width:30%" class="pull-left"> <select id="to_sec_1" name="to_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select> </div> </div> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Event Agenda</span></label> <input type="text" id="agenta_1" name="agenda1[]"  class="form-control"  /> </div> </div> <div class="col-md-12"> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Facilitator</span></label> <input type="text" id="facilitator_name_1" name="facilitator_name_day1[]"  class="form-control"  /> </div> <div class="col-md-8"> <label><span style="font-size:13px; color:#333;">Event Location Venue</span></label> <select id="location_1" name="location_day1[]" class="form-group venueselectpicker" style="width:100%; padding: 7px 10px; border-radius: 5px;"> </select> </div> </div> </div> </div> <div class="form-group col-md-12" > <a href="JavaScript:void(0);" class="add_address_dynamic"  data-nxt_event_venue="2" > <i class="fa fa-plus-circle"></i> Add more event program time slot</a> </div> </div>'));
         
          tabID++;
      }

       i++;

       // $(document).on('click',"#add_address_dynamic",function(){
        $(".add_address_dynamic").click(function()
        {           
          
          // alert($(this).parents('[id^=tab]').find('[id^=day_]').html());

            var nxtvenue_count = $(this).data("nxt_event_venue"); 
            var nxtvenueHTML = generete_dynamic_venue(nxtvenue_count);

            
            $(this).parents("div[class*=' tab_']").find('[id^=day_]').append(nxtvenueHTML);            
            
              // $('#day1_dynamicadd_'+nxtvenue_count+' .venueselectpicker').append(option_template);
              // nxtvenue_count++;
            $(this).data('nxt_event_venue', nxtvenue_count); //update data nxtportion   
       });

     });


   

    
   
});

//dynamic add event highlights first day

function generete_dynamic_venue(count){

  var day1  = ' <div class="form-group col-sm-12" id="day1_dynamicadd_'+count+'"> <div class="col-md-12"> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary Start Time</span></label></div> <div style="width:30%" class="pull-left"> <select  id="from_hour_'+count+'" name="from_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="0">1 </option> <option value="1">2 </option> <option value="2">3 </option> <option value="3">4 </option> <option value="4">5 </option> <option value="5">6 </option> <option value="6">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select></div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="from_min_'+count+'" name="from_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select></div> <div style="width:30%" class="pull-left"> <select id="from_sec_'+count+'" name="from_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select></div> </div> <div class="col-md-4"> <div style="width:100%" class="pull-left"> <label><span style="font-size:13px; color:#333;">Itinerary End Time</span></label></div> <div style="width:30%" class="pull-left"> <select id="to_hour_'+count+'" name="to_hour_day1[]" class="form-group selectpicker" style="width:100%; padding: 7px 5px; border-radius: 5px;"> <option value="0">1 </option> <option value="1">2 </option> <option value="2">3 </option> <option value="3">4 </option> <option value="4">5 </option> <option value="5">6 </option> <option value="6">7 </option> <option value="8">8 </option> <option value="9">9 </option> <option value="10">10 </option> <option value="11">11 </option> <option value="12">12 </option> </select></div> <div style="width:30%;margin:0 10px;" class="pull-left"> <select id="to_min_'+count+'" name="to_min_day1[]" class="form-group selectpicker" style="width:100%;   padding: 7px 5px; border-radius: 5px;"> <option value="00">:00 </option> <option value="05">:05 </option> <option value="10">:10 </option> <option value="15">:15 </option> <option value="20">:20 </option> <option value="25">:25 </option> <option value="30">:30 </option> <option value="35">:35 </option> <option value="40">:40 </option> <option value="45">:45 </option> <option value="50">:50 </option> <option value="55">:55 </option> </select></div> <div style="width:30%" class="pull-left"> <select id="to_sec_'+count+'" name="to_sec_day1[]" class="form-group selectpicker" style="width:100%;  padding: 7px 5px; border-radius: 5px;"> <option value="am">AM </option> <option value="pm">PM </option> </select></div> </div> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Event Agenda</span></label> <input type="text" id="agenta_1" name="agenda1[]"  class="form-control"  /> </div> </div> <div class="col-md-12"> <div class="col-md-4"> <label><span style="font-size:13px; color:#333;">Facilitator</span></label> <input type="text" id="facilitator_name_'+count+'" name="facilitator_name_day1[]"  class="form-control"  /> </div> <div class="col-md-8"> <label><span style="font-size:13px; color:#333;">Event Location Venue</span></label> <select id="location_1" name="location_day1[]" class="form-group venueselectpicker" style="width:100%; padding: 7px 10px; border-radius: 5px;"> </select> </div> </div> </div>'; 

    return day1;
}

// $(document).ready(function(){
  
//         $("#add_address_dynamic").click(function()
//         {            
          
//            var nxtvenue_count = $(this).data("nxt_event_venue"); 
//            var nxtvenueHTML = generete_dynamic_venue(nxtvenue_count);
//            $("#day1").append(nxtvenueHTML);            
            
//              // $('#day1_dynamicadd_'+nxtvenue_count+' .venueselectpicker').append(option_template);
//              // nxtvenue_count++;
//           $(this).data('nxt_event_venue', nxtvenue_count); //update data nxtportion   
//         });
   
// });

</script>
</body>

</html>