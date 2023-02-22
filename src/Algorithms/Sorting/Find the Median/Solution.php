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

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$result = findMedian($array);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
