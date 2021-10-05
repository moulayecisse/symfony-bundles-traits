<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\NotUnique\Nullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
