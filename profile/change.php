<?php
$id=$_COOKIE["id"];
$time=600;


include "../php/connect.php";
$connection=mysqli_connect($host,$username,$bdpassword);
$select=mysqli_select_db($connection,$dbname);
$result = mysqli_query($connection,"SELECT * FROM `users` WHERE  id='".$id."'");
$user=mysqli_fetch_assoc($result);

setcookie("passport",$user["passport"],time() + $time,"/");
setcookie("snils",$user["snils"],time() + $time,"/");
setcookie("save",$user["save"],time() + $time,"/");
setcookie("numberts",$user["numberts"],time() + $time,"/");
setcookie("email",$user["email"],time() + $time,"/");
setcookie("pts",$user["pts"],time() + $time,"/");
setcookie("name",$user["name"],time() + $time,"/");
setcookie("pass",$user["pass"],time() + $time,"/");

$pass=base64_decode($_COOKIE["pass"]);

mysqli_close($connection);


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style/forall.css">	
<link rel="stylesheet" href="../style/change.css">

<link rel="shortcut icon" href="">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>УП ПД</title>

</head>
<body>
<img src="../src/back.jpg" id="back">
<div id="black"></div>
<header>
			<div id="siteLogoDiv">
				<a href="/" id="siteLogoA">
			<img src="../src/loopaT.png" id="siteLogo">
				</a>
			</div>
		<nav id="nav" >
		<a href="../index.php" id="nav_a_one" class="nav_p" class="nav_p_o">Главная </a>
		<a href="../#" id="nav_a_two" class="nav_p">История </a>
		<a href="../#" id="nav_a_three" class="nav_p">Профиль </a>				
		</nav>
<?php
if($_COOKIE["user"]==""):

?>
 		<div id="auth">
			<a href="../signin.php"> Sign in </a>
		</div> 
<?php
else :
?>
<div id="auth">
	<p id="nameUser">
	<?=
	$_COOKIE["user"];
	?></p>
	<img src="../src/user.png" id="userLogo">
	<div id="menu">
		<dl>
			
			<dd><a href="../#" id="profile">Профиль</a></dd>
			<dd><a href="../signout.php">Выйти</a></dd>
		</dl>
	</div>

	</div>

<?php
endif;
?>


</header>
<?php
if($_COOKIE["user"]==""): include "../php/headerIndex.php";

?>
<?php
else : 
?>

<div id="block">
	<h2 id="user-id"> Редактирование данных  </h2>
<div class="block">

<div class="block_one">

<p class="block_p"> Если формы для ввода пустые, то перезагрузите страницу </p>
<form method="post" action="../php/newdata.php" class="form_change">
	<div id="radio_dot">
<p class="form_p"><input type="text" name="name" class="form_change_string"  placeholder="ФИО" value="<?=$_COOKIE['name']?>">  ФИО</p>
<p class="form_p"><input type="text" name="pass" class="form_change_string" placeholder="Пароль" value="<?=$pass?>"> Пароль</p>
<p class="form_p"><input type="text" name="passport" class="form_change_string" placeholder="Паспорт" value="<?=$_COOKIE['passport']?>"> Паспорт</p>
<p class="form_p"><input type="text" name="snils" class="form_change_string" placeholder="СНИЛС" value="<?=$_COOKIE['snils']?>"> СНИЛС</p>
<p class="form_p"><input type="text" name="numberts" class="form_change_string" placeholder="Номер ТС" value="<?=$_COOKIE['numberts']?>"> Номера ТС</p>
<p class="form_p"><input type="text" name="save" class="form_change_string" placeholder="Страховка" value="<?=$_COOKIE['save']?>"> Страховка</p>
<p class="form_p"><input type="text" name="email" class="form_change_string" placeholder="Email" value="<?=$_COOKIE['email']?>"> Email</p>
<p class="form_p"><input type="text" name="pts" class="form_change_string" placeholder="ПТС" value="<?=$_COOKIE['pts']?>"> ПТС</p>

	</div>

<input type="submit" name="send" value="Изменить" class="send">
</form>
</div>



</div>



</div><!-- block -->

<?php
endif;
?>

<footer></footer>

<script type="text/javascript" src="../scripts/header_not_koren.js"></script>
</body>
</html>
