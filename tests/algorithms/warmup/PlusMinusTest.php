<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/PlusMinus.php';

use PHPUnit\Framework\TestCase;

final class PlusMinus extends TestCase
{
    /**
     * @testWith [[-4, 3, -9, 0, 4, 1], 0.500000,0.333333,0.166667]
     */
    public function test_PlusMinus(array $arr, array $expected): void
    {
        $this->assertSame($expected, PlusMinus($arr));
    }
}
