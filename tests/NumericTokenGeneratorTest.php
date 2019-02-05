<?php

namespace Wearesho\Token\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Token\Generator\Numeric;

/**
 * Class NumericTokenGeneratorTest
 * @package Wearesho\TokenGenerator\Tests
 */
class NumericTokenGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new Numeric(6);
        $value = $generator->generate();
        $this->assertEquals(6, strlen($value));
        $this->assertIsNumeric($value);
    }
}
