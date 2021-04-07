<!DOCTYPE HTML>
<html>
<head>
</head>
<form action="kalkulator.php" method="POST">
Jaki typ działania?
<select id="funkcja" name="funkcja">
  <option value="dodawanie">Dodawanie</option>
  <option value="odejmowanie">Odejmowanie</option>
  <option value="mnozenie">Mnożenie</option>
  <option value="dzielenie">Dzielenie</option>
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
</body>
</html>