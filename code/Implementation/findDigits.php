<?php

function findDigits(int $n): int
{
    $divisors = 0;
    $digits = str_split((string) $n);

    foreach ($digits as $digit) {
        if ($digit === '0') {
            continue;
        }

        $n % $digit === 0 && $divisors++;
    }

    return $divisors;
}
