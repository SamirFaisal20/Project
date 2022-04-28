<?php
include("../control/deliveryman_orderlist_control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="../css/orderstyle.css">
</head>
<body>
    <h3 id="head">Order list</h3>
<form action="" method="post">
    <div class="tab">
        <table id="table">
            <tr>
                <td>Product Code</td>
                <td>name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total</td>
                <td>Order Date</td>
                <td>Customer Name</td>
                <td>Addess</td>
                <td>Phone no</td>
            </tr>
            <tr>
                <td><?php echo $code; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $price; ?></td>
                <td><?php echo $quantity; ?></td>
                <td><?php echo $total; ?></td>
                <td><?php echo $orderdate; ?></td>
                <td><?php echo $customer_name; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $phone; ?></td>
            </tr>
        </table>
        </div>
    </form>
</body>
</html>