<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/DiagonalDifference.php';

use PHPUnit\Framework\TestCase;

final class DiagonalDifferenceTest extends TestCase
{
    /**
     * @testWith [[11, 2, 4],
     *            [4, 5, 6],
     *            [10, 8, -12],
     *            [11,5,-12]
     *            [4,5,10]
     *            [15]]
     */
    public function test_DiagonalDifference(array $ar, int $expected): void
    {
        $this->assertSame($expected, DiagonalDifference($ar));
    }
}
