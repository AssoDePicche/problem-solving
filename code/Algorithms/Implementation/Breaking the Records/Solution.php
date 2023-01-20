<?php

function breakingRecords(array $scores): array
{
    $most = $least = 0;

    $max = $min = $scores[0];

    foreach ($scores as $score) {
        if ($score > $max) {
            $max = $score;

            $most++;
        }

        if ($score < $min) {
            $min = $score;

            $least++;
        }
    }

    return [$most, $least];
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$n = intval(trim(fgets(STDIN)));

$scores_temp = rtrim(fgets(STDIN));

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(' ', $result) . PHP_EOL);

fclose($fptr);
