<?php

namespace Calculator\Calculation;

class BaseSqrt implements TwoDigitCalculation
{
    public function calculate($a, $b = 2)
    {
        return pow($a, 1 / $b);
    }
}
