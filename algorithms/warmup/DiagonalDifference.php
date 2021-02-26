<?php
echo "hello world";
// function DiagonalDifference(array $ar): int
// {
//     $firstD = 0;
//     $secondD = 0;
//     $arrDiag = count($ar);
//  $i = 0;
//     for ($i = 0; $i < $arrDiag; $i++) {
//         $firstD = $i[0] + $i[4] + $i[8];
//         $secondD = $i[2] + $i[4] + $i[6];
//     }
//     return $ar[$firstD - $secondD];
// }

$arr = array(
    11, 2, 4,
    4, 5, 6,
    10, 8, -12
);

// echo $arr[0];
// echo $arr[4];
// echo $arr[8];

// echo $arr[2];
// echo $arr[4];
// echo $arr[6];

$firstD = 0;
$secondD = 0;
$result = 0;
$firstD = array_sum([$arr[0], $arr[4], $arr[8]]);
echo $firstD;
$secondD = array_sum([$arr[2], $arr[4], $arr[6]]);
echo $secondD;
$result = abs($firstD - $secondD);
echo $result;
//    if(isset($arr[$i])) echo "Элемент $arr[$i] определён <br />";
//    else echo "Элемент $arr[$i] не определён <br />";