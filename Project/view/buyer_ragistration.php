<?php
    include("../control/buyer_control.php");
    include("../view/siteheader.php");
    include("../view/navigationbar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration page</title>
    <link rel="stylesheet" href="../css/registration_style.css">
</head>
<body>
    <?php echo $message; ?>
    
    <form action="../view/buyer_registration.php" method="post" >
    <p id="msg">
    
    <div class="box">
    <h2 id="regheading"><b>Registration Account</b></h2>
        <table class="center">

        <tr>
                <td>First Name </td>
               
            <tr>
                
                <td><input type="text"  name="fname"></td>
            </tr>
            <tr>
                <td>Last Name </td>
               
            <tr>
            <tr>
            <td><input type="text"  name="lname"></td>
               
            <tr>


            <tr>
                <td>Telephone </td>
              
            </tr>
                        <tr>
                
                 <td><input type="text" name="phoneNo"></td>
            </tr>
            
            
            <tr>
                <td>Present Address </td>
                
            </tr>
            <tr>
               
            <td><input type="text" name="presentaddress"></td>
            </tr>
           
            <tr>
                <td>Gender :
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>
            <tr>
                <td>Select Region 
                
                <select name="region" id="region">
                    <option value="">Select your region</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Rajshahi">Rajshahi</option>
                </select>
                </td>
            </tr>

            <tr>
                <td>Username </td>

            </tr>
            <tr>
               
                <td><input type="text"  name="username"></td>
            </tr>
            <tr>
                <td>Password </td>
               
            </tr>
            <tr>
             <td>
                <input type="password"  name="password"></td>
            </tr>
        </table>
        <br>
        <div class="submit">
    <form action="" method="post" onsubmit="return validationreg()">
        <input class="button buttonregistration" type="submit" value="Registration" name="Registration" >
        <input class="button buttonlogin" type="submit" value="Login" name="login">
        

        </div>
        </div>
    </form>
    <script src="../js/validation.js"></script>
    
</body>
</html>

<?php
include("../view/aboutus.php");
?>
