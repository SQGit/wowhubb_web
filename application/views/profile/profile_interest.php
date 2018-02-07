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
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url ('assets/images/fav.png') ?>"/>
    <style type="text/css">
    body{
      background-color: #e7e5e6;
    }
#footer {
	background: #fff;
	position: relative;
	top: 0px;
}
#page-contents{
  padding: 10px 0 50px 25px;
  background-color:#fff;
  border-radius:5px;
}

.form-wizard {
    padding: 5px;
    background: #fff;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    /*box-shadow: 0px 0px 10px 0px #ccc; */
   text-align: left;    
}
.redBackground{
background-color:rgba(204, 180, 190, 0.32);
width:124px; 
height:100px; 
border-radius:8px;
}
input[type=checkbox] {
      display:none;

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
      <div class="navbar-header"> <a class="navbar-brand" href="<?php echo base_url('event/get_eventfeed'); ?>"> <img src="<?php echo base_url ('assets/images/logo.png') ?>" alt="logo" /></a> </div>
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"  style="position:relative;">
        <ul class="nav navbar-nav navbar-right main-menu" style="color:#fff; margin-top: 10px; margin-right:5px; font-size:25px;">
          <a href="<?php echo base_url('event/get_eventfeed'); ?>" style="text-decoration:none;"> <span style="font-size:14px;  background:#e91e63; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/home-icon.png'); ?>" alt="user" /> Home</span>
          </a> 
          <a href="<?php echo base_url('event/event_popup'); ?>" style="text-decoration:none;"><span style="font-size:14px;  background:#757575; padding:5px 10px; border-radius:13px; color:#fff;"><img src="<?php echo base_url('assets/images/create-event-icon-3.png'); ?>" alt="user" /> Create Event</span>
          </a> 
          <a href="<?php echo base_url('home/logout'); ?>" style="text-decoration:none;"><span style="font-size:14px;  padding:5px 10px; border-radius:5px; color:#fff;"><img src="<?php echo base_url('assets/images/logout-icon.png'); ?>" alt="user" />Logout</span>
          </a>
        </ul>
        

       <form class="navbar-form navbar-right hidden-sm" style="position:absolute; right:325px; top:0px;" >
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
                <?php }  ?> ;
                    
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
              <li><a href="<?php echo base_url ('event/profile_get_eventfeed') ?>" >Event Feed</a></li>
              <li><a href="<?php echo base_url('Profile/profile_get'); ?>" >Profile</a></li>
              <li><a href="<?php echo base_url ('home/interest_get') ?>" class="active" >Interests</a></li>
              <li><a href="#">Friend Connections</a></li>
              <li><a href="#">Eventhubb</a></li>
              <li><a href="#">Photos</a></li>
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
        <div id="page-contents">
          <div class="row">
            
            <div class="form-wizard col-md-8">

              <!-- Edit Interests
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-ios-heart-outline"></i>My Interests</h4>
                                                   
                </div>
                <div class="edit-block">
                    <!-- First  row check box-->                   
         <form id="interest_update" action="<?php echo base_url('home/interest_update'); ?>" method="POST" >             
                <div class="row" style="margin-bottom: 15px;">                 
                      <div class="col-md-3 col-sm-6" >
                            <div style=" left:11px; top:1px;">
                              <input name="img1[]" type="checkbox" id="check1" value="Business"
                              <?php if (preg_match("/business/i", "$interest")) { echo "checked";} else {echo "";} ?> > <!-- here i is a case sensitive name -->
                               <label for="check1">            
                           
                              <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_1_pink_hdpi.png')?>" alt=""/></div></label>                          
                           </div>
                        <div class="col-md-12 col-sm-12" style="margin-top:10px;"  ><div style="text-align:left; line-height:22px;">Business Networking Events</div></div>
                      </div>

                      <div class="col-md-3 col-sm-6" >
                          <div style=" left:11px; top:1px;">
                              <input name="img1[]" type="checkbox" id="check2" value="startup" 
                              <?php if(preg_match("/startup/i", "$interest")) { echo "checked";} else {echo "";} ?> >
                               <label for="check2">      
                              <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_2_pink_hdpi.png')?>" alt=""/></div></label>
                             
                          </div>
                           <div class="col-md-12 col-sm-12" style="margin-top:10px;"  ><div style="text-align:left; line-height:22px;">Startup Technology Events</div> </div>
                      </div>

                      <div class="col-md-3 col-sm-6" >
                          <div style=" left:11px; top:1px;">
                               <input name="img1[]" type="checkbox" id="check3" value="professional"
                               <?php if (preg_match("/professional/i", "$interest")) { echo "checked";} else {echo "";} ?> >
                             <label for="check3">      
                            <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_3_pink_hdpi.png')?>" alt=""/></div></label>

                          </div>
                          
                          <div class="col-md-12 col-sm-12" style="margin-top:10px;" > <div style="text-align:left; line-height:22px;">Professional Training Events</div></div>
                      </div>

                  <div class="col-md-3 col-sm-6" >
                    <div style=" left:11px; top:1px;">
                        <input type="checkbox"  name="img1[]" id="check7" value="Hobbies"
                         <?php if (preg_match("/hobbies/i", "$interest")) { echo "checked";} else {echo "";} ?>>
                         <label for="check7">                    
                  
                      <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_7_pink_hdpi.png')?>" alt=""/></div></label>
                      
                    </div>
                    <div class="col-md-12 col-sm-12" style="margin-top:10px;"  ><div style="text-align:left; line-height:22px;">Hobbies</div></div>
                  </div>

            </div>

               <!-- second  row check box-->   

            <div class="row" style="margin-bottom:20px;">        

                  <div class="col-md-3 col-sm-6" >
                        <div style=" left:11px; top:1px;">
                          <input name="img1[]" type="checkbox" id="check5" value="Media"
                           <?php if (preg_match("/media/i", "$interest")) { echo "checked";} else {echo "";} ?>>
                           <label for="check5">   
                        <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_5_pink_hdpi.png')?>" alt=""/></div></label>
                       </div>
                        <div class="col-md-12 col-sm-12" style="margin-top:10px;"  >
                        <div style="text-align:left; line-height:22px;">Media Film Fashion &amp; Culture Events</div></div>
                      
                  </div>

                  <div class="col-md-3 col-sm-6" >
                      <div style="left:11px; top:1px;">
                       <input  type="checkbox" name="img1[]" id="check6" value="Homelife"
                         <?php if (preg_match("/homelife/i", "$interest")) { echo "checked";} else {echo "";} ?>>
                         <label for="check6">   
                      <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_6_pink_hdpi.png')?>" alt=""/></div></label>
                      </div>
                      <div class="col-md-12 col-sm-12" style="margin-top:10px;"  >
                      <div style="text-align:left; line-height:22px;">Homelife Styles</div>
                      </div>
                  </div>
               
                  <div class="col-md-3 col-sm-6">
                              <div  style="left:11px; top:1px;">
                                <input name="img1[]" type="checkbox" id="check4" value="comedy"
                                 <?php if (preg_match("/comedy/i", "$interest")) { echo "checked";} else {echo "";} ?> >
                               <label for="check4">      
                              <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_4_pink_hdpi.png')?>" alt=""/></div></label>
                              </div>
                              <div class="col-md-12 col-sm-12" style="margin-top:10px;"  >
                              <div style="text-align:left; line-height:22px;">Comedy Talk Shows &amp; Events</div></div>
                            
                  </div>

                <div class="col-md-3 col-sm-6" >
                      <div style=" left:11px; top:1px;">
                        <input type="checkbox" name="img1[]" id="check8" value="Music"
                         <?php if (preg_match("/music/i", "$interest")) { echo "checked";} else {echo "";} ?>>
                         <label for="check8">   
                      <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_8_pink_hdpi.png')?>" alt=""/></div></label>
                       </div>
                       <div class="col-md-12 col-sm-12" style="margin-top:10px;"  >
                      <div style="text-align:left; line-height:22px;">Music Arts</div>
                    </div>
                   
                </div>

          </div>  
                        <!-- third row -->             
          <div class="row" style="margin-bottom: 10px;">    

                    <div class="col-md-3 col-sm-6">
                          <div style="  left:11px; top:1px;">
                              <input type="checkbox" name="img1[]" id="check9" value="Parties"
                               <?php if (preg_match("/parties/i", "$interest")) { echo "checked";} else {echo "";} ?>>
                           <label for="check9">   
                           <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_9_pink_hdpi.png')?>" alt=""/></div></label> </div>
                           <div class="col-md-12 col-sm-12" style="margin-top:10px;"  >
                          <div style="text-align:left; line-height:22px;">Parties</div>
                        </div>
                       
                    </div>

                     <div class="col-md-3 col-sm-6">
                          <div style=" left:11px; top:1px;">
                               <input type="checkbox" name="img1[]" id="check10" value="Religion"
                               <?php if (preg_match("/religion/i", "$interest")) { echo "checked";} else {echo "";} ?>>
                            <label for="check10">   
                           <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_10_pink_hdpi.png')?>" alt=""/></div></label></div>
                           <div class="col-md-12 col-sm-12" style="margin-top:10px;"  >
                           <div style="text-align:left; line-height:22px;">Religion Spirtuality</div>
                          </div>
                      </div>

                      <div class="col-md-3 col-sm-6" >
                            <div style=" left:11px; top:1px;">
                                  <input type="checkbox" name="img1[]" id="check11" value="Charity"
                                  <?php if (preg_match("/charity/i", "$interest")) { echo "checked";} else {echo "";} ?>>
                            <label for="check11">   
                          <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_11_pink_hdpi.png')?>" alt=""/></div></label></div>
                          <div class="col-md-12 col-sm-12" style="margin-top:10px;"  >
                          <div style="text-align:left; line-height:22px;">Charity Cause &amp; Community Events</div></div>
                        
                      </div>

                       <div class="col-md-3 col-sm-6" >
                            <div style="left:11px; top:1px;">
                              <input type="checkbox" name="img1[]" id="check12" value="Family"
                               <?php if (preg_match("/family/i", "$interest")) { echo "checked";} else {echo "";} ?>>
                             <label for="check12">   
                            <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_12_pink_hdpi.png')?>" alt=""/></div></label></div>
                            <div class="col-md-12 col-sm-12" style="margin-top:10px;"  >
                            <div style="text-align:left; line-height:22px;">Family Education</div>
                            </div>
                      </div>

            </div>       

            <!-- fourth row -->

         <div class="row" style="margin-bottom: 20px;">

                    <div class="col-md-3 col-sm-6">
                          <div style=" left:11px; top:1px;">
                            <input type="checkbox" name="img1[]" id="check13" value="Food"
                             <?php if (preg_match("/food/", "$interest")) { echo "checked";} else {echo "";} ?>>
                           <label for="check13">   
                            <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_13_pink_hdpi.png')?>" alt=""/></div>
                            </label></div>
                            <div style="text-align:left; line-height:22px;">Food Drink</div>
                          
                    </div>

                    <div class="col-md-3 col-sm-6" >
                        <div style="left:11px; top:1px;">
                          <input type="checkbox" name="img1[]" id="check14" value="Wellness"
                           <?php if (preg_match("/wellness/", "$interest")) { echo "checked";} else {echo "";} ?>>
                           <label for="check14">   
                          <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_14_pink_hdpi.png')?>" alt=""/></div></label></div>
                          <div style="text-align:left; line-height:22px;">Wellness Fitness</div>
                        
                    </div>

                  <div class="col-md-3 col-sm-6">
                      <div style="left:11px; top:1px;">
                        <input type="checkbox" name="img1[]" id="check15" value="Sports"
                         <?php if (preg_match("/sports/", "$interest")) { echo "checked";} else {echo "";} ?>>
                       <label for="check15">   
                      <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_15_pink_hdpi.png')?>" alt=""/></div></label>
                       </div>
                      <div style="text-align:left; line-height:22px;">Sports Events</div>
                   
                  </div>

                  <div class="col-md-3 col-sm-6" >
                      <div style=" left:20px; top:5px;">
                        <input type="checkbox" name="img1[]" id="check16" value="Travel"
                         <?php if (preg_match("/travel/", "$interest")) { echo "checked";} else {echo "";} ?>>
                       <label for="check16">   
                      <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_16_pink_hdpi.png')?>" alt=""/></div></label>
                       </div>
                      <div style="text-align:left; line-height:22px;">Travel Tours &amp; Vacation Sports</div>
                   
                  </div>

            </div>
              <!-- fifth row -->
         <div class="row" style="margin-bottom: 20px;">  

                  <div class="col-md-3 col-sm-6">
                        <div style="left:20px; top:5px;">
                             <input type="checkbox" name="img1[]" id="check17" value="Auto"
                              <?php if (preg_match("/auto/", "$interest")) { echo "checked";} else {echo "";} ?>>
                               <label for="check17">   
                        <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_17_pink_hdpi.png')?>" alt=""/>
                        </div></label></div>
                     <div style="text-align:left; line-height:22px;">Auto Boats &amp; Air</div>
                  
                </div>

                <div class="col-md-3 col-sm-6">
                     <div style="left:20px; top:5px;">
                          <input type="checkbox" name="img1[]" id="check18" value="Holiday"
                                <?php if (preg_match("/holiday/", "$interest")) { echo "checked";} else {echo "";} ?>>
                           <label for="check18">   
                         <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_18_pink_hdpi.png')?>" alt=""/></div></label>
                       </div>
                      <div style="text-align:left; line-height:22px;">Holiday Events</div>
                 
               </div>

               <div class="col-md-3 col-sm-6">
                     <div style="left:20px; top:5px;">
                          <input name="img1[]" type="checkbox" id="check19" value="school"
                           <?php if (preg_match("/school/", "$interest")) { echo "checked";} else {echo "";} ?> >
                      <label for="check19">   
                      <div style="border:1px solid #ccc; border-radius:8px;  width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_19_pink_hdpi.png')?>" alt=""/></div></label>
                    </div>
                      <div style="text-align:left; line-height:22px;">School Events</div>
                
              </div>

              <div class="col-md-3 col-sm-6">
                    <div style="left:20px; top:5px;">
                          <input name="img1[]" type="checkbox"  id="check20" value="Govt"
                          <?php if (preg_match("/govt/", "$interest")) { echo "checked";} else {echo "";} ?> >
                     <label for="check20">   
                     <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_20_pink_hdpi.png')?>" alt=""/></div></label>
                   </div>
                     <div style="text-align:left; line-height:22px;">Govt Events</div>
                   
              </div>

      </div>            
              <!-- sixth row -->    

              <div class="row" style="margin-bottom: 20px;">           
                   <div class="col-md-3 col-sm-6" >
                        <div style="left:20px; top:5px;">
                           <input name="img1[]" type="checkbox" id="check21" value="Political"
                              <?php if (preg_match("/political/", "$interest")) { echo "checked";} else {echo "";} ?>>
                          <label for="check21">   
                       <div style="border:1px solid #ccc; border-radius:8px;   width:125px; height:100px; text-align:center; cursor: pointer;"><img src="<?php echo base_url('assets/images/interests/icon_21_pink_hdpi.png')?>" alt=""/>
                       </div></label></div>
                       <div style="text-align:left; line-height:22px;">Political Events</div>
                     
                   </div>
             </div>  

                <div class="row">                    
                    <div class="form-group col-sm-4 text-center" style="margin-top: 0px; margin-left: 160px;">
                      <input type="submit" value="Update" class="btn btn-primary">
                    </div>                    
                </div>
            </div>
      </form>        
                          
          </div>

        </div>
         <div class="col-md-3 static"> 
          
          <!--Sticky Timeline Activity Sidebar-->
          <div id="sticky-sidebar">
            <h4 class="grey" style="margin-top: 10px;"><i class="fa fa-search"></i> Search for Event</h4>
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

    <!-- Footer
    ================================================= -->

    <!--preloader-->   


    <!-- Scripts
    ================================================= -->
    <script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>

     // checkbox background color change

    $( document ).ready(function() {  
     $("input[type='checkbox']:checked").parent().addClass("redBackground"); 
   
    });


    $("input[type='checkbox']").change(function()
    {
        if($(this).is(":checked"))
        {
            $(this).parent().addClass("redBackground"); 
        }
        else{
            $(this).parent().removeClass("redBackground");  
        }
    });

                  
      //profile image change
         $("#profileImage").click(function(e) {
         $("#imageUpload").click();
      });
         
  


//submit otp form using jquery
var base_url = '<?php echo base_url() ?>';

$(document).ready(function(){

$(document).on("submit", "#interest_update", function(e){
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
                    swal("Good job!", "Your Interest will be added!", "success");
                   
                    // window.location.href = "<?php //echo base_url('event/eventfeed');?>";
                   
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
