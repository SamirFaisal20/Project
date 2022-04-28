<?php
include("../model/database.php");
if(isset($_POST["order"]))
{
    if(empty($_POST["code"]) || empty($_POST["name"]) || empty($_POST["price"]) || empty($_POST["quantity"]) || empty($_POST["total"]) || empty($_POST["orderdate"])
    || empty($_POST["customer_name"]) ||empty($_POST["address"]) || empty($_POST["phone"]))
    {
        echo "All information require";
    }
    else
    {
        $databaseobject = new Database();

        $connectopen = $databaseobject->openConnection();
        $login = $databaseobject->insertorder($_POST["code"] ,$_POST["name"],$_POST["price"],$_POST["quantity"],$_POST["total"],$_POST["orderdate"],
        $_POST["customer_name"],$_POST["address"],$_POST["phone"],$connectopen);
        
        if($login)
        {
            echo "Order Complete";
            echo "<br>";
        }
        else{
            echo "Not done yet";
        }
    }
}
?>