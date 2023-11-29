<?php

declare(strict_types=1);

namespace Wearesho\Token\Generator;

use Wearesho\Token\Generator;

class Number implements Generator
{
    protected int $length;

    public function __construct(int $length)
    {
        $this->length = $length;
    }

    public function generate(): string
    {
        return (string)mt_rand(
            1 * pow(10, $this->length - 1),
            (int)str_repeat('9', $this->length)
        );
    }
}
