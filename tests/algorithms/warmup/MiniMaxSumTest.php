<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/MiniMaxSum.php';

use PHPUnit\Framework\TestCase;

final class MiniMaxSum extends TestCase
{
    /**
     * @testWith []
     */
    public function test_MiniMaxSum(array $arr, int $expected): void
    {
        $this->assertSame($expected, MiniMaxSum($arr));
    }
}
