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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/animate.css')?>" />

<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">

body {
	background-color: #e7e5e6;
}
label.error {
    /*font-family: 'Roboto', sans-serif;*/
   color:red; 
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
#imageUpload1{
    display: none;
}
#profileImage1{
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
	font-size: 14px;
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

table, td, tr
{
	border-spacing:2px;
	padding:0 5px;
}
.edit-block ul.interests li{
  background: #E8E8E8;
  color: #fff;
  padding: 5px 15px;
  margin-right: 10px;
  margin-top: 5px;
  margin-bottom: 5px;
  border-radius: 40px;
}
.edit-block ul.interests li a{  
  color: #333!important;  
}

.modal-body {
    max-height: calc(100vh - 250px);
    overflow-y: auto;
}
#calendar {
    max-width: 900px;
    margin: 0 auto;
  }
.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 250px;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background:rgba(0,0,0,0.3);
  z-index:998;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 16px;
  position: absolute;
  top: 45%;
  right: 0%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  cursor:pointer;
}

.prof-phto
{
	padding:10px 5px; 
	border:1px solid #ccc; 
	border-radius:10px;
}

img.profile-photo-small {
    height: 60px;
    width: 60px;
    
}

.text-greeny
{
	 color:#329C00;
}

.card-info-1
{
	height:105px;
}
</style>
<link href="<?php echo base_url ('assets/css/fullcalendar.min.css') ?>" rel='stylesheet' />
<link href="<?php echo base_url ('assets/css/fullcalendar.print.min.css') ?>" rel='stylesheet' media='print' />

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

<!-- breadcrumb for page link -->
<div class="container" style="margin-top:20px; margin-bottom:-10px;">

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url('event/get_eventfeed'); ?>"><strong>Home</strong></a></li>  
      <li class="breadcrumb-item"><a href="<?php echo base_url('Profile/profile_get'); ?>"><strong>Profile</strong></a></li>
      <li class="breadcrumb-item active"><strong>Friends Connections</strong></li>
    </ol>
</div>

