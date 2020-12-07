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


<?php
include "style/header.html";
?>



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



</body>
</html>