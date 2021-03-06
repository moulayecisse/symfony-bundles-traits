<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait RankTrait
{
    /**
     * Rank
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=false, unique=false)
     */
    protected $rank;

    /**
     * Set Rank
     *
     * @param  int|null $rank
     *
     * @return self
     */
    public function setRank(int $rank) : self
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Get Rank
     *
     * @return int|null
     */
    public function getRank() : int
    {
        return $this->rank;
    }
}
