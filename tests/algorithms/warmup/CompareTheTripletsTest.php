<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/CompareTheTriplets.php';

use PHPUnit\Framework\TestCase;

final class CompareTheTripletsTest extends TestCase
{
  /**
   * @testWith [[1, 2, 3],    [3, 2, 1],    [1, 1]]
   *           [[5, 6, 7],    [3, 6, 10],   [1, 1]]
   *           [[17, 28, 30], [99, 16, 8],  [2, 1]]
   */
  public function test_compareTriplets(array $tripletsA, array $tripletsB, array $expected): void
  {
    $this->assertSame($expected, compareTriplets($tripletsA, $tripletsB));
  }
}
//comments