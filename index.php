<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/forall.css">	
<link rel="stylesheet" href="style/index.css">

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
<div id="op">
	<h1 id="op_h"> Записка: </h1>
	<p id="op_p"> Данный проект является реализацией технического задания созданного в процессе учебной практики. Проект создан студентом 2ИСП Тюменевым Виктором. Псевдоним в сети интернет "s2d1ent". </p>
	<div id="link">
		<img src="src/vk.png" id="vk">
		<img src="src/github.png" id="github">

		<img src="src/s2dLogo.jpg" id="logo">

		<img src="src/logo.png" id="lazycote">
		<img src="src/twitch.png" id="twitch">

	</div>

</div>
<script type="text/javascript" src="scripts/header.js"></script>
<script type="text/javascript" src="scripts/index.js"></script>
</body>
</html>