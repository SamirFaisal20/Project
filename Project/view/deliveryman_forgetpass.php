<?php
    include("../control/deliveryman_forgetpass_control.php");
    include("../view/siteheader.php");
    include("../view/navigationbar.php");
?>
<html >
<head>
    <title>Forget Password</title>
    <link rel="stylesheet" href="../css/deliveryman_forgetpass.css">
</head>
<body>
    <?php echo $message; ?>
<form action="deliveryman_forgetpass.php" method="post">
    <div class="box">
    <h2 id="loginheading"><b>Forget Password</b></h2>
        <table class="center">
            <tr>
                <td id="label">User name : </td>
                <td><input type="text" placeholder="Enter your user name" name="username"></td>
            </tr>
            <tr>
                <td id="label">New Password : </td>
                <td><input type="password" placeholder="Enter your New Password" name="newpassword" ></td>
            </tr>
        </table>
        <div class="submit">
        <input type="submit" value="Submit" name="submitpass" class="button buttonsubmit">
        </div>
        </div>
    </form>
</body>
</html>
<?php
include("../view/aboutus.php");
?>