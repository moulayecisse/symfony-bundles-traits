<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\String;

use Doctrine\ORM\Mapping as ORM;

trait PhoneTrait
{
    /**
     * Phone
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=false, unique=false)
     */
    protected $phone;

    /**
     * Set Phone
     *
     * @param  string $phone
     * @return self
     */
    public function setPhone(string $phone) : self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get Phone
     *
     * @return string|null
     */
    public function getPhone() : string
    {
        return $this->phone;
    }
}
