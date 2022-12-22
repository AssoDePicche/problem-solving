<?php

function introTutorial(int $v, array $array): int
{
    $length = count($array);

    for ($index = 0; $index < $length; $index++) {
        if ($array[$index] === $v) {
            return $index;
        }
    }
}
