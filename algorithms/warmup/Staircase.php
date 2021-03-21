<?php

declare(strict_types=1);

//echo "hello world";
$n = 6;
function Staircase($n)
{
    for ($rows = 0; $rows < $n; $rows++) {

        for ($columns = 0; $columns < $n - $rows - 1; $columns++) {

            echo " ";
        }

        for ($columns = 0; $columns < $rows + 1; $columns++) {

            echo "#";
        }
        echo "\n";
    }
    return;
    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%d\n", $n);

    staircase($n);

    fclose($stdin);
}
echo Staircase($n);
