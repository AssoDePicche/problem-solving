<?php

function countingValleys(int $steps, string $path): int
{
    $altitude = $valleys = 0;

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

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$steps = intval(trim(fgets(STDIN)));

$path = rtrim(fgets(STDIN), "\r\n");

$result = countingValleys($steps, $path);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
