<?php

require_once '../model/model.php';
    
   $bookname = $authorname = $price =  "" ;
  $booknameerr = $authornameerr = $priceerr = "";
  $flag=1; 
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    if (empty($_POST["book_name"])) 
    {
      $booknameerr = "Book Name is required";
      $flag=0;
    } 
    else 
    {
      $bookname = ($_POST["book_name"]);
    
      if (!preg_match("/^[a-zA-Z-' ]*$/",$bookname) ) 
      {
        $nameerr = "Period & Dash Allowed";
        $flag=0;
        
      }
     
    }

    if (empty($_POST["author_name"])) 
    {
      $authornameerr = "Author name is required";
      $flag=0;
      $update="off"; 
    } 
    else 
    {
      $authorname = ($_POST["author_name"]);
     
    }
    if(empty($_POST["book_price"]))
        {
        $priceerr = "Insert book price";
        $flag=0;
        } 
        else
          {
        $price = ($_POST["book_price"]);
        if (preg_match('/^[a-zA-Z0-9]$/', $price)) 
        {
          $priceerr = "*Invalid Input";
          $flag=0;
        }
          
      }
        

          if ($flag==1) 
  {
if (isset($_POST['saveBook'])) 
  {
	$data['book_name'] = $_POST['book_name'];
	$data['author_name'] = $_POST['author_name'];
	$data['book_price'] = $_POST['book_price'];
	
  if (addBook($data)) 
  	{
  	  header('Location: ../Book information.php');
  
 	 }

  }

  }
 else
 	 {
 	 	header('Location: ../Book information.php');
 	 } 
 
}


?>
