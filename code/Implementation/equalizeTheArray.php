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
