<?php

namespace Calculator;

use Calculator\Calculation\CalculationFactory;
use Calculator\Event\CalculateEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;

class TwoDigitCalculator
{
    private $calculationFactory;

    private $dispatcher;


    public function __construct()
    {
        $this->dispatcher = new EventDispatcher();
        
        // POST /orders
        // GET /order/1
        
        $this->calculationFactory = new CalculationFactory($this->dispatcher);
    }

    public function calculate($a, $b, $operand)
    {
        $event = new CalculateEvent($a, $b, $operand);
        $this->dispatcher->dispatch('event.calculate', $event);
        return $event->getResult();
    }
}
