<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\NotNullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
