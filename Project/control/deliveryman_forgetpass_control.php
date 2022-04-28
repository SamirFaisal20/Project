<?php
include("../model/database.php");
$message="";
if(isset($_POST["submitpass"]))
{
    $username=$_POST["username"];
    $newpass=$_POST["newpassword"];
    if(empty($username) || empty($newpass))
    {
        $message = "<div class='alert'>All informations are require.</div>";
    }
    else if(strlen($newpass)<=5)
    {
        $message = "<div class='alert'>New Password must be getter than 5</div>";
    }
    else{
        $databaseloginobject = new Database();

        $connectopen = $databaseloginobject->openConnection();
        $user = $databaseloginobject->forgetpassuser($username,$connectopen);
        if($user->num_rows > 0)
        {
            $pass = $databaseloginobject->forgetpassupdate($username,$newpass,$connectopen);
            if($pass)
            {
                $message = "<div class='success'>Updated</div>";
            }
            else{
                $message = "<div class='alert'>Update not done yet</div>";
            }
        }
        else{
            $message = "<div class='alert'>Username is not found</div>";
        }
    }
    
}
?>