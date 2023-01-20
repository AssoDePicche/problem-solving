<?php

function encryption(string $s)
{
    $s = str_replace(' ', '', $s);

    $length = strlen($s);

    $columns = ceil(sqrt($length));

    $encryption = '';

    for ($i = 0; $i < $columns; $i++) {
        $char = $i;

        $str = '';

        while ($char < $length) {
            $str .= $s[$char];

            $char += $columns;
        }

        $encryption .= $str . ' ';
    }

    return $encryption;
}

$fptr = fopen(getenv('OUTPUT_PATH'), 'w');

$s = rtrim(fgets(STDIN), "\r\n");

$result = encryption($s);

fwrite($fptr, $result . PHP_EOL);

fclose($fptr);
