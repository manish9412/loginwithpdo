<?php 
$db_name = "mysql:host=localhost;dbname=pdo";
$username = "root";
$password = "";


$conn = new PDO($db_name,$username,$password);


if (!$conn)
{
	echo "error";
}


 ?>