<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Json;

use App\Entity\User;
use Doctrine\ORM\Mapping as ORM;

trait RolesTrait
{
    /**
     * @ORM\Column(type="json", unique=true, nullable=true)
     */
    protected ?array $roles = [USER::ROLE_USER];

    /**
     * @see UserInterface
     */
    public function getRoles(): ?array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(?array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
}
