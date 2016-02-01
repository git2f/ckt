<?php session_start();
include("../../BackEnd/function/redirect.php");
include("../../BackEnd/config/config3.inc.php");
?>
<style>
body{
background-color:#f2f2f2;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Image/decoration/NN.ico" rel="shortcut icon" type="image/x-icon" />
<title>Authentication</title>
<?
define('SITE_KEY', '6Ldp0gYTAAAAAN_SFrz0zLsqrMVCKvEXL6DJiYiS');
define('SECRET_KEY', '6Ldp0gYTAAAAAGFeFlPlRLAX9gL0OpCeUiuwLR0X');

// Accept only POST method
if ( ! strcmp($_SERVER['REQUEST_METHOD'], 'POST'))
{
$params = array(
'secret' => SECRET_KEY,
'response' => $_POST['g-recaptcha-response'],
'remoteip' => $_SERVER['REMOTE_ADDR']
);

$url = 'https://www.google.com/recaptcha/api/siteverify?' . http_build_query($params);
$result = file_get_contents($url);

// Convert JSON string to standard PHP object
$resultObject = json_decode($result);

if ($resultObject->success){
	$sql_chk = "SELECT * FROM `user` WHERE `email_user` LIKE '".$_POST["email"]."'";
	$result_chk = mysqli_query($con,$sql_chk);
	$num_chk = mysqli_num_rows($result_chk);
	if($num_chk>0){
		redirect("register.php");
		echo "<div class='container' style='margin-top:50px;'>";
		echo "<div align='center'>";
		echo "<img src='../../img/decoration/Load.gif' width='100'>";
		echo "<font color='green'>อีเมลล์ซ้ำ!!!</font> กรุณากรอกใหม่ กำลังกลับใน <span id='timer' style='color:red;'>5</span> วินาที";
		echo "</div>";
		echo "</div>";
	}else{
		$salt = "I}19Z7F#Ff460,Hi}R81M|8$aOCbz=A%2$+F&|s~32Rk1qs0]E=RmY2en-+TM";
		$passsalt = $_POST["password"].$salt;
		$passmd5 = MD5($passsalt);
		$sql_user = "INSERT INTO `user` (`pk_user`, `name_user`, `lname_user`, `address_user`, `email_user`, 
		`pass_user`, `tel_user`, `line_user`, `type_user`) VALUES (NULL, '".$_POST["name"]."', '".$_POST["lname"]."',
		 '".$_POST["address"]."', '".$_POST["email"]."', '".$passmd5."', '".$_POST["tel"]."', '".$_POST["line"]."', '1');";
		$result_user = mysqli_query($con,$sql_user);
		if($result_user){
			redirect("login.php");
			echo "<div class='container' style='margin-top:50px;'>";
			echo "<div align='center'>";
			echo "<img src='../../img/decoration/Load.gif' width='100'>";
			echo "<font color='green'>สมัครสมาชิกเรียบร้อยแล้ว!!!</font> กำลังไปหน้า login ใน
			<span id='timer' style='color:red;'>5</span> วินาที";
			echo "</div>";
			echo "</div>";
		}else{
			redirect("register.php");
			echo "<div class='container' style='margin-top:50px;'>";
			echo "<div align='center'>";
			echo "<img src='../../img/decoration/Load.gif' width='100'>";
			echo "<font color='red'>สมัครสมาชิกไม่สำเร็จ</font> กรุณากรอกใหม่ กำลังกลับใน 
			<span id='timer' style='color:red;'>5</span> วินาที";
			echo "</div>";
			echo "</div>";
		}
	}

}else{
	redirect("register.php");
	echo "<div class='container' style='margin-top:50px;'>";
	echo "<div align='center'>";
	echo "<img src='../../img/decoration/Load.gif' width='100'>";
	echo "<font color='red'>คุณคือ ROBOT กรุณากรอก Captcha</font> กรุณากรอกใหม่ กำลังกลับใน 
	<span id='timer' style='color:red;'>5</span> วินาที";
	echo "</div>";
	echo "</div>";
}
}
