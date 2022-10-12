<?php

function findMedian(array $array): int
{
    sort($array);
    $length = count($array);
    $middle = $length / 2;

    if ($length % 2 !== 0) {
        return $array[$middle];
    }

    $n1 = floor($middle);
    $n2 = ceil($middle);

    return ($array[$n1] / 2 + $array[$n2] / 2) / 2;
}

echo findMedian([0,1,2,4,6,5,3]);
