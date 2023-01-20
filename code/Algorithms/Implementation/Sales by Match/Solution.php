<?php

function sockMerchant(int $n, array $array): int
{
    $pairs = [];

    $result = 0;

    foreach ($array as $item) {
        $pairs[$item]++;
    }

    foreach ($pairs as $pair) {
        $pair % 2 !== 0 && $pair--;

        $result += $pair;
    }

    return $result / 2;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
