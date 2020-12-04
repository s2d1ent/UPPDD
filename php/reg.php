<?php
$login=filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST["name"]),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST["pass"]),FILTER_SANITIZE_STRING);
$send=$_POST["send"];

	if (isset($send)) {
	if($login=="" || mb_strlen($login) < 5 || mb_strlen($login) > 90) {
		echo "Введите корректный логин";
		exit();
	} else if($name=="" ||mb_strlen($name) < 3 || mb_strlen($name)>20) {
		echo "Введите корректное имя";
		exit();
	} else if($pass=="" ||mb_strlen($pass) < 3 || mb_strlen($pass)>15) {
		echo "Введите корректный пароль";
		exit();
	} else {
	$pass=md5($pass."qwe");


	include "connect.php";

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);

	$query= "INSERT INTO `users` (`login`,`name`,`pass`) VALUES ('$login','$name','$pass')";
	$result=mysqli_query($connection,$query);
	mysqli_close($connection);
	if ($result) {
		$mess="Регистрация успашна";
	} else {
		$mess="Ошибка регистрации";
	}

	header('Location: /');
}

}


?>