<?php

namespace Wearesho\Token\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Token\Generator\Char;

/**
 * Class StringTokenGenerator
 * @package Wearesho\TokenGenerator\Tests
 */
class StringTokenGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new Char(5, ['a']);

        $this->assertEquals('aaaaa', $generator->generate());
    }
}
