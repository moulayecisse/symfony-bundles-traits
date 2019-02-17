<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\Integer;

use Doctrine\ORM\Mapping as ORM;

trait PageNumberTrait
{
    /**
     * PageNumber
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true, unique=false)
     */
    protected $pageNumber;

    /**
     * Set pageNumber
     *
     * @param  int $pageNumber
     *
     * @return self
     */
    public function setPageNumber(int $pageNumber) : self
    {
        $this->pageNumber = $pageNumber;

        return $this;
    }

    /**
     * Get pageNumber
     *
     * @return int|null
     */
    public function getPageNumber() : ?int
    {
        return $this->pageNumber;
    }
}
