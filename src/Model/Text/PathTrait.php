<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\Text;

trait PathTrait
{
    /**
     * Path
     *
     * @var string
     */
    protected $path;

    /**
     * Set path
     *
     * @param  string $path
     * @return self
     */
    public function setPath(?string $path) : self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string|null
     */
    public function getPath() : ?string
    {
        return $this->path;
    }
}
