<?php

declare(strict_types=1);

namespace Wearesho\Token;

interface Generator
{
    public function generate(): string;
}
