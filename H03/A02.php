<?php

echo delenDrie(3);

function delenDrie($a)
{
    $a /= 3;

    if (floor($a) != $a) {
        return false;
    } else {
        return true;
    }
}