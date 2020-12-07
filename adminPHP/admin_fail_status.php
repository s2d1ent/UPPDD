<?php 
$user_id=$_POST["user_id"];
$ufid=$_POST["ufid"];
$status=$_POST["status"];

if ($status!="Неоплачено" && $status!="Оплачено") {
	echo "Введите нормальный статус";
	exit();
}

if ($user_id<0) {
		echo "Unique User ID является отрицательным. Подсказка: число должно быть положительным";
		exit();
	}

	if (mb_strlen($user_id)==0 || mb_strlen($user_id)>11) {
		echo "Введено слишком большое кол-во символов в поле Unique User ID. Подсказка: колво символов в Unique User ID не превышает 11 символов";
		exit();

	}

	


/*	include "../php/connect.php";// переменные для коннекта

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);


	$query= "INSERT INTO `story`(`id`, `date`, `time`, `status`, `prich`) VALUES ('$user_id','$date','$time','$status','$prich')";
	$result=mysqli_query($connection,$query);



	if ($result==true) {
		echo "Данные были успешно занесены в БД";
	} else {
		echo "Произошла ошибка. Данные не были добавлены в БД.";
	}*/



	mysqli_close($connection);


 ?>