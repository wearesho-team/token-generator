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

    /** @var Generator */
    protected $default;

    public function __construct(int $length, string $keyPrefix = 'TOKEN_GENERATOR_', ?Generator $default = null)
    {
        parent::__construct($keyPrefix);
        $this->length = $length;
        $this->default = $default;
    }

    public function generate(): string
    {
        try {
            $value = $this->getEnv('VALUE');
        } catch (\Throwable $exception) {
            if ($this->default instanceof Generator) {
                return $this->default->generate();
            } else {
                throw $exception;
            }
        }

        return str_repeat($value, $this->length);
    }
}