<div class="google-maps"> </div>
<div class="container"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
 <div class="timeline-cover">     
              <?php 
                $cover = $this->session->userdata('cover_img');
                if(isset($cover))
                   {
                  ?>
                <img  src="http://104.197.80.225:3010/wow/media/personal/<?php echo $cover; ?>"  style="background-size:cover; width:100%; max-height:300px;"/>
                <?php }   else{   ?>
              <img src="<?php echo base_url('assets/images/covers/1.jpg')?>" style="background-size:cover; width:100%; max-height:300px;" >
                <?php }  ?> 
                    
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info">
              <form id="profile_img" action="<?php echo base_url('profile/profile_img_upload'); ?>" method="post" enctype="multipart/form-data">
                <?php 
                $img= $this->session->userdata('image');
                   if(isset($img))
                   {
                      ?>
                <img  id="profileImage" src="http://104.197.80.225:3010/wow/media/personal/<?php echo $img; ?>" class="profile-pic img-responsive profile-photo" />
                <?php }

                 else{ 
                       
                       ?>
                <img  class="profile-pic img-responsive profile-photo"  id="profileImage" src="<?php echo base_url('assets/images/album/avatar_male.png')?>">;
                <?php
                       } 
                ?>
               
              </form>
            </div>
          </div>
          <div class="col-md-9" >
            <div class="profile-info-1">
              <h3 style="color:#fff;"><?php echo $this->session->userdata('first_name')." " .$this->session->userdata('last_name'); ?> </h3>
              <p style="color:#fff;" class="text-muted"><?php echo $this->session->userdata('designation'); ?></p>
            </div>


            <ul class="list-inline profile-menu">
              <!-- <li><a href="<?php echo base_url ('event/profile_get_eventfeed') ?>" >Event Feed</a></li> -->
              <li><a href="<?php echo base_url('Profile/profile_get'); ?>" >Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get') ?>"  >Interests</a></li>
              <li><a href="<?php echo base_url ('Profile/friends_connection') ?>" class="active">Friend Connections</a></li>
              <li><a href="#">Eventhubb</a></li>
              <li><a href="#">Photos</a></li>
            </ul>
            <ul class="follow-me list-inline">
              <li><?php if(isset($frds_count)) { echo $frds_count; } ?> Connections</li>
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
          <ul class="list-inline profile-menu">
              <li><a href="<?php echo base_url ('home/profile_update'); ?>" >Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get'); ?>" class="active">Interests</a></li>
              <li><a href="timeline-album.html">Photos</a></li>
              <li><a href="timeline-friends.html">Eventhubb</a></li>
              <li><a href="timeline-friends.html">Wowtag</a></li>
            </ul>
          <button class="btn-primary">Add Friend</button>
        </div>
      </div>
      <!--Timeline Menu for Small Screens End--> 
      
    </div>


    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">
        <div class="col-md-12" style="padding-top:15px;">
       <div class="col-md-12"> 
        <h3 style="margin-top:0;">
          <img src="<?php echo base_url('assets/images/send-group.png')?>"> Friends
        </h3>        
       </div>
                
            <?php 
                foreach ($friend->friends as  $frds) {
                
              ?>

                <div class="col-md-3 col-sm-3" style="margin-top: 10px;">
                  <div class="friend-card prof-phto col-md-12  card-info-1">
                  	
                  	<div class="card-info  col-md-3">
                      <?php 
                          if(isset($frds->personalimage)){
                      ?>
                      <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $frds->personalimage; ?>" alt="user" class="profile-photo-small">
                      <?php } else { ?>
                      <img src="<?php echo base_url('assets/images/users/user-3.jpg')?>" alt="user" class="profile-photo-small">
                      <?php } ?>
                      
                    </div>
                    <div class="friend-info col-md-9">
                        <a href="#" class="pull-right text-greeny"><img src="<?php echo base_url('assets/images/greeny.png')?>"> My Friend</a>
                      	<h5><a href="timeline.html" class="profile-link"><?php echo $frds->firstname." ".$frds->lastname; ?></a></h5>
                      	<p><?php echo $frds->mutualfriends; ?> Mutual Connections</p>
                      </div>
                  </div>
                </div>

            <?php } ?>

                
               
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
<script src="<?php echo base_url ('assets/js/moment.min.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/fullcalendar.min.js') ?>"></script>
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
            $('.input_fields_container').append('<div class="row"><div class="form-group col-xs-12"> <input type="text" class="form-control" style="margin-top:10px;" name="links[]"/> </div> </div>'); //add input field
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


  // personal relationship dynamic add

  function generete_dynamic_relationship(count){

  var relation = ' <div id="add_relation_'+count+'"> <div class="row"> <div class="form-group col-xs-12"> <label for="date-to" class="">Name</label> <input id="relation_name_'+count+'" type="text" class="form-control input-group-lg" name="relation_name[]"  value="" /> </div> <div class="form-group col-sm-12" style="font-size: 15px;"> <label>Relationship</label> <select name="relation_type[]" id="relation_type_'+count+'" class="form-control" style="background-color:#eff0f1;"> <option value="">Choose Relationship</option> <option value="Mother">Mother</option> <option value="Father">Father</option> <option value="Daughter">Daughter</option> <option value="Son">Son</option> <option value="Sister">Sister</option> <option value="Brother">Brother</option> <option value="Uncle">Uncle</option> <option value="Aunt">Aunt</option> <option value="Friend">Friend</option> <option value="Niece">Niece</option> <option value="Cousin(female)">Cousin(female)</option> <option value="Cousin(male)">Cousin(male)</option> <option value="Grandfather">Grandfather</option> <option value="Grandmother">Grandmother</option> <option value="Grandson">Grandson</option> <option value="Granddaughter">Granddaughter</option> </select> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_relation btn btn-info btn-sm"> Remove</a> </div> </div> </div>';

    return relation;
}



$(document).ready(function(){
        $("#add_relationship").click(function()
          {       
            var nxtticket_count = $(this).data("nxt_relation_name"); 
            var nxtvenueHTML = generete_dynamic_relationship(nxtticket_count);
            $("#dynamic_add_relation").append(nxtvenueHTML);        
              nxtticket_count++;
           $(this).data('nxt_relation_name', nxtticket_count); //update data nxtportion   
        });   
});

// remove div
$(document).on('click', '.remove_relation', function(e)
    {
         
          $(this).parents('[id^=add_relation_]').remove();
         
    });

 //personal profile relationship and updated profile page

var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#personal_update_relation", function(e){
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
                        // swal("Good job!", "Your profile successfully updated!", "success");
                        window.location.href = base_url + 'profile/profile_get';
                        }else if(response.status == 'Failed')
                       {
                        
                        swal("Sorry!", "somethink wrong !", "error");
                       }          
                    }
                });
          
      });
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

//dynamic add experience

