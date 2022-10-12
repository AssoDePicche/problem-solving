<?php

function divisibleSumPairs(int $n, int $k, array $array): int
{
    $pairs = 0;

    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($i < $j && ($array[$i] + $array[$j]) % $k === 0) {
                $pairs++;
            }
        }
    }

    return $pairs;
}
