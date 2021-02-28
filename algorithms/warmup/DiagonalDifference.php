<?php
echo "hello world";
function DiagonalDifference(array $arr): int
{

    $n = 3;
    $firstD = 0;
    $secondD = 0;
    $result = 0;
    for ($i = 0; $i < $n; $i++) :
        for ($j = 0; $j < $n; $j++) :
            if ($i == $j) :
                $firstD += $arr[$i][$j];
            endif;
        endfor;
    endfor;
    return $firstD;


    for ($i = 0; $i < $n; $i++) :
        for ($j = 0; $j < $n; $j++) :
            if (($i + $j) == ($n - 1)) :
                $secondD += $arr[$i][$j];
            endif;
        endfor;
    endfor;
    return $secondD;
    $result = abs($firstD - $secondD);
    return $result;
}
// $arr = array(
//     11, 2, 4,
//     4, 5, 6,
//     10, 8, -12
// );

// echo $arr[0];
// echo $arr[4];
// echo $arr[8];

// echo $arr[2];
// echo $arr[4];
// echo $arr[6];

// $firstD = 0;
// $secondD = 0;
// $result = 0;
// $firstD = array_sum([$arr[0], $arr[4], $arr[8]]);
// echo $firstD;
// $secondD = array_sum([$arr[2], $arr[4], $arr[6]]);
// echo $secondD;
// $result = abs($firstD - $secondD);
// echo $result;
//    if(isset($arr[$i])) echo "Элемент $arr[$i] определён <br />";


// $arr = [
//     [11, 2, 4],
//     [4, 5, 6],
//     [10, 8, -12]
// ];

// foreach ($arr as $elem) {
//     foreach ($elem as $subElem) {
//         echo $subElem;
//     }
// }