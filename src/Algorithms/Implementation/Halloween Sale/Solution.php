<?php

function howManyGames(
    int $priceOfTheFirstGame,
    int $discountFromThePreviousGamePrice,
    int $minimumCostOfAGame,
    int $startingBudget
): int {
    if ($discountFromThePreviousGamePrice === $priceOfTheFirstGame) {
        return $startingBudget;
    }

    $gamesToBuy = 0;

    $moneySpent = 0;

    $gamePrice = $priceOfTheFirstGame;

    while ($moneySpent <= $startingBudget) {
        $hasDiscount = ($gamePrice >= $minimumCostOfAGame);

        $moneySpent += $hasDiscount ? $gamePrice : $minimumCostOfAGame;

        $gamePrice -= $discountFromThePreviousGamePrice;

        $moneySpent <= $startingBudget && ++$gamesToBuy;
    }

    return $gamesToBuy;
}
