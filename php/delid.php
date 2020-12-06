<?php

$id=$_COOKIE["id"];


include "connect.php";

$connection=mysqli_connect($host,$username,$bdpassword);
$select=mysqli_select_db($connection,$dbname);

$query = " DELETE FROM `users` where `id`='$id' "; 
$result=mysqli_query($connection,$query);

mysqli_close($connection);

setcookie("user",$user["name"],time() - 3600,"/");
setcookie("id",$user["id"],time() - 3600,"/");
setcookie("admin",$user["admin"],time() - 3600 ,"/");
header('Location: /');

?>