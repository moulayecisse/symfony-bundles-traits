<?php /** @noinspection MessDetectorValidationInspection */

/**
 * Created by PhpStorm.
 * User: moulaye.c@gmail.com
 * Date: 27/08/2018
 * Time: 00:56
 */

namespace Cisse\Traits\Entity\Unique\NotNullable\Integer;

use Doctrine\ORM\Mapping as ORM;

/**
 * trait IdTrait
 *
 * @package Cisse\Traits
 */
trait IdTrait
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", nullable=false, unique=true)
     *
     * @noinspection PhpPropertyNamingConventionInspection
     */
    protected $id;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
