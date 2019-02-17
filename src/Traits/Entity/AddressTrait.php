<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait AddressTrait
{
    /**
     * Address
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     *
     * @Assert\NotNull()
     */
    private $address;

    /**
     * Set address
     *
     * @param  string $address
     * @return self
     */
    public function setAddress(string $address) : self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string|null
     */
    public function getAddress() : ?string
    {
        return $this->address;
    }
}
