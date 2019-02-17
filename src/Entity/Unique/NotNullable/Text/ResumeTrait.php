<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;

trait ResumeTrait
{
    /**
     * Resume
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=false, unique=true)
     */
    protected $resume;

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
     * @return string|null
     */
    public function getResume() : ?string
    {
        return $this->resume;
    }
}
