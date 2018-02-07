<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
<meta name="robots" content="index, follow" />
<title>Wowhubb | Your One Stop Event Networking Platform</title>

<!-- Stylesheets
    ================================================= -->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/bootstrap.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/style.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/ionicons.min.css') ?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/js/sweetalert.css')?>" />
<!-- magnific-popup image-->
<link rel="stylesheet" href="<?php echo base_url ('assets/css/magnific-popup.css')?>" />
<link rel="stylesheet" href="<?php echo base_url ('assets/css/normalize.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url ('assets/css/videopopup.css')?>" media="screen" />
<!--Google Font-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>

<!--Favicon-->
<link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
<style type="text/css">

 .timeline-nav-bar {
    background: rgba(0,0,0, .7);
    width: 96%;
    position: absolute;
    bottom: 7px;
    height: 45px;
    right: 10px;
}
 .timeline-nav-bar ul.follow-me {
    margin: 0;
    position: absolute;
    right: 15px;
    top: 7px;
}
ul li {
    list-style-image: none;
}
  .post-content img.post-image, video.post-video, .google-maps {
    width: 100%;
    height: 350px;
}
   #page-contents{
      padding: 30px 0 50px;
      /*background-color:#e7e5e6;*/
    }
#footer {
	background: #fff;
	position: relative;
	top: 0px;
}
.upload-button {
	padding: 4px;
	border: 1px solid black;
	border-radius: 5px;
	display: block;
	float: left;
	margin-top: -40px;
}
.profile-pic {
	max-width: 200px;
	max-height: 200px;
	display: block;
	border-radius: 50px;
}
.file-upload {
	display: none;
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left:-35px;
    z-index: 999999;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

#page-contents .form-group i{
  color: #9E9E9E;
  font-size: 16px;
  right: 15px;
  position: absolute;
  top: 15px;
}
/*search box style*/
.live-search-list {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 1em;
background-color: #2c3e50;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
font-family: 'Lato', sans-serif;
color: #fff;
}

