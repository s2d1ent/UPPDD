<?php

$id=$_COOKIE["id"];


include "connect.php";

$connection=mysqli_connect($host,$username,$bdpassword);
$select=mysqli_select_db($connection,$dbname);

$query = " DELETE FROM `users` where `id`='$id' "; 
$result=mysqli_query($connection,$query);

mysqli_close($connection);

?>