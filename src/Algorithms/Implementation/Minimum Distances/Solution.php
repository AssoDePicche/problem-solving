<?php

function minimumDistances(array $array): int
{
    $distance = -1;

    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($array[$i] !== $array[$j]) {
                continue;
            }

            if ($i - $j < $distance || $distance === -1) {
                $distance = abs($i - $j);
            }
        }
    }

    return $distance;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = minimumDistances($a);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
