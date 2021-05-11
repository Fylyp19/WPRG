<?php
$mysqli = mysqli_connect("localhost", "root", "", "test") or
    die("Nie działa, ponieważ: " . mysql_error());
$query = "SELECT id, imię FROM użytkownik";
$result = mysqli_query($mysqli, $query);
$result2 = mysqli_query($mysqli, $query);
$result3 = mysqli_query($mysqli, $query);

while ($row = mysqli_fetch_row($result)) {
    printf("ID: %s  ", $row[0], $row[1]);
}

echo "</br></br>";

$array = mysqli_fetch_array($result2, MYSQLI_ASSOC);
printf("ID: %s, Imię: %s ", $array["id"], $array["imię"]);

echo "</br></br>";

$rows = mysqli_num_rows($result3);
printf("Ilość wierszy to  to %d \n", $rows);

echo "</br></br>";

$value = "INSERT INTO użytkownik (id, imię, nazwisko, wiek, data_urodzenia) VALUES (3,'Tomasz', 'Wiśniewski', 35, 19850101)";
$blokada = 1;
if ($blokada == 0){
	mysqli_query($mysqli, $value);
	echo "Zostało coś dodane";
} else {
	echo "Nic nie zostało dodane";
};

mysqli_close($mysqli);
?>