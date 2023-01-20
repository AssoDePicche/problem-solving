<?php

function rotateLeft(int $rotations, array $array): array
{
    $arrayLength = count($array);

    if ($rotations === $arrayLength) {
        return $array;
    }

    $rotations %= $arrayLength;

    while ($rotations !== 0) {
        $aux = array_shift($array);

        array_push($array, $aux);

        $rotations--;
    }

    return $array;
}


$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$d = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = rotateLeft($d, $arr);

fwrite($fptr, implode(' ', $result) . PHP_EOL);

fclose($fptr);
