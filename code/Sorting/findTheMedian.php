<?php

function findMedian(array $array): int
{
    sort($array);

    $length = count($array);

    $middle = $length / 2;

    if ($length % 2 !== 0) {
        return $array[$middle];
    }

    $n1 = $array[floor($middle)];

    $n2 = $array[ceil($middle)];

    return ($n1 + $n2) / 4;
}
