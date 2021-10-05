<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Association;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

trait CreatedByTrait
{
    /**
     * @ORM\ManyToOne(targetEntity: User::classt)
     * @ORM\JoinColumn(unique=false, nullable= false)
     */
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
