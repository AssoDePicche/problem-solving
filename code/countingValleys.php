<?php

function countingValleys(int $steps, string $path)
{
    $altitude = 0;
    $valleys = 0;

    for ($index = 0; $index < $steps; $index++) {
        if ($path[$index] === 'U') {
            $altitude === -1 && $valleys++;
            $altitude++;
        }

        $path[$index] === 'D' && $altitude--;
    }

    return $valleys;
}
