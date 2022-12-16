<?php

function dayOfProgrammer(int $year): string
{
    if ($year < 1700 && $year > 2700) {
        return "Year out of range";
    }

    if ($year === 1918) {
        return "26.09.1918";
    }

    $leapYear = $year % 4 === 0;

    if ($year < 1918) {
        return $leapYear ? "12.09." . $year : "13.09." . $year;
    }

    if ($year % 400 === 0 || $leapYear && $year % 100 !== 0) {
        return "12.09." . $year;
    }

    return "13.09." . $year;
}
