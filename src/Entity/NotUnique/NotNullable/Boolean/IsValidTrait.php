<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsValidTrait
{
    /**
     * IsValid
     *
     * @var bool
     *
     * @ORM\Column(type="boolean", nullable=false, unique=false)
     */
    protected $isValid;

    /**
     * Set isValid
     *
     * @param  bool $isValid
     *
     * @return self
     */
    public function setIsValid(bool $isValid) : self
    {
        $this->isValid = $isValid;

        return $this;
    }

    /**
     * Get isValid
     *
     * @return bool|null
     */
    public function getIsValid() : ?bool
    {
        return $this->isValid;
    }
}
