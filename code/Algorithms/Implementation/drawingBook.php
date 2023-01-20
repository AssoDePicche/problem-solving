<?php

function pageCount(int $n, int $p): int
{
    $right = $n % 2 === 1 ? $n - $p : $n - $p + 1;

    $right /= 2;

    $left = $p / 2;

    return min($left, $right);
}
