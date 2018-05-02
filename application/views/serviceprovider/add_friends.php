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
.form-body-classic.form-wizard .btn-1 {
    min-width: 105px;
    height: 30px;
    margin: 0;
    padding: 0 20px;
    border: 1px solid #ccc;
    font-family: 'Lato', sans-serif;
    font-size: 14px;
    font-weight: bold;
    line-height: 30px;
    color: #333;
    background-color: #D7D7D7;
    -moz-border-radius: 30px;
    -webkit-border-radius: 30px;
    border-radius: 30px;
    text-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.panel, .flip {
  padding: 5px;
  margin-top:10px;  
  background-color: transparent;
  border: 0;
  cursor: pointer;
}
.panel {
  padding: 0px;
  display: none;
}

.clr {
    background: #fc6653;
    color: #fff;
    box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
}
</style>
</head>
<body>

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
          <div class="row">
            <div class="col-md-12 text-center" style="font-size:18px; margin-bottom:10px;">Your Network Connections</div>
            <div class="col-md-12 text-center" style="font-size:22px; margin-bottom:120px;">158</div>

            <div class="col-md-12 text-center" style="font-size:22px; margin-bottom:20px;">
            
            <a href="#" data-toggle="modal" data-target=".modal-1" >
            <button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Invite</button></a>
           
            </div>

            <div class="col-md-12 text-center" style="font-size:22px; margin-bottom:10px;"><a href="#" style="font-size:15px; color:#fff;">Manage Your Connections</a></div>
          </div>
        </div>
        <!--profile card ends-->
        
        
        <!--chat block ends--> 
      </div>


      
     <div class="col-md-5" style="background-color:#fff; border: 1px solid #ECECEC; border-radius:5px; "> 
     <div class="row text-center" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:0px; margin-bottom:15px;">
              <a href="#" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-users"></i> Invitation To Network With  People You Know</a>
       </div>        
        <!-- Post Create Box =================================== -->    

        <!-- start  friend list shows array_slice 7 name -->

      <div class="todayevent_show"> 

        <?php  foreach (array_slice($friend, 0, 7) as $friends) {  ?>   

        <div class="commend_show create-post" style="background-color: #fff; padding:10px; margin-bottom: 0px; ">
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
                                    <div class="pull-left" style="width:100%; text-transform: capitalize; font-size: 16px;"> <?php echo $friends->firstname.' '. $friends->lastname; ?> <i class="glyphicon glyphicon-play"></i><br>
                                          <span style="color:#333; font-size:13px;">
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
                       </form>  


                       <?php } elseif($friends->status == 'friend' ){  ?>
                         
                            <div class="tools pull-right">
                                 <input type="submit"  class=" btn btn-primary-1 pull-right" style="margin-top:3px; text-transform: capitalize; padding: 5px 15px 5px 17px; background-color: transparent; color: #333; border: 1px solid;" value="<?php echo $friends->status; ?>"> 
                            </div> 

                       <?php } elseif($friends->status == 'request sent' ){ ?>   

                        <form action="<?php echo base_url('Searchfriends/send_request/'.$friends->_id); ?>" class="send_request" method="post" >   
                            <div class="tools pull-right">
                                  <input type="submit" id="request" class="request btn btn-primary pull-right" style="margin-top:3px; text-transform: capitalize; padding:5px 13px; background-color: #e91e63; background-position: -9999px -9999px!important;" value="<?php echo $friends->status; ?>"> 
                            </div>                              
                       </form> 

                        <?php } 

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

                        <div class="col-md-12"  style="margin-top: -5px; text-align: right;">
                          <p style="color: #fc6653;">
                             
                             <?php 
                                if($friends->mutualfriendscount != 0 )
                                {
                                  echo "Mutual Friends"." " .$friends->mutualfriendscount;
                                }
                                else
                                {
                                  echo " ";
                                }
                             ?>
                             
                          </p>

                       </div>

                      </div>

          </div>
         
        </div> 
        <?php } ?>  
      </div>

          <!-- end  friend list shows array_slice 7 name -->


        <!-- start  friend list shows all name -->
    <div class="">    
      <div class="panel">
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
                                    <div class="pull-left" style="width:100%; text-transform: capitalize; font-size: 16px;"> <?php echo $friends->firstname.' '. $friends->lastname; ?> <i class="glyphicon glyphicon-play"></i><br>
                                          <span style="color:#333; font-size:13px;">
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
                       </form>  

                       <?php } elseif($friends->status == 'friend' ){  ?>
                         
                            <div class="tools pull-right">
                                 <input type="submit"  class=" btn btn-primary-1 pull-right" style="margin-top:3px; text-transform: capitalize; padding: 5px 15px 5px 17px; background-color: transparent; color: #333; border: 1px solid;" value="<?php echo $friends->status; ?>"> 
                            </div>                             
                   
                       <?php } elseif($friends->status == 'request sent' ){ ?>   

                        <form action="<?php echo base_url('Searchfriends/send_request/'.$friends->_id); ?>" class="send_request" method="post" >   
                            <div class="tools pull-right">
                                  <input type="submit" id="request" class="request btn btn-primary pull-right" style="margin-top:3px; text-transform: capitalize; padding:5px 13px; background-color: #e91e63; background-position: -9999px -9999px!important;" value="<?php echo $friends->status; ?>"> 
                            </div>                              
                       </form> 

                        <?php } 

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

                         <div class="col-md-12"  style="margin-top: -5px; text-align: right;">
                          <p style="color: #fc6653;"> 
                             <?php 
                                if($friends->mutualfriendscount != 0 )
                                {
                                  echo "Mutual Friends"." " .$friends->mutualfriendscount;
                                }
                                else
                                {
                                  echo " ";
                                }
                             ?>
                          </p>

                       </div>

                      </div>

          </div>
         
        </div> 
        <?php } ?>  
    </div>
         <div class="flip col-md-12 text-center clr" style="font-size: 17px;" >View all</div>
          <div class="col-md-12 line-divider"></div>
