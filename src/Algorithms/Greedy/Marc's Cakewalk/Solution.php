<?php

function marcsCakewalk(array $cupcakesCalories): int
{
    rsort($cupcakesCalories);

    $minimumMilesToWalk = 0;

    $cupcakes = count($cupcakesCalories);

    for ($index = 0; $index < $cupcakes; ++$index) {
        $distanceToBurnCalories = $cupcakesCalories[$index] * pow(2, $index);

        $minimumMilesToWalk += $distanceToBurnCalories;
    }

    return $minimumMilesToWalk;
}
