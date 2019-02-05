<?php

namespace Wearesho\Token\Generator;

/**
 * Class NumericTokenGenerator
 * @package Wearesho\Token\Generator
 */
class Numeric extends Char
{
    public function __construct(int $length)
    {
        parent::__construct($length, range(0, 9));
    }
}
