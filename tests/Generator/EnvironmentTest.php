<?php

namespace Wearesho\Token\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Wearesho\Token\Generator\Environment;

/**
 * Class EnvironmentTest
 * @package Wearesho\Token\Tests\Generator
 */
class EnvironmentTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new Environment(5);
        putenv('TOKEN_GENERATOR_VALUE=g');
        $this->assertEquals('ggggg', $generator->generate());
    }
}
