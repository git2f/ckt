<?php session_start(); ob_start();
include("../../function/redirect.php");
include("../../function/config3.inc.php");
?>
<style>
body{
background-color:#f2f2f2;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../Image/decoration/NN.ico" rel="shortcut icon" type="image/x-icon" />
<title>Authentication</title>
<?php
$salt = "I}19Z7F#Ff460,Hi}R81M|8$aOCbz=A%2$+F&|s~32Rk1qs0]E=RmY2en-+TM";
$passsalt = $_POST["password"].$salt;
$passmd5 = MD5($passsalt);
$sql = "SELECT * FROM `user` WHERE `email_user` LIKE '".$_POST["loginname"]."' AND `pass_user` LIKE '".$passmd5."'"; 
$dbquery = mysqli_query($con, $sql);
$num_row = mysqli_num_rows($dbquery);
$row =  mysqli_fetch_assoc($dbquery);
if($num_row == 1) {
	if($_POST["remember"]) {
		setcookie("loginname",$_POST["loginname"],time()+3600*24*356);
		setcookie("password",$_POST["password"],time()+3600*24*356);
		$_SESSION["name_user"] = $row["name_user"];
		$_SESSION["email_user"] = $row["email_user"];
		redirect("welcome.php");
		echo "<div class='container' style='margin-top:50px;'>";
		echo "<div align='center'>";
		echo "<img src='../../img/decoration/Load.gif' width='100'>";
		echo "<font color='green'>ล็อกอินสำเร็จ!!!</font> กำลังไปหน้าแรก ใน
		<span id='timer' style='color:red;'>5</span> วินาที";
		echo "</div>";
		echo "</div>";
	} else {
		redirect("../index.php");
		$_SESSION["name_user"] = $row["name_user"];
		$_SESSION["email_user"] = $row["email_user"];
		echo "<div class='container' style='margin-top:50px;'>";
		echo "<div align='center'>";
		echo "<img src='../../img/decoration/Load.gif' width='100'>";
		echo "<font color='green'>ล็อกอินสำเร็จ!!!</font> กำลังไปหน้าแรก ใน 
		<span id='timer' style='color:red;'>5</span> วินาที";
		echo "</div>";
		echo "</div>";
	}
} else {
redirect("login.php");
		echo "<div class='container' style='margin-top:50px;'>";
		echo "<div align='center'>";
		echo "<img src='../../img/decoration/Load.gif' width='100'>";
		echo "<font color='red'>อีเมลล์หรือรหัสผ่านผิด!!!</font> กรุณากรอกใหม่ กำลังกลับใน 
		<span id='timer' style='color:red;'>5</span> วินาที";
		echo "</div>";
		echo "</div>";
}
ob_end_flush()
?>
