<?php
$host = 'localhost';
$port = '3306';
$user = 'schoolphpuser';
$pass = '';
$db = 'phpschool';

$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';port=' . $port, $user, $pass);

foreach ($dbh->query("SELECT * FROM cursist") as $row) {
    print_r($row);
    echo "<br>";
}

// use sql to calculate 1+1 and print the result to the screen

$stmt = $dbh->exec("SELECT 5+5");



echo "<br>";
echo "Connected successfully";
print_r($stmt);

?>