# Token Generator

This package should be used for generating different kinds of random token values.

## Installation

```bash
composer require wearesho-team/token-generator
```

## Usage

### NumberToken
```php
<?php

use Wearesho\TokenGenerator;

$generator = new TokenGenerator\NumberToken($length = 5);
$value = $generator->generate();

// value will contain number with 5 digits that can be converted to int 

```

### StringToken

```php
<?php

use Wearesho\TokenGenerator;

$generator = new TokenGenerator\StringToken($length = 5, $range = ['a', 'b', 'c']);
$value = $generator->generate();

// value will contain 5 characters from passed range in random sequence. 

```

### NumericToken

```php
<?php

use Wearesho\TokenGenerator;

$generator = new TokenGenerator\NumericToken($length = 5);
$value = $generator->generate();

// value will contain string that contains 5 digits and can start with `0` 

```

