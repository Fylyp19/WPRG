<!DOCTYPE HTML>
<html>
<head>
</head>
<title>Data urodzenia wynosi:</title>
<body>
<?php
$data = $_POST['pesel'];
switch ($data[2]) {
    case 0:
        echo $data[4],$data[5],"-",$data[2],$data[3],"-",$data[0],$data[1];
        break;
    case 1:
        echo $data[4],$data[5],"-",$data[2],$data[3],"-",$data[0],$data[1];
        break;
    case 2:
        echo $data[4],$data[5],"-",$data[2]-2,$data[3],"-",$data[0],$data[1];
        break;
    case 3:
        echo $data[4],$data[5],"-",$data[2]-2,$data[3],"-",$data[0],$data[1];
        break;
    case 8:
        echo $data[4],$data[5],"-",$data[2]-8,$data[3],"-",$data[0],$data[1];
        break;
    case 9:
        echo $data[4],$data[5],"-",$data[2]-8,$data[3],"-",$data[0],$data[1];
        break;
}
?>
</html>