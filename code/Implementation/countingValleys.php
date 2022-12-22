<?php

function countingValleys(int $steps, string $path): int
{
    $altitude = 0;

    $valleys = 0;

    for ($index = 0; $index < $steps; $index++) {
        if ($path[$index] === 'D') {
            $altitude--;

            continue;
        }

        $altitude === -1 && $valleys++;

        $altitude++;
    }

    return $valleys;
}
