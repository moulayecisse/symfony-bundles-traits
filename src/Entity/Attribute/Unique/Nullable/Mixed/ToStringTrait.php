<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Mixed;

trait ToStringTrait
{
    public function __toString(): string
    {
        return match (true) {
            method_exists($this, 'getFullName') => "{$this->getFullName()}",
            method_exists($this, 'getFirstName') && method_exists($this, 'getLastName') => "{$this->getFirstName()} {$this->getLastName()}",
            method_exists($this, 'getFirstName') => "{$this->getFirstName()}}",
            method_exists($this, 'getLastName') => "{$this->getLastName()}}",
            method_exists($this, 'getLabel') => "{$this->getLabel()}",
            method_exists($this, 'getTitle') => "{$this->getTitle()}",
            method_exists($this, 'getName') => "{$this->getName()}",
            default => "$this->id",
        };
    }
}
