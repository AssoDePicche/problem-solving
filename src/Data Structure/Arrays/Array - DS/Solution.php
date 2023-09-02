<?php

function reverseArray(array $array): array
{
    $left = 0;

    $right = count($array) - 1;

    while ($left < $right) {
        $temp = $array[$left];

        $array[$left] = $array[$right];

        $array[$right] = $temp;

        ++$left;

        --$right;
    }

    return $array;
}