</div>
        
          <!-- end  friend list shows all name -->





          <!-- friend accept -->          
              <div class="row text-center" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:0px; margin-top:15px; margin-bottom:15px;">
                    <a href="#" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-users"></i> You Were In Same Event With These People</a>
              </div>
              <div class="row">
               <div class="col-md-12" style="margin-top:0px; margin-bottom:15px;">
               <div class="col-md-3"><img src="../assets/images/net-1.jpg" class="img-responsive" alt="user" /></div>
                 <div class="col-md-9" style="margin-top:10px;"><span style="font-size:17px; color:#e91e63;"><img src="../assets/images/wow-pink.png"/> StartupJump 2018</span></div>
               </div>
              </div>
             <div class="row" style="margin-bottom:15px;">
               <div class="col-md-12">
                 <div class="col-md-2"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                  <div class="col-md-6" style="text-transform: capitalize; font-size: 16px;">Emeka Adagbo <i class="glyphicon glyphicon-play"></i> <br>
                  <span style="font-size:12px;">Software Developer At Vineture Inc</span><br>
                  <span style="font-size:12px;">Houston  Texas</span>
                  </div>
                  <div class="col-md-4 text-center"><span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Connect</button></span><a href="#">Ignore</a>  </div>
             </div>
             <div class="row" >
               <div class="col-md-12" style="margin-top:15px; margin-bottom:15px;">
                 <div class="col-md-12">
                   <div class="col-md-12" style="border-bottom:1px solid #ccc;"></div>
                 </div>
               </div>
               </div>

             <div class="row" style="margin-bottom:15px;">
               <div class="col-md-12">
                 <div class="col-md-2"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                  <div class="col-md-6" style="text-transform: capitalize; font-size: 16px;">TD Jakes <i class="glyphicon glyphicon-play"></i> <br>
                  <span style="font-size:12px;">CEO Lillyvalley Cakes</span><br>
                  <span style="font-size:12px;">Houston  Texas</span>
                  </div>
                  <div class="col-md-4 text-center"><span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Connect</button></span><a href="#">Ignore</a>  </div>
               </div>
             </div>
           </div>
     
     
          <div class="row">
             <div class="col-md-12" style="margin-top:0px; margin-bottom:15px;">
             <div class="col-md-3"><img src="../assets/images/net-2.jpg" class="img-responsive" alt="user" /></div>
               <div class="col-md-9" style="margin-top:10px;"><span style="font-size:17px; color:#e91e63;"><img src="../assets/images/wow-pink.png"/> Craigs Birthday</span></div>
             </div>
          </div>
           <div class="row" style="margin-bottom:15px;">
             <div class="col-md-12">
               <div class="col-md-2"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                <div class="col-md-6" style="text-transform: capitalize; font-size: 16px;">Emeka Adagbo <i class="glyphicon glyphicon-play"></i> <br>
                <span style="font-size:12px;">Software Developer At Vineture Inc</span><br>
                <span style="font-size:12px;">Houston  Texas</span>
                </div>
                <div class="col-md-4 text-center"><span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Connect</button></span><a href="#">Ignore</a>  </div>
           </div>
           <div class="row" >
             <div class="col-md-12" style="margin-top:15px; margin-bottom:15px;">
               <div class="col-md-12">
                 <div class="col-md-12" style="border-bottom:1px solid #ccc;"></div>
               </div>
             </div>
             </div>

           <div class="row" style="margin-bottom:15px;">
             <div class="col-md-12">
               <div class="col-md-2"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                <div class="col-md-6" style="text-transform: capitalize; font-size: 16px;">TD Jakes <i class="glyphicon glyphicon-play"></i> <br>
                <span style="font-size:12px;">CEO Lillyvalley Cakes</span><br>
                <span style="font-size:12px;">Houston  Texas</span>
                </div>
                <div class="col-md-4 text-center"><span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Connect</button></span><a href="#">Ignore</a>  </div>
             </div>
           </div>
         </div>

         <div class="row">
           <div class="col-sm-12 text-center"> <a href="#"><i class="fa fa-eye"></i> See all</a> </div>
         </div>
     </div>
             
      <!-- Newsfeed Common Side Bar Right
          ================================================= -->
      <div class="col-md-4">

       <div id="sticky-sidebar" style="background:#fff; box-shadow:1px 1px 1px 2px #ECECEC; padding:6px 0 0 0; border-radius:5px;">
          <ul class="nav-news-feed">
            <div class="row" style="margin:-7px 0 5px 0;">
              <div class="row text-center" style="background-color:#f8f8f8; border:1px solid #f5f5f5; padding:5px; border-radius:5px; margin-bottom:15px;">
              <a href="#" style="text-decoration:none; color:#333; font-size:14px;"><i class="fa fa-users"></i> Invite With People You May Know</a>
              </div>
              <div class="row" style="margin-bottom:15px;">
               <div class="col-md-6">
                 <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                   <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                   <span style="font-size:15px; font-weight:bold;">Tony Adams</span>
                   <span><a href="#">&nbsp;<i class="glyphicon glyphicon-play"></i></a></span>
                   <br>
  <span style="font-size:11px;">Account Manager Moni VCs<br>
    Houston</span><br>
  <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Invite</button></span>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                   <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                   <span style="font-size:15px; font-weight:bold;">TD Jakes</span>
                   <span><a href="#">&nbsp;<i class="glyphicon glyphicon-play"></i></a></span>
                   <br>
  <span style="font-size:11px;">Account Manager Moni VCs<br>
    Houston</span><br>
  <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Invite</button></span>
                 </div>
               </div>
               
              </div>
              
              <div class="row" style="margin-bottom:15px;">
               <div class="col-md-6">
                 <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                   <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                   <span style="font-size:15px; font-weight:bold;">Tony Adams</span>
                   <span><a href="#">&nbsp;<i class="glyphicon glyphicon-play"></i></a></span>
                   <br>
  <span style="font-size:11px;">Account Manager Moni VCs<br>
    Houston</span><br>
  <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Invite</button></span>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                   <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                   <span style="font-size:15px; font-weight:bold;">TD Jakes</span>
                   <span><a href="#">&nbsp;<i class="glyphicon glyphicon-play"></i></a></span>
                   <br>
  <span style="font-size:11px;">Account Manager Moni VCs<br>
    Houston</span><br>
  <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Invite</button></span>
                 </div>
               </div>
               
              </div>
              
              <div class="row" style="margin-bottom:15px;">
               <div class="col-md-6">
                 <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                   <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                   <span style="font-size:15px; font-weight:bold;">Tony Adams</span>
                   <span><a href="#">&nbsp;<i class="glyphicon glyphicon-play"></i></a></span>
                   <br>
  <span style="font-size:11px;">Account Manager Moni VCs<br>
    Houston</span><br>
  <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Invite</button></span>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                   <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                   <span style="font-size:15px; font-weight:bold;">TD Jakes</span>
                   <span><a href="#">&nbsp;<i class="glyphicon glyphicon-play"></i></a></span>
                   <br>
  <span style="font-size:11px;">Account Manager Moni VCs<br>
    Houston</span><br>
  <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Invite</button></span>
                 </div>
               </div>
               
              </div>
              
              <div class="row" style="margin-bottom:15px;">
               <div class="col-md-6">
                 <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                   <div class="col-md-12 text-center"><img src="../assets/images/em.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                   <span style="font-size:15px; font-weight:bold;">Tony Adams</span>
                   <span><a href="#">&nbsp;<i class="glyphicon glyphicon-play"></i></a></span>
                   <br>
  <span style="font-size:11px;">Account Manager Moni VCs<br>
    Houston</span><br>
  <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Invite</button></span>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="col-md-12 text-center" style="background-color:#fff; border:1px solid #f1f1f1; padding:5px; border-radius:5px;">
                   <div class="col-md-12 text-center"><img src="../assets/images/td.png" class="img-responsive img-circle img-thumbnail" alt="user" /></div>
                   <span style="font-size:15px; font-weight:bold;">TD Jakes</span>
                   <span><a href="#">&nbsp;<i class="glyphicon glyphicon-play"></i></a></span>
                   <br>
  <span style="font-size:11px;">Account Manager Moni VCs<br>
    Houston</span><br>
  <span class="form-body-classic form-wizard"><button class="browse btn-1 btn-primary input-lg" type="button"><i class="glyphicon glyphicon-refresh"></i> Invite</button></span>
                 </div>
               </div>
               
              </div>
              
             
            </div>
            
            
          </ul>
          
        </div>
     
    </div>
    
  </div>
</div>
  
        <!-- modal popup email or phone  -->

 <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">              
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3>Invite a Friend</h3>
                                 <span style="color:#333; font-size: 15px">Please give the following information</span>
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                           
                    <form action="" method="post"  id="personal_update_aboutme" class="form-inline">                           
                            <div class="row" >                              
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Email ID</label>
                                <input  type="text" class="form-control input-group-lg"  name="about_me" title="Enter a Date" value="" />
                              </div>
                            </div>
                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Phone Number</label>
                                <input  type="text" class="form-control" name="favorite_quote" value="" />
                              </div>
                            </div>
                             
                            <div class="row">
                              <div style="width:100%; margin-top: 10px;" class="text-center">
                                <input type="submit" value="Invite " class="btn btn-primary" style="width:140px;">
                              </div>
                            </div>
                    </form>
                               </div>
                                </div>
                                  </div>                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                   <!-- end  model popup -->



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

$(document).ready(function(){               //show view more friends
    $(".flip").click(function(){
        $(".panel").slideToggle("slow");
    });
});  

 //friends show and hide

$(document).ready(function(){
    $(".flip").click(function(){
      $(".commend_show").hide();
  });
}); 


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
