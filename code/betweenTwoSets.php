<?php

function getTotalX(array $a, array $b): int
{
    $numbers = range(max($a), min($b));
    $count = 0;

    foreach ($numbers as $number) {
        $match = true;

        foreach ($a as $item) {
            if ($number % $item !== 0) {
                $match = false;
                break;
            }
        }

        foreach ($b as $item) {
            if ($item % $number !== 0) {
                $match = false;
                break;
            }
        }

        $match && $count++;
    }

    return $count;
}
