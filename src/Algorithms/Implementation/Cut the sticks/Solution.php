<?php

function cutTheSticks(array $sticksLength): array
{
    $numberOfSticks = count($sticksLength);

    $cutsPerIteration = [];

    for ($i = 0; $i < $numberOfSticks; $i++) {
        $sticksLengthGreaterThanZero = array_filter($sticksLength, fn ($value) => $value > 0);

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

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$temp = rtrim(fgets(STDIN));

$array = array_map('intval', preg_split('/ /', $temp, -1, PREG_SPLIT_NO_EMPTY));

$result = cutTheSticks($array);

fwrite($fptr, implode(PHP_EOL, $result) . PHP_EOL);

fclose($fptr);
