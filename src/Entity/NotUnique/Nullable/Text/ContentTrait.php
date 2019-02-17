<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ContentTrait
{
    /**
     * Content
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=true, unique=false)
     */
    protected $content;

    /**
     * Set content
     *
     * @param  string $content
     * @return self
     */
    public function setContent(string $content) : self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent() : ?string
    {
        return $this->content;
    }
}
