<?php

function pageCount(int $n, int $p): int
{
    $right = $n % 2 === 1 ? $n - $p : $n - $p + 1;

    $right /= 2;

    $left = $p / 2;

    return min($left, $right);
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$p = intval(trim(fgets(STDIN)));

$result = pageCount($n, $p);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
