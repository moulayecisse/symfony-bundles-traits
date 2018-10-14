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


Trait ZipCodeTrait
{
    /**
     * ZipCode
     *
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    private $zipCode;

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
     * @return string
     */
    public function getZipCode() : string
    {
        return $this->zipCode;
    }
}