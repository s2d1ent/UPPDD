<?php
$user_id=filter_var(trim($_POST["user_id"]),FILTER_SANITIZE_STRING);
$what=filter_var(trim($_POST["what"]),FILTER_SANITIZE_STRING);
$towhat=filter_var(trim($_POST["towhat"]),FILTER_SANITIZE_STRING);


$id=$_COOKIE["id"];
/*print_r($_COOKIE);
print_r($_POST);*/

	if($name =="")




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