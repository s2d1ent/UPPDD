<?php 
$user_id=$_POST["user_id"];
$date=$_POST["date"];
$time=$_POST["time"];
$prich=$_POST["prich"];
$status=$_POST["status"];

if ($status!="Неоплачено") {
	echo "Введите нормальный статус";
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

	if ($prich=="" || mb_strlen($prich) <3 || mb_strlen($prich)>1000 ) {

		echo "Введеная вами причина не верна. Подсказка: причина не должна быть пустой строкой;от 3 до 1000 символов";
		exit();
	}
	if ($date=="" || mb_strlen($date)!=10 ) {

		echo "Введена неправильная дата. Подсказка: дата вводится в формате ГГГГ-ММ-ДД, где ГГГГ-год, ММ-месяц, ДД-день";
		exit();
	}
	if ($time=="" || mb_strlen($time)!=5 || !preg_match("/:/", $time)) {
		echo "Введено неправильное время. Подсказка: время вводится в формате ЧЧ:ММ, где ЧЧ-час, ММ-минуты";
		exit();

	}

	include "../php/connect.php";// переменные для коннекта

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);


	$query= "INSERT INTO `story`(`id`, `date`, `time`, `status`, `prich`) VALUES ('$user_id','$date','$time','$status','$prich')";
	$result=mysqli_query($connection,$query);



	if ($result==true) {
		echo "Данные были успешно занесены в БД";
	} else {
		echo "Произошла ошибка. Данные не были добавлены в БД.";
	}



	mysqli_close($connection);


 ?>