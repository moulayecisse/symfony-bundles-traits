<?php
namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Decimal;

trait PriceTrait
{
    protected ?int $price;

    public function setPrice(?int $price) : self
    {
        $this->price = $price;

        return $this;
    }

    public function getPrice() : ?int
    {
        return $this->price;
    }
}
