<?php

function bonAppetit(array $bill, int $dishThatAnnaDidNotEat, int $annaContribution): void
{
    unset($bill[$dishThatAnnaDidNotEat]);

    $annaOrderCost = array_sum($bill) / 2;

    $billIsFairlySplit = ($annaContribution === $annaOrderCost);

    echo $billIsFairlySplit ? 'Bon Appetit' : ($annaContribution - $annaOrderCost);
}
