<?php

function countingValleys(int $steps, string $path)
{
    $altitude = 0;
    $valleys = 0;

    for ($i = 0; $i < $steps; $i++) {
        if ($path[$i] === 'U') {
            if ($altitude === -1) {
                $valleys++;
            }

            $altitude++;
        }

        if ($path[$i] === 'D') {
            $altitude--;
        }
    }

    return $valleys;
}
