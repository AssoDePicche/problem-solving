<?php

function equalizeArray(array $array): int
{
    $freq = [];

    $arrayLength = count($array);

    for ($index = 0; $index < $arrayLength; $index++) {
        $freq[$array[$index]]++;
    }

    return $arrayLength - max($freq);
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = equalizeArray($arr);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
