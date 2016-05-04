<?php

namespace Calculator\Calculation;

class Power implements TwoDigitCalculation
{
    public function calculate($a, $b)
    {
        return pow($a, $b);
    }
}
