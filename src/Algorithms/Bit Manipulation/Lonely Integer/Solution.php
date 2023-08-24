<?php

function lonelyinteger(array $list): int
{
    $lonelyInteger = 0;

    foreach ($list as $item) {
        $lonelyInteger ^= $item;
    }

    return $lonelyInteger;
}
