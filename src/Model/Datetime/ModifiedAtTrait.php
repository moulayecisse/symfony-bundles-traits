<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\Datetime;

use DateTime;

/**
 * trait DateTrait.
 */
trait ModifiedAtTrait
{
    /**
     * ModifiedAt
     *
     * @var DateTime
     */
    protected $modifiedAt;

    /**
     * Set ModifiedAt.
     *
     * @param DateTime $modifiedAt Content
     *
     * @return self
     */
    public function setModifiedAt(?Datetime $modifiedAt): self
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    /**
     * Get ModifiedAt.
     *
     * @return DateTime|null
     */
    public function getModifiedAt(): ?DateTime
    {
        return $this->modifiedAt;
    }
}
