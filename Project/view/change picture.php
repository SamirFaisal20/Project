
<?php

require 'controller/check change picture.php';
require 'Controller/pictureUpload.php';

  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Image to upload</title>
	
	<link rel="stylesheet" type="text/css" href="css/changepicture_style.css">
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data"  >
		<div class="wraper">
			
				<div class="header">
			      <label>CHANGE PICTURE </label>
			      <hr class="header_hr_tag">
			    </div>
			<div class="Content">
  <img class="img_design" 
  src="uploads/<?php 
  if (isset($_SESSION['pic'])){echo $_SESSION['pic'];} 
  else{echo "main.png";}
  ?>"> 
			</div>
		<div class="Content_file">
			<input type="file" name="fileToUpload" id="fileToUpload">
			<hr class="hr_tag">
		</div>

		<div class="Content_file">
			<input type="submit" value="Upload Image" name="submit">
		</div>
		
		</div>
	</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>