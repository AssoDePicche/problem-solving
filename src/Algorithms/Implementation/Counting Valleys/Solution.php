<?php

define('STEP_DOWN', 'D');

function crossedAValley(int $altitude): bool
{
    return ($altitude === -1);
}

function countingValleys(int $steps, string $path): int
{
    $altitude = $traversedValleys = 0;

    for ($index = 0; $index < $steps; ++$index) {
        if ($path[$index] === STEP_DOWN) {
            $altitude--;

            continue;
        }

        crossedAValley($altitude) && $traversedValleys++;

        $altitude++;
    }

    return $traversedValleys;
}
