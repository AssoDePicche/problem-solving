<?php

function squares(int $a, int $b): int
{
    $sqrtA = sqrt($a);

    $sqrtB = sqrt($b);

    return max(0, floor($sqrtB) - ceil($sqrtA) + 1);
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $a = intval($first_multiple_input[0]);

    $b = intval($first_multiple_input[1]);

    $result = squares($a, $b);

    fwrite($fptr, $result . PHP_EOL);
}

fclose($fptr);
