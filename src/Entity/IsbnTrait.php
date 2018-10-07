<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait IsbnTrait
{
    /**
     * Isbn
     *
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $isbn;

    /**
     * Set isbn
     *
     * @param  string $isbn
     * @return self
     */
    public function setIsbn(string $isbn) : self
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn() : string
    {
        return $this->isbn;
    }
}