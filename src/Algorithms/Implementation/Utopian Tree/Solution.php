<?php

function utopianTree(int $cycles): int
{
    $height = 1;

    for ($i = 1; $i <= $cycles; $i++) {
        if ($i % 2 === 0) {
            $height++;

            continue;
        }

        $height *= 2;
    }

    return $height;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = utopianTree($n);

    fwrite($fptr, $result . PHP_EOL);
}

fclose($fptr);
