<?php

namespace Calculator\Calculation;

class Substraction implements TwoDigitCalculation
{

    public function calculate($a, $b)
    {
        return $a - $b;
    }
}
