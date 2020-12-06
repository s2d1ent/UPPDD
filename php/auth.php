<?php
$login=filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST["name"]),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST["pass"]),FILTER_SANITIZE_STRING);

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

setcookie("user",$user["name"],time() + 3600,"/");
setcookie("id",$user["id"],time() + 3600,"/");
setcookie("admin",$user["admin"],time() + 3600 ,"/");

	mysqli_close($connection);

	header('Location: /');

?>
