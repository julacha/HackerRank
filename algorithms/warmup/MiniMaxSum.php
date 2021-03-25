<?php

declare(strict_types=1);

echo "hello world";

$arr = array(1, 2, 3, 4, 5);
// echo $count;
// echo $sum; 
function MiniMaxSum($arr)
{
    $size = sizeof($arr);
    $count = count($arr);
    $arr = array(1, 2, 3, 4, 5);
    $min_sum = 0;
    $max_sum = 0;
    $min = min($arr);
    //echo $min;
    //echo max($arr);
    foreach ($arr as &$value) {
        if ($value > $min) {
            //echo $value;
            $min_sum += $value;
            echo  $min_sum;
        }
    }
    // if (array_splice($arr, 1, 1)) {
    //     //array_push($arr, $arr[0]);
    //     echo $arr[0];
    //     //echo array_sum($arr);
    // }

    // if (array_splice($arr, 2, 1)) {
    //     // array_push($arr, $arr[0]);
    //     // echo  $arr[0];
    //     // array_push($arr, $arr[1]);
    //     // echo  $arr[1];
    //     // echo array_sum($arr);
    // }

    return;
    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%[^\n]", $arr_temp);

    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    miniMaxSum($arr);

    fclose($stdin);
}
echo MiniMaxSum($arr);
