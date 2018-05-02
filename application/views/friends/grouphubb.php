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
<link rel="stylesheet" href="<?php echo base_url ('assets/css/select2.min.css')?>" />
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
	color: red;
}
.clr {
	background: #fbbd60;
	color: #3d7489;
	box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3), 0px 2px 2px rgba(0,0,0,0.1);
	padding: 10px;
}
.rr-circle {
	border-radius: 50%;
	background-color: #3096EB;
	font-size: 20px;
	color: #fff;
	width: 50px;
	height: 50px;
	line-height: 50px;
	text-align: center;
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

}
.nav-tabs>li>a {
	margin-right: 2px;
	line-height: 1.42857143;
	border: 1px solid transparent;
	border-radius: 4px 4px 0 0;
	font-size: 16px;
	text-align: center;
	color:#333;
}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
	color: #333;
	font-weight:bold;
	cursor: pointer;
	background-color: white;
	border-bottom:3px solid #e91e63;
	border-top:none;
	border-right:none;
	border-left:none;
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
table, td, tr {
	border-spacing: 2px;
	padding: 0 5px;
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
img.profile-photo-1 {
	height: 80px;
	width: 80px;
	border-radius: 50%;
}
img.profile-photo-2 {
	height: 32px;
	width: 32px;
	border-radius: 50%;
}
.pull-left .btn-1 {
	min-width: 105px;
	height: 30px;
    margin: 0;
    padding: 0 20px;
    border: none;

    
    font-weight: normal;
    line-height:30px;
    color: #fff;
	background-color:#3A2021;
    -moz-border-radius: 30px; -webkit-border-radius: 30px; border-radius: 30px;
    text-shadow: none;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
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
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="../assets/images/cb-banner.jpg" style="background-size:cover; width:100%; margin-top:20px;" > </div>
    <div id="page-contents" style="border:1px solid #e6e6e6; background-color: #fff; padding-top: 0px;">
      <div class="row">
        <div class="col-md-12 col-sm-12" style="margin-top:15px;">
          <div class="col-md-12">
            <div class="pull-right">
              <a href="#" data-toggle="modal" data-target=".modal-1"><button type="submit" class="btn btn-primary">+ Create Group</button></a>
            </div>
          </div>
        </div>
         <div class="col-md-12"> 
                            <!-- Nav tabs category -->
                              <ul class="nav nav-tabs faq-cat-tabs">
                                  <li class="active"><a href="#faq-cat-1" data-toggle="tab" class="text-center">Event Groups</a></li>
                                  <li><a href="#faq-cat-2" data-toggle="tab" class="text-center">Discover Groups</a></li>


                              </ul>

    <div class="tab-content faq-cat-content">                                  

      <div class="tab-pane active in fade" id="faq-cat-1"> 
       
        
        <div class="col-md-12 col-sm-12" style="margin-top:15px;">
          <div class="col-md-12 col-sm-12">
             <div class="alert alert-success" id="group_delete_success" role="alert" style="display:none;" >Successfully Register
              </div>
            
            <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">MY GROUPS</strong></div>
              </div>

               <?php

                  if(isset($group_name))
                    {
                     foreach ($group_name as  $groups)
                      {
                     
               ?>
              <div class="col-md-6">
                 <?php 
                      if(!is_null($this->session->userdata('personal_image')))
                  { ?>
                <div class="pull-left" style="width:15%;"><img src="http://104.197.80.225:3010/wow/media/personal/<?php echo $this->session->userdata("personal_image"); ?>" alt="user" class="profile-photo" /></div>
                 <?php }  else { ?>
                <div class="pull-left" style="width:15%;"><img src="<?php echo base_url('assets/images/album/avatar_male.png'); ?>" alt="user" class="profile-photo" /></div>
                <?php } ?>
               
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;"><?php echo $groups->groupname; ?> </strong></div>
                  <div class="col-md-12">

                    <a href="#" data-toggle="tooltip" title="
                      <?php 
                          foreach($groups->users as $group_users)
                          {                         
                              echo $group_users->userid->firstname."\n"; 
                          }
                      ?>"> 
                     <span style="color:#727272;"><?php $user = count($groups->users); echo $user." ".'Friends'; ?></span>
                    </a>
                  </div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:15px;">
                      <div class="col-md-3 user-info text-right">
                            <div class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" style="text-decoration:none; cursor:pointer;"><i class="fa fa-cog" style="color: #777; font-size: 20px;"></i></a>

                              <?php if($this->session->userdata('user_id') == ($groups->adminid->_id) ){ ?>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="#group_edit" style="cursor: pointer; padding-left: 25px;"  data-toggle="modal" data-id='<?php echo $groups->_id; ?>' data-name-id='<?php echo $groups->groupname; ?>' data-user-id='<?php 
                                    $numItems = count($groups->users);
                                      $i=0;
                                      foreach($groups->users as $group_users)
                                      {                        
                                          echo $group_users->userid->firstname; 
                                          if(++$i !== $numItems) {
                                              echo ",";
                                            }
                                          
                                      }?>' >
                                   
                                    Edit Group
                                  </a>
                                </li>

                                <li> 
                                 <a href="#">                                
                                    <form class="delete_group"  action="<?php echo base_url('searchfriends/delete_group/'.$groups->_id);?>" method="POST">                       
                                       <input type="submit" style="border: none; background: transparent;" value="Delete Group">
                                    </form>   
                                    </a>                               
                                </li>                           
                              </ul>
                              <?php } ?>

                            </div>
                      </div>

                </div>

                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
               
              </div>

              <?php } } ?>
               
            </div>
          </div>
        </div>
        </div>
        
         <div class="tab-pane fade" id="faq-cat-2"> 
        <div class="col-md-12 col-sm-12" style="margin-top:15px;">
          <div class="col-md-12 col-sm-12">
            
            <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; border-radius:8px; padding:15px 10px;">
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Recommended</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Vineture Group</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Local</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images//users/user-9.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Rockers Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-3.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Houston Online</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images//users/user-19.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">GIT Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Decline</button>
                </div>
                
              </div>
            </div>
            <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; margin-top:15px; border-radius:8px; padding:15px 10px;">
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Films &amp; TV</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-11.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Vineture Group</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Trending</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-5.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Rockers Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-3.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Houston Online</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-10.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">GIT Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                
              </div>
            </div>
            <div class="col-md-12 col-sm-12" style="border:1px solid #ccc; margin-top:15px; border-radius:8px; padding:15px 10px;">
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">Friends</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/em.png" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Vineture Group</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                  
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
              
              <div class="col-md-6">
              <div class="col-md-12" style="background:#EDEDED; margin-bottom:15px;">
                <div class="col-md-12" style="margin-top:5px; margin-bottom:5px;"><strong style="font-size:17px;">School &amp; Education</strong></div>
              </div>
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-4.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Rockers Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                <div class="col-md-12" style="margin-top:10px; margin-bottom:10px; border:0.5px solid #E5E5E5;"></div>
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images/users/user-3.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">Houston Online</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                 
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
                </div>
                
              </div>
               <div class="col-md-6">
                <div class="pull-left" style="width:15%;"><img src="../assets/images//users/user-19.jpg" class="profile-photo-1 img-thumbnail" > </div>
                <div class="pull-left" style="width:50%;">
                  <div class="col-md-12"><strong style="font-size:18px;">GIT Team</strong></div>
                  <div class="col-md-12">
                    <span style="color:#727272;">6 Friends. 18 Members</span></div>
                
                </div>
                <div class="pull-left" style="width:35%; margin-top:35px;">
                  <button type="submit" class="btn btn-primary">Join</button>
                  <button type="submit" class="btn btn-primary" style="background:transparent; border:1px solid #CCC; color:#333;">Hide</button>
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

<!-- create group modrl popup -->
<div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">                  
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3>Create Group</h3>
                                 <span style="color:#333; font-size: 15px">Please give the following information to create group</span>
                                </div>                              
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">                              
                   
                   <form id="create_group" action="<?php echo base_url('searchfriends/create_group'); ?>" method="post">
                            <div class="row" >                              
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Name Your Group</label>
                                <input  type="text" class="form-control input-group-lg"  name="group_name" placeholder="Ex.Wowhubb Group" style="text-transform: capitalize;" />
                              </div>
                            </div>
                           

                             <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Add Some People</label>
                                  <select id="select-client" name="users_name[]" class="form-control" style="width:100%!important;" >
                            
                                  </select>
                              </div>
                            </div>                    
                            
                            <div class="row">   
                              <div class="form-group col-xs-12">
                                <label for="date-to" class="">Select Privacy</label>
                                <select name="group_type" id="days" class="form-control" style="background-color:#f5f5f5;">
                                      <option value="Public Group">Public Group</option>
                                      <option value="Closed Group">Closed Group</option>
                                      <option value="Secret Group">Secret Group</option>    
                                                                          
                                </select>
                              </div>
                            </div>
                                                                                 
                            <div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Create" class="btn btn-primary" style="width:140px;">
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

<!--edit and update group details -->
<div class="modal fade" id="group_edit" role="dialog">
        <div class="modal-dialog" style="width: 500px!important;">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title" style="text-align:center;">Send Invite By Email </h4>
                </div>
                <div class="modal-body">
                  <div class="prescription_details">
                    <form  class="edit_group" action="<?php echo base_url('searchfriends/edit_group'); ?>" method="post">  
                        <div class="alert alert-success" id="email_success" role="alert" style="display:none;" >Successfully Send Invite
                        </div>

                         <input type="hidden" name="event_id">             
                          <div class="col-sm-12 form-group ">      
                            <input type="text"  name="g_name" class='form-control' placeholder="Enter Email ID">          
                          </div>   

                          <div class="row">   
                            <div class="form-group col-xs-12">                             
                              <select id="select-user" name="members_name[]" class="form-control" style="width:100%!important;" >                            
                              </select>                                    
                            </div> 
                          </div>

                        <div class="action text-center">
                            <button type="submit" class="btn-primary">Invite</button>                            
                        </div>
                    </form>
                  </div>
                </div><!--/.modal nody -->
                
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
<script src="<?php echo base_url('assets/js/select2.min.js')?>"></script> 
<script src="<?php echo base_url('assets/js/bootbox.js')?>"></script> <!-- conformation delete boot box -->
<script>
  
var data = [];
 //event_id could pass to email model popup using popup id
$('#group_edit').on('show.bs.modal', function(e) 
  {
    var event_id   = $(e.relatedTarget).data('id');
    var group_name = $(e.relatedTarget).data('name-id');
    var user_name = $(e.relatedTarget).data('user-id');

    var user_array = user_name.split(",");
    console.log(user_array);

    
empty();

    $.each(user_array, function (index, value) {

      data.push({'full_name' : value,'id' : value});

    });



    $(e.currentTarget).find('input[name="event_id"]').val(event_id);
    $(e.currentTarget).find('input[name="g_name"]').val(group_name);
    

      var studentSelect = $('#select-user');
      studentSelect.html('');
      
      for(var i=0;i<data.length;i++){
      var option = new Option(data[i].full_name, data[i].id, true, true);
      studentSelect.append(option).trigger('change');
      }

    // manually trigger the `select2:select` event
    studentSelect.trigger({
      type: 'select2:select',
      params: {
        data: data
      }
    });

    });


function empty() {
    //empty your array
    data.length = 0;
}
     

// here select group members 
var base_url = '<?php echo base_url() ?>';

var studentSelect = $('#select-user');


function formatRepo (repo) {
  // this first name came from serice
return repo.firstname;
  }

  function formatRepoSelection (repo) {
    return repo.firstname || repo.text;    
  }

$("#select-user").select2({
  multiple:true,
  ajax: {
    url: base_url+'searchfriends/search_friends/',
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        // here send name to service
        q: params.term
      };
    },
    processResults: function (data) {
      
      return {
        // this result came from web service
        results: data.result    
      };
    },
    cache: true
  },
  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
  minimumInputLength: 1,
  templateResult: formatRepo, // omitted for brevity, see the source of this page
  templateSelection: formatRepoSelection, // omitted for brevity, see the source of this page
  placeholder: "Enter name"
});


