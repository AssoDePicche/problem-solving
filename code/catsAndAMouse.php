<?php

function catAndMouse(int $catA, int $catB, int $mouse): string
{
    $d1 = abs($mouse - $catA);
    $d2 = abs($mouse - $catB);

    if ($d1 < $d2) {
        return "Cat A";
    }

    if ($d1 > $d2) {
        return "Cat B";
    }

    return "Mouse C";
}
