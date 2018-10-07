<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait PageNumberTrait
{
    /**
     * PageNumber
     *
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pageNumber;

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
     * @return int
     */
    public function getPageNumber() : int
    {
        return $this->pageNumber;
    }
}