<?php

namespace Wearesho\TokenGenerator;

/**
 * Class StringTokenGenerator
 * @package Wearesho\TokenGenerator
 */
class StringToken implements TokenGeneratorInterface
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
