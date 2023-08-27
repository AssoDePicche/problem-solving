<?php

function divisibleSumPairs(int $arraySize, int $divisor, array $array): int
{
    $divisibleSumPairs = 0;

    for ($i = 0; $i < $arraySize; ++$i) {
        for ($j = $i + 1; $j < $arraySize; ++$j) {
            $divisibleSumPair = ($array[$i] + $array[$j]) % $divisor === 0;

            $divisibleSumPair && ++$divisibleSumPairs;
        }
    }

    return $divisibleSumPairs;
}
