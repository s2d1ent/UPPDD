<?php
$user_id=filter_var(trim($_POST["user_id"]),FILTER_SANITIZE_STRING);
$what=filter_var(trim($_POST["what"]),FILTER_SANITIZE_STRING);
$towhat=filter_var(trim($_POST["towhat"]),FILTER_SANITIZE_STRING);
$send=$_POST["send"];

/*print_r($_POST);*/
$test_user_id=is_numeric($user_id);
$test_what=is_numeric($test_what);


$whatend="";
$error_what="Введите корректное значение изменяемой переменной в БД"."<br/>"."Подсказка, в строку 'Что изменить можно вбивать''можно вбивать ТОЛЬКО: пароль, фио, снилс, страховка, номератс, email или почта,птс";
$error_name="<br/>"."<br/>"."Правило ввода значения которой заменяем";
$error_rules="<br/>"."<br/>"."ФИО: от 3 до 100 символов"."<br/>"."Пароль: от 3 до 30 символов"."<br/>"."Страховка: до 32 цифр"."<br/>"."СНИЛС: 11 цифр "."<br/>"."Номера ТС: от 6 до 20 символов"."<br/>"."Почта/Email: @mail.ru, @yandex.ru, @gmail.com"."<br/>"."ПТС: до 30 символов"."<br/>"."Паспорт: вводить вручную через БД";




	
	if(isset($send)) {
		$arr=[
			"фио"=>"name",
			"пароль"=>"pass",
			"страховка"=>"save",
			"снилс"=>"snils",
			"номератс"=>"numberts",
			"email"=>"email",
			"почта"=>"email",
			"птс"=>"pts",

		];
		$rules_gv=[
			"name"=>'/^[\s\S]{3,60}$/i',
			"pass"=>'/^[\S]{3,30}$/i',
			"save"=>'/^[\S]{3,30}$/i',
			"snils"=>'/^[\d]{11}$/i',
			"numberts"=>'/^[\d]{6}$/i',
			"email"=>'/(\@mail\.ru)|(\@gmail\.com) | (\@yandex\.ru)/i',
			"pts"=>'/[\d]{3,30}/i',
		];


		if($user_id=="" || $test_user_id==false){
			echo "Введите корректный Unique ID пользователя.";
			exit();
		} else if ($what=="" || $test_what==true) {
			echo "$error_what";
			
			exit();
		} else {
			$whatend=$arr[$what]!=null?$arr[$what]:"";
		}
		

		$is_Paste=$towhat=="";
		if ($is_Paste){
			echo 'paste';
				
			}
		if (!preg_match($rules_gv[$whatend], $towhat)){
					echo $error_what.$error_name.$error_rules;
				}


	}


	include "../php/connect.php";// переменные для коннекта

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);

	$query= "UPDATE `users` SET `$whatend`='$towhat' WHERE `id`='$user_id' ";
	$result=mysqli_query($connection,$query);


/*	echo "<br/>"."Результат выполнения $query ";
	echo "<br/>"."Результат передачи файлов: ";
	print_r($result);
*/
	mysqli_close($connection);

?>