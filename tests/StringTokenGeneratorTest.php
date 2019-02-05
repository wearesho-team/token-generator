<?php

namespace Wearesho\TokenGenerator\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\TokenGenerator\StringTokenGenerator;

/**
 * Class StringTokenGenerator
 * @package Wearesho\TokenGenerator\Tests
 */
class StringTokenGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new StringTokenGenerator(5, ['a']);

        $this->assertEquals('aaaaa', $generator->generate());
    }
}
