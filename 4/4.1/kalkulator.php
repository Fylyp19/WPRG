<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
require_once "index.php";
function suma($a, $b){
	return $a+$b;
}
function roznica($a, $b){
	return $a-$b;
}
function iloczyn($a, $b){
	return $a*$b;
}
function iloraz($a, $b){
	return $a/$b;
}
?>
</html>