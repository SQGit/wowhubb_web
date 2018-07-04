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

<!-- file upload -->

<!-- CSS adjustments for browsers with JavaScript disabled -->

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/><style type="text/css">
	

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
	    font-family: 'Lato', sans-serif;
	    font-size: 16px;
	    font-weight: normal;
	    line-height:30px;
	    color: #fff;
		background-color:#3A2021;
	    -moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px;
	    text-shadow: none;
	    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
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

	img {
    max-width: 200px;
    height: auto;
    display: inline-block;
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
           
            
           
             <img src="../assets/images/banner.jpg" class="img-thumbnail"  alt="banner-image"/>
            <!-- Form progress -->
    
            <!-- Form Step 1 -->
    <form id="create_eventcontact" action="<?php echo base_url('eventhubb/update_eventcontact'); ?>"  method="post" enctype="multipart/form-data" > 
    	
    
    <fieldset>
                
                <div class="col-md-12">
                	<h4> <span>Step 1</span></h4>
            	</div>
            	<input type='hidden' name="event_id"  class="form-control" value="<?php echo $event->_id; ?>" >
                <div style="clear:both;"></div>
                <div class="col-md-9">
                <div class="col-md-6">
                  	<div class="form-group col-sm-12">
	                  <div class="pull-left" style="width:80%;">
	                    <label> Name </label>
	                    <input type="text" class="form-control"  name="eventcontactname" value="<?php if(isset($event->eventcontactname)) { echo $event->eventcontactname; } ?>" >
	                  </div>

	                    <div class="pull-left" style="width:17%; margin-left:3%; margin-top:15px;">                  
	                        <div class="toggle-switch">
	                          <label class="switch">
	                            <input type="checkbox" checked>
	                            <span class="slider round"></span>
	                          </label>
	                        </div>                      
	                    </div>

                  	</div>
                  <div class="form-group col-sm-12">
                   <div class="pull-left" style="width:80%;">
                    <label>Email </label>
                    <input type="text" class="form-control"  name="eventcontactemail" value="<?php echo $this->session->userdata('email'); ?>"  >
                     </div>
                    <div class="pull-left" style="width:17%; margin-left:3%; margin-top:15px;">
                  
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                          </label>
                        </div>
                      
                    </div>
                  </div>
                  <div class="form-group col-sm-12">
                   <div class="pull-left" style="width:80%;">
                    <label>Phone </label>
                    <input type="text" class="form-control"  name="eventcontactphone" value="<?php echo $this->session->userdata('phone'); ?>"  >
                    </div>
                    <div class="pull-left" style="width:17%; margin-left:3%; margin-top:15px;">
                  
                        <div class="toggle-switch">
                          <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                          </label>
                        </div>
                      
                    </div>
                  </div>
                  <div class="form-group col-sm-12">
                    <label>Event Host Message</label>
                    <textarea type="text" class="form-control"  name="message"  ><?php if(isset($event->eventcontactmessage)) { echo $event->eventcontactmessage; } ?></textarea>
                  </div></div>
                  
                  <div class="col-md-6">
                  		<div class="hide_link">
		                  <div class="form-group col-sm-12">
		                    <label> Donation URL </label>
		                    <input type="text" class="form-control"  name="donation_url" value="<?php if(isset($event->donationsurl)) { echo $event->donationsurl; } ?>"  >
		                  </div>
		                  <div class="form-group col-sm-12">
		                    <label>Gift Registry URL </label>
		                    <input type="text" class="form-control"  name="gift_url" value="<?php if(isset($event->giftregistryurl)) { echo $event->giftregistryurl; } ?>"  >
		                  </div>
		                  <div class="form-group col-sm-12">
		                    <label>Other URL </label>
		                    <input type="text" class="form-control"  name="other_url" value="<?php if(isset($event->otherurl)) { echo $event->otherurl; } ?>" >
		                  </div>
             			</div>

		                  <div class="form-group col-sm-12">
		                    <div class="pull-left" style="width:5%; margin-top:15px;">
		                        <input type="checkbox" name="event_no_url" class="no_link" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;"  onchange="valueChanged()"> 
		                      </div>
		                      <div class="pull-left" style="width:90%; margin-left:15px; margin-top:15px; font-size:15px;">Event Don't Have URLs</div>
		                  </div>

                  </div>
                  <div class="col-md-12" style="border:0.5px solid #ccc; margin-top:15px; margin-bottom:15px;"></div>
                   <div class="form-group col-md-12">
                   <div class="form-group col-md-12">
                   <div class="pull-left" style="width:5%;">
                        <input type="checkbox" name="public_share" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:95%; font-size:15px;">Publish &amp; Share on My !Wowhubb Network</div>
                      </div>
                      <div class="form-group col-md-12">
                      <div class="pull-left" style="width:5%;">
                        <input type="checkbox" name="specific_group" id="specific_group" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:95%; font-size:15px;">Publish to Specific Group
                      	<!-- Modal -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                       <input type="checkbox" name="" >  Wowhubb friends group
                                      </div>
                                      <div class="modal-body">
                                        <input type="checkbox" name="" >  My group only 
                                      </div>
                                      <div class="modal-footer">                                       
                                        <button type="button" class="btn btn-primary">Save</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                      </div>
                      </div>
                      <div class="form-group col-md-12">
                      <div class="pull-left" style="width:5%;">
                        <input type="checkbox" name="private_event" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:95%; font-size:15px;">This is a Private Event</div>
                      </div>
                      <div class="form-group col-md-12">
                      <div class="pull-left" style="width:5%;">
                        <input type="checkbox" name="reg_rsvp" style="width:20px; height:20px; background:white; border-radius:5px; border:2px solid #555;">
                      </div>
                      <div class="pull-left" style="width:95%; font-size:15px;">Guest Register with RSVP</div>
                   </div>
                   </div>
                </div>
               
                
                <br>
                <div class='form-group col-sm-12' style="margin-top: 30px;">
                  <div class="form-wizard-buttons">
               
                
                    <button type="submit" class="btn btn-next">Update</button>
                  </div>
                </div>
    </fieldset>  

</form>
           
        <!-- strat Step 7  -->          
        
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
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 


<script>

 //create event form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#create_eventcontact", function(e){

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
		                                                 text: "Your Event Updated Successfully...",
		                                                 type: "success",
		                                                 timer: 5000
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
