<?php

function reverse(int $x): int
{
    $x = (string) $x;
    $reverse = "";

    for ($index = strlen($x) - 1; $index >= 0; $index--) {
        $reverse .= $x[$index];
    }

    return (int) $reverse;
}

function absDiff(int $x, int $y): int
{
    return abs($x - $y);
}

function beautifulDays(int $i, int $j, int $k): int
{
    $count = 0;

    for ($i; $i <= $j; $i++) {
        if (absDiff($i, reverse($i)) % $k === 0) {
            $count++;
        }
    }

    return $count;
}
