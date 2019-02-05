<?php

namespace Wearesho\Token\Generator;

use Wearesho\Token\Generator;

/**
 * Class StringTokenGenerator
 * @package Wearesho\Token\Generator
 */
class Char implements Generator
{
    /** @var int */
    protected $length;

    /** @var array */
    protected $chars;

    public function __construct(int $length, array $chars)
    {
        $this->length = $length;
        $this->chars = $chars;
    }

    public function generate(): string
    {
        $chars = array_flip($this->chars);

        return implode('', array_map(function () use ($chars) {
            return array_rand($chars);
        }, range(1, $this->length)));
    }
}
