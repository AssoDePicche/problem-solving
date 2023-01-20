<?php

function jumpingOnClouds(array $clouds): int
{
    $numberOfClouds = count($clouds);

    $jumps = $index = 0;

    while ($index < $numberOfClouds) {
        $jumps++;

        $clouds[$index + 2] === 0 ? $index += 2 : $index++;
    }

    return $jumps - 1;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$c = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
