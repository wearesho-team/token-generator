<?php

namespace Wearesho\TokenGenerator\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\TokenGenerator\NumericTokenGenerator;

/**
 * Class NumericTokenGeneratorTest
 * @package Wearesho\TokenGenerator\Tests
 */
class NumericTokenGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new NumericTokenGenerator(6);
        $value = $generator->generate();
        $this->assertEquals(6, strlen($value));
        $this->assertIsNumeric($value);
    }
}
