<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/forall.css">	
<link rel="stylesheet" href="style/failreg.css">
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

<?php
if($_COOKIE["regfail"]=="ok"):

?>

<div id="block" style="border:3px solid red;">
	<h2 style="color:red;">Ошибка регистрации</h2>
	<p style="color:red;" class="pb"> Что-то пошло не так и ваш аккаунт не был зарегестрирован.Попробуйте еще раз.</p>
<button id="but" > Регистрация</button>

</div>
<?php
endif;
?>
<?php
if($_COOKIE["regfail"]=="fail"):

?>
<div id="block" style="border:3px solid rgb(0, 255, 9);">
	<h2 style="color:rgb(0, 255, 9);">Вы успешно прошли регистрацию</h2>
	<p style="color:rgb(0, 255, 9);" class="pp"> Пройдите авторизацию чтобы зайти на сайт</p>
<a href="signin.php"><button id="input" > Авторизация </button></a>

</div>
<?php
endif;
?>

<?php
if($_COOKIE["regfail"]==""):
?>
<script language="javascript">
            document.location.href="signin.php";
</script>
<?php
endif;
?>



</div>
<!-- 
<script type="text/javascript" src="refresh.js"></script> -->
<script type="text/javascript" src="scripts/regfail.js"></script>

</body>
</html>