<?php
    include "../control/deliveryman_login_control.php";
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
    <link rel="stylesheet" href="../css/login_style.css">
</head>
<body>
    <?php echo $message; ?>
    <form action="" method="post">
    <div class="box">
    <h2 id="loginheading"><b>Login</b></h2>
        <table class="center">
            <tr>
                <td id="label">User name : </td>
                <td><input type="text" placeholder="Enter your user name" name="username" ></td>
            </tr>
            <tr>
                <td id="label">Password : </td>
                <td><input type="password" placeholder="Enter your Password" name="password" id="show"> </td>
            </tr>
        
        </table>
        <p class="shwpass">Show Password <input type="checkbox" onclick="showpassword()"> </p>
        <div class="submit">
        <input type="submit" value="Login" name="login" class="button buttonlogin">
        <input type="submit" value="Create Account" name="registration" class="button buttonregistration">
        <input type="submit" value="Forget Password" name="forgetpass" class="button buttonshow">
        </div>
        </div>
    </form>
    <script src="../js/login.js"></script>
</body>
</html>
<?php
include("../view/aboutus.php");
?>