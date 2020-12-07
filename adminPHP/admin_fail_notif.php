<?php
$user_id=$_POST["user_id"]; // Введенное id пользователя




include "../php/connect.php";

$connection=mysqli_connect($host,$username,$bdpassword);
$select=mysqli_select_db($connection,$dbname);

$result = mysqli_query($connection,"SELECT * FROM `users` WHERE  `id`='$user_id' ");
$user=mysqli_fetch_assoc($result);

print_r($user);

if(count($user)==0){
	echo "Пользователь не был найден";
	exit();
}

$email_user=$user["email"]; // email пользователя из БД, id которого было вбито
$name_user=$user["name"];	// имя пользователя из БД по id

	mysqli_close($connection);

$adminmail="ilya_ilyushka@inbox.ru";
$from=htmlspecialchars($_POST["from"]);
$subject_mess="Уведомление о правонарушении";
$notifmessage="$name_user ,у вас есть новое/неоплаченое правонарушение. Загляните в свой личный кабинет на платферме <ссылка на сайт>";


require_once('../phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $name_user;
$emaildb = $email_user;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ilya_ilyushka@inbox.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'tum031230SSS'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('ilya_ilyushka@inbox.ru'); // от кого будет уходить письмо?
$mail->addAddress($emaildb);     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Уведомление о правонарушении";
$mail->Body    = "$name_user ,у вас есть новое/неоплаченое правонарушение. Загляните в свой личный кабинет на платферме <ссылка на сайт>";
$mail->AltBody = '';

if(!$mail->send()) {

    echo "<br/>".'Ошибка отправки сообщения';
} else {

    echo "Сообщение было успешно отправлено";
}









?>