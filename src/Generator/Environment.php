<?php

declare(strict_types=1);

namespace Wearesho\Token\Generator;

use Horat1us\Environment\Config;
use Wearesho\Token\Generator;

class Environment extends Config implements Generator
{
    protected int $length;

    protected ?Generator $default = null;

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
