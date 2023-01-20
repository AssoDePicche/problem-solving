<?php

function circularArrayRotation(array $array, int $rotations, array $queries): array
{
    $search = $aux = [];

    $length = count($array);

    for ($index = 0; $index < $length; $index++) {
        $aux[($index + $rotations) % $length] = $array[$index];
    }

    foreach ($queries as $query) {
        $search[] = $aux[$query];
    }

    return $search;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$k = intval($first_multiple_input[1]);

$q = intval($first_multiple_input[2]);

$temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$queries = [];

for ($i = 0; $i < $q; $i++) {
    $item = intval(trim(fgets(STDIN)));
    $queries[] = $item;
}

$result = circularArrayRotation($a, $k, $queries);

fwrite($fptr, implode(PHP_EOL, $result) . PHP_EOL);

fclose($fptr);
