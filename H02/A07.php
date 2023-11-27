<?php

$zwem = array(25, 32, 11, 23);

foreach ($zwem as $key => $value) {
    for ($i = $value; $i >= 5; $i -= 5) {
        echo "<img src= 'zwemmers/zwemmer.jpg'>";
    }
    echo "<br>";
}


