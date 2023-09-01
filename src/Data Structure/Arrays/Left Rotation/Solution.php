<?php

define('INITIAL_INDEX', 0);

function rotateLeft(int $rotations, array $array): array
{
    $arrayLength = count($array);

    if ($arrayLength === 0 || $rotations === 0) {
        return $array;
    }

    $rotations %= $arrayLength;

    return array_merge(
        array_slice($array, $rotations),
        array_slice($array, INITIAL_INDEX, $rotations)
    );
}
