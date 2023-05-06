<?php

define('MAXIMUM_FINE', 10000);

define('FINE_PER_DAY_LATE', 15);

define('FINE_PER_MONTH_LATE', 500);

function libraryFine(
    int $day,
    int $month,
    int $year,
    int $day2,
    int $month2,
    int $year2
): int {
    if (isOneOrMoreYearsLate($year, $year2)) {
        return MAXIMUM_FINE;
    }

    if (itHasBeenReturnedEarly(
        $day,
        $month,
        $year,
        $day2,
        $month2,
        $year2
    )) {
        return 0;
    }

    if (itWasReturnedDaysLate($month, $month2)) {
        return FINE_PER_DAY_LATE * daysLate($day, $day2);
    }

    return FINE_PER_MONTH_LATE * monthsLate($month, $month2);
}

function isOneOrMoreYearsLate(int $year, int $year2): bool
{
    return $year > $year2;
}

function itHasBeenReturnedEarly(
    int $day,
    int $month,
    int $year,
    int $day2,
    int $month2,
    int $year2
): bool {
    return ($year < $year2) || ($day > $day2) && ($month < $month2) || ($day <= $day2) && ($month <= $month2);
}

function itWasReturnedDaysLate(int $month, int $month2): bool
{
    return $month === $month2;
}

function daysLate(int $day, int $day2): int
{
    return $day - $day2;
}

function monthsLate(int $month, int $month2): int
{
    return $month - $month2;
}
