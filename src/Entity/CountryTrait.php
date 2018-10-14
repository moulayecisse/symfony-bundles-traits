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


Trait CountryTrait
{
    /**
     * Country
     *
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    private $country;

    /**
     * Set country
     *
     * @param  string $country
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
}