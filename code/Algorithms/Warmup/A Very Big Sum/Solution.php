<?php

function aVeryBigSum(array $array): int
{
    return array_reduce($array, fn ($total, $current) => $total + $current);
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$count = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($array);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
