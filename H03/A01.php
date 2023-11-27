<?php

echo CtoF(45);

function CtoF($a)
{
    $b = ($a * 9 / 5) + 32;
    return $b;
}