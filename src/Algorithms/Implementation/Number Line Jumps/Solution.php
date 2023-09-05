<?php

function kangaroo(int $x1, int $v1, int $x2, int $v2): string
{
    if ($v1 === $v2 && $x1 === $x2) {
        return "YES";
    }

    if ($v1 === $v2) {
        return "NO";
    }

    $numberOfJumpsNeeded = ($x2 - $x1) / ($v1 - $v2);

    $isAnIntegerNumberOfJumps = floor($numberOfJumpsNeeded) === floatval($numberOfJumpsNeeded);

    $kangaroosMeet = $numberOfJumpsNeeded >= 0 && $isAnIntegerNumberOfJumps;

    return $kangaroosMeet ? "YES" : "NO";
}
