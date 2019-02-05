<?php

namespace Wearesho\Token\Generator;

use Horat1us\Environment\Config;
use Wearesho\Token\Generator;

/**
 * Class Environment
 * @package Wearesho\Token\Generator
 */
class Environment extends Config implements Generator
{
    /** @var int */
    protected $length;

    public function __construct(int $length, string $keyPrefix = 'TOKEN_GENERATOR_')
    {
        parent::__construct($keyPrefix);
        $this->length = $length;
    }

    public function generate(): string
    {
        $value = $this->getEnv('VALUE');

        return str_repeat($value, $this->length);
    }
}
