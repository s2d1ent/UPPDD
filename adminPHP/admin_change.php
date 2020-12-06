<?php
$user_id=filter_var(trim($_POST["user_id"]),FILTER_SANITIZE_STRING);
$what=filter_var(trim($_POST["what"]),FILTER_SANITIZE_STRING);
$towhat=filter_var(trim($_POST["towhat"]),FILTER_SANITIZE_STRING);
$send=$_POST["send"];
print_r($_POST);
$whatend="";
$error_what="Введите корректное значение изменяемой переменной в БД"."<br/>"."Подсказка, в строку 'Что изменить можно вбивать''можно вбивать ТОЛЬКО: пароль, фио, снилс, страховка, номератс, email или почта,птс";
	
	if(isset($send)) {

		if($user_id=="" || mb_strlen($username)> 11){
			echo "Введите корректный Unique ID пользователя.";
			exit();
		} else if ($what=="" ) {
			echo "Введите корректное значение изменяемой переменной в БД";
			echo "<br/>"."Подсказка, в строку 'Что изменить можно вбивать''можно вбивать ТОЛЬКО: пароль, фио, снилс, страховка, номератс, email или почта,птс";
			exit();
		} else if ($what=="фио"){
			$whatend="name";
		} else if ($what=="пароль"){
			$whatend="pass";
		} else if ($what=="снилс"){
			$whatend="snils";
		} else if ($what=="страховка"){
			$whatend="save";
		} else if ($what=="номератс"){
			$whatend="numberts";
		} else if ($what=="email"){
			$whatend="email";
		} else if ($what=="почта"){
			$whatend="email";
		} else if ($what=="птс"){
			$whatend="pts";
		} else if($what!=="фио" || $what!=="пароль" || $what!=="снилс" || $what!=="страховка" || $what!=="номератс" || $what!=="email" || $what!=="почта" || $what!=="птс"){
			$whatend="";
			echo "$error_what";
			exit();

		}
		if ($whatend=="name" && $towhat=="" || mb_strlen($towhat) < 3 || mb_strlen($towhat)>60){
			echo "<br/>"."whatend = $whatend";
			echo "<br/>"."Введите корректное ФИО.Подсказка: не меньше 3 и не больше 60 символов";

			exit();

		} else if ($whatend=="name" && $towhat!="" ) {

		} else if ($whatend=="pass" && $towhat=="" || mb_strlen($towhat) < 3 || mb_strlen($towhat)>30){
			echo "<br/>"."whatend = $whatend";
			echo "Введите корректный пароль.Подсказка: не меньше 3 и не больше 30 символов";
			exit();
			
		} else if ($whatend=="pass" && $towhat!="" ) {
			 $towhat=base64_encode($towhat);
		} else if ($whatend=="snils" && mb_strlen($towhat) !=11){
			echo "Введите корректный номер СНИЛС.Подсказка: 11 цифр";
			exit();
		} else if ($whatend=="snils" && mb_strlen($towhat) ==11) {

		} else if ($whatend=="save" && $towhat=="" || mb_strlen($towhat) < 3 || mb_strlen($towhat)>30){
			echo "Введите корректный номер страховки.Подсказка: ";
			exit();	
		} else if ($whatend=="save" && $towhat!="") {

		} /*else if ($whatend=="numberts" && $towhat=="" || mb_strlen($towhat) < 6 || mb_strlen($towhat)>20){
			echo "Введите корректный номер транспорта.Подсказка: не меньше 6 и не больше 20 символов";
			exit();	
			
		} else if ($whatend=="numberts" && $towhat!="" ) {

		}*/


		/*	 else if ($whatend=="numberts"){
			
		} else if ($whatend=="email"){
			
		}  else if ($whatend=="pts"){
			
		}*/




	}
echo "<br/>"."whatend = $whatend";

	include "../php/connect.php";// переменные для коннекта

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);

/*	echo "<br/>"."Результат connection:";
	print_r($connection);
	echo "<br/>"."Результат select:";
	print_r($select);
*/

	$query= "UPDATE `users` SET `$whatend`='$towhat' WHERE `id`='$user_id' ";
	$result=mysqli_query($connection,$query);


	echo "<br/>"."Результат выполнения $query ";
	echo "<br/>"."Результат передачи файлов: ";
/*	print_r($result);
*/
	mysqli_close($connection);

?>