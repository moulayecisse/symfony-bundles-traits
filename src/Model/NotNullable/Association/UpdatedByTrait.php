<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Association;

use App\Entity\User;

trait UpdatedByTrait
{
    protected User $updatedBy;

    public function getUpdatedBy(): User
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(User $user): self
    {
        $this->updatedBy = $user;

        return $this;
    }
}
