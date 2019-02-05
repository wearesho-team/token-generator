<?php

namespace Wearesho\Token\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Wearesho\Token\Generator\Number;

/**
 * Class NumberTest
 * @package Wearesho\TokenGenerator\Tests\Generator
 */
class NumberTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new Number(6);
        $value = $generator->generate();
        $this->assertEquals(6, strlen($value));
        $this->assertIsNumeric($value);
    }
}
