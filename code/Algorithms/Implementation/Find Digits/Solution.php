<?php

function findDigits(int $n): int
{
    $divisors = 0;

    $digits = str_split(strval($n));

    foreach ($digits as $digit) {
        if ($digit === '0') {
            continue;
        }

        $n % $digit === 0 && $divisors++;
    }

    return $divisors;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $result = findDigits($n);

    fwrite($fptr, $result . PHP_EOL);
}

fclose($fptr);
