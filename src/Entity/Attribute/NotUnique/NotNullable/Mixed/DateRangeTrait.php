<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\NotNullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
