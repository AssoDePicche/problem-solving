<?php

function frequency(array $search, int $n): array
{
    $range = range(0, $n);

    $elementsInRange = count($range);

    $searchLength = count($search);

    $frequency = array_fill(0, $elementsInRange, 0);

    for ($index = 0; $index < $searchLength; $index++) {
        $frequency[$search[$index]]++;
    }

    return $frequency;
}

function pickingNumbers(array $a): int
{
    $frequency = frequency($a, 100);

    $frequencyLength = count($frequency);

    $maxLengthSubarray = 0;

    for ($j = 1; $j < $frequencyLength; $j++) {
        $maxLengthSubarray = max($maxLengthSubarray, $frequency[$j] + $frequency[$j - 1]);
    }

    return $maxLengthSubarray;
}
