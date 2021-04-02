<?php

declare(strict_types=1);

echo "hello world";

$arr = array(1, 2, 3, 4, 5);

function MiniMaxSum($arr): int
{
    $arr = array(1, 2, 3, 4, 5);
    $count = count($arr);
    $min_sum = 0;
    $max_sum = 0;
    $min = min($arr);
    $max = max($arr);
    //echo $min;
    //echo $max;

    $min_sum = array_sum($arr) - $max;
    $max_sum = array_sum($arr) - $min;

    echo $min_sum . ' ' . $max_sum;
}
echo MiniMaxSum($arr);
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
