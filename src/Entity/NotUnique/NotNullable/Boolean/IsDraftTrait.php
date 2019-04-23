<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Boolean;

use Doctrine\ORM\Mapping as ORM;

trait IsDraftTrait
{
    /**
     * IsDraft
     *
     * @var bool
     *
     * @ORM\Column(type="boolean", nullable=false, unique=false)
     */
    protected $isDraft;

    /**
     * Set isDraft
     *
     * @param  bool $isDraft
     *
     * @return self
     */
    public function setIsDraft(bool $isDraft) : self
    {
        $this->isDraft = $isDraft;

        return $this;
    }

    /**
     * Get isDraft
     *
     * @return bool|null
     */
    public function getIsDraft() : bool
    {
        return $this->isDraft;
    }
}
