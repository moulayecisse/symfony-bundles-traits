<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait PhoneTrait
{
    /**
     * Phone
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Phone;

    /**
     * Set Phone
     *
     * @param  string $Phone
     * @return self
     */
    public function setPhone(string $Phone) : self
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * Get Phone
     *
     * @return string|null
     */
    public function getPhone() : ?string
    {
        return $this->Phone;
    }
}