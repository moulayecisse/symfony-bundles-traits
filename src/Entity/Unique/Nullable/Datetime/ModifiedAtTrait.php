<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\Unique\Nullable\Datetime;


use Doctrine\ORM\Mapping as ORM;

/**
 * trait DateTrait.
 */
trait ModifiedAtTrait
{
    /**
     * ModifiedAt
     *
     * @var \DateTime
     *
     * @ORM\Column(type="datetime", nullable=true, unique=true)
     */
    protected $modifiedAt;

    /**
     * Set ModifiedAt.
     *
     * @param \DateTime $modifiedAt Content
     *
     * @return self
     */
    public function setModifiedAt(DateTime $modifiedAt): self
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Get ModifiedAt.
     *
     * @return \DateTime|null
     */
    public function getModifiedAt(): ?DateTime
    {
        return $this->modifiedAt;
    }
}
