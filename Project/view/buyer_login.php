<?php
    include "../control/buyer_control.php";
    include("../view/siteheader.php");
    include("../view/navigationbar.php");
    if(isset($_SESSION["username"]))
    {
        header("location: deliveryman_profile.php");
    }
?>
<html>
<head>
    <title>Log in</title>
    <link rel="stylesheet" href="../css/buyer_login_style.css">
</head>
<body>
    <?php echo $message; ?>
    <form action="" method="post">
    <div class="box">
    <h2 id="loginheading"><b>Buyer Login</b></h2>
        <table class="center">
            <tr>
                <td id="label">User name </td>
                
            </tr>
            <tr>
                
                <td><input type="text"  name="username" ></td>
            </tr>
            <tr>
                <td id="label">Password </td>
               
            </tr>
            <tr>
                
                <td><input type="password"  name="password" id="show"> </td>
            </tr>
        
        </table>
        <br>
        
        <div class="submit">
        <input type="submit" value="Login" name="login" class="button buttonlogin">
        <input type="submit" value="Create Account" name="reg" class="button buttonregistration">
              <a href="../view/mainpage.php"><input type="button" value="Cancel" name="Cancel" class="button buttonregistration"></a> 
        </div>
        </div>
    </form>
    <script src="../js/login.js"></script>
</body>
</html>
<?php
include("../view/aboutus.php");
?>