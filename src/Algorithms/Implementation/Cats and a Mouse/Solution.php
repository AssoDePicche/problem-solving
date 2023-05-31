<?php

function distanceFromCatToMouse(int $mousePosition, int $catPosition): int
{
    return abs($mousePosition - $catPosition);
}

function theMouseEscapes(int $firstCatDistanceToMouse, int $secondCatDistanceToMouse): bool
{
    return ($firstCatDistanceToMouse === $secondCatDistanceToMouse);
}

function firstCatCatchesTheMouseFirst(int $firstCatDistanceToMouse, int $secondCatDistanceToMouse): bool
{
    return ($firstCatDistanceToMouse < $secondCatDistanceToMouse);
}

function catAndMouse(
    int $firstCatPosition,
    int $secondCatPosition,
    int $mousePostion
): string {
    $firstCatDistanceToMouse = distanceFromCatToMouse($mousePostion, $firstCatPosition);

    $secondCatDistanceToMouse = distanceFromCatToMouse($mousePostion, $secondCatPosition);

    if (theMouseEscapes($firstCatDistanceToMouse, $secondCatDistanceToMouse)) {
        return 'Mouse C';
    }

    if (firstCatCatchesTheMouseFirst($firstCatDistanceToMouse, $secondCatDistanceToMouse)) {
        return 'Cat A';
    }

    return 'Cat B';
}
