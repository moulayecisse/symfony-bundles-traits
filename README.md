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

use Cisse\Bundle\TraitsBundle\Entity\Annotation\NoUnique\Nullable\Text\AddressTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\NoUnique\Nullable\Json\RolesTrait;

class Foo{
    use AddressTrait;
    // Declaration
    
    use RolesTrait {
        RolesTrait::__construct as private __constructRoles;
    }
    // Declaration with constructor alias

    public function __construct()
    {
        $this->__constructRoles();
        // Calling constructor from withing trait
    }
}

$foo = new Foo();

$foo->setAddress('your address'); // Return $foo.
$foo->getAddress(); // Return address

```

## Notes

This component is a work in progress, and it is target for my own usages. But if you like it feel free to use it ;)

## Versions

8.0.4