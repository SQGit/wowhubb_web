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
    <div class="timeline-cover"> <img id="profileImage1" class="cover-pic" src="<?php echo base_url('assets/images/cb-banner.jpg');?>" style="background-size:cover; width:100%; margin-top:20px;" > </div>
   
  </div>
</div>

      <div class="container"> 
       
            <div class="col-md-12" style="border:1px solid #ccc; border-radius: 7px; margin-top: 10px; padding-top: 15px; padding-bottom: 20px; box-shadow: 1px 1px 1px 2px #f5f5f5;">
    
               <div class="col-md-12">
                  <div class="row">                    
                    <div class="col-md-12 col-sm-12 text-center" style="margin-top:15px;">
                      <div class="col-md-12 ">            
                          <img src="<?php echo base_url('assets/images/create_grp_empty_icon_hdpi.png');?>">            
                      </div>

                       <div class="col-md-12 ">            
                          <h3 style="color: #333;">Lets Connect all your Friends/members in your group</h3>
                          <h4 style="color: #777;">Find, Share & Invite them</h4>
                          <h5 style="color: #333;">Don't have a Group till yet?</h5>
                      </div>
                    </div>                 

                    <div class="col-md-12 col-sm-12 text-center" style="margin-top:15px;">
                      <div class="col-md-12 ">                        
                          <a href="#" data-toggle="modal" data-target=".modal-1"><button type="submit" class="btn btn-primary">+ Create Group</button></a>                        
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

<script>

// select search option
var base_url = '<?php echo base_url() ?>';

var studentSelect = $('#select-client');

// var data=[{
// firstname:"chirag patel",
// id:"patel"
// },{
// firstname:"patel",
// id:"patel1"
// }]

// for(var i=0;i<data.length;i++){
// var id=i;
// var option = new Option(data[i].firstname, id, true, true);
// studentSelect.append(option).trigger('change');

// }


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
                      window.location.href = "<?php echo base_url('event/get_eventfeed'); ?>";                                                 
                    }
                    else 
                     {                    
                        swal("Sorry!", "somethink wrong try again !", "error");
                     }
                }

            });
        });
});

</script>

  
</body>
</html>
