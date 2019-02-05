<?php

namespace Wearesho\TokenGenerator\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\TokenGenerator\NumberTokenGenerator;

/**
 * Class NumberTokenGenerator
 * @package Wearesho\TokenGenerator\Tests
 */
class NumberTokenGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new NumberTokenGenerator(6);
        $value = $generator->generate();
        $this->assertEquals(6, strlen($value));
        $this->assertIsNumeric($value);
    }
}
