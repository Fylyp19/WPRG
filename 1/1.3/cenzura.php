<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$zdanie = $_POST['tekst'];
$zakazane = array("ma", "kota");
$cenzura = array("**", "***");
echo str_replace($zakazane, $cenzura, $zdanie);
?>
</body>
</html>