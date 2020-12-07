<?php
$name=filter_var(trim($_POST["name"]),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST["pass"]),FILTER_SANITIZE_STRING);
$passport=filter_var(trim($_POST["passport"]),FILTER_SANITIZE_STRING);
$snils=filter_var(trim($_POST["snils"]),FILTER_SANITIZE_STRING);
$numberts=filter_var(trim($_POST["numberts"]),FILTER_SANITIZE_STRING);
$save=filter_var(trim($_POST["save"]),FILTER_SANITIZE_STRING);
$email=filter_var(trim($_POST["email"]),FILTER_SANITIZE_STRING);
$pts=filter_var(trim($_POST["pts"]),FILTER_SANITIZE_STRING);

$id=$_COOKIE["id"];
/*print_r($_COOKIE);
print_r($_POST);*/





	$pass=base64_encode($pass);

	include "connect.php";// переменные для коннекта

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);



	echo "<br/>"."Результат connection:";
	print_r($connection);
	echo "<br/>"."Результат select:";
	print_r($select);


	$query= "UPDATE `users` SET `name`='$name', `email`='$email', `pass`='$pass', `snils`='$snils',`save`='$save', `pts`='$pts', `numberts`='$numberts' WHERE `id`='$id' ";
	$result=mysqli_query($connection,$query);
/*	$user=mysqli_fetch_assoc($result);*/

	echo "<br/>"."Результат выполнения $query ";
	echo "<br/>"."Результат передачи файлов: ";
	print_r($result);





/*	$_COOKIE["user"]=$user["name"];*/
	mysqli_close($connection);

?>