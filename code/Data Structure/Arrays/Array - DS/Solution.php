<?php

function reverseArray(array $a): array
{
    $left = 0;

    $right = count($a) - 1;

    while ($left < $right) {
        $temp = $a[$right];

        $a[$right] = $a[$left];

        $a[$left] = $temp;

        $left++;

        $right--;
    }

    return $a;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$count = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$result = reverseArray($array);

fwrite($fptr, implode(' ', $result) . PHP_EOL);

fclose($fptr);
