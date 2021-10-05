<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Association;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

trait CreatedByTrait
{
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(unique: false, nullable: true)]
    protected ?User $createdBy = null;

    public function getCreatedBy(): ?User
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?User $user): self
    {
        $this->createdBy = $user;

        return $this;
    }
}
