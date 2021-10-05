<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", unique: false, nullable=false)
     * @ORM\GeneratedValue
     */
    protected int $id;

    public function getId(): int
    {
        return $this->id;
    }
}
