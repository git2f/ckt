<?php
if($_POST["data1"]=="alpha"){
	$_POST['alpha'] = "on";
}else{
	$_POST['alpha'] = "";
}

if($_POST["data2"]=="alpha_upper"){
	$_POST['alpha_upper'] = "on";
}else{
	$_POST['alpha_upper'] = "";
}
if($_POST["data3"]=="special"){
	$_POST['special'] = "on";
}else{
	$_POST['special'] = "";
}
if($_POST["data4"]=="numeric"){
	$_POST['numeric'] = "on";
}else{
	$_POST['numeric'] = "";
}
$_POST['pwlength'] = $_POST['data5'];
?>
<?php
$alpha = "abcdefghijklmnopqrstuvwxyz";
$alpha_upper = strtoupper($alpha);
$numeric = "0123456789";
$special = ".-+=_,!@$#*%<>[]{}";
$chars = "";
 
if (isset($_POST['pwlength'])){
    // if you want a form like above
    if (isset($_POST['alpha']) && $_POST['alpha'] == 'on')
        $chars .= $alpha;
     
    if (isset($_POST['alpha_upper']) && $_POST['alpha_upper'] == 'on')
        $chars .= $alpha_upper;
     
    if (isset($_POST['numeric']) && $_POST['numeric'] == 'on')
        $chars .= $numeric;
     
    if (isset($_POST['special']) && $_POST['special'] == 'on')
        $chars .= $special;
     
    $length = $_POST['pwlength'];
}else{
    // default [a-zA-Z0-9]{9}
    $chars = $alpha . $alpha_upper . $numeric;
    $length = 9;
}
 
$len = strlen($chars);
$pw = '';
 
for ($i=0;$i<$length;$i++)
        $pw .= substr($chars, rand(0, $len-1), 1);
 
// the finished password
		echo $pw = str_shuffle($pw);
?>
