<?php

function pageCount(int $numberOfBookPages, int $pageNumberToReach): int
{
    $pageNumberDifference = ($numberOfBookPages - $pageNumberToReach);

    $isOddNumberOfPages = ($numberOfBookPages % 2) !== 0;

    $rightSideTurns = ($isOddNumberOfPages ?
        $pageNumberDifference :
        $pageNumberDifference + 1
    ) / 2;

    $leftSideTurns = ($pageNumberToReach / 2);

    return (int) min($leftSideTurns, $rightSideTurns);
}
