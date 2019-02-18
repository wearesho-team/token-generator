<?php

namespace Wearesho\Token\Tests\Generator;

use Horat1us\Environment\Exception\Missing;
use PHPUnit\Framework\TestCase;
use Wearesho\Token\Generator;

/**
 * Class EnvironmentTest
 * @package Wearesho\Token\Tests\Generator
 */
class EnvironmentTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new Generator\Environment(5);
        putenv('TOKEN_GENERATOR_VALUE=g');
        $this->assertEquals('ggggg', $generator->generate());
    }

    public function testDefault(): void
    {
        $generator = new Generator\Environment(3, 'INVALID_ENV_KEY_', new Generator\Char(5, ['a']));
        $this->assertEquals('aaaaa', $generator->generate());
    }

    public function testMissingAll(): void
    {
        $generator = new Generator\Environment(3, 'INVALID_KEY_');
        $this->expectException(Missing::class);
        $this->expectExceptionMessage('Missing environment key INVALID_KEY_VALUE');
        $generator->generate();
    }
}
