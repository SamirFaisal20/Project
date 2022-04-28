<?php 

		require 'controller/check change password.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Change password
	</title>
	<link rel="stylesheet" type="text/css" href="css/change password_style.css">
	<script src="JS/registration.js"></script>
</head>
<body>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

		<div class="wraper">

				<div class="header">
      <label>CHANGE PASSWORD</label>
      <hr class="hr_tag">
    </div>

			<div class="Content">
				<label>Current Password</label>
				<input type="password" id="current_password" name="current_password" class="input_holder" onkeyup="checkCurrentPassword()" onblur="checkCurrentPassword()" onclick="checkCurrentPassword()" >	
				<br><span class="error" id="current_passwordErr"><?php echo $current_passwordErr;?></span>
			</div>

			<div class="Content">
				<label>New Password</label>
				<input type="password"class="input_holder" id="new_password" name="new_password"onkeyup="checkNewPassword()" onblur="checkNewPassword()" onclick="checkNewPassword()" >	
				<br><span class="error" id="new_passwordErr"><?php echo $new_passwordErr;?></span>
			</div>

			<div class="Content">
				<label>Confirm Password</label>
				<input type="password" class="input_holder" id="retype_new_password" name="retype_new_password"onkeyup="checkRetypeNewPassword()" onblur="checkRetypeNewPassword()" onclick="checkRetypeNewPassword()" >	
				<br><span class="error" id="retype_new_passwordErr"><?php echo $retype_new_passwordErr;?></span>
			</div>

			<div class="submit_content">
			<input type="submit" name="submit" value="Change password" class="submit_button">
		</div>
		</div>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>