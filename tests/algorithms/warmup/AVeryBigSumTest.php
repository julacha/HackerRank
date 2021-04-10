<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/AVeryBigSum.php';

use PHPUnit\Framework\TestCase;

final class AVeryBigSumTest extends TestCase
{
    /**
     * @testWith [[1000000001, 1000000002, 1000000003, 1000000004, 1000000005],5000000015]
     */
    public function test_AVeryBigSum(array $ar, int $expected): void
    {
        $this->assertSame($expected, AVeryBigSum($ar));
    }
}
