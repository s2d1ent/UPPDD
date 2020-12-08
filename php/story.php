<?php
$id=$_COOKIE["id"];


	include "connect.php";

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


mysqli_close($connection);




?>



<table  border="1px solid black" >
	<tr style="background-color: yellow;max-width: 100%;
	width: 100%;">
		<td>Номер</td>
		<td>Unique User ID</td>
		<td>Unique Fail ID</td>
		<td>Дата</td>
		<td>Время</td>
		<td>Причина</td>
		<td>Статус</td>
	</tr>
<?php
while ($row=mysqli_fetch_array($result)):

?>
<tr style="background-color: blue; max-width: 100%;
	width: 100%;">
		<td><?=$i++ ?></td>
		<td><?=$row['id'] ?></td>
		<td><?=$row['ufid']?></td>
		<td><?=$row['date'] ?></td>
		<td><?=$row['time']?></td>
		<td><?=$row['prich'] ?></td>
		<td><?=$row['status'] ?></td>
	</tr>





<?php
endwhile;
?>

</table>

