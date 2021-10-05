<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\NotUnique\Nullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
