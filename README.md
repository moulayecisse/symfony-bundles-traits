SYMFONY TRAITS
===============

Symfony Traits is useful trait that will help you easily create your Symfony entities

## Installation

Symfony traits uses Composer.

```
composer require cisse/symfony-traits
```

## Usage

```php
<?php

require __DIR__.'/vendor/autoload.php';

use Cisse\Traits\Entity\AddressTrait;

class Foo{
    use AddressTrait;
    // That's it
}

$foo = new Foo();

$foo->setAddress('your address'); // Return $foo.
$foo->getAddress(); // Return address

```

## Notes

This component is a work in progress, and it is target for my own usages. But if you like it feel free to use it ;)