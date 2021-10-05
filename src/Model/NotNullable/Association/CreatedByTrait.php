<?php

namespace Cisse\Bundle\TraitsBundle\Model\NotNullable\Association;

use App\Entity\User;

trait CreatedByTrait
{
    protected User $createdBy;

    public function getCreatedBy(): User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(User $user): self
    {
        $this->createdBy = $user;

        return $this;
    }
}
