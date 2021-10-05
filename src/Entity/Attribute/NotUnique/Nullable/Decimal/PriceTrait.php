<?php
namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Decimal;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PriceTrait
{
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, unique: false, nullable: true)]
    protected ?float $price;

    public function setPrice(?float $price) : self
    {
        $this->price = $price;

        return $this;
    }

    public function getPrice() : ?float
    {
        return $this->price;
    }
}
