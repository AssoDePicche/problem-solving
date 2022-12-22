<?php

function breakingRecords(array $scores): array
{
    $most = 0;

    $least = 0;

    $max = $scores[0];

    $min = $scores[0];

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
