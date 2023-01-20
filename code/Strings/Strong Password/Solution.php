<?php

function minimumNumber(int $n, string $password): int
{
    $minimum = 0;

    !preg_match('/[a-z]/', $password) && $minimum++;

    !preg_match('/[A-Z]/', $password) && $minimum++;

    !preg_match('/[0-9]/', $password) && $minimum++;

    !preg_match('/[!@#$%^&*()\-+]/', $password) && $minimum++;

    return ($minimum + $n) < 6 ? $minimum + 6 - ($minimum + $n) : $minimum;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$password = rtrim(fgets(STDIN), "\r\n");

$answer = minimumNumber($n, $password);

fwrite($fptr, $answer . PHP_EOL);

fclose($fptr);
