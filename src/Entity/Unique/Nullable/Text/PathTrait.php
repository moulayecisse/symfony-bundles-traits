<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Unique\Nullable\Text;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait PathTrait
{
    /**
     * Path
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=true, unique=true)
     *
     * @Assert\NotNull()
     */
    protected $path;

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
