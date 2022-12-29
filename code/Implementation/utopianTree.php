<?php

function utopianTree(int $cycles): int
{
    $height = 1;

    for ($i = 1; $i <= $cycles; $i++) {
        if ($i % 2 === 0) {
            $height++;

            continue;
        }

        $height *= 2;
    }

    return $height;
}
