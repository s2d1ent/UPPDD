<?php
$id=$_COOKIE["id"];
$time=3600;


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
setcookie("login",$user["login"],time() + $time,"/");
setcookie("admin",$user["admin"],time() + $time,"/");
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
<img  src="../src/back2.jpg" id="back">
<div id="black"></div>




<?php
include "../style/header_profile.html";
?>



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
<p style="color:red;text-align: center;"> Изменение данных паспорта ТОЛЬКО через администрацию платформы. </p>
<p class="block_p">Unique ID: <?=$_COOKIE['id']?></p>
<form method="post" action="../php/newdata.php" class="form_change">
	<div id="radio_dot">
<p class="form_p"><input type="text" name="name" required class="form_change_string"  placeholder="ФИО" value="<?=$_COOKIE['name']?>">  ФИО</p>
<p class="form_p"><input type="text" name="pass" required class="form_change_string" placeholder="Пароль" value="<?=$pass?>"> Пароль</p>
<p class="form_p"><input type="text" name="passport" disabled required class="form_change_string" placeholder="Паспорт" value="<?=$_COOKIE['passport']?>"> Паспорт</p>

<p class="form_p"><input type="text" name="snils" class="form_change_string" placeholder="СНИЛС" value="<?=$_COOKIE['snils']?>"> СНИЛС</p>
<p class="form_p"><input type="text" name="numberts" required class="form_change_string" placeholder="Номер ТС" value="<?=$_COOKIE['numberts']?>"> Номера ТС</p>
<p class="form_p"><input type="text" name="save" class="form_change_string" placeholder="Страховка" value="<?=$_COOKIE['save']?>"> Страховка</p>
<p class="form_p"><input type="text" name="email" required class="form_change_string" placeholder="Email" value="<?=$_COOKIE['email']?>"> Email</p>
<p class="form_p"><input type="text" name="pts" class="form_change_string" placeholder="ПТС" value="<?=$_COOKIE['pts']?>"> ПТС</p>
	</div>


<input type="submit" name="send" value="Изменить" class="send">
</form>

<button type="submit" name="deleted" id="deleted_but" class="deleted" >Удалить аккаунт</button>	
<div id="verifi">
<div>
		<button type="submit" id="deleted_no" class="send"> Нет</button>
</div>
<form method="post" action="../php/delid.php" class="form_yes" >
	<input type="submit" name="deleted" value="Да" class="deleted_one">
</form>
</div>
</div>



</div>



</div><!-- block -->

<?php
endif;
?>

<footer></footer>
<script type="text/javascript" src="../scripts/change.js"></script>

</body>
</html>
