<?php

function libraryFine(int $d1, int $m1, int $y1, int $d2, int $m2, int $y2): int
{
    if ($y1 > $y2) {
        return 10000;
    }

    if ($y1 < $y2 || $d1 > $d2 && $m1 < $m2 || $d1 <= $d2 && $m1 <= $m2) {
        return 0;
    }

    if ($m1 === $m2) {
        return 15 * ($d1 - $d2);
    }

    return 500 * ($m1 - $m2);
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$d1 = intval($first_multiple_input[0]);

$m1 = intval($first_multiple_input[1]);

$y1 = intval($first_multiple_input[2]);

$second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$d2 = intval($second_multiple_input[0]);

$m2 = intval($second_multiple_input[1]);

$y2 = intval($second_multiple_input[2]);

$result = libraryFine($d1, $m1, $y1, $d2, $m2, $y2);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
