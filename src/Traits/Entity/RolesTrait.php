<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

trait RolesTrait
{
    /**
     * Name
     *
     * @var array
     *
     * @ORM\Column(type="json", nullable=true)
     */
    private $roles;

    public function __construct()
    {
        $this->roles = [];
    }

    /**
     * Set roles
     *
     * @param  array $roles
     * @return self
     */
    public function setRoles(array $roles) : self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return String[]
     */
    public function getRoles() : array
    {
        return array_unique(array_merge([], is_array($this->roles) ? $this->roles : []));
    }

    /**
     * Reset roles
     *
     * @return self
     */
    public function resetRoles() : self
    {
        $this->roles = [];

        return $this;
    }

    /**
     * @param string $role
     *
     * @return self
     */
    public function addRole(string $role): self
    {
        if (!in_array($role, $this->roles)) {
            $this->roles[] = $role;
        }

        return $this;
    }
}
