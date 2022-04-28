<!DOCTYPE html>
<html>
<head>
<title>Add Product</title>
<link rel="stylesheet" type="text/css" href="css/add_book_style.css">
<script src="JS/style.js"></script>
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

?>
<form action="controller/saveProduct.php" method="POST" enctype="multipart/form-data" >
  <div class="content">
 <fieldset style="" class="wraper">
  <legend class="text">ADD Products</legend>
<div class="input_design">
  <label class="input_header" for="book_name">Product Name</label><br>
  <input class="input_holder"  type="text" id="book_name" name="book_name" onkeyup="checkBookName()" onblur="checkBookName()" onclick="checkBookName()">
<br>
</div>
<div class="input_design">
  <label class="input_header" for="author_name">Products Details</label><br>
  <input  class="input_holder" type="text" id="author_name" name="author_name"onkeyup="checkAuthorName()" onblur="checkAuthorName()" onclick="checkAuthorName()">
<br>
</div>
<div class="input_design">
  <label  class="input_header" for="book_price">Price</label><br>
  <input  class="input_holder" type="number" id="book_price" name="book_price"onkeyup="checkprice()" onblur="checkprice()" onclick="checkprice()">
<br><span class="error" id="bookPriceEerr"></span>
</div>

  <div class="input_design">
  <hr>
  <input type="submit" name = "saveBook" value="Save"  class="input_submit">
</div>
</div>
 </fieldset>
</form>
<?php require 'fotter/Footer.php';?>
</body>
</html>