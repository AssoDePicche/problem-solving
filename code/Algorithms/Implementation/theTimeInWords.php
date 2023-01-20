<?php

function timeInWords(int $h, int $m): string
{
    $s = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty',
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty'
    ];

    if ($m === 0) {
        return $s[$h] . ' o\' clock';
    }

    if ($m === 1) {
        return $s[$m] . ' minute past ' . $s[$h];
    }

    if ($m === 15) {
        return 'quarter past ' . $s[$h];
    }

    if ($m < 30 && $m > 1) {
        $m = (string) $m;

        return $s[$m[0] * 10] . ' ' . $s[$m[1]] . ' minutes past ' . $s[$h];
    }

    if ($m === 30) {
        return 'half past ' . $s[$h];
    }

    if ($m === 45) {
        return 'quarter to ' . $s[$h + 1];
    }

    $diff = 60 - $m;

    if ($diff < 20) {
        return $s[$diff] . ' minutes to ' . $s[$h + 1];
    }

    $diff = (string) $diff;

    return $s[$diff[0] * 10] . ' ' . $s[$diff[1]] . ' minutes to ' . $s[$h + 1];
}
