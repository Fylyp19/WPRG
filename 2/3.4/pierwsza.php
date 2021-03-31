<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$a = $_POST['a'];
$b = 0;
for($i=2;$i<$a;$i++)
{
	$b=$b+1;
	if($a%$i == 0)
	{
		echo "Liczba parzysta";
		echo "<br />Liczba wymaganych iteracji wynosi:".$b;	
		exit(0);
	}
echo "Liczba nieparzysta";
echo "<br />Liczba wymaganych iteracji wynosi:".$b;	
exit(0);
}
?>
</body>
</html?