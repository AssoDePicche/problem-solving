<?php

function hurdleRace(int $k, array $height): int
{
    $maxHeight = max($height);

    if ($maxHeight <= $k) {
        return 0;
    }

    return $maxHeight - $k;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$temp = rtrim(fgets(STDIN));

$height = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$result = hurdleRace($k, $height);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
