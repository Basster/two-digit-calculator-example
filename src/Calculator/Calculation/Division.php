<?php

namespace Calculator\Calculation;

use Calculator\Exception\DivideByZeroException;

class Division implements TwoDigitCalculation
{
    public function calculate($a, $b)
    {
        if ($b === 0) {
            throw new DivideByZeroException();
        }
        return $a / $b;
    }
}
