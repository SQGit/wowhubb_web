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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/jquery.datetimepicker.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">

body {
	background-color: #e7e5e6;
}
.table>thead>tr>th
{
	border-bottom:0!important;
}
h3
{
	color:#333!important;
}

label.error {
	/*font-family: 'Roboto', sans-serif;*/
	color: red;
}

#footer {
	background: #fff;
	position: relative;
	top: 0px;
}

#imageUpload {
	display: none;
}

#profileImage {
	cursor: pointer;
}
#imageUpload1 {
	display: none;
}
#profileImage1 {
	cursor: pointer;
}
.form-wizard {
	padding: 5px;
	background: #fff;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
 //box-shadow: 0px 0px 10px 0px #ccc;
	text-align: left;
}
.nav>li>a:focus, .nav>li>a:hover {
	text-decoration: none;
	background-color: #e91e63;
	color: #fff;
}
.nav-tabs>li {
	float: left;
	margin-bottom: -1px;
	width: 25%;
}
.nav-tabs>li>a {
	margin-right: 2px;
	line-height: 1.42857143;
	border: 1px solid transparent;
	border-radius: 4px 4px 0 0;
	font-size: 16px;
	text-align: center;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
	color: #f7f6f6;
	cursor: default;
	background-color: #e91e63;
	border: 1px solid #ddd;
	border-bottom-color: transparent;
}
/* custom inclusion of right, left and below tabs */

.tabs-right > .nav-tabs, .tabs-left > .nav-tabs {
	border-bottom: 0;
}
.tab-content > .tab-pane, .pill-content > .pill-pane {
	display: none;
}
.tab-content > .active, .pill-content > .active {
	display: block;
}
.tabs-left > .nav-tabs > li, .tabs-right > .nav-tabs > li {
	float: none;
}
.tabs-left > .nav-tabs > li > a, .tabs-right > .nav-tabs > li > a {
	min-width: 74px;
	margin-right: 0;
	margin-bottom: 3px;
}
.tabs-left > .nav-tabs {
	float: left;
	margin-right: 19px;
	border-right: 1px solid #ddd;
}
.tabs-left > .nav-tabs > li > a {
	margin-right: -1px;
	-webkit-border-radius: 4px 0 0 4px;
	-moz-border-radius: 4px 0 0 4px;
	border-radius: 4px 0 0 4px;
}
.tabs-left > .nav-tabs > li > a:hover, .tabs-left > .nav-tabs > li > a:focus {
	border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}
.tabs-left > .nav-tabs .active > a, .tabs-left > .nav-tabs .active > a:hover, .tabs-left > .nav-tabs .active > a:focus {
	border-color: #ddd transparent #ddd #ddd;
}

