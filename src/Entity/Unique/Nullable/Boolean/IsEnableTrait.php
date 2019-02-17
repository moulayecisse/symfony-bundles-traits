<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\Nullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsEnableTrait
{
    /**
     * IsEnable
     *
     * @var bool|null
     *
     * @ORM\Column(type="boolean", nullable=true, unique=true)
     */
    protected $isEnable;

    /**
     * Set isEnable
     *
     * @param  bool $isEnable
     *
     * @return self
     */
    public function setIsEnable(bool $isEnable) : self
    {
        $this->isEnable = $isEnable;

        return $this;
    }

    /**
     * Get isEnable
     *
     * @return bool|null
     */
    public function getIsEnable() : ?bool
    {
        return $this->isEnable;
    }
}
