<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Model\NotUnique\Nullable\String;

trait IsbnTrait
{
    /**
     * Isbn
     *
     * @var string
     */
    protected $isbn;

    /**
     * Set isbn
     *
     * @param  string $isbn
     * @return self
     */
    public function setIsbn(?string $isbn) : self
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string|null
     */
    public function getIsbn() : ?string
    {
        return $this->isbn;
    }
}
