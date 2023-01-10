<?php

function camelCase(string $s)
{
    return preg_match_all('/[A-Z]/', $s) + 1;
}
