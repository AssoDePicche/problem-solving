<?php

function squares(int $a, int $b): int
{
    $sqrtA = sqrt($a);
    $sqrtB = sqrt($b);

    return max(0, floor($sqrtB) - ceil($sqrtA) + 1);
}
