<?php

function reverse(int $integer): int
{
    return (int) strrev($integer);
}

function isABeautifulDay(int $dayNumber, int $divisor): bool
{
    return abs($dayNumber - reverse($dayNumber)) % $divisor === 0;
}

function beautifulDays(
    int $startingDayNumber,
    int $endingDayNumber,
    int $divisor
): int {
    $beautifulDaysInRange = 0;

    for ($startingDayNumber; $startingDayNumber <= $endingDayNumber; $startingDayNumber++) {
        isABeautifulDay(
            $startingDayNumber,
            $divisor
        ) && $beautifulDaysInRange++;
    }

    return $beautifulDaysInRange;
}
