<?php

function birthday(array $s, int $d, $m): int
{
    $sum = $ways = 0;

    $length = count($s);

    for ($i = 0; $i <= $length - $m; $i++) {
        for ($j = 0; $j < $m; $j++) {
            $sum += $s[$i + $j];
        }

        $sum === $d && $ways++;

        $sum = 0;
    }

    return $ways;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$d = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
