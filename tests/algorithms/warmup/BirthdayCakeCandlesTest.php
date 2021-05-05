<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/BirthdayCakeCandles.php';

use PHPUnit\Framework\TestCase;

final class BirthdayCakeCandles extends TestCase
{
    /**
     * @testWith [[3, 2, 1, 3],2]
     */
    public function test_BirthdayCakeCandles(array $arr, int $expected): void
    {
        $this->assertSame($expected, BirthdayCakeCandles($arr));
    }
}
//comments