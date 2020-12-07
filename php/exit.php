<?php
$time=3600 *1.5;

setcookie("user",$user["name"],time() - $time,"/");
setcookie("id",$user["id"],time() - $time,"/");
setcookie("admin",$user["admin"],time() - $time ,"/");
header('Location: /');
?>