function generete_dynamic_exp(count){

  var exp = ' <div class="row" id="profile_exp_'+count+'">  <div class="col-md-12" style="border-bottom:2px solid #ffb3d1; margin:15px 0;"></div> <div class="row"> <div class="form-group col-xs-12"> <label for="date-to" >Title</label> <input type="text" id="title_'+count+'" class="form-control" name="title[]"  /> </div> </div> <div class="row "> <div class="form-group col-xs-12"> <label for="date-to" >Company</label> <input  type="text" id="company_'+count+'" class="form-control input-group-lg" name="company[]"  > </div> </div> <div class="row "> <div class="form-group col-xs-12"> <label for="date-to"> Location</label> <input  type="text" id="location_'+count+'" class="form-control input-group-lg" name="location[]" > </div> </div> <div class="row"> <div class="form-group col-md-6"> <label for="date-to"> From</label> <select name="from_month[]" id="frommonth_'+count+'" class="form-control"> <option value=""> Month</option> <option value="january"> January</option> <option value="february"> February</option> <option value="march"> March</option> <option value="april"> April</option> <option value="may"> May</option> <option value="june"> June</option> <option value="july"> July</option> <option value="august"> August</option> <option value="september"> September</option> <option value="october"> October</option> <option value="november"> November</option> <option value="december"> December</option> </select> </div> <div class="form-group col-md-6"> <label for="date-to">To</label> <select name="to_month[]" id="tomonth_'+count+'" class="form-control"> <option value=""> Month</option> <option value="january"> January</option> <option value="february"> February</option> <option value="march"> March</option> <option value="april"> April</option> <option value="may"> May</option> <option value="june"> June</option> <option value="july"> July</option> <option value="august"> August</option> <option value="september"> September</option> <option value="october"> October</option> <option value="november"> November</option> <option value="december"> December</option> </select> </div> </div> <div class="row"> <div class="form-group col-md-6"> <select name="from_year[]" id="fromyear_'+count+'" class="form-control"> <option value=""> Year</option><option value="2018"> 2018</option>  <option value="2017"> 2017</option> <option value="2016"> 2016</option> <option value="2015"> 2015</option> <option value="2014"> 2014</option> <option value="2013"> 2013 </option> <option value="2012"> 2012</option> <option value="2011"> 2011</option> <option value="2010"> 2010</option> <option value="2009"> 2009</option> <option value="2008"> 2008</option> <option value="2007"> 2007</option> <option value="2006"> 2006</option> <option value="2005"> 2005</option> <option value="2004"> 2004</option> <option value="2003"> 2003</option> <option value="2002"> 2002</option> <option value="2001"> 2001</option> <option value="2000"> 2000</option> </select> </div> <div class="form-group col-md-6"> <select name="to_year[]" id="toyear_'+count+'" class="form-control">  <option value=""> Year</option><option value="2018"> 2018</option> <option value="2017"> 2017</option> <option value="2016"> 2016</option> <option value="2015"> 2015</option> <option value="2014"> 2014</option> <option value="2013"> 2013 </option> <option value="2012"> 2012</option> <option value="2011"> 2011</option> <option value="2010"> 2010</option> <option value="2009"> 2009</option> <option value="2008"> 2008</option> <option value="2007"> 2007</option> <option value="2006"> 2006</option> <option value="2005"> 2005</option> <option value="2004"> 2004</option> <option value="2003"> 2003</option> <option value="2002"> 2002</option> <option value="2001"> 2001</option> <option value="2000"> 2000</option> </select> </div> </div> <div class="row"> <div class="form-group col-xs-12"> <label for="date-to"> Description</label> <textarea name="description[]" id="description_'+count+'" class="form-control" style="min-height:100px;" > </textarea> </div> </div> <div class="row"> <div class="form-group col-xs-12"> <label for="date-to">Add or link to external documents, photos, sites, videos, and presentations.</label> </div> </div> <div class="row"> <div class="form-group col-xs-12"> <input type="button"  id="link_show" value="Link" class="btn"> </div> </div> <div class="row"> <div class="form-group col-xs-12"> <input type="text" name="link[]" id="link_url_'+count+'" class="form-control" placeholder="Paste or type a link to a file or video"> </div> <div class="col-sm-12 text-right">  <a href="JavaScript:void(0);"  class="animated bounceInLeft remove_exp btn btn-info btn-sm"> Remove</a> </div> </div> </div>';

    return exp;
}



$(document).ready(function(){
        $("#add_more_exp").click(function()
          {       
            var nxtticket_count = $(this).data("add_multi_exp"); 
            var nxtvenueHTML = generete_dynamic_exp(nxtticket_count);
            $("#dynamic_add_exp").append(nxtvenueHTML);        
              nxtticket_count++;
           $(this).data('add_multi_exp', nxtticket_count); //update data nxtportion   
        });   
});

// remove div
$(document).on('click', '.remove_exp', function(e)
    {
         
          $(this).parents('[id^=profile_exp_]').remove();
         
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

  //calendar shows col-md-3

  $(document).ready(function() {

    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
      },
      defaultDate: '2018-02-12',
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'All Day Event',
          start: '2018-02-01',
        },
        {
          title: 'Long Event',
          start: '2018-02-07',
          end: '2018-02-10'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-09T16:00:00'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2018-02-16T16:00:00'
        },
        {
          title: 'Conference',
          start: '2018-02-11',
          end: '2018-02-13'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T10:30:00',
          end: '2018-02-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2018-02-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2018-02-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2018-02-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2018-02-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2018-02-13T07:00:00'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2018-02-28'
        }
      ]
    });

  });

</script>
</body>
</html>
