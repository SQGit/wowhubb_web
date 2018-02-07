<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<title>Wowhubb | Your One Stop Event Networking Platform</title>

<!-- Stylesheet
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
#page-contents{
  padding: 10px 0 50px 25px;
  background-color:#fff;
  border-radius:5px;
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

.tabs-right > .nav-tabs,
.tabs-left > .nav-tabs {
  border-bottom: 0;
}

.tab-content > .tab-pane,
.pill-content > .pill-pane {
  display: none;
}

.tab-content > .active,
.pill-content > .active {
  display: block;
}


.tabs-left > .nav-tabs > li,
.tabs-right > .nav-tabs > li {
  float: none;
}

.tabs-left > .nav-tabs > li > a,
.tabs-right > .nav-tabs > li > a {
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

.tabs-left > .nav-tabs > li > a:hover,
.tabs-left > .nav-tabs > li > a:focus {
  border-color: #eeeeee #dddddd #eeeeee #eeeeee;
}

.tabs-left > .nav-tabs .active > a,
.tabs-left > .nav-tabs .active > a:hover,
.tabs-left > .nav-tabs .active > a:focus {
  border-color: #ddd transparent #ddd #ddd;
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
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:13px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Home</span></a> <a href="<?php echo base_url('event/create_event_landing'); ?>" style="text-decoration:none;"><span style="font-size:13px;  background:#757575; padding:5px 10px; border-radius:5px; color:#fff;">Create Event</span> </a> <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:13px;  padding:5px 10px; border-radius:5px; color:#fff;"><i class="fa fa-sign-in"></i> Logout</span> </a>
        </ul>
        <form class="navbar-form navbar-right hidden-sm">
          <div class="form-group"> <i class="icon ion-android-search"></i>
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
<!--Header End-->
<div class="google-maps">
      
</div>

<div class="container"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
    <div class="timeline-cover"> 
      <img src="../assets/images/covers/1.jpg" style="background-size:cover; width:100%; max-height:300px;" alt=""/>;
      <!--Timeline Menu for Large Screens-->
      <div class="timeline-nav-bar hidden-sm hidden-xs">
        <div class="row">
          <div class="col-md-3">
            <div class="profile-info">
              <form id="profile_img" action="<?php echo base_url('profile/profile_img_upload'); ?>" method="post" enctype="multipart/form-data">
                <?php 
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
                <input class="file-upload" id="imageUpload" type="file" name="profile_img" capture>
              </form>
            </div>
          </div>
          <div class="col-md-9" >
            <div class="profile-info-1">
              <h3 style="color:#fff;">Emeka Ike</h3>
              <p style="color:#fff;" class="text-muted">Managing Director</p>
            </div>
            <ul class="list-inline profile-menu">
              <li><a href="<?php echo base_url ('home/profile_update'); ?>" class="active">Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get') ?>" >Interests</a></li>
              <li><a href="timeline-album.html">Photos</a></li>
              <li><a href="timeline-friends.html">Eventhubb</a></li>
              <li><a href="timeline-friends.html">Wowtag</a></li>
            </ul>
            <ul class="follow-me list-inline">
              <li>102 Connections</li>
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
            <li><a href="timline.html">About</a></li>
            <li><a href="timeline-about.html" class="active">Interests</a></li>
            <li><a href="timeline-album.html">Photos</a></li>
            <li><a href="timeline-friends.html">Eventhubb</a></li>
            <li><a href="timeline-friends.html">Wowtag</a></li>
          </ul>
          <button class="btn-primary">Add Friend</button>
        </div>
      </div>
      <!--Timeline Menu for Small Screens End--> 
      
    </div>
    <div id="page-contents">
      <div class="row">
      <div class="col-md-12">
        <div id="exTab2" >
          <ul class="nav nav-tabs">
            <li class="active"> <a  href="#1" data-toggle="tab">Personal Profile</a> </li>
            <li><a href="#2" data-toggle="tab">Professional Profile</a> </li>
            
          </ul>
          <div class="tab-content ">
            <div class="tab-pane active" id="1" style="margin-top: 20px;">
              <div class="row">
              
                <div class="col-md-9"> 
                  <div class="tab-pane active" id="a">
                  <div class="form-wizard col-md-12"  > 
          <!-- Edit Work and Education
              ================================================= -->
          <div class="edit-profile-container">
            <div class="block-title">
              <!--<h4 class="grey"><i class="fa fa-user"></i>Personal Profile</h4>-->
            </div>
            <div class="edit-block" style="margin-bottom: 0px;">
            <form action="<?php echo base_url('profile/profile_update'); ?>" method="post"  id="profile_update" class="form-inline">
              <div class="row">
                <div class="form-group col-xs-6">
                  <label for="date-from">Email</label>
                  <input id="date-from" class="form-control input-group-lg" type="text" name="email"  value="<?php echo $this->session->userdata('email'); ?>" readonly />
                </div>
                <div class="form-group col-xs-6">
                  <label for="date-to" class="">Place you live</label>
                  <input id="date-from" class="form-control input-group-lg" type="text" name="place" title="Enter a Date"  value="<?php if(isset($profile->place)){echo $profile->place;} else{echo "";} ?>" />
                </div>
              </div>
              </div>
              <div class="row">
                <div class="form-group col-xs-6">
                  <label for="date-from">Birthday</label>
                  <input id="birthday" type="text" class="form-control input-group-lg" name="birthday" title="Enter a Date" value="<?php if(isset($profile->birthday)){echo $profile->birthday;}else{echo "";} ?>" />
                </div>
                <div class="form-group col-xs-6">
                  <label for="date-to" class="">Weddings</label>
                  <input id="wedding" type="text"  class="datepicker form-control input-group-lg"  name="wedding" title="Enter a Date" value="<?php if(isset($profile->wedding)) {echo $profile->wedding;} else{echo "";} ?>" />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xs-6">
                  <label for="date-from">Social Functions</label>
                  <input id="socialfunction" type="text" class="datepicker form-control input-group-lg"  name="social" title="Enter a Date" value="<?php if(isset( $profile->socialfunction)) {echo $profile->socialfunction; } else{echo "";}?>" />
                </div>
                <div class="form-group col-xs-6">
                  <label for="date-to" class="">Parties</label>
                  <input id="party" type="text" class="form-control input-group-lg"  name="party" title="Enter a Date" value="<?php if(isset($profile->parties)) {echo $profile->parties; } else{echo "";} ?>" />
                </div>
              </div>
              
              <div class="row" >
                <div class="form-group col-xs-6" style="margin-top: -15px;">
                  <label for="date-from"></label>
                  <input type="text" id="other" class="form-control input-group-lg" name="other" style="display: none;" placeholder="Married to" />
                </div>
              </div>
              <div class="row">
                <div  style="width:100%;" class="text-center">
                  <input type="submit" value="Save Changes" class="btn btn-primary" style="width:140px;">
                </div>
              </div>
            </form>
          </div>
        </div>
                </div>
                </div>  
                <div class="col-md-3 static"> 
          
          <!--Sticky Timeline Activity Sidebar-->
          <div id="sticky-sidebar">
            <h4 class="grey"><i class="fa fa-search"></i> Search for Event</h4>
            <div class="feed-item">
              <div class="live-activity">
                <span><a href="#" style="font-size:16px;">Event Venues</a></span>
                <p class="text-muted">All Event Venues</p>
              </div>
            </div>
            <div class="feed-item">
              <div class="live-activity">
                <span><a href="#" style="font-size:16px;">Event Service Providers</a></span>
                <p class="text-muted">Service Providers</p>
              </div>
            </div>
            <div class="feed-item">
              <div class="live-activity">
                <span><a href="#" style="font-size:16px;">Event Tickets</a></span>
                <p class="text-muted">Browse all</p>
              </div>
            </div>
            <div class="feed-item">
              <div class="live-activity">
                <span><a href="#" style="font-size:16px;">!WOW</a></span>
                <p class="text-muted">Upcoming Events</p>
              </div>
            </div>
          </div>
        </div> 
                
               
              </div>
            </div>
            <!-- Day 2 -->
            
            <div class="tab-pane" id="2" style="margin-top: 20px;">
              <div class="row">
              <div class="col-md-9">
              <div class="tab-pane active" id="a">
                  <div class="form-wizard col-md-12"  > 
          <!-- Edit Work and Education
              ================================================= -->
          <div class="edit-profile-container">
            <div class="block-title">
              <!--<h4 class="grey"><i class="fa fa-user"></i>Professional Profile</h4>-->
            </div>
            <div class="edit-block" style="margin-bottom: 0px;">
            <form action="<?php echo base_url('profile/profile_update'); ?>" method="post"  id="profile_update" class="form-inline">
              <div class="row">
                <div class="form-group col-xs-6">
                  <label for="date-from">Designation</label>
                  <input id="date-from" class="form-control input-group-lg" type="text" name="email"  value=""  />
                </div>
                <div class="form-group col-xs-6">
                  <label for="date-to" class="">Education</label>
                  <input id="date-from" class="form-control input-group-lg" type="text" name="place" title="Enter a Date"  value="" />
                </div>
              </div>
              </div>
              <div class="row">
                <div class="form-group col-xs-6">
                  <label for="date-from">Work Experience</label>
                  <input id="birthday" type="text" class="form-control input-group-lg" name="birthday" title="Enter a Date" value="" />
                </div>
                <div class="form-group col-xs-6">
                  <label for="date-to" class="">Certifications/Skills</label>
                  <input id="wedding" type="text"  class="datepicker form-control input-group-lg"  name="wedding" title="Enter a Date" value="" />
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xs-6">
                  <label for="date-from">Volunteer Profile</label>
                  <input id="socialfunction" type="text" class="datepicker form-control input-group-lg"  name="social" title="Enter a Date" value="" />
                </div>
                
              </div>
              
              <div class="row" >
                <div class="form-group col-xs-6" style="margin-top: -15px;">
                  <label for="date-from"></label>
                  <input type="text" id="other" class="form-control input-group-lg" name="other" style="display: none;" placeholder="Married to" />
                </div>
              </div>
              <div class="row">
                <div  style="width:100%;" class="text-center">
                  <input type="submit" value="Save Changes" class="btn btn-primary" style="width:140px;">
                </div>
              </div>
            </form>
          </div>
        </div>
                </div>
              </div>
              <div class="col-md-3 static"> 
          
          <!--Sticky Timeline Activity Sidebar-->
          <div id="sticky-sidebar">
            <h4 class="grey"><i class="fa fa-search"></i> Search for Event</h4>
            <div class="feed-item">
              <div class="live-activity">
                <span><a href="#" style="font-size:16px;">Event Venues</a></span>
                <p class="text-muted">All Event Venues</p>
              </div>
            </div>
            <div class="feed-item">
              <div class="live-activity">
                <span><a href="#" style="font-size:16px;">Event Service Providers</a></span>
                <p class="text-muted">Service Providers</p>
              </div>
            </div>
            <div class="feed-item">
              <div class="live-activity">
                <span><a href="#" style="font-size:16px;">Event Tickets</a></span>
                <p class="text-muted">Browse all</p>
              </div>
            </div>
            <div class="feed-item">
              <div class="live-activity">
                <span><a href="#" style="font-size:16px;">!WOW</a></span>
                <p class="text-muted">Upcoming Events</p>
              </div>
            </div>
          </div>
        </div>

              </div>
              
            </div>
            <!-- Day 3 -->
            
             
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
<script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-1.12.4.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery-ui.js')?>"></script> 
<script src="<?php echo base_url('assets/css/custom/js/form-wizard.js')?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.datetimepicker.full.min.js')?>"></script> 
<script>
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



            //profile full page submit and updated profile page

     var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).ready(function(){

    $(document).on("submit", "#profile_update", function(e){
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



  </script>
</body>
</html>
