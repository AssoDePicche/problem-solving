<?php

function saveThePrisoner(int $prisioners, int $sweets, int $start): int
{
    $rest = $sweets % $prisioners;

    if ($rest === 0 && $start === 1) {
        return $prisioners;
    }

    $prisioner = ($start + $rest - 1) % $prisioners;

    return ($prisioner === 0) ? $prisioners : $prisioner;
}
