<?php

$id=$_POST["user_id"];	

$test=is_numeric($id);

if($test==true) {
	
} else {
	echo "<br/>"."Это не число";
	echo "<br/>"."Введите корректное значение";
	exit();
}

include "../php/connect.php";

$connection=mysqli_connect($host,$username,$bdpassword);
$select=mysqli_select_db($connection,$dbname);

$query = " DELETE FROM `users` where `id`='$id' "; 
$result=mysqli_query($connection,$query);

mysqli_close($connection);

if ($result==true) {
	echo "<br/>"."Аккаунт был успешно удален.Вернитесь в админ панель";
} else {
	echo "Аккаунт не был удален по не известной причине.Перепроверьте введенные вами данные.Unique User ID состоит ТОЛЬКО из чисел";
}

?>