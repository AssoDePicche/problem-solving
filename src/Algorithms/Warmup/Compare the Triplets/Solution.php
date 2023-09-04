<?php

define('NUMBER_OF_CATEGORIES', 3);

function compareTriplets(array $aliceScores, array $bobScores): array
{
    $aliceTotalScore = 0;

    $bobTotalScore = 0;

    for ($index = 0; $index < NUMBER_OF_CATEGORIES; ++$index) {
        $aliceScores[$index] > $bobScores[$index] && $aliceTotalScore++;

        $aliceScores[$index] < $bobScores[$index] && $bobTotalScore++;
    }

    return [$aliceTotalScore, $bobTotalScore];
}
