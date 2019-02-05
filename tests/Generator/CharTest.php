<?php

namespace Wearesho\Token\Tests\Generator;

use PHPUnit\Framework\TestCase;
use Wearesho\Token\Generator\Char;

/**
 * Class CharTest
 * @package Wearesho\TokenGenerator\Tests\Generator
 */
class CharTest extends TestCase
{
    public function testGenerate(): void
    {
        $generator = new Char(5, ['a']);

        $this->assertEquals('aaaaa', $generator->generate());
    }
}
