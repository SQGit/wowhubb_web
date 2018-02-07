<html>

<head>
<title> upload image </title>
</head>
<body>

<form action="<?php echo base_url('profile/video_upload'); ?>" method="post" enctype="multipart/form-data">
	<label>insert image</label>
<input type="file" name="video" >

<input type="submit" name="submit" value="upload">
</form>
</body>


</html>