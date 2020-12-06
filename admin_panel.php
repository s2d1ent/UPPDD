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




<div id="block" >
<h2> Приветствую вас в админ панели <span style="color: yellow; text-shadow: 0px 0px 10px yellow;"><?=$_COOKIE["user"]?> </span></h2>

<div id="block_one">

	<div class="block_one_panel">
		<h2 class="block_one_panel_p">Изменение данных USER, скрипт недописан</h2>
		<form method="post" action="adminPHP/admin_change.php" class="form">
			<input type="text" name="user_id" class="text_form" placeholder="Unique User ID">
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
			<input type="text" name="role" class="text_form"  value="1">
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
			<input type="text" name="role" class="text_form" disabled value="0">
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
			<input type="text" name="date" class="text_form" placeholder="Дата">
			<input type="text" name="time" class="text_form" placeholder="Время">
			<input type="text" name="status" class="text_form" placeholder="Статус">
			<input type="submit" name="send" class="submit" value="Добавить">

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
			<input type="text" name="status" class="text_form" placeholder="Статус">
			<input type="submit" name="send" class="submit" value="Изменить">

		</form>
	</div>

<div class="line">
	<div class="line_vert"></div>
</div>

<div class="block_one_panel">
		<h2 class="block_one_panel_p">Оповещение USER о правонарушении</h2>
		<form method="post" action="adminPHP/admin_failstatus.php" class="form">
			<input type="text" name="to" class="text_form" placeholder="Unique User ID">
			<input type="text" name="fail" class="text_form" disabled value="У вас есть новое/неоплаченое правонарушение. Загляните в свой личный кабинет на платферме <ссылка на сайт>">
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





