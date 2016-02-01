<?
$host="localhost";
$user="h512026_wedpu";
$pass="Nn499383";
$db="h512026_wedpu";
$connect = mysql_connect($host,$user,$pass);
mysql_query("SET NAMES UTF8",$connect); 
mysql_select_db($db);

if ($connect) {
} 
else{
	echo "connect eror";
}
?>