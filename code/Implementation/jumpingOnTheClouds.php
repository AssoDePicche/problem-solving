<?php

function jumpingOnClouds(array $clouds): int
{
    $numberOfClouds = count($clouds);

    $jumps = 0;

    for ($index = 0; $index < $numberOfClouds; $index =  $clouds[$index + 2] === 0 ? $index + 2 : $index + 1) {
        $jumps++;
    }

    return $jumps - 1;
}
