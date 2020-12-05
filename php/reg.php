<?php
$login=filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST["name"]),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST["pass"]),FILTER_SANITIZE_STRING);
$email=filter_var(trim($_POST["email"]),FILTER_SANITIZE_STRING);
$send=$_POST["send"];

	if (isset($send)) {

	 if($email=="" || mb_strlen($email) >30 || !preg_match("/@/", $email)) {
		echo "Введите корректный email";
		exit();
	}
	else if($login=="" || mb_strlen($login) < 3 || mb_strlen($login) > 90 ) {	

		echo "Введите корректный логин";
		exit();
	}  else if($name=="" ||mb_strlen($name) < 3 || mb_strlen($name)>20) {
		echo "Введите корректное имя";
		exit();
	} else if($pass=="" ||mb_strlen($pass) < 3 || mb_strlen($pass)>15) {
		echo "Введите корректный пароль";
		exit();
	} else {
	$pass=md5($pass."qwe");
	$passport=base64_encode($passport);
	$snils=base64_encode($snils);
	$save=base64_encode($save);


	include "connect.php";

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);

	$query= "INSERT INTO `users` (`login`,`name`,`pass`,`passport`,`email`,`snils`,`save`, `numberts`,`admin`) VALUES ('$login','$name','$pass','0','$email','0','0', '0','0')";
	$result=mysqli_query($connection,$query);

	mysqli_close($connection);
	if ($result) {
		setcookie("regfail","",time() + 10,"/")
		header('Location: http://uppdd/signin.php');
	} else {
		setcookie("regfail","fail",time() + 10,"/")
		header('Location: http://uppdd/signin.php');
	}

	
}

}


?>