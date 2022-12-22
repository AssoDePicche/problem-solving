<?php

function viralAdvertising(int $day): int
{
    $likes = 0;

    $cumulative = 0;

    $recipients = 5;

    for ($currentDay = 1; $currentDay <= $day; $currentDay++) {
        $likes = floor($recipients / 2);

        $recipients = $likes * 3;

        $cumulative += $likes;
    }

    return $cumulative;
}
