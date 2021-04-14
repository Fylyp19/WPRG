<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$a = $_POST['imie'];
$b = $_POST['nazwisko'];
$c = $_POST['adres'];
$d = $_POST['nrkarty'];
$e = $_POST['email'];
$f = $_POST['dni'];
$g = $_POST['godzina'];
$h = $_POST['lozko'];
$i = $_POST['osoby'];
$z = $_POST['submit'];
if ($h == "tak") {          
    $k = "tak";      
}
else {
    $k = "nie"; 
}
$l = implode(',', $_POST['rzeczy']);
$headers = array("Imie", "Naziwsko", "Adres", "Nr.Karty", "E-mail", "Dni pobytu", "Godzina Przybycia", "Kołyska", "Bonusy", "Ilość osób");
$data = array(
	array(
	"imie" => $a,
	"nazwisko" => $b,
	"adres" => $c,
	"nrkarty" => $d,
	"email" => $e,
	"dni" => $f,
	"czas" => $g,
	"lozko" => $i,
	"bonusy" => $l,
	"osoby" => $k,
	),
);
if ($z == 'wyslij pierwszy form'){
$fh = fopen('dane.csv', 'a+');
fputcsv($fh, $headers);
foreach($data as $fields){
	fputcsv($fh, $fields);
}
fclose($fh);
} else if ($z == 'wyslij kolejny form'){
	$fh = fopen('dane.csv', 'a+', FILE_APPEND);
	foreach($data as $fields){
	fputcsv($fh, $fields);
}
fclose($fh);
} else if ($z == 'wczytaj'){
	$file = 'dane.csv';
	readfile($file);
}
?>
<a href="index.php">Wróć do Formularza</a>
</body>
</html>