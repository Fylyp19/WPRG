<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$tab = array();
$a = 0;
$b = 0;
$c = 0;
$d = 0;
for($i=0;$i<=10;$i++)
{
	$tab[] = rand(1,100);
}
print_r($tab);

for($i=0;$i<=10;$i++)
{
	if($tab[$i]>$a)
	{
		$a = $tab[$i];
	}
}
echo "<br />".$a;

$j = 0;
while ($j <= 10)
{
	if($tab[$j]>$b)
	{
		$b = $tab[$j];
	}
	$j++;
}
echo "<br />".$b;

$k = 0;
do 
{
	if($tab[$k]>$c)
	{
		$c = $tab[$k];
	}
	$k++;
}while ($k <= 10);
echo "<br />".$c;

foreach($tab as &$value)
{
	if($value>$d)
	{
	$d = $value;
	}
}
echo "<br />".$d;
?>
</body>
</html?