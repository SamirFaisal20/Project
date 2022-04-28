<?php
session_start();
include("../control/deliveryman_profile_control.php");
include("../view/siteheader.php");
include("../view/navigationbar.php");
if(!isset($_SESSION["username"]))
{
    header("location: deliveryman_login.php");
}
setcookie("login","Project",time()+(86400*30),"/");
    $point="";
    if(isset($_COOKIE["login"]))
    {
        $point=1;
    }
    if($point==1)
    {
        $message =  "<div class='cookie'>You are visiting me before.</div>";
    }
    
    else{
        $message = "<div class='cookie'>You are visiting me first time. Thank you!!.</div>";
    }
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="../css/buyer_profile_style.css">
</head>
<body>
    <?php echo $message; ?>
    <h1 id="welcome">Profile <?php echo $_SESSION["username"]; ?></h1>
    <hr>
    <?php echo $msg; ?>
    <form action="" method="post">
    <div class="box">
    <h2 id="profileheading"><b>Profile</b></h2>
        <table class="center">
            <tr>
                <td id="label"> Name : </td>
                <td><input type="text" value="<?php echo $_SESSION["username"]; ?>"></td>
            </tr>
            <tr>
                <td id="label">Peresnt Address : </td>
                <td><input type="text" name="present_add" value="<?php echo $present_add; ?>"></td>
            </tr>
          
          
    
          
        </table>
        <br>
        <div class="submit">
        <input type="submit" name="update" value="Update" class="button buttonlogin" >
        <a href="../control/deliveryman_logout.php" class="button buttonlogout">logout</a>
        <input type="submit" name="delete" value="Delete" class="button buttondelete">
        </div>
    </div>
    <input type="submit" value="Order" name="ordersubmit" class="button buttonorder">
    </form>
    

        
    
    
</body>
</html>
<?php
include("../view/aboutus.php");
?>