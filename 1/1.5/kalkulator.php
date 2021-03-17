<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$pole=$_POST['pole'];
$a=$_POST['a'];
$b=$_POST['b'];
$h=$_POST['h'];
switch ($pole) {
    case "trójkąt":
		echo ($a*$h)/2;
		break;
    case "prostokąt":
        echo $a*$b;
        break;
    case "trapez":
        echo (($a+$b)*$h)/2;
        break;
}
?>
</html>