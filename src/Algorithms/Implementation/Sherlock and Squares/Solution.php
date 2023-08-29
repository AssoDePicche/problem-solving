<?php

function countPerfectSquares(int $lowerRangeBoundary, int $upperRangeBoundary): int
{
    $lowerRoot = (int) ceil(sqrt($lowerRangeBoundary));

    $upperRoot = (int) floor(sqrt($upperRangeBoundary));

    return max(0, $upperRoot - $lowerRoot + 1);
}
