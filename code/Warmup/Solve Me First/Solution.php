<?php

function solveMeFirst(int $a, int $b): int
{
    return $a + $b;
}

$handle = fopen('php://stdin', 'r');

$a = fgets($handle);

$b = fgets($handle);

echo solveMeFirst($a, $b);

fclose($handle);
