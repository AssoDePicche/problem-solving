<?php

define('INITIAL_TREE_HEIGHT', 1);

define('HEIGHT_INCREMENT_IN_SUMMER', 1);

function utopianTree(int $growthCyclesToSimulate): int
{
    $treeHeight = INITIAL_TREE_HEIGHT;

    for ($cycle = 1; $cycle <= $growthCyclesToSimulate; ++$cycle) {
        $isSummerCycle = ($cycle % 2 === 0);

        if ($isSummerCycle) {
            $treeHeight += HEIGHT_INCREMENT_IN_SUMMER;

            continue;
        }

        $treeHeight *= 2;
    }

    return $treeHeight;
}
