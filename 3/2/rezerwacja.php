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
echo 'Imię: ',$a;
echo '<br />Nazwisko: ',$b;
echo '<br />Adres: ',$c;
echo '<br />Numer Karty: ',$d;
echo '<br />Email: ',$e;
echo '<br />Czas pobytu(w dniach): ',$f;
echo '<br />Godzina przybycia: ',$g;
if ($h == "tak") {          
    echo '<br />Łóżko dla dziecka: Tak';      
}
else {
    echo '<br />Łóżko dla dziecka: Nie';
}
echo '<br />Oczekiwane rzecz: ';
echo implode(',', $_POST['rzeczy'])
?>
</html>