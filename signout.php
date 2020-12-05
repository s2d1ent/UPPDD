<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/forall.css">	
<link rel="stylesheet" href="style/signout.css">

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
		<a href="index.php" id="nav_a_one" class="nav_p" class="nav_p_o">Главная </a>
		<a href="#" id="nav_a_two" class="nav_p">История </a>
		<a href="#" id="nav_a_three" class="nav_p">Профиль </a>		
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
		<p id="nameUser">
	<?=
	$_COOKIE["user"];
	?></p>
	<img src="src/user.png" id="userLogo">
	<div id="menu">
		<dl>
			<dd><a href="#" id="profile">Профиль</a></dd>
			<dd><a href="signout.php">Выйти</a></dd>
		</dl>
	</div>

	</div>

<?php
endif;
?>


</header>
<div id="cont">
	<?php
if($_COOKIE["user"]!=""):

?>
<div id="block">
		<h2> Вы уверены что хотите выйти из аккаунта ?</h2>

		<p> При нажатии на кнопку "Да" вы будете переброшенны на главную страницу и для пользования ресурсом придется повторно авторизироваться.</p>
		<p>При наэатии на кнопку "Нет" вы будете возвращены на главную страницу.</p>
	<div id="vyb">
		<a href="index.php" ><button class="but"> Нет </button></a>
		<form action="php/exit.php" method="post" >
			<input type="submit" name="send" class="but" value="Да">
		</form>
	</div>
</div>
</div>
<?php
else : include "php/headerLoc.php";
?>
<?php
endif;
?>
<!-- <script type="text/javascript" src="refresh.js"></script> -->

<script type="text/javascript" src="scripts/header.js"></script>

</body>
</html>