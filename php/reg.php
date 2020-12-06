<?php
$login=filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST["name"]),FILTER_SANITIZE_STRING);
$pass=filter_var(trim($_POST["pass"]),FILTER_SANITIZE_STRING);
$email=filter_var(trim($_POST["email"]),FILTER_SANITIZE_STRING);
$send=$_POST["send"];

	if (isset($send)) {

	 if( mb_strlen($email) >30 || !preg_match("/@/", $email)) {
		echo "Введите корректный email";
		exit();
	}
	else if( mb_strlen($login) < 3 || mb_strlen($login) > 90 ) {	

		echo "Введите корректный логин";
		exit();
	}  else if(mb_strlen($name) < 3 || mb_strlen($name)>60) {
		echo "Введите корректное имя";
		exit();
	} else if(mb_strlen($pass) < 3 || mb_strlen($pass)>30) {
		echo "Введите корректный пароль";
		exit();
	} else {
	$pass=base64_encode($pass);



	include "connect.php";

	$connection=mysqli_connect($host,$username,$bdpassword);
	$select=mysqli_select_db($connection,$dbname);

	$query= "INSERT INTO `users` (`login`,`name`,`pass`,`passport`,`email`,`snils`,`save`, `numberts`,`admin`,`pts`) VALUES ('$login','$name','$pass','0','$email','0','0', '0','0','0')";
	$result=mysqli_query($connection,$query);

	mysqli_close($connection);
	
}

}

/*$fileid="$potom";
$filename="../profile/id$fileid.php";

$new_profile=fopen($filename, "w");

$write="";

$new_write=fwrite($new_profile,$write);

*/

?>
<?php
if ($result): setcookie("regfail","fail",time() + 10,"/");
?>
<script language="javascript">
            document.location.href="../failreg.php";
</script>
<?php
else: setcookie("regfail","ok",time() + 10,"/")
?>
<script language="javascript">
            document.location.href="../failreg.php";
</script>
<?php
endif;
?>