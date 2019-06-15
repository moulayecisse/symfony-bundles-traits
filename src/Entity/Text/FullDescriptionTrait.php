<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\Text;

use Doctrine\ORM\Mapping as ORM;

trait FullDescriptionTrait
{
    /**
     * FullDescription
     *
     * @var string
     *
     * @ORM\Column(type="text")
     */
    protected $fullDescription;

    /**
     * Set fullDescription
     *
     * @param  string $fullDescription
     * @return self
     */
    public function setFullDescription(string $fullDescription) : self
    {
        $this->fullDescription = $fullDescription;

        return $this;
    }

    /**
     * Get fullDescription
     *
     * @return string|null
     */
    public function getFullDescription() : ?string
    {
        return $this->fullDescription;
    }
}
