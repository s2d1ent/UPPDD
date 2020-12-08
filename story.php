<?php
$id=$_COOKIE["id"];


	include "php/connect.php";

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
<link rel="stylesheet" href="style/forall.css">	
<link rel="stylesheet" href="style/story.css">

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



<div id="block">
	<h2 id="user-id"> Unique ID: <?=$_COOKIE["id"] ?> | ФИО: <?=$_COOKIE["user"] ?> </h2>
	<div id="table_block">
		<table>
	<tr >
		<td>Номер</td>
		<td>Unique User ID</td>
		<td>Unique Fail ID</td>
		<td>Дата</td>
		<td>Время</td>
		<td>Причина</td>
		<td>Статус</td>
		<td>Оплата</td>
	</tr>
	<tr class="td">
		<td><?=$i++ ?></td>
		<td><?=$row['id'] ?></td>
		<td><?=$row['ufid']?></td>
		<td><?=$row['date'] ?></td>
		<td><?=$row['time']?></td>
		<td><?=$row['prich'] ?></td>
		<td><?=$row['status'] ?></td>
		<td><?=$row['money'] ?></td>
	</tr>
<?php
while ($row=mysqli_fetch_array($result)):

?>
<tr class="td">
		<td><?=$i++ ?></td>
		<td><?=$row['id'] ?></td>
		<td><?=$row['ufid']?></td>
		<td><?=$row['date'] ?></td>
		<td><?=$row['time']?></td>
		<td><?=$row['prich'] ?></td>
		<td><?=$row['status'] ?></td>
		<td><?=$row['money'] ?></td>
	</tr>





<?php
endwhile;
?>

</table>

	</div>
</div>


</body>
</html>