<?php

define('INITIAL_NUMBER_OF_RECIPIENTS', 5);

define('NUMBER_OF_FRIENDS_TO_SHARE_PER_DAY', 3);

function viralAdvertising(int $dayNumber): int
{
    $cumulativeLikes = 0;

    $sharedRecipients = INITIAL_NUMBER_OF_RECIPIENTS;

    for ($currentDay = 1; $currentDay <= $dayNumber; ++$currentDay) {
        $likesInCurrentDay = (int) floor($sharedRecipients / 2);

        $sharedRecipients = $likesInCurrentDay * NUMBER_OF_FRIENDS_TO_SHARE_PER_DAY;

        $cumulativeLikes += $likesInCurrentDay;
    }

    return $cumulativeLikes;
}
