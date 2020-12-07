<?php


$user_id=$_POST["user_id"];
$role=$_POST["role"];

$test=is_numeric($user_id);
	if ($test==false) {
		echo "Введены не правильные данные";
		exit();
	}

	if ($role>3 || $role <0) {
		echo "Введено не верно значение прав администрирования";
		exit();
	}

	if ($user_id<0) {
		echo "Введены не правильные данные";
		exit();
	}

	if (mb_strlen($user_id)==0 || mb_strlen($user_id)>11) {
		echo "Введено слишком большое кол-во символов в поле Unique User ID. Подсказка: колво символов в Unique User ID не превышает 11 символов";
		exit();

	}


	include "../php/connect.php";// переменные для коннекта

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);


	$query= "UPDATE `users` SET `admin`='$role' WHERE `id`='$user_id' ";
	$result=mysqli_query($connection,$query);



	if ($result==true) {
		echo "Права администрирования были успешно изменены. Пожалуйста, вернитесь в админ панель.";
	} else {
		echo "Произошла ошибка. Невернно введенные данные";
	}



	mysqli_close($connection);

?>