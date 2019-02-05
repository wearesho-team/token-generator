<?php

namespace Wearesho\TokenGenerator;

/**
 * Interface TokenGeneratorInterface
 * @package Wearesho\TokenGenerator
 */
interface TokenGeneratorInterface
{
    public function generate(): string;
}
