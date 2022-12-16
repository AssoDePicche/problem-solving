<?php

function filter(array $array): array
{
    return array_filter($array, fn ($value) => $value > 0);
}

function cutTheSticks(array $sticksLength): array
{
    $numberOfSticks = count($sticksLength);
    $cutsPerIteration = [];

    for ($i = 0; $i < $numberOfSticks; $i++) {
        $sticksLengthGreaterThanZero = filter($sticksLength);
        $numberOfCuts = 0;
        $min = min($sticksLengthGreaterThanZero);

        for ($j = 0; $j < $numberOfSticks; $j++) {
            if ($sticksLength[$j] > 0) {
                $sticksLength[$j] -= $min;
                $numberOfCuts++;
            }
        }

        $numberOfCuts > 0 && array_push($cutsPerIteration, $numberOfCuts);
    }

    return $cutsPerIteration;
}
