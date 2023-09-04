<?php

function diagonalDifference(array $matrix): int
{
    $matrixSize = count($matrix);

    $primaryDiagonalSum = 0;

    $secondaryDiagonalSum = 0;

    for ($row = 0; $row < $matrixSize; ++$row) {
        $primaryDiagonalSum += $matrix[$row][$row];

        $secondaryDiagonalSum += $matrix[$row][$matrixSize - $row - 1];
    }

    return abs($primaryDiagonalSum - $secondaryDiagonalSum);
}
