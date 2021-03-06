<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait CityTrait
{
    /**
     * City
     *
     * @var string|null
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $city;

    /**
     * Set city
     *
     * @param  string $city
     * @return self
     */
    public function setCity(?string $city) : self
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
