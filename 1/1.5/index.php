<!DOCTYPE HTML>
<html>
<head>
</head>
<form action="kalkulator.php" method="POST">
Jaką figurę chcesz obliczyć?
<select id="pole" name="pole">
  <option value="trójkąt">Trójkąt</option>
  <option value="prostokąt">Prostokąt</option>
  <option value="trapez">Trapez</option>
</select>
<br/><br/>
Podaj a:
<input type="value" name="a" />
<br/><br/>
Podaj b(jeśli trzeba):
<input type="value" name="b" />
<br/><br/>
Podaj h(jeśli trzeba):
<input type="value" name="h" />
<br/><br/>
<input type="submit" value="Wyślij"/>
</form>
<body>
</body>
</html>