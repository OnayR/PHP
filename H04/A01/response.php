<style>
    body {
        text-align: center;
    }
</style>

<?php

echo "<fieldset>";
if ($_POST['voornaam'] == "") {
    echo "U moet nog een voornaam invoeren";
    echo "<br>";
    echo "<a href='form.html'>Ga terug naar account aanmaken</a>";
} else if ($_POST['achternaam'] == "") {
    echo "U moet nog een voornaam invoeren";
    echo "<br>";
    echo "<a href='form.html'>Ga terug naar account aanmaken</a>";
} else if ($_POST['email'] == "") {
    echo "U moet nog een email invoeren";
    echo "<br>";
    echo "<a href='form.html'>Ga terug naar account aanmaken</a>";
} else if ($_POST['adres'] == "") {
    echo "U moet nog een adres invoeren";
    echo "<br>";
    echo "<a href='form.html'>Ga terug naar account aanmaken</a>";
} else if ($_POST['wachtwoord'] == "") {
    echo "U moet nog een wachtwoord invoeren";
    echo "<br>";
    echo "<a href='form.html'>Ga terug naar account aanmaken</a>";
} else {
    echo "Naam: " . $_POST['voornaam'] . " " . $_POST['achternaam'] . "<br>";
    echo "E-mail: " . $_POST['email'] . "<br>";
    echo "Adres: " . $_POST['adres'] . "<br>";
}
echo "</fieldset>";
?>