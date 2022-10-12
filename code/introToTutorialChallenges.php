<?php

function introTutorial(int $v, array $array): int
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $v) {
            return $i;
        }
    }
}
