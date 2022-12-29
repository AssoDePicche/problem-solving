<?php

function jumpingOnClouds(array $clouds, int $jumpSize): int
{
    $energy = 100;

    $numberOfClouds = count($clouds);

    $index = 0;

    while (true) {
        $index = ($index + $jumpSize) % $numberOfClouds;

        $clouds[$index] === 1 && $energy -= 2;

        $energy--;

        if ($index === 0) {
            break;
        }
    }

    return $energy;
}
