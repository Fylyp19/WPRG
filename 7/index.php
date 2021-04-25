<?php 
	session_start(); 
?>

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
Zaznacz, jeśli nic powyżej nie jest potrzebne<input type="checkbox" name="rzeczy[]" value="Nic" />
<br/><br/>
<input type="submit" value="Wyślij"/>
</form>

<?php
if(isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['adres']) && isset($_POST['nrkarty']) && isset($_POST['email']) && isset($_POST['dni']) && isset($_POST['godzina']) && isset($_POST['lozko']) && isset($_POST['rzeczy'])){
	echo("Podałeś wszystkie wymagane dane!<br>");
	$_SESSION['a'] = $_POST['imie'];
	$_SESSION['b'] = $_POST['nazwisko'];
	$_SESSION['c'] = $_POST['adres'];
	$_SESSION['d'] = $_POST['nrkarty'];
	$_SESSION['e'] = $_POST['email'];
	$_SESSION['f'] = $_POST['dni'];
	$_SESSION['g'] = $_POST['godzina'];
	$_SESSION['h'] = $_POST['lozko'];
	$_SESSION['i'] = $_POST['rzeczy'];
	$_SESSION['j'] = $_POST['ilosc'];
}
else {
	echo("NIE PODAŁEŚ WSZYSTKICH WYMAGANYCH DANYCH<br>");
}
?>

<a href="index1.php"><input type="button" name="button" value="Przejdź do kolejnej części wypełniania formularzu"/></a>