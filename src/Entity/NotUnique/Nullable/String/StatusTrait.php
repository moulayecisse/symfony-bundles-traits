<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\String;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait StatusTrait
{
    /**
     * Status
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true, unique=false)
     * @Assert\Type(type="string")
     * @Assert\NotNull()
     */
    protected $status;

    /**
     * Set status
     *
     * @param  string $status
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
}
