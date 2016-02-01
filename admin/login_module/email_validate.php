<?php
include("../../BackEnd/config/config3.inc.php");
$sql_chk = "SELECT * FROM `user` WHERE `email_user` LIKE '".$_POST["data1"]."'";
	$result_chk = mysqli_query($con,$sql_chk);
	$num_chk = mysqli_num_rows($result_chk);
	if($num_chk>0){
		echo 1;
	}else{
		echo 2;
	}
?>