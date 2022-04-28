<?php
    $message="";
    include("../model/database.php");
    
    if(isset($_POST["Registration"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $present_add = $_POST["presentaddress"];
        $parmanent_add = $_POST["permanentaddress"];
        $phoneno = $_POST["phoneNo"];
        $nid=$_POST["nid"];
        $religion = $_POST["religion"];
        $email = $_POST["email"] ;

        if(empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["presentaddress"]) || empty($_POST["permanentaddress"]) || empty($_POST["phoneNo"]) ||
        empty($_POST["religion"]) || empty($_POST["email"]))
        {
            $message= "<div class='alert'>All Information Require.</div>";
            
        }
        else
        {
            if(!preg_match ("/^[a-zA-z]*$/",$_POST["username"]))
            {
                $message= "<div class='alert'>Only contain letter.</div>";
                if(strlen($_POST["password"])<=5)
                {
                    $message= "<div class='alert'>Password must be greater than 5.</div>";

                }
                if(strlen($_POST["phoneNo"])!=11)
                {
                    $message= "<div class='alert'>Phone Number must be 11 digit.</div>";

                }
               
                if(!isset($_POST["religion"]) && $_POST["religion"]!='Islam' && $_POST["religion"]!='Hindu'&& $_POST["religion"]!='Other')
                {
                    $message= "<div class='alert'>select Religion.</div>";

                }
                if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$_POST["email"]))
                {
                    $message= "<div class='alert'> enter correct email address.</div>";

                }
            }
            
            elseif(preg_match ("/^[a-zA-z]*$/",$_POST["username"]) || strlen($_POST["password"])>5 || strlen($_POST["phoneNo"])==11 ||
            isset($_POST["religion"]) && $_POST["religion"]=='Islam' && $_POST["religion"]=='Hindu' && $_POST["religion"]=='Other' || 
            filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
            {
                $databaseobject = new Database();

                $connectopen = $databaseobject->openConnection();
                $insert = $databaseobject->Insertdata($username,$password,$present_add,$parmanent_add,$phoneno,$nid,$religion,$email,$connectopen);
                
                // 
                // $phoneno = $databaseobject->findphone($phone,$connectopen);
                // $nid = $databaseobject->findnid($nid,$connectopen);
                // $email = $databaseobject->findemail($email,$connectopen);
                // if( $user->num_rows >0)
                // {
                //     $message= "<div class='alert'> Username is already taken.</div>";
                // }
                // if($phoneno->num_rows >0)
                // {
                //     $message= "<div class='alert'> Phone no is already taken.</div>";
                // }
                // if($nid->num_rows >0)
                // {
                //     $message= "<div class='alert'> Nid is already taken.</div>";
                // }
                // if($email->num_rows >0)
                // {
                //     $message= "<div class='alert'> E-mail is already taken.</div>";
                // }
                // else
                // {
                    if($insert)
                    {
                        $message="<div class='forward'>Registration Done</div>";
                    }
                    elseif(!$insert){
                        $message="<div class='alert'>Registration is not complete yet</div>";
                    }
                //}
                
                $databaseobject->ConnectionClose($connectopen);
            }
        }
    }
    if(isset($_POST["login"]))
    {
        header("location: ../view/deliveryman_login.php");
    }

?>