.live-search-box {
width: 100%;
display: block;
padding: 1em;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
border: 1px solid #3498db;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}

.live-search-list li {
color: fff;
list-style: none;
padding: 0;
margin: 5px 0;
}

.request {
    background-image: url('../assets/images/intro-icon.png')!important;
     
    background-size: 25px!important;
    background-repeat: no-repeat!important;
    background-position: 8px 7px!important;
}
 .btn-primary-1{
  font-size: 14px;
  font-weight: 600;
  color: #333;
  border-radius: 30px;
  border:1px solid #333;
  background: transparent;
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
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"><img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="position:relative;">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span>
          </a> 
          <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span>
          </a> 
          <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span>
          </a>
        </ul>
        

       <form class="navbar-form navbar-right hidden-sm" style="position:absolute; right:300px; top:0px;" >
           <div class="form-group">
                   <i class="icon ion-android-search"></i>

                    <input type="text" class="search form-control live-search-box" id="searchbox" name="friends_search" placeholder="Search !Events, !Venues, !Wowtags, !People" style="height:30px; min-width:330px;" /><br/>

                      <span id="display1">               
                      </span>
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

<div id="page-contents" style="padding:45px 0 50px;">
  <div class="container">
    <div class="row"> 
      
      <!-- Newsfeed Common Side Bar Left
          ================================================= -->
      <div class="col-md-3">
        <div class="profile-card">

          <div style="width:100%; float:left;">
            <?php 
            if(!is_null($this->session->userdata('personal_image')))
            { ?>                      
            <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo$this->session->userdata('personal_image'); ?>" alt="user" class="profile-photo" />
            <?php }  else { ?> 
             
               <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo" />
               <?php } ?>
              <span class="text-white" style="margin-top:5px; font-size:18px;"><?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name'); ?>          
            </span>
            <p><?php echo $this->session->userdata('designation');  ?></p>
           </div>
          <div style="font-size:20px; color:#fff; margin-top:-20px; width:100%; float:right; text-align:right;"><a href="#"> &nbsp;&nbsp;<i class="icon ion-arrow-right-b" style="font-size:28px; color:#fff;"></i></a> </div>
        </div>
        <!--profile card ends-->
        
        <div id="chat-block" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:2px; border-radius:5px;">
          <ul class="nav-news-feed" style="margin-bottom:10px;">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Create</h5>
            <li style="background-color:#f1f1f1; padding:5px; border-radius:5px;">
            <img src="<?php echo base_url('assets/images/create-event-icon.png'); ?>" alt="user" /><a style="font-weight: bold;" href="<?php echo base_url('event/event_popup'); ?>">Create Event</a>
            </li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
          <!--  <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Our Links</h5>-->
            <li><img src="<?php echo base_url('assets/images/event-feed-icon.png'); ?>" alt="user" /><a href="<?php echo base_url('event/get_eventfeed'); ?>">Event Feed</a></li>
            <li><img src="<?php echo base_url('assets/images/profile-icon.png'); ?>" alt="user" /><a href="<?php echo base_url('profile/profile_get'); ?>">My Profile</a></li>
            <li><img src="<?php echo base_url('assets/images/network-icon.png'); ?>" alt="user" /><a href="#">My Network</a></li>
            <li><img src="<?php echo base_url('assets/images/album-icon.png'); ?>" alt="user" /><a href="#">My Album</a></li>
            <li><img src="<?php echo base_url('assets/images/wow-tag-icon-1.png'); ?>" alt="user" /><a href="#">Wowtags</a></li>
            <li><img src="<?php echo base_url('assets/images/event-hubb-icon.png'); ?>" alt="user" /><a href="#">Event Hubb</a></li>
            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>

          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Event Pages</h5>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Craig Birthday</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Gina Catering</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Elevation 2017</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Startup 2017</a></div>
            </li>
            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Business Pages</h5>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Hebronplus</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Gina Catering</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Living Word Church</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Sharaton Event Center</a></div>
            </li>
            <li style="border-bottom:1px solid #ccc; margin-top:10px;"></li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Create</h5>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Create Ad</a></div>
            </li>
            <li>
              <div style="margin-left:0; text-align:left;"><a href="#"><i class="fa fa-caret-right" style="margin-top:4px;"></i>Create Business Ad</a></div>
            </li>
          </ul>
          <!--news-feed links ends--> 
          
        </div>
        <!--chat block ends--> 
      </div>
     <div class="col-md-6" style="background-color:#fff; ">         
        <!-- Post Create Box =================================== -->    
        <?php  foreach ($friend as $friends) {  ?>             
        <div class="create-post" style="background-color: #fff; padding:10px; margin-bottom: 0px; ">
             <div class="row">
                     <div class="col-md-2 col-sm-12">
                         <div class="form-group" style="display:-webkit-inline-box; width:90%;"> 
                              <?php if(isset($friends->personalimage))
                              { ?>
                                <img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $friends->personalimage; ?>" alt="user" class="profile-photo" />
                              <?php } else { ?>
                                 <img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo-md" />
                              <?php } ?>                                                       
                         </div>
                     </div>
                          <div class="col-md-4 col-sm-12">
                                    <div class="pull-left" style="width:78%; text-transform: capitalize; font-size: 18px;"> <?php echo $friends->firstname.' '. $friends->lastname; ?> <br>
                                          <span style="color:#333; font-size:15px;">
                                            <?php if(isset($friends->designation))
                                            {
                                              echo $friends->designation;
                                              } else { echo "" ;} ?> </span><br>
                                           <span style="color:#333; font-size:13px;"> 
                                            <?php if(isset($friends->place)){echo $friends->place; } else{echo ""; } ?></span>
                                   </div>
                           </div>
                      <div class="col-md-6 col-sm-12">
                        <?php if($friends->status == 'add friend' ){  ?>
                        <form action="<?php echo base_url('Searchfriends/send_request/'.$friends->_id); ?>" class="send_request" method="post" >   
                            <div class="tools pull-right">
                                 <input type="submit" id="request" class="request btn btn-primary-1 pull-right" style="margin-top:3px; text-transform: capitalize; padding: 5px 15px 5px 29px; background-color: transparent; color: #333; border: 1px solid;" value="<?php echo $friends->status; ?>"> 
                            </div>                              
                       </form>  <?php } elseif($friends->status == 'request sent' ){ ?>   
                          <form action="<?php echo base_url('Searchfriends/send_request/'.$friends->_id); ?>" class="send_request" method="post" >   
                            <div class="tools pull-right">
                                  <input type="submit" id="request" class="request btn btn-primary pull-right" style="margin-top:3px; text-transform: capitalize; padding:5px 13px; background: #e91e63;" value="<?php echo $friends->status; ?>"> 
                            </div>                              
                       </form>  <?php } 
                        if($friends->status == 'received'){  ?>
                        <form action="<?php echo base_url('Searchfriends/accept_request/'.$friends->_id); ?>" class="accept_request" method="post" >   
                            <div class="tools pull-right">
                                  <input type="submit" id="accept" class="accept btn btn-primary pull-right" style="margin-top:3px; background-color: #4CAF50; padding:5px 13px; " value="Accept"> 
                            </div>  
                            
                       </form>                       
                        <form action="<?php echo base_url('Searchfriends/decline_request/'.$friends->_id); ?>" class="decline_request" method="post" >   
                            <div class="tools pull-right">
                                  <input type="submit" id="decline" class="decline btn btn-primary pull-right" style="margin-top:3px; margin-right: 10px; padding:5px 13px; background: #e61919;" value="Decline"> 
                            </div>  
                            
                       </form>  
                        <?php }?>  

                      </div>

                  </div>
         
        </div> 
        <?php } ?>  

          <!-- friend accept -->          

      </div>
             
      <!-- Newsfeed Common Side Bar Right
          ================================================= -->
      <div class="col-md-3">

       <div id="sticky-sidebar" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:6px 0 0 0; border-radius:5px;">
          <ul class="nav-news-feed">
            <div class="row" style="margin:15px 0 5px 0;">
              <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-birthday-cake"></i> Book Next Event Venue</a></div>
            </div>
            <div class="row" style="margin:5px 0;">
              <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="<?php echo base_url('service/service_provider'); ?>" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-users"></i> Search Service Provider</a></div>
            </div>
            <div class="row" style="margin:5px 0;">
              <div class="col-md-12" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px;"><a href="#" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-location-arrow"></i> Search for Nearby Events</a></div>
            </div>
          </ul>
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Suggested Groups</h5>
            <div class="col-md-12" style="margin:0 0 15px 0;">
              <div class="row"><img src="<?php echo base_url('assets/images/post-images/14.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
              <div class="row">Beautiful World Events<br>
                170,173 members</div>
              <div class="row"><a href="#" class="text-pink"><span style="font-size:15px;"><i class="fa fa-arrow-circle-o-right"></i> Join</span></a></div>
            </div>
            <div class="col-md-12" style="margin:0 0 15px 0;">
              <div class="row"><img src="<?php echo base_url ('assets/images/post-images/2.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
              <div class="row">Basic Magic Show<br>
                200,024 members</div>
              <div class="row"><a href="#" class="text-pink"><span style="font-size:15px;"><i class="fa fa-arrow-circle-o-right"></i> Join</span></a></div>
            </div>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Suggested Posts</h5>
            <div class="col-md-12" style="margin:0 0 15px 0;">
              <div class="row"><img src="<?php echo base_url ('assets/images/post-images/1.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
              <div class="row">Beautiful Quotes World<br>
                170,173 members</div>
              <div class="row"><a href="#" class="text-pink"><span style="font-size:15px;"><i class="fa fa-arrow-circle-o-right"></i> Join</span></a></div>
            </div>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px;">Trending</h5>
            <li><i class="fa fa-bolt"></i>
              <div><a href="#">Western Desert of Egypt</a> <br>
                Cairo (AFP) - At least 35 Egyptian troops and police officers were killed in clashes.. <a href="#" style="text-decoration:none;">Read more..</a></div>
            </li>
            <li><i class="fa fa-bolt"></i>
              <div><a href="#">Western Desert of Egypt</a> <br>
                Cairo (AFP) - At least 35 Egyptian troops and police officers were killed in clashes.. <a href="#" style="text-decoration:none;">Read more..</a></div>
            </li>
            <li><i class="fa fa-bolt"></i>
              <div><a href="#">Western Desert of Egypt</a> <br>
                Cairo (AFP) - At least 35 Egyptian troops and police officers were killed in clashes.. <a href="#" style="text-decoration:none;">Read more..</a></div>
            </li>
          </ul>
          <!--news-feed links ends-->
          <ul class="nav-news-feed">
            <h5 style="font-weight:bold; font-size:16px; letter-spacing:-.5px; text-align:left;">Sponsored Ads</h5>
            <div class="col-md-12" style="margin:0 0 15px 0;">
              <div class="row"><img src="<?php echo base_url('assets/images/post-images/15.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
              <div class="row">Summer Party Celebration<br>
                170,173 members</div>
              <div class="row"><a href="#" class="text-pink"><span style="font-size:14px;"><i class="fa fa-arrow-circle-o-right"></i> Know more</span></a></div>
            </div>
            <div class="col-md-12" style="margin:0 0 15px 0;">
              <div class="row"><img src="<?php echo base_url('assets/images/post-images/16.jpg')?>" alt="post-image" class="img-responsive img-thumbnail post-image" /></div>
              <div class="row">Fabulous Events<br>
                170,173 members</div>
              <div class="row"><a href="#" class="text-pink"><span style="font-size:14px;"><i class="fa fa-arrow-circle-o-right"></i> Know more</span></a></div>
            </div>
          </ul>
          <!--news-feed links ends--> 
        </div>
     
    </div>
    
  </div>
</div>



<!-- Scripts
    ================================================= --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery-3.2.1.minjs.js')?>" ></script> 
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script> 
<script src="<?php echo base_url ('assets/js/script.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script> 
<script src="<?php echo base_url('assets/js/jquery.appear.min.js')?>" ></script> 
<script src="<?php echo base_url('assets/js/masonry.pkgd.min.js')?>" ></script>
<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>" ></script>
<script src="<?php echo base_url('assets/js/videopopup.js')?>" ></script>
<!-- search suggestion box plugin -->

<script>

//   $(".request").click(function(){
//      // alert('test');
//     $(this).val('received');
// })

      //  send request submit

     var base_url = '<?php echo base_url() ?>'; //form submited
    $(document).ready(function(){

    $(document).on("submit", ".send_request", function(e){
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
                context:this,
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },
                success: function(response)
                {                 
                   if(response.status == 'success')
                   {
                    
                     $(this).find('input[id=request]').val('Request Sent');
                    // alert(response.message);                   
                    }else 
                   {
                    // var req = '#request';
                    //  $(req).val('request send');
                    alert(response.message);  
                   }          
                }
            });
      });
    });

    //  accept request submit

     var base_url = '<?php echo base_url() ?>'; //form submited
    $(document).ready(function(){

    $(document).on("submit", ".accept_request", function(e){
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
                context:this,
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },
                success: function(response)
                {                 
                   if(response.status == 'success')
                   {
                    
                     $(this).find('input[id=accept]').val('Now Friends');
                    // alert(response.message);                   
                    }else 
                   {
                    // var req = '#request';
                    //  $(req).val('request send');
                    alert(response.message);  
                   }          
                }
            });
      });
    });


    //  decline request submit

     var base_url = '<?php echo base_url() ?>'; //form submited
    $(document).ready(function(){

    $(document).on("submit", ".decline_request", function(e){
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
                context:this,
                error: function(xhr,status,error)
                {   
                    alert(xhr.responseText);
                },
                success: function(response)
                {                 
                   if(response.status == 'success')
                   {
                    
                     $(this).find('input[id=accept]').val('Now Friends');
                    // alert(response.message);                   
                    }else 
                   {
                    // var req = '#request';
                   $(this).find('input[id=decline]').val('Not Now');
                    // alert(response.message);  
                   }          
                }
            });
      });
    });



</script>


</body>
</html>
