<?php

function simpleArraySum(array $array): int
{
    $sum = 0;

    for ($i = 0; $i < count($array); $i++) {
        $sum += $array[$i];
    }

    return $sum;
}