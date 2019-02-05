# Token Generator

This package should be used for generating different kinds of random token values.

## Installation

```bash
composer require wearesho-team/token-generator
```

## Usage

### Number
```php
<?php

use Wearesho\Token;

$generator = new Token\Generator\Number($length = 5);
$value = $generator->generate();

// value will contain number with 5 digits that can be converted to int 

```

### Char

```php
<?php

use Wearesho\Token;

$generator = new Token\Generator\Char($length = 5, $range = ['a', 'b', 'c']);
$value = $generator->generate();

// value will contain 5 characters from passed range in random sequence. 

```

### Numeric

```php
<?php

use Wearesho\Token;

$generator = new Token\Generator\Numeric($length = 5);
$value = $generator->generate();

// value will contain string from 5 digits and can start with `0` 

```

### Environment


```php
<?php

use Wearesho\Token;

$generator = new Token\Generator\Environment($length = 5);
putenv('TOKEN_GENERATOR_VALUE=z');
$value = $generator->generate();

// value will contain 5 characters `z` that will be taken from environment.

```