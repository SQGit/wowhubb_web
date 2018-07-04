<html lang="en">
<head>
  <title>PHP - jquery ajax crop image before upload using croppie plugins</title>
  
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
  <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/croppie.css">
<style>
 
</style>
</head>

<body>



<div style="">
	<a href="#" data-toggle="modal" data-target=".modal-video" >
 		<img class="img-responsive img-thumbnail"  id="profileImage" src="<?php echo base_url('assets/images/album/avatar_male.png')?>">
	</a>
</div>

  <div class="modal fade modal-video" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">                            
                            <div class="post-container" style="padding-bottom:20px;">   
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>                  
                              <div class="post-detail">
                                <div class="user-info">
                                 <h3 style="color:#333; font-size: 13px; font-weight:bold;">Self Intro Video</h3>                              
                                </div>                            
                                <div class="line-divider"></div>
                                <div class="user-info">
                                 <div class="row" style="padding:10px;">    

                                 
								
								  <div class="panel-heading">Image Upluad</div>

								  	<div class="row">
								  		<div class="col-md-4 text-center">
											<div id="upload-demo" style="width:250px"></div>
								  		</div>
								  		<div class="col-md-4" style="padding-top:30px;">
											<strong>Select Image:</strong>
											<br/>
											<input type="file" id="upload" name="profile_img">
											<br/>
											<button class="btn btn-success upload-result">Upload Image</button>
								  		</div>
								  		<div class="col-md-4" style="">
											<div id="upload-demo-i" style="background:#e1e1e1;width:200px;padding:30px;height:200px;margin-top:30px"></div>
								  		</div>
								  	</div>								 
								
							                                                                         
                            <div class="row">
                              <div  style="width:100%;" class="text-center">
                                <input type="submit" value="Save Changes" class="btn btn-primary" style="width:140px;">
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
                   <!-- end personal model popup -->




<script src="<?php echo base_url ('assets/js/jquery-3.1.1.min.js') ?>"></script>
<script src="<?php echo base_url ('assets/js/bootstrap.min.js') ?>"></script>
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script> 
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>

<script type="text/javascript">

$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300
    }
});


$('#upload').on('change', function () { 
	var reader = new FileReader();
    reader.onload = function (e) {
    	$uploadCrop.croppie('bind', {
    		url: e.target.result
    	}).then(function(){
    		console.log('jQuery bind complete');
    	});
    	
    }
    reader.readAsDataURL(this.files[0]);
});


var base_url = '<?php echo base_url() ?>'; 

$('.upload-result').on('click', function (ev) {  
    

  $uploadCrop.croppie('result', {
    type: 'canvas',
    size: 'viewport'

  }).then(function (resp) {    

    // var formdata = new FormData();
    // formdata.append('profile_img',resp);

    console.log(resp);
    $.ajax({
      url: base_url+'Profile/profile_img_upload/',     
      method: 'POST',
      data: {"image":resp},
      // data: formdata,
      // processData:false,
      // contentType:false,      
     
      success: function (data) {
        html = '<img src="' + resp + '" />';
        $("#upload-demo-i").html(html);
      }
    });
  });
});


</script>


</body>
</html>