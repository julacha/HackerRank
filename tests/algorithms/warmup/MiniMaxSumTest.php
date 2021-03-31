<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/MiniMaxSum.php';

use PHPUnit\Framework\TestCase;

final class MiniMaxSum extends TestCase
{
    /**
     * @testWith [[-4, 3, -9, 0, 4, 1], 0.500000,0.333333,0.166667]
     */
    public function test_MiniMaxSum(array $min_sum, array $max_sum, array $expected): void
    {
        $this->assertSame($expected, MiniMaxSum($min_sum, $max_sum));
    }
}
