<?php

function hurdleRace(int $playerJumpHeight, array $hurdleHeights): int
{
    $maxHeight = max($hurdleHeights);

    $playerCanClearAllHurdles = ($maxHeight <= $playerJumpHeight);

    $jumpBoost = $playerCanClearAllHurdles ? 0 : ($maxHeight - $playerJumpHeight);

    return $jumpBoost;
}
