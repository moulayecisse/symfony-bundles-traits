<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;

Trait ResumeTrait
{
    /**
     * Resume
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $resume;

    /**
     * Set resume
     *
     * @param  string $resume
     * @return self
     */
    public function setResume(string $resume) : self
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume() : string
    {
        return $this->resume;
    }
}