<?php

function catAndMouse(int $catA, int $catB, int $mouse): string
{
    $d1 = abs($mouse - $catA);

    $d2 = abs($mouse - $catB);

    if ($d1 === $d2) {
        return "Mouse C";
    }

    if ($d1 < $d2) {
        return "Cat A";
    }

    return "Cat B";
}
