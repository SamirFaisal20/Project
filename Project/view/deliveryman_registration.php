<?php
    include("../control/deliveryman_registration_control.php");
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
    
    <form action="../view/deliveryman_registration.php" method="post" >
    <p id="msg">
    
    <div class="box">
    <h2 id="regheading"><b>Deliveryman Registration</b></h2>
        <table class="center">
            <tr>
                <td id="label">Username :</td>
                <td><input type="text" placeholder="Enter username" name="username" id="username" onkeyup="validationreg()"></small></td>
            </tr>
            <tr>
                <td id="label">Password :</td>
                <td><input type="password" placeholder="Enter password" name="password" id="password" onkeyup="validationreg()"></td>
            </tr>
            <tr>
                <td id="label">Present Address :</td>
                <td><input type="text" placeholder="Enter present address" name="presentaddress"id="presentadd" onkeyup="validationreg()"></td>
            </tr>
            <tr>
                <td id="label">Permanent Address :</td>
                <td><input type="text" placeholder="Enter permanent address" name="permanentaddress"id="permanentadd" onkeyup="validationreg()"></td>
            </tr>
            <tr>
                <td id="label">Phone No :</td>
                <td><input type="text" placeholder="Enter phone number" name="phoneNo"id="phoneNo" onkeyup="validationreg()"></td>
            </tr>
            <tr>
                <td id="label">Nid :</td>
                <td><input type="text" placeholder="Enter nid number" name="nid"id="nid" onkeyup="validationreg()"></td>
            </tr>
            <tr>
                <td id="label">Select Religion :</td>
                <td>
                <select name="religion" id="religion" onkeyup="validationreg()">
                    <option value="">Select your religion</option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Other">Other</option>
                </select>
                </td>
            </tr>
            <tr>
                <td id="label">E-mail :</td>
                <td><input type="text" placeholder="Enter email address" name="email" id="email" onkeyup="validationreg()"></td>
            </tr>
        </table>
        <br>
        <div class="submit">
    <form action="" method="post" >
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
