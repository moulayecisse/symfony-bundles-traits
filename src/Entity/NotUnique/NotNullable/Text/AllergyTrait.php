<?php
/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 01:03
 */

namespace Cisse\Traits\Entity\NotUnique\NotNullable\Text;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait AllergyTrait
{
    /**
     * Allergy
     *
     * @var string
     *
     * @ORM\Column(type="text", nullable=false, unique=false)
     *
     * @Assert\NotNull()
     */
    protected $allergy;

    /**
     * Set allergy
     *
     * @param  string $allergy
     * @return self
     */
    public function setAllergy(string $allergy) : self
    {
        $this->allergy = $allergy;

        return $this;
    }

    /**
     * Get allergy
     *
     * @return string|null
     */
    public function getAllergy() : ?string
    {
        return $this->allergy;
    }
}
