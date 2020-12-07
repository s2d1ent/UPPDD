<?php 
$user_id=$_POST["user_id"];
$ufid=$_POST["ufid"];
$status=$_POST["status"];

$test_user_id=is_numeric($user_id);
$test_ufid=is_numeric($ufid);

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
	if ($test_user_id==false) {
		echo "Введено неправильное значение Unique User ID. Подсказка: является числом";
		exit();
	}
	if ($test_ufid==false) {
		echo "Введено неправильное значение Unique Fail ID. Подсказка: является числом";
		exit();
	}
	


	include "../php/connect.php";// переменные для коннекта

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);


	$query="UPDATE `story` SET `status`='$status' WHERE `id`='$user_id' &&  `ufid`='$ufid'";
	$result=mysqli_query($connection,$query);



	if ($result==true) {
		echo "Данные были успешно занесены в БД.";
	} else {
		echo "Произошла ошибка. Данные не были добавлены в БД.";
	}



	mysqli_close($connection);


 ?>