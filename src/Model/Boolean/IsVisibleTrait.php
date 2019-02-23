<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\Boolean;

trait IsVisibleTrait
{
    /**
     * IsVisible
     *
     * @var bool|null
     */
    protected $isVisible;

    /**
     * Set isVisible
     *
     * @param  bool $isVisible
     *
     * @return self
     */
    public function setIsVisible(?bool $isVisible) : self
    {
        $this->isVisible = $isVisible;

        return $this;
    }

    /**
     * Get isVisible
     *
     * @return bool|null
     */
    public function getIsVisible() : ?bool
    {
        return $this->isVisible;
    }
}
