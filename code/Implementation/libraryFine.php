<?php

function libraryFine(int $d1, int $m1, int $y1, int $d2, int $m2, int $y2): int
{
    if ($y1 > $y2) {
        return 10000;
    }

    if ($y1 < $y2 || $d1 > $d2 && $m1 < $m2 || $d1 <= $d2 && $m1 <= $m2) {
        return 0;
    }

    if ($m1 === $m2) {
        return 15 * ($d1 - $d2);
    }

    return 500 * ($m1 - $m2);
}
