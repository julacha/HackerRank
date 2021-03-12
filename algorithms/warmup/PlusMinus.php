<?php

declare(strict_types=1);

use phpDocumentor\Reflection\Types\Float_;

echo "hello world";

$arr = array(-4, 3, -9, 0, 4, 1);
function PlusMinus(array $arr): float
{
    $count = count($arr);
    $array_new = array();
    for ($i = 0; $i < $count; $i++) {
        //echo $arr[$i];
        if ($arr[$i] > 0) {
            $arr[$i] /= $count;
            //echo $arr[$i];
            $array_new[] = $arr[$i];
            //echo $array_new;
            foreach ($array_new as $each_number) {
                $each_number = (float)$each_number;
                return (float)$each_number;
            }
        }
    }
}
echo PlusMinus($arr);
