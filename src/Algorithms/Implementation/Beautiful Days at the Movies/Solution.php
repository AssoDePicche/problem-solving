<?php

function reverse(int $integer): int
{
    return (int) strrev($integer);
}

function isABeautifulNumber(int $i, int $k): bool
{
    return abs($i - reverse($i)) % $k === 0;
}

function beautifulDays(int $i, int $j, int $k): int
{
    $count = 0;

    for ($i; $i <= $j; $i++) {
        isABeautifulNumber($i, $k) && $count++;
    }

    return $count;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$i = intval($first_multiple_input[0]);

$j = intval($first_multiple_input[1]);

$k = intval($first_multiple_input[2]);

$result = beautifulDays($i, $j, $k);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
