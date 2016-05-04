<?php

namespace Calculator\Calculation;

class Addition implements TwoDigitCalculation
{
    public function calculate($a, $b)
    {
        return $a + $b;
    }
}
