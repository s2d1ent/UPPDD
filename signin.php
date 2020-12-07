<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/forall.css">	
<link rel="stylesheet" href="style/signin.css">

<link rel="shortcut icon" href="">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>УП ПД</title>

</head>
<body>
<img src="src/back.jpg" id="back">
<div id="black"></div>


<?php
include "style/header.html";
?>


<div id="cont">

<div id="regform">
		<h2> Форма регистрации </h2>
		<h1>/</h1>
		<form action="php/reg.php" method="post" id="reg_form">
			<input type="email" name="email" required  class="login" placeholder="Электронная почта*">
			<input type="text" name="login" required  class="login" placeholder="Логин*">
			<input type="text" name="name" required  class="login" placeholder="ФИО*">
			<input type="password" name="pass" required  class="login" placeholder="Пароль*">

			<input type="submit" name="send" class="but" value="Регистрация">
		</form>
</div>
<div id="sinform">
	<h2> Форма авторизации </h2>
		<h1>/</h1>
		<form action="php/auth.php" required  method="post" id="sin_form">
			<input type="text" required  name="login" class="llogin" placeholder="Логин">
			<input type="password" required  name="pass" class="llogin" placeholder="Пароль">
			<input type="submit" name="but" class="but" value="Войти">
		</form>
</div>


</div>
<!-- 
<script type="text/javascript" src="refresh.js"></script> -->

<script type="text/javascript" src="scripts/index.js"></script>
</body>
</html>