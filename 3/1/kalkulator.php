<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$funkcja=$_POST['funkcja'];
$a=$_POST['a'];
$b=$_POST['b'];
switch ($funkcja) {
    case "dodawanie":
		echo $a,"+",$b,"=",$a+$b;
		break;
    case "odejmowanie":
        echo $a,"-",$b,"=",$a-$b;
        break;
    case "mnozenie":
        echo $a,"*",$b,"=",$a*$b;
        break;
	case "dzielenie":
        echo $a,"/",$b,"=",$a/$b;
        break;
}
?>
</html>