// here select group members  create group
var base_url = '<?php echo base_url() ?>';

var studentSelect = $('#select-client');
function formatRepo (repo) {
  // this first name came from serice
return repo.firstname;
  }

  function formatRepoSelection (repo) {
    return repo.firstname || repo.text;    
  }


$("#select-client").select2({
  multiple:true,
  ajax: {
    url: base_url+'searchfriends/search_friends/',
    dataType: 'json',
    delay: 250,
    data: function (params) {
      return {
        // here send name to service
        q: params.term
      };
    },
    processResults: function (data) {
      // parse the results into the format expected by Select2.
      // since we are using custom formatting functions we do not need to
      // alter the remote JSON data
      return {
        // this result came from web service
        results: data.result    
      };
    },
    cache: true
  },
  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
  minimumInputLength: 1,
  templateResult: formatRepo, // omitted for brevity, see the source of this page
  templateSelection: formatRepoSelection, // omitted for brevity, see the source of this page
  placeholder: "Enter name"
});


//search option form submit
var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(".search").keyup(function() 
      {
              
       var searchbox = $('#searchbox').val();
       var dataString = 'searchword='+ searchbox;

      if(searchbox=='')
        {
          $('#display1').html("");
        }

        else
        {
          $.ajax({

                  url : base_url+'searchfriends/search_friends/'+searchbox,
                  context:this,
                  type: 'POST',
                  //data: dataString,
                  processData: false,
                  contentType: false,
                  // dataType:'json',
                  error: function(xhr,status,error)
                  {   
                     alert(xhr.responseText);
                  },              
                  
                  success: function(response)
                  {
                     $('#display1').html(response);
                  }

              });
       }
    });   
   
});
  

