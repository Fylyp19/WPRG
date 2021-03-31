<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$a = $_POST['a'];
$tab[] = 0;
for($i=0;$i<$a;$i++)
{
	$tab[$i] = rand(1,6);
	echo $tab[$i]." ";
}
?>
</body>
</html?