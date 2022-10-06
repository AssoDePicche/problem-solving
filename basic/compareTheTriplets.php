<?php

function compareTheTriplets(array $a, array $b): array
{
    $score = [0, 0];

    for ($i = 0; $i < 3; $i++) {
        if ($a[$i] > $b[$i]) {
            $score[0] += 1;
        }

        if ($a[$i] < $b[$i]) {
            $score[1] += 1;
        }
    }

    return $score;
}
