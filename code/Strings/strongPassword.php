<?php

function charsToMatchPattern(array $needles, string $string): int
{
    $chars = 0;

    foreach ($needles as $needle) {
        $result = strpbrk($needle, $string);

        !is_string($result) && $chars++;
    }

    return $chars;
}

function minimumNumber(int $n, string $password): int
{
    $needles = [ 'abcdefghijklmnopqrstuvwxyz', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', '!@#$%^&*()-+', '0123456789' ];

    $minimum = charsToMatchPattern($needles, $password);

    ($minimum + $n) < 6 && $minimum += 6 - ($minimum + $n);

    return $minimum;
}
