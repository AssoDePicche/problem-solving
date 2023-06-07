<?php

function introTutorial(int $needle, array $haystack): int
{
    $low = 0;

    $high = count($haystack);

    do {
        $middle = floor(($low + $high) / 2);

        $value = $haystack[$middle];

        if ($value === $needle) {
            return $middle;
        } else if ($needle > $value) {
            $low = $middle + 1;
        } else {
            $high = $middle;
        }
    } while ($low < $high);

    return -1;
}
