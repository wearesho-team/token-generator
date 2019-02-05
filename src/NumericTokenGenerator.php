<?php

namespace Wearesho\TokenGenerator;

/**
 * Class NumericTokenGenerator
 * @package Wearesho\TokenGenerator
 */
class NumericTokenGenerator extends StringTokenGenerator
{
    public function __construct(int $length)
    {
        parent::__construct($length, range(0, 9));
    }
}
