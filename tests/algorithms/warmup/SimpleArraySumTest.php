<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/SimpleArraySum.php';

use PHPUnit\Framework\TestCase;

final class SimpleArraySumTest extends TestCase
{
    /**
     * @testWith [[1, 2, 3, 4, 10, 11],31]
     */
    public function test_SimpleArraySum(array $ar, int $expected): void
    {
        $this->assertSame($expected, SimpleArraySum($ar));
    }
}
