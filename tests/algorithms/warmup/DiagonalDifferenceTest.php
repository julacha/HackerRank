<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/DiagonalDifference.php';

use PHPUnit\Framework\TestCase;

final class DiagonalDifferenceTest extends TestCase
{
    /**
     * @testWith [[1, 2, 3, 4, 10, 11],31]
     */
    public function test_DiagonalDifference(array $ar, int $expected): void
    {
        $this->assertSame($expected, DiagonalDifference($ar));
    }
}
