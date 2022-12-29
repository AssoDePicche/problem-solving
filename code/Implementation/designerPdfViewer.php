<?php

function designerPdfViewer(array $heights, string $word)
{
    $alphabet = [
        'a' => 0, 'b' => 1, 'c' => 2, 'd' => 3, 'e' => 4, 'f' => 5, 'g' => 6,
        'h' => 7, 'i' => 8, 'j' => 9, 'k' => 10, 'l' => 11, 'm' => 12, 'n' => 13,
        'o' => 14, 'p' => 15, 'q' => 16, 'r' => 17, 's' => 18, 't' => 19,
        'u' => 20, 'v' => 21, 'w' => 22, 'x' => 23, 'y' => 24, 'z' => 25
    ];

    $chars = strlen($word);

    $charsHeights = [];

    for ($i = 0; $i < $chars; $i++) {
        for ($j = 0; $j < 26; $j++) {
            array_push($charsHeights, $heights[$alphabet[$word[$i]]]);
        }
    }

    return max($charsHeights) * $chars;
}
