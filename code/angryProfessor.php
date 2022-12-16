<?php

function angryProfessor(int $threshold, array $arrivalTime): string
{
    $inTime = 0;

    foreach ($arrivalTime as $delay) {
        $delay <= 0 && $inTime++;
    }

    return $inTime < $threshold ? "YES" : "NO";
}
