<?php

namespace Cisse\Bundle\TraitsBundle\Model\Nullable\Mixed;

use Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\DateEndTrait;
use Cisse\Bundle\TraitsBundle\Model\Nullable\DateTime\DateStartTrait;

trait DateRangeTrait
{
    use DateStartTrait;
    use DateEndTrait;
}
