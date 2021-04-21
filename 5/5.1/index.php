<!DOCTYPE HTML>
<html>
<head>
</head>
<form action="index.php" method="POST">
Jaki wiele osób bierze udział w rezerwacji?
<select id="ilosc" type="value" requierd name="ilosc">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<br/><br/>
Imię:
<input type="text" required name="imie" />
<br/><br/>
Nazwisko:
<input type="text" required name="nazwisko" />
<br/><br/>
Adres:
<input type="text" required name="adres" />
<br/><br/>
Nr. Karty Kredytowej:
<input type="text" required name="nrkarty" />
<br/><br/>
E-mail:
<input type="text" required name="email" />
<br/><br/>
Planowany czas pobytu w dniach (proszę podać ilość noclegów):
<input type="value" required name="dni" />
<br/><br/>
Planowana godzina przybycia:
<input type="time" required name="godzina" />
<br/><br/>
Potrzebne będzie łóżko dla dziecka?
<br/><br/>
Tak<input type="radio"  name="lozko" name="Tak" />
<br/><br/>
Nie<input type="radio"  name="lozko" name="Nak" />
<br/><br/>
Zaznacz wybrane rzeczy, jeśli są potrzebne:
<br/><br/>
Klimatyzacja<input type="checkbox" name="rzeczy[]" value="Klimatyzacja" />
<br/><br/>
Popielniczka<input type="checkbox" name="rzeczy[]" value="Popielniczka" />
<br/><br/>
Śniadanie<input type="checkbox" name="rzeczy[]" value="Śniadanie" />
<br/><br/>
<input type="submit" value="Wyślij"/>
</form>
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
$i = $_POST['imie2'];
$j = $_POST['nazwisko2'];
$k = $_POST['imie3'];
$l = $_POST['nazwisko3'];
$m = $_POST['imie4'];
$n = $_POST['nazwisko4'];
$o = $_POST['rzeczy'];
setcookie("Imię", $a, time() + (86400*30));
setcookie("Nazwisko", $b, time() + (86400*30));
setcookie("Adres", $c, time() + (86400*30));
setcookie("Nr Karty", $d, time() + (86400*30));
setcookie("Email", $e, time() + (86400*30));
setcookie("Dni", $f, time() + (86400*30));
setcookie("Godzina", $g, time() + (86400*30));
setcookie("Łóżko", $h, time() + (86400*30));
setcookie("Rzeczy", $o, time() + (86400*30));
setcookie("Imię2", $i, time() + (86400*30));
setcookie("Nazwisko2", $j, time() + (86400*30));
setcookie("Imię3", $k, time() + (86400*30));
setcookie("Nazwisko3", $l, time() + (86400*30));
setcookie("Imię4", $m, time() + (86400*30));
setcookie("Nazwisko4", $n, time() + (86400*30));
$cookie_name = "Ilosc";
$cookie_value = $_POST['ilosc'];
setcookie($cookie_name, $cookie_value, time() + (86400*30));
if (isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] == '2'){
	echo '<form action="index.php" method="POST">';
	echo 'Dane osobowe kolejnych osób:';
	echo '<br/><br/>';
	echo 'Imię:';
	echo '<input type="text" required name="imie2" />';
	echo '<br/><br/>';
	echo 'Nazwisko:';
	echo '<input type="text" required name="nazwisko2" />';
	echo '<br/><br/>';
	echo '</form>';
}else if (isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] == '3'){ 
	echo '<form action="index.php" method="POST">';
	echo 'Dane osobowe kolejnych osób:';
	echo '<br/><br/>';
	echo 'Imię:';
	echo '<input type="text" required name="imie2" />';
	echo '<br/><br/>';
	echo 'Nazwisko:';
	echo '<input type="text" required name="nazwisko2" />';
	echo '<br/><br/>';
	echo '<br/><br/>';
	echo 'Imię:';
	echo '<input type="text" required name="imie3" />';
	echo '<br/><br/>';
	echo 'Nazwisko:';
	echo '<input type="text" required name="nazwisko3" />';
	echo '<br/><br/>';
	echo '</form>';
}else if (isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] == '4'){
	echo '<form action="index.php" method="POST">';
	echo 'Dane osobowe kolejnych osób:';
	echo '<br/><br/>';	
	echo 'Imię:';
	echo '<input type="text" required name="imie2" />';
	echo '<br/><br/>';
	echo 'Nazwisko:';
	echo '<input type="text" required name="nazwisko2" />';
	echo '<br/><br/>';
	echo '<br/><br/>';
	echo 'Imię:';
	echo '<input type="text" required name="imie3" />';
	echo '<br/><br/>';
	echo 'Nazwisko:';
	echo '<input type="text" required name="nazwisko3" />';
	echo '<br/><br/>';
	echo '<br/><br/>';
	echo 'Imię:';
	echo '<input type="text" required name="imie4" />';
	echo '<br/><br/>';
	echo 'Nazwisko:';
	echo '<input type="text" required name="nazwisko4" />';
	echo '<br/><br/>';	
	echo '</form>';
}
?>
</body>
</html>