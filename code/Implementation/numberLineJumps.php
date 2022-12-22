<?php

function kangaroo(int $x1, int $v1, int $x2, int $v2): string
{
    for ($i = 0; $i < 10000; $i++) {
        $x1 += $v1;

        $x2 += $v2;

        if ($x1 === $x2) {
            return "YES";
        }
    }

    return "NO";
}
