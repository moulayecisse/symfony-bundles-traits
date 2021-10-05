<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", unique: true, nullable=false)
     * @ORM\GeneratedValue
     */
    protected int $id;

    public function getId(): int
    {
        return $this->id;
    }
}
