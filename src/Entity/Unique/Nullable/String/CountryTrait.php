<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait CountryTrait
{
    /**
     * Country
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=true)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $country;

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
