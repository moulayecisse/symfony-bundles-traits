<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PriorityTrait
{
    /**
     * Priority
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true, unique=false)
     */
    protected $priority;

    /**
     * Set Priority
     *
     * @param  int $priority
     *
     * @return self
     */
    public function setPriority(?int $priority) : self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get Priority
     *
     * @return int|null
     */
    public function getPriority() : ?int
    {
        return $this->priority;
    }
}
