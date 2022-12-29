<?php

function minimumDistances(array $array): int
{
    $distance = -1;

    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($array[$i] !== $array[$j]) {
                continue;
            }

            if ($i - $j < $distance || $distance === -1) {
                $distance = abs($i - $j);
            }
        }
    }

    return $distance;
}
