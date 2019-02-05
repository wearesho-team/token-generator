<?php

namespace Wearesho\Token\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Wearesho\Token\Generator\Numeric;

/**
 * Class NumericTest
 * @package Wearesho\TokenGenerator\Tests\Generator
 */
class NumericTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new Numeric(6);
        $value = $generator->generate();
        $this->assertEquals(6, strlen($value));
        $this->assertIsNumeric($value);
    }
}
