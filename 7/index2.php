<?php
session_start();
echo 'Imię: ',$_SESSION['a'];
echo '<br />Nazwisko: ',$_SESSION['b'];
echo '<br />Adres: ',$_SESSION['c'];
echo '<br />Numer Karty: ',$_SESSION['d'];
echo '<br />Email: ',$_SESSION['e'];
echo '<br />Czas pobytu(w dniach): ',$_SESSION['f'];
echo '<br />Godzina przybycia: ',$_SESSION['g'];
echo '<br />Ilość osób: ',$_SESSION['z'];
if ($_SESSION['h'] == "tak") {          
    echo '<br />Łóżko dla dziecka: Tak';      
}
else {
    echo '<br />Łóżko dla dziecka: Nie';
}
echo '<br />Oczekiwane rzeczy: ';
echo implode(',', $_SESSION['i']);
if($_SESSION['z'] == 2){
	echo '<br/ >Dane pozostałych osób:';
	echo '<br/ >',$_SESSION['k'],' ',$_SESSION['l'];
}else if($_SESSION['z'] == 3){
	echo '<br/ >Dane pozostałych osób:';
	echo '<br/ >',$_SESSION['k'],' ',$_SESSION['l'];
	echo '<br/ >',$_SESSION['m']," ",$_SESSION['n'];	
}else if($_SESSION['z'] == 4){
	echo '<br/ >Dane pozostałych osób:';
	echo '<br/ >',$_SESSION['k'],' ',$_SESSION['l'];
	echo '<br/ >',$_SESSION['m']," ",$_SESSION['n'];	
	echo '<br/ >',$_SESSION['o']," ",$_SESSION['p'];
}
?>
<br/><br/>
<a href="index1.php"><input type="button" name="button" value="Cofnij"/></a>