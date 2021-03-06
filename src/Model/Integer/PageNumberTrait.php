<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\Integer;

trait PageNumberTrait
{
    /**
     * PageNumber
     *
     * @var int
     */
    protected $pageNumber;

    /**
     * Set pageNumber
     *
     * @param  int $pageNumber
     *
     * @return self
     */
    public function setPageNumber(?int $pageNumber) : self
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
