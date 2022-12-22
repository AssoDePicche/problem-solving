<?php

function circularArrayRotation(array $array, int $rotations, array $queries): array
{
    $search = [];

    $aux = [];

    $length = count($array);

    for ($index = 0; $index < $length; $index++) {
        $aux[($index + $rotations) % $length] = $array[$index];
    }

    foreach ($queries as $query) {
        $search[] = $aux[$query];
    }

    return $search;
}
