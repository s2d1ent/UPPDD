<?php
setcookie("text",$_POST["message"],time () + 600, "/");
setcookie("subject",$_POST["subject"],time () + 600, "/");


if (isset($_POST["submit"])){
	$from=htmlspecialchars($_POST["from"]);
	$email_admin="vornfrost@gmail.com";
	$subject=htmlspecialchars($_POST["subject"]);
	$message=htmlspecialchars($_POST["message"]);



	if ($from=="" || !preg_match("/(\@mail\.ru) || (\@gmail\.com) || (\@yandex\.ru)/i",$from)){
		$error_from= "Введите корректный email";
		exit();
	}
	if (strlen($subject)==0){
		$error_subject= "Введите тему сообщения";
		exit();
	}
	if (strlen($message)==0){
		$error_message= "Введите корректный email";
		exit();
	}
	if (!$error){
		/*$subject="=?utf-8?B?".base64_encode($subject)."?=";*/
		$headers="From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
		$mail=mail($email_admin,$subject,$message,$headers);

		
	}

}
	if ($mail) {
		setcookie("ready",0,time () + 60, "/");
		Header ("Location:../profile/callback_after.php");


	} else {
		setcookie("ready",1,time () + 60, "/");
		Header ("Location:../profile/callback_after.php");
	}

?>