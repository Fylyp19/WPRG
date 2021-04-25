<?php 
session_start();

if(isset($_SESSION['j']) && $_SESSION['j'] == 1){
	$_SESSION['z'] = 1;
	echo("Możesz już przejść do podsumowania<br><br>");
} else if (isset($_SESSION['j']) && $_SESSION['j'] == 2){
	$_SESSION['z'] = 2;
	echo 'Proszę podać kolejne dane';
	echo '<form action="index1.php" method="POST">';
	echo '<br/><br/>';
	echo 'Imię:';
	echo '<input type="text" required name="imie2" />';
	echo '<br/><br/>';
	echo 'Nazwisko:';
	echo '<input type="text" required name="nazwisko2" />';
	echo '<br/><br/>';
	echo '<input type="submit" name="x" value="Zapisz" />';
	echo '<br/><br/>';
	echo '</form>';
} else if (isset($_SESSION['j']) && $_SESSION['j'] == 3){
	$_SESSION['z'] = 3;	
	echo 'Proszę podać kolejne dane';
	echo '<form action="index1.php" method="POST">';
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
	echo '<input type="submit" name="x" value="Zapisz" />';
	echo '<br/><br/>';
	echo '</form>';
} else if (isset($_SESSION['j']) && $_SESSION['j'] == 4){
	$_SESSION['z'] = 4;	
	echo 'Proszę podać kolejne dane';
	echo '<form action="index1.php" method="POST">';
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
	echo '<input type="submit" name="x" value="Zapisz" />';
	echo '<br/><br/>';
	echo '</form>';
}

if(isset($_POST['x'])){
	switch($_SESSION['z']){
			case 2:
				echo 'Podałeś wszystkie wymagane dane<br>';
				$_SESSION['k'] = $_POST['imie2'];
				$_SESSION['l'] = $_POST['nazwisko2'];
				break;
			case 3:
				echo 'Podałeś wszystkie wymagane dane<br>';
				$_SESSION['k'] = $_POST['imie2'];
				$_SESSION['l'] = $_POST['nazwisko2'];
				$_SESSION['m'] = $_POST['imie3'];
				$_SESSION['n'] = $_POST['nazwisko3'];
				break;
			case 4:
				echo 'Podałeś wszystkie wymagane dane<br>';
				$_SESSION['k'] = $_POST['imie2'];
				$_SESSION['l'] = $_POST['nazwisko2'];
				$_SESSION['m'] = $_POST['imie3'];
				$_SESSION['n'] = $_POST['nazwisko3'];
				$_SESSION['o'] = $_POST['imie4'];
				$_SESSION['p'] = $_POST['nazwisko4'];
	}
}
?>
<a href="index.php"><input type="button" name="button" value="Cofnij"/></a>
<a href="index2.php"><input type="button" name="button" value="Podsumowanie danych"/></a>