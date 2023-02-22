<?php

function saveThePrisoner(int $prisioners, int $sweets, int $start): int
{
    $rest = $sweets % $prisioners;

    if ($rest === 0 && $start === 1) {
        return $prisioners;
    }

    $prisioner = ($start + $rest - 1) % $prisioners;

    return ($prisioner === 0) ? $prisioners : $prisioner;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $n = intval($first_multiple_input[0]);

    $m = intval($first_multiple_input[1]);

    $s = intval($first_multiple_input[2]);

    $result = saveThePrisoner($n, $m, $s);

    fwrite($fptr, $result . PHP_EOL);
}

fclose($fptr);
