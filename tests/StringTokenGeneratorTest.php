<?php

namespace Wearesho\TokenGenerator\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\TokenGenerator\StringToken;

/**
 * Class StringTokenGenerator
 * @package Wearesho\TokenGenerator\Tests
 */
class StringTokenGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new StringToken(5, ['a']);

        $this->assertEquals('aaaaa', $generator->generate());
    }
}
