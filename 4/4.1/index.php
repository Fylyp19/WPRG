<!DOCTYPE HTML>
<html>
<head>
</head>
<form action="kalkulator.php" method="POST">
Jaki typ działania?
<select id="funkcja" name="funkcja">
  <option value="0">Dodawanie</option>
  <option value="1">Odejmowanie</option>
  <option value="2">Mnożenie</option>
  <option value="3">Dzielenie</option>
</select>
<br/><br/>
Podaj a:
<input type="value" name="a" />
<br/><br/>
Podaj b:
<input type="value" name="b" />
<br/><br/>
<input type="submit" value="Wyślij"/>
</form>
<body>
<?php
$funkcja = $_POST['funkcja'];
switch ($funkcja) {
    case 0:
		echo suma($a, $b);
		break;
    case 1:
        echo roznica($a, $b);
		break;
    case 2:
        echo iloczyn($a, $b);
		break;
	case 3:
        echo iloraz($a, $b);
		break;
}
?>
</body>
</html>