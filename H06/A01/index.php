<?php
$host = 'localhost';
$port = '3306';
$user = 'schoolphpuser';
$pass = '';
$db = 'phpschool';

$cursistnr = $_POST['cursistnr'];
$roepnaam = $_POST['name'];
$achternaam = $_POST['lastname'];
$straat = $_POST['straat'];
$postcode = $_POST['postcode'];
$plaats = $_POST['plaats'];
$geslacht = $_POST['geslacht'];
$geb_datum = $_POST['geb_datum'];

try {
$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port, $user, $pass);

$sql = "INSERT INTO cursist (cursistnr, naam, roepnaam, straat, postcode, plaats, geslacht, geb_datum) 
VALUES ($cursistnr, '$achternaam', '$roepnaam', '$straat', '$postcode', '$plaats', '$geslacht', '$geb_datum')";

$dbh->exec($sql);
echo "New record created successfully";
}
catch(PDOException $e) {
echo $e->getMessage();
}


$dbh = null;

?>