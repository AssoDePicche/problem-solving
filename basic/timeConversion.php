<?php

function timeConversion(string $s): string
{
    $date = explode(":", $s);
    $hours = $date[0];
    $minutes = $date[1];
    $seconds = str_split($date[2], 2)[0];
    $meridien = str_split($date[2], 2)[1];

    if ($meridien === "AM") {
        $hours = ($hours === "12") ? "00" : $hours;
    }

    if ($meridien === "PM") {
        switch ($hours) {
            case "01":
                $hours = "13";
                break;
            case "02":
                $hours = "14";
                break;
            case "03":
                $hours = "15";
                break;
            case "04":
                $hours = "16";
                break;
            case "05":
                $hours = "17";
                break;
            case "06":
                $hours = "18";
                break;
            case "07":
                $hours = "19";
                break;
            case "08":
                $hours = "20";
                break;
            case "09":
                $hours = "21";
                break;
            case "10":
                $hours = "22";
                break;
            case "11":
                $hours = "23";
                break;
        }
    }

    return "{$hours}:{$minutes}:{$seconds}";
}
