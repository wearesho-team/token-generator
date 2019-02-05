<?php

namespace Wearesho\Token\Tests;

use PHPUnit\Framework\TestCase;
use Wearesho\Token\Generator\Environment;

/**
 * Class EnvironmentGeneratorTest
 * @package Wearesho\Token\Tests
 */
class EnvironmentGeneratorTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new Environment(5);
        putenv('TOKEN_GENERATOR_VALUE=g');
        $this->assertEquals('ggggg', $generator->generate());
    }
}
