<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style/forall.css">	
<link rel="stylesheet" href="../style/callback_after.css">

<link rel="shortcut icon" href="">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>УП ПД</title>

</head>
<body>
<img  src="../src/back2.jpg" id="back">
<div id="black"></div>


<?php
include "../style/header_profile.html";
?>


<div id="block">
<?php
if ($_COOKIE["ready"]==1):
?>


	<div id="notif_one">
		<h1 class="notif_one_h_red"> Ошибка отправки обращения </h1>
		<p class="notif_one_p_red"> Ваше сообщение не было отправлено по неизвестной причине. Пожалуйста, проверьте введенные вами данные и попробуйте снова. </p>
		<a href="callback.php" id="notif_one_a"><button id="notif_one_but"> Вернуться </button></a>
	</div>
<?php
endif;
?>


<?php
if ($_COOKIE["ready"]==0):
?>

	<div id="notif_zero">
		<h1 class="notif_zero_h_red"> Ваше сообщение было успешно отправлено </h1>
		<p class="notif_zero_p_red"> Администрация сайта ответит вам в течении недели.Ожидайте ответа </p>
		<a href="/" id="notif_zero_a"><button id="notif_zero_but"> Вернуться на главную </button></a>
	</div>
<?php
endif;
?>

</div><!-- block -->




</body>
</html>
<?php
if ($_COOKIE["ready"]==""):
?>
<?php
include "../php/headerIndex.php";
?>

<?php
endif;
?>