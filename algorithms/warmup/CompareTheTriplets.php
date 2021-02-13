<?php

declare(strict_types=1);

// Complete the compareTriplets function below.
function compareTriplets(array $a, array $b): array
{
  $countA = 0;
  $countB = 0;

  for ($i = 0; $i < 3; $i++) {
    if ($a[$i] > $b[$i]) {
      $countA++;
    } else if ($a[$i] < $b[$i]) {
      $countB++;
    }
  }

  return [$countA, $countB];
}
