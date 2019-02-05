<?php

namespace Wearesho\Token\Generator;

use Wearesho\Token\Generator;

/**
 * Class NumberTokenGenerator
 * @package Wearesho\Token\Generator
 */
class Number implements Generator
{
    /** @var int */
    protected $length;

    public function __construct(int $length)
    {
        $this->length = $length;
    }

    public function generate(): string
    {
        return mt_rand(1 * pow(10, $this->length - 1), str_repeat(9, $this->length));
    }
}
