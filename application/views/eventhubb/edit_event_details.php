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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/wickedpicker.css')?>" />

<link rel="stylesheet" href="<?php echo base_url ('assets/css/custom/css/form-wizard-blue.css') ?>">
<link rel="stylesheet" href="<?php echo base_url ('assets/css/theme-styles.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/animate.css')?>" />

<!-- file upload -->

<!-- CSS adjustments for browsers with JavaScript disabled -->

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>

<style type="text/css">
	
	a.delete { position:absolute;width:30px;height:30px; color: #000; }
	.image:hover a.delete { display:block; }

	
	
	
	
	.btn-file {
		position: relative;
		overflow: hidden;
	}
	.form-body-classic .form-control {
		margin: 0;
		padding: 6px 12px;
		background: #fff none repeat scroll 0 0;
		border: 1px solid rgb(197, 194, 195);
		border-radius: 4px;
		font-family: 'Source Sans Pro', sans-serif;
		font-size: 14px;
		font-weight: normal;
		color: #333;
		-moz-border-radius: none;
		-webkit-border-radius: none;
		border-radius: none;
		-moz-box-shadow: none;
		-webkit-box-shadow: none;
		box-shadow: none;
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
	
	
	
	.form-group {
		margin-bottom: 5px!important;
	}
	.form-group-1 {
		margin-bottom: 0px;
	}
.form-body-classic.form-wizard .btn-1 {
		min-width: 105px;
		height: 30px;
	    margin: 0;
	    padding: 0 20px;
	    border: none;
	    font-family: 'Source Sans Pro', sans-serif;
	    font-size: 16px;
	    font-weight: normal;
	    line-height:30px;
	    color: #fff;
		background-color:#3A2021;
	    -moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px;
	    text-shadow: none;
	    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
	}
	
img {
    max-width: 200px;
    height: auto;
    display: inline-block;
	}

.remove {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	  width: 200px;
      margin-left: 137px;
	}

.remove:hover {
	  background: white;
	  color: black;
	}
	
.tab {
	  display: none;
	}

.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-bottom: 16px solid blue;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.form-group-1 img {    
    left: 24px;
    position: absolute;
    top: 7px;
}

</style>
</head>

<body class="landing-page">

	<div class="swal"></div>
	

<div class="content-bg-wrap">
  <div class="content-bg"></div>
</div>

<!-- Header
    ================================================= -->
  <header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
        <div class="container"> 
      
          <?php  include('/../includes/header.php'); ?>
        </div>
        <!-- /.container --> 
      </nav>
  </header>
<!--Header End-->
<div class="google-maps"> </div>
<!--Header End-->

<div class="container"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
    <div id="page-contents">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-10 form-wizard form-body-classic form-header-classic" style="min-width:1200px;"> 
           
            
            <h3>Create Your Event</h3>
            <p>Please fill information to a create an event </p>
             <img src="<?php echo base_url('assets/images/banner.jpg'); ?>" class="img-thumbnail"  alt="banner-image"/>
            <!-- Form progress -->
    			<div class="form-wizard-steps form-wizard-tolal-steps-1">
              <div class="form-wizard-progress">
                <div class="form-wizard-progress-line" data-now-value="100" data-number-of-steps="1" style="width: 100%;"></div>
              </div>
              <!-- Step 1 -->
              <div class="form-wizard-step active">
                <div class="form-wizard-step-icon"><i class="fa fa-child" aria-hidden="true"></i></div>
                <p>Event Details</p>
              </div>
              <!-- Step 1 --> 
              
            
              
     </div>
            <!-- Form progress --> 
            <!-- Form Step 1 -->
    <form id="create_event" action="<?php echo base_url('eventhubb/update_eventdetails'); ?>"  method="POST" enctype="multipart/form-data" > 
    	
    	  <fieldset>
                <!-- Progress Bar -->
                <div class="progress">
                  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="14.28" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div>
                </div>

                <!-- Progress Bar -->

                 <div class="col-md-10">
                	<h4> <strong>Spice Up Your Upcoming Event By Uploading  A Promotional Ad Video {!Wowtag}</strong></h4>
            	</div>
                <div class="col-md-2">
                	<h4> <span>Step 1 </span></h4>
            	</div>

        <div class='col-sm-5'>
                  <div class='row'>
                  	<input type='hidden' name="event_id"  class="form-control" value="<?php echo $event->_id; ?>" >

                  	<div class='form-group col-sm-12' style="display: none;" >
                      <label>Event type</label>
                      <input type='text' name="event_type"  class="form-control" value="<?php echo $event->eventtype; ?>" >
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Event Category</label>
                      <input type='text' name="event_category"  class="form-control " value="<?php echo $event->eventcategory; ?>" >
                    </div>
                    <div class='form-group col-sm-12' >
                      <label>Event Name</label>
                      <input type='text'  name="event_name" class="form-control" value="<?php echo $event->eventname; ?>">
                    </div>
                  </div>

            		<div class='row'>
		                    <div class='form-group col-sm-12' >
		                      <label>Event City </label>
		                      <input type='text' id="time_zone" name="time_zone"  class="form-control" value="<?php echo $event->eventtimezone; ?>" >
		                    </div>

		                    <div class="form-group col-sm-12 " style="font-size: 15px;">
				                      <label>Select Event Days</label>
				                    <select name="eventdayscount" id="btn-add-tab" class="form-control " style="background-color:#eff0f1;">
				                      <option value="<?php echo $event->eventdayscount; ?>" ><?php echo $event->eventdayscount; ?></option>
				                      <option value="1">1 Day Event</option>
				                      <option value="2">2 Days Event</option>
				                      <option value="3">3 Days Event</option>
				                      <option value="4">4 Days Event</option>
				                      <option value="5">5 Days Event</option>
				                      <option value="6">6 Days Event</option>
				                      <option value="7">7 Days Event</option>
				                  	</select>
		                    </div>
		               

		                    <div class='form-group col-sm-6' style="width:45%;" >
		                      <label>Event Start Date</label>
		                      <input type='text' id="event_startdate" name="event_startdate" class="form-control" value="<?php 
		                      $timestamp = strtotime($event->eventstartdate);
                                      echo date('M-d-Y', $timestamp); ?>"   />
		                    </div>

		                    <div  class='form-group col-sm-6' style="width:45%; " >
		                      <label>Event Start Time</label>
		                      <input type='text' id="event_startime" name="event_startime" class="form-control" value="<?php 
		                      $timestamp = strtotime($event->eventstartdate);
                                      echo date('g:i A', $timestamp); ?>" />
		                    </div>

		                
		                    <div class='form-group col-sm-6' style="width:45%;" >
		                      <label>Event End Date</label>
		                      <input type='text' id="event_enddate" name="event_enddate"  class="form-control" value="<?php 
		                      $timestamp = strtotime($event->eventenddate);
                                      echo date('M-d-Y', $timestamp); ?>" />
		                    </div>

		                    <div class='form-group col-sm-6' style="width:45%;">
		                      <label>Event End Time</label>
		                      <input type='text' id="event_endtiming" name="event_endtiming"  class="form-control" value="<?php 
		                      $timestamp = strtotime($event->eventenddate);
                                      echo date('g:i A', $timestamp); ?>" />
		                    </div>		                    
		                 
		                   
            		</div>
        </div>

                <div class='col-sm-4'>
	                  <div class='row'>
		                    <div class='form-group col-sm-12'>
		                      <label>Event Description</label>
		                      <textarea type='text' id="description" name="event_description"  class="form-control required " style="min-height:150px;" maxlength="160" placeholder="Describe What Your Event Is All About "  onchange = "cleanspecial_char(this)" ><?php if(isset($event->eventdescription)) { echo $event->eventdescription; }?></textarea>
		                    </div>

		                    <div class='form-group col-sm-12'>
			                      <div class='col-sm-12' style="background-color:#f9f9f9;">
			                        <label>Event Cover Photo <strong style="color: red; font-size: 20px;"> * </strong></label>
			                        <label>Please browse to upload cover photo</label>
			                        <div class="form-group" style="margin-bottom: 10px;"> 
				                        <div class="field" align="left">
				                         		<input type="button" class="btn btn-primary" value="Browse Image..." onclick="document.getElementById('files').click();" />
				                         		<input type="file" style="display:none;" name="cover_img" id="files" class="file" accept="image/*" title="cover image" value="<?php echo $event->coverpageurl; ?>">  
				                        </div> 
			                        </div>	
			                        <div class="remove_img" style="position:relative;">
			                        	<img src="<?php echo $event->coverpageurl; ?>" style="width:160px; height:88px;"  alt="user" class="img-responsive img-thumbnail"/>	
			                        	 <div style="position:absolute; right:185px; top:-22px;">
			                        	 	<a href="#" class="delete">
			                        	 		<img src="<?php echo base_url('assets/images/wow-close.png'); ?>" />
			                        	 	</a>
			                        	 </div>
			                        </div>  

			                      </div>
		                    </div>
	                  </div>
                </div>

               
                <div class='col-sm-12'>
                  <div class="form-wizard-buttons">                   
                    <button type="submit" class="btn btn-next">Update</button>
                  </div>
                </div>

    	</fieldset>
    </form>
 
              <!-- Form Step 1 --> 
         

      
                     
        
          </div>
        </div>
      </div>
    </div>
  </div>
</div>	


<!-- Scripts
    ================================================= --> 
    
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
<script src="<?php echo base_url('assets/js/wickedpicker.js')?>"></script>  

 
<!-- model popup bootstrap --> 
<!-- <script src="<?php echo base_url('assets/js/bootstrap3.3.4.min.js')?>"></script> -->

<script>


 // event start time picker
  // event start time and end time picker
  $("#event_startime").wickedpicker();		
 
  $("#event_endtiming").wickedpicker();

  //event start and end date 

  $('#event_startdate').datetimepicker({
  timepicker:false,
  minDate:0,
  format:'M-d-Y',
   });

  $('#event_enddate').datetimepicker({
  timepicker:false,
  minDate:0,
  format:'M-d-Y',
   });

  // not allow special character
function cleanspecial_char(t) {
            t.value = t.value.toString().replace(/[^a-zA-Z 0-9\n\r]+/g, '');
        }


//image preview and delete step1

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });          
                   
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});


//delete cover image from db shows
$(".delete").click(function(){
    $(".remove_img").remove();
});

//create event form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#create_event", function(e){

        e.preventDefault();         

        
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
		                beforeSend: function()
		                {

		                	swal({
						              title: 'Please Wait...',
						              text: 'Submitting...',
						              toast: true,
						              target: '.swal',              
						             
						              onOpen: () => {
						                swal.showLoading()
					             	 }
					            }); 
		      
		                },
		                
		                success: function(response)
		                {
		                   if(response.status == 'success')
		                   {
		                  
		                    swal({
		                                                 title: "Success!",
		                                                 text: "Your Event Created Successfully...",
		                                                 type: "success",
		                                                 timer: 3000
		                                                 }).then(() => {                     
		                   									 window.location.href = "<?php echo base_url('eventhubb/get_future_eventhubb'); ?>";
		                   								});;  
		                   
		                    }
		                    else 
		                   	{
		                    
		                    	swal("Sorry!", "somethink wrong try again !", "error");
		                  	 }          
		                }

		       });
		
     

 });

 
</script>

</body>
</html>
