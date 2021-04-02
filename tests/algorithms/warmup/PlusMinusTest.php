<?php

declare(strict_types=1);

require 'vendor/autoload.php';
require_once 'algorithms/warmup/PlusMinus.php';

use PHPUnit\Framework\TestCase;

final class PlusMinus extends TestCase
{
    /**
     * @testWith [[]
     */
    public function test_PlusMinus(array $arr, int $expected): void
    {
        $this->assertSame($expected, PlusMinus($arr));
    }
}
