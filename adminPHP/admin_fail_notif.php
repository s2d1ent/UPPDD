<?php
$user_id=$_POST["user_id"];




include "../php/connect.php";

$connection=mysqli_connect($host,$username,$bdpassword);
$select=mysqli_select_db($connection,$dbname);

$result = mysqli_query($connection,"SELECT * FROM `users` WHERE  `id`='$user_id' ");
$user=mysqli_fetch_assoc($result);
if(count($user)==0){
	echo "Пользователь не был найден";
	exit();
}

$email_user=$user["email"];
$name_user=$user["name"];

	mysqli_close($connection);





if (isset($_POST["send"])){
	$from="vornfrost@gmail.com";

	$subject="Уведомление об новом/неоплаченном правонарушении.";
	$message="$name_user ,у вас есть новое/неоплаченое правонарушение. Загляните в свой личный кабинет на платферме <ссылка на сайт>";



	if ($from=="" || !preg_match("/@/",$from)){
		$error_from= "Введите корректный email";
	
	}
	if ($mail_user=="" || !preg_match("/@/",$to)){
		$error_to= "Введите корректный email";
	
	}
	if (strlen($subject)==0){
		$error_subject= "Введите тему сообщения";
	
	}
	if (strlen($message)==0){
		$error_message= "Введите корректный email";
		
	}
	if (!$error){
		$subject="=?utf-8?B?".base64_encode($subject)."?=";
		$headers="From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
		mail($email_user,$subject,$message,$headers);
		header("Location: ../admin_panel.php");
		exit;
	}

}



?>