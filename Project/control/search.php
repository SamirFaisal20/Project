<?php
$searchByID = "";
$searchByusername="";
require '../model/model.php';

$data=showProduct($_GET['id']);
If($data!=null)
{
$book_name = $data["book_name"];
$id = $data["ID"];
$author_name = $data["author_name"];
$book_price = $data["book_price"];


 echo "<table class='table'>";
 echo "<tr class'table_allrow'>";
 echo "<th class='table_data_blue'>ID</th>";
echo "<td  class='table_data'>" . $id . "</td>";
 echo "<tr>";
 echo "<th class='table_data_lightblue'>Product Name</th>";
 echo "<td  class='table_data'>" . $book_name . "</td>";
echo "<tr>";
 echo "<th class='table_data_lightblue'>Price</th>";
 echo "<td  class='table_data'>" . $book_price . "</td>";
 echo "<tr>";
  echo "<tr>";
 echo "<th class='table_data_lightblue'>Choose</th>";

 echo "<td ><a href='editProduct.php? id=".$id."'><span class='table_data_action'>Edit</span></a></td>";
 echo "<td  ><a href='deleteProduct.php? id=".$id."'><span class='table_data_action'>Delete</span></a></td>";
 echo "<tr>";


 echo "</table>";
}
 else if($data==null)
{
 	$searchByID="ID not Found";
	echo $searchByID;
 }

?>