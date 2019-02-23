<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03.
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait BiographyTrait
{
    /**
     * Name.
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     *
     * @Assert\Length(max=255)
     */
    protected $biography;

    /**
     * Set biography.
     *
     * @param string $biography Content
     *
     * @return self
     */
    public function setBiography(?string $biography): self
    {
        $this->biography = $biography;

        return $this;
    }

    /**
     * Get biography.
     *
     * @return string|null
     */
    public function getBiography(): ?string
    {
        return $this->biography;
    }
}
