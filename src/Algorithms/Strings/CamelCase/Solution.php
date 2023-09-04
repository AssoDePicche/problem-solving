<?php

function camelCase(string $string): int
{
    return preg_match_all('/[A-Z]/', $string) + 1;
}
