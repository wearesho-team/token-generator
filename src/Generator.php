<?php

namespace Wearesho\Token;

/**
 * Interface TokenGeneratorInterface
 * @package Wearesho\TokenGenerator
 */
interface Generator
{
    public function generate(): string;
}
