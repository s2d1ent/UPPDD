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
mysqli_close($connection);


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style/forall.css">	
<link rel="stylesheet" href="../style/my.css">

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
<div id="block">
	<h2 id="user-id"> Unique ID: <?=$_COOKIE["id"] ?> | <?=$_COOKIE["email"] ?> </h2>
	<div class="hr"></div>
	
	<div id="block_line">  
		<img src="../src/user.png" id="block_line_img">

		<table id="data">
			<tr>
			<td>ФИО: </td> <th><?=$_COOKIE["user"]?></th> 
			</tr>
			<tr>
			<td>Паспорт: </td> <th><?=$_COOKIE["passport"]?></th> 
			</tr>
			<tr>
			<td>СНИЛС: </td> <th><?=$_COOKIE["snils"]?></th> 
			</tr>
			<tr>
			<td>Страховка: </td> <th><?=$_COOKIE["save"]?></th> 
			</tr>
			<tr>
			<td>Номера ТС: </td> <th><?=$_COOKIE["numberts"]?></th> 
			</tr>
			<tr>
			<td>Номер ПТС: </td> <th><?=$_COOKIE["pts"]?></th> 
			</tr>
			<tr>
			<td>Паспорт: </td> <th><?=$_COOKIE["passport"]?></th> 
			</tr>
		</table>


	</div>
	<?php 
	if ($_COOKIE["user"]!=""):
	?>
	<div class="change">
		<a href="change.php"><button id="change"> Редактировать </button></a>
	</div>
	<?php 
	endif;
	?>






	<div class="hr-one"></div>

<h2 class="story-h"> История </h2>
<div id="story">





 </div>



</div><!-- block -->


<footer></footer>

<script type="text/javascript" src="../scripts/header_not_koren.js"></script>
</body>
</html>
