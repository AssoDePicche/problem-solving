<?php

function compareTriplets(array $a, array $b): array
{
    $alice = $bob = 0;

    for ($i = 0; $i < 3; $i++) {
        $a[$i] > $b[$i] && $alice++;

        $a[$i] < $b[$i] && $bob++;
    }

    return [$alice, $bob];
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(' ', $result) . PHP_EOL);

fclose($fptr);
