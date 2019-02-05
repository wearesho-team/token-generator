<?php

namespace Wearesho\TokenGenerator\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\TokenGenerator\NumberToken;

/**
 * Class NumberTokenGenerator
 * @package Wearesho\TokenGenerator\Tests
 */
class NumberTokenGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new NumberToken(6);
        $value = $generator->generate();
        $this->assertEquals(6, strlen($value));
        $this->assertIsNumeric($value);
    }
}
