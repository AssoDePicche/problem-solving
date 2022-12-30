<?php

function chocolateFeast(int $budget, int $cost, int $wrapperUnit): int
{
    $bars = floor($budget / $cost);

    $wrappers = $bars;

    while ($wrappers >= $wrapperUnit) {
        $extraBars = floor($wrappers / $wrapperUnit);

        $bars += $extraBars;

        $wrappers %= $wrapperUnit;

        $wrappers += $extraBars;
    }

    return $bars;
}
