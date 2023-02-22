<?php

function viralAdvertising(int $day): int
{
    $likes = $cumulative = 0;

    $recipients = 5;

    for ($currentDay = 1; $currentDay <= $day; $currentDay++) {
        $likes = floor($recipients / 2);

        $recipients = $likes * 3;

        $cumulative += $likes;
    }

    return $cumulative;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$result = viralAdvertising($n);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
