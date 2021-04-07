<!DOCTYPE HTML>
<html>
<head>
</head>
<form action="rezerwacja.php" method="POST">
Jaki wiele osób bierze udział w rezerwacji?
<select id="funkcja" type="value" requierd name="funkcja">
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
</body>
</html>