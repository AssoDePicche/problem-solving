<?php

function findDigits(int $number): int
{
    $numberOfDigitsInNumberThatAreDivisorsOfNumber = 0;

    $currentNumberWithoutLastDigit = $number;

    while ($currentNumberWithoutLastDigit != 0) {
        $currentDigit = ($currentNumberWithoutLastDigit % 10);

        $currentNumberWithoutLastDigit /= 10;

        if ($currentDigit === 0) {
            continue;
        }

        $number % $currentDigit === 0 && ++$numberOfDigitsInNumberThatAreDivisorsOfNumber;
    }

    return $numberOfDigitsInNumberThatAreDivisorsOfNumber;
}
