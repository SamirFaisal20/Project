<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.contact_table
		{
			width: 500px;
			height: 230px;
			border: 1px solid black;
			margin: auto;
			top:30px;
			margin-top: 100px;
		}
	</style>
</head>
<body>
	

<?php 

session_start();

if (isset($_SESSION['user_name']))
{
	require 'head/Top1.php';
	require 'head/Top2.php';

}
else
{
	require 'head/Top.php';
}


?>

	<div class="contact_table">

	<table>
		<tr>
			<th style="text-align: left;background: gray;color: white; font-size: 40px; width: 500px;" >Contact Us</th>
		</tr>
		<tr>
			<td style="width: 500px; height: 30px; background: #eeeeee;"><b>Adress:</b><span style="margin-left:10px; ">Mirpir 1, Dhaka 1216, Bangladesh</span></td>
		</tr>
		<tr>
			<td style="width: 500px; height: 30px; "><b>Telephone:</b><span style="margin-left:10px; ">+8801731444271</span></td>
		</tr>
		<tr>
			<td style="width: 500px; height: 30px; background: #eeeeee;"><b>Fax:</b><span style="margin-left:10px; ">+88 02 841 2255</span></td>
		</tr>
		<tr>
			<td style="width: 500px; height: 30px; "><b>Email:</b><span style="margin-left:10px; ">wbtan1998@gmail.com</span></td>
		</tr>
		<tr>
			<td style="width: 500px; height: 30px; background: #eeeeee;"><b>Facebook:</b><link style="margin-left:10px; " rel="stylesheet" type="text/css" href="Facebook.com">https://www.facebook.com/wasimulbari.tanzil/</td>
		</tr>
	</table>
	
</div>
<?php require 'fotter/Footer.php';?>S
</body>
</html>