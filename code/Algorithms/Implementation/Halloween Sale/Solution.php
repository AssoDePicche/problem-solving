<?php

function howManyGames(int $standardPrice, int $discount, int $minimumPrice, int $budget): int
{
    if ($discount === $standardPrice) {
        return $budget;
    }

    $games = $cart = 0;

    $buy = $standardPrice;

    while ($cart <= $budget) {
        $cart += $buy >= $minimumPrice ? $buy : $minimumPrice;

        $buy -= $discount;

        $cart <= $budget && $games++;
    }

    return $games;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$p = intval($first_multiple_input[0]);

$d = intval($first_multiple_input[1]);

$m = intval($first_multiple_input[2]);

$s = intval($first_multiple_input[3]);

$answer = howManyGames($p, $d, $m, $s);

fwrite($fptr, $answer . PHP_EOL);

fclose($fptr);
