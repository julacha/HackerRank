<?php

declare(strict_types=1);

echo "hello world";

function Staircase(int $n)
{
    $st = '';

    for ($i = 0; $i <= 6; $i++) {
        $st += "#";
    }
    echo $st;
    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%d\n", $n);

    staircase($n);

    fclose($stdin);
}
echo Staircase($n);