@media (min-width: 768px) {
.modal-dialog {
	width: 600px;
	margin: 100px auto 0!important;
}
}
td, tr {
	border-spacing: 2px;
	padding: 0 5px;
}
table {
	border-spacing: 2px;
	padding: 0px;
}
.edit-block ul.interests li {
	background: #E8E8E8;
	color: #fff;
	padding: 5px 15px;
	margin-right: 10px;
	margin-top: 5px;
	margin-bottom: 5px;
	border-radius: 40px;
}
.edit-block ul.interests li a {
	color: #333!important;
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
      <nav class="navbar navbar-default navbar-fixed-top menu" style="padding-top:3px!important; padding-bottom:3px!important;">
        <div class="container"> 
      
          <?php  include('/../includes/header.php'); ?>
        </div>
        <!-- /.container --> 
      </nav>
  </header>
<!--Header End-->

<div class="google-maps"> </div>
<div class="container"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
    <div class="timeline-cover" style="position: relative; max-height:320px;"> 
      <?php
         if(isset($business->coverpage))
          {
       ?>
      <img class="cover-pic" src="http://104.197.80.225:3010/wow/media/business/<?php echo $business->coverpage;?>"  style="background-size:cover; width:100%; max-height:300px;" > 
      <br>
      <?php } else { ?>
                <img class="cover-pic" src='<?php echo base_url("assets/images/mf-1.jpg");?>' style="background-size:cover; width:100%; margin-top:20px;" > 
      <?php } ?>
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">

            <div class="profile-info">
                  <?php
                     if(isset($business->businesslogo))
                      {
                   ?>
             <img  src="http://104.197.80.225:3010/wow/media/business/<?php echo $business->businesslogo;?>" class="profile-pic img-responsive profile-photo" /> 
              <?php } ?>
           </div>
          </div>
          <div class="col-md-9" >
            <div class="profile-info-1"> </div>
            <ul class="list-inline profile-menu">
              <li><a href="<?php echo base_url('service/ohp_admin_home'); ?>" class="active">Home</a></li>
              <li><a href="<?php echo base_url('service/ohp_eventfeed'); ?>">Event Feed</a></li>
              <li><a href="<?php echo base_url('service/ohp_network_members'); ?>">Network Members</a></li>
              <li><a href="#">Reviews</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="#">Album</a></li>
              <li><a href="#">Videos</a></li>
            </ul>
            <ul class="follow-me list-inline">
              <li>Help</li>
            </ul>
          </div>
        </div>
      </div>
      <!--Timeline Menu for Large Screens End--> 
      
      <!--Timeline Menu for Small Screens-->
      <div class="navbar-mobile hidden-lg hidden-md">
        <div class="profile-info"> <img src="<?php echo base_url ('assets/images/users/user-1.jpg') ?>" alt="" class="img-responsive profile-photo" />
          <h3 style="color:#fff;">Emeka Ike</h3>
          <p style="color:#fff;" class="text-muted">Managing Director</p>
        </div>
        <div class="mobile-menu">
          <ul class="list-inline">
            <li><a href="timline.html">Venue Overview</a></li>
            <li><a href="timeline-about.html" class="active">Notifications</a></li>
            <li><a href="timeline-album.html">My Event Halls</a></li>
            <li><a href="timeline-friends.html">Promote Your Venue</a></li>
            <li><a href="timeline-friends.html">Reviews</a></li>
          </ul>
          <button class="btn-primary">Add Friend</button>
        </div>
      </div>
      <!--Timeline Menu for Small Screens End--> 
      
    </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-2" style="margin-top:15px;">
            <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;"> 
              
              <!--news-feed links ends-->
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Events Hubb</h5>

                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="<?php echo base_url('service/ohp_publish_event'); ?>">Published Events</a> </li>

                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="<?php echo base_url('service/ohp_notification_page'); ?>">Invites-Notifications</a> </li>

                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"><a style="font-weight: bold;" href="<?php echo base_url('service/ohp_wowtag'); ?>">Wowtag</a> </li>

                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>

              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Post</h5>
                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="<?php echo base_url('service/ohp_eventfeed'); ?>">Published Posts</a> </li>
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Admin</h5>
                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="<?php echo base_url('service/ohp_admin_members_admin'); ?>">Manage Members</a> </li>
                <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
              </ul>
              <ul class="nav-news-feed">
                <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Manage ADs</h5>
                <li style="background-color:#f1f1f1; padding:2px 5px; border-radius:5px; margin-top: 10px;"> <a style="font-weight: bold;" href="#">Promote Your Events</a> </li>
              
              </ul>
            </div>
          </div>

          <div class="col-md-7">
            <div class="col-md-12">
              <div class="row">
                <div class="row">
                <div class="col-md-12" style="background: #fff; box-shadow: 1px 1px 1px 2px #ECECEC; padding: 10px 7px; border-radius: 3px; margin-top:15px;">
                  <div class="col-md-10">
                    <h3 style="font-size:17px; font-weight:bold;">About Us</h3>
                    <p> <?php if(isset($business->description)) { echo $business->description; } ?></p>
                  </div>
                    <div class="col-md-2 text-right" style="margin-top:15px;">
                      <a href="#">
                        <img src="<?php echo base_url('assets/images/edit_icon.png'); ?>" alt="" /> Edit
                      </a>
                    </div>
                    </div>
                </div>
              </div>

              <div class="row">
                <div class="row">
                <div class="col-md-12" style="background: #fff; box-shadow: 1px 1px 1px 2px #ECECEC; padding: 10px 7px; border-radius: 3px; margin-top:15px;">
                  <div class="col-md-6">
                    <h3 style="font-size:17px; font-weight:bold;">Address</h3>
                    <p> <?php if(isset($business->venue)) { echo $business->venue; } ?> <br>
                       <?php if(isset($business->address1)) { echo $business->address1; } ?> <br>
                       <?php if(isset($business->country)) { echo $business->state." ".$business->country." ".$business->zipcode; } ?> <br>
                      <strong>Call Us - </strong> <?php if(isset($business->phone)) { echo $business->phone; } ?> <br>
                      <strong>Web - </strong>  <?php if(isset($business->websitelink)) { echo $business->websitelink; } ?> </p>
                  </div>
                  <div class="col-md-6" style="padding:15px;"> <img src="<?php echo base_url('assets/images/ohp-hotels.jpg');?>" alt="" class="img-responsive img-thumbnail" /> </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="row">
                <div class="col-md-12" style="background: #fff; box-shadow: 1px 1px 1px 2px #ECECEC; padding: 10px 7px; border-radius: 5px; margin-top:15px;">
                  <div class="col-md-10">
                    <h3 style="font-size:17px; font-weight:bold;">Business Hours</h3>
 <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Days</th>
      <th>Working Hours</th>
      <th>Closed</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Monday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tuesday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Wednesday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
     <tr>
      <th scope="row">4</th>
      <td>Thursday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
     <tr>
      <th scope="row">5</th>
      <td>Friday</td>
      <td>9:00am-5:00pm</td>
      <td>-</td>
    </tr>
     <tr>
      <th scope="row">6</th>
      <td>Saturday</td>
      <td>-</td>
      <td>Closed</td>
    </tr>
     <tr>
      <th scope="row">7</th>
      <td>Sunday</td>
      <td>-</td>
      <td>Closed</td>
    </tr>
  </tbody>
</table>

                   
                  </div>

                  <div class="col-md-2 text-right" style="margin-top:15px;">
                    <a href="#">
                      <img src="<?php echo base_url('assets/images/edit_icon.png');?>" alt="" /> Edit 
                    </a>
                  </div>
                  </div>

                </div>
              </div>

            </div>
          </div>

         
          <div class="col-md-3" style="margin-top:15px;">
            <div class="col-md-12" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
              <div class="col-md-12">
  <div class="row">
    <div class="col-md-12">
      <h3 style="font-size:16px; font-weight:bold;">Welcome To Your Event Hosting  Page</h3>
      <p>Welcome to your evvent hosting page on !wowhubb, you can create, host and advertise all your company, organisation and business event in one place 
        An amaazing platform to get all things event handled for you.</p>
      </div>
    <div class="col-md-12">
      <h3 style="font-size:16px; font-weight:bold;">Invite Your Friends To Event Network Page</h3>
      <div class="col-md-6">
        <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
          <div class="col-md-12 text-center"><img src="<?php echo base_url('assets/images/em.png');?> " class="img-responsive img-circle img-thumbnail" alt="user"></div>
          <span style="font-size:15px; font-weight:bold;">Tony Adams</span>
          
          <br>
          <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-sm" type="button">Invite</button></span>
          </div>
        </div>
      <div class="col-md-6">
        <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
          <div class="col-md-12 text-center"><img src="<?php echo base_url('assets/images/td.png');?>" class="img-responsive img-circle img-thumbnail" alt="user"></div>
          <span style="font-size:15px; font-weight:bold;">TD Jakes</span>
          
          <br>
          <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-sm" type="button">Invite</button></span>
          </div>
        </div>
      <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"></div>
      <div class="col-md-6">
        <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
          <div class="col-md-12 text-center"><img src="<?php echo base_url('assets/images/em.png');?>" class="img-responsive img-circle img-thumbnail" alt="user"></div>
          <span style="font-size:15px; font-weight:bold;">Tony Adams</span>
          
          <br>
          <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-sm" type="button">Invite</button></span>
          </div>
        </div>
      <div class="col-md-6">
        <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
          <div class="col-md-12 text-center"><img src="<?php echo base_url('assets/images/td.png');?>" class="img-responsive img-circle img-thumbnail" alt="user"></div>
          <span style="font-size:15px; font-weight:bold;">TD Jakes</span>
          
          <br>
          <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-sm" type="button">Invite</button></span>
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
  </div>
</div>
</div>

<!-- Footer
    ================================================= --> 

<!-- Scripts
    ================================================= --> 

<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.validate.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/additional-methods.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
<script>

  
  $('#link_show').click(function() //professional work experience
  {
      $('#link_url').show();
  });

  $('#myvideo').hover(function toggleControls() {  //video controls hide and show mouse hover
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
})

    $(document).ready(function() {
    var max_fields_limit      = 5; //set limit for maximum input fields
    var x = 1; //initialize counter for text box
    $('.add_more_button').click(function(e){ //click event on add more fields button having class add_more_button
        e.preventDefault();
        if(x < max_fields_limit){ //check conditions
            x++; //counter increment
            $('.input_fields_container').append('<div ><input type="text" class="form-control" style="margin-top:10px;" name="links[]"/></div>'); //add input field
        }
    });  
    
});


      $("#profileImage1").click(function(e) { //this two value is cover image  id name 
             $("#imageUpload1").click();
              });      

             $("#profileImage").click(function(e) { //this two value is profile image  id name 
            $("#imageUpload").click();  
            }); 


            $("#birthday").datetimepicker({
            timepicker:false,
            format:"M-d-Y",           
            });
           
            $("#wedding").datetimepicker({
            timepicker:false,
            format:"M-d-Y",           
            });

            $("#socialfunction").datetimepicker({
            timepicker:false,
            format:"M-d-Y",           
            });

            $("#party").datetimepicker({
            timepicker:false,
            format:"M-d-Y",           
            });



         //personal profile over view submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#personal_update_overview", function(e){
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
                    success: function(response)
                    {
                       if(response.status == 'success')
                       {
                        swal("Good job!", "Your profile successfully updated!", "success");
                        window.location.href = base_url + 'profile/profile_get';
                        }else if(response.status == 'Failed')
                       {
                        
                        swal("Sorry!", "somethink wrong !", "error");
                       }          
                    }
                });
          
      });
   });

        
