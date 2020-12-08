<?php
$id=$_COOKIE["id"];
$time=120;


include "../php/connect.php";
$connection=mysqli_connect($host,$username,$bdpassword);
$select=mysqli_select_db($connection,$dbname);
$result = mysqli_query($connection,"SELECT * FROM `users` WHERE  id='".$id."'");
$user=mysqli_fetch_assoc($result);

$name=$user["name"];
$numberts=$user["numberts"];
$save=$user["save"];
$snils=$user["snils"];
$passport=$user["passport"];
$email=$user["email"];
$pts=$user["pts"];

setcookie("passport",$user["passport"],time() + $time,"/");
setcookie("snils",$user["snils"],time() + $time,"/");
setcookie("save",$user["save"],time() + $time,"/");
setcookie("numberts",$user["numberts"],time() + $time,"/");
setcookie("email",$user["email"],time() + $time,"/");
setcookie("pts",$user["pts"],time() + $time,"/");
mysqli_close($connection);


	include "../php/connect.php";

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);

$query="SELECT * FROM `story` WHERE  `id`='$id' ";
$result = mysqli_query($connection,$query);
$i=1;

$row=mysqli_fetch_array($result);

$row_id=$row['id'];
$row_date=$row['date'];
$row_time=$row['time'];
$row_ufid=$row['ufid'];
$row_status=$row['status'];
$row_prich=$row['prich'];
$row_money=$row['money'];

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
<img  src="../src/back2.jpg" id="back">
<div id="black"></div>


<?php
include "../style/header_profile.html";
?>


<div id="block">
	<h2 id="user-id"> Unique ID: <?=$id ?> | <?=$email ?> </h2>
	<div class="hr"></div>
	
	<div id="block_line">  
		<img src="../src/user.png" id="block_line_img">

		<table id="data">
			<tr>
			<td>ФИО: </td> <th><?=$name?></th> 
			</tr>
			<tr>
			<td>Паспорт: </td> <th><?=$passport?></th> 
			</tr>
			<tr>
			<td>СНИЛС: </td> <th><?=$snils?></th> 
			</tr>
			<tr>
			<td>Страховка: </td> <th><?=$save?></th> 
			</tr>
			<tr>
			<td>Номера ТС: </td> <th><?=$numberts?></th> 
			</tr>
			<tr>
			<td>Номер ПТС: </td> <th><?=$pts?></th> 
			</tr>
		</table>


	</div>
	<?php 
	if ($_COOKIE["user"]!=""):
	?>
	<div class="change">
		<a href="change.php"><button id="change"> Редактировать </button></a>
	</div>
	<div class="change">
		<a href="callback.php"><button class="change_one"> Связаться с нами </button></a>
	</div>
	<?php 
	endif;
	?>






	<div class="hr-one"></div>

<h2 class="story-h"> История </h2>
<div id="story">



	<h2 id="user-id"> Unique ID: <?=$_COOKIE["id"] ?> | ФИО: <?=$_COOKIE["user"] ?> </h2>
	<div id="table_block">
		<table id="tab_stor">
	<tr >
		<td>Номер</td>
		<td>Unique User ID</td>
		<td>Unique Fail ID</td>
		<td>Дата</td>
		<td>Время</td>
		<td>Причина</td>
		<td>Статус</td>
		<td>Расчет</td>

	</tr>
	<tr class="td">
		<td class="td"><?=$i++ ?></td>
		<td class="td"><?=$row['id'] ?></td>
		<td class="td"><?=$row['ufid']?></td>
		<td class="td"><?=$row['date'] ?></td>
		<td class="td"><?=$row['time']?></td>
		<td class="td"><?=$row['prich'] ?></td>
		<td class="td"><?=$row['status'] ?></td>
		<td class="td"><?=$row['money'] ?></td>
	</tr>
<?php
while ($row=mysqli_fetch_array($result)):

?>
<tr class="td">
		<td class="td"><?=$i++ ?></td>
		<td class="td"><?=$row['id'] ?></td>
		<td class="td"><?=$row['ufid']?></td>
		<td class="td"><?=$row['date'] ?></td>
		<td class="td"><?=$row['time']?></td>
		<td class="td"><?=$row['prich'] ?></td>
		<td class="td"><?=$row['status'] ?></td>
		<td class="td"><?=$row['money'] ?></td>
	</tr>





<?php
endwhile;
?>

</table>


 </div>



</div><!-- block -->


<footer></footer>

</body>
</html>
