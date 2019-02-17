<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait PasswordTrait
{
    /**
     * Name
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=true)
     *
     * @Assert\NotBlank(message="Le mot de passe doit être renseigné")
     */
    private $password;

    /**
     * Set password
     *
     * @param  string $password
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string|null
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
}
