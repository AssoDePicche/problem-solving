<?php

function hurdleRace(int $k, array $height): int
{
    $maxHeight = max($height);

    if ($maxHeight <= $k) {
        return 0;
    }

    return $maxHeight - $k;
}
