<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


Trait EmailTrait
{
    /**
     * Name
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=true)
     *
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    private $email;

    /**
     * Set email
     *
     * @param  string $email
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
}