//personal self intro video size limitation

  // $(document).on("change", "#self_video", function(evt)
  //       {
  //           var file = this.files[0];

  //           if (file.size > 2621440)
  //            {
  //                  //Now Here I need to update <span> 
  //                $('#video_show1').hide();  
  //                alert('Filesize must 2.5MB or below');           
  //            }
  //       });

//personal profile self video submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#personal_update_video", function(e){
         e.preventDefault();     

         $.validator.addMethod('filesize', function(value, element, param) {
         return this.optional(element) || (element.files[0].size <= param) 
          });   
          
            $(this).validate({ 

                              rules: {                             
                                      self_video:{

                                        required:true,
                                        filesize: 2621440,   //max size 200 kb
                                      },               
                                     
                                     },

                              messages: {                           
                                      self_video: {                                         
                                         
                                          required:"Please Choose file.",
                                          filesize:" file size must be less than 2.5 MB.",
                                      }, 
                                     
                                      },                                                   
                            
                           }); 

    if($(this).valid())
        {     

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
                      success: function(response)
                      {
                         if(response.status == 'success')
                         {
                          swal("Good job!", "Your profile successfully updated!", "success");
                          window.location.href = base_url + 'profile/profile_get';
                          }else if(response.status == 'Failed')
                         {                    
                          swal("Sorry!", "somethink wrong !", "error");
                         }          
                      }
                  });
           } 
      });
   });
     //personal profile aboutme submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#personal_update_aboutme", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {                    
                    swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
   });

        //personal profile contact info submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

  $(document).ready(function(){

    $(document).on("submit", "#personal_update_contactinfo", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {
                    
                    swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
   });

 //personal profile event info submit and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

 $(document).ready(function(){

    $(document).on("submit", "#personal_update_eventinfo", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {
                    
                    swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
   });

 //professional profile full page submit and updated profile page

     var base_url = '<?php echo base_url() ?>'; //form submited
    $(document).ready(function(){

    $(document).on("submit", "#professional_update", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {
                      swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
    });

    //professional profile work experience update

var base_url = '<?php echo base_url() ?>'; //form submited
    $(document).ready(function(){

    $(document).on("submit", "#professional_work_exp", function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    swal("Good job!", "Your profile successfully updated!", "success");
                    window.location.href = base_url + 'profile/profile_get';
                    }else if(response.status == 'Failed')
                   {
                      swal("Sorry!", "somethink wrong !", "error");
                   }          
                }
            });
      });
    });

//profile image upload here 
//https://stackoverflow.com/questions/41406509/add-a-profile-picture-in-form-in-html-and-css
$(document).ready(function() {
    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }    
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $(".file-upload").on('change', function(){
        readURL(this);
        $('#profile_img').submit();
        // document.getElementById('profile_img').submit();
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });

    $("#profile_img").submit(function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    
                    // window.location.href = "<?php //echo base_url('profile/profile_img_upload');?>";
                   
                   }else if(response.status == 'Failed')
                   {
                    
                    swal('Somethink will be wrong plz try again..');
                   }
          

                }
                });
           
    });
});

//cover image upload here 

$(document).ready(function() {
    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.cover-pic').attr('src', e.target.result);
            }    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".cover-upload").on('change', function(){
        readURL(this);
        $('#cover_img').submit();
        // document.getElementById('profile_img').submit();
    });
    
    $(".upload-button").on('click', function() {
       $(".cover-upload").click();
    });


    $("#cover_img").submit(function(e){
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
                success: function(response)
                {
                   if(response.status == 'success')
                   {
                    
                    // window.location.href = "<?php //echo base_url('profile/profile_img_upload');?>";                   
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
</html>
