<?php

function reverse(int $x): int
{
    $x = strval($x);

    $reverse = '';

    for ($index = strlen($x) - 1; $index >= 0; $index--) {
        $reverse .= $x[$index];
    }

    return intval($reverse);
}

function beautifulDays(int $i, int $j, int $k): int
{
    $count = 0;

    for ($i; $i <= $j; $i++) {
        (abs($i - reverse($i)) % $k === 0) && $count++;
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
