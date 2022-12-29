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
