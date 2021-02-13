<?php

declare(strict_types=1);

// Complete the compareTriplets function below.
function compareTriplets(array $a, array $b): array
{
  $count = [0, 0];

  for ($i = 0; $i < 3; $i++) {
    if ($a[$i] > $b[$i]) {
      $count[0]++;
    } else if ($a[$i] < $b[$i]) {
      $count[1]++;
    }
  }

  return $count;
}
