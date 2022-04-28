
<?php

session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 
require 'controller/showData.php';
require 'controller/store_data.php';


?> 

<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    .error
    {
      color: red;
    }
  </style>
<script src="JS/name_password.js"></script>
<script src="JS/email.js"></script>
<script src="JS/sign_up.js"></script>
</head>
<body>

<div style=" margin: auto ; height: 270px; width: 250px; margin-top: 10%;  transform: scale(1.2);">
<fieldset  style="margin: auto;" >

  <form name="form" method="post" >
    <legend style="text-align: center; width: 100%;height: 30px;">EDIT PROFILE</legend>
    <div style="width: 90%; margin: auto;">
<div style="margin: auto; ">
  <label style="font-weight: bold;" for="name">Name</label><br>
 <input style="width: 100%;" type="text" placeholder="Enter your name" value="<?php echo $name ?>" id="name" name="name" onkeyup="checkName()" onblur="checkName()" onclick="checkName()">
  <br><span class="error" id="namEerr"> <?php echo $nameerr;?></span>
</div>
<div style="margin-top: 10px;">
  <label style="font-weight: bold;" for="email">Email</label><br>
  <input style="width: 100%;" type="text" id="email" name="email" placeholder="Enter Your Email" value="<?php echo $email ?>" value="<?php echo $email;?>" onkeyup="checkEmail()" onblur="checkEmail()" onclick="checkEmail()">
    <br><span class="error" id="emailErr">
      <?php echo $emailerr;?>
    </span>
</div>
<div style="margin-top: 10px;">
<label style="font-weight: bold;" for="gender">Gender</label>
<label >: <br>
  <input type="radio" id="male" name="gender" value="male"<?php if('male' ==   $gender){echo 'checked';}?>>
  <label  for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female"<?php if('female' ==   $gender){echo 'checked';}?>>
  <label for="female">Female</label> 
  <input type="radio" id="other" name="gender" value="other"<?php if('other' ==   $gender){echo 'checked';}?>>
  <label for="other">Other </label>
</label>
  <span class="error"> </span>

</div>
<div style="margin-top: 10px;">
<label style="font-weight: bold;" for="dob">Date of Birthday</label>
<input style="width: 100%;" type="date" id="dob" name="dob" class="input_dob" value="<?php echo $dob;?>" onkeyup="checkdob()" onblur="checkdob()" onclick="checkdob()">
      <br><span class="error" id="doberr" ><?php echo $doberr;?></span>
</div>

<div style="margin: 10px; text-align: center;">
<input style="width: 50%; " type="submit" name="updateUser" value="Submit">
</div>
</div>
</form> 
	</fieldset>
</div> 


<?php require 'fotter/Footer.php';?>

</body>
</html>