<?php
$login=filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST["name"]),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST["pass"]),FILTER_SANITIZE_STRING);
$time=3600 * 3;
	$pass=base64_encode($pass);

	include "connect.php";

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);

$result = mysqli_query($connection,"SELECT * FROM `users` WHERE  `login`='$login'  AND  `pass`='$pass' ");
$user=mysqli_fetch_assoc($result);
if(count($user)==0){
	echo "Пользователь не был найден";
	exit();
}

setcookie("user",$user["name"],time() + $time,"/");
setcookie("id",$user["id"],time() + $time,"/");
setcookie("admin",$user["admin"],time() + $time ,"/");

	mysqli_close($connection);

	header('Location: /');

?>
