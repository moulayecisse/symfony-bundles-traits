<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\String;

trait BriefContentTrait
{
    /**
     * BriefContent
     *
     * @var string
     */
    protected $briefContent;

    /**
     * Set briefContent
     *
     * @param  string $briefContent
     * @return self
     */
    public function setBriefContent(?string $briefContent) : self
    {
        $this->briefContent = $briefContent;

        return $this;
    }

    /**
     * Get briefContent
     *
     * @return string|null
     */
    public function getBriefContent() : ?string
    {
        return $this->briefContent;
    }
}
