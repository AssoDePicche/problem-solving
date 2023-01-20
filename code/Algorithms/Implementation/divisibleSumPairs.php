<?php

function divisibleSumPairs(int $n, int $k, array $a): int
{
    $pairs = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $i < $j && ($a[$i] + $a[$j]) % $k === 0 && $pairs++;
        }
    }

    return $pairs;
}
