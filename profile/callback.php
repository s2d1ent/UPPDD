

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style/forall.css">	
<link rel="stylesheet" href="../style/callback.css">

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
	<h2 class="block_h"> Связь с администрацией</h2>
	<form method="post" action="../php/callback.php" id="form" >
	<input type="text" name="from" class="text_form" required placeholder="Введите ваш email" value="<?=$_COOKIE["email"] ?>">
	<input type="text" name="subject" class="text_form" required placeholder="Введите тему сообщения" value="<?=$_COOKIE["subject"] ?>">
	<textarea name="message" id="textarea" required placeholder="Введите текст вашего сообщения" value="<?=$_COOKIE["text"] ?>"></textarea>
	<input type="submit" name="submit" value="Отправить" class="submit">
	</form>

</div><!-- block -->


<footer></footer>

</body>
</html>
