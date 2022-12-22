<?php

function timeConversion(string $s): string
{
    $s = str_split($s);

    $hours = $s[0] . $s[1];

    $minutes = $s[3] . $s[4];

    $seconds = $s[6] . $s[7];

    $meridien = $s[8];

    if ($hours >= 12 && $meridien === 'A') {
        $hours -= 12;

        $hours = '0' . $hours;
    }

    $hours < 12 && $meridien === 'P' && $hours += 12;

    return $hours . ':' . $minutes . ':' . $seconds;
}
