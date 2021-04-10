<?php

declare(strict_types=1);


echo "hello world";

$arr = array(-4, 3, -9, 0, 4, 1);
function PlusMinus(array $arr)
{
    // $pos = 0;
    // $zero = 0;
    // $neg = 0;

    $count = count($arr);

    $pos = count(array_filter($arr, function ($i) {
        return $i > 0;
    }));
    //echo $pos;

    $neg = count(array_filter($arr, function ($i) {
        return $i < 0;
    }));
    //echo $neg;

    $zero = count(array_filter($arr, function ($i) {
        return $i == 0;
    }));
    //echo $zero;

    $posformat = floatval($pos / $count);
    //echo  $posformat;
    $negformat = floatval($neg / $count);
    $zeroformat =  floatval($zero / $count);

    $p = number_format($posformat, 6, '.', '');
    //echo $p;
    $n = number_format($negformat, 6, '.', '');
    //echo $n;
    $z = number_format($zeroformat, 6, '.', '');
    //echo $z;

    return ($p . "\n" . $n . "\n" . $z);


    $stdin = fopen("php://stdin", "r");

    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%[^\n]", $arr_temp);

    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    plusMinus($arr);

    fclose($stdin);
}
echo PlusMinus($arr);
