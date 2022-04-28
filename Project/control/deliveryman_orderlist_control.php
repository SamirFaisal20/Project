<?php

    include("../model/database.php");

    $code=$name=$price=$quantity=$total=$orderdate=$customer_name=$address=$phone="";
    $databaseobject = new Database();

    $connectopen = $databaseobject->openConnection();
    $datastore=$databaseobject->fetchorder($connectopen);

    if($datastore->num_rows > 0)
    {
        while($row = $datastore->fetch_assoc())
        {
            $code=$row["code"];
            $name=$row["name"];
            $price=$row["price"];
            $quantity=$row["quantity"];
            $total=$row["total"];
            $orderdate=$row["order_date"];
            $customer_name=$row["customer_name"];
            $address=$row["address"];
            $phone=$row["phone"];
        }
    }
?>