<?php

function getTotalX(array $a, array $b)
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

        $count += ($match) ? 1 : 0;
    }

    return $count;
}
