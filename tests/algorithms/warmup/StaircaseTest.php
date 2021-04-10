<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/Staircase.php';

use PHPUnit\Framework\TestCase;

final class StaircaseTest extends TestCase
{
    /**
     * @testWith [2, 3, 5]
     *           [100, 1, 101]
     *           [0, 0, 0]
     */
    public function test_Staircase(int $n, int $expected): void
    {
        $this->assertSame($expected, Staircase($n));
    }
}
