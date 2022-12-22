<?php

function aVeryBigSum(array $array): int
{
    $sum = 0;

    foreach ($array as $number) {
        $sum += $number;
    }

    return $sum;
}
