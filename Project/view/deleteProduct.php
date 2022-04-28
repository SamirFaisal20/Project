<?php 

require_once 'model/model.php';
if(isset($_GET['id']))
{
  $product = showProduct($_GET['id']);  
}
else
{
    header('Location: Book information.php');
}
session_start();

if (isset($_SESSION['user_name']))
  {require 'head/Top1.php';
  require 'head/Top2.php';}
else
{
  header("location:login.php");
} 

 ?>
<!DOCTYPE html>
<html>
<head>
<title>Delete BOOK</title>
<style type="text/css">
  
  
  *{
    margin: 0px;
    padding: 0px;
  }
  .table
  {
    border: 1px solid black;
    margin-top: 20px;
    width: 250px;

  }
      .wraper
        {
   width: 23%;
    margin: auto;
    padding: auto;
    margin-top: 150px;
    transform: scale(1.3);
        }
        .table_data_blue
        {
          background-color:  #1376D5;
          color :white;

        }
        .table_data_lightblue
        {

          color :black;

         font-weight: bold;
        }
        .table_data
        {
          margin-left: 20px;
        }
        
        .table_allrow
        {
          width: 100%;
          margin-left: 10px;
          margin-top:5px;
          
        }
        .center
        {
          text-align: center;
        }
        .input_submit
        {
        
           width: 70px; 
           height: 20px;
           margin-top: 10px;
           background: #1376D5;
           margin-bottom: 10px;
           text-align: center;
           margin-left: 10px;
        }
        .input_submit:hover
        {
          background-color: #2090f5;
          transform: scale(1.1);
        }
        .link_text
        {
           text-decoration: none;
           color: white;
        }
</style>
</head>
<body>
<form method="POST">
 <fieldset  class="wraper">
  <legend class="center">DELETE Product</legend>
<div class="table_allrow">
  <span class="table_data_lightblue">ID : </span> <?php echo $product['ID'] ?><br>
</div>
<div class="table_allrow">
  <span class="table_data_lightblue">Product name : </span><?php echo $product['book_name'] ?><br>
</div>

<div class="table_allrow">
  <span class="table_data_lightblue">Product Price : </span> <?php echo $product['book_price'] ?><br>
</div>
  <hr style="width: 95%; margin: auto;">
  <div class="input_submit" >
  <a class="link_text" href="Controller/removeProduct.php?id=<?php echo $product['ID'] ?>">Delete</a>
</div>
 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>