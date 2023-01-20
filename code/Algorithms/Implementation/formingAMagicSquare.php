<?php

function formingMagicSquare(array $square): int
{
    $magicSquares = [
        [[4, 9, 2], [3, 5, 7], [8, 1, 6]],
        [[2, 7, 6], [9, 5, 1], [4, 3, 8]],
        [[6, 1, 8], [7, 5, 3], [2, 9, 4]],
        [[8, 3, 4], [1, 5, 9], [6, 7, 2]],
        [[2, 9, 4], [7, 5, 3], [6, 1, 8]],
        [[6, 7, 2], [1, 5, 9], [8, 3, 4]],
        [[8, 1, 6], [3, 5, 7], [4, 9, 2]],
        [[4, 3, 8], [9, 5, 1], [2, 7, 6]]
    ];

    $max = PHP_INT_MAX;

    $numberOfMagicSquares = count($magicSquares);

    $squares = count($square);

    for ($i = 0; $i < $numberOfMagicSquares; $i++) {
        $min = 0;

        for ($line = 0; $line < $squares; $line++) {
            for ($column = 0; $column < $squares; $column++) {
                $min += abs($square[$line][$column] - $magicSquares[$i][$line][$column]);
            }
        }

        $max = min($max, $min);
    }

    return $max;
}
