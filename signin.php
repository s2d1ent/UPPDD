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
<header>
			<div id="siteLogoDiv">
				<a href="/" id="siteLogoA">
			<img src="src/loopaT.png" id="siteLogo">
				</a>
			</div>
		<nav id="nav" >
		<a href="index.php" id="nav_p" class="nav_p_o">Главная </a>
		<a href="#" id="nav_p">История </a>
		<a href="#" id="nav_p">Профиль </a>		
		</nav>
<?php
if($_COOKIE["user"]==""):

?>
 		<div id="auth">
			<a href="signin.php"> Sign in </a>
		</div> 
<?php
else :
?>
<div id="auth">
	<img src="src/user.png" id="userLogo">
	<div id="menu">
		<dl>
			<dd><a href="#">Профиль</a></dd>
			<dd><a href="signout.php">Выйти</a></dd>
		</dl>
	</div>

	</div>

<?php
endif;
?>


</header>
<div id="cont">

<div id="regform">
		<h2> Форма регистрации </h2>
		<h1>/</h1>
		<form action="php/reg.php" method="post" id="reg_form">
			<input type="email" name="email" class="login" placeholder="Электронная почта*">
			<input type="text" name="login" class="login" placeholder="Логин*">
			<input type="text" name="name" class="login" placeholder="Имя*">
			<input type="password" name="pass" class="login" placeholder="Пароль*">

			<input type="submit" name="send" class="but" value="Регистрация">
		</form>
</div>
<div id="sinform">
<?php
if($_COOKIE["regfail"]==""):

?>

	<div id="finish" style="color:rgb(3, 204, 0);border:3px solid #03cc00;"><p style="color:rgb(3, 204, 0);"> Вы успешно создали аккаунт</p></div> 
<?php
else :
?>

	<div id="finish" style=";border:3px solid rgb(204, 0, 0);"><p style="color:rgb(204, 0, 0);"> Ошибка:ваш аккаунт не был создан!</p></div>
<?php
endif;
?>

	<h2> Форма авторизации </h2>
		<h1>/</h1>
		<form action="php/auth.php" method="post" id="sin_form">
			<input type="text" name="login" class="llogin" placeholder="Логин">
			<input type="password" name="pass" class="llogin" placeholder="Пароль">
			<input type="submit" name="but" class="but" value="Войти">
		</form>
</div>


</div>
<!-- 
<script type="text/javascript" src="refresh.js"></script> -->

<script type="text/javascript" src="scripts/header.js"></script>
<script type="text/javascript" src="scripts/index.js"></script>
</body>
</html>