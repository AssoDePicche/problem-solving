<?php

function maximizingXor(int $lowerBound, int $upperBound): int
{
    $xor = $lowerBound ^ $upperBound;

    $xor |= $xor >> 1;

    $xor |= $xor >> 2;

    $xor |= $xor >> 4;

    $xor |= $xor >> 8;

    $xor |= $xor >> 16;

    return $xor;
}
