<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Association;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

trait UpdatedByTrait
{
    /**
     * @ORM\ManyToOne(targetEntity: User::classt)
     * @ORM\JoinColumn(unique=false, nullable= false)
     */
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