$("#display1 li").on("click",  function(e){
    e.preventDefault();
    var test = $(this).html();
    // alert('test');
    console.log(test);
    console.log("test");
    // $this.addClass("select").siblings().removeClass("select");
    $("#searchbox").val(test);
});

// create group form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", "#create_group", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);
      
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
                      swal("Success!", "Group created !", "success");     
                      window.location.href = "<?php echo base_url('searchfriends/get_group'); ?>";                                                 
                    }
                    else 
                     {                    
                        swal("Sorry!", "somethink wrong try again !", "error");
                     }
                }

            });
        });
});

// delete group form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".delete_group", function(e){
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
                          swal("Success!", "Group deleted !", "success");     
                          window.location.href = "<?php echo base_url('searchfriends/get_group'); ?>";                                                 
                        }
                        else 
                         {                    
                                        swal(
                                              'Sorry!',
                                              response.message, //refer : https://www.sitepoint.com/community/t/return-php-error-using-sweet-alert/265444
                                              'error'
                                             ); 
                         }
                    }

                });
            }
               });
            });
});

// Edit and update  group form submit

var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

    $(document).on("submit", ".edit_group", function(e){
         e.preventDefault();
        var url = $(this).attr('action');
        var formdata = new FormData(this);
      
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
                          swal("Success!", "Group Updated !", "success");     
                          window.location.href = "<?php echo base_url('searchfriends/get_group'); ?>";                                                 
                        }
                        else 
                         {                    
                                        swal(
                                              'Sorry!',
                                              response.message, //refer : https://www.sitepoint.com/community/t/return-php-error-using-sweet-alert/265444
                                              'error'
                                             ); 
                         }
                    }

               
               });
            });
});

</script>
  
  
</body>
</html>
