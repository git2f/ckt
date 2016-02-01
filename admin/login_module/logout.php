<meta charset="utf-8">
<style>
body{
background-color:#f2f2f2;
}
</style>
<?php session_start();
include("../../function/redirect.php");
session_destroy();
setcookie("loginname","",time());
setcookie("password","",time());
redirect("login.php");
echo "<div class='container' style='margin-top:50px;'>";
echo "<div align='center'>";
echo "<img src='../../img/decoration/Load.gif' width='100'>";
echo "<font color='green'>ออกจากระบบเรียบร้อยแล้ว!!!</font> กำลังไปหน้า login ใน
<span id='timer' style='color:red;'>5</span> วินาที";
echo "</div>";
echo "</div>";
?>