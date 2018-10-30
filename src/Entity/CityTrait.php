<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


Trait CityTrait
{
    /**
     * City
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    private $city;

    /**
     * Set city
     *
     * @param  string $city
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
}