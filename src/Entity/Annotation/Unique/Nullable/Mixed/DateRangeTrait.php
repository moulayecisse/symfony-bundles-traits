<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Entity\Annotation\Unique\Nullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
