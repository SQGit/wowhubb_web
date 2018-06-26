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
	/*https://stackoverflow.com/questions/14199788/how-do-i-use-an-image-as-a-submit-button */ 
	  #btnAdd4, #btnAdd5, #btnAdd6 {
		background-image: url("<?php echo base_url('assets/images/Plus.png')?>");
		background-repeat: no-repeat;
		border: none;
		width: 32px;
		height: 32px;
		cursor: pointer;
		color: transparent;
		background-color: transparent;
		outline: none;
	}
	
	
	
	
	.faq-cat-content {
		margin-top: 25px;
	}
	.faq-cat-tabs li a {
		padding: 15px 10px 15px 10px;
		background-color: #ffffff;
		border: 1px solid #dddddd;
		color: #777777;
	}
	.nav-tabs li a:focus, .panel-heading a:focus {
		outline: none;
	}
	.panel-heading a, .panel-heading a:hover, .panel-heading a:focus {
		text-decoration: none;
		color: #777777;
	}
	.faq-cat-content .panel-heading:hover {
		background-color: #efefef;
	}
	.active-faq {
		border-left: 5px solid #888888;
	}
	.panel-faq .panel-heading .panel-title span {
		font-size: 13px;
		font-weight: normal;
	}
	.form-wizard h4 span {
		font-size: 14px;
	}
	.panel-group .panel {
		border-radius: 0;
		box-shadow: none;
		border-color: #EEEEEE;
	}
	.panel-default > .panel-heading {
		padding: 0;
		border-radius: 0;
		color: #212121;
		background-color: #FAFAFA;
		border-color: #EEEEEE;
	}
	.panel-title {
		font-size: 14px;
	}
	.panel-title > a {
		display: block;
		padding: 15px;
		text-decoration: none;
	}
	.more-less {
		float: right;
		color: #212121;
	}
	.panel-default > .panel-heading + .panel-collapse > .panel-body {
		border-top-color: #EEEEEE;
	}
	.ac-container {
		width: 100%;
		margin: 10px auto 30px auto;
		text-align: left;
	}
	.ac-container label {
		padding: 5px 10px;
		position: relative;
		z-index: 20;
		display: block;
		
		cursor: pointer;
		color: #777;
		text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
		line-height: 20px;
		font-size: 12px;
		background: #ffffff;
		background: -moz-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(1%, #ffffff), color-stop(100%, #eaeaea));
		background: -webkit-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
		background: -o-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
		background: -ms-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
		background: linear-gradient(top, #ffffff 1%, #eaeaea 100%);
	 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eaeaea', GradientType=0 );
		box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 1px 0px 0px 0px rgba(255,255,255,0.9) inset, 0px 2px 2px rgba(0,0,0,0.1);
	}
	.ac-container label:hover {
		background: #fff;
	}
	.ac-container input:checked + label, .ac-container input:checked + label:hover {
		background: #c6e1ec;
		color: #3d7489;
		text-shadow: 0px 1px 1px rgba(255,255,255, 0.6);
		box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
	}
	.ac-container label:hover:after, .ac-container input:checked + label:hover:after {
		content: '';
		position: absolute;
		width: 24px;
		height: 24px;
		right: 2px;
		top: 2px;
		background: transparent url(../assets/images/arrow_down.png) no-repeat center center;
	}
	.ac-container input:checked + label:hover:after {
		background-image: url(../assets/images/arrow_up.png);
	}
	.ac-container input {
		display: none;
	}
	.ac-container article {
		background: rgba(255, 255, 255, 0.5);
		margin-top: -1px;
		overflow: hidden;
		height: 0px;
		position: relative;
		z-index: 10;
		-webkit-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
		-moz-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
		-o-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
		-ms-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
		transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
	}
	.ac-container article p {
		font-style: italic;
		color: #777;
		line-height: 23px;
		font-size: 14px;
		padding: 5px 20px;
		text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
	}
	.ac-container input:checked ~ article {
		-webkit-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
		-moz-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
		-o-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
		-ms-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
		transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
		box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3);
	}
	.ac-container input:checked ~ article.ac-small {
		height: 400px;
	}
	.ac-container input:checked ~ article.ac-medium {
		height: 450px;
	}
	.ac-container input:checked ~ article.ac-large {
		height: 500px;
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

	.remove {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	  width: 200px;
      /*margin-left: 107px;*/
	}
	.remove:hover {
	  background: white;
	  color: black;
	}

	.remove1 {
	  display: block;
	  background: #444;
	  border: 1px solid black;
	  color: white;
	  text-align: center;
	  cursor: pointer;
	  width: 200px;
      margin-left: 133px;
	}
	.remove1:hover {
	  background: white;
	  color: black;
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
            <!-- 
            Just change the class name for make it with different style of design.

            Use anyone class "form-header-classic" or "form-header-modarn" or "form-header-stylist" for set your form header design.
            
            Use anyone class "form-body-classic" or "form-body-material" or "form-body-stylist" for set your form element design.
            -->
            
           
             <img src="../assets/images/banner.jpg" class="img-thumbnail"  alt="banner-image"/>
            <!-- Form progress -->
    
          
    <form id="create_eventhighlight" action="<?php echo base_url('eventhubb/update_eventhighlight'); ?>"  method="POST" enctype="multipart/form-data" > 
    	 
              <!--  Step 5 -->
    <fieldset>
            <!--<form id="create_event" action="" method="post" enctype="multipart/form-data" > --> 
               <!-- Progress Bar -->
	       
                <!-- Progress Bar -->
            
                <div class="col-md-12">
                	<h4> <span>Step 1</span></h4>
            	</div>
                 <div class='form-group col-sm-12'>
                  	  <label>Add Your Event Highlights </label>
                </div>
                	<input type='hidden' name="event_id"  class="form-control" value="<?php echo $event->_id; ?>" >

                <div class='col-sm-9' id="highlight2">
	                <div class='form-group col-sm-7' style="margin-bottom: 0px;">
	                  		<div class='col-md-12' style="background-color:#f9f9f9; padding-top:15px;">
			                       <div class="form-group">                       
			                        <input type="button" class="btn btn-primary"  value="Browse Image.." onclick="document.getElementById('img_files').click();" >
			                        <input type="file" style="display:none;" name="highlight_img1" id="img_files" class="file" accept="image/*">
			                       </div>
	                       			<div class="remove_img1">
	                       				<?php 
		                       				if(isset($event->eventhighlights1)&& ($event->eventhighlights1 != 'null'))
		                       				{
	                       				?>
			                        	<img src="<?php echo $event->eventhighlights1url; ?>" style="width:160px; height:88px;" name="exit_img1" alt="user" class="img-responsive img-thumbnail">	
			                        	 <div style="position:absolute; left:161px; top:37px;">
			                        	 <a href="#" class="delete1">
			                        	 	<img src="<?php echo base_url('assets/images/wow-close.png'); ?>" />
			                        	 </a>
			                        	</div>
			                        	<?php } ?>
			                        </div>  
	                    	</div>

	                    <div class='col-md-12' style="background-color:#f9f9f9; padding-top:15px;">
	                      <div class="form-group">                       
	                        <div class="input-group col-xs-12" style="margin-top:0px;">
	                          <p style="line-height:23px;">Choose a compelling 60-120 seconds event promotional ads video that will create a lasting impression in your viewers mind</p>
	                        </div>
	                         <span class="btn btn-primary btn-file"> 
	                        		Browse Video...  <input type="file" name="highlight_video1" id="video_size1" accept="video/*" >  
	                     	 </span> 
	                     	<div id="video_show1" style="display: none;" >
	                        	<video width="200" height="150" controls>
								 	 <source src="mov_bbb.mp4" id="video_here1">
								    Your browser does not support HTML5 video.
								</video>
	                        </div>  
	                        			<?php 
		                       				if(isset($event->eventhighlightsvideo1)&& ($event->eventhighlightsvideo1 != 'null'))
		                       				{
	                       				?>
	                        <video width="200" height="150" controls>
								 	 <source src="<?php echo $event->eventhighlightsvideo1; ?>" id="video_here1" type="video/mp4">
								    
							</video>
										<?php } ?>

	                      </div>
	                    </div>
	                </div>

                <div class='col-sm-5'>
	                <div class='form-group col-sm-12'>
	                  <select name="guest_type1" class="form-control" id="types" >

	                    <option value="<?php echo $event->eventguesttype1; ?>"><?php if(isset($event->eventguesttype1)){ echo $event->eventguesttype1;} else { echo "Select Event Guest Type"; } ?> </option> 
	                    <option value="Guest Speaker">Guest Speaker </option>
	                    <option value="Guest Artist">Guest Artist </option>
	                    <option value="Comedian">Comedian</option>
	                    <option value="Event Host">Event Host</option>
	                    <option value="Event Celebrants">Event Celebrants</option>
	                    <option value="Music Minister">Music Minister</option>
	                    <option value="Music Artist">Music Artist</option>
	                    <option value="Pre-Wedding Clips">Pre-Wedding Clips</option>
	                    <option value="Pre-Birthday Clips">Pre-Birthday Clips</option>
	                    <option value="Pre-Anniversary Clips">Pre-Anniversary Clips</option>
	                    <option value="Past Event Clips">Past Event Clips</option>                  
	                    <option value="Others">Others</option>
	                  </select>
	                </div>
	                <div class='form-group col-sm-12'>
	                  <input type="text" name="nameofspeaker1" id="textbox_1" class="form-control" value="<?php if(isset($event->eventspeakername1)){ echo $event->eventspeakername1;} ?> " placeholder="Enter the name of Speaker/Artist/Event Clips">
	                </div>
	                <div class='form-group col-sm-12'>
	                  <input type="text" name="guest_url1" id="textbox_2" class="form-control" value="<?php if(isset($event->eventspeakerlink1)){ echo $event->eventspeakerlink1;} ?>" placeholder="Event Guest Speaker/Artist URL-Links">
	                </div>
	                <div class='form-group col-sm-12'>
	                  <textarea class="form-control" name="guest_speaker1"  placeholder="Event Guest Speaker/ Artist Introduction/ Pre-Events Activities Clips" style="min-height:150px;"> <?php if(isset($event->eventspeakeractivities1)){ echo $event->eventspeakeractivities1;}  ?> </textarea>
	                </div>
                </div>
                		<br><br>

                	<div class="col-md-12 line-divider"></div>
                <!-- second set -->

                <div id="event_high" style="display: none;">
	                <div class='form-group col-sm-7' style="margin-bottom: 0px;">
	                  	<div class='col-md-12' style="background-color:#f9f9f9; padding-top:15px;">
	                      <div class="form-group">                       
	                        <input type="button" class="btn btn-primary"  value="Browse Image.." onclick="document.getElementById('img_files2').click();" />
	                        <input type="file" style="display:none;" name="highlight_img2" id="img_files2" class="file" accept="image/*">
	                      </div>
	                        <div class="remove_img">
	                       				<?php 
		                       				if(isset($event->eventhighlights2)&& ($event->eventhighlights2 != 'null'))
		                       				{
	                       				?>
			                        	<img src="<?php echo $event->eventhighlights2url; ?>" style="width:160px; height:88px;" name="exit_img1" alt="user" class="img-responsive img-thumbnail">	
			                        	 <div style="position:absolute; left:161px; top:37px;">
			                        	 <a href="#" class="delete">
			                        	 	<img src="<?php echo base_url('assets/images/wow-close.png'); ?>" />
			                        	 </a>
			                        	</div>
			                        	<?php } ?>
			                </div>  
	                    </div>
	                    <div class='col-md-12' style="background-color:#f9f9f9; padding-top:15px;">
	                      <div class="form-group">                       
	                        <div class="input-group col-xs-12" style="margin-top:0px;">
	                          <p style="line-height:23px;">Choose a compelling 60-120 seconds event promotional ads video that will create a lasting impression in your viewers mind</p>
	                        </div>
	                         <span class="btn btn-primary btn-file"> 
	                        		Browse Video...  <input type="file" name="highlight_video2" id="video_size2" accept="video/*" >  
	                     	</span> 
	                     	<div id="video_show2" style="display: none;" >
	                        	<video width="200" height="150" controls>
								 	 <source src="mov_bbb.mp4" id="video_here2">
								    Your browser does not support HTML5 video.
								</video>
	                        </div>                 
	                      </div>
	                    </div>
	                </div>
                <div class='col-sm-5'>
	                <div class='form-group col-sm-12'>
	                   <select name="guest_type2" class="form-control" id="types" >
	                   	<option value="<?php if(isset($event->eventguesttype2)){ echo $event->eventguesttype2;} ?>"><?php if(isset($event->eventguesttype2)){ echo $event->eventguesttype2;} else { echo "Select Event Guest Type"; } ?> </option>
	                  
	                    <option value="Guest Speaker">Guest Speaker </option>
	                    <option value="Guest Artist">Guest Artist </option>
	                    <option value="Comedian">Comedian</option>
	                    <option value="Event Host">Event Host</option>
	                    <option value="Event Celebrants">Event Celebrants</option>
	                    <option value="Music Minister">Music Minister</option>
	                    <option value="Music Artist">Music Artist</option>
	                    <option value="Pre-Wedding Clips">Pre-Wedding Clips</option>
	                    <option value="Pre-Birthday Clips">Pre-Birthday Clips</option>
	                    <option value="Pre-Anniversary Clips">Pre-Anniversary Clips</option>
	                    <option value="Past Event Clips">Past Event Clips</option>                  
	                    <option value="Others">Others</option>
	                  </select>
	                </div>
	                <div class='form-group col-sm-12'>
	                  <input type="text" name="nameofspeaker2" id="textbox_1" class="form-control" value="<?php if(isset($event->eventspeakername2)){ echo $event->eventspeakername2;} else { echo ""; } ?> " placeholder="Enter the name of Speaker/Artist/Event Clips">
	                </div>
	                <div class='form-group col-sm-12'>
	                  <input type="text" name="guest_url2" id="textbox_2" class="form-control" placeholder="Event Guest Speaker/Artist URL-Links" value="<?php if(isset($event->eventspeakerlink2)){ echo $event->eventspeakerlink2;} else { echo ""; } ?> " >
	                </div>
	                <div class='form-group col-sm-12'>
	                  <textarea class="form-control" name="guest_speaker2" placeholder="Event Guest Speaker/ Artist Introduction/ Pre-Events Activities Clips" style="min-height:150px;"><?php if(isset($event->eventspeakeractivities2)){ echo $event->eventspeakeractivities2;}  ?></textarea>
	                </div>
                </div>
            </div>

                 <div class='form-group col-sm-6'> <a href="JavaScript:void(0);" id="add_highlight"><i class="fa fa-plus-circle"></i> Add More Event Highlights Clips</a> </div>

                 <div class='form-group col-sm-6 text-right'> <a href="JavaScript:void(0);" class="remove_highlight"><i class="fa fa-minus-circle"></i> Remove Event Highlights</a> </div>

            </div>

            	
                <div class='col-sm-3'>
                  <div class='col-sm-12' style="background-color:#f9f9f9;">
                    <div class='col-sm-12'>
                      <h5>Helpful Hints</h5>
                      <section class="ac-container">
                        <div>
                          <input id="ac-17" name="accordion-1" type="radio" />
                          <label for="ac-17">Event Highlights images Size?</label>
                          <article class="ac-small">
                            <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows.</p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-18" name="accordion-1" type="radio" />
                          <label for="ac-18">Event Highlights video size?</label>
                          <article class="ac-medium">
                            <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-19" name="accordion-1" type="radio" />
                          <label for="ac-19">Event Pre Activities Clips?</label>
                          <article class="ac-large">
                            <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man. </p>
                          </article>
                        </div>
                        <div>
                          <input id="ac-20" name="accordion-1" type="radio" />
                          <label for="ac-20">Event Speaker Links /URLs?</label>
                          <article class="ac-large">
                            <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic. </p>
                          </article>
                        </div>
                      </section>
                      <!-- panel-group --> 
                      
                    </div>
                  </div>
                </div>
                
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
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script>   
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.js')?>"></script>   
<script src="<?php echo base_url('assets/js/moment.js')?>"></script> 
 

<script>
	
//delete highlight1 image from db shows
$(".delete").click(function(){
    $(".remove_img").remove();
});

//delete highlight2 image from db shows
$(".delete1").click(function(){
    $(".remove_img1").remove();
});

// remove div
$(document).on('click', '.remove_highlight', function(e)
    {
	   var elem = document.getElementById("event_high");
	   elem.remove();
	   
	       
    });


 //video size limitation highlight video1

$(document).on("change", "#video_size1", function(evt)
        {
        		var file = this.files[0];

        		if (file.size > 2621440)
        		 {
		               //Now Here I need to update <span> 
		             $('#video_show1').hide();	
		             alert('Filesize must 2.5MB or below');           
         		 }else
         		 {	
				  var $source = $('#video_here1');				 
				  $source[0].src = URL.createObjectURL(this.files[0]);
				  $source.parent()[0].load();
				  $('#video_show1').show();				  
				 }
		});

//video size limitation highlight video2

$(document).on("change", "#video_size2", function(evt)
        {
        		var file = this.files[0];

        		if (file.size > 2621440)
        		 {
		               //Now Here I need to update <span> 
		             $('#video_show2').hide();	
		             alert('Filesize must 2.5MB or below');           
         		 }else
         		 {	
				  var $source = $('#video_here2');				 
				  $source[0].src = URL.createObjectURL(this.files[0]);
				  $source.parent()[0].load();
				  $('#video_show2').show();				  
				 }
		});


//event highlight1 image preview and delete

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#img_files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove1\">Remove image</span>" +
            "</span>").insertAfter("#img_files");
          $(".remove1").click(function(){
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
	
//event highlight2 image preview and delete

$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#img_files2").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove1\">Remove image</span>" +
            "</span>").insertAfter("#img_files2");
          $(".remove1").click(function(){
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


//event highlight2  show and hide

		$("#add_highlight").click(function(){
   				 $("#event_high").show();
		});

 //create event form submit

var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#create_eventhighlight", function(e){

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
		                                                 text: "Your Updates Done Successfully...",
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
