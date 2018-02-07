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
    <link rel="stylesheet" href="<?php echo base_url ('assets/css/font-awesome.min.css')?>" />
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

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">

                <form action="<?php echo base_url('profile/profile_img_upload'); ?>" id="profile_form" method="post" enctype="multipart/form-data">

                  
                   <img src="http://104.197.80.225:3010/wow/media/personal/personalimage-1507371295622.jpeg" alt="" class="img-responsive profile-photo" />
                  <h3>!Emeka Ike</h3>
                  <p class="text-muted">Managing Director</p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="<?php echo base_url ('Profile/edit_profile') ?>" class="active">About</a></li>
                  <li><a href="<?php echo base_url ('Profile/profile_interest') ?>" >Interests</a></li>
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
                  <h3>!Emeka Ike</h3>
                  <p class="text-muted">Managing Director</p>
           </div>
            <div class="mobile-menu">
              <ul class="list-inline">
                <li><a href="timline.html">Timeline</a></li>
                <li><a href="timeline-about.html" class="active">About</a></li>
                <li><a href="timeline-album.html">Album</a></li>
                <li><a href="timeline-friends.html">Friends</a></li>
              </ul>
              <button class="btn-primary">Add Friend</button>
            </div>
          </div><!--Timeline Menu for Small Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3">
              
              <!--Edit Profile Menu-->
              <ul class="edit-menu">
                <li class="active"><i class="icon ion-ios-information-outline"></i><a href="<?php echo base_url('Profile/aboutme')  ?>">About Me</a></li>
                <li><i class="icon ion-ios-heart-outline"></i><a href="<?php echo base_url('Profile/contact_info')  ?>">Contact info</a></li>
                <li><i class="icon ion-ios-settings"></i><a href="<?php echo base_url('Profile/edit_account_settings')  ?>">My Event info</a></li>
                
              </ul>
            </div>
            <div class="col-md-6">

              <!-- Basic Information
              ================================================= -->
              <div class="edit-profile-container">
                <div class="block-title">
                  <h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
                  <div class="line"></div>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  <div class="line"></div>
                </div>
                <div class="edit-block">
                  <form name="basic-info" id="basic-info" class="form-inline">
                   <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">What your favourit Quotes</label>
                        <textarea id="my-info" name="information" class="form-control" placeholder="Some texts about me" rows="4" cols="400">Changes will be never changed! </textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="my-info">Address</label>
                        <textarea id="my-info" name="information" class="form-control" placeholder="Some texts about me" rows="4" cols="400">chennai </textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email">Religion</label>
                        <select class="form-control" id="year">
                          <option value="">Religion</option>
                          <option value="">Hindu</option>
                          <option value="">Christian</option>
                          <option value="">Islam</option>
                          <option value="">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                         <label for="email">Marital staus</label><br>
                         <div class="form-group gender">

                      <label class="radio-inline">
                        <input type="radio" name="optradio" value="phone_no" style="margin-top: 5px;" required><label >Married</label>
                     </label>
                      
                    </div>
                     <div class="form-group gender">

                      <label class="radio-inline" style="margin-left: 10px;">
                        <input type="radio" name="optradio" value="phone_no" style="margin-top: 5px;" required><label >Single</label>
                      </label>
                      
                    </div>
                       
                      </div>
                    </div>
                    <div class="row">
                      <p class="custom-label"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="day">
                          <option value="">Day</option>
                          <option value="01">1</option>
                          <option value="02">2</option>
                          <option value="03">3</option>
                          <option value="04">4</option>
                          <option value="05">5</option>
                          <option value="06">6</option>
                          <option value="07">7</option>
                          <option value="08">8</option>
                          <option value="09">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19"selected>19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="month">
                          <option value="">Month</option>
                          <option value="01" >01</option>
                          <option value="02">02</option>
                          <option value="03">03</option>
                          <option value="04">04</option>
                          <option value="05">05</option>
                          <option value="06">06</option>
                          <option value="07">07</option>
                          <option value="08">08</option>
                          <option value="09">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12" selected>12</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select class="form-control" id="year">
                          <option value="">Year</option>
                          <option value=""selected>2000</option>
                          <option value="">2001</option>
                          <option value="">2002</option>
                          <option value="">2004</option>
                          <option value="">2005</option>
                          <option value="">2006</option>
                          <option value="">2007</option>
                          <option value="">2008</option>
                          <option value="">2009</option>
                          <option value="">2010</option>
                          <option value="">2011</option>
                          <option value="">2012</option>
                        </select>
                      </div>
                    </div>
                     <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email">Language</label><br>
                         <a href="" data-toggle="modal" data-target=".modal-1">+Add more language</a>                     
                    </div>
                     
                      </div>
                      <!--Popup-->
                    <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            
                            <div class="post-container">
                             
                              <div class="post-detail">
                                <div class="user-info">
                                 <h2>Add Language</h2>
                                 <span style="color:#333; font-size: 15px">Please select the preferred language to add</span>
                                </div>
                              
                                <div class="line-divider"></div>
                                
                             
                                
                                <div class="post-comment">
                                 
                                  <div class="form-group col-sm-12 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select class="form-control" id="year">
                          <option value="">Language</option>
                          <option value=""selected>English</option>
                          <option value="">Tamil</option>
                          <option value="">Hindi</option>
                          <option value="">2004</option>
                          <option value="">2005</option>
                          
                        </select>
                      </div>
                                </div>
                                  <div class="row">
                                <div  style="width:600px;" class="text-center">
                                 <button class="btn btn-primary" style="width:100px;">Add</button>
                              
                               </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->


                    
                     <div class="row">
                                <div  style="width:600px;" class="text-center">
                                 <button class="btn btn-primary" style="width:140px;">Save Changes</button>
                              
                               </div>
                                  </div>
                  </form>
                </div>
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
    <script src="<?php echo base_url ('assets/js/jquery-3.2.1.minjs.js')?>" ></script>
    <script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.sticky-kit.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/jquery.scrollbar.min.js') ?>"></script>
    <script src="<?php echo base_url ('assets/js/script.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js') ?>"></script>
    
  </body>

</html>
