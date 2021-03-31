<?php

declare(strict_types=1);

echo "hello world";

$arr = array(1, 2, 3, 4, 5);
// echo $count;
// echo $sum; 
function MiniMaxSum($arr): array
{
    $arr = array(1, 2, 3, 4, 5);
    //echo $count;
    $min_sum = 0;
    $max_sum = 0;
    $min = min($arr);
    $max = max($arr);
    //echo $min;
    //echo $max;
    $max_sum = array_sum($arr) - $min;
    //echo $max_sum;
    $min_sum = array_sum($arr) - $max;
    //echo $min_sum;

    return [$min_sum, $max_sum];
    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%[^\n]", $arr_temp);

    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    miniMaxSum($arr);

    fclose($stdin);
}
echo MiniMaxSum($arr);
