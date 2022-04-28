<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
    td{
            border: 1px solid black;
            
        }
        .wraper
        {
            width: 50%;
    margin: auto;
    padding: auto;
    margin-top: 150px;
    transform: scale(1.2);
        }

  </style>
</head>
<body>
<?php  
session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 

if (!isset($_POST['name'])) 
{
  require_once ('model/model.php');
  $products = showAllBooks();
}
?>

<form class="wraper" >
<table style="border: 1px solid black ;margin: auto;">
      
  <tr style="background-color:gray; color: white; ">
    <th>ID</th>
    <th>Product Name</th>
    
    <th>Product Price</th>
    <th colspan="2">Action</th>

   
  </tr>
 <?php 
        foreach ($products as $i => $product): 

        
        ?>
<tr>
    <td><?php echo $product['ID'] ?></td>
    <td><?php echo $product['book_name'] ?></td>
 
    <td><?php echo $product['book_price'] ?></td>
    <td><a href="editProduct.php? id=<?php echo $product['ID'] ?>">Edit</a></td>
    <td><a href="deleteProduct.php? id=<?php echo $product['ID'] ?>">Delete</a></td>

    
  </tr>
 <?php  endforeach; ?>
    
</table>
<div style="text-decoration: none; text-align: center; margin: auto;width: 20%;height: 24px;
background: #1376D5;;border-radius: 5px; margin-top:10px ">
  <a style=" text-decoration: none;color: white; margin-top: 5px;" href="addbook.php">Add Product</a>
</div>
<div style="text-decoration: none; text-align: center; margin: auto;width: 20%;height: 24px;
background: #1376D5;;border-radius: 5px; margin-top:10px ">
    <a style=" text-decoration: none;color: white; margin-top: 25px;" href="searchindividual.php">Search Product</a>
</div>

</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>