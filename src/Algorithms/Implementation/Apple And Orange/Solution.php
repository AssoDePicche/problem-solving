<?php

function isNearTheHouse(
    int $houseStartingPoint,
    int $houseEndpoint,
    int $distance
): bool {
    return ($distance >= $houseStartingPoint) && ($distance <= $houseEndpoint);
}

function applesInRange(
    int $houseStartingPoint,
    int $houseEndpoint,
    int $appleTreeLocation,
    array $appleDistances
): int {
    $applesInRange = 0;

    foreach ($appleDistances as $appleDistance) {
        isNearTheHouse(
            $houseStartingPoint,
            $houseEndpoint,
            $appleTreeLocation + $appleDistance
        ) && $applesInRange++;
    }

    return $applesInRange;
}

function orangesInRange(
    int $houseStartingPoint,
    int $houseEndpoint,
    int $orangeTreeLocation,
    array $orangeDistances
): int {
    $orangesInRange = 0;

    foreach ($orangeDistances as $orangeDistance) {
        isNearTheHouse(
            $houseStartingPoint,
            $houseEndpoint,
            $orangeTreeLocation + $orangeDistance
        ) && $orangesInRange++;
    }

    return $orangesInRange;
}

function countApplesAndOranges(
    int $houseStartingPoint,
    int $houseEndpoint,
    int $appleTreeLocation,
    int $orangeTreeLocation,
    array $appleDistances,
    array $orangeDistances
): void {
    echo applesInRange(
        $houseStartingPoint,
        $houseEndpoint,
        $appleTreeLocation,
        $appleDistances
    ) . PHP_EOL;

    echo orangesInRange(
        $houseStartingPoint,
        $houseEndpoint,
        $orangeTreeLocation,
        $orangeDistances
    ) . PHP_EOL;
}
