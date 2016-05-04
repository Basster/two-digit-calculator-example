<?php

namespace Calculator\Calculation;

class Multiplication implements TwoDigitCalculation
{

    public function calculate($a, $b)
    {
        return $a * $b;
    }
}
