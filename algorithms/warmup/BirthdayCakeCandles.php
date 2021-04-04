<?php

declare(strict_types=1);
echo "hello world";
$candles = array(3, 2, 1, 3);
// Complete the compareTriplets function below.
function BirthdayCakeCandles($candles)
{
    $candles = array(3, 2, 1, 3);
    $maxValue = max($candles);
    $candle = 0;
    //$candle = 0;
    //echo $maxValue;
    //print_r(array_filter($arr));
    // $candle = count(array_filter($arr, function ($i) {
    //     return $i == $maxValue;
    // }));
    foreach ($candles as $key => $val) {
        if ($val == $maxValue) {
            //echo $key;
            $candle = array_count_values($candles)[$maxValue];
            return  $candle;
        }
    }
}
echo BirthdayCakeCandles($candles);
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);
