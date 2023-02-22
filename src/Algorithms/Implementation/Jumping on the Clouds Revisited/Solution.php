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

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$stdin = fopen('php://stdin', 'r');

fscanf($stdin, "%[^\n]", $nk_temp);

$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c, $k);

fwrite($fptr, $result . PHP_EOL);

fclose($stdin);

fclose($fptr);
