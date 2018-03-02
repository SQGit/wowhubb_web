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

 #delete_btn_personal {
    background-image: url("<?php echo base_url('assets/images/delete-btn.png')?>");
    background-repeat: no-repeat;
    border: none;
    width: 32px;
    height: 31px;
    cursor: pointer;
    color: transparent;
    background-color: transparent;
    outline: none;
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
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"> <img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="position:relative;">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span> </a> <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span> </a> <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span> </a>
        </ul>
        <form class="navbar-form navbar-right hidden-sm" style="position:absolute; right:325px; top:0px;" >
          <div class="form-group"> <i class="icon ion-android-search"></i>
            <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px; min-width:330px;" />
            <br/>
            <span id="display1"> </span> 
            <!-- <input type="text" class="search form-control" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People">                 
                        --> 
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
<div class="google-maps"> </div>
<div class="container"> 
  
  <!-- Timeline
      ================================================= -->
  <div class="timeline">
    <div class="timeline-cover"> <img class="cover-pic" src="../assets/images/wow-tag-banner.jpg" style="background-size:cover; width:100%; margin-top:20px;" > <br>
      <!--Timeline Menu for Large Screens-->
      
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
          
          <div class="col-md-9">
                      <div class="col-md-12" style="margin-top:15px;">
                        <p>!Wowtag is a unique feature in Wowhubb that is aimed at maximizing the mobile engagment of your users for your event, All a user needs to do is enter your event !WOWTAG catch word or pharse and a 20-30 seconds video is played for them to capture the whole essence of the event.  All !wowtag views are currently optimized for mobile views and engagments</p>
                      </div>

                      <!-- wowtag video part start here -->

                    <?php 
                          foreach ($wowtagvideo as $wowtagvideos) 
                          {                                                      
                              
                    ?>

          <div class="col-md-12">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="pnl-brdr-clr">
                  <tbody>
                          <tr style="font-size:13px;">
                            <td height="40" bgcolor="#f9f9f9"><strong>Wowtag Video</strong></td>
                            <td width="32%" bgcolor="#f9f9f9"><strong>Hosted by</strong></td>
                            <td width="13%" bgcolor="#f9f9f9"><strong>No. of Views</strong></td>
                            <td width="6%" bgcolor="#f9f9f9"><strong>Edit</strong></td>
                            <td width="15%" bgcolor="#f9f9f9"><strong>Call to Action</strong></td>
                            <td width="13%" bgcolor="#f9f9f9"><strong>Status</strong></td>
                            <td width="7%" height="40" bgcolor="#f9f9f9"><strong>Delete </strong></td>
                          </tr>
                      <tr>
                          <td width="14%" height="40" align="left" valign="top" bgcolor="#fff">
                            <div>
                               <?php
                                      if(isset($wowtagvideos->wowtagvideo) && ($wowtagvideos->wowtagvideo != 'null') )
                                      {
                                 ?> 

                                      <div class="video">
                                          <video style="width:160px; height:88px;" class="myvideo" controlsList="nodownload">
                                               <source src="http://104.197.80.225:3010/wow/media/event/<?php echo $wowtagvideos->wowtagvideo; ?>" type="video/mp4">
                                          </video>
                                      </div>

                                <?php  } ?>
                            </div>
                            <strong style="font-size:16px; color:#fc6653;">!<span id="rtr-s-Text_58_1">
                               <?php if(isset($wowtagvideos->eventtitle)) { echo $wowtagvideos->eventtitle; } else{ echo "";} ?>
                            </span>
                            </strong><br>
                          </td>
                          <td align="left" valign="top" bgcolor="#fff"><strong>Hebron Plus</strong><br>
                            Minute Maid Hall <br>
                            1234, White Lane Av  Houston Texas 77798<br>
                            13th- 14th &nbsp;January 2017<br>
                            09:00 AM -12:00 PM
                          </td>
                          <td height="40" align="left" valign="top" bgcolor="#fff">
                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tbody>
                              <tr>
                                <td height="30"><img src="../assets/images/profile-icon.png" alt=""><strong style="font-size:22px; color:#FF7600;">2000</strong></td>
                              </tr>
                            </tbody>
                            </table>
                          </td>

                            <td align="left" valign="top" bgcolor="#fff">
                              <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tbody>
                                <tr>
                                  <td height="20"><a href="#"><img src="../assets/images/edit_icon.png" alt=""></a></td>
                                  </tr>
                              </tbody>
                              </table>
                            </td>

                            <td align="left" valign="top" bgcolor="#fff">
                              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tbody>
                               
                                <tr>
                                  <td>
                                    <a href="#" style="font-weight: bold; font-size: 20px;">
                                      <?php 
                                        if(isset($wowtagvideos->engagementformaction) && ($wowtagvideos->engagementformaction !='') )
                                          {
                                              echo $wowtagvideos->engagementformaction;
                                          } 
                                          else{ echo " "; } 
                                      ?>
                                    </a>
                                  </td>
                                </tr>

                              </tbody>
                              </table>
                            </td>

                            <td align="center" valign="top" bgcolor="#fff">
                                    <div class="toggle-switch" style="text-align:center!important;">
                                                <label class="switch" >
                                                  <input type="checkbox">
                                                  <span class="slider round"></span>
                                                </label>
                                            </div>          
                            </td>
                            <td height="40" align="center" valign="top" bgcolor="#fff"><br>
                              <form class="delete_wowtag" action="<?php echo base_url('nearbyevents/delete_wowvideo'); ?>" method="POST" >
                                <input type="hidden" name="event_id" value="<?php echo $wowtagvideos->_id; ?>">
                                <input type="submit" class="btn-primary" id="delete_btn_personal" value="Delete Event">
                              </form>
                            </td>
                      </tr>
        
                          <tr>
                            <td height="40" align="left" valign="top" bgcolor="#fff">&nbsp;</td>
                            <td height="40" colspan="6" align="center" valign="middle" bgcolor="#F9F9F9">
                              <strong style="color:#F00;">
                                  <?php
                                        if(isset($wowtagvideos->runtimefrom) ) 
                                        {                       
                                          echo date('M-d-Y', strtotime($wowtagvideos->runtimefrom))." To ";
                                          echo date('M-d-Y', strtotime($wowtagvideos->runtimeto));
                                        }
                                      
                                  ?>
                              </strong>
                            </td>
                          </tr>
                   
                </tbody>
            </table>
          </div>

          <?php } ?>
            
          </div>

         
          <div class="col-md-3" style="margin-top:15px; position:relative;">
            <div style="position:absolute; z-index:0;"><img src="../assets/images/mockup.png" class="img-responsive" alt=""></div>
            <div style="position:absolute; z-index:1; top:35px; left:10px;">
              <div class="row">
              <div class="col-md-12">
              <div class="col-md-12">
                <div class="col-md-12 text-center" style="margin-bottom:0px;">
  					<h3 style="color:#e91e63!important;">!Elevation2018</h3>
                </div>
                <div class="col-md-12" style="margin-bottom:10px;"><img src="../assets/images/em-video.png" class="img-responsive img-thumbnail" alt=""></div>
                <div class="col-md-12" style="margin-bottom:10px; line-height:20px;"><strong style=" font-size:17px;">Hebron Plus</strong><br>
                    Minute Maid Hall <br>
                    1234, White Lane Av  Houston Texas 77798<br>
                    13th- 14th  January 2017<br>
                    09:00 AM -12:00 PM
                     <hr style="margin-top:5px; margin-bottom:0;">
                    </div>
                   
                    <div class="col-md-12" style="margin-bottom:10px; line-height:18px; font-size:13px;">
                    You Can Do Anything You Set Your Heart And Mind To Achieve 
                    Come And Learn from The Best Mentors  On How To Reach Your Next Level
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-12" style="margin-bottom:10px; line-height:18px; background-color:#E0E0E0; padding-top:7px; padding-bottom:7px; border-radius:5px;">
                        <div class="col-md-4 text-left"><i class="fa fa-share"></i> Share</div>
                        <div class="col-md-8 text-right"><i class="fa fa-user"></i> 1000 Attending</div>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                    <input type="submit" class="btn-primary" value="Register">
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
<script src="<?php echo base_url('assets/js/bootbox.js')?>"></script> <!-- conformation delete boot box -->


<script>

//video controls hide and show mouse hover  
    $('.myvideo').hover(function toggleControls() {  
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
})
 
//event delete from db

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".delete_wowtag", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);

     bootbox.confirm("Are you sure you want to delete?", function(result) {
        if(result)
          {
                  
              $.ajax({
                      url : url,
                      context:this,
                      method: 'POST',
                      data: formdata,
                      processData: false,
                      contentType: false,
                      dataType:'json',
                      context:this,   //here we use this function so declare here
                      error: function(xhr,status,error)
                      {   
                          alert(xhr.responseText);
                      },              
                      
                      success: function(response)
                      {
                         if(response.status == 'success')
                         {                     
                              window.location.href = base_url+'nearbyevents/get_wowtag_video';                                     
                          }else 
                           {                    
                              swal("Sorry!", "somethink wrong try again !", "error");
                           }
                      }

                  });
          }

     }); 
    
  });

});    
   
</script>

</body>
</html>