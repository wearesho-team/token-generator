<?php

namespace Wearesho\Token\Generator;

use Wearesho\Token\Generator;

class Char implements Generator
{
    protected int $length;

    protected array $chars;

    public function __construct(int $length, array $chars)
    {
        $this->length = $length;
        $this->chars = $chars;
    }

    public function generate(): string
    {
        $length = count($this->chars);

        return implode(array_map(
            fn() => $this->chars[random_int(0, $length - 1)],
            range(1, $this->length)
        ));
    }
}
