<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Association;

use App\Entity\User;

trait UpdatedByTrait
{
    protected ?User $updatedBy = null;

    public function getUpdatedBy(): ?User
    {
        return $this->updatedBy;
    }

    public function setUpdatedBy(?User $user): self
    {
        $this->updatedBy = $user;

        return $this;
    }
}
