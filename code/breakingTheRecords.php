<?php

function breakingRecords(array $scores): array
{
    $most = 0;
    $least = 0;
    $max = $scores[0];
    $min = $scores[0];

    for ($i = 0; $i < count($scores); $i++) {
        if ($scores[$i] > $max) {
            $max = $scores[$i];
            $most++;
        }

        if ($scores[$i] < $min) {
            $min = $scores[$i];
            $least++;
        }
    }

    return [$most, $least];
}
