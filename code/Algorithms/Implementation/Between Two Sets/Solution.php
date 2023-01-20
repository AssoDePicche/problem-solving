<?php

function getTotalX(array $a, array $b): int
{
    $numbers = range(max($a), min($b));

    $count = 0;

    foreach ($numbers as $number) {
        $match = true;

        foreach ($a as $item) {
            if ($number % $item !== 0) {
                $match = false;
                break;
            }
        }

        foreach ($b as $item) {
            if ($item % $number !== 0) {
                $match = false;
                break;
            }
        }

        $match && $count++;
    }

    return $count;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$a_temp = rtrim(fgets(STDIN));

$a_array = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b_array = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($a_array, $b_array);

fwrite($fptr, $total . PHP_EOL);

fclose($fptr);
