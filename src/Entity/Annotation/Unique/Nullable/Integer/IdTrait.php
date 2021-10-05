<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait IdTrait
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", unique: true, nullable=true)
     * @ORM\GeneratedValue
     */
    protected int $id;

    public function getId(): int
    {
        return $this->id;
    }
}
