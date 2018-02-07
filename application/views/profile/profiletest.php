<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Wowhubb | Your One Stop Event Networking Platform</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap.min.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css') ?>" />
		<link rel="stylesheet" href="<?php echo base_url ('assets/css/ionicons.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/calender.css') ?>" />
    <link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
    
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
    <style type="text/css">
    #footer {
    	background: #fff;
    	position: relative;
    	top: 0px;
    }


#coverfile
{
    display: none;
}

#coverimage
{
    cursor: pointer;
}
#imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}

</style>

	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
  <nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container"> 
      
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header"> <a class="navbar-brand" href="index-register.html"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
         
         <a href="#"> <span style="font-size:13px;  background:#e91e63; padding:5px 10px; border-radius:5px; color:#fff;">Personal</span></a>
           <a href="#"><span style="font-size:13px;  background:#757575; padding:5px 10px; border-radius:5px; color:#fff;">Professional</span></a>

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
    <!--Header End-->

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">
            <div class="cover" >
           <form action="" id="cover_img" method="post" enctype="multipart/form-data">
            <img id="coverimage" class="cover-pic" src="http://localhost/wowhubb/assets/images/covers/1.jpg" />
              <input id="coverfile" class="cover-upload" type="file" name="cover_img" >
           </form>
         </div>
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
                       echo  '<img  class="profile-pic img-responsive profile-photo"  id="profileImage" src="http://localhost/wowhubb/assets/images/album/5.jpg">';
                       } 
                ?>
                
                    <input class="file-upload" id="imageUpload" type="file" name="profile_img" capture>
                  
                   
                  </form>
                </div>
              </div>
              <div class="col-md-9" >
                 <div class="profile-info">
                
                  <h3 style="color:#fff;">Emeka Ike</h3>
                  <p style="color:#fff;" class="text-muted">Managing Director</p>
                
                </div>
                <ul class="list-inline profile-menu">
                  <li><a href="timeline.html" class="active">Profile</a></li>
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
          </div><!--Timeline Menu for Large Screens End-->

          <!--Timeline Menu for Small Screens-->
          <div class="navbar-mobile hidden-lg hidden-md">
            <div class="profile-info">
                  <img src="<?php echo base_url ('assets/images/users/user-1.jpg') ?>" alt="" class="img-responsive profile-photo" />
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
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
          
            <div class="col-md-8"  >

              <!-- Edit Work and Education
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-book-outline"></i>Personal Profile</h4>
                  <div class="line"></div>
                  
                 
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
                        <input type="text" class="datepicker form-control input-group-lg" name="birthday" title="Enter a Date" value="<?php if(isset($profile->birthday)){echo $profile->birthday;}else{echo "";} ?>" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date-to" class="">Weddings</label>
                        <input type="text"  class="datepicker form-control input-group-lg"  name="wedding" title="Enter a Date" value="<?php if(isset($profile->wedding)) {echo $profile->wedding;} else{echo "";} ?>" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="date-from">Social Functions</label>
                        <input type="text" class="datepicker form-control input-group-lg"  name="social" title="Enter a Date" value="<?php if(isset( $profile->socialfunction)) {echo $profile->socialfunction; } else{echo "";}?>" />
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="date-to" class="">Parties</label>
                        <input type="text" class="datepicker form-control input-group-lg"  name="party" title="Enter a Date" value="<?php if(isset($profile->parties)) {echo $profile->parties; } else{echo "";} ?>" />
                      </div>
                    </div>
                     <div class="row">
                       <div class="form-group col-xs-12">
                        <label for="date-to" class="">Marital Status</label>
                        <select name="marital_status" class="form-control" id="types" >
                          
                          <option ><?php if(isset($profile->maritalstatus)){echo $profile->maritalstatus; } else{echo "";} ?></option>
                          <option value="single">Single </option>
                          <option value="married">Married </option>                      
                        </select>
                      </div>
                    </div>
                    <div class="row" >
                      <div class="form-group col-xs-12" style="margin-top: -15px;">
                        <label for="date-from"></label>
                         <input type="text" id="other" class="form-control input-group-lg" name="other" style="display: none;" placeholder="Married to" />
                      </div>
                    </div> 
                    
                    <div class="row">
                       <div  style="width:600px;" class="text-center">
                         <input type="submit" value="Save Changes" class="btn btn-primary" style="width:140px;">
                        </div>
                    </div>
                    
                  </form>
                </div>  

              </div>

            <div class="col-md-3 static">
              
              <!--Sticky Timeline Activity Sidebar-->
              <div id="sticky-sidebar">
                <h4 class="grey">Search for Event</h4>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link" style="font-size:20px;">Event Venues</a></p>
                    <p class="text-muted">All Event Venues</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link" style="font-size:20px;">Event Service Providers</a></p>
                    <p class="text-muted">Service Providers</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link" style="font-size:20px;">Event Tickets</a></p>
                    <p class="text-muted">Browse all</p>
                  </div>
                </div>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link" style="font-size:20px;">!WOW</a></p>
                    <p class="text-muted">Upcoming Events</p>
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
    <footer id="footer">
        <div class="container">
          <?php  $this->load->view('includes/footer.php'); ?>
        </div>
    </footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
 

    <!-- Scripts
    ================================================= -->
    <script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     
     <script>

      //cover id names

   $("#coverfile").click(function(e) {
    $("#coverimage").click();
    });


   $("#profileImage").click(function(e) { //this two value is profile image  id name 
      $("#imageUpload").click();  
      });

    $( function() {
    $( ".datepicker" ).datepicker(); // date picker script
  } );

    $(document).ready(function () {
        $('#types').change(function () {
            if ($('#types').val() == 'married') {
                $('#other').show();
            }
            else {
                $('#other').hide();
            }
        });
    });


    var base_url = '<?php echo base_url() ?>';

$(document).ready(function(){

$(document).on("submit", "#profile_update", function(e){
     e.preventDefault();
    var url = $(this).attr('action');
    var formdata = new FormData(this);
    //alert(url);
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

//image upload here 

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

//cover image upload 



  </script>
  </body>

</html>
