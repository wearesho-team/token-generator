<?php

namespace Wearesho\Token\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Token\Generator\Number;

/**
 * Class NumberTokenGenerator
 * @package Wearesho\TokenGenerator\Tests
 */
class NumberTokenGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new Number(6);
        $value = $generator->generate();
        $this->assertEquals(6, strlen($value));
        $this->assertIsNumeric($value);
    }
}
