<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
$a = $_POST['kraj'];
$narodowosc = array(
'Polska' => 'polskiej',
'Niemcy' => 'niemieckiej',
'Francja' => 'francuskiej',
'Hiszpania' => 'hiszpańskiej',
'Dania' => 'duńskiej',
'Portugalia' => 'portugalskiej',
'Austria' => 'austriackiej',
'Szwajcaria' => 'szwajcarskiej',
'Belgia' => 'belgijskiej',
'Holandia' => 'holenderskiej',
'Litwa' => 'litewskiej',
'Łotwa' => 'łotewskiej',
'Białoruś' => 'białoruskiej',
'Ukraina' => 'ukraińskiej',
'Rosja' => 'rosyjskiej',
'Stany Zjednoczone' => 'amerykańskiej',
'Chiny' => 'chińskiej',
'Japonia' => 'japońskiej',
'Kanada' => 'kanadyjskiej',
'Meksyk' => 'meksykańskiej'
);
echo "Jesteś narodowości ", $narodowosc[$a];
?>
</html>