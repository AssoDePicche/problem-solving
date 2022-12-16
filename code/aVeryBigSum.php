<?php

function aVeryBigSum(array $array): int
{
    $sum = 0;
    $length = count($array);

    for ($index = 0; $index < $length; $index++) {
        $sum += $array[$index];
    }

    return $sum;
}
