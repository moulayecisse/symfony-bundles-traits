<?php
/**
 * Created by PhpStorm.
 * User: moulaye
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

Trait PathTrait
{
    /**
     * Path
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=true)
     *
     * @Assert\NotNull()
     */
    private $path;

    /**
     * Set path
     *
     * @param  string $path
     * @return self
     */
    public function setPath(string $path) : self
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