<?php

function pageCount(int $n, int $p): int
{
    $left = $p / 2;
    $right = $n % 2 === 1 ? ($n - $p) / 2 : ($n - $p + 1) / 2;

    return min($left, $right);
}
