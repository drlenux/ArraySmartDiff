# Array Smart Diff

[![Latest Stable Version](https://img.shields.io/packagist/v/noname/array-smart-diff.svg)](https://packagist.org/packages/noname/array-smart-diff)
[![Total Downloads](https://img.shields.io/packagist/dt/noname/array-smart-diff.svg)](https://packagist.org/packages/noname/array-smart-diff)
[![Build Status](https://travis-ci.org/drlenux/ArraySmartDiff.svg?branch=master)](https://travis-ci.org/drlenux/ArraySmartDiff)
[![php version](https://img.shields.io/packagist/php-v/noname/array-smart-diff.svg)](https://packagist.org/packages/noname/array-smart-diff)
[![scrutinizer](https://scrutinizer-ci.com/g/drlenux/ArraySmartDiff/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/drlenux/ArraySmartDiff/?branch=master)

Author: `DrLenux`

License: `MIT`

### Doc

```php
<?php

$a = ['a' => 1, 'b' => 2, 'd' => 4];
$b = ['a' => 2, 'b' => 2, 'c' => 3];

\DrLenux\ArrayDiff::getDiff($a, $b);
```

return 

```php
<?php

[
    'a' => [
        'new' => 2, 
        'old' => 1
    ], 
    'c' => [
        'new' => 3
    ], 
    'd' => [
        'old' => 4
    ]
];
```