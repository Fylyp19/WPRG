<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$telefon = $_POST['telefon'];
$email = $_POST['email'];
$wpis = $imie." ".$nazwisko." ".$telefon." ".$email;
if(file_put_contents('dane.txt', $wpis, FILE_APPEND) === false){
	echo "Nie zapisało";
} else {
	echo "Zapisało";
}
?>
</html>