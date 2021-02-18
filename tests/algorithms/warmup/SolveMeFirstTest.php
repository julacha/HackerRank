<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/SolveMeFirst.php';

use PHPUnit\Framework\TestCase;

final class SolveMeFirstTest extends TestCase
{
  /**
   * @testWith [2, 3, 5]
   *           [100, 1, 101]
   *           [0, 0, 0]
   */
  public function test_solveMeFirst(int $a, int $b, int $expected): void
  {
    $this->assertSame($expected, solveMeFirst($a, $b));
  }
}
