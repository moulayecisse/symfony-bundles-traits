<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\NotNullable\Association;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

trait UpdatedByTrait
{
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(unique: true, nullable: false)]
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
