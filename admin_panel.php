<?php 
if ($_COOKIE["admin"]=="1" || $_COOKIE["admin"]=="2" || $_COOKIE["admin"]=="3" ):


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/forall.css">	
<link rel="stylesheet" href="style/admin_panel.css">

<link rel="shortcut icon" href="">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>УП ПД</title>

</head>
<body>
<img src="src/admin_back.jpg" id="back">
<div id="black"></div>

<header>
		

		
		<nav id="nav" >
		<a href="/" id="nav_a_one" class="nav_p" class="nav_p_o"> Главная </a>
		</nav>

</header>


<div id="block" >
<h2> Приветствую вас в админ панели <span style="color: yellow; text-shadow: 0px 0px 10px yellow;"><?=$_COOKIE["user"]?> </span></h2>

<div id="block_one">

	<div class="block_one_panel">
		<h2 class="block_one_panel_p">Изменение данных USER</h2>
		<form method="post" action="adminPHP/admin_change.php" class="form">
			<input type="text" name="user_id" class="text_form" placeholder="Unique User ID" maxlength="11" min="0">
			<input type="text" name="what" class="text_form" placeholder="Что заменить, пример:пароль,email...">
			<input type="text" name="towhat" class="text_form" placeholder="На что заменить:qwerty,qwe@mail.ru...">
			<input type="submit" name="send" class="submit" value="Изменить">

		</form>
	</div>

<div class="line">
	<div class="line_right"></div>
</div>

	<div class="block_one_panel">
		<h2 class="block_one_panel_p">Удалить аккаунт USER</h2>
		<form method="post" action="adminPHP/admin_delete.php" class="form">
			<input type="text" name="user_id" class="text_form" placeholder="Unique User ID">
			<input type="submit" name="send" class="submit" value="Удалить">

		</form>
	</div>	

</div>
</div>

<img src="src/work.jpg" id="work">



<div id="block_two">
<div id="block_two_one">
<div class="block_one_panel">
<?php
if ($_COOKIE["admin"]=="1" || $_COOKIE["admin"]=="2" ):
?>
			<h2 class="block_one_panel_p">Выдача прав администрирования USER</h2>
		<form method="post" action="adminPHP/admin_add.php" class="form">
			<input type="text" name="user_id" class="text_form" placeholder="Unique User ID">
			<input type="text" name="role" class="text_form" readonly value="1">
			<input type="submit" name="send" class="submit" value="Изменить">

		</form>
</div>

<div class="line">
	<div class="line_left"></div>
</div>

<div class="block_one_panel">
			<h2 class="block_one_panel_p">Снятие прав администрирования USER</h2>
		<form method="post" action="adminPHP/admin_add.php" class="form">
			<input type="text" name="user_id" class="text_form" placeholder="Unique User ID">
			<input type="text" name="role" class="text_form" readonly value="0">
			<input type="submit" name="send" class="submit" value="Изменить">

		</form>
</div>
<?php
endif;
?>

<?php
if ($_COOKIE["admin"]=="3" ):
?>
			<h2 class="block_one_panel_p">Корректировка прав администрирования USER</h2>
		<form method="post" action="adminPHP/admin_add.php" class="form">
			<input type="text" name="user_id" class="text_form" placeholder="Unique User ID">
			<input type="text" name="role" class="text_form"  placeholder="Введите уровень доступа">
			<input type="submit" name="send" class="submit" value="Изменить">

		</form>
</div>




<?php
endif;
?>

</div>
</div>

<div id="block_three">
	<div id="block_three_one">
		<div class="block_one_panel">
		<h2 class="block_one_panel_p">Занесение правонарушения USER</h2>
		<form method="post" action="adminPHP/admin_fail_add.php" class="form">
			<input type="text" name="user_id" class="text_form" placeholder="Unique User ID">
			<input type="text" name="date" class="text_form" value="ГГГГ-ММ-ДД" placeholder="Дата">
			<input type="text" name="time" class="text_form" value="ЧЧ:ММ" placeholder="Время">
			<!-- <input type="text" value="Оплачено/Неоплачено" name="status" class="text_form"  placeholder="Статус"> -->
			<input type="text" name="prich" class="text_form" placeholder="Причина штрафования">
			<input type="text" name="money" class="text_form" placeholder="Стоимость">
			<select name="status" class="text_form" readonly style="text-align: center;">
				<option>Неоплачено</option>
			</select>
			<input type="submit"  name="send" class="submit" value="Добавить">

		</form>
	</div>

<div class="line">
	<div class="line_vert"></div>
</div>

<div class="block_one_panel">
		<h2 class="block_one_panel_p">Изменение статуса правонарушения USER</h2>
		<form method="post" action="adminPHP/admin_fail_status.php" class="form">
			<input type="text" name="user_id" class="text_form" placeholder="Unique User ID">
			<input type="text" name="ufid" class="text_form" placeholder="Unique Fail ID">
			<select name="status" class="text_form" readonly style="text-align: center;">
				<option>Оплачено</option>
				<option>Неоплачено</option>
			</select>
			<input type="submit" name="send" class="submit" value="Изменить">

		</form>
	</div>

<div class="line">
	<div class="line_vert"></div>
</div>

<div class="block_one_panel">
		<h2 class="block_one_panel_p">Оповещение USER о правонарушении</h2>
		<form method="post" action="adminPHP/admin_fail_notif.php" class="form">
			<input type="text" name="user_id" class="text_form" placeholder="Unique User ID">
			<input type="submit" name="send" class="submit" value="Отправить">

		</form>
	</div>


	</div>
</div> <!-- block_three -->


<footer></footer>
<!-- <script type="text/javascript" src="refresh.js"></script> -->
</body>
</html>
<?php
else : include "php/headerIndex.php";
?>


<?php 
endif;
?>





