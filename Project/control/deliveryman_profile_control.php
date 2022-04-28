<?php
include("../model/database.php");
$msg="";
    $databaseobject = new Database();

    $connectopen = $databaseobject->openConnection();
    $datastore=$databaseobject->fetch($_SESSION["username"],$connectopen);
    if($datastore->num_rows > 0)
    {
        while($row = $datastore->fetch_assoc())
        {
            $present_add=$row["present_add"];
            $permanent_add=$row["permanent_add"];
            $phone_no=$row["phone_no"];
            $nid=$row["nid"];
            $religion=$row["religion"];
            $email=$row["email"];
        }
    }
    if(isset($_POST["update"]))
    {
        $databaseobject = new Database();
        $connectopen = $databaseobject->openConnection();
        $datastore=$databaseobject->update($_SESSION["username"],$_POST["present_add"],$_POST["permanent_add"],$_POST["religion"],$connectopen);
        if($datastore)
        {
            header("location: ../control/deliveryman_logout.php");
        }
        else{
            $msg = "<div class='alert'>Information not Updated.</div>";
        }
    }
    if(isset($_POST["ordersubmit"]))
    {
        header("location: ../view/deliveryman_order_list.php");
    }
    if(isset($_POST["delete"]))
    {
        $databaseobject = new Database();
        $connectopen = $databaseobject->openConnection();
        $deleteuser=$databaseobject->delete($_SESSION["username"],$connectopen);
        iF($deleteuser)
        {
            header("location: ../control/deliveryman_logout.php");
        }
    }
    // if(isset($_POST["massage"]))
    // {
    //     if(empty($_POST["textmassage"]))
    //     {
    //         echo "All informations are require";
    //     }
    //     else{
            
    //         $databaseobject = new Database();
    //         $connectopen = $databaseobject->openConnection();
    //         $datastore=$databaseobject->massage($_POST["textmassage"],$_SESSION["username"],$connectopen);
    //     }
        
    // }
    // if(isset($_POST["seemassage"]))
    // {
    //     $massage=$errmassage="";
    //     $databaseobject = new Database();
    //     $connectopen = $databaseobject->openConnection();
    //     $datastoremassage=$databaseobject->seemassage($_SESSION["username"],$connectopen);
    //     if($datastoremassage->num_rows > 0)
    //     {
            
    //         while($row = $datastoremassage->fetch_assoc())
    //         {
    //             $massage=$row["massage"];
    //         }
    //     }
    //     else{
    //         $errmassage = "No message Found";
    //     }
    // }
    $databaseobject->ConnectionClose($connectopen);
?>