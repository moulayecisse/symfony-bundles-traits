<?php

namespace Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\Mixed;

use Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Entity\Attribute\Unique\Nullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
