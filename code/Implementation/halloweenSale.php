<?php

function howManyGames(int $standardPrice, int $discount, int $minimumPrice, int $budget): int
{
    if ($discount === $standardPrice) {
        return $budget;
    }

    $games = 0;

    $cart = 0;

    $buy = $standardPrice;

    while ($cart <= $budget) {
        $cart += $buy >= $minimumPrice ? $buy : $minimumPrice;

        $buy -= $discount;

        $cart <= $budget && $games++;
    }

    return $games;
}
