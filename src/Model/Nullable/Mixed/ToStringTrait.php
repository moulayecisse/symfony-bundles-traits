<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Mixed;

trait ToStringTrait
{
    public function __toString(): string
    {
        switch (true) {
            case method_exists($this, 'getFullName'):
                return "{$this->getFullName()}";
            case method_exists($this, 'getFirstName') && method_exists($this, 'getLastName'):
                return "{$this->getFirstName()} {$this->getLastName()}";
            case method_exists($this, 'getFirstName'):
                return "{$this->getFirstName()}}";
            case method_exists($this, 'getLastName'):
                return "{$this->getLastName()}}";
            case method_exists($this, 'getLabel'):
                return "{$this->getLabel()}";
            case method_exists($this, 'getTitle'):
                return "{$this->getTitle()}";
            case method_exists($this, 'getName'):
                return "{$this->getName()}";
            default:
                return "$this->id";
        }
    }
}
