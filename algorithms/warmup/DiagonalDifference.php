<?php

declare(strict_types=1);

echo "hello world";
$arr = (array(
    array(11, 2, 4),
    array(4, 5, 6),
    array(10, 8, -12),
));

function DiagonalDifference(array $arr): int
{
    $firstD = 0;
    $secondD = 0;
    $Diag = count($arr);
    //echo $Diag;
    for ($i = 0; $i < $Diag; $i++) :
        for ($j = 0; $j < $Diag; $j++) :
            if ($i == $j) :
                //echo $arr[$i][$j];
                $firstD += $arr[$i][$j];
            endif;
        endfor;
    endfor;
    //echo $firstD;


    for ($i = 0; $i < $Diag; $i++) :
        for ($j = 0; $j < $Diag; $j++) :
            if (($i + $j) == ($Diag - 1)) :
                $secondD += $arr[$i][$j];
            endif;
        endfor;
    endfor;
    //echo $secondD;
    $result = abs($firstD - $secondD);
    return $result;
}
echo DiagonalDifference($arr);
//----------------------------------
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
// if ($arr[$i][$n - $i - 1]);
