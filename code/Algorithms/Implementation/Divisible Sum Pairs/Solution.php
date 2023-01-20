<?php

function divisibleSumPairs(int $n, int $k, array $a): int
{
    $pairs = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            $i < $j && ($a[$i] + $a[$j]) % $k === 0 && $pairs++;
        }
    }

    return $pairs;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$result = divisibleSumPairs($n, $k, $array);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
