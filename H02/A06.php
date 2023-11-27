<?php

$leeftijd = 2;

$kosten = 10.00;

if ($leeftijd < 3) {
    echo "U moet €0.00 betalen.";
} else if ($leeftijd <= 12) {
    echo "U moet €" . $kosten / 2 . " betalen.";
} else if ($leeftijd >= 65) {
    echo "U moet €" . $kosten / 2 . " betalen.";
} else {
    echo "U moet €" . $kosten . " betalen.";
}