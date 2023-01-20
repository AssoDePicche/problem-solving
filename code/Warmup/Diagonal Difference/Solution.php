<?php

function diagonalDifference(array $matrix): int
{
    $length = count($matrix);

    $left = $right = 0;

    for ($i = 0; $i < $length; $i++) {
        $j = $length - $i - 1;

        $left += $matrix[$i][$i];

        $right += $matrix[$i][$j];
    }

    return abs($left - $right);
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$array = array();

for ($i = 0; $i < $n; $i++) {
    $temp = rtrim(fgets(STDIN));

    $array[] = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($array);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
