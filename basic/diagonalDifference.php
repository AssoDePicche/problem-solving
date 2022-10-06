<?php

function diagonalDifference(array $array): int
{
    $primaryDiagonal = 0;
    $secondaryDiagonal = 0;
    $difference = 0;
    $j = count($array) - 1;
    for ($i = 0; $i < count($array); $i++) {
        $primaryDiagonal += $array[$i][$i];
        $secondaryDiagonal += $array[$i][$j];
        $j--;
    }

    $difference = $primaryDiagonal - $secondaryDiagonal;

    return abs($difference);
}
