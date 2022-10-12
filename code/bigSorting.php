<?php

function bigSorting(array $array): array
{
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        $minIndex = $i;

        for ($j = 0; $j < $length; $j++) {
            if ($array[$j] > $array[$minIndex]) {
                $aux = $array[$j];
                $array[$j] = $array[$minIndex];
                $array[$minIndex] = $aux;
            }
        }
    }

    return $array;
}
