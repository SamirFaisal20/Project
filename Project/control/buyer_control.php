<?php
    include("../model/database.php");
    session_start();
    $message="";
    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            $message= "<div class='alert'>All informations are require.</div>";
        }
        else
        {
            $databaseloginobject = new Database();

            $connectopen = $databaseloginobject->openConnection();
            $login = $databaseloginobject->Login($username,$password,$connectopen); 
            
            if($login->num_rows > 0)
            {
                $_SESSION["username"]=$_POST["username"];
                $_SESSION["password"]=$_POST["password"];
                header("location: ../view/buyer_profile.php");;
            }
            else
            {
                $message= "<div class='alert'>Login not done.</div>";
            }
            $databaseloginobject->ConnectionClose($connectopen);
        }
        
    }
    if(isset($_POST["reg"]))
    {
        header("location: ../view/buyer_ragistration.php");
    }
?>

