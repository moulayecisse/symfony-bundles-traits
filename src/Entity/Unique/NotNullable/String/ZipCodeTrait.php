<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait ZipCodeTrait
{
    /**
     * ZipCode
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false, unique=true)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $zipCode;

    /**
     * Set zipCode
     *
     * @param  string $zipCode
     * @return self
     */
    public function setZipCode(string $zipCode) : self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string|null
     */
    public function getZipCode() : ?string
    {
        return $this->zipCode;
    }
}
