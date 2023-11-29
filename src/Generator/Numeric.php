<?php

declare(strict_types=1);

namespace Wearesho\Token\Generator;

class Numeric extends Char
{
    public function __construct(int $length)
    {
        parent::__construct($length, range(0, 9));
    }
}
