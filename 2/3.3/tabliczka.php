<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$a = $_POST['a'];
for($i=1;$i<=$a;$i++)
{
	for($j=1;$j<=$a;$j++)
	{
		echo $i*$j." ";
	}
	echo "<br />";
}
?>
</body>
</html?