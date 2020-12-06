<?php
$user_id=$_POST["user_id"];
$role=$_POST["role"];

print_r($_POST);

echo "<br/>"." $user_id ";
echo "<br/>"." $admin";


	include "../php/connect.php";// переменные для коннекта

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);


	$query= "UPDATE `users` SET `admin`='$role' WHERE `id`='$user_id' ";
	$result=mysqli_query($connection,$query);


	echo "<br/>"."Результат выполнения $query ";
	echo "<br/>"."Результат передачи файлов: $result";



	mysqli_close($connection);

?>