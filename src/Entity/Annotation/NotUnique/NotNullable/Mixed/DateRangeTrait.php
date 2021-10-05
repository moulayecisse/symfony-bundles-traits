<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\NotNullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
