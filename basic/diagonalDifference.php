<?php

function diagonalDifference(array $matrix): int
{
    $length = count($matrix);
    $left = 0;
    $right = 0;

    for ($i = 0; $i < $length; $i++) {
        $j = $length - $i - 1;
        $left += $matrix[$i][$i];
        $right += $matrix[$i][$j];
    }

    return abs($left - $right);
}
