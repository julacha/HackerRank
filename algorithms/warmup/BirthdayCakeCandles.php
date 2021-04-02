<?php

declare(strict_types=1);

// Complete the compareTriplets function below.
$arr = array(3, 2, 1, 3);
$n = count($arr);
$candles =[];
function BirthdayCakeCandles($arr): int
{
    $arr = array(3, 2, 1, 3);
    for ($i = 0; $i < $n; $i++) {
        $max = max($arr);
        echo $max;

    return [];
}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);