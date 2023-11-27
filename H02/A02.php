<?php

$bomen = array("img_0050", "lillypilly1", "Maranchery", "weeping-elm", "weeping-elm0091");

for ($i = 0; $i < sizeof($bomen); $i++) {
    echo "<img src= 'bomen/" . $bomen[$i] . ".jpg'>";
}