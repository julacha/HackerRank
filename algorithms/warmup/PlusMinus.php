<?php

declare(strict_types=1);
echo "hello world";

$arr = array(-4, 3, -9, 0, 4, 1);
function PlusMinus(array $arr): int
{
    $count = count($arr);
    $array_new[] = array();
    for ($i = 0; $i < $count; $i++) {
        //echo $arr[$i];
        if ($arr[$i] > 0) {
            //echo $arr[$i];
            $array_new[$i] = $arr[$i];
            echo $array_new[$i];
            // foreach ($array_new as $value) {
            //     //echo $sum;
            //     $value = $value / $sum;
            // }
            // return  $array_new;
        }
    }
}
echo PlusMinus($arr);
