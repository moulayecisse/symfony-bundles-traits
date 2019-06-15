<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullContentTrait
{
    /**
     * FullContent
     *
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $fullContent;

    /**
     * Set fullContent
     *
     * @param  string $fullContent
     * @return self
     */
    public function setFullContent(string $fullContent) : self
    {
        $this->fullContent = $fullContent;

        return $this;
    }

    /**
     * Get fullContent
     *
     * @return string|null
     */
    public function getFullContent() : ?string
    {
        return $this->fullContent;
    }
}
