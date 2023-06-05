<?php

function inTimeMachineRange(int $year): bool
{
    return ($year >= 1700) && ($year <= 2700);
}

function isCalendarTransitionYear(int $year): bool
{
    return ($year === 1918);
}

function inJulianCalendar(int $year): bool
{
    return ($year < 1918);
}

function isJulianLeapYear(int $year): bool
{
    return inJulianCalendar($year) && (($year % 4) === 0);
}

function isGregorianLeapYear(int $year): bool
{
    if (inJulianCalendar($year)) {
        return false;
    }

    return (($year % 400) === 0) || (($year % 4) === 0) && (($year % 100) !== 0);
}

function isALeapYear(int $year): bool
{
    return isJulianLeapYear($year) || isGregorianLeapYear($year);
}

function dayOfProgrammer(int $year): string
{
    if (!inTimeMachineRange($year)) {
        return 'Year out of range';
    }

    if (isCalendarTransitionYear($year)) {
        return '26.09.1918';
    }

    $day = isALeapYear($year) ? '12' : '13';

    return sprintf('%d.09.%d', $day, $year